@extends('layouts.master')

@section('styles')
    <!-- FLATPICKR CSS -->
    <link rel="stylesheet" href="{{ asset('build/assets/libs/flatpickr/flatpickr.min.css') }}">
    {{-- datatables css --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.tailwindcss.min.css">
@endsection

@section('content')

    <div class="content">

        <!-- Start::main-content -->
        <div class="main-content">

            <!-- Page Header -->
            <div class="block justify-between page-header sm:flex">
                <div>
                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium">
                        Establishment Section</h3>
                </div>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-sm">
                        <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate"
                            href="javascript:void(0);">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                                <path
                                    d="M22 21H2V19H3V4C3 3.44772 3.44772 3 4 3H18C18.5523 3 19 3.44772 19 4V9H21V19H22V21ZM17 19H19V11H13V19H15V13H17V19ZM17 9V5H5V19H11V9H17ZM7 11H9V13H7V11ZM7 15H9V17H7V15ZM7 7H9V9H7V7Z">
                                </path>
                            </svg>
                            LIC Management {{ $month }}
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                                <path
                                    d="M12.1717 12.0005L9.34326 9.17203L10.7575 7.75781L15.0001 12.0005L10.7575 16.2431L9.34326 14.8289L12.1717 12.0005Z">
                                </path>
                            </svg>
                        </a>
                    </li>
                </ol>
            </div>
            <!-- Page Header Close -->

            <!-- Start::row-5 -->
            <div class="grid grid-cols-12 gap-x-6">
                <div class="col-span-12">
                    @if (session('status'))
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
                            header('refresh: 3');
                        @endphp
                    @endif
                    <div class="box">
                        <div class="box-header">
                            <div class="flex items-center">
                                <h5 class="box-title my-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32"
                                        height="32">
                                        <path
                                            d="M22 21H2V19H3V4C3 3.44772 3.44772 3 4 3H18C18.5523 3 19 3.44772 19 4V9H21V19H22V21ZM17 19H19V11H13V19H15V13H17V19ZM17 9V5H5V19H11V9H17ZM7 11H9V13H7V11ZM7 15H9V17H7V15ZM7 7H9V9H7V7Z">
                                        </path>
                                    </svg>
                                    Staff LIC Details
                                </h5>

                                <button id="exportToExcel"
                                    class="bg-green-500 text-white px-4 py-2 text-xs rounded-md focus:outline-none hover:bg-green-600 focus:ring-2 focus:ring-green-400 focus:ring-opacity-75 whitespace-nowrap">Export
                                    to Excel</button>
                            </div>
                            <br>
                        </br>
                            <form action="{{ route('ESTB.salaries.stafflic_transactions.store') }}" method="post">
                                @csrf
                                <div class="flex items-center ml-auto">
                                    <div class="max-w-sm space-y-2 mr-4">
                                        <label for="month" class="ti-form-label mb-0 font-bold mr-2">Month</label>
                                        <select class="ti-form-select type" id="month" name="month" required>
                                            <option value="January">January</option>
                                            <option value="February">February</option>
                                            <option value="March">March</option>
                                            <option value="April">April</option>
                                            <option value="May">May</option>
                                            <option value="June">June</option>
                                            <option value="July">July</option>
                                            <option value="August">August</option>
                                            <option value="September">September</option>
                                            <option value="October">October</option>
                                            <option value="November">November</option>
                                            <option value="December">December</option>
                                        </select>
                                    </div>
                                    <div class="max-w-sm space-y-2 mr-4">
                                        <label for="years" class="ti-form-label mb-0 font-bold mr-2">Year</label>
                                        <input type="text" class="my-auto ti-form-input" id="years" name="years"
                                            required>
                                        @if ($errors->has('yearr'))
                                            <div class="text-red-700">{{ $errors->first('years') }}</div>
                                        @endif
                                        <div id="years_error" class="error text-red-700"></div>
                                    </div>
                                    <div class="max-w-sm space-y-2 mr-4">
                                        <label for="dop" class="ti-form-label mb-0 font-bold mr-2">Date Of Posting</label>
                                        <input type="date" class="my-auto ti-form-input" id="dop" name="dop" required>
                                        @if ($errors->has('date'))
                                            <div class="text-red-700">{{ $errors->first('dop') }}</div>
                                        @endif
                                        <div id="dop_error" class="error text-red-700"></div>
                                    </div>
                                </div>
                                
                                <div class="box-body">
                                    <div
                                        class="ti-custom-table-head overflow-auto ti-striped-table ti-custom-table-hover table-bordered rounded-sm">

                                        <table id="lic_table"
                                            class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                            <thead class="bg-gray-50 dark:bg-black/20">
                                                <tr class="">
                                                    <th scope="col" class="dark:text-white/80">S.No</th>
                                                    <th scope="col" class="dark:text-white/80">Name</th>
                                                    <th scope="col" class="dark:text-white/80">Policy No</th>
                                                    <th scope="col" class="dark:text-white/80">Premium</th>
                                                    <th scope="col" class="dark:text-white/80">GST</th>
                                                    <th scope="col" class="dark:text-white/80">Status</th>
                                                    <th scope="col" class="dark:text-white/80"></th>

                                                </tr>
                                            </thead>
                                            <tbody class="">
                                                @php
                                                    $i = 1;
                                                    $totalPremium = 0;
                                                    $totalGST = 0;
                                                @endphp
                                                @forelse($stafflic as $lic)
                                                    <tr class="">
                                                        <td>{{ $i++ }}</td>
                                                        <td>
                                                            <span>{{ $lic->staff->fname }} {{ $lic->staff->mname }}
                                                                {{ $lic->staff->lname }}</span>
                                                        </td>
                                                        <td><span>{{ $lic->policy_no }}</span></td>
                                                        <td><span>{{ $lic->premium }}</span></td>
                                                        <td>
                                                            ₹<input type="number" name="manual[{{ $lic->id }}][gst]"
                                                                value="{{ old('manual.' . $lic->id . '.gst', 0) }}"
                                                                class="totalGST border border-gray-300 rounded-md px-1 py-1 focus:outline-none focus:border-blue-500 w-24 gst_value"
                                                            >
                                                        </td>

                                                        <td><span>{{ $lic->status }}</span></td>
                                                        {{-- <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                            <div class="hs-tooltip ti-main-tooltip">
                                                                <button
                                                                    data-hs-overlay="#qual_edit_modal{{ $i }}"
                                                                    id="btn{{ $i }}"
                                                                    btn-val={{ $i }}
                                                                    class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary qual_edit_modal_click">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 24 24" width="16"
                                                                        height="16">
                                                                        <path
                                                                            d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z">
                                                                        </path>
                                                                    </svg>
                                                                    <span
                                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                        role="tooltip">
                                                                        Edit
                                                                    </span>
                                                                </button>
                                                                <div id="qual_edit_modal{{ $i }}"
                                                                    class="hs-overlay hidden ti-modal">
                                                                    <div
                                                                        class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                                                        <div class="ti-modal-content">
                                                                            <div class="ti-modal-header">
                                                                                <h3 class="ti-modal-title">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 24 24" width="16"
                                                                                        height="16">
                                                                                        <path
                                                                                            d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z">
                                                                                        </path>
                                                                                    </svg>
                                                                                    Edit LIC
                                                                                </h3>
                                                                                <button type="button"
                                                                                    class="hs-dropdown-toggle ti-modal-close-btn"
                                                                                    data-hs-overlay="#hs-medium-modal">
                                                                                    <span class="sr-only">Close</span>
                                                                                    <svg class="w-3.5 h-3.5"
                                                                                        width="8" height="8"
                                                                                        viewBox="0 0 8 8" fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <path
                                                                                            d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                            fill="currentColor" />
                                                                                    </svg>
                                                                                </button>

                                                                            </div>
                                                                            <form
                                                                                action="{{ route('ESTB.salaries.lics.update', [$lic->id]) }}"
                                                                                method="post">
                                                                                @csrf
                                                                                @method('patch')
                                                                                <div class="ti-modal-body">
                                                                                    <input type='hidden' name='modal_no'
                                                                                        class='modal_no'
                                                                                        value={{ old('modal_no') }} />

                                                                                    @if ($lic->status == 'inactive')
                                                                                        <br />
                                                                                        <div class="flex">
                                                                                            <input type="radio"
                                                                                                name="status"
                                                                                                class="ti-form-radio"
                                                                                                id="hs-radio-group-2"
                                                                                                value="active" required>
                                                                                            <label for="hs-radio-group-2"
                                                                                                class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Make
                                                                                                it Active</label>
                                                                                        </div>
                                                                                    @endif

                                                                                </div>
                                                                                <div class="ti-modal-footer">
                                                                                    <button type="button"
                                                                                        class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                        data-hs-overlay="#hs-medium-modal">
                                                                                        Close
                                                                                    </button>

                                                                                    <input type="submit"
                                                                                        class="ti-btn  bg-warning text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10"
                                                                                        value="Update" />

                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <form
                                                                        action="{{ route('ESTB.salaries.lics.destroy', [$lic->id]) }}"
                                                                        method="post">

                                                                        <button onclick="return confirm('Are you Sure')"
                                                                            class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 24 24" width="16"
                                                                                height="16">
                                                                                <path
                                                                                    d="M7 4V2H17V4H22V6H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V6H2V4H7ZM6 6V20H18V6H6ZM9 9H11V17H9V9ZM13 9H15V17H13V9Z">
                                                                                </path>
                                                                            </svg>
                                                                            @method('delete')
                                                                            @csrf
                                                                            <span
                                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                role="tooltip">
                                                                                Delete
                                                                            </span>
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </td> --}}
                                                    </tr>
                                                    
                                                @php
                                                $totalPremium += $lic->premium;
                                                @endphp
                                        @endforeach
                                        
                                        <tr>
                                            <td colspan="3" class="text-right"><strong>Total</strong></td>
                                            <td id="totalPremium">{{ $totalPremium }}</td>
                                            <td id="totalGST">{{ $totalGST }}</td>
                                            <td><strong>Grand Total:</strong></td>
                                            <td id="grandTotal">{{ $totalPremium + $totalGST }}</td>
                                        </tr>
                                            </tbody>
                                        </table>
                                        <div class="box-footer flex justify-end">
                                            {{-- <a href="/ESTB/staff/{staff}/stafflics/show"> --}}
                                            <input type="submit"
                                                class="ti-btn bg-primary text-white hover:bg-primary focus:ring-primary dark:focus:ring-offset-white/10"
                                                value="Submit">
                                            {{-- </a> --}}
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection

@section('scripts')
    <!-- APEX CHARTS JS -->
    <script src="{{ asset('build/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- FLATPICKR JS -->
    <script src="{{ asset('build/assets/libs/flatpickr/flatpickr.min.js') }}"></script>
    @vite('resources/assets/js/flatpickr.js')

    <!-- INDEX JS -->
    @vite('resources/assets/js/index-8.js')



    
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            //alert('loaded');
            // new DataTable('#lic_table');

            $('#exportToExcel').on('click', function() {
                var table = $('#lic_table').clone();
                table.find('th:nth-child(38)').remove();
                table.find('td:nth-child(38)').remove();
                table.find('td').css({
                    'border': '1px solid #000',
                    'padding': '6px'
                });
                table.find('th, td').each(function() {
                    $(this).css('width', 'auto');
                });
                var blob = new Blob([table[0].outerHTML], {
                    type: 'application/vnd.ms-excel;charset=utf-8'
                });
                if (window.navigator && window.navigator.msSaveOrOpenBlob) {
                    window.navigator.msSaveOrOpenBlob(blob, 'GIT staff lic.xls');
                } else {
                    var link = $('<a>', {
                        href: URL.createObjectURL(blob),
                        download: 'GIT staff lic.xls'
                    });
                    link[0].click();
                }
            });

            $(document).on('blur','.gst_value',function(){
                
                var this_value = $('.gst_value').val();
                
                var total = 0.0;
                $('.gst_value').each(function(){
                    total += parseFloat($(this).val());
                });
                $('#totalGST').html(total);

                var grand_total = parseFloat($('#totalPremium').text()) + parseFloat($('#totalGST').text());

                $('#grandTotal').html(grand_total);
            });


            

            $('#transactionForm').on('submit', function(event) {
                event.preventDefault(); // Prevent form from submitting

                let month = $('#month').val();
                let years = $('#years').val();
                let dop = $('#dop').val();
                let duplicateError = $('#duplicate_error');

                $.ajax({
                    url: '{{ route("ESTB.staff.stafflics.stafflic_transactions.check_duplicate") }}', // You need to create this route
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        month: month,
                        years: years,
                        dop: dop
                    },
                    success: function(response) {
                        if (response.exists) {
                            duplicateError.text('The combination of month, year, and date of posting already exists.');
                        } else {
                            $('#transactionForm')[0].submit(); // Submit the form if validation passes
                        }
                    }
                });
            });

        });
    </script>



@endsection