@extends('layouts.master')

@section('styles')

        <!-- LEAFLET MAP CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/leaflet/leaflet.css')}}">

@endsection

@section('content')

                    <div class="content">

                        <!-- Start::main-content -->
                        <div class="main-content">

                            <!-- Page Header -->
                            <div class="block justify-between page-header sm:flex">
                                <div>
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Leaflet Maps</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                        <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Maps
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                        </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        Leaflet Maps
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-6">
                            <div class="col-span-12 lg:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Leaflet Map</h5>
                                </div>
                                <div class="box-body">
                                    <div id="map"></div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Map With Markers,Circes and Polygons</h5>
                                </div>
                                <div class="box-body">
                                    <div id="map1"></div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-1 -->

                            <!-- Start::row-2 -->
                            <div class="grid grid-cols-12 gap-6">
                            <div class="col-span-12 lg:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Map With Popup</h5>
                                </div>
                                <div class="box-body">
                                    <div id="map-popup"></div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Map With Custom Icon</h5>
                                </div>
                                <div class="box-body">
                                    <div id="map-custom-icon"></div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-2 -->

                            <!-- Start::row-3 -->
                            <div class="grid grid-cols-12 gap-6">
                            <div class="col-span-12 lg:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Interactive Choropleth Map</h5>
                                </div>
                                <div class="box-body">
                                    <div id="interactive-map"></div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-3 -->

                        </div>
                        <!-- Start::main-content -->

                    </div>

@endsection

@section('scripts')

        <!-- LEAFLET MAPS JS -->
        <script src="{{asset('build/assets/libs/leaflet/leaflet.js')}}"></script>
        @vite('resources/assets/js/leaflet.js')

        
@endsection