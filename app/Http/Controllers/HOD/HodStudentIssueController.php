<?php

namespace App\Http\Controllers\HOD;

use App\Models\HOD\issue_timeline;
use App\Http\Requests\Storeissue_timelineRequest;
use App\Http\Requests\Updateissue_timelineRequest;
use App\Http\Controllers\Controller;
use App\Models\staff;
use App\Models\student_issue;
use App\Models\HOD\exam_section_issue;
use DB;

use Auth;

class HodStudentIssueController extends Controller
{
    
    public function index()
    {
        
        $user = Auth::user();
        $staff = staff::all();

        // Fetch student issues with necessary relationships and conditional ordering
        $student_issues = student_issue::with(['issue_timeline.user', 'exam_section_issue.staff'])
            ->leftJoin('exam_section_issues', 'exam_section_issues.id', '=', 'student_issues.exam_section_issue_id')
            ->orderByRaw("CASE 
                WHEN exam_section_issues.category_name IS NULL THEN 0
                ELSE 1
            END, exam_section_issues.category_name DESC, student_issues.created_at DESC")
            ->select('student_issues.*', 'exam_section_issues.category_name')
            ->get();

        $examSectionIssues = exam_section_issue::all();

        // Calculate the required counts
        $totalUnusualIssues = student_issue::where(function ($query) {
            $query->whereHas('exam_section_issue', function ($query) {
                $query->where('category_name', 'unusual');
            })->orWhereNull('exam_section_issue_id');
        })->count();

        $totalRegularIssues = student_issue::whereHas('exam_section_issue', function($query) {
            $query->where('category_name', 'regular');
        })->count();

        // Assuming resolved status is stored in 'issue_timelines' table with a value 'resolved'
        $resolvedUnusualIssues = student_issue::whereHas('exam_section_issue', function($query) {
            $query->where('category_name', 'unusual');
        })->whereHas('issue_timeline', function($query) {
            $query->where('status', 'resolved');
        })->count();

        $resolvedRegularIssues = student_issue::whereHas('exam_section_issue', function($query) {
            $query->where('category_name', 'regular');
        })->whereHas('issue_timeline', function($query) {
            $query->where('status', 'resolved');
        })->count();

        // Pass counts to the view
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

        return view('HOD.viewstudentissues', compact('student_issues', 'staff', 'examSectionIssues', 'counts',
        'staffIssuesData', 'weeklyTotalData', 'monthlyTotalData','issueRelatedData','issue_timeline'));
    }



    
    private function prepareChartData($student_issues, $staff,$issue_timeline)
    {
        $weekData = [];
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
                
                // Increment the count for the issue category
                $weekData[$week][$category]++;
                
                // Add logic to count follow-up statuses
                $issueStatus = $issue->issue_timeline->pluck('status')->first() ?? 'unknown';
                if ($issueStatus === 'resolved') {
                    $resolvedKey = 'resolved_' . $category;
                    $weekData[$week][$resolvedKey]++;
                } elseif ($issueStatus === 'follow-up') {
                    $followUpKey = 'followup_' . $category;
                    $weekData[$week][$followUpKey]++;
                }
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
            $issueStatus = $issue->issue_timeline->pluck('status')->first() ?? 'unknown';
            if ($issueStatus === 'resolved') {
                $resolvedKey = 'resolved_' . $category;
                $weekData[$week][$resolvedKey]++;
            } elseif ($issueStatus === 'follow-up') {
                $followUpKey = 'followup_' . $category;
                $weekData[$week][$followUpKey]++;
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
            } elseif ($issueStatus === 'follow-up') {
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



    public function show(student_issue $student_issue)
    {
        $student_issue=student_issue::with('issue_timeline.user')->where('student_issues.id',$student_issue->id)->first();
        //dd($student_issue);
        return view('HOD.issue_timeline',compact('student_issue'));
    }


}