@extends('layouts.components.Dean_admin.master-Dean_admin')

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
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M22 21H2V19H3V4C3 3.44772 3.44772 3 4 3H18C18.5523 3 19 3.44772 19 4V9H21V19H22V21ZM17 19H19V11H13V19H15V13H17V19ZM17 9V5H5V19H11V9H17ZM7 11H9V13H7V11ZM7 15H9V17H7V15ZM7 7H9V9H7V7Z"></path></svg>
                                        Leaves
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
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32"><path d="M22 21H2V19H3V4C3 3.44772 3.44772 3 4 3H18C18.5523 3 19 3.44772 19 4V9H21V19H22V21ZM17 19H19V11H13V19H15V13H17V19ZM17 9V5H5V19H11V9H17ZM7 11H9V13H7V11ZM7 15H9V17H7V15ZM7 7H9V9H7V7Z"></path></svg> 
                                                    Leave
                                                </h5>
                                               
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="table-bordered  rounded-sm ti-custom-table-head overflow-auto">
                                                <table id="leavestable" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                    <thead class="bg-gray-50 dark:bg-black/20">
                                                    <tr class="">
                                                        <th scope="col" class="dark:text-white/80 font-bold" >S.no</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold">Long Name</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold">Short Name</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold">Entitlement</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold">Vacation Type</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold">Min</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold">Max</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold">Status</th>
                                                        {{-- <th scope="col" class="dark:text-white/80 font-bold">Actions</th> --}}
                                                        
                                                    </tr>
                                                    </thead>
                                                    <tbody class="">
                                                    
                                                        @php
                                                            $i = 1;
                                                        @endphp
                                                        @forelse($leaves as $lr)
                                                        
                                                            <tr class="{{$lr->status =='active'?'':'bg-gray-200'}}">
                                                                <td>{{ $i++}}</td>
                                                                <td> {{$lr->longname}}
                                                                    @if(count($lr->leave_rules)>0) 
                                                                            <span title="Rules are set"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="rgba(53,227,116,1)"><path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM11.0026 16L18.0737 8.92893L16.6595 7.51472L11.0026 13.1716L8.17421 10.3431L6.75999 11.7574L11.0026 16Z"></path></svg> </span>
                                                                    @endif       
                                                                </td>
                                                                <td><span>{{$lr->shortname}}</span></td>
                                                                
                                                                <td><span>{{$lr->max_entitlement}}</span></td>
                                                                <td><span>{{$lr->vacation_type}}</span></td>
                                                                <td><span>{{$lr->min_days}}</span></td>
                                                                <td><span>{{$lr->max_days}}</span></td>
                                                                <td><span>{{$lr->status}}</span></td>
                                                                
                                                            </tr>
                                                            @empty
                                                        @endforelse
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <!-- End::row-5 -->
                    </div>
                        <!-- End::main-content -->
                    

@endsection

@section('scripts')

        <!-- APEX CHARTS JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- FLATPICKR JS -->
        <script src="{{asset('build/assets/libs/flatpickr/flatpickr.min.js')}}"></script>
        @vite('resources/assets/js/flatpickr.js')
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <!-- Include DataTables CSS and JS -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
        <script
        src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>

        <script>
            $(document).ready(function(){
            //alert('Hello from jquery');
            new DataTable('#leavestable');
            
            });
        </script>

        
        <script>
            $(document).ready(function(){
               //for Checking whether the checkbox is checked or no , for updating the leave rules that can be combined.
                $(document).on('click','.Leave_type',function(){
                    //alert($(this).val());
                    if(!$(this).is(":checked")){
                        //if not checked, allow it to be checked
                        //alert('CHecked'+$(this).val()); // No ALert 
                        //remove the radions buttons selected
                        $('input:radio[name="allowed['+$(this).val()+']"]').removeAttr('checked');
                    }else{
                        //allow to be unchecked.
                        //alert('Not CHecked');
                        //DO Nothing
                    }
                });
            });   
        </script>


        <!-- INDEX JS -->
        @vite('resources/assets/js/index-8.js')
        
       
        
@endsection