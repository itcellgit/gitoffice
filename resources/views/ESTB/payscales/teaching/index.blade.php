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
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M11 14.0619V20H13V14.0619C16.9463 14.554 20 17.9204 20 22H4C4 17.9204 7.05369 14.554 11 14.0619ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13Z" fill="rgba(0,0,0,1)"></path></svg>
                                           Teaching
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
                                         Teaching Payscale Details</h5>
                                                <div class=" block ltr:ml-auto rtl:mr-auto my-auto">
                                                    <button type="button" id="teachingpay_btn" data-hs-overlay="#add_teaching_payscale" class="hs-dropdown-toggle ti-btn ti-btn-primary">
                                                    
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM5 5V19H19V5H5ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z" fill="rgba(255,255,255,1)"></path></svg>
                                                        Add Teaching Payscale
                                                    </button>
                                                    <div id="add_teaching_payscale" class="hs-overlay hidden ti-modal">
                                                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 lg:mx-auto">
                                                            <div class="ti-modal-content">
                                                                <div class="ti-modal-header">
                                                                    <h3 class="ti-modal-title">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM5 5V19H19V5H5ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z"></path></svg>
                                                                    
                                                                        Add New Teaching Payscale
                                                                    </h3>
                                                                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                    data-hs-overlay="#add_teaching_payscale">
                                                                    <span class="sr-only">Close</span>
                                                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                        d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                        fill="currentColor" />
                                                                    </svg>
                                                                    </button>
                                                                    @if(($errors->has('payscale_title'))||($errors->has('basepay'))||($errors->has('maxpay'))||($errors->has('agp'))||($errors->has('da'))||($errors->has('hra'))||($errors->has('cca'))||($errors->has('wef')))
                                                                        <script>
                                                                            //alert(1);
                                                                            $(window).on('load', function() {
                                                                                
                                                                                //alert('attended');
                                                                                //$('#horizontal-alignment-item-1').trigger('click')
                                                                                $('#teachingpay_btn').trigger("click");
                                                                                    
                                                                            });      
                                                                        </script>
                                                                    @endif
                                                                </div>
                                                        
                                                                <div class="ti-modal-body">
                                                                    <form action="{{route('ESTB.payscales.teaching.store')}}" method="post">
                                                                        @csrf
                                                                        
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="with-corner-hint" class="ti-form-label font-bold">Payscale Name : </label>
                                                                                <input id="teachpayscaletitle" type="text" name="payscale_title" class="ti-form-input"  placeholder="Payscale Name">
                                                                                @if($errors->has('payscale_title'))
                                                                                    <div class="text-red-700">{{ $errors->first('payscale_title')}}</div>
                                                                                @endif
                                                                                <div id="payscaletitleError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="with-corner-hint" class="ti-form-label font-bold">Base Pay : </label>
                                                                                <input id="teachbasepay" type="text" name="basepay" class="ti-form-input" placeholder="Base Pay">
                                                                                @if($errors->has('basepay'))
                                                                                    <div class="text-red-700">{{ $errors->first('basepay')}}</div>
                                                                                @endif
                                                                                <div id="basepayError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="with-corner-hint" class="ti-form-label font-bold">Max Pay : </label>
                                                                                <input id="teachmaxpay" type="text" name="maxpay" class="ti-form-input"  placeholder="Max Pay">
                                                                                @if($errors->has('maxpay'))
                                                                                    <div class="text-red-700">{{ $errors->first('maxpay')}}</div>
                                                                                @endif
                                                                                <div id="maxpayError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <label for="" class="ti-form-label font-bold">Designations Applicable for :</label>
                                                                            <div class="space-y-2">
                                                                                <div class=" gap-x-8 max-w-md space-y-3 pb-6">
                                                                                @foreach($design as $des)
                                                                                
                                                                                        <div class="flex">
                                                                                            @if ($des->emp_type == "Teaching")
                                                                                            
                                                                                            <input type="radio" name="designations_id"  value="{{$des->id}}" class="ti-form-radio mt-0.5 hs-checkbox-group-1">
                                                                                            <label for="hs-checkbox-group-1" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">{{$des->design_name}}</label>
                                                                                            @endif
                                                                                           
                                                                                        </div>
                                                                                
                                                                                @endforeach
                                                                                </div>
                                                                            </div> 
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="with-corner-hint" class="ti-form-label font-bold">AGP : </label>
                                                                                <input id="teachagp" type="text" name="agp" class="ti-form-input"  placeholder="AGP">
                                                                                @if($errors->has('agp'))
                                                                                    <div class="text-red-700">{{ $errors->first('agp')}}</div>
                                                                                @endif
                                                                                <div id="agpError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="with-corner-hint" class="ti-form-label font-bold">DA : </label>
                                                                                <input id="teachda" type="text" name="da" class="ti-form-input"  placeholder="DA">
                                                                                @if($errors->has('da'))
                                                                                    <div class="text-red-700">{{ $errors->first('da')}}</div>
                                                                                @endif
                                                                                <div id="daError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="with-corner-hint" class="ti-form-label font-bold">HRA : </label>
                                                                                <input id="teachhra" type="text" name="hra" class="ti-form-input"  placeholder="HRA">
                                                                                @if($errors->has('hra'))
                                                                                    <div class="text-red-700">{{ $errors->first('hra')}}</div>
                                                                                @endif
                                                                                <div id="hraError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="with-corner-hint" class="ti-form-label font-bold">CCA : </label>
                                                                                <input id="teachcca" type="text" name="cca" class="ti-form-input"  placeholder="CCA">
                                                                                @if($errors->has('cca'))
                                                                                    <div class="text-red-700">{{ $errors->first('cca')}}</div>
                                                                                @endif
                                                                                <div id="ccaError" class="error text-red-700"></div>
                                                                            </div>
                                                                            
                                                                            <label for="" class="ti-form-label font-bold">Effect from Date :</label>
                                                        
                                                                                <div class="flex shadow-sm max-w-sm space-y-3 pb-6">
                                                                                    
                                                                                    <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                        <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                                class="ri ri-calendar-line"></i></span>
                                                                                    </div>
                                    
                                                                                    <input type="date" name="wef" id="teachwef"
                                                                                        class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                         placeholder="Choose date">
                                                                                        @if($errors->has('wef'))
                                                                                    <div class="text-red-700">{{ $errors->first('wef')}}</div>
                                                                                @endif
                                                                                <div id="wefError" class="error text-red-700"></div>
                                                                                </div>
                                                                           
                                                                        
                                                                        </div>
                                                                        <div class="ti-modal-footer">
                                                                            <button type="button" id="add_designation_close"
                                                                            class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                            data-hs-overlay="#add_teaching_payscale">
                                                                                Close
                                                                                    </button>
                                                        
                                                                                <input type="submit" id="teachingpay_store_add_btn" class="ti-btn  bg-primary text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10 float-right" value="Add"/>
                                                    
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
                                        <table id="teachingpaytable" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                            <thead class="bg-gray-50 dark:bg-black/20">
                                            <tr class="">
                                                <th scope="col" class="dark:text-white/80 ">S.no</th>
                                                <th scope="col" class="dark:text-white/80 ">Pay Scale Title</th>
                                                <th scope="col" class="dark:text-white/80 ">Base Pay</th>
                                                <th scope="col" class="dark:text-white/80 ">Max Pay</th>
                                                <th scope="col" class="dark:text-white/80 ">Designations</th>
                                                <th scope="col" class="dark:text-white/80 ">AGP</th>
                                                <th scope="col" class="dark:text-white/80 ">DA</th>
                                                <th scope="col" class="dark:text-white/80 ">HRA</th>
                                                <th scope="col" class="dark:text-white/80 ">CCA</th>
                                                <th scope="col" class="dark:text-white/80 ">Status</th>
                                                <th scope='col' class="dark:text-white/80 ">View Salary Heads</th>
                                                <th scope="col" class="dark:text-white/80 ">Actions</th>
                                                
                                            </tr>
                                            </thead>
                                            <tbody class="">
                                            @php
                                                $i = 1;
                                            @endphp
                                            @forelse($teaching_payscale as $tp)
                                            <tr class="bg-red-700">
                                               @if($i==1)
                                                @php
                                                    $tp_title=$tp->payscale_title;
                                                    $tp_cnt=1;
                                                   
                                                @endphp
                                                    <td rowspan={{$tp_cnt}}>{{ $i++ }}</td>
                                                    <td rowspan={{$tp_cnt}}>
                                                        
                                                                {{$tp->payscale_title}}
                                                          
                                                    </td>
                                               @else
                                                    @if($tp_title==$tp->payscale_title)
                                                        @php
                                                            $tp_cnt++;
                                                        @endphp
                                                        <td></td>
                                                        <td></td>
                                                    @else
                                                        @php
                                                            $tp_title=$tp->payscale_title;
                                                            $tp_cnt=1;
                                                        @endphp
                                                        <td rowspan={{$tp_cnt}}>{{ $i++ }}</td>
                                                        
                                                        <td rowspan={{$tp_cnt}}>
                                                            
                                                                    {{$tp->payscale_title}}
                                                               
                                                        </td>
                                                    @endif
                                               @endif
                                           
                                               
                                                
                                                <td><span>{{$tp->basepay}}</span></td>
                                                <td><span>{{$tp->maxpay}}</span></td>
                                                <td><span>
                                                   
                                                    @if($tp->designations->status=='active')
                                                    {{$tp->designations->design_name}}
                                                    @endif
                                                </span></td>
                                                <td><span>Rs.{{$tp->agp}}</span></td>
                                                <td><span>{{$tp->da}}</span> %</td>
                                                <td><span>{{$tp->hra}}</span> %</td>
                                                <td><span>Rs.{{$tp->cca}}</span></td>
                                                <td><span>{{$tp->status}}</span></td>
                                                                                       
                                                <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <button data-hs-overlay="#teaching_payscale_edit_modal{{$i}}" id="btn{{$i}}" btn-val={{$i}}
                                                    class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary teaching_payscale_edit_modal_click">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                        <span
                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                            role="tooltip">
                                                            Edit
                                                        </span>
                                                    </button>
                                                    
                                                        <div id="teaching_payscale_edit_modal{{$i}}" class="hs-overlay hidden ti-modal">
                                                            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 lg:!mx-auto">
                                                                <div class="ti-modal-content">
                                                                    <div class="ti-modal-header">
                                                                        <h3 class="ti-modal-title">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                            Edit Teaching Payscale
                                                                        </h3>
                                                                        <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                        data-hs-overlay="#teaching_payscale_edit_modal{{$i}}">
                                                                        <span class="sr-only">Close</span>
                                                                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                            d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                            fill="currentColor" />
                                                                        </svg>
                                                                        </button>
                                                                        @if(($errors->has('edit_payscale_title'))||($errors->has('edit_basepay'))||($errors->has('edit_maxpay'))||($errors->has('edit_agp'))||($errors->has('edit_da'))||($errors->has('edit_hra'))||($errors->has('edit_cca'))||($errors->has('edit_wef'))||($errors->has('edit_closedon')))
                                                                            <script>
                                                                                //alert(387);
                                                                                window.onload=function(){
                                                                                //alert('123');
            
                                                                                };   
                                                                            
                                                                            </script>
                                                                        @endif
                                                                    </div>
                                                                    <form  action="{{route('ESTB.payscales.teaching.update',$tp->id)}}" method="post">
                                                                    @csrf
                                                                    @method('patch')
                                                                        <div class="ti-modal-body grid lg:grid-cols-2 gap-6 space-y-4 lg:space-y-0">
                                                                            <input type='hidden' name='modal_no' class='modal_no' value={{old('modal_no')}}/>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="with-corner-hint" class="ti-form-label font-bold">Payscale Name : </label>
                                                                                <input type="text" name="edit_payscale_title" class="ti-form-input" value="{{$tp->payscale_title}}" placeholder="Payscale Name">
                                                                                @if($errors->has('edit_payscale_title'))
                                                                                    <div class="text-red-700">{{ $errors->first('edit_payscale_title')}}</div>
                                                                                @endif
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="with-corner-hint" class="ti-form-label font-bold">Base Pay : </label>
                                                                                <input type="text" name="edit_basepay" value="{{$tp->basepay}}" class="ti-form-input" placeholder="Base Pay">
                                                                                @if($errors->has('edit_basepay'))
                                                                                    <div class="text-red-700">{{ $errors->first('edit_basepay')}}</div>
                                                                                @endif
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="with-corner-hint" class="ti-form-label font-bold">Max Pay : </label>
                                                                                <input type="text" name="edit_maxpay" value="{{$tp->maxpay}}" class="ti-form-input" placeholder="Max Pay">
                                                                                @if($errors->has('edit_maxpay'))
                                                                                    <div class="text-red-700">{{ $errors->first('edit_maxpay')}}</div>
                                                                                @endif
                                                                            </div>
                                                                            <br/>
                                                                            <label for="" class="ti-form-label font-bold">Designations Applicable for :</label>
                                                                            <br/>
                                                                            <div class="space-y-3">
                                                                                <div class=" gap-x-8 max-w-md space-y-3 pb-6">
                                                                                    @foreach($design as $des)
                                                                                        @php
                                                                                            $checked="";
                                                                                        @endphp
                                                                                        @if($tp->designations_id==$des->id)
                                                                                                @php
                                                                                                    $checked="checked";
                                                                                                    @endphp
                                                                                                @endif
                                                                                        <div class="flex">
                                                                                            @if ($des->emp_type == "Teaching")
                                                                                            <br/>
                                                                                            <input required type="radio" name="designations_id"  value="{{$des->id}}" {{$checked}} class="ti-form-radio mt-0.5 hs-checkbox-group-1">
                                                                                            <label for="hs-checkbox-group-1" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">{{$des->design_name}}</label>
                                                                                            @endif
                                                                                        </div>
                                                                                
                                                                                    @endforeach
                                                                                </div>
                                                                            </div>
                                                                            <br/> 
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="with-corner-hint" class="ti-form-label font-bold">AGP : </label>
                                                                                <input type="text" name="edit_agp" value="{{$tp->agp}}" class="ti-form-input" placeholder="AGP">
                                                                                @if($errors->has('edit_agp'))
                                                                                    <div class="text-red-700">{{ $errors->first('edit_agp')}}</div>
                                                                                @endif
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="with-corner-hint" class="ti-form-label font-bold">DA : </label>
                                                                                <input type="text" name="edit_da" value="{{$tp->da}}" class="ti-form-input" placeholder="DA">
                                                                                @if($errors->has('edit_da'))
                                                                                    <div class="text-red-700">{{ $errors->first('edit_da')}}</div>
                                                                                @endif
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="with-corner-hint" class="ti-form-label font-bold">HRA : </label>
                                                                                <input type="text" name="edit_hra" value="{{$tp->hra}}" class="ti-form-input" placeholder="HRA">
                                                                                @if($errors->has('edit_hra'))
                                                                                    <div class="text-red-700">{{ $errors->first('edit_hra')}}</div>
                                                                                @endif
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="with-corner-hint" class="ti-form-label font-bold">CCA : </label>
                                                                                <input type="text" name="edit_cca" value="{{$tp->cca}}" class="ti-form-input" placeholder="CCA">
                                                                                @if($errors->has('edit_cca'))
                                                                                    <div class="text-red-700">{{ $errors->first('edit_cca')}}</div>
                                                                                @endif
                                                                            </div>
                                                                            <div class="flex shadow-sm max-w-sm space-y-3 pb-6"> 
                                                                                <div class="grid lg:grid-cols-2 space-y-4 lg:space-y-0">
                                                                                    <label for="" class="ti-form-label font-bold">Effect from Date :</label>
                                                                                    <br/> 
                                                                                        <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M17 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9V3H15V1H17V3ZM4 9V19H20V9H4ZM6 13H11V17H6V13Z"></path></svg>   
                                                                                        </div>

                                                                                    <input type="text" name="edit_wef" value="{{$tp->wef}}"
                                                                                        class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                         placeholder="Choose date" readonly>
                                                                                    @if($errors->has('edit_wef'))
                                                                                        <div class="text-red-700">{{ $errors->first('edit_wef')}}</div>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                        
                                                                            <div class="flex shadow-sm max-w-sm space-y-3 pb-6"> 
                                                                                <div class="grid lg:grid-cols-2 space-y-4 lg:space-y-0">
                                                                                    <label for="" class="ti-form-label font-bold">Closed On :</label>
                                                                                    <br/>   
                                                                                    <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M17 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9V3H15V1H17V3ZM4 9V19H20V9H4ZM6 13H11V17H6V13Z"></path></svg>
                                                                                    </div>
                                        
                                                                                    <input type="text" name="edit_closedon"
                                                                                        class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                         placeholder="Choose date" value="{{$tp->closedon}}">
                                                                                    @if($errors->has('edit_closedon'))
                                                                                        <div class="text-red-700">{{ $errors->first('edit_closedon')}}</div>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ti-modal-footer">
                                                                            <button type="button" class="edit_teaching_payscale"
                                                                            class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                            data-hs-overlay="#teaching_payscale_edit_modal{{$i}}">
                                                                                Close
                                                                                    </button>
                                                        
                                                                                <input type="submit" class="ti-btn  bg-warning text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10 float-right" value="Update"/>
                                                    
                                                                        </div>  
                                                                    
                                                                    </form>  
                                                                </div>
                                                            </div>
                                                        </div>
                                                
                                                
                                                <div class="hs-tooltip ti-main-tooltip">
                                                <form action="{{ route('ESTB.payscales.teaching.destory',$tp->id) }}" method="post">
                                                   
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
                                                <p class="text-dark"><b>No Payscales Added.</b></p>
                                            @endforelse
                                            </tbody>
                                        </table>
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <!-- Pagination-->
                                        
                                       
                                    </div>
                                </div> 
                                   
                                   
                                
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

        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.10/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.10/js/jquery.dataTables.js"></script>


         <!-- TABULATOR JS -->
         <script src="{{asset('build/assets/libs/tabulator-tables/js/tabulator.min.js')}}"></script>

         <!-- CHOICES JS -->
        <script src="{{asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

        <script
            src="https://code.jquery.com/jquery-3.7.1.js"
            integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
            crossorigin="anonymous">
        </script>
        <script>
            
            $(document).ready(function(){
               //alert('Hello from jquery');

               new DataTable('#teachingpaytable');
            });

            $(document).ready(function(){
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

                //validate 
                //new DataTable('#teachingpay_form');
                $(document).on('click','.teaching_payscale_edit_modal_click',function(){
                    //var 
                    var modal_no = $(this).attr("btn-val");
                    
                    //alert($(this).find('.caste_edit_modal_no').val());
                    $('.modal_no').val(modal_no); 
                });


                $(document).on('click','#teachingpay_store_add_btn',function(e){

                    var teachpayscaletitle = $('#teachpayscaletitle').val();
                    var teachbasepay = $('#teachbasepay').val();
                    var teachmaxpay = $('#teachmaxpay').val();
                    var teachagp = $('#teachagp').val();
                    var teachda = $('#teachda').val();
                    var teachhra = $('#teachhra').val();
                    var teachcca = $('#teachcca').val();
                    var teachwef = $('#teachwef').val();


                    var flag = false;


                    if(teachpayscaletitle == ''){
                        $('#payscaletitleError').text('Payscale Title is missing');
                        flag = true;
                    }else if (!/^[a-zA-Z\s]+$/.test(teachpayscaletitle.trim())){
                        $('#payscaletitleError').text('Please fill the correct value');
                        flag = true;
                    }
                    if(teachbasepay == ''){
                        $('#basepayError').text('Basepay is missing');
                        flag = true;
                    }else if (!/^\d+$/.test(teachbasepay.trim())){
                        $('#basepayError').text('Please fill the correct value');
                        flag = true;
                    }
                    if(teachmaxpay == ''){
                        $('#maxpayError').text('Maxpay is missing');
                        flag = true;
                    }else if (!/^\d+$/.test(teachmaxpay.trim())){
                        $('#maxpayError').text('Please fill the correct value');
                        flag = true;
                    }
                    if(teachagp == ''){
                        $('#agpError').text('Agp is missing');
                        flag = true;
                    }else if (!/^[a-zA-Z0-9]+$/.test(teachagp.trim())){
                        $('#agpError').text('Please fill the correct value');
                        flag = true;
                    }
                    if(teachda == ''){
                        $('#daError').text('Da is missing');
                        flag = true;
                    }else if (!/^(\d+(\.\d+)?|\.\d+)%?$/.test(teachda.trim())){
                        $('#daError').text('Please fill the correct value');
                        flag = true;
                    }
                    if(teachhra == ''){
                        $('#hraError').text('Hra is missing');
                        flag = true;
                    }else if (!/^(\d+(\.\d+)?|\.\d+)%?$/.test(teachhra.trim())){
                        $('#hraError').text('Please fill the correct value');
                        flag = true;
                    }
                    if(teachcca == ''){
                        $('#ccaError').text('Cca is missing');
                        flag = true;
                    }else if (!/^[a-zA-Z0-9]+$/.test(teachcca.trim())){
                        $('#ccaError').text('Please fill the correct value');
                        flag = true;
                    }
                    if(teachwef.trim() === ''){
                        $('#wefError').text('Please Select a proper date');
                        flag = true;
                    }

                    if(flag == true){
                        e.preventDefault();
                    }
                });
                
               
            });
        </script>

        <!--<script>
            function validateForm() {
                var payscaletitle = document.forms["teachingpay_form"]["payscale_title"].value;
                var basepayName = document.forms["teachingpay_form"]["basepay"].value;
                var maxpayName = document.forms["teachingpay_form"]["maxpay"].value;
                var agpName = document.forms["teachingpay_form"]["agp"].value;
                var daName = document.forms["teachingpay_form"]["da"].value;
                var hraName = document.forms["teachingpay_form"]["hra"].value;
                var ccaName = document.forms["teachingpay_form"]["cca"].value;


            
                document.getElementById("payscaletitleError").innerHTML = "";
                document.getElementById("basepayError").innerHTML = "";
                document.getElementById("maxpayError").innerHTML = "";
                document.getElementById("agpError").innerHTML = "";
                document.getElementById("daError").innerHTML = "";
                document.getElementById("hraError").innerHTML = "";
                document.getElementById("ccaError").innerHTML = "";

            
                if (payscaletitle.trim() === "") {
                    document.getElementById("payscaletitleError").innerHTML = "Payscale Title is required";
                    return false;

                }else if (!/^[a-zA-Z]+$/.test(payscaletitle.trim())) {
                    document.getElementById("payscaletitleError").innerHTML = "Payscale Title should contain only alphabetic characters";
                    return false;
                }

                if (basepayName.trim() === "") {
                    document.getElementById("basepayError").innerHTML = "Basepay Name is required";
                    return false;
                } else if (!/^\d+$/.test(basepayName.trim())) {
                    document.getElementById("basepayError").innerHTML = "Basepay should contain only numeric value";
                    return false;
                }
                if (maxpayName.trim() === "") {
                    document.getElementById("maxpayError").innerHTML = "Maxpay Name is required";
                    return false;
                } else if (!/^\d+$/.test(basepayName.trim())) {
                    document.getElementById("maxpayError").innerHTML = "Maxpay should contain only numeric value";
                    return false;
                }
                 if (agpName.trim() === "") {
                    document.getElementById("agpError").innerHTML = "Agp Name is required";
                    return false;
                }
                if (daName.trim() === "") {
                    document.getElementById("daError").innerHTML = "Da Name is required";
                    return false;
                }
                if (hraName.trim() === "") {
                    document.getElementById("hraError").innerHTML = "Hra Name is required";
                    return false;
                }
                if (ccaName.trim() === "") {
                    document.getElementById("ccaError").innerHTML = "Cca Name is required";
                    return false;
                }
            }
        </script>-->

        <!-- INDEX JS -->
        @vite('resources/assets/js/index-8.js')
        

@endsection