@extends('layouts.master')

@section('styles')
    <!-- CHOICES CSS -->
    <link rel="stylesheet" href="{{ asset('build/assets/libs/choices.js/public/assets/styles/choices.min.css') }}">
    <!-- FLATPICKR CSS -->
    <link rel="stylesheet" href="{{ asset('build/assets/libs/flatpickr/flatpickr.min.css') }}">
    <script>
        var base_url = "{{ URL::to('/') }}";
    </script>
@endsection

@section('content')
    <div class="content">
        <!-- Start::main-content -->
        <div class="main-content">
            <!-- Page Header -->
            <div class="block justify-between page-header sm:flex">
                <div>
                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium">Establishment Section</h3>
                </div>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-sm">
                        <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="{{ route('ESTB.staff') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                                <path d="M4 22C4 17.5817 7.58172 14 12 14C16.4183 14 20 17.5817 20 22H18C18 18.6863 15.3137 16 12 16C8.68629 16 6 18.6863 6 22H4ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11Z"></path>
                            </svg>
                            Staff
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                                <path d="M12.1717 12.0005L9.34326 9.17203L10.7575 7.75781L15.0001 12.0005L10.7575 16.2431L9.34326 14.8289L12.1717 12.0005Z"></path>
                            </svg>
                        </a>
                    </li>
                </ol>
            </div>
            <!-- Page Header Close -->
            <div class="grid grid-cols-12 gap-x-6">
                <div class="col-span-6">
                    <!-- For Checking whether status is set or no-->
                    @if(session('status'))
                        @if (session('status') == 1)
                            <div class='bg-white dark:bg-bgdark border border-success alert text-success' role='alert'>
                                <span class='font-bold'>Result: </span> Database transaction Successful
                            </div>
                        @elseif(session('status') == 0)
                            <div class='bg-white dark:bg-bgdark border border-danger alert text-danger' role='alert'>
                                <span class='font-bold'>Result : </span> Error in Database transaction
                            </div>
                        @endif
                        @php
                            Illuminate\Support\Facades\Session::forget('status');
                            header("refresh: 1");
                        @endphp
                    @endif
                </div>
            </div>
            <!-- Start::row-1 -->
            <div class="col-span-12 xl:col-span-12 mt-10">
                <!-- For filtering the data as per requirement -->
                <form action="{{ route('ESTB.staff.generatestatistics') }}" method="GET" id="statistic_form">
                    <div class="col-span-12 xl:col-span-12 mb-6">
                        <div class="flex space-x-4 items-center">
                            <label for="start_date" class="block text-gray-700 dark:text-gray-300">Start Date:</label>
                            <input type="date" id="start_date" name="start_date" class="flatpickr bg-gray-200 text-gray-900 dark:bg-gray-700 dark:text-white rounded-md px-4 py-2" placeholder="Select Start Date" value="{{ request('start_date') }}">
                        
                            <label for="end_date" class="block text-gray-700 dark:text-gray-300">End Date:</label>
                            <input type="date" id="end_date" name="end_date" class="flatpickr bg-gray-200 text-gray-900 dark:bg-gray-700 dark:text-white rounded-md px-4 py-2" placeholder="Select End Date" value="{{ request('end_date') }}">
                        
                            <button type="submit" id="filterButton" class="bg-blue-500 text-white px-4 py-2 rounded-md focus:outline-none">Search</button>
                        </div>
                    </div>
                </form>
                
                
                <!-- Filtering the data Ends -->
                <div class="box">
                    <div class="box-body">
                        <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
                            <div class="box">
                                <div class="flex justify-end mt-4">
                                    <button id="exportToExcel" class="bg-green-500 text-white px-4 py-2 rounded-md focus:outline-none">Export to Excel</button>
                                </div>
                                <table id="statistic_information" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                    <thead>
                                        <tr>
                                            <th>SI. No.</th>
                                            <th>Designation</th>
                                            <th>Vac.</th>
                                            <th>Scale of Pay</th>
                                            <th colspan="2">Hindu</th>
                                            <th colspan="2">Islam</th>
                                            <th colspan="2">Jainism</th>
                                            <th colspan="2">Christian</th>
                                            <th colspan="2">Total</th>
                                            
                                        </tr>
                                       
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <th>M</th>
                                            <th>F</th>
                                            <th>M</th>
                                            <th>F</th>
                                            <th>M</th>
                                            <th>F</th>
                                            <th>M</th>
                                            <th>F</th>
                                            <th>M</th>
                                            <th>F</th>
                                         </tr>
                                       
                                     </thead>
                                    
                                    <tbody>
                                        @foreach($staffData as $index => $member)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $member->design_name }}</td>
                                                <td>{{ $member->designation_type }}</td>
                                                {{-- <td>{{ $member->payscale_title }}</td> --}}
                                                 <td>{{ $member->payscale_title }} ({{ $member->basepay ? $member->basepay : 'N/A' }} - {{ $member->maxpay ? $member->maxpay : 'N/A' }})</td>
                                                <td>{{ $member->hindu_male_count }}</td>
                                                <td>{{ $member->hindu_female_count }}</td>
                                                <td>{{ $member->islam_male_count }}</td>
                                                <td>{{ $member->islam_female_count }}</td>
                                                <td>{{ $member->jainism_male_count }}</td>
                                                <td>{{ $member->jainism_female_count }}</td>
                                                <td>{{ $member->christian_male_count }}</td>
                                                <td>{{ $member->christian_female_count }}</td>
                                                <td>{{ $member->total_male_count }}</td>
                                                <td>{{ $member->total_female_count }}</td>
                                            </tr>
                                        @endforeach
                                        @php
                                            $totalMaleHindu = 0;
                                            $totalFemaleHindu = 0;
                                            $totalMaleIslam = 0;
                                            $totalFemaleIslam = 0;
                                            $totalMaleJainism = 0;
                                            $totalFemaleJainism = 0;
                                            $totalMaleChristian = 0;
                                            $totalFemaleChristian = 0;
                                            $totalMale = 0;
                                            $totalFemale = 0;
                                            foreach ($staffData as $member) 
                                            {
                                                $totalMaleHindu += $member->hindu_male_count;
                                                $totalFemaleHindu += $member->hindu_female_count;
                                                $totalMaleIslam += $member->islam_male_count;
                                                $totalFemaleIslam += $member->islam_female_count;
                                                $totalMaleJainism += $member->jainism_male_count;
                                                $totalFemaleJainism += $member->jainism_female_count;
                                                $totalMaleChristian += $member->christian_male_count;
                                                $totalFemaleChristian += $member->christian_female_count;
                                                $totalMale += $member->total_male_count;
                                                $totalFemale += $member->total_female_count;
                                            }
                                        @endphp
                                        <tr>
                                            <th colspan="4">Total</th>
                                            <th>{{ $totalMaleHindu }}</th>
                                            <th>{{ $totalFemaleHindu }}</th>
                                            <th>{{ $totalMaleIslam }}</th>
                                            <th>{{ $totalFemaleIslam }}</th>
                                            <th>{{ $totalMaleJainism }}</th>
                                            <th>{{ $totalFemaleJainism }}</th>
                                            <th>{{ $totalMaleChristian }}</th>
                                            <th>{{ $totalFemaleChristian }}</th>
                                            <th>{{ $totalMale }}</th>
                                            <th>{{ $totalFemale }}</th>
                                        </tr>
                                    </tbody>
                                </table>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End::row-1 -->
        </div>
        <!-- Start::main-content -->
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

        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/dataTables.tailwindcss.min.js"></script>
        <script href="https://cdn.tailwindcss.com/3.3.5"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="chosen.css">
        <script src="jquery.js"></script>
        <script src="chosen.jquery.js"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>

        <script>
            document.getElementById('exportToExcel').addEventListener('click', function() {
                // Get the table element
                var table = document.getElementById('statistic_information');
                
                // Convert the table to a worksheet
                var wb = XLSX.utils.table_to_book(table, {sheet: "Sheet1"});
                
                // Generate the Excel file and download it
                XLSX.writeFile(wb, 'statistic_information.xlsx');
            });
        </script>

{{-- <script>
    document.getElementById('statistic_form').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission
        
        var form = this;
        var formData = new FormData(form);
    
        fetch(form.getAttribute('action'), {
            method: 'GET',
            body: formData, // Send form data in the request body
        })
        .then(response => response.json())
        .then(data => {
            // Update the table with the new data
            updateTable(data);
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
    
    function updateTable(data) {
        var tableBody = document.querySelector('#statistic_information tbody');
        tableBody.innerHTML = ''; // Clear existing rows
        
        // Add new rows with filtered data
        data.forEach(function(rowData, index) {
            var row = document.createElement('tr');
            row.innerHTML = `
                <td>${index + 1}</td>
                <td>${rowData.design_name}</td>
                <td>${rowData.designation_type}</td>
                <td>${rowData.payscale_title}</td>
                <td>${rowData.hindu_male_count}</td>
                <td>${rowData.hindu_female_count}</td>
                <td>${rowData.islam_male_count}</td>
                <td>${rowData.islam_female_count}</td>
                <td>${rowData.jainism_male_count}</td>
                <td>${rowData.jainism_female_count}</td>
                <td>${rowData.christian_male_count}</td>
                <td>${rowData.christian_female_count}</td>
                <td>${rowData.total_male_count}</td>
                <td>${rowData.total_female_count}</td>
            `;
            tableBody.appendChild(row);
        });
    }
</script> --}}
<script>
    document.getElementById('statistic_form').addEventListener('submit', function(event) {
        // Get start and end dates
        const startDate = document.getElementById('start_date').value;
        const endDate = document.getElementById('end_date').value;
        
        // Validate date input
        if (startDate && endDate && new Date(startDate) > new Date(endDate)) {
            event.preventDefault(); // Prevent form submission
            alert('End date must be greater than or equal to start date.');
        }
    });
</script>

        

       
@endsection
