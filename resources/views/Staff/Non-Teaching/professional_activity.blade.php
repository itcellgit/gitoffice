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
                        {{-- <h1>Welcome, {{ $staff->fname }}</h1> --}}
                        <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium">Welcome<span class="text-primary"> {{ $staff->fname.' '.$staff->mname.' '.$staff->lname }}</span></h3>
                    </div>
                    <ol class="flex items-center whitespace-nowrap min-w-0">
                        <li class="text-sm">
                            <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                Professional Activities
                                <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
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

                        <!-- Start::row-1 -->
                        <div class="grid grid-cols-12 gap-x-6">

                            <div class="col-span-12 xl:col-span-12">
                                    <div class="box">

                                            {{-- table code --}}
                                            <div class="box-body">
                                                <div class="border-b border-gray-200 dark:border-white/10">

                                                    </div>

                                                    <div class="mt-3">
                                                            <!--Professional Activity Attended-->
                                                            <div class="flex">
                                                                <h5 class="box-title my-auto">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32"><path d="M22 21H2V19H3V4C3 3.44772 3.44772 3 4 3H18C18.5523 3 19 3.44772 19 4V9H21V19H22V21ZM17 19H19V11H13V19H15V13H17V19ZM17 9V5H5V19H11V9H17ZM7 11H9V13H7V11ZM7 15H9V17H7V15ZM7 7H9V9H7V7Z"></path></svg>
                                                                    Professional Activity Attended Details
                                                                </h5>
                                                                <div class="avatar-container flex py-4">
                                                                    <div class="avatar-wrapper flex items-center">
                                                                        <div class="avatar rounded-sm p-1 bg-green-500 border-gray-900 border-2 w-6 h-6"></div>
                                                                        <div class="avatar-text font-bold ml-2 ">Valid</div>
                                                                    </div>

                                                                    <div class="avatar-wrapper flex items-center mx-2">
                                                                        <div class="avatar rounded-sm p-1 bg-red-500 border-gray-900 border-2 w-6 h-6"></div>
                                                                        <div class="avatar-text font-bold ml-2">Invalid</div>
                                                                    </div>

                                                                    <div class="avatar-wrapper flex items-center mx-2">
                                                                        <div class="avatar rounded-sm p-1 bg-yellow-400 border-gray-900 border-2 w-6 h-6"></div>
                                                                        <div class="avatar-text font-bold ml-2">Updated</div>
                                                                    </div>

                                                                    <div class="avatar-wrapper flex items-center">
                                                                        <div class="avatar rounded-sm p-1 border-gray-900 border-2 w-6 h-6"></div>
                                                                        <div class="avatar-text font-semibold ml-2">New</div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="flex">
                                                                <button type="button" id="pro_activity_btn" class="hs-dropdown-toggle ti-btn ti-btn-primary float-right" data-hs-overlay="#add_professional_activity_attended">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM5 5V19H19V5H5ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z" fill="rgba(255,255,255,1)"></path></svg>
                                                                    Add Professional Activity Attended
                                                                </button>

                                                                <div id="add_professional_activity_attended" class="hs-overlay hidden ti-modal">
                                                                    <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                                        <div class="ti-modal-content">
                                                                            <div class="ti-modal-header">
                                                                                <h3 class="ti-modal-title">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM5 5V19H19V5H5ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z"></path></svg>
                                                                                    Add New Professional Activities attended details
                                                                                </h3>
                                                                                <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                                    data-hs-overlay="#add_professional_activity_attended">
                                                                                    <span class="sr-only">Close</span>
                                                                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <path
                                                                                        d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                        fill="currentColor" />
                                                                                    </svg>
                                                                                </button>
                                                                                @if(($errors->has('title'))||($errors->has('organizer'))||($errors->has('role'))||($errors->has('level'))||($errors->has('category'))||($errors->has('sponsored'))||($errors->has('sponsored_by'))||($errors->has('from_date'))||($errors->has('to_date'))||($errors->has('no_of_days')))
                                                                                    <script>
                                                                                        //alert(1);
                                                                                        $(window).on('load', function() {

                                                                                                //alert('attended');

                                                                                                $('#horizontal-alignment-item-1').trigger('click')
                                                                                               $('#pro_activity_btn').trigger("click");


                                                                                        });
                                                                                    </script>
                                                                                @endif
                                                                            </div>
                                                                            <form  action="{{route('Non-Teaching.professionalactivities.attended.create')}}" method="post" enctype="multipart/form-data">
                                                                                @csrf
                                                                                <div class="ti-modal-body">
                                                                                    <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">

                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                            <label for="with-corner-hint" class="ti-form-label font-bold">Title:<span class="text-red-500">*</span></label>
                                                                                            <input type="text" name="title" class="ti-form-input" required placeholder="Title" id="patt_title" value="{{ old('title') }}">
                                                                                            @if($errors->has('title'))
                                                                                                <div class="text-red-700">{{ $errors->first('title')}}</div>
                                                                                            @endif
                                                                                            <div id="patt_titleError" class="error text-red-700"></div>
                                                                                        </div>
                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                            <label for="" class="ti-form-label  font-bold">Organizer:<span class="text-red-500">*</span></label>
                                                                                            <input type="text" name="organizer" class="ti-form-input" required placeholder="Organizer" id="patt_organizer" value="{{ old('organizer') }}">
                                                                                            @if($errors->has('organizer'))
                                                                                                <div class="text-red-700">{{ $errors->first('organizer')}}</div>
                                                                                            @endif
                                                                                            <div id="patt_organizerError" class="error text-red-700"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">

                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                            <label for="" class="ti-form-label mb-0 font-bold">Role:<span class="text-red-500">*</span></label>
                                                                                            <select class="ti-form-select role" name="role" required id="patt_role">
                                                                                                <option value="#">Choose Role</option>
                                                                                                <option value="Participant" {{ old('role') == 'Participant' ? 'selected' : '' }}>Participant</option>
                                                                                                <option value="Resource Person" {{ old('role') == 'Resource Person' ? 'selected' : '' }}>Resource Person</option>
                                                                                                <option value="Jury" {{ old('role') == 'Jury' ? 'selected' : '' }}>Jury</option>
                                                                                            </select>

                                                                                            @if($errors->has('role'))
                                                                                                <div class="text-red-700">{{ $errors->first('role')}}</div>
                                                                                            @endif
                                                                                            <div id="patt_roleError" class="error text-red-700"></div>
                                                                                        </div>
                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                            <label for="" class="ti-form-label mb-0 font-bold">Level:<span class="text-red-500">*</span></label>
                                                                                            <select class="ti-form-select level" name="level" required id="patt_level">
                                                                                                <option value="#">Choose Level</option>
                                                                                                <option value="Local" {{ old('level') == 'Local' ? 'selected' : '' }}>Local</option>
                                                                                                <option value="National" {{ old('level') == 'National' ? 'selected' : '' }}>National</option>
                                                                                                <option value="International" {{ old('level') == 'International' ? 'selected' : '' }}>International</option>
                                                                                            </select>

                                                                                            @if($errors->has('level'))
                                                                                                <div class="text-red-700">{{ $errors->first('level')}}</div>
                                                                                            @endif
                                                                                            <div id="patt_levelError" class="error text-red-700"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                            <label for="" class="ti-form-label  font-bold">Category:<span class="text-red-500">*</span></label>
                                                                                            <select class="ti-form-select category" name="category" required id="patt_category">
                                                                                                <option value="#">Choose Category</option>
                                                                                                <option value="Seminar" {{ old('category') == 'Seminar' ? 'selected' : '' }}>Seminar</option>
                                                                                                <option value="Webinar" {{ old('category') == 'Webinar' ? 'selected' : '' }}>Webinar</option>
                                                                                                <option value="Certification Program" {{ old('category') == 'Certification Program' ? 'selected' : '' }}>Certification Program</option>
                                                                                                <option value="Hackathon" {{ old('category') == 'Hackathon' ? 'selected' : '' }}>Hackathon</option>
                                                                                            </select>

                                                                                            @if($errors->has('category'))
                                                                                                <div class="text-red-700">{{ $errors->first('category')}}</div>
                                                                                            @endif
                                                                                            <div id="patt_categoryError" class="error text-red-700"></div>
                                                                                        </div>
                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                            <label for="" class="ti-form-label font-bold">Sponsored:<span class="text-red-500">*</span></label>
                                                                                            <select class="ti-form-select sponsored_type sponsored" name="sponsored" required id="patt_sponsored">
                                                                                                <option value="#">Choose One</option>
                                                                                                <option value="Yes" {{ old('sponsored') == 'Yes' ? 'selected' : '' }}>Yes</option>
                                                                                                <option value="No" {{ old('sponsored') == 'No' ? 'selected' : '' }}>No</option>
                                                                                            </select>

                                                                                            @if($errors->has('sponsored'))
                                                                                                <div class="text-red-700">{{ $errors->first('sponsored')}}</div>
                                                                                            @endif
                                                                                             <div id="patt_sponsoredError" class="error text-red-700"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    {{-- new added code  --}}
                                                                                    <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                        <div class="max-w-sm space-y-3 pb-6 sponsored_by">
                                                                                            <label for="" class="ti-form-label font-bold">Sponsored By:</label>
                                                                                            <select class="ti-form-select sponsoredBy" id="pro_att_sponsoredby" name="sponsored_by">
                                                                                                <option value="#">Choose One</option>
                                                                                                <option value="KLS GIT" {{ old('sponsored_by') == 'KLS GIT' ? 'selected' : '' }}>KLS GIT</option>
                                                                                                <option value="Other" {{ old('sponsored_by') == 'Other' ? 'selected' : '' }}>Other</option>
                                                                                            </select>

                                                                                            @if($errors->has('sponsored_by'))
                                                                                                <div class="text-red-700">{{ $errors->first('sponsored_by') }}</div>
                                                                                            @endif
                                                                                            <div id="pro_att_sponsoredbyError" class="error text-red-700"></div>
                                                                                        </div>
                                                                                        <div class="max-w-sm space-y-3 pb-6 otherSponsor othersponsored">
                                                                                            <label for="" class="ti-form-label font-bold">Other Sponsor:</label>
                                                                                            <input type="text" name="other_sponsored" class="ti-form-input" id="pro_att_otherSponsor" placeholder="Other Sponsor" value="{{ old('other_sponsored') }}">
                                                                                            @if($errors->has('other_sponsored'))
                                                                                                <div class="text-red-700">{{ $errors->first('other_sponsored') }}</div>
                                                                                            @endif
                                                                                            <div id="othersponsoredError" class="error text-red-700"></div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <!--old-->
                                                                                    <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                        {{-- <div class="max-w-sm space-y-3 pb-6 sponsored_by">
                                                                                            <label for="" class="ti-form-label pt-4 font-bold">Sponsored By :</label>
                                                                                            <input type="text" name="sponsored_by" class="ti-form-input" placeholder=" Sponsored By" id="patt_sponsoredby">
                                                                                            @if($errors->has('sponsored_by'))
                                                                                                <div class="text-red-700">{{ $errors->first('sponsored_by')}}</div>
                                                                                            @endif
                                                                                             <div id="patt_sponsoredbyError" class="error text-red-700"></div>
                                                                                        </div> --}}
                                                                                        <div class="flex  max-w-sm space-y-3 pb-6">
                                                                                            <label for="" class="ti-form-label font-bold">From Date:<span class="text-red-500">*</span></label>
                                                                                            <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                                        class="ri ri-calendar-line"></i></span>
                                                                                            </div>

                                                                                            <input type="text" name="from_date" id="patt_from_date"
                                                                                            class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date attended_from_date"
                                                                                             required placeholder="Choose date" value="{{ old('from_date') }}">
                                                                                            @if($errors->has('from_date'))
                                                                                                <div class="text-red-700">{{ $errors->first('from_date')}}</div>
                                                                                            @endif
                                                                                            <div id="patt_fromdateError" class="error text-red-700"></div>
                                                                                        </div>
                                                                                        <div class="flex max-w-sm space-y-3 pb-6">
                                                                                            <label for="" class="ti-form-label font-bold">To Date:<span class="text-red-500">*</span></label>
                                                                                            <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                                        class="ri ri-calendar-line"></i></span>
                                                                                            </div>

                                                                                            <input type="text" name="to_date" id="patt_to_date"
                                                                                            class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date attended_to_date"
                                                                                             required placeholder="Choose date" value="{{ old('to_date') }}">
                                                                                            @if($errors->has('to_date'))
                                                                                                <div class="text-red-700">{{ $errors->first('to_date')}}</div>
                                                                                            @endif
                                                                                            <div id="patt_todateError" class="error text-red-700"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                            <label for="" class="ti-form-label pt-4 font-bold">No Of Days:<span class="text-red-500">*</span></label>
                                                                                            <input type="text" name="no_of_days" class="ti-form-input no_of_days" required placeholder="No of Days" readonly id="patt_noofdays" value="{{ old('no_of_days') }}">
                                                                                            @if($errors->has('no_of_days'))
                                                                                                <div class="text-red-700">{{ $errors->first('no_of_days')}}</div>
                                                                                            @endif
                                                                                            <div id="patt_noofdaysError" class="error text-red-700"></div>
                                                                                        </div>
                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                            <label for="" class="ti-form-label pt-4 font-bold">Document:<span class="text-red-500">*  Only PDF files up to 500 KB in size are accepted.</span></label>
                                                                                            <span class="sr-only">Choose Profile photo</span>
                                                                                                <input type="file" accept="application/pdf" name="document" required id="patt_document" class="block w-full text-sm text-gray-500 dark:text-white/70 focus:outline-0
                                                                                                ltr:file:mr-4 rtl:file:ml-4 file:py-2 file:px-4
                                                                                                file:rounded-sm file:border-0
                                                                                                file:text-sm file:font-semibold
                                                                                                file:bg-primary file:text-white
                                                                                                hover:file:bg-primary focus-visible:outline-none doc">
                                                                                                @if($errors->has('document'))
                                                                                                    <div class="text-red-700">{{ $errors->first('document') }}</div>
                                                                                                @endif
                                                                                            <div id="patt_documentError" class="error text-red-700"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">

                                                                                    </div>
                                                                                </div>
                                                                                <div class="ti-modal-footer">
                                                                                    <button type="button"
                                                                                    class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                    data-hs-overlay="#add_professional_activity_attended">
                                                                                    Close
                                                                                    </button>

                                                                                    <input type="submit" id="professional_activity_attended_store_btn" class="ti-btn  bg-primary text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10" value="Add"/>

                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- modal Ending-->
                                                            </div>
                                                            <!-- tabel content-->
                                                            <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto">
                                                                <div class="flex justify-end mt-4">
                                                                    <button id="exportToExcel" class="bg-green-500 text-white px-4 py-2 rounded-md focus:outline-none hover:bg-green-600">Export to Excel</button>
                                                                </div>
                                                                <table id="proattended_table" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                                    <thead class="bg-gray-50 dark:bg-black/20">
                                                                        <tr class="">
                                                                            <th scope="col" class="dark:text-white/80 font-bold ">S.No</th>
                                                                            <th scope="col" class="dark:text-white/80 font-bold ">E-Gov ID</th>
                                                                            <th scope="col" class="dark:text-white/80 font-bold ">Title</th>
                                                                            <th scope="col" class="dark:text-white/80 font-bold">Orgnizer</th>
                                                                            <th scope="col" class="dark:text-white/80 font-bold">Role</th>
                                                                            <th scope="col" class="dark:text-white/80 font-bold">Level</th>
                                                                            <th scope="col" class="dark:text-white/80 font-bold">Category</th>
                                                                            <th scope="col" class="dark:text-white/80 font-bold">Sponsored</th>
                                                                            <th scope="col" class="dark:text-white/80 font-bold">Sponsored By</th>
                                                                            <th scope="col" class="dark:text-white/80 font-bold">From Date</th>
                                                                            <th scope="col" class="dark:text-white/80 font-bold">To Date</th>
                                                                            <th scope="col" class="dark:text-white/80 font-bold">No OF days</th>
                                                                            {{-- <th scope="col" class="dark:text-white/80 font-bold">Document</th> --}}
                                                                            @if(!isset($export) || !$export)
                                                                                <th scope="col" class="dark:text-white/80 font-bold ">Action</th>
                                                                            @endif
                                                                        </tr>
                                                                    </thead>
                                                                    @php
                                                                        $i = 1;
                                                                    @endphp
                                                                    <tbody class="">
                                                                        @if($staff->professional_activity_attendee !=null)
                                                                            @forelse($staff->professional_activity_attendee as $act)

                                                                                {{-- <tr class="" @if($act->validation_status == 'valid') style="background-color: #ccffcc; color: #006400;" @elseif($act->validation_status =='invalid') style="background-color: #ffe6e6; color: #b30000;" @endif> --}}
                                                                                <tr style="@if($act->validation_status =='invalid') background-color: #ffcccc; @elseif($act->validation_status =='updated') background-color: #fff2cc; @elseif($act->validation_status =='valid') background-color: #ccffcc; @endif">

                                                                                    <td><span>{{$i++}}</span></td>
                                                                                    <td><span>{{$act->egov_id}}</span></td>
                                                                                    <td><span>{{$act->title}}</span></td>
                                                                                    <td><span>{{$act->organizer}}</span></td>
                                                                                    <td><span>{{$act->role}}</span></td>
                                                                                    <td><span>{{$act->level}}</span></td>
                                                                                    <td><span>{{$act->category}}</span></td>
                                                                                    <td><span>{{$act->sponsored}}</span></td>
                                                                                    <td><span>{{($act->sponsored=="No"? '--NA--' : $act->sponsored_by)}}</span></td>
                                                                                    <td><span>{{\Carbon\Carbon::parse($act->from_date)->format('d-M-Y') }}</span></td>
                                                                                    <td><span>{{\Carbon\Carbon::parse($act->to_date)->format('d-M-Y') }}</span></td>
                                                                                    <td><span>{{$act->no_of_days}}</span></td>
                                                                                    {{-- <td><span><a href={{Storage::url('Uploads/Professional_Activity_Attended/'.$act->document)}} class='font-medium text-blue-600 dark:text-blue-500 hover:underline' target="_blank">{{$act->document}}</a></span></td> --}}

                                                                                    @if(!isset($export) || !$export)
                                                                                    <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                                                        <!--modal Start Here-->
                                                                                        <?php if ($act->validation_status === 'invalid'): ?>
                                                                                            <div class="hs-tooltip ti-main-tooltip text-center">
                                                                                                <button data-hs-overlay="#reason_view_modal{{$i}}"
                                                                                                        class="hs-dropdown-toggle m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M14 14.252V16.3414C13.3744 16.1203 12.7013 16 12 16C8.68629 16 6 18.6863 6 22H4C4 17.5817 7.58172 14 12 14C12.6906 14 13.3608 14.0875 14 14.252ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11ZM19 17.5858L21.1213 15.4645L22.5355 16.8787L20.4142 19L22.5355 21.1213L21.1213 22.5355L19 20.4142L16.8787 22.5355L15.4645 21.1213L17.5858 19L15.4645 16.8787L16.8787 15.4645L19 17.5858Z"></path></svg>
                                                                                                    <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">reason</span>
                                                                                                </button>
                                                                                                <div id="reason_view_modal{{$i}}" class="hs-overlay hidden ti-modal">
                                                                                                    <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                                                                        <div class="ti-modal-content">
                                                                                                            <div class="ti-modal-header">
                                                                                                                <h3 class="ti-modal-title">
                                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                                                                                                                        <path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z">
                                                                                                                        </path>
                                                                                                                    </svg>
                                                                                                                    Reason Details of Professional Activity Attended
                                                                                                                </h3>
                                                                                                                <button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#reason_view_modal{{$i}}">
                                                                                                                    <span class="sr-only">Close</span>
                                                                                                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                                                        <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206.09721L21.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/>
                                                                                                                    </svg>
                                                                                                                </button>
                                                                                                            </div>
                                                                                                            <div class="ti-modal-body">
                                                                                                                <div class="ti-form-label font-bold">Reason:</div>
                                                                                                                <div>{{$act->reason}}</div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        <?php endif; ?>
                                                                                        <!--Modal Ends Here-->
                                                                                        <div class="hs-tooltip ti-main-tooltip">
                                                                                            <a  href="{{Storage::url('Uploads/Professional_Activity_Attended/' . $act->document) }}" class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary" target="_blank" {{$act->document}}>
                                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12.0003 3C17.3924 3 21.8784 6.87976 22.8189 12C21.8784 17.1202 17.3924 21 12.0003 21C6.60812 21 2.12215 17.1202 1.18164 12C2.12215 6.87976 6.60812 3 12.0003 3ZM12.0003 19C16.2359 19 19.8603 16.052 20.7777 12C19.8603 7.94803 16.2359 5 12.0003 5C7.7646 5 4.14022 7.94803 3.22278 12C4.14022 16.052 7.7646 19 12.0003 19ZM12.0003 16.5C9.51498 16.5 7.50026 14.4853 7.50026 12C7.50026 9.51472 9.51498 7.5 12.0003 7.5C14.4855 7.5 16.5003 9.51472 16.5003 12C16.5003 14.4853 14.4855 16.5 12.0003 16.5ZM12.0003 14.5C13.381 14.5 14.5003 13.3807 14.5003 12C14.5003 10.6193 13.381 9.5 12.0003 9.5C10.6196 9.5 9.50026 10.6193 9.50026 12C9.50026 13.3807 10.6196 14.5 12.0003 14.5Z"></path></svg>
                                                                                                <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm" role="tooltip">
                                                                                                    View Document
                                                                                                </span>
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="hs-tooltip ti-main-tooltip">
                                                                                            <button data-hs-overlay="#professional_activity_edit_modal{{$i}}" id="btn{{$i}}" btn-val={{$i}}
                                                                                                class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary professional_activity_edit_modal_click">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                                <span
                                                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                                    role="tooltip">
                                                                                                    Edit
                                                                                                </span>
                                                                                            </button>
                                                                                                <div id="professional_activity_edit_modal{{$i}}" class="hs-overlay hidden ti-modal">
                                                                                                    <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                                                                        <div class="ti-modal-content">
                                                                                                                <div class="ti-modal-header">
                                                                                                                    <h3 class="ti-modal-title">
                                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                                                        Edit Professional Activities
                                                                                                                    </h3>
                                                                                                                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                                                                    data-hs-overlay="#professional_activity_edit_modal{{$i}}">
                                                                                                                    <span class="sr-only">Close</span>
                                                                                                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                                        <path
                                                                                                                        d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                                                        fill="currentColor" />
                                                                                                                    </svg>
                                                                                                                    </button>
                                                                                                                    @if(($errors->has('edit_title'))||($errors->has('edit_organizer'))||($errors->has('edit_role'))||($errors->has('edit_level'))||($errors->has('edit_category'))||($errors->has('edit_sponsored'))||($errors->has('edit_sponsored_by'))||($errors->has('edit_from_date'))||($errors->has('edit_to_date'))||($errors->has('edit_no_of_days'))||($errors->has('document')))
                                                                                                                        <script>
                                                                                                                            //alert(387);
                                                                                                                                window.onload=function(){
                                                                                                                                //alert('123');

                                                                                                                            };

                                                                                                                        </script>
                                                                                                                    @endif
                                                                                                                </div>
                                                                                                                <form  action="{{route('Non-Teaching.professionalactivities.attended.update',$act->id)}}" method="post" enctype="multipart/form-data">
                                                                                                                    @csrf
                                                                                                                    @method('patch')
                                                                                                                    <div class="ti-modal-body">
                                                                                                                        <input type='hidden' name='modal_no' id='modal_no' value={{old('modal_no')}}/>
                                                                                                                        <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                                                <label for="with-corner-hint" class="ti-form-label font-bold">Title:<span class="text-red-500">*</span></label>
                                                                                                                                <input type="text" name="edit_title" class="ti-form-input" required placeholder="Title" value="{{$act->title}}">
                                                                                                                                @if($errors->has('edit_title'))
                                                                                                                                    <div class="text-red-700">{{ $errors->first('edit_title')}}</div>
                                                                                                                                @endif
                                                                                                                            </div>
                                                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                                                <label for="" class="ti-form-label font-bold">Organizer:<span class="text-red-500">*</span></label>
                                                                                                                                <input type="text" name="edit_organizer" class="ti-form-input" required placeholder="Organizer" value="{{$act->organizer}}">
                                                                                                                                @if($errors->has('edit_organizer'))
                                                                                                                                    <div class="text-red-700">{{ $errors->first('edit_organizer')}}</div>
                                                                                                                                @endif
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                                                <label for="" class="ti-form-label mb-0 font-bold">Role:<span class="text-red-500">*</span></label>
                                                                                                                                    <select class="ti-form-select role" name="edit_role" required>
                                                                                                                                        <option value="#">Choose Role</option>
                                                                                                                                        <option value="Participant" {{($act->role=='Participant'? 'selected':'')}}>Participant</option>
                                                                                                                                        <option value="Resource Person" {{($act->role=='Resource Person'? 'selected':'')}}>Resource Person</option>
                                                                                                                                        <option value="Jury" {{($act->role=='Jury'? 'selected':'')}}>Jury</option>
                                                                                                                                    </select>
                                                                                                                                    @if($errors->has('edit_role'))
                                                                                                                                        <div class="text-red-700">{{ $errors->first('edit_role')}}</div>
                                                                                                                                    @endif
                                                                                                                            </div>
                                                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                                                <label for="" class="ti-form-label mb-0 font-bold">Level:<span class="text-red-500">*</span></label>
                                                                                                                                <select class="ti-form-select level" name="edit_level" required>
                                                                                                                                        <option value="#">Choose Level</option>

                                                                                                                                        <option value="Local" {{($act->level=='Local'? 'selected':'')}}>Local</option>
                                                                                                                                        <option value="National" {{($act->level=='National'? 'selected':'')}}>National</option>
                                                                                                                                        <option value="International" {{($act->level=='International'? 'selected':'')}}>International</option>

                                                                                                                                </select>
                                                                                                                                @if($errors->has('edit_level'))
                                                                                                                                    <div class="text-red-700">{{ $errors->first('edit_level')}}</div>
                                                                                                                                @endif
                                                                                                                            </div>
                                                                                                                        </div>

                                                                                                                        <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                                                <label for="" class="ti-form-label font-bold">Category:<span class="text-red-500">*</span></label>
                                                                                                                                <select class="ti-form-select category" name="edit_category" required>
                                                                                                                                    <option value="#">Choose Category</option>
                                                                                                                                    <option value="Seminar" {{($act->category=='Seminar'? 'selected':'')}}>Seminar</option>
                                                                                                                                    <option value="Webinar" {{($act->category=='Webinar'? 'selected':'')}}>Webinar</option>
                                                                                                                                    <option value="Certification Program" {{($act->category=='Certification Program'? 'selected':'')}}>Certification Program</option>
                                                                                                                                    <option value="Hackathon" {{($act->category=='Hackathon'? 'selected':'')}}>Hackathon</option>
                                                                                                                                </select>
                                                                                                                                @if($errors->has('edit_category'))
                                                                                                                                    <div class="text-red-700">{{ $errors->first('edit_category')}}</div>
                                                                                                                                @endif
                                                                                                                            </div>

                                                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                                                <label for="" class="ti-form-label font-bold">Sponsored:<span class="text-red-500">*</span></label>
                                                                                                                                <select class="ti-form-select sponsored_type sponsored" name="edit_sponsored" required>
                                                                                                                                    <option value="#">Choose One</option>
                                                                                                                                    <option value="Yes" {{$act->sponsored=='Yes'? 'selected':''}}>Yes</option>
                                                                                                                                    <option value="No" {{$act->sponsored=='No'? 'selected':''}}>No</option>
                                                                                                                                </select>
                                                                                                                                @if($errors->has('edit_sponsored'))
                                                                                                                                    <div class="text-red-700">{{ $errors->first('edit_sponsored')}}</div>
                                                                                                                                @endif
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                                                            {{-- <div class="max-w-sm space-y-3 pb-6 sponsored_by">
                                                                                                                                <label for="" class="ti-form-label  font-bold">Sponsored By :</label>
                                                                                                                                <input type="text" name="sponsored_by" class="ti-form-input" placeholder="Sponsored By" value="{{$act->sponsored_by}}">
                                                                                                                            </div> --}}

                                                                                                                            <div class="max-w-sm space-y-3 pb-6 sponsored_by">
                                                                                                                                <label for="" class="ti-form-label font-bold">Sponsored By:</label>
                                                                                                                                <select class="ti-form-select sponsoredBy" name="edit_sponsored_by">
                                                                                                                                    <option value="#">Choose One</option>
                                                                                                                                    <option value="KLS GIT" {{$act->sponsored_by=='KLS GIT'? 'selected':''}}>KLS GIT</option>
                                                                                                                                    <option value="Other" {{$act->sponsored_by=='Other'? 'selected':''}}>Other</option>
                                                                                                                                </select>
                                                                                                                                    @if($errors->has('edit_sponsored_by'))
                                                                                                                                    <div class="text-red-700">{{ $errors->first('edit_sponsored_by') }}</div>
                                                                                                                                @endif
                                                                                                                                <div id="sponsoredbyError" class="error text-red-700"></div>
                                                                                                                            </div>
                                                                                                                            <div class="max-w-sm space-y-3 pb-6 otherSponsor" id="otherSponsor">
                                                                                                                                <label for="" class="ti-form-label font-bold">Other Sponsor:</label>
                                                                                                                                <input type="text" name="edit_other_sponsored" class="ti-form-input othersponsored" placeholder="Other Sponsor" value="{{$act->sponsored_by}}">
                                                                                                                                    @if($errors->has('edit_othersponsor'))
                                                                                                                                    <div class="text-red-700">{{ $errors->first('edit_othersponsor') }}</div>
                                                                                                                                @endif
                                                                                                                                <div id="othersponsorError" class="error text-red-700"></div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                                                            <div class="flex max-w-sm space-y-3 pb-6">
                                                                                                                                <label for="" class="ti-form-label font-bold">From Date:<span class="text-red-500">*</span></label>
                                                                                                                                <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                                                    <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                                                                            class="ri ri-calendar-line"></i></span>
                                                                                                                                </div>
                                                                                                                                <input type="date" name="edit_from_date"
                                                                                                                                    class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date attended_from_date_edit"
                                                                                                                                        required placeholder="Choose date" value="{{$act->from_date}}">
                                                                                                                                @if($errors->has('edit_from_date'))
                                                                                                                                    <div class="text-red-700">{{ $errors->first('edit_from_date')}}</div>
                                                                                                                                @endif
                                                                                                                            </div>
                                                                                                                            <div class="flex max-w-sm space-y-3 pb-6">
                                                                                                                                <label for="" class="ti-form-label font-bold">To Date:<span class="text-red-500">*</span></label>
                                                                                                                                <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                                                    <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                                                                            class="ri ri-calendar-line"></i></span>
                                                                                                                                </div>

                                                                                                                                <input type="date" name="edit_to_date"
                                                                                                                                    class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date attended_to_date_edit"
                                                                                                                                        required placeholder="Choose date" value="{{$act->to_date}}">
                                                                                                                                @if($errors->has('edit_to_date'))
                                                                                                                                    <div class="text-red-700">{{ $errors->first('edit_to_date')}}</div>
                                                                                                                                @endif
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                                                <label for="" class="ti-form-label font-bold">No Of Days:<span class="text-red-500">*</span></label>
                                                                                                                                <input type="text" name="edit_no_of_days" class="ti-form-input no_of_days_edit" value="{{$act->no_of_days}}" readonly placeholder="enter number of days">
                                                                                                                                @if($errors->has('edit_no_of_days'))
                                                                                                                                    <div class="text-red-700">{{ $errors->first('edit_no_of_days')}}</div>
                                                                                                                                @endif
                                                                                                                            </div>
                                                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                                                <label for="" class="ti-form-label pt-4 font-bold">Document:<span class="text-red-500">*</span></label>
                                                                                                                                <span class="sr-only">Choose Profile photo</span>
                                                                                                                                    <input type="file" accept="application/pdf" name="document" required  class="block w-full text-sm text-gray-500 dark:text-white/70 focus:outline-0
                                                                                                                                    ltr:file:mr-4 rtl:file:ml-4 file:py-2 file:px-4
                                                                                                                                    file:rounded-sm file:border-0
                                                                                                                                    file:text-sm file:font-semibold
                                                                                                                                    file:bg-primary file:text-white
                                                                                                                                    hover:file:bg-primary focus-visible:outline-none doc"  value="{{$act->document}}">
                                                                                                                                @if($errors->has('document'))
                                                                                                                                    <div class="text-red-700">{{ $errors->first('document') }}</div>
                                                                                                                                @endif
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                                            <input type="hidden" name="validation_status" value="updated">
                                                                                                                        </div>
                                                                                                                        <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">

                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="ti-modal-footer">
                                                                                                                        <button type="button"
                                                                                                                            class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                                                            data-hs-overlay="#professional_activity_edit_modal{{$i}}">
                                                                                                                            Close
                                                                                                                        </button>

                                                                                                                        <input type="submit" class="ti-btn  bg-warning text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10" value="Update"/>

                                                                                                                    </div>

                                                                                                                </form>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                        <div class="hs-tooltip ti-main-tooltip">
                                                                                            <form action="{{ route('Non-Teaching.professionalactivities.attended.destroy',$act->id) }}" method="post">

                                                                                                <button onclick="return confirm('Are you Sure')"
                                                                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M7 4V2H17V4H22V6H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V6H2V4H7ZM6 6V20H18V6H6ZM9 9H11V17H9V9ZM13 9H15V17H13V9Z"></path></svg>
                                                                                                    @method('delete')
                                                                                                    @csrf
                                                                                                    <span
                                                                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                                        role="tooltip">
                                                                                                        Delete
                                                                                                    </span>
                                                                                                </button>
                                                                                            </form>
                                                                                        </div>
                                                                                    </td>
                                                                                    @endif
                                                                            </tr>
                                                                                @empty
                                                                                <tr>
                                                                                <td>no records</td>
                                                                                </tr>
                                                                                @endforelse

                                                                        @endif


                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <!-- End of profesional Activity Attended-->

                                                            <!--Professional Activity Conducted-->
                                                            <div class="flex mt-10" >
                                                                <h5 class="box-title my-auto">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32"><path d="M22 21H2V19H3V4C3 3.44772 3.44772 3 4 3H18C18.5523 3 19 3.44772 19 4V9H21V19H22V21ZM17 19H19V11H13V19H15V13H17V19ZM17 9V5H5V19H11V9H17ZM7 11H9V13H7V11ZM7 15H9V17H7V15ZM7 7H9V9H7V7Z"></path></svg>
                                                                    Professional Activity Conducted Details
                                                                </h5>
                                                                <div class="avatar-container flex py-4">
                                                                    <div class="avatar-wrapper flex items-center">
                                                                        <div class="avatar rounded-sm p-1 bg-green-500 border-gray-900 border-2 w-6 h-6"></div>
                                                                        <div class="avatar-text font-bold ml-2 ">Valid</div>
                                                                    </div>

                                                                    <div class="avatar-wrapper flex items-center mx-2">
                                                                        <div class="avatar rounded-sm p-1 bg-red-500 border-gray-900 border-2 w-6 h-6"></div>
                                                                        <div class="avatar-text font-bold ml-2">Invalid</div>
                                                                    </div>

                                                                    <div class="avatar-wrapper flex items-center mx-2">
                                                                        <div class="avatar rounded-sm p-1 bg-yellow-400 border-gray-900 border-2 w-6 h-6"></div>
                                                                        <div class="avatar-text font-bold ml-2">Updated</div>
                                                                    </div>

                                                                    <div class="avatar-wrapper flex items-center">
                                                                        <div class="avatar rounded-sm p-1 border-gray-900 border-2 w-6 h-6"></div>
                                                                        <div class="avatar-text font-semibold ml-2">New</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex">
                                                                <button type="button" id="nt_conducted_btn" class="hs-dropdown-toggle ti-btn ti-btn-primary float-right" data-hs-overlay="#professional_activity_conducted">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM5 5V19H19V5H5ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z" fill="rgba(255,255,255,1)"></path></svg>
                                                                    Add Professional Activities Conducted
                                                                </button>
                                                                <div id="professional_activity_conducted" class="hs-overlay hidden ti-modal">
                                                                    <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                                        <div class="ti-modal-content">
                                                                            <div class="ti-modal-header">
                                                                                <h3 class="ti-modal-title">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM5 5V19H19V5H5ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z"></path></svg>
                                                                                    Add New Professional Activities Conducted
                                                                                </h3>
                                                                                <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                                    data-hs-overlay="#professional_activity_conducted">
                                                                                    <span class="sr-only">Close</span>
                                                                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <path
                                                                                        d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                        fill="currentColor"/>
                                                                                    </svg>
                                                                                </button>

                                                                                @if(($errors->has('con_title'))||($errors->has('con_level'))||($errors->has('con_organizer'))||($errors->has('con_co_organizer'))||($errors->has('con_category'))||($errors->has('con_sponsored'))||($errors->has('con_sponsoring_agency_name_address'))||($errors->has('con_from_date'))||($errors->has('con_to_date'))||($errors->has('con_no_of_days'))||($errors->has('con_place'))||($errors->has('con_role')))
                                                                                    <script>
                                                                                        // alert(1);
                                                                                        $(window).on('load', function() {
                                                                                            //if($('#horizontal-alignment-item-2').parent().find('.active')){
                                                                                                alert('Its active');
                                                                                                //alert(614);
                                                                                                $('#horizontal-alignment-item-2').trigger('click');
                                                                                                //alert('conducted clicked');
                                                                                                $('#nt_conducted_btn').trigger("click");

                                                                                        });
                                                                                    </script>
                                                                                @endif
                                                                            </div>
                                                                            <form  action="{{route('Non-Teaching.professionalactivities.conducted.store')}}" method="post" enctype="multipart/form-data">
                                                                                @csrf
                                                                                <div class="ti-modal-body">
                                                                                    <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">

                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                <label for="with-corner-hint" class="ti-form-label font-bold">Title:<span class="text-red-500">*</span></label>
                                                                                                <input type="text" name="con_title" class="ti-form-input" required placeholder="Title" id="ntc_title" value="{{ old('con_title') }}">
                                                                                                @if($errors->has('con_title'))
                                                                                                    <div class="text-red-700">{{ $errors->first('con_title')}}</div>
                                                                                                @endif
                                                                                                <div id="ntc_titleError" class="error text-red-700"></div>
                                                                                            </div>
                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                <label for="with-corner-hint" class="ti-form-label font-bold">Level:<span class="text-red-500">*</span></label>
                                                                                                <select class="ti-form-select level" name="con_level" required id="ntc_level">
                                                                                                    <option value="#">Choose Level</option>
                                                                                                    <option value="Local" {{ old('con_level') == 'Local' ? 'selected' : '' }}>Local</option>
                                                                                                    <option value="National" {{ old('con_level') == 'National' ? 'selected' : '' }}>National</option>
                                                                                                    <option value="International" {{ old('con_level') == 'International' ? 'selected' : '' }}>International</option>
                                                                                                </select>

                                                                                                @if($errors->has('con_level'))
                                                                                                    <div class="text-red-700">{{ $errors->first('con_level')}}</div>
                                                                                                @endif
                                                                                                <div id="ntc_levelError" class="error text-red-700"></div>
                                                                                            </div>

                                                                                    </div>
                                                                                    <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                            <label for="" class="ti-form-label font-bold">Organizer:<span class="text-red-500">*</span></label>
                                                                                            <input type="text" name="con_organizer" class="ti-form-input" required placeholder="Organizer" id="ntc_organizer" value="{{ old('con_organizer') }}">
                                                                                            @if($errors->has('con_organizer'))
                                                                                                <div class="text-red-700">{{ $errors->first('con_organizer')}}</div>
                                                                                            @endif
                                                                                            <div id="ntc_organizerError" class="error text-red-700"></div>
                                                                                        </div>
                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                            <label for="" class="ti-form-label font-bold">Co Organizer:</label>
                                                                                            <input type="text" name="con_co_organizer" class="ti-form-input" required placeholder="Co Organizer" id="ntc_coorganizer" value="{{ old('con_co_organizer') }}">
                                                                                                @if($errors->has('con_co_organizer'))
                                                                                                <div class="text-red-700">{{ $errors->first('con_co_organizer')}}</div>
                                                                                            @endif
                                                                                            <div id="ntc_coorganizerError" class="error text-red-700"></div>
                                                                                        </div>


                                                                                    </div>

                                                                                    <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                            <label for="" class="ti-form-label  font-bold">Category:<span class="text-red-500">*</span></label>
                                                                                            <select class="ti-form-select category" name="con_category" required id="ntc_category">
                                                                                                <option value="#">Choose Category</option>
                                                                                                <option value="Seminar" {{ old('con_category') == 'Seminar' ? 'selected' : '' }}>Seminar</option>
                                                                                                <option value="Webinar" {{ old('con_category') == 'Webinar' ? 'selected' : '' }}>Webinar</option>
                                                                                                <option value="Certification Program" {{ old('con_category') == 'Certification Program' ? 'selected' : '' }}>Certification Program</option>
                                                                                                <option value="Hackathon" {{ old('con_category') == 'Hackathon' ? 'selected' : '' }}>Hackathon</option>
                                                                                            </select>

                                                                                            @if($errors->has('con_category'))
                                                                                                <div class="text-red-700">{{ $errors->first('con_category')}}</div>
                                                                                            @endif
                                                                                            <div id="ntc_categoryError" class="error text-red-700"></div>
                                                                                        </div>
                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                            <label for="" class="ti-form-label font-bold">Sponsored:<span class="text-red-500">*</span></label>
                                                                                            <select class="ti-form-select sponsored sponsored_type_conducted" name="con_sponsored" id="ntc_sponsored">
                                                                                                <option value="#">Choose One</option>
                                                                                                <option value="Yes" {{ old('con_sponsored') == 'Yes' ? 'selected' : '' }}>Yes</option>
                                                                                                <option value="No" {{ old('con_sponsored') == 'No' ? 'selected' : '' }}>No</option>
                                                                                            </select>

                                                                                            @if($errors->has('con_sponsored'))
                                                                                                <div class="text-red-700">{{ $errors->first('con_sponsored')}}</div>
                                                                                            @endif
                                                                                            <div id="ntc_sponsoredError" class="error text-red-700"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                            <div class="max-w-sm space-y-3 pb-6 sponsoring_agency_name_address">
                                                                                                <label for="" class="ti-form-label  font-bold">Sponsoring Agency Name Address:</label>
                                                                                                <input type="text" name="con_sponsoring_agency_name_address" class="ti-form-input" placeholder="Sponsoring Agency Name Address" id="ntc_sponsoring_agency_name_address" value="{{ old('con_sponsoring_agency_name_address') }}">
                                                                                                    @if($errors->has('con_sponsoring_agency_name_address'))
                                                                                                    <div class="text-red-700">{{ $errors->first('con_sponsoring_agency_name_address')}}</div>
                                                                                                @endif
                                                                                                <div id="ntc_sponsoring_agency_name_addressError" class="error text-red-700"></div>
                                                                                            </div>
                                                                                            <div class="flex max-w-sm space-y-3 pb-6">
                                                                                                <label for="" class="ti-form-label font-bold">From Date:<span class="text-red-500">*</span></label>
                                                                                                <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                    <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                                            class="ri ri-calendar-line"></i></span>
                                                                                                </div>

                                                                                                <input type="text" name="con_from_date" id="ntc_from_date"
                                                                                                class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date conducted_from_date"
                                                                                                    required placeholder="Choose date" value="{{ old('con_from_date') }}">
                                                                                                @if($errors->has('con_from_date'))
                                                                                                    <div class="text-red-700">{{ $errors->first('con_from_date')}}</div>
                                                                                                @endif
                                                                                                <div id="ntc_fromdateError" class="error text-red-700"></div>
                                                                                            </div>
                                                                                    </div>
                                                                                    <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                        <div class="flex  max-w-sm space-y-3 pb-6">
                                                                                            <label for="" class="ti-form-label font-bold">To Date:<span class="text-red-500">*</span></label>
                                                                                            <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                                        class="ri ri-calendar-line"></i></span>
                                                                                            </div>
                                                                                                <input type="text" name="con_to_date" id="ntc_to_date"
                                                                                            class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date conducted_to_date"
                                                                                                required placeholder="Choose date" value="{{ old('con_to_date') }}">
                                                                                                @if($errors->has('con_to_date'))
                                                                                                    <div class="text-red-700">{{ $errors->first('con_to_date')}}</div>
                                                                                                @endif
                                                                                                <div id="ntc_todateError" class="error text-red-700"></div>
                                                                                        </div>

                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                            <label for="" class="ti-form-label pt-4 font-bold">Place:<span class="text-red-500">*</span></label>
                                                                                            <input type="text" name="con_place" class="ti-form-input" required placeholder="Place" id="ntc_place" value="{{ old('con_place') }}">
                                                                                            @if($errors->has('con_place'))
                                                                                                <div class="text-red-700">{{ $errors->first('con_place')}}</div>
                                                                                            @endif
                                                                                            <div id="ntc_placeError" class="error text-red-700"></div>
                                                                                        </div>

                                                                                    </div>

                                                                                    <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                            <label for="" class="ti-form-label pt-4 font-bold">No Of Days:<span class="text-red-500">*</span></label>
                                                                                            <input type="text" name="con_no_of_days" class="ti-form-input no_of_days_conducted" readonly placeholder="No of Days" id="ntc_no_of_days" value="{{ old('con_no_of_days') }}">
                                                                                            @if($errors->has('con_no_of_days'))
                                                                                                <div class="text-red-700">{{ $errors->first('con_no_of_days')}}</div>
                                                                                            @endif
                                                                                            <div id="ntc_noofdaysError" class="error text-red-700"></div>
                                                                                        </div>
                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                            <label for="" class="ti-form-label pt-4 font-bold">Role:</label>
                                                                                            <select class="ti-form-select role" name="con_role" id="ntc_role">
                                                                                                <option value="#">Choose Role</option>
                                                                                                <option value="Coordinator" {{ old('con_role') == 'Coordinator' ? 'selected' : '' }}>Coordinator</option>
                                                                                                <option value="Covenor" {{ old('con_role') == 'Covenor' ? 'selected' : '' }}>Covenor</option>
                                                                                                <option value="Member" {{ old('con_role') == 'Member' ? 'selected' : '' }}>Member</option>
                                                                                                <option value="Jury" {{ old('con_role') == 'Jury' ? 'selected' : '' }}>Jury</option>
                                                                                            </select>

                                                                                            @if($errors->has('con_role'))
                                                                                                <div class="text-red-700">{{ $errors->first('con_role')}}</div>
                                                                                            @endif
                                                                                            <div id="ntc_roleError" class="error text-red-700"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                            <label for="" class="ti-form-label pt-4 font-bold">Document:<span class="text-red-500">*  Only PDF files up to 500 KB in size are accepted.</span></label>
                                                                                            <span class="sr-only">Choose Profile photo</span>
                                                                                                <input type="file" accept="application/pdf" name="document" required id="pcond_document" class="block w-full text-sm text-gray-500 dark:text-white/70 focus:outline-0
                                                                                                ltr:file:mr-4 rtl:file:ml-4 file:py-2 file:px-4
                                                                                                file:rounded-sm file:border-0
                                                                                                file:text-sm file:font-semibold
                                                                                                file:bg-primary file:text-white
                                                                                                hover:file:bg-primary focus-visible:outline-none doc">
                                                                                                @if($errors->has('document'))
                                                                                                    <div class="text-red-700">{{ $errors->first('document') }}</div>
                                                                                                @endif
                                                                                            <div id="pcond_documentError" class="error text-red-700"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="ti-modal-footer">
                                                                                        <button type="button"
                                                                                        class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                        data-hs-overlay="#professional_activity_conducted">
                                                                                        Close
                                                                                        </button>

                                                                                        <input type="submit" id="professional_activity_conducted_store_btn" class="ti-btn  bg-primary text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10" value="Add"/>

                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- modal Ending-->

                                                            </div>

                                                            <!-- tabel content-->
                                                            <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto">
                                                                <div class="flex justify-end mt-4">
                                                                    <button id="conduct_exportToExcel" class="bg-green-500 text-white px-4 py-2 rounded-md focus:outline-none hover:bg-green-600">Export to Excel</button>
                                                                </div>
                                                                <table id="proconducted_table" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                                        <thead class="bg-gray-50 dark:bg-black/20">
                                                                            <tr class="">
                                                                                <th scope="col" class="dark:text-white/80 font-bold ">S.No</th>
                                                                                <th scope="col" class="dark:text-white/80 font-bold ">E-Gov ID</th>
                                                                                <th scope="col" class="dark:text-white/80 font-bold ">Title</th>
                                                                                <th scope="col" class="dark:text-white/80 font-bold ">Level</th>
                                                                                <th scope="col" class="dark:text-white/80 font-bold">Organizer</th>
                                                                                <th scope="col" class="dark:text-white/80 font-bold">Co Organizer</th>
                                                                                <th scope="col" class="dark:text-white/80 font-bold">Category</th>
                                                                                <th scope="col" class="dark:text-white/80 font-bold">Sponsored</th>
                                                                                <th scope="col" class="dark:text-white/80 font-bold">Sponsoring Agency Name Address</th>
                                                                                <th scope="col" class="dark:text-white/80 font-bold">From Date</th>
                                                                                <th scope="col" class="dark:text-white/80 font-bold">To Date</th>
                                                                                <th scope="col" class="dark:text-white/80 font-bold">Place</th>
                                                                                <th scope="col" class="dark:text-white/80 font-bold">No Of Days</th>
                                                                                <th scope="col" class="dark:text-white/80 font-bold">Role</th>
                                                                                {{-- <th scope="col" class="dark:text-white/80 font-bold">Document</th> --}}
                                                                                @if(!isset($export) || !$export)
                                                                                    <th scope="col" class="dark:text-white/80 font-bold">Action</th>
                                                                                @endif

                                                                            </tr>
                                                                        </thead>
                                                                        @php
                                                                            $i = 1;
                                                                        @endphp
                                                                        <tbody class="">
                                                                            @if($staff->professional_activity_conducted !=null)
                                                                                @forelse($staff->professional_activity_conducted as $conduct)

                                                                                    {{-- <tr class="" @if($conduct->validation_status == 'valid') style="background-color: #ccffcc; color: #006400;" @elseif($conduct->validation_status =='invalid') style="background-color: #ffe6e6; color: #b30000;" @endif> --}}
                                                                                    <tr style="@if($conduct->validation_status =='invalid') background-color: #ffcccc; @elseif($conduct->validation_status =='updated') background-color: #fff2cc; @elseif($conduct->validation_status =='valid') background-color: #ccffcc; @endif">

                                                                                        <td><span>{{$i++}}</span></td>
                                                                                        <td><span>{{$conduct->egov_id}}</span></td>
                                                                                        <td><span>{{$conduct->title}}</span></td>
                                                                                        <td><span>{{$conduct->level}}</span></td>
                                                                                        <td><span>{{$conduct->organizer}}</span></td>
                                                                                        <td><span>{{$conduct->co_organizer}}</span></td>
                                                                                        <td><span>{{$conduct->category}}</span></td>
                                                                                        <td><span>{{$conduct->sponsored}}</span></td>
                                                                                        <td><span>{{$conduct->sponsoring_agency_name_address}}</span></td>
                                                                                        <td><span>{{\Carbon\Carbon::parse($conduct->from_date)->format('d-M-Y') }}</span></td>
                                                                                        <td><span>{{\Carbon\Carbon::parse($conduct->to_date)->format('d-M-Y') }}</span></td>
                                                                                        <td><span>{{$conduct->place}}</span></td>
                                                                                        <td><span>{{$conduct->no_of_days}}</span></td>
                                                                                        <td><span>{{$conduct->role}}</span></td>
                                                                                        {{-- <td><span><a href={{Storage::url('Uploads/Professional_Activity_Conducted/'.$conduct->document)}} class='font-medium text-blue-600 dark:text-blue-500 hover:underline' target="_blank">{{$conduct->document}}</a></span></td> --}}

                                                                                        @if(!isset($export) || !$export)
                                                                                        <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                                                            <!--modal Start Here-->
                                                                                            <?php if ($conduct->validation_status === 'invalid'): ?>
                                                                                                <div class="hs-tooltip ti-main-tooltip text-center">
                                                                                                    <button data-hs-overlay="#reason_view_modal{{$i}}"
                                                                                                            class="hs-dropdown-toggle m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M14 14.252V16.3414C13.3744 16.1203 12.7013 16 12 16C8.68629 16 6 18.6863 6 22H4C4 17.5817 7.58172 14 12 14C12.6906 14 13.3608 14.0875 14 14.252ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11ZM19 17.5858L21.1213 15.4645L22.5355 16.8787L20.4142 19L22.5355 21.1213L21.1213 22.5355L19 20.4142L16.8787 22.5355L15.4645 21.1213L17.5858 19L15.4645 16.8787L16.8787 15.4645L19 17.5858Z"></path></svg>
                                                                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">reason</span>
                                                                                                    </button>
                                                                                                    <div id="reason_view_modal{{$i}}" class="hs-overlay hidden ti-modal">
                                                                                                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                                                                            <div class="ti-modal-content">
                                                                                                                <div class="ti-modal-header">
                                                                                                                    <h3 class="ti-modal-title">
                                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                                                                                                                            <path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z">
                                                                                                                            </path>
                                                                                                                        </svg>
                                                                                                                        Reason Details of Professional Activity Attended
                                                                                                                    </h3>
                                                                                                                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#reason_view_modal{{$i}}">
                                                                                                                        <span class="sr-only">Close</span>
                                                                                                                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                                                            <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206.09721L21.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/>
                                                                                                                        </svg>
                                                                                                                    </button>
                                                                                                                </div>
                                                                                                                <div class="ti-modal-body">
                                                                                                                    <div class="ti-form-label font-bold">Reason:</div>
                                                                                                                    <div>{{$conduct->reason}}</div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            <?php endif; ?>
                                                                                            <!--Modal Ends Here-->
                                                                                            <div class="hs-tooltip ti-main-tooltip">
                                                                                                <a  href="{{Storage::url('Uploads/Professional_Activity_Conducted/' . $conduct->document) }}" class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary" target="_blank" {{$conduct->document}}>
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12.0003 3C17.3924 3 21.8784 6.87976 22.8189 12C21.8784 17.1202 17.3924 21 12.0003 21C6.60812 21 2.12215 17.1202 1.18164 12C2.12215 6.87976 6.60812 3 12.0003 3ZM12.0003 19C16.2359 19 19.8603 16.052 20.7777 12C19.8603 7.94803 16.2359 5 12.0003 5C7.7646 5 4.14022 7.94803 3.22278 12C4.14022 16.052 7.7646 19 12.0003 19ZM12.0003 16.5C9.51498 16.5 7.50026 14.4853 7.50026 12C7.50026 9.51472 9.51498 7.5 12.0003 7.5C14.4855 7.5 16.5003 9.51472 16.5003 12C16.5003 14.4853 14.4855 16.5 12.0003 16.5ZM12.0003 14.5C13.381 14.5 14.5003 13.3807 14.5003 12C14.5003 10.6193 13.381 9.5 12.0003 9.5C10.6196 9.5 9.50026 10.6193 9.50026 12C9.50026 13.3807 10.6196 14.5 12.0003 14.5Z"></path></svg>
                                                                                                    <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm" role="tooltip">
                                                                                                    View Document
                                                                                                    </span>
                                                                                                </a>
                                                                                            </div>
                                                                                            <div class="hs-tooltip ti-main-tooltip">
                                                                                                <button data-hs-overlay="#conduct_edit_modal{{$i}}" id="btn{{$i}}" btn-val={{$i}}
                                                                                                    class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary conduct_edit_modal_click">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                                    <span
                                                                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                                        role="tooltip">
                                                                                                        Edit
                                                                                                    </span>
                                                                                                </button>
                                                                                                <div id="conduct_edit_modal{{$i}}" class="hs-overlay hidden ti-modal">
                                                                                                    <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                                                                        <div class="ti-modal-content">
                                                                                                                <div class="ti-modal-header">
                                                                                                                    <h3 class="ti-modal-title">
                                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                                                        Edit Professional Activities Conducted
                                                                                                                    </h3>
                                                                                                                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                                                                    data-hs-overlay="#conduct_edit_modal{{$i}}">
                                                                                                                    <span class="sr-only">Close</span>
                                                                                                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                                        <path
                                                                                                                        d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                                                        fill="currentColor"/>
                                                                                                                    </svg>
                                                                                                                    </button>
                                                                                                                    @if(($errors->has('e_title'))||($errors->has('e_organizer'))||($errors->has('e_co_organizer'))||($errors->has('e_level'))||($errors->has('e_category'))||($errors->has('e_sponsored'))||($errors->has('e_sponsoring_agency_name_address'))||($errors->has('e_from_date'))||($errors->has('e_to_date'))||($errors->has('e_no_of_days'))||($errors->has('e_place'))||($errors->has('e_role')))
                                                                                                                        <script>
                                                                                                                            //alert(387);
                                                                                                                                window.onload=function(){
                                                                                                                                //alert('123');

                                                                                                                            };

                                                                                                                        </script>
                                                                                                                    @endif
                                                                                                                </div>
                                                                                                                <form action="{{route('Non-Teaching.professionalactivities.conducted.update',$conduct->id)}}" method="post" enctype="multipart/form-data">
                                                                                                                    @csrf
                                                                                                                    @method('patch')
                                                                                                                    <div class="ti-modal-body">
                                                                                                                        <input type='hidden' name='modal_no' id='modal_no' value={{old('modal_no')}}/>
                                                                                                                        <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                                                <label for="with-corner-hint" class="ti-form-label font-bold">Title:<span class="text-red-500">*</span></label>
                                                                                                                                <input type="text" name="e_title" class="ti-form-input" required placeholder="Title" value="{{$conduct->title}}">


                                                                                                                            </div>
                                                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                                                <label for="" class="ti-form-label mb-0 font-bold">Level:<span class="text-red-500">*</span></label>
                                                                                                                                <select class="ti-form-select level" name="e_level" required>
                                                                                                                                    <option value="#">Choose Level</option>

                                                                                                                                    <option value="Local" {{($conduct->level=='Local'? 'selected':'')}}>Local</option>
                                                                                                                                    <option value="National" {{($conduct->level=='National'? 'selected':'')}}>National</option>
                                                                                                                                    <option value="International" {{($conduct->level=='International'? 'selected':'')}}>International</option>

                                                                                                                                </select>
                                                                                                                            </div>
                                                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                                                <label for="" class="ti-form-label">Organizer:<span class="text-red-500">*</span></label>
                                                                                                                                <input type="text" name="e_organizer" class="ti-form-input" required placeholder="Organizer" value="{{$conduct->organizer}}">
                                                                                                                            </div>
                                                                                                                        </div>


                                                                                                                        <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                                                <label for="" class="ti-form-label">Co Organizer:</label>
                                                                                                                                <input type="text" name="e_co_organizer" class="ti-form-input" required placeholder="Co Organizer" value="{{$conduct->co_organizer}}">
                                                                                                                            </div>
                                                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                                                <label for="" class="ti-form-label">Category:<span class="text-red-500">*</span></label>
                                                                                                                                <select class="ti-form-select category" name="e_category" required>
                                                                                                                                    <option value="#">Choose Category</option>
                                                                                                                                    <option value="Seminar" {{($conduct->category=='Seminar'? 'selected':'')}}>Seminar</option>
                                                                                                                                    <option value="Webinar"{{($conduct->category=='Webinar'? 'selected':'')}}>Webinar</option>
                                                                                                                                    <option value="Certification Program" {{($conduct->category=='Certification Program'? 'selected':'')}}>Certification Program</option>
                                                                                                                                    <option value="Hackathon"{{($conduct->category=='Hackathon'? 'selected':'')}}>Hackathon</option>
                                                                                                                                </select>
                                                                                                                            </div>
                                                                                                                        </div>

                                                                                                                        <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                                                <label for="" class="ti-form-label">Sponsored:<span class="text-red-500">*</span></label>
                                                                                                                                <select class="ti-form-select sponsored" name="e_sponsored" required>
                                                                                                                                    <option value="#">Choose One</option>
                                                                                                                                    <option value="Yes" {{$conduct->sponsored=='Yes'? 'selected':''}}>Yes</option>
                                                                                                                                    <option value="No" {{$conduct->sponsored=='No'? 'selected':''}}>No</option>
                                                                                                                                </select>
                                                                                                                            </div>

                                                                                                                            <div class="max-w-sm space-y-3 pb-6 sponsoring_agency_name_address">
                                                                                                                                <label for="" class="ti-form-label">Sponsoring Agency Name Address:</label>
                                                                                                                                <input type="text" name="e_sponsoring_agency_name_address" class="ti-form-input" placeholder="Sponsoring Agency Name Address" value="{{$conduct->sponsoring_agency_name_address}}">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">

                                                                                                                            <div class="flex max-w-sm space-y-3 pb-6">
                                                                                                                                <label for="" class="ti-form-label">From Date:<span class="text-red-500">*</span></label>
                                                                                                                                <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                                                    <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                                                                            class="ri ri-calendar-line"></i></span>
                                                                                                                                </div>

                                                                                                                                <input type="date" name="e_from_date"
                                                                                                                                    class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date conducted_from_date_edit"
                                                                                                                                        required placeholder="Choose date" value="{{$conduct->from_date}}">
                                                                                                                            </div>
                                                                                                                            <div class="flex max-w-sm space-y-3 pb-6">
                                                                                                                                <label for="" class="ti-form-label">To Date:<span class="text-red-500">*</span></label>
                                                                                                                                <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                                                    <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                                                                            class="ri ri-calendar-line"></i></span>
                                                                                                                                </div>


                                                                                                                                <input type="date" name="e_to_date"
                                                                                                                                    class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date conducted_to_date_edit"
                                                                                                                                        required placeholder="Choose date" value="{{$conduct->to_date}}">
                                                                                                                            </div>
                                                                                                                        </div>


                                                                                                                        <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">

                                                                                                                                <div class="max-w-sm space-y-3 pb-6">
                                                                                                                                    <label for="" class="ti-form-label">Place:<span class="text-red-500">*</span></label>
                                                                                                                                    <input type="text" name="e_place" class="ti-form-input" value="{{$conduct->place}} " required placeholder="place">
                                                                                                                                </div>

                                                                                                                                <div class="max-w-sm space-y-3 pb-6">
                                                                                                                                    <label for="" class="ti-form-label">No Of Days:<span class="text-red-500">*</span></label>
                                                                                                                                    <input type="text" name="e_no_of_days" class="ti-form-input no_of_days_conducted_edit" value="{{$conduct->no_of_days}}"  readonly placeholder="enter number of days">
                                                                                                                                </div>
                                                                                                                        </div>
                                                                                                                        <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                                                <label for="" class="ti-form-label">Role:<span class="text-red-500">*</span></label>
                                                                                                                                <select class="ti-form-select role" name="e_role" required>
                                                                                                                                    <option value="#">Choose Role</option>
                                                                                                                                    <option value="Coordinator" {{($conduct->role=='Coordinator'? 'selected':'')}}>Coordinator</option>
                                                                                                                                    <option value="Convenor" {{($conduct->role=='Convenor'? 'selected':'')}}>Convenor</option>
                                                                                                                                    <option value="Member" {{($conduct->role=='Member'? 'selected':'')}}>Member</option>
                                                                                                                                    <option value="Jury" {{($conduct->role=='Jury'? 'selected':'')}}>Jury</option>

                                                                                                                                </select>
                                                                                                                            </div>
                                                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                                                <label for="" class="ti-form-label pt-4 font-bold">Document:<span class="text-red-500">*</span></label>
                                                                                                                                <span class="sr-only">Choose Profile photo</span>
                                                                                                                                    <input type="file" accept="application/pdf" name="document" required  class="block w-full text-sm text-gray-500 dark:text-white/70 focus:outline-0
                                                                                                                                    ltr:file:mr-4 rtl:file:ml-4 file:py-2 file:px-4
                                                                                                                                    file:rounded-sm file:border-0
                                                                                                                                    file:text-sm file:font-semibold
                                                                                                                                    file:bg-primary file:text-white
                                                                                                                                    hover:file:bg-primary focus-visible:outline-none doc" value="{{$conduct->document}}">
                                                                                                                                    @if($errors->has('document'))
                                                                                                                                        <div class="text-red-700">{{ $errors->first('document') }}</div>
                                                                                                                                    @endif
                                                                                                                                <div id="cond_documentError" class="error text-red-700"></div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                                            <input type="hidden" name="validation_status" value="updated">
                                                                                                                        </div>

                                                                                                                    </div>
                                                                                                                    <div class="ti-modal-footer">
                                                                                                                        <button type="button"
                                                                                                                            class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                                                            data-hs-overlay="#conduct_edit_modal{{$i}}">
                                                                                                                            Close
                                                                                                                        </button>

                                                                                                                        <input type="submit" class="ti-btn  bg-warning text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10" value="Update"/>

                                                                                                                    </div>

                                                                                                                </form>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                                                    <form action="{{ route('Non-Teaching.professionalactivities.conducted.destroy',$conduct->id) }}" method="post">

                                                                                                        <button onclick="return confirm('Are you Sure')"
                                                                                                            class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M7 4V2H17V4H22V6H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V6H2V4H7ZM6 6V20H18V6H6ZM9 9H11V17H9V9ZM13 9H15V17H13V9Z"></path></svg>
                                                                                                            @method('delete')
                                                                                                            @csrf
                                                                                                            <span
                                                                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                                                role="tooltip">
                                                                                                                Delete
                                                                                                            </span>
                                                                                                        </button>
                                                                                                    </form>
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        @endif
                                                                                    </tr>
                                                                                    @empty
                                                                                    <tr>
                                                                                    <td>no records</td>
                                                                                    </tr>
                                                                                    @endforelse

                                                                            @endif


                                                                        </tbody>
                                                                </table>
                                                            </div>
                                                            <!-- End of tab 2 content Conducted -->

                                                    </div>
                                            </div>

                                        </div>

                                    </div>

                            </div><!-- end of div colspan 9-->
                        </div>
                        <!-- End::row-1 -->
                    </div>

        </div>

        <!-- Ends::main-content -->




    </div>


@endsection

@section('scripts')

        <!-- FLATPICKR JS -->
        <script src="{{asset('build/assets/libs/flatpickr/flatpickr.min.js')}}"></script>

        <!-- CHOICES JS -->
        <script src="{{asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

        <!-- FORM-LAYOUT JS -->
        @vite('resources/assets/js/profile-settings.js')
        <!-- Include jQuery -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

        <!-- Include DataTables CSS and JS -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

        <script
        src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>

        <script>
            $(document).ready(function(){
                new DataTable('#proattended_table');
                new DataTable('#proconducted_table');
            });

             //profeesional activity attented
                    $(document).on('change','.sponsored_type',function(){
                    //   alert('changed');
                        if($(this).val() == "Yes"){
                            //if yes
                            $('.sponsored_by').show();


                        }else{
                            //if no
                            $('.sponsored_by').hide();
                            $('.otherSponsor').hide();

                        }
                    });
                $('.sponsoredBy').change(function () {
                    if ($(this).val() === 'Other') {
                        $('.othersponsored').show();
                    } else {
                        $('.othersponsored').hide();
                    }
                });

        </script>


        <script>
            $(document).ready(function(){
                //for calculating the no of days for professional activities attended (Adding)
                    $(document).on('change', '.attended_to_date',function(){
                            //alert('Date altered');

                        var attended_from_date= $('.attended_from_date').val();
                        var attended_to_date= $('.attended_to_date').val();
                       // alert(attended_to_date+'-'+attended_from_date);
                        if(attended_to_date != ""){
                            if(attended_from_date == attended_to_date){
                                $('.no_of_days').removeClass('border border-red-500 focus:border-blue-500');

                                $('.no_of_days').val(1); // when both from date and to date are same, it means the no of days should be 1.

                            }else if(attended_from_date > attended_to_date){
                                $('.no_of_days').val(0);
                                $('.no_of_days').addClass('border border-red-500 focus:border-blue-500');
                                $('.attended_to_date').val();
                                $('.attended_to_date').focus();

                            }else{
                                $('.no_of_days').removeClass('border border-red-500 focus:border-blue-500');
                                var startDay = new Date(attended_from_date);
                                var endDay = new Date(attended_to_date);


                                // Determine the time difference between two dates
                                var millisBetween = endDay.getTime() - startDay.getTime();

                                // Determine the number of days between two dates
                                var days = millisBetween / (1000 * 3600 * 24);
                                var days=days+1; //for acurate no calculation.

                                $('.no_of_days').val(days);
                            }
                        }else{
                                $('.attended_from_date').focus();
                                alert('Please fill the from date');
                        }



                    });


                        //Calculating the no of days while Editing th entry

                    //for calculating the no of days for professional activities attended (Editing)
                    $(document).on('change', '.attended_to_date_edit',function(){
                            //alert('Date altered');

                        var attended_from_date_edit = $('.attended_from_date_edit').val();
                        var attended_to_date_edit = $('.attended_to_date_edit').val();
                       // alert(attended_to_date+'-'+attended_from_date);
                        if(attended_from_date_edit != ""){
                            if(attended_from_date_edit == attended_to_date_edit){
                                //when both dates are same , then no of days would be 1.
                                $('.no_of_days_edit').removeClass('border border-red-500 focus:border-blue-500');

                                $('.no_of_days_edit').val(1);
                            }else if(attended_from_date_edit > attended_to_date_edit){
                                $('.no_of_days_edit').val(0);
                                $('.no_of_days_edit').addClass('border border-red-500 focus:border-blue-500');
                                $('.attended_to_date_edit').val();
                                $('.attended_to_date_edit').focus();
                                //$('.no_of_days_attended_edit').val(days);
                            }else{
                                $('.no_of_days_edit').removeClass('border border-red-500 focus:border-blue-500');

                                var startDay = new Date(attended_from_date_edit);
                                var endDay = new Date(attended_to_date_edit);

                                //alert(startDay+'-'+endDay);

                                // Determine the time difference between two dates
                                var millisBetween = endDay.getTime() - startDay.getTime();

                                // Determine the number of days between two dates
                                var days = millisBetween / (1000 * 3600 * 24);
                                days =  days+1;
                                $('.no_of_days_edit').val(days);
                            }


                        }else{
                            $('.attended_from_date_edit').focus();
                            alert('Please fill the from date');
                        }

                        //alert(millisBetween);



                    });



                    //for calculating the no of days for professional activities conducted (Adding)
                    $(document).on('change', '.conducted_to_date',function(){
                            //alert('Date altered');

                        var conducted_from_date = $('.conducted_from_date').val();
                        var conducted_to_date = $('.conducted_to_date').val();
                       // alert(attended_to_date+'-'+attended_from_date);
                        if(conducted_from_date != ""){
                            if(conducted_from_date == conducted_to_date){
                                $('.no_of_days_conducted').removeClass('border border-red-500 focus:border-blue-500');

                                $('.no_of_days_conducted').val(1);
                            }else if(conducted_from_date > conducted_to_date){
                                $('.no_of_days_conducted').val(0);
                                $('.no_of_days_conducted').addClass('border border-red-500 focus:border-blue-500');
                                $('.conducted_to_date').val();
                                $('.conducted_to_date').focus();
                            }else{
                                $('.no_of_days_conducted').removeClass('border border-red-500 focus:border-blue-500');

                                var startDay = new Date(conducted_from_date);
                                var endDay = new Date(conducted_to_date);

                                //alert(startDay+'-'+endDay);

                                // Determine the time difference between two dates
                                var millisBetween = endDay.getTime() - startDay.getTime();

                                // Determine the number of days between two dates
                                var days = millisBetween / (1000 * 3600 * 24);
                                days=days+1;
                                $('.no_of_days_conducted').val(days);
                            }

                        }else{
                            $('.conducted_from_date').focus();
                            alert('Please fill the from date');
                        }

                        //alert(millisBetween);
                     });

                      //for calculating the no of days for professional activities conducted (Editing)
                    $(document).on('change', '.conducted_to_date_edit',function(){
                            //alert('Date altered');

                        var conducted_from_date_edit = $('.conducted_from_date_edit').val();
                        var conducted_to_date_edit = $('.conducted_to_date_edit').val();
                       // alert(attended_to_date+'-'+attended_from_date);
                        if(conducted_from_date_edit != ""){

                            if(conducted_from_date_edit == conducted_to_date_edit){
                                $('.no_of_days_conducted_edit').removeClass('border border-red-500 focus:border-blue-500');

                                $('.no_of_days_conducted_edit').val(1);
                            }else if(conducted_from_date_edit > conducted_to_date_edit){
                                $('.no_of_days_conducted_edit').val(0);
                                $('.no_of_days_conducted_edit').addClass('border border-red-500 focus:border-blue-500');
                                $('.conducted_to_date_edit').val();
                                $('.conducted_to_date_edit').focus();
                            }else{
                                $('.no_of_days_conducted_edit').removeClass('border border-red-500 focus:border-blue-500');

                                var startDay = new Date(conducted_from_date_edit);
                                var endDay = new Date(conducted_to_date_edit);

                                //alert(startDay+'-'+endDay);

                                // Determine the time difference between two dates
                                var millisBetween = endDay.getTime() - startDay.getTime();

                                // Determine the number of days between two dates
                                var days = millisBetween / (1000 * 3600 * 24);
                                days=days+1;
                                $('.no_of_days_conducted_edit').val(days);
                            }

                        }else{
                            $('.conducted_from_date').focus();
                            alert('Please fill the from date');
                        }

                        //alert(millisBetween);
                     });


                    //profeesional activity attented
                     $(document).on('change','.sponsored_type',function(){
                    //   alert('changed');
                            if($(this).val() == "Yes"){
                                //if yes
                                $('.sponsored_by').show();


                            }else{
                                //if no
                                $('.sponsored_by').hide();

                            }
                    });



                    //professional activity conducted
                     $(document).on('change','.sponsored_type_conducted',function(){
                    //   alert('changed');
                            if($(this).val() == "Yes"){
                                //if yes
                                $('.sponsoring_agency_name_address').show();


                            }else{
                                //if no
                                $('.sponsoring_agency_name_address').hide();

                            }
                    });

                    //validation for professional activity attended
                    $(document).ready(function(){
                        //alert('Hello from jquery');
                        new DataTable('#proattended_table');

                        $(document).on('click','.professional_activity_edit_modal_click',function(){
                            //var
                            var modal_no = $(this).attr("btn-val");

                            //alert($(this).find('.caste_edit_modal_no').val());
                            $('#modal_no').val(modal_no);
                        });
                    });


                    //validation for professional activity conducted
                    $(document).ready(function(){
                        //alert('Hello from jquery');
                        new DataTable('#proconducted_table');

                        $(document).on('click','.conduct_edit_modal_click',function(){
                            //var
                            var modal_no = $(this).attr("btn-val");

                            //alert($(this).find('.caste_edit_modal_no').val());
                            $('#modal_no').val(modal_no);
                        });
                    });

                    //Validation for non-teachhing professional activity attended
                    $(document).on('click','#professional_activity_attended_store_btn',function(e){

                        var patt_title = $('#patt_title').val();
                        var patt_organizer = $('#patt_organizer').val();
                        var patt_role = $('#patt_role').val();
                        var patt_level = $('#patt_level').val();
                        var patt_category = $('#patt_category').val();
                        var patt_sponsored = $('#patt_sponsored').val();
                        var patt_sponsoredby = $('#patt_sponsoredby').val();
                        var patt_from_date = $('#patt_from_date').val();
                        var patt_to_date = $('#patt_to_date').val();
                        var patt_noofdays = $('#patt_noofdays').val();
                        var patt_document = $('#patt_document')[0].files[0];

                        var flag = false;

                        if (!patt_document) {
                            $('#patt_documentError').text('Please choose a file');
                            flag = true;
                        }


                        // if(patt_title == ''){
                        //     $('#patt_titleError').text('Title is missing');
                        //     flag = true;
                        // }else if (!/^[a-zA-Z\s]+$/.test(patt_title.trim())){
                        //     $('#patt_titleError').text('Please fill the correct value');
                        //     flag = true;
                        // }



                        if (patt_title.trim() === '') {
                            $('#patt_titleError').text('Title is missing');
                            flag = true;
                        } else if (!/^[\w\s\/.,]+$/.test(patt_title.trim())) {
                            $('#patt_titleError').text('Please fill the correct value');
                            flag = true;
                        }




                        if(patt_organizer == ''){
                            $('#patt_organizerError').text('Data is missing');
                            flag = true;
                        }else if (!/^[a-zA-Z\s]+$/.test(patt_organizer.trim())){
                            $('#patt_organizerError').text('Please fill the correct value');
                            flag = true;
                        }

                        if(patt_role == '#'){
                            //alert('# choosen');
                            $('#patt_roleError').text('Please Choose a correct option');
                            flag = true;

                        }

                        if(patt_level == '#'){
                            $('#patt_levelError').text('Please Choose a correct option');
                            flag = true;
                        }

                        if(patt_category == '#'){
                            $('#patt_categoryError').text('Please Choose a correct option');
                            flag = true;
                        }
                        if(patt_sponsored == '#'){
                            $('#patt_sponsoredError').text('Please Choose a correct option');
                            flag = true;
                        }
                        if(patt_sponsoredby == '#'){
                            $('#patt_sponsoredbyError').text('Please fill the correct value');
                            flag = true;
                        }

                        if(patt_from_date.trim() === ''){
                            $('#patt_fromdateError').text('Please Select a proper date');
                            flag = true;
                        }

                        if(patt_to_date.trim() === ''){
                            $('#patt_todateError').text('Please Select a proper date');
                            flag = true;
                        }

                        if(patt_noofdays <= 0){
                            $('#patt_noofdaysError').text('Choose a proper from date and to date.');
                            flag = true;
                        }


                        if(flag == true){
                            e.preventDefault();
                        }
                    });


                   //Validation for non-teachhing professional activity Conducted
                    $(document).on('click','#professional_activity_conducted_store_btn',function(e){

                        var ntc_title = $('#ntc_title').val();
                        var ntc_level = $('#ntc_level').val();
                        var ntc_organizer = $('#ntc_organizer').val();
                        var ntc_coorganizer = $('#ntc_coorganizer').val();
                        var ntc_category = $('#ntc_category').val();
                        var ntc_sponsored = $('#ntc_sponsored').val();
                        var ntc_sponsoring_agency_name_address = $('#ntc_sponsoring_agency_name_address').val();
                        var ntc_from_date = $('#ntc_from_date').val();
                        var ntc_to_date = $('#ntc_to_date').val();
                        var ntc_place = $('#ntc_place').val();
                        var ntc_no_of_days = $('#ntc_no_of_days').val();
                        var ntc_role = $('#ntc_role').val();
                        var pcond_document = $('#pcond_document')[0].files[0];

                        var flag = false;

                        if (!pcond_document) {
                            $('#pcond_documentError').text('Please choose a file');
                            flag = true;
                        }

                        // if(ntc_title == ''){
                        //     $('#ntc_titleError').text('Title is missing');
                        //      flag = true;
                        // }else if (!/^[a-zA-Z\s]+$/.test(ntc_title.trim())){
                        //     $('#ntc_titleError').text('Please fill the correct value');
                        //      flag = true;
                        // }


                        if (ntc_title.trim() === '') {
                            $('#ntc_titleError').text('Title is missing');
                            flag = true;
                        } else if (!/^[\w\s\/.,]+$/.test(ntc_title.trim())) {
                            $('#ntc_titleError').text('Please fill the correct value');
                            flag = true;
                        }


                        if(ntc_level == '#'){
                            //alert('# choosen');
                            $('#ntc_levelError').text('Please Choose a correct option');
                             flag = true;
                        }
                        if(ntc_organizer == ''){
                            $('#ntc_organizerError').text('Organizer is missing');
                             flag = true;
                        }else if (!/^[a-zA-Z\s]+$/.test(ntc_organizer.trim())){
                            $('#ntc_organizerError').text('Please fill the correct value');
                             flag = true;
                        }
                        if(ntc_coorganizer == ''){
                            $('#ntc_coorganizerError').text('Co-Organizer is missing');
                             flag = true;
                        }else if (!/^[a-zA-Z\s]+$/.test(ntc_coorganizer.trim())){
                            $('#ntc_coorganizerError').text('Please fill the correct value');
                             flag = true;
                        }
                        if(ntc_category == '#'){
                            $('#ntc_categoryError').text('Please Choose a correct Option');
                             flag = true;
                        }
                        if(ntc_sponsored == '#'){
                            $('#ntc_sponsoredError').text('Please Choose a correct option');
                             flag = true;
                        }

                        if(ntc_sponsoring_agency_name_address == '#'){
                            $('#ntc_sponsoring_agency_name_addressError').text('Please fill the correct value');
                             flag = true;
                        }


                        //if ($(ntc_sponsored).val() === 'Yes' && $('#ntc_sponsoring_agency_name_address').val() === '') {
                            //$('#ntc_sponsoring_agency_name_addressError').text('Please fill the correct value');
                            //flag = true;
                        //}
                        //if ($(ntc_sponsored).val() !== 'No' && $('#ntc_sponsoring_agency_name_address').val() === '') {
                           // $('#ntc_sponsoring_agency_name_addressError').text('Please fill the correct value');
                            //flag = true;
                        //}


                        if(ntc_from_date.trim() === ''){
                            $('#ntc_fromdateError').text('Please Select a proper date');
                             flag = true;
                        }

                        if(ntc_to_date.trim() === ''){
                            $('#ntc_todateError').text('Please Select a proper date');
                             flag = true;
                        }
                        if(ntc_place == ''){
                            $('#ntc_placeError').text('Place Name is missing');
                             flag = true;
                        }else if (!/^[a-zA-Z\s]+$/.test(ntc_place.trim())){
                            $('#ntc_placeError').text('Please fill the correct value');
                             flag = true;
                        }

                        if(ntc_no_of_days <= 0){
                            $('#ntc_noofdaysError').text('Choose a proper from date and to date.');
                             flag = true;
                        }
                        if(ntc_role == '#'){
                            //alert('# choosen');
                            $('#ntc_roleError').text('Please Choose a correct option');
                             flag = true;
                        }

                        if(flag == true){
                            e.preventDefault();
                        }

                    });


                    //export to excel Pro Attended
                    $('#exportToExcel').on('click', function () {
                        var table = $('#proattended_table').clone();

                        table.find('td:last-child').remove();

                        table.find('thead tr th:last-child').remove();

                        // Remove any colspan attributes from table cells
                        table.find('td').removeAttr('colspan');

                        // Ensure each cell has proper formatting
                        table.find('td').css({
                            'border': '1px solid #000',
                            'padding': '5px'
                        });

                        // Create a Blob containing the modified table data
                        var blob = new Blob([table[0].outerHTML], { type: 'application/vnd.ms-excel;charset=utf-8' });

                        // Check for Internet Explorer and Edge
                        if (window.navigator && window.navigator.msSaveOrOpenBlob) {
                            window.navigator.msSaveOrOpenBlob(blob, 'proattended_data.xls');
                        } else {
                            var link = $('<a>', {
                                href: URL.createObjectURL(blob),
                                download: 'proattended_data.xls'
                            });

                            // Trigger the click to download
                            link[0].click();
                        }
                    });



                    //export to excel Pro Conducted
                    $('#conduct_exportToExcel').on('click', function () {
                        var table = $('#proconducted_table').clone();

                        table.find('td:last-child').remove();

                        table.find('thead tr th:last-child').remove();

                        // Remove any colspan attributes from table cells
                        table.find('td').removeAttr('colspan');

                        // Ensure each cell has proper formatting
                        table.find('td').css({
                            'border': '1px solid #000',
                            'padding': '5px'
                        });

                        // Create a Blob containing the modified table data
                        var blob = new Blob([table[0].outerHTML], { type: 'application/vnd.ms-excel;charset=utf-8' });

                        // Check for Internet Explorer and Edge
                        if (window.navigator && window.navigator.msSaveOrOpenBlob) {
                            window.navigator.msSaveOrOpenBlob(blob, 'proconduct_data.xls');
                        } else {
                            var link = $('<a>', {
                                href: URL.createObjectURL(blob),
                                download: 'proconduct_data.xls'
                            });

                            // Trigger the click to download
                            link[0].click();
                        }
                    });
            });
        </script>

    @endsection
