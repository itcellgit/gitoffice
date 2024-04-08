@extends('layouts.components.staff.master-teaching')

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

                                    {{-- <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium">Welcome<span class="text-primary"> {{ $staff->fname.' '.$staff->mname.' '.$staff->lname }}</span></h3> --}}
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                        <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                            <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                        </a>
                                    </li>
                                </ol>
                            </div>
                        <!-- Page Header Close -->

                        <div class="grid grid-cols-12 gap-x-6">
                            <div class="col-span-6">
                                 <!-- For Checking whether status is set or no-->
                                 @if(session('return_data'))
                                    @if (Session::get('return_data')['status'] == 1)
                                        <div class='bg-white dark:bg-bgdark border border-success alert text-success' role='alert'>
                                            <span class='font-bold'>Result: </span> Database transaction Successful
                                        </div>
                                    @elseif(Session::get('return_data')['status'] == 0 && Session::get('return_data')['file_size_status'] == 0)
                                        @if(Session::get('return_data')['status'] == 0)
                                            <div class='bg-white dark:bg-bgdark border border-danger alert text-danger' role='alert'>
                                                <span class='font-bold'>Result : </span> Something went Wrong !
                                            </div>
                                        @endif
                                        @if (Session::get('return_data')['file_size_status'] == 0)
                                            <div class='bg-white dark:bg-bgdark border border-danger alert text-danger' role='alert'>
                                                <span class='font-bold'>Result : </span> File size is more than 500KB. Please consider re-uploading
                                            </div>
                                        @endif
                                    @endif
                                    @php
                                        Illuminate\Support\Facades\Session::forget('return_data');
                                        header("refresh: 2");
                                    @endphp
                                @endif

                            </div>
                        </div>
                        <!-- Start::row-1 -->
                        <div class="col-span-12 xl:col-span-9">
                            <div class="box">
                                <div class="box-header">
                                     <h4> </h4>
                                </div>

                                <div class="box-body pt-0">
                                    <div class="mt-3">
                                        <div id="profile-settings-1" role="tabpanel" aria-labelledby="profile-settings-item-1">
                                            <div class="box border-0 shadow-none mb-0">
                                                <div class="box-header">
                                                <h5 class="box-title leading-none flex"><i class="ri ri-shield-user-line ltr:mr-2 rtl:ml-2"></i> Personal Information</h5>
                                                </div>
                                                <div class="box-body">
                                                    <div>
                                                        <form action="{{route('Staff.Teaching.update',$staff->id)}}" method="post">
                                                        {{-- <form action="{{route('Staff.Teaching.update')}}" method="post"> --}}
                                                            @csrf
                                                            @method('patch')
                                                            <div class="grid lg:grid-cols-3 gap-3 space-y-2 lg:space-y-0 pb-4">
                                                                <div class="space-y-2 ">
                                                                    <label class="ti-form-label mb-0 font-bold">First Name</label>
                                                                    <input type="text" name="fname" id="fname" class="my-auto ti-form-input" placeholder="Firstname" value="">
                                                                </div>
                                                                <div class="space-y-2">
                                                                    <label class="ti-form-label mb-0 font-bold">Middle Name</label>
                                                                    <input type="text" name="mname" class="my-auto ti-form-input" placeholder="Middle Name" value="">
                                                                </div>
                                                                <div class="space-y-2">
                                                                    <label class="ti-form-label mb-0 font-bold">Last Name</label>
                                                                    <input type="text" name="lname" id="lname" class="my-auto ti-form-input" placeholder="Lastname" value="">
                                                                </div>
                                                            </div>
                                                            <!--update the staff personal information-->
                                                            <div class="grid lg:grid-cols-3 gap-3 space-y-2 lg:space-y-0 pb-4">
                                                                <div class="space-y-2">
                                                                <label class="ti-form-label mb-0 font-bold">Employee Type</label>
                                                                    <select class="ti-form-select" name="employee_type" id="employee_type" readonly>
                                                                        <option value="null">Choose a Employee Type</option>
                                                                        <option value="Teaching" {{$staff->latest_employee_type[0]->employee_type == "Teaching"?'selected':''}}>Teaching</option>
                                                                        <option value="Non-Teaching" {{$staff->latest_employee_type[0]->employee_type == "Non-Teaching"?'selected':''}}>Non-Teaching</option>
                                                                    </select>
                                                                </div>
                                                                <div class="space-y-2">
                                                                    <label class="ti-form-label mb-0 font-bold">Email</label>
                                                                    <div class="flex rounded-sm">
                                                                        <input type="text" name="email" id="email_id"  class="my-auto ti-form-input" placeholder="youremail" value="{{$user->email}}" readonly>
                                                                        <!--span class="px-4 inline-flex items-center min-w-fit ltr:rounded-r-sm rtl:rounded-l-sm border ltr:border-l-0 rtl:border-r-0 border-gray-200 bg-gray-50 text-sm dark:bg-black/20 dark:border-white/10">
                                                                            <span class="text-sm text-gray-500 dark:text-white/70">@git.edu</span>
                                                                        </span-->
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0 pb-4">
                                                                <div class="space-y-2">
                                                                    <label class="ti-form-label mb-0 font-bold">Religion</label>
                                                                    <select class="ti-form-select" name="religion_id" id="religion_id">
                                                                        <option>Choose a Religion</option>
                                                                        @foreach ($religions as $religion)
                                                                        <option value="{{$religion->id}}" {{$staff->religion_id == $religion->id? 'selected':''}}>{{$religion->religion_name}}</option>
                                                                    @endforeach

                                                                        </select>
                                                                </div>
                                                                <div class="space-y-2">
                                                                    <label class="ti-form-label mb-0 font-bold">Caste Category</label>

                                                                    <select class="ti-form-select" name="castecategory_id" id="castecategory_list">
                                                                        @foreach ($castecategories as $caste)
                                                                        <option value="{{$caste->id}}" {{$staff->castecategory_id == $caste->id? 'selected':''}}>{{$caste->caste_name.'-'.$caste->subcastes_name.'-'.$caste->category.'-'.$caste->category_no}}</option>
                                                                    @endforeach
                                                                    </select>

                                                                </div>
                                                                    <div class="space-y-2 pr-4">
                                                                        <label class="ti-form-label mb-0">Gender</label>
                                                                        <div class="flex gap-x-6">
                                                                            <div class="flex">
                                                                                <input type="radio" name="gender" value="female" {{$staff->gender == "female"?'checked':''}} class="ti-form-radio" id="hs-radio-group-1">
                                                                                <label for="hs-radio-group-1" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Female</label>
                                                                            </div>

                                                                            <div class="flex">
                                                                                <input type="radio" name="gender" value="male" {{$staff->gender == "male"?'checked':''}} class="ti-form-radio" id="hs-radio-group-2">
                                                                                <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Male</label>
                                                                            </div>

                                                                            <div class="flex">
                                                                                <input type="radio" name="gender" value="others" {{$staff->gender == "others"?'checked':''}} class="ti-form-radio" id="hs-radio-group-3">
                                                                                <label for="hs-radio-group-3" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Others</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="space-y-2">
                                                                        <label class="ti-form-label mb-0 font-bold">Date Of Birth</label>
                                                                        <input type="text" name="dob" value="{{$staff->dob}}" class="ti-form-input flatpickr-input date" id="dob"
                                                                            placeholder="Choose date" readonly>
                                                                    </div>
                                                                    <div class="space-y-2">
                                                                        <label class="ti-form-label mb-0 font-bold">Date Of Joining</label>
                                                                        <input type="text" name="doj" value="{{$staff->doj}}" class="ti-form-input flatpickr-input date" id="doj"
                                                                            placeholder="Choose date" readonly>
                                                                    </div>

                                                                    <div class="space-y-2">
                                                                        <label class="ti-form-label mb-0 font-bold">Date Of Superannution</label>
                                                                        <input type="text" name="date_of_superanuation" class="ti-form-input flatpickr-input date" id="dos"
                                                                        value="{{$staff->date_of_superanuation}}" placeholder="Choose date" readonly>
                                                                    </div>

                                                                    <div class="space-y-2">
                                                                        <label class="ti-form-label mb-0 font-bold">Date Of Confirmation</label>

                                                                         <input type="text" name="date_of_confirmation" class="ti-form-input flatpickr-input" value="{{($confirmationdate!=null ? $confirmationdate:"" )}}"
                                                                            placeholder="Choose date" readonly>
                                                                    </div>
                                                                    <div class="space-y-2">
                                                                        <label class="ti-form-label mb-0 font-bold">Date Of Increment</label>
                                                                        <input type="text" name="date_of_increment" value="{{$staff->date_of_increment}}" class="ti-form-input flatpickr-input date" id=""
                                                                            placeholder="Choose date" readonly>
                                                                    </div>
                                                                    <div class="space-y-2">
                                                                        <label class="ti-form-label mb-0 font-bold">Blood Group</label>
                                                                        <select class="ti-form-select" name="bloodgroup">
                                                                            <option value="null">Choose a Blood Group</option>
                                                                            <option value="A+" {{$staff->bloodgroup == "A+"?'selected':''}}>A + (Positive)</option>
                                                                            <option value="A-" {{$staff->bloodgroup == "A-"?'selected':''}} >A - (Negetive)</option>
                                                                            <option value="B+" {{$staff->bloodgroup == "B+"?'selected':''}}>B + (Positive)</option>
                                                                            <option value="B-" {{$staff->bloodgroup == "B-"?'selected':''}}>B - (Negetive)</option>
                                                                            <option value="AB+" {{$staff->bloodgroup == "AB+"?'selected':''}}>AB + (Positive)</option>
                                                                            <option value="AB-" {{$staff->bloodgroup == "AB-"?'selected':''}}>AB - (Negetive)</option>
                                                                            <option value="O+" {{$staff->bloodgroup == "O+"?'selected':''}}>O + (Positive)</option>
                                                                            <option value="O-" {{$staff->bloodgroup == "O-"?'selected':''}}>O - (Negetive)</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="space-y-2">
                                                                        <label class="ti-form-label mb-0 font-bold">PAN Card No:</label>
                                                                        <input type="text" name="pan_card" class="my-auto ti-form-input"
                                                                            placeholder="XXXXX XXXXX" value="{{$staff->pan_card}}">
                                                                    </div>
                                                                    <div class="space-y-2">
                                                                        <label class="ti-form-label mb-0 font-bold">Adhar Card No:</label>
                                                                        <input type="text" name="adhar_card" class="my-auto ti-form-input"
                                                                            placeholder="XXXX-XXXX-XXXX-XXXX" value="{{$staff->adhar_card}}">
                                                                    </div>
                                                                    <div class="space-y-2">
                                                                        <label class="ti-form-label mb-0 font-bold">Contact No:</label>
                                                                        <input type="text" name="contactno" value="{{$staff->contactno}}" class="my-auto ti-form-input"
                                                                            placeholder="XXXXX-XXXXX">
                                                                    </div>
                                                            </div>
                                                            <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0 pb-4">
                                                                <div class="space-y-2" id="AICTE_id">
                                                                    <label class="ti-form-label mb-0 font-bold">AICTE ID:</label>
                                                                    <input type="text" name="aicte_id" class="my-auto ti-form-input" value="{{$staff->aicte_id}}"
                                                                        placeholder="AICTE ID" readonly>
                                                                </div>
                                                                <div class="space-y-2" id="VTU_id">
                                                                    <label class="ti-form-label mb-0 font-bold">VTU ID:</label>
                                                                    <input type="text" name="vtu_id" class="my-auto ti-form-input" value="{{$staff->vtu_id}}"
                                                                        placeholder="VTU ID" readonly>
                                                                </div>
                                                                @if($staff->latest_employee_type()->first()->employee_type=="Non-Teaching")
                                                                <div class="space-y-2" id="ESI_no">
                                                                    <label class="ti-form-label mb-0 font-bold">ESI No:</label>
                                                                    <input type="text" name="esi_no" class="my-auto ti-form-input" value="{{$staff->esi_no}}"
                                                                        placeholder="ESI no">
                                                                </div>
                                                                <div class="space-y-2" id="UN_no">
                                                                    <label class="ti-form-label mb-0 font-bold">UN No:</label>
                                                                    <input type="text" name="un_no" class="my-auto ti-form-input" value="{{$staff->un_no}}"
                                                                        placeholder="Un No">
                                                                </div>
                                                                @endif
                                                            </div>
                                                            <div class="my-5">
                                                                <div class="space-y-2">
                                                                    <label class="ti-form-label mb-0 font-bold">Local Address</label>
                                                                    <input type="text" name="local_address" class="my-auto ti-form-input" value="{{$staff->local_address}}" placeholder="Local Address">
                                                                </div>
                                                            </div>
                                                            <div class="my-5">
                                                                <div class="space-y-2">
                                                                    <label class="ti-form-label mb-0 font-bold">Permanant Address</label>
                                                                    <input type="text" name="permanent_address" class="my-auto ti-form-input" value="{{$staff->permanent_address}}" placeholder="Permenant Address">
                                                                </div>
                                                            </div>
                                                            <div class="grid lg:grid-cols-3 gap-3 space-y-2 lg:space-y-0">
                                                                <div class="space-y-2">
                                                                    <label class="ti-form-label mb-0 font-bold">Emergency No</label>
                                                                    <input type="text" name="emergency_no" class="ti-form-input" value="{{$staff->emergency_no}}" placeholder="emergency no">
                                                                </div>
                                                                <div class="space-y-2">
                                                                    <label class="ti-form-label mb-0 font-bold">Emergency Name</label>
                                                                    <input type="text" name="emergency_name" class="ti-form-input" value="{{$staff->emergency_name}}" placeholder="emergency name">
                                                                </div>


                                                            </div>

                                                            <div class="pt-6 pl-48">
                                                                <button type="submit" class="ti-btn m-0 ti-btn-soft-primary text-right">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M5.46257 4.43262C7.21556 2.91688 9.5007 2 12 2C17.5228 2 22 6.47715 22 12C22 14.1361 21.3302 16.1158 20.1892 17.7406L17 12H20C20 7.58172 16.4183 4 12 4C9.84982 4 7.89777 4.84827 6.46023 6.22842L5.46257 4.43262ZM18.5374 19.5674C16.7844 21.0831 14.4993 22 12 22C6.47715 22 2 17.5228 2 12C2 9.86386 2.66979 7.88416 3.8108 6.25944L7 12H4C4 16.4183 7.58172 20 12 20C14.1502 20 16.1022 19.1517 17.5398 17.7716L18.5374 19.5674Z"></path></svg>
                                                                    Update
                                                                </button>
                                                                <!--a href="javascript:void(0);" class="ti-btn m-0 ti-btn-soft-secondary"><i class="ri ri-close-circle-line"></i> Cancel</a-->

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
                             <!-- End::row-1 -->
                    </div>
                    <!-- End::main-content -->

                </div>




@endsection

@section('scripts')

        <!-- FLATPICKR JS -->
        <script src="{{asset('build/assets/libs/flatpickr/flatpickr.min.js')}}"></script>

        <!-- CHOICES JS -->
        <script src="{{asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

         <!-- TABULATOR JS -->
         <script src="{{asset('build/assets/libs/tabulator-tables/js/tabulator.min.js')}}"></script>

        <!-- FORM-LAYOUT JS -->
        @vite('resources/assets/js/profile-settings.js')
        <!-- pro activity other sponsored code start-->
        <!-- Include the latest jQuery -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

        <!-- Include the latest DataTables -->
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>







@endsection
