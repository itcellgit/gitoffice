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
                                   Reviewer/Editor
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
                                                @if($review_editor_count->Q1_count == 0) text-red-500 @endif">
                                                <i class="ti ti-users text-2xl leading-none"></i>
                                            </div>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm font-bold">Q1</p>
                                            <div class="flex justify-between items-center">
                                                <div class="flex flex-col">
                                                    <h5 class="mb-0 text-2xl font-semibold
                                                        @if($review_editor_count->Q1_count == 0) text-red-500 @else text-gray-800 dark:text-white @endif">
                                                        {{ $review_editor_count->Q1_count }}
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
                                                @if($review_editor_count->Q2_count == 0) text-red-500 @endif">
                                                <i class="ti ti-users text-2xl leading-none"></i>
                                            </div>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm font-bold">Q2</p>
                                            <div class="flex justify-between items-center">
                                                <div class="flex flex-col">
                                                    <h5 class="mb-0 text-2xl font-semibold
                                                        @if($review_editor_count->Q2_count == 0) text-red-500 @else text-gray-800 dark:text-white @endif">
                                                        {{ $review_editor_count->Q2_count }}
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
                                                @if($review_editor_count->Q3_count == 0) text-red-500 @endif">
                                                <i class="ti ti-users text-2xl leading-none"></i>
                                            </div>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm font-bold">Q3</p>
                                            <div class="flex justify-between items-center">
                                                <div class="flex flex-col">
                                                    <h5 class="mb-0 text-2xl font-semibold
                                                        @if($review_editor_count->Q3_count == 0) text-red-500 @else text-gray-800 dark:text-white @endif">
                                                        {{ $review_editor_count->Q3_count }}
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
                                                @if($review_editor_count->Q4_count == 0) text-red-500 @endif">
                                                <i class="ti ti-users text-2xl leading-none"></i>
                                            </div>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm font-bold">Q4</p>
                                            <div class="flex justify-between items-center">
                                                <div class="flex flex-col">
                                                    <h5 class="mb-0 text-2xl font-semibold
                                                        @if($review_editor_count->Q4_count == 0) text-red-500 @else text-gray-800 dark:text-white @endif">
                                                        {{ $review_editor_count->Q4_count }}
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
                                                @if($review_editor_count->web_of_science_count == 0) text-red-500 @endif">
                                                <i class="ti ti-users text-2xl leading-none"></i>
                                            </div>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm font-bold">Web-Science</p>
                                            <div class="flex justify-between items-center">
                                                <div class="flex flex-col">
                                                    <h5 class="mb-0 text-2xl font-semibold
                                                        @if($review_editor_count->web_of_science_count == 0) text-red-500 @else text-gray-800 dark:text-white @endif">
                                                        {{ $review_editor_count->web_of_science_count }}
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
                                                @if($review_editor_count->scopus_indexed_count == 0) text-red-500 @endif">
                                                <i class="ti ti-users text-2xl leading-none"></i>
                                            </div>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm font-bold">ScopusIndexed</p>
                                            <div class="flex justify-between items-center">
                                                <div class="flex flex-col">
                                                    <h5 class="mb-0 text-2xl font-semibold
                                                        @if($review_editor_count->scopus_indexed_count == 0) text-red-500 @else text-gray-800 dark:text-white @endif">
                                                        {{ $review_editor_count->scopus_indexed_count }}
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

                                        <div style="display: flex; align-items: center;">
                                            <div style="display: flex; flex-direction: column;">
                                                <label for="from_date" class="ti-form-label font-bold mx-3 mt-3">Review Date:<span class="text-red-500">*</span></label>
                                                <input type="date" id="from_date" class="mx-2" placeholder="From Date">
                                            </div>
                                            <div style="display: flex; flex-direction: column; margin-left: 20px;">
                                                <label for="to_date" class="ti-form-label font-bold mx-3 mt-3">To Review Date:<span class="text-red-500">*</span></label>
                                                <input type="date" id="to_date" class="mx-2" placeholder="To Date">
                                            </div>
                                            <button id="filterBtn" class="bg-blue-500 text-white px-4 mt-10 py-2 rounded-md focus:outline-none">Search</button>
                                        </div>
                                        <div class="flex justify-end mt-4">
                                            <button id="exportToExcel" class="bg-green-500 text-white px-4 py-2 rounded-md focus:outline-none">Export to Excel</button>
                                        </div>
                                        <table id="reviewer_editor_table"class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                            <thead class="bg-gray-50 dark:bg-black/20">
                                                <tr class="">
                                                    <th scope="col" class="dark:text-white/80 font-bold">S.No</th>
                                                    <th scope="col" class="dark:text-white/80 font-bold">E-Gov ID</th>
                                                    <th scope="col" class="dark:text-white/80 font-bold">Level</th>
                                                    <th scope="col" class="dark:text-white/80 font-bold">Other Level</th>
                                                    <th scope="col" class="dark:text-white/80 font-bold">Title</th>
                                                    <th scope="col" class="dark:text-white/80 font-bold">Review Date</th>
                                                    <th scope="col" class="dark:text-white/80 font-bold">Journal Name</th>
                                                    <th scope="col" class="dark:text-white/80 font-bold">Publisher Name</th>
                                                    <th scope="col" class="dark:text-white/80 font-bold">Category</th>
                                                    {{-- Exclude the "Document" column when exporting --}}
                                                    @if(!isset($export) || !$export)
                                                        <th scope="col" class="dark:text-white/80 font-bold ">Document</th>
                                                    @endif
                                                </tr>
                                            </thead>
                                            @php
                                                $i=1;
                                            @endphp
                                            <tbody class="">
                                                @foreach($review_editor as $rc)
                                                    <tr style="@if($rc->validation_status =='invalid') background-color: #ffcccc; @elseif($rc->validation_status =='updated') background-color: #fff2cc; @elseif($rc->validation_status =='valid') background-color: #ccffcc; @endif">

                                                        <td><span>{{$i++}}</span></td>
                                                        {{-- <td><span>{{$rc->egov_id}}</span></td> --}}
                                                        <td>
                                                            <a href="https://git.edu/storage/Uploads/Research/Review_Editor/{{ $rc->document}}" class="text-blue-500">
                                                                <span>{{$rc->egov_id}}</span>
                                                            </a>
                                                        </td>
                                                        <td><span>{{$rc->level}}</span></td>
                                                        <td>
                                                            <span>
                                                                @if(in_array($rc->level, ['Q1', 'Q2', 'Q3', 'Q4', 'SCI', 'Web of Science', 'Scopus Indexed', 'UGC General']))
                                                                    --NA--
                                                                @else
                                                                    {{ $rc->other_level }}
                                                                @endif
                                                            </span>
                                                        </td>
                                                        <td><span>{{$rc->title}}</span></td>
                                                        <td><span>{{\Carbon\Carbon::parse($rc->reviewed_date)->format('d-M-Y') }}</span></td>
                                                        <td><span>{{$rc->journal_name}}</span></td>
                                                        <td><span>{{$rc->publisher_name}}</span></td>
                                                         <td><span>{{$rc->category}}</span></td>
                                                        {{-- Exclude the "Document" column when exporting --}}

                                                        @if(!isset($export) || !$export)
                                                            <td>
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <a  href="{{ Storage::url('Uploads/Research/Review_Editor/' . $rc->document) }}" class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary" target="_blank" {{$rc->document}}>
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

        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/dataTables.tailwindcss.min.js"></script>
        <script href="https://cdn.tailwindcss.com/3.3.5"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

        <!---->
        <script>
            $(document).ready(function(){
                var dataTable = new DataTable('#reviewer_editor_table');
                $('#filterBtn').click(function () {
                    var fromDate = $('#from_date').val();
                    var toDate = $('#to_date').val();
                    var reviewDateIndex = $('#reviewer_editor_table th:contains("Review Date")').index();

                    dataTable.search('').draw();

                    var allData = dataTable.rows().data().toArray();

                    var filteredData = allData.filter(function (row) {
                        var rowDate = moment(row[reviewDateIndex], 'D-MMM-YYYY');

                        return (
                            (!fromDate || rowDate.isSameOrAfter(moment(fromDate, 'YYYY-MM-DD'))) &&
                            (!toDate || rowDate.isSameOrBefore(moment(toDate, 'YYYY-MM-DD')))
                        );
                    });

                    dataTable.clear().rows.add(filteredData).draw();
                });


                //Export to Excel
                $('#exportToExcel').on('click', function () {
                    var table = $('#reviewer_editor_table').clone();

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
                        window.navigator.msSaveOrOpenBlob(blob, 'reviewer_editors_data.xls');
                    } else {
                        var link = $('<a>', {
                            href: URL.createObjectURL(blob),
                            download: 'reviewer_editor_data.xls'
                        });

                        // Trigger the click to download
                        link[0].click();
                    }
                });


            });
        </script>
        <!-- filering Daterange  data as per requirement-->


@endsection