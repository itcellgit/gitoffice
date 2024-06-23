<?php

namespace App\Http\Controllers\NonTeaching;

use App\Models\Non_Teaching\issue_timeline;
use App\Http\Requests\Storeissue_timelineRequest;
use App\Http\Requests\Updateissue_timelineRequest;
use App\Http\Controllers\Controller;
use App\Models\staff;
use App\Models\student_issue;
use App\Models\Non_Teaching\exam_section_issue;

use Auth;

use Carbon\Carbon;

class StaffStudentIssueController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $staff = Staff::where('user_id', $user->id)->first();

        $student_issues = student_issue::with(['issue_timeline.user', 'exam_section_issue.staff'])
            ->whereHas('exam_section_issue.staff', function ($query) use ($staff) {
                $query->where('id', $staff->id);
            })
            ->latest()
            ->get();

        $examSectionIssues = exam_section_issue::all();

        $totalUnusualIssues = student_issue::where(function ($query) {
            $query->whereHas('exam_section_issue', function ($query) {
                $query->where('category_name', 'unusual');
            })->orWhereNull('exam_section_issue_id');
        })->count();

        $totalRegularIssues = student_issue::whereHas('exam_section_issue', function ($query) {
            $query->where('category_name', 'regular');
        })->count();

        $resolvedUnusualIssues = student_issue::whereHas('issue_timeline', function ($query) {
            $query->where('status', 'resolved')->whereHas('student_issue.exam_section_issue', function ($q) {
                $q->where('category_name', 'unusual');
            });
        })->count();

        $resolvedRegularIssues = student_issue::whereHas('issue_timeline', function ($query) {
            $query->where('status', 'resolved')->whereHas('student_issue.exam_section_issue', function ($q) {
                $q->where('category_name', 'regular');
            });
        })->count();

        $counts = [
            'total_unusual_issues' => $totalUnusualIssues,
            'total_regular_issues' => $totalRegularIssues,
            'resolved_unusual_issues' => $resolvedUnusualIssues,
            'resolved_regular_issues' => $resolvedRegularIssues,
        ];

        $latest_issue = student_issue::latest()->first();
        session(['latest_issue' => $latest_issue]);

        // Data preparation
        $issues = student_issue::with('exam_section_issue')->get();
        $issue_timeline=issue_timeline::all();

        $staffIssuesData = $this->prepareChartData($issues, $staff,$issue_timeline);
        $weeklyTotalData = $this->prepareWeeklyTotalData($issues,$issue_timeline);
        $monthlyTotalData = $this->prepareMonthlyTotalData($issues);
        $issueRelatedData = $this->prepareIssueRelatedData($issues);

        return view('Staff.Non-Teaching.viewstudentissues', compact(
            'student_issues', 'staff', 'examSectionIssues', 
            'staffIssuesData', 'weeklyTotalData', 'monthlyTotalData','issueRelatedData','counts','issue_timeline'
        ));
    }



    

    private function prepareChartData($student_issues, $staff,$issue_timeline)
{
    $weekData = [];
    $data=[];
    foreach ($student_issues as $issue) {
        if ($issue->exam_section_issue && $issue->exam_section_issue->staff_id == $staff->id) {
            $startOfWeek = Carbon::parse($issue->created_at)->startOfWeek();
            $endOfWeek = Carbon::parse($issue->created_at)->endOfWeek();
            $week = $startOfWeek->format('d M') . ' to ' . $endOfWeek->format('d M');
            $category = $issue->exam_section_issue->category_name ?? 'unusual';
            
            // Initialize the array for the week if not already done
            if (!isset($weekData[$week])) {
                $weekData[$week] = [
                    'regular' => 0,
                    'unusual' => 0,
                    'resolved_regular' => 0,
                    'resolved_unusual' => 0,
                    'followup_regular' => 0,
                    'followup_unusual' => 0,
                ];
            }
            
            $weekData[$week][$category]++;
           
            $issueStatus = issue_timeline::where('student_issue_id',$issue->id)->latest()->take(1)->pluck('status')->first() ?? 'unknown';
            $data[$issue->id]=issue_timeline::where('student_issue_id',$issue->id)->latest()->first();
            if ($issueStatus === 'resolved') {
                $resolvedKey = 'resolved_' . $category;
                $weekData[$week][$resolvedKey]++;
                $weekData[$week][$category]--;
            } elseif ($issueStatus === 'followup') {
                $followUpKey = 'followup_' . $category;
                $weekData[$week][$followUpKey]++;
                $weekData[$week][$category]--;
              //  dd($weekData[$week][$followUpKey]);
            }
            
        }
    }
  //  dd($data);
    ksort($weekData);

    return [
        'labels' => array_keys($weekData),
        'regular' => array_map(fn($week) => $week['regular'] ?? 0, $weekData),
        'unusual' => array_map(fn($week) => $week['unusual'] ?? 0, $weekData),
        'resolved_regular' => array_map(fn($week) => $week['resolved_regular'] ?? 0, $weekData),
        'resolved_unusual' => array_map(fn($week) => $week['resolved_unusual'] ?? 0, $weekData),
        'followup_regular' => array_map(fn($week) => $week['followup_regular'] ?? 0, $weekData),
        'followup_unusual' => array_map(fn($week) => $week['followup_unusual'] ?? 0, $weekData),
    ];
}



private function prepareWeeklyTotalData($issues,$issue_timeline)
{
    $weekData = [];
    foreach ($issues as $issue) {
        $startOfWeek = Carbon::parse($issue->created_at)->startOfWeek();
        $endOfWeek = Carbon::parse($issue->created_at)->endOfWeek();
        $week = $startOfWeek->format('d F') . ' to ' . $endOfWeek->format('d F');
        $category = $issue->exam_section_issue->category_name ?? 'unusual';

        if (!isset($weekData[$week])) {
            $weekData[$week] = [
                'regular' => 0,
                'unusual' => 0,
                'resolved_regular' => 0,
                'resolved_unusual' => 0,
                'followup_regular' => 0,
                'followup_unusual' => 0,
            ];
        }

        $weekData[$week][$category]++;
        
        // Add logic to count follow-up statuses
        $issueStatus = issue_timeline::where('student_issue_id',$issue->id)->latest()->take(1)->pluck('status')->first() ?? 'unknown';
        $data[$issue->id]=issue_timeline::where('student_issue_id',$issue->id)->latest()->first();
        $issueStatus = $issue->issue_timeline->pluck('status')->first() ?? 'unknown';
        if ($issueStatus === 'resolved') {
            $resolvedKey = 'resolved_' . $category;
            $weekData[$week][$resolvedKey]++;
            $weekData[$week][$category]--;
        } elseif ($issueStatus === 'follow-up') {
            $followUpKey = 'followup_' . $category;
            $weekData[$week][$followUpKey]++;
            $weekData[$week][$category]--;
        }
    }

    ksort($weekData);

    return [
        'labels' => array_keys($weekData),
        'regular' => array_map(fn($week) => $week['regular'] ?? 0, $weekData),
        'unusual' => array_map(fn($week) => $week['unusual'] ?? 0, $weekData),
        'resolved_regular' => array_map(fn($week) => $week['resolved_regular'] ?? 0, $weekData),
        'resolved_unusual' => array_map(fn($week) => $week['resolved_unusual'] ?? 0, $weekData),
        'followup_regular' => array_map(fn($week) => $week['followup_regular'] ?? 0, $weekData),
        'followup_unusual' => array_map(fn($week) => $week['followup_unusual'] ?? 0, $weekData),
    ];
}


private function prepareMonthlyTotalData($issues)
{
    $monthData = [];
    foreach ($issues as $issue) {
        $month = Carbon::parse($issue->created_at)->format('F Y');
        $category = $issue->exam_section_issue->category_name ?? 'unusual';

        if (!isset($monthData[$month])) {
            $monthData[$month] = [
                'regular' => 0,
                'unusual' => 0,
                'resolved_regular' => 0,
                'resolved_unusual' => 0,
                'followup_regular' => 0,
                'followup_unusual' => 0,
            ];
        }

        $monthData[$month][$category]++;
        
        // Add logic to count follow-up statuses
        $issueStatus = $issue->issue_timeline->pluck('status')->first() ?? 'unknown';
        if ($issueStatus === 'resolved') {
            $resolvedKey = 'resolved_' . $category;
            $monthData[$month][$resolvedKey]++;
        } elseif ($issueStatus === 'followup') {
            $followUpKey = 'followup_' . $category;
            $monthData[$month][$followUpKey]++;
        }
    }

    ksort($monthData);

    return [
        'labels' => array_keys($monthData),
        'regular' => array_map(fn($month) => $month['regular'] ?? 0, $monthData),
        'unusual' => array_map(fn($month) => $month['unusual'] ?? 0, $monthData),
        'resolved_regular' => array_map(fn($month) => $month['resolved_regular'] ?? 0, $monthData),
        'resolved_unusual' => array_map(fn($month) => $month['resolved_unusual'] ?? 0, $monthData),
        'followup_regular' => array_map(fn($month) => $month['followup_regular'] ?? 0, $monthData),
        'followup_unusual' => array_map(fn($month) => $month['followup_unusual'] ?? 0, $monthData),
    ];
}


private function prepareIssueRelatedData($issues)
{
    $issueData = [];

    foreach ($issues as $issue) {
        if ($issue->exam_section_issue) {
            $examSectionIssueName = $issue->exam_section_issue->issues; // Assuming 'issues' is the field you want to use

            if (!isset($issueData[$examSectionIssueName])) {
                $issueData[$examSectionIssueName] = [
                    'count' => 0,
                    'resolved' => 0,
                    'followup' => 0,
                ];
            }

            $issueData[$examSectionIssueName]['count']++;
            
            // Add logic to count follow-up statuses
            $issueStatus = $issue->issue_timeline->pluck('status')->first() ?? 'unknown';
            if ($issueStatus === 'resolved') {
                $issueData[$examSectionIssueName]['resolved']++;
            } elseif ($issueStatus === 'follow-up') {
                $issueData[$examSectionIssueName]['followup']++;
            }
        }
    }

    ksort($issueData);

    return [
        'labels' => array_keys($issueData),
        'data' => array_map(fn($issue) => $issue['count'], $issueData),
        'resolved' => array_map(fn($issue) => $issue['resolved'], $issueData),
        'followup' => array_map(fn($issue) => $issue['followup'], $issueData),
    ];
}






    public function show(staff $staff,student_issue $student_issue)
    {
        $student_issue = student_issue::with('issue_timeline.user')
            ->where('student_issues.id', $student_issue->id)
            ->first();

        return view('Staff.Non-Teaching.issue_timeline', compact('student_issue','staff'));
    }
}
