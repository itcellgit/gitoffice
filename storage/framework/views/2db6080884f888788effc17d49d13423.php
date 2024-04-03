<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

                    <div class="content">

                        <!-- Start::main-content -->
                        <div class="main-content">

                            <!-- Page Header -->
                            <div class="block justify-between page-header sm:flex">
                                <div>
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Mega Menu</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                    <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Elements
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                    </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        Mega Menu
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-6">
                                <div class="col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Basic Mega Menu</h5>
                                        </div>
                                        <div class="box-body">
                                        <header class="relative flex flex-wrap sm:justify-start sm:flex-nowrap w-full bg-white text-sm dark:bg-bgdark">
                                            <nav class="w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between" aria-label="Global">
                                            <div class="flex items-center justify-between">
                                                <a href="<?php echo e(url('index')); ?>" class="header-logo">
                                                <img src="<?php echo e(asset('build/assets/img/brand-logos/desktop-logo.png')); ?>" alt="logo" class="dark:hidden block">
                                                <img src="<?php echo e(asset('build/assets/img/brand-logos/desktop-dark.png')); ?>" alt="logo" class="hidden dark:block">
                                                </a>
                                                <div class="sm:hidden">
                                                <button type="button" class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-2 rounded-sm border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-transparent transition-all text-sm dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10" data-hs-collapse="#navbar-collapse-basic" aria-controls="navbar-collapse-basic" aria-label="Toggle navigation">
                                                    <svg class="hs-collapse-open:hidden w-4 h-4" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                                                    </svg>
                                                    <svg class="hs-collapse-open:block hidden w-4 h-4" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                                    </svg>
                                                </button>
                                                </div>
                                            </div>
                                            <div id="navbar-collapse-basic" class="hidden basis-full grow sm:block">
                                                <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 ltr:sm:pl-5 rtl:sm:pr-5">
                                                <a class="font-medium text-primary" href="javascript:void(0);" aria-current="page">Active</a>

                                                <div class="hs-dropdown [--strategy:static] sm:[--strategy:absolute] [--adaptive:none]">
                                                    <button id="hs-mega-menu-basic-dr1" type="button" class="flex items-center w-full text-gray-600 hover:text-gray-400 font-medium dark:text-gray-400 dark:hover:text-gray-500 ">
                                                        Dropdown
                                                        <svg class="ltr:ml-2 rtl:mr-2 w-2.5 h-2.5 text-gray-600" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                                        </svg>
                                                    </button>

                                                    <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-48 hidden z-10 bg-white sm:shadow-md rounded-sm p-2 dark:bg-gray-800 sm:dark:border dark:border-gray-700 dark:divide-gray-700 before:absolute top-full sm:border before:-top-5 before:left-0 before:w-full before:h-5">
                                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300" href="javascript:void(0);">
                                                        About
                                                        </a>
                                                        <div class="hs-dropdown relative [--strategy:static] sm:[--strategy:absolute] [--adaptive:none]">
                                                        <button type="button" class="w-full flex justify-between items-center text-sm text-gray-800 rounded-md py-2 px-3 hover:bg-gray-100 focus:ring-0 focus:ring-primary dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                                                            Sub Menu
                                                            <svg class="sm:-rotate-90 ltr:ml-2 rtl:mr-2 w-2.5 h-2.5 text-gray-600" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                                            </svg>
                                                        </button>

                                                        <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-48 hidden z-10 sm:mt-2 bg-white sm:shadow-md rounded-sm p-2 dark:bg-gray-800 sm:dark:border dark:border-gray-700 dark:divide-gray-700 before:absolute sm:border before:-right-5 before:top-0 before:h-full before:w-5 top-0 ltr:right-full rtl:left-full !mx-[10px]">
                                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300" href="javascript:void(0);">
                                                                Newsletter
                                                            </a>
                                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300" href="javascript:void(0);">
                                                                Purchases
                                                            </a>
                                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300" href="javascript:void(0);">
                                                                Downloads
                                                            </a>
                                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300" href="javascript:void(0);">
                                                                Team Account
                                                            </a>
                                                        </div>
                                                    </div>

                                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300" href="javascript:void(0);">
                                                        Downloads
                                                        </a>
                                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300" href="javascript:void(0);">
                                                        Team Account
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="hs-dropdown [--strategy:static] sm:[--strategy:absolute] [--adaptive:none]">
                                                    <button type="button" class="flex items-center w-full text-gray-600 hover:text-gray-400 font-medium dark:text-gray-400 dark:hover:text-gray-500">
                                                        Mega Menu
                                                        <svg class="ltr:ml-2 rtl:mr-2 w-2.5 h-2.5 text-gray-600" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                                        </svg>
                                                    </button>

                                                    <div class="hs-dropdown-menu transition-[opacity,margin] sm:border duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 w-full hidden z-10 top-full left-0 min-w-[15rem] bg-white sm:shadow-md rounded-sm p-2 dark:bg-gray-800 sm:dark:border dark:border-gray-700 dark:divide-gray-700 before:absolute before:-top-5 before:left-0 before:w-full before:h-5">
                                                        <div class="sm:grid sm:grid-cols-3">
                                                        <div class="flex flex-col">
                                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300" href="javascript:void(0);">
                                                            About
                                                            </a>
                                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300" href="javascript:void(0);">
                                                            Services
                                                            </a>
                                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300" href="javascript:void(0);">
                                                            Customer Story
                                                            </a>
                                                        </div>

                                                        <div class="flex flex-col">
                                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300" href="javascript:void(0);">
                                                            Careers
                                                            </a>
                                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300" href="javascript:void(0);">
                                                            Careers: Overview
                                                            </a>
                                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300" href="javascript:void(0);">
                                                            Careers: Apply
                                                            </a>
                                                        </div>

                                                        <div class="flex flex-col">
                                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300" href="javascript:void(0);">
                                                            Log In
                                                            </a>
                                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300" href="javascript:void(0);">
                                                            Sign Up
                                                            </a>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <a class="font-medium text-gray-600 hover:text-gray-400 dark:text-white/70 dark:hover:text-white/70" href="javascript:void(0);">Link</a>
                                                </div>
                                            </div>
                                            </nav>
                                        </header>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-1 -->

                            <!-- Start::row-2 -->
                            <div class="grid grid-cols-12 gap-6">
                            <div class="col-span-12">
                                <div class="box">
                                    <div class="box-header">
                                        <h5 class="box-title">Mega Menu With Hover Event</h5>
                                    </div>
                                    <div class="box-body">
                                        <header class="relative flex flex-wrap sm:justify-start sm:flex-nowrap w-full bg-white text-sm dark:bg-bgdark">
                                        <nav class="w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between" aria-label="Global">
                                            <div class="flex items-center justify-between">
                                            <a href="<?php echo e(url('index')); ?>" class="header-logo">
                                                <img src="<?php echo e(asset('build/assets/img/brand-logos/desktop-logo.png')); ?>" alt="logo" class="dark:hidden block">
                                                <img src="<?php echo e(asset('build/assets/img/brand-logos/desktop-dark.png')); ?>" alt="logo" class="hidden dark:block">
                                            </a>
                                            <div class="sm:hidden">
                                                <button type="button" class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-2 rounded-sm border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-transparent transition-all text-sm dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10" data-hs-collapse="#navbar-collapse-basic1" aria-controls="navbar-collapse-basic1" aria-label="Toggle navigation">
                                                <svg class="hs-collapse-open:hidden w-4 h-4" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                                                </svg>
                                                <svg class="hs-collapse-open:block hidden w-4 h-4" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                                </svg>
                                                </button>
                                            </div>
                                            </div>

                                            <div id="navbar-collapse-basic1" class="hidden basis-full grow sm:block">
                                            <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 ltr:sm:pl-5 rtl:sm:pr-5">
                                                <a class="font-medium text-primary" href="javascript:void(0);" aria-current="page">Active</a>

                                                <div class="hs-dropdown [--strategy:static] sm:[--strategy:absolute] [--adaptive:none] sm:[--trigger:hover]">
                                                <button id="hs-mega-menu-basic-dr2" type="button" class="flex items-center w-full text-gray-600 hover:text-gray-400 font-medium dark:text-white/70 dark:hover:text-white/70 ">
                                                    Dropdown
                                                    <svg class="ltr:ml-2 rtl:mr-2 w-2.5 h-2.5 text-gray-600 dark:text-white/70" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                                    </svg>
                                                </button>

                                                <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-48 hidden z-10 bg-white sm:shadow-md rounded-sm p-2 dark:bg-bgdark sm:dark:border dark:border-white/10 dark:divide-white/10 before:absolute top-full sm:border before:-top-5 ltr:before:left-0 rtl:before:right-0 before:w-full before:h-5">
                                                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300" href="javascript:void(0);">
                                                    About
                                                    </a>
                                                    <div class="hs-dropdown relative [--strategy:static] sm:[--strategy:absolute] [--adaptive:none] sm:[--trigger:hover]">
                                                    <button type="button" class="w-full flex justify-between items-center text-sm text-gray-800 rounded-sm py-2 px-3 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300">
                                                        Sub Menu
                                                        <svg class="sm:-rotate-90 ltr:ml-2 rtl:mr-2 w-2.5 h-2.5 text-gray-600 dark:text-white/70 rtl:rotate-90" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                                        </svg>
                                                    </button>

                                                    <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-48 hidden z-10 sm:mt-2 bg-white sm:shadow-md rounded-sm p-2 dark:bg-bgdark sm:dark:border dark:border-white/10 dark:divide-white/10 before:absolute sm:border ltr:before:-right-5 rtl:before:-left-5 before:top-0 before:h-full before:w-5 top-0 ltr:right-full rtl:left-full !mx-[10px]">
                                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300" href="javascript:void(0);">
                                                        About
                                                        </a>
                                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300" href="javascript:void(0);">
                                                        Downloads
                                                        </a>
                                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300" href="javascript:void(0);">
                                                        Team Account
                                                        </a>
                                                    </div>
                                                    </div>

                                                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300" href="javascript:void(0);">
                                                    Downloads
                                                    </a>
                                                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300" href="javascript:void(0);">
                                                    Team Account
                                                    </a>
                                                </div>
                                                </div>

                                                <div class="hs-dropdown [--strategy:static] sm:[--strategy:absolute] [--adaptive:none] sm:[--trigger:hover]">
                                                <button type="button" class="flex items-center w-full text-gray-600  hover:text-gray-400 font-medium dark:text-white/70 dark:hover:text-white/70">
                                                    Mega Menu
                                                    <svg class="ltr:ml-2 rtl:mr-2 w-2.5 h-2.5 text-gray-600 dark:text-white/70" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                                    </svg>
                                                </button>

                                                <div class="hs-dropdown-menu transition-[opacity,margin] sm:border duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 w-full hidden z-10 top-full ltr:left-0 rtl:right-0 min-w-[15rem] bg-white sm:shadow-md rounded-sm p-2 dark:bg-bgdark sm:dark:border dark:border-white/10 dark:divide-white/10 before:absolute before:-top-5 ltr:before:left-0 rtl:before:right-0 before:w-full before:h-5">
                                                    <div class="sm:grid sm:grid-cols-3">
                                                    <div class="flex flex-col">
                                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300" href="javascript:void(0);">
                                                        About
                                                        </a>
                                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300" href="javascript:void(0);">
                                                        Services
                                                        </a>
                                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300" href="javascript:void(0);">
                                                        Customer Story
                                                        </a>
                                                    </div>

                                                    <div class="flex flex-col">
                                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300" href="javascript:void(0);">
                                                        Careers
                                                        </a>
                                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300" href="javascript:void(0);">
                                                        Careers: Overview
                                                        </a>
                                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300" href="javascript:void(0);">
                                                        Careers: Apply
                                                        </a>
                                                    </div>

                                                    <div class="flex flex-col">
                                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300" href="javascript:void(0);">
                                                        Log In
                                                        </a>
                                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300" href="javascript:void(0);">
                                                        Sign Up
                                                        </a>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>

                                                <a class="font-medium text-gray-600 hover:text-gray-400 dark:text-white/70 dark:hover:text-white/70" href="javascript:void(0);">Link</a>
                                            </div>
                                            </div>
                                        </nav>
                                        </header>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-2 -->

                            <!-- Start::row-3 -->
                            <div class="grid grid-cols-12 gap-6">
                            <div class="col-span-12">
                                <div class="box">
                                    <div class="box-header">
                                        <h5 class="box-title">Mega Menu Slide Up Animation</h5>
                                    </div>
                                    <div class="box-body">
                                        <header class="relative flex flex-wrap sm:justify-start sm:flex-nowrap w-full bg-white text-sm dark:bg-bgdark">
                                        <nav class="w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between" aria-label="Global">
                                            <div class="flex items-center justify-between">
                                            <a href="<?php echo e(url('index')); ?>" class="header-logo">
                                                <img src="<?php echo e(asset('build/assets/img/brand-logos/desktop-logo.png')); ?>" alt="logo" class="dark:hidden block">
                                                <img src="<?php echo e(asset('build/assets/img/brand-logos/desktop-dark.png')); ?>" alt="logo" class="hidden dark:block">
                                            </a>
                                            <div class="sm:hidden">
                                                <button type="button" class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-2 rounded-sm border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-transparent transition-all text-sm dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10" data-hs-collapse="#navbar-collapse-basic2" aria-controls="navbar-collapse-basic2" aria-label="Toggle navigation">
                                                <svg class="hs-collapse-open:hidden w-4 h-4" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                                                </svg>
                                                <svg class="hs-collapse-open:block hidden w-4 h-4" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                                </svg>
                                                </button>
                                            </div>
                                            </div>

                                            <div id="navbar-collapse-basic2" class="hidden basis-full grow sm:block">
                                            <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 ltr:sm:pl-5 rtl:sm:pr-5">
                                                <a class="font-medium text-primary" href="javascript:void(0);" aria-current="page">Active</a>

                                                <div class="hs-dropdown [--strategy:static] sm:[--strategy:absolute] [--adaptive:none] sm:[--trigger:hover]">
                                                <button id="hs-mega-menu-basic-dr3" type="button" class="flex items-center w-full text-gray-600 hover:text-gray-400 font-medium dark:text-white/70 dark:hover:text-white/70 ">
                                                    Dropdown
                                                    <svg class="ltr:ml-2 rtl:mr-2 w-2.5 h-2.5 text-gray-600 dark:text-white/70" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                                    </svg>
                                                </button>

                                                <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-48 hidden z-10 sm:mt-3 bg-white sm:shadow-md rounded-sm p-2 dark:bg-bgdark sm:dark:border dark:border-white/10 dark:divide-white/10 before:absolute top-full sm:border before:-top-5 ltr:before:left-0 rtl:before:right-0 before:w-full before:h-5">
                                                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300" href="javascript:void(0);">
                                                    About
                                                    </a>
                                                    <div class="hs-dropdown relative [--strategy:static] sm:[--strategy:absolute] [--adaptive:none] sm:[--trigger:hover]">
                                                    <button type="button" class="w-full flex justify-between items-center text-sm text-gray-800 rounded-sm py-2 px-3 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300">
                                                        Sub Menu
                                                        <svg class="sm:-rotate-90 ltr:ml-2 rtl:mr-2 w-2.5 h-2.5 text-gray-600 dark:text-white/70 rtl:rotate-90" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                                        </svg>
                                                    </button>

                                                    <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-48 hidden z-10 sm:mt-3 bg-white sm:shadow-md rounded-sm p-2 dark:bg-bgdark sm:dark:border dark:border-white/10 dark:divide-white/10 before:absolute sm:border ltr:before:-right-5 rtl:before:-left-5 before:top-0 before:h-full before:w-5 top-0 ltr:right-full rtl:left-full !mx-[10px]">
                                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300" href="javascript:void(0);">
                                                        About
                                                        </a>
                                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300" href="javascript:void(0);">
                                                        Downloads
                                                        </a>
                                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300" href="javascript:void(0);">
                                                        Team Account
                                                        </a>
                                                    </div>
                                                    </div>

                                                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300" href="javascript:void(0);">
                                                    Downloads
                                                    </a>
                                                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300" href="javascript:void(0);">
                                                    Team Account
                                                    </a>
                                                </div>
                                                </div>

                                                <div class="hs-dropdown [--strategy:static] sm:[--strategy:absolute] [--adaptive:none] sm:[--trigger:hover]">
                                                <button type="button" class="flex items-center w-full text-gray-600 hover:text-gray-400 font-medium dark:text-white/70 dark:hover:text-white/70">
                                                    Mega Menu
                                                    <svg class="ltr:ml-2 rtl:mr-2 w-2.5 h-2.5 text-gray-600 dark:text-white/70" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                                    </svg>
                                                </button>

                                                <div class="hs-dropdown-menu transition-[opacity,margin] sm:border duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 w-full hidden z-10 sm:mt-3 top-full ltr:left-0 rtl:right-0 min-w-[15rem] bg-white sm:shadow-md rounded-sm p-2 dark:bg-bgdark sm:dark:border dark:border-white/10 dark:divide-white/10 before:absolute before:-top-5 ltr:before:left-0 rtl:before:right-0 before:w-full before:h-5">
                                                    <div class="sm:grid sm:grid-cols-3">
                                                    <div class="flex flex-col">
                                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300" href="javascript:void(0);">
                                                        About
                                                        </a>
                                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300" href="javascript:void(0);">
                                                        Services
                                                        </a>
                                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300" href="javascript:void(0);">
                                                        Customer Story
                                                        </a>
                                                    </div>

                                                    <div class="flex flex-col">
                                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300" href="javascript:void(0);">
                                                        Careers
                                                        </a>
                                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300" href="javascript:void(0);">
                                                        Careers: Overview
                                                        </a>
                                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300" href="javascript:void(0);">
                                                        Careers: Apply
                                                        </a>
                                                    </div>

                                                    <div class="flex flex-col">
                                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300" href="javascript:void(0);">
                                                        Log In
                                                        </a>
                                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-transparent dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300" href="javascript:void(0);">
                                                        Sign Up
                                                        </a>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>

                                                <a class="font-medium text-gray-600 hover:text-gray-400 dark:text-white/70 dark:hover:text-white/70" href="javascript:void(0);">Link</a>
                                            </div>
                                            </div>
                                        </nav>
                                        </header>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-3 -->

                            <!-- Start::row-4 -->
                            <div class="grid grid-cols-12 gap-6">
                            <div class="col-span-12">
                                <div class="box">
                                    <div class="box-header">
                                        <h5 class="box-title">Mega Menu With Auto Close Behavior</h5>
                                    </div>
                                    <div class="box-body">
                                        <header class="relative flex flex-wrap sm:justify-start sm:flex-nowrap w-full bg-white text-sm dark:bg-bgdark">
                                        <nav class="w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between" aria-label="Global">
                                            <div class="flex items-center justify-between">
                                            <a href="<?php echo e(url('index')); ?>" class="header-logo">
                                                <img src="<?php echo e(asset('build/assets/img/brand-logos/desktop-logo.png')); ?>" alt="logo" class="dark:hidden block">
                                                <img src="<?php echo e(asset('build/assets/img/brand-logos/desktop-dark.png')); ?>" alt="logo" class="hidden dark:block">
                                            </a>
                                            <div class="sm:hidden">
                                                <button type="button" class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-2 rounded-sm border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-transparent transition-all text-sm dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10" data-hs-collapse="#navbar-collapse-slide-up" aria-controls="navbar-collapse-slide-up" aria-label="Toggle navigation">
                                                <svg class="hs-collapse-open:hidden w-4 h-4" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                                                </svg>
                                                <svg class="hs-collapse-open:block hidden w-4 h-4" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                                </svg>
                                                </button>
                                            </div>
                                            </div>
                                            <div id="navbar-collapse-slide-up" class="hidden basis-full grow sm:block">
                                            <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 ltr:sm:pl-5 rtl:sm:pr-5">
                                                <a class="font-medium text-primary" href="javascript:void(0);" aria-current="page">Active</a>

                                                <div class="hs-dropdown [--strategy:static] sm:[--strategy:absolute] [--adaptive:none] [--auto-close:false]">
                                                    <button id="hs-mega-menu-basic-dr4" type="button" class="flex items-center w-full text-gray-600 hover:text-gray-400 font-medium dark:text-gray-400 dark:hover:text-gray-500 ">
                                                        Dropdown
                                                        <svg class="ltr:ml-2 rtl:mr-2 w-2.5 h-2.5 text-gray-600" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                                        </svg>
                                                    </button>

                                                    <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-48 hidden z-10 bg-white sm:shadow-md rounded-sm p-2 dark:bg-gray-800 sm:dark:border dark:border-gray-700 dark:divide-gray-700 before:absolute top-full sm:border before:-top-5 before:left-0 before:w-full before:h-5">
                                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-primary dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
                                                        About
                                                        </a>
                                                        <div class="hs-dropdown relative [--strategy:static] sm:[--strategy:absolute] [--adaptive:none] [--auto-close:false]">
                                                        <button type="button" class="w-full flex justify-between items-center text-sm text-gray-800 rounded-md py-2 px-3 hover:bg-gray-100 focus:ring-0 focus:ring-primary dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                                                            Sub Menu
                                                            <svg class="sm:-rotate-90 ml-2 w-2.5 h-2.5 text-gray-600" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                                            </svg>
                                                        </button>

                                                        <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-48 hidden z-10 sm:mt-2 bg-white sm:shadow-md rounded-sm p-2 dark:bg-gray-800 sm:dark:border dark:border-gray-700 dark:divide-gray-700 before:absolute sm:border before:-right-5 before:top-0 before:h-full before:w-5 top-0 ltr:right-full rtl:left-full !mx-[10px]">
                                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-primary dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
                                                            Newsletter
                                                            </a>
                                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-primary dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
                                                            Purchases
                                                            </a>
                                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-primary dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
                                                            Downloads
                                                            </a>
                                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-primary dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
                                                            Team Account
                                                            </a>
                                                        </div>
                                                        </div>

                                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-primary dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
                                                        Services
                                                        </a>
                                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-primary dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
                                                        Coustomer Story
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="hs-dropdown [--strategy:static] sm:[--strategy:absolute] [--adaptive:none] [--auto-close:false]">
                                                    <button type="button" class="flex items-center w-full text-gray-600 hover:text-gray-400 font-medium dark:text-gray-400 dark:hover:text-gray-500">
                                                        Mega Menu
                                                        <svg class="ltr:ml-2 rtl:mr-2 w-2.5 h-2.5 text-gray-600" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                                        </svg>
                                                    </button>

                                                    <div class="hs-dropdown-menu transition-[opacity,margin] sm:border duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 w-full hidden z-10 top-full left-0 min-w-[15rem] bg-white sm:shadow-md rounded-sm p-2 dark:bg-gray-800 sm:dark:border dark:border-gray-700 dark:divide-gray-700 before:absolute before:-top-5 before:left-0 before:w-full before:h-5">
                                                        <div class="sm:grid sm:grid-cols-3">
                                                        <div class="flex flex-col">
                                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-primary dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
                                                            About
                                                            </a>
                                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-primary dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
                                                            Services
                                                            </a>
                                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-primary dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
                                                            Customer Story
                                                            </a>
                                                        </div>

                                                        <div class="flex flex-col">
                                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-primary dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
                                                            Careers
                                                            </a>
                                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-primary dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
                                                            Careers: Overview
                                                            </a>
                                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-primary dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
                                                            Careers: Apply
                                                            </a>
                                                        </div>

                                                        <div class="flex flex-col">
                                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-primary dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
                                                            Log In
                                                            </a>
                                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-primary dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
                                                            Sign Up
                                                            </a>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <a class="font-medium text-gray-600 hover:text-gray-400 dark:text-white/70 dark:hover:text-white/70" href="javascript:void(0);">Link</a>
                                            </div>
                                            </div>
                                        </nav>
                                        </header>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-4 -->

                        </div>
                        <!-- Start::main-content -->

                    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\my-projects\laravel\vite\synto\synto-laravel\synto\resources\views/pages/mega-menu.blade.php ENDPATH**/ ?>