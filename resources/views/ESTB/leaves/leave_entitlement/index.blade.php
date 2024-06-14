@extends('layouts.master')

@section('styles')

        {{-- datatables css --}}
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.tailwindcss.min.css">

        <!-- FLATPICKR CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/flatpickr/flatpickr.min.css')}}">

        <link rel="stylesheet"  href= "https://cdn.datatables.net/2.0.1/css/dataTables.dataTables.css"/>
        <link rel="stylesheet"  href= "https://cdn.datatables.net/fixedcolumns/5.0.0/css/fixedColumns.dataTables.css"/>

            <style>
                th, td { white-space: nowrap; }
                div.dataTables_wrapper {
                    width: 800px;
                    margin: 0 auto;
                }
            </style>
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
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M11 6V14H19C19 18.4183 15.4183 22 11 22C6.58172 22 3 18.4183 3 14C3 9.66509 6.58 6 11 6ZM21 2V4L15.6726 10H21V12H13V10L18.3256 4H13V2H21Z"></path></svg>
                                         Leave Entitlement
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
                                    <div class="box">
                                        <div class="box-header">
                                            <div class="flex">
                                                <h5 class="box-title my-auto">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32" fill="currentColor"><path d="M11 6V14H19C19 18.4183 15.4183 22 11 22C6.58172 22 3 18.4183 3 14C3 9.66509 6.58 6 11 6ZM21 2V4L15.6726 10H21V12H13V10L18.3256 4H13V2H21Z"></path></svg>
                                                    Leave Entitlement
                                                </h5>

                                            </div>
                                        </div>
                                        <div class="box-body">

                                            <div class=" rounded-sm     ">
                                                <table id="entitlement_table" class="stripe row-border order-column">
                                                    <thead class="bg-neutral-50 dark:bg-black/20" >
                                                        <tr class="">
                                                            <th scope="col" class="dark:text-white/80 font-bold" rowspan="2">Sl. No</th>
                                                            <th scope="col" class="dark:text-white/80 font-bold" rowspan="2">Emp. ID</th>
                                                            <th scope="col" class="dark:text-white/80 font-bold" rowspan="2" >Employee Name</th>
                                                            <th scope="col" class="dark:text-white/80 font-bold text-center"  colspan="{{count($leave_types)}}" data-dt-order="disable"> Entitled</th>

                                                            <th scope="col" class="dark:text-white/80 font-bold text-center"   colspan="{{count($leave_types_taken)}}" data-dt-order="disable"> Taken </th>

                                                            <th scope="col" class="dark:text-white/80 font-bold text-center"  colspan="{{count($leave_types)}}" data-dt-order="disable"> Balance</th>

                                                            <th scope="col" class="dark:text-white/80 font-bold" rowspan="2" >Actions</th>
                                                        </tr>
                                                        <tr>

                                                        <!--For Displaying Entitle menu options in header-->
                                                            @foreach ($leave_types as $l_type)
                                                                <th scope="col" class="dark:text-white/80 font-bold">{{$l_type->shortname}}</th>
                                                            @endforeach
                                                            <!--For Displaying Taken menu options in header-->
                                                            @foreach ($leave_types_taken as $l_type_taken)
                                                            <th scope="col" class="dark:text-white/80 font-bold">{{$l_type_taken->shortname}}</th>
                                                            @endforeach
                                                        <!--For Displaying Balance menu options in header (the Same variable is used as of entitlement.)-->
                                                            @foreach ($leave_types as $l_type)
                                                            <th scope="col" class="dark:text-white/80 font-bold">{{$l_type->shortname}}</th>
                                                            @endforeach

                                                        </tr>
                                                    </thead>
                                                    @php
                                                        $i=1;

                                                    @endphp
                                                    <tbody class="">

                                                        @foreach ($data as $st)
                                                            <tr>
                                                                <td class="dark:text-white/80 font-bold items-center !important">{{$i++}}</td>
                                                                <td class="dark:text-white/80 font-bold text-center !important">{{$st['id']}}</td>
                                                                <td>{{$st['name'] }}</td>

                                                                {{-- @foreach ($st as ) --}}

                                                                @foreach ($leave_types as $l_type)
                                                                @if(isset($st[$l_type->shortname]['entitled']))
                                                                    <td scope="col" class="dark:text-white/80 px-4 py-2 font-bold text-center !important">{{$st[$l_type->shortname]['entitled']}}</td>
                                                                @else
                                                                <td class="dark:text-white/80 px-4 py-2 font-bold text-center !important">0</td>
                                                                @endif
                                                                    @endforeach
                                                                @foreach ($leave_types_taken as $l_type)
                                                                @if(isset($st[$l_type->shortname]['availed']))
                                                                <td scope="col" class="dark:text-white/80 font-bold text-center !important">{{$st[$l_type->shortname]['availed']}}</td>
                                                                @else
                                                                <td class="dark:text-white/80 font-bold text-center !important" >0</td>
                                                                @endif
                                                                @endforeach
                                                                @foreach ($leave_types as $l_type)
                                                                @if(isset($st[$l_type->shortname]['balance']))
                                                                <td  scope="col" class="dark:text-white/80 font-bold text-center !important">{{$st[$l_type->shortname]['balance']}}</td>
                                                                @else
                                                                <td class="dark:text-white/80 font-bold text-center  !important">0</td>
                                                                @endif
                                                                @endforeach
                                                                <td></td>







                                                            </tr>
                                                        @endforeach
                                                    </tbody>

                                                </table>
                                            </div>

                                        </div>
                                        <div class="box-footer">

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

        <!-- Include the latest jQuery -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

        <!-- Include the latest DataTables -->
        <script src="https://cdn.datatables.net/2.0.1/js/dataTables.min.js"></script>
        <script src=" https://cdn.datatables.net/fixedcolumns/5.0.0/js/dataTables.fixedColumns.js"></script>
        <script src="https://cdn.datatables.net/fixedcolumns/5.0.0/js/fixedColumns.dataTables.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script>
            $(document).ready(function(){
                //new DataTable('#entitlement_table');
                new DataTable('#entitlement_table', {

                    fixedColumns: true,
                    fixedColumns: {
                        left: 3
                    },

                    responsive: true,
                    paging: true,
                    scrollCollapse: true,
                    scrollX: true,
                    sScrollY: 400,
                    columnDefs: [{
                                "defaultContent": "-",
                                "targets": "_all",
                            },
                            { targets: 1, width: '90px' },

                        ]
                });
            });
        </script>



        <!-- INDEX JS -->
        @vite('resources/assets/js/index-8.js')


@endsection