@extends('layouts.master')

@section('styles')
         <!-- TABULATOR CSS -->
         <link rel="stylesheet" href="{{asset('build/assets/libs/tabulator-tables/css/tabulator.min.css')}}">

         <!-- CHOICES CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/choices.js/public/assets/styles/choices.min.css')}}">



        <!-- FLATPICKR CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/flatpickr/flatpickr.min.css')}}">

        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.tailwindcss.min.css">
        <script>
            var base_url = "{{URL::to('/')}}";
        </script>
@endsection

@section('content')
<div class="content">

    <!-- Start::main-content -->
    <div class="main-content">

        <!-- Page Header -->
        <div class="block justify-between page-header sm:flex">
            <div>
                <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Establishment Section</h3>
            </div>
            <ol class="flex items-center whitespace-nowrap min-w-0">
                <li class="text-sm">
                    <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M4 22C4 17.5817 7.58172 14 12 14C16.4183 14 20 17.5817 20 22H18C18 18.6863 15.3137 16 12 16C8.68629 16 6 18.6863 6 22H4ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11Z"></path></svg>
                        Staff
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12.1717 12.0005L9.34326 9.17203L10.7575 7.75781L15.0001 12.0005L10.7575 16.2431L9.34326 14.8289L12.1717 12.0005Z"></path></svg>
                    </a>
                    </li>


            </ol>
        </div>
        <!-- Page Header Close -->
        <div class="grid grid-cols-12 gap-x-6">
            <div class="col-span-6">
                 <!-- For Checking whether status is set or no-->
                 @if(session('status'))
                    @if (session('status') == 1)
                    <div class='bg-white dark:bg-bgdark border border-success alert text-success' role='alert'>
                        <span class='font-bold'>Result: </span> Database transaction Successful
                    </div>
                    @elseif(session('status') == 0)
                    <div class='bg-white dark:bg-bgdark border border-danger alert text-danger' role='alert'>
                        <span class='font-bold'>Result : </span> Error in Database transaction
                    </div>

                    @endif
                    @php
                        Illuminate\Support\Facades\Session::forget('status');
                        header("refresh: 1");
                    @endphp
                @endif

            </div>
        </div>

        <div class="grid grid-cols-12 gap-x-6">
            <div class="col-span-12">
                <!--For filtering the data as per requirement-->
                <a class="flex  items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="{{route('ESTB.staff.staffinformation')}}">
                    Staff Filter
               </a>

                <!--Filtering the data Ends-->
                <div class="box">
                    <div class="box-header">
                        <div class="flex">
                            <h5 class="box-title my-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M11 14.0619V20H13V14.0619C16.9463 14.554 20 17.9204 20 22H4C4 17.9204 7.05369 14.554 11 14.0619ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13Z" fill="rgba(0,0,0,1)"></path></svg>
                                Staff List
                            </h5>
                            <div class=" block ltr:ml-auto rtl:mr-auto my-auto">
                                <button type="button" id="add_staff_btn" data-hs-overlay="#add_staff" class="hs-dropdown-toggle ti-btn ti-btn-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM5 5V19H19V5H5ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z" fill="rgba(255,255,255,1)"></path></svg>
                                    Add Staff
                                </button>
                                <div id="add_staff" class="hs-overlay hidden ti-modal">
                                    <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 lg:mx-auto">
                                        <div class="ti-modal-content">
                                            <div class="ti-modal-header">
                                                <h3 class="ti-modal-title">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM5 5V19H19V5H5ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z"></path></svg>

                                                    Add New Staff
                                                </h3>
                                                <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                    data-hs-overlay="#add_staff">
                                                    <span class="sr-only">Close</span>
                                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                        d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                        fill="currentColor" />
                                                    </svg>
                                                </button>
                                                @if(($errors->has('fname'))||($errors->has('mname'))||($errors->has('lname'))||($errors->has('employee_type'))||($errors->has('email'))||($errors->has('departments_id')||($errors->has('association_id')))||($errors->has('designation_id'))||($errors->has('religion_id'))||($errors->has('castecategory_id'))||($errors->has('gender'))||($errors->has('dob'))||($errors->has('doj'))||($errors->has('date_of_superanuation'))||($errors->has('lname'))||($errors->has('bloodgroup'))||($errors->has('pan_card'))||($errors->has('adhar_card'))||($errors->has('contactno'))||($errors->has('local_address'))||($errors->has('permanent_address'))||($errors->has('emergency_no'))||($errors->has('emergency_name'))||($errors->has('gcr')))
                                                    <script>
                                                        // alert(1);
                                                        $(window).on('load', function() {

                                                        //alert(4);
                                                        //$('#horizontal-alignment-item-2').trigger('click');
                                                        $('#add_staff_btn').trigger("click");

                                                        });
                                                    </script>
                                                @endif
                                            </div>
                                            <form action="{{route('ESTB.staff.store')}}" method="post">
                                                @csrf
                                                <div class="ti-modal-body">
                                                    <div class="grid lg:grid-cols-3 gap-3 space-y-2 lg:space-y-0 pb-4">
                                                        <div class="space-y-2 ">
                                                            <label class="ti-form-label mb-0 font-bold">year<span class="text-red-500">*</span></label>
                                                            <input type="text"  name="year" id="year" class="my-auto ti-form-input stfname" placeholder="enteryear">
                                                            @if($errors->has('year'))
                                                                <div class="text-red-700">{{ $errors->first('year')}}</div>
                                                            @endif
                                                            <div id="stfNameError" class="error text-red-700"></div>
                                                        </div>
                                                        <div class="space-y-2">
                                                            <label class="ti-form-label mb-0 font-bold">status<span class="text-red-500">*</span></label>
                                                            <input type="text" id="status" name="status" class="my-auto ti-form-input stmname"  placeholder="status">
                                                            @if($errors->has('mname'))
                                                                <div class="text-red-700">{{ $errors->first('status')}}</div>
                                                            @endif
                                                            <div id="stmNameError" class="error text-red-700"></div>
                                                        </div>
                                                    </div>
                                                    <div class="grid lg:grid-cols-3 gap-3 space-y-2 lg:space-y-0 pb-4">
                                                        <<div class="space-y-2">
                                                            <label class="ti-form-label mb-0 font-bold">Taxregime<span class="text-red-500">*</span></label>
                                                            <select id="taxregime" class="ti-form-select" name="taxregime">
                                                                <option value="#">Choose a Taxregime</option>
                                                                {{-- @foreach ($departments as $department)
                                                                    <option value="{{$department->id}}">{{$department->dept_name}}</option>
                                                                @endforeach --}}
                                                            </select>
                                                            @if($errors->has('taxregime'))
                                                                <div class="text-red-700">{{ $errors->first('taxregime')}}</div>
                                                            @endif
                                                            <div id="stdepartmentError" class="error text-red-700"></div>
                                                        </div>
                                                       
                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0 pb-4">
                                                        <div class="space-y-2">
                                                            <label class="ti-form-label mb-0 font-bold">Department<span class="text-red-500">*</span></label>
                                                            <select id="stdepartment" class="ti-form-select" name="departments_id">
                                                                <option value="#">Choose a Department</option>
                                                                @foreach ($departments as $department)
                                                                    <option value="{{$department->id}}">{{$department->dept_name}}</option>
                                                                @endforeach
                                                            </select>
                                                            @if($errors->has('departments_id'))
                                                                <div class="text-red-700">{{ $errors->first('departments_id')}}</div>
                                                            @endif
                                                            <div id="stdepartmentError" class="error text-red-700"></div>
                                                        </div>
                                                        <div class="space-y-2">
                                                            <label class="ti-form-label mb-0 font-bold">Association<span class="text-red-500">*</span></label>
                                                            <select id="stassociation" class="ti-form-select" name="associations_id" id="associations_id" required>
                                                                <option value="#">Choose a Association</option>
                                                                @foreach ($associations as $association)
                                                                    <option value="{{$association->id}}">{{$association->asso_name}}</option>
                                                                @endforeach
                                                            </select>
                                                            @if($errors->has('associations_id'))
                                                                <div class="text-red-700">{{ $errors->first('associations_id')}}</div>
                                                            @endif
                                                            <div id="stassociationError" class="error text-red-700"></div>
                                                        </div>
                                                    </div>
                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0 pb-4">
                                                        <div class="space-y-2">
                                                            <label class="ti-form-label mb-0 font-bold">Designations<span class="text-red-500">*</span></label>
                                                            <select class="ti-form-select stdesignation" name="designations_id" id="designation_id" >
                                                                <option value="#">Choose a Designation</option>

                                                            </select>
                                                            @if($errors->has('designations_id'))
                                                                <div class="text-red-700">{{ $errors->first('designations_id')}}</div>
                                                            @endif
                                                            <div id="stdesignationError" class="error text-red-700"></div>
                                                        </div>
                                                        <div class="space-y-2 pr-4">
                                                            <label class="ti-form-label mb-0">Pay Type<span class="text-red-500">*</span></label>
                                                            <div class="flex gap-x-6">
                                                                <div class="flex hidden" id="Consolidated">
                                                                    <input type="radio" name="pay_type" value="Consolidated"  class="ti-form-radio" id="hs-radio-group-1 pay_type">
                                                                    <label for="hs-radio-group-1" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Consolidated</label>

                                                                </div>

                                                                <div class="flex">
                                                                    <input type="radio" name="pay_type" value="Payscale"  id="Payscale" class="ti-form-radio" id="hs-radio-group-2 pay_type">
                                                                    <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Payscale</label>

                                                                </div>

                                                                <div class="flex">
                                                                    <input type="radio" name="pay_type" value="Fixed" id="Fixed" class="ti-form-radio" id="hs-radio-group-2 pay_type">
                                                                    <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Fixed</label>

                                                                </div>
                                                                <div id="sttypeError" class="error text-red-700"></div>
                                                            </div>
                                                        </div>
                                                        <div class="space-y-2 hidden" id="fixed_pay_div">
                                                            <label class="ti-form-label mb-0 font-bold ">Fixed Pay</label>
                                                            <input type="text" name="fixed_pay" id="fixed_pay" class="my-auto ti-form-input" placeholder="fixed pay">
                                                            @if($errors->has('fixed_pay'))
                                                                <div class="text-red-700">{{ $errors->first('fixed_pay')}}</div>
                                                            @endif
                                                            <div id="stfixedError" class="error text-red-700"></div>
                                                        </div>

                                                        <div class="space-y-2 hidden" id="payscale_div">
                                                            <label class="ti-form-label mb-0 font-bold">Payscale</label>
                                                            <select class="ti-form-select" name="payscale_id" id="payscale_id">
                                                                <option>Choose a payscale</option>
                                                            </select>
                                                            @if($errors->has('payscale_id'))
                                                                    <div class="text-red-700">{{ $errors->first('payscale_id')}}</div>
                                                            @endif
                                                            <div id="stpayscaleError" class="error text-red-700"></div>
                                                        </div>

                                                        <!--<div class="space-y-2 hidden" id="payscalelevel">
                                                            <label class="ti-form-label mb-0 font-bold">Increment Level</label>
                                                            <select  class="ti-form-select" name="payscale_level">
                                                                <option value="#">Choose the payscale level</option>
                                                                <option value="1">Increment Level-1</option>
                                                                <option value="2">Increment Level-2</option>
                                                                <option value="3">Increment Level-3</option>
                                                            </select>
                                                        </div>-->

                                                        <div class="space-y-2 hidden" id="duration_div">
                                                            <label class="ti-form-label mb-0 font-bold ">Duration</label>
                                                            <input type="text" name="duration" id="duration" class="my-auto ti-form-input" placeholder="Duration">
                                                            @if($errors->has('duration'))
                                                                    <div class="text-red-700">{{ $errors->first('duration')}}</div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0 pb-4">
                                                        <div class="space-y-2">
                                                            <label class="ti-form-label mb-0 font-bold">Religion<span class="text-red-500">*</span></label>
                                                            <select class="ti-form-select streligion religion_id" name="religion_id" id="">
                                                                <option value="#">Choose a Religion</option>
                                                                @foreach ($religions as $religion)
                                                                    <option value="{{$religion->id}}">{{$religion->religion_name}}</option>
                                                                @endforeach

                                                            </select>
                                                            @if($errors->has('religion_id '))
                                                                <div class="text-red-700">{{ $errors->first('religion_id ')}}</div>
                                                            @endif
                                                            <div id="streligionError" class="error text-red-700"></div>
                                                        </div>
                                                        <div class="space-y-2">
                                                            <label class="ti-form-label mb-0 font-bold">Caste Category<span class="text-red-500">*</span></label>
                                                            <select class="ti-form-select stcastecategory castecategory_list" name="castecategory_id" id="">

                                                            </select>
                                                            <div id="stcastecategoryError" class="error text-red-700"></div>
                                                            @if($errors->has('castecategory_id '))
                                                                <div class="text-red-700">{{ $errors->first('castecategory_id ')}}</div>
                                                            @endif

                                                        </div>
                                                        <div class="space-y-2 pr-4">
                                                            <label class="ti-form-label mb-0">Gender<span class="text-red-500">*</span></label>
                                                            <div class="flex gap-x-6">
                                                                <div class="flex">
                                                                    <input type="radio" name="gender" value="female" class="ti-form-radio" id="hs-radio-group-1" checked>
                                                                    <label for="hs-radio-group-1" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Female</label>
                                                                </div>

                                                                <div class="flex">
                                                                    <input type="radio" name="gender" value="male" class="ti-form-radio" id="hs-radio-group-2">
                                                                    <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Male</label>
                                                                </div>

                                                                <div class="flex">
                                                                    <input type="radio" name="gender" value="others" class="ti-form-radio" id="hs-radio-group-3" >
                                                                    <label for="hs-radio-group-3" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Others</label>
                                                                </div>
                                                                @if($errors->has('gender '))
                                                                    <div class="text-red-700">{{ $errors->first('gender ')}}</div>
                                                                @endif
                                                                <div id="stgenderError" class="error text-red-700"></div>
                                                            </div>

                                                        </div>

                                                        <div class="space-y-2">
                                                            <label class="ti-form-label mb-0 font-bold">Date Of Birth<span class="text-red-500">*</span></label>
                                                            <input type="date" id="stdob" name="dob" class="ti-form-input flatpickr-input dob date"
                                                                placeholder="Choose date">
                                                            <div id="stdobError" class="error text-red-700"></div>
                                                            @if($errors->has('dob '))
                                                                <div class="text-red-700">{{ $errors->first('dob ')}}</div>
                                                            @endif

                                                        </div>
                                                        <div class="space-y-2">
                                                            <label class="ti-form-label mb-0 font-bold">Date Of Joining<span class="text-red-500">*</span></label>
                                                            <input type="date" id="stdoj" name="doj" class="ti-form-input flatpickr-input doj date"
                                                                placeholder="Choose date">
                                                            <div id="stdojError" class="error text-red-700"></div>
                                                            @if($errors->has('doj '))
                                                                <div class="text-red-700">{{ $errors->first('doj ')}}</div>
                                                            @endif
                                                        </div>

                                                        <div class="space-y-2">
                                                            <label class="ti-form-label mb-0 font-bold">Date Of Superannution</label>
                                                            <input type="date" id="stdos" name="date_of_superanuation" class="ti-form-input flatpickr-input dos date"
                                                            placeholder="Choose date">
                                                            <div id="stdosError" class="error text-red-700"></div>
                                                            @if($errors->has('date_of_superanuation '))
                                                                <div class="text-red-700">{{ $errors->first('date_of_superanuation ')}}</div>
                                                            @endif

                                                        </div>
                                                        <div class="space-y-2">
                                                            <label class="ti-form-label mb-0 font-bold">Blood Group</label>
                                                            <select id="stbloodgroup" class="ti-form-select" name="bloodgroup">
                                                                <option value="null">Choose a Blood Group</option>
                                                                <option value="A+">A + (Positive)</option>
                                                                <option value="A-">A - (Negetive)</option>
                                                                <option value="B+">B + (Positive)</option>
                                                                <option value="B-">B - (Negetive)</option>
                                                                <option value="AB+">AB + (Positive)</option>
                                                                <option value="AB-">AB - (Negetive)</option>
                                                                <option value="O+">O + (Positive)</option>
                                                                <option value="O-">O - (Negetive)</option>
                                                            </select>
                                                            <div id="stbloodgroupError" class="error text-red-700"></div>
                                                            @if($errors->has('bloodgroup '))
                                                                <div class="text-red-700">{{ $errors->first('bloodgroup ')}}</div>
                                                            @endif
                                                        </div>
                                                        <div class="space-y-2">
                                                            <label class="ti-form-label mb-0 font-bold">PAN Card No:</label>
                                                            <input type="text" id="stpancard" name="pan_card" class="my-auto ti-form-input"
                                                            placeholder="XXXXX XXXXX">
                                                            <div id="stpancardError" class="error text-red-700"></div>
                                                            @if($errors->has('pan_card '))
                                                                <div class="text-red-700">{{ $errors->first('pan_card ')}}</div>
                                                            @endif
                                                        </div>
                                                        <div class="space-y-2">
                                                            <label class="ti-form-label mb-0 font-bold">Adhar Card No:</label>
                                                            <input type="text" id="stadharcard" name="adhar_card" class="my-auto ti-form-input"
                                                                placeholder="XXXX-XXXX-XXXX-XXXX">
                                                            <div id="stadharcardError" class="error text-red-700"></div>
                                                            @if($errors->has('adhar_card '))
                                                                <div class="text-red-700">{{ $errors->first('adhar_card ')}}</div>
                                                            @endif
                                                        </div>
                                                        <div class="space-y-2">
                                                            <label class="ti-form-label mb-0 font-bold">Contact No:</label>
                                                            <input type="text" id="stcontactno" name="contactno" class="my-auto ti-form-input"
                                                                placeholder="XXXXX-XXXXX">
                                                            <div id="stcontactnoError" class="error text-red-700"></div>
                                                            @if($errors->has('contactno '))
                                                                <div class="text-red-700">{{ $errors->first('contactno ')}}</div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="my-5">
                                                        <div class="space-y-2">
                                                            <label class="ti-form-label mb-0 font-bold">Local Address<span class="text-red-500">*</span></label>
                                                            <input type="text" id="stlocaladd" name="local_address" class="my-auto ti-form-input"  placeholder="Local Address">
                                                        </div>
                                                        <div id="stlocaladdError" class="error text-red-700"></div>
                                                        @if($errors->has('local_address '))
                                                            <div class="text-red-700">{{ $errors->first('local_address ')}}</div>
                                                        @endif
                                                    </div>
                                                    <div class="my-5">
                                                        <div class="space-y-2">
                                                            <label class="ti-form-label mb-0 font-bold">Permanant Address<span class="text-red-500">*</span></label>
                                                            <input type="text" id="stpermentadd" name="permanent_address" class="my-auto ti-form-input" placeholder="Permenant Address">
                                                            <div id="stpermentaddError" class="error text-red-700"></div>
                                                            @if($errors->has('permanent_address '))
                                                                <div class="text-red-700">{{ $errors->first('permanent_address ')}}</div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="grid lg:grid-cols-3 gap-3 space-y-2 lg:space-y-0">
                                                        <div class="space-y-2">
                                                            <label class="ti-form-label mb-0 font-bold">Emergency No</label>
                                                            <input type="text" id="stemergencyno" name="emergency_no" class="ti-form-input"   placeholder="emergency no">
                                                            <div id="stemergencynoError" class="error text-red-700"></div>
                                                            @if($errors->has('emergency_no '))
                                                                <div class="text-red-700">{{ $errors->first('emergency_no ')}}</div>
                                                            @endif
                                                        </div>
                                                        <div class="space-y-2">
                                                            <label class="ti-form-label mb-0 font-bold">Emergency Name</label>
                                                            <input type="text" id="stemergencyname" name="emergency_name" class="ti-form-input"  placeholder="emergency name">
                                                            <div id="stemergencynameError" class="error text-red-700"></div>
                                                            @if($errors->has('emergency_name '))
                                                                <div class="text-red-700">{{ $errors->first('emergency_name ')}}</div>
                                                            @endif
                                                        </div>
                                                        <div class="space-y-2">
                                                            <label class="ti-form-label mb-0 font-bold">GC Resolution No</label>
                                                            <input type="text" id="stgcrno" name="gcr" class="ti-form-input"  placeholder="GC Resolution No:">
                                                            <div id="stgcrnoError" class="error text-red-700"></div>
                                                            @if($errors->has('gcr '))
                                                                <div class="text-red-700">{{ $errors->first('gcr ')}}</div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ti-modal-footer">
                                                    <button type="button" id=""
                                                        class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                        data-hs-overlay="#add_staff">
                                                        Close
                                                    </button>
                                                    <input type="submit" id="staffinformation_store_add_btn" class="ti-btn  bg-primary text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10 float-right" value="Add"/>
                                                </div>
                                            </form>
                                            <!--newly added-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




@endsection