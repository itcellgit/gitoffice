@extends('layouts.components.staff.master-teaching')

@section('styles')

        <!-- CHOICES CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/choices.js/public/assets/styles/choices.min.css')}}">

        <!-- FLATPICKR CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/flatpickr/flatpickr.min.css')}}">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
        
    <!-- FULLCALENDAR CSS -->
    <link rel="stylesheet" href="{{asset('build/assets/libs/fullcalendar/main.min.css')}}">
    <script>
        var base_url = "{{URL::to('/')}}";
    </script>
@endsection

@section('content')

                <div class="content">

                    <!-- Start::main-content -->
                    <div class="main-content">
                        @php
                           // $staff = Auth::user();
                          //  $staff=staff::where('user_id','=',$user->id)->first();
                        @endphp
                        <!-- Page Header -->
                        <div class="block justify-between page-header sm:flex">
                            <div>
                                <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium">Welcome  <span class="text-primary">{{$staff->fname.' '.$staff->mname.' '.$staff->lname}}</span></h3>
                            </div>
                            <ol class="flex items-center whitespace-nowrap min-w-0">
                                <li class="text-sm">
                                <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="#">
                                   My Leaves Calender
                                    <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                </a>
                                </li>


                            </ol>
                        </div>
                        <!-- Page Header Close -->


                        @if(session('return_data'))
                                @if (session('return_data')['result'] == "success")
                                    <div class='bg-white dark:bg-bgdark border border-success alert text-success' role='alert'>
                                        <span class='font-bold'>Result</span> Successful
                                    </div>
                                    @php
                                        Illuminate\Support\Facades\Session::forget('status');
                                        header("refresh: 3");
                                    @endphp
                                @else
                                    <div class='bg-white dark:bg-bgdark border border-danger alert text-danger' role='alert'>
                                        <span class='font-bold'>Result</span> {{session('return_data')['result']}}
                                    </div>
                                    <input type="hidden" id="start_date" value="{{session('return_data')['start_date']}}"/>
                                    <input type="hidden" id="leave_type" value="{{session('return_data')['leave_type']}}"/>
                                    <input type="hidden" id="reason" value="{{session('return_data')['reason']}}"/>
                                    <input type="hidden" id="alternative" value="{{session('return_data')['alternative']}}"/>

                                    @if(session('return_data')['appl_edit'] == 1)
                                        <script>
                                        $(document).ready(function(){
                                            $('#leave_apply_modal').trigger('click');//css('disply','block');
                                            $('#type').val($('#leave_type').val());
                                            $('#from_date').val($('#start_date').val());
                                            $('#leave_reason').val($('#reason').val());
                                            //alert();
                                            $('#alternate').val($('#alternative').val());
                                        });
                                        


                                        </script>
                                    @else   
                                    <script>
                                        $(document).ready(function(){
                                            $('#view_leave').trigger('click');//css('disply','block');
                                            // $('#type').val($('#leave_type').val());
                                            // $('#from_date').val($('#start_date').val());
                                            // $('#leave_reason').val($('#reason').val());
                                            // //alert();
                                            // $('#alternate').val($('#alternative').val());
                                        });
                                        


                                        </script>
                                    @endif
                                @endif

                            @endif
                    </div>
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="col-span-12 xl:col-span-12">
                            <div class="box">
                                <div class="box-body">
                                        <h1 class="text-primary font-bold">My Leave Statistics</h1>
                                        <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto pb-6">

                                            <table class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                <thead class="bg-gray-50 dark:bg-black/20">


                                                    <tr class="">
                                                        <th>Titles</th>
                                                        @foreach ($staff_leave_entitlements as $l_types)
                                                            <th scope="col" class="dark:text-white/80 font-bold item-center">{{$l_types->shortname}}</th>
                                                        @endforeach
                                                        <th>DL-GIT</th>
                                                        <th>DL-VTU</th>
                                                    </tr>

                                                </thead>
                                                <tbody>
                                                    <tr class="">
                                                        <th>Entitled</th>
                                                        @foreach ($staff_leave_entitlements as $staff_leave)

                                                                    <td>{{$staff_leave->entitled_curr_year}}</td>

                                                        @endforeach
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr class="">
                                                        <th>Availed</th>
                                                        @foreach ($staff_leave_entitlements as $staff_leave)

                                                                    <td>{{$staff_leave->consumed_curr_year}}</td>

                                                        @endforeach
                                                    </tr>
                                                    <tr class="">
                                                        <th>Balance</th>

                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start::main-content -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="col-span-12 xl:col-span-12">
                            <div class="box">
                                <div class="box-body">
                                    <div class="box border-0 shadow-none mb-0">

                                        <div class="box-body">
                                            <button data-hs-overlay="#add_leaveform" class="hs-dropdown-toggle ti-btn ti-btn-primary hidden" id="leave_apply_modal">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M11 6V14H19C19 18.4183 15.4183 22 11 22C6.58172 22 3 18.4183 3 14C3 9.66509 6.58 6 11 6ZM21 2V4L15.6726 10H21V12H13V10L18.3256 4H13V2H21Z"></path></svg>
                                                Apply Leave
                                            </button>
                                            <div id="add_leaveform" class="hs-overlay hidden ti-modal">
                                                <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                    <div class="ti-modal-content">
                                                        <div class="ti-modal-header">
                                                            <h3 class="ti-modal-title">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M11 6V14H19C19 18.4183 15.4183 22 11 22C6.58172 22 3 18.4183 3 14C3 9.66509 6.58 6 11 6ZM21 2V4L15.6726 10H21V12H13V10L18.3256 4H13V2H21Z"></path></svg>
                                                                 Apply leave  on <span id="leave_date_header" class="text-primary font-bold"></span>
                                                            </h3>
                                                                <button type="button" class="hs-dropdown-toggle ti-modal-close-btn leave_apply_close_btn"
                                                                    data-hs-overlay="#add_leaveform">
                                                                    <span class="sr-only">Close</span>
                                                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                        d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                        fill="currentColor" />
                                                                    </svg>
                                                                </button>
                                                        </div>
                                                        <div class="ti-modal-body">
                                                            <div class="table-bordered rounded-sm ti-custom-table-head table-auto pt-6 pb-6 hidden" id="holiday_rh_div">
                                                                <span class="text-primary font-bold">Holiday & Rh List</span>
                                                                <table class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                                    <thead class="bg-gray-50 dark:bg-black/20">
                                                                        <tr class="">

                                                                            <th scope="col" class="dark:text-white/80 font-bold">Leave Type</th>
                                                                            <th scope="col" class="dark:text-white/80 font-bold">Event</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="holidayrh_list">

                                                                    </tbody>
                                                                </table>
                                                            </div>

                                                            {{-- for drawing a horrizontal line to seperate out the leave from and leave list --}}
                                                            <div class="relative flex py-5 items-center">
                                                                <div class="flex-grow border-t border-blue-400"></div>
                                                                <span class="flex-shrink mx-4 text-primary" id="msg">Your Leave Application</span>
                                                                <div class="flex-grow border-t border-blue-400"></div>
                                                            </div>
                                                            {{-- Horrizontal row ends --}}
                                                            <div class="" id="result_notification">
                                                                @if(session('return_data'))
                                                                    <div class='bg-white dark:bg-bgdark border border-danger alert text-danger' role='alert'>
                                                                        <span class='font-bold'>Result</span> {{session('return_data')['result']}}
                                                                    </div>


                                                                @endif
                                                            </div>
                                                            <form  action="{{route('Teaching.leaves.apply',$staff->id)}}" method="post">
                                                                @csrf

                                                                <div class="leave_form_div" id="leave_form" >

                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0 pt-6 pb-6">

                                                                        <div class="max-w-sm space-y-2 pb-6 ">
                                                                            <label for="" class="ti-form-label font-bold">Leave Type:<span class="text-red-500">*</span></label>
                                                                            <select class="ti-form-select" name="type" id="type" required>
                                                                                <option value="#">Choose Leave Type</option>

                                                                                @foreach ($leaves as $l)
                                                                                    <option value="{{$l->leave_id}}">{{$l->shortname}}</option>
                                                                                @endforeach

                                                                            </select>
                                                                        </div>
                                                                        <div id="cl_type_block">

                                                                            <label for="cl_morning" class="ti-form-label font-bold">Select CL type</label>
                                                                            <div class="flex">

                                                                                <div class="flex items-center me-4 ">
                                                                                    <input id="cl_morning" type="radio" value="Morning" name="cl_type" class="mr-2 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 cl_type">
                                                                                    <label for="cl_morning" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">CL-Morning</label>
                                                                                </div>
                                                                                <div class="flex items-center me-4 ml-6">
                                                                                    <input id="cl_afternoon" type="radio" value="Afternoon" name="cl_type" class="mr-2 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 cl_type">
                                                                                    <label for="cl_afternoon" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">CL-Afternoon</label>
                                                                                </div>
                                                                                <div class="flex items-center me-4 ml-6 ">
                                                                                    <input checked id="cl" type="radio" value="Full" name="cl_type" class="mr-2 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 cl_type">
                                                                                    <label for="cl" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Full Day CL</label>
                                                                                </div>

                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                        <div date-rangepicker class="flex max-w-sm space-y-3 pb-6">
                                                                            <label for="" class="ti-form-label font-bold">From Date:<span class="text-red-500">*</span></label>
                                                                                <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                    <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                                    class="ri ri-calendar-line"></i></span>
                                                                                </div>

                                                                                <input type="text" name="from_date"
                                                                                    class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                    id="from_date" required placeholder="Choose date" >
                                                                        </div>
                                                                        <div class="flex max-w-sm space-y-3 pb-6">
                                                                            <label for="" class="ti-form-label font-bold">TO Date:<span class="text-red-500">*</span></label>
                                                                            <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                                class="ri ri-calendar-line"></i></span>
                                                                            </div>

                                                                            <input  type="text" name="to_date"
                                                                                class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                    id="to_date" required placeholder="Choose date">
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-4 lg:space-y-0">
                                                                        <div class="flex max-w-sm space-y-4 pb-6 content-center">
                                                                            <p class="font-bold">No. of Days :</p>
                                                                            <input type="text" class="ti-form-input text-green-500" required name="no_of_days" id="no_of_days_count" readonly value=""/>
                                                                        </div>
                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                            <label for="" class="ti-form-label font-bold">Leave Reason:<span class="text-red-500">*</span></label>
                                                                            <textarea class="ti-form-input" required name="leave_reason" id="leave_reason" placeholder="Leave Reason"></textarea>
                                                                        </div>
                                                                    </div>

                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                            <label for="" class="ti-form-label font-bold">Alternate:</label>
                                                                            <select class="ti-form-select" name="alternate" id="alternate" required>
                                                                                <option value="#">Choose Alternate</option>

                                                                                @foreach ($dept_staff as $depts)
                                                                                <optgroup label="{{$depts->dept_name}}">
                                                                                    @foreach ($depts->staff as $dstaff)
                                                                                            <option value="{{$dstaff->id}}">{{$dstaff->fname.' '.$dstaff->mname.' '.$dstaff->lname}}</option>
                                                                                    @endforeach
                                                                                </optgroup>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                            <label for="" class="ti-form-label font-bold">Additional Alternate:</label>
                                                                            <select class="ti-form-select" name="additional_alternate" id="add_alternate" required>
                                                                                <option value="#">Choose an Alternate</option>

                                                                                @foreach ($dept_staff as $depts)
                                                                                <optgroup label="{{$depts->dept_name}}">
                                                                                    @foreach ($depts->staff as $dstaff)
                                                                                            <option value="{{$dstaff->id}}">{{$dstaff->fname.' '.$dstaff->mname.' '.$dstaff->lname}}</option>
                                                                                    @endforeach
                                                                                </optgroup>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <div class="ti-modal-footer">
                                                            <button type="button"
                                                                class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10 leave_apply_close_btn"
                                                                id="" data-hs-overlay="#add_leaveform">
                                                                Cancel
                                                            </button>

                                                            <input type="submit" class="ti-btn  bg-primary text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10" id="leave_apply_btn" value="Apply"/>

                                                        </div>
                                                    </form>

                                                    </div>
                                                </div>
                                            </div>


                                            <div id="calendar2"></div>


                                        </div>
                                        <!-- Calender for leaves ends here-->
                                        <!--The view Modal starts-->
                                        <button data-hs-overlay="#view_leave" class="hs-dropdown-toggle ti-btn ti-btn-primary hidden" id="view_leave_modal">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M11 6V14H19C19 18.4183 15.4183 22 11 22C6.58172 22 3 18.4183 3 14C3 9.66509 6.58 6 11 6ZM21 2V4L15.6726 10H21V12H13V10L18.3256 4H13V2H21Z"></path></svg>
                                            View Leave
                                        </button>
                                        <div id="view_leave" class="hs-overlay hidden ti-modal">
                                            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                <div class="ti-modal-content">
                                                    <div class="ti-modal-header">
                                                        <h3 class="ti-modal-title">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M11 6V14H19C19 18.4183 15.4183 22 11 22C6.58172 22 3 18.4183 3 14C3 9.66509 6.58 6 11 6ZM21 2V4L15.6726 10H21V12H13V10L18.3256 4H13V2H21Z"></path></svg>
                                                             View leave  on <span id="leave_date_header_view" class="text-primary font-bold"></span>
                                                        </h3>
                                                            <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                data-hs-overlay="#view_leave">
                                                                <span class="sr-only">Close</span>
                                                                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                    d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                    fill="currentColor" />
                                                                </svg>
                                                            </button>
                                                    </div>
                                                    <div class="ti-modal-body">
                                                        <div class="avatar-container flex py-4">
                                                            <div class="avatar-wrapper flex items-center">
                                                                <div class="avatar rounded-sm p-1 bg-green-500 border-gray-900 border-2 w-6 h-6"></div>
                                                                <div class="avatar-text font-bold ml-2 ">Approved</div>
                                                            </div>
    
                                                            <div class="avatar-wrapper flex items-center mx-2">
                                                                <div class="avatar rounded-sm p-1 bg-red-500 border-gray-900 border-2 w-6 h-6"></div>
                                                                <div class="avatar-text font-bold ml-2">Rejected</div>
                                                            </div>
    
                                                            <div class="avatar-wrapper flex items-center mx-2">
                                                                <div class="avatar rounded-sm p-1 bg-yellow-400 border-gray-900 border-2 w-6 h-6"></div>
                                                                <div class="avatar-text font-bold ml-2">Recommended</div>
                                                            </div>
    
                                                            <div class="avatar-wrapper flex items-center">
                                                                <div class="avatar rounded-sm p-1 border-gray-900 border-2 w-6 h-6"></div>
                                                                <div class="avatar-text font-semibold ml-2">Pending</div>
                                                            </div>
                                                            <div class="avatar-wrapper flex items-center">
                                                                <div class="avatar rounded-sm p-1 bg-gray-400 border-black-900 border-2 w-6 h-6"></div>
                                                                <div class="avatar-text font-semibold ml-2">Cancelled</div>
                                                            </div>
                                                        </div>

                                                        <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto pb-6 hidden" id="leave_list_div">
                                                            <span class="text-primary font-bold">Leave List</span>
                                                            <div id="leave_status_message"></div>
                                                            <table class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                                <thead class="bg-gray-50 dark:bg-black/20">
                                                                    <tr class="">

                                                                        <th scope="col" class="dark:text-white/80 font-bold">Application Number</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Leave Type</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">From Date</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">To Date</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Leave Reasons</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Alternate</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Additional Alternate</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Actions</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="leave_application_list">

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                        <div class="ti-modal-footer" id="edit_applied_leave_div">
                                                            <form  action="{{route('Teaching.leave_application.update',$staff->id)}}" method="post">
                                                                @method('patch')
                                                                @csrf
                                                                <div class="leave_form_div" id="leave_edit_form" >

                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0 pt-6 pb-6">
                                                                        <input type="hidden" class="leave_staff_application_id" name="leave_staff_application_id" value=""/>
                                                                        <div class="max-w-sm space-y-2 pb-6 ">
                                                                            <label for="" class="ti-form-label font-bold">Leave Type:<span class="text-red-500">*</span></label>
                                                                            <select class="ti-form-select" name="type" id="type_edit" required>
                                                                                <option value="#">Choose Leave Type</option>

                                                                                @foreach ($leaves as $l)
                                                                                    <option value="{{$l->leave_id}}">{{$l->shortname}}</option>
                                                                                @endforeach

                                                                            </select>
                                                                        </div>
                                                                        <div id="cl_type_block_edit" class="hidden">

                                                                            <label for="cl_morning" class="ti-form-label font-bold">Select CL type</label>
                                                                            <div class="flex">

                                                                                <div class="flex items-center me-4 ">
                                                                                    <input id="cl_morning_edit" type="radio" value="Morning" name="cl_type" class="mr-2 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 cl_type">
                                                                                    <label for="cl_morning" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">CL-Morning</label>
                                                                                </div>
                                                                                <div class="flex items-center me-4 ml-6">
                                                                                    <input id="cl_afternoon_edit" type="radio" value="Afternoon" name="cl_type" class="mr-2 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 cl_type">
                                                                                    <label for="cl_afternoon" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">CL-Afternoon</label>
                                                                                </div>
                                                                                <div class="flex items-center me-4 ml-6 ">
                                                                                    <input checked id="cl_edit" type="radio" value="Full" name="cl_type" class="mr-2 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 cl_type">
                                                                                    <label for="cl" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Full Day CL</label>
                                                                                </div>

                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                        <div date-rangepicker class="flex max-w-sm space-y-3 pb-6">
                                                                            <label for="" class="ti-form-label font-bold">From Date:<span class="text-red-500">*</span></label>
                                                                                <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                    <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                                    class="ri ri-calendar-line"></i></span>
                                                                                </div>

                                                                                <input type="text" name="from_date"
                                                                                    class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                    id="from_date_edit" required placeholder="Choose date" >
                                                                        </div>
                                                                        <div class="flex max-w-sm space-y-3 pb-6">
                                                                            <label for="" class="ti-form-label font-bold">TO Date:<span class="text-red-500">*</span></label>
                                                                            <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                                class="ri ri-calendar-line"></i></span>
                                                                            </div>

                                                                            <input  type="text" name="to_date"
                                                                                class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                    id="to_date_edit" required placeholder="Choose date">
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-4 lg:space-y-0">
                                                                        <div class="flex max-w-sm space-y-4 pb-6 content-center">
                                                                            <p class="font-bold">No. of Days :</p>
                                                                            <input type="text" class="ti-form-input text-green-500" required name="no_of_days" id="no_of_days_count_edit" readonly value=""/>
                                                                        </div>
                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                            <label for="" class="ti-form-label font-bold">Leave Reason:<span class="text-red-500">*</span></label>
                                                                            <textarea class="ti-form-input" required name="leave_reason" id="leave_reason_edit" placeholder="Leave Reason"></textarea>
                                                                        </div>
                                                                    </div>

                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                            <label for="" class="ti-form-label font-bold">Alternate:</label>
                                                                            <select class="ti-form-select" name="alternate" id="alternate_edit" required>
                                                                                <option value="#">Choose Alternate</option>

                                                                                @foreach ($dept_staff as $depts)
                                                                                <optgroup label="{{$depts->dept_name}}">
                                                                                    @foreach ($depts->staff as $dstaff)
                                                                                            <option value="{{$dstaff->id}}">{{$dstaff->fname.' '.$dstaff->mname.' '.$dstaff->lname}}</option>
                                                                                    @endforeach
                                                                                </optgroup>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                            <label for="" class="ti-form-label font-bold">Additional Alternate:</label>
                                                                            <select class="ti-form-select" name="additional_alternate" id="add_alternate_edit" required>
                                                                                <option value="#">Choose an Alternate</option>

                                                                                @foreach ($dept_staff as $depts)
                                                                                <optgroup label="{{$depts->dept_name}}">
                                                                                    @foreach ($depts->staff as $dstaff)
                                                                                            <option value="{{$dstaff->id}}">{{$dstaff->fname.' '.$dstaff->mname.' '.$dstaff->lname}}</option>
                                                                                    @endforeach
                                                                                </optgroup>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                       </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ti-modal-footer">
                                                                    <button type="button"
                                                                        class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10 leave_apply_close_btn"
                                                                         data-hs-overlay="#view_leave">
                                                                        Cancel
                                                                    </button>

                                                                    <input type="submit" class="ti-btn  bg-warning text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10" id="leave_edit_btn" value="Update"/>

                                                                </div>
                                                            </form>
                                                        </div>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection

@section('scripts')

        <!-- FLATPICKR JS -->
        <script src="{{asset('build/assets/libs/flatpickr/flatpickr.min.js')}}"></script>

        <!-- CHOICES JS -->
        <script src="{{asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

         <!-- TABULATOR JS -->
         <script src="{{asset('build/assets/libs/tabulator-tables/js/tabulator.min.js')}}"></script>
         <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <!-- FORM-LAYOUT JS -->
        @vite('resources/assets/js/profile-settings.js')

         <!-- MOMENT JS -->
         <script src="{{asset('build/assets/libs/moment/moment.js')}}"></script>

         <!-- FULLCALENDAR JS -->
         <script src="{{asset('build/assets/libs/fullcalendar/main.min.js')}}"></script>
         @vite('resources/assets/js/fullcalendar.js')


        <script
        src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>

        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>

        <script>
            //import { formatDate } from '@fullcalendar/core'
            $(document).ready(function(){
               //alert('Hello from jquery');

                ///to relad the the page loading the alternate staff list to be refreshed. (While appplying the leave.)
               $('.leave_apply_close_btn').on('click',function(){
                    location.reload();
               });

               $('#cl_type_block').hide();
               new DataTable('#leaves');
                    //

            });
            //for changing the things for 1/2 CL related stuff.
            $("input[name='cl_type']").change(function(e){
                if($(this).val() == 'Morning' || $(this).val()=='Afternoon') {
                    //alert($('#from_date').val());
                    //leave application
                    $('#to_date').val($('#from_date').val());
                    $('#no_of_days_count').val(0.5);
                    //leave application edit.
                    $('#to_date_edi').val($('#from_date_edit').val());
                    $('#no_of_days_count_edit').val(0.5);
                    
                    flatpickr('#to_date', {
                            "minDate": new Date($('#from_date').val()),
                            "maxDate": new Date($('#from_date').val())
                        });
                }else{
                    //leave application
                    $('#to_date').val('');
                    $('#no_of_days_count').val(''); 

                    //leave application edit.
                    $('#to_date_edit').val('');
                    $('#no_of_days_count_edit ').val('');
                    flatpickr('#to_date', {
                            "minDate": new Date($('#from_date').val()),
                            "maxDate": new Date($('#from_date').val()).fp_incr(30)
                        });
                
                }
            });
            $(document).on('change','#type',function(){
                if($("#type option:selected").text()=="CL")
                {
                    $('#cl_type_block').show();
                }
                else
                {
                    $('#cl_type_block').hide();
                }
            });

            $(document).on('change','#type_edit',function(){
                if($("#type_edit option:selected").text()=="CL")
                {
                    $('#cl_type_block_edit').show();
                }
                else
                {
                    $('#cl_type_block_edit').hide();
                }
            });
            
            

                //for generating the no of days between the leave dates. (While applying).
            $(document).on('change', '#to_date',function(){

                 var from_date = $('#from_date').val();
                 var to_date = $('#to_date').val();
                   // alert(from_date+'-'+to_date);
                    if(from_date != ""){

                        if(from_date == to_date){
                            //$('.no_of_days_count').removeClass('border border-red-500 focus:border-blue-500');

                            $('#no_of_days_count').val(1);
                        }else if(from_date > to_date){
                            $('#no_of_days_count').val(0);
                            //$('.no_of_days_count').addClass('border border-red-500 focus:border-blue-500');
                            $('#to_date').val();
                            $('#to_date').focus();
                        }else{
                            //$('.no_of_days_count').removeClass('border border-red-500 focus:border-blue-500');

                            var startDay = new Date(from_date);
                            var endDay = new Date(to_date);

                            //alert(startDay+'-'+endDay);

                            // Determine the time difference between two dates
                            var millisBetween = endDay.getTime() - startDay.getTime();

                            // Determine the number of days between two dates
                            var days = millisBetween / (1000 * 3600 * 24);
                            days=days+1;
                            $('#no_of_days_count').val(days);
                        }

                    }else{
                        $('#from_date').focus();
                        alert('Please fill the from date');
                    }

            });
            //for calculating the no of days between two dates while editing the leave application
            $(document).on('change', '#to_date_edit',function(){

                var from_date = $('#from_date_edit').val();
                var to_date = $('#to_date_edit').val();
                // alert(from_date+'-'+to_date);
                if(from_date != ""){

                    if(from_date == to_date){
                        //$('.no_of_days_count').removeClass('border border-red-500 focus:border-blue-500');

                        $('#no_of_days_count_edit').val(1);
                    }else if(from_date > to_date){
                        $('#no_of_days_count_edit').val(0);
                        //$('.no_of_days_count').addClass('border border-red-500 focus:border-blue-500');
                        $('#to_date_edit').val();
                        $('#to_date_edit').focus();
                    }else{
                        //$('.no_of_days_count').removeClass('border border-red-500 focus:border-blue-500');

                        var startDay = new Date(from_date);
                        var endDay = new Date(to_date);

                        //alert(startDay+'-'+endDay);

                        // Determine the time difference between two dates
                        var millisBetween = endDay.getTime() - startDay.getTime();

                        // Determine the number of days between two dates
                        var days = millisBetween / (1000 * 3600 * 24);
                        days=days+1;
                        $('#no_of_days_count_edit').val(days);
                    }

                }else{
                    $('#from_date').focus();
                    alert('Please fill the from date');
                }

                });

            //for cancellation of leave 
            $(document).on('click','.cancel_leave_btn',function(){
                var application_id = $(this).attr("data_val");
                var comfirmation_status =  confirm("Are you sure ? Want to cancel your leave.? (Application ID = "+application_id+")");
                if(comfirmation_status){
                    $.ajax({
                                url: base_url+'/cancel_myleave',
                                    method: 'GET',
                                    data: {
                                        application_id : application_id,
                                        
                                        _token : '{{csrf_token()}}' // Pass the clicked date to the server
                                    },
                                    success: function(response) {
                                        // Handle the response from the server
                                        console.log(response);
                                        $('#leave_status_message').html(response);
                                        setInterval(() => {
                                            location.reload();
                                        }, 2000);
                                    },
                                    error: function(xhr, status, error) {
                                        // Handle errors
                                        console.error(xhr.responseText);
                                    }    

                        });
                }else{
                    console.log('Cancelled');
                }
            });

            //foir editing the applied leave
            $(document).on('click','.edit_leave_applied',function(){
                var application_id = $(this).attr("data_val");
                //alert(application_id);
                $('#edit_applied_leave_div').show();
                $('#leave_edit_btn').show();

                $.ajax({
                                url: base_url+'/Teaching/edit_myleave',
                                    method: 'GET',
                                    data: {
                                        application_id : application_id,
                                        
                                        _token : '{{csrf_token()}}' // Pass the clicked date to the server
                                    },
                                    success: function(response) {
                                        // Handle the response from the server
                                        
                                        console.log(response);
                                        $('.leave_staff_application_id').val(response[0].id);
                                        $('#type_edit option[value='+response[0].leave_id+']').attr('selected', 'selected');
                                        //for checking whether its CL or no
                                        if(response[0].shortname == 'CL'){
                                            $('#cl_type_block_edit').show();
                                        }else{
                                            $('#cl_type_block_edit').hide();
                                        }
                                            
                                        //for setting the cl_type from the DB.
                                        if(response[0].cl_type == "Morning"){
                                            $('#cl_morning_edit').attr('checked',true);
                                        }else if(response[0].cl_type == "Afternoon"){
                                            $('#cl_afternoon_edit').attr('checked',true);
                                        }else{
                                            $('#cl_edit').attr('checked',true);
                                        }

                                        //for setting the from date
                                        $('#from_date_edit').val(response[0].start);
                                        $('#to_date_edit').val(response[0].end);
                                        $('#no_of_days_count_edit').val(response[0].no_of_days);
                                        $('#leave_reason_edit').val(response[0].reason);
                                        $('#alternate_edit option[value='+response[0].alternate+']').attr('selected', 'selected');
                                        

                                        if(response[0].additional_alternate !=null){
                                            $('#add_alternate_edit option[value='+response[0].additional_alternate+']').attr('selected', 'selected');
                                        }
                                        $('#to_date_edit').focus();
                                    },
                                    error: function(xhr, status, error) {
                                        // Handle errors
                                        console.error(xhr.responseText);
                                    }    

                        });
            });
             //Calender javscript Starts here.
            document.addEventListener('DOMContentLoaded', function() {
                var TileColor = '';
                //var clientevents = $('#calender2').fullCalendar('clientEvents');
                //console.log(clientevents);
                const calendarEl = document.getElementById('calendar2')
                const calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    height: 650,
                    eventSources: [
                    {
                            //for loading the RH and Holiday
                        url: base_url+'/holidayrhevents',
                        method: 'GET',
                        success:function(data){

                        },
                        failure: function(data) {
                           // alert(data);
                            //console.log(data);
                        },
                        allDay:false,
                        eventTextColor:'#000',
                        display:'background',
                        selectable: false,
                        // a non-ajax option
                    },
                    //for loading the leave events
                    {
                        url: base_url+'/myleaveevents',
                        method: 'GET',
                        success:function(data){

                        },
                        failure: function(data) {
                           // alert(data);
                           // console.log(data);
                        },
                        allDay:true,
                        eventTextColor:'red',
                        titleFormat: 'dd-MM-YYYY',
                        //display:'background',
                        selectable: false,
                        // a non-ajax option
                    }


                    ],
                    eventDidMount: function (info) {
                        info.el.onclick = "disabled";
                      // console.log(info.event);

                       //console.log(info.event.end.getFullYear());

                       var date = new Date(info.event.end);
                       //console.log(date);
                       var dateString = new Date(date.getTime() - (date.getTimezoneOffset() * 60000))
                                            .toISOString()
                                            .split("T")[0];
                       //console.log(date.getDate()+1);
                       //for styling the Holiday and RH events
                       if (info.event.extendedProps.type=="Holiday") {
                           info.el.style.background = "red";//info.event.extendedProps.background;
                           info.el.style.color  = "white";
                           info.el.style.fontSize  = "15px";
                       }else if (info.event.extendedProps.type=="RH") {
                           info.el.style.background = "#f5ed07";
                           info.el.style.color = "black";
                           info.el.style.fontSize  = "15px";
                       }


                       //for styling the leave events
                       if(info.event.extendedProps.leave_name == 'CL'){ //for CL
                            info.el.style.background = "blue";//info.event.extendedProps.background;
                           info.el.style.color  = "white";
                           info.el.style.fontSize  = "15px";
                       }else if(info.event.extendedProps.leave_name == 'RH'){
                            info.el.style.background = "orange";//info.event.extendedProps.background;
                           info.el.style.color  = "white";
                           info.el.style.fontSize  = "15px";
                       }
                       else if(info.event.extendedProps.leave_name =='EL'){
                            info.el.style.background = "#ed1886";//info.event.extendedProps.background;
                           info.el.style.color  = "black";
                           info.el.style.fontSize  = "15px";
                       }
                       else if(info.event.extendedProps.leave_name =='DL-GIT'){
                            info.el.style.background = "#8ded07";//info.event.extendedProps.background;
                           info.el.style.color  = "black";
                           info.el.style.fontSize  = "15px";
                       }

                        if(info.event.extendedProps.appl_status == 'cancelled'){
                            info.el.style.background = "#78716c";//info.event.extendedProps.background;
                           info.el.style.color  = "white";
                           info.el.style.fontSize  = "15px";
                        }
                   },
                   dateClick: function(info) {

                       //console.log(info.dateStr);
                     //   alert('Current view: ' + info.view.type);

                        $('#leave_apply_modal').trigger('click');
                        //alert('leave modal active');
                        $('#from_date').val(info.dateStr);
                        flatpickr('#from_date', {
                            "minDate": new Date(info.dateStr),
                            "maxDate": new Date(info.dateStr),

                        });
                        $('#type').focus();
                        flatpickr('#to_date', {
                            "minDate": new Date(info.dateStr),
                            "maxDate": new Date(info.dateStr).fp_incr(30)
                        });



                        $('#add_leaveform').css('z-index', 3333);
                        $('#leave_date_header').html(info.dateStr);

                        //ajax call for loading the Holiday and RH Events on the modal.
                        $.ajax({

                                url: base_url+'/fetchholidayrhevents',
                                method: 'GET',
                                data: {
                                    date: info.dateStr,
                                    _token : '{{csrf_token()}}' // Pass the clicked date to the server
                                },
                                success: function(response) {
                                    // Handle the response from the server
                                    //console.log(response);
                                    $('#holidayrh_list').empty();
                                    if(response.length !=0){
                                        //$('#leave_list_div').hide();
                                        $('#holiday_rh_div').show();
                                        $.each(response, function(key, value) {

                                            $('#holidayrh_list').append('<tr class="'+(value['type']=="RH"?"bg-orange-400":"bg-red-400")+'"><td >'+value['type']+ '</td><td>'+value['title']+ '</td></tr>');

                                        });
                                     }else{
                                        //$('#leave_list_div').show();
                                        $('#holiday_rh_div').hide();
                                    }

                                },
                                error: function(xhr, status, error) {
                                    // Handle errors
                                    console.error(xhr.responseText);
                                }
                        });
                        //ajax call for checking the leave events
                        $.ajax({

                            url: base_url+'/checkhasleaveEvent',
                            method: 'GET',
                            data: {
                                date: info.dateStr,
                                _token : '{{csrf_token()}}' // Pass the clicked date to the server
                            },
                            success: function(response) {
                                // Handle the response from the server
                                //console.log(response);
                                //$('#holidayrh_list').empty();
                                //console.log(response);
                                if(response ==1 ){
                                    //$('#leave_form').html('<h1>Sorry ! Not Allowed to apply leave</h1>');
                                    $('#leave_form').hide();
                                    $('#leave_apply_btn').hide();
                                    $('#msg').html('<h1>Sorry ! You have Already applied leave</h1>');

                                 }else{
                                    $('#leave_form').show();
                                    $('#msg').html('<h1>Your Leave Application Form</h1>');
                                    $('#leave_apply_btn').show();
                                }

                            },
                            error: function(xhr, status, error) {
                                // Handle errors
                                console.error(xhr.responseText);
                            }
                        });

                        //ajax call for checking if any other person is on leave on the same day.
                        $.ajax({

                            url: base_url+'/checkanydeptpersononleave',
                            method: 'GET',
                            data: {
                                date: info.dateStr,
                                _token : '{{csrf_token()}}' // Pass the clicked date to the server
                            },
                            success: function(response) {
                                // Handle the response from the server
                                
                                if(response !=0 ){
                                    //console.log(response);
                                  var i=0;
                                  //for looping through each result from ajax call
                                    $.each(response, function(key, value) {
                                        //console.log(response[i].staff_id);
                                        if(i < response.length){
                                            //for looping through dropdown options ;
                                            $('#alternate option').each(function(){
                                                var alternate_val = $(this).val(); // Get the value of the current option
                                                
                                                if(alternate_val == response[i].staff_id){
                                                    //for disabling the people of the department to be disabled from selecting as alternate.
                                                    $("#alternate option[value='"+response[i].staff_id+"']")
                                                            .prop('disabled','true')
                                                            .css({'background-color':'#ff4d4d','color':'white'})
                                                            .append('  - <em>On Leave</em>');
                                                }
                                            });
                                           i++; // to increment the index value.
                                        }
                                      
                                     
                                    });

                                }else{
                                    console.log('NO one applied');
                                }
                                

                            },
                            error: function(xhr, status, error) {
                                // Handle errors
                                console.error(xhr.responseText);
                            }
                        });



                    },
                    eventClick: function(info) {
                        //alert('Event: ' + info.event.start);
                        Clickeddate = info.event.start;

                        $('#view_leave_modal').trigger('click');
                        $('#edit_applied_leave_div').hide(); //for hiding the leave application edit form.(initially).
                        $('#leave_edit_btn').hide(); // for hiding the update button in the edit application.
                        //alert('view modal active');
                        var clicked_date = Clickeddate.getFullYear()+"-"+(Clickeddate.getMonth()+1)+"-"+Clickeddate.getDate();
                        
                        var bg_color_setting = "";
                        //ajax call for loading the leave events on calender
                        $.ajax({

                                url: base_url+'/fetchmyleaveevents',
                                method: 'GET',
                                data: {
                                    date: clicked_date,
                                    _token : '{{csrf_token()}}' // Pass the clicked date to the server
                                },
                                success: function(response) {
                                    // Handle the response from the server
                                   // console.log(response);
                                    $('#leave_application_list').empty();
                                    if(response.length !=0){
                                        $.each(response, function(key, value) {
                                        $('#leave_list_div').show();
                                       
                                        console.log(value.appl_status);
                                        if(value.appl_status == "recommended"){
                                           // alert('its recomended');
                                            bg_color_setting = "bg-yellow-400";
                                        }else if(value.appl_status === "pending"){
                                            
                                            bg_color_setting = "";
                                        }else if(value.appl_status == "approved"){
                                            
                                            bg_color_setting = "bg-green-400";
                                        }else if(value.appl_status == "rejected") {
                                            bg_color_setting = "bg-red-400";
                                        }else if(value.appl_status == "cancelled") {
                                            bg_color_setting = "bg-gray-400";
                                        }
                                        console.log(bg_color_setting);
                                       // $('#holiday_rh_div').hide();
                                        $('#leave_application_list').append('<tr class="'+ bg_color_setting +'">'
                                                                    +'<td >'+value.Application_id+ '</td>'
                                                                    +'<td>'+value.title+ '</td>'
                                                                    +'<td>'+value.start+ '</td>'
                                                                    +'<td>'+value.end+ '</td>'
                                                                    +'<td>'+value.reason+ '</td>'
                                                                    +'<td>'+value.alternate_staff+ '</td>'
                                                                    +'<td>'+value.additional_alternate_staff+ '</td>'
                                                                    +'<td>'
                                                                        +(value.appl_status =='pending'? '<div class="hs-tooltip ti-main-tooltip">'
                                                                                        +'<button  data_val="'+value.Application_id+'"'
                                                                                                +'class=" m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger edit_leave_applied">'
                                                                                                +'<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>'
                                                                                              
                                                                                        +'</button>'
                                                                                       
                                                                        +'</div>': '' )
                                                                        +(value.appl_status =='pending'? '<div class="hs-tooltip ti-main-tooltip">'
                                                                                     +'<button data_val="'+value.Application_id+'"'
                                                                                        +' class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger cancel_leave_btn">'
                                                                                            +'<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M7 4V2H17V4H22V6H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V6H2V4H7ZM6 6V20H18V6H6ZM9 9H11V17H9V9ZM13 9H15V17H13V9Z"></path></svg>'
                                                                                            
                                                                                            +'<span'
                                                                                                +'class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"'
                                                                                                +'role="tooltip">'
                                                                                            +'</span>'
                                                                                    +'</button>'
                                                                                +'</div>':'')
                                                                    +'</td>'
                                                                    +'</tr>');
                                        });

                                        //$('#leave_form').hide(); //for hiding the leave form div
                                    }else{
                                        $('#leave_list_div').hide();// for hiding the leave list
                                       // $('#holiday_rh_div').hide();
                                        $('#leave_application_list').append('<tr class="text-red-400"><td colspan="8" align="center">No Leaves Applied</td></tr>')
                                       //  $('#leave_form').show(); //for hiding the leave form div
                                    }

                                },
                                error: function(xhr, status, error) {
                                    // Handle errors
                                    console.error(xhr.responseText);
                                }
                        });

                        info.el.style.borderColor = 'red';
                    }


                //
                //         selectAllow: function(selectInfo) {
                //             return moment().diff(selectInfo.start) <= 0
                //     }

                })
                calendar.render()
            });
        </script>
@endsection
