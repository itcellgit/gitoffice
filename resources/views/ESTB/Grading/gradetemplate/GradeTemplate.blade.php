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
                                Grading Staff Template
                            </h5>
                        </div>
                        <div class="block ltr:ml-auto rtl:mr-auto my-auto">
                                    <button type="button" id="downloadtemp" data-hs-overlay="#downloadTemp" class="hs-dropdown-toggle ti-btn ti-btn-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                                            <path d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM5 5V19H19V5H5ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z" fill="rgba(255,255,255,1)"></path>
                                        </svg>
                                        Create Template
                                    </button>

                                    <div id="downloadTemp" class="hs-overlay hidden ti-modal">
                                    <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                            <div class="ti-modal-content">
                                                <div class="ti-modal-header">
                                                    <h3 class="ti-modal-title">Add Year & month for Template</h3>
                                                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#downloadTemp">
                                                        <span class="sr-only">Close</span>
                                                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="ti-modal-body">
                                                    <form id="gradingStaffForm" action="{{ route('grading.staff.index') }}" method="POST">
                                                        @csrf
                                                        <div class="flex justify-center space-x-4 text-center">
                                                        <h1 class="font-bold">Autonomous Grading For</h1>
                                                            <div class="max-w-sm space-y-2">
                                                                <label for="year" class="ti-form-label mb-0 font-bold">Year</label>
                                                                <input type="text" class="my-auto ti-form-input" id="year" name="year">
                                                            </div>
                                                            <div class="max-w-sm space-y-2 text-center">
                                                                <label for="month" class="ti-form-label mb-0 font-bold">Month</label>
                                                                <select class="ti-form-select type" id="month" name="month">
                                                                    <option value="Jan">January</option>
                                                                    <option value="Jul">July</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <input type="submit" id="submitData" class="ti-btn  bg-primary text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10 float-right" value="Add"/>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                
                                    <div class="box-body">
                                            <div class="flex justify-end space-x-4 items-center">
                                                <form action="{{ route('import.excel') }}" method="POST" enctype="multipart/form-data" class="flex items-center space-x-2">
                                                    @csrf
                                                    <div class="space-y-8 font-[sans-serif] max-w-md mx-auto">
                                                        <input type="file" class="w-full text-gray-500 font-medium text-sm bg-blue-100 cursor-pointer py-2 px-4 mr-4 hover:bg-blue-500 hover:text-white rounded-lg rounded-md border-blue-300" name="excel_file"/>
                                                    </div>
                                                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 text-xs rounded-md hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75 whitespace-nowrap">Upload Excel</button>
                                                </form>
                                                <button id="exportToExcel" class="bg-green-500 text-white px-4 py-2 text-xs rounded-md focus:outline-none hover:bg-green-600 focus:ring-2 focus:ring-green-400 focus:ring-opacity-75 whitespace-nowrap">Export to Excel</button>
                                            </div>
                                        </div>
                                    <!-- </div> -->
                    <form id="gradingForm" method="POST" action="{{ route('grading.staff.update') }}">
                        @csrf
                        <div class="flex justify-end my-4">
                        <div id="basic-table" class="ti-custom-table ti-striped-table ti-custom-table-hover table-bordered rounded-sm overflow-auto">
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
                                        <th scope="col" class="dark:text-white/80">Action</th>
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
                                                <span class="grade-span">{{ $gradingStaff->grade ? $gradingStaff->grade : ' ' }}</span>
                                                <select name="grade[{{ $gradingStaff->id }}]" id="grade_{{ $gradingStaff->id }}" data-staff-id="{{ $gradingStaff->id }}" class="grade-select hidden">
                                                    <option value=""></option>
                                                    @foreach($gradesArray as $gradeOption)
                                                        <option value="{{ $gradeOption }}" {{ $gradingStaff->grade == $gradeOption ? 'selected' : '' }}>{{ $gradeOption }}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td class="border border-gray-300 px-4 py-2"><span>{{ $gradingStaff->status }}</span></td>
                                            <td>
                                            <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" data-id="{{ $gradingStaff->id }}" class="edit-btn hs-dropdown-toggle m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                    <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                        Edit
                                                    </span>
                                                </button>
                                                <button type="submit" class="bg-blue-500 text-white px-4 py-2 text-xs rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75 whitespace-nowrap submit-btn hidden">Submit</button>
                                            </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <button id="submitGrades" class="ti-btn bg-primary text-white px-4 py-2 rounded-md hover:bg-primary focus:ring-primary dark:focus:ring-offset-white/10">Submit</button>
                        </div>
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

                //export to excel for empty grade value
                $('#exportToExcel').on('click', function () {
                    var table = $('#Grade_template_table').clone();
                    table.find('th:nth-child(1), th:nth-child(8), th:nth-child(9)').remove();
                    table.find('td:nth-child(1), td:nth-child(8), td:nth-child(9)').remove();
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


                
    //submit button code to store all grade value
    document.addEventListener("DOMContentLoaded", function() {
    const gradingForm = document.getElementById('gradingForm');
    const submitButton = document.getElementById('submitGrades');
    const gradeSelects = document.querySelectorAll('.grade-select');

    function checkAllGradesSelected() {
        let allSelected = true;
        gradeSelects.forEach(select => {
            if (select.value === '') {
                allSelected = false;
            }
        });
        submitButton.disabled = !allSelected;
    }

    gradeSelects.forEach(select => {
        select.addEventListener('change', checkAllGradesSelected);
    });

    gradingForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission
        updateGrades(); // Call function to update grades
    });
    
    function updateGrades() {
        var formData = $('#gradingForm').serialize(); // Serialize form data

        $.ajax({
            type: 'POST',
            url: '{{ route("grading.staff.update") }}', // Change to your route
            data: formData,
            success: function(response) {
                // Handle success response if needed
                console.log(response);
                gradingForm.submit(); // Submit the form after updating grades
            },
            error: function(xhr, status, error) {
                // Handle error response if needed
                console.error(xhr.responseText);
            }
        });
    }
    // Initial check to ensure the button is disabled/enabled on page load
    checkAllGradesSelected();
});


//submit button for edited grade
document.addEventListener("DOMContentLoaded", function() {
        const gradeSelects = document.querySelectorAll('.grade-select');
        gradeSelects.forEach(select => {
            select.addEventListener('change', function() {
                const staffId = this.dataset.staffId;
                const submitButton = this.closest('tr').querySelector('.submit-btn');
                submitButton.classList.remove('hidden');
            });
        });

        const editButtons = document.querySelectorAll('.edit-btn');
        editButtons.forEach(button => {
            button.addEventListener('click', function() {
                const staffId = button.dataset.id;
                const gradeDropdown = document.getElementById(`grade_${staffId}`);
                const gradeSpan = button.closest('tr').querySelector('.grade-span');
                
                if (gradeDropdown.classList.contains('hidden')) {
                    // Show the grade dropdown
                    gradeDropdown.classList.remove('hidden');
                    gradeSpan.style.display = 'none'; // Hide the grade span
                } else {
                    // Hide the grade dropdown
                    gradeDropdown.classList.add('hidden');
                    gradeSpan.style.display = 'inline'; // Show the grade span
                }
            });
        });
    });
        </script>

@endsection
