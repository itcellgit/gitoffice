//Calender javscript Starts here.
document.addEventListener('DOMContentLoaded', function() {
    var TileColor = '';
    //var clientevents = $('#calender2').fullCalendar('clientEvents');
    //console.log(clientevents);
    const calendarEl = document.getElementById('calendar2')
    const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        height: 650,
        eventSources: [
        {
                //for loading the RH and Holiday
            url: base_url+'/ESTB/leaves_calender/hollidayrh_events',
            method: 'GET',
            success:function(data){
               //console.log(data);
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
            url: base_url+'/ESTB/leaves_calender/fetchAllleaveevents',
            method: 'GET',
            success:function(data){
               //console.log(data);
            },
            failure: function(data) {
               // alert(data);
               // console.log(data);
            },
            allDay:true,
            eventTextColor:'red',
            titleFormat: 'dd-MM-YYYY',
            
            selectable: false,
            // a non-ajax option
        }
        
                                
        ],
        // eventContent: function (args, createElement)
        //     {
        //         //console.log(args.event.extendedProps.recommended_count);
        //         if(args.event.extendedProps.pending_count>0){
        //             const text = args.event._def.title  +'<span class="flex absolute h-5 w-5 top-0 ltr:right-0 rtl:left-0 -mt-1 ltr:-mr-1 rtl:-ml-1">'
        //                                                 +'  <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-success/80 opacity-75"></span>'
        //                                                     +'<span'
        //                                                     +'class="relative inline-flex rounded-full h-5 w-5 bg-success text-white justify-center items-center" id="notify-data">'+args.event.extendedProps.pending_count+'</span>'
        //                                                 +'</span>';
        //             return {
        //             html: text
        //         };
        //      }
        //     },
        eventDidMount: function (info) {
            info.el.onclick = "disabled";
           //console.log(info.event.extendedProps.type);
           
           //console.log(info.event.end.getFullYear());

           var date = new Date(info.event.end);
           //console.log(date);
           var dateString = new Date(date.getTime() - (date.getTimezoneOffset() * 60000))
                                .toISOString()
                                .split("T")[0];
           //console.log(date.getDate()+1);
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
        },  
        dateClick: function(info) {
        
            alert('clicked');
           //console.log(info);
         //   alert('Current view: ' + info.view.type);
            
           $('#leave_apply_modal').trigger('click');
            $('#from_date').val(info.dateStr);
            flatpickr('#from_date', {
                "minDate": new Date(info.dateStr),
                "maxDate": new Date(info.dateStr),
               
            });
            $('#type').focus();
            flatpickr('#to_date', {
                "minDate": new Date(info.dateStr),
                "maxDate": new Date(info.dateStr).fp_incr(30)
            });

           
              
            $('#add_leaveform').css('z-index', 3333);
            $('#leave_date_header').html(info.dateStr);
            
            //ajax call for loading the Holiday and RH Events
            // $.ajax({
                
            //         url: base_url+'/fetchholidayrhevents',
            //         method: 'POST',
            //         data: {
            //             date: info.dateStr,
            //             _token : '{{csrf_token()}}' // Pass the clicked date to the server
            //         },
            //         success: function(response) {
            //             // Handle the response from the server
            //             //console.log(response);
            //             $('#holidayrh_list').empty();
            //             if(response.length !=0){
            //                 //$('#leave_list_div').hide();
            //                 $('#holiday_rh_div').show();
            //                 $.each(response, function(key, value) {

            //                     $('#holidayrh_list').append('<tr class="'+(value['type']=="RH"?"bg-orange-400":"bg-red-400")+'"><td >'+value['type']+ '</td><td>'+value['title']+ '</td></tr>');
                            
            //                 });
                            
                            
                          
                            
            //             }else{
            //                 //$('#leave_list_div').show();
            //                 $('#holiday_rh_div').hide();
            //                 $('#holidayrh_list').append('<tr class="text-red-400"><td colspan="2" align="center">No Holiday/RH</td></tr>')
            //             }
                        
            //         },
            //         error: function(xhr, status, error) {
            //             // Handle errors
            //             console.error(xhr.responseText);
            //         }
            // });
            //ajax call for loading the leave events on calender
            //     $.ajax({
                    
            //         url: base_url+'/ESTB/leaves_management/fetchleaveevents',
            //         method: 'POST',
            //         data: {
            //             date: info.dateStr,
            //             _token : '{{csrf_token()}}' // Pass the clicked date to the server
            //         },
            //         success: function(response) {
            //             // Handle the response from the server
            //             //console.log(response[0].additional_alternate_staff);
            //             $('#leave_application_list').empty();
            //             if(response.length !=0){
            //                 $.each(response, function(key, value) {
            //                 $('#leave_list_div').show();
            //                // $('#holiday_rh_div').hide();
            //                 $('#leave_application_list').append('<tr>'
            //                                             +'<td >'+value.Application_id+ '</td>'
            //                                             +'<td>'+value.title+ '</td>'
            //                                             +'<td>'+value.start+ '</td>'
            //                                             +'<td>'+value.end+ '</td>'
            //                                             +'<td>'+value.reason+ '</td>'
            //                                             +'<td>'+value.alternate_staff+ '</td>'
            //                                             +'<td>'+value.additional_alternate_staff+ '</td>'
            //                                             +'<td>'
            //                                                 +'<div class="hs-tooltip ti-main-tooltip">'
            //                                                                 +'<button data-hs-overlay="#fund_edit_modal" id="" btn-val='
            //                                                                         +'class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary fund_edit_modal_click">'
            //                                                                         +'<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>'
            //                                                                         +'<span'
            //                                                                         +'class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"'
            //                                                                         +'role="tooltip">'
            //                                                                         +'</span>'
            //                                                                 +'</button>'
            //                                                 +'</div>'
            //                                                 +'<div class="hs-tooltip ti-main-tooltip">'
            //                                                                         +'<form action="#" method="post">'
            //                                                                             +'<button onclick="return confirm("Are you Sure")'
            //                                                                             +'  class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">'
            //                                                                                 +'<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M7 4V2H17V4H22V6H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V6H2V4H7ZM6 6V20H18V6H6ZM9 9H11V17H9V9ZM13 9H15V17H13V9Z"></path></svg>'
            //                                                                                 +'@method("delete")'
            //                                                                                 +'@csrf'
            //                                                                                 +'<span'
            //                                                                                     +'class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"'
            //                                                                                     +'role="tooltip">'
            //                                                                                 +'</span>'
            //                                                                             +'</button>'
            //                                                                         +'</form>'
            //                                                                     +'</div>'
            //                                             +'</td>'
            //                                             +'</tr>');
            //                 });

            //                 $('#leave_form').hide(); //for hiding the leave form div
            //             }else{
            //                 $('#leave_list_div').hide();// for hiding the leave list
            //                // $('#holiday_rh_div').hide();
            //                 $('#leave_application_list').append('<tr class="text-red-400"><td colspan="8" align="center">No Leaves Applied</td></tr>')
            //                 $('#leave_form').show(); //for hiding the leave form div
            //             }
                        
            //         },
            //         error: function(xhr, status, error) {
            //             // Handle errors
            //             console.error(xhr.responseText);
            //         }
            // });

        },
        eventClick: function(info) {
            var Clickeddate = info.event.start;
            var leave_name = info.event.extendedProps.leave_name;
            console.log(leave_name);
            $('#view_leave_modal').trigger('click');
            // $('.event_title').html(info.event.title+' on '+ Clickeddate.getDate()+"/"+Clickeddate.getMonth()+"/"+Clickeddate.getFullYear());
            // $('#view_leave').css('z-index', 9999);
             // change the border color just for fun
             Clickeddate = info.event.start;

            //$('#view_leave_modal').trigger('click');
            // $('#edit_applied_leave_div').hide(); //for hiding the leave application edit form.(initially).
            // $('#leave_edit_btn').hide(); // for hiding the update button in the edit application.
            //alert('view modal active');
            var clicked_date = Clickeddate.getFullYear()+"-"+(Clickeddate.getMonth()+1)+"-"+Clickeddate.getDate();
            

            info.el.style.borderColor = 'red';
            //ajax call for loading the Holiday and RH Events
            $.ajax({
                
                url: base_url+'/ESTB/leaves_management/fetchholidayrhevents',
                method: 'GET',
                data: {
                    date: clicked_date,
                  
                    _token : '{{csrf_token()}}' // Pass the clicked date to the server
                },
                success: function(response) {
                    // Handle the response from the server
                    console.log(response);
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
                
                url: base_url+'/ESTB/leaves_management/fetchleaveevents',
                method: 'GET',
                data: {
                    date: clicked_date,
                    leave_name: leave_name,
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
                                                    +'<td>'+value.title+ '</td>'
                                                    +'<td >'+value.staff_name+ '</td>'
                                                    +'<td >'+value.shortname+ '</td>'
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
                        
    });
    calendar.render()
});