       

    {{-- staffLeaves section start here --}}
    <div class="box border-0 shadow-none mb-0">
        <div class="box-header">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32" fill="currentColor"><path d="M11 6V14H19C19 18.4183 15.4183 22 11 22C6.58172 22 3 18.4183 3 14C3 9.66509 6.58 6 11 6ZM21 2V4L15.6726 10H21V12H13V10L18.3256 4H13V2H21Z"></path></svg>
            <h5 class="box-title leading-none flex"><i class="ri ri-global-line ltr:mr-2 rtl:ml-2"></i> Staff Leaves Entitlement History</h5>
        </div>
        <div class="box-body">
            <div class="rounded-sm">
                <div class="table-bordered table-auto rounded-sm ti-striped-table ti-custom-table-head overflow-auto"> 
                    <table id="entitlement_table" class="stripe row-border order-column">
                        <thead class="bg-neutral-50 dark:bg-black/20" >
                            <tr class="">                              
                                <th scope="col" class="dark:text-white/80 font-bold" rowspan="2">Sl. No</th>
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
        </div>
    </div>
    {{--Staff Leave Entitlement  End Here --}}


<hr/>

    {{-- Staff Leave History Start Hete --}}
    <div class="box border-0 shadow-none mb-0">
        <div class="box-header">
            <h5 class="box-title leading-none flex"><i class="ri ri-global-line ltr:mr-2 rtl:ml-2"></i> Staff Leaves History</h5>
        </div>
        <div class="col-span-12 xl:col-span-12">
            <div class="box-body">
                <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
                    <div class="flex flex-col md:flex-row md:space-x-4 mb-4">
                        <div class="flex flex-col mb-4 md:w-1/2">
                            <label for="month" class="font-bold mb-2">Month:</label>
                            <select name="month" id="month"
                                class="border border-gray-200 focus:ring-2 focus:ring-green-400 rounded-md p-2">
                                <!-- Options will be added here by JavaScript -->
                            </select>
                        </div>
                
                        <div class="flex flex-col ml-2 mb-4 md:w-1/2">
                            <label for="year" class="font-bold mb-2">Year:</label>
                            <select name="year" id="year"
                                class="border border-gray-200 focus:ring-2 focus:ring-green-400 rounded-md p-2">
                                <!-- Options will be added here by JavaScript -->
                            </select>
                        </div>
                        <button id="searchButton" class="bg-blue-500 ml-2 mt-8 text-white px-4 mb-10 py-2 rounded-md focus:outline-none">
                            Search
                        </button>
                    </div>
                    <table id="staff_leave_history" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                        <thead class="bg-gray-50 dark:bg-black/20">
                            <tr class="">
                                <th scope="col" class="dark:text-white/80 font-bold ">S.No</th>
                                <th scope="col" class="dark:text-white/80 font-bold ">short name</th>
                                <th scope="col" class="dark:text-white/80 font-bold ">Aletrnate Staff</th>
                                <th scope="col" class="dark:text-white/80 font-bold ">Additonal Alternate Staff</th>
                                <th scope="col" class="dark:text-white/80 font-bold ">Reason</th>
                                <th scope="col" class="dark:text-white/80 font-bold ">recommdender</th>
                                <th scope="col" class="dark:text-white/80 font-bold ">Approver</th>
                                <th scope="col" class="dark:text-white/80 font-bold ">From date</th>
                                <th scope="col" class="dark:text-white/80 font-bold ">To date</th>
                                <th scope="col" class="dark:text-white/80 font-bold ">No Of Days</th>
                                <th scope="col" class="dark:text-white/80 font-bold ">Application Status</th>
                                <th scope="col" class="dark:text-white/80 font-bold ">Leave Status</th>
                                <th scope="col" class="dark:text-white/80 font-bold ">Year</th>
                            
                            
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i=1;
                            @endphp
                            @foreach($leaves as $leave)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{ $leave->shortname }}</td>
                                    <td>{{ $leave->alternate_fname }} {{ $leave->alternate_mname }} {{ $leave->alternate_lname }}</td>
                                    <td>
                                        @if($leave->add_alt_fname || $leave->add_alt_mname || $leave->add_alt_lname)
                                            {{ $leave->add_alt_fname }} {{ $leave->add_alt_mname }} {{ $leave->add_alt_lname }}
                                        @else
                                            --NA--
                                        @endif
                                    </td>
                                    <td>{{ $leave->reason }}</td>
                                    <td>{{ $leave->recommender_fname }} {{ $leave->recommender_mname }} {{ $leave->recommender_lname }}</td>
                                    <td>{{ $leave->approver }}</td>
                                    <td><span>{{\Carbon\Carbon::parse($leave->start)->format('d-M-Y') }}</span></td>
                                    <td><span>{{\Carbon\Carbon::parse($leave->end)->format('d-M-Y') }}</span></td>
                                    <td>{{ $leave->total_days }}</td>
                                    <td>{{ $leave->appl_status }}</td>
                                    <td>{{ $leave->leave_status }}</td>
                                    <td>{{ $leave->year }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{-- staff Leaves History Ends here --}}

        <script src="https://code.jquery.com/jquery-3.7.1.js"
            integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
            crossorigin="anonymous">
        </script>

        <!-- Include the latest DataTables -->
        <script src="https://cdn.datatables.net/2.0.1/js/dataTables.min.js"></script>
        <script src=" https://cdn.datatables.net/fixedcolumns/5.0.0/js/dataTables.fixedColumns.js"></script>
        <script src="https://cdn.datatables.net/fixedcolumns/5.0.0/js/fixedColumns.dataTables.js"></script>
        
        
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
        <script>
            
            $(document).ready(function(){ 
                //for leave history
                new DataTable('#staff_leave_history');

                $('#entitlement_table').DataTable({
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

   
    <script>
        $(document).ready(function () {
            var months = [
                "January", "February", "March", "April",
                "May", "June", "July", "August",
                "September", "October", "November", "December"
            ];
            
            $.each(months, function (index, value) {
                $('#month').append('<option value="' + (index + 1) + '">' + value + '</option>');
            });
        
            // Populate the year dropdown (from current year to 2023)
            var currentYear = new Date().getFullYear();
            for (var i = currentYear; i >= 2023; i--) {
                $('#year').append('<option value="' + i + '">' + i + '</option>');
            }
        
            // Handle search button click to filter the data from table using month and year
            $('#searchButton').on('click', function() {
                var selectedMonth = $('#month').val();
                var selectedYear = $('#year').val();

                // Find the indices of the relevant columns by heading
                var leaveYearIndex, leaveDateIndex;
                $('#staff_leave_history thead th').each(function(index) {
                    var headerText = $(this).text().trim().toLowerCase();
                    if (headerText === 'year') {
                        leaveYearIndex = index;
                    }
                    if (headerText === 'from date') {
                        leaveDateIndex = index;
                    }
                });

                $('#staff_leave_history tbody tr').hide();
                $('#staff_leave_history tbody tr').each(function() {
                    var leaveYear = $(this).find('td').eq(leaveYearIndex).text();
                    var leaveDate = $(this).find('td').eq(leaveDateIndex).text();
                    var leaveMonth = new Date(leaveDate.split('-').reverse().join('-')).getMonth() + 1;

                    if (leaveYear == selectedYear && leaveMonth == selectedMonth) {
                        $(this).show();
                    }
                });
            });

        });
    </script>


   
    

                                                 
                                       