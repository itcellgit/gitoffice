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
                        <form id="salaryForm" action="{{ route('ESTB.salaries.staffpayscale.store') }}" method="POST">
                            @csrf
                            <div class="flex justify-end my-4">
                                <div id="basic-table" class="ti-custom-table ti-striped-table ti-custom-table-hover table-bordered rounded-sm overflow-auto">
                                    <table id="salary" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                        <thead class="bg-gray-50 dark:bg-black/20">
                                            <tr>
                                                <th scope="col" class="dark:text-white/80">S.no</th>
                                                <th scope="col" class="dark:text-white/80">Staff Information</th>
                                                <th scope="col" class="dark:text-white/80">DoJ</th>
                                                <th scope="col" class="dark:text-white/80">UAN.no</th>
                                                <th scope="col" class="dark:text-white/80">PF.no</th>
                                                <th scope="col" class="dark:text-white/80">LWP</th>
                                                <th scope="col" class="dark:text-white/80">Pay in Pay Band</th>
                                                <th scope="col" class="dark:text-white/80">AGP</th>
                                                <th scope="col" class="dark:text-white/80">Rate</th>
                                                <th scope="col" class="dark:text-white/80">Basic</th>
                                                <th scope="col" class="dark:text-white/80">DA</th>
                                                <th scope="col" class="dark:text-white/80">HRA</th>
                                                <th scope="col" class="dark:text-white/80">CCA</th>
                                                <th scope="col" class="dark:text-white/80">20%Special<div> Incentive</th>
                                                <th scope="col" class="dark:text-white/80">Salary Arrears</th>
                                                <th scope="col" class="dark:text-white/80">Special <div>Allowances</th>
                                                <th scope="col" class="dark:text-white/80">Allowance<div> Value</th>
                                                <th scope="col" class="dark:text-white/80">Gross Salary</th>
                                                <th scope="col" class="dark:text-white/80">PROVIDENT FUND</th>
                                                <th scope="col" class="dark:text-white/80">PF Arrears</th>
                                                <th scope="col" class="dark:text-white/80">Income Tax</th>
                                                <th scope="col" class="dark:text-white/80">PROFESSIONAL <div>TAX</th>
                                                <th scope="col" class="dark:text-white/80">LIFE INSURANCE<div> CORPORATION OF INDIA</th>
                                                <th scope="col" class="dark:text-white/80">group insurance<div>(GSLI)</th>
                                                <th scope="col" class="dark:text-white/80">CREDIT SOCIETY<div> SHARES</th>
                                                <th scope="col" class="dark:text-white/80">CREDIT SOCIETY<div> Loan</th>
                                                <th scope="col" class="dark:text-white/80">vidya<div> ganapati<div>temple</th>
                                                <th scope="col" class="dark:text-white/80">Forward Charges</th>
                                                <th scope="col" class="dark:text-white/80">Salary Recovery</th>
                                                <th scope="col" class="dark:text-white/80">IR & 20%ADVANCE<div>RECOVERY</th>
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
                                            @foreach($staffWithPayscaleAndAllowances as $index => $staff)
                                                <tr data-row-id="{{ $staff->id }}">
                                                    <td>{{$index + 1}}</td>
                                                    <td><input type="hidden" name="manual[{{ $staff->id }}][staff_id]" value="{{ $staff->id }}">
                                                    {{ $staff->id }}, {{ $staff->fname }} {{ $staff->mname }} {{ $staff->lname }}<br>{{ $staff->design_name }}</td>
                                                    <td>{{ $staff->doj }}</td>
                                                    <td>{{ $staff->un_no }}</td>
                                                    <td>{{ $staff->PF }}</td>
                                                    <td>{{ $staff->leave_days}}</td>
                                                    <td><input type="text" id="payband-{{ $staff->id }}"name="manual[{{ $staff->id }}][payband]" value="{{($staff->payband) }}" class="border border-gray-300 rounded-md px-1 py-1 focus:outline-none focus:border-blue-500 w-24" readonly></td>
                                                    <td><input type="text" id="agp-{{ $staff->id }}" name="manual[{{ $staff->id }}][agp]" value="{{($staff->agp) }}" class="border border-gray-300 rounded-md px-1 py-1 focus:outline-none focus:border-blue-500 w-24" readonly></td>
                                                    <td><input type="text" id="rate-{{ $staff->id }}" name="manual[{{ $staff->id }}][rate]" value="{{($staff->rate) }}" class="border border-gray-300 rounded-md px-1 py-1 focus:outline-none focus:border-blue-500 w-28" readonly></td>
                                                    <td><input type="text" id="basic-{{ $staff->id }}" name="manual[{{ $staff->id }}][basic]" value="{{($staff->basic) }}" class="border border-gray-300 rounded-md px-1 py-1 focus:outline-none focus:border-blue-500 w-28" readonly></td>
                                                    <td><input type="text" id="da-{{ $staff->id }}" name="manual[{{ $staff->id }}][da]" value="{{($staff->da) }}" class="border border-gray-300 rounded-md px-1 py-1 focus:outline-none focus:border-blue-500 w-24" readonly></td>
                                                    <td><input type="text" id="hra-{{ $staff->id }}" name="manual[{{ $staff->id }}][hra]" value="{{($staff->hra) }}" class="border border-gray-300 rounded-md px-1 py-1 focus:outline-none focus:border-blue-500 w-24" readonly></td>
                                                    <td><input type="text" id="cca-{{ $staff->id }}" name="manual[{{ $staff->id }}][cca]" value="{{($staff->cca) }}" class="border border-gray-300 rounded-md px-1 py-1 focus:outline-none focus:border-blue-500 w-24" readonly></td>
                                                    <td><input type="text" id="special_incen-{{ $staff->id }}" name="manual[{{ $staff->id }}][special_incen]" value="{{($staff->special_incen) }}" class="border border-gray-300 rounded-md px-1 py-1 focus:outline-none focus:border-blue-500 w-24" readonly></td>
                                                    <td><input type="text" id="salary_arrears-{{ $staff->id }}" name="manual[{{ $staff->id }}][salary_arrears]" value="{{ old('manual.' . $staff->id . '.salary_arrears', 0) }}" class="border border-gray-300 rounded-md px-1 py-1 focus:outline-none focus:border-blue-500 w-24" oninput="updateSalary({{ $staff->id }})"></td>
                                                    <td><input type="text" id="special_allowances-{{ $staff->id }}" name="manual[{{ $staff->id }}][special_allowances]" value="{{ old('manual.' . $staff->id . '.special_allowances', 0) }}" class="border border-gray-300 rounded-md px-1 py-1 focus:outline-none focus:border-blue-500 w-24" oninput="updateSalary({{ $staff->id }})"></td>
                                                    <td><input type="text" id="allowance_value-{{ $staff->id }}" name="manual[{{ $staff->id }}][allowance_value]" value="{{($staff->allowance_value) }}" class="border border-gray-300 rounded-md px-1 py-1 focus:outline-none focus:border-blue-500 w-24" readonly></td>
                                                    <td><input type="text" id="gross_salary-{{ $staff->id }}" name="manual[{{ $staff->id }}][gross_salary]" value="{{($staff->gross_salary) }}" class="border border-gray-300 rounded-md px-1 py-1 focus:outline-none focus:border-blue-500 w-28" readonly></td>
                                                    <td><input type="text" id="pf_deduction-{{ $staff->id }}" name="manual[{{ $staff->id }}][pf_deduction]" value="{{($staff->pf_deduction) }}" class="border border-gray-300 rounded-md px-1 py-1 focus:outline-none focus:border-blue-500 w-24" readonly></td>
                                                    <td><input type="text" id="pf_arrear-{{ $staff->id }}" name="manual[{{ $staff->id }}][pf_arrear]" value="{{ old('manual.' . $staff->id . '.pf_arrear', 0) }}" class="border border-gray-300 rounded-md px-1 py-1 focus:outline-none focus:border-blue-500 w-24" oninput="updateDeductions({{ $staff->id }})"></td>
                                                    <td><input type="text" id="income_tax-{{ $staff->id }}" name="manual[{{ $staff->id }}][income_tax]" value="{{ old('manual.' . $staff->id . '.income_tax', 0) }}" class="border border-gray-300 rounded-md px-1 py-1 focus:outline-none focus:border-blue-500 w-24" oninput="updateDeductions({{ $staff->id }})"></td>
                                                    <td><input type="text" id="prof_tax-{{ $staff->id }}" name="manual[{{ $staff->id }}][prof_tax]" value="{{($staff->prof_tax) }}" class="border border-gray-300 rounded-md px-1 py-1 focus:outline-none focus:border-blue-500 w-24" readonly></td>
                                                    <td><input type="text" id="lic-{{ $staff->id }}" name="manual[{{ $staff->id }}][lic]" value="{{ old('manual.' . $staff->id . '.lic', 0) }}" class="border border-gray-300 rounded-md px-1 py-1 focus:outline-none focus:border-blue-500 w-24" oninput="updateDeductions({{ $staff->id }})"></td>
                                                    <td><input type="text" id="gsli-{{ $staff->id }}" name="manual[{{ $staff->id }}][GSLI]" value="{{($staff->GSLI) }}" class="border border-gray-300 rounded-md px-1 py-1 focus:outline-none focus:border-blue-500 w-24" readonly></td>
                                                    <td><input type="text" id="credit_shares-{{ $staff->id }}" name="manual[{{ $staff->id }}][credit_shares]" value="0.0" class="border border-gray-300 rounded-md px-1 py-1 focus:outline-none focus:border-blue-500 w-24" readonly></td>
                                                    <td><input type="text" id="credit_loan-{{ $staff->id }}" name="manual[{{ $staff->id }}][credit_loan]" value="0.0" class="border border-gray-300 rounded-md px-1 py-1 focus:outline-none focus:border-blue-500 w-24" readonly></td>
                                                    <td><input type="text" id="vidyaganapati-{{ $staff->id }}" name="manual[{{ $staff->id }}][vidyaganapati]" value="{{($staff->vidyaganapati) }}" class="border border-gray-300 rounded-md px-1 py-1 focus:outline-none focus:border-blue-500 w-24" readonly></td>
                                                    <td><input type="text" id="forward_charges-{{ $staff->id }}" name="manual[{{ $staff->id }}][forward_charges]" value="{{ old('manual.' . $staff->id . '.forward_charges', 0) }}" class="border border-gray-300 rounded-md px-1 py-1 focus:outline-none focus:border-blue-500 w-24" oninput="updateDeductions({{ $staff->id }})"></td>
                                                    <td><input type="text" id="salary_recovery-{{ $staff->id }}" name="manual[{{ $staff->id }}][salary_recovery]" value="{{ old('manual.' . $staff->id . '.salary_recovery', 0) }}" class="border border-gray-300 rounded-md px-1 py-1 focus:outline-none focus:border-blue-500 w-24" oninput="updateDeductions({{ $staff->id }})"></td>
                                                    <td><input type="text" id="ir-{{ $staff->id }}" name="manual[{{ $staff->id }}][ir]" value="{{ old('manual.' . $staff->id . '.ir', 0) }}" class="border border-gray-300 rounded-md px-1 py-1 focus:outline-none focus:border-blue-500 w-24"  oninput="updateDeductions({{ $staff->id }})"></td>
                                                    <td><input type="text" id="hra_recovery-{{ $staff->id }}" name="manual[{{ $staff->id }}][hra_recovery]" value="{{ old('manual.' . $staff->id . '.hra_recovery', 0) }}" class="border border-gray-300 rounded-md px-1 py-1 focus:outline-none focus:border-blue-500 w-24" oninput="updateDeductions({{ $staff->id }})"></td>
                                                    <td><input type="text" id="laptop_computer-{{ $staff->id }}" name="manual[{{ $staff->id }}][laptop_computer]" value="{{ $staff->laptop_loan_amount }}" class="border border-gray-300 rounded-md px-1 py-1 focus:outline-none focus:border-blue-500 w-24" readonly></td>
                                                    <td><input type="text" id="total_deductions-{{ $staff->id }}" name="manual[{{ $staff->id }}][total_deductions]" value="{{($staff->total_deductions) }}" class="border border-gray-300 rounded-md px-1 py-1 focus:outline-none focus:border-blue-500 w-28" readonly></td>
                                                    <td><input type="text" id="net_salary-{{ $staff->id }}" name="manual[{{ $staff->id }}][net_salary]" value="{{($staff->net_salary) }}" class="border border-gray-300 rounded-md px-1 py-1 focus:outline-none focus:border-blue-500 w-28" ></td>
                                                    <td></td>
                                                    <td>
                                                        @if($staff->rate > $staff->basic)
                                                            <div style="word-wrap: break-word; white-space: normal;">
                                                                Basic amount varied due to {{ $staff->leave_days }} days LWP
                                                            </div>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" name="marked[]" id="save-checkbox-{{ $staff->id }}" class="save-checkbox" data-staff-id="{{ $staff->id }}">
                                                        <!-- <input type="hidden" name="manual[{{ $staff->id }}][save]" id="save-hidden-{{ $staff->id }}" value="0">
                                                         <input type="hidden" name="manual[{{ $staff->id }}][payband]" value="{{ $staff->payband }}"> -->

                                                    </td>
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
                        </form>
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
               new DataTable('#salary');

            $('#exportToExcel').on('click', function () {
                    var table = $('#salary').clone();
                    table.find('th:nth-child(38)').remove();
                    table.find('td:nth-child(38)').remove();
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
                        window.navigator.msSaveOrOpenBlob(blob, 'GIT staff salary.xls');
                    } else {
                        var link = $('<a>', {
                            href: URL.createObjectURL(blob),
                            download: 'GIT staff salary.xls'
                        });
                        // Trigger the click to download
                        link[0].click();
                    }
                });
            
            //     $('.manual-input').on('input', function() {
            //     const staffId = $(this).data('staff-id');
            //     updateSalaries(staffId);
            // });

            // function updateSalaries(staffId) {
            //     const salaryArrears = parseFloat($(`input[name='manual[${staffId}][salary_arrears]']`).val()) || 0;
            //     const specialAllowances = parseFloat($(`input[name='manual[${staffId}][special_allowances]']`).val()) || 0;

            //     const grossSalaryElem = $(`#gross_salary_${staffId}`);
            //     const netSalaryElem = $(`#net_salary_${staffId}`);

            //     let grossSalary = parseFloat(grossSalaryElem.val().replace('₹', '').replace(',', '')) || 0;
            //     grossSalary += salaryArrears + specialAllowances;

            //     let netSalary = grossSalary;

            //     // Add other deduction calculations if needed here

            //     grossSalaryElem.val(`₹${grossSalary.toFixed(2)}`);
            //     netSalaryElem.val(`₹${netSalary.toFixed(2)}`);
            // }


        });

</script>
<script>
    // Get all the checkboxes
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');

    // Get the submit button
    const submitBtn = document.getElementById('submit-btn');

    // Function to check if all checkboxes are checked
    function areAllCheckboxesChecked() {
        return Array.from(checkboxes).every(checkbox => checkbox.checked);
    }

    // Function to enable/disable the submit button based on checkbox states
    function toggleSubmitButton() {
        if (areAllCheckboxesChecked()) {
            submitBtn.disabled = false;
        } else {
            submitBtn.disabled = true;
        }
    }

    // Attach change event listener to each checkbox
    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', toggleSubmitButton);

        
    });
</script>

<script>
    // document.addEventListener('DOMContentLoaded', (event) => {
    //     document.querySelectorAll('#salaryForm button').forEach(button => {
    //         button.addEventListener('click', (e) => {
    //             e.preventDefault(); // Prevent form submission
    //             const row = e.target.closest('tr');
    //             row.querySelectorAll('input[type="text"]').forEach(input => {
    //                 const value = input.value;
    //                 const span = document.createElement('span');
    //                 span.textContent = value;
    //                 input.parentNode.replaceChild(span, input);
    //             });
    //             // Optionally, disable the button after submission to prevent re-submission
    //             e.target.disabled = true;
    //         });
    //     });
    // });

//     document.addEventListener('DOMContentLoaded', (event) => {
//     document.querySelectorAll('.save-checkbox').forEach(checkbox => {
//         checkbox.addEventListener('change', (e) => {
//             const staffId = e.target.getAttribute('data-staff-id');
//             const hiddenInput = document.getElementById(`save-hidden-${staffId}`);

//             const row = e.target.closest('tr');
//             if (e.target.checked) {
//                 hiddenInput.value = '1';

//                 row.querySelectorAll('input[type="text"]').forEach(input => {
//                     const value = input.value;
//                     const span = document.createElement('span');
//                     span.textContent = value;
//                     span.setAttribute('data-input-id', input.id);
//                     span.setAttribute('data-name', input.name); // Add name attribute to span
//                     input.parentNode.replaceChild(span, input);
//                 });
//             } else {
//                 hiddenInput.value = '0';

//                 row.querySelectorAll('span[data-input-id]').forEach(span => {
//                     const value = span.textContent;
//                     const inputId = span.getAttribute('data-input-id');
//                     const inputName = span.getAttribute('data-name'); // Retrieve name attribute from span
//                     const input = document.createElement('input');
//                     input.type = 'text';
//                     input.id = inputId;
//                     input.name = inputName; // Set the name attribute
//                     input.value = value;
//                     input.className = 'border border-gray-300 rounded-md px-1 py-1 focus:outline-none focus:border-blue-500 w-24';
//                     span.parentNode.replaceChild(input, span);
//                 });
//                 e.target.disabled = false;
//             }
//         });
//     });
// });
function setReadOnly(rowId, readOnly) {
        var inputs = document.querySelectorAll("#salary tr[data-row-id='" + rowId + "'] input[type='text']");
        inputs.forEach(function(input) {
            input.readOnly = readOnly;
        });
    }

    // Event listener for checkbox change
    document.querySelectorAll('.save-checkbox').forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            var rowId = this.getAttribute('data-staff-id');
            setReadOnly(rowId, this.checked);
        });
    });
    </script>
    <script>

    function parseCurrency(value) {
    return parseFloat(value.replace(/[^0-9.-]+/g, ""));
  }

  function updateSalary(staffId) {
    const salaryArrears = parseCurrency(getValue(`salary_arrears-${staffId}`));
    const specialAllowances = parseCurrency(getValue(`special_allowances-${staffId}`));
    const otherFields = [
      `basic-${staffId}`,
      `da-${staffId}`,
      `hra-${staffId}`,
      `cca-${staffId}`,
      `special_incen-${staffId}`,
      `allowance_value-${staffId}`
    ].map(id => parseCurrency(getValue(id)));

    const grossSalary = otherFields.reduce((a, b) => a + b, salaryArrears + specialAllowances);
    setValue(`gross_salary-${staffId}`, `${grossSalary.toFixed(2)}`);

    updateNetSalary(staffId);
  }

  function updateDeductions(staffId) {
    const pfArrear = parseCurrency(getValue(`pf_arrear-${staffId}`));
    const incomeTax = parseCurrency(getValue(`income_tax-${staffId}`));
    const lic = parseCurrency(getValue(`lic-${staffId}`));
    const vidyaganapati= parseCurrency(getValue(`vidyaganapati-${staffId}`));
    const hraRecovery = parseCurrency(getValue(`hra_recovery-${staffId}`));
    const otherFields = [
      `pf_deduction-${staffId}`,
      `prof_tax-${staffId}`,
      `gsli-${staffId}`,
      `credit_shares-${staffId}`,
      `credit_loan-${staffId}`,
      `forward_charges-${staffId}`,
      `salary_recovery-${staffId}`,
      `ir-${staffId}`,
      `laptop_computer-${staffId}`
    ].map(id => parseCurrency(getValue(id)));

    const totalDeductions = otherFields.reduce((a, b) => a + b, pfArrear + incomeTax + lic + vidyaganapati + hraRecovery);
    setValue(`total_deductions-${staffId}`, `${totalDeductions.toFixed(2)}`);

    updateNetSalary(staffId);
  }

  function updateNetSalary(staffId) {
    const grossSalary = parseCurrency(getValue(`gross_salary-${staffId}`));
    const totalDeductions = parseCurrency(getValue(`total_deductions-${staffId}`));
    const netSalary = grossSalary - totalDeductions;
    setValue(`net_salary-${staffId}`, `${netSalary.toFixed(2)}`);
  }

  // Helper functions to get and set field values
  function getValue(id) {
    return document.getElementById(id).value;
  }

  function setValue(id, value) {
    document.getElementById(id).value = value;
  }
</script>

@endsection