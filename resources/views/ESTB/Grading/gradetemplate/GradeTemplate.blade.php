@extends('layouts.master')

@section('styles')
    <link rel="stylesheet" href="{{ asset('build/assets/libs/tabulator-tables/css/tabulator.min.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/libs/choices.js/public/assets/styles/choices.min.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/libs/flatpickr/flatpickr.min.css') }}">
    {{-- datatables css --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.tailwindcss.min.css">
@endsection

@section('content')
<div class="content">
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
    <div class="main-content">
        <div class="block justify-between page-header sm:flex">
            <div>
                <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium">Establishment Section</h3>
            </div>
            <ol class="flex items-center whitespace-nowrap min-w-0">
                <li class="text-sm">
                    <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                            <path d="M17 15.2454V22.1169C17 22.393 16.7761 22.617 16.5 22.617C16.4094 22.617 16.3205 22.5923 16.2428 22.5457L12 20L7.75725 22.5457C7.52046 22.6877 7.21333 22.6109 7.07125 22.3742C7.02463 22.2964 7 22.2075 7 22.1169V15.2454C5.17107 13.7793 4 11.5264 4 9C4 4.58172 7.58172 1 12 1C16.4183 1 20 4.58172 20 9C20 11.5264 18.8289 13.7793 17 15.2454ZM12 15C15.3137 15 18 12.3137 18 9C18 5.68629 15.3137 3 12 3C8.68629 3 6 5.68629 6 9C6 12.3137 8.68629 15 12 15ZM12 13C9.79086 13 8 11.2091 8 9C8 6.79086 9.79086 5 12 5C14.2091 5 16 6.79086 16 9C16 11.2091 14.2091 13 12 13Z"></path>
                        </svg>
                        Grade Template
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                            <path d="M12.1717 12.0005L9.34326 9.17203L10.7575 7.75781L15.0001 12.0005L10.7575 16.2431L9.34326 14.8289L12.1717 12.0005Z"></path>
                        </svg>
                    </a>
                </li>
            </ol>
        </div>
        <div class="grid grid-cols-12 gap-x-6">
            <div class="col-span-12">
                <div class="box">
                    <div class="box-header">
                        <div class="flex">
                            <h5 class="box-title my-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32">
                                    <path d="M17 15.2454V22.1169C17 22.393 16.7761 22.617 16.5 22.617C16.4094 22.617 16.3205 22.5923 16.2428 22.5457L12 20L7.75725 22.5457C7.52046 22.6877 7.21333 22.6109 7.07125 22.3742C7.02463 22.2964 7 22.2075 7 22.1169V15.2454C5.17107 13.7793 4 11.5264 4 9C4 4.58172 7.58172 1 12 1C16.4183 1 20 4.58172 20 9C20 11.5264 18.8289 13.7793 17 15.2454ZM12 15C15.3137 15 18 12.3137 18 9C18 5.68629 15.3137 3 12 3C8.68629 3 6 5.68629 6 9C6 12.3137 8.68629 15 12 15ZM12 13C9.79086 13 8 11.2091 8 9C8 6.79086 9.79086 5 12 5C14.2091 5 16 6.79086 16 9C16 11.2091 14.2091 13 12 13Z"></path>
                                </svg>
                                Grade Template
                            </h5>
                        </div>
                    </div>
                    <div class="box-body">
                    <div class="flex justify-end">
                        <div class="flex justify-end mt-4">
                            <button id="exportToExcel" class="bg-green-500 text-white px-4 py-2 rounded-md focus:outline-none">Export to Excel</button>
                        </div>
                    </div>
                        <h1 class="text-2xl font-bold mb-4">Grading Staff Template</h1>
                        <div id="basic-table" class="ti-custom-table ti-striped-table ti-custom-table-hover table-bordered rounded-sm overflow-auto">
                        <form method="POST" action="{{ route('grading.staff.update') }}">
                             @csrf
                            <table id="Grade_template_table" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                <thead class="bg-gray-50 dark:bg-black/20">
                                    <tr>
                                        <th scope="col" class="dark:text-white/80">S.no</th>
                                        <th scope="col" class="dark:text-white/80">STAFF ID</th>
                                        <th scope="col" class="dark:text-white/80">Staff Name</th>
                                        <th scope="col" class="dark:text-white/80">Department</th>
                                        <th scope="col" class="dark:text-white/80">Year</th>
                                        <th scope="col" class="dark:text-white/80">Month</th>
                                        <th scope="col" class="dark:text-white/80">Grade</th>
                                        <th scope="col" class="dark:text-white/80">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach($grading as $gradingStaff)
                                        <tr>
                                            <td><span>{{ $i++ }}</span></td>
                                            <td class="border border-gray-300 px-4 py-2"><span>{{ $gradingStaff->staff_id }}</span></td>
                                            <td class="border border-gray-300 px-4 py-2"><span>{{ $gradingStaff->staff->fname}} {{ $gradingStaff->staff->mname}} {{$gradingStaff->staff->lname}}</span></td>
                                            <td class="border border-gray-300 px-4 py-2"><span>{{ $gradingStaff->staff->departments->first()->dept_shortname }}</span></td>
                                            <td class="border border-gray-300 px-4 py-2"><span>{{ $gradingStaff->year }}</span></td>
                                            <td class="border border-gray-300 px-4 py-2"><span>{{ $gradingStaff->month }}</span></td>
                                            <td class="border border-gray-300 px-4 py-2">
                                                <select name="grade[{{ $gradingStaff->id }}]" id="grade_{{ $gradingStaff->id }}" data-staff-id="{{ $gradingStaff->id }}">
                                                    <option value="">  </option> 
                                                    @foreach($gradesArray as $gradeOption)
                                                        <option value="{{ $gradeOption }}" {{ $gradingStaff->grade == $gradeOption ? 'selected' : '' }}>{{ $gradeOption }}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td class="border border-gray-300 px-4 py-2"><span>{{ $gradingStaff->status }}</span></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="flex justify-end mt-4">
                                <button type="submit" class="ti-btn bg-primary text-white hover:bg-primary focus:ring-primary dark:focus:ring-offset-white/10 float-right">Submit</button>
                            </div>
                        </form>
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
        <script>
            $(document).ready(function(){
               //alert('Hello from jquery');

               new DataTable('#Grade_template_table');


                $('#exportToExcel').on('click', function () {
                    var table = $('#Grade_template_table').clone();
                    table.find('th:not(:nth-child(3)):not(:nth-child(4)):not(:nth-child(5)):not(:nth-child(6)):not(:nth-child(7))').remove();
                    table.find('td:not(:nth-child(3)):not(:nth-child(4)):not(:nth-child(5)):not(:nth-child(6)):not(:nth-child(7))').remove();
                    // Ensure each cell has proper formatting
                    table.find('td').css({
                        'border': '1px solid #000',
                        'padding': '5px'
                    });

                    // Create a Blob containing the modified table data
                    var blob = new Blob([table[0].outerHTML], { type: 'application/vnd.ms-excel;charset=utf-8' });

                    // Check for Internet Explorer and Edge
                    if (window.navigator && window.navigator.msSaveOrOpenBlob) {
                        window.navigator.msSaveOrOpenBlob(blob, 'Grade_template_data.xls');
                    } else {
                        var link = $('<a>', {
                            href: URL.createObjectURL(blob),
                            download: 'Grade_template_data.xls'
                        });
                        // Trigger the click to download
                        link[0].click();
                    }
                });
            });

            document.getElementById('gradingForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission
        // Serialize form data
        const formData = new FormData(this);
        // Send form data via AJAX
        fetch(this.action, {
            method: 'POST',
            body: formData
        }).then(response => {
            // Handle response, maybe show a success message
            console.log('Grades updated successfully');
        }).catch(error => {
            console.error('Error updating grades:', error);
        });
    });


    // $(document).ready(function() {
    // $('.edit-btn').click(function() {
    //     // Perform actions for editing the row data, e.g., open modal or redirect
    //     // You can access the specific row's data using jQuery DOM traversal methods
    //     // For example:
    //     var row = $(this).closest('tr');
    //     var staffId = row.find('td:eq(1)').text(); // Get staff ID
    //     var year = row.find('td:eq(4)').text(); // Get year
    //     var month = row.find('td:eq(5)').text(); // Get month
    //     var grade = row.find('select').val(); // Get selected grade
        
    //     // Example: Open modal with the row data for editing
    //     // $('#editModal').modal('show');
        
    //     // Example: Redirect to edit page with parameters
    //     // window.location.href = '/edit?id=' + staffId + '&year=' + year + '&month=' + month + '&grade=' + grade;
//     });
// });
        </script>


@endsection
