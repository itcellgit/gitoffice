@extends('layouts.master')

@section('styles')
         <!-- TABULATOR CSS -->
         <link rel="stylesheet" href="{{asset('build/assets/libs/tabulator-tables/css/tabulator.min.css')}}">

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
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Establishment Section</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                        <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12.998 2V3H19.998V5H12.998V19H16.998V21H6.99805V19H10.998V5H3.99805V3H10.998V2H12.998ZM4.99805 6.34315L7.82647 9.17157C8.55033 9.89543 8.99805 10.8954 8.99805 12C8.99805 14.2091 7.20719 16 4.99805 16C2.78891 16 0.998047 14.2091 0.998047 12C0.998047 10.8954 1.44576 9.89543 2.16962 9.17157L4.99805 6.34315ZM18.998 6.34315L21.8265 9.17157C22.5503 9.89543 22.998 10.8954 22.998 12C22.998 14.2091 21.2072 16 18.998 16C16.7889 16 14.998 14.2091 14.998 12C14.998 10.8954 15.4458 9.89543 16.1696 9.17157L18.998 6.34315ZM18.998 9.17157L17.5838 10.5858C17.2099 10.9597 16.998 11.4606 16.998 12L20.998 12.001C20.998 11.4606 20.7862 10.9597 20.4123 10.5858L18.998 9.17157ZM4.99805 9.17157L3.58383 10.5858C3.20988 10.9597 2.99805 11.4606 2.99805 12L6.99805 12.001C6.99805 11.4606 6.78621 10.9597 6.41226 10.5858L4.99805 9.17157Z" fill="rgba(0,0,0,1)"></path></svg>
                                        PayScales  
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12.1717 12.0005L9.34326 9.17203L10.7575 7.75781L15.0001 12.0005L10.7575 16.2431L9.34326 14.8289L12.1717 12.0005Z"></path></svg>    
                                        </a>
                                        </li>

                                    <li class="text-sm">
                                    <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M11 11V7H13V11H17V13H13V17H11V13H7V11H11ZM12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20Z"></path></svg>  Allowances
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
                                            header("refresh: 3"); 
                                        @endphp
                                    @endif

                                </div>
                            </div>
                            <!-- Closing of designation insertion div-->
                            <!-- Start::row-5 -->
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="col-span-12">
                                    
                                <div class="box">
                                    <div class="box-header">
                                        <div class="flex">
                                        <h5 class="box-title my-auto">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M11 14.0619V20H13V14.0619C16.9463 14.554 20 17.9204 20 22H4C4 17.9204 7.05369 14.554 11 14.0619ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13Z" fill="rgba(0,0,0,1)"></path></svg>
                                            Allowances Details</h5>
                                                <div class=" block ltr:ml-auto rtl:mr-auto my-auto">
                                                    <button type="button" data-hs-overlay="#add_allowances" class="hs-dropdown-toggle ti-btn ti-btn-primary">
                                                    
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM5 5V19H19V5H5ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z" fill="rgba(255,255,255,1)"></path></svg>
                                                        Add Allowance
                                                    </button>
                                                    <div id="add_allowances" class="hs-overlay hidden ti-modal">
                                                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 lg:mx-auto">
                                                            <div class="ti-modal-content">
                                                                <div class="ti-modal-header">
                                                                    <h3 class="ti-modal-title">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM5 5V19H19V5H5ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z"></path></svg>
                                                                    
                                                                        Add New Allowance
                                                                    </h3>
                                                                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                    data-hs-overlay="#add_allowances">
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
                                                                    <form id="allowance_form" action="{{route('ESTB.payscales.allowances.store')}}" method="post" onsubmit="return validateForm()">
                                                                        @csrf
                                                                        
                                                                            <div class="max-w-sm space-y-6 pb-6">
                                                                                <label for="with-corner-hint" class="ti-form-label font-bold">Allowance Title : </label>
                                                                                <input type="text" name="title" class="ti-form-input" required placeholder="Allowance Name">
                                                                                @if($errors->has('title'))
                                                                                    <div class="text-red-700">{{ $errors->first('title')}}</div>
                                                                                @endif
                                                                                <div id="titleNameError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="max-w-sm space-y-6 pb-6">
                                                                                <label for="with-corner-hint" class="ti-form-label font-bold">Value : </label>
                                                                                <input type="text" name="value" class="ti-form-input" required placeholder="Amount Pay">
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="with-corner-hint" class="ti-form-label font-bold">Value Type </label>
                                                                                <input type="radio" name="value_type"  value="flat" class="pr-4  ti-form-radio mt-0.5" id="hs-checkbox-group-1" required>
                                                                                <label for="hs-checkbox-group-1" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">flat</label>
                                                                            
                                                                                <input type="radio" name="value_type"  value="percentage" class="pr-4  ml-4 ti-form-radio mt-0.5" id="hs-checkbox-group-1" required>
                                                                                <label for="hs-checkbox-group-1" class=" text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Percentage</label>
                                                                                        
                                                                            </div>
                                                                            <label for="" class="ti-form-label font-bold">Designations Applicable for :</label>
                                                                            <div class="space-y-2">
                                                                                <div class=" gap-x-8 max-w-md space-y-3 pb-6">
                                                                                @foreach($designations as $des)
                                                                                
                                                                                        <div class="flex">
                                                                                            <input type="radio" name="designations_id"  value="{{$des->id}}" class="ti-form-radio mt-0.5" id="hs-checkbox-group-1" required>
                                                                                            <label for="hs-checkbox-group-1" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">{{$des->design_name}}</label>
                                                                                        </div>
                                                                                
                                                                                @endforeach
                                                                                </div>
                                                                            </div> 
                                                                                <label for="" class="ti-form-label font-bold">Effect from Date :</label>
                                                                                <div class="flex shadow-sm max-w-sm space-y-3 pb-6">
                                                                                    
                                                                                    <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                        <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                                class="ri ri-calendar-line"></i></span>
                                                                                    </div>
                                    
                                                                                    <input type="text" name="wef"
                                                                                        class="ti-form-input rounded-l-none focus:z-10 flatpickr-input"
                                                                                        id="date" required placeholder="Choose date" readonly>
                                                                                </div>
                                                                           
                                                                        
                                                                        </div>
                                                                        <div class="ti-modal-footer">
                                                                            <button type="button" id="add_designation_close"
                                                                            class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                            data-hs-overlay="#add_allowances">
                                                                                Close
                                                                                    </button>
                                                        
                                                                                <input type="submit" class="ti-btn  bg-primary text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10 float-right" value="Add"/>
                                                    
                                                                        </div>
                                                                    </form>  
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div id="basic-table" class="ti-custom-table ti-striped-table ti-custom-table-hover table-bordered rounded-sm  overflow-auto">
                                        <table class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                            <thead class="bg-gray-50 dark:bg-black/20">
                                            <tr class="">
                                                <th scope="col" class="dark:text-white/80 ">S.no</th>
                                                <th scope="col" class="dark:text-white/80 ">Allowance Name</th>
                                                <th scope="col" class="dark:text-white/80 ">Value</th>
                                                <th scope="col" class="dark:text-white/80 ">Value Type</th>
                                                <th scope="col" class="dark:text-white/80 ">Designation</th>
                                                
                                                <th scope="col" class="dark:text-white/80 ">With Effect From</th>
                                                <th scope="col" class="dark:text-white/80 ">Closed On</th>
                                                <th scope="col" class="dark:text-white/80 ">Status</th>
                                                <th scope="col" class="dark:text-white/80 ">Actions</th>
                                                
                                            </tr>
                                            </thead>
                                            <tbody class="">
                                            @php
                                                $i = 1;
                                            @endphp
                                            @forelse($allowances as $all)
                            
                                            <tr class="bg-red-700">
                                                <td>{{ $i++ }}</td>
                                                <td>
                                                <div class="flex space-x-3 rtl:space-x-reverse w-full min-w-[200px]">
                                                    <div class="block w-full my-auto">
                                                        {{$all->title}}
                                                    </div>
                                                </div>
                                                </td>
                                                <td><span>{{$all->value}}</span></td>
                                                <td><span>{{$all->value_type}}</span></td>
                                                <td><span>
                                                   
                                                    @if($all->designations->status=='active')
                                                    {{$all->designations->design_name}}
                                                    @endif
                                            </span></td>
                                                <td><span>{{$all->wef}}</span></td>
                                                <td><span>{{$all->closedon}}</span></td>
                                                <td><span>{{$all->status}}</span></td>
                                                                                         
                                                <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <button data-hs-overlay="#allowances_edit_modal{{$i}}"
                                                    class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                        <span
                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                            role="tooltip">
                                                            Edit
                                                        </span>
                                                    </button>
                                                    
                                                        <div id="allowances_edit_modal{{$i}}" class="hs-overlay hidden ti-modal">
                                                            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 lg:!mx-auto">
                                                                <div class="ti-modal-content">
                                                                    <div class="ti-modal-header">
                                                                        <h3 class="ti-modal-title">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                            Edit Teaching Payscale
                                                                        </h3>
                                                                        <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                        data-hs-overlay="#allowances_edit_modal{{$i}}">
                                                                        <span class="sr-only">Close</span>
                                                                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                            d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                            fill="currentColor" />
                                                                        </svg>
                                                                        </button>
                                                                    </div>
                                                                    <form  action="{{route('ESTB.payscales.allowances.update',$all->id)}}" method="post">
                                                                    @csrf
                                                                    @method('patch')
                                                                        <div class="ti-modal-body grid lg:grid-cols-2 gap-6 space-y-4 lg:space-y-0">
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="with-corner-hint" class="ti-form-label font-bold">Allowance Name : </label>
                                                                                <input type="text" name="title" class="ti-form-input" value="{{$all->title}}" required placeholder="Allowance Name">
                                                                                 @if($errors->has('title'))
                                                                                    <div class="text-red-700">{{ $errors->first('title')}}</div>
                                                                                @endif
                                                                                <div id="titleNameError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="with-corner-hint" class="ti-form-label font-bold">Value : </label>
                                                                                <input type="text" name="value" value="{{$all->value}}" class="ti-form-input" required placeholder="Value">
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 space-x-3 pb-6">
                                                                                <label for="with-corner-hint" class="ti-form-label font-bold">Value Type </label>

                                                                                <input type="radio" name="value_type"  value="flat" required {{(($all->value_type=='flat')?'checked':'')}} class="ti-form-radio mt-0.5 pr-2" id="hs-checkbox-group-1">
                                                                                <label for="hs-checkbox-group-1" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70 ">flat</label>
                                                                            
                                                                                <input type="radio" name="value_type"  value="percentage" required {{(($all->value_type=='percentage')?'checked':'')}} class="ti-form-radio mt-0.5 pr-2" id="hs-checkbox-group-1">
                                                                                <label for="hs-checkbox-group-1" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Percentage</label>
                                                                                        
                                                                            </div>
                                                                            <br/>
                                                                            <label for="" class="ti-form-label font-bold">Designations Applicable for :</label>
                                                                            <br/>
                                                                            <div class="space-y-2">
                                                                                <div class="gap-x-8 max-w-md space-y-3 pb-6">
                                                                                    @foreach($designations as $des)
                                                                                        @php
                                                                                            $checked="";
                                                                                        @endphp
                                                                                        @if($all->designations_id==$des->id)
                                                                                                @php
                                                                                                    $checked="checked";
                                                                                                    @endphp
                                                                                                @endif
                                                                                              
                                                                                        <div class="flex">
                                                                                            
                                                                                            <input type="radio" name="designations_id"  value="{{$des->id}}"{{$checked}} class="ti-form-radio mt-0.5" id="hs-checkbox-group-1" required>
                                                                                            <label for="hs-checkbox-group-1" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">{{$des->design_name}}</label>
                                                                                        </div>
                                                                                
                                                                                    @endforeach
                                                                                </div>
                                                                            </div>
                                                                            <br/>
                                                                                <label for="" class="ti-form-label font-bold">Effect from Date :</label>
                                                                                <br/>
                                                                                <div class="flex shadow-sm max-w-sm space-y-3 pb-6 ">
                                                                                    
                                                                                    <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M17 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9V3H15V1H17V3ZM4 9V19H20V9H4ZM6 13H11V17H6V13Z"></path></svg>
                                                                                    
                                                                                    </div>
                                    
                                                                                    <input type="text" name="wef" value="{{$all->wef}}"
                                                                                        class="ti-form-input rounded-l-none focus:z-10 flatpickr-input"
                                                                                        id="date" required placeholder="Choose date" readonly>
                                                                                </div>
                                                                                <br/>
                                                                                <label for="" class="ti-form-label font-bold">Closed On :</label>
                                                                                <br/>
                                                                                <div class="flex shadow-sm max-w-sm space-y-3 pb-6">
                                                                                  
                                                                                    <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M17 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9V3H15V1H17V3ZM4 9V19H20V9H4ZM6 13H11V17H6V13Z"></path></svg>
                                                                                    </div>
                                    
                                                                                    <input type="text" name="end_date"
                                                                                        class="ti-form-input rounded-l-none focus:z-10 flatpickr-input"
                                                                                        id="date" required placeholder="Choose date" value="{{$all->end_date}}">
                                                                                </div>
                                                                        
                                                                        </div>
                                                                        <div class="ti-modal-footer">
                                                                            <button type="button" id="edit_teaching_payscale"
                                                                            class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                            data-hs-overlay="#allowances_edit_modal{{$i}}">
                                                                                Close
                                                                                    </button>
                                                        
                                                                                <input type="submit" class="ti-btn  bg-warning text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10 float-right" value="Update"/>
                                                    
                                                                        </div>  
                                                                    
                                                                    </form>  
                                                                </div>
                                                            </div>
                                                        </div>
                                                
                                                
                                                <div class="hs-tooltip ti-main-tooltip">
                                                <form action="{{ route('ESTB.payscales.allowances.destroy',$all->id) }}" method="post">
                                                   
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
                                            @empty
                                                <p class="text-dark"><b>No Allowances Added.</b></p>
                                            @endforelse
                                            </tbody>
                                        </table>
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <div class="sm:flex items-center">
                                            <!-- <div class="">
                                                showing 5 Entries <i class="ri-arrow-right-line ml-2 font-semibold"></i>
                                            </div>
                                            <div class="ltr:ml-auto rtl:mr-auto">
                                                <nav class="flex justify-center items-center space-x-2 rtl:space-x-reverse">
                                                    <a class="text-gray-500 hover:text-primary e py-1 px-2 leading-none inline-flex items-center gap-2 rounded-sm" href="javascript:void(0);">
                                                        <span aria-hidden="true">Prev</span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="bg-primary text-white py-1 px-2 leading-none inline-flex items-center text-sm font-medium rounded-sm" href="javascript:void(0);" aria-current="page">1</a>
                                                    <a class="text-gray-500 hover:text-primary e py-1 px-2 leading-none inline-flex items-center text-sm font-medium rounded-sm" href="javascript:void(0);">2</a>
                                                    <a class="text-gray-500 hover:text-primary e py-1 px-2 leading-none inline-flex items-center text-sm font-medium rounded-sm" href="javascript:void(0);">3</a>
                                                    <a class="text-gray-500 hover:text-primary e py-1 px-2 leading-none inline-flex items-center gap-2 rounded-sm" href="javascript:void(0);">
                                                        <span class="sr-only">Next</span>
                                                        <span aria-hidden="true">Next</span>
                                                    </a>
                                                </nav>
                                            </div-->
                                        </div>
                                    </div>
                                </div> 
                                   
                                       {{-- {{ $allowances->links() }}  --}}
                                   
                                
                            </div>
                            <!-- End::row-5 -->

                        </div>
                        <!-- End::main-content -->

                    </div>
                </div>    

@endsection

@section('scripts')

        <!-- APEX CHARTS JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- FLATPICKR JS -->
        <script src="{{asset('build/assets/libs/flatpickr/flatpickr.min.js')}}"></script>
        @vite('resources/assets/js/flatpickr.js')

         <!-- TABULATOR JS -->
         <script src="{{asset('build/assets/libs/tabulator-tables/js/tabulator.min.js')}}"></script>

         <!-- CHOICES JS -->
        <script src="{{asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

        <script
        src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
        <script>
           /* $(document).ready(function(){
               //alert('Hello from jquery');
               $(document).on('click','#add_designation',function(){
                    $('#add_designation_box').slideDown();
                    $('#add_designation_box').removeClass('hidden');
                    
               });

               $(document).on('click','#add_designation_close',function(){
                    //alert('hi');
                    $('#add_designation_box').hide();
                    
               });

               $(document).on('click','.nt_update_level_disp',function(){
                    alert('Clicked');
                    $(this).parent().next().find('#nt_level_details_up_tbl').toggleClass('hidden');
               });
               
            });*/
        </script>
        <script>
            function validateForm() {
                var titleName = document.forms["allowance_from"]["title"].value;
                document.getElementById("titleNameError").innerHTML = "";
                if (titleName.trim() === "") {
                    document.getElementById("titleNameError").innerHTML = "Allowance Title Name is required";
                    return false;
                }else if (!/^[a-zA-Z]+$/.test(titleName.trim())) {
                document.getElementById("titleNameError").innerHTML = "Allowance Name should contain only alphabetic characters";
                return false;
                }
                return true;
            }
        </script>
        <!-- INDEX JS -->
        @vite('resources/assets/js/index-8.js')
        

@endsection