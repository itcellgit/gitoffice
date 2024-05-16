@extends('layouts.components.Dean_admin.master-Dean_admin')

@section('styles')
         <!-- TABULATOR CSS -->
         <link rel="stylesheet" href="{{asset('build/assets/libs/tabulator-tables/css/tabulator.min.css')}}">

         <!-- CHOICES CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/choices.js/public/assets/styles/choices.min.css')}}">



        <!-- FLATPICKR CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/flatpickr/flatpickr.min.css')}}">

        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.tailwindcss.min.css">
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
                                        <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M4 22C4 17.5817 7.58172 14 12 14C16.4183 14 20 17.5817 20 22H18C18 18.6863 15.3137 16 12 16C8.68629 16 6 18.6863 6 22H4ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11Z"></path></svg>
                                            Staff
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12.1717 12.0005L9.34326 9.17203L10.7575 7.75781L15.0001 12.0005L10.7575 16.2431L9.34326 14.8289L12.1717 12.0005Z"></path></svg>
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
                            <!-- Closing of designation insertion div-->
                            <!-- Start::row-5 -->
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <div class="flex">
                                                <h5 class="box-title my-auto">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M11 14.0619V20H13V14.0619C16.9463 14.554 20 17.9204 20 22H4C4 17.9204 7.05369 14.554 11 14.0619ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13Z" fill="rgba(0,0,0,1)"></path></svg>
                                                    Staff List
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div id="basic-table" class="ti-custom-table ti-striped-table ti-custom-table-hover table-bordered rounded-sm  overflow-auto">
                                                <table id="staff_table" class="ti-custom-table ti-custom-table-head  max-w-8 overflow-auto relative">
                                                    <thead class="bg-gray-50 dark:bg-black/20">
                                                        <tr class="">
                                                            <th scope="col" class="dark:text-white/80 ">S.no</th>
                                                            <th scope="col" class="dark:text-white/80 ">Staff Name</th>
                                                            <th scope="col" class="dark:text-white/80 ">Employee Type</th>
                                                            <th scope="col" class="dark:text-white/80 ">Department</th>
                                                            <th scope="col" class="dark:text-white/80 columns-6">Designation</th>
                                                            <th scope="col" class="dark:text-white/80 ">Associatation</th>
                                                            <th scope="col" class="dark:text-white/80 ">Actions</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody class="">

                                                        @php
                                                            $i = 1;
                                                            //print_r($staff->religions->religion_id);
                                                        @endphp
                                                        @forelse($staff as $st)

                                                        <tr class="bg-red-700">
                                                            <td>{{ $i++ }}</td>
                                                            <td>
                                                            <div class="flex space-x-3 rtl:space-x-reverse w-full min-w-[200px]">
                                                                <div class="block w-full my-auto">

                                                                    {{$st->fname.' '.$st->mname.' '.$st->lname}}
                                                                </div>
                                                            </div>
                                                            </td>
                                                            <td><span>{{$st->latest_employee_type()->first()->employee_type}}</span></td>
                                                            <td><span>
                                                                @foreach ($st->departments as $dept)
                                                                    @if($dept->pivot->status == 'active')
                                                                    {{$dept->dept_shortname}} <br/>
                                                                    @endif
                                                                @endforeach
                                                            </span></td>
                                                            <td ><span class="w-3/4">

                                                                @foreach ($st->designations as $design)
                                                                    @if( $design->pivot->status == 'active')
                                                                        {{$design->design_name}} <br/>
                                                                    @endif
                                                                @endforeach

                                                            </span></td>

                                                            <td><span>@foreach ($st->associations as $st_asso)
                                                                @if($st_asso->pivot->status=='active')
                                                                    {{$st_asso->asso_name}}
                                                                @endif
                                                                @endforeach
                                                            </span></td>
                                                            <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <button
                                                                        class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                                        <a href="{{route('Dean_Admin.staff.staffview',$st->id)}}">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12.0003 3C17.3924 3 21.8784 6.87976 22.8189 12C21.8784 17.1202 17.3924 21 12.0003 21C6.60812 21 2.12215 17.1202 1.18164 12C2.12215 6.87976 6.60812 3 12.0003 3ZM12.0003 19C16.2359 19 19.8603 16.052 20.7777 12C19.8603 7.94803 16.2359 5 12.0003 5C7.7646 5 4.14022 7.94803 3.22278 12C4.14022 16.052 7.7646 19 12.0003 19ZM12.0003 16.5C9.51498 16.5 7.50026 14.4853 7.50026 12C7.50026 9.51472 9.51498 7.5 12.0003 7.5C14.4855 7.5 16.5003 9.51472 16.5003 12C16.5003 14.4853 14.4855 16.5 12.0003 16.5ZM12.0003 14.5C13.381 14.5 14.5003 13.3807 14.5003 12C14.5003 10.6193 13.381 9.5 12.0003 9.5C10.6196 9.5 9.50026 10.6193 9.50026 12C9.50026 13.3807 10.6196 14.5 12.0003 14.5Z"></path></svg>
                                                                            <span
                                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                role="tooltip">
                                                                                View Staff
                                                                            </span>
                                                                        </a>
                                                                    </button>

                                                                    <div class="hs-tooltip ti-main-tooltip">
                                                                        <!--form action="#" method="post">

                                                                        <button onclick="return confirm('Are you Sure')"
                                                                            class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M7 4V2H17V4H22V6H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V6H2V4H7ZM6 6V20H18V6H6ZM9 9H11V17H9V9ZM13 9H15V17H13V9Z"></path></svg>

                                                                            <span
                                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                role="tooltip">
                                                                                Delete
                                                                            </span>
                                                                            </button>
                                                                        </form-->
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @empty
                                                            <p class="text-dark"><b>No Staff Added.</b></p>
                                                        @endforelse
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End::row-5 -->
                            </div>
                            <!-- End::main-content -->
                        </div>
                    </div>

@endsection

@section('scripts')

        <!-- APEX CHARTS JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- FLATPICKR JS -->
        <script src="{{asset('build/assets/libs/flatpickr/flatpickr.min.js')}}"></script>
        @vite('resources/assets/js/flatpickr.js')

         <!-- TABULATOR JS -->
         <script src="{{asset('build/assets/libs/tabulator-tables/js/tabulator.min.js')}}"></script>

         <!-- CHOICES JS -->
        <script src="{{asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

        <script
        src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>

        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/dataTables.tailwindcss.min.js"></script>
        <script href="https://cdn.tailwindcss.com/3.3.5"></script>
        <link rel="stylesheet" href="chosen.css">
        <script src="jquery.js"></script>
        <script src="chosen.jquery.js"></script>

        <script>
            $(document).ready(function(){
               //alert('Hello from jquery');




                $(document).on('click','#staffinformation_store_add_btn',function(e){

                    var stfname = $('.stfname').val();
                    var stmname = $('.stmname').val();
                    var stlname = $('.stlname').val();
                    var stemptype = $('.stemptype').val();
                    var stdepartment = $('.stdepartment').val();
                    var stassociation = $('.stassociation').val();
                    var stdesignation  = $('.stdesignation').val();
                    var streligion = $('.streligion').val();
                    var stcastecategory = $('.stcastecategory').val();
                    var stgender = $('#stgender').val();
                    var stdob = $('#stdob').val();
                    var stdoj = $('#stdoj').val();
                    var stdos = $('#stdos').val();
                    var stbloodgroup = $('#stbloodgroup').val();
                    var stpancard = $('#stpancard').val();
                    var stadharcard = $('#stadharcard').val();
                    var stcontactno = $('#stcontactno').val();
                    var stlocaladd = $('#stlocaladd').val();
                    var stpermentadd = $('#stpermentadd').val();
                    var stemergencyno = $('#stemergencyno').val();
                    var stemergencyname = $('#stemergencyname').val();
                    var stgcrno = $('#stgcrno').val();

                    var flag = false;



                    if(stfname == ''){
                        $('#stfNameError').text('First Name is missing');
                        flag = true;
                    }else if (!/^[a-zA-Z\s]+$/.test(stfname.trim())){
                        $('#stfNameError').text('Please fill the correct value');
                        flag = true;
                    }
                    if(stmname == ''){
                        $('#stmNameError').text('Middle Name is missing');
                        flag = true;
                    }else if (!/^[a-zA-Z\s]+$/.test(stmname.trim())){
                        $('#stmNameError').text('Please fill the correct value');
                        flag = true;
                    }
                     if(stlname == ''){
                        $('#stlNameError').text('Last Name is missing');
                        flag = true;
                    }else if (!/^[a-zA-Z\s]+$/.test(stlname.trim())){
                        $('#stlNameError').text('Please fill the correct value');
                        flag = true;
                    }
                    if(stemptype == 'null'){
                        $('#stemptypeError').text('Please Choose a correct option');
                        flag = true;
                    }

                    if(stdepartment == '#'){
                        $('#stdepartmentError').text('Please Choose a correct option');
                        flag = true;
                    }
                    if(stassociation == '#'){
                        $('#stassociationError').text('Please Choose a correct option');
                        flag = true;
                    }
                    if(streligion == '#'){
                        $('#ststreligionError').text('Please Choose a correct option');
                        flag = true;
                    }
                    if(stdesignation == '#'){
                        $('#stdesignationError').text('Please Choose a correct option');
                        flag = true;
                    }
                    if(stcastecategory == '#'){
                        $('#stcastecategoryError').text('Please Choose a correct option');
                        flag = true;
                    }
                    if(stdob.trim() === ''){
                        $('#stdobError').text('Please Select a proper date');
                        flag = true;
                    }
                    if(stdoj.trim() === ''){
                        $('#stdojError').text('Please Select a proper date');
                        flag = true;
                    }
                    if(stdos.trim() === ''){
                        $('#stdosError').text('Please Select a proper date');
                        flag = true;
                    }
                    if(stbloodgroup == 'null'){
                        $('#stbloodgroupError').text('Please Choose a correct option');
                        flag = true;
                    }
                    if (stpancard !== '') {
                        if (!/^[a-zA-Z0-9\s]+$/.test(stpancard.trim())) {
                            $('#stpancardError').text('Please fill the correct value');
                            flag = true;
                        }
                    }

                    if (stadharcard !== '') {
                        if (!/^[0-9\s]+$/.test(stadharcard.trim())) {
                            $('#stadharcardError').text('Please fill the correct value');
                            flag = true;
                        }
                    }

                    if (stcontactno !== '') {
                        if (!/^[0-9\s]+$/.test(stcontactno.trim())) {
                            $('#contactnoError').text('Please fill the correct value');
                            flag = true;
                        }
                    }

                    //if (stlocaladd !== '' && !/^[a-zA-Z\s]+$/.test(stlocaladd.trim())) {
                        //$('#stlocaladdError').text('Please fill the correct value');
                        //flag = true;
                    //}


                    //if (stpermentadd == '') {
                        //$('#stpermentaddError').text('Permanent Address is missing');
                        //flag = true;
                    //} else if (!/^[a-zA-Z\s]+$/.test(stpermentadd.trim())) {
                        //$('#stpermentaddError').text('Please fill the correct value');
                        //flag = true;
                    //}


                    if (stemergencyno !== '') {
                        if (!/^[0-9\s]+$/.test(stemergencyno.trim())) {
                            $('#stemergencynoError').text('Please fill the correct value');
                            flag = true;
                        }
                    }

                    if (stemergencyname !== '') {
                        if (!/^[a-zA-Z\s]+$/.test(stemergencyname.trim())) {
                            $('#stemergencynameError').text('Please fill the correct value');
                            flag = true;
                        }
                    }

                    if (stgcrno !== '') {
                        if (!/^[a-zA-Z0-9\s]+$/.test(stgcrno.trim())) {
                            $('#stgcrnoError').text('Please fill the correct value');
                            flag = true;
                        }
                    }

                    if(flag == true){
                        e.preventDefault();
                    }
                });

                //for data table generation for staff table
                new DataTable('#staff_table');

                $(document).on('click','#email_id_check',function(){

                    var current_email = $('#email_id').val();
                    var first_name = $('#fname').val();
                    var last_name = $('#lname').val();

                    //alert(current_email);
                    if(first_name != '' && last_name != '' && current_email != ''){

                        if(current_email == first_name.toLocaleLowerCase()){
                            alert('It contains only first name');
                        }else if(current_email == last_name.toLocaleLowerCase()){
                            alert('It contains only last name');
                        }else if(current_email.toLocaleLowerCase().indexOf("@")!=-1){
                            alert('@ is found, kindly change');
                        }else{
                            //alert('ajax Call');
                            $.ajax({
                                url:base_url+'/ESTB/staff/checkemailid',
                                method:'GET',
                                data:{'current_email':current_email},
                                success:function(data) {
                                    console.log(data.length);
                                    $('#email_check_result').empty();
                                    //$('#email_check_result').
                                    if(data.length > 0){
                                        //alert('Email already exists');
                                        $('#email_check_result').html('Email Found ! Kindly change the email ID').addClass('text-red-400');
                                        $('#email_id').focus();

                                    }else{
                                      //  alert('Email Id is okay to be used');
                                        $('#email_check_result').html('Yes! Email ID is valid').addClass('text-green-400');

                                    }
                                },
                                error:function (error) {
                                    console.log(error);
                                }
                            });
                        }
                    }else{
                        //alert('Fill the fields');
                        if(first_name == ''){
                            $('#fname').focus();
                        }
                        if(last_name == ''){
                            $('#lname').focus();
                        }
                        if(current_email == ''){
                            $('#email_id').focus();
                        }
                    }
                });



                $(document).on('change','#employee_type',function(){
                    //alert('changed');
                    var employee_type = $(this).val();

                    if(employee_type=='Teaching'){
                        //alert('teaching');
                        $('#type_of_payscale').hide();
                        //alert($('input[name="pay_type"]:checked').val());
                        $('#Consolidated').hide();
                        $('#payscale_div').hide();

                    } else if(employee_type=='Non-Teaching'){
                        $('#type_of_payscale').show();
                        $('#Consolidated').show();
                        $('#payscale_div').show();

                    }else{
                        $('#type_of_payscale').hide();
                        $('#designation_id').empty();
                        $('#payscalelevel').hide();
                    }

                    if(employee_type !='null'){
                        //alert('ajax call starts');
                        alert(employee_type);
                        $.ajax({
                            url:base_url+'/ESTB/staff/getdesignations_list',
                            method:'GET',
                            data:{'employee_type':employee_type},
                            success:function(data) {
                                //alert(data);
                               console.log(data);
                                var designationsDropdown = $('#designation_id');
                                designationsDropdown.empty(); // Clear existing options
                                data.forEach(function(item) {
                                    designationsDropdown.append($('<option>').text(item['design_name']).attr('value', item['id']));
                                });
                               // alert(designationsDropdown);

                            },
                            error: function (error) {
                                //alert(error);
                                console.log(error);
                            }
                        });
                    }
                });



                //on change of designation , refresh the pay type.
                $(document).on('change','#designation_id',function(){
                    //for re-populating the payscales by reseting the radio button of pay_type
                    //This is connected with (on Change pay type)
                    if($('input[type=radio][name=pay_type]').is(':checked')){
                        //alert('its checked');
                        $('input[type=radio][name=pay_type]').prop('checked', false);
                    }
                });



                /*
                    /    /
                    /   //
                    / /  /
                    /    /

                */
                 //based on designation choosen , the payscales are being vaired through ajax.
                //  $(document).on('change','#designation_id',function(){
                //     //alert('changed');
                //     var employee_type = $('#employee_type').val();
                //     var designation_id = $('#designation_id').val();

                //     //alert(employee_type+'-'+designation_id+'-'+payscale_type);
                //     if(employee_type == "Teaching"){ //for fetching teaching payscales
                //         $.ajax({
                //             url:'/ESTB/staff/getTeachingpayscale_list',
                //             method:'GET',
                //             data:{'designation_id':designation_id},
                //             success:function(data) {
                //                 console.log(data);
                //                 var teachingpayscalesDropdown = $('#payscale_id');
                //                 teachingpayscalesDropdown.empty(); // Clear existing options

                //                 teachingpayscalesDropdown.append($('<option>').text('payscale_title-basepay-maxpay-agp-da-hra').attr('value', 'null'));
                //                 data.forEach(function(item) {
                //                     teachingpayscalesDropdown.append($('<option>').text(item['payscale_title']+"-"+item['basepay']+"-"+item['maxpay']+"-"+item['agp']+"-"+item['da']+"-"+item['hra']).attr('value', item['id']));
                //                 });

                //             },
                //             error: function (error) {
                //                 console.log(error);
                //             }
                //         });
                //     }else if(employee_type == "Non-Teaching"){ // for fetching Non-teaching payscales
                //         //alert('Non teaching Selected');
                //         var payscale_type = $('#payscale_type').val();
                //         if(payscale_type == 0){ // for fetching KLS pay scale

                //             $.ajax({ // ajax call for Non teaching KLS payscale
                //                 url:'/ESTB/staff/getNonTeachingKLSpayscale_list',
                //                 method:'GET',
                //                 data:{'designation_id':designation_id},
                //                 success:function(data) {
                //                     console.log(data.ntpayscales);
                //                     var NTpayscalesDropdown = $('#payscale_id');
                //                     NTpayscalesDropdown.empty(); // Clear existing options
                //                     data.ntpayscales.forEach(function(item) {
                //                         NTpayscalesDropdown.append($('<option>').text(item['title']+"-"+item['payband']).attr('value', item['id']));
                //                     });

                //                 },
                //                 error: function (error) {
                //                     console.log(error);
                //                 }
                //             });
                //         }else if(payscale_type == 1){ // for fetching Consolidated pay scale
                //             $.ajax({ // ajax call for Non teaching Consolidated payscale
                //                 url:'/ESTB/staff/getNTCpayscale_list',
                //                 method:'GET',
                //                 data:{'designation_id':designation_id},
                //                 success:function(data) {
                //                     console.log(data.ntcpayscales);
                //                     var NTCpayscalesDropdown = $('#payscale_id');
                //                     NTCpayscalesDropdown.empty(); // Clear existing options
                //                     NTCpayscalesDropdown.append($('<option>').text('basepay-allowance-year').attr('value', 'null'));

                //                     data.ntcpayscales.forEach(function(item) {
                //                         NTCpayscalesDropdown.append($('<option>').text(item['basepay']+"-"+item['allowance']+"-"+item['year']).attr('value', item['id']));
                //                     });

                //                 },
                //                 error: function (error) {
                //                     console.log(error);
                //                 }
                //             });
                //         }else{
                //             alert('Choose a pay scale Type');
                //             $('#payscale_type').focus();
                //         }

                //     }else{
                //         alert('Choose appropriate Employee type');
                //         $('#employee_type').focus();
                //     }
                //  });



                 //settting the superanuation date based on DoB.
                 $(document).on('change','.dob',function(){
                    var dob = $(this).val();

                    //var doj = $('.doj').val();
                    dob = new Date(dob);
                    var today = new Date();
                    var year = parseInt(dob.getFullYear())+58;
                    var month = parseInt(dob.getMonth())+1;

                     newDoS = new Date(year, month,0); // to get the last date of the month
                     yr      = newDoS.getFullYear();
                     new_dos_month = (parseInt(newDoS.getMonth())+1);
                     mon   =  new_dos_month < 10 ? '0' + new_dos_month : new_dos_month; //
                    day     =  newDoS.getDate(); //new Date(dos.getFullYear(), dos.getDate() + 1, 0) < 10 ? '0' + new Date(dos.getFullYear(), dos.getDate() + 1, 0)  : new Date(dos.getFullYear(), dos.getDate() + 1, 0),

                    final_dos = yr+'-'+mon+'-'+day; // the final dos date.
                    $('.dos').val(final_dos); //updaing it in the field.
                });

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

               $(document).on('change','#payscale_type',function(){
                    var payscaletype_val = $(this).val();
                    if(payscaletype_val == 0 ){ // on change of payscale type, reflect the level of increment only when it is KLS pay sclale and not for Consolidated payscale.
                        $('#payscalelevel').show();
                        //alert('level show')
                    }else{
                        $('#payscalelevel').hide();
                    }
               });


               //on change of Pay type , get employee type, designation and then populate appropriate pay
                $(document).on('change','input[type=radio][name=pay_type]',function(){
                    //alert($(this).val());
                    var pay_type = $(this).val();
                    var emp_type = $('#employee_type').val();
                  //  alert(emp_type);
                    var designation_id = $('#designation_id').val();

                    //alert(pay_type+'-'+emp_type+'-'+designation_id);
                    if(pay_type == "Fixed"){
                        $('#fixed_pay_div').show();
                        $('#payscale_div').hide();
                        $('#payscalelevel').hide();
                    }else{
                        $('#fixed_pay_div').hide();
                        // if( $('#payscale_div'))
                        // $('#payscale_div').show();
                        //ajax call for populating the pay

                        $.ajax({
                            url:base_url+'/ESTB/staff/getstaffpay_list',
                            method:'GET',
                            data:{'pay_type':pay_type,'emp_type':emp_type,'designation_id':designation_id},
                            success:function(data) {
                                console.log(data);
                                var staffPayDropdown = $('#payscale_div');
                                staffPayDropdown.empty(); // Clear existing options
                                if(pay_type == "Consolidated"){


                                        $("#payscale_div").html(data);
                                        $('#payscale_div').show();
                                        $('#payscalelevel').hide(); // For displaying the payscale level

                                }else if(pay_type == "Payscale"){
                                    if(emp_type == "Teaching"){

                                        $("#payscale_div").html(data);
                                        $('#payscale_div').show();


                                        $('#payscalelevel').hide();
                                    }else{

                                        $("#payscale_div").html(data);
                                        $("#payscale_div").show();
                                        //$('#payscale_div').hide();
                                        //$('#nt_payscale_div').show();
                                        //$('#payscalelevel').show(); // For displaying the payscale level
                                    }
                                }

                                //$("#castecategory_list").html(data);
                            },
                            error: function (error)
                            {
                                console.log(error);
                            }
                        });
                    }
                });

               $(document).on('change','#associations_id',function(){
            //         alert('Association changed');
                if($(this).val() == 4){ //'Contractual'
                    $('#duration_div').show();
                }else{
                    $('#duration_div').hide();
                }
            });

              /////////// //The association is not connected with designation and payscale.//////////
            //    $(document).on('change','#associations_id',function(){
            //        // alert('Association changed');
            //         var association_id = $(this).val();
            //         var employee_type = $('#employee_type').val();

            //         if(employee_type == 'Teaching'){
            //             //alert(association_id);
            //             if(association_id == 4){ //for contractual (full time)
            //                 //alert('Contractual full time');
            //                 $('#consolidated_pay_div').show();
            //                 $('#payscale_div').hide(); //Consolidated salary doesnt require payscale , so hiding it.

            //             }else{
            //                 //opposit of previous case. (if)
            //                 $('#consolidated_pay_div').hide();
            //                 $('#payscale_div').show();
            //             }
            //         }
            //    });


            });
        </script>

        <!-- INDEX JS -->
        @vite('resources/assets/js/index-8.js')


@endsection
