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

                        <div class="col-span-12 xl:col-span-12 mt-10">
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
                                                        {{-- <th scope="col" class="dark:text-white/80 font-bold ">Email</th> --}}
                                                        <th scope="col" class="dark:text-white/80 font-bold ">Department Short Name</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">Association</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">Religion</th>
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
                                                                <td>
                                                                    @foreach ($staff as $employee)
                                                                    <p>{{ $employee->role }}</p>
                                                                    @endforeach
                                                                </td>
                                                                {{-- <td>{{ $st->email }}</td> --}}

                                                                <td>{{ $st->dept_shortname }}</td>
                                                                <td>{{ $st->asso_name }}</td>
                                                                <td>{{ $st->religion_name }}</td>
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

                new DataTable('#staff_information');

                $('#exportToExcel').on('click', function () {
                    var table = $('#staff_information').clone();

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
