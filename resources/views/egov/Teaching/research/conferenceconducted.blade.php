@extends('layouts.components.egov_admin.master-egov')

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
                                <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium">
                                    <span class="text-primary">
                                        @if(session('deptid')==8)
                                            Weclome E-Governance Admin,Civil Engineering
                                            @elseif(session('deptid')==5)
                                            Welcome E-Governance Admin,Computer Science and Engineering
                                            @elseif(session('deptid')==17)
                                            Welcome E-Governance Admin,Architecture
                                            @elseif(session('deptid')==9)
                                            Welcome E-Governance Admin, Aeronautical Engineering
                                            @elseif(session('deptid')==2)
                                            Welcome E-Governance Admin, Electronics and Communication Engineering
                                            @elseif(session('deptid')==7)
                                            Welcome E-Governance Admin,Electrtical and Electronics Engineering
                                            @elseif(session('deptid')==6)
                                            Welcome E-Governance Admin, Information Science & Engineering
                                            @elseif(session('deptid')==1)
                                            Welcome E-Governance Admin, Mechanical Engineering
                                            @elseif(session('deptid')==24)
                                            Welcome E-Governance Admin,Master of Business Administration
                                            @elseif(session('deptid')==3)
                                            Welcome E-Governance Admin Master of Computer Applications
                                            @elseif(session('deptid')==13)
                                            Welcome E-Governance Admin, Physics
                                            @elseif(session('deptid')==12)
                                            Welcome E-Governance Admin, Mathematics
                                            @elseif(session('deptid')==14)
                                            Welcome E-Governance Admin, Chemistry
                                        @endif
                                    </span>
                                </h3>
                            </div>
                            <ol class="flex items-center whitespace-nowrap min-w-0">
                                <li class="text-sm">
                                <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="#">
                                   Conference Activity Attended
                                    <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                </a>
                                </li>


                            </ol>
                        </div>
                        <!-- Page Header Close -->

                    </div>
                    <!-- Start::main-content -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <!--Count Boxes-->
                        <div class="col-span-2 xl:col-span-2">
                            <!-- Count box 1 -->
                            <div class="box box-sm">
                                <!-- Content for count box 1 -->
                                <div class="box-body">
                                    <div class="flex">
                                        <div class="ltr:mr-2 rtl:ml-2">
                                            <div class="avatar rounded-sm text-primary p-2.5 bg-primary/20
                                                @if($teaching_conferences_conducted->national_count == 0) text-red-500 @endif">
                                                <i class="ti ti-users text-2xl leading-none"></i>
                                            </div>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm font-bold">National</p>
                                            <div class="flex justify-between items-center">
                                                <div class="flex flex-col">
                                                    <h5 class="mb-0 text-2xl font-semibold
                                                        @if($teaching_conferences_conducted->national_count == 0) text-red-500 @else text-gray-800 dark:text-white @endif">
                                                        {{ $teaching_conferences_conducted->national_count }}
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-2 xl:col-span-2">
                            <!-- Count box 2 -->
                            <div class="box box-sm">
                                <!-- Content for count box 2 -->
                                <div class="box-body">
                                    <div class="flex">
                                        <div class="ltr:mr-2 rtl:ml-2">
                                            <div class="avatar rounded-sm text-primary p-2.5 bg-primary/20
                                                @if($teaching_conferences_conducted->international_count == 0) text-red-500 @endif">
                                                <i class="ti ti-users text-2xl leading-none"></i>
                                            </div>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm font-bold">International</p>
                                            <div class="flex justify-between items-center">
                                                <div class="flex flex-col">
                                                    <h5 class="mb-0 text-2xl font-semibold
                                                        @if($teaching_conferences_conducted->international_count == 0) text-red-500 @else text-gray-800 dark:text-white @endif">
                                                        {{ $teaching_conferences_conducted->international_count }}
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-2 xl:col-span-2">
                            <!-- Count box 3 -->
                            <div class="box box-sm">
                                <!-- Content for count box 3 -->
                                <div class="box-body">
                                    <div class="flex">
                                        <div class="ltr:mr-2 rtl:ml-2">
                                            <div class="avatar rounded-sm text-primary p-2.5 bg-primary/20
                                                @if($teaching_conferences_conducted->convener_count == 0) text-red-500 @endif">
                                                <i class="ti ti-users text-2xl leading-none"></i>
                                            </div>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm font-bold">Convener</p>
                                            <div class="flex justify-between items-center">
                                                <div class="flex flex-col">
                                                    <h5 class="mb-0 text-2xl font-semibold
                                                        @if($teaching_conferences_conducted->convener_count == 0) text-red-500 @else text-gray-800 dark:text-white @endif">
                                                        {{ $teaching_conferences_conducted->convener_count }}
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="col-span-2 xl:col-span-2">
                            <!-- Count box 3 -->
                            <div class="box box-sm">
                                <!-- Content for count box 3 -->
                                <div class="box-body">
                                    <div class="flex">
                                        <div class="ltr:mr-2 rtl:ml-2">
                                            <div class="avatar rounded-sm text-primary p-2.5 bg-primary/20
                                                @if($teaching_conferences_conducted->co_convener_count == 0) text-red-500 @endif">
                                                <i class="ti ti-users text-2xl leading-none"></i>
                                            </div>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm font-bold">Co-Convener</p>
                                            <div class="flex justify-between items-center">
                                                <div class="flex flex-col">
                                                    <h5 class="mb-0 text-2xl font-semibold
                                                        @if($teaching_conferences_conducted->co_convener_count == 0) text-red-500 @else text-gray-800 dark:text-white @endif">
                                                        {{ $teaching_conferences_conducted->co_convener_count }}
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2 xl:col-span-2">
                            <!-- Count box 3 -->
                            <div class="box box-sm">
                                <!-- Content for count box 3 -->
                                <div class="box-body">
                                    <div class="flex">
                                        <div class="ltr:mr-2 rtl:ml-2">
                                            <div class="avatar rounded-sm text-primary p-2.5 bg-primary/20
                                                @if($teaching_conferences_conducted->team_member_count == 0) text-red-500 @endif">
                                                <i class="ti ti-users text-2xl leading-none"></i>
                                            </div>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm font-bold">TeamMember</p>
                                            <div class="flex justify-between items-center">
                                                <div class="flex flex-col">
                                                    <h5 class="mb-0 text-2xl font-semibold
                                                        @if($teaching_conferences_conducted->team_member_count == 0) text-red-500 @else text-gray-800 dark:text-white @endif">
                                                        {{ $teaching_conferences_conducted->team_member_count }}
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2 xl:col-span-2">
                            <!-- Count box 3 -->
                            <div class="box box-sm">
                                <!-- Content for count box 3 -->
                                <div class="box-body">
                                    <div class="flex">
                                        <div class="ltr:mr-2 rtl:ml-2">
                                            <div class="avatar rounded-sm text-primary p-2.5 bg-primary/20
                                                @if($teaching_conferences_conducted->coordinator_count == 0) text-red-500 @endif">
                                                <i class="ti ti-users text-2xl leading-none"></i>
                                            </div>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm font-bold">Coordinator</p>
                                            <div class="flex justify-between items-center">
                                                <div class="flex flex-col">
                                                    <h5 class="mb-0 text-2xl font-semibold
                                                        @if($teaching_conferences_conducted->coordinator_count == 0) text-red-500 @else text-gray-800 dark:text-white @endif">
                                                        {{ $teaching_conferences_conducted->coordinator_count }}
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-12">
                            <div class="box">
                                <div class="box-body">
                                    <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
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
                                        <!-- Add the export button here -->
                                        <div style="display: flex; align-items: center;">
                                            <div style="display: flex; flex-direction: column;">
                                                <label for="from_date" class="ti-form-label font-bold mx-3 mt-3">From Date:<span class="text-red-500">*</span></label>
                                                <input type="date" id="from_date" class="mx-2" placeholder="From Date">
                                            </div>
                                            <div style="display: flex; flex-direction: column; margin-left: 20px;">
                                                <label for="to_date" class="ti-form-label font-bold mx-3 mt-3">To Date:<span class="text-red-500">*</span></label>
                                                <input type="date" id="to_date" class="mx-2" placeholder="To Date">
                                            </div>
                                            <button id="filterBtn" class="bg-blue-500 text-white px-4 mt-10 py-2 rounded-md focus:outline-none">Search</button>
                                        </div>
                                         <div class="flex justify-end mt-4">
                                            <button id="exportToExcel" class="bg-green-500 text-white px-4 py-2 rounded-md focus:outline-none">Export to Excel</button>
                                        </div>
                                        <table id="conducted" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                            <thead class="bg-gray-50 dark:bg-black/20">
                                            <tr class="">
                                                <th scope="col" class="dark:text-white/80 font-bold ">S.No</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Staff Name</th>
                                                {{-- <th scope="col" class="dark:text-white/80 font-bold ">Dept Short Name</th> --}}
                                                <th scope="col" class="dark:text-white/80 font-bold ">E-Gov ID</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Conferene Name</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Co Organizer</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">No Of Participant</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">From Date</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">To Date</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">No Of  Days</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Place</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Publisher</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Web-Link</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Type Of Level</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">ISSN NO</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Role</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">sponsored</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Sponsoring Agency </th>
                                                {{-- Exclude the "Document" column when exporting --}}
                                                @if(!isset($export) || !$export)
                                                    <th scope="col" class="dark:text-white/80 font-bold ">Document</th>
                                                @endif



                                            </tr>
                                            </thead>
                                            <tbody>
                                                 @php
                                                    $i=1;
                                                @endphp
                                                @foreach ($conferences_conducted as $conducted)
                                                    <tr style="@if($conducted->validation_status =='invalid') background-color: #ffcccc; @elseif($conducted->validation_status =='updated') background-color: #fff2cc; @elseif($conducted->validation_status =='valid') background-color: #ccffcc; @endif">

                                                        <td><span>{{ $i++ }}</span></td>
                                                        <td><span>{{ $conducted->fname . ' ' . $conducted->mname . ' ' . $conducted->lname }}</span></td>
                                                        {{-- <td><span>{{ $conducted->dept_shortname }}</span></td> --}}
                                                        <td><span>{{ $conducted->egov_id }}</span></td>
                                                        <td><span>{{ $conducted->conference_name }}</span></td>
                                                        <td><span>{{ $conducted->co_organizer }}</span></td>
                                                        <td><span>{{ $conducted->no_of_participants }}</span></td>
                                                        <td><span>{{\Carbon\Carbon::parse($conducted->from_date)->format('d-M-Y') }}</span></td>
                                                        <td><span>{{\Carbon\Carbon::parse($conducted->to_date)->format('d-M-Y') }}</span></td>
                                                        <td><span>{{ $conducted->no_of_days }}</span></td>
                                                        <td><span>{{ $conducted->place }}</span></td>
                                                        <td><span>{{ $conducted->publisher }}</span></td>
                                                        <td>
                                                            <span>
                                                                <a href="{{ $conducted->weblink }}"
                                                                class='font-medium text-blue-600 dark:text-blue-500 hover:underline' target="_blank">
                                                                    {{ $conducted->weblink }}
                                                                </a>
                                                            </span>
                                                        </td>
                                                        <td><span>{{ $conducted->type_of_level }}</span></td>
                                                        <td><span>{{ $conducted->ISSN_NO }}</span></td>
                                                        <td><span>{{ $conducted->role }}</span></td>
                                                        <td><span>{{ $conducted->sponsored }}</span></td>
                                                        <td>
                                                            <span>
                                                                {{ $conducted->sponsored == 'No' ? '--NA--' : $conducted->sponsoring_agency }}
                                                            </span>
                                                        </td>
                                                        {{-- Exclude the "Document" column when exporting --}}
                                                        @if(!isset($export) || !$export)
                                                            <td>
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <a  href="{{ Storage::url('Uploads/Research/Conference_Conducted/' .$conducted->document) }}" class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary" target="_blank" {{$conducted->document}}>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12.0003 3C17.3924 3 21.8784 6.87976 22.8189 12C21.8784 17.1202 17.3924 21 12.0003 21C6.60812 21 2.12215 17.1202 1.18164 12C2.12215 6.87976 6.60812 3 12.0003 3ZM12.0003 19C16.2359 19 19.8603 16.052 20.7777 12C19.8603 7.94803 16.2359 5 12.0003 5C7.7646 5 4.14022 7.94803 3.22278 12C4.14022 16.052 7.7646 19 12.0003 19ZM12.0003 16.5C9.51498 16.5 7.50026 14.4853 7.50026 12C7.50026 9.51472 9.51498 7.5 12.0003 7.5C14.4855 7.5 16.5003 9.51472 16.5003 12C16.5003 14.4853 14.4855 16.5 12.0003 16.5ZM12.0003 14.5C13.381 14.5 14.5003 13.3807 14.5003 12C14.5003 10.6193 13.381 9.5 12.0003 9.5C10.6196 9.5 9.50026 10.6193 9.50026 12C9.50026 13.3807 10.6196 14.5 12.0003 14.5Z"></path></svg>
                                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm" role="tooltip">
                                                                        View Document
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                 <!--modal Start Here-->
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <button data-hs-overlay="#validate_edit_modal{{$i}}"
                                                                        class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M16.6256 3.1285L9.29145 10.4626L9.29886 14.7098L13.537 14.7024L20.8682 7.37114C21.5912 8.75438 22 10.3278 22 11.9967C22 17.5196 17.5228 21.9967 12 21.9967C6.47715 21.9967 2 17.5196 2 11.9967C2 6.47386 6.47715 1.9967 12 1.9967C13.6689 1.9967 15.2423 2.40553 16.6256 3.1285ZM20.4853 2.09721L21.8995 3.51142L12.7071 12.7038L11.2954 12.7063L11.2929 11.2896L20.4853 2.09721Z"></path></svg>
                                                                        <span
                                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                            role="tooltip">
                                                                            Validate
                                                                        </span>
                                                                    </button>
                                                                    <div id="validate_edit_modal{{$i}}" class="hs-overlay hidden ti-modal">
                                                                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                                            <div class="ti-modal-content">
                                                                                <div class="ti-modal-header">
                                                                                    <h3 class="ti-modal-title">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                        Validate the Conference Attended Details
                                                                                    </h3>
                                                                                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                                        data-hs-overlay="#validate_edit_modal{{$i}}">
                                                                                        <span class="sr-only">Close</span>
                                                                                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <path
                                                                                            d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                            fill="currentColor"/>
                                                                                        </svg>
                                                                                    </button>
                                                                                </div>
                                                                                <form action="{{ route('egov.Teaching.research.conferenceconducted.update', $conducted->id) }}" method="post">
                                                                                    @csrf
                                                                                    @method('patch')
                                                                                    <div class="ti-modal-body">
                                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                <label for="validation_type" class="ti-form-label font-bold">Validate Type:<span class="text-red-500">*</span></label>
                                                                                                <select class="ti-form-select validation_type" name="validation_status" required>
                                                                                                    <option value="#">Choose One</option>
                                                                                                    <option value="valid">Valid</option>
                                                                                                    <option value="invalid">In-Valid</option>
                                                                                                </select>
                                                                                            </div>
                                                                                            <div class="max-w-sm space-y-3 pb-6 reason_div">
                                                                                                <label for="reason" class="ti-form-label font-bold">Reason:</label>
                                                                                                <input type="text" name="reason" class="ti-form-input" placeholder="Reason">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="ti-modal-footer">
                                                                                        <button type="button"
                                                                                            class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                            data-hs-overlay="#validate_edit_modal{{$i}}">
                                                                                            Close
                                                                                        </button>
                                                                                        <input type="submit" class="ti-btn  bg-primary text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10" value="Update"/>

                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--Modal Ends Here-->
                                                            </td>
                                                        @endif
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
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

        <!-- FORM-LAYOUT JS -->
        @vite('resources/assets/js/profile-settings.js')

        <script
        src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>


        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"
        ></script>

        <script src="https://cdn.datatables.net/1.13.6/js/dataTables.tailwindcss.min.js"></script>

        <script href="https://cdn.tailwindcss.com/3.3.5"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

        <script>
            $(document).ready(function(){
               //alert('Hello from jquery');

               new DataTable('#conducted');
                // Function to handle the filter Date Range
                $('#filterBtn').click(function () {
                    var fromDate = $('#from_date').val();
                    var toDate = $('#to_date').val();

                    // Determine the column indices dynamically based on table headers
                    var fromColumnIndex = $('#conducted th:contains("From Date")').index();
                    var toColumnIndex = $('#conducted th:contains("To Date")').index();

                    $('#conducted tbody tr').each(function () {
                        var rowFromDate = $(this).find('td:eq(' + fromColumnIndex + ') span').text();
                        var rowToDate = $(this).find('td:eq(' + toColumnIndex + ') span').text();

                        var rowFromDateParsed = moment(rowFromDate, 'DD-MMM-YYYY');
                        var rowToDateParsed = moment(rowToDate, 'DD-MMM-YYYY');

                        if (
                            (fromDate !== '' && rowFromDateParsed.isBefore(moment(fromDate, 'YYYY-MM-DD'))) ||
                            (toDate !== '' && rowToDateParsed.isAfter(moment(toDate, 'YYYY-MM-DD')))
                        ) {
                            $(this).hide();
                        } else {
                            $(this).show();
                        }
                    });
                });



            });
        </script>


          <script>
            $(document).ready(function () {
                $('#exportToExcel').on('click', function () {
                    var table = $('#conducted').clone();

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
                        window.navigator.msSaveOrOpenBlob(blob, 'conducted_data.xls');
                    } else {
                        var link = $('<a>', {
                            href: URL.createObjectURL(blob),
                            download: 'conducted_data.xls'
                        });

                        // Trigger the click to download
                        link[0].click();
                    }
                });


                $('.reason_div').hide();

                $('.validation_type').change(function(){

                    if($(this).val() == 'invalid')
                    {
                        $('.reason_div').show();
                    } else
                    {
                        $('.reason_div').hide();
                    }

                });
            });
        </script>

@endsection
