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
                         <!-- Page Header -->
                         <div class="block justify-between page-header sm:flex">
                            <div>
                                <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Establishment Section</h3>
                            </div>
                            <ol class="flex items-center whitespace-nowrap min-w-0">
                                <li class="text-sm">
                                    <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="{{route('ESTB.staff')}}">
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
                            <!--For filtering the data as per requirement-->


                            <!--Filtering the data Ends-->
                            <div class="box">
                                <div class="box-body">
                                    <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
                                        <div class="box">
                                            <div class="flex justify-end mt-4">
                                                <button id="exportToExcel" class="bg-green-500 text-white px-4 py-2 rounded-md focus:outline-none">Export to Excel</button>
                                            </div>
                                            <table id="staff_information" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                <thead class="bg-gray-50 dark:bg-black/20">
                                                    <tr class="">
                                                        <th scope="col" class="dark:text-white/80 font-bold ">S.No</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">Staff Name</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">Employee Type</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">Department Short Name</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">Association</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">Religion</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">Designation</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">Gender</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">Date of Birth</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">Date of Joining</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">Date Of Superannution</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">Date Of Confirmation</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">Date Of Increment</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">Blood Group</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">PAN Card No:</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">Adhar Card No:</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">Contact No:</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">AICTE ID:</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">VTU ID:</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">Local Address</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">Permanant Address</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">Emergency No</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">Emergency Name</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">Action</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $i=1;
                                                    @endphp
                                                        @foreach ($staff as $st)
                                                            <tr class="">
                                                                <td>{{ $i++ }}</td>
                                                                <td>{{ $st->fname.' '.$st->mname.' '.$st->lname. ' ' }}</td>
                                                                {{-- <td>
                                                                    @foreach ($staff as $employee)
                                                                    <p>{{ $employee->employee_type }}</p>
                                                                    @endforeach
                                                                </td> --}}

                                                                {{-- <td>{{ $st->latest_employee_type[0]->employee_type }}</td> --}}

                                                                <td>
                                                                    @foreach ($st->latest_employee_type as $emptype)

                                                                        <p>{{ $emptype->employee_type }}</p>
                                                                    @endforeach
                                                                </td>


                                                                <td>{{ $st->dept_shortname }}</td>
                                                                <td>{{ $st->asso_name }}</td>
                                                                <td>{{ $st->religion_name }}</td>
                                                                <td>{{ $st->design_name }}</td>
                                                                <td>{{ $st->gender }}</td>
                                                                <td>{{ $st->dob }}</td>
                                                                <td>{{ $st->doj }}</td>
                                                                <td>{{ $st->date_of_superanuation }}</td>
                                                                <td>{{ $st->confirmationdate }}</td>
                                                                <td>{{ $st->date_of_increment }}</td>
                                                                <td>{{ $st->bloodgroup }}</td>
                                                                <td>{{ $st->pan_card }}</td>
                                                                <td>{{ $st->adhar_card }}</td>
                                                                <td>{{ $st->contactno }}</td>
                                                                <td>{{ $st->aicte_id }}</td>
                                                                <td>{{ $st->vtu_id }}</td>
                                                                <td>{{ $st->local_address }}</td>
                                                                <td>{{ $st->permanent_address }}</td>
                                                                <td>{{ $st->emergency_no }}</td>
                                                                <td>{{ $st->emergency_name }}</td>
                                                                <td class="font-medium space-x-2 rtl:space-x-reverse">

                                                                    <a href="{{route('ESTB.staff.show',$st->id)}}"
                                                                        data-hs-overlay="#staff_information{{$i}}"
                                                                        class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                         <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                                             View
                                                                         </span>
                                                                    </a>
                                                                </td>
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

            $(document).ready(function ()
            {

                $('#filterBtn').click(function() {
                    var formData = $('#searchForm').serialize();
                    //console.log('123');
                    // alert("Search button clicked!");

                    // Send AJAX request to server
                    $.ajax({
                        type: 'get',
                        url: 'ESTB/staff/staffinformation',
                        //url: 'staff/staffinformation',

                        data: formData,
                        success: function(response) {
                            $('#staff_table').html(response);
                        },

                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                            //alert("An error occurred. Please try again.");
                        }
                    });
                });

                // To Select multiple values from dropdown to Filter the staff information
                $('.select-all').change(function () {
                    $('input[name="departments[]"]').prop('checked', this.checked);
                });

                $('.select-all-association').change(function () {
                    $('input[name="associations[]"]').prop('checked', this.checked);
                });

                $('.select-all-designation').change(function () {
                    $('input[name="designations[]"]').prop('checked', this.checked);
                });

                $('.select-all-religion').change(function () {
                    $('input[name="religions[]"]').prop('checked', this.checked);
                });

                new DataTable('#staff_information');
                $('#exportToExcel').on('click', function () {
                    var table = $('#staff_information').clone();

                    // Ensure each cell has proper formatting
                    table.find('td').css({
                        'border': '1px solid #000',
                        'padding': '5px'
                    });

                    // Create a Blob containing the modified table data
                    var blob = new Blob([table[0].outerHTML], { type: 'application/vnd.ms-excel;charset=utf-8' });

                    // Check for Internet Explorer and Edge
                    if (window.navigator && window.navigator.msSaveOrOpenBlob) {
                        window.navigator.msSaveOrOpenBlob(blob, 'staff_information_data.xls');
                    } else {
                        var link = $('<a>', {
                            href: URL.createObjectURL(blob),
                            download: 'staff_information_data.xls'
                        });

                        // Trigger the click to download
                        link[0].click();
                    }
                });

            });
        </script>




@endsection
