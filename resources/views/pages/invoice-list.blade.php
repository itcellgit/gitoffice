@extends('layouts.master')

@section('styles')

        <!-- FLATPICKR CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/flatpickr/flatpickr.min.css')}}">

        <!-- CHOICES CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/choices.js/public/assets/styles/choices.min.css')}}">

@endsection

@section('content')

                    <div class="content">

                        <!-- Start::main-content -->
                        <div class="main-content">

                            <!-- Page Header -->
                            <div class="block justify-between page-header sm:flex">
                                <div>
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Invoice List</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                    <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Pages
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                    </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        Invoice List
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-6">
                                <div class="col-span-12">
                                    <div class="box">
                                        <div class="box-header lg:flex lg:justify-between">
                                            <h5 class="box-title my-auto">Invoice List</h5>
                                            <a href="javascript:void(0);" class="ti-btn ti-btn-primary hs-dropdown-toggle m-0 py-2" id="invoice-create"
                                                data-hs-overlay="#invoice-modal"><i class="ri ri-add-line"></i>Create Invoice</a>
                                        </div>
                                        <div class="box-body">
                                            <div class="xl:flex xl:justify-between space-y-3 xl:space-y-0">
                                                <div class="sm:flex sm:space-x-3 space-y-3 sm:space-y-0 rtl:space-x-reverse">
                                                    <div class="relative max-w-xs">
                                                        <label for="hs-table-search" class="sr-only">Search</label>
                                                        <input type="text" name="hs-table-search" id="hs-table-search"
                                                            class="px-3 py-2 ltr:pr-10 rtl:pl-10 ti-form-input" placeholder="Search for items">
                                                        <div
                                                            class="absolute inset-y-0 ltr:right-0 rtl:left-0 flex items-center pointer-events-none ltr:pr-4 rtl:pl-4">
                                                            <i class="ri-search-line text-gray-500 dark:text-white/70"></i>
                                                        </div>
                                                    </div>
                                                    <button aria-label="button" type="button"
                                                        class="ti-btn px-3 py-2 ti-btn-outline border-gray-200 text-gray-500 dark:text-white/70 hover:text-white hover:bg-gray-500 hover:border-gray-500 focus:ring-gray-200  dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10 m-0">
                                                        <i class="ri-refresh-line leading-none text-lg"></i>
                                                    </button>
                                                    <button aria-label="button" type="button" id="delete-btn" class="ti-btn px-3 py-2 ti-btn-danger m-0">
                                                        <i class="ri-delete-bin-7-line leading-none text-lg"></i>
                                                    </button>
                                                </div>
                                                <div class="sm:space-x-3 sm:flex space-y-3 sm:space-y-0 rtl:space-x-reverse">
                                                    <div class="inline-flex">
                                                        <div
                                                            class="px-4 py-2 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                            <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                    class="ri ri-calendar-line"></i></span>
                                                        </div>

                                                        <input type="text"
                                                            class="px-3 py-2 ti-form-input ltr:rounded-l-none rtl:rounded-r-none focus:z-10 flatpickr-input"
                                                            id="daterange" placeholder="Filter By Date" readonly>
                                                    </div>
                                                    <div class="hs-dropdown ti-dropdown">
                                                        <button id="hs-dropdown-transform-style" type="button"
                                                            class="px-3 py-2 hs-dropdown-toggle ti-dropdown-toggle">
                                                            All Invoices
                                                            <svg class="hs-dropdown-open:rotate-180 ti-dropdown-caret" width="16"
                                                                height="16" viewBox="0 0 16 16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                            </svg>
                                                        </button>

                                                        <div aria-labelledby="hs-dropdown-transform-style" data-hs-transition class="hs-dropdown-menu hidden z-10 hs-dropdown-open:ease-in hs-dropdown-open:opacity-100 hs-dropdown-open:scale-100 transition ease-out scale-95 duration-200 origin-top-left ti-dropdown-menu">
                                                        <a class="ti-dropdown-item" href="javascript:void(0);">
                                                                All Invoices
                                                            </a>
                                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                                Paid Invoices
                                                            </a>
                                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                                Unpaid Invoices
                                                            </a>
                                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                                Draft Invoices
                                                            </a>
                                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                                Overdue Invoices
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-5 table-bordered rounded-sm ti-custom-table-head overflow-auto">
                                                <table class="ti-custom-table ti-custom-table-head edit-table whitespace-nowrap text-center">
                                                    <thead class="bg-gray-50 dark:bg-black/20">
                                                        <tr class="cart-box">
                                                            <th scope="col" class="dark:text-white/70">
                                                                <div class="flex leading-[0] justify-center">
                                                                    <input type="checkbox"
                                                                        class="border-gray-500 ti-form-checkbox mt-0.5 check-all"
                                                                        id="hs-default-checkbox">
                                                                    <label for="hs-default-checkbox"
                                                                        class="text-sm text-gray-500 dark:text-white/70"></label>
                                                                </div>
                                                            </th>
                                                            <th scope="col" class="dark:text-white/70">Invoice Id</th>
                                                            <th scope="col" class="dark:text-white/70">Customer</th>
                                                            <th scope="col" class="dark:text-white/70">Created Date</th>
                                                            <th scope="col" class="dark:text-white/70">Due Date</th>
                                                            <th scope="col" class="dark:text-white/70">Status</th>
                                                            <th scope="col" class="dark:text-white/70">payment Mode</th>
                                                            <th scope="col" class="dark:text-white/70">Amount</th>
                                                            <th scope="col" class="dark:text-white/70">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="invoice-list">
                                                            <td class="">
                                                                <div class="flex items-center h-5 invoice-checkbox justify-center">
                                                                    <input id="invoice-check-1" type="checkbox"
                                                                        class="border-gray-500 ti-form-checkbox">
                                                                    <label for="invoice-check-1" class="sr-only">Checkbox</label>
                                                                </div>
                                                            </td>
                                                            <td>#IN5252155</td>
                                                            <td>
                                                                <div class="flex space-x-3 rtl:space-x-reverse text-start min-w-[220px] truncate">
                                                                    <img class="avatar avatar-sm rounded-sm"
                                                                        src="{{asset('build/assets/img/users/2.jpg')}}" alt="Image Description">
                                                                    <div class="block">
                                                                        <p class="block text-sm font-semibold text-gray-800 dark:text-white my-auto">Socrates Itumay</p>
                                                                        <p class="block text-xs text-gray-500 dark:text-white/70 my-auto">socratesitumany@abc.com</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>25-09-2022</td>
                                                            <td>15-10-2022</td>
                                                            <td><span class="truncate whitespace-nowrap inline-block py-1 px-3 rounded-full text-xs font-medium bg-success/10 text-success/80">Paid</span></td>
                                                            <td>Card</td>
                                                            <td>$999</td>
                                                            <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <a href="javascript:void(0);"
                                                                    class="m-0 hs-tooltip-toggle relative  w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                                        <i class="ti ti-send"></i>
                                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                            role="tooltip">
                                                                            Send
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <a href="javascript:void(0);" onclick="changeTheInfo('Edit Invoice','Socrates Itumay','P.O. Box 283 8562 Fusce Rd., 20620','socratesitumany@abc.com','#IN5252155','25-10-2022','25-11-2022')"
                                                                        data-hs-overlay="#invoice-modal" class="invoice-edit m-0 hs-tooltip-toggle relative  w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                                        <i class="ti ti-pencil"></i>
                                                                        <span
                                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                            role="tooltip">
                                                                            Edit
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <a href="javascript:void(0);"
                                                                        class="invoice-btn m-0 hs-tooltip-toggle relative  w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                                        <i class="ti ti-trash"></i>
                                                                        <span
                                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                            role="tooltip">
                                                                            Delete
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="invoice-list">
                                                            <td class="">
                                                                <div class="flex items-center h-5 invoice-checkbox justify-center">
                                                                    <input id="invoice-check-2" type="checkbox"
                                                                        class="border-gray-500 ti-form-checkbox">
                                                                    <label for="invoice-check-2" class="sr-only">Checkbox</label>
                                                                </div>
                                                            </td>
                                                            <td>#IN2363363</td>
                                                            <td>
                                                                <div class="flex space-x-3 rtl:space-x-reverse text-start min-w-[220px] truncate">
                                                                    <img class="avatar avatar-sm rounded-sm"
                                                                        src="{{asset('build/assets/img/users/3.jpg')}}" alt="Image Description">
                                                                    <div class="block">
                                                                        <p class="block text-sm font-semibold text-gray-800 dark:text-white my-auto">Json Taylor</p>
                                                                        <p class="block text-xs text-gray-500 dark:text-white/70 my-auto">jsontaylor2416@gmail.com</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>12-09-2022</td>
                                                            <td>20-10-2022</td>
                                                            <td><span class="truncate whitespace-nowrap inline-block py-1 px-3 rounded-full text-xs font-medium bg-danger/10 text-danger/80">Overdue</span></td>
                                                            <td>Net Banking</td>
                                                            <td>$2526</td>
                                                            <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <a href="javascript:void(0);" class="m-0 hs-tooltip-toggle relative  w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                                        <i class="ti ti-send"></i>
                                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                            role="tooltip">
                                                                            Send
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <a href="javascript:void(0);" onclick="changeTheInfo('Edit Invoice','Json Taylor','P.O. Box 283 8562 Fusce Rd., 20620','jsontaylor2416@gmail.com','#IN5252155','25-10-2022','25-11-2022')"
                                                                    data-hs-overlay="#invoice-modal" class="invoice-edit m-0 hs-tooltip-toggle relative  w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                                        <i class="ti ti-pencil"></i>
                                                                        <span
                                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                            role="tooltip">
                                                                            Edit
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <a href="javascript:void(0);"
                                                                        class="invoice-btn m-0 hs-tooltip-toggle relative  w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                                        <i class="ti ti-trash"></i>
                                                                        <span
                                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                            role="tooltip">
                                                                            Delete
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="invoice-list">
                                                            <td class="">
                                                                <div class="flex items-center h-5 invoice-checkbox justify-center">
                                                                    <input id="invoice-check-3" type="checkbox"
                                                                        class="border-gray-500 ti-form-checkbox">
                                                                    <label for="invoice-check-3" class="sr-only">Checkbox</label>
                                                                </div>
                                                            </td>
                                                            <td>#IN125252</td>
                                                            <td>
                                                                <div class="flex space-x-3 rtl:space-x-reverse text-start min-w-[220px] truncate">
                                                                    <img class="avatar avatar-sm rounded-sm"
                                                                        src="{{asset('build/assets/img/users/4.jpg')}}" alt="Image Description">
                                                                    <div class="block">
                                                                        <p class="block text-sm font-semibold text-gray-800 dark:text-white my-auto">Suzika Stallone</p>
                                                                        <p class="block text-xs text-gray-500 dark:text-white/70 my-auto">suzikastallone3214@gmail.com</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>12-09-2022</td>
                                                            <td>20-10-2022</td>
                                                            <td><span class="truncate whitespace-nowrap inline-block py-1 px-3 rounded-full text-xs font-medium bg-warning/10 text-warning/80">Due</span></td>
                                                            <td>UPI ID</td>
                                                            <td>$2526</td>
                                                            <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <a href="javascript:void(0);"
                                                                class="m-0 hs-tooltip-toggle relative  w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                                        <i class="ti ti-send"></i>
                                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                            role="tooltip">
                                                                            Send
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <a href="javascript:void(0);" onclick="changeTheInfo('Edit Invoice','Suzika Stallone','P.O. Box 283 8562 Fusce Rd., 20620','suzikastallone3214@gmail.com','#IN5252155','25-10-2022','25-11-2022')"
                                                                    data-hs-overlay="#invoice-modal" class="invoice-edit m-0 hs-tooltip-toggle relative  w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                                        <i class="ti ti-pencil"></i>
                                                                        <span
                                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                            role="tooltip">
                                                                            Edit
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <a href="javascript:void(0);"
                                                                        class="invoice-btn m-0 hs-tooltip-toggle relative  w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                                        <i class="ti ti-trash"></i>
                                                                        <span
                                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                            role="tooltip">
                                                                            Delete
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="invoice-list">
                                                            <td class="">
                                                                <div class="flex items-center h-5 invoice-checkbox justify-center">
                                                                    <input id="invoice-check-4" type="checkbox"
                                                                        class="border-gray-500 ti-form-checkbox">
                                                                    <label for="invoice-check-4" class="sr-only">Checkbox</label>
                                                                </div>
                                                            </td>
                                                            <td>#IN5656</td>
                                                            <td>
                                                                <div class="flex space-x-3 rtl:space-x-reverse text-start min-w-[220px] truncate">
                                                                    <img class="avatar avatar-sm rounded-sm"
                                                                        src="{{asset('build/assets/img/users/5.jpg')}}" alt="Image Description">
                                                                    <div class="block">
                                                                        <p class="block text-sm font-semibold text-gray-800 dark:text-white my-auto">Selena Deoyl</p>
                                                                        <p class="block text-xs text-gray-500 dark:text-white/70 my-auto">selenadeoyl114@gmail.com</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>12-09-2022</td>
                                                            <td>20-10-2022</td>
                                                            <td><span class="truncate whitespace-nowrap inline-block py-1 px-3 rounded-full text-xs font-medium bg-secondary/10 text-secondary/80">Unpaid</span></td>
                                                            <td>Paypal</td>
                                                            <td>$2526</td>
                                                            <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <a href="javascript:void(0);"
                                                                    class="m-0 hs-tooltip-toggle relative  w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                                        <i class="ti ti-send"></i>
                                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                            role="tooltip">
                                                                            Send
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <a href="javascript:void(0);" onclick="changeTheInfo('Edit Invoice','Selena Deoyl','P.O. Box 283 8562 Fusce Rd., 20620','selenadeoyl114@gmail.com','#IN5252155','25-10-2022','25-11-2022')"
                                                                    data-hs-overlay="#invoice-modal" class="invoice-edit m-0 hs-tooltip-toggle relative  w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                                        <i class="ti ti-pencil"></i>
                                                                        <span
                                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                            role="tooltip">
                                                                            Edit
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <a href="javascript:void(0);"
                                                                        class="invoice-btn m-0 hs-tooltip-toggle relative  w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                                        <i class="ti ti-trash"></i>
                                                                        <span
                                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                            role="tooltip">
                                                                            Delete
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="invoice-list">
                                                            <td class="">
                                                                <div class="flex items-center h-5 invoice-checkbox justify-center">
                                                                    <input id="invoice-check-5" type="checkbox"
                                                                        class="border-gray-500 ti-form-checkbox">
                                                                    <label for="invoice-check-5" class="sr-only">Checkbox</label>
                                                                </div>
                                                            </td>
                                                            <td>#IN25252</td>
                                                            <td>
                                                                <div class="flex space-x-3 rtl:space-x-reverse text-start min-w-[220px] truncate">
                                                                    <img class="avatar avatar-sm rounded-sm"
                                                                        src="{{asset('build/assets/img/users/9.jpg')}}" alt="Image Description">
                                                                    <div class="block">
                                                                        <p class="block text-sm font-semibold text-gray-800 dark:text-white my-auto">Roman Killon</p>
                                                                        <p class="block text-xs text-gray-500 dark:text-white/70 my-auto">romankillon143@gmail.com</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>12-09-2022</td>
                                                            <td>20-10-2022</td>
                                                            <td><span class="truncate whitespace-nowrap inline-block py-1 px-3 rounded-full text-xs font-medium bg-primary/10 text-primary/80">Draft</span></td>
                                                            <td>Paypal</td>
                                                            <td>$2526</td>
                                                            <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <a href="javascript:void(0);"
                                                                    class="m-0 hs-tooltip-toggle relative  w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                                        <i class="ti ti-send"></i>
                                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                            role="tooltip">
                                                                            Send
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <a href="javascript:void(0);" onclick="changeTheInfo('Edit Invoice','Roman Killon','P.O. Box 283 8562 Fusce Rd., 20620','romankillon143@gmail.com','#IN5252155','25-10-2022','25-11-2022')"
                                                                    data-hs-overlay="#invoice-modal" class="invoice-edit m-0 hs-tooltip-toggle relative  w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                                        <i class="ti ti-pencil"></i>
                                                                        <span
                                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                            role="tooltip">
                                                                            Edit
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <a href="javascript:void(0);"
                                                                        class="invoice-btn m-0 hs-tooltip-toggle relative  w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                                        <i class="ti ti-trash"></i>
                                                                        <span
                                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                            role="tooltip">
                                                                            Delete
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="invoice-list">
                                                            <td class="">
                                                                <div class="flex items-center h-5 invoice-checkbox justify-center">
                                                                    <input id="invoice-check-6" type="checkbox"
                                                                        class="border-gray-500 ti-form-checkbox">
                                                                    <label for="invoice-check-6" class="sr-only">Checkbox</label>
                                                                </div>
                                                            </td>
                                                            <td>#IN5252155</td>
                                                            <td>
                                                                <div class="flex space-x-3 rtl:space-x-reverse text-start min-w-[220px] truncate">
                                                                    <img class="avatar avatar-sm rounded-sm"
                                                                        src="{{asset('build/assets/img/users/10.jpg')}}" alt="Image Description">
                                                                    <div class="block">
                                                                        <p class="block text-sm font-semibold text-gray-800 dark:text-white my-auto">Charlie Davieson</p>
                                                                        <p class="block text-xs text-gray-500 dark:text-white/70 my-auto">charliedavieson@gmail.com</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>25-09-2022</td>
                                                            <td>15-10-2022</td>
                                                            <td><span class="truncate whitespace-nowrap inline-block py-1 px-3 rounded-full text-xs font-medium bg-success/10 text-success/80">Paid</span></td>
                                                            <td>Card</td>
                                                            <td>$999</td>
                                                            <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <a href="javascript:void(0);"
                                                                    class="m-0 hs-tooltip-toggle relative  w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                                        <i class="ti ti-send"></i>
                                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                            role="tooltip">
                                                                            Send
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <a href="javascript:void(0);" onclick="changeTheInfo('Edit Invoice','Charlie Davieson','P.O. Box 283 8562 Fusce Rd., 20620','charliedavieson@gmail.com','#IN5252155','25-10-2022','25-11-2022')"
                                                                        data-hs-overlay="#invoice-modal" class="invoice-edit m-0 hs-tooltip-toggle relative  w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                                        <i class="ti ti-pencil"></i>
                                                                        <span
                                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                            role="tooltip">
                                                                            Edit
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <a href="javascript:void(0);"
                                                                        class="invoice-btn m-0 hs-tooltip-toggle relative  w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                                        <i class="ti ti-trash"></i>
                                                                        <span
                                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                            role="tooltip">
                                                                            Delete
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="invoice-list">
                                                            <td class="">
                                                                <div class="flex items-center h-5 invoice-checkbox justify-center">
                                                                    <input id="invoice-check-7" type="checkbox"
                                                                        class="border-gray-500 ti-form-checkbox">
                                                                    <label for="invoice-check-7" class="sr-only">Checkbox</label>
                                                                </div>
                                                            </td>
                                                            <td>#IN2363363</td>
                                                            <td>
                                                                <div class="flex space-x-3 rtl:space-x-reverse text-start min-w-[220px] truncate">
                                                                    <img class="avatar avatar-sm rounded-sm"
                                                                        src="{{asset('build/assets/img/users/11.jpg')}}" alt="Image Description">
                                                                    <div class="block">
                                                                        <p class="block text-sm font-semibold text-gray-800 dark:text-white my-auto">Joseph Samurai</p>
                                                                        <p class="block text-xs text-gray-500 dark:text-white/70 my-auto">josephsamurai@gmail.com</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>12-09-2022</td>
                                                            <td>20-10-2022</td>
                                                            <td><span class="truncate whitespace-nowrap inline-block py-1 px-3 rounded-full text-xs font-medium bg-danger/10 text-danger/80">Overdue</span></td>
                                                            <td>Net Banking</td>
                                                            <td>$2526</td>
                                                            <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <a href="javascript:void(0);"
                                                                    class="m-0 hs-tooltip-toggle relative  w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                                        <i class="ti ti-send"></i>
                                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                            role="tooltip">
                                                                            Send
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <a href="javascript:void(0);" onclick="changeTheInfo('Edit Invoice','Joseph Samurai','P.O. Box 283 8562 Fusce Rd., 20620','josephsamurai@gmail.com','#IN5252155','25-10-2022','25-11-2022')"
                                                                    data-hs-overlay="#invoice-modal" class="invoice-edit m-0 hs-tooltip-toggle relative  w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                                        <i class="ti ti-pencil"></i>
                                                                        <span
                                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                            role="tooltip">
                                                                            Edit
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <a href="javascript:void(0);"
                                                                        class="invoice-btn m-0 hs-tooltip-toggle relative  w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                                        <i class="ti ti-trash"></i>
                                                                        <span
                                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                            role="tooltip">
                                                                            Delete
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="invoice-list">
                                                            <td class="">
                                                                <div class="flex items-center h-5 invoice-checkbox justify-center">
                                                                    <input id="invoice-check-8" type="checkbox"
                                                                        class="border-gray-500 ti-form-checkbox">
                                                                    <label for="invoice-check-8" class="sr-only">Checkbox</label>
                                                                </div>
                                                            </td>
                                                            <td>#IN125252</td>
                                                            <td>
                                                                <div class="flex space-x-3 rtl:space-x-reverse text-start min-w-[220px] truncate">
                                                                    <img class="avatar avatar-sm rounded-sm"
                                                                        src="{{asset('build/assets/img/users/12.jpg')}}" alt="Image Description">
                                                                    <div class="block">
                                                                        <p class="block text-sm font-semibold text-gray-800 dark:text-white my-auto">Kevin Powell</p>
                                                                        <p class="block text-xs text-gray-500 dark:text-white/70 my-auto">kevinpowell@gmail.com</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>12-09-2022</td>
                                                            <td>20-10-2022</td>
                                                            <td><span class="truncate whitespace-nowrap inline-block py-1 px-3 rounded-full text-xs font-medium bg-warning/10 text-warning/80">Due</span></td>
                                                            <td>UPI ID</td>
                                                            <td>$2526</td>
                                                            <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <a href="javascript:void(0);"
                                                                    class="m-0 hs-tooltip-toggle relative  w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                                        <i class="ti ti-send"></i>
                                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                            role="tooltip">
                                                                            Send
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <a href="javascript:void(0);" onclick="changeTheInfo('Edit Invoice','Kevin Powell','P.O. Box 283 8562 Fusce Rd., 20620','kevinpowell@gmail.com','#IN5252155','25-10-2022','25-11-2022')"
                                                                    data-hs-overlay="#invoice-modal" class="invoice-edit m-0 hs-tooltip-toggle relative  w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                                        <i class="ti ti-pencil"></i>
                                                                        <span
                                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                            role="tooltip">
                                                                            Edit
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <a href="javascript:void(0);"
                                                                        class="invoice-btn m-0 hs-tooltip-toggle relative  w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                                        <i class="ti ti-trash"></i>
                                                                        <span
                                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                            role="tooltip">
                                                                            Delete
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="invoice-list">
                                                            <td class="">
                                                                <div class="flex items-center h-5 invoice-checkbox justify-center">
                                                                    <input id="invoice-check-9" type="checkbox"
                                                                        class="border-gray-500 ti-form-checkbox">
                                                                    <label for="invoice-check-9" class="sr-only">Checkbox</label>
                                                                </div>
                                                            </td>
                                                            <td>#IN5656</td>
                                                            <td>
                                                                <div class="flex space-x-3 rtl:space-x-reverse text-start min-w-[220px] truncate">
                                                                    <img class="avatar avatar-sm rounded-sm"
                                                                        src="{{asset('build/assets/img/users/6.jpg')}}" alt="Image Description">
                                                                    <div class="block">
                                                                        <p class="block text-sm font-semibold text-gray-800 dark:text-white my-auto">Darla Jung</p>
                                                                        <p class="block text-xs text-gray-500 dark:text-white/70 my-auto">darlajung555@gmail.com</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>12-09-2022</td>
                                                            <td>20-10-2022</td>
                                                            <td><span class="truncate whitespace-nowrap inline-block py-1 px-3 rounded-full text-xs font-medium bg-secondary/10 text-secondary/80">Unpaid</span></td>
                                                            <td>Paypal</td>
                                                            <td>$2526</td>
                                                            <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <a href="javascript:void(0);"
                                                                    class="m-0 hs-tooltip-toggle relative  w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                                        <i class="ti ti-send"></i>
                                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                            role="tooltip">
                                                                            Send
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <a href="javascript:void(0);" onclick="changeTheInfo('Edit Invoice','Darla Jung','P.O. Box 283 8562 Fusce Rd., 20620','darlajung555@gmail.com','#IN5252155','25-10-2022','25-11-2022')"
                                                                    data-hs-overlay="#invoice-modal" class="invoice-edit m-0 hs-tooltip-toggle relative  w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                                        <i class="ti ti-pencil"></i>
                                                                        <span
                                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                            role="tooltip">
                                                                            Edit
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <a href="javascript:void(0);"
                                                                        class="invoice-btn m-0 hs-tooltip-toggle relative  w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                                        <i class="ti ti-trash"></i>
                                                                        <span
                                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                            role="tooltip">
                                                                            Delete
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="invoice-list">
                                                            <td class="">
                                                                <div class="flex items-center h-5 invoice-checkbox justify-center">
                                                                    <input id="invoice-check-10" type="checkbox"
                                                                        class="border-gray-500 ti-form-checkbox">
                                                                    <label for="invoice-check-10" class="sr-only">Checkbox</label>
                                                                </div>
                                                            </td>
                                                            <td>#IN25252</td>
                                                            <td>
                                                                <div class="flex space-x-3 rtl:space-x-reverse text-start min-w-[220px] truncate">
                                                                    <img class="avatar avatar-sm rounded-sm"
                                                                        src="{{asset('build/assets/img/users/7.jpg')}}" alt="Image Description">
                                                                    <div class="block">
                                                                        <p class="block text-sm font-semibold text-gray-800 dark:text-white my-auto">Kiara Advensh</p>
                                                                        <p class="block text-xs text-gray-500 dark:text-white/70 my-auto">kiaraadvensh87@gmail.com</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>12-09-2022</td>
                                                            <td>20-10-2022</td>
                                                            <td><span class="truncate whitespace-nowrap inline-block py-1 px-3 rounded-full text-xs font-medium bg-primary/10 text-primary/80">Draft</span></td>
                                                            <td>Paypal</td>
                                                            <td>$2526</td>
                                                            <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <a href="javascript:void(0);"
                                                                    class="m-0 hs-tooltip-toggle relative  w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                                        <i class="ti ti-send"></i>
                                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                            role="tooltip">
                                                                            Send
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <a href="javascript:void(0);" onclick="changeTheInfo('Edit Invoice','Kiara Advensh','P.O. Box 283 8562 Fusce Rd., 20620','kiaraadvensh87@gmail.com','#IN5252155','25-10-2022','25-11-2022')"
                                                                    data-hs-overlay="#invoice-modal" class="invoice-edit m-0 hs-tooltip-toggle relative  w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                                        <i class="ti ti-pencil"></i>
                                                                        <span
                                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                            role="tooltip">
                                                                            Edit
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <a href="javascript:void(0);"
                                                                        class="invoice-btn m-0 hs-tooltip-toggle relative  w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                                        <i class="ti ti-trash"></i>
                                                                        <span
                                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                            role="tooltip">
                                                                            Delete
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <nav class="flex justify-end items-center space-x-2 rtl:space-x-reverse mt-5">
                                                <a class="w-10 h-10 bg-white dark:bg-black/20 text-gray-500 hover:bg-primary hover:text-white p-2 inline-flex justify-center text-sm font-medium items-center gap-2 rounded-full" href="javascript:void(0);">
                                                <span aria-hidden="true">«</span>
                                                <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="w-10 h-10 bg-primary text-white p-2 inline-flex items-center justify-center text-sm font-medium rounded-full" href="javascript:void(0);" aria-current="page">1</a>
                                                <a class="w-10 h-10 bg-white dark:bg-black/20 text-gray-500 hover:bg-primary hover:text-white p-2 inline-flex justify-center items-center text-sm font-medium rounded-full" href="javascript:void(0);">2</a>
                                                <a class="w-10 h-10 bg-white dark:bg-black/20 text-gray-500 hover:bg-primary hover:text-white p-2 inline-flex justify-center items-center text-sm font-medium rounded-full" href="javascript:void(0);">3</a>
                                                <a class="w-10 h-10 bg-white dark:bg-black/20 text-gray-500 hover:bg-primary hover:text-white p-2 inline-flex justify-center text-sm font-medium items-center gap-2 rounded-full" href="javascript:void(0);">
                                                <span class="sr-only">Next</span>
                                                <span aria-hidden="true">»</span>
                                                </a>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-1 -->

                        </div>
                        <!-- End::main-content -->

                    </div>

                    <!-- Start::Invoice Modal-->
                    <div id="invoice-modal" class="hs-overlay hidden ti-modal">
                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out sm:!max-w-6xl">
                            <div class="ti-modal-content">
                                <div class="ti-modal-header">
                                    <h3 class="ti-modal-title invoice-title">
                                    Create Invoice
                                    </h3>
                                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                        data-hs-overlay="#invoice-modal">
                                        <span class="sr-only">Close</span>
                                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                fill="currentColor" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="ti-modal-body p-6">
                                    <div class="flex flex-col md:flex-row space-y-6 justify-between mb-5">
                                        <div class="space-y-2">
                                            <div class="mb-2">
                                                <img src="{{asset('build/assets/img/brand-logos/desktop-logo.png')}}" alt="logo" class="flex dark:hidden">
                                                <img src="{{asset('build/assets/img/brand-logos/desktop-dark.png')}}" alt="logo" class="hidden dark:flex">
                                            </div>
                                            <input type="text" class="company-name ti-form-input md:w-72" placeholder="Company Name">
                                            <input type="text" class="company-address ti-form-input md:w-72" placeholder="Company Address">
                                            <input type="text" class="company-address1 ti-form-input md:w-72" placeholder="Complete Address">
                                        </div>
                                        <div class="space-y-2 text-end inline-block">
                                            <h3 class="text-2xl text-primary uppercase font-semibold">Invoice</h3>
                                            <input type="text" class="invoice-id ti-form-input md:w-72 inline-block text-end" placeholder="Invoice Id">
                                            <div class="mt-1 flex"><input type="text" class="create-date ti-form-input md:w-72 text-end sm:ltr:ml-3 sm:rtl:mr-3 flatpickr-input invoice-date font-normal"  placeholder="created date" readonly></div>
                                            <div class="mt-1 flex"><input type="text" class="due-date ti-form-input md:w-72 text-end sm:ltr:ml-3 sm:rtl:mr-3 flatpickr-input invoice-date font-normal" placeholder="Due Date" readonly></div>
                                        </div>
                                    </div>
                                    <hr class="pb-5 dark:border-t-white/10">
                                    <div class="grid grid-cols-12 gap-6 mb-5">
                                        <div class="lg:col-span-6 col-span-12">
                                            <div class="space-y-3 inline-block">
                                                <h3 class="font-semibold text-lg">Billed To :</h3>
                                                <input type="text" class="company-name ti-form-input md:w-72" placeholder="Company Name">
                                                <input type="text" class="company-address ti-form-input md:w-72" placeholder="Company Address">
                                                <input type="text" class="company-address1 ti-form-input md:w-72" placeholder="Complete Address">
                                            </div>
                                        </div>
                                        <div class="lg:col-span-6 col-span-12 text-end">
                                            <div class="space-y-3 inline-block">
                                                <h3 class="font-semibold text-lg">Shipped To :</h3>
                                                <input type="text" class="company-name ti-form-input md:w-72 text-end" placeholder="Company Name">
                                                <input type="text" class="company-address ti-form-input md:w-72 text-end" placeholder="Company Address">
                                                <input type="text" class="company-address1 ti-form-input md:w-72 text-end" placeholder="Complete Address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sm:flex space-y-4 justify-between">
                                        <h5 class="font-semibold text-lg my-auto">Invoic Items</h5>
                                        <a href="javascript:void(0);" class="invoice-add-item ti-btn ti-btn-primary m-0 py-2"><i class="ri ri-add-line"></i>Add Item Deatils</a>
                                    </div>
                                    <div class="py-5">
                                        <div class="overflow-auto lg:overflow-hidden">
                                            <table class="ti-custom-table !border dark:border-white/10 !border-x-0 text-center">
                                            <thead class="bg-gray-50 dark:bg-black/20 overflow-hidden">
                                                <tr>
                                                <th scope="col" class="!text-center">S.No</th>
                                                <th scope="col" class="!text-center">Product</th>
                                                <th scope="col" class="!text-center">Quantity</th>
                                                <th scope="col" class="!text-center">Unit</th>
                                                <th scope="col" class="!text-center">Amount</th>
                                                <th scope="col" class="!text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="invoice-body">
                                                <tr class="invoice-list">
                                                    <td class=""><input type="number" class="ti-form-input" placeholder="s.no"></td>
                                                    <td class=""><input type="text" class="ti-form-input" placeholder="Product name"></td>
                                                    <td class="font-semibold ">
                                                        <div class="flex rounded-sm shadow-sm">
                                                        <button aria-label="button" type="button"
                                                        class="quantity-minus inline-flex flex-shrink-0 justify-center items-center h-8 w-8 ltr:rounded-l-sm rtl:rounded-r-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:z-10 focus:outline-none focus:ring-0 focus:ring-primary transition-all text-sm">
                                                        <i class="ti ti-minus"></i>
                                                        </button>
                                                        <input type="text" id="quantity1" name="quantity"
                                                        class="p-0 ti-form-input w-20 rounded-none shadow-sm focus:z-10 text-center"
                                                        value="0" readonly>
                                                        <button aria-label="button" type="button"
                                                        class="quantity-plus inline-flex flex-shrink-0 justify-center items-center h-8 w-8  ltr:rounded-r-sm rtl:rounded-l-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:z-10 focus:outline-none focus:ring-0 focus:ring-primary transition-all text-sm">
                                                        <i class="ti ti-plus"></i>
                                                        </button>
                                                    </div>
                                                    </td>
                                                    <td class=""><input type="number" class="ti-form-input" placeholder="value"></td>
                                                    <td class="font-medium"><input type="number" class="ti-form-input" placeholder="Total amount"></td>
                                                    <td class="font-medium">
                                                        <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);"
                                                                class="invoice-btn m-0 hs-tooltip-toggle relative  w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                                <i class="ti ti-trash"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                    Delete
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="invoice-list">
                                                    <td class=""><input type="number" class="ti-form-input" placeholder="s.no"></td>
                                                    <td class=""><input type="text" class="ti-form-input" placeholder="Product name"></td>
                                                    <td class="font-semibold ">
                                                        <div class="flex rounded-sm shadow-sm">
                                                        <button aria-label="button" type="button"
                                                        class="quantity-minus inline-flex flex-shrink-0 justify-center items-center h-8 w-8 ltr:rounded-l-sm rtl:rounded-r-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:z-10 focus:outline-none focus:ring-0 focus:ring-primary transition-all text-sm">
                                                        <i class="ti ti-minus"></i>
                                                        </button>
                                                        <input type="text" id="quantity" name="quantity1"
                                                        class="p-0 ti-form-input w-20 rounded-none shadow-sm focus:z-10 text-center"
                                                        value="0" readonly>
                                                        <button aria-label="button" type="button"
                                                        class="quantity-plus inline-flex flex-shrink-0 justify-center items-center h-8 w-8  ltr:rounded-r-sm rtl:rounded-l-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:z-10 focus:outline-none focus:ring-0 focus:ring-primary transition-all text-sm">
                                                        <i class="ti ti-plus"></i>
                                                        </button>
                                                    </div>
                                                    </td>
                                                    <td class=""><input type="number" class="ti-form-input" placeholder="value"></td>
                                                    <td class="font-medium"><input type="number" class="ti-form-input" placeholder="Total amount"></td>
                                                    <td class="font-medium">
                                                        <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);"
                                                                class="invoice-btn m-0 hs-tooltip-toggle relative  w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                                <i class="ti ti-trash"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                    Delete
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tbody class="border-t border-b-0 border-x-0 border-gray-200 dark:border-white/10">
                                                <tr class="!border-b-0">
                                                    <td colspan="3" class="!p-1"></td>
                                                    <td class="!pb-1">Sub-Total</td>
                                                    <td class="!pb-1" ><input type="number" class=" ti-form-input" placeholder="sub Total"></td>
                                                    <td></td>
                                                </tr>
                                                <tr class="!border-b-0 !border-t-0">
                                                    <td colspan="3" class="!p-1"></td>
                                                    <td class="!py-1">Tax</td>
                                                    <td class="!py-1"><input type="number" class=" ti-form-input" placeholder="Tax"></td>
                                                    <td></td>
                                                </tr>
                                                <tr class="!border-b-0 !border-t-0">
                                                    <td colspan="3" class="!p-1"></td>
                                                    <td class="!py-1">Discount</td>
                                                    <td class="!py-1"><input type="number" class=" ti-form-input" placeholder="Discount"></td>
                                                    <td></td>
                                                </tr>
                                                <tr class="!border-t-0">
                                                    <td colspan="3" class="!p-1"></td>
                                                    <td class="!pt-1">Total</td>
                                                    <td class="!pt-1"><input type="number" class=" ti-form-input" placeholder="Total"></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <h3 class="font-semibold text-xl mb-4">Payment Details</h3>
                                    <div class="grid grid-cols-12 gap-6 mb-5 invoice-pay">
                                        <div class="lg:col-span-6 col-span-12 max-w-xs">
                                            <div class="space-y-3">
                                                <select class="ti-form-select" data-trigger>
                                                    <option value="0">Status</option>
                                                    <option value="0">paid</option>
                                                    <option value="0">Due</option>
                                                    <option value="0">Unpaid</option>
                                                    <option value="0">OverDue</option>
                                                </select>
                                                <input type="text" class="ti-form-input" placeholder="Card Holder Name">
                                                <input type="number" class="ti-form-input" placeholder="Card Number">
                                            </div>
                                        </div>
                                        <div class="lg:col-span-6 col-span-12 max-w-xs">
                                            <div class="space-y-3">
                                                <select class="ti-form-select" data-trigger>
                                                    <option value="0">Payment Type</option>
                                                    <option value="0">Debit/Credit Card</option>
                                                    <option value="0">Net Banking</option>
                                                    <option value="0">Paypal</option>
                                                    <option value="0">Upi</option>
                                                </select>
                                                <input type="text" class="ti-form-input" placeholder="Bank Details">
                                                <input type="number" class="ti-form-input" placeholder="Amount">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ti-modal-footer sm:flex !block space-y-2 text-end">
                                    <a class="ti-btn ti-btn-primary" href="javascript:void(0);">
                                        <i class="ri-save-line"></i>Save changes
                                    </a>
                                    <a class="ti-btn ti-btn-secondary" href="javascript:void(0);">
                                        <i class="ri-send-plane-line"></i> Send Invoice
                                    </a>
                                    <a class="ti-btn ti-btn-danger" href="javascript:void(0);">
                                        <i class="ri-download-cloud-2-line"></i> Download
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::Invoice Modal-->

@endsection

@section('scripts')

        <!-- FLATPICKR JS -->
        <script src="{{asset('build/assets/libs/flatpickr/flatpickr.min.js')}}"></script>

        <!-- CHOICES JS -->
        <script src="{{asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

        <!-- INVOICE JS -->
        @vite('resources/assets/js/invoice.js')
        

@endsection