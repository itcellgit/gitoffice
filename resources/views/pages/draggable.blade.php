@extends('layouts.master')

@section('styles')

        <!-- DRAGULA CSS -->
        <link id="style" href="{{asset('build/assets/libs/dragula/dragula.min.css')}}" rel="stylesheet">

@endsection

@section('content')

                    <div class="content">

                        <!-- Start::main-content -->
                        <div class="main-content">

                            <!-- Page Header -->
                            <div class="block justify-between page-header sm:flex">
                                <div>
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Draggable Cards</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                        <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Advanced Ui
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                        </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        Draggable Cards
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-6">
                            <div class="col-span-12 lg:col-span-4">
                                <div class="box">
                                <div class="box-body">
                                    <div class="gap-4 grid" id="drag-left">
                                    <div class="box mb-0">
                                        <div class="box-body">
                                        Some quick example text to build on the card title and make up the bulk of the card's content.
                                        </div>
                                    </div>
                                    <div class="box mb-0 !bg-primary text-white">
                                        <div class="box-body">
                                        Some quick example text to build on the card title and make up the bulk of the card's content.
                                        </div>
                                    </div>
                                    <div class="box mb-0">
                                        <img class="w-full h-auto rounded-t-sm" src="{{asset('build/assets/img/gallery/3.jpg')}}" alt="Image Description">
                                        <div class="p-4 md:p-5">
                                            <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                                                Card title
                                            </h3>
                                            <p class="mt-1 text-gray-800 dark:text-white/70">
                                                Some quick example text to build on the card title and make up the bulk of the
                                                card's content.
                                            </p>
                                            <a class="mt-3 py-2 px-3 inline-flex justify-center items-center gap-2 rounded-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:outline-none focus:ring-0 focus:ring-primary focus:ring-offset-0 transition-all text-sm dark:focus:ring-offset-white/10" href="javascript:void(0);">
                                                Go somewhere
                                            </a>
                                        </div>
                                    </div>
                                    <div class="box mb-0 !bg-success text-white">
                                        <div class="box-body">
                                        Some quick example text to build on the card title and make up the bulk of the card's content.
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-4">
                                <div class="box">
                                <div class="box-body">
                                    <div class="gap-4 grid" id="drag-center">
                                    <div class="box mb-0 !bg-primary text-white">
                                        <div class="box-body">
                                        Some quick example text to build on the card title and make up the bulk of the card's content.
                                        </div>
                                    </div>
                                    <div class="box mb-0">
                                        <div class="box-body">
                                        Some quick example text to build on the card title and make up the bulk of the card's content.
                                        </div>
                                    </div>
                                    <div class="box mb-0 !bg-warning text-white">
                                        <div class="box-body">
                                        Some quick example text to build on the card title and make up the bulk of the card's content.
                                        </div>
                                    </div>
                                    <div class="box mb-0">
                                        <img class="w-full h-auto rounded-t-sm" src="{{asset('build/assets/img/gallery/3.jpg')}}" alt="Image Description">
                                        <div class="p-4 md:p-5">
                                            <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                                                Card title
                                            </h3>
                                            <p class="mt-1 text-gray-800 dark:text-white/70">
                                                Some quick example text to build on the card title and make up the bulk of the
                                                card's content.
                                            </p>
                                            <a class="mt-3 py-2 px-3 inline-flex justify-center items-center gap-2 rounded-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:outline-none focus:ring-0 focus:ring-primary focus:ring-offset-0 transition-all text-sm dark:focus:ring-offset-white/10" href="javascript:void(0);">
                                                Go somewhere
                                            </a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-4">
                                <div class="box">
                                <div class="box-body">
                                    <div  class="gap-4 grid" id="drag-right">
                                    <div class="box !bg-secondary text-white mb-0">
                                        <div class="box-body">
                                        Some quick example text to build on the card title and make up the bulk of the card's content.
                                        </div>
                                    </div>
                                    <div class="box mb-0 !bg-info text-white">
                                        <div class="box-body">
                                        Some quick example text to build on the card title and make up the bulk of the card's content.
                                        </div>
                                    </div>
                                    <div class="box mb-0 !bg-danger text-white">
                                        <div class="box-body">
                                        Some quick example text to build on the card title and make up the bulk of the card's content.
                                        </div>
                                    </div>
                                    <div class="box mb-0">
                                        <div class="p-4 md:p-5">
                                            <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                                                Card title
                                            </h3>
                                            <p class="mt-1 text-gray-800 dark:text-white/70">
                                                Some quick example text to build on the card title and make up the bulk of the
                                                card's content.
                                            </p>
                                            <a class="mt-3 py-2 px-3 inline-flex justify-center items-center gap-2 rounded-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:outline-none focus:ring-0 focus:ring-primary focus:ring-offset-0 transition-all text-sm dark:focus:ring-offset-white/10" href="javascript:void(0);">
                                                Go somewhere
                                            </a>
                                        </div>
                                        <img class="w-full h-auto rounded-b-sm" src="{{asset('build/assets/img/gallery/3.jpg')}}" alt="Image Description">
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

        <!-- DRAGULA JS -->
        <script src="{{asset('build/assets/libs/dragula/dragula.min.js')}}"></script>
        @vite('resources/assets/js/draggable.js')
        

@endsection