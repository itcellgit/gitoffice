@extends('layouts.master')

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
                                    header("refresh: 3");
                                @endphp
                        @endif



                        {{-- chart --}}
                        <div class="col-span-12 xxl:col-span-6">
                            <div class="box">
                                <div class="box-header">
                                    <div class="sm:flex justify-between sm:space-y-0 space-y-2">
                                        <h5 class="box-title my-auto">Biometric Overview</h5>
                                        <div class="inline-flex rounded-md shadow-sm">
                                            <button type="button" class="ti-btn-group text-xs !border-0 py-2 px-3 ti-btn-soft-primary">
                                            1D
                                            </button>
                                            <button type="button" class="ti-btn-group text-xs !border-0 py-2 px-3 ti-btn-soft-primary">
                                            1W
                                            </button>
                                            <button type="button" class="ti-btn-group text-xs !border-0 py-2 px-3 ti-btn-soft-primary">
                                            1M
                                            </button>
                                            <button type="button" class="ti-btn-group text-xs !border-0 py-2 px-3 ti-btn-soft-primary">
                                            3M
                                            </button>
                                            <button type="button" class="ti-btn-group text-xs !border-0 py-2 px-3 ti-btn-soft-primary">
                                            6M
                                            </button>
                                            <button type="button" class="ti-btn-group text-xs !border-0 py-2 px-3 ti-btn-primary">
                                            1Y
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div id="performanceReport"></div>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="col-span-12 xl:col-span-12">
                                <form method="POST" action="{{ route('biometric_data') }}">
                                    @csrf
                                    <div class="grid gap-1 space-y-2 lg:grid-cols-1 lg:space-y-0">
                                        <div style="display: flex; flex-direction: column; margin-left: 10px;">
                                            <label for="to_date" class="ti-form-label font-bold mx-2 mt-2">Date:<span class="text-red-500">*</span></label>
                                            <div class="flex items-center">
                                                <input type="date" id="to_date" name="date" class="mx-2 px-1 py-1 text-sm w-36 h-8" placeholder="To Date">
                                                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md focus:outline-none">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                        
                                </form>
                                <div class="box">
                                    <div class="box-body">
                                        <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
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
                                                                    <td>{{ $entry_exit['entryLogs'][$employeeCode]->LogDate }}</td>
                                                                    <td>{{ $entry_exit['entryLogs'][$employeeCode]->DeviceFName }}</td>
                                                                @else
                                                                    <td colspan="2">No entry log available</td>
                                                                @endif

                                                                @if ($hasExitLog)
                                                                    <td>{{ $entry_exit['exitLogs'][$employeeCode]->LogDate ?? null }}</td>
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
                                                                                                    Employee Name: {{$entry_exit['entryLogs'][$employeeCode]->EmployeeName}}
                                                                                                
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

        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"
        ></script>

        <script src="https://cdn.datatables.net/1.13.6/js/dataTables.tailwindcss.min.js"></script>

        <script href="https://cdn.tailwindcss.com/3.3.5"></script>

        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/dataTables.tailwindcss.min.js"></script>
        <script href="https://cdn.tailwindcss.com/3.3.5"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

        <script>
            $(document).ready(function () {
                //$('#BiometricTable').DataTable();
                new DataTable('#BiometricTable');
            });

        </script>





@endsection
