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
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Scrollspy</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                    <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Elements
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                    </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        Scrollspy
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-6">
                                <div class="col-span-12 xxl:col-span-6">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Basic Scrollspy</h5>
                                        </div>
                                        <div id="scrollspy-scrollable-parent-1" class="max-h-[340px] overflow-y-auto">
                                            <div class="box-body">
                                                <header
                                                    class="sticky top-0 inset-x-0 flex flex-wrap sm:justify-start sm:flex-nowrap z-40 w-full bg-white text-sm dark:bg-bgdark">
                                                    <nav class="w-full mx-auto sm:flex sm:items-center sm:justify-between mt-3"
                                                        aria-label="Global">
                                                        <div class="flex items-center justify-between">
                                                            <a class="flex-none text-xl font-semibold dark:text-white"
                                                                href="javascript:void(0);">Brand</a>
                                                            <div class="sm:hidden">
                                                                <button type="button"
                                                                    class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-2 rounded-sm border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-sm dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                    data-hs-collapse="#navbar-collapse-basic"
                                                                    aria-controls="navbar-collapse-basic"
                                                                    aria-label="Toggle navigation">
                                                                    <svg class="hs-collapse-open:hidden w-4 h-4" width="16"
                                                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                                                        <path fill-rule="evenodd"
                                                                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z">
                                                                        </path>
                                                                    </svg>
                                                                    <svg class="hs-collapse-open:block hidden w-4 h-4" width="16"
                                                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z">
                                                                        </path>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div id="navbar-collapse-basic"
                                                            class="hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
                                                            <div data-hs-scrollspy="#scrollspy-1" data-hs-scrollspy-offset="70"
                                                                data-hs-scrollspy-scrollable-parent="#scrollspy-scrollable-parent-1"
                                                                class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 ltr:sm:pl-5 rtl:pr-5">
                                                                <a class="text-sm text-gray-700 leading-6 hover:text-gray-500 dark:text-white/70 dark:hover:text-white hs-scrollspy-active:text-primary dark:hs-scrollspy-active:text-primary"
                                                                    href="#first">First</a>
                                                                <a class="text-sm text-gray-700 leading-6 hover:text-gray-500 dark:text-white/70 dark:hover:text-white hs-scrollspy-active:text-primary dark:hs-scrollspy-active:text-primary"
                                                                    href="#second">Second</a>

                                                                <div data-hs-scrollspy-group class="hs-dropdown [--placement:bottom-right]">
                                                                    <a id="hs-mega-menu-basic-dr" class="group hs-scrollspy-active:text-primary mb-3 sm:mb-0 dark:hs-scrollspy-active:text-primary inline-flex justify-center items-center gap-2 text-sm text-gray-700 leading-6 hover:text-gray-500 dark:text-gray-400 dark:hover:text-gray-500 hs-scrollspy-active:text-primary dark:hs-scrollspy-active:text-primary" href='javascript:;'>
                                                                        Dropdown
                                                                        <svg class="ml-2 w-2.5 h-2.5 text-gray-600" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                                                        </svg>
                                                                    </a>

                                                                    <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-48 z-10 bg-white sm:shadow-md rounded-lg p-2 dark:bg-gray-800 sm:dark:border dark:border-gray-700 dark:divide-gray-700 before:absolute top-full sm:border before:-top-5 before:left-0 before:w-full before:h-5 hidden" style="">
                                                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-700 leading-6 hover:text-gray-500 dark:text-gray-400 dark:hover:text-gray-500 hs-scrollspy-active:text-primary dark:hs-scrollspy-active:text-primary" href="#third">
                                                                        Third
                                                                        </a>
                                                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-700 leading-6 hover:text-gray-500 dark:text-gray-400 dark:hover:text-gray-500 hs-scrollspy-active:text-primary dark:hs-scrollspy-active:text-primary" href="#fourth">
                                                                        Fourth
                                                                        </a>
                                                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-700 leading-6 hover:text-gray-500 dark:text-gray-400 dark:hover:text-gray-500 hs-scrollspy-active:text-primary dark:hs-scrollspy-active:text-primary" href="#fifth">
                                                                        Fifth
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </nav>
                                                </header>

                                                <div id="scrollspy-1" class="mt-3 space-y-4">
                                                    <div id="first">
                                                        <h3 class="text-lg font-semibold dark:text-white">First</h3>
                                                        <p class="mt-1 text-sm leading-6 text-gray-600 dark:text-white/70">This is
                                                            some placeholder content for the scrollspy page. Note that as you scroll
                                                            down the page, the appropriate navigation link is highlighted. It's
                                                            repeated throughout the component example. We keep adding some more
                                                            example copy here to emphasize the scrolling and highlighting.</p>
                                                    </div>

                                                    <div id="second">
                                                        <h3 class="text-lg font-semibold dark:text-white">Second</h3>
                                                        <p class="mt-1 text-sm leading-6 text-gray-600 dark:text-white/70">This is
                                                            some placeholder content for the scrollspy page. Note that as you scroll
                                                            down the page, the appropriate navigation link is highlighted. It's
                                                            repeated throughout the component example. We keep adding some more
                                                            example copy here to emphasize the scrolling and highlighting.</p>
                                                    </div>

                                                    <div id="third">
                                                        <h3 class="text-lg font-semibold dark:text-white">Third</h3>
                                                        <p class="mt-1 text-sm leading-6 text-gray-600 dark:text-white/70">This is
                                                            some placeholder content for the scrollspy page. Note that as you scroll
                                                            down the page, the appropriate navigation link is highlighted. It's
                                                            repeated throughout the component example. We keep adding some more
                                                            example copy here to emphasize the scrolling and highlighting.</p>
                                                    </div>

                                                    <div id="fourth">
                                                        <h3 class="text-lg font-semibold dark:text-white">Fourth</h3>
                                                        <p class="mt-1 text-sm leading-6 text-gray-600 dark:text-white/70">This is
                                                            some placeholder content for the scrollspy page. Note that as you scroll
                                                            down the page, the appropriate navigation link is highlighted. It's
                                                            repeated throughout the component example. We keep adding some more
                                                            example copy here to emphasize the scrolling and highlighting.</p>
                                                    </div>

                                                    <div id="fifth">
                                                        <h3 class="text-lg font-semibold dark:text-white">Fifth</h3>
                                                        <p class="mt-1 text-sm leading-6 text-gray-600 dark:text-white/70">This is
                                                            some placeholder content for the scrollspy page. Note that as you scroll
                                                            down the page, the appropriate navigation link is highlighted. It's
                                                            repeated throughout the component example. We keep adding some more
                                                            example copy here to emphasize the scrolling and highlighting.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 xxl:col-span-6">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Nested Scrollspy</h5>
                                        </div>
                                        <div id="scrollspy-scrollable-parent-2" class="max-h-[400px] overflow-y-auto">
                                            <div class="box-body">
                                                <div class="grid grid-cols-5">
                                                    <div class="col-span-12 md:col-span-1">
                                                        <h2 class="text-xl font-medium dark:text-white">Navbar</h2>

                                                        <ul class="sticky top-0" data-hs-scrollspy="#scrollspy-2"
                                                            data-hs-scrollspy-scrollable-parent="#scrollspy-scrollable-parent-2">
                                                            <li data-hs-scrollspy-group="">
                                                                <a href="#item-1"
                                                                    class="block py-0.5 text-sm font-medium leading-6 text-slate-700 hover:text-slate-900 dark:text-white dark:hover:text-white/70 hs-scrollspy-active:text-primary dark:hs-scrollspy-active:text-primary">Item
                                                                    1</a>
                                                                <ul>
                                                                    <li class="ltr:ml-4 rtl:mr-4">
                                                                        <a href="#item-1-1"
                                                                            class="group flex items-start gap-x-2 py-0.5 text-sm text-gray-700 leading-6 hover:text-gray-800 dark:text-white/70 dark:hover:text-gray-300 hs-scrollspy-active:text-primary dark:hs-scrollspy-active:text-primary">
                                                                            <svg class="w-2 h-6 text-gray-400 overflow-visible group-hover:text-gray-600  dark:text-white dark:group-hover:text-white/70 rtl:rotate-180"
                                                                                width="16" height="16" viewBox="0 0 16 16"
                                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M5 2L10.6464 7.64645C10.8417 7.84171 10.8417 8.15829 10.6464 8.35355L5 14"
                                                                                    stroke="currentColor" stroke-width="2"
                                                                                    stroke-linecap="round"></path>
                                                                            </svg>
                                                                            Item 1-1
                                                                        </a>
                                                                    </li>
                                                                    <li class="ltr:ml-4 rtl:mr-4">
                                                                        <a href="#item-1-2"
                                                                            class="group flex items-start gap-x-2 py-0.5 text-sm text-gray-700 leading-6 hover:text-gray-800 dark:text-white/70 dark:hover:text-gray-300 hs-scrollspy-active:text-primary dark:hs-scrollspy-active:text-primary">
                                                                            <svg class="w-2 h-6 text-gray-400 overflow-visible group-hover:text-gray-600  dark:text-white dark:group-hover:text-white/70 rtl:rotate-180"
                                                                                width="16" height="16" viewBox="0 0 16 16"
                                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M5 2L10.6464 7.64645C10.8417 7.84171 10.8417 8.15829 10.6464 8.35355L5 14"
                                                                                    stroke="currentColor" stroke-width="2"
                                                                                    stroke-linecap="round"></path>
                                                                            </svg>
                                                                            Item 1-2
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="#item-2"
                                                                    class="block py-0.5 text-sm font-medium leading-6 text-slate-700 hover:text-slate-900 dark:text-white dark:hover:text-white/70 hs-scrollspy-active:text-primary dark:hs-scrollspy-active:text-primary">Item
                                                                    2</a>
                                                            </li>
                                                            <li data-hs-scrollspy-group="">
                                                                <a href="#item-3"
                                                                    class="block py-0.5 text-sm font-medium leading-6 text-slate-700 hover:text-slate-900 dark:text-white dark:hover:text-white/70 hs-scrollspy-active:text-primary dark:hs-scrollspy-active:text-primary">Item
                                                                    3</a>
                                                                <ul>
                                                                    <li class="ltr:ml-4 rtl:mr-4">
                                                                        <a href="#item-3-1"
                                                                            class="group flex items-start gap-x-2 py-0.5 text-sm text-gray-700 leading-6 hover:text-gray-800 dark:text-white/70 dark:hover:text-gray-300 hs-scrollspy-active:text-primary dark:hs-scrollspy-active:text-primary">
                                                                            <svg class="w-2 h-6 text-gray-400 overflow-visible group-hover:text-gray-600  dark:text-white dark:group-hover:text-white/70 rtl:rotate-180"
                                                                                width="16" height="16" viewBox="0 0 16 16"
                                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M5 2L10.6464 7.64645C10.8417 7.84171 10.8417 8.15829 10.6464 8.35355L5 14"
                                                                                    stroke="currentColor" stroke-width="2"
                                                                                    stroke-linecap="round"></path>
                                                                            </svg>
                                                                            Item 3-1
                                                                        </a>
                                                                    </li>
                                                                    <li class="ltr:ml-4 rtl:mr-4">
                                                                        <a href="#item-3-2"
                                                                            class="group flex items-start gap-x-2 py-0.5 text-sm text-gray-700 leading-6 hover:text-gray-800 dark:text-white/70 dark:hover:text-gray-300 hs-scrollspy-active:text-primary dark:hs-scrollspy-active:text-primary">
                                                                            <svg class="w-2 h-6 text-gray-400 overflow-visible group-hover:text-gray-600  dark:text-white dark:group-hover:text-white/70 rtl:rotate-180"
                                                                                width="16" height="16" viewBox="0 0 16 16"
                                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M5 2L10.6464 7.64645C10.8417 7.84171 10.8417 8.15829 10.6464 8.35355L5 14"
                                                                                    stroke="currentColor" stroke-width="2"
                                                                                    stroke-linecap="round"></path>
                                                                            </svg>
                                                                            Item 3-2
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-span-12 md:col-span-4">
                                                        <div id="scrollspy-2" class="space-y-4">
                                                            <div id="item-1">
                                                                <h3 class="text-lg font-semibold dark:text-white">Item 1</h3>
                                                                <p class="mt-1 text-sm leading-6 text-gray-600 dark:text-white/70">
                                                                    This is some placeholder content for the scrollspy page. Note
                                                                    that as you scroll down the page, the appropriate navigation
                                                                    link is highlighted. It's repeated throughout the component
                                                                    example. We keep adding some more example copy here to emphasize
                                                                    the scrolling and highlighting.</p>
                                                            </div>

                                                            <div id="item-1-1">
                                                                <h3 class="text-lg font-semibold dark:text-white">Item 1-1</h3>
                                                                <p class="mt-1 text-sm leading-6 text-gray-600 dark:text-white/70">
                                                                    This is some placeholder content for the scrollspy page. Note
                                                                    that as you scroll down the page, the appropriate navigation
                                                                    link is highlighted. It's repeated throughout the component
                                                                    example. We keep adding some more example copy here to emphasize
                                                                    the scrolling and highlighting.</p>
                                                            </div>

                                                            <div id="item-1-2">
                                                                <h3 class="text-lg font-semibold dark:text-white">Item 1-2</h3>
                                                                <p class="mt-1 text-sm leading-6 text-gray-600 dark:text-white/70">
                                                                    This is some placeholder content for the scrollspy page. Note
                                                                    that as you scroll down the page, the appropriate navigation
                                                                    link is highlighted. It's repeated throughout the component
                                                                    example. We keep adding some more example copy here to emphasize
                                                                    the scrolling and highlighting.</p>
                                                            </div>

                                                            <div id="item-2">
                                                                <h3 class="text-lg font-semibold dark:text-white">Item 2</h3>
                                                                <p class="mt-1 text-sm leading-6 text-gray-600 dark:text-white/70">
                                                                    This is some placeholder content for the scrollspy page. Note
                                                                    that as you scroll down the page, the appropriate navigation
                                                                    link is highlighted. It's repeated throughout the component
                                                                    example. We keep adding some more example copy here to emphasize
                                                                    the scrolling and highlighting.</p>
                                                            </div>

                                                            <div id="item-3">
                                                                <h3 class="text-lg font-semibold dark:text-white">Item 3</h3>
                                                                <p class="mt-1 text-sm leading-6 text-gray-600 dark:text-white/70">
                                                                    This is some placeholder content for the scrollspy page. Note
                                                                    that as you scroll down the page, the appropriate navigation
                                                                    link is highlighted. It's repeated throughout the component
                                                                    example. We keep adding some more example copy here to emphasize
                                                                    the scrolling and highlighting.</p>
                                                            </div>

                                                            <div id="item-3-1">
                                                                <h3 class="text-lg font-semibold dark:text-white">Item 3-1</h3>
                                                                <p class="mt-1 text-sm leading-6 text-gray-600 dark:text-white/70">
                                                                    This is some placeholder content for the scrollspy page. Note
                                                                    that as you scroll down the page, the appropriate navigation
                                                                    link is highlighted. It's repeated throughout the component
                                                                    example. We keep adding some more example copy here to emphasize
                                                                    the scrolling and highlighting.</p>
                                                            </div>

                                                            <div id="item-3-2">
                                                                <h3 class="text-lg font-semibold dark:text-white">Item 3-2</h3>
                                                                <p class="mt-1 text-sm leading-6 text-gray-600 dark:text-white/70">
                                                                    This is some placeholder content for the scrollspy page. Note
                                                                    that as you scroll down the page, the appropriate navigation
                                                                    link is highlighted. It's repeated throughout the component
                                                                    example. We keep adding some more example copy here to emphasize
                                                                    the scrolling and highlighting.</p>
                                                            </div>
                                                        </div>
                                                    </div>
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