@extends('layouts.master')

@section('styles')


        <!-- FLATPICKR CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/flatpickr/flatpickr.min.css')}}">
        {{-- datatables css --}}
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
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M22 21H2V19H3V4C3 3.44772 3.44772 3 4 3H18C18.5523 3 19 3.44772 19 4V9H21V19H22V21ZM17 19H19V11H13V19H15V13H17V19ZM17 9V5H5V19H11V9H17ZM7 11H9V13H7V11ZM7 15H9V17H7V15ZM7 7H9V9H7V7Z"></path></svg>
                            BIOMETRIC
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
                                    //header("refresh: 3");
                                @endphp
                        @endif
                    </div>
                </div>
                <!-- Start::row-5 -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="col-span-12">
                        
                        <div class="box">
                            <div class="relative p-6 bg-white shadow-lg rounded-lg">
                                <div class="flex justify-between items-center">
                                    <h4 class="flex items-center text-xl font-bold">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32" fill="currentColor" class="mr-2">
                                            <path d="M12 1C16.9706 1 21 5.02944 21 10V14C21 17.0383 19.4945 19.7249 17.1887 21.3546C17.7164 19.6635 18 17.8649 18 16L17.9996 13.999H15.9996L16 16L15.997 16.3149C15.9535 18.5643 15.4459 20.7 14.5657 22.6304C13.7516 22.8705 12.8909 23 12 23C11.6587 23 11.3218 22.981 10.9903 22.944C12.2637 20.9354 13 18.5537 13 16V9H11V16L10.9963 16.2884C10.9371 18.5891 10.1714 20.7142 8.90785 22.4547C7.9456 22.1028 7.05988 21.5909 6.28319 20.9515C7.35876 19.5892 8 17.8695 8 16V10L8.0049 9.80036C8.03767 9.1335 8.23376 8.50957 8.554 7.96773L7.10935 6.52332C6.41083 7.50417 6 8.70411 6 10V16L5.99586 16.2249C5.95095 17.4436 5.54259 18.5694 4.87532 19.4973C3.69863 17.9762 3 16.0697 3 14V10C3 5.02944 7.02944 1 12 1ZM12 4C10.7042 4 9.50434 4.41077 8.52353 5.10921L9.96848 6.55356C10.5639 6.20183 11.2584 6 12 6C14.2091 6 16 7.79086 16 10V12H18V10C18 6.68629 15.3137 4 12 4Z"></path>
                                        </svg>
                                        Biometric Details
                                    </h4>
                                    <button id="publication_btn" data-hs-overlay="#add_publicaitons" class="flex items-center space-x-2 bg-red-500 text-white p-2 rounded-md hover:bg-red-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                                            <path d="M17 19H19V11H13V19H15V13H17V19ZM3 19V4C3 3.44772 3.44772 3 4 3H18C18.5523 3 19 3.44772 19 4V9H21V19H22V21H2V19H3ZM7 11V13H9V11H7ZM7 15V17H9V15H7ZM7 7V9H9V7H7Z" fill="rgba(255,255,255,1)"></path>
                                        </svg>
                                        <span>Missing Employee Bio</span>
                                    </button>
                                </div>

                                <div class="flex items-center justify-between mt-4">
                                    <!-- message display-->
                                        <span id="display_date_message" class="text-lg"></span>
                                  
                                    <form method="POST" action="{{ route('biometric_data') }}" class="flex items-center">
                                        @csrf
                                        <div class="flex items-center space-x-2">
                                            <label for="to_date" class="font-bold">Date:</label>
                                            <div class="flex items-center px-4 border border-gray-200 rounded-l-md bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                <span class="text-sm text-gray-500 dark:text-white/70"><i class="ri ri-calendar-line"></i></span>
                                            </div>
                                            <input type="date" name="date" class="border border-gray-200 focus:z-10 rounded-r-md p-2" id="to_date" placeholder="Choose date">
                                            <div class="flex items-center space-x-2 ml-2">
                                                <button type="submit" class="bg-blue-500 text-white px-4 py-2 text-xs rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">Search</button>
                                                <button type="submit" id="missing-biometric-button" data-hs-overlay="#missing-biometric-modal" class="bg-yellow-500 text-white px-4 py-2 text-xs rounded-md hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-opacity-75">Missing Biometric</button>

                                                <div id="missing-biometric-modal" class="hs-overlay hidden ti-modal">
                                                    <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                        <div class="ti-modal-content">
                                                            <form method="get" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="ti-modal-body">
                                                                    <div class="table-responsive">
                                                                        <p style="color: rgb(32, 195, 241);"><b>Biometric Entry not found / On leave</b></p>
                                                                        
                                                                        <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
                                                                            <table  class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                                                <thead class="bg-gray-50 dark:bg-black/20">
                                                                                    <tr>
                                                                                        <th class="dark:text-white/80 font-bold px-4 py-2">Serial No.</th>
                                                                                        <th class="dark:text-white/80 font-bold px-4 py-2">ID</th>
                                                                                        <th class="dark:text-white/80 font-bold px-4 py-2">Employee Code</th>
                                                                                        <th class="dark:text-white/80 font-bold px-4 py-2">Full Name</th>
                                                                                        <th class="dark:text-white/80 font-bold px-4 py-2">Department Name</th>
                                                                                        <th class="dark:text-white/80 font-bold px-4 py-2">Leave</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody id="missing-biometric-data">
                                                                                    <!-- Data will be dynamically populated here -->
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ti-modal-footer">
                                                                    <button type="button" class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10" data-hs-overlay="#missing-biometric-modal">Close</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>


                            
                            <!-- Modal -->
                            <div id="add_publicaitons" class="hs-overlay hidden ti-modal">
                                <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                    <div class="ti-modal-content">
                                        <form  method="get" enctype="multipart/form-data">
                                            @csrf
                                            <div class="ti-modal-body">
                                                <div class="table-responsive">
                                                <p style="color: red;"><b>Biometric registration pending or Biometric EmployeeCode not Found</b></p>
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th class="font-bold px-4 py-2">ID</th>
                                                                <th class="font-bold px-4 py-2">Name</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($missingEmployeesBio as $employee)
                                                            <tr>
                                                                <td class="px-4 py-2">{{ $employee->id }}</td>
                                                                <td class="px-4 py-2">{{ $employee->full_name }}</td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="ti-modal-footer">
                                                <button type="button" class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10" data-hs-overlay="#add_publicaitons">Close</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- End Modal -->
                        
                            <!--main body start-->
                            <div class="box-body">
                                <div class="table-bordered table-auto rounded-sm ti-striped-table ti-custom-table-head overflow-auto">
                                    <table id="BiometricTable" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                        <thead class="bg-gray-50 dark:bg-black/20">
                                            <tr class="">
                                                <th scope="col" class="dark:text-white/80 font-bold  ">S.No</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Employee Name</th>
                                                <th scope="col" class="dark:text-white/80 font-bold  ">Department</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">PunchIn</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">DeviceIn</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">PunchOut</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">DeviceOut</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">No.of.Punches</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Duration</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>  
                                            @php
                                                $i=1;
                                            @endphp
                                            @foreach ($combinedData as $data)
                                                @php
                                                    $employeeCode = $data->EmployeeCode;

                                                    $hasEntryLog = isset($entry_exit['entryLogs'][$employeeCode]);
                                                    $hasExitLog = isset($entry_exit['exitLogs'][$employeeCode]);
                                                @endphp
                                                @if ($hasEntryLog || $hasExitLog)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        @if ($hasEntryLog)
                                                            <td>{{$data->EmployeeName}}</td>
                                                            
                                                            @if(isset($data->DepartmentName))
                                                                <td>{{$data->DepartmentName}}</td>
                                                            @else
                                                                <td></td>
                                                            @endif
                                                            <td>{{ $entry_exit['entryLogs'][$employeeCode]->LogDate_Time }}</td>
                                                            <td>{{ $entry_exit['entryLogs'][$employeeCode]->DeviceFName }}</td>
                                                        @else
                                                            <td colspan="2">No entry log available</td>
                                                        @endif

                                                        @if ($hasExitLog)
                                                            <td>{{ $entry_exit['exitLogs'][$employeeCode]->LogDate_Time ?? null }}</td>
                                                            <td>{{ $entry_exit['exitLogs'][$employeeCode]->DeviceFName ?? null }}</td>
                                                        @else
                                                            <td colspan="1">No exit log available</td>
                                                            <td></td>

                                                        @endif
                                                        
                                                        <td>{{ $entry_exit['punchcounts'][$employeeCode] }}</td>
                                                        <td>{{ $entry_exit['durations'][$employeeCode] }}</td>

                                                        <td>
                                                            <!-- Modal Start Here -->
                                                            <div class="hs-tooltip ti-main-tooltip">
                                                                <button data-hs-overlay="#validate_edit_modal{{$i}}">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor">
                                                                        <path d="M12.0003 3C17.3924 3 21.8784 6.87976 22.8189 12C21.8784 17.1202 17.3924 21 12.0003 21C6.60812 21 2.12215 17.1202 1.18164 12C2.12215 6.87976 6.60812 3 12.0003 3ZM12.0003 19C16.2359 19 19.8603 16.052 20.7777 12C19.8603 7.94803 16.2359 5 12.0003 5C7.7646 5 4.14022 7.94803 3.22278 12C4.14022 16.052 7.7646 19 12.0003 19ZM12.0003 16.5C9.51498 16.5 7.50026 14.4853 7.50026 12C7.50026 9.51472 9.51498 7.5 12.0003 7.5C14.4855 7.5 16.5003 9.51472 16.5003 12C16.5003 14.4853 14.4855 16.5 12.0003 16.5ZM12.0003 14.5C13.381 14.5 14.5003 13.3807 14.5003 12C14.5003 10.6193 13.381 9.5 12.0003 9.5C10.6196 9.5 9.50026 10.6193 9.50026 12C9.50026 13.3807 10.6196 14.5 12.0003 14.5Z"></path>
                                                                    </svg>
                                                                </button>
                                                                <div id="validate_edit_modal{{$i}}" class="hs-overlay hidden ti-modal">
                                                                    <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                                        <div class="ti-modal-content">
                                                                            <div class="ti-modal-header">
                                                                                <h3 class="ti-modal-title">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                                                                                        <path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path>
                                                                                    </svg>
                                                                                    Log Details
                                                                                </h3>
                                                                                <button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#validate_edit_modal{{$i}}">
                                                                                    <span class="sr-only">Close</span>
                                                                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                        <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor" />
                                                                                    </svg>
                                                                                </button>
                                                                            </div>
                                                                            <!-- Modal body to display row data -->
                                                                            <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
                                                                                <h3>
                                                                                    <b style="display: flex; justify-content: space-between;">
                                                                                        <span>
                                                                                            Employee Name: {{$data->EmployeeName}}
                                                                                        
                                                                                            @if(isset($data->id))
                                                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                
                                                                                                Staff ID: {{$data->id}}
                                                                                            @endif
                                                                                        </span>
                                                                                        <span style="display: flex; align-items: center;">
                                                                                            <span style="margin-right: 10px;">Employee Code: {{$entry_exit['entryLogs'][$employeeCode]->EmployeeCode}}</span>
                                                                                            
                                                                                        </span>
                                                                                    </b>
                                                                                </h3>
                                                                                    <table id="BiometricTable" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                                                    <thead class="bg-gray-50 dark:bg-black/20">
                                                                                        <tr>
                                                                                            <th scope="col" class="dark:text-white/80 font-bold">Log Time</th>
                                                                                            <th scope="col" class="dark:text-white/80 font-bold">Log Device</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        @foreach( $entry_exit['employeePunchLogs'][$employeeCode] as $emplogs)
                                                                                        <tr>
                                                                                            <td>{{ $emplogs->LogDate }}</td>
                                                                                            <td>{{ $emplogs->DeviceFName}}</td>
                                                                                        </tr>
                                                                                        @endforeach
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <!-- Footer content -->
                                                                            <div class="ti-modal-footer">
                                                                                <!-- Display the number of records -->
                                                                                <p>Total Biometric records for the day is: {{ count($entry_exit['employeePunchLogs'][$employeeCode]) }}</p>
                                                                                
                                                                            </div>  
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Modal Ends Here -->
                                                        </td>

                                                    </tr>
                                                    @php
                                                        $i++;
                                                            // Remove entry and exit logs for the processed employee
                                                            unset($entry_exit['entryLogs'][$employeeCode]);
                                                            unset($entry_exit['exitLogs'][$employeeCode]);
                                                    @endphp
                                                @endif
                                            @endforeach
                                        
                                        </tbody>
                                    </table>           
                                </div>
                            </div>
                            <div class="box-footer">
                                <!-- Pagination-->
                            </div>
                        </div>
                    </div>
                    <!-- End::row-5 -->
                </div>
            </div>
        </div>
    </div>   
    <!-- End::main-content -->

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

        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"
        ></script>

        <script src="https://cdn.datatables.net/1.13.6/js/dataTables.tailwindcss.min.js"></script>

        <script href="https://cdn.tailwindcss.com/3.3.5"></script>

        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/dataTables.tailwindcss.min.js"></script>
        <script href="https://cdn.tailwindcss.com/3.3.5"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

     <!-- script for missing biometric-->   
    <script>
        $(document).ready(function() {
        // Initialize DataTable
        var biometricTable = new DataTable('#BiometricTable');

        $('#missing-biometric-button').click(function(event) {
            event.preventDefault(); // Prevent the default form submission

            var date = $('#to_date').val(); // Get the date from the Blade variable
            //alert(date);
            $.ajax({
                url: base_url+'/biometric/missing_logs',
                method: 'GET',
                data: {
                    date: date
                },
                success: function(response) {
                    // Handle success - display the data in the placeholder div
                    //console.log(response);
                    $('#missing-biometric-data').empty();
                    if (response.length != 0) {
                        $.each(response, function(index, value) {
                            // console.log(value.leave_staff_applications);
                            // Check if leave is available
                            var leaveAvailable = value.leave_staff_applications.length > 0;
                            // Set row color based on leave availability
                            var rowColor = leaveAvailable ? 'bg-yellow-400' : 'bg-red-300';
                            // Append row with specified color
                            $('#missing-biometric-data').append(
                                '<tr class="' + rowColor + '">' +
                                    '<td>' + (index + 1) + '</td>' + // Serial number column
                                    '<td>' + value.id + '</td>' +
                                    '<td>' + value.EmployeeCode + '</td>' +
                                    '<td>' + value.full_name + '</td>' +
                                    '<td>' + value.dept_shortname + '</td>'+
                                    '<td>'+ ((value.leave_staff_applications.length >0 )? value.leave_staff_applications[0].shortname : "Missing the Leave") +'</td>'+
                                '</tr>'
                            );
                            
                        });
                        // Update DataTable after appending data
                        biometricTable.refresh();
                    } else {
                        $('#missing-biometric-data').append(
                            '<tr style="color: red;">' +
                                '<td colspan="3" align="center">No Missing Biometric Logs</td>' +
                            '</tr>'
                        );
                    }
                }, 
                error: function(xhr, status, error) {
                    // Handle error - display an alert or feedback to the user
                    console.error('Error:', error);
                    alert('An error occurred while fetching missing biometric logs. Please try again.');
                }
            });
        });

        // Click event handler to close the modal
        $('.hs-overlay-open').click(function(event) {
            $('#missing-biometric-modal').addClass('hidden');
        });
        });
    </script>



    <!-- displaying currenct date-->
    <script>
        function setCurrentDate() {
            var dateInput = document.getElementById('to_date');
            var displayMessage = document.getElementById('display_date_message');

            var selectedDate = localStorage.getItem('selectedDate');

            if (selectedDate) {
                dateInput.value = selectedDate;
                displayMessage.innerHTML = "<strong>Biometric Data for the Date: " + selectedDate + "</strong>";
            } else {
                // If no date is selected yet, set the current date
                var today = new Date();
                var year = today.getFullYear();
                var month = ('0' + (today.getMonth() + 1)).slice(-2);
                var day = ('0' + today.getDate()).slice(-2);
                var formattedDate = year + '-' + month + '-' + day;

                dateInput.value = formattedDate;
                displayMessage.innerHTML = "    <strong>Biometric Data for the Date: " + formattedDate + "</strong>";
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            setCurrentDate();

            document.getElementById('to_date').addEventListener('change', function() {
                var selectedDate = this.value;
                localStorage.setItem('selectedDate', selectedDate);
                var message = "     <strong>Biometric Data for the Date: " + selectedDate + "</strong>";
                document.getElementById('display_date_message').innerHTML = message;
            });
        });
    </script>
        
        






@endsection