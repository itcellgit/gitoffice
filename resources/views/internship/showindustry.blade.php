

@extends('layouts.components.HOD.internship.master-internship')


@section('styles')

     <!-- CHOICES CSS -->
     <link rel="stylesheet" href="{{asset('build/assets/libs/choices.js/public/assets/styles/choices.min.css')}}">

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
                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium">  <span class="text-primary">

                    </span>
                    </h3>
                </div>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-sm">
                    <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                        My Dashboard
                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                    </a>
                    </li>

                </ol>
            </div>
            <!-- Page Header Close -->

            <!-- Start::row-1 -->

                    <div class="box">
                        <div class="box-body">
                        <div class="flex">
                            <h5 class="box-title my-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-church" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M3 21l18 0" />
                                    <path d="M10 21v-4a2 2 0 0 1 4 0v4" />
                                    <path d="M10 5l4 0" />
                                    <path d="M12 3l0 5" />
                                    <path d="M6 21v-7m-2 2l8 -8l8 8m-2 -2v7" />
                                </svg>
                                Industry
                            </h5>
                        </div>
                        <div class="table-bordered table-auto rounded-sm ti-striped-table ti-custom-table-head overflow-auto">
                            <table id="industry_table" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                            <thead class="bg-gray-50 dark:bg-black/20">
                            <tr class="">
                                <th scope="col" class="dark:text-white/80">field name</th>


                                <th scope="col" class="dark:text-white/80">@sortablelink('field details','field details')</th>

                            </tr>
                            </thead>

                            <tbody class="">
                            @php
                                $i = 1;
                            @endphp

                                <tr class="">
                                    <td> Name </td>
                                    <td>
                                        <div class="flex space-x-3 rtl:space-x-reverse w-full min-w-[200px]">
                                            <div class="block w-full my-auto">
                                                {{$industry->name}}
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Location</td>
                                    <td><span>{{$industry->location}}</span></td>
                                </tr>

                                <tr>
                                    <td>Domain</td>
                                    <td><span>{{$industry->domain}}</span></td>
                                    
                                </tr>


                            </tbody>
                            </table>

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

     <!-- FORM-LAYOUT JS -->
     @vite('resources/assets/js/profile-settings.js')

     <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"
     ></script>
@endsection
