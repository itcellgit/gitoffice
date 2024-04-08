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
                                   Conference Activity Attended
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
                                        <table id="conducted" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                            <thead class="bg-gray-50 dark:bg-black/20">
                                            <tr class="">
                                                <th scope="col" class="dark:text-white/80 font-bold ">S.No</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Staff Name</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Dept Short Name</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">E-Gov ID</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Conferene Name</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Co Organizer</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">No Of Participant</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">From Date</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">To Date</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">No Of  Days</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Place</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Publisher</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Role</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">sponsored</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Sponsoring Agency </th>
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
                                                @foreach ($conferences_conducted as $conducted)
                                                    <tr class="">

                                                        <td><span>{{ $i++ }}</span></td>
                                                        <td><span>{{ $conducted->fname . ' ' . $conducted->mname . ' ' . $conducted->lname }}</span></td>
                                                        <td><span>{{ $conducted->dept_shortname }}</span></td>
                                                        <td><span>{{ $conducted->egov_id }}</span></td>
                                                        <td><span>{{ $conducted->conference_name }}</span></td>
                                                        <td><span>{{ $conducted->co_organizer }}</span></td>
                                                        <td><span>{{ $conducted->no_of_participants }}</span></td>
                                                        <td><span>{{\Carbon\Carbon::parse($conducted->from_date)->format('d-M-Y') }}</span></td>
                                                        <td><span>{{\Carbon\Carbon::parse($conducted->to_date)->format('d-M-Y') }}</span></td>
                                                        <td><span>{{ $conducted->no_of_days }}</span></td>
                                                        <td><span>{{ $conducted->place }}</span></td>
                                                        <td><span>{{ $conducted->publisher }}</span></td>
                                                        <td><span>{{ $conducted->role }}</span></td>
                                                        <td><span>{{ $conducted->sponsored }}</span></td>
                                                        <td><span>{{ $conducted->sponsoring_agency }}</span></td>
                                                        @if(!isset($export) || !$export)
                                                        <td><span><a href={{asset('Uploads/Research/Conference_Conducted/'.$conducted->document)}} class='font-medium text-blue-600 dark:text-blue-500 hover:underline' target="_blank">{{$conducted->document}}</a></span></td>

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

               new DataTable('#conducted');
            });
        </script>

        
        {{-- Export to excel achivement --}}

 <script>
    $(document).ready(function () {
        $('#exportToExcel').on('click', function () {
            var table = $('#conducted').clone();

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
                window.navigator.msSaveOrOpenBlob(blob, 'conferenceconducted_data.xls');
            } else {
                var link = $('<a>', {
                    href: URL.createObjectURL(blob),
                    download: 'conferenceconducted_data.xls'
                });

                // Trigger the click to download
                link[0].click();
            }
        });
    });
</script>

        
@endsection