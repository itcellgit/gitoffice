@extends('layouts.components.HOD.master-hod')

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
                                <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"><span class="text-primary">
                                      @if(session('deptid')==8)
                                        Weclome HOD Civil Engineering
                                        @elseif(session('deptid')==5)
                                        Welcome HOD Computer Science and Engineering
                                         @elseif(session('deptid')==17)
                                        Welcome HOD Architecture
                                         @elseif(session('deptid')==9)
                                        Welcome HOD Aeronautical Engineering
                                         @elseif(session('deptid')==2)
                                        Welcome HOD Electronics and Communication Engineering
                                         @elseif(session('deptid')==7)
                                        Welcome HOD Electrtical and Electronics Engineering
                                         @elseif(session('deptid')==6)
                                        Welcome HOD Information Science & Engineering
                                         @elseif(session('deptid')==1)
                                        Welcome HOD Mechanical Engineering
                                        @elseif(session('deptid')==24)
                                        Welcome HOD Master of Business Administration
                                         @elseif(session('deptid')==3)
                                        Welcome HOD Master of Computer Applications
                                         @elseif(session('deptid')==13)
                                        Welcome HOD Physics
                                         @elseif(session('deptid')==12)
                                        Welcome HOD Mathematics
                                         @elseif(session('deptid')==14)
                                        Welcome HOD Chemistry
                                    @endif
                                    </span></h3>
                            </div>
                            <ol class="flex items-center whitespace-nowrap min-w-0">
                                <li class="text-sm">
                                <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="#">
                                    Patents
                                    <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                </a>
                                </li>


                            </ol>
                        </div>
                        <!-- Page Header Close -->

                    </div>
                    <!-- Start::main-content -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="flex gap-10">
                            <div class="col-span-2 xl:col-span-3">
                                <!-- Count box 2 -->
                                <div class="box box-sm">
                                    <!-- Content for count box 2 -->
                                    <div class="box-body">
                                        <div class="flex">
                                            <div class="ltr:mr-2 rtl:ml-2">
                                                <div class="avatar rounded-sm text-primary p-2.5 bg-primary/20
                                                    @if($teaching_patents_count->granted_count == 0) text-red-500 @endif">
                                                    <i class="ti ti-users text-2xl leading-none"></i>
                                                </div>
                                            </div>
                                            <div class="flex-1">
                                                <p class="text-sm font-bold">Granted</p>
                                                <div class="flex justify-between items-center">
                                                    <div class="flex flex-col">
                                                        <h5 class="mb-0 text-2xl font-semibold
                                                            @if($teaching_patents_count->granted_count == 0) text-red-500 @else text-gray-800 dark:text-white @endif">
                                                            {{ $teaching_patents_count->granted_count }}
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-span-2 xl:col-span-3">
                                <!-- Count box 3 -->
                                <div class="box box-sm">
                                    <!-- Content for count box 3 -->
                                    <div class="box-body">
                                        <div class="flex">
                                            <div class="ltr:mr-2 rtl:ml-2">
                                                <div class="avatar rounded-sm text-primary p-2.5 bg-primary/20
                                                    @if($teaching_patents_count->pending_count == 0) text-red-500 @endif">
                                                    <i class="ti ti-users text-2xl leading-none"></i>
                                                </div>
                                            </div>
                                            <div class="flex-1">
                                                <p class="text-sm font-bold">Pending</p>
                                                <div class="flex justify-between items-center">
                                                    <div class="flex flex-col">
                                                        <h5 class="mb-0 text-2xl font-semibold
                                                            @if($teaching_patents_count->pending_count == 0) text-red-500 @else text-gray-800 dark:text-white @endif">
                                                            {{ $teaching_patents_count->pending_count }}
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="col-span-2 xl:col-span-3">
                                <!-- Count box 3 -->
                                <div class="box box-sm">
                                    <!-- Content for count box 3 -->
                                    <div class="box-body">
                                        <div class="flex">
                                            <div class="ltr:mr-2 rtl:ml-2">
                                                <div class="avatar rounded-sm text-primary p-2.5 bg-primary/20
                                                    @if($teaching_patents_count->rejected_count == 0) text-red-500 @endif">
                                                    <i class="ti ti-users text-2xl leading-none"></i>
                                                </div>
                                            </div>
                                            <div class="flex-1">
                                                <p class="text-sm font-bold">Rejected</p>
                                                <div class="flex justify-between items-center">
                                                    <div class="flex flex-col">
                                                        <h5 class="mb-0 text-2xl font-semibold
                                                            @if($teaching_patents_count->rejected_count == 0) text-red-500 @else text-gray-800 dark:text-white @endif">
                                                            {{ $teaching_patents_count->rejected_count }}
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-2 xl:col-span-3">
                                <!-- Count box 3 -->
                                <div class="box box-sm">
                                    <!-- Content for count box 3 -->
                                    <div class="box-body">
                                        <div class="flex">
                                            <div class="ltr:mr-2 rtl:ml-2">
                                                <div class="avatar rounded-sm text-primary p-2.5 bg-primary/20
                                                    @if($teaching_patents_count->awarded_count == 0) text-red-500 @endif">
                                                    <i class="ti ti-users text-2xl leading-none"></i>
                                                </div>
                                            </div>
                                            <div class="flex-1">
                                                <p class="text-sm font-bold">Awarded</p>
                                                <div class="flex justify-between items-center">
                                                    <div class="flex flex-col">
                                                        <h5 class="mb-0 text-2xl font-semibold
                                                            @if($teaching_patents_count->awarded_count == 0) text-red-500 @else text-gray-800 dark:text-white @endif">
                                                            {{ $teaching_patents_count->awarded_count }}
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-2 xl:col-span-3">
                                <!-- Count box 3 -->
                                <div class="box box-sm">
                                    <!-- Content for count box 3 -->
                                    <div class="box-body">
                                        <div class="flex">
                                            <div class="ltr:mr-2 rtl:ml-2">
                                                <div class="avatar rounded-sm text-primary p-2.5 bg-primary/20
                                                    @if($teaching_patents_count->published_count == 0) text-red-500 @endif">
                                                    <i class="ti ti-users text-2xl leading-none"></i>
                                                </div>
                                            </div>
                                            <div class="flex-1">
                                                <p class="text-sm font-bold">Published</p>
                                                <div class="flex justify-between items-center">
                                                    <div class="flex flex-col">
                                                        <h5 class="mb-0 text-2xl font-semibold
                                                            @if($teaching_patents_count->published_count == 0) text-red-500 @else text-gray-800 dark:text-white @endif">
                                                            {{ $teaching_patents_count->published_count }}
                                                        </h5>
                                                    </div>
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
                                            <div style="display: flex; align-items: center;">
                                                <div style="display: flex; flex-direction: column;">
                                                    <label for="applicationdate" class="ti-form-label font-bold mx-3 mt-3">Application Date:<span class="text-red-500">*</span></label>
                                                    <input type="date" id="applicationdate" class="mx-2" placeholder="From Date">
                                                </div>
                                                <div style="display: flex; flex-direction: column; margin-left: 20px;">
                                                    <label for="publicationdate" class="ti-form-label font-bold mx-3 mt-3">Publication Date:<span class="text-red-500">*</span></label>
                                                    <input type="date" id="publicationdate" class="mx-2" placeholder="To Date">
                                                </div>
                                                <button id="filterBtn" class="bg-blue-500 text-white px-4 mt-10 py-2 rounded-md focus:outline-none">Search</button>
                                            </div>
                                            <div class="flex justify-end mt-4">
                                                <button id="exportToExcel" class="bg-green-500 text-white px-4 py-2 rounded-md focus:outline-none">Export to Excel</button>
                                            </div>
                                            <table id="patent" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                <thead class="bg-gray-50 dark:bg-black/20">
                                                <tr class="">
                                                    <th scope="col" class="dark:text-white/80 font-bold ">S.No</th>
                                                    <th scope="col" class="dark:text-white/80 font-bold ">Staff Name</th>
                                                    <th scope="col" class="dark:text-white/80 font-bold ">E-Gov ID</th>
                                                    <th scope="col" class="dark:text-white/80 font-bold ">Application No</th>
                                                    <th scope="col" class="dark:text-white/80 font-bold ">application Date</th>
                                                    <th scope="col" class="dark:text-white/80 font-bold ">Publication Date</th>
                                                    <th scope="col" class="dark:text-white/80 font-bold ">Title</th>
                                                    <th scope="col" class="dark:text-white/80 font-bold ">Status</th>
                                                    <th scope="col" class="dark:text-white/80 font-bold ">Stream/Domain</th>
                                                    <th scope="col" class="dark:text-white/80 font-bold ">Patent No</th>
                                                    <th scope="col" class="dark:text-white/80 font-bold ">Publication No</th>

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
                                                    @foreach ($patents as $pate)
                                                        <tr class="">
                                                            <td><span>{{ $i++ }}</span></td>
                                                            <td><span>{{ $pate->fname . ' ' . $pate->mname . ' ' . $pate->lname }}</span></td>
                                                            {{-- <td><span>{{ $pate->egov_id }}</span></td> --}}
                                                            <td>
                                                                <a href="https://git.edu/storage/Uploads/Research/patents/{{ $pate->document}}" class="text-blue-500">
                                                                    <span>{{$pate->egov_id}}</span>
                                                                </a>
                                                            </td>
                                                            <td><span>{{ $pate->appl_no }}</span></td>
                                                            <td><span>{{\Carbon\Carbon::parse($pate->appl_date)->format('d-M-Y') }}</span></td>
                                                            <td><span>{{\Carbon\Carbon::parse($pate->publication_date)->format('d-M-Y') }}</span></td>

                                                            <td><span>{{ $pate->title }}</span></td>
                                                            <td><span>{{ $pate->status }}</span></td>
                                                             <td><span>{{ $pate->stream_domain }}</span></td>
                                                            <td><span>{{ $pate->patent_no }}</span></td>
                                                            <td><span>{{ $pate->publication_no }}</span></td>

                                                            {{-- Exclude the "Document" column when exporting --}}


                                                            @if(!isset($export) || !$export)
                                                                <td>
                                                                    <div class="hs-tooltip ti-main-tooltip">
                                                                        <a  href="{{ Storage::url('Uploads/Research/patents/' . $pate->document) }}" class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary" target="_blank" {{$pate->document}}>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12.0003 3C17.3924 3 21.8784 6.87976 22.8189 12C21.8784 17.1202 17.3924 21 12.0003 21C6.60812 21 2.12215 17.1202 1.18164 12C2.12215 6.87976 6.60812 3 12.0003 3ZM12.0003 19C16.2359 19 19.8603 16.052 20.7777 12C19.8603 7.94803 16.2359 5 12.0003 5C7.7646 5 4.14022 7.94803 3.22278 12C4.14022 16.052 7.7646 19 12.0003 19ZM12.0003 16.5C9.51498 16.5 7.50026 14.4853 7.50026 12C7.50026 9.51472 9.51498 7.5 12.0003 7.5C14.4855 7.5 16.5003 9.51472 16.5003 12C16.5003 14.4853 14.4855 16.5 12.0003 16.5ZM12.0003 14.5C13.381 14.5 14.5003 13.3807 14.5003 12C14.5003 10.6193 13.381 9.5 12.0003 9.5C10.6196 9.5 9.50026 10.6193 9.50026 12C9.50026 13.3807 10.6196 14.5 12.0003 14.5Z"></path></svg>
                                                                            <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm" role="tooltip">
                                                                            View Document
                                                                            </span>
                                                                        </a>
                                                                    </div>

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
                new DataTable('#patent');

                // Function to handle the filter Date Range
                $('#filterBtn').click(function () {
                    var fromDate = $('#applicationdate').val();
                    var toDate = $('#publicationdate').val();

                    // Determine the column indices dynamically based on table headers
                    var applicationDateIndex = $('#patent th:contains("Application Date")').index();
                    var publicationDateIndex = $('#patent th:contains("Publication Date")').index();

                    $('#patent tbody tr').each(function () {
                        var rowApplicationDate = $(this).find('td:eq(' + applicationDateIndex + ') span').text();
                        var rowPublicationDate = $(this).find('td:eq(' + publicationDateIndex + ') span').text();

                        var rowApplicationDateParsed = moment(rowApplicationDate, 'DD-MMM-YYYY');
                        var rowPublicationDateParsed = moment(rowPublicationDate, 'DD-MMM-YYYY');

                        if (
                            (fromDate !== '' && rowApplicationDateParsed.isBefore(moment(fromDate, 'YYYY-MM-DD'))) ||
                            (toDate !== '' && rowApplicationDateParsed.isAfter(moment(toDate, 'YYYY-MM-DD'))) ||
                            (fromDate !== '' && rowPublicationDateParsed.isBefore(moment(fromDate, 'YYYY-MM-DD'))) ||
                            (toDate !== '' && rowPublicationDateParsed.isAfter(moment(toDate, 'YYYY-MM-DD')))
                        ) {
                            $(this).hide();
                        } else {
                            $(this).show();
                        }
                    });
                });

                $('#exportToExcel').on('click', function () {
                    var table = $('#patent').clone();

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
                        window.navigator.msSaveOrOpenBlob(blob, 'patent_data.xls');
                    } else {
                        var link = $('<a>', {
                            href: URL.createObjectURL(blob),
                            download: 'patent_data.xls'
                        });

                        // Trigger the click to download
                        link[0].click();
                    }
                });
            });
        </script>

@endsection
