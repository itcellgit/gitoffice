@extends('layouts.components.Deanrnd.master-deanrnd')

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
                                WELCOME DEANRND
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
                        <div class="col-span-12 xl:col-span-12">
                            <div class="box">
                                <div class="box-body">                
                                    <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
                                        <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto">
                                            <div class="flex justify-end mt-4">
                                                <button id="exportToExcel" class="bg-green-500 text-white px-4 py-2 rounded-md focus:outline-none hover:bg-green-600">Export to Excel</button>
                                            </div>
                                        <table id="reviewer_editor_table" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                            <thead class="bg-gray-50 dark:bg-black/20">
                                            <tr class="">
                                                <th scope="col" class="dark:text-white/80 font-bold ">S.No</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Staff Name</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Dept Short Name</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">E-Gov ID</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Level</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Other Level</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Title</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Review Date</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Journal Name</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Publisher Name</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Category</th>
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
                                               @foreach($reviewer_editor as $rc)
                                                    <tr class="">

                                                        <td><span>{{ $i++ }}</span></td>
                                                        <td><span>{{ $rc->fname . ' ' . $rc->mname . ' ' . $rc->lname }}</span></td>
                                                        <td><span>{{ $rc->dept_shortname }}</span></td>
                                                        <td><span>{{ $rc->egov_id }}</span></td>
                                                        <td><span>{{ $rc->level }}</span></td>
                                                        <td><span>{{ $rc->other_level }}</span></td>
                                                        <td><span>{{ $rc->title }}</span></td>
                                                        {{-- <td><span>{{ $rc->status }}</span></td> --}}
                                                        <td><span>{{\Carbon\Carbon::parse($rc->reviewed_date)->format('d-M-Y') }}</span></td>
                                                        <td><span>{{ $rc->journal_name }}</span></td>
                                                        <td><span>{{ $rc->publisher_name }}</span></td>
                                                        <td><span>{{ $rc->category }}</span></td>
                                                        @if(!isset($export) || !$export)
                                                        <td><span><a href={{asset('Uploads/Research/Review_Editor/'.$rc->document)}} class='font-medium text-blue-600 dark:text-blue-500 hover:underline' target="_blank">{{$rc->document}}</a></span></td>

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
        
        <script>
            $(document).ready(function(){
               //alert('Hello from jquery');

               new DataTable('#reviewer_editor_table');
            });
        </script>
         {{-- Export to excel achivement --}}

 <script>
    $(document).ready(function () {
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
                window.navigator.msSaveOrOpenBlob(blob, 'reviewer_editor_data.xls');
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

        
@endsection