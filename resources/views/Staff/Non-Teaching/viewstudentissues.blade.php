{{-- @extends('layouts.student_master') --}}
{{-- @extends('layouts.components.HOD.master-hod') --}}
@extends('layouts.components.staff.master-nonteaching')



@section('styles')

     <!-- CHOICES CSS -->
     <link rel="stylesheet" href="{{asset('build/assets/libs/choices.js/public/assets/styles/choices.min.css')}}">

     <!-- FLATPICKR CSS -->
     <link rel="stylesheet" href="{{asset('build/assets/libs/flatpickr/flatpickr.min.css')}}">

@endsection

@section('content')

<div class="content">
    <!-- Start::main-content -->
    <div class="main-content">
        <!-- Page Header -->
        <div class="block justify-between page-header sm:flex">
            <div>
                <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"></h3>
            </div>
            <ol class="flex items-center whitespace-nowrap min-w-0">
                <li class="text-sm">
                    <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M22 21H2V19H3V4C3 3.44772 3.44772 3 4 3H18C18.5523 3 19 3.44772 19 4V9H21V19H22V21ZM17 19H19V11H13V19H15V13H17V19ZM17 9V5H5V19H11V9H17ZM7 11H9V13H7V11ZM7 15H9V17H7V15ZM7 7H9V9H7V7Z"></path></svg>
                        My Dashboard
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12.1717 12.0005L9.34326 9.17203L10.7575 7.75781L15.0001 12.0005L10.7575 16.2431L9.34326 14.8289L12.1717 12.0005Z"></path></svg>
                    </a>
                </li>
            </ol>
        </div>
        <!-- Page Header Close -->

        <div class="grid grid-cols-12 gap-x-5">
                                <div class="col-span-12 md:col-span-6 xxl:col-span-3">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="flex">
                                                <div class="ltr:mr-3 rtl:ml-3">
                                                    <div class="avatar rounded-sm text-primary p-2.5 bg-primary/20 "><i
                                                        class="ti ti-users text-2xl leading-none"></i></div>
                                                    </div>
                                                    <div class="flex-1">
                                                        <p class="text-sm font-bold">Total Unusual Issue</p>
                                                        <div class="flex justify-between items-center">
                                                            <h5 class="mb-0 text-2xl font-semibold text-gray-800 dark:text-white">{{ $counts['total_unusual_issues'] }}</h5>
                                                            <span class="text-success badge bg-success/20 rounded-sm p-1"><i
                                                                class="ti ti-trending-up leading-none"></i> +1.03%</span>
                                                        </div>
                                                        <span class="text-xs text-gray-500 dark:text-white/70">This Month</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  
                                <div class="col-span-12 md:col-span-6 xxl:col-span-3">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="flex">
                                                <div class="ltr:mr-3 rtl:ml-3">
                                                    <div class="avatar rounded-sm text-secondary p-2.5 bg-secondary/20"><i
                                                        class="ti ti-users-minus text-2xl leading-none"></i></div>
                                                    </div>
                                                    <div class="flex-1">
                                                        <p class="text-sm font-bold">Total Regular Issues</p>
                                                        <div class="flex justify-between items-center">
                                                            <h5 class="mb-0 text-2xl font-semibold text-gray-800 dark:text-white">{{ $counts['total_regular_issues'] }}</h5>
                                                            <span class="text-success badge bg-success/20 rounded-sm p-1"><i
                                                                class="ti ti-trending-up leading-none"></i> +0.36%</span>
                                                        </div>
                                                        <span class=" text-gray-500 dark:text-white/70 text-xs">This Month</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                <div class="col-span-12 md:col-span-6 xxl:col-span-3">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="flex">
                                                <div class="ltr:mr-3 rtl:ml-3">
                                                    <div class="avatar rounded-sm text-warning p-2.5 bg-warning/20 "><i
                                                        class="ti ti-briefcase text-2xl leading-none"></i></div>
                                                    </div>
                                                    <div class="flex-1">
                                                        <p class="text-sm font-bold">Resolved Unusual Issues</p>
                                                        <div class="flex justify-between items-center">
                                                            <h5 class="mb-0 text-2xl font-semibold text-gray-800 dark:text-white">{{ $counts['resolved_unusual_issues'] }}</h5>
                                                            <span class="text-danger badge bg-danger/20 rounded-sm p-1"><i
                                                                class="ti ti-trending-down leading-none"></i> -1.28%</span>
                                                        </div>
                                                        <span class=" text-gray-500 dark:text-white/70 text-xs">This Month</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                <div class="col-span-12 md:col-span-6 xxl:col-span-3">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="flex">
                                                <div class="ltr:mr-3 rtl:ml-3">
                                                    <div class="avatar rounded-sm text-success p-2.5 bg-success/20 "><i
                                                        class="ti ti-chart-bar text-2xl leading-none"></i></div>
                                                    </div>
                                                    <div class="flex-1">
                                                        <p class="text-sm font-bold">Resolved Regular Issues</p>
                                                        <div class="flex justify-between items-center">
                                                            <h5 class="mb-0 text-2xl font-semibold text-gray-800 dark:text-white">{{ $counts['resolved_regular_issues'] }}</h5>
                                                            <span class="text-success badge bg-success/20 rounded-sm p-1"><i
                                                                class="ti ti-trending-down leading-none"></i>+4.25%</span>
                                                        </div>
                                                        <span class=" text-gray-500 dark:text-white/70 text-xs">This Month</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                            </div>


        <!-- Start::row-5 -->
        <div class="grid grid-cols-12 gap-x-6">
            <div class="col-span-12">
                <div class="box">
                <div class="box-header">
                    <div class="flex">
                        <h5 class="box-title my-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-church" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M3 21l18 0" />
                                <path d="M10 21v-4a2 2 0 0 1 4 0v4" />
                                <path d="M10 5l4 0" />
                                <path d="M12 3l0 5" />
                                <path d="M6 21v-7m-2 2l8 -8l8 8m-2 -2v7" />
                            </svg>
                             Student Issues
                        </h5>

                        <div class="avatar-container flex py-4">
                                                                    <div class="avatar-wrapper flex items-center">
                                                                        <div class="avatar rounded-sm p-1 bg-green-500 border-gray-900 border-2 w-6 h-6"></div>
                                                                        <div class="avatar-text font-bold ml-2 ">Resolved</div>
                                                                    </div>
            
                                                                    <div class="avatar-wrapper flex items-center mx-2">
                                                                        <div class="avatar rounded-sm p-1 bg-red-300 border-gray-900 border-2 w-6 h-6"></div>
                                                                        <div class="avatar-text font-bold ml-2">New Issue</div>
                                                                    </div>
            
                                                                    <!-- <div class="avatar-wrapper flex items-center mx-2">
                                                                        <div class="avatar rounded-sm p-1 bg-yellow-400 border-gray-900 border-2 w-6 h-6"></div>
                                                                        <div class="avatar-text font-bold ml-2">Recommended</div>
                                                                    </div> -->
            
                                                                    <div class="avatar-wrapper flex items-center">
                                                                        <div class="avatar rounded-sm p-1 border-gray-900 border-2 w-6 h-6"></div>
                                                                        <div class="avatar-text font-semibold ml-2">Follow Up</div>
                                                                    </div>
                                                                    
                                                                </div>


                    </div>
                </div>
                <div class="box-body">
                    <form action="{{ route('Staff.Non-Teaching.view') }}" method="get">
                        @csrf
                    
                        <div class="table-bordered table-auto rounded-sm ti-striped-table ti-custom-table-head overflow-auto">
                            <table id="grievance_table" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                <thead class="bg-gray-50 dark:bg-black/20">
                                    <tr>
                                        <th scope="col" class="dark:text-white/80">USN</th>
                                        <th scope="col" class="dark:text-white/80">Issue</th>
                                        <th scope="col" class="dark:text-white/80">Category</th>
                                        <th scope="col" class="dark:text-white/80">Description</th>
                                        <th scope="col" class="dark:text-white/80">Staff Incharge</th>
                                        <th scope="col" class="dark:text-white/80">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($student_issues as $issue)
                                        <tr>
                                            <td class="font-medium space-x-2 rtl:space-x-reverse {{ (count($issue->issue_timeline) > 0 && $issue->issue_timeline->last()->status == 'resolved') ? 'bg-green-500' : ((count($issue->issue_timeline) > 0) ? '' : 'bg-red-300') }}">{{ $issue->usn }}</td>
                                            <td class="font-medium space-x-2 rtl:space-x-reverse {{ (count($issue->issue_timeline) > 0 && $issue->issue_timeline->last()->status == 'resolved') ? 'bg-green-500' : ((count($issue->issue_timeline) > 0) ? '' : 'bg-red-300') }}">
                                                @if ($issue->exam_section_issue)
                                                    {{ $issue->exam_section_issue->issues ?? '' }} - {{ $issue->exam_section_issue->remarks ?? '' }}
                                                @else
                                                    Other - {{ $issue->other_issue ?? '-' }}
                                                @endif
                                            </td>
                                            <td class="font-medium space-x-2 rtl:space-x-reverse {{ (count($issue->issue_timeline) > 0 && $issue->issue_timeline->last()->status == 'resolved') ? 'bg-green-500' : ((count($issue->issue_timeline) > 0) ? '' : 'bg-red-300') }}">
                                                @if ($issue->exam_section_issue)
                                                    {{ $issue->exam_section_issue->category_name ?? '' }} 
                                                @elseif($issue->exam_section_issue==null)
                                                    unusual
                                                @endif  
                                            </td>
                                            <td class="font-medium space-x-2 rtl:space-x-reverse {{ (count($issue->issue_timeline) > 0 && $issue->issue_timeline->last()->status == 'resolved') ? 'bg-green-500' : ((count($issue->issue_timeline) > 0) ? '' : 'bg-red-300') }}">{{ $issue->description }}</td>
                                            <td class="font-medium space-x-2 rtl:space-x-reverse {{ (count($issue->issue_timeline) > 0 && $issue->issue_timeline->last()->status == 'resolved') ? 'bg-green-500' : ((count($issue->issue_timeline) > 0) ? '' : 'bg-red-300') }}">
                                                @if ($issue->exam_section_issue && $issue->exam_section_issue->staff)
                                                    {{ $issue->exam_section_issue->staff->fname }}
                                                    {{ $issue->exam_section_issue->staff->mname }}
                                                    {{ $issue->exam_section_issue->staff->lname }}
                                                @else
                                                    Sudhindra T Kulkarni
                                                @endif
                                            </td>
                                            <td class="font-medium space-x-2 rtl:space-x-reverse {{ (count($issue->issue_timeline) > 0 && $issue->issue_timeline->last()->status == 'resolved') ? 'bg-green-500' : ((count($issue->issue_timeline) > 0) ? '' : 'bg-red-300') }}">
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <a href="{{ route('Staff.Non-Teaching.issue_timeline.show', $issue->id) }}"
                                                       class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                                                            <path d="M12.0003 3C17.3924 3 21.8784 6.87976 22.8189 12C21.8784 17.1202 17.3924 21 12.0003 21C6.60812 21 2.12215 17.1202 1.18164 12C2.12215 6.87976 6.60812 3 12.0003 3ZM12.0003 19C16.2359 19 19.8603 16.052 20.7777 12C19.8603 7.94803 16.2359 5 12.0003 5C7.7646 5 4.14022 7.94803 3.22278 12C4.14022 16.052 7.7646 19 12.0003 19ZM12.0003 16.5C9.51498 16.5 7.50026 14.4853 7.50026 12C7.50026 9.51472 9.51498 7.5 12.0003 7.5C14.4855 7.5 16.5003 9.51472 16.5003 12C16.5003 14.4853 14.4855 16.5 12.0003 16.5ZM12.0003 14.5C13.381 14.5 14.5003 13.3807 14.5003 12C14.5003 10.6193 13.381 9.5 12.0003 9.5C10.6196 9.5 9.50026 10.6193 9.50026 12C9.50026 13.3807 10.6196 14.5 12.0003 14.5Z"></path>
                                                        </svg>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm" role="tooltip">
                                                            View
                                                        </span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
                

                                {{-- @empty
                                    <p class="text-dark"><b>No Category Added.</b></p>
                                @endforelse --}}
                            {{-- </tbody>
                        </table>--}}
                    </div>
                </div> 
                <div class="box-footer">
                        
                    </div>
                </div>
                </div>
            </div>
        {{-- </div>
        <!-- End::row-5 -->

    </div>
    <!-- End::main-content -->

</div> --}}
@endsection

@section('scripts')
     <!-- FLATPICKR JS -->
     <script src="{{asset('build/assets/libs/flatpickr/flatpickr.min.js')}}"></script>

     <!-- CHOICES JS -->
     <script src="{{asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

     <!-- FORM-LAYOUT JS -->
     @vite('resources/assets/js/profile-settings.js')

     <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"
     ></script>
@endsection

@section('scripts')
<script>
$(document).ready(function() {
    $('#student-issues-table').DataTable();
});
</script>
@endsection

