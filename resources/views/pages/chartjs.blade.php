@extends('layouts.master')

@section('styles')

@endsection

@section('content')

                    <div class="content">

                        <!-- Start::main-content -->
                        <div class="main-content">

                            <!-- Page Header -->
                            <div class="block justify-between page-header sm:flex">
                                <div>
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Chart Js</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                        <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Charts
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                        </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        Chart Js
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-x-6">
                            <div class="col-span-12 xl:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">
                                    Chartjs Line Chart
                                    </h5>
                                </div>
                                <div class="box-body">
                                    <canvas id="chartjs-line" class="chartjs-chart"></canvas>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 xl:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">
                                    Chartjs Bar Chart
                                    </h5>
                                </div>
                                <div class="box-body">
                                    <canvas id="chartjs-bar" class="chartjs-chart"></canvas>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 xl:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">
                                    Chartjs Radial Chart
                                    </h5>
                                </div>
                                <div class="box-body">
                                    <canvas id="chartjs-radar" class="chartjs-chart"></canvas>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 xl:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">
                                    Chartjs Scatter Chart
                                    </h5>
                                </div>
                                <div class="box-body">
                                    <canvas id="chartjs-scatter" class="chartjs-chart"></canvas>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 xl:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">
                                    Chartjs Mixed Chart
                                    </h5>
                                </div>
                                <div class="box-body">
                                    <canvas id="chartjs-mixed" class="chartjs-chart"></canvas>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 xl:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">
                                    Chartjs Bubble Chart
                                    </h5>
                                </div>
                                <div class="box-body">
                                    <canvas id="chartjs-bubble" class="chartjs-chart"></canvas>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 xl:col-span-4">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">
                                    Chartjs Pie Chart
                                    </h5>
                                </div>
                                <div class="box-body">
                                    <canvas id="chartjs-pie" class="chartjs-chart"></canvas>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 xl:col-span-4">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">
                                    Chartjs Doughnut Chart
                                    </h5>
                                </div>
                                <div class="box-body">
                                    <canvas id="chartjs-doughnut" class="chartjs-chart"></canvas>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 xl:col-span-4">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">
                                    Chartjs Polar Chart
                                    </h5>
                                </div>
                                <div class="box-body">
                                    <canvas id="chartjs-polar" class="chartjs-chart"></canvas>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-1 -->

                        </div>
                        <!-- Start::main-content -->

                    </div>

@endsection

@section('scripts')

        <!-- CHARTJS CHART JS -->
        <script src="{{asset('build/assets/libs/chart.js/chart.min.js')}}"></script>

        <!-- INTERNAL CHARTJS JS -->
        @vite('resources/assets/js/chartjs-charts.js')
        

@endsection