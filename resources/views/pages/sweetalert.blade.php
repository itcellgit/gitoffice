@extends('layouts.master')

@section('styles')

        <!-- SWEET ALERT CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/sweetalert2/sweetalert2.min.css')}}">

        <!-- ANIMATE CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/animate.css/animate.min.css')}}">

@endsection

@section('content')

                    <div class="content">

                        <!-- Start::main-content -->
                        <div class="main-content">

                            <!-- Page Header -->
                            <div class="block justify-between page-header sm:flex">
                                <div>
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Sweetalert</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                        <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Advanced Ui
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                        </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        Sweetalert
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-x-5">
                            <div class="col-span-12 lg:col-span-3">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Basic Sweetalert</h5>
                                </div>
                                <div class="box-body text-center">
                                    <button type="button" class="ti-btn ti-btn-primary show-example-btn" aria-label="Try me! Example: A basic message"
                                    id="basic">
                                    Try me!
                                    </button>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-3">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Danger Sweetalert</h5>
                                </div>
                                <div class="box-body text-center">
                                    <button type="button" class="ti-btn ti-btn-primary"
                                    aria-label="Try me! Example: A modal with a title, an error icon, a text, and a footer"
                                    id="error-sweetalert">
                                    Try me!
                                    </button>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-3">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Image Sweetalert</h5>
                                </div>
                                <div class="box-body text-center">
                                    <button type="button" class="ti-btn ti-btn-primary"
                                    aria-label="Try me! Example: A modal window with a long content inside" id="image-sweetalert">
                                    Try me!
                                    </button>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-3">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Sweetalert With 3Buttons</h5>
                                </div>
                                <div class="box-body text-center">
                                    <button type="button" class="ti-btn ti-btn-primary" aria-label="Try me! Example: A dialog with three buttons"
                                    id="sweetalert2">
                                    Try me!
                                    </button>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-1 -->

                            <!-- Start::row-2 -->
                            <div class="grid grid-cols-12 gap-x-5">
                            <div class="col-span-12 lg:col-span-3">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Sweetalert With Animation</h5>
                                </div>
                                <div class="box-body text-center">
                                    <button type="button" class="ti-btn ti-btn-primary" aria-label="Try me!"
                                    id="sweetalert3">
                                    Try me!
                                    </button>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-3">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Sweetalert style 1</h5>
                                </div>
                                <div class="box-body text-center">
                                    <button type="button" class="ti-btn ti-btn-primary" aria-label="Try me! Example: A title with a text under"
                                    id="sweetalert1">
                                    Try me!
                                    </button>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-3">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Sweetalert style-2</h5>
                                </div>
                                <div class="box-body text-center">
                                    <button type="button" class="ti-btn ti-btn-primary show-example-btn"
                                    aria-label="Try me! Example: A custom positioned dialog" id="confirm-btn">
                                    Try me!
                                    </button>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-3">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Sweetalert style-3</h5>
                                </div>
                                <div class="box-body text-center">
                                    <button type="button" class="ti-btn ti-btn-primary show-example-btn"
                                    aria-label="Try me! Example: A custom positioned dialog" id="sweetalert4">
                                    Try me!
                                    </button>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-2 -->

                            <!-- Start::row-3 -->
                            <div class="grid grid-cols-12 gap-x-5">
                            <div class="col-span-12 lg:col-span-3">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Top-End Sweetalert</h5>
                                </div>
                                <div class="box-body text-center">
                                    <button type="button" class="ti-btn ti-btn-primary show-example-btn"
                                    aria-label="Try me! Example: A custom positioned dialog" id="top-end">
                                    Try me!
                                    </button>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-3">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Top-Start Sweetalert</h5>
                                </div>
                                <div class="box-body text-center">
                                    <button type="button" class="ti-btn ti-btn-primary show-example-btn"
                                    aria-label="Try me! Example: A custom positioned dialog" id="top-start">
                                    Try me!
                                    </button>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-3">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Bottom-Start Sweetalert</h5>
                                </div>
                                <div class="box-body text-center">
                                    <button type="button" class="ti-btn ti-btn-primary show-example-btn"
                                    aria-label="Try me! Example: A custom positioned dialog" id="bottom-start">
                                    Try me!
                                    </button>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-3">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Bottom-End Sweetalert</h5>
                                </div>
                                <div class="box-body text-center">
                                    <button type="button" class="ti-btn ti-btn-primary show-example-btn"
                                    aria-label="Try me! Example: A custom positioned dialog" id="bottom-end">
                                    Try me!
                                    </button>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-3 -->

                            <!-- Start::row-4 -->
                            <div class="grid grid-cols-12 gap-x-5">
                            <div class="col-span-12 lg:col-span-4">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">A message with customization</h5>
                                </div>
                                <div class="box-body text-center">
                                    <button type="button" class="ti-btn ti-btn-primary show-example-btn"
                                    aria-label="Try me! Example: A custom positioned dialog" id="customized-btn">
                                    Try me!
                                    </button>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-4">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Timer Sweetalert</h5>
                                </div>
                                <div class="box-body text-center">
                                    <button type="button" class="ti-btn ti-btn-primary show-example-btn"
                                    aria-label="Try me! Example: A message with auto close timer" id="timer-btn">
                                    Try me!
                                    </button>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-4">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Ajax loader Sweetalert</h5>
                                </div>
                                <div class="box-body text-center">
                                    <button type="button" class="ti-btn ti-btn-primary show-example-btn" aria-label="Try me! Example: AJAX request"
                                    id="ajax-btn">
                                    Try me!
                                    </button>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-4 -->

                        </div>
                        <!-- Start::main-content -->

                    </div>

@endsection

@section('scripts')

        <!-- SWEETALERT JS -->
        <script src="{{asset('build/assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
        @vite('resources/assets/js/swetalert.js')
        

@endsection