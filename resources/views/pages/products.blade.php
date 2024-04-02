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
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Products</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                    <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Pages
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                    </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        Products
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-x-5">
                                <div class="col-span-12 xl:col-span-3">
                                <div class="box">
                                    <div class="box-body">
                                    <div class="relative">
                                        <label for="hs-table-search" class="sr-only">Search</label>
                                        <div class="absolute inset-y-0 ltr:right-0 rtl:left-0 flex items-center ltr:pr-4 rtl:pl-4">
                                        <svg class="h-3.5 w-3.5 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
                                            </path>
                                        </svg>
                                        </div><input type="text" name="hs-table-search" id="hs-table-search" class="p-3 ltr:pr-10 rtl:pl-10 ti-form-input"
                                        placeholder="Search for items">
                                    </div>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="box-header">
                                    <div class="flex justify-between">
                                        <h5 class="box-title my-auto">Filters</h5>
                                        <button type="button" class="ti-btn py-1 px-3 ti-btn-primary m-0">Clear all</button>
                                    </div>
                                    </div>
                                    <div class="box-body">
                                    <span class="badge bg-gray-100 dark:bg-black/20 dark:text-white text-gray-800">
                                        Smart phone
                                        <button type="button" class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-gray-500 dark:text-white/70 hover:bg-gray-200 hover:text-gray-500 dark:hover:bg-black/20 dark:hover:text-white focus:outline-none focus:bg-gray-200 focus:text-gray-500">
                                        <span class="sr-only">Remove badge</span>
                                        <i class="ti ti-x"></i>
                                        </button>
                                    </span>
                                    <span class="badge bg-gray-100 dark:bg-black/20 dark:text-white text-gray-800">
                                        50% off
                                        <button type="button" class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-gray-500 dark:text-white/70 hover:bg-gray-200 hover:text-gray-500 dark:hover:bg-black/20 dark:hover:text-white focus:outline-none focus:bg-gray-200 focus:text-gray-500">
                                        <span class="sr-only">Remove badge</span>
                                        <i class="ti ti-x"></i>
                                        </button>
                                    </span>
                                    <span class="badge bg-gray-100 dark:bg-black/20 dark:text-white text-gray-800">
                                        Diam
                                        <button type="button" class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-gray-500 dark:text-white/70 hover:bg-gray-200 hover:text-gray-500 dark:hover:bg-black/20 dark:hover:text-white focus:outline-none focus:bg-gray-200 focus:text-gray-500">
                                        <span class="sr-only">Remove badge</span>
                                        <i class="ti ti-x"></i>
                                        </button>
                                    </span>
                                    <span class="badge bg-gray-100 dark:bg-black/20 dark:text-white text-gray-800">
                                        ₹10,000 - ₹20,000
                                        <button type="button" class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-gray-500 dark:text-white/70 hover:bg-gray-200 hover:text-gray-500 dark:hover:bg-black/20 dark:hover:text-white focus:outline-none focus:bg-gray-200 focus:text-gray-500">
                                        <span class="sr-only">Remove badge</span>
                                        <i class="ti ti-x"></i>
                                        </button>
                                    </span>
                                    <span class="badge bg-gray-100 dark:bg-black/20 dark:text-white text-gray-800">
                                        128GB
                                        <button type="button" class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-gray-500 dark:text-white/70 hover:bg-gray-200 hover:text-gray-500 dark:hover:bg-black/20 dark:hover:text-white focus:outline-none focus:bg-gray-200 focus:text-gray-500">
                                        <span class="sr-only">Remove badge</span>
                                        <i class="ti ti-x"></i>
                                        </button>
                                    </span>
                                    <span class="badge bg-gray-100 dark:bg-black/20 dark:text-white text-gray-800">
                                        6.5
                                        <button type="button" class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-gray-500 dark:text-white/70 hover:bg-gray-200 hover:text-gray-500 dark:hover:bg-black/20 dark:hover:text-white focus:outline-none focus:bg-gray-200 focus:text-gray-500">
                                        <span class="sr-only">Remove badge</span>
                                        <i class="ti ti-x"></i>
                                        </button>
                                    </span>
                                    <span class="badge bg-gray-100 dark:bg-black/20 dark:text-white text-gray-800">
                                        Black
                                        <button type="button" class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-gray-500 dark:text-white/70 hover:bg-gray-200 hover:text-gray-500 dark:hover:bg-black/20 dark:hover:text-white focus:outline-none focus:bg-gray-200 focus:text-gray-500">
                                        <span class="sr-only">Remove badge</span>
                                        <i class="ti ti-x"></i>
                                        </button>
                                    </span>
                                    <span class="badge bg-gray-100 dark:bg-black/20 dark:text-white text-gray-800">
                                    4000 mAh
                                    <button type="button" class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-gray-500 dark:text-white/70 hover:bg-gray-200 hover:text-gray-500 dark:hover:bg-black/20 dark:hover:text-white focus:outline-none focus:bg-gray-200 focus:text-gray-500">
                                        <span class="sr-only">Remove badge</span>
                                        <i class="ti ti-x"></i>
                                        </button>
                                    </span>
                                    <span class="badge bg-gray-100 dark:bg-black/20 dark:text-white text-gray-800">
                                        Dual Sim
                                        <button type="button" class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-gray-500 dark:text-white/70 hover:bg-gray-200 hover:text-gray-500 dark:hover:bg-black/20 dark:hover:text-white focus:outline-none focus:bg-gray-200 focus:text-gray-500">
                                        <span class="sr-only">Remove badge</span>
                                        <i class="ti ti-x"></i>
                                        </button>
                                    </span>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="box-header">
                                    <h5 class="box-title">Colors</h5>
                                    </div>
                                    <div class="box-body">
                                    <button aria-label="button" type="button" class="ti-btn p-3 ti-btn-secondary"></button>
                                    <button aria-label="button" type="button" class="ti-btn p-3 ti-btn-info"></button>
                                    <button aria-label="button" type="button" class="ti-btn p-3 bg-red-500 text-white hover:bg-red-600 focus:ring-red-500 dark:focus:ring-offset-white/10"></button>
                                    <button aria-label="button" type="button" class="ti-btn p-3 bg-yellow-500 text-white hover:bg-yellow-600 focus:ring-yellow-500 dark:focus:ring-offset-white/10"></button>
                                    <button aria-label="button" type="button" class="ti-btn p-3 bg-green-500 text-white hover:bg-green-600 focus:ring-green-500 dark:focus:ring-offset-white/10"></button>
                                    <button aria-label="button" type="button" class="ti-btn p-3 ti-btn-primary"></button>
                                    <button aria-label="button" type="button" class="ti-btn p-3 bg-indigo-500 text-white hover:bg-indigo-600 focus:ring-indigo-500 dark:focus:ring-offset-white/10"></button>
                                    <button aria-label="button" type="button" class="ti-btn p-3 bg-purple-500 text-white hover:bg-purple-600 focus:ring-purple-500 dark:focus:ring-offset-white/10"></button>
                                    <button aria-label="button" type="button" class="ti-btn p-3 bg-pink-500 text-white hover:bg-pink-600 focus:ring-pink-500 dark:focus:ring-offset-white/10"></button>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="box-header">
                                        <h5 class="box-title">Categories</h5>
                                    </div>
                                    <div class="box-body" id="categories">
                                    <div class="space-y-2">
                                        <div class="flex">
                                        <input type="checkbox" class="ti-form-checkbox mt-0.5" id="category-1" checked>
                                        <label for="category-1" class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Electronics</label>
                                        <span class="text-sm text-gray-500 ltr:ml-auto rtl:mr-auto dark:text-white/70">(1,937)</span>
                                        </div>
                                        <div class="flex">
                                        <input type="checkbox" class="ti-form-checkbox mt-0.5" id="category-2">
                                        <label for="category-2" class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Mobiles</label>
                                        <span class="text-sm text-gray-500 ltr:ml-auto rtl:mr-auto dark:text-white/70">(1,251)</span>
                                        </div>
                                        <div class="flex">
                                        <input type="checkbox" class="ti-form-checkbox mt-0.5" id="category-3">
                                        <label for="category-3" class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Dress</label>
                                        <span class="text-sm text-gray-500 ltr:ml-auto rtl:mr-auto dark:text-white/70">(1,9037)</span>
                                        </div>
                                        <div class="flex">
                                        <input type="checkbox" class="ti-form-checkbox mt-0.5" id="category-4">
                                        <label for="category-4" class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Smart Phones</label>
                                        <span class="text-sm text-gray-500 ltr:ml-auto rtl:mr-auto dark:text-white/70">(2,937)</span>
                                        </div>
                                        <div class="flex">
                                        <input type="checkbox" class="ti-form-checkbox mt-0.5" id="category-5">
                                        <label for="category-5" class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Bags &amp; Purses</label>
                                        <span class="text-sm text-gray-500 ltr:ml-auto rtl:mr-auto dark:text-white/70">(1,252)</span>
                                        </div>
                                        <div class="flex">
                                        <input type="checkbox" class="ti-form-checkbox mt-0.5" id="category-6">
                                        <label for="category-6" class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Coat &amp; Jacket</label>
                                        <span class="text-sm text-gray-500 ltr:ml-auto rtl:mr-auto dark:text-white/70">(1,251)</span>
                                        </div>
                                        <div class="flex">
                                        <input type="checkbox" class="ti-form-checkbox mt-0.5" id="category-7">
                                        <label for="category-7" class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Beauty</label>
                                        <span class="text-sm text-gray-500 ltr:ml-auto rtl:mr-auto dark:text-white/70">(1,563)</span>
                                        </div>
                                        <div class="flex">
                                        <input type="checkbox" class="ti-form-checkbox mt-0.5" id="category-8">
                                        <label for="category-8" class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Jeans</label>
                                        <span class="text-sm text-gray-500 ltr:ml-auto rtl:mr-auto dark:text-white/70">(1,284)</span>
                                        </div>
                                        <div id="category-collapse" class="hs-collapse hidden w-full transition-[height] duration-100" aria-labelledby="hs-category-collapse">
                                            <div class="mb-5">
                                            <div class="space-y-2">
                                                <div class="flex">
                                                <input type="checkbox" class="ti-form-checkbox mt-0.5" id="category-9">
                                                <label for="category-9" class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Jewellery</label>
                                                <span class="text-sm text-gray-500 ltr:ml-auto rtl:mr-auto dark:text-white/70">(937)</span>
                                                </div>
                                                <div class="flex">
                                                <input type="checkbox" class="ti-form-checkbox mt-0.5" id="category-10">
                                                <label for="category-10" class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Sports</label>
                                                <span class="text-sm text-gray-500 ltr:ml-auto rtl:mr-auto dark:text-white/70">(22,255)</span>
                                                </div>
                                                <div class="flex">
                                                <input type="checkbox" class="ti-form-checkbox mt-0.5" id="category-11">
                                                <label for="category-11" class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Technology</label>
                                                <span class="text-sm text-gray-500 ltr:ml-auto rtl:mr-auto dark:text-white/70">(22,251)</span>
                                                </div>
                                                <div class="flex">
                                                <input type="checkbox" class="ti-form-checkbox mt-0.5" id="category-12">
                                                <label for="category-12" class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Watches</label>
                                                <span class="text-sm text-gray-500 ltr:ml-auto rtl:mr-auto dark:text-white/70">(22,564)</span>
                                                </div>
                                                <div class="flex">
                                                <input type="checkbox" class="ti-form-checkbox mt-0.5" id="category-13">
                                                <label for="category-13" class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Accessories</label>
                                                <span class="text-sm text-gray-500 ltr:ml-auto rtl:mr-auto dark:text-white/70">(22,255)</span>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <button type="button" class="hs-collapse-toggle w-full py-2 px-4 inline-flex justify-center items-center gap-2 rounded-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:outline-none focus:ring-0 focus:ring-primary focus:ring-offset-0 transition-all text-sm dark:focus:ring-offset-white/10"
                                            id="hs-category-collapse" data-hs-collapse="#category-collapse">
                                            Show more
                                        </button>
                                    </div>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="box-header">
                                        <h5 class="box-title">Gender</h5>
                                    </div>
                                    <div class="box-body" id="gender">
                                    <div class="space-y-2">
                                        <div class="flex">
                                        <input type="checkbox" class="ti-form-checkbox mt-0.5" id="gender-1" checked>
                                        <label for="gender-1" class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Female</label>
                                        </div>
                                        <div class="flex">
                                        <input type="checkbox" class="ti-form-checkbox mt-0.5" id="gender-2">
                                        <label for="gender-2" class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Male</label>
                                        </div>
                                        <div class="flex">
                                        <input type="checkbox" class="ti-form-checkbox mt-0.5" id="gender-3">
                                        <label for="gender-3" class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Kids</label>
                                        </div>
                                        <div class="flex">
                                        <input type="checkbox" class="ti-form-checkbox mt-0.5" id="gender-4">
                                        <label for="gender-4" class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Others</label>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="box-header">
                                        <h5 class="box-title">Brands</h5>
                                    </div>
                                    <div class="box-body" id="brands">
                                        <div class="space-y-2">
                                            <div class="flex">
                                                <input type="checkbox" class="ti-form-checkbox mt-0.5" id="brand-1" checked>
                                                <label for="brand-1" class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Et EosInvidunt</label>
                                            </div>
                                            <div class="flex">
                                                <input type="checkbox" class="ti-form-checkbox mt-0.5" id="brand-2">
                                                <label for="brand-2" class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Diam</label>
                                            </div>
                                            <div class="flex">
                                                <input type="checkbox" class="ti-form-checkbox mt-0.5" id="brand-3">
                                                <label for="brand-3" class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Sit Dolor</label>
                                            </div>
                                            <div class="flex">
                                                <input type="checkbox" class="ti-form-checkbox mt-0.5" id="brand-4">
                                                <label for="brand-4" class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Dolore Eos</label>
                                            </div>
                                            <div class="flex">
                                                <input type="checkbox" class="ti-form-checkbox mt-0.5" id="brand-5">
                                                <label for="brand-5" class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Diam</label>
                                            </div>
                                            <div class="flex">
                                                <input type="checkbox" class="ti-form-checkbox mt-0.5" id="brand-6">
                                                <label for="brand-6" class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Eos Labore</label>
                                            </div>
                                            <div class="flex">
                                                <input type="checkbox" class="ti-form-checkbox mt-0.5" id="brand-7">
                                                <label for="brand-7" class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Duo Rebum</label>
                                            </div>
                                            <div class="flex">
                                                <input type="checkbox" class="ti-form-checkbox mt-0.5" id="brand-8">
                                                <label for="brand-8" class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Dolor</label>
                                            </div>
                                            <div id="brand-collapse" class="hs-collapse hidden w-full transition-[height] duration-100"
                                                aria-labelledby="hs-brand-collapse">
                                                <div class="mb-5">
                                                    <div class="space-y-2">
                                                        <div class="flex">
                                                            <input type="checkbox" class="ti-form-checkbox mt-0.5" id="brand-9">
                                                            <label for="brand-9" class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Diam</label>
                                                        </div>
                                                        <div class="flex">
                                                            <input type="checkbox" class="ti-form-checkbox mt-0.5" id="brand-10">
                                                            <label for="brand-10" class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Dolor</label>
                                                        </div>
                                                        <div class="flex">
                                                            <input type="checkbox" class="ti-form-checkbox mt-0.5" id="brand-11">
                                                            <label for="brand-11" class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Duo
                                                                Rebum</label>
                                                        </div>
                                                        <div class="flex">
                                                            <input type="checkbox" class="ti-form-checkbox mt-0.5" id="brand-12">
                                                            <label for="brand-12" class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Eos
                                                                Labore</label>
                                                        </div>
                                                        <div class="flex">
                                                            <input type="checkbox" class="ti-form-checkbox mt-0.5" id="brand-13">
                                                            <label for="brand-13" class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Diam</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button"
                                                class="hs-collapse-toggle w-full py-2 px-4 inline-flex justify-center items-center gap-2 rounded-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:outline-none focus:ring-0 focus:ring-primary focus:ring-offset-0 transition-all text-sm dark:focus:ring-offset-white/10"
                                                id="hs-brand-collapse" data-hs-collapse="#brand-collapse">
                                                Show more
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="col-span-12 xl:col-span-9">
                                <div class="box">
                                    <div class="box-body">
                                    <div class="">
                                        <div class="hs-dropdown ti-dropdown">
                                        <button id="product-feature" type="button" class="hs-dropdown-toggle ti-dropdown-toggle">
                                            Features
                                            <svg class="hs-dropdown-open:rotate-180 ti-dropdown-caret" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                        </button>
                                        <div class="hs-dropdown-menu w-72 hidden z-10 hs-dropdown-open:ease-in hs-dropdown-open:opacity-100 hs-dropdown-open:scale-100 transition ease-out scale-95 duration-200 origin-top-left ti-dropdown-menu"
                                        aria-labelledby="product-feature" data-hs-transition>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Featured
                                            </a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Newest Items
                                            </a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Low To High
                                            </a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                High To Low
                                            </a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Relevant
                                            </a>
                                        </div>
                                        </div>
                                        <a href="{{url('add-product')}}" class="ti-btn ti-btn-primary ltr:float-right rtl:float-left"><i class="ti ti-plus"></i>Add Prdouct</a>
                                    </div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-12 gap-x-6">
                                    <div class="col-span-12 md:col-span-6 xxl:!col-span-4">
                                    <div class="box product-box">
                                        <div class="box-body space-y-3">
                                        <div class="product-image">
                                            <a href="{{url('products-details')}}" class="image">
                                            <img class="mx-auto rounded-sm" src="{{asset('build/assets/img/ecommerce/products/1.png')}}" alt="img">
                                            </a>
                                            <div class="product-icons">
                                            <a aria-label="anchor" href="{{url('wishlist')}}" class="z-40 absolute top-2 ltr:right-2 rtl:left-2 block bg-white dark:bg-bgdark p-2 leading-none rounded-full text-gray-500 dark:text-white text-base"><i class="ri ri-heart-line"></i></a>
                                            <a aria-label="anchor" href="{{url('cart')}}" class="z-40 absolute top-12 ltr:right-2 rtl:left-2 block bg-white dark:bg-bgdark p-2 leading-none rounded-full text-gray-500 dark:text-white text-base"><i class="ri ri-shopping-cart-2-line"></i></a>
                                            <a aria-label="anchor" href="{{url('products-details')}}" class="z-40 absolute top-[5.5rem] ltr:right-2 rtl:left-2 block bg-white dark:bg-bgdark p-2 leading-[0] rounded-full text-gray-500 dark:text-white text-base"><i class="ri ri-eye-line leading-none"></i></a>
                                            </div>
                                            <a href="{{url('products-details')}}" class="z-40 absolute bottom-2 ltr:left-2 rtl:right-2 block bg-success p-1 leading-none rounded-sm text-white text-xs">Available</a>
                                        </div>
                                        <div class="product-details space-y-1">
                                            <h5 class="text-lg font-semibold">Black Heals For Women</h5>
                                            <div class="flex space-x-2 rtl:space-x-reverse">
                                            <div class="product-rating">
                                                <i class="ri ri-star-fill text-yellow-500 text-base"></i>
                                                <i class="ri ri-star-fill text-yellow-500 text-base"></i>
                                                <i class="ri ri-star-fill text-yellow-500 text-base"></i>
                                                <i class="ri ri-star-fill text-yellow-500 text-base"></i>
                                                <i class="ri ri-star-fill text-gray-200 text-base"></i>
                                            </div>
                                            <p class=" my-auto text-gray-500  dark:text-white/70 text-sm space-x-2 rtl:space-x-reverse">4 (21,123 views)</p>
                                            </div>
                                            <div class="flex space-x-2 rtl:space-x-reverse">
                                            <h5 class="text-lg font-semibold">$699</h5>
                                            <span class="my-auto line-through  font-semibold text-base text-gray-500 dark:text-white/70">$999</span>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-span-12 md:col-span-6 xxl:!col-span-4">
                                    <div class="product-box box">
                                        <div class="box-body space-y-3">
                                        <div class="product-image">
                                            <a href="{{url('products-details')}}" class="image">
                                            <img class="mx-auto rounded-sm" src="{{asset('build/assets/img/ecommerce/products/2.png')}}" alt="img">
                                            </a>
                                            <div class="product-icons">
                                            <a aria-label="anchor" href="{{url('wishlist')}}" class="z-40 absolute top-2 ltr:right-2 rtl:left-2 block bg-white dark:bg-bgdark p-2 leading-none rounded-full text-gray-500 dark:text-white text-base"><i class="ri ri-heart-line"></i></a>
                                            <a aria-label="anchor" href="{{url('cart')}}" class="z-40 absolute top-12 ltr:right-2 rtl:left-2 block bg-white dark:bg-bgdark p-2 leading-none rounded-full text-gray-500 dark:text-white text-base"><i class="ri ri-shopping-cart-2-line"></i></a>
                                            <a aria-label="anchor" href="{{url('products-details')}}" class="z-40 absolute top-[5.5rem] ltr:right-2 rtl:left-2 block bg-white dark:bg-bgdark p-2 leading-[0] rounded-full text-gray-500 dark:text-white text-base"><i class="ri ri-eye-line leading-none"></i></a>
                                            </div>
                                            <a href="{{url('products-details')}}" class="z-40 absolute bottom-2 ltr:left-2 rtl:right-2 block bg-danger p-1 leading-none rounded-sm text-white text-xs">Out Of Stock</a>
                                        </div>
                                        <div class="product-details space-y-1">
                                            <h5 class="text-lg font-semibold">Tshirt For Men </h5>
                                            <div class="flex space-x-2 rtl:space-x-reverse">
                                            <div class="product-rating">
                                                <i class="ri ri-star-fill text-yellow-500 text-base"></i>
                                                <i class="ri ri-star-fill text-yellow-500 text-base"></i>
                                                <i class="ri ri-star-fill text-yellow-500 text-base"></i>
                                                <i class="ri ri-star-fill text-yellow-500 text-base"></i>
                                                <i class="ri ri-star-half-fill text-yellow-500 text-base"></i>
                                            </div>
                                            <p class=" my-auto text-gray-500  dark:text-white/70 text-sm space-x-2 rtl:space-x-reverse">4.3 (23,123 views)</p>
                                            </div>
                                            <div class="flex space-x-2 rtl:space-x-reverse">
                                            <h5 class="text-lg font-semibold">$245</h5>
                                            <span class="my-auto line-through  font-semibold text-base text-gray-500 dark:text-white/70">$599</span>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-span-12 md:col-span-6 xxl:!col-span-4">
                                    <div class="product-box box">
                                        <div class="box-body space-y-3">
                                        <div class="product-image">
                                            <a href="{{url('products-details')}}" class="image">
                                            <img class="mx-auto rounded-sm" src="{{asset('build/assets/img/ecommerce/products/3.png')}}" alt="img">
                                            </a>
                                            <div class="product-icons">
                                            <a aria-label="anchor" href="{{url('wishlist')}}" class="z-40 absolute top-2 ltr:right-2 rtl:left-2 block bg-white dark:bg-bgdark p-2 leading-none rounded-full text-gray-500 dark:text-white text-base"><i class="ri ri-heart-line"></i></a>
                                            <a aria-label="anchor" href="{{url('cart')}}" class="z-40 absolute top-12 ltr:right-2 rtl:left-2 block bg-white dark:bg-bgdark p-2 leading-none rounded-full text-gray-500 dark:text-white text-base"><i class="ri ri-shopping-cart-2-line"></i></a>
                                            <a aria-label="anchor" href="{{url('products-details')}}" class="z-40 absolute top-[5.5rem] ltr:right-2 rtl:left-2 block bg-white dark:bg-bgdark p-2 leading-[0] rounded-full text-gray-500 dark:text-white text-base"><i class="ri ri-eye-line leading-none"></i></a>
                                            </div>
                                            <a href="{{url('products-details')}}" class="z-40 absolute bottom-2 ltr:left-2 rtl:right-2 block bg-success p-1 leading-none rounded-sm text-white text-xs">Available</a>
                                        </div>
                                        <div class="product-details space-y-1">
                                            <h5 class="text-lg font-semibold">Blue Jacket For Men </h5>
                                            <div class="flex space-x-2 rtl:space-x-reverse">
                                            <div class="product-rating">
                                                <i class="ri ri-star-fill text-yellow-500 text-base"></i>
                                                <i class="ri ri-star-fill text-yellow-500 text-base"></i>
                                                <i class="ri ri-star-fill text-yellow-500 text-base"></i>
                                                <i class="ri ri-star-fill text-yellow-500 text-base"></i>
                                                <i class="ri ri-star-half-fill text-yellow-500 text-base"></i>
                                            </div>
                                            <p class=" my-auto text-gray-500  dark:text-white/70 text-sm space-x-2 rtl:space-x-reverse">4.5 (35,586 views)</p>
                                            </div>
                                            <div class="flex space-x-2 rtl:space-x-reverse">
                                            <h5 class="text-lg font-semibold">$1999</h5>
                                            <span class="my-auto line-through  font-semibold text-base text-gray-500 dark:text-white/70">$1599</span>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-span-12 md:col-span-6 xxl:!col-span-4">
                                    <div class="product-box box">
                                        <div class="box-body space-y-3">
                                        <div class="product-image">
                                            <a href="{{url('products-details')}}" class="image">
                                            <img class="mx-auto rounded-sm" src="{{asset('build/assets/img/ecommerce/products/4.png')}}" alt="img">
                                            </a>
                                            <div class="product-icons">
                                            <a aria-label="anchor" href="{{url('wishlist')}}" class="z-40 absolute top-2 ltr:right-2 rtl:left-2 block bg-white dark:bg-bgdark p-2 leading-none rounded-full text-gray-500 dark:text-white text-base"><i class="ri ri-heart-line"></i></a>
                                            <a aria-label="anchor" href="{{url('cart')}}" class="z-40 absolute top-12 ltr:right-2 rtl:left-2 block bg-white dark:bg-bgdark p-2 leading-none rounded-full text-gray-500 dark:text-white text-base"><i class="ri ri-shopping-cart-2-line"></i></a>
                                            <a aria-label="anchor" href="{{url('products-details')}}" class="z-40 absolute top-[5.5rem] ltr:right-2 rtl:left-2 block bg-white dark:bg-bgdark p-2 leading-[0] rounded-full text-gray-500 dark:text-white text-base"><i class="ri ri-eye-line leading-none"></i></a>
                                            </div>
                                            <a href="{{url('products-details')}}" class="z-40 absolute bottom-2 ltr:left-2 rtl:right-2 block bg-danger p-1 leading-none rounded-sm text-white text-xs">Out Of Stock</a>
                                        </div>
                                        <div class="product-details space-y-1">
                                            <h5 class="text-lg font-semibold">Dolor Wireless Airpods </h5>
                                            <div class="flex space-x-2 rtl:space-x-reverse">
                                            <div class="product-rating">
                                                <i class="ri ri-star-fill text-yellow-500 text-base"></i>
                                                <i class="ri ri-star-fill text-yellow-500 text-base"></i>
                                                <i class="ri ri-star-fill text-yellow-500 text-base"></i>
                                                <i class="ri ri-star-half-fill text-yellow-500 text-base"></i>
                                                <i class="ri ri-star-fill text-gray-200 text-base"></i>
                                            </div>
                                            <p class=" my-auto text-gray-500  dark:text-white/70 text-sm space-x-2 rtl:space-x-reverse">3.5 (15,253 views)</p>
                                            </div>
                                            <div class="flex space-x-2 rtl:space-x-reverse">
                                            <h5 class="text-lg font-semibold">$399</h5>
                                            <span class="my-auto line-through  font-semibold text-base text-gray-500 dark:text-white/70">$499</span>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-span-12 md:col-span-6 xxl:!col-span-4">
                                    <div class="product-box box">
                                        <div class="box-body space-y-3">
                                        <div class="product-image">
                                            <a href="{{url('products-details')}}" class="image">
                                            <img class="mx-auto rounded-sm" src="{{asset('build/assets/img/ecommerce/products/5.png')}}" alt="img">
                                            </a>
                                            <div class="product-icons">
                                            <a aria-label="anchor" href="{{url('wishlist')}}" class="z-40 absolute top-2 ltr:right-2 rtl:left-2 block bg-white dark:bg-bgdark p-2 leading-none rounded-full text-gray-500 dark:text-white text-base"><i class="ri ri-heart-line"></i></a>
                                            <a aria-label="anchor" href="{{url('cart')}}" class="z-40 absolute top-12 ltr:right-2 rtl:left-2 block bg-white dark:bg-bgdark p-2 leading-none rounded-full text-gray-500 dark:text-white text-base"><i class="ri ri-shopping-cart-2-line"></i></a>
                                            <a aria-label="anchor" href="{{url('products-details')}}" class="z-40 absolute top-[5.5rem] ltr:right-2 rtl:left-2 block bg-white dark:bg-bgdark p-2 leading-[0] rounded-full text-gray-500 dark:text-white text-base"><i class="ri ri-eye-line leading-none"></i></a>
                                            </div>
                                            <a href="{{url('products-details')}}" class="z-40 absolute bottom-2 ltr:left-2 rtl:right-2 block bg-success p-1 leading-none rounded-sm text-white text-xs">Available</a>
                                        </div>
                                        <div class="product-details space-y-1">
                                            <h5 class="text-lg font-semibold">Dolor Rose Frangrance Perfume</h5>
                                            <div class="flex space-x-2 rtl:space-x-reverse">
                                            <div class="product-rating">
                                                <i class="ri ri-star-fill text-yellow-500 text-base"></i>
                                                <i class="ri ri-star-fill text-yellow-500 text-base"></i>
                                                <i class="ri ri-star-fill text-yellow-500 text-base"></i>
                                                <i class="ri ri-star-fill text-yellow-500 text-base"></i>
                                                <i class="ri ri-star-half-fill text-yellow-500 text-base"></i>
                                            </div>
                                            <p class=" my-auto text-gray-500  dark:text-white/70 text-sm space-x-2 rtl:space-x-reverse">4.2 (20,989 views)</p>
                                            </div>
                                            <div class="flex space-x-2 rtl:space-x-reverse">
                                            <h5 class="text-lg font-semibold">$199</h5>
                                            <span class="my-auto line-through  font-semibold text-base text-gray-500 dark:text-white/70">$299</span>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-span-12 md:col-span-6 xxl:!col-span-4">
                                    <div class="product-box box">
                                        <div class="box-body space-y-3">
                                        <div class="product-image">
                                            <a href="{{url('products-details')}}" class="image">
                                            <img class="mx-auto rounded-sm" src="{{asset('build/assets/img/ecommerce/products/6.png')}}" alt="img">
                                            </a>
                                            <div class="product-icons">
                                            <a aria-label="anchor" href="{{url('wishlist')}}" class="z-40 absolute top-2 ltr:right-2 rtl:left-2 block bg-white dark:bg-bgdark p-2 leading-none rounded-full text-gray-500 dark:text-white text-base"><i class="ri ri-heart-line"></i></a>
                                            <a aria-label="anchor" href="{{url('cart')}}" class="z-40 absolute top-12 ltr:right-2 rtl:left-2 block bg-white dark:bg-bgdark p-2 leading-none rounded-full text-gray-500 dark:text-white text-base"><i class="ri ri-shopping-cart-2-line"></i></a>
                                            <a aria-label="anchor" href="{{url('products-details')}}" class="z-40 absolute top-[5.5rem] ltr:right-2 rtl:left-2 block bg-white dark:bg-bgdark p-2 leading-[0] rounded-full text-gray-500 dark:text-white text-base"><i class="ri ri-eye-line leading-none"></i></a>
                                            </div>
                                            <a href="{{url('products-details')}}" class="z-40 absolute bottom-2 ltr:left-2 rtl:right-2 block bg-success p-1 leading-none rounded-sm text-white text-xs">Available</a>
                                        </div>
                                        <div class="product-details space-y-1">
                                            <h5 class="text-lg font-semibold">Smart Wrist Watch </h5>
                                            <div class="flex space-x-2 rtl:space-x-reverse">
                                            <div class="product-rating">
                                                <i class="ri ri-star-fill text-yellow-500 text-base"></i>
                                                <i class="ri ri-star-fill text-yellow-500 text-base"></i>
                                                <i class="ri ri-star-fill text-yellow-500 text-base"></i>
                                                <i class="ri ri-star-fill text-yellow-500 text-base"></i>
                                                <i class="ri ri-star-half-fill text-yellow-500 text-base"></i>
                                            </div>
                                            <p class=" my-auto text-gray-500  dark:text-white/70 text-sm space-x-2 rtl:space-x-reverse">4.5 (22,989 views)</p>
                                            </div>
                                            <div class="flex space-x-2 rtl:space-x-reverse">
                                            <h5 class="text-lg font-semibold">$399</h5>
                                            <span class="my-auto line-through  font-semibold text-base text-gray-500 dark:text-white/70">$599</span>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-span-12 md:col-span-6 xxl:!col-span-4">
                                    <div class="product-box box">
                                        <div class="box-body space-y-3">
                                        <div class="product-image">
                                            <a href="{{url('products-details')}}" class="image">
                                            <img class="mx-auto rounded-sm" src="{{asset('build/assets/img/ecommerce/products/7.png')}}" alt="img">
                                            </a>
                                            <div class="product-icons">
                                            <a aria-label="anchor" href="{{url('wishlist')}}" class="z-40 absolute top-2 ltr:right-2 rtl:left-2 block bg-white dark:bg-bgdark p-2 leading-none rounded-full text-gray-500 dark:text-white text-base"><i class="ri ri-heart-line"></i></a>
                                            <a aria-label="anchor" href="{{url('cart')}}" class="z-40 absolute top-12 ltr:right-2 rtl:left-2 block bg-white dark:bg-bgdark p-2 leading-none rounded-full text-gray-500 dark:text-white text-base"><i class="ri ri-shopping-cart-2-line"></i></a>
                                            <a aria-label="anchor" href="{{url('products-details')}}" class="z-40 absolute top-[5.5rem] ltr:right-2 rtl:left-2 block bg-white dark:bg-bgdark p-2 leading-[0] rounded-full text-gray-500 dark:text-white text-base"><i class="ri ri-eye-line leading-none"></i></a>
                                            </div>
                                            <a href="{{url('products-details')}}" class="z-40 absolute bottom-2 ltr:left-2 rtl:right-2 block bg-success p-1 leading-none rounded-sm text-white text-xs">Available</a>
                                        </div>
                                        <div class="product-details space-y-1">
                                            <h5 class="text-lg font-semibold">Sun Glasses</h5>
                                            <div class="flex space-x-2 rtl:space-x-reverse">
                                            <div class="product-rating">
                                                <i class="ri ri-star-fill text-yellow-500 text-base"></i>
                                                <i class="ri ri-star-fill text-yellow-500 text-base"></i>
                                                <i class="ri ri-star-fill text-yellow-500 text-base"></i>
                                                <i class="ri ri-star-fill text-gray-200 text-base"></i>
                                                <i class="ri ri-star-fill text-gray-200 text-base"></i>
                                            </div>
                                            <p class=" my-auto text-gray-500  dark:text-white/70 text-sm space-x-2 rtl:space-x-reverse">3 (10,252 views)</p>
                                            </div>
                                            <div class="flex space-x-2 rtl:space-x-reverse">
                                            <h5 class="text-lg font-semibold">$599</h5>
                                            <span class="my-auto line-through  font-semibold text-base text-gray-500 dark:text-white/70">$699</span>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-span-12 md:col-span-6 xxl:!col-span-4">
                                    <div class="product-box box">
                                        <div class="box-body space-y-3">
                                        <div class="product-image">
                                            <a href="{{url('products-details')}}" class="image">
                                            <img class="mx-auto rounded-sm" src="{{asset('build/assets/img/ecommerce/products/9.png')}}" alt="img">
                                            </a>
                                            <div class="product-icons">
                                            <a aria-label="anchor" href="{{url('wishlist')}}" class="z-40 absolute top-2 ltr:right-2 rtl:left-2 block bg-white dark:bg-bgdark p-2 leading-none rounded-full text-gray-500 dark:text-white text-base"><i class="ri ri-heart-line"></i></a>
                                            <a aria-label="anchor" href="{{url('cart')}}" class="z-40 absolute top-12 ltr:right-2 rtl:left-2 block bg-white dark:bg-bgdark p-2 leading-none rounded-full text-gray-500 dark:text-white text-base"><i class="ri ri-shopping-cart-2-line"></i></a>
                                            <a aria-label="anchor" href="{{url('products-details')}}" class="z-40 absolute top-[5.5rem] ltr:right-2 rtl:left-2 block bg-white dark:bg-bgdark p-2 leading-[0] rounded-full text-gray-500 dark:text-white text-base"><i class="ri ri-eye-line leading-none"></i></a>
                                            </div>
                                            <a href="{{url('products-details')}}" class="z-40 absolute bottom-2 ltr:left-2 rtl:right-2 block bg-success p-1 leading-none rounded-sm text-white text-xs">Available</a>
                                        </div>
                                        <div class="product-details space-y-1">
                                            <h5 class="text-lg font-semibold">Travel Bag For Womens</h5>
                                            <div class="flex space-x-2 rtl:space-x-reverse">
                                            <div class="product-rating">
                                                <i class="ri ri-star-fill text-yellow-500 text-base"></i>
                                                <i class="ri ri-star-fill text-yellow-500 text-base"></i>
                                                <i class="ri ri-star-fill text-yellow-500 text-base"></i>
                                                <i class="ri ri-star-half-fill text-yellow-500 text-base"></i>
                                                <i class="ri ri-star-fill text-gray-200 text-base"></i>
                                            </div>
                                            <p class=" my-auto text-gray-500  dark:text-white/70 text-sm space-x-2 rtl:space-x-reverse">3.5 (10,989 views)</p>
                                            </div>
                                            <div class="flex space-x-2 rtl:space-x-reverse">
                                            <h5 class="text-lg font-semibold">$299</h5>
                                            <span class="my-auto line-through  font-semibold text-base text-gray-500 dark:text-white/70">$399</span>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-span-12 md:col-span-6 xxl:!col-span-4">
                                    <div class="product-box box">
                                        <div class="box-body space-y-3">
                                        <div class="product-image">
                                            <a href="{{url('products-details')}}" class="image">
                                            <img class="mx-auto rounded-sm" src="{{asset('build/assets/img/ecommerce/products/8.png')}}" alt="img">
                                            </a>
                                            <div class="product-icons">
                                            <a aria-label="anchor" href="{{url('wishlist')}}" class="z-40 absolute top-2 ltr:right-2 rtl:left-2 block bg-white dark:bg-bgdark p-2 leading-none rounded-full text-gray-500 dark:text-white text-base"><i class="ri ri-heart-line"></i></a>
                                            <a aria-label="anchor" href="{{url('cart')}}" class="z-40 absolute top-12 ltr:right-2 rtl:left-2 block bg-white dark:bg-bgdark p-2 leading-none rounded-full text-gray-500 dark:text-white text-base"><i class="ri ri-shopping-cart-2-line"></i></a>
                                            <a aria-label="anchor" href="{{url('products-details')}}" class="z-40 absolute top-[5.5rem] ltr:right-2 rtl:left-2 block bg-white dark:bg-bgdark p-2 leading-[0] rounded-full text-gray-500 dark:text-white text-base"><i class="ri ri-eye-line leading-none"></i></a>
                                            </div>
                                            <a href="{{url('products-details')}}" class="z-40 absolute bottom-2 ltr:left-2 rtl:right-2 block bg-danger p-1 leading-none rounded-sm text-white text-xs">Out Of Stock</a>
                                        </div>
                                        <div class="product-details space-y-1">
                                            <h5 class="text-lg font-semibold">Men's Cowboy's Hat</h5>
                                            <div class="flex space-x-2 rtl:space-x-reverse">
                                            <div class="product-rating">
                                                <i class="ri ri-star-fill text-yellow-500 text-base"></i>
                                                <i class="ri ri-star-fill text-yellow-500 text-base"></i>
                                                <i class="ri ri-star-fill text-yellow-500 text-base"></i>
                                                <i class="ri ri-star-fill text-yellow-500 text-base"></i>
                                                <i class="ri ri-star-half-fill text-yellow-500 text-base"></i>
                                            </div>
                                            <p class=" my-auto text-gray-500  dark:text-white/70 text-sm space-x-2 rtl:space-x-reverse">4.5 (50,989 views)</p>
                                            </div>
                                            <div class="flex space-x-2 rtl:space-x-reverse">
                                            <h5 class="text-lg font-semibold">$150</h5>
                                            <span class="my-auto line-through  font-semibold text-base text-gray-500 dark:text-white/70">$186</span>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-span-12 md:col-span-6 xxl:!col-span-4">
                                    <div class="product-box box">
                                        <div class="box-body space-y-3">
                                        <div class="product-image">
                                            <a href="{{url('products-details')}}" class="image">
                                            <img class="mx-auto rounded-sm" src="{{asset('build/assets/img/ecommerce/products/10.png')}}" alt="img">
                                            </a>
                                            <div class="product-icons">
                                            <a aria-label="anchor" href="{{url('wishlist')}}" class="z-40 absolute top-2 ltr:right-2 rtl:left-2 block bg-white dark:bg-bgdark p-2 leading-none rounded-full text-gray-500 dark:text-white text-base"><i class="ri ri-heart-line"></i></a>
                                            <a aria-label="anchor" href="{{url('cart')}}" class="z-40 absolute top-12 ltr:right-2 rtl:left-2 block bg-white dark:bg-bgdark p-2 leading-none rounded-full text-gray-500 dark:text-white text-base"><i class="ri ri-shopping-cart-2-line"></i></a>
                                            <a aria-label="anchor" href="{{url('products-details')}}" class="z-40 absolute top-[5.5rem] ltr:right-2 rtl:left-2 block bg-white dark:bg-bgdark p-2 leading-[0] rounded-full text-gray-500 dark:text-white text-base"><i class="ri ri-eye-line leading-none"></i></a>
                                            </div>
                                            <a href="{{url('products-details')}}" class="z-40 absolute bottom-2 ltr:left-2 rtl:right-2 block bg-success p-1 leading-none rounded-sm text-white text-xs">Available</a>
                                        </div>
                                        <div class="product-details space-y-1">
                                            <h5 class="text-lg font-semibold">Leather Wallet For Grils</h5>
                                            <div class="flex space-x-2 rtl:space-x-reverse">
                                            <div class="product-rating">
                                                <i class="ri ri-star-fill text-yellow-500 text-base"></i>
                                                <i class="ri ri-star-fill text-yellow-500 text-base"></i>
                                                <i class="ri ri-star-fill text-yellow-500 text-base"></i>
                                                <i class="ri ri-star-fill text-yellow-500 text-base"></i>
                                                <i class="ri ri-star-half-fill text-yellow-500 text-base"></i>
                                            </div>
                                            <p class=" my-auto text-gray-500  dark:text-white/70 text-sm space-x-2 rtl:space-x-reverse">4.5 (45,989 views)</p>
                                            </div>
                                            <div class="flex space-x-2 rtl:space-x-reverse">
                                            <h5 class="text-lg font-semibold">$100</h5>
                                            <span class="my-auto line-through  font-semibold text-base text-gray-500 dark:text-white/70">$150</span>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-span-12 md:col-span-6 xxl:!col-span-4">
                                    <div class="product-box box">
                                        <div class="box-body space-y-3">
                                        <div class="product-image">
                                            <a href="{{url('products-details')}}" class="image">
                                            <img class="mx-auto rounded-sm" src="{{asset('build/assets/img/ecommerce/products/11.png')}}" alt="img">
                                            </a>
                                            <div class="product-icons">
                                            <a aria-label="anchor" href="{{url('wishlist')}}" class="z-40 absolute top-2 ltr:right-2 rtl:left-2 block bg-white dark:bg-bgdark p-2 leading-none rounded-full text-gray-500 dark:text-white text-base"><i class="ri ri-heart-line"></i></a>
                                            <a aria-label="anchor" href="{{url('cart')}}" class="z-40 absolute top-12 ltr:right-2 rtl:left-2 block bg-white dark:bg-bgdark p-2 leading-none rounded-full text-gray-500 dark:text-white text-base"><i class="ri ri-shopping-cart-2-line"></i></a>
                                            <a aria-label="anchor" href="{{url('products-details')}}" class="z-40 absolute top-[5.5rem] ltr:right-2 rtl:left-2 block bg-white dark:bg-bgdark p-2 leading-[0] rounded-full text-gray-500 dark:text-white text-base"><i class="ri ri-eye-line leading-none"></i></a>
                                            </div>
                                            <a href="{{url('products-details')}}" class="z-40 absolute bottom-2 ltr:left-2 rtl:right-2 block bg-danger p-1 leading-none rounded-sm text-white text-xs">Out Of Stock</a>
                                        </div>
                                        <div class="product-details space-y-1">
                                            <h5 class="text-lg font-semibold">Red Dotted Dress For Girls</h5>
                                            <div class="flex space-x-2 rtl:space-x-reverse">
                                            <div class="product-rating">
                                                <i class="ri ri-star-fill text-yellow-500 text-base"></i>
                                                <i class="ri ri-star-fill text-yellow-500 text-base"></i>
                                                <i class="ri ri-star-fill text-yellow-500 text-base"></i>
                                                <i class="ri ri-star-half-fill text-yellow-500 text-base"></i>
                                                <i class="ri ri-star-half-fill text-gray-200 text-base"></i>
                                            </div>
                                            <p class=" my-auto text-gray-500  dark:text-white/70 text-sm space-x-2 rtl:space-x-reverse">3.5 (45,989 views)</p>
                                            </div>
                                            <div class="flex space-x-2 rtl:space-x-reverse">
                                            <h5 class="text-lg font-semibold">$180</h5>
                                            <span class="my-auto line-through  font-semibold text-base text-gray-500 dark:text-white/70">$200</span>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-span-12 md:col-span-6 xxl:!col-span-4">
                                    <div class="product-box box">
                                        <div class="box-body space-y-3">
                                        <div class="product-image">
                                            <a href="{{url('products-details')}}" class="image">
                                            <img class="mx-auto rounded-sm" src="{{asset('build/assets/img/ecommerce/products/12.png')}}" alt="img">
                                            </a>
                                            <div class="product-icons">
                                            <a aria-label="anchor" href="{{url('wishlist')}}" class="z-40 absolute top-2 ltr:right-2 rtl:left-2 block bg-white dark:bg-bgdark p-2 leading-none rounded-full text-gray-500 dark:text-white text-base"><i class="ri ri-heart-line"></i></a>
                                            <a aria-label="anchor" href="{{url('cart')}}" class="z-40 absolute top-12 ltr:right-2 rtl:left-2 block bg-white dark:bg-bgdark p-2 leading-none rounded-full text-gray-500 dark:text-white text-base"><i class="ri ri-shopping-cart-2-line"></i></a>
                                            <a aria-label="anchor" href="{{url('products-details')}}" class="z-40 absolute top-[5.5rem] ltr:right-2 rtl:left-2 block bg-white dark:bg-bgdark p-2 leading-[0] rounded-full text-gray-500 dark:text-white text-base"><i class="ri ri-eye-line leading-none"></i></a>
                                            </div>
                                            <a href="{{url('products-details')}}" class="z-40 absolute bottom-2 ltr:left-2 rtl:right-2 block bg-success p-1 leading-none rounded-sm text-white text-xs">Available</a>
                                        </div>
                                        <div class="product-details space-y-1">
                                            <h5 class="text-lg font-semibold">Winter Jacket For Men's</h5>
                                            <div class="flex space-x-2 rtl:space-x-reverse">
                                            <div class="product-rating">
                                                <i class="ri ri-star-fill text-yellow-500 text-base"></i>
                                                <i class="ri ri-star-fill text-yellow-500 text-base"></i>
                                                <i class="ri ri-star-fill text-yellow-500 text-base"></i>
                                                <i class="ri ri-star-half-fill text-yellow-500 text-base"></i>
                                                <i class="ri ri-star-half-fill text-gray-200 text-base"></i>
                                            </div>
                                            <p class=" my-auto text-gray-500  dark:text-white/70 text-sm space-x-2 rtl:space-x-reverse">4.5 (45,989 views)</p>
                                            </div>
                                            <div class="flex space-x-2 rtl:space-x-reverse">
                                            <h5 class="text-lg font-semibold">$465</h5>
                                            <span class="my-auto line-through  font-semibold text-base text-gray-500 dark:text-white/70">$500</span>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <nav class="flex justify-end items-center space-x-2 rtl:space-x-reverse mb-5">
                                    <a class="w-10 h-10 bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 hover:bg-primary hover:text-white p-2 inline-flex justify-center text-sm font-medium items-center gap-2 rounded-full" href="javascript:void(0);">
                                    <span aria-hidden="true">«</span>
                                    <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="w-10 h-10 bg-primary text-white p-2 inline-flex items-center justify-center text-sm font-medium rounded-full" href="javascript:void(0);" aria-current="page">1</a>
                                    <a class="w-10 h-10 bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 hover:bg-primary hover:text-white p-2 inline-flex justify-center items-center text-sm font-medium rounded-full" href="javascript:void(0);">2</a>
                                    <a class="w-10 h-10 bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 hover:bg-primary hover:text-white p-2 inline-flex justify-center items-center text-sm font-medium rounded-full" href="javascript:void(0);">3</a>
                                    <a class="w-10 h-10 bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 hover:bg-primary hover:text-white p-2 inline-flex justify-center text-sm font-medium items-center gap-2 rounded-full" href="javascript:void(0);">
                                    <span class="sr-only">Next</span>
                                    <span aria-hidden="true">»</span>
                                    </a>
                                </nav>
                                </div>
                            </div>
                            <!-- End::row-1 -->
                            
                        </div>
                        <!-- Start::main-content -->

                    </div>

@endsection

@section('scripts')

@endsection