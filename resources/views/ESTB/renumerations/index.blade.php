@extends('layouts.master')

@section('styles')

    
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
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12.0001 8.5L14.1161 13.5875L19.6085 14.0279L15.4239 17.6125L16.7023 22.9721L12.0001 20.1L7.29777 22.9721L8.57625 17.6125L4.3916 14.0279L9.88403 13.5875L12.0001 8.5ZM12.0001 13.707L11.2615 15.4835L9.34505 15.637L10.8051 16.8883L10.3581 18.759L12.0001 17.7564L13.6411 18.759L13.195 16.8883L14.6541 15.637L12.7386 15.4835L12.0001 13.707ZM8.00005 2V11H6.00005V2H8.00005ZM18.0001 2V11H16.0001V2H18.0001ZM13.0001 2V7H11.0001V2H13.0001Z"></path></svg>
                                         Renumerations
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
                                            <span class='font-bold'>Result: </span> DataBase transaction Successful
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
                                    <div class="box">
                                    <div class="box-header">
                                        <div class="flex">
                                        <h5 class="box-title my-auto">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12.0001 8.5L14.1161 13.5875L19.6085 14.0279L15.4239 17.6125L16.7023 22.9721L12.0001 20.1L7.29777 22.9721L8.57625 17.6125L4.3916 14.0279L9.88403 13.5875L12.0001 8.5ZM12.0001 13.707L11.2615 15.4835L9.34505 15.637L10.8051 16.8883L10.3581 18.759L12.0001 17.7564L13.6411 18.759L13.195 16.8883L14.6541 15.637L12.7386 15.4835L12.0001 13.707ZM8.00005 2V11H6.00005V2H8.00005ZM18.0001 2V11H16.0001V2H18.0001ZM13.0001 2V7H11.0001V2H13.0001Z"></path></svg>
                                            Renumeration Head Details</h5>
                                        
                                    
                                        <div class="box-body">
                                            <div class="flex justify-end space-x-4 items-center">
                                            <button type="button" class="hs-dropdown-toggle bg-green-500 text-white px-4 py-2 text-xs rounded-md focus:outline-none hover:bg-green-600 focus:ring-2 focus:ring-green-400 focus:ring-opacity-75 whitespace-nowrap" onclick="location.href='{{ route('ESTB.renumerations.renumedetails') }}'">
                                                        Geanerate Template
                                                    </button>
                                                <form action="{{ route('import.excel') }}" method="POST" enctype="multipart/form-data" class="flex items-center space-x-2">
                                                    @csrf
                                                    <div class="space-y-8 font-[sans-serif] max-w-md mx-auto">
                                                        <input type="file" class="w-full text-gray-500 font-medium text-sm bg-blue-100 cursor-pointer py-2 px-2 mr-2 hover:bg-blue-500 hover:text-white rounded-lg rounded-md border-blue-300" name="excel_file"/>
                                                    </div>
                                                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 text-xs rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75 whitespace-nowrap">Upload Excel</button>
                                                </form>
                                                <button id="exportToExcel" class="bg-green-500 text-white px-4 py-2 text-xs rounded-md focus:outline-none hover:bg-green-600 focus:ring-2 focus:ring-green-400 focus:ring-opacity-75 whitespace-nowrap">Export to Excel</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto">
                                        <table id="renumtable" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                            <thead class="bg-gray-50 dark:bg-black/20">
                                                <tr>
                                                    <th scope="col" class="dark:text-white/80">S.no</th>
                                                    <th scope="col" class="dark:text-white/80">STAFF ID</th>
                                                    <th scope="col" class="dark:text-white/80">Staff Name</th>
                                                    <th scope="col" class="dark:text-white/80">Department</th>
                                                    <th scope="col" class="dark:text-white/80">Renumeration Head</th>
                                                    <th scope="col" class="dark:text-white/80">Date of Disbursement</th>
                                                    <th scope="col" class="dark:text-white/80">Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $i = 1;
                                                @endphp
                                                @foreach ($renumerationheads as $renume)
                                                <tr>
                                                    <td><span>{{ $i++ }}</span></td>
                                                    <td class="border border-gray-300 px-4 py-2"><span>{{ $renume->staffid }}</span></td>
                                                    <td class="border border-gray-300 px-4 py-2"><span>{{ $renume->fname }} {{ $renume->mname }} {{ $renume->lname }}</span></td>
                                                    <td class="border border-gray-300 px-4 py-2"><span>{{ $renume->dept_shortname }}</span></td>
                                                    <td class="border border-gray-300 px-4 py-2"><span>{{ $renume->renumeration_head }}</span></td>
                                                    <td class="border border-gray-300 px-4 py-2"><span>{{ $renume->date_of_disbursement }}</span></td>
                                                    <td class="border border-gray-300 px-4 py-2"><span>{{ $renume->amount }}</span></td>
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

               new DataTable('#renumtable');
           
               $('#exportToExcel').on('click', function () {
                    var table = $('#renumtable').clone();
                    table.find('th:nth-child(1), th:nth-child(3), th:nth-child(4)').remove();
                    table.find('td:nth-child(1), td:nth-child(3), td:nth-child(4)').remove();
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
                        window.navigator.msSaveOrOpenBlob(blob, 'Renumeration_staff.xls');
                    } else {
                        var link = $('<a>', {
                            href: URL.createObjectURL(blob),
                            download: 'Renumeration_staff.xls'
                        });
                        // Trigger the click to download
                        link[0].click();
                    }
                });
            });
            </script>
        
@endsection