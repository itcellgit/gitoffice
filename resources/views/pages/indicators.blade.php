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
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Indicators</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                    <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Components
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                    </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        Indicators
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="col-span-12 lg:col-span-4">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Basic Legend Indicator</h5>
                                        </div>
                                        <div class="box-body">
                                            <div class="inline-flex items-center">
                                                <span class="w-2 h-2 inline-block bg-gray-500 dark:bg-white/80 rounded-full ltr:mr-2 rtl:ml-2"></span>
                                                <span class="text-gray-600 dark:text-white/70">Legend indicator</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-4">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Color variations Legend Indicator</h5>
                                        </div>
                                        <div class="box-body">
                                            <div class="grid gap-y-2">
                                                <div class="inline-flex items-center">
                                                    <span class="w-2 h-2 inline-block bg-black/20 rounded-full ltr:mr-2 rtl:ml-2 dark:bg-white"></span>
                                                    <span class="text-gray-600 dark:text-white/70">Dark</span>
                                                </div>
                                                <div class="inline-flex items-center">
                                                    <span class="w-2 h-2 inline-block bg-gray-500 rounded-full ltr:mr-2 rtl:ml-2"></span>
                                                    <span class="text-gray-600 dark:text-white/70">Gray</span>
                                                </div>
                                                <div class="inline-flex items-center">
                                                    <span class="w-2 h-2 inline-block bg-red-500 rounded-full ltr:mr-2 rtl:ml-2"></span>
                                                    <span class="text-gray-600 dark:text-white/70">Red</span>
                                                </div>
                                                <div class="inline-flex items-center">
                                                    <span class="w-2 h-2 inline-block bg-yellow-500 rounded-full ltr:mr-2 rtl:ml-2"></span>
                                                    <span class="text-gray-600 dark:text-white/70">Yellow</span>
                                                </div>
                                                <div class="inline-flex items-center">
                                                    <span class="w-2 h-2 inline-block bg-green-500 rounded-full ltr:mr-2 rtl:ml-2"></span>
                                                    <span class="text-gray-600 dark:text-white/70">Green</span>
                                                </div>
                                                <div class="inline-flex items-center">
                                                    <span class="w-2 h-2 inline-block bg-blue-500 rounded-full ltr:mr-2 rtl:ml-2"></span>
                                                    <span class="text-gray-600 dark:text-white/70">Blue</span>
                                                </div>
                                                <div class="inline-flex items-center">
                                                    <span class="w-2 h-2 inline-block bg-indigo-500 rounded-full ltr:mr-2 rtl:ml-2"></span>
                                                    <span class="text-gray-600 dark:text-white/70">Indigo</span>
                                                </div>
                                                <div class="inline-flex items-center">
                                                    <span class="w-2 h-2 inline-block bg-purple-500 rounded-full ltr:mr-2 rtl:ml-2"></span>
                                                    <span class="text-gray-600 dark:text-white/70">Purple</span>
                                                </div>
                                                <div class="inline-flex items-center">
                                                    <span class="w-2 h-2 inline-block bg-pink-500 rounded-full ltr:mr-2 rtl:ml-2"></span>
                                                    <span class="text-gray-600 dark:text-white/70">Pink</span>
                                                </div>
                                                <div class="inline-flex items-center">
                                                    <span class="w-2 h-2 inline-block bg-gray-100 rounded-full ltr:mr-2 rtl:ml-2"></span>
                                                    <span class="text-gray-600 dark:text-white/70">Light</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-4">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Template Color variations Legend Indicator</h5>
                                        </div>
                                        <div class="box-body">
                                            <div class="grid gap-y-2">
                                                <div class="inline-flex items-center">
                                                    <span class="w-2 h-2 inline-block bg-primary rounded-full ltr:mr-2 rtl:ml-2"></span>
                                                    <span class="text-gray-600 dark:text-white/70">Primary</span>
                                                </div>
                                                <div class="inline-flex items-center">
                                                    <span class="w-2 h-2 inline-block bg-secondary rounded-full ltr:mr-2 rtl:ml-2"></span>
                                                    <span class="text-gray-600 dark:text-white/70">Secondary</span>
                                                </div>
                                                <div class="inline-flex items-center">
                                                    <span class="w-2 h-2 inline-block bg-warning rounded-full ltr:mr-2 rtl:ml-2"></span>
                                                    <span class="text-gray-600 dark:text-white/70">Warning</span>
                                                </div>
                                                <div class="inline-flex items-center">
                                                    <span class="w-2 h-2 inline-block bg-success rounded-full ltr:mr-2 rtl:ml-2"></span>
                                                    <span class="text-gray-600 dark:text-white/70">Success</span>
                                                </div>
                                                <div class="inline-flex items-center">
                                                    <span class="w-2 h-2 inline-block bg-info rounded-full ltr:mr-2 rtl:ml-2"></span>
                                                    <span class="text-gray-600 dark:text-white/70">Info</span>
                                                </div>
                                                <div class="inline-flex items-center">
                                                    <span class="w-2 h-2 inline-block bg-danger rounded-full ltr:mr-2 rtl:ml-2"></span>
                                                    <span class="text-gray-600 dark:text-white/70">Danger</span>
                                                </div>
                                            </div>
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

@endsection