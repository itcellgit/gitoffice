@extends('layouts.master')

@section('styles')

        <!-- RANGESLIDER CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/rangeslider-js/styles.min.css')}}">

        <!-- NOUISLIDER JS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/nouislider/nouislider.min.css')}}">

@endsection

@section('content')

                    <div class="content">

                        <!-- Start::main-content -->
                        <div class="main-content">

                            <!-- Page Header -->
                            <div class="block justify-between page-header sm:flex">
                                <div>
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Rangeslider</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                    <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Advanced Ui
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                    </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        Rangeslider
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-x-5">
                            <div class="col-span-12 lg:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title"> Basic Rangeslider Options with Html</h5>
                                </div>
                                <div class="box-body">
                                    <input id="slider" class="w-full" type="range" min="0" max="5" value="1" step="1">
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title"> Basic Rangeslider Options with Js</h5>
                                </div>
                                <div class="box-body">
                                    <input id="slider1" type="range">
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-1 -->

                            <!-- Start::row-2 -->
                            <div class="grid grid-cols-12 gap-x-5">
                            <div class="col-span-12 lg:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title"> Multiple Rangesliders</h5>
                                </div>
                                <div class="box-body">
                                    <input class="slider2" type="range" min="0" max="5" value="0" step="1">
                                    <input class="slider2" type="range" min="0" max="5" value="2" step="0.1">
                                    <input class="slider2" type="range" min="0" max="5" value="4" step="0.01">
                                    <input class="slider2" type="range" min="0" max="5" value="5" step="0.001">
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title"> Programmatic change</h5>
                                </div>
                                <div class="box-body">
                                    <input class="slider3" type="range" min="-10" max="10">
                                    <input class="nr-input ti-form-input" type="number" value="0">
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-2 -->

                            <!-- Start::row-3 -->
                            <div class="grid grid-cols-12 gap-x-5">
                                <div class="col-span-12 md:col-span-6 xxl:col-span-3">
                                    <div class="box">
                                    <div class="box-header">
                                        <h5 class="box-title">Basic Nouislider</h5>
                                    </div>
                                    <div class="box-body">
                                        <div id="nousislider"></div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-span-12 md:col-span-6 xxl:col-span-3">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Fit Handles</h5>
                                        </div>
                                        <div class="box-body">
                                            <div id="slider-fit"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 md:col-span-6 xxl:col-span-3">
                                    <div class="box">
                                    <div class="box-header">
                                        <h5 class="box-title">Rounded Styling</h5>
                                    </div>
                                    <div class="box-body">
                                        <div id="slider-round"></div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-span-12 md:col-span-6 xxl:col-span-3">
                                    <div class="box">
                                    <div class="box-header">
                                        <h5 class="box-title"> Square Styling</h5>
                                    </div>
                                    <div class="box-body">
                                        <div id="slider-square"></div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-3 -->

                            <!-- Start::row-4 -->
                            <div class="grid grid-cols-12 gap-x-5">
                            <div class="col-span-12 xxl:col-span-4">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Color Picker Slider</h5>
                                </div>
                                <div class="box-body">
                                    <div class="sliders" id="color1"></div>
                                    <div class="sliders" id="color2"></div>
                                    <div class="sliders" id="color3"></div>
                                    <div id="result"></div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 md:col-span-6 xxl:col-span-4">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Locking Sliders</h5>
                                </div>
                                <div class="box-body">
                                    <div id="lockslider1"></div>
                                    <div id="lockslider1-span" class="my-1"></div>
                                    <div id="lockslider2"></div>
                                    <div id="lockslider2-span" class="my-1"></div>
                                    <div id="lockslider3"></div>
                                    <div id="lockslider3-span" class="my-1"></div>
                                    <button type="button" id="lockbutton" class="ti-btn ti-btn-primary ltr:float-right rtl:float-left">Lock</button>
                                </div>
                                </div>
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Merging tooltips slider</h5>
                                </div>
                                <div class="box-body">
                                    <div id="merging-tooltips"></div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 md:col-span-6 xxl:col-span-4">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Non Linear Slider</h5>
                                </div>
                                <div class="box-body">
                                    <div id="nonlinear"></div>
                                    <div id="lower-value" class="mt-5"></div>
                                    <div id="upper-value" class="mt-2"></div>
                                </div>
                                </div>
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Sliding Handles Tooltips</h5>
                                </div>
                                <div class="box-body">
                                    <div id="slider-hide"></div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row- 4 -->

                            <!-- Start::row-5 -->
                            <div class="grid grid-cols-12 gap-x-5">
                            <div class="col-span-12 lg:col-span-10">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Colored Connect Elements</h5>
                                </div>
                                <div class="box-body">
                                    <div class="slider" id="color-slider"></div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-2">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Slider Toggle</h5>
                                </div>
                                <div class="box-body">
                                    <div id="slider-toggle"></div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row- 5-->

                            <!-- Start::row-6 -->
                            <div class="grid grid-cols-12 gap-x-5">
                            <div class="col-span-12 lg:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Toggle Movement By Clicking Pips</h5>
                                </div>
                                <div class="box-body pb-16">
                                    <div id="slider-pips"></div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Soft Limits</h5>
                                </div>
                                <div class="box-body pb-16">
                                    <div id="soft"></div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row- 6-->

                            <!-- Start::row-7 -->
                            <div class="grid grid-cols-12 gap-x-5">
                            <div class="col-span-12 lg:col-span-4">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Nouislider Primary Color</h5>
                                </div>
                                <div class="box-body">
                                    <div id="primary-colored-slider"></div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-4">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Nouislider Secondary Color</h5>
                                </div>
                                <div class="box-body">
                                    <div id="secondary-colored-slider"></div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-4">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Nouislider Warning Color</h5>
                                </div>
                                <div class="box-body">
                                    <div id="warning-colored-slider"></div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row- 7-->

                            <!-- Start::row-8 -->
                            <div class="grid grid-cols-12 gap-x-5">
                            <div class="col-span-12 lg:col-span-4">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Nouislider Info Color</h5>
                                </div>
                                <div class="box-body">
                                    <div id="info-colored-slider"></div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-4">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Nouislider Success Color</h5>
                                </div>
                                <div class="box-body">
                                    <div id="success-colored-slider"></div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-4">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Nouislider Danger Color</h5>
                                </div>
                                <div class="box-body">
                                    <div id="danger-colored-slider"></div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row- 8-->

                        </div>
                        <!-- Start::main-content -->

                    </div>

@endsection

@section('scripts')

        <!-- RANGESLIDER JS -->
        <script src="{{asset('build/assets/libs/rangeslider-js/rangeslider-js.min.js')}}"></script>

        <!-- NOUISLIDER JS -->
        <script src="{{asset('build/assets/libs/nouislider/nouislider.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/wnumb/wNumb.min.js')}}"></script>

        <!-- RANGESLIDER CUSTOM JS -->
        @vite('resources/assets/js/rangeslider.js')
        

@endsection