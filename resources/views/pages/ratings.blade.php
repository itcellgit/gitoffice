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
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Rating</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                        <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Advanced Ui
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                        </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        Rating
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 xxl:gap-x-5">
                                <div class="col-span-12 xxxl:col-span-4">
                                    <div class="box">
                                    <div class="box-header">
                                        <h5 class="box-title">Basic Rater</h5>
                                    </div>
                                    <div class="box-body">
                                        <div class="p-5 border border-dashed border-gray-200 dark:border-white/10 rounded-sm">
                                        <div class="sm:flex items-center justify-between space-y-2 sm:space-y-0">
                                            <p class="text-sm mb-0 font-semibold">Show Some <span class="text-danger">❤</span> with rating :</p>
                                            <div id="rater-basic"></div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-span-12 xxxl:col-span-4">
                                    <div class="box">
                                    <div class="box-header">
                                        <h5 class="box-title">5 Star Rater With Steps</h5>
                                    </div>
                                    <div class="box-body">
                                        <div class="p-5 border border-dashed border-gray-200 dark:border-white/10 rounded-sm">
                                        <div class="sm:flex items-center justify-between space-y-2 sm:space-y-0">
                                            <p class="text-sm mb-0 font-semibold">Dont forget to rate the product :</p>
                                            <div id="rater-steps"></div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-span-12 xxxl:col-span-4">
                                    <div class="box">
                                    <div class="box-header">
                                        <h5 class="box-title"> Custom messages</h5>
                                    </div>
                                    <div class="box-body text-center">
                                        <div class="p-5 border border-dashed border-gray-200 dark:border-white/10 rounded-sm">
                                        <div class="sm:flex items-center justify-between space-y-2 sm:space-y-0">
                                            <p class="text-sm mb-0 font-semibold">Your rating is much appreciated&#128079; :</p>
                                            <div id="custom-messages"></div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-1 -->

                            <!-- Start::row-2 -->
                            <div class="grid grid-cols-12 xxl:gap-x-5">
                                <div class="col-span-12 xxxl:col-span-6">
                                    <div class="box">
                                    <div class="box-header">
                                        <h5 class="box-title"> Unlimited number of stars readOnly</h5>
                                    </div>
                                    <div class="box-body">
                                        <div class="p-5 border border-dashed border-gray-200 dark:border-white/10 rounded-sm">
                                        <div class="sm:flex items-center justify-between space-y-2 sm:space-y-0  overflow-auto touch-none">
                                            <p class="text-sm mb-0 font-semibold">Your rating is much appreciated&#128079; :</p>
                                            <div id="stars-unlimited"></div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-span-12 xxxl:col-span-6">
                                    <div class="box">
                                    <div class="box-header">
                                        <h5 class="box-title">5 Star rater with custom isBusyText and simulated backend</h5>
                                    </div>
                                    <div class="box-body">
                                        <div class="p-5 border border-dashed border-gray-200 dark:border-white/10 rounded-sm">
                                        <div class="sm:flex items-center justify-between space-y-2 sm:space-y-0">
                                            <p class="text-sm mb-0 font-semibold">Thanks for rating :</p>
                                            <div id="stars-busytext"></div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-2 -->

                            <!-- Start::row-3 -->
                            <div class="grid grid-cols-12 xxl:gap-x-5">
                                <div class="col-span-12 xxl:col-span-6">
                                    <div class="box">
                                    <div class="box-header">
                                        <h5 class="box-title">On hover event</h5>
                                    </div>
                                    <div class="box-body">
                                        <div class="p-5 border border-dashed border-gray-200 dark:border-white/10 rounded-sm">
                                        <div class="sm:flex items-center justify-between space-y-2 sm:space-y-0">
                                            <p class="text-sm mb-0 font-semibold">Please give your valuable rating :</p>
                                            <div class="flex items-center">
                                            <div id="stars-hover"></div>
                                            <span class="live-rating badge bg-success/10 text-success py-1 rounded-sm ltr:ml-3 rtl:mr-3">
                                                1
                                            </span>
                                        </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-span-12 xxl:col-span-6">
                                    <div class="box">
                                    <div class="box-header">
                                        <h5 class="box-title"> Clear/reset rater</h5>
                                    </div>
                                    <div class="box-body">
                                        <div class="p-5 border border-dashed border-gray-200 dark:border-white/10 rounded-sm">
                                        <div class="sm:flex items-center justify-between space-y-2 sm:space-y-0">
                                            <p class="text-sm mb-0 font-semibold">Please give your valuable rating :</p>
                                            <div class="flex items-center">
                                            <div id="rater-reset"></div>
                                                <button type="button" aria-label="button" class="ti-btn ti-btn-soft-danger py-1 px-2 ltr:!ml-3 rtl:!mr-3 m-0" id="rater-reset-button">
                                                    <i class="ri-restart-line"></i>
                                                </button>
                                            </div>
                                        </div>
                                        </div>
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

        <!-- RATING JS -->
        <script src="{{asset('build/assets/libs/rater-js/index.js')}}"></script>
        @vite('resources/assets/js/rating.js')


@endsection