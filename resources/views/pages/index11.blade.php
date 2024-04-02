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
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Stocks Dashboard</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                    <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Dashboards
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                    </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        Stocks Dashboard
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-x-5">
                                <div class="col-span-12 md:col-span-6 xxxl:col-span-3">
                                    <div class="box overflow-hidden">
                                    <div class="box-body">
                                        <div class="flex items-start">
                                        <div class="ltr:mr-3 rtl:ml-3">
                                            <span class="avatar rounded-full bg-primary text-white p-3"><i class="ti ti-cash text-2xl leading-none"></i></span>
                                        </div>
                                        <div class="flex-1 sm:flex justify-between items-center">
                                            <div class="flex-1">
                                            <p class="mb-1 text-gray-500 dark:text-white/70 text-sm">Total Amount Invested</p>
                                            <h5 class="text-xl text-gray-800 dark:text-white font-semibold">$23,8998.99</h5>
                                            </div>
                                            <div id="totalInvested" class="min-w-fit"></div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-span-12 md:col-span-6 xxxl:col-span-3">
                                    <div class="box overflow-hidden">
                                    <div class="box-body">
                                        <div class="flex items-start">
                                        <div class="ltr:mr-3 rtl:ml-3">
                                            <span class="avatar rounded-full bg-secondary text-white p-3"><i class="ti ti-arrow-big-up-lines text-2xl leading-none"></i></span>
                                        </div>
                                        <div class="flex-1 sm:flex justify-between items-center">
                                            <div class="flex-1">
                                            <p class="mb-1 text-gray-500 dark:text-white/70 text-sm">No Of Investments</p>
                                            <h5 class="text-xl text-gray-800 dark:text-white font-semibold">1,116</h5>
                                            </div>
                                            <div id="totalInvestments" class="min-w-fit"></div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-span-12 md:col-span-6 xxxl:col-span-3">
                                    <div class="box overflow-hidden">
                                    <div class="box-body">
                                        <div class="flex items-start">
                                        <div class="ltr:mr-3 rtl:ml-3">
                                            <span class="avatar rounded-full bg-warning text-white p-3"><i class="ti ti-flame  text-2xl leading-none"></i></span>
                                        </div>
                                        <div class="flex-1 sm:flex justify-between items-center">
                                            <div class="flex-1">
                                            <p class="mb-1 text-gray-500 dark:text-white/70 text-sm">Portfolio Value</p>
                                            <h5 class="text-xl text-gray-800 dark:text-white font-semibold">$12,920.20</h5>
                                            </div>
                                            <div id="totalReturns" class="min-w-fit"></div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-span-12 md:col-span-6 xxxl:col-span-3">
                                    <div class="box overflow-hidden">
                                    <div class="box-body">
                                        <div class="sm:flex items-start">
                                        <div class="ltr:mr-3 rtl:ml-3">
                                            <span class="avatar rounded-full bg-danger text-white p-3"><i class="ti ti-arrow-big-down-lines text-2xl leading-none"></i></span>
                                        </div>
                                        <div class="flex-1 flex justify-between items-center">
                                            <div class="flex-1">
                                            <p class="mb-1 text-gray-500 dark:text-white/70 text-sm">Returns Rate</p>
                                            <h5 class="text-xl text-gray-800 dark:text-white font-semibold">+12.08% <i class="fe fe-arrow-up ltr:ml-1 rtl:mr-1 text-success"></i> </h5>
                                            </div>
                                            <div id="returnsRate" class="min-w-fit"></div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-1 -->

                            <!-- Start::row-2 -->
                            <div class="grid grid-cols-12 gap-x-5">
                                <div class="col-span-12 xxl:col-span-8">
                                    <div class="box">
                                    <div class="box-header">
                                        <div class="sm:flex justify-between sm:space-y-0 space-y-2">
                                            <h5 class="box-title my-auto">Total Investments</h5>
                                            <div class="inline-flex rounded-md shadow-sm">
                                                <button type="button" class="ti-btn-group text-xs !border-0 py-2 px-3 ti-btn-primary">
                                                    1D
                                                </button>
                                                <button type="button" class="ti-btn-group text-xs !border-0 py-2 px-3 ti-btn-soft-primary">
                                                    1W
                                                </button>
                                                <button type="button" class="ti-btn-group text-xs !border-0 py-2 px-3 ti-btn-soft-primary">
                                                    1M
                                                </button>
                                                <button type="button" class="ti-btn-group text-xs !border-0 py-2 px-3 ti-btn-soft-primary">
                                                    3M
                                                </button>
                                                <button type="button" class="ti-btn-group text-xs !border-0 py-2 px-3 ti-btn-soft-primary">
                                                    6M
                                                </button>
                                                <button type="button" class="ti-btn-group text-xs !border-0 py-2 px-3 ti-btn-soft-primary">
                                                    1Y
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="sm:flex justify-between items-center text-sm text-center mb-4">
                                        <div class="sm:flex items-center mb-4 sm:mb-0 space-y-4 sm:space-y-0">
                                            <div class="ltr:mr-6 rtl:ml-6">
                                            <span class="text-gray-500 dark:text-white/70">Invested Value</span>
                                            <p class="mt-1 mb-0">$1,290.94 <span class="ltr:ml-1 rtl:mr-1 text-success"><i class="ti ti-trending-up"></i> 1.22%</span></p>
                                            </div>
                                            <div class="ltr:mr-0 rtl:ml-0">
                                            <span class="text-gray-500 dark:text-white/70">Total Returns</span>
                                            <p class="mt-1 mb-0">$25,458.20 <span class="ltr:ml-1 rtl:mr-1 text-success"><i class="ti ti-trending-up"></i> 12.22%</span></p>
                                            </div>
                                        </div>
                                        <div class="sm:flex items-center space-y-4 sm:space-y-0">
                                            <div class="ltr:mr-6 rtl:ml-6">
                                            <span class="text-gray-500 dark:text-white/70">Today Change</span>
                                            <p class="mt-1 mb-0">$112.09</p>
                                            </div>
                                            <div class="ltr:mr-0 rtl:ml-0">
                                            <span class="text-gray-500 dark:text-white/70">Change In %</span>
                                            <p class="mt-1 mb-0">+0.01% <span class="ltr:ml-1 rtl:mr-1 text-success"><i class="ti ti-trending-up"></i> 0.03%</span></p>
                                            </div>
                                        </div>
                                        </div>
                                        <div id="totalInvestmentsStats"></div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-span-12 xxl:col-span-4">
                                    <div class="box">
                                    <div class="box-header">
                                        <div class="flex">
                                        <h5 class="box-title my-auto">My Stocks</h5>
                                        <div class="hs-dropdown ti-dropdown block ltr:ml-auto rtl:mr-auto my-auto">
                                            <button type="button" class="hs-dropdown-toggle ti-dropdown-toggle rounded-sm p-1 px-3 !border border-gray-200 text-gray-400 hover:text-gray-500 hover:bg-gray-200 hover:border-gray-200 focus:ring-gray-200  dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                                            All Stocks <i class="ti ti-chevron-down"></i></button>
                                            <div class="hs-dropdown-menu ti-dropdown-menu hidden">
                                            <a class="ti-dropdown-item" href="javascript:void(0)">All Stocks</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0)">Wishlist</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0)">Stocks</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0)">Crypto</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0)">ETFs</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0)">Bonds</a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="box-body p-0">
                                        <div class="hs-accordion-group my-stocks-container">

                                        <div class="hs-accordion stock-item" id="hs-basic-heading-one">
                                            <button type="button" class="hs-accordion-toggle  group py-0 inline-flex items-center gap-x-3 w-full font-medium text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                            aria-controls="hs-basic-collapse-one">
                                            <span class="flex items-center w-full">
                                                <span class="flex justify-between items-center w-full">
                                                <span class="ltr:mr-2 rtl:ml-2">
                                                    <span class="avatar avatar-sm rounded-full bg-primary/20 text-primary p-2.5"><i class="ri-github-line text-xl leading-none"></i></span>
                                                </span>
                                                <span class="flex-1">
                                                    <span class="flex justify-between items-center mb-1">
                                                    <span>GTHB (Gituhb, Demo Inc.)</span>
                                                    <span class="text-end">$12,390.02</span>
                                                    </span>
                                                    <span class="flex justify-between items-center text-xs">
                                                    <span class="text-gray-500 dark:text-white/70">12 shares</span>
                                                    <span class="text-success inline-flex"><i class="ti ti-trending-up ltr:mr-1 rtl:ml-1"></i>0.14%</span>
                                                    </span>
                                                </span>
                                                </span>
                                                <span class="ltr:ml-3 rtl:mr-3">
                                                <span class="hs-tooltip ti-main-tooltip">
                                                    <span
                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-light">
                                                    <i class="ri-star-fill"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        Whishlist
                                                    </span>
                                                    </span>
                                                </span>
                                                </span>
                                            </span>
                                            </button>
                                            <div id="hs-basic-collapse-one" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300 px-3 pt-3"
                                            aria-labelledby="hs-basic-heading-one">
                                            <div class="flex justify-between items-center overflow-auto space-x-6 rtl:space-x-reverse">
                                                <div class="flex-1 flex items-center">
                                                <a href="javascript:void(0);" class="ti-btn ti-btn-primary h-7 w-7" data-hs-overlay="#buyStockModal">B</a>
                                                <a href="javascript:void(0);" class="ti-btn ti-btn-secondary h-7 w-7" data-hs-overlay="#sellStockModal">S</a>
                                                <span class="hs-tooltip ti-main-tooltip">
                                                    <span class="m-0 hs-tooltip-toggle relative w-7 h-7 ti-btn transition-none focus:outline-none ti-btn-light">
                                                    <i class="ti ti-chart-candle"></i>
                                                    <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700 hidden" role="tooltip" data-popper-placement="top" style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(1818px, -249px);">
                                                        Market Cap
                                                    </span>
                                                    </span>
                                                </span>
                                                </div>
                                                <div class="min-w-fit flex items-center">
                                                <p class="mb-0 ltr:mr-3 rtl:ml-3">
                                                    <span class="text-gray-500 dark:text-white/70 ltr:mr-1 rtl:ml-1">High:</span>
                                                    <span class="text-success">$20,399,08</span>
                                                </p>
                                                <p class="mb-0">
                                                    <span class="text-gray-500 dark:text-white/70 ltr:mr-1 rtl:ml-1">Low:</span>
                                                    <span class="text-danger">$11,021,36</span>
                                                </p>
                                                </div>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="hs-accordion stock-item" id="hs-basic-heading-two">
                                            <button type="button" class="hs-accordion-toggle  group py-0 inline-flex items-center gap-x-3 w-full font-medium text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                            aria-controls="hs-basic-collapse-two">
                                            <span class="flex items-center w-full">
                                                <span class="flex justify-between items-center w-full">
                                                <span class="ltr:mr-2 rtl:ml-2">
                                                    <span class="avatar avatar-sm rounded-full bg-secondary/20 text-secondary p-2.5"><i class="ri-twitter-line text-xl leading-none"></i></span>
                                                </span>
                                                <span class="flex-1">
                                                    <span class="flex justify-between items-center mb-1">
                                                    <span>TTR (Twiter.com, Inc.)</span>
                                                    <span class="text-end">$15,526.01</span>
                                                    </span>
                                                    <span class="flex justify-between items-center text-xs">
                                                    <span class="text-gray-500 dark:text-white/70">1,290 shares</span>
                                                    <span class="text-success inline-flex"><i class="ti ti-trending-up ltr:mr-1 rtl:ml-1"></i>2.14%</span>
                                                    </span>
                                                </span>
                                                </span>
                                                <span class="ltr:ml-3 rtl:mr-3">
                                                <span class="hs-tooltip ti-main-tooltip">
                                                    <span
                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-light">
                                                    <i class="ri-star-line"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        Whishlist
                                                    </span>
                                                    </span>
                                                </span>
                                                </span>
                                            </span>
                                            </button>
                                            <div id="hs-basic-collapse-two" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300 px-3 pt-3"
                                            aria-labelledby="hs-basic-heading-two">
                                            <div class="flex justify-between items-center overflow-auto space-x-6 rtl:space-x-reverse">
                                                <div class="flex-1 flex items-center">
                                                <a href="javascript:void(0);" class="ti-btn ti-btn-primary h-7 w-7" data-hs-overlay="#buyStockModal">B</a>
                                                <a href="javascript:void(0);" class="ti-btn ti-btn-secondary h-7 w-7" data-hs-overlay="#sellStockModal">S</a>
                                                <span class="hs-tooltip ti-main-tooltip">
                                                    <span class="m-0 hs-tooltip-toggle relative w-7 h-7 ti-btn transition-none focus:outline-none ti-btn-light">
                                                    <i class="ti ti-chart-candle"></i>
                                                    <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700 hidden" role="tooltip" data-popper-placement="top" style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(1818px, -249px);">
                                                        Market Cap
                                                    </span>
                                                    </span>
                                                </span>
                                                </div>
                                                <div class="min-w-fit flex items-center">
                                                <p class="mb-0 ltr:mr-3 rtl:ml-3">
                                                    <span class="text-gray-500 dark:text-white/70 ltr:mr-1 rtl:ml-1">High:</span>
                                                    <span class="text-success">$20,399,08</span>
                                                </p>
                                                <p class="mb-0">
                                                    <span class="text-gray-500 dark:text-white/70 ltr:mr-1 rtl:ml-1">Low:</span>
                                                    <span class="text-danger">$11,021,36</span>
                                                </p>
                                                </div>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="hs-accordion stock-item" id="hs-basic-heading-three">
                                            <button type="button" class="hs-accordion-toggle  group py-0 inline-flex items-center gap-x-3 w-full font-medium text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                            aria-controls="hs-basic-collapse-three">
                                            <span class="flex items-center w-full">
                                                <span class="flex justify-between items-center w-full">
                                                <span class="ltr:mr-2 rtl:ml-2">
                                                    <span class="avatar avatar-sm rounded-full bg-danger/20 text-danger p-2.5"><i class="ri-netflix-line text-xl leading-none"></i></span>
                                                </span>
                                                <span class="flex-1">
                                                    <span class="flex justify-between items-center mb-1">
                                                    <span>NTFX (Netfllx.com, Inc.)</span>
                                                    <span class="text-end">$41,250.50</span>
                                                    </span>
                                                    <span class="flex justify-between items-center text-xs">
                                                    <span class="text-gray-500 dark:text-white/70">230 shares</span>
                                                    <span class="text-danger inline-flex"><i class="ti ti-trending-down ltr:mr-1 rtl:ml-1"></i>4.02%</span>
                                                    </span>
                                                </span>
                                                </span>
                                                <span class="ltr:ml-3 rtl:mr-3">
                                                <span class="hs-tooltip ti-main-tooltip">
                                                    <span
                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-light">
                                                    <i class="ri-star-fill"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        Whishlist
                                                    </span>
                                                    </span>
                                                </span>
                                                </span>
                                            </span>
                                            </button>
                                            <div id="hs-basic-collapse-three" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300 px-3 pt-3"
                                            aria-labelledby="hs-basic-heading-three">
                                            <div class="flex justify-between items-center overflow-auto space-x-6 rtl:space-x-reverse">
                                                <div class="flex-1 flex items-center">
                                                <a href="javascript:void(0);" class="ti-btn ti-btn-primary h-7 w-7" data-hs-overlay="#buyStockModal">B</a>
                                                <a href="javascript:void(0);" class="ti-btn ti-btn-secondary h-7 w-7" data-hs-overlay="#sellStockModal">S</a>
                                                <span class="hs-tooltip ti-main-tooltip">
                                                    <span class="m-0 hs-tooltip-toggle relative w-7 h-7 ti-btn transition-none focus:outline-none ti-btn-light">
                                                    <i class="ti ti-chart-candle"></i>
                                                    <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700 hidden" role="tooltip" data-popper-placement="top" style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(1818px, -249px);">
                                                        Market Cap
                                                    </span>
                                                    </span>
                                                </span>
                                                </div>
                                                <div class="min-w-fit flex items-center">
                                                <p class="mb-0 ltr:mr-3 rtl:ml-3">
                                                    <span class="text-gray-500 dark:text-white/70 ltr:mr-1 rtl:ml-1">High:</span>
                                                    <span class="text-success">$20,399,08</span>
                                                </p>
                                                <p class="mb-0">
                                                    <span class="text-gray-500 dark:text-white/70 ltr:mr-1 rtl:ml-1">Low:</span>
                                                    <span class="text-danger">$11,021,36</span>
                                                </p>
                                                </div>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="hs-accordion stock-item" id="hs-basic-heading-four">
                                            <button type="button" class="hs-accordion-toggle  group py-0 inline-flex items-center gap-x-3 w-full font-medium text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                            aria-controls="hs-basic-collapse-four">
                                            <span class="flex items-center w-full">
                                                <span class="flex justify-between items-center w-full">
                                                <span class="ltr:mr-2 rtl:ml-2">
                                                    <span class="avatar avatar-sm rounded-full bg-success/20 text-success p-2.5"><i class="ri-angularjs-line text-xl leading-none"></i></span>
                                                </span>
                                                <span class="flex-1">
                                                    <span class="flex justify-between items-center mb-1">
                                                    <span>Ang (Angular, Inc.)</span>
                                                    <span class="text-end">$30,500.15</span>
                                                    </span>
                                                    <span class="flex justify-between items-center text-xs">
                                                    <span class="text-gray-500 dark:text-white/70">325 shares</span>
                                                    <span class="text-danger inline-flex"><i class="ti ti-trending-down ltr:mr-1 rtl:ml-1"></i>2.73%</span>
                                                    </span>
                                                </span>
                                                </span>
                                                <span class="ltr:ml-3 rtl:mr-3">
                                                <span class="hs-tooltip ti-main-tooltip">
                                                    <span
                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-light">
                                                    <i class="ri-star-line"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        Whishlist
                                                    </span>
                                                    </span>
                                                </span>
                                                </span>
                                            </span>
                                            </button>
                                            <div id="hs-basic-collapse-four" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300 px-3 pt-3"
                                            aria-labelledby="hs-basic-heading-four">
                                            <div class="flex justify-between items-center overflow-auto space-x-6 rtl:space-x-reverse">
                                                <div class="flex-1 flex items-center">
                                                <a href="javascript:void(0);" class="ti-btn ti-btn-primary h-7 w-7" data-hs-overlay="#buyStockModal">B</a>
                                                <a href="javascript:void(0);" class="ti-btn ti-btn-secondary h-7 w-7" data-hs-overlay="#sellStockModal">S</a>
                                                <span class="hs-tooltip ti-main-tooltip">
                                                    <span class="m-0 hs-tooltip-toggle relative w-7 h-7 ti-btn transition-none focus:outline-none ti-btn-light">
                                                    <i class="ti ti-chart-candle"></i>
                                                    <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700 hidden" role="tooltip" data-popper-placement="top" style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(1818px, -249px);">
                                                        Market Cap
                                                    </span>
                                                    </span>
                                                </span>
                                                </div>
                                                <div class="min-w-fit flex items-center">
                                                <p class="mb-0 ltr:mr-3 rtl:ml-3">
                                                    <span class="text-gray-500 dark:text-white/70 ltr:mr-1 rtl:ml-1">High:</span>
                                                    <span class="text-success">$20,399,08</span>
                                                </p>
                                                <p class="mb-0">
                                                    <span class="text-gray-500 dark:text-white/70 ltr:mr-1 rtl:ml-1">Low:</span>
                                                    <span class="text-danger">$11,021,36</span>
                                                </p>
                                                </div>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="hs-accordion stock-item" id="hs-basic-heading-five">
                                            <button type="button" class="hs-accordion-toggle  group py-0 inline-flex items-center gap-x-3 w-full font-medium text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                            aria-controls="hs-basic-collapse-five">
                                            <span class="flex items-center w-full">
                                                <span class="flex justify-between items-center w-full">
                                                <span class="ltr:mr-2 rtl:ml-2">
                                                    <span class="avatar avatar-sm rounded-full bg-info/20 text-info p-2.5"><i class="ri-microsoft-line text-xl leading-none"></i></span>
                                                </span>
                                                <span class="flex-1">
                                                    <span class="flex justify-between items-center mb-1">
                                                    <span>MS (Micorsoft, Inc.)</span>
                                                    <span class="text-end">$1,80,520.02</span>
                                                    </span>
                                                    <span class="flex justify-between items-center text-xs">
                                                    <span class="text-gray-500 dark:text-white/70">1,523 shares</span>
                                                    <span class="text-success inline-flex"><i class="ti ti-trending-up ltr:mr-1 rtl:ml-1"></i>8.63%</span>
                                                    </span>
                                                </span>
                                                </span>
                                                <span class="ltr:ml-3 rtl:mr-3">
                                                <span class="hs-tooltip ti-main-tooltip">
                                                    <span
                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-light">
                                                    <i class="ri-star-fill"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        Whishlist
                                                    </span>
                                                    </span>
                                                </span>
                                                </span>
                                            </span>
                                            </button>
                                            <div id="hs-basic-collapse-five" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300 px-3 pt-3"
                                            aria-labelledby="hs-basic-heading-five">
                                            <div class="flex justify-between items-center overflow-auto space-x-6 rtl:space-x-reverse">
                                                <div class="flex-1 flex items-center">
                                                <a href="javascript:void(0);" class="ti-btn ti-btn-primary h-7 w-7" data-hs-overlay="#buyStockModal">B</a>
                                                <a href="javascript:void(0);" class="ti-btn ti-btn-secondary h-7 w-7" data-hs-overlay="#sellStockModal">S</a>
                                                <span class="hs-tooltip ti-main-tooltip">
                                                    <span class="m-0 hs-tooltip-toggle relative w-7 h-7 ti-btn transition-none focus:outline-none ti-btn-light">
                                                    <i class="ti ti-chart-candle"></i>
                                                    <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700 hidden" role="tooltip" data-popper-placement="top" style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(1818px, -249px);">
                                                        Market Cap
                                                    </span>
                                                    </span>
                                                </span>
                                                </div>
                                                <div class="min-w-fit flex items-center">
                                                <p class="mb-0 ltr:mr-3 rtl:ml-3">
                                                    <span class="text-gray-500 dark:text-white/70 ltr:mr-1 rtl:ml-1">High:</span>
                                                    <span class="text-success">$20,399,08</span>
                                                </p>
                                                <p class="mb-0">
                                                    <span class="text-gray-500 dark:text-white/70 ltr:mr-1 rtl:ml-1">Low:</span>
                                                    <span class="text-danger">$11,021,36</span>
                                                </p>
                                                </div>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="hs-accordion stock-item" id="hs-basic-heading-six">
                                            <button type="button" class="hs-accordion-toggle  group py-0 inline-flex items-center gap-x-3 w-full font-medium text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                            aria-controls="hs-basic-collapse-six">
                                            <span class="flex items-center w-full">
                                                <span class="flex justify-between items-center w-full">
                                                <span class="ltr:mr-2 rtl:ml-2">
                                                    <span class="avatar avatar-sm rounded-full bg-warning/20 text-warning p-2.5"><i class="ri-apple-line text-xl leading-none"></i></span>
                                                </span>
                                                <span class="flex-1">
                                                    <span class="flex justify-between items-center mb-1">
                                                    <span>AAPL (Appil, Inc.)</span>
                                                    <span class="text-end">$21,093.20</span>
                                                    </span>
                                                    <span class="flex justify-between items-center text-xs">
                                                    <span class="text-gray-500 dark:text-white/70">30 shares</span>
                                                    <span class="text-danger inline-flex"><i class="ti ti-trending-down ltr:mr-1 rtl:ml-1"></i>4.10%</span>
                                                    </span>
                                                </span>
                                                </span>
                                                <span class="ltr:ml-3 rtl:mr-3">
                                                <span class="hs-tooltip ti-main-tooltip">
                                                    <span
                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-light">
                                                    <i class="ri-star-fill"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        Whishlist
                                                    </span>
                                                    </span>
                                                </span>
                                                </span>
                                            </span>
                                            </button>
                                            <div id="hs-basic-collapse-six" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300 px-3 pt-3"
                                            aria-labelledby="hs-basic-heading-six">
                                            <div class="flex justify-between items-center overflow-auto space-x-6 rtl:space-x-reverse">
                                                <div class="flex-1 flex items-center">
                                                <a href="javascript:void(0);" class="ti-btn ti-btn-primary h-7 w-7" data-hs-overlay="#buyStockModal">B</a>
                                                <a href="javascript:void(0);" class="ti-btn ti-btn-secondary h-7 w-7" data-hs-overlay="#sellStockModal">S</a>
                                                <span class="hs-tooltip ti-main-tooltip">
                                                    <span class="m-0 hs-tooltip-toggle relative w-7 h-7 ti-btn transition-none focus:outline-none ti-btn-light">
                                                    <i class="ti ti-chart-candle"></i>
                                                    <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700 hidden" role="tooltip" data-popper-placement="top" style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(1818px, -249px);">
                                                        Market Cap
                                                    </span>
                                                    </span>
                                                </span>
                                                </div>
                                                <div class="min-w-fit flex items-center">
                                                <p class="mb-0 ltr:mr-3 rtl:ml-3">
                                                    <span class="text-gray-500 dark:text-white/70 ltr:mr-1 rtl:ml-1">High:</span>
                                                    <span class="text-success">$20,399,08</span>
                                                </p>
                                                <p class="mb-0">
                                                    <span class="text-gray-500 dark:text-white/70 ltr:mr-1 rtl:ml-1">Low:</span>
                                                    <span class="text-danger">$11,021,36</span>
                                                </p>
                                                </div>
                                            </div>
                                            </div>
                                        </div>

                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-2 -->

                            <!-- Start::row-3 -->
                            <div class="grid grid-cols-12 gap-x-5">
                                <div class="col-span-12 md:col-span-6 xxl:col-span-3">
                                    <div class="box">
                                    <div class="box-body">
                                        <div class="flex relative mb-4">
                                        <a aria-label="anchor" href="javascript:void(0);" class="absolute h-full w-full inset-0"></a>
                                        <a aria-label="anchor" href="javascript:void(0);" class="ltr:pr-2 rtl:pl-2">
                                            <span class="avatar rounded-sm bg-primary/20 text-primary p-2.5"><i class="ri-apple-line text-2xl leading-none"></i></span>
                                        </a>
                                        <div class="flex-1">
                                            <div class="flex justify-between items-center mb-1 text-sm">
                                            <span class="text-base font-semibold text-gray-800 dark:text-white">Apple</span>
                                            <span class="text-success text-end inline-flex"><i class="ti ti-trending-up text-xs ltr:mr-1 rtl:ml-1"></i>0.14%</span>
                                            </div>
                                            <div class="flex justify-between items-center text-xs">
                                            <span class="text-gray-500 dark:text-white/70">$12,289.44</span>
                                            <span class="text-success text-end">+$1,780.80</span>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="flex items-center">
                                        <a href="javascript:void(0);" class="flex-1 m-0 py-1 ti-btn ti-btn-soft-light ltr:mr-2 rtl:ml-2">Short</a>
                                        <a href="javascript:void(0);" class="flex-1 m-0 py-1 ti-btn ti-btn-soft-primary">Buy</a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-span-12 md:col-span-6 xxl:col-span-3">
                                    <div class="box">
                                    <div class="box-body">
                                        <div class="flex relative mb-4">
                                        <a aria-label="anchor" href="javascript:void(0);" class="absolute h-full w-full inset-0"></a>
                                        <a aria-label="anchor" href="javascript:void(0);" class="ltr:pr-2 rtl:pl-2">
                                            <span class="avatar rounded-sm bg-secondary/20 text-secondary p-2.5"><i class="ri-bit-coin-line text-2xl leading-none"></i></span>
                                        </a>
                                        <div class="flex-1">
                                            <div class="flex justify-between items-center mb-1 text-sm">
                                            <span class="text-base font-semibold text-gray-800 dark:text-white">Bitcion</span>
                                            <span class="text-success text-end inline-flex"><i class="ti ti-trending-up text-xs ltr:mr-1 rtl:ml-1"></i>2.14%</span>
                                            </div>
                                            <div class="flex justify-between items-center text-xs">
                                            <span class="text-gray-500 dark:text-white/70">$58,151.02</span>
                                            <span class="text-success text-end">+$5,745.62</span>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="flex items-center">
                                        <a href="javascript:void(0);" class="flex-1 m-0 py-1 ti-btn ti-btn-soft-light ltr:mr-2 rtl:ml-2">Short</a>
                                        <a href="javascript:void(0);" class="flex-1 m-0 py-1 ti-btn ti-btn-soft-primary">Buy</a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-span-12 md:col-span-6 xxl:col-span-3">
                                    <div class="box">
                                    <div class="box-body">
                                        <div class="flex relative mb-4">
                                        <a aria-label="anchor" href="javascript:void(0);" class="absolute h-full w-full inset-0"></a>
                                        <a aria-label="anchor" href="javascript:void(0);" class="ltr:pr-2 rtl:pl-2">
                                            <span class="avatar rounded-sm bg-danger/20 text-danger p-2.5"><i class="ri-camera-lens-line text-2xl leading-none"></i></span>
                                        </a>
                                        <div class="flex-1">
                                            <div class="flex justify-between items-center mb-1 text-sm">
                                            <span class="text-base font-semibold text-gray-800 dark:text-white">Telsa</span>
                                            <span class="text-success text-end inline-flex"><i class="ti ti-trending-up text-xs ltr:mr-1 rtl:ml-1"></i>4.02%</span>
                                            </div>
                                            <div class="flex justify-between items-center text-xs">
                                            <span class="text-gray-500 dark:text-white/70">$14,452.36</span>
                                            <span class="text-success text-end">+$4,125.63</span>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="flex items-center">
                                        <a href="javascript:void(0);" class="flex-1 m-0 py-1 ti-btn ti-btn-soft-light ltr:mr-2 rtl:ml-2">Short</a>
                                        <a href="javascript:void(0);" class="flex-1 m-0 py-1 ti-btn ti-btn-soft-primary">Buy</a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-span-12 md:col-span-6 xxl:col-span-3">
                                    <div class="box">
                                    <div class="box-body">
                                        <div class="flex relative mb-4">
                                        <a aria-label="anchor" href="javascript:void(0);" class="absolute h-full w-full inset-0"></a>
                                        <a aria-label="anchor" href="javascript:void(0);" class="ltr:pr-2 rtl:pl-2">
                                            <span class="avatar rounded-sm bg-warning/20 text-warning p-2.5"><i class="ri-gift-line text-2xl leading-none"></i></span>
                                        </a>
                                        <div class="flex-1">
                                            <div class="flex justify-between items-center mb-1 text-sm">
                                            <span class="text-base font-semibold text-gray-800 dark:text-white">Amozan</span>
                                            <span class="text-success text-end inline-flex"><i class="ti ti-trending-up text-xs ltr:mr-1 rtl:ml-1"></i>5.14%</span>
                                            </div>
                                            <div class="flex justify-between items-center text-xs">
                                            <span class="text-gray-500 dark:text-white/70">$63,251.11</span>
                                            <span class="text-success text-end">+$9,36.20</span>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="flex items-center">
                                        <a href="javascript:void(0);" class="flex-1 m-0 py-1 ti-btn ti-btn-soft-light ltr:mr-2 rtl:ml-2">Short</a>
                                        <a href="javascript:void(0);" class="flex-1 m-0 py-1 ti-btn ti-btn-soft-primary">Buy</a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-3 -->

                            <!-- Start::row-4 -->
                            <div class="grid grid-cols-12 gap-x-5">
                                <div class="col-span-12 xl:col-span-5">
                                    <div class="box">
                                    <div class="box-header">
                                        <div class="flex">
                                        <h5 class="box-title my-auto">Transaction History</h5>
                                        <div class="hs-dropdown ti-dropdown block ltr:ml-auto rtl:mr-auto my-auto">
                                            <button type="button" class="hs-dropdown-toggle ti-dropdown-toggle rounded-sm p-1 px-3 !border border-gray-200 text-gray-400 hover:text-gray-500 hover:bg-gray-200 hover:border-gray-200 focus:ring-gray-200  dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                                            All <i class="ti ti-chevron-down"></i></button>
                                            <div class="hs-dropdown-menu ti-dropdown-menu hidden">
                                            <a class="ti-dropdown-item" href="javascript:void(0)">All</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0)">Buy</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0)">Sell</a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="box-body p-0">
                                        <div class="overflow-auto">
                                        <table class="ti-custom-table ti-custom-table-head">
                                            <thead>
                                            <tr>
                                                <th scope="col" class="text-center ">Symbol</th>
                                                <th scope="col" class="">Date</th>
                                                <th scope="col" class="">Type</th>
                                                <th scope="col" class="">Amount</th>
                                                <th scope="col" class="">Shares</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="">EPA:THI</td>
                                                <td class="">12-06-2023</td>
                                                <td class=""><span class="badge leading-none bg-success/10 text-success rounded-sm">Buy</span></td>
                                                <td class=""><span class="text-danger">-$1,290</span></td>
                                                <td class=""><span class="text-success">+20</span></td>
                                            </tr>
                                            <tr>
                                                <td class="">EPA:SCB</td>
                                                <td class="">11-06-2023</td>
                                                <td class=""><span class="badge leading-none bg-success/10 text-success rounded-sm">Buy</span></td>
                                                <td class=""><span class="text-danger">-$2,150</span></td>
                                                <td class=""><span class="text-success">+15</span></td>
                                            </tr>
                                            <tr>
                                                <td class="">EPA:CGIO</td>
                                                <td class="">11-06-2023</td>
                                                <td class=""><span class="badge leading-none bg-danger/10 text-danger rounded-sm">Sell</span></td>
                                                <td class=""><span class="text-success">+$22,625</span></td>
                                                <td class=""><span class="text-danger">-12</span></td>
                                            </tr>
                                            <tr>
                                                <td class="">EPA:NTIX</td>
                                                <td class="">05-06-2023</td>
                                                <td class=""><span class="badge leading-none bg-success/10 text-success rounded-sm">Buy</span></td>
                                                <td class=""><span class="text-danger">-$3,680</span></td>
                                                <td class=""><span class="text-success">+36</span></td>
                                            </tr>
                                            <tr>
                                                <td class="">EPA:MOD</td>
                                                <td class="">20-05-2023</td>
                                                <td class=""><span class="badge leading-none bg-danger/10 text-danger rounded-sm">Sell</span></td>
                                                <td class=""><span class="text-success">+$30,750</span></td>
                                                <td class=""><span class="text-danger">-25</span></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-span-12 xl:col-span-7">
                                    <div class="box">
                                    <div class="box-header">
                                        <div class="flex">
                                        <h5 class="box-title my-auto">Market Movers</h5>
                                        <div class="hs-dropdown ti-dropdown block ltr:ml-auto rtl:mr-auto my-auto">
                                            <button type="button" class="hs-dropdown-toggle ti-dropdown-toggle rounded-sm p-1 px-3 !border border-gray-200 text-gray-400 hover:text-gray-500 hover:bg-gray-200 hover:border-gray-200 focus:ring-gray-200  dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                                            All <i class="ti ti-chevron-down"></i></button>
                                            <div class="hs-dropdown-menu ti-dropdown-menu hidden">
                                            <a class="ti-dropdown-item" href="javascript:void(0)">All</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0)">Gainers</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0)">Losers</a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="box-body p-0">
                                        <div class="overflow-auto">
                                        <table class="ti-custom-table ti-custom-table-head">
                                            <thead>
                                            <tr>
                                                <th scope="col" class="text-center">Symbol</th>
                                                <th scope="col" class="">Name</th>
                                                <th scope="col" class="">Price</th>
                                                <th scope="col" class="whitespace-nowrap">1D Change</th>
                                                <th scope="col" class="whitespace-nowrap">1D Returns %</th>
                                                <th scope="col" class="">Volume</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="">APPL</td>
                                                <td class="">App1e Inc. <span class="text-xs text-primary ltr:ml-1 rtl:mr-1">NASDAQ</span></td>
                                                <td class=" inline-flex">$1,116.90 <i class="ti ti-trending-up text-success text-xs ltr:ml-1 rtl:mr-1"></i></td>
                                                <td class=""><span class="text-success">$28.9	</span></td>
                                                <td class=""><span class="text-success">6.8%</span></td>
                                                <td class="">12,389.30</td>
                                            </tr>
                                            <tr>
                                                <td class="">TTR</td>
                                                <td class="">Twiter.com Inc. <span class="text-xs text-primary ltr:ml-1 rtl:mr-1">NYSE</span></td>
                                                <td class="inline-flex">$993.21 <i class="ti ti-trending-up text-success text-xs ltr:ml-1 rtl:mr-1"></i></td>
                                                <td class=""><span class="text-success">$11.6</span></td>
                                                <td class=""><span class="text-success">10.25%</span></td>
                                                <td class="">32,125.03</td>
                                            </tr>
                                            <tr>
                                                <td class="">BS</td>
                                                <td class="">Boostrap.com <span class="text-xs text-primary ltr:ml-1 rtl:mr-1">NSE</span></td>
                                                <td class="inline-flex">$11.00 <i class="ti ti-trending-down text-danger text-xs ltr:ml-1 rtl:mr-1"></i></td>
                                                <td class=""><span class="text-danger">$16.0</span></td>
                                                <td class=""><span class="text-danger">9.0%</span></td>
                                                <td class="">27,911.16</td>
                                            </tr>
                                            <tr>
                                                <td class="">NFLX</td>
                                                <td class="">Netfilx.com Inc.,<span class="text-xs text-primary ltr:ml-1 rtl:mr-1">LSE</span></td>
                                                <td class="inline-flex">$161.72 <i class="ti ti-trending-down text-danger text-xs ltr:ml-1 rtl:mr-1"></i></td>
                                                <td class=""><span class="text-danger">$9.8</span></td>
                                                <td class=""><span class="text-danger">17.8%</span></td>
                                                <td class="">27,161.89</td>
                                            </tr>
                                            <tr>
                                                <td class="">ION</td>
                                                <td class="">Ion.com Corp.,<span class="text-xs text-primary ltr:ml-1 rtl:mr-1">FSX</span></td>
                                                <td class="inline-flex">$52.656<i class="ti ti-trending-up text-success text-xs ltr:ml-1 rtl:mr-1"></i></td>
                                                <td class=""><span class="text-success">$14.2</span></td>
                                                <td class=""><span class="text-success">30.2%</span></td>
                                                <td class="">65,785.01</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-4 -->

                        </div>
                        <!-- Start::main-content -->

                        <!-- Buy Stock modal -->
                        <div id="buyStockModal" class="hs-overlay hidden ti-modal">
                            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 lg:!mx-auto">
                            <div class="ti-modal-content">
                                <div class="ti-modal-header">
                                <div class="ltr:mr-2 rtl:ml-2">
                                                    <span class="avatar avatar-sm rounded-full bg-primary/20 text-primary p-2.5"><i class="ri-github-line text-xl leading-none"></i></span>
                                                </div>
                                                <div class="flex-1 flex justify-between items-center">
                                                    <div class="">
                                                        <p class="mb-0 text-gray-800 dark:text-white font-semibold">Gituhb, Demo Inc.</p>
                                                        <span class="text-xs text-gray-500 dark:text-white/70">GTHB <i class="ri-checkbox-blank-circle-fill text-[3px]"></i> NSE</span>
                                                    </div>
                                                    <div class="flex-1 text-end">
                                                        <span class="text-gray-800 dark:text-white font-semibold">$12,390.02<span class="text-success ltr:ml-2 rtl:mr-2 text-xs"><i class="ti ti-trending-up ltr:mr-1 rtl:ml-1"></i>0.14%</span></span>
                                                        <p class="mb-0 mt-1 text-gray-500 dark:text-white/70 text-xs">16-06-2022 <i class="ri-checkbox-blank-circle-fill text-[3px]"></i> 14:17 <i class="ri-checkbox-blank-circle-fill text-[3px]"></i> Live</p>
                                                    </div>
                                                </div>
                                </div>
                                <div class="ti-modal-body !p-0">
                                <div class="px-3 py-2 border-b border-gray-200 dark:border-white/10 bg-gray-100 dark:bg-black/20 flex items-center">
                                                    <p class="mb-0 ltr:mr-0 rtl:ml-0 flex-1 text-start">
                                                        <span class="text-gray-500 dark:text-white/70 ltr:mr-1 rtl:ml-1">Avg. Bid Price:</span>
                                                        <span class="text-primary">~$12,578</span>
                                                    </p>
                                                    <p class="mb-0 ltr:mr-3 rtl:ml-3 text-end">
                                                        <span class="text-gray-500 dark:text-white/70 ltr:mr-1 rtl:ml-1">Open:</span>
                                                        <span class="text-info">$20,399</span>
                                                    </p>
                                                    <p class="mb-0 ltr:mr-3 rtl:ml-3 text-end">
                                                        <span class="text-gray-500 dark:text-white/70 ltr:mr-1 rtl:ml-1">High:</span>
                                                        <span class="text-success">$20,399</span>
                                                    </p>
                                                    <p class="mb-0 ltr:mr-3 rtl:ml-3 text-end">
                                                        <span class="text-gray-500 dark:text-white/70 ltr:mr-1 rtl:ml-1">Low:</span>
                                                        <span class="text-secondary">$20,399</span>
                                                    </p>
                                                    <p class="mb-0 ltr:mr-3 rtl:ml-3 text-end">
                                                        <span class="text-gray-500 dark:text-white/70 ltr:mr-1 rtl:ml-1">Close:</span>
                                                        <span class="text-danger">$20,399</span>
                                                    </p>
                                                    <p class="mb-0 ltr:mr-0 rtl:ml-0 text-end">
                                                        <span class="text-gray-500 dark:text-white/70 ltr:mr-1 rtl:ml-1">Vol:</span>
                                                        <span class="text-warning">$20,399</span>
                                                    </p>
                                                </div>

                                <div class="hs-accordion-group border-b border-gray-200 dark:border-white/10">

                                    <div class="hs-accordion p-3" id="hs-basic-heading-1">
                                    <button
                                        class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:pb-3 group inline-flex items-center gap-x-3 w-full font-medium text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                        aria-controls="hs-basic-collapse-1" type="button">
                                        <span class="text-primary ltr:ml-auto rtl:mr-auto">Market Depth</span>
                                    </button>
                                    <div id="hs-basic-collapse-1"
                                        class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                        aria-labelledby="hs-basic-heading-1">
                                        <div class="flex items-center w-full space-x-6 rtl:space-x-reverse">
                                        <div class="overflow-hidden">
                                            <table class="ti-custom-table ti-custom-table-head">
                                            <thead>
                                                <tr>
                                                <th scope="col">Qty</th>
                                                <th scope="col">Orders</th>
                                                <th scope="col" class="!text-end">Bid</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <td class="text-success">20</td>
                                                <td>2</td>
                                                <td>$12,908</td>
                                                </tr>
                                                <tr>
                                                <td class="text-success">12</td>
                                                <td>1</td>
                                                <td>$20,632</td>
                                                </tr>
                                                <tr>
                                                <td class="text-success">36</td>
                                                <td>1</td>
                                                <td>$19,102</td>
                                                </tr>
                                                <tr>
                                                <td class="text-success">10</td>
                                                <td>3</td>
                                                <td>$16,650</td>
                                                </tr>
                                                <tr>
                                                <td class="text-success">15</td>
                                                <td>2</td>
                                                <td>$18,850</td>
                                                </tr>
                                            </tbody>
                                            </table>
                                        </div>
                                        <div class="overflow-hidden">
                                            <table class="ti-custom-table ti-custom-table-head">
                                            <thead>
                                                <tr>
                                                <th scope="col">Qty</th>
                                                <th scope="col">Orders</th>
                                                <th scope="col" class="!text-end">Offers</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <td class="text-danger">20</td>
                                                <td>2</td>
                                                <td>$12,908</td>
                                                </tr>
                                                <tr>
                                                <td class="text-danger">12</td>
                                                <td>1</td>
                                                <td>$20,632</td>
                                                </tr>
                                                <tr>
                                                <td class="text-danger">36</td>
                                                <td>1</td>
                                                <td>$19,102</td>
                                                </tr>
                                                <tr>
                                                <td class="text-danger">10</td>
                                                <td>3</td>
                                                <td>$16,650</td>
                                                </tr>
                                                <tr>
                                                <td class="text-danger">15</td>
                                                <td>2</td>
                                                <td>$18,850</td>
                                                </tr>
                                            </tbody>
                                            </table>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>

                                <div class="p-3 space-y-4">
                                    <p class="mb-0 flex justify-between items-center">
                                    <span>Buy Order</span>
                                    <span>Avl. Balance:<span class="text-primary ltr:ml-1 rtl:mr-1">$11,25,250.00</span></span>
                                    </p>
                                    <div class="grid grid-cols-12 gap-x-5">
                                    <div class="col-span-3">
                                        <label class="ti-form-label">Quantity</label>
                                        <input type="text" class="ti-form-input" placeholder="Quantity">
                                    </div>
                                    <div class="col-span-3">
                                        <label class="ti-form-label">Trigger Price </label>
                                        <input type="text" class="ti-form-input" placeholder="0.0">
                                    </div>
                                    <div class="col-span-3">
                                        <label class="ti-form-label">Total Price</label>
                                        <input type="text" class="ti-form-input" placeholder="Price">
                                    </div>
                                    </div>
                                    <p class="mb-0">Sell Stop Loss Order</p>
                                    <div class="grid grid-cols-12 gap-x-5">
                                    <div class="col-span-3">
                                        <label class="ti-form-label">Trigger Price </label>
                                        <input type="text" class="ti-form-input" placeholder="0.0">
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="ti-modal-footer">
                                <a class="ti-btn ti-btn-primary"
                                    href="javascript:void(0);">
                                    Buy Now
                                </a>
                                <button type="button"
                                    class="hs-dropdown-toggle ti-btn ti-btn-danger"
                                    data-hs-overlay="#buyStockModal">
                                    Cancel
                                </button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <!--End Buy Stock modal -->

                        <!-- sell Stock modal -->
                        <div id="sellStockModal" class="hs-overlay hidden ti-modal">
                            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 lg:!mx-auto">
                            <div class="ti-modal-content">
                                <div class="ti-modal-header">
                                <div class="ltr:mr-2 rtl:ml-2">
                                                    <span class="avatar avatar-sm rounded-full bg-secondary/20 text-secondary p-2.5"><i class="ri-github-line text-xl leading-none"></i></span>
                                                </div>
                                                <div class="flex-1 flex justify-between items-center">
                                                    <div class="">
                                                        <p class="mb-0 text-gray-800 dark:text-white font-semibold">Gituhb, Demo Inc.</p>
                                                        <span class="text-xs text-gray-500 dark:text-white/70">GTHB <i class="ri-checkbox-blank-circle-fill text-[3px]"></i> NSE</span>
                                                    </div>
                                                    <div class="flex-1 text-end">
                                                        <span class="text-gray-800 dark:text-white font-semibold">$12,390.02<span class="text-success ltr:ml-2 rtl:mr-2 text-xs"><i class="ti ti-trending-up ltr:mr-1 rtl:ml-1"></i>0.14%</span></span>
                                                        <p class="mb-0 mt-1 text-gray-500 dark:text-white/70 text-xs">16-06-2022 <i class="ri-checkbox-blank-circle-fill text-[3px]"></i> 14:17 <i class="ri-checkbox-blank-circle-fill text-[3px]"></i> Live</p>
                                                    </div>
                                                </div>
                                </div>
                                <div class="ti-modal-body !p-0">
                                <div class="px-3 py-2 border-b border-gray-200 dark:border-white/10 bg-gray-100 dark:bg-black/20 flex items-center">
                                                    <p class="mb-0 ltr:mr-0 rtl:ml-0 flex-1 text-start">
                                                        <span class="text-gray-500 dark:text-white/70 ltr:mr-1 rtl:ml-1">Avg. Ask Price:</span>
                                                        <span class="text-primary">~$12,578</span>
                                                    </p>
                                                    <p class="mb-0 ltr:mr-3 rtl:ml-3 text-end">
                                                        <span class="text-gray-500 dark:text-white/70 ltr:mr-1 rtl:ml-1">Open:</span>
                                                        <span class="text-info">$20,399</span>
                                                    </p>
                                                    <p class="mb-0 ltr:mr-3 rtl:ml-3 text-end">
                                                        <span class="text-gray-500 dark:text-white/70 ltr:mr-1 rtl:ml-1">High:</span>
                                                        <span class="text-success">$20,399</span>
                                                    </p>
                                                    <p class="mb-0 ltr:mr-3 rtl:ml-3 text-end">
                                                        <span class="text-gray-500 dark:text-white/70 ltr:mr-1 rtl:ml-1">Low:</span>
                                                        <span class="text-secondary">$20,399</span>
                                                    </p>
                                                    <p class="mb-0 ltr:mr-3 rtl:ml-3 text-end">
                                                        <span class="text-gray-500 dark:text-white/70 ltr:mr-1 rtl:ml-1">Close:</span>
                                                        <span class="text-danger">$20,399</span>
                                                    </p>
                                                    <p class="mb-0 ltr:mr-0 rtl:ml-0 text-end">
                                                        <span class="text-gray-500 dark:text-white/70 ltr:mr-1 rtl:ml-1">Vol:</span>
                                                        <span class="text-warning">$20,399</span>
                                                    </p>
                                                </div>

                                <div class="hs-accordion-group border-b border-gray-200 dark:border-white/10">

                                    <div class="hs-accordion p-3" id="hs-basic-heading-2">
                                    <button
                                        class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:pb-3 group inline-flex items-center gap-x-3 w-full font-medium text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                        aria-controls="hs-basic-collapse-2" type="button">
                                        <span class="text-primary ltr:ml-auto rtl:mr-auto">Market Depth</span>
                                    </button>
                                    <div id="hs-basic-collapse-2"
                                        class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                        aria-labelledby="hs-basic-heading-2">
                                        <div class="flex items-center w-full space-x-6 rtl:space-x-reverse">
                                        <div class="overflow-hidden">
                                            <table class="ti-custom-table ti-custom-table-head">
                                            <thead>
                                                <tr>
                                                <th scope="col">Qty</th>
                                                <th scope="col">Orders</th>
                                                <th scope="col" class="!text-end">Bid</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <td class="text-success">20</td>
                                                <td>2</td>
                                                <td>$12,908</td>
                                                </tr>
                                                <tr>
                                                <td class="text-success">12</td>
                                                <td>1</td>
                                                <td>$20,632</td>
                                                </tr>
                                                <tr>
                                                <td class="text-success">36</td>
                                                <td>1</td>
                                                <td>$19,102</td>
                                                </tr>
                                                <tr>
                                                <td class="text-success">10</td>
                                                <td>3</td>
                                                <td>$16,650</td>
                                                </tr>
                                                <tr>
                                                <td class="text-success">15</td>
                                                <td>2</td>
                                                <td>$18,850</td>
                                                </tr>
                                            </tbody>
                                            </table>
                                        </div>
                                        <div class="overflow-hidden">
                                            <table class="ti-custom-table ti-custom-table-head">
                                            <thead>
                                                <tr>
                                                <th scope="col">Qty</th>
                                                <th scope="col">Orders</th>
                                                <th scope="col" class="!text-end">Offers</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <td class="text-danger">20</td>
                                                <td>2</td>
                                                <td>$12,908</td>
                                                </tr>
                                                <tr>
                                                <td class="text-danger">12</td>
                                                <td>1</td>
                                                <td>$20,632</td>
                                                </tr>
                                                <tr>
                                                <td class="text-danger">36</td>
                                                <td>1</td>
                                                <td>$19,102</td>
                                                </tr>
                                                <tr>
                                                <td class="text-danger">10</td>
                                                <td>3</td>
                                                <td>$16,650</td>
                                                </tr>
                                                <tr>
                                                <td class="text-danger">15</td>
                                                <td>2</td>
                                                <td>$18,850</td>
                                                </tr>
                                            </tbody>
                                            </table>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>

                                <div class="p-3 space-y-4">
                                    <p class="mb-0 flex justify-between items-center">
                                    <span>Buy Order</span>
                                    <span>Avl. Balance:<span class="text-primary ltr:ml-1 rtl:mr-1">$11,25,250.00</span></span>
                                    </p>
                                    <div class="grid grid-cols-12 gap-x-5">
                                    <div class="col-span-3">
                                        <label class="ti-form-label">Quantity</label>
                                        <input type="text" class="ti-form-input" placeholder="Quantity">
                                    </div>
                                    <div class="col-span-3">
                                        <label class="ti-form-label">Trigger Price </label>
                                        <input type="text" class="ti-form-input" placeholder="0.0">
                                    </div>
                                    <div class="col-span-3">
                                        <label class="ti-form-label">Total Price</label>
                                        <input type="text" class="ti-form-input" placeholder="Price">
                                    </div>
                                    </div>
                                    <p class="mb-0">Sell Stop Loss Order</p>
                                    <div class="grid grid-cols-12 gap-x-5">
                                    <div class="col-span-3">
                                        <label class="ti-form-label">Trigger Price </label>
                                        <input type="text" class="ti-form-input" placeholder="0.0">
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="ti-modal-footer">
                                <a class="ti-btn ti-btn-secondary"
                                    href="javascript:void(0);">
                                Sell Now
                                </a>
                                <button type="button"
                                    class="hs-dropdown-toggle ti-btn ti-btn-danger"
                                    data-hs-overlay="#sellStockModal">
                                    Cancel
                                </button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <!--End sell Stock modal -->
                    </div>     

@endsection

@section('scripts')

        <!-- APEX CHARTS JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- INDEX JS -->
        @vite('resources/assets/js/index-11.js')


@endsection