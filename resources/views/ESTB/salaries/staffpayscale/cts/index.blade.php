@extends('layouts.master')

@section('styles')
        <!-- FLATPICKR CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/flatpickr/flatpickr.min.css')}}">
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
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18" fill="rgba(0,0,0,1)"><path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22ZM13.5003 8C13.8278 8.43606 14.0625 8.94584 14.175 9.5H16V11H14.175C13.8275 12.7117 12.3142 14 10.5 14H10.3107L14.0303 17.7197L12.9697 18.7803L8 13.8107V12.5H10.5C11.4797 12.5 12.3131 11.8739 12.622 11H8V9.5H12.622C12.3131 8.62611 11.4797 8 10.5 8H8V6.5H16V8H13.5003Z"></path></svg>
                            Salary
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12.1717 12.0005L9.34326 9.17203L10.7575 7.75781L15.0001 12.0005L10.7575 16.2431L9.34326 14.8289L12.1717 12.0005Z"></path></svg>    
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
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22ZM13.5003 8C13.8278 8.43606 14.0625 8.94584 14.175 9.5H16V11H14.175C13.8275 12.7117 12.3142 14 10.5 14H10.3107L14.0303 17.7197L12.9697 18.7803L8 13.8107V12.5H10.5C11.4797 12.5 12.3131 11.8739 12.622 11H8V9.5H12.622C12.3131 8.62611 11.4797 8 10.5 8H8V6.5H16V8H13.5003Z"></path></svg> 
                                        Salary
                                </h5>
                            </div>
                        <div class="block ltr:ml-auto rtl:mr-auto my-auto">
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
                                    </div>
                                </div>
                            </div> 
                            <div class="box-body">
                                <div class="flex justify-end space-x-4 items-center">
                                    <form action="{{ route('import.excel') }}" method="POST" enctype="multipart/form-data" class="flex items-center space-x-2">
                                        @csrf
                                        <div class="space-y-8 font-[sans-serif] max-w-md mx-auto">
                                            <input type="file" class="w-full text-gray-500 font-medium text-sm bg-blue-100 cursor-pointer py-2 px-4 mr-4 hover:bg-blue-500 hover:text-white rounded-lg rounded-md border-blue-300" name="excel_file" required/>
                                        </div>
                                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 text-xs rounded-md hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75 whitespace-nowrap">Upload Excel</button>
                                    </form>
                                    <button id="exportToExcel" class="bg-green-500 text-white px-4 py-2 text-xs rounded-md focus:outline-none hover:bg-green-600 focus:ring-2 focus:ring-green-400 focus:ring-opacity-75 whitespace-nowrap">Export to Excel</button>
                                </div>
                            </div>
                        </div>
                            <div class="flex justify-end my-4">
                                <div id="basic-table" class="ti-custom-table ti-striped-table ti-custom-table-hover table-bordered rounded-sm overflow-auto">
                                    <table id="ctssalary" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                        <thead class="bg-gray-50 dark:bg-black/20">
                                            <tr>
                                                <th scope="col" class="dark:text-white/80">S.no</th>
                                                <th scope="col" class="dark:text-white/80">Staff Information</th>
                                                <th scope="col" class="dark:text-white/80">DoJ</th>
                                                <th scope="col" class="dark:text-white/80">increment Month</th>
                                                <th scope="col" class="dark:text-white/80">PF.no</th>
                                                <th scope="col" class="dark:text-white/80">LWP</th>
                                                <th scope="col" class="dark:text-white/80">Rate</th>
                                                <th scope="col" class="dark:text-white/80">Consolidated</th>
                                                <th scope="col" class="dark:text-white/80">Allowance</th>
                                                <th scope="col" class="dark:text-white/80">Salary Arrears</th>
                                                <th scope="col" class="dark:text-white/80">HRA</th>
                                                <th scope="col" class="dark:text-white/80">CCA</th>
                                                <th scope="col" class="dark:text-white/80">Incentive</th>
                                                <th scope="col" class="dark:text-white/80">other<div>Allowances</th>
                                                <th scope="col" class="dark:text-white/80">Gross Salary</th>
                                                <th scope="col" class="dark:text-white/80">PROVIDENT FUND</th>
                                                <th scope="col" class="dark:text-white/80">PF Arrears</th>
                                                <th scope="col" class="dark:text-white/80">E.S.I. <div>-EMPLOYEES<div> CONTR. @0.75%</th>
                                                <th scope="col" class="dark:text-white/80">Income Tax</th>
                                                <th scope="col" class="dark:text-white/80">PROFESSIONAL <div>TAX</th>
                                                <th scope="col" class="dark:text-white/80">LIFE INSURANCE<div> CORPORATION OF INDIA</th>
                                                <th scope="col" class="dark:text-white/80">GSLI</th>
                                                <th scope="col" class="dark:text-white/80">bank loan</th>
                                                <th scope="col" class="dark:text-white/80">CREDIT SOCIETY<div> SHARES</th>
                                                <th scope="col" class="dark:text-white/80">CREDIT SOCIETY<div> Loan</th>
                                                <th scope="col" class="dark:text-white/80">vidya<div> ganapati<div>temple</th>
                                                <th scope="col" class="dark:text-white/80">Forward Charges</th>
                                                <th scope="col" class="dark:text-white/80">Esi Recovery</th>
                                                <th scope="col" class="dark:text-white/80">Salary Recovery</th>
                                                <th scope="col" class="dark:text-white/80">festival advance</th>
                                                <th scope="col" class="dark:text-white/80">HRA Recovery</th>
                                                <th scope="col" class="dark:text-white/80">LAPTOP/<div>COMPUTER ADVANCE</th>
                                                <th scope="col" class="dark:text-white/80">TOTAL <div>DEDUCTIONS</th>
                                                <th scope="col" class="dark:text-white/80">Net Salary</th>
                                                <th scope="col" class="dark:text-white/80">SIGNATURE</th>
                                                <th scope="col" class="dark:text-white/80">Remarks</th>
                                                <th scope="col" class="dark:text-white/80">Verify</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($results as $result)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $result->id }}, {{ $result->fname }} {{$result->mname }} {{$result->lname }}<br>{{ $result->designation }}</td>
                        <td>{{ $result->doj }}</td>
                        <td></td>
                        <td></td>
                        <td>{{ $result->leave_days}}</td>
                        <td><input type="text" id="rate-{{ $result->id }}" name="manual[{{ $result->id }}][rate]" value="{{($result->rate) }}" class="border border-gray-300 rounded-md px-1 py-1 focus:outline-none focus:border-blue-500 w-28" readonly></td>
                        <td><input type="text" id="conolidated-{{ $result->id }}" name="manual[{{ $result->id }}][conolidated]" value="{{($result->conolidated) }}" class="border border-gray-300 rounded-md px-1 py-1 focus:outline-none focus:border-blue-500 w-28" readonly> </td>
                        <td><input type="text" id="allowance-{{ $result->id }}" name="manual[{{ $result->id }}][rate]" value="{{($result->rate) }}" class="border border-gray-300 rounded-md px-1 py-1 focus:outline-none focus:border-blue-500 w-28" readonly></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><input type="text" id="vidyaganapati-{{ $result->id }}" name="manual[{{ $result->id }}][vidyaganapati]" value="{{($result->vidyaganapati) }}" class="border border-gray-300 rounded-md px-1 py-1 focus:outline-none focus:border-blue-500 w-24" readonly></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <input type="checkbox" name="marked[]" id="save-checkbox-{{ $result->id }}" class="save-checkbox" data-staff-id="{{ $result->id }}"></td>
                    </tr>
                @endforeach
            </tbody>
                                    </table>
                                </div>
                            </div>
                            <div>
                                <button id="submit-btn" disabled class="bg-blue-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                    Submit
                                </button>                                       
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
               new DataTable('#ctssalary');
            });
            </script>
@endsection
