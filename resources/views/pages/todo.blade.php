@extends('layouts.master')

@section('styles')

        <!-- DRAGULA CSS -->
        <link id="style" href="{{asset('build/assets/libs/dragula/dragula.min.css')}}" rel="stylesheet">

        <!-- CHOICES CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/choices.js/public/assets/styles/choices.min.css')}}">

        <!-- FLAT PICKER CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/flatpickr/flatpickr.min.css')}}">

@endsection

@section('content')

                    <div class="content">

                        <!-- Start::main-content -->
                        <div class="main-content">

                            <!-- Page Header -->
                            <div class="block justify-between page-header sm:flex">
                                <div>
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Todo List</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                        <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Pages
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                        </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        Todo List
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-6">
                            <div class="col-span-12 xl:col-span-3">
                                <div class="box">
                                <div class="box-header">
                                    <a href="javascript:void(0);" class="hs-dropdown-toggle py-2 px-3 ti-btn ti-btn-primary w-full"
                                    data-hs-overlay="#todo-compose">
                                    <i class="ri ri-edit-line"></i> Add New Todo Task
                                    </a>
                                </div>
                                <div class="box-body">
                                    <ul>
                                    <li>
                                        <a href="javascript:void(0);" class="p-2 mb-1 flex items-center align-middle justify-between text-gray-500 dark:text-white/70 space-x-2 rtl:space-x-reverse rounded-sm bg-gray-100 font-normal hover:bg-gray-200 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-black/20">
                                        <div class="flex space-x-3 rtl:space-x-reverse">
                                            <i class="ri ri-mail-line"></i>
                                            <span class="">Today Tasks</span>
                                        </div>
                                        <div>
                                            <span class="">10</span>
                                        </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="p-2 mb-1 flex justify-between text-gray-500 dark:text-white/70 space-x-2 rtl:space-x-reverse rounded-sm font-normal hover:bg-gray-200 focus:bg-gary-800 dark:bg-bgdark dark:hover:bg-black/20">
                                        <div class="flex space-x-3 rtl:space-x-reverse">
                                            <i class="ri ri-inbox-archive-line"></i>
                                            <span class="">Upcoming Tasks</span>
                                        </div>
                                        <div>
                                            <span class="">20</span>
                                        </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="p-2 mb-1 flex justify-between text-gray-500 dark:text-white/70 space-x-2 rtl:space-x-reverse rounded-sm font-normal hover:bg-gray-200 focus:bg-gary-800 dark:bg-bgdark dark:hover:bg-black/20">
                                        <div class="flex space-x-3 rtl:space-x-reverse">
                                            <i class="ri ri-star-line"></i>
                                            <span class="">Starred</span>
                                        </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="p-2 mb-1 flex justify-between text-gray-500 dark:text-white/70 space-x-2 rtl:space-x-reverse rounded-sm font-normal hover:bg-gray-200 focus:bg-gary-800 dark:bg-bgdark dark:hover:bg-black/20">
                                        <div class="flex space-x-3 rtl:space-x-reverse">
                                            <i class="ri ri-price-tag-3-line"></i>
                                            <span class="">Important</span>
                                        </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="p-2 mb-1 flex justify-between text-gray-500 dark:text-white/70 space-x-2 rtl:space-x-reverse rounded-sm font-normal hover:bg-gray-200 focus:bg-gary-800 dark:bg-bgdark dark:hover:bg-black/20">
                                        <div class="flex space-x-3 rtl:space-x-reverse">
                                            <i class="ri ri-delete-bin-line"></i>
                                            <span class="">Trash</span>
                                        </div>
                                        <div>
                                            <span class="">25</span>
                                        </div>
                                        </a>
                                    </li>
                                    </ul>
                                    <h3 class="text-gray-500 dark:text-white/70 my-3 font-semibold">Priority</h3>
                                    <ul>
                                    <li>
                                        <a href="javascript:void(0);" class="py-1 px-2 mb-1 flex justify-between text-gray-500 dark:text-white/70 space-x-2 rtl:space-x-reverse rounded-sm font-normal dark:hover:bg-black/20">
                                        <div class="flex space-x-3 rtl:space-x-reverse">
                                            <span class="w-2.5 h-2.5 inline-block bg-success rounded-full my-auto"></span>
                                            <span class="">Low</span>
                                        </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="py-1 px-2 mb-1 flex justify-between text-gray-500 dark:text-white/70 space-x-2 rtl:space-x-reverse rounded-sm font-normal dark:hover:bg-black/20">
                                        <div class="flex space-x-3 rtl:space-x-reverse">
                                            <span class="w-2.5 h-2.5 inline-block bg-warning rounded-full my-auto"></span>
                                            <span class="">Medium</span>
                                        </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="py-1 px-2 flex justify-between text-gray-500 dark:text-white/70 space-x-2 rtl:space-x-reverse rounded-sm font-normal dark:hover:bg-black/20 mb-0">
                                        <div class="flex space-x-3 rtl:space-x-reverse">
                                            <span class="w-2.5 h-2.5 inline-block bg-danger rounded-full my-auto"></span>
                                            <span class="">High</span>
                                        </div>
                                        </a>
                                    </li>
                                    </ul>
                                </div>
                                <div class="box-footer">
                                    <img src="{{asset('build/assets/img/png-images/9.png')}}" alt="todo-img">
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 xl:col-span-9">
                                <div class="box">
                                <div class="box-body">
                                    <div class="grid grid-cols-12 gap-6">
                                    <div class="col-span-12 lg:col-span-4">
                                        <div class="relative sm:max-w-xs max-w-[210px]">
                                        <label for="hs-table-search" class="sr-only">Search</label>
                                        <div class="absolute inset-y-0 ltr:right-0 rtl:left-0 flex items-center pointer-events-none ltr:pr-4 rtl:pl-4">
                                            <i class="ti ti-search"></i>
                                        </div>
                                        <input type="text" name="hs-table-search" id="hs-table-search" class="p-2 ltr:pr-10 rtl:pl-10 ti-form-input"
                                            placeholder="Search Task">
                                        </div>
                                    </div>
                                    <div class="col-span-12 lg:col-span-8">
                                        <div class="sm:flex space-y-2 sm:space-y-0 sm:space-x-3 space-x-0 justify-end todo-right rtl:space-x-reverse">
                                        <select class="ti-form-select todo-choice">
                                            <option value="">Sort By</option>
                                            <option value="1">A To Z</option>
                                            <option value="2">Z To A</option>
                                            <option value="3">Favorites</option>
                                            <option value="4">All</option>
                                        </select>
                                        <select class="ti-form-select todo-choice">
                                            <option value="">Status</option>
                                            <option value="1">Pending</option>
                                            <option value="2">Completed</option>
                                            <option value="3">Inprogress</option>
                                            <option value="4">New</option>
                                        </select>
                                        <div class="hs-dropdown ti-dropdown">
                                            <a aria-label="anchor" href="javascript:void(0);"
                                            class="hs-dropdown-toggle ti-dropdown-toggle inline-flex !p-2 flex-shrink-0 justify-center items-center gap-2 w-full rounded-sm border font-medium bg-white text-gray-500 shadow-sm align-middle focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-xs dark:bg-bgdark dark:border-white/10 dark:text-white/70 dark:focus:ring-offset-white/10">
                                            <i class="ri ri-more-2-line text-lg leading-none"></i>
                                            </a>
                                            <div class="hs-dropdown-menu ti-dropdown-menu">
                                            <a class="ti-dropdown-item" href="javascript:void(0);">Select All</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">Mark All</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">Delete All</a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="box">
                                <div class="box-body">
                                    <div class="table-bordered rounded-sm overflow-auto todo-table">
                                    <table class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                        <thead class="bg-gray-100 dark:bg-black/20">
                                        <tr>
                                            <th scope="col" class="dark:text-white/70">
                                            <div class="flex">
                                                <input type="checkbox" class="border-gray-500 ti-form-checkbox mt-0.5 check-all"
                                                id="hs-default-checkbox">
                                                <label for="hs-default-checkbox" class="text-sm text-gray-500 dark:text-white/70"></label>
                                            </div>
                                            </th>
                                            <th scope="col" class="dark:text-white/70"></th>
                                            <th scope="col" class="dark:text-white/70">Todo title</th>
                                            <th scope="col" class="dark:text-white/70">Assigned Date</th>
                                            <th scope="col" class="dark:text-white/70">Due Date</th>
                                            <th scope="col" class="dark:text-white/70">Status</th>
                                            <th scope="col" class="dark:text-white/70">Priority</th>
                                            <th scope="col" class="dark:text-white/70 min-w-[160px]">Assigned To</th>
                                            <th scope="col" class="!text-end dark:text-white/70">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody class="todo-drag">
                                        <tr class="todo-box">
                                            <td>
                                            <div class="flex items-center h-5 justify-center todo-checkbox">
                                                <input id="hs-table-checkbox-11" type="checkbox" class="border-gray-500 ti-form-checkbox">
                                                <label for="hs-table-checkbox-11" class="sr-only">Checkbox</label>
                                            </div>
                                            </td>
                                            <td>
                                            <div
                                                class="cursor-move w-8 h-8 leading-none text-lg rounded-sm bg-gray-100 dark:bg-black/20 flex justify-center p-1.5 mx-auto">
                                                ::</div>
                                            </td>
                                            <td>
                                            <p class="text-sm font-semibold w-52 truncate">New Project Blueprint</p>
                                            </td>
                                            <td>14-12-2022</td>
                                            <td>25-12-2022</td>
                                            <td><span class="text-success">Completed</span></td>
                                            <td><span class="badge bg-danger/20 text-danger">High</span></td>
                                            <td>
                                            <div class="flex -space-x-2 rtl:space-x-reverse">
                                                <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/img/users/1.jpg')}}"
                                                alt="Image Description">
                                                <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/img/users/4.jpg')}}"
                                                alt="Image Description">
                                                <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/img/users/2.jpg')}}"
                                                alt="Image Description">
                                                <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/img/users/3.jpg')}}"
                                                alt="Image Description">
                                                <span
                                                class="inline-flex items-center justify-center avatar avatar-xs rounded-full bg-gray-100 border-2 border-gray-200 dark:bg-black/20 dark:border-white/10">
                                                <span class="font-medium text-gray-500 leading-none dark:text-white/70">9+</span>
                                                </span>
                                            </div>
                                            </td>
                                            <td class="text-end font-medium">
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <a href="javascript:void(0);"
                                                class="hs-tooltip-toggle w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                <i class="ti ti-pencil"></i>
                                                <span
                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700 hidden"
                                                    role="tooltip" data-popper-placement="top"
                                                    style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(953px, -281px);">
                                                    Edit
                                                </span>
                                                </a>
                                            </div>
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <a href="javascript:void(0);"
                                                class="todo-remove hs-tooltip-toggle w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                <i class="ti ti-trash"></i>
                                                <span
                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                    role="tooltip" data-popper-placement="top"
                                                    style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(985px, -281px);">
                                                    Delete
                                                </span>
                                                </a>
                                            </div>
                                            </td>
                                        </tr>
                                        <tr class="todo-box">
                                            <td>
                                            <div class="flex items-center h-5 justify-center todo-checkbox">
                                                <input id="hs-table-checkbox-12" type="checkbox" class="border-gray-500 ti-form-checkbox">
                                                <label for="hs-table-checkbox-12" class="sr-only">Checkbox</label>
                                            </div>
                                            </td>
                                            <td>
                                            <div
                                                class="cursor-move w-8 h-8 leading-none text-lg rounded-sm bg-gray-100 dark:bg-black/20 flex justify-center p-1.5 mx-auto">
                                                ::</div>
                                            </td>
                                            <td>
                                            <p class="text-sm font-semibold w-52 truncate">Design New Landing Pages </p>
                                            </td>
                                            <td>14-12-2022</td>
                                            <td>23-12-2022</td>
                                            <td><span class="text-danger">New</span></td>
                                            <td><span class="badge bg-warning/20 text-warning">Medium</span></td>
                                            <td>
                                            <div class="flex -space-x-2 rtl:space-x-reverse">
                                                <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/img/users/11.jpg')}}"
                                                alt="Image Description">
                                                <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/img/users/4.jpg')}}"
                                                alt="Image Description">
                                                <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/img/users/13.jpg')}}"
                                                alt="Image Description">
                                            </div>
                                            </td>
                                            <td class="text-end font-medium">
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <a href="javascript:void(0);"
                                                class="hs-tooltip-toggle w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                <i class="ti ti-pencil"></i>
                                                <span
                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700 hidden"
                                                    role="tooltip" data-popper-placement="top"
                                                    style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(953px, -281px);">
                                                    Edit
                                                </span>
                                                </a>
                                            </div>
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <a href="javascript:void(0);"
                                                class="todo-remove hs-tooltip-toggle w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                <i class="ti ti-trash"></i>
                                                <span
                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                    role="tooltip" data-popper-placement="top"
                                                    style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(985px, -281px);">
                                                    Delete
                                                </span>
                                                </a>
                                            </div>
                                            </td>
                                        </tr>
                                        <tr class="todo-box">
                                            <td>
                                            <div class="flex items-center h-5 justify-center todo-checkbox">
                                                <input id="hs-table-checkbox-13" type="checkbox" class="border-gray-500 ti-form-checkbox">
                                                <label for="hs-table-checkbox-13" class="sr-only">Checkbox</label>
                                            </div>
                                            </td>
                                            <td>
                                            <div
                                                class="cursor-move w-8 h-8 leading-none text-lg rounded-sm bg-gray-100 dark:bg-black/20 flex justify-center p-1.5 mx-auto">
                                                ::</div>
                                            </td>
                                            <td>
                                            <p class="text-sm font-semibold w-52 truncate">Server side validation </p>
                                            </td>
                                            <td>14-12-2022</td>
                                            <td>23-12-2022</td>
                                            <td><span class="text-info">Inprogress</span></td>
                                            <td><span class="badge bg-success/20 text-success">Low</span></td>
                                            <td>
                                            <div class="flex -space-x-2 rtl:space-x-reverse">
                                                <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/img/users/15.jpg')}}"
                                                alt="Image Description">
                                            </div>
                                            </td>
                                            <td class="text-end font-medium">
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <a href="javascript:void(0);"
                                                class="hs-tooltip-toggle w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                <i class="ti ti-pencil"></i>
                                                <span
                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700 hidden"
                                                    role="tooltip" data-popper-placement="top"
                                                    style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(953px, -281px);">
                                                    Edit
                                                </span>
                                                </a>
                                            </div>
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <a href="javascript:void(0);"
                                                class="todo-remove hs-tooltip-toggle w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                <i class="ti ti-trash"></i>
                                                <span
                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                    role="tooltip" data-popper-placement="top"
                                                    style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(985px, -281px);">
                                                    Delete
                                                </span>
                                                </a>
                                            </div>
                                            </td>
                                        </tr>
                                        <tr class="todo-box">
                                            <td>
                                            <div class="flex items-center h-5 justify-center todo-checkbox">
                                                <input id="hs-table-checkbox-14" type="checkbox" class="border-gray-500 ti-form-checkbox">
                                                <label for="hs-table-checkbox-14" class="sr-only">Checkbox</label>
                                            </div>
                                            </td>
                                            <td>
                                            <div
                                                class="cursor-move w-8 h-8 leading-none text-lg rounded-sm bg-gray-100 dark:bg-black/20 flex justify-center p-1.5 mx-auto">
                                                ::</div>
                                            </td>
                                            <td>
                                            <p class="text-sm font-semibold w-52 truncate">New Plugin Development</p>
                                            </td>
                                            <td>14-12-2022</td>
                                            <td>23-12-2022</td>
                                            <td><span class="text-warning">Pending</span></td>
                                            <td><span class="badge bg-danger/20 text-danger">High</span></td>
                                            <td>
                                            <div class="flex -space-x-2 rtl:space-x-reverse">
                                                <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/img/users/12.jpg')}}"
                                                alt="Image Description">
                                                <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/img/users/3.jpg')}}"
                                                alt="Image Description">
                                            </div>
                                            </td>
                                            <td class="text-end font-medium">
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <a href="javascript:void(0);"
                                                class="hs-tooltip-toggle w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                <i class="ti ti-pencil"></i>
                                                <span
                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700 hidden"
                                                    role="tooltip" data-popper-placement="top"
                                                    style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(953px, -281px);">
                                                    Edit
                                                </span>
                                                </a>
                                            </div>
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <a href="javascript:void(0);"
                                                class="todo-remove hs-tooltip-toggle w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                <i class="ti ti-trash"></i>
                                                <span
                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                    role="tooltip" data-popper-placement="top"
                                                    style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(985px, -281px);">
                                                    Delete
                                                </span>
                                                </a>
                                            </div>
                                            </td>
                                        </tr>
                                        <tr class="todo-box">
                                            <td>
                                            <div class="flex items-center h-5 justify-center todo-checkbox">
                                                <input id="hs-table-checkbox-15" type="checkbox" class="border-gray-500 ti-form-checkbox">
                                                <label for="hs-table-checkbox-15" class="sr-only">Checkbox</label>
                                            </div>
                                            </td>
                                            <td>
                                            <div
                                                class="cursor-move w-8 h-8 leading-none text-lg rounded-sm bg-gray-100 dark:bg-black/20 flex justify-center p-1.5 mx-auto">
                                                ::</div>
                                            </td>
                                            <td>
                                            <p class="text-sm font-semibold w-52 truncate">Designing New Authentication Pages</p>
                                            </td>
                                            <td>14-12-2022</td>
                                            <td>23-12-2022</td>
                                            <td><span class="text-danger">New</span></td>
                                            <td><span class="badge bg-danger/20 text-danger">High</span></td>
                                            <td>
                                            <div class="flex -space-x-2 rtl:space-x-reverse">
                                                <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/img/users/12.jpg')}}"
                                                alt="Image Description">
                                                <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/img/users/3.jpg')}}"
                                                alt="Image Description">
                                                <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/img/users/16.jpg')}}"
                                                alt="Image Description">
                                                <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/img/users/5.jpg')}}"
                                                alt="Image Description">
                                                <span
                                                class="inline-flex items-center justify-center avatar avatar-xs rounded-full bg-gray-100 border-2 border-gray-200 dark:bg-black/20 dark:border-white/10">
                                                <span class="font-medium text-gray-500 leading-none dark:text-white/70">1+</span>
                                                </span>
                                            </div>
                                            </td>
                                            <td class="text-end font-medium">
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <a href="javascript:void(0);"
                                                class="hs-tooltip-toggle w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                <i class="ti ti-pencil"></i>
                                                <span
                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700 hidden"
                                                    role="tooltip" data-popper-placement="top"
                                                    style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(953px, -281px);">
                                                    Edit
                                                </span>
                                                </a>
                                            </div>
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <a href="javascript:void(0);"
                                                class="todo-remove hs-tooltip-toggle w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                <i class="ti ti-trash"></i>
                                                <span
                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                    role="tooltip" data-popper-placement="top"
                                                    style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(985px, -281px);">
                                                    Delete
                                                </span>
                                                </a>
                                            </div>
                                            </td>
                                        </tr>
                                        <tr class="todo-box">
                                            <td>
                                            <div class="flex items-center h-5 justify-center todo-checkbox">
                                                <input id="hs-table-checkbox-16" type="checkbox" class="border-gray-500 ti-form-checkbox">
                                                <label for="hs-table-checkbox-16" class="sr-only">Checkbox</label>
                                            </div>
                                            </td>
                                            <td>
                                            <div
                                                class="cursor-move w-8 h-8 leading-none text-lg rounded-sm bg-gray-100 dark:bg-black/20 flex justify-center p-1.5 mx-auto">
                                                ::</div>
                                            </td>
                                            <td>
                                            <p class="text-sm font-semibold w-52 truncate">Documentation For New Template</p>
                                            </td>
                                            <td>14-12-2022</td>
                                            <td>23-12-2022</td>
                                            <td><span class="text-warning">Pending</span></td>
                                            <td><span class="badge bg-success/20 text-success">Low</span></td>
                                            <td>
                                            <div class="flex -space-x-2 rtl:space-x-reverse">
                                                <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/img/users/12.jpg')}}"
                                                alt="Image Description">
                                                <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/img/users/3.jpg')}}"
                                                alt="Image Description">
                                                <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/img/users/16.jpg')}}"
                                                alt="Image Description">
                                                <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/img/users/5.jpg')}}"
                                                alt="Image Description">
                                                <span
                                                class="inline-flex items-center justify-center avatar avatar-xs rounded-full bg-gray-100 border-2 border-gray-200 dark:bg-black/20 dark:border-white/10">
                                                <span class="font-medium text-gray-500 leading-none dark:text-white/70">5+</span>
                                                </span>
                                            </div>
                                            </td>
                                            <td class="text-end font-medium">
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <a href="javascript:void(0);"
                                                class="hs-tooltip-toggle w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                <i class="ti ti-pencil"></i>
                                                <span
                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700 hidden"
                                                    role="tooltip" data-popper-placement="top"
                                                    style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(953px, -281px);">
                                                    Edit
                                                </span>
                                                </a>
                                            </div>
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <a href="javascript:void(0);"
                                                class="todo-remove hs-tooltip-toggle w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                <i class="ti ti-trash"></i>
                                                <span
                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                    role="tooltip" data-popper-placement="top"
                                                    style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(985px, -281px);">
                                                    Delete
                                                </span>
                                                </a>
                                            </div>
                                            </td>
                                        </tr>
                                        <tr class="todo-box">
                                            <td>
                                            <div class="flex items-center h-5 justify-center todo-checkbox">
                                                <input id="hs-table-checkbox-17" type="checkbox" class="border-gray-500 ti-form-checkbox">
                                                <label for="hs-table-checkbox-17" class="sr-only">Checkbox</label>
                                            </div>
                                            </td>
                                            <td>
                                            <div
                                                class="cursor-move w-8 h-8 leading-none text-lg rounded-sm bg-gray-100 dark:bg-black/20 flex justify-center p-1.5 mx-auto">
                                                ::</div>
                                            </td>
                                            <td>
                                            <p class="text-sm font-semibold w-52 truncate">Updating Old Ui</p>
                                            </td>
                                            <td>14-12-2022</td>
                                            <td>23-12-2022</td>
                                            <td><span class="text-info">Inprogress</span></td>
                                            <td><span class="badge bg-warning/20 text-warning">Medium</span></td>
                                            <td>
                                            <div class="flex -space-x-2 rtl:space-x-reverse">
                                                <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/img/users/12.jpg')}}"
                                                alt="Image Description">
                                                <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/img/users/3.jpg')}}"
                                                alt="Image Description">
                                                <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/img/users/16.jpg')}}"
                                                alt="Image Description">
                                                <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/img/users/5.jpg')}}"
                                                alt="Image Description">
                                                <span
                                                class="inline-flex items-center justify-center avatar avatar-xs rounded-full bg-gray-100 border-2 border-gray-200 dark:bg-black/20 dark:border-white/10">
                                                <span class="font-medium text-gray-500 leading-none dark:text-white/70">5+</span>
                                                </span>
                                            </div>
                                            </td>
                                            <td class="text-end font-medium">
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <a href="javascript:void(0);"
                                                class="hs-tooltip-toggle w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                <i class="ti ti-pencil"></i>
                                                <span
                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700 hidden"
                                                    role="tooltip" data-popper-placement="top"
                                                    style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(953px, -281px);">
                                                    Edit
                                                </span>
                                                </a>
                                            </div>
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <a href="javascript:void(0);"
                                                class="todo-remove hs-tooltip-toggle w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                <i class="ti ti-trash"></i>
                                                <span
                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                    role="tooltip" data-popper-placement="top"
                                                    style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(985px, -281px);">
                                                    Delete
                                                </span>
                                                </a>
                                            </div>
                                            </td>
                                        </tr>
                                        <tr class="todo-box">
                                            <td>
                                            <div class="flex items-center h-5 justify-center todo-checkbox">
                                                <input id="hs-table-checkbox-18" type="checkbox" class="border-gray-500 ti-form-checkbox">
                                                <label for="hs-table-checkbox-18" class="sr-only">Checkbox</label>
                                            </div>
                                            </td>
                                            <td>
                                            <div
                                                class="cursor-move w-8 h-8 leading-none text-lg rounded-sm bg-gray-100 dark:bg-black/20 flex justify-center p-1.5 mx-auto">
                                                ::</div>
                                            </td>
                                            <td>
                                            <p class="text-sm font-semibold w-52 truncate">Developing New Events in Plugin</p>
                                            </td>
                                            <td>14-12-2022</td>
                                            <td>23-12-2022</td>
                                            <td><span class="text-success">Completed</span></td>
                                            <td><span class="badge bg-danger/20 text-danger">High</span></td>
                                            <td>
                                            <div class="flex -space-x-2 rtl:space-x-reverse">
                                                <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/img/users/12.jpg')}}"
                                                alt="Image Description">
                                            </div>
                                            </td>
                                            <td class="text-end font-medium">
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <a href="javascript:void(0);"
                                                class="hs-tooltip-toggle w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                <i class="ti ti-pencil"></i>
                                                <span
                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700 hidden"
                                                    role="tooltip" data-popper-placement="top"
                                                    style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(953px, -281px);">
                                                    Edit
                                                </span>
                                                </a>
                                            </div>
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <a href="javascript:void(0);"
                                                class="todo-remove hs-tooltip-toggle w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                <i class="ti ti-trash"></i>
                                                <span
                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                    role="tooltip" data-popper-placement="top"
                                                    style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(985px, -281px);">
                                                    Delete
                                                </span>
                                                </a>
                                            </div>
                                            </td>
                                        </tr>
                                        <tr class="todo-box">
                                            <td>
                                            <div class="flex items-center h-5 justify-center todo-checkbox">
                                                <input id="hs-table-checkbox-19" type="checkbox" class="border-gray-500 ti-form-checkbox">
                                                <label for="hs-table-checkbox-19" class="sr-only">Checkbox</label>
                                            </div>
                                            </td>
                                            <td>
                                            <div
                                                class="cursor-move w-8 h-8 leading-none text-lg rounded-sm bg-gray-100 dark:bg-black/20 flex justify-center p-1.5 mx-auto">
                                                ::</div>
                                            </td>
                                            <td>
                                            <p class="text-sm font-semibold w-52 truncate">Designing Of New Ecommerce Pages</p>
                                            </td>
                                            <td>14-12-2022</td>
                                            <td>23-12-2022</td>
                                            <td><span class="text-info">Inprogress</span></td>
                                            <td><span class="badge bg-warning/20 text-warning">Medium</span></td>
                                            <td>
                                            <div class="flex -space-x-2 rtl:space-x-reverse">
                                                <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/img/users/12.jpg')}}"
                                                alt="Image Description">
                                                <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/img/users/3.jpg')}}"
                                                alt="Image Description">
                                            </div>
                                            </td>
                                            <td class="text-end font-medium">
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <a href="javascript:void(0);"
                                                class="hs-tooltip-toggle w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                <i class="ti ti-pencil"></i>
                                                <span
                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700 hidden"
                                                    role="tooltip" data-popper-placement="top"
                                                    style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(953px, -281px);">
                                                    Edit
                                                </span>
                                                </a>
                                            </div>
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <a href="javascript:void(0);"
                                                class="todo-remove hs-tooltip-toggle w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                <i class="ti ti-trash"></i>
                                                <span
                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                    role="tooltip" data-popper-placement="top"
                                                    style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(985px, -281px);">
                                                    Delete
                                                </span>
                                                </a>
                                            </div>
                                            </td>
                                        </tr>
                                        <tr class="todo-box">
                                            <td>
                                            <div class="flex items-center h-5 justify-center todo-checkbox">
                                                <input id="hs-table-checkbox-1" type="checkbox" class="border-gray-500 ti-form-checkbox">
                                                <label for="hs-table-checkbox-1" class="sr-only">Checkbox</label>
                                            </div>
                                            </td>
                                            <td>
                                            <div
                                                class="cursor-move w-8 h-8 leading-none text-lg rounded-sm bg-gray-100 dark:bg-black/20 flex justify-center p-1.5 mx-auto">
                                                ::</div>
                                            </td>
                                            <td>
                                            <p class="text-sm font-semibold w-52 truncate">Designing Of New Ecommerce Pages</p>
                                            </td>
                                            <td>14-12-2022</td>
                                            <td>23-12-2022</td>
                                            <td><span class="text-danger">New</span></td>
                                            <td><span class="badge bg-success/20 text-succbg-success">Low</span></td>
                                            <td>
                                            <div class="flex -space-x-2 rtl:space-x-reverse">
                                                <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/img/users/12.jpg')}}"
                                                alt="Image Description">
                                                <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/img/users/16.jpg')}}"
                                                alt="Image Description">
                                                <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/img/users/5.jpg')}}"
                                                alt="Image Description">
                                            </div>
                                            </td>
                                            <td class="text-end font-medium">
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <a href="javascript:void(0);"
                                                class="hs-tooltip-toggle w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                <i class="ti ti-pencil"></i>
                                                <span
                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700 hidden"
                                                    role="tooltip" data-popper-placement="top"
                                                    style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(953px, -281px);">
                                                    Edit
                                                </span>
                                                </a>
                                            </div>
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <a href="javascript:void(0);"
                                                class="todo-remove hs-tooltip-toggle w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                <i class="ti ti-trash"></i>
                                                <span
                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                    role="tooltip" data-popper-placement="top"
                                                    style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(985px, -281px);">
                                                    Delete
                                                </span>
                                                </a>
                                            </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    <nav class="flex items-center space-x-2 rtl:space-x-reverse justify-end">
                                    <a class="text-gray-500 dark:text-white/70 hover:text-primary p-4 inline-flex items-center gap-2 font-medium rounded-sm" href="javascript:void(0);">
                                        <span aria-hidden="true">«</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="w-10 h-10 bg-primary text-white p-4 inline-flex items-center text-sm font-medium rounded-full" href="javascript:void(0);" aria-current="page">1</a>
                                    <a class="w-10 h-10 text-gray-500 dark:text-white/70 hover:text-primary p-4 inline-flex items-center text-sm font-medium rounded-full" href="javascript:void(0);">2</a>
                                    <a class="w-10 h-10 text-gray-500 dark:text-white/70 hover:text-primary p-4 inline-flex items-center text-sm font-medium rounded-full" href="javascript:void(0);">3</a>
                                    <a class="text-gray-500 dark:text-white/70 hover:text-primary p-4 inline-flex items-center gap-2 font-medium rounded-sm" href="javascript:void(0);">
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

                        <!--Start::Modal-->
                        <div id="todo-compose" class="hs-overlay hidden ti-modal">
                            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out">
                                <div class="ti-modal-content">
                                <div class="ti-modal-header">
                                    <h3 class="ti-modal-title">
                                    New Task
                                    </h3>
                                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#todo-compose">
                                    <span class="sr-only">Close</span>
                                    <i class="ri-close-line"></i>
                                    </button>
                                </div>
                                <div class="ti-modal-body">
                                    <div class="space-y-3">
                                    <div class="">
                                        <label for="input-label" class="ti-form-label">Task Title</label>
                                        <input type="text" id="input-label" class="ti-form-input" placeholder="Task title">
                                    </div>
                                    <div>
                                        <label class="ti-form-label">Assigned To</label>
                                        <select class="ti-form-select" name="choices-multiple-remove-button"
                                        id="choices-multiple-remove-button" multiple>
                                        <option value="Choice 1" selected>Angelina May</option>
                                        <option value="Choice 2">Kiara advain</option>
                                        <option value="Choice 3">Hercules Jhon</option>
                                        <option value="Choice 4">Mayor Kim</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="input-label" class="ti-form-label">Assigned Date</label>
                                        <div class="flex rounded-sm shadow-sm">
                                        <div
                                            class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                            <span class="text-sm text-gray-500 dark:text-white/70"><i class="ri ri-calendar-line"></i></span>
                                        </div>

                                        <input type="text" class="ti-form-input ltr:rounded-l-none rtl:rounded-r-none focus:z-10 flatpickr-input"
                                            id="addignedDate" placeholder="Choose date and time" readonly>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="input-label" class="ti-form-label">Due Date</label>
                                        <div class="flex rounded-sm shadow-sm">
                                        <div
                                            class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                            <span class="text-sm text-gray-500 dark:text-white/70"><i class="ri ri-calendar-line"></i></span>
                                        </div>

                                        <input type="text" class="ti-form-input ltr:rounded-l-none rtl:rounded-r-none focus:z-10 flatpickr-input"
                                            id="targetDate" placeholder="Choose date and time" readonly>
                                        </div>
                                    </div>
                                    <div>
                                        <label class="ti-form-label">Assigned To</label>
                                        <select class="ti-form-select todo-choice" name="choices-single-default">
                                        <option value="">Select</option>
                                        <option value="Critical">Critical</option>
                                        <option value="High">High</option>
                                        <option value="Medium">Medium</option>
                                        <option value="Low">Low</option>
                                        </select>
                                    </div>
                                    </div>
                                </div>
                                <div class="ti-modal-footer">
                                    <button type="button"
                                    class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                    data-hs-overlay="#todo-compose">
                                    Close
                                    </button>
                                    <a class="ti-btn ti-btn-primary" href="javascript:void(0);">
                                    Create
                                    </a>
                                </div>
                                </div>
                            </div>
                        </div>
                        <!--End::Modal-->
                    </div>

@endsection

@section('scripts')

        <!-- CHOICES JS -->
        <script src="{{asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

        <!-- DRAGULA JS -->
        <script src="{{asset('build/assets/libs/dragula/dragula.min.js')}}"></script>

        <!-- FLAT PICKER JS -->
        <script src="{{asset('build/assets/libs/flatpickr/flatpickr.min.js')}}"></script>

        <!-- TODO JS -->
        @vite('resources/assets/js/todo.js')
        

@endsection