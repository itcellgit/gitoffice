@extends('layouts.components.internship.master-internship')

@section('styles')
@endsection

@section('content')
    <div class="content">

        <!-- Start::main-content -->
        <div class="main-content">

            <!-- Page Header -->
            <div class="block justify-between page-header sm:flex">

                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-sm">
                        <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate"
                            href="javascript:void(0);">
                            My Dashboard
                            <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                        </a>
                    </li>

                </ol>
            </div>
            <!-- Page Header Close -->

            <!-- Start::row-1 -->
            <div class="grid grid-cols-12 gap-x-5">
                <div class="col-span-12 md:col-span-6 xxl:col-span-3">
                    <div class="box">
                        <div class="box-body">
                            <div class="flex">
                                <div class="ltr:mr-3 rtl:ml-3">
                                    <div class="avatar rounded-sm text-primary p-2.5 bg-primary/20 "><i
                                            class="ti ti-users text-2xl leading-none"></i>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm font-bold">Students</p>
                                    <div class="flex justify-between items-center">
                                        <h5 class="mb-0 text-2xl font-semibold text-gray-800 dark:text-white">{{$studentCount}}</h5>
                                        {{-- <span class="text-success badge bg-success/20 rounded-sm p-1"><i
                                                class="ti ti-trending-up leading-none"></i> +1.03%</span> --}}
                                    </div>
                                    {{-- <span class="text-xs text-gray-500 dark:text-white/70">This Month</span> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-6 xxl:col-span-3">
                    <div class="box">
                        <div class="box-body">
                            <div class="flex">
                                <div class="ltr:mr-3 rtl:ml-3">
                                    <div class="avatar rounded-sm text-secondary p-2.5 bg-secondary/20"><i
                                            class="ti ti-briefcase text-2xl leading-none"></i>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm font-bold">Industries</p>
                                    <div class="flex justify-between items-center">
                                        <h5 class="mb-0 text-2xl font-semibold text-gray-800 dark:text-white">{{$industryCount}}</h5>
                                        {{-- <span class="text-success badge bg-success/20 rounded-sm p-1"><i
                                                class="ti ti-trending-up leading-none"></i> +1.03%</span> --}}
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-6 xxl:col-span-3">
                    <div class="box">
                        <div class="box-body">
                            <div class="flex">
                                <div class="ltr:mr-3 rtl:ml-3">
                                    <div class="avatar rounded-sm text-warning p-2.5 bg-warning/20 "><i
                                            class="ti ti-users-minus text-2xl leading-none"></i>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm font-bold">Industry-Advisor</p>
                                    <div class="flex justify-between items-center">
                                        <h5 class="mb-0 text-2xl font-semibold text-gray-800 dark:text-white">{{$spocCount}}</h5>
                                        {{-- <span class="text-success badge bg-success/20 rounded-sm p-1"><i
                                                class="ti ti-trending-up leading-none"></i> +1.03%</span> --}}
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-span-12 md:col-span-6 xxl:col-span-3">
                    <div class="box">
                        <div class="box-body">
                            <div class="flex">
                                <div class="ltr:mr-3 rtl:ml-3">
                                    <div class="avatar rounded-sm text-warning p-2.5 bg-warning/20 "><i
                                            class="ti ti-users-minus text-2xl leading-none"></i>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm font-bold">Internship </p>
                                    <div class="flex justify-between items-center">
                                        <h5 class="mb-0 text-2xl font-semibold text-gray-800 dark:text-white">{{$studentinternshipCount}}</h5>
                                        {{-- <span class="text-success badge bg-success/20 rounded-sm p-1"><i
                                                class="ti ti-trending-up leading-none"></i> +1.03%</span> --}}
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>



            </div>
        </div>
    @endsection

    @section('scripts')
        <!-- APEX CHARTS JS -->
        <script src="{{ asset('build/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

        <!-- INDEX JS -->
        @vite('resources/assets/js/index-8.js')
        <!-- Include jQuery -->
    @endsection
