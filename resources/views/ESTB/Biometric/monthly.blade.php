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
                                        <path d="M12 1C16.9706 1 21 5.02944 21 10V14C21 17.0383 19.4945 19.7249 17.1887 21.3546C17.7164 19.6635 18 17.8649 18 16L17.9996 13.999H15.9996L16 16L15.997 16.3149C15.9535 18.5643 15.4459 20.7 14.5657 22.6304C13.7516 22.8705 12.8909 23 12 23C11.6587 23 11.3218 22.981 10.9903 22.944C12.2637 20.9354 13 18.5537 13 16V9H11V16L10.9963 16.2884C10.9371 18.5891 10.1714 20.7142 8.90785 22.4547C7.9456 22.1028 7.05988 21.5909 6.28319 20.9515C7.35876 19.5892 8 17.8695 8 16V10L8.0049 9.80036C8.03767 9.1335 8.23376 8.50957 8.554 7.96773L7.10935 6.52332C6.41083 7.50417 6 8.70411 6 10V16L5.99586 16.2249C5.95095 17.4436 5.54259 18.5694 4.87532 19.4973C3.69863 17.9762 3 16.0697 3 14V10C3 5.02944 7.02944 1 12 1ZM12 4C10.7042 4 9.50434 4.41077 8.52353 5.10921L9.96848 6.55356C10.4904 6.23277 11.1033 6.03762 11.75 6.00569L12 6C13.6569 6 15 7.34315 15 9V14H17.999L18 10C18 6.68629 15.3137 4 12 4Z"></path>
                                    </svg>
                                    Monthwise Biometric Details
                                </h4>
                                <form method="get" action="{{ route('biometric.monthly') }}" id="employee-monthly-form" class="flex items-center">
                                    @csrf
                                    <div class="flex items-center space-x-2">

                                        <label for="employee" class="font-bold">Select Employee:</label>
                                        <select name="employee" id="employee" class="border border-gray-200 focus:z-10 rounded-md p-2">
                                            <option value="">Select Employee</option>
                                            @php
                                                // Sort the employees alphabetically by first name
                                                $sortedEmployees = $employees->sortBy('fname');
                                            @endphp
                                            @foreach($sortedEmployees as $employee)
                                                <option value="{{ $employee->EmployeeCode }}">
                                                    {{ $employee->fname }} {{ $employee->mname ? $employee->mname . ' ' : '' }}{{ $employee->lname }}
                                                </option>
                                            @endforeach
                                        </select>
                                        
                                        <label for="month" class="font-bold">Month:</label>
                                        <select name="month" id="month" class="border border-gray-200 focus:z-10 rounded-md p-2">
                                            <!-- Options will be added here by JavaScript -->
                                        </select>
                            
                                        <label for="year" class="font-bold">Year:</label>
                                        <select id="ddlYears" name="year" class="border border-gray-200 focus:z-10 rounded-md p-2">
                                            <!-- Options will be added here by JavaScript -->
                                        </select>
                            
                                        <div class="flex items-center space-x-2 ml-2">
                                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 text-xs rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">Search</button>
                                        </div>
                                    </div>                                    
                                </form>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="table-bordered table-auto rounded-sm ti-striped-table ti-custom-table-head overflow-auto">
                                <!-- Display employee logs -->
                                @if(isset($employeeLogs) && !empty($employeeLogs))
                                    <div class="relative p-6 bg-white shadow-lg rounded-lg">
                                        <div class="flex justify-between items-center">
                                            <h4 class="text-xl font-bold ">Employee Logs for {{ date('F', mktime(0, 0, 0, $currentMonth, 1)) }} {{ $currentYear }}</h4>
                                            <h4 class="text-lg font-bold">Employee Name: {{ $selectedEmployee->fname }} {{ $selectedEmployee->mname ? $selectedEmployee->mname . ' ' : '' }}{{ $selectedEmployee->lname }}</h4>
                                        </div>
                                        @foreach($employeeLogs as $employeeCode => $logs)
                                            <h5 class="text-lg font-bold">Employee Code: {{ $employeeCode }}</h5>
                                            {{-- <table id="monthly_table" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                <thead class="bg-gray-50 dark:bg-black/20">
                                                    <tr class="">
                                                        
                                                        <th class="border border-gray-300 px-4 py-2">Date</th>
                                                        <th class="border border-gray-300 px-4 py-2">Entry log</th>
                                                         <th class="border border-gray-300 px-4 py-2">Entry log</th>
                                                        <th class="border border-gray-300 px-4 py-2">Exit log</th>
                                                        <th class="border border-gray-300 px-4 py-2">Device</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($logs as $log)
                                                        <tr>
                                                            <td class="border border-gray-300 px-4 py-2">{{ date('Y-m-d', strtotime($log->LogDate)) }}</td>
                                                            <td class="border border-gray-300 px-4 py-2">{{ date('H:i:s', strtotime($log['entryLog']->LogDate)) }}</td>
                                                            <td class="border border-gray-300 px-4 py-2">{{ date('H:i:s', strtotime($log['entryLog']->DeviceId)) }}</td>
                                                            <td class="border border-gray-300 px-4 py-2">{{ date('H:i:s', strtotime($log['exitLog']->LogDate)) }}</td>
                                                            <td class="border border-gray-300 px-4 py-2">{{ date('H:i:s', strtotime($log['exitLog']->DeviceId)) }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table> --}}
                                            <table id="monthly_table" class="ti-custom-table ti-custom-table-head whitespace-nowrap mt-2">
                                    <thead class="bg-gray-50 dark:bg-black/20">
                                        <tr>
                                            <th class="border border-gray-300 px-4 py-2">Date</th>
                                            <th class="border border-gray-300 px-4 py-2">Entry Log</th>
                                            <th class="border border-gray-300 px-4 py-2">Entry Device</th>
                                            <th class="border border-gray-300 px-4 py-2">Exit Log</th>
                                            <th class="border border-gray-300 px-4 py-2">Exit Device</th>
                                            <th class="border border-gray-300 px-4 py-2">Duration</th>
                                            {{-- <th class="border border-gray-300 px-4 py-2">Action</th> --}}

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($logs as $date => $log)
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">{{ $date }}</td>
                                                <td class="border border-gray-300 px-4 py-2">
                                                    @if ($log['entryLog'])
                                                        {{ date('H:i:s', strtotime($log['entryLog']->LogDate)) }}
                                                    @endif
                                                </td>
                                                <td class="border border-gray-300 px-4 py-2">
                                                    @if ($log['entryDevice'])
                                                        {{ $log['entryDevice'] }}
                                                    @endif
                                                </td>
                                                <td class="border border-gray-300 px-4 py-2">
                                                    @if ($log['exitLog'])
                                                        {{ date('H:i:s', strtotime($log['exitLog']->LogDate)) }}
                                                    @endif
                                                </td>
                                                <td class="border border-gray-300 px-4 py-2">
                                                    @if ($log['exitDevice'])
                                                        {{ $log['exitDevice'] }}
                                                    @endif
                                                </td>
                                                <td class="border border-gray-300 px-4 py-2">
                                                    @if ($log['duration'])
                                                        {{ $log['duration'] }}
                                                    @endif
                                                </td>
                                                
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
    <tr><strong>
        <td class="border border-gray-300 px-4 py-2" colspan="6"><b>Average work duration Duration of the month is :
        
            @if ($averageDurations[$selectedEmployee->EmployeeCode] ?? null)
                {{ $averageDurations[$selectedEmployee->EmployeeCode] }}
            @endif
        </b></td>
    </tr>
</tfoot>
                                </table>
                                        @endforeach
                                    </div>  
                                @endif
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

        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"
        ></script>

        <script src="https://cdn.datatables.net/1.13.6/js/dataTables.tailwindcss.min.js"></script>

        <script href="https://cdn.tailwindcss.com/3.3.5"></script>
        <script>
            $(document).ready(function(){
               //alert('Hello from jquery');

               new DataTable('#monthly_table');
            });
        </script>

   <script>
    window.onload = function () {
        // Populate the month dropdown
        var monthDropdown = document.getElementById("month");
        for (var i = 1; i <= 12; i++) {
            var option = document.createElement("OPTION");
            option.value = i;
            option.innerHTML = new Date(0, i - 1).toLocaleString('default', { month: 'long' });
            monthDropdown.appendChild(option);
        }

        // Populate the year dropdown
        var ddlYears = document.getElementById("ddlYears");
        var currentYear = (new Date()).getFullYear();
        for (var i = 2023; i <= currentYear; i++) {
            var option = document.createElement("OPTION");
            option.value = i;
            option.innerHTML = i;
            ddlYears.appendChild(option);
        }
    };

    // Function to handle form submission
    document.getElementById('employee-monthly-form').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the form from submitting normally

        var selectedEmployee = document.getElementById("employee").value;
        var selectedMonth = document.getElementById("month").value;
        var selectedYear = document.getElementById("ddlYears").value;

        // Redirect to the desired route with selected parameters
        window.location.href = "{{ route('biometric.monthly') }}" + "?employee=" + selectedEmployee + "&month=" + selectedMonth + "&year=" + selectedYear;
    });

    // Adjust width of dropdown arrow container
    //var selectWrapper = document.getElementById("ddlYears").parentNode;
    //selectWrapper.style.width = "120px";
</script>
<script>
        $(document).ready(function() {
            $('#employee-logs-table').DataTable({
                processing: true,
                serverSide: false, // Set to true if you're using server-side processing
                paging: true,
                pageLength: 10, // Number of records per page
                lengthMenu: [10, 25, 50, 100], // Optional: Customize the page length menu
                data: {!! json_encode($employeeLogs) !!}, // Pass your data to Datatables
                columns: [
                    { data: 'LogDate', name: 'LogDate' }, // Adjust 'LogDate' to match your data structure
                    { data: 'LogTime', name: 'LogTime' }, // Adjust 'LogTime' to match your data structure
                    { data: 'DeviceId', name: 'DeviceId' } // Adjust 'DeviceId' to match your data structure
                ]
            });
        });
    </script>

@endsection
