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
                                                @if(($errors->has('year'))||($errors->has('status'))||($errors->has('taxregime')))
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
                                            <form action="{{route('ESTB.TDS.StaffTaxRegime.store')}}" method="post">
                                                @csrf
                                                <div class="ti-modal-body">
                                                    <div class="grid lg:grid-cols-3 gap-3 space-y-2 lg:space-y-0 pb-4">
                                                        <div class="space-y-2 ">
                                                            <label class="ti-form-label mb-0 font-bold">year<span class="text-red-500">*</span></label>
                                                            <input type="text"  name="year" id="year" class="my-auto ti-form-input stfname" placeholder="enteryear">
                                                            @if($errors->has('year'))
                                                                <div class="text-red-700">{{ $errors->first('year')}}</div>
                                                            @endif
                                                            <div id="yearError" class="error text-red-700"></div>
                                                        </div>
                                                        <div class="space-y-2">
                                                            <label class="ti-form-label mb-0 font-bold">status<span class="text-red-500">*</span></label>
                                                            <input type="text" id="status" name="status" class="my-auto ti-form-input stmname"  placeholder="status">
                                                            @if($errors->has('status'))
                                                                <div class="text-red-700">{{ $errors->first('status')}}</div>
                                                            @endif
                                                            <div id="statusError" class="error text-red-700"></div>
                                                        </div>
                                                    </div>
                                                    <div class="grid lg:grid-cols-3 gap-3 space-y-2 lg:space-y-0 pb-4">
                                                        <div class="space-y-2">
                                                            <label class="ti-form-label mb-0 font-bold">Taxregime<span class="text-red-500">*</span></label>
                                                            <select id="taxregime" class="ti-form-select" name="taxregime">
                                                                <option value="#">Choose a Taxregime</option>
                                                                <option value="old">Old</option>
                                                                <option value="new">New</option>
                                                                {{-- @foreach ($departments as $department)
                                                                    <option value="{{$department->id}}">{{$department->dept_name}}</option>
                                                                @endforeach --}}
                                                            </select>
                                                            @if($errors->has('taxregime'))
                                                                <div class="text-red-700">{{ $errors->first('taxregime')}}</div>
                                                            @endif
                                                            <div id="taxregimeError" class="error text-red-700"></div>
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
                    <div class="box-body">
                        <div id="basic-table" class="ti-custom-table ti-striped-table ti-custom-table-hover table-bordered rounded-sm  overflow-auto">
                            <table id="staff_table" class="ti-custom-table ti-custom-table-head  max-w-8 overflow-auto text-wrap relative">
                                <thead class="bg-gray-50 dark:bg-black/20">
                                    <tr class="">
                                        <!--<th scope="col" class="dark:text-white/80">S.no</th>
                                        <th scope="col" class="dark:text-white/80">Staff Name</th>
                                        <th scope="col" class="dark:text-white/80">Employee Type</th>
                                        <th scope="col" class="dark:text-white/80">Department</th>
                                        <th scope="col" class="dark:text-white/80">Designation</th>
                                        <th scope="col" class="dark:text-white/80">Associatation</th>
                                        <th scope="col" class="dark:text-white/80">Actions</th>-->

                                        <th scope="col" class="dark:text-white/80">S.no</th>
                                        <th scope="col" class="dark:text-white/80">Staff Name</th>
                                        <th scope="col" class="dark:text-white/80">Department Name</th>
                                        <th scope="col" class="dark:text-white/80">Tax Regime</th>
                                        <th scope="col" class="dark:text-white/80">year</th>
                                        <th scope="col" class="dark:text-white/80">Status</th>
                                        <th scope="col" class="dark:text-white/80">Actions</th>

                                    </tr>
                                </thead>
                                <tbody class="">

                                    @php
                                        $i = 1;
                                        //print_r($staff->religions->religion_id);
                                    @endphp
                                    @forelse($staff_tax_regimes as $stafftax)

                                    <tr class="bg-red-700">
                                        <td>{{ $i++ }}</td>
                                        <td>
                                        <div class="flex space">
                                            <div class="block w-full my-auto">
                                            
                                                 {{$stafftax->staff->fname.' '.$stafftax->staff->mname.' '.$stafftax->staff->lname}}  
                                              
                                                {{-- {{$st->fname.' '.$st->mname.' '.$st->lname}} --}}
                                            </div>
                                        </div>
                                        </td>
                                        
                                        <td><span>
                                            @foreach ($stafftax->$staff->departments as $dept)
                                            @if($dept->pivot->status == 'active')
                                            {{$dept->dept_shortname}} <br/>
                                            @endif
                                            @endforeach
                                        </span></td>
                                        <td ><span class="w-3/4">

                                            {{ $stafftax->taxregime->name }}
                                        </span></td>

                                        <td><span>
                                            {{-- @foreach ($st->associations as $st_asso)
                                            @if($st_asso->pivot->status=='active')
                                                {{$st_asso->asso_name}}
                                            @endif
                                            @endforeach --}}
                                            {{ $stafftax->year}}
                                        </span>
                                    </td>
                                        <td>{{ $stafftax->status}}</td>
                                        <td class="font-medium space-x-2 rtl:space-x-reverse">
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <button
                                                    class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                    <a href="{{}}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12.0003 3C17.3924 3 21.8784 6.87976 22.8189 12C21.8784 17.1202 17.3924 21 12.0003 21C6.60812 21 2.12215 17.1202 1.18164 12C2.12215 6.87976 6.60812 3 12.0003 3ZM12.0003 19C16.2359 19 19.8603 16.052 20.7777 12C19.8603 7.94803 16.2359 5 12.0003 5C7.7646 5 4.14022 7.94803 3.22278 12C4.14022 16.052 7.7646 19 12.0003 19ZM12.0003 16.5C9.51498 16.5 7.50026 14.4853 7.50026 12C7.50026 9.51472 9.51498 7.5 12.0003 7.5C14.4855 7.5 16.5003 9.51472 16.5003 12C16.5003 14.4853 14.4855 16.5 12.0003 16.5ZM12.0003 14.5C13.381 14.5 14.5003 13.3807 14.5003 12C14.5003 10.6193 13.381 9.5 12.0003 9.5C10.6196 9.5 9.50026 10.6193 9.50026 12C9.50026 13.3807 10.6196 14.5 12.0003 14.5Z"></path></svg>
                                                        <span
                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                            role="tooltip">
                                                            View & Edit
                                                        </span>
                                                    </a>
                                                </button>

                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <!--form action="#" method="post">

                                                    <button onclick="return confirm('Are you Sure')"
                                                        class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M7 4V2H17V4H22V6H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V6H2V4H7ZM6 6V20H18V6H6ZM9 9H11V17H9V9ZM13 9H15V17H13V9Z"></path></svg>

                                                        <span
                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                            role="tooltip">
                                                            Delete
                                                        </span>
                                                        </button>
                                                    </form-->
                                                </div>
                                            </div>
                                        </td>
                                       
                                    </tr>
                                    @empty
                                        <p class="text-dark"><b>No Staff Added.</b></p>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End::row-5 -->
        </div>
        <!-- End::main-content -->
    </div>
</div>
        
        
            
        
        
        




@endsection