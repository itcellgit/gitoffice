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
                                        <!-- <div class=" block ltr:ml-auto rtl:mr-auto my-auto">
                                                <button type="button" id="renum_add_btn" class="hs-dropdown-toggle ti-btn ti-btn-primary" data-hs-overlay="#hs-medium-modal">
                                                
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM5 5V19H19V5H5ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z" fill="rgba(255,255,255,1)"></path></svg>
                                                    Add Renumeration Head
                                                </button>
            
                                                <div id="hs-medium-modal" class="hs-overlay hidden ti-modal">
                                                    <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                                        <div class="ti-modal-content">
                                                        <div class="ti-modal-header">
                                                            <h3 class="ti-modal-title">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM5 5V19H19V5H5ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z"></path></svg>
                                                               
                                                                Add New Renumeration Head
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
                                                            @if(($errors->has('activity')))
                                                                <script>
                                                                    //alert(1);
                                                                    $(window).on('load', function() {
                                                                    
                                                                        $('#renum_add_btn').trigger("click");
                                                                    });      
                                                                </script>
                                                            @endif
                                                        </div>
                                                        <form action="{{route('ESTB.renumerations.store')}}" method="post">
                                                            @csrf
                                                            <div class="ti-modal-body ">
                                                               
                                                                <div class="max-w-xs space-y-3">
                                                                    <label for="with-corner-hint" class="ti-form-label font-bold">Staff Id: </label>
                                                                    <input type="text" id="staffid" name="staffid" class="ti-form-input" placeholder="staff id">
                                                                    @if($errors->has('staffid'))
                                                                        <div class="text-red-700">{{ $errors->first('staffid')}}</div>
                                                                    @endif
                                                                    <div id="staffidError" class="error text-red-700"></div>
                                                                    <label for="with-corner-hint" class="ti-form-label font-bold">Renumeration Head: </label>
                                                                    <input type="text" id="renumhead" name="renumhead" class="ti-form-input" placeholder="renumeration head">
                                                                    @if($errors->has('renumhead'))
                                                                        <div class="text-red-700">{{ $errors->first('renumhead')}}</div>
                                                                    @endif
                                                                    <div id="renumheadError" class="error text-red-700"></div>
                                                                </div>
                                                        
                                                            </div>
                                                            <div class="ti-modal-footer">
                                                                <button type="button"
                                                                class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                data-hs-overlay="#hs-medium-modal">
                                                                Close
                                                                </button>
                                                                
                                                                <input type="submit" id="renum_store_add_btn" class="ti-btn  bg-primary text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10" value="Add"/>
                                                                
                                                                </div>
                                                            </form>  
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        </div>-->
                                    
                                        <div class="box-body">
                                        <!-- <div class=" block ltr:ml-auto rtl:mr-auto my-auto"> -->
                                                    <!--For filtering the data as per requirement-->
                                                    
                                            <div class="flex justify-end space-x-4 items-center">
                                            <button type="button" class="hs-dropdown-toggle bg-green-500 text-white px-4 py-2 text-xs rounded-md focus:outline-none hover:bg-green-600 focus:ring-2 focus:ring-green-400 focus:ring-opacity-75 whitespace-nowrap" onclick="location.href='{{ route('ESTB.renumerations.renumedetails') }}'">
                                                        Generate Template
                                                    </button>
                                                <form action="{{ route('import.excel') }}" method="POST" enctype="multipart/form-data" class="flex items-center space-x-2">
                                                    @csrf
                                                    <div class="space-y-8 font-[sans-serif] max-w-md mx-auto">
                                                        <input type="file" class="w-full text-gray-500 font-medium text-sm bg-blue-100 cursor-pointer py-2 px-4 mr-4 hover:bg-blue-500 hover:text-white rounded-lg rounded-md border-blue-300" name="excel_file"/>
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