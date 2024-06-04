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
                           <div class="col-span-2 xl:col-span-2">
                                <div class="box box-sm">
                                    <div style="display: flex; align-items: center;">
                                        <div style="display: flex; flex-direction: column;">
                                            <label for="start_date" class="ti-form-label font-bold mx-3 mt-3">Start Date:</label>
                                            <input type="date" id="start_date" class="mx-2" placeholder="From Date">
                                        </div>
                                        <div style="display: flex; flex-direction: column; margin-left: 20px;">
                                            <label for="end_date" class="ti-form-label font-bold mx-3 mt-3">End Date:</label>
                                            <input type="date" id="end_date" class="mx-2" placeholder="To Date" >
                                        </div>
                                        <!-- Search button -->
                                        <div class="flex">
                                            <button id="filterBtn" class="bg-blue-500 text-white px-4 mt-10 py-2 rounded-md focus:outline-none hover:bg-blue-700">Search</button>
                                        </div>
                                    </div>
                                    
                                </div>
                               
                               
                            </div>
                             <!--Filtering the data Ends-->
                            <div class="box">
                                <div class="box-body">
                                        <p class="flex items-center font-semibold font-bold text-primary hover:text-primary dark:text-primary truncate">
                                            Total Staff : <span class="text-black  text-lg">{{ $staffCount }}</span>
                                        </p>
                                    <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
                                        <div class="box">
                                            <div class="flex justify-end mt-4">
                                                <button id="exportToExcel" class="bg-green-500 text-white px-4 py-2 rounded-md focus:outline-none">Export to Excel</button>
                                            </div>
                                            
                                            <table  id="staff_information"class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>SI. No.</th>
                                                        <th>Designation</th>
                                                        <th>Scale of Pay</th>
                                                        <th>Vac.</th>
                                                        <th colspan="2">GM</th>
                                                        <th colspan="2">SC</th>
                                                        <th colspan="2">ST</th>
                                                        <th colspan="2">OBC</th>
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
                                                    @foreach($staff as $index => $member)
                                                        <tr>
                                                            <td>{{ $index + 1 }}</td>
                                                            <td>{{ $member->designation->design_name }}</td>
                                                            <td>{{ $member->teaching_payscales->payscale_title }}</td>
                                                            <td>{{ $member->is_vacational ? 'Yes' : 'No' }}</td>
                                                            <td>{{ $member->where('caste', 'GM')->where('gender', 'M')->count() }}</td>
                                                            <td>{{ $member->where('caste', 'GM')->where('gender', 'F')->count() }}</td>
                                                            <td>{{ $member->where('caste', 'SC')->where('gender', 'M')->count() }}</td>
                                                            <td>{{ $member->where('caste', 'SC')->where('gender', 'F')->count() }}</td>
                                                            <td>{{ $member->where('caste', 'ST')->where('gender', 'M')->count() }}</td>
                                                            <td>{{ $member->where('caste', 'ST')->where('gender', 'F')->count() }}</td>
                                                            <td>{{ $member->where('caste', 'OBC')->where('gender', 'M')->count() }}</td>
                                                            <td>{{ $member->where('caste', 'OBC')->where('gender', 'F')->count() }}</td>
                                                            <td>{{ $member->whereIn('caste', ['GM', 'SC', 'ST', 'OBC'])->where('gender', 'M')->count() }}</td>
                                                            <td>{{ $member->whereIn('caste', ['GM', 'SC', 'ST', 'OBC'])->where('gender', 'F')->count() }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                                {{-- <tfoot>
                                                    <tr>
                                                        <td></td>
                                                        <td>Total</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>{{ $staff->where('gender', 'M')->count() }}</td>
                                                        <td>{{ $staff->where('gender', 'F')->count() }}</td>
                                                        <td>{{ $staff->where('caste', 'SC')->where('gender', 'M')->count() }}</td>
                                                        <td>{{ $staff->where('caste', 'SC')->where('gender', 'F')->count() }}</td>
                                                        <td>{{ $staff->where('caste', 'ST')->where('gender', 'M')->count() }}</td>
                                                        <td>{{ $staff->where('caste', 'ST')->where('gender', 'F')->count() }}</td>
                                                        <td>{{ $staff->where('caste', 'OBC')->where('gender', 'M')->count() }}</td>
                                                        <td>{{ $staff->where('caste', 'OBC')->where('gender', 'F')->count() }}</td>
                                                        <td>{{ $staff->whereIn('caste', ['GM', 'SC', 'ST', 'OBC'])->where('gender', 'M')->count() }}</td>
                                                        <td>{{ $staff->whereIn('caste', ['GM', 'SC', 'ST', 'OBC'])->where('gender', 'F')->count() }}</td>
                                                    </tr>
                                                </tfoot> --}}
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

        <script>

            $(document).ready(function ()
            {

                $(document).on('change','.religion_id',function(){
                    //alert('Changed');
                    var religion_id = $(this).val();
                    $.ajax({
                        url:base_url+'/ESTB/staff/getcastecategory_list',
                        method:'GET',
                        data:{'r_id':religion_id},
                        success:function(data) {
                             console.log(data);
                            var castecategoriesDropdown = $('.castecategory_list');
                            castecategoriesDropdown.empty(); // Clear existing options
                            data.forEach(function(item) {
                                castecategoriesDropdown.append($('<option>').text(item['caste_name']+"-"+item['subcastes_name']+"-"+item['category']+"-"+item['category_no']).attr('value', item['id']));
                            });
                                // $.each(data, function (key, value) {
                                //     console.log(value);
                                //
                                // });
                            //$("#castecategory_list").html(data);
                        },
                        error: function (error) {
                            console.log(error);
                        }
                    });

                });


                //Code for Designation list designation dropdown
                $.ajax({
                    url: base_url + '/ESTB/staff/getdesignations_list',
                    method: 'GET',
                    success: function(data) {
                        console.log(data);
                        var designationsDropdown = $('#fiter_designation_id');
                        designationsDropdown.empty(); // Clear existing options

                        // Iterate through the data and append options directly to the dropdown
                        data.forEach(function(item) {
                            var option = $('<option>').text(item['design_name']).attr('value', item['id']);
                            designationsDropdown.append(option);
                        });
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });

             // To Select multiple values from dropdown to Filter the staff information
               
                $('.select-all-designation').change(function () {
                    $('input[name="designations[]"]').prop('checked', this.checked);
                });
                $('.select-all-teaching_payscale').change(function () {
                    $('input[name="teaching_payscale[]"]').prop('checked', this.checked);
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
