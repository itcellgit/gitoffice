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
                                    {{-- <h1>Welcome, {{ $staff->fname }}</h1> --}}
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium">Welcome<span class="text-primary"> {{ $staff->fname.' '.$staff->mname.' '.$staff->lname }}</span></h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                        <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                            Staff Investments
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
                                    {{-- <h4>Research Activities</h4> --}}
                                </div>

                                <div class="box-body pt-0">
                                    <div class="mt-3">

                                          <!--Start of Achievements -->
                                            <div class="box border-0 shadow-none mb-0">
                                                <div class="box-body">
                                                    <button id="general_achievements_btn" data-hs-overlay="#add_general_achievements" class="hs-dropdown-toggle ti-btn ti-btn-primary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M17 19H19V11H13V19H15V13H17V19ZM3 19V4C3 3.44772 3.44772 3 4 3H18C18.5523 3 19 3.44772 19 4V9H21V19H22V21H2V19H3ZM7 11V13H9V11H7ZM7 15V17H9V15H7ZM7 7V9H9V7H7Z" fill="rgba(255,255,255,1)"></path></svg>
                                                            Add staff investments
                                                    </button>
                                                    <div id="add_general_achievements" class="hs-overlay hidden ti-modal">
                                                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                            <div class="ti-modal-content">
                                                                <div class="ti-modal-header">
                                                                    <h3 class="ti-modal-title">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                            Add New Staff Investments
                                                                    </h3>
                                                                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                        data-hs-overlay="#add_general_achievements">
                                                                        <span class="sr-only">Close</span>
                                                                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                            d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                            fill="currentColor" />
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                                <form  action="{{route('Teaching.staff_investments.staffinvestment.store')}}" method="post" enctype="multipart/form-data">
                                                                    @csrf

                                                                    <div class="ti-modal-body">
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            @foreach($tdsheads as $tdshead)
                                                                            <input type="hidden" name="tdshead_id" value="{{$tdshead->id}}">
                                                                            @endforeach
                                                                            <input type="hidden" name="staff_id" value="{{$staff->id}}">
                                                                            <div class="max-w-sm space-y-3 pb-6">
                            
                                                                                <label for="" class="ti-form-label font-bold">Investment Type:<span class="text-red-500">*</span></label>
                                                                                {{-- <input type="text" name="investment_type" class="ti-form-input" required placeholder="Investment Type" id="investment_type" value="{{ old('investment_type') }}"> --}}
                                                                                <select name="investment_type" id="investment_type">
                                                                                   @foreach($tdsheads as $tdshead)
                                                                                        <option value="{{ $tdshead->id }}">{{ $tdshead->category }}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                                 @if($errors->has('investment_type'))
                                                                                     <div class="text-red-700">{{ $errors->first('investment_type')}}</div>
                                                                                @endif
                                                                                <div id="investment_typeError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">amount:<span class="text-red-500">*</span></label>
                                                                                <input type="number" min="0" step="1" name="amount" class="ti-form-input" required placeholder="amount" id="amount" value="{{ old('amount') }}">
                                                                                 @if($errors->has('amount'))
                                                                                    <div class="text-red-700">{{ $errors->first('amount')}}</div>
                                                                                @endif
                                                                                <div id="amountError" class="error text-red-700"></div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                        
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <div class="max-w-sm space-y-3 pb-6">
                                                                                    <label for="" class="ti-form-label pt-4 font-bold">Document:<span class="text-red-500">* Only PDF files up to 500 KB in size are accepted.</span></label>
                                                                                    <span class="sr-only">Choose file</span>
                                                                                        <input type="file" accept="application/pdf" name="document" id="document" class="block w-full text-sm text-gray-500 dark:text-white/70 focus:outline-0
                                                                                        ltr:file:mr-4 rtl:file:ml-4 file:py-2 file:px-4
                                                                                        file:rounded-sm file:border-0
                                                                                        file:text-sm file:font-semibold
                                                                                        file:bg-primary file:text-white
                                                                                        hover:file:bg-primary focus-visible:outline-none doc" required>
                                                                                        @if($errors->has('document'))
                                                                                            <div class="text-red-700">{{ $errors->first('document') }}</div>
                                                                                        @endif
                                                                                        <div id="documentError" class="error text-red-700"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ti-modal-footer">
                                                                        <button type="button"
                                                                            class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                            data-hs-overlay="#add_general_achievements">
                                                                            Close
                                                                        </button>

                                                                        <input type="submit" id="achievments_store_add_btn" class="ti-btn  bg-primary text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10" value="Add"/>

                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
                                                        <table id="general_achievements_table" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                            <thead class="bg-gray-50 dark:bg-black/20">
                                                                <tr class="">
                                                                    <th scope="col" class="dark:text-white/80 font-bold">S NO</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Investment type</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Amount</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">File</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Status</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold ">Action</th>
                                                                </tr>
                                                            </thead>
                                                           
                                                            <tbody class="">
                                                                @php
                                                                    $i=1;
                                                                @endphp
                                                                    
                                                                {{-- @empty --}}
                                                                    
                                                                @foreach ($staff->tdsheads as $stafftds)
                                                                    <tr> 
                                                                        <td>{{$i++ }}</td> 
                                                                        <td>{{$stafftds->category }}</td>
                                                                        <td>{{$stafftds->pivot->amount}}</td>
                                                                        <td> @if ($stafftds->pivot->document)
                                                                            <a href="{{ Storage::url($stafftds->pivot->document) }}" target="_blank">View Document</a>
                                                                            @else
                                                                                N/A
                                                                            @endif
                                                                        </td>
                                                                        <td>{{$stafftds->pivot->status}}</td>
                                                                        <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                                            <div class="hs-tooltip ti-main-tooltip">
                                                                                <button data-hs-overlay="#qual_edit_modal{{$i}}"
                                                                                    class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                    <span
                                                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                        role="tooltip">
                                                                                            Edit
                                                                                    </span>
                                                                                </button>
                                                                                <div id="qual_edit_modal{{$i}}" class="hs-overlay hidden ti-modal">
                                                                                    <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                                                        <div class="ti-modal-content">
                                                                                            <div class="ti-modal-header">
                                                                                                <h3 class="ti-modal-title">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                                    Edit Staffinvestment Of<span class="text-red-400">{{$staff->fname.' '.$staff->mname.' '.$staff->lname}}</span>
                                                                                                </h3>
                                                                                                <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                                                    data-hs-overlay="#qual_edit_modal{{$i}}">
                                                                                                    <span class="sr-only">Close</span>
                                                                                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path
                                                                                                        d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                                        fill="currentColor" />
                                                                                                    </svg>
                                                                                                </button>
                                                                                            </div>
                                                                                            <form action="{{route('Teaching.staff_investments.staffinvestment.update',[$staff->id])}}" method="post">
                                                                                                @csrf
                                                                                                @method('patch')
                                                                                                <div class="ti-modal-body">
                                                                                                    <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                                            <label class="ti-form-label mb-0 font-bold">Staff Investmnets </label>
                                                                                                            <select class="ti-form-select" name="Staff_investments">
                                                                                                                @foreach($tdsheads as $tdshead)
                                                                                                                        <option value="{{ $tdshead->id }}">{{ $tdshead->category }}</option>
                                                                                                                @endforeach
                                                                                                            </select>
                                                                                                        </div>
                                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                                            <label for="" class="ti-form-label mb-0 font-bold">Amount</label>
                                                                                                            <input type="text" name="amount" class="ti-form-input" value="{{$stafftds->pivot->amount}}" placeholder="Enter the amount"/>
                                                                                                        </div> 
                                                                                                    </div>
                                        
                                                                                                    <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                                        <div class="max-w-sm space-y-3 pb-6 yop">
                                                                                                            <label for="document" class="block text-sm font-medium text-gray-700">File</label>
                                                                                                            <input type="file" name="document" id="document" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                                                                               @if ($stafftds->pivot->document)
                                                                                                               <a href="{{ Storage::url($stafftds->pivot->document) }}" target="_blank">View Document</a>
                                                                                                               @else
                                                                                                                N/A
                                                                                                               @endif
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>    
                                                                                                <div class="ti-modal-footer">
                                                                                                    <button type="button"
                                                                                                        class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                                            data-hs-overlay="#qual_edit_modal{{$i}}">
                                                                                                        Close
                                                                                                    </button>
                                                                                                    <input type="submit" class="ti-btn  bg-primary text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10" value="Update"/>
                                                                                                </div>
                                                                                            </form>  
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="hs-tooltip ti-main-tooltip">
                                                                                <form action="{{ route('Teaching.staff_investments.staffinvestment.destroy',[$staff->id]) }}" method="post">
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
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>

                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                          <!--End of Achievements -->
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
        <script>
            $(document).ready(function(){


                    //backendValidation for general achievements

                    //alert('Hello from jquery');
                    new DataTable('#general_achievements_table');

                    $(document).on('click','.general_achievements_edit_modal_click',function(){
                        //var
                        var modal_no = $(this).attr("btn-val");

                        //alert($(this).find('.caste_edit_modal_no').val());
                        $('.modal_no').val(modal_no);
                    });


                    // Validation for General Achivements
                   $(document).on('click', '#achievments_store_add_btn', function (e) {
                    var rga_award = $('#rga_award').val();
                    var rga_year = $('#rga_year').val();
                    var rga_details = $('#rga_details').val();
                    var general_document = $('#general_document')[0].files[0]; // Get the selected file
                    var awardbody = $('#awardbody').val();

                    var flag = false;


                    

                    if (awardbody.trim() === '') {
                        $('#awarding_bodyError').text('Awarding Body is missing');
                        flag = true;
                    } else {
                        $('#awarding_bodyError').text(''); 
                    }

                    if (!general_document) {
                        $('#general_documentError').text('Please choose a file');
                        flag = true;
                    }

                   

                    if (rga_award.trim() === '') {
                        $('#rga_awardError').text('Award Name is missing');
                        flag = true;
                    } else {
                        $('#rga_awardError').text(''); 
                    }


                    if (rga_year == '') {
                        $('#rga_yearError').text('Year is missing');
                        flag = true;
                    } else if (!/^\d{4}$/.test(rga_year.trim())) {
                        $('#rga_yearError').text('Please fill the correct value');
                        flag = true;
                    }


                    // if (rga_details.trim() === '') {
                    //     $('#rga_detailsError').text('Details is missing');
                    //     flag = true;
                    // } else if (!/^[\w\s\/.,]+$/.test(rga_details.trim())) {
                    //     $('#rga_detailsError').text('Please fill the correct value');
                    //     flag = true;
                    // }

                    if (rga_details.trim() === '') {
                        $('#rga_detailsError').text('Details is missing');
                        flag = true;
                    } else {
                        $('#rga_detailsError').text(''); 
                    }

                    if (flag == true) {
                        e.preventDefault();
                    }
                });



                 //export to excel achievement
                 $('#exportToExcel').on('click', function () {
                    var table = $('#general_achievements_table').clone();

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
                        window.navigator.msSaveOrOpenBlob(blob, 'achievement_data.xls');
                    } else {
                        var link = $('<a>', {
                            href: URL.createObjectURL(blob),
                            download: 'achievement_data.xls'
                        });

                        // Trigger the click to download
                        link[0].click();
                    }
                });


            });
        </script>






@endsection
