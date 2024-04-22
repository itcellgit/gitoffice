/ajax call for loading the leave events on calender
                            $.ajax({
                                
                                url: base_url+'/fetchmyleaveevents',
                                method: 'GET',
                                data: {
                                    date: info.dateStr,
                                    _token : '{{csrf_token()}}' // Pass the clicked date to the server
                                },
                                success: function(response) {
                                    // Handle the response from the server
                                    //console.log(response[0].additional_alternate_staff);
                                    $('#leave_application_list').empty();
                                    if(response.length !=0){
                                        $.each(response, function(key, value) {
                                        $('#leave_list_div').show();
                                       // $('#holiday_rh_div').hide();
                                        $('#leave_application_list').append('<tr>'
                                                                    +'<td >'+value.Application_id+ '</td>'
                                                                    +'<td>'+value.title+ '</td>'
                                                                    +'<td>'+value.start+ '</td>'
                                                                    +'<td>'+value.end+ '</td>'
                                                                    +'<td>'+value.reason+ '</td>'
                                                                    +'<td>'+value.alternate_staff+ '</td>'
                                                                    +'<td>'+value.additional_alternate_staff+ '</td>'
                                                                    +'<td>'
                                                                        +'<div class="hs-tooltip ti-main-tooltip">'
                                                                                        +'<button data-hs-overlay="#fund_edit_modal" id="" btn-val='
                                                                                                +'class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary fund_edit_modal_click">'
                                                                                                +'<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>'
                                                                                                +'<span'
                                                                                                +'class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"'
                                                                                                +'role="tooltip">'
                                                                                                +'</span>'
                                                                                        +'</button>'
                                                                        +'</div>'
                                                                        +'<div class="hs-tooltip ti-main-tooltip">'
                                                                                                +'<form action="#" method="post">'
                                                                                                    +'<button onclick="return confirm("Are you Sure")'
                                                                                                    +'  class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">'
                                                                                                        +'<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M7 4V2H17V4H22V6H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V6H2V4H7ZM6 6V20H18V6H6ZM9 9H11V17H9V9ZM13 9H15V17H13V9Z"></path></svg>'
                                                                                                        +'@method("delete")'
                                                                                                        +'@csrf'
                                                                                                        +'<span'
                                                                                                            +'class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"'
                                                                                                            +'role="tooltip">'
                                                                                                        +'</span>'
                                                                                                    +'</button>'
                                                                                                +'</form>'
                                                                                            +'</div>'
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




                        //ajax call for loading the Holiday and RH Events
                        $.ajax({
                            
                                url: base_url+'/fetchholidayrhevents',
                                method: 'GET',
                                data: {
                                    date: info.dateStr,
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
                        
                        