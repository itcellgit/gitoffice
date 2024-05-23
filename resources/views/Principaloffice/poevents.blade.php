@extends('layouts.components.Principaloffice.master-poffice')

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
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"><span class="text-primary">
                                     WELLCOME TO PRINCIPAL-OFFICE
                                    </span>
                                    </h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                    <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M22 21H2V19H3V4C3 3.44772 3.44772 3 4 3H18C18.5523 3 19 3.44772 19 4V9H21V19H22V21ZM17 19H19V11H13V19H15V13H17V19ZM17 9V5H5V19H11V9H17ZM7 11H9V13H7V11ZM7 15H9V17H7V15ZM7 7H9V9H7V7Z"></path></svg>
                                        Events
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
                                            <span class='font-bold'>Result</span> DataBase transaction Successful
                                        </div>
                                        @elseif(session('status') == 0)
                                        <div class='bg-white dark:bg-bgdark border border-danger alert text-danger' role='alert'>
                                            <span class='font-bold'>Result</span> Error in Database transaction
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
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32"><path d="M22 21H2V19H3V4C3 3.44772 3.44772 3 4 3H18C18.5523 3 19 3.44772 19 4V9H21V19H22V21ZM17 19H19V11H13V19H15V13H17V19ZM17 9V5H5V19H11V9H17ZM7 11H9V13H7V11ZM7 15H9V17H7V15ZM7 7H9V9H7V7Z"></path></svg> 
                                                    Events Details
                                                </h5>
                                                <div class=" block ltr:ml-auto rtl:mr-auto my-auto">
                                                    <button type="button" id="events_btn" class="hs-dropdown-toggle ti-btn ti-btn-primary" data-hs-overlay="#add_event">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM5 5V19H19V5H5ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z" fill="rgba(255,255,255,1)"></path></svg>
                                                        Add Event
                                                    </button>
                                                    <div id="add_event" class="hs-overlay hidden ti-modal">
                                                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                            <div class="ti-modal-content">
                                                                <div class="ti-modal-header">
                                                                    <h3 class="ti-modal-title">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM5 5V19H19V5H5ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z"></path></svg>
                                                                        Add New Event
                                                                    </h3>
                                                                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                    data-hs-overlay="#add_event">
                                                                    <span class="sr-only">Close</span>
                                                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                        d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                        fill="currentColor" />
                                                                    </svg>
                                                                    </button>
                                                                    @if((($errors->has('event_name'))||($errors->has('location'))||($errors->has('start_date'))||($errors->has('to_date'))||($errors->has('organizers'))||($errors->has('event_website'))||($errors->has('staff_type'))))
                                                                        <script>
                                                                            // alert(1);
                                                                            $(window).on('load', function() {
                                                                                
                                                                          //  $('#pills-with-brand-color-4').trigger('click')
                                                                            $('#events_btn').trigger("click");

                                                                            }); 
                                                                        </script>
                            
                                                                    @endif
                                                                </div>
                                                                <form action="{{route('Principaloffice.poevents.store')}}" method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <div class="ti-modal-body">
                                                                        <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="with-corner-hint" class="ti-form-label font-bold">Event Name:<span class="text-red-500">*</span></label>
                                                                                <input type="text" name="event_name" class="ti-form-input po_eventname" placeholder="Event name">
                                                                                 @if($errors->has('event_name'))
                                                                                        <div class="text-red-700">{{ $errors->first('event_name') }}</div>
                                                                                @endif
                                                                                <div id="po_eventnameError" class="error text-red-700"></div>
                                                                                 
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Location:<span class="text-red-500">*</span></label>
                                                                                <input type="text" name="location" class="ti-form-input po_location" placeholder="Location">
                                                                                 @if($errors->has('location'))
                                                                                        <div class="text-red-700">{{ $errors->first('location') }}</div>
                                                                                @endif
                                                                                <div id="po_locationError" class="error text-red-700"></div>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                        {{-- <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                            <div class="flex max-w-sm space-y-3 pb-6 no no_fromdate">
                                                                                <label for="" class="ti-form-label font-bold">Start Date:<span class="text-red-500">*</span></label>
                                                                                <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                    <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                        class="ri ri-calendar-line"></i></span>
                                                                                </div>

                                                                                <input type="text" name="start_date" class="ti-form-input rounded-l-none focus:z-10 flatpickr-input  po_startdate"
                                                                                    id="datetime" placeholder="Choose date" readonly>
                                                                                     @if($errors->has('start_date'))
                                                                                        <div class="text-red-700">{{ $errors->first('start_date') }}</div>
                                                                                @endif
                                                                                    <div id="po_startdateError" class="error text-red-700"></div>
                                                                               
                                                                            </div>
                                                                            <div class="flex max-w-sm space-y-3 pb-6 no_todate">
                                                                                <label for="" class="ti-form-label font-bold">To Date: <span class="text-red-500">*</span></label>
                                                                                <div  class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                    <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                        class="ri ri-calendar-line"></i></span>
                                                                                </div>

                                                                                <input type="text" name="to_date" class="ti-form-input rounded-l-none focus:z-10 flatpickr-input  po_todate"
                                                                                    id="datetime" placeholder="Choose date" readonly>
                                                                                     @if($errors->has('to_date'))
                                                                                            <div class="text-red-700">{{ $errors->first('to_date') }}</div>
                                                                                     @endif
                                                                                    <div id="po_todateError" class="error text-red-700"></div>
                                                                                    
                                                                            </div>
                                                                           
                                                                        </div> --}}



                                                                        <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                            <div class="flex max-w-sm space-y-3 pb-6 no no_fromdate">
                                                                                <label for="start_date" class="ti-form-label font-bold">Start Date:<span class="text-red-500">*</span></label>
                                                                                <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                    <span class="text-sm text-gray-500 dark:text-white/70"><i class="ri ri-calendar-line"></i></span>
                                                                                </div>
                                                                                <input type="text" name="start_date" class="ti-form-input rounded-l-none focus:z-10 flatpickr-input po_startdate" id="start_date" placeholder="Choose date" readonly>
                                                                                @if($errors->has('start_date'))
                                                                                    <div class="text-red-700">{{ $errors->first('start_date') }}</div>
                                                                                @endif
                                                                                <div id="po_startdateError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="flex max-w-sm space-y-3 pb-6 no_todate">
                                                                                <label for="to_date" class="ti-form-label font-bold">To Date: <span class="text-red-500">*</span></label>
                                                                                <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                    <span class="text-sm text-gray-500 dark:text-white/70"><i class="ri ri-calendar-line"></i></span>
                                                                                </div>
                                                                                <input type="text" name="to_date" class="ti-form-input rounded-l-none focus:z-10 flatpickr-input po_todate" id="to_date" placeholder="Choose date" readonly>
                                                                                @if($errors->has('to_date'))
                                                                                    <div class="text-red-700">{{ $errors->first('to_date') }}</div>
                                                                                @endif
                                                                                <div id="po_todateError" class="error text-red-700"></div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                       
                                                                        

                                                                        <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Organizer:<span class="text-red-500">*</span></label>
                                                                                <input type="text" name="organizers" class="ti-form-input po_organizer" placeholder="Organizer">
                                                                                 @if($errors->has('organizers'))
                                                                                            <div class="text-red-700">{{ $errors->first('organizers') }}</div>
                                                                                 @endif
                                                                                <div id="po_organizerError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Event Website Link:</label>
                                                                                <input type="url" name="event_website" class="ti-form-input po_weblink" placeholder="https://google.com">
                                                                                @if($errors->has('event_website'))
                                                                                        <div class="text-red-700">{{ $errors->first('event_website') }}</div>
                                                                                 @endif
                                                                                <div id="po_weblinkError" class="error text-red-700"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Employee Type:<span class="text-red-500">*</span></label>
                                                                                <select class="ti-form-select po_employeetype" name="staff_type">
                                                                                    <option  value="#">Choose One</option>
                                                                                    <option  value="Teaching">Teaching</option>
                                                                                    <option value="Non-Teaching">Non-Teaching</option>
                                                                                    <option value="All">All</option>
                                                                                </select>
                                                                                 @if($errors->has('staff_type'))
                                                                                        <div class="text-red-700">{{ $errors->first('staff_type') }}</div>
                                                                                 @endif
                                                                                <div id="po_employeetypeError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <!--Dropdown multiselect checkbox-->
                                                                            <div class="grid lg:grid-cols-1 gap-1 space-y-2 lg:space-y-0">
                                                                                <label class="ti-form-label mb-0 font-bold">Department List<span class="text-red-500">*</span></label>
                                                                                <div class="space-y-2" style="max-height: 100px; overflow-y: auto;">
                                                                                    @php
                                                                                        $checked = "";
                                                                                    @endphp

                                                                                    <div class="flex">
                                                                                        <input type="checkbox" class="ti-form-checkbox mt-0.5 select-all">
                                                                                        <label for="select-all" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70 font-bold">Select All</label>
                                                                                    </div>

                                                                                    @foreach ($departments as $department)
                                                                                        <div class="flex">
                                                                                            <input type="checkbox" name="departments[]" value="{{ $department->id }}" {{ $checked }} class="ti-form-checkbox mt-0.5 hs-checkbox-group-{{ $department->id }}">
                                                                                            <label class="hs-checkbox-group-{{ $department->id }} text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">{{ $department->dept_name }}</label>
                                                                                        </div>
                                                                                    @endforeach
                                                                                    
                                                                                </div>
                                                                                <div id="departmentsError" class="text-red-500"></div>
                                                                            </div> 
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label">Attachment :</label>
                                                                                <input type="file" name="attachment" class="ti-form-input" accept="image/*" placeholder="Choose an image">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ti-modal-footer">
                                                                        <button type="button"
                                                                        class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                        data-hs-overlay="#add_event">
                                                                        Close
                                                                        </button>
                                                                        <input type="submit" id="principaloffice_store_add_btn" class="ti-btn  bg-primary text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10" value="Add"/>
                                                                        
                                                                    </div>
                                                                </form>  
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="table-bordered table-auto rounded-sm ti-striped-table ti-custom-table-head overflow-auto">
                                                <table id="events_table" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                    <thead class="bg-gray-50 dark:bg-black/20">
                                                        <tr class="">
                                                            <th scope="col" class="w-1/4 dark:text-white/80">S.no</th>
                                                            <th scope="col" class="dark:text-white/80">Event Name</th>
                                                            <th scope="col" class="dark:text-white/80">Location</th>
                                                            <th scope="col" class="dark:text-white/80">start Date</th>
                                                            <th scope="col" class="dark:text-white/80">To Date</th>
                                                            <th scope="col" class="dark:text-white/80">Organizer</th>
                                                            <th scope="col" class="dark:text-white/80">Websites Link</th>
                                                            <th scope="col" class="dark:text-white/80">Employee Type</th>
                                                            <th scope="col" class="dark:text-white/80">Departments</th>
                                                            <th scope="col" class="dark:text-white/80">Attachment</th>
                                                            <th scope="col" class="dark:text-white/80">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="">
                                                        @php
                                                            $i = 1;
                                                        @endphp
                                                        @forelse($deptevent as $ev)
                                                            <tr class="">
                                                                <td><span>{{$i++}}</span></td>
                                                                <td><span>{{$ev->event_name}}</span></td>
                                                                <td><span>{{$ev->location}}</span></td>
                                                                <td><span>{{ \Carbon\Carbon::parse($ev->start_date)->format('d-M-Y H:i') }}</span></td>
                                                                <td><span>{{ \Carbon\Carbon::parse($ev->to_date)->format('d-M-Y H:i') }}</span></td>
                                                                <td><span>{{$ev->organizers}}</span></td>
                                                                {{-- <td><span>{{$ev->event_website}}</span></td> --}}
                                                                <td>
                                                                    <a href="{{ $ev->event_website }}" target="_blank" rel="noopener noreferrer" class="text-blue-500 hover:underline">
                                                                        <span class="text-blue-500">{{$ev->event_website}}</span>
                                                                    </a>
                                                                </td>
                                                                
                                                                <td><span>{{$ev->staff_type}}</span></td>
                                                                <td>
                                                                    @foreach($ev->department as $department)
                                                                        <span>{{$department->dept_shortname}}</span>
                                                                        
                                                                    @endforeach
                                                                </td>

                                                                <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                                    <div class="hs-tooltip ti-main-tooltip text-center">
                                                                        <button data-hs-overlay="#image_view_modal{{$i}}"
                                                                            class="hs-dropdown-toggle m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M21 3C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H21ZM20 5H4V19H20V5ZM18 15V17H6V15H18Z"></path></svg>
                                                                            <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">image</span>
                                                                        </button>
                                                                        <div id="image_view_modal{{$i}}" class="hs-overlay hidden ti-modal">
                                                                            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                                                <div class="ti-modal-content">
                                                                                    <div class="ti-modal-header">
                                                                                        IMAGE VIEW
                                                                                    </div>
                                                                                    <div class="ti-modal-body">
                                                                                        <img src="{{ asset('storage/attachments/' . $ev->attachment) }}" alt="Event attachment">
                                                                                    </div>
                                                                                
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                {{-- <td>{{$ev->attachment}}</td> --}}

                                                                <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <button data-hs-overlay="#events_edit_modal{{$i}}"  id="btn{{$i}}" btn-val={{$i}}
                                                                    class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary events_edit_modal_click">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                        <span
                                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                            role="tooltip">
                                                                            Edit
                                                                        </span>
                                                                    </button>
                                                                    <div id="events_edit_modal{{$i}}" class="hs-overlay hidden ti-modal">
                                                                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                                            <div class="ti-modal-content">
                                                                                <div class="ti-modal-header">
                                                                                    <h3 class="ti-modal-title">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                        Edit Events
                                                                                    </h3>
                                                                                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                                        data-hs-overlay="#events_edit_modal">
                                                                                        <span class="sr-only">Close</span>
                                                                                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <path
                                                                                            d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                            fill="currentColor" />
                                                                                        </svg>
                                                                                    </button>
                                                                                    @if((($errors->has('e_event_name'))||($errors->has('e_location'))||($errors->has('e_start_date'))||($errors->has('e_to_date'))||($errors->has('e_organizers'))||($errors->has('e_event_website'))||($errors->has('e_staff_type'))))
                                                                                        <script>
                                                                                            // alert(1);
                                                                                            $(window).on('load', function() {
                                                                                            
                                                                                            }); 
                                                                                            
                                                                                        </script>
                                                                                    @endif
                                                                                </div>
                                                                                <form action="{{route('Principaloffice.poevents.update',$ev->id)}}" method="post" enctype="multipart/form-data">
                                                                                    @csrf
                                                                                    @method('patch')
                                                                                     <div class="ti-modal-body">
                                                                                      <input type='hidden' name='event_modal_no' class='event_modal_no' value={{old('event_modal_no')}}/>
                                                                                        <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                <label for="with-corner-hint" class="ti-form-label font-bold">Event Name:<span class="text-red-500">*</span></label>
                                                                                                <input type="text" name="e_event_name" class="ti-form-input" placeholder="Event name" value="{{$ev->event_name}}">
                                                                                                 @if($errors->has('e_event_name'))
                                                                                                     <div class="text-red-700">{{ $errors->first('e_event_name') }}</div>
                                                                                                @endif
                                                                                                
                                                                                            </div>
                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                <label for="" class="ti-form-label font-bold">Location:<span class="text-red-500">*</span></label>
                                                                                                <input type="text" name="e_location" class="ti-form-input" placeholder="Location" value="{{$ev->location}}">
                                                                                                   @if($errors->has('e_location'))
                                                                                                     <div class="text-red-700">{{ $errors->first('e_location') }}</div>
                                                                                                @endif
                                                                                                
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                            <div class="flex max-w-sm space-y-3 pb-6 no no_fromdate">
                                                                                                <label for="" class="ti-form-label font-bold">Start Date:<span class="text-red-500">*</span></label>
                                                                                                <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                    <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                                        class="ri ri-calendar-line"></i></span>
                                                                                                </div>

                                                                                                <input type="text" name="e_start_date" class="ti-form-input rounded-l-none focus:z-10 flatpickr-input"
                                                                                                    id="datetime" placeholder="Choose date" readonly value="{{$ev->start_date}}">
                                                                                                      @if($errors->has('e_start_date'))
                                                                                                            <div class="text-red-700">{{ $errors->first('e_start_date') }}</div>
                                                                                                    @endif
                                                                                                    
                                                                                            </div>
                                                                                            <div class="flex max-w-sm space-y-3 pb-6 no_todate">
                                                                                                <label for="" class="ti-form-label font-bold">To Date: <span class="text-red-500">*</span></label>
                                                                                                <div  class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                    <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                                        class="ri ri-calendar-line"></i></span>
                                                                                                </div>

                                                                                                <input type="text" name="e_to_date" class="ti-form-input rounded-l-none focus:z-10 flatpickr-input"
                                                                                                    id="datetime" placeholder="Choose date" readonly value="{{$ev->to_date}}">
                                                                                                    @if($errors->has('e_to_date'))
                                                                                                            <div class="text-red-700">{{ $errors->first('e_to_date') }}</div>
                                                                                                    @endif
                                                                                                    
                                                                                            </div>
                                                                                        
                                                                                        </div>
                                                                                        
                                                                                        <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                <label for="" class="ti-form-label font-bold">Organizer:<span class="text-red-500">*</span></label>
                                                                                                <input type="text" name="e_organizers" class="ti-form-input" required placeholder="Organizer" value="{{$ev->organizers}}">
                                                                                                  @if($errors->has('e_organizers'))
                                                                                                            <div class="text-red-700">{{ $errors->first('e_organizers') }}</div>
                                                                                                    @endif

                                                                                                
                                                                                            </div>
                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                <label for="" class="ti-form-label font-bold">Event Website Link:</label>
                                                                                                <input type="url" name="e_event_website" class="ti-form-input po_weblink" placeholder="https://google.com" value="{{$ev->event_website}}">
                                                                                                  @if($errors->has('e_event_website'))
                                                                                                            <div class="text-red-700">{{ $errors->first('e_event_website') }}</div>
                                                                                                    @endif
                                                                                                
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                <label for="" class="ti-form-label font-bold">Employee Type:<span class="text-red-500">*</span></label>
                                                                                                <select class="ti-form-select" name="e_staff_type">
                                                                                                    <option  value="#">Choose One</option>
                                                                                                    <option  value="Teaching" {{($ev->staff_type=='Teaching'? 'selected':'')}}>Teaching</option>
                                                                                                    <option value="Non-Teaching" {{($ev->staff_type=='Non-Teaching'? 'selected':'')}}>Non-Teaching</option>
                                                                                                    <option value="All" {{($ev->staff_type=='All'? 'selected':'')}}>All</option>
                                                                                                </select>
                                                                                                @if($errors->has('e_staff_type'))
                                                                                                    <div class="text-red-700">{{ $errors->first('e_staff_type') }}</div>
                                                                                                @endif
                                                                                               
                                                                                            </div>
                                                                                            {{-- <div class="grid lg:grid-cols-1 gap-1 space-y-2 lg:space-y-0">
                                                                                                <label class="ti-form-label mb-0 font-bold">Department List<span class="text-red-500">*</span></label>
                                                                                                <div class="space-y-2" style="max-height: 100px; overflow-y: auto;">
                                                                                                    @php
                                                                                                        $checked = "";
                                                                                                    @endphp

                                                                                                    <div class="flex">
                                                                                                        <input type="checkbox" class="ti-form-checkbox mt-0.5 select-all">
                                                                                                        <label for="select-all" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70 font-bold">Select All</label>
                                                                                                    </div>

                                                                                                    @foreach ($departments as $department)
                                                                                                        <div class="flex">
                                                                                                            <input type="checkbox" name="departments[]" value="{{ $department->id }}" {{ $checked }} class="ti-form-checkbox mt-0.5 hs-checkbox-group-{{ $department->id }}">
                                                                                                            <label class="hs-checkbox-group-{{ $department->id }} text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">{{ $department->dept_name }}</label>
                                                                                                        </div>
                                                                                                    @endforeach
                                                                                                </div>
                                                                                                <!--Dropdown multiselect checkbox-->
                                                                                            </div>  --}}

                                                                                            <div class="grid lg:grid-cols-1 gap-1 space-y-2 lg:space-y-0">
                                                                                                <label class="ti-form-label mb-0 font-bold">Department List<span class="text-red-500">*</span></label>
                                                                                                <div class="space-y-2" style="max-height: 100px; overflow-y: auto;">
                                                                                                    <div class="flex">
                                                                                                        <input type="checkbox" class="ti-form-checkbox mt-0.5 select-all">
                                                                                                        <label for="select-all" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70 font-bold">Select All</label>
                                                                                                    </div>
                                                                                                    @foreach ($departments as $department)
                                                                                                        @php
                                                                                                            $checked = in_array($department->id, $selectedDepartments) ? 'checked' : '';
                                                                                                        @endphp
                                                                                                        <div class="flex">
                                                                                                            <input type="checkbox" required name="departments[]" value="{{ $department->id }}" {{ $checked }} class="ti-form-checkbox mt-0.5 hs-checkbox-group-{{ $department->id }}">
                                                                                                            <label class="hs-checkbox-group-{{ $department->id }} text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">{{ $department->dept_name }}</label>
                                                                                                        </div>
                                                                                                    @endforeach
                                                                                                </div>
                                                                                                <!--Dropdown multiselect checkbox-->
                                                                                            </div>
                                                                                            
                                                                                        </div>

                                                                                        
                                                                                        <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                            <div class="max-w-sm space-y-3 pb-6 ">
                                                                                                <label for="" class="ti-form-label mb-0 font-bold">Attachment:<span class="text-red-500"> {{$ev->attachment}}</span></label>
                                                                                                <input type="file" name="attachment" class="ti-form-input" accept="image/*" placeholder="Choose an image" value="{{ old('attachment', $ev->attachment) }}">
                                                                                            </div>
                                                                                        </div>
                                                                                        
                                                                                    </div>
                                                                                    <div class="ti-modal-footer">
                                                                                        <button type="button"
                                                                                        class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                        data-hs-overlay="#events_edit_modal{{$i}}">
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
                                                                    <form action="{{route('Principaloffice.poevents.destroy',$ev->id)}}" method="post">
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
                                                                <p class="text-dark"><b>No Events Added.</b></p>
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
                    {{-- Include the teaching dashboard if the user is teaching --}}
    

@endsection

@section('scripts')

        <!-- APEX CHARTS JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- FLATPICKR JS -->
        <script src="{{asset('build/assets/libs/flatpickr/flatpickr.min.js')}}"></script>
        @vite('resources/assets/js/flatpickr.js')
        <!-- Include Select2 CSS -->
        <script
            src="https://code.jquery.com/jquery-3.7.1.js"
            integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
            crossorigin="anonymous">
        </script>
        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/dataTables.tailwindcss.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script src="path/to/your/script.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">




        <script>
            
            $(document).ready(function () {
                $('.select-all').change(function () {
                    $('input[name="departments[]"]').prop('checked', this.checked);
                });
                
                
                new DataTable('#events_table');

                $('.po_todate').on('change', function() {
                    var startDate = $('.po_startdate').val();
                    var toDate = $('.po_todate').val();

                    if (new Date(toDate) < new Date(startDate)) {
                        $('#po_todateError').text('To Date must be greater than or equal to Start Date');
                        $('.po_todate').val('');
                    } else {
                        $('.po_todateError').text('');
                    }
                });

                


                //Frontend validation
                function isValidUrl(url) {
                    var urlRegex = /^(https?|ftp):\/\/[^\s/$.?#].[^\s]*$/;
                    return urlRegex.test(url);
                }
                $(document).on('click','#principaloffice_store_add_btn',function(e){
                    //alert(123)
                    var po_eventname = $('.po_eventname').val();
                    var po_location = $('.po_location').val();
                    var po_startdate = $('.po_startdate').val();
                    var po_todate = $('.po_todate').val();
                    var po_organizer = $('.po_organizer').val();
                    var po_weblink = $('.po_weblink').val();
                    var po_employeetype = $('.po_employeetype').val();
                    var checkedBoxes = $("input[name='departments[]']:checked");

                    var flag = false;

                    if(po_eventname == ''){
                        $('#po_eventnameError').text('Event Name is missing');
                        flag = true;
                    }else if (!/^[a-zA-Z\s]+$/.test(po_eventname.trim())){
                        $('#po_eventnameError').text('Please fill the correct value');
                        flag = true;
                    }
                    if(po_location == ''){
                        $('#po_locationError').text('Location is missing');
                        flag = true;
                    }else if (!/^[a-zA-Z\s]+$/.test(po_location.trim())){
                        $('#po_locationError').text('Please fill the correct value');
                        flag = true;
                    }
                    if(po_startdate.trim() === ''){
                        $('#po_startdateError').text('Please Select a proper date');
                        flag = true;
                    }
                    if(po_todate.trim() === ''){
                        $('#po_todateError').text('Please Select a proper date');
                        flag = true;
                    }
                    if(po_organizer == ''){
                        $('#po_organizerError').text('Organizer is missing');
                        flag = true;
                    }else if (!/^[a-zA-Z\s]+$/.test(po_organizer.trim())){
                        $('#po_organizerError').text('Please fill the correct value');
                        flag = true;
                    }
                    if (po_weblink == '') {
                        $('#po_weblinkError').text('Web link is missing');
                        flag = true;
                    } else if (!isValidUrl(po_weblink)) {
                        $('#po_weblinkError').text('Please enter a valid web link');
                        flag = true;
                    }
                    
                    if(po_employeetype == '#'){
                        $('#po_employeetypeError').text('Please Choose a correct option');
                        flag = true;
                    }

                    //department list validation
                    if (checkedBoxes.length === 0) {
                        $('#departmentsError').text('Please select at least one department.');
                        flag = true;
                    } else {
                        $('#departmentsError').text('');
                    }


                    if(flag == true){
                        e.preventDefault();
                    }
                });
                

                //Validation for events
                $(document).on('click','.events_edit_modal_click',function(){
                    //var 
                    var event_modal_no = $(this).attr("btn-val");
                    
                    //alert($(this).find('.caste_edit_modal_no').val());
                    $('.event_modal_no').val(event_modal_no); 
                });

                
            });

        </script>


        <script>

            //working as per requirement
            document.addEventListener('DOMContentLoaded', function () {
                flatpickr('.po_startdate', {
                    enableTime: true,
                    dateFormat: 'Y-m-d H:i',
                    // Add more options if required
                });

                flatpickr('.po_todate', {
                    enableTime: true,
                    dateFormat: 'Y-m-d H:i',
                    // Add more options if required
                });

                $('.po_todate').on('change', function() {
                    var startDate = new Date($('.po_startdate').val());
                    var toDate = new Date($('.po_todate').val());

                    if (toDate < startDate) {
                        $('#po_todateError').text('To Date must be equal to or greater than Start Date');
                        $('.po_todate').val('');
                    } else {
                        $('#po_todateError').text('');
                    }

                    var startTime = $('.po_startdate').val().split(' ')[1];
                    var endTime = $('.po_todate').val().split(' ')[1];

                    if (startTime && endTime) {
                        if (endTime <= startTime) {
                            $('#po_todateError').text('To Time must be greater than Start Time');
                            $('.po_todate').val('');
                        } else {
                            $('#po_todateError').text('');
                        }
                    }
                });
            });



            // document.addEventListener('DOMContentLoaded', function () {
            //     // Initialize flatpickr without default dates
            //     flatpickr('.po_startdate', {
            //         enableTime: true,
            //         dateFormat: 'Y-m-d H:i',
            //         defaultDate: null  // Ensure no default date is set
            //     });

            //     flatpickr('.po_todate', {
            //         enableTime: true,
            //         dateFormat: 'Y-m-d H:i',
            //         defaultDate: null  // Ensure no default date is set
            //     });

            //     $('.po_todate').on('change', function() {
            //         var startDateTimeStr = $('.po_startdate').val();
            //         var toDateTimeStr = $('.po_todate').val();

            //         if (!startDateTimeStr || !toDateTimeStr) {
            //             return;
            //         }

            //         var startDate = new Date(startDateTimeStr);
            //         var toDate = new Date(toDateTimeStr);

            //         if (toDate < startDate) {
            //             $('#po_todateError').text('To Date must be equal to or greater than Start Date');
            //             $('.po_todate').val('');
            //         } else if (startDateTimeStr === toDateTimeStr) {
            //             $('#po_todateError').text('To Date and Time must be different from Start Date and Time');
            //             $('.po_todate').val('');
            //         } else {
            //             $('#po_todateError').text('');
            //         }
            //     });

            //     $('.po_startdate').on('change', function() {
            //         // Clear the "To Date" and error message if the "Start Date" is changed
            //         $('.po_todate').val('');
            //         $('#po_todateError').text('');
            //     });
            // });

        </script>

        @vite('resources/assets/js/index-8.js')
       
@endsection