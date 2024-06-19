@extends('layouts.master')

@section('styles')
    <link rel="stylesheet" href="{{ asset('build/assets/libs/tabulator-tables/css/tabulator.min.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/libs/choices.js/public/assets/styles/choices.min.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/libs/flatpickr/flatpickr.min.css') }}">
    {{-- datatables css --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.tailwindcss.min.css">
@endsection

@section('content')
<div class="content">
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
    <div class="main-content">
        <div class="block justify-between page-header sm:flex">
            <div>
                <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium">Establishment Section</h3>
            </div>
            <ol class="flex items-center whitespace-nowrap min-w-0">
                <li class="text-sm">
                    <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                            <path d="M17 15.2454V22.1169C17 22.393 16.7761 22.617 16.5 22.617C16.4094 22.617 16.3205 22.5923 16.2428 22.5457L12 20L7.75725 22.5457C7.52046 22.6877 7.21333 22.6109 7.07125 22.3742C7.02463 22.2964 7 22.2075 7 22.1169V15.2454C5.17107 13.7793 4 11.5264 4 9C4 4.58172 7.58172 1 12 1C16.4183 1 20 4.58172 20 9C20 11.5264 18.8289 13.7793 17 15.2454ZM12 15C15.3137 15 18 12.3137 18 9C18 5.68629 15.3137 3 12 3C8.68629 3 6 5.68629 6 9C6 12.3137 8.68629 15 12 15ZM12 13C9.79086 13 8 11.2091 8 9C8 6.79086 9.79086 5 12 5C14.2091 5 16 6.79086 16 9C16 11.2091 14.2091 13 12 13Z"></path>
                        </svg>
                        Annual Increment Template 
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                            <path d="M12.1717 12.0005L9.34326 9.17203L10.7575 7.75781L15.0001 12.0005L10.7575 16.2431L9.34326 14.8289L12.1717 12.0005Z"></path>
                        </svg>
                    </a>
                </li>
            </ol>
        </div>
        <div class="grid grid-cols-12 gap-x-6">
            <div class="col-span-12">
                <div class="box">
                    <div class="box-header">
                        <div class="flex">
                            <h5 class="box-title my-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32">
                                    <path d="M17 15.2454V22.1169C17 22.393 16.7761 22.617 16.5 22.617C16.4094 22.617 16.3205 22.5923 16.2428 22.5457L12 20L7.75725 22.5457C7.52046 22.6877 7.21333 22.6109 7.07125 22.3742C7.02463 22.2964 7 22.2075 7 22.1169V15.2454C5.17107 13.7793 4 11.5264 4 9C4 4.58172 7.58172 1 12 1C16.4183 1 20 4.58172 20 9C20 11.5264 18.8289 13.7793 17 15.2454ZM12 15C15.3137 15 18 12.3137 18 9C18 5.68629 15.3137 3 12 3C8.68629 3 6 5.68629 6 9C6 12.3137 8.68629 15 12 15ZM12 13C9.79086 13 8 11.2091 8 9C8 6.79086 9.79086 5 12 5C14.2091 5 16 6.79086 16 9C16 11.2091 14.2091 13 12 13Z"></path>
                                </svg>
                                Annual Increment Staff Template
                            </h5>

                        </div>

                        <div class="block ltr:ml-auto rtl:mr-auto my-auto">
                                    <button type="button" id="downloadtemp" data-hs-overlay="#downloadTemp" class="hs-dropdown-toggle ti-btn ti-btn-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                                            <path d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM5 5V19H19V5H5ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z" fill="rgba(255,255,255,1)"></path>
                                        </svg>
                                        Generate Annual Increment List
                                    </button>

                                    <div id="downloadTemp" class="hs-overlay hidden ti-modal">
                                    <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                            <div class="ti-modal-content">
                                                <div class="ti-modal-header">
                                                    <h3 class="ti-modal-title">Addmonth for Template</h3>
                                                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#downloadTemp">
                                                        <span class="sr-only">Close</span>
                                                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="ti-modal-body">
                                                    {{-- <form id="annualincrementStaffFormforBoard" action="/ESTB/salaries/GenerateAnnualIncrement/Board/Nonteaching/create" method="post"> --}}
                                                        @csrf
                                                        <div class="flex justify-center space-x-4 text-center">
                                                        <h1 class="font-bold">Generate Annual Increment For</h1>
                                                            
                                                            <div class="max-w-sm space-y-2 text-center">
                                                                <label for="month" class="ti-form-label mb-0 font-bold">Month</label>
                                                                <select class="ti-form-select type" id="month" name="month">
                                                                    <option value="1">January</option>
                                                                    <option value="2">February</option>
                                                                    <option value="3">March</option>
                                                                    <option value="4">April</option>
                                                                    <option value="5">May</option>
                                                                    <option value="6">June</option>
                                                                    <option value="7">July</option>
                                                                    <option value="8">August</option>
                                                                    <option value="9">September</option>
                                                                    <option value="10">October</option>
                                                                    <option value="11">November</option>
                                                                    <option value="12">December</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                        <input type="submit" id="submitData" class="ti-btn  bg-primary text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10 float-right" value="Generate Excel Template"/>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
  
                
                                    <div class="box-body">
                                            <div class="flex justify-end space-x-4 items-center">
                                                {{-- <form action="{{ route('import.excel') }}" method="POST" enctype="multipart/form-data" class="flex items-center space-x-2">
                                                    @csrf
                                                    <div class="space-y-8 font-[sans-serif] max-w-md mx-auto">
                                                        <input type="file" class="w-full text-gray-500 font-medium text-sm bg-blue-100 cursor-pointer py-2 px-4 mr-4 hover:bg-blue-500 hover:text-white rounded-lg rounded-md border-blue-300" name="excel_file"/>
                                                    </div>
                                                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 text-xs rounded-md hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75 whitespace-nowrap">Upload Excel</button>
                                                </form> --}}
                                                <button id="exportToExcel" class="bg-green-500 text-white px-4 py-2 text-xs rounded-md focus:outline-none hover:bg-green-600 focus:ring-2 focus:ring-green-400 focus:ring-opacity-75 whitespace-nowrap">Export to Excel</button>
                                            </div>
                                        </div>
                                     </div>

                                     <div class="avatar-container flex py-4">
                                

                                <div class="avatar-wrapper flex items-center mx-2">
                                    <div class="avatar rounded-sm p-1 bg-red-300 border-gray-900 border-2 w-6 h-6">
                                    </div>
                                    <div class="avatar-text font-bold ml-2">Increment Postponed Due To LWP</div>
                                </div>

                               

                            </div>

                          
                    {{-- <form id="generateannualincrementForm" method="POST" action="{{ route('generateannualincrement.staff.update') }}">
                         @csrf --}}
                        <div class="flex justify-end my-4">
                        
                        <div id="basic-table" class="ti-custom-table ti-striped-table  ti-custom-table-hover table-bordered rounded-sm overflow-auto">
                        
                            <table id="annualincrement_template_table" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                <thead class="bg-gray-50 dark:bg-black/20">
                                    <tr>
                                        <th scope="col" class="dark:text-white/80">S.no</th>
                                        <th scope="col" class="dark:text-white/80">Name of the Employee</th>
                                        <th scope="col" class="dark:text-white/80">Designation/Department</th>
                                        <th scope="col" class="dark:text-white/80">Pay Scale</th>
                                        <th scope="col" class="dark:text-white/80">Rate of Increment</th>
                                        <th scope="col" class="dark:text-white/80">Date of last Increment</th>
                                        <th scope="col" class="dark:text-white/80">Present Basic Pay</th>
                                        <th scope="col" class="dark:text-white/80">Due date of next Increment</th>
                                        <th scope="col" class="dark:text-white/80">Basic pay after Increment</th>
                                        <th scope="col" class="dark:text-white/80"></th>
                                    </tr>
                                </thead>

                                                <tbody class="">

                                                        @php
                                                            $i = 1;
                                                            //print_r($staff->religions->religion_id);
                                                        @endphp
                                                        @forelse($staff as $st)
                                                       
                                                        <tr @if($data[$st->id]['wef'] != Carbon\Carbon::parse($st->date_of_increment)->format('d-M-Y'))  style="background-color:#F18B7B; !important" @endif>
                                                            <td >{{ $i++ }} </td>
                                                            <td>
                                                                <div class="block w-full my-auto">

                                                                    {{$st->fname.' '.$st->mname.' '.$st->lname}}
                                                                        @foreach ($st->departments as $dept)
                                                                            @if($dept->pivot->status == 'active')
                                                                                {{','.$dept->dept_shortname}} 
                                                                            @endif
                                                                        @endforeach
                                                                </div>
                                                                
                                                                    {{-- <tr>
                                                                        <td>
                                                                            <span>{{$st->latest_employee_type()->first()->employee_type}}</span>
                                                                        </td>
                                                                    </tr> --}}
                                                                                {{--                                                               
                                                                    
                                                                        <li >
                                                                        <span class="w-3/4">

                                                                            @foreach ($st->designations as $design)
                                                                                @if( $design->pivot->status == 'active')
                                                                                    {{$design->design_name}} <br/>
                                                                                @endif
                                                                            @endforeach

                                                                        </span>
                                                                    </li> --}}
                                                            
                                                                
                                                            
                                                                    {{-- <li><span>
                                                                        @foreach ($st->qualifications as $st_quli)
                                                                            @if($st_quli->pivot->status=='active')
                                                                                {{$st_quli->qual_shortname}}
                                                                            @endif
                                                                        @endforeach
                                                                        </span>
                                                                    </li> --}}
                                                            </td>
                                                            <td>
                                                            
                                                                
                                                                    <li >
                                                                        <span class="w-3/4 text-wrap">

                                                                            @foreach ($st->designations as $design)
                                                                                @if( $design->pivot->status == 'active')
                                                                                    {{$design->design_name}} <br/>
                                                                                @endif
                                                                            @endforeach

                                                                        </span>
                                                                    </li>
                                                                </td>
                                                            {{-- <td  class="border border-gray-300 px-4 py-2"><span>{{ $st->dob }}</span></td> --}}
                                                            {{-- <td><span>{{\Carbon\Carbon::parse($st->dob)->format('d-M-Y') }}</span></td>
                                                            <td><span>{{\Carbon\Carbon::parse( $st->doj)->format('d-M-Y') }}</span></td> --}}
                                                            {{-- <td  class="border border-gray-300 px-4 py-2"><span>{{ $st->doj }}</span></td> --}}
                                                            {{-- <td class="">
                                                            <ul>
                                                            <li>
                                                            <span>
                                                            @foreach($st->associations as $st_asso)
                                                            {{$st_asso->asso_name}}
                                                            @endforeach
                                                            </span>
                                                            </li>
                                                             <li>
                                                            <span>
                                                            @foreach($st->associations as $st_asso)
                                                            {{$st_asso->pivot->gcr}}
                                                            @endforeach
                                                            </span>
                                                            </li>
                                                            </ul> --}}
                                                    
                                                            {{-- </td> --}}
                                                            <td class="">
                                                                    @foreach($st->teaching_payscale as $st_pay)
                                                                        {{'₹'.number_format($st_pay->basepay).'-'.'₹'.number_format($st_pay->maxpay).'+AGP'}}
                                                                                {{'₹'.number_format($st_pay->agp)}}
                                                                    @endforeach

                                                            </td>
                                                            {{-- <td  class="border border-gray-300 px-4 py-2"><span>@foreach($st->annualIncrement as $st_ai)
                                                                        {{'₹'.number_format($st_ai->basic).'+'}}
                                                                        @endforeach
                                                                           @foreach($st->teaching_payscale as $st_pay)
                                                                         {{'₹'.number_format($st_pay->agp)}}
                                                                          @endforeach</span></td> --}}
                                                            {{-- <td  class="border border-gray-300 px-4 py-2"><span>{{'₹'.number_format($data[$st->id]['total'])}}</span></td> --}}
                                                            <td  class="border border-gray-300 px-4 py-2"><span>{{'₹'.number_format($data[$st->id]['incremente_value'])}}</span></td>
                                                            <td  class="border border-gray-300 px-4 py-2"><span>
                                                                        @foreach($st->annualIncrement as $st_ai)
                                                                        {{\Carbon\Carbon::parse($st_ai->wef)->format('d-M-Y')}}
                                                                        @endforeach
                                                                        
                                                            </span></td>
                                                            <td  class="border border-gray-300 px-4 py-2"><span>{{'₹'.number_format($data[$st->id]['total'])}}</span></td>

                                                            {{-- <tr class="{{ ($data[$st->id]['wef'])($st->date_of_increment) ? 'background-color: red;' : '' }}">

                                                                 <td>
                                                                    <span>{{ $data[$st->id]['wef']->format('d-M-Y') }}</span>
                                                                </td>
                                                            </tr> --}}

                                                            {{-- <tr style="{{ ($data[$st->id]['wef'] !=$st->date_of_increment)? 'background-color: red;' : '' }}"> --}}
                                                                <td class="border border-gray-300 px-4 py-2">
                                                                    <span>{{ Carbon\Carbon::parse($data[$st->id]['wef'])->format('d-M-Y') }}</span>
                                                                </td>
                                                            {{-- </tr> --}}

                                                            
                                                            {{-- <td><span>{{ Carbon\Carbon::parse($data[$st->id]['wef'])->format('d-M-Y') }}</span></td> --}}
                                                            
                                                             {{-- <td  class="border border-gray-300 px-4 py-2"><span>{{$st->date_of_increment}}</span></td> --}}
                                                            {{-- <td  class="border border-gray-300 px-4 py-2"><span>{{'₹'.$data[$st->id]['basic']."+".'₹'.$data[$st->id]['incremente_value']."+ ".'₹'.$data[$st->id]['agp'].'='.'₹'.$data[$st->id]['basic_agp_incremented_value']}}</span></td>
                                                     --}}
                                                           
                                                            <td  class="border border-gray-300 px-4 py-2"><span>{{'₹'.number_format($data[$st->id]['basic_agp_incremented_value'])}}</span></td>
                                                            {{-- <td  class="border border-gray-300 px-4 py-2"><span>0</span></td> --}}
                                                            {{-- <td  class="border border-gray-300 px-4 py-2"><span>
                                                            @foreach($st->allowance as $st_ai)
                                                            {{'₹'.number_format($st_ai->value)}}
                                                             @endforeach
                                                            
                                                            </span></td> --}}
                                                           
                                                            {{-- <td  class="border border-gray-300 px-4 py-2"><span>{{$data[$st->id]['value']}}</span></td>
                                                            <td  class="border border-gray-300 px-4 py-2"><span>{{'₹'.number_format($data[$st->id]['gross_value'])}}</span></td>
                                                             --}}
                                                            <td  class="font-medium space-x-2 rtl:space-x-reverse">
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    {{-- <button
                                                                        class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                                        <a href="{{route('PRINCIPAL.staff.staffview',$st->id)}}">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12.0003 3C17.3924 3 21.8784 6.87976 22.8189 12C21.8784 17.1202 17.3924 21 12.0003 21C6.60812 21 2.12215 17.1202 1.18164 12C2.12215 6.87976 6.60812 3 12.0003 3ZM12.0003 19C16.2359 19 19.8603 16.052 20.7777 12C19.8603 7.94803 16.2359 5 12.0003 5C7.7646 5 4.14022 7.94803 3.22278 12C4.14022 16.052 7.7646 19 12.0003 19ZM12.0003 16.5C9.51498 16.5 7.50026 14.4853 7.50026 12C7.50026 9.51472 9.51498 7.5 12.0003 7.5C14.4855 7.5 16.5003 9.51472 16.5003 12C16.5003 14.4853 14.4855 16.5 12.0003 16.5ZM12.0003 14.5C13.381 14.5 14.5003 13.3807 14.5003 12C14.5003 10.6193 13.381 9.5 12.0003 9.5C10.6196 9.5 9.50026 10.6193 9.50026 12C9.50026 13.3807 10.6196 14.5 12.0003 14.5Z"></path></svg>
                                                                            <span
                                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                role="tooltip">
                                                                                View Staff
                                                                            </span>
                                                                        </a>
                                                                    </button> --}}

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
                            <button id="submit" class="ti-btn bg-primary text-white px-4 py-2 rounded-md hover:bg-primary focus:ring-primary dark:focus:ring-offset-white/10">Submit</button>
                        </div>
                        </div>
                    </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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

        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.0/xlsx.full.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/dataTables.tailwindcss.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script href="https://cdn.tailwindcss.com/3.3.5"></script>
        <script href="https://cdn.tailwindcss.com/3.3.5"></script>
        <script>
            $(document).ready(function(){
               //alert('Hello from jquery');

               new DataTable('#annualincrement_template_table');
           
               $('#exportToExcel').on('click', function () {
                    var table = $('#annualincrement_template_table').clone();
                    //table.find('th:nth-child(1),th:nth-child(4)').remove();
                    //table.find('td:nth-child(1),td:nth-child(4)').remove();
                    // Ensure each cell has proper formatting
                    table.find('td').css({
                        'border': '1px solid #000',
                        'padding': '6px'
                    });
                    table.find('th, td').each(function () {
                        $(this).css('width', 'auto');
                    });

                    // Create a Blob containing the modified table data
                    var blob = new Blob([table[0].outerHTML], { type: 'application/vnd.ms-excel;charset=utf-8' });

                    // Check for Internet Explorer and Edge
                    if (window.navigator && window.navigator.msSaveOrOpenBlob) {
                        window.navigator.msSaveOrOpenBlob(blob, 'annualincrement_staff.xls');
                    } else {
                        var link = $('<a>', {
                            href: URL.createObjectURL(blob),
                            download: 'annualincrement_staff.xls'
                        });
                        // Trigger the click to download
                        link[0].click();
                    }
                    setTimeout(function() {
                        window.location.href="{{url('/ESTB/salaries/GenerateAnnualIncrement/Board/Teaching')}}"; // Update this URL to your actual route
                    }, 1000);
                });
            });
            </script>
        
@endsection

