@extends('layouts.components.Dean_admin.master-Dean_admin')

@section('styles')

        <!-- CHOICES CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/choices.js/public/assets/styles/choices.min.css')}}">

        <!-- FLATPICKR CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/flatpickr/flatpickr.min.css')}}">
       
        
    <!-- FULLCALENDAR CSS -->
    <link rel="stylesheet" href="{{asset('build/assets/libs/fullcalendar/main.min.css')}}">
    <script>
        var base_url = "{{URL::to('/')}}";
    </script>
@endsection
@section('content')

                <div class="content">

                    <!-- Start::main-content -->
                    <div class="main-content">
                        @php
                           // $staff = Auth::user();
                          //  $staff=staff::where('user_id','=',$user->id)->first();
                        @endphp
                        <!-- Page Header -->
                        <div class="block justify-between page-header sm:flex">
                            <div>
                                <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium">Welcome  <span class="text-primary"></span></h3>
                            </div>
                            <ol class="flex items-center whitespace-nowrap min-w-0">
                                <li class="text-sm">
                                <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="#">
                                    Leaves Calender
                                    <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                </a>
                                </li>
                                
                                
                            </ol>
                        </div>
                        <!-- Page Header Close -->
                        @if(session('status'))
                                @if (session('status') == 1)
                                <div class='bg-white dark:bg-bgdark border border-success alert text-success' role='alert'>
                                    <span class='font-bold'>Result</span> Successful
                                </div>
                                @elseif(session('status') == 0)
                                <div class='bg-white dark:bg-bgdark border border-danger alert text-danger' role='alert'>
                                    <span class='font-bold'>Result</span> Error  transaction
                                </div>
                            
                                @endif
                                @php 
                                    Illuminate\Support\Facades\Session::forget('status');  
                                    header("refresh: 3"); 
                                @endphp
                            @endif
                    </div>
                    <div class="grid grid-cols-12 gap-x-6">
                        {{-- <div class="col-span-12 xl:col-span-12">
                            <div class="box">
                                <div class="box-body">
                                        <h1 class="text-primary font-bold">My Leave Statistics</h1>
                                        <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto pb-6">
                                            
                                            <table class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                <thead class="bg-gray-50 dark:bg-black/20">
                                                    
                                                   
                                                    <tr class="">
                                                        <th>Titles</th>
                                                        @foreach ($staff_leave_entitlements as $l_types)
                                                            <th scope="col" class="dark:text-white/80 font-bold item-center">{{$l_types->shortname}}</th>
                                                        @endforeach
                                                        <th>DL-GIT</th>
                                                        <th>DL-VTU</th>
                                                    </tr>
                                                   
                                                </thead>
                                                <tbody>
                                                    <tr class="">
                                                        <th>Entitled</th>
                                                        @foreach ($staff_leave_entitlements as $staff_leave)
                                                            
                                                                    <td>{{$staff_leave->entitled_curr_year}}</td>
                                                               
                                                        @endforeach
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr class="">
                                                        <th>Availed</th>
                                                        @foreach ($staff_leave_entitlements as $staff_leave)
                                                            
                                                                    <td>{{$staff_leave->consumed_curr_year}}</td>
                                                               
                                                        @endforeach
                                                    </tr>
                                                    <tr class="">
                                                        <th>Balance</th>
                                                        
                                                    </tr>
                                                </tbody>
                                            </table>    
                                        </div>       
                                </div>
                            </div>
                        </div> --}}
                    </div>           
                    <!-- Start::main-content -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="col-span-12 xl:col-span-12">
                            <div class="box">
                                <div class="box-body">                
                                    <div class="box border-0 shadow-none mb-0">
                                       
                                        <div class="box-body">
                                           

                                            
                                            <div id="calendar2"></div>
                                                   <!--The view Modal starts-->
                                        <button data-hs-overlay="#view_leave" class="hs-dropdown-toggle ti-btn ti-btn-primary hidden" id="view_leave_modal">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M11 6V14H19C19 18.4183 15.4183 22 11 22C6.58172 22 3 18.4183 3 14C3 9.66509 6.58 6 11 6ZM21 2V4L15.6726 10H21V12H13V10L18.3256 4H13V2H21Z"></path></svg>
                                            View Leave
                                        </button>
                                        <div id="view_leave" class="hs-overlay hidden ti-modal">
                                            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                <div class="ti-modal-content">
                                                    <div class="ti-modal-header">
                                                        <h3 class="ti-modal-title">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M11 6V14H19C19 18.4183 15.4183 22 11 22C6.58172 22 3 18.4183 3 14C3 9.66509 6.58 6 11 6ZM21 2V4L15.6726 10H21V12H13V10L18.3256 4H13V2H21Z"></path></svg>
                                                             View leave  on <span id="leave_date_header_view" class="text-primary font-bold"></span>
                                                        </h3>
                                                            <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                data-hs-overlay="#view_leave">
                                                                <span class="sr-only">Close</span>
                                                                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                    d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                    fill="currentColor" />
                                                                </svg>
                                                            </button>
                                                    </div>
                                                    <div class="ti-modal-body">
                                                        <div class="avatar-container flex py-4">
                                                            <div class="avatar-wrapper flex items-center">
                                                                <div class="avatar rounded-sm p-1 bg-green-500 border-gray-900 border-2 w-6 h-6"></div>
                                                                <div class="avatar-text font-bold ml-2 ">Approved</div>
                                                            </div>
    
                                                            <div class="avatar-wrapper flex items-center mx-2">
                                                                <div class="avatar rounded-sm p-1 bg-red-500 border-gray-900 border-2 w-6 h-6"></div>
                                                                <div class="avatar-text font-bold ml-2">Rejected</div>
                                                            </div>
    
                                                            <div class="avatar-wrapper flex items-center mx-2">
                                                                <div class="avatar rounded-sm p-1 bg-yellow-400 border-gray-900 border-2 w-6 h-6"></div>
                                                                <div class="avatar-text font-bold ml-2">Recommended</div>
                                                            </div>
    
                                                            <div class="avatar-wrapper flex items-center">
                                                                <div class="avatar rounded-sm p-1 border-gray-900 border-2 w-6 h-6"></div>
                                                                <div class="avatar-text font-semibold ml-2">Pending</div>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="table-bordered rounded-sm ti-custom-table-head table-auto pt-6 pb-6 hidden" id="holiday_rh_div">
                                                            <span class="text-primary font-bold">Holiday & Rh List</span>
                                                            <table class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                                <thead class="bg-gray-50 dark:bg-black/20">
                                                                    <tr class="">
                                                                        
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Leave Type</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Event</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="holidayrh_list">
                                                                
                                                                </tbody>
                                                            </table>  
                                                        </div> 

                                                        <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto pb-6 hidden" id="leave_list_div">
                                                            
                                                            <span class="text-primary font-bold">Leave List</span>
                                                            
                                                            <table class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                                <thead class="bg-gray-50 dark:bg-black/20">
                                                                    <tr class="">

                                                                        <th scope="col" class="dark:text-white/80 font-bold">#</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Leave Type</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Staff on Leave</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Dept</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">From Date</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">To Date</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Leave Reasons</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Alternate</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Additional <br/> Alternate</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Actions</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="leave_application_list">

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                        <div class="ti-modal-footer " id="edit_applied_leave_div">
                                                            
                                                                   
                                                                    <button type="button"
                                                                        class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10 leave_apply_close_btn"
                                                                         data-hs-overlay="#view_leave">
                                                                        Cancel
                                                                    </button>

                                                                    {{-- <input type="submit" class="ti-btn  bg-warning text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10" id="leave_edit_btn" value="Update"/> --}}

                                                        </div>    
                                                    </div>
                                                </div>


                                            </div> 
                                            <!-- Calender for leaves ends here-->
                                           
                                        </div>

                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

@endsection

@section('scripts')

        <!-- FLATPICKR JS -->
        <script src="{{asset('build/assets/libs/flatpickr/flatpickr.min.js')}}"></script>

        <!-- CHOICES JS -->
        <script src="{{asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

         <!-- TABULATOR JS -->
         <script src="{{asset('build/assets/libs/tabulator-tables/js/tabulator.min.js')}}"></script>
         <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <!-- FORM-LAYOUT JS -->
        @vite('resources/assets/js/profile-settings.js')

         <!-- MOMENT JS -->
         <script src="{{asset('build/assets/libs/moment/moment.js')}}"></script>

         <!-- FULLCALENDAR JS -->
         <script src="{{asset('build/assets/libs/fullcalendar/main.min.js')}}"></script>
         @vite('resources/assets/js/fullcalendar.js')

        
        <script
        src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
        {{-- <script type="javascript" src="js/require.js"></script>
        <script>
            const customViewPlugin = require('js/table_list_view.js');
            </script>
             --}}
        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>
        {{-- <script type="javascript" src="js/table_list_view.js"></script> --}}
        
        <script>
            //import { formatDate } from '@fullcalendar/core'
            $(document).ready(function(){
               //alert('Hello from jquery');
               
               $('#cl_type_block').hide();
               //new DataTable('#leaves');
                    //
               
            });
            $("input[name='cl_type']").change(function(e){
                if($(this).val() == 'Morning' || $(this).val()=='Afternoon') {
                    $('#to_date').val($('#from_date').val());
                    
                
                }
            });
            $(document).on('change','#type',function(){
                if($("#type option:selected").text()=="CL")
                {
                    $('#cl_type_block').show();
                }
                else
                {
                    $('#cl_type_block').hide();
                }
            });
                //for generating the no of days between the leave dates.
            $(document).on('change', '#to_date',function(){
                       
                 var from_date = $('#from_date').val();
                 var to_date = $('#to_date').val();
                   // alert(from_date+'-'+to_date);
                    if(from_date != ""){

                        if(from_date == to_date){
                            //$('.no_of_days_count').removeClass('border border-red-500 focus:border-blue-500');
                            
                            $('#no_of_days_count').val(1);
                        }else if(from_date > to_date){
                            $('#no_of_days_count').val(0);
                            //$('.no_of_days_count').addClass('border border-red-500 focus:border-blue-500');
                            $('#to_date').val();
                            $('#to_date').focus();
                        }else{
                            //$('.no_of_days_count').removeClass('border border-red-500 focus:border-blue-500');
                            
                            var startDay = new Date(from_date);  
                            var endDay = new Date(to_date);  

                            //alert(startDay+'-'+endDay);

                            // Determine the time difference between two dates     
                            var millisBetween = endDay.getTime() - startDay.getTime();  
                            
                            // Determine the number of days between two dates  
                            var days = millisBetween / (1000 * 3600 * 24);
                            days=days+1;  
                            $('#no_of_days_count').val(days);
                        }
                        
                    }else{
                        $('#from_date').focus();
                        alert('Please fill the from date');
                    }
                            
            });

            //for proceeding to approving  the leave.
            $(document).on('click','.approve_leave',function(){
                var application_id = $(this).attr("data_val");
                var applicant_details = $(this).attr("appl_details");
                var comfirmation_status = confirm("Are you sure ? you want to Approve leave for "+applicant_details);
                
                if(comfirmation_status){
                    $.ajax({
                            url: base_url+'/Dean_admin/leaves_management/approve_leave',
                                method: 'GET',
                                data: {
                                    application_id : application_id,
                                    
                                    _token : '{{csrf_token()}}' // Pass the clicked date to the server
                                },
                                success: function(response) {
                                    // Handle the response from the server
                                    console.log(response);
                                    $('#leave_appl_status_msg').html(response);
                                    setInterval(() => {
                                        location.reload();
                                    }, 2000);
                                },
                                error: function(xhr, status, error) {
                                    // Handle errors
                                    console.error(xhr.responseText);
                                }    

                    });
                }
            });  


            $(document).on('click','.reject_leave',function(){
                //alert('Reject clicked');
                var application_id = $(this).attr("data_val");
                var applicant_details = $(this).attr("appl_details");
                var comfirmation_status = confirm("Are you sure ? you want to Reject the leave for "+applicant_details+" with application id :"+application_id);
                
                if(comfirmation_status){
                    $.ajax({
                            url: base_url+'/Dean_admin/leaves_management/reject_leave',
                                method: 'GET',
                                data: {
                                    application_id : application_id,
                                    
                                    _token : '{{csrf_token()}}' // Pass the clicked date to the server
                                },
                                success: function(response) {
                                    // Handle the response from the server
                                    console.log(response);
                                    $('#leave_appl_status_msg').html(response);
                                    setInterval(() => {
                                        location.reload();
                                    }, 2000);
                                },
                                error: function(xhr, status, error) {
                                    // Handle errors
                                    console.error(xhr.responseText);
                                }    

                    });
                }
            });


           // import customViewPlugin from 'js/table_list_view.js';
            //Calender javscript Starts here.
            document.addEventListener('DOMContentLoaded', function() {
                var TileColor = '';
                //var clientevents = $('#calender2').fullCalendar('clientEvents');
                //console.log(clientevents);
                const calendarEl = document.getElementById('calendar2')
                const calendar = new FullCalendar.Calendar(calendarEl, {

                    initialView: 'dayGridMonth',
                    //plugins: [ customViewPlugin ],
                    headerToolbar: {
                        center: 'dayGridMonth, listDay, table', // buttons for switching between views
                    },
                    buttonText : {
                            month:    'Month View',
                            list:     'Leaves List',
                            custom:  'List'
                        },
                    height: 650,
                    eventSources: [
                    {
                            //for loading the RH and Holiday
                        url: base_url+'/Dean_admin/leaves_management/hollidayrh_events',

                        method: 'GET',
                        success:function(data){
                           
                        },
                        failure: function(data) {
                           // alert(data);
                            //console.log(data);
                        },
                        allDay:false,
                        eventTextColor:'#000',
                        display:'background',
                        selectable: false,
                        // a non-ajax option
                    },
                    //for loading the leave events
                    {
                        url: base_url+'/Dean_admin/leaves_management/fetchAllleaveevents',
                        method: 'GET',
                        success:function(data){
                           console.log(data);
                        },
                        failure: function(data) {
                            //alert(data);
                           // console.log(data);
                        },
                        allDay:true,
                        eventTextColor:'red',
                        titleFormat: 'dd-MM-YYYY',
                        
                        selectable: false,
                        // a non-ajax option
                    }
                    
                                            
                    ],
                    eventDidMount: function (info) {
                        info.el.onclick = "disabled";
                       //console.log(info.event.extendedProps.type);
                       
                       //console.log(info.event.end.getFullYear());

                       var date = new Date(info.event.end);
                       //console.log(date);
                       var dateString = new Date(date.getTime() - (date.getTimezoneOffset() * 60000))
                                            .toISOString()
                                            .split("T")[0];
                       console.log(date.getDate()+1);
                       //for styling the Holiday and RH events
                       if (info.event.extendedProps.type=="Holiday") {
                           info.el.style.background = "red";//info.event.extendedProps.background;
                           info.el.style.color  = "white";
                           info.el.style.fontSize  = "15px";
                       }else if (info.event.extendedProps.type=="RH") {
                           info.el.style.background = "#f5ed07";
                           info.el.style.color = "black";
                           info.el.style.fontSize  = "15px";
                       }   

                        
                        //for styling the leave events
                        if(info.event.extendedProps.leave_name == 'CL'){ //for CL
                            info.el.style.background = "blue";//info.event.extendedProps.background;
                           info.el.style.color  = "white";
                           info.el.style.fontSize  = "15px";
                       }else if(info.event.extendedProps.leave_name == 'RH'){
                            info.el.style.background = "orange";//info.event.extendedProps.background;
                           info.el.style.color  = "white";
                           info.el.style.fontSize  = "15px";
                       }
                       else if(info.event.extendedProps.leave_name =='EL'){
                            info.el.style.background = "#ed1886";//info.event.extendedProps.background;
                           info.el.style.color  = "black";
                           info.el.style.fontSize  = "15px";
                       }
                       else if(info.event.extendedProps.leave_name =='DL-GIT'){
                            info.el.style.background = "#8ded07";//info.event.extendedProps.background;
                           info.el.style.color  = "black";
                           info.el.style.fontSize  = "15px";
                       } else if(info.event.extendedProps.leave_name =='DL-Other'){
                            info.el.style.background = "#a64dff";//info.event.extendedProps.background;
                           info.el.style.color  = "black";
                           info.el.style.fontSize  = "15px";
                       }else if(info.event.extendedProps.leave_name =='DL-VTU'){
                            info.el.style.background = "#ff8533";//info.event.extendedProps.background;
                           info.el.style.color  = "black";
                           info.el.style.fontSize  = "15px";
                       }else if(info.event.extendedProps.leave_name =='LWP'){
                            info.el.style.background = "#ff3333";//info.event.extendedProps.background;
                           info.el.style.color  = "black";
                           info.el.style.fontSize  = "15px";
                       }


                   },  dateClick: function(info) {
                    
                      
            
                    },
                    eventClick: function(info) {
                        ///alert('Event: ' + info.event.start);
                        //console.log(info.event.start);
                        var Clickeddate = info.event.start;
                        $('#view_leave_modal').trigger('click');
                        // $('.event_title').html(info.event.title+' on '+ Clickeddate.getDate()+"/"+Clickeddate.getMonth()+"/"+Clickeddate.getFullYear());
                        // $('#view_leave').css('z-index', 9999);
                         // change the border color just for fun
                         Clickeddate = info.event.start;

                        // $('#view_leave_modal').trigger('click');
                        // $('#edit_applied_leave_div').hide(); //for hiding the leave application edit form.(initially).
                        // $('#leave_edit_btn').hide(); // for hiding the update button in the edit application.
                        //alert('view modal active');
                        var clicked_date = Clickeddate.getFullYear()+"-"+(Clickeddate.getMonth()+1)+"-"+Clickeddate.getDate();
                        

                        info.el.style.borderColor = 'red';
                        //ajax call for loading the Holiday and RH Events
                        $.ajax({
                            
                            url: base_url+'/Dean_admin/leaves_management/fetchholidayrhevents',
                            method: 'GET',
                            data: {
                                date: clicked_date,
                                _token : '{{csrf_token()}}' // Pass the clicked date to the server
                            },
                            success: function(response) {
                                // Handle the response from the server
                                //console.log(response);
                                $('#holidayrh_list').empty();
                                if(response.length !=0){
                                    //$('#leave_list_div').hide();
                                    $('#holiday_rh_div').show();
                                    $.each(response, function(key, value) {
                                        console.log(value)
                                        $('#holidayrh_list').append('<tr class="'+(value['type']=="RH"?"bg-orange-400":"bg-red-400")+'"><td >'+value['type']+ '</td><td>'+value['title']+ '</td></tr>');
                                    
                                    });
                                }else{
                                    //$('#leave_list_div').show();
                                    $('#holiday_rh_div').hide();
                                    $('#holidayrh_list').append('<tr class="text-red-400"><td colspan="2" align="center">No Holiday/RH</td></tr>')
                                }
                                
                            },
                            error: function(xhr, status, error) {
                                // Handle errors
                                console.error(xhr.responseText);
                            }
                    });
                    //ajax call for loading the leave events on calender
                        $.ajax({
                            
                            url: base_url+'/Dean_admin/leaves_management/fetchleaveevents',
                            method: 'GET',
                            data: {
                                date: clicked_date,
                                _token : '{{csrf_token()}}' // Pass the clicked date to the server
                            },
                            success: function(response) {
                                // Handle the response from the server
                                console.log(response);
                                $('#leave_application_list').empty();
                                if(response.length !=0){
                                    $.each(response, function(key, value) {
                                    $('#leave_list_div').show();
                                   // $('#holiday_rh_div').hide();
                                   var bg_color_setting = '';
                                            //console.log(value);
                                           if(value.appl_status == 'recommended'){
                                                //alert('recomended');
                                                bg_color_setting = 'bg-yellow-400';
                                           }else if(value.appl_status == 'pending'){
                                                bg_color_setting = '';
                                           }
                                           else if(value.appl_status == 'approved'){
                                                bg_color_setting = 'bg-green-400';
                                           }else if(value.appl_status == 'rejected'){
                                                bg_color_setting = 'bg-red-300';
                                           }

                                    $('#leave_application_list').append('<tr class="'+ bg_color_setting +'">'
                                                                +'<td >'+value.Application_id+ '</td>'
                                                                +'<td >'+value.staff_name+ '</td>'
                                                                +'<td >'+value.shortname+ '</td>'
                                                                +'<td>'+value.title+ '</td>'
                                                                +'<td>'+value.start+ '</td>'
                                                                +'<td>'+value.end+ '</td>'
                                                                +'<td>'+value.reason+ '</td>'
                                                                +'<td>'+value.alternate_staff+ '</td>'
                                                                +'<td>'+(value.additional_alternate_staff == null ? '-NA-':value.additional_alternate_staff)+ '</td>'
                                                                +'<td>'
                                                                    +'<button class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-success approve_leave '+(value.appl_status != "recommended"?"hidden":"")+'" data_val="'+value.Application_id+'" appl_details = "'+value.staff_name+'-'+ value.title+'" title="Approve">'
                                                                                +'<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M9.9997 15.1709L19.1921 5.97852L20.6063 7.39273L9.9997 17.9993L3.63574 11.6354L5.04996 10.2212L9.9997 15.1709Z"></path></svg>'
                                                                                +'</button>'
                                                                            +'<button class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger reject_leave"  data_val="'+value.Application_id+'" appl_details = "'+value.staff_name+'-'+ value.title+'" title="Reject">'
                                                                                +'<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M11.9997 10.5865L16.9495 5.63672L18.3637 7.05093L13.4139 12.0007L18.3637 16.9504L16.9495 18.3646L11.9997 13.4149L7.04996 18.3646L5.63574 16.9504L10.5855 12.0007L5.63574 7.05093L7.04996 5.63672L11.9997 10.5865Z"></path></svg>'
                                                                            +'</button>'
                                                                +'</td>'
                                                                +'</tr>');
                                    });

                                    $('#leave_form').hide(); //for hiding the leave form div
                                }else{
                                    $('#leave_list_div').hide();// for hiding the leave list
                                   // $('#holiday_rh_div').hide();
                                    $('#leave_application_list').append('<tr class="text-red-400"><td colspan="8" align="center">No Leaves Applied</td></tr>')
                                    $('#leave_form').show(); //for hiding the leave form div
                                }
                                
                            },
                            error: function(xhr, status, error) {
                                // Handle errors
                                console.error(xhr.responseText);
                            }
                        });

                    }
                  
                   
                //    
                //         selectAllow: function(selectInfo) {
                //             return moment().diff(selectInfo.start) <= 0
                //     }
                                    
                })
                calendar.render()
            });
        </script>
@endsection