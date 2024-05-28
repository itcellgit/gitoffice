@extends('layouts.components.Ticketing.master-ticketing')


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
                            <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Welcome <span class="text-primary">{{$staff->fname.' '.$staff->mname.' '.$staff->lname}}</span></h3>
                            
                        </div>
                        <div>
                            <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"><span class="text-primary"></span></h3>
                        </div>
                            <ol class="flex items-center whitespace-nowrap min-w-0">
                                <li class="text-sm">
                                    <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        My Dashboard-tickets
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                    </a>
                                </li>
                            </ol>
                    </div>
                        <!-- Page Header Close -->

                        <!-- Start::row-1 -->
                        <div class="grid grid-cols-12 gap-x-5">
                                <div class="col-span-12 md:col-span-6 xxl:col-span-3">   
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="flex">
                                                <div class="ltr:mr-3 rtl:ml-3">
                                                    <div class="avatar rounded-sm text-primary p-2.5 bg-primary/20 "><i 
                                                        class="ti ti-users text-2xl leading-none"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-1">
                                                    <p class="text-sm font-bold">Total Ticket Raised</p>
                                                    <div class="flex justify-between items-center">
                                                        <h5 class="mb-0 text-2xl font-semibold text-gray-800 dark:text-white">{{10}}</h5>
                                                        <span class="text-success badge bg-success/20 rounded-sm p-1"><i
                                                            class="ti ti-trending-up leading-none"></i> +1.03%
                                                        </span>
                                                    </div>
                                                    <a class="flex  items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="#">
                                                            view
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 md:col-span-6 xxl:col-span-3">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="flex">
                                                <div class="ltr:mr-3 rtl:ml-3">
                                                    <div class="avatar rounded-sm text-secondary p-2.5 bg-secondary/20"><i
                                                        class="ti ti-users-minus text-2xl leading-none"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-1">
                                                    <p class="text-sm font-bold">Total Ticket Recived</p>
                                                    <div class="flex justify-between items-center">
                                                        <h5 class="mb-0 text-2xl font-semibold text-gray-800 dark:text-white">{{10}}</h5>
                                                        <span class="text-success badge bg-success/20 rounded-sm p-1"><i
                                                            class="ti ti-trending-up leading-none"></i> +0.36%</span>
                                                    </div>
                                                    <a class="flex  items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="#">
                                                        view
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 md:col-span-6 xxl:col-span-3">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="flex">
                                            <div class="ltr:mr-3 rtl:ml-3">
                                                <div class="avatar rounded-sm text-warning p-2.5 bg-warning/20 "><i
                                                    class="ti ti-briefcase text-2xl leading-none"></i></div>
                                            </div>
                                            <div class="flex-1">
                                                <p class="text-sm font-bold">Total Ticket Resolved</p>
                                                <div class="flex justify-between items-center">
                                                <h5 class="mb-0 text-2xl font-semibold text-gray-800 dark:text-white">{{10}}</h5>
                                                <span class="text-success badge bg-success/20 rounded-sm p-1"><i
                                                    class="ti ti-trending-up leading-none"></i> +1.03%</span>
                                                </div>
                                                <a class="flex  items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="#">
                                                        view
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="col-span-12 md:col-span-6 xxl:col-span-3">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="flex">
                                            <div class="ltr:mr-3 rtl:ml-3">
                                                <div class="avatar rounded-sm text-warning p-2.5 bg-warning/20 "><i
                                                    class="ti ti-briefcase text-2xl leading-none"></i>
                                                </div>
                                            </div>
                                            <div class="flex-1">
                                                <p class="text-sm font-bold">Status</p>
                                                <div class="flex justify-between items-center">
                                                <h5 class="mb-0 text-2xl font-semibold text-gray-800 dark:text-white">{{10}}</h5>
                                                <span class="text-success badge bg-success/20 rounded-sm p-1"><i
                                                    class="ti ti-trending-up leading-none"></i> +1.03%</span>
                                                </div>
                                                <a class="flex  items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="#">
                                                    view
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <!-- End::row-1 -->
                            

                            <!-- Start::row-2 -->
                        <div>
                            <div class="box">
                                <div class="box-body">
                                    <div class="col-span-12 md:col-span-6 xxl:col-span-3">
                                        <div class="box-header">
                                            <div class="flex">
                                                <h5 class="box-title my-auto">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32"><path d="M22 21H2V19H3V4C3 3.44772 3.44772 3 4 3H18C18.5523 3 19 3.44772 19 4V9H21V19H22V21ZM17 19H19V11H13V19H15V13H17V19ZM17 9V5H5V19H11V9H17ZM7 11H9V13H7V11ZM7 15H9V17H7V15ZM7 7H9V9H7V7Z"></path></svg> 
                                                    Ticketing Details
                                                </h5>
                                            </div>
                                            <div class=" block ltr:ml-auto rtl:mr-auto my-auto">
                                                <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary" data-hs-overlay="#hs-medium-modal">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM5 5V19H19V5H5ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z" fill="rgba(255,255,255,1)"></path></svg>
                                                    Add Ticket
                                                </button>
                                                <div id="hs-medium-modal" class="hs-overlay hidden ti-modal">
                                                    <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                                        <div class="ti-modal-content">
                                                        <div class="ti-modal-header">
                                                            <h3 class="ti-modal-title">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM5 5V19H19V5H5ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z"></path></svg>
                                                                Add New Ticket
                                                            </h3>
                                                            <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                data-hs-overlay="#hs-medium-modal">
                                                                <span class="sr-only">Close</span>
                                                                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                fill="currentColor" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <form  action="{{route('ticket.store')}}" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="ti-modal-body">
                                                                <div class="max-w-sm space-y-3 pb-6">
                                                                    <label for="with-corner-hint" class="ti-form-label">My Issue: </label>
                                                                    <input type="text" name="title" class="ti-form-input" required placeholder="myissue" id="myissue" value="{{ old('title') }}">
                                                                    <div id="myissueError" class="error text-red-700"></div>
                                                                </div>
                                                                <div class="max-w-sm space-y-3 pb-6">
                                                                    <label for="" class="ti-form-label">Description:</label>
                                                                    <textarea name="description" class="ti-form-input" required placeholder="Please Describe the issue here... " style="width: 100%; height: 150px;" id="description" value="{{ old('description') }}"></textarea>
                                                                    <div id="descriptionError" class="error text-red-700"></div>

                                                                </div>
                                                                {{-- single image  --}}
                                                                {{-- <div class="max-w-sm space-y-3 pb-6">
                                                                    <label for="" class="ti-form-label">Attachment:</label>
                                                                    <input type="file" name="attachment" class="ti-form-input" accept="image/*" placeholder="Choose an image">
                                                                </div> --}}
                                                                {{-- single image ends here  --}}
                                                                <div class="max-w-sm space-y-3 pb-6">
                                                                    <label for="attachment" class="ti-form-label">Attachment:</label>
                                                                    <input type="file" name="attachment[]" id="attachment" class="ti-form-input" accept="image/*" multiple placeholder="Choose images">
                                                                    <h3>select multiple images</h3>
                                                                </div>
                                                                 <div class="ti-modal-footer">
                                                                            <button type="button"
                                                                                class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                data-hs-overlay="#hs-medium-modal">
                                                                                Close
                                                                            </button>
                                                                            <input type="submit" id="ticket_store_add_btn" class="ti-btn  bg-primary text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10" value="Add"/>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                        </form>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                            <div class="box-body">
                                                <div class="table-bordered table-auto rounded-sm ti-striped-table ti-custom-table-head overflow-auto">
                                                <table id="Ticketing_table" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                    <thead class="bg-gray-50 dark:bg-black/20">
                                                        <tr class="">
                                                            <th scope="col" class="dark:text-white/80">SL.No</th>
                                                            <th scope="col" class="dark:text-white/80">@sortablelink('My Issue','My Issue')</th>
                                                            <th scope="col" class="dark:text-white/80">@sortablelink('description','description')</th>
                                                            <th scope="col" class="dark:text-white/80">@sortablelink('attachment','attachment')</th>
                                                            <th scope="col" class="dark:text-white/80">Ticket Status</th>
                                                            <th scope="col" class="dark:text-white/80">Action</th>
                                                        </tr>
                                                    </thead>
                                                        <tbody class="">
                                                        @php
                                                            $i = 1;
                                                        @endphp
                                                        @if($tickets!=null)
                                                            @forelse($tickets as $ticket)
                                                                <tr class="">
                                                                    <td>{{ $i++ }}</td>
                                                                <td>
                                                                <div class="flex space-x-3 rtl:space-x-reverse w-full min-w-[200px]">
                                                                    <div class="block w-full my-auto">
                                                                        {{$ticket->title}}
                                                                    </div>
                                                                </div>
                                                                </td>
                                                                <td><span>{{$ticket->description}}</span></td>
                                                                {{-- <td><span>{{$ticket->attachment}}</span></td> --}}
                                                                {{-- <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                                    <div class="hs-tooltip ti-main-tooltip">
                                                                        @if ($ticket->attachment)
                                                                            <a href="#" onclick="showLargeImage('{{ asset('attachment/'.$ticket->attachment)}}')">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M14 13.5V8C14 5.79086 12.2091 4 10 4C7.79086 4 6 5.79086 6 8V13.5C6 17.0899 8.91015 20 12.5 20C16.0899 20 19 17.0899 19 13.5V4H21V13.5C21 18.1944 17.1944 22 12.5 22C7.80558 22 4 18.1944 4 13.5V8C4 4.68629 6.68629 2 10 2C13.3137 2 16 4.68629 16 8V13.5C16 15.433 14.433 17 12.5 17C10.567 17 9 15.433 9 13.5V8H11V13.5C11 14.3284 11.6716 15 12.5 15C13.3284 15 14 14.3284 14 13.5Z"></path></svg>
                                                                            </a>
                                                                        @else
                                                                            <!-- Placeholder image or alternative content -->
                                                                            <span class="no-image-text">No Image</span>
                                                                        @endif
                                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm" role="tooltip">
                                                                            attachment
                                                                        </span>
                                                                    </div>
                                                                </td> --}}
                                                                <!---ro code here-->
                                                                <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                                    <div class="hs-tooltip ti-main-tooltip text-center">
                                                                        <button data-hs-overlay="#image_view_modal{{$i}}"
                                                                            class="hs-dropdown-toggle m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M14 13.5V8C14 5.79086 12.2091 4 10 4C7.79086 4 6 5.79086 6 8V13.5C6 17.0899 8.91015 20 12.5 20C16.0899 20 19 17.0899 19 13.5V4H21V13.5C21 18.1944 17.1944 22 12.5 22C7.80558 22 4 18.1944 4 13.5V8C4 4.68629 6.68629 2 10 2C13.3137 2 16 4.68629 16 8V13.5C16 15.433 14.433 17 12.5 17C10.567 17 9 15.433 9 13.5V8H11V13.5C11 14.3284 11.6716 15 12.5 15C13.3284 15 14 14.3284 14 13.5Z"></path></svg>
                                                                            <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">Attachment</span>
                                                                            <span class="sr-only">Close</span>
                                                                           
                                                                        </button>
                                                                            <div id="image_view_modal{{$i}}" class="hs-overlay hidden ti-modal">
                                                                                <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                                                    <div class="ti-modal-content">
                                                                                        <div class="ti-modal-header">
                                                                                            Attachment
                                                                                            <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                                                data-hs-overlay="#image_view_modal{{$i}}">
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
                                                                                                @if(!empty($ticket->attachment))
                                                                                                @php
                                                                                                    $attachments = is_array(json_decode($ticket->attachment, true)) ? json_decode($ticket->attachment, true) : [$ticket->attachment];
                                                                                                @endphp
                                                                                        
                                                                                                {{-- @foreach($attachments as $at)
                                                                                                    <img src="{{ asset('storage/attachment/' . $at) }}" alt="No Image" class="mb-2">
                                                                                                @endforeach --}}

                                                                                               
                                                                                                @foreach($attachments as $key => $at)
                                                                                                    <div class="mb-4">
                                                                                                        <h3 class="mb-2">Image {{ $key + 1 }}</h3>
                                                                                                        <img src="{{ asset('storage/attachment/' . $at) }}" alt="No Image" class="mb-2">
                                                                                                    </div>
                                                                                                @endforeach

                                                                                            @else
                                                                                                <p>No attachments available.</p>
                                                                                            @endif
                                                                                            
                                                                                                {{-- <img src="{{ asset('attachment/' .$ticket->attachment) }}" alt="No Image"> --}}
                                                                                            </div>
                                                                                                                                                
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                    </div>
                                                                </td>
                                                              <!--rocode ends here--->  
                                                                <td><span>{{$ticket->status}}</span></td>
                                                                <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                        <a href="{{route('ticket.show',$ticket->id)}}"
                                                                            class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12.0003 3C17.3924 3 21.8784 6.87976 22.8189 12C21.8784 17.1202 17.3924 21 12.0003 21C6.60812 21 2.12215 17.1202 1.18164 12C2.12215 6.87976 6.60812 3 12.0003 3ZM12.0003 19C16.2359 19 19.8603 16.052 20.7777 12C19.8603 7.94803 16.2359 5 12.0003 5C7.7646 5 4.14022 7.94803 3.22278 12C4.14022 16.052 7.7646 19 12.0003 19ZM12.0003 16.5C9.51498 16.5 7.50026 14.4853 7.50026 12C7.50026 9.51472 9.51498 7.5 12.0003 7.5C14.4855 7.5 16.5003 9.51472 16.5003 12C16.5003 14.4853 14.4855 16.5 12.0003 16.5ZM12.0003 14.5C13.381 14.5 14.5003 13.3807 14.5003 12C14.5003 10.6193 13.381 9.5 12.0003 9.5C10.6196 9.5 9.50026 10.6193 9.50026 12C9.50026 13.3807 10.6196 14.5 12.0003 14.5Z"></path></svg>
                                                                            <span
                                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm"
                                                                            role="tooltip">
                                                                            View
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="hs-tooltip ti-main-tooltip">
                                                                            <button data-hs-overlay="#tickets_edit_modal{{$i}}"
                                                                            class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                <span
                                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                    role="tooltip">
                                                                                    Edit
                                                                                </span>
                                                                            </button>
                                                                            <div id="tickets_edit_modal{{$i}}" class="hs-overlay hidden ti-modal">
                                                                            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                                                                <div class="ti-modal-content">
                                                                                <div class="ti-modal-header">
                                                                                    <h3 class="ti-modal-title">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                        Edit tickets
                                                                                    </h3>
                                                                                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                                        data-hs-overlay="#hs-medium-modal">
                                                                                        <span class="sr-only">Close</span>
                                                                                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <path
                                                                                            d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                            fill="currentColor" />
                                                                                        </svg>
                                                                                    </button>
                                                                                </div>
                                                                                <form  action="{{route('ticket.update',$ticket->id)}}" method="post" enctype="multipart/form-data"> 
                                                                                    @csrf
                                                                                    @method('patch')
                                                                                    <div class="ti-modal-body">
                                                                                    
                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                            <label for="with-corner-hint" class="ti-form-label">My Issue: </label>
                                                                                            <input type="text" name="title" class="ti-form-input" required placeholder="my issue" value = "{{$ticket->title}}">
                                                                                    
                                                                                        </div>
                                                                                      
                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                            <label for="description" class="ti-form-label">Description:</label>
                                                                                            <textarea name="description" class="ti-form-input" required placeholder="Please describe the issue here..." style="width: 100%; height: 150px;">{{$ticket->description}}</textarea>
                                                                                        </div>
                                                                                        
                                                                                        {{-- <div class="max-w-sm space-y-3 pb-6">
                                                                                            <label for="" class="ti-form-label">Attachment:</label>
                                                                                            <input type="file" name="attachment" class="ti-form-input" accept="image/*" placeholder="Choose an image">
                                                                                        </div> --}}
                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                            <label for="attachment" class="ti-form-label">Attachment:<span class="text-red-500"> {{$ticket->attachment}}</span></label>
                                                                                            <input type="file" name="attachment[]" id="attachment" class="ti-form-input" accept="image/*" multiple placeholder="Choose images">
                                                                                            <h3>select multiple images</h3>
                                                                                            
                                                                                        </div>
                                                                                    </div>
                                                                                        <div class="ti-modal-footer">
                                                                                            <button type="button"
                                                                                                class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                                data-hs-overlay="#hs-medium-modal">
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
                                                                <form action="{{ route('ticket.destroy',$ticket->id) }}" method="post" enctype="multipart/form-data">
                                                                
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
                                                                <p class="text-dark"><b>No tickets Added.</b></p>
                                                            @endforelse
                                                        @endif
                                                    </tbody>
                                                </table>
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

        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/dataTables.tailwindcss.min.js"></script>
        <link rel="stylesheet" href="https://cdn.tailwindcss.com/3.3.5">
        

        <script>
            $(document).ready(function()
            {
               //alert('Hello from jquery');

               new DataTable('#table');
             });

            // Validation for tickets
            $(document).on('click', '#ticket_store_add_btn', function (e) 
            {
                var myissue = $('#myissue').val();
                var description = $('#description').val();
                var attachment = $('#attachment')[0].files[0]; // Get the selected file
                var flag = false;
                if (myissue.trim() === '') 
                {
                    $('#myissueError').text('My Issue is missing');
                    flag = true;
                } else
                {
                    $('#myissueError').text(''); 
                 }
                 if (description.trim() === '') 
                 {
                    $('#descriptionError').text('Description is missing');
                    flag = true;
                } else
                {
                    $('#descriptionError').text(''); 
                }
                // if (!attachment)
                // {
                //     $('#attachmentError').text('Please choose a file');
                //     flag = true;
                // }
                if (flag == true) 
                {
                    e.preventDefault();
                }
            });

        </script>
        <script>
            function showLargeImage(imageSrc)
            {
                var modal = document.createElement('div');
                modal.style.position = 'fixed';
                modal.style.top = '0';
                modal.style.left = '0';
                modal.style.width = '100%';
                modal.style.height = '100%';
                modal.style.backgroundColor = 'rgba(0,0,0,0.7)';
                modal.style.display = 'flex';
                modal.style.alignItems = 'center';
                modal.style.justifyContent = 'center';
                modal.style.zIndex = '9999';

                var largeImage = document.createElement('img');
                largeImage.src = imageSrc;
                largeImage.style.maxWidth = '80%';
                largeImage.style.maxHeight = '80%';
                largeImage.style.borderRadius = '5px';
                largeImage.style.boxShadow = '0 0 10px rgba(0,0,0,0.5)';

                modal.appendChild(largeImage);
                document.body.appendChild(modal);

                modal.onclick = function() {
                    document.body.removeChild(modal);
                };


            }
        </script>



      


@endsection