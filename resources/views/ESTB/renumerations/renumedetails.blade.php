@extends('layouts.master')

@section('styles')

        <!-- CHOICES CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/choices.js/public/assets/styles/choices.min.css')}}">

        <!-- FLATPICKR CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/flatpickr/flatpickr.min.css')}}">
        <script>
            var base_url = "{{URL::to('/')}}";
        </script>

@endsection

@section('content')

                <div class="content">

                    <!-- Start::main-content -->
                    <div class="main-content">

                        <!-- Page Header -->

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
                        <div class="col-span-2 xl:col-span-2">
                                <div class="box box-sm">
                                    <div class="box-body searchForm">
                                        <div class="box-body searchForm">
                                            <form action="{{ route('ESTB.renumerations.renumedetails') }}" method="GET" id="searchForm">
                                                <div class="grid gap-1 space-y-2 lg:grid-cols-3 lg:space-y-0">
                                                    <!--Dropdown multiselect checkbox For Department-->
                                                    <div class="grid lg:grid-cols-1 gap-1 space-y-2 lg:space-y-0 border border-gray-300 rounded p-4">
                                                        <label class="ti-form-label mb-0 font-bold">Department <span class="text-red-500">*</span></label>
                                                        <div class="space-y-2" style="max-height: 100px; overflow-y: auto;">
                                                            @php
                                                                $checked = "";

                                                            @endphp


                                                            @php
                                                                $defaultDepartmentIds = range(1, 30);
                                                            @endphp

                                                            <div class="flex">
                                                                <input type="checkbox" class="ti-form-checkbox mt-0.5 select-all">
                                                                <label for="select-all" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Select All</label>
                                                            </div>


                                                            @foreach ($departments as $department)

                                                                <div class="flex">
                                                                    <input type="checkbox" name="departments[]" value="{{ $department->id }}" {{ $checked }} class="ti-form-checkbox mt-0.5 hs-checkbox-group-{{ $department->id }}">
                                                                    <label class="hs-checkbox-group-{{ $department->id }} text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">{{ $department->dept_name }}</label>
                                                                </div>
                                                            @endforeach



                                                        </div>
                                                    </div>


                                                    <!-- Designation multi select dropdown start -->
                                                    <div class="grid lg:grid-cols-1 gap-1 space-y-2 lg:space-y-0 border border-gray-300 rounded p-4">
                                                        <label class="ti-form-label mb-0 font-bold">Designations <span class="text-red-500">*</span></label>
                                                        <div class="space-y-2" style="max-height: 100px; overflow-y: auto;">
                                                            @php $checked = ""; @endphp
                                                            @php $defaultDesignationIds = range(1, 30); @endphp
                                                            <div class="flex">
                                                                <input type="checkbox" class="ti-form-checkbox mt-0.5 select-all-designation">
                                                                <label for="select-all-designation" class="text-sm text-gray-800 ltr:ml-2 rtl:mr-2 dark:text-white/70">Select All</label>
                                                            </div>

                                                            <!-- Teaching Designations -->
                                                            <h3 class="font-bold text-lg text-gray-800">Teaching</h3>
                                                            @foreach ($designations->where('emp_type', 'Teaching')->where('isadditional', 0) as $designation)
                                                                <div class="flex">
                                                                    <input type="checkbox" name="designations[]" value="{{ $designation->id }}" {{ $checked }} class="ti-form-checkbox mt-0.5 hs-checkbox-group-{{ $designation->id }}">
                                                                    <label class="hs-checkbox-group-{{ $designation->id }} text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">{{ $designation->design_name }}</label>
                                                                </div>
                                                            @endforeach

                                                            <!-- Non-Teaching Designations -->
                                                            <h3 class="font-bold text-lg text-gray-800">Non-Teaching</h3>
                                                            @foreach ($designations->where('emp_type', 'Non-Teaching')->where('isadditional', 0) as $designation)
                                                                <div class="flex">
                                                                    <input type="checkbox" name="designations[]" value="{{ $designation->id }}" {{ $checked }} class="ti-form-checkbox mt-0.5 hs-checkbox-group-{{ $designation->id }}">
                                                                    <label class="hs-checkbox-group-{{ $designation->id }} text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">{{ $designation->design_name }}</label>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <!-- Designation multi select dropdown End -->
                                                </div>


                                                </div>
                                                <div class="grid gap-1 space-y-2 lg:grid-cols-3 lg:space-y-0 mt-6">
                                                    <div class="space-y-2">
                                                        <label class="ti-form-label mb-0 font-bold">Employee Type<span class="text-red-500">*</span></label>
                                                        <div class="flex gap-x-6">
                                                            <div class="flex">
                                                                <input type="radio" name="employee_type" value="all" class="ti-form-radio"checked>
                                                                <label for="all" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">All</label>
                                                            </div>
                                                            <div class="flex">
                                                                <input type="radio" name="employee_type" value="Teaching" class="ti-form-radio">
                                                                <label for="Teaching" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Teaching</label>
                                                            </div>
                                                            <div class="flex">
                                                                <input type="radio" name="employee_type" value="Non-teaching" class="ti-form-radio">
                                                                <label for="Non-teaching" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Non-teaching</label>
                                                            </div>
                                                            <!-- Add more radio buttons if applicable -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Search button -->
                                                <div class="flex ">
                                                    <button id="filterBtn" class="bg-blue-500 text-white px-4 mt-10 py-2 rounded-md focus:outline-none hover:bg-blue-700">Search</button>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <!-- <div class="col-span-12 xl:col-span-12 mt-10"> -->
                            <div class="box">
                                <div class="box-body">
                                    <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
                                        <div class="box">
                                            <div class="flex justify-end mt-4">
                                                <button id="exportToExcel" class="bg-green-500 text-white px-4 py-2 rounded-md focus:outline-none">Export to Excel</button>
                                            </div>
                                            <table id="renumeration_staff_information" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
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
                                                @foreach($renumerationheads as $staff)
                                                <tr>
                                                <td class="border border-gray-300 px-4 py-2"><span>{{ $i++ }}</span></td>
                                                    <td class="border border-gray-300 px-4 py-2"><span>{{ $staff->id }}</span></td>
                                                    <td class="border border-gray-300 px-4 py-2"><span>{{ $staff->fname }} {{ $staff->mname }} {{ $staff->lname }}</span></td>
                                                    <td class="border border-gray-300 px-4 py-2"><span>{{ $staff->departments_list }}</span></td>
                                                    <td class="border border-gray-300 px-4 py-2"><span>{{ $staff->renumeration_head}}</span></td>
                                                    <td class="border border-gray-300 px-4 py-2"><span>{{ $staff->date_of_disbursement }}</span></td> <!-- Adjust this field based on your data -->
                                                    <td class="border border-gray-300 px-4 py-2"><span>{{ $staff->amount }}</span></td> <!-- Adjust this field based on your data -->
                                                </tr>
                                                @endforeach
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

        <script>

            $(document).ready(function () {

                new DataTable('#renumeration_staff_information');

                $('#exportToExcel').on('click', function () {
                    var table = $('#renumeration_staff_information').clone();

                    // table.find('td:last-child').remove();
                    // table.find('thead tr th:last-child').remove();
                    // table.find('td').removeAttr('colspan');

                    // Ensure each cell has proper formatting
                    table.find('td').css({
                        'border': '1px solid #000',
                        'padding': '5px'
                    });

                    // Create a Blob containing the modified table data
                    var blob = new Blob([table[0].outerHTML], { type: 'application/vnd.ms-excel;charset=utf-8' });

                    // Check for Internet Explorer and Edge
                    if (window.navigator && window.navigator.msSaveOrOpenBlob) {
                        window.navigator.msSaveOrOpenBlob(blob, 'Renumeration_Template.xls');
                    } else {
                        var link = $('<a>', {
                            href: URL.createObjectURL(blob),
                            download: 'Renumeration_Template.xls'
                        });

                        // Trigger the click to download
                        link[0].click();
                    }
                });

            });
        </script>
<script>
                $('.select-all').change(function () {
                    $('input[name="departments[]"]').prop('checked', this.checked);
                });

                $('.select-all-designation').change(function () {
                    $('input[name="designations[]"]').prop('checked', this.checked);
                });
    </script>



@endsection
