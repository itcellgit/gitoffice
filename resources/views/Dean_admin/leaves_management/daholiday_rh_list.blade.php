@extends('layouts.components.Dean_admin.master-Dean_admin')

@section('styles')

    
        <!-- FLATPICKR CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/flatpickr/flatpickr.min.css')}}">
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
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium">Holiday And RH </h3>
                                </div>
                               
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
                                            
                                        </div>
                                        <div class="box-body">
                                            <div class="table-bordered rounded-sm ti-striped-table ti-custom-table-head overflow-auto">
                                                <table id="holidayrh" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                    <thead class="bg-gray-50 dark:bg-black/20">
                                                    <tr class="">
                                                        <th scope="col" class="dark:text-white/80 font-bold">S.No</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold">Year</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold">Title</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold">Holiday RH Date</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold">Day</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold">Type</th>
                                                        {{-- <th scope="col" class="dark:text-white/80 font-bold">Action</th>   --}}
                                                        
                                                    </tr>
                                                    </thead>
                                                     @php
                                                        $i=1;
                                                    @endphp
                                                    <tbody class="">
                                                            @forelse($holidayrh as $holiday)
                                                                <tr class="">
                                                                                    
                                                                    <td><span>{{$i++}}</span></td>
                                                                    <td><span>{{$holiday->year}}</span></td>
                                                                    <td><span>{{$holiday->title}}</span></td>
                                                                    <td><span>{{\Carbon\Carbon::parse($holiday->start)->format('d-M-Y') }}</span></td>  
                                                                    <td><span>{{$holiday->day}}</span></td>
                                                                    <td><span>{{$holiday->type}}</span></td>
                                                                   
                                                                </tr>
                                                                @empty
                                                                <tr>
                                                                    <td>no records</td>
                                                                </tr>      
                                                            @endforelse
                                                    </tbody>                   
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-5 -->

                        </div>
                        <!-- End::main-content -->

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

        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"
        ></script>

        <script src="https://cdn.datatables.net/1.13.6/js/dataTables.tailwindcss.min.js"></script>

        <script href="https://cdn.tailwindcss.com/3.3.5"></script>

        <script>
            $(document).ready(function(){
               //alert('Hello from jquery');

               new DataTable('#holidayrh');


               
            });
        </script>


        <script>
            function validateForm() {
                const yearInput = document.getElementById('yearInput');
                const dateInput = document.getElementById('dateInput');

                const selectedYear = parseInt(yearInput.value, 10);
                const selectedDate = new Date(dateInput.value);

                if (selectedYear === selectedDate.getFullYear()) {
                    alert('Year and Date are from the same year. Form is valid.');
                    // Add code to submit the form or perform additional actions.
                } else {
                    alert('Year and Date are from different years. Please correct.');
                    // Optionally prevent the form from being submitted if needed.
                }
            }
        </script>
        
             
@endsection