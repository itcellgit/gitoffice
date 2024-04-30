@extends('layouts.master')

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
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Establishment Section</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                    <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M22 21H2V19H3V4C3 3.44772 3.44772 3 4 3H18C18.5523 3 19 3.44772 19 4V9H21V19H22V21ZM17 19H19V11H13V19H15V13H17V19ZM17 9V5H5V19H11V9H17ZM7 11H9V13H7V11ZM7 15H9V17H7V15ZM7 7H9V9H7V7Z"></path></svg>
                                        BIOMETRIC
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
                                        <div class="col-span-12 xl:col-span-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
                                                        <table id="proattended" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                            <thead class="bg-gray-50 dark:bg-black/20">
                                                            <tr class="">
                                                                <th scope="col" class="dark:text-white/80 font-bold  ">S.No</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold ">Employee Name</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold ">PunchIn</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold ">DeviceIn</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold ">PunchOut</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold ">DeviceOut</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold ">Duration</th>
                                                                 <th scope="col" class="dark:text-white/80 font-bold ">Action</th>


                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                                 @php
                                                                    $i=1;
                                                                @endphp
                                                                @foreach ($externalData as $data )
                                                                <tr>
                                                                    <td>{{ $i++ }}</td>
                                                                    <td>{{ $data->EmployeeName }}</td>
                                                                    <td>{{ $data->InTime }}</td>
                                                                    <td>{{ $data->InDeviceName }}</td>
                                                                    <td>{{ $data->OutTime }}</td>
                                                                    <td>{{ $data->OutDeviceName }}</td>
                                                                    <td>{{ $data->Duration }}</td>
                                                                    <td><button type="submit" name="action" value=" view " class=" bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">View</button>

                                                                        <!-- Update Button -->
                                                                        <button type="submit" name="action" value=" update " class=" bg-green-500 text-white rounded-md hover:bg-green-600 focus:outline-none focus:bg-green-600">Update</button>

                                                                        <!-- Delete Button -->
                                                                        <button type="submit" name="action" value=" delete " class=" bg-red-500 text-white rounded-md hover:bg-red-600 focus:outline-none focus:bg-red-600">Delete</button></td>
                                                                </tr>
                                                                 @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
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





@endsection
