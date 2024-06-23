{{-- @extends('layouts.components.internship.master-internship') --}}
{{-- @extends('layouts.components.HOD.master-hod') --}}
@extends('layouts.components.staff.master-nonteaching')

@section('styles')

    @endsectionfghgh

@section('content')

    <div class="content">

        <!-- Start::main-content -->
        <div class="main-content">

            <!-- Page Header -->
            <div class="block justify-between page-header sm:flex">
                <div>
                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium">
                        <span class="text-primary">

                        </span>
                    </h3>
                </div>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-sm">
                        <a class="flex items-center font-bold text-primary hover:text-primary dark:text-primary truncate"
                            href="/Staff/Non-Teaching/viewstudentissues" style="color: red;">
                            Back
                            <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                        </a>
                    </li>

                </ol>
            </div>

            <div>
                <div class="box">
                    <div class="box-body">
                        <div class="col-span-12 md:col-span-6 xxl:col-span-3">
                            <div class="box-header">
                                <div class="flex">
                                    <h5 class="box-title my-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32" fill="currentColor">
                                            <path 
                                                d="M6 4H4V2H20V4H18V6C18 7.61543 17.1838 8.91468 16.1561 9.97667C15.4532 10.703 14.598 11.372 13.7309 12C14.598 12.628 15.4532 13.297 16.1561 14.0233C17.1838 15.0853 18 16.3846 18 18V20H20V22H4V20H6V18C6 16.3846 6.81616 15.0853 7.8439 14.0233C8.54682 13.297 9.40202 12.628 10.2691 12C9.40202 11.372 8.54682 10.703 7.8439 9.97667C6.81616 8.91468 6 7.61543 6 6V4ZM8 4V6C8 6.68514 8.26026 7.33499 8.77131 8H15.2287C15.7397 7.33499 16 6.68514 16 6V4H8ZM12 13.2219C10.9548 13.9602 10.008 14.663 9.2811 15.4142C9.09008 15.6116 8.92007 15.8064 8.77131 16H15.2287C15.0799 15.8064 14.9099 15.6116 14.7189 15.4142C13.992 14.663 13.0452 13.9602 12 13.2219Z">
                                            </path>
                                        </svg>
                                        Issue Interaction Details of - 
                                        <b style="color: red; font-size:18px">{{ $student_issue->usn }}</b>
                                    </h5>

                                    <div class=" block ltr:ml-auto rtl:mr-auto my-auto">
                                        <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary"
                                            data-hs-overlay="#hs-medium-modal">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16"
                                                height="16">
                                                <path
                                                    d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM5 5V19H19V5H5ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z"
                                                    fill="rgba(255,255,255,1)"></path>
                                            </svg>
                                            Add Interaction
                                        </button>

                                        <div id="hs-medium-modal" class="hs-overlay hidden ti-modal">
                                            <div
                                                class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                                <div class="ti-modal-content">
                                                    <div class="ti-modal-header">
                                                        <h3 class="ti-modal-title">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                                width="16" height="16">
                                                                <path
                                                                    d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM5 5V19H19V5H5ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z">
                                                                </path>
                                                            </svg>
                                                            Interaction of the student -
                                                            <b style="color: red; font-size:16px">{{ $student_issue->usn }}</b>
                                                        </h3>
                                                        <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                            data-hs-overlay="#hs-medium-modal">
                                                            <span class="sr-only">Close</span>
                                                            <svg class="w-3.5 h-3.5" width="8" height="8"
                                                                viewBox="0 0 8 8" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </button>
                                                    </div>

                                                    <form action="{{ route('Staff.Non-Teaching.issue_timeline.store', [$staff->id, $student_issue->id]) }}" method="post">
                                                        @csrf
                                                        <div class="ti-modal-body">
                                                            <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                <div class="space-y-2">
                                                                    <label for="date_of_interaction"
                                                                        class="ti-form-label mb-0 font-bold">Date of
                                                                        Interaction:<span
                                                                            class="text-red-500">*</span></label>
                                                                    <div class="flex shadow-sm max-w-sm space-y-3 pb-6">
                                                                        <div
                                                                            class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 24 24" width="16"
                                                                                height="16">
                                                                                <path
                                                                                    d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z">
                                                                                </path>
                                                                            </svg>
                                                                        </div>
                                                                        <input type="date" name="date_of_interaction"
                                                                            class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                            id="date_of_interaction" placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <script>
                                                                document.addEventListener('DOMContentLoaded', (event) => {
                                                                    // Get today's date
                                                                    const today = new Date();
                                                                    const year = today.getFullYear();
                                                                    const month = String(today.getMonth() + 1).padStart(2, '0'); // Months are zero-based
                                                                    const day = String(today.getDate()).padStart(2, '0');

                                                                    // Format the date as YYYY-MM-DD
                                                                    const formattedDate = `${year}-${month}-${day}`;

                                                                    // Set the value of the date input field to today's date
                                                                    document.getElementById('date_of_interaction').value = formattedDate;
                                                                });
                                                            </script>

                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                <label for=""
                                                                    class="ti-form-label mb-0 font-bold">Interaction :
                                                                </label>
                                                                <input type="text" name="interaction"
                                                                    class="ti-form-input" required
                                                                    placeholder="Interaction" pattern="^[A-Za-z\s]+$">
                                                            </div>

                                                            <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                <div class="space-y-2">
                                                                    <label for=""
                                                                        class="ti-form-label mb-0 font-bold">Followup Date
                                                                        :<span class="text-red-500">*</span></label>
                                                                    <div class="flex shadow-sm max-w-sm space-y-3 pb-6">

                                                                        <div
                                                                            class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 24 24" width="16"
                                                                                height="16">
                                                                                <path
                                                                                    d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z">
                                                                                </path>
                                                                            </svg>
                                                                        </div>

                                                                        <input type="date" name="followup_date"
                                                                            class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                            id="fdate" placeholder="Followup date"
                                                                            value="">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                <label for="status"
                                                                    class="ti-form-label mb-0 font-bold">Status:</label>
                                                                <select name="status" id="status" class="ti-form-input"
                                                                    required>
                                                                    <option value="" disabled selected>Select status
                                                                    </option>
                                                                    {{-- <option value="open">Open</option> --}}
                                                                    <option value="followup">Follow-up</option>
                                                                    <option value="resolved">Resolved</option>
                                                                </select>
                                                            </div>





                                                            <div class="ti-modal-footer">
                                                                <button type="button"
                                                                    class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                    data-hs-overlay="#hs-medium-modal">
                                                                    Close
                                                                </button>

                                                                <input type="submit"
                                                                    class="ti-btn  bg-primary text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10"
                                                                    value="Add" />

                                                            </div>
                                                        </div>
                                                    </form>
                                                    <!-- Include this in your main layout file (e.g., layouts/app.blade.php) -->
                                                    <link rel="stylesheet"
                                                        href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
                                                    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                                                    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
                                                    <!-- Add this script to the issue_timeline.blade.php view file -->
                                                    <script>
                                                        $(document).ready(function() {
                                                            $('#student-issues-table').DataTable();
                                                        });
                                                    </script>


                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="grid grid-cols-12 gap-6">
                                <div class="col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Timeline</h5>
                                        </div>
                                        <div class="box-body">
                                            <div class="relative">
                                                <div class="timeline-start"></div>
                                                <div class="timeline-line"></div>
                                                <div class="timeline">
                                                    <div class="timeline-main">
                                                        <div class="timeline-left">
                                                            <div class="timeline-body">
                                                                <div class="box">
                                                                    <div class="box-body p-4">
                                                                        {{-- @foreach ($student_issues as $issue) --}}
                                                                        <h6 class="font-semibold text-base mb-2">
                                                                            @if ($student_issue->exam_section_issue)
                                                                                {{ $student_issue->exam_section_issue->issues ?? '' }}
                                                                                -
                                                                                {{ $student_issue->exam_section_issue->remarks ?? '' }}
                                                                            @else
                                                                                Other -
                                                                                {{ $student_issue->other_issue ?? '-' }}
                                                                            @endif
                                                                        </h6>
                                                                        <p
                                                                            class="text-xs text-gray-500 dark:text-white/70">
                                                                            {{ $student_issue->description }}</p>
                                                                        {{-- @else
                                                                             <h6 class="font-semibold text-base mb-2">No student issue found</h6> --}}
                                                                        {{-- @endforeach --}}
                                                                        {{-- <h6 class="font-semibold text-base mb-2">Marsha Mellow updated his status</h6> --}}
                                                                        {{-- <p class="text-xs text-gray-500 dark:text-white/70">Nonumy erat nonumy dolores duo ea sit, ipsum sed amet aliquyam magna kasd at. Dolor erat sit sed sea et dolor, justo dolor ipsum dolore voluptua. Sed ipsum sed.</p> --}}
                                                                    </div>
                                                                    <div class="box-footer bg-transparent p-4">
                                                                        <div
                                                                            class="sm:space-y-0 space-y-2 sm:flex items-center justify-between">
                                                                            <div
                                                                                class="sm:flex items-center sm:space-x-3 space-x-0 sm:space-y-0 space-y-2 rtl:space-x-reverse">
                                                                                <div class="flex">
                                                                                    <img class="avatar avatar-sm ring-0 rounded-full"
                                                                                        src="{{ asset('build/assets/img/users/2.jpg') }}"
                                                                                        alt="avatar">
                                                                                </div>
                                                                                <div>
                                                                                    <p
                                                                                        class="text-slate-700 font-semibold text-sm dark:text-white">
                                                                                        @if ($student_issue->exam_section_issue && $student_issue->exam_section_issue->staff)
                                                                                            {{ $student_issue->exam_section_issue->staff->fname }}
                                                                                            {{ $student_issue->exam_section_issue->staff->mname }}
                                                                                            {{ $student_issue->exam_section_issue->staff->lname }}
                                                                                        @else
                                                                                            @if ($student_issue->exam_section_issue_id == '0')
                                                                                                Sudhindra T Kulkarni
                                                                                            @else
                                                                                                No staff assigned
                                                                                            @endif
                                                                                        @endif
                                                                                        {{-- Json Taylor --}}
                                                                                    </p>
                                                                                    <p
                                                                                        class="text-xs text-gray-500 dark:text-white/70">
                                                                                        {{-- 20 min ago --}}
                                                                                        {{ $student_issue->created_at->diffForHumans() }}
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="space-x-0 sm:space-x-2 sm:text-end flex">
                                                                                {{-- <a href="javascript:void(0);" class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-2 rtl:space-x-reverse rounded-full bg-gray-100 px-3 py-1 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex"><i class="text-xs ri ri-heart-line"></i><span class="my-2">30</span></a>
                                                                                    <a href="javascript:void(0);" class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-2 rtl:space-x-reverse rounded-full bg-gray-100 px-3 py-1 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex"><i class="text-xs ri ri-thumb-up-line"></i><span class="my-2">25k</span></a> --}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="bg-warning text-white timeline-icon">
                                                            <!-- <i class="ri ri-briefcase-4-line text-lg leading-none"></i> -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M14 14.252V22H4C4 17.5817 7.58172 14 12 14C12.6906 14 13.3608 14.0875 14 14.252ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM18.5858 17L16.7574 15.1716L18.1716 13.7574L22.4142 18L18.1716 22.2426L16.7574 20.8284L18.5858 19H15V17H18.5858Z"></path></svg>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="timeline">
                                                    @if ($student_issue->issue_timeline && $student_issue->issue_timeline->count() > 0)
                                                        {{-- @foreach ($student_issue->issue_timelines as $index => $timeline) --}}
                                                        @for ($index = 0; $index < count($student_issue->issue_timeline); $index++)
                                                            @php
                                                                $timeline = $student_issue->issue_timeline[$index];
                                                            @endphp
                                                            <div class="timeline-main">
                                                                <div
                                                                    class="{{ $index % 2 == 0 ? 'timeline-right' : 'timeline-left' }}">
                                                                    {{-- <div class="timeline-right"> --}}
                                                                    <div class="timeline-body">
                                                                        <div class="box">
                                                                            <div class="box-body p-4">
                                                                                <h6 class="font-semibold text-base mb-2">
                                                                                    {{ $timeline->status ?? '' }}
                                                                                    <br>{{ $timeline->followup_date ?? '' }}
                                                                                </h6>
                                                                                <p
                                                                                    class="text-xs text-gray-500 dark:text-white/70">
                                                                                    {{ $timeline->interaction ?? '' }}
                                                                                </p>

                                                                                {{-- <h6 class="font-semibold text-base mb-2"></h6>
                                                                                    <p class="text-xs text-gray-500 dark:text-white/70">Invidunt dolor justo gubergren sit voluptua ipsum lorem sanctus, justo dolores dolor dolore stet justo dolor. Eos ipsum rebum diam..</p> --}}
                                                                            </div>
                                                                            <div class="box-footer bg-transparent p-4">
                                                                                <div
                                                                                    class="sm:space-y-0 space-y-2 sm:flex items-center justify-between">
                                                                                    <div
                                                                                        class="sm:flex items-center sm:space-x-3 space-x-0 sm:space-y-0 space-y-2 rtl:space-x-reverse">
                                                                                        <div class="flex">
                                                                                            <img class="avatar avatar-sm ring-0 rounded-full"
                                                                                                src="{{ asset('build/assets/img/users/1.jpg') }}"
                                                                                                alt="avatar">
                                                                                        </div>
                                                                                        <div>
                                                                                            <p
                                                                                                class="text-slate-700 font-semibold text-sm dark:text-white">
                                                                                                @if ($timeline->user && $timeline)
                                                                                                    {{ $timeline->user->role == 'Head of Department' ? $timeline->user->role : $timeline->user->email }}
                                                                                                @endif
                                                                                                {{-- Anderson Itumay --}}

                                                                                            </p>
                                                                                            <p
                                                                                                class="text-xs text-gray-500 dark:text-white/70">
                                                                                                {{-- 11 Dec 2022 --}}

                                                                                                {{ $timeline->date_of_interaction ?? '' }}
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="space-x-0 sm:space-x-2 sm:text-end flex">
                                                                                        {{-- <a href="javascript:void(0);" class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-2 rtl:space-x-reverse rounded-full bg-gray-100 px-3 py-1 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex"><i class="text-xs ri ri-heart-line"></i><span class="my-2">30</span></a>
                                                                                             <a href="javascript:void(0);" class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-2 rtl:space-x-reverse rounded-full bg-gray-100 px-3 py-1 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex"><i class="text-xs ri ri-thumb-up-line"></i><span class="my-2">25k</span></a> --}}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="bg-secondary text-white timeline-icon">
                                                                    <!-- <i class="ri-mail-line text-lg leading-none"></i> -->
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M6.45455 19L2 22.5V4C2 3.44772 2.44772 3 3 3H21C21.5523 3 22 3.44772 22 4V18C22 18.5523 21.5523 19 21 19H6.45455ZM5.76282 17H20V5H4V18.3851L5.76282 17ZM8 10H16V12H8V10Z"></path></svg>
                                                                    
                                                                </div>
                                                            </div>
                                                        @endfor
                                                    @endif
                                                </div>
                                            </div>
                                            
                                            <div class="timeline-end">
                                                <!-- <div class="bg-green-500 text-white timeline-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M11.602 13.7599L13.014 15.1719L21.4795 6.7063L22.8938 8.12051L13.014 18.0003L6.65 11.6363L8.06421 10.2221L10.189 12.3469L11.6025 13.7594L11.602 13.7599ZM11.6037 10.9322L16.5563 5.97949L17.9666 7.38977L13.014 12.3424L11.6037 10.9322ZM8.77698 16.5873L7.36396 18.0003L1 11.6363L2.41421 10.2221L3.82723 11.6352L3.82604 11.6363L8.77698 16.5873Z"></path></svg>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End::row-1 -->

                    </div>
                </div>

            </div>
        </div>
        <!-- End::row-5 -->

    </div>
    <!-- End::main-content -->

    </div>

@endsection

@section('scripts')

    <!-- APEX CHARTS JS -->
    <script src="{{ asset('build/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- FLATPICKR JS -->
    <script src="{{ asset('build/assets/libs/flatpickr/flatpickr.min.js') }}"></script>
    @vite('resources/assets/js/flatpickr.js')


    <!-- INDEX JS -->
    @vite('resources/assets/js/index-8.js')

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.tailwindcss.min.js"></script>

    <script href="https://cdn.tailwindcss.com/3.3.5"></script>
    <script>
        $(document).ready(function() {
            //alert('Hello from jquery');

            new DataTable('#ticket_table');
        });
    </script>

@endsection

</div>
</div>
</div>
<!-- End::row-2 -->
</div>
<!-- End::main-content -->
</div>

@endsection

@section('scripts')

<!-- APEX CHARTS JS -->
<script src="{{ asset('build/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- INDEX JS -->
@vite('resources/assets/js/index-8.js')


@endsection
