@extends('layouts.master')

@section('styles')

    
        <!-- FLATPICKR CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/flatpickr/flatpickr.min.css')}}">
         {{-- datatables css --}}
         <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.tailwindcss.min.css">

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
                                        <a class="flex items-center font-semibold text-default hover:text-default dark:text-default truncate" href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M9 19H12V12.9416L8 9.45402L4 12.9416V19H7V15H9V19ZM21 21H3C2.44772 21 2 20.5523 2 20V12.4868C2 12.1978 2.12501 11.9229 2.34282 11.733L6 8.54435V4C6 3.44772 6.44772 3 7 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21ZM16 11V13H18V11H16ZM16 15V17H18V15H16ZM16 7V9H18V7H16ZM12 7V9H14V7H12Z"></path></svg>
                                            
                                            Religion
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12.1717 12.0005L9.34326 9.17203L10.7575 7.75781L15.0001 12.0005L10.7575 16.2431L9.34326 14.8289L12.1717 12.0005Z"></path></svg>
                                        </a>
                                    </li>
                                    <li class="text-sm">
                                        <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-church" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                <path d="M3 21l18 0" />
                                                <path d="M10 21v-4a2 2 0 0 1 4 0v4" />
                                                <path d="M10 5l4 0" />
                                                <path d="M12 3l0 5" />
                                                <path d="M6 21v-7m-2 2l8 -8l8 8m-2 -2v7" />
                                              </svg>
                                            Caste & Category
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12.1717 12.0005L9.34326 9.17203L10.7575 7.75781L15.0001 12.0005L10.7575 16.2431L9.34326 14.8289L12.1717 12.0005Z"></path></svg>
                                        </a>

                                    </li>
                            
                                </ol>
                            </div>
                            <!-- Page Header Close -->

            
                          

                            <!-- Start::row-5 -->
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="col-span-12">
                                    @if(session('status'))
                                        @if (session('status') == 1)
                                        <div class='bg-white dark:bg-bgdark border border-success alert text-success' role='alert'>
                                            <span class='font-bold'>Result :</span> DataBase transaction Successful
                                        </div>
                                        @elseif(session('status') == 0)
                                        <div class='bg-white dark:bg-bgdark border border-danger alert text-danger' role='alert'>
                                            <span class='font-bold'>Result: </span> Error in Database transaction
                                        </div>
                                    
                                        @endif
                                        @php 
                                            Illuminate\Support\Facades\Session::forget('status');
                                            header("refresh: 3");
                                        @endphp
                                    @endif
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
                                              Caste & Category List for the religion  <b style="color:red;font-size:18px">{{$religion->religion_name}}</b></h5>
                                        <div class=" block ltr:ml-auto rtl:mr-auto my-auto">
                                                <button type="button" id="add_caste_category_btn" class="hs-dropdown-toggle ti-btn ti-btn-primary" data-hs-overlay="#add_caste_category">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM5 5V19H19V5H5ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z" fill="rgba(255,255,255,1)"></path></svg>
                                                    
                                                    Add a Caste & Cateogry
                                                </button>
            
                                                <div id="add_caste_category" class="hs-overlay hidden ti-modal">
                                                    <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                                        <div class="ti-modal-content">
                                                        <div class="ti-modal-header">
                                                            <h3 class="ti-modal-title">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM5 5V19H19V5H5ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z"></path></svg>
                                                                
                                                                Add a Caste & Category <b style="color:red">{{$religion->religion_name}} </b>Religion
                                                            </h3>
                                                           
                                                            <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                            data-hs-overlay="#add_caste_category">
                                                            <span class="sr-only">Close</span>
                                                            <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                fill="currentColor" />
                                                            </svg>
                                                            </button>
                                                            
                                                            @if(($errors->has('caste_name'))||($errors->has('subcastes_name'))||($errors->has('category'))||($errors->has('category_no')))
                                                                <script>
                                                                    //alert(1);
                                                                    $(window).on('load', function() {
                                                                        
                                                                        //alert('attended');
                                                                        //$('#horizontal-alignment-item-1').trigger('click')
                                                                        $('#add_caste_category_btn').trigger("click");
                                                                            
                                                                    });      
                                                                </script>
                                                            @endif
                                                        </div>
                                                        <form action="{{route('ESTB.religion.castecategory.store',$religion->id)}}" data-remote="true"  method="post">
                                                            @csrf
                                                            <div class="ti-modal-body">
                                                               <input type="hidden" name="religion_id" value="{{$religion->id}}">
                                                                <div class="max-w-sm space-y-3 pb-6">
                                                                    <label for="with-corner-hint" class="ti-form-label font-bold">Caste Name : </label>
                                                                    <input type="text" id="castename" name="caste_name" id="caste_name" class="ti-form-input {{$errors->has('caste_name')? 'border-red-500':''}}" placeholder="Caste Name" value={{old('caste_name')}}>
                                                                    @if($errors->has('caste_name'))
                                                                            <div class="text-red-700">{{ $errors->first('caste_name')}}</div>
                                                                    @endif
                                                                    <div id="casteNameError" class="error text-red-700"></div>
                                                                </div>
                                                                <div class="max-w-sm space-y-3 pb-6">
                                                                    <label for="with-corner-hint" class="ti-form-label font-bold">Subcaste Name : </label>
                                                                    <input type="text" id="subcastename" name="subcastes_name" class="ti-form-input {{$errors->has('subcastes_name')? 'border-red-500':''}}" placeholder="Subcaste Name" value={{old('subcastes_name')}}>
                                                                    @if($errors->has('subcastes_name'))
                                                                            <div class="text-red-700">{{ $errors->first('subcastes_name') }}</div>
                                                                    @endif
                                                                    <div id="subcasteNameError" class="error text-red-700"></div>
                                                                </div>
                                                                <div class="max-w-sm space-y-3 pb-6">
                                                                    <label for="with-corner-hint" class="ti-form-label font-bold">Category Name : </label>
                                                                    <input type="text" id="categoryname" name="category" class="ti-form-input {{$errors->has('category')? 'border-red-500':''}}" placeholder="Category Name" value={{old('category')}}>
                                                                    @if($errors->has('category'))
                                                                            <div class="text-red-700">{{ $errors->first('category') }}</div>
                                                                    @endif
                                                                    <div id="categoryNameError" class="error text-red-700"></div>
                                                                </div>
                                                                <div class="max-w-sm space-y-3 pb-6">
                                                                    <label for="with-corner-hint" class="ti-form-label font-bold">Category No. : </label>
                                                                    <input type="text" id="categoryno" name="category_no" class="ti-form-input {{$errors->has('category_no')? 'border-red-500':''}}" placeholder="Category No." value={{old('category_no')}}>
                                                                    @if($errors->has('category_no'))
                                                                            <div class="text-red-700">{{ $errors->first('category_no') }}</div>
                                                                    @endif
                                                                    <div id="categoryNoError" class="error text-red-700"></div>
                                                                </div>
                                                            </div>
                                                            <div class="ti-modal-footer">
                                                                <button type="button"
                                                                class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                data-hs-overlay="#add_caste_category">
                                                                Close
                                                                </button>
                                                                
                                                                <input type="submit" id="caste_category_store_add_btn" class="ti-btn  bg-primary text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10" value="Add"/>
                                                                
                                                                </div>
                                                            </form>  
                                                        </div>
                                                    </div>
                                                </div>


                                           
                                        </div>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto">
                                            <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="{{route('ESTB.religion')}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M11.8284 12.0005L14.6569 14.8289L13.2426 16.2431L9 12.0005L13.2426 7.75781L14.6569 9.17203L11.8284 12.0005Z"></path></svg>
                                                Back to Religion
                                             </a>
                                        <table id="castecategory_table" class="ti-custom-table ti-striped-table  ti-custom-table-head whitespace-nowrap">
                                            <thead class="bg-gray-50 dark:bg-black/20">
                                            <tr class="">
                                                <th scope="col" class="dark:text-white/80">S.no</th>
                                                <th scope="col" class="dark:text-white/80">Name</th>
                                                <th scope="col" class="dark:text-white/80">Subcaste Name</th>
                                                <th scope="col" class="dark:text-white/80">Category</th>
                                                <th scope="col" class="dark:text-white/80">Category No</th>
                                                <th scope="col" class="dark:text-white/80">Status</th>
                                                <th scope="col" class="dark:text-white/80">Actions</th>
                                                
                                            </tr>
                                            </thead>
                                            <tbody class="">
                                                
                                            @php
                                                $i = 1;
                                            @endphp
                                            @forelse($castes as $caste)
                            
                                            <tr class="">
                                                <td>{{ $i++ }}</td>
                                                <td>
                                                <div class="flex space-x-3 rtl:space-x-reverse w-full min-w-[200px]">
                                                    <div class="block w-full my-auto">
                                                       {{$caste->caste_name}}
                                                    </div>
                                                </div>
                                                </td>
                                                <td>
                                                <div class="flex space-x-3 rtl:space-x-reverse w-full min-w-[200px]">
                                                    <div class="block w-full my-auto">
                                                       {{$caste->subcastes_name}}
                                                    </div>
                                                </div>
                                                </td>
                                                
                                                <td>
                                                <div class="flex space-x-3 rtl:space-x-reverse w-full min-w-[200px]">
                                                    <div class="block w-full my-auto">
                                                       {{$caste->category }}
                                                    </div>
                                                </div>
                                                </td>
                                                <td>
                                                <div class="flex space-x-3 rtl:space-x-reverse w-full min-w-[200px]">
                                                    <div class="block w-full my-auto">
                                                       {{$caste->category_no}}
                                                    </div>
                                                </div>
                                                </td>
                                                <td><span>{{ $caste->status }}</span></td>
                                                
                                                <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <button data-hs-overlay="#caste_edit_modal{{$i}}" id="btn{{$i}}" btn-val={{$i}}
                                                    class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary caste_edit_modal_click">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                    <span
                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                            role="tooltip">
                                                            Edit
                                                        </span>
                                                    </button>
                        
                    
                                                        <div id="caste_edit_modal{{$i}}" class="hs-overlay hidden ti-modal">
                                                            
                                                            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                                                <div class="ti-modal-content">
                                                                <div class="ti-modal-header">
                                                                    <h3 class="ti-modal-title">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                        
                                                                        Edit Caste & Category
                                                                    </h3>
                                                                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                    data-hs-overlay="#caste_edit_modal{{$i}}">
                                                                    <span class="sr-only">Close</span>
                                                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                        d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                        fill="currentColor" />
                                                                    </svg>
                                                                    </button>
                                                                    @if(($errors->has('e_caste_name'))||($errors->has('e_subcaste_name'))||($errors->has('e_category'))||($errors->has('e_category_no')))
                                                                        <script>
                                                                            //alert(387);
                                                                            window.onload=function(){
                                                                            //alert('123');
        
                                                                            };   
                                                                        
                                                                        </script>
                                                                    @endif
                                                                </div>
                                                                <form  action="{{route('ESTB.religion.castecategory.update',[$religion->id,$caste->id])}}" method="post">
                                                                    @csrf
                                                                    @method('patch')
                                                                    <div class="ti-modal-body pb-6">
                                                                        <input type='hidden' name='modal_no' id='modal_no' value={{old('modal_no')}}/>
                                                                        <input type="hidden" name="religion_id" value="{{$religion->id}}">
                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                            <label for="with-corner-hint" class="ti-form-label font-bold">Caste Name : </label>
                                                                            <input type="text" name="e_caste_name" class="ti-form-input" placeholder="caste_name" value="{{$caste->caste_name}}">
                                                                            @if($errors->has('e_caste_name'))
                                                                                <div class="text-red-700">{{ $errors->first('e_caste_name') }}</div>
                                                                            @endif
                                                                            <div id="casteNameError" class="error text-red-700"></div>
                                                                        </div>
                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                            <label for="with-corner-hint" class="ti-form-label font-bold">Subcaste Name : </label>
                                                                            <input type="text" name="e_subcastes_name" class="ti-form-input" placeholder="subcastes_name" value="{{$caste->subcastes_name}}">
                                                                            @if($errors->has('e_subcastes_name'))
                                                                                <div class="text-red-700">{{ $errors->first('e_subcastes_name') }}</div>
                                                                            @endif
                                                                            <div id="subcasteNameError" class="error text-red-700"></div>
                                                                        </div>
                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                            <label for="with-corner-hint" class="ti-form-label font-bold">Category Name : </label>
                                                                            <input type="text" name="e_category" class="ti-form-input" placeholder="category" value="{{$caste->category}}">
                                                                            @if($errors->has('e_category'))
                                                                                <div class="text-red-700">{{ $errors->first('e_category') }}</div>
                                                                            @endif
                                                                            <div id="categoryNameError" class="error text-red-700"></div>
                                                                        </div>
                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                            <label for="with-corner-hint" class="ti-form-label font-bold">Category No. : </label>
                                                                            <input type="text" name="e_category_no" class="ti-form-input" placeholder="category no " value="{{$caste->category_no}}">
                                                                            @if($errors->has('e_category_no'))
                                                                                <div class="text-red-700">{{ $errors->first('e_category_no') }}</div>
                                                                            @endif
                                                                            <div id="categoryNoError" class="error text-red-700"></div>
                                                                        </div>
                                                                        
                                                                        
                                                                        @if($caste->status == 'inactive')
                                                                        <br/>
                                                                            <div class="flex">
                                                                                <input type="radio" name="status" class="ti-form-radio" id="hs-radio-group-2" value="active">
                                                                                <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Make it Active</label>
                                                                            </div>
                                                                        @endif
                                                                
                                                                    </div>
                                                                    <div class="ti-modal-footer">
                                                                        <button type="button"
                                                                        class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                        data-hs-overlay="#caste_edit_modal{{$i}}">
                                                                        Close
                                                                        </button>
                                                                        
                                                                        <input type="submit" class="ti-btn  bg-warning text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10" value="Update"/>
                                                                        
                                                                        </div>
                                                                    </form>  
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="hs-tooltip ti-main-tooltip">
                                                <form action="{{ route('ESTB.religion.castecategory.destroy',[$religion->id, $caste->id]) }}" method="post">
                                                    @method('delete')
                                                     @csrf
                                                   <button onclick="return confirm('Are you Sure')"
                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M7 4V2H17V4H22V6H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V6H2V4H7ZM6 6V20H18V6H6ZM9 9H11V17H9V9ZM13 9H15V17H13V9Z"></path></svg>
                                                   
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
                                                <p class="text-dark"><b>No Caste & Category Added.</b></p>
                                            @endforelse
                                            </tbody>
                                        </table>
                                        </div>
                                    </div>
                                        <div class="box-footer">
                                        

                                        </div>
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
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- FLATPICKR JS -->
        <script src="{{asset('build/assets/libs/flatpickr/flatpickr.min.js')}}"></script>
        @vite('resources/assets/js/flatpickr.js')


        <!-- INDEX JS -->
        @vite('resources/assets/js/index-8.js')
        
        <script
        src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>

        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"
        ></script>

        <script src="https://cdn.datatables.net/1.13.6/js/dataTables.tailwindcss.min.js"></script>

        <script href="https://cdn.tailwindcss.com/3.3.5"></script>
        <script>
            $(document).ready(function(){
               //alert('Hello from jquery');
               new DataTable('#castecategory_table');
            
              $(document).on('click','.caste_edit_modal_click',function(){
                //var 
                var modal_no = $(this).attr("btn-val");
                //alert($(this).find('.caste_edit_modal_no').val());
                $('#modal_no').val(modal_no); 

              });

                $(document).on('click','#caste_category_store_add_btn',function(e){

                    var castename = $('#castename').val();
                    var subcastename = $('#subcastename').val();
                    var categoryname = $('#categoryname').val();
                    var categoryno = $('#categoryno').val();

                    var flag = false;

                    if(castename == ''){
                        $('#casteNameError').text('Caste Name is missing');
                        flag = true;
                    }else if (!/^[a-zA-Z\s]+$/.test(castename.trim())){
                        $('#casteNameError').text('Please fill the correct value');
                        flag = true;
                    }
                    if(subcastename == ''){
                        $('#subcasteNameError').text('Subcaste Name is missing');
                        flag = true;
                    }else if (!/^[a-zA-Z\s]+$/.test(subcastename.trim())){
                        $('#subcasteNameError').text('Please fill the correct value');
                        flag = true;
                    }
                    if(categoryname == ''){
                        $('#categoryNameError').text('Category Name is missing');
                        flag = true;
                    }else if (!/^[a-zA-Z\s]+$/.test(categoryname.trim())){
                        $('#categoryNameError').text('Please fill the correct value');
                        flag = true;
                    }
                    if (categoryno === '') {
                        $('#categoryNoError').text('Category Number is missing');
                        flag = true;
                    } else if (!/^[a-zA-Z\s]+$/.test(categoryno.trim())) {
                        $('#categoryNoError').text('Please enter a valid number');
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
            var casteName = document.forms["castecategory_form"]["caste_name"].value;
            var subcasteName = document.forms["castecategory_form"]["subcastes_name"].value;
            var category = document.forms["castecategory_form"]["category"].value;
            var categoryNo = document.forms["castecategory_form"]["category_no"].value;

            document.getElementById("casteNameError").innerHTML = "";
            document.getElementById("subcasteNameError").innerHTML = "";
            document.getElementById("categoryNameError").innerHTML = "";
            document.getElementById("categoryNoError").innerHTML = "";

            if (casteName.trim() === "") {
                document.getElementById("casteNameError").innerHTML = "Caste Name is required";
                return false;

            }else if (!/^[a-zA-Z]+$/.test(casteName.trim())) {
                document.getElementById("casteNameError").innerHTML = "Caste Name should contain only alphabetic characters";
                return false;
            }

            if (subcasteName.trim() === "") {
                document.getElementById("subcasteNameError").innerHTML = "Subcaste Name is required";
                return false;
            }else if (!/^[a-zA-Z]+$/.test(subcasteName.trim())) {
                document.getElementById("subcasteNameError").innerHTML = "Caste Name should contain only alphabetic characters";
                return false;
            }

            if (category.trim() === "") {
                document.getElementById("categoryNameError").innerHTML = "Category is required";
                return false;
            }else if (!/^[a-zA-Z]+$/.test(category.trim())) {
                document.getElementById("categoryNameError").innerHTML = "Caste Name should contain only alphabetic characters";
                return false;

            if (categoryNo.trim() === "") {
                document.getElementById("categoryNoError").innerHTML = "Category No is required";
                return false;
            }

            return true;
            }
        }
    </script>-->
        

@endsection