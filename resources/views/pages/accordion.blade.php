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
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Accordion</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                        <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Components
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                        </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        Accordion
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-x-6">
                            <div class="col-span-12 lg:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title"> Basic Accordion</h5>
                                </div>
                                <div class="box-body">
                                    <div class="hs-accordion-group">
                                    <div class="hs-accordion active" id="hs-basic-heading-one">
                                        <button class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:pb-3 group py-0 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                        aria-controls="hs-basic-collapse-one" type="button">
                                        Accordion #1
                                        </button>
                                        <div id="hs-basic-collapse-one"
                                        class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                        aria-labelledby="hs-basic-heading-one">
                                        <p class="text-gray-800 dark:text-gray-200">
                                            <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                            plugin adds the appropriate classes that we use to style each element. These classes control the
                                            overall appearance, as well as the showing and hiding via CSS transitions.
                                        </p>
                                        </div>
                                    </div>

                                    <div class="hs-accordion" id="hs-basic-heading-two">
                                        <button
                                        class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:pb-3 group pb-0 pt-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                        aria-controls="hs-basic-collapse-two" type="button">
                                        Accordion #2
                                        </button>
                                        <div id="hs-basic-collapse-two"
                                        class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                        aria-labelledby="hs-basic-heading-two">
                                        <p class="text-gray-800 dark:text-gray-200">
                                            <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                            plugin adds the appropriate classes that we use to style each element. These classes control the
                                            overall appearance, as well as the showing and hiding via CSS transitions.
                                        </p>
                                        </div>
                                    </div>

                                    <div class="hs-accordion" id="hs-basic-heading-three">
                                        <button
                                        class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:pb-3 group pb-0 pt-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                        aria-controls="hs-basic-collapse-three" type="button">
                                        Accordion #3
                                        </button>
                                        <div id="hs-basic-collapse-three"
                                        class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                        aria-labelledby="hs-basic-heading-three">
                                        <p class="text-gray-800 dark:text-gray-200">
                                            <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                            plugin adds the appropriate classes that we use to style each element. These classes control the
                                            overall appearance, as well as the showing and hiding via CSS transitions.
                                        </p>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title"> Basic Accordion With Icon</h5>
                                </div>
                                <div class="box-body">
                                    <div class="hs-accordion-group" data-hs-accordion-always-open>
                                    <div class="hs-accordion active" id="hs-basic-always-open-heading-one">
                                        <button
                                        class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:pb-3 py-0  inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                        aria-controls="hs-basic-always-open-collapse-one" type="button">
                                        <svg
                                            class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                            width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" />
                                            <path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" />
                                        </svg>
                                        <svg
                                            class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                            width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" />
                                        </svg>
                                        Accordion #1
                                        </button>
                                        <div id="hs-basic-always-open-collapse-one"
                                        class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                        aria-labelledby="hs-basic-always-open-heading-one">
                                        <p class="text-gray-800 dark:text-gray-200">
                                            <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                            plugin adds the appropriate classes that we use to style each element. These classes control the
                                            overall appearance, as well as the showing and hiding via CSS transitions.
                                        </p>
                                        </div>
                                    </div>

                                    <div class="hs-accordion" id="hs-basic-always-open-heading-two">
                                        <button
                                        class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:pb-3 pb-0 pt-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                        aria-controls="hs-basic-always-open-collapse-two" type="button">
                                        <svg
                                            class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                            width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" />
                                            <path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" />
                                        </svg>
                                        <svg
                                            class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                            width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" />
                                        </svg>
                                        Accordion #2
                                        </button>
                                        <div id="hs-basic-always-open-collapse-two"
                                        class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                        aria-labelledby="hs-basic-always-open-heading-two">
                                        <p class="text-gray-800 dark:text-gray-200">
                                            <em>This is the second item's accordion body.</em> It is hidden by default, until the collapse
                                            plugin adds the appropriate classes that we use to style each element. These classes control the
                                            overall appearance, as well as the showing and hiding via CSS transitions.
                                        </p>
                                        </div>
                                    </div>

                                    <div class="hs-accordion" id="hs-basic-always-open-heading-three">
                                        <button
                                        class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:pb-3 pb-0 pt-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                        aria-controls="hs-basic-always-open-collapse-three" type="button">
                                        <svg
                                            class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                            width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" />
                                            <path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" />
                                        </svg>
                                        <svg
                                            class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                            width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" />
                                        </svg>
                                        Accordion #3
                                        </button>
                                        <div id="hs-basic-always-open-collapse-three"
                                        class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                        aria-labelledby="hs-basic-always-open-heading-three">
                                        <p class="text-gray-800 dark:text-gray-200">
                                            <em>This is the first item's accordion body.</em> It is hidden by default, until the collapse
                                            plugin adds the appropriate classes that we use to style each element. These classes control the
                                            overall appearance, as well as the showing and hiding via CSS transitions.
                                        </p>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-1 -->

                            <!-- Start::row-2 -->
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="box">
                                    <div class="box-header">
                                        <h5 class="box-title"> Basic Accordion with Border</h5>
                                    </div>
                                    <div class="box-body">
                                        <div class="hs-accordion-group">
                                        <div class="hs-accordion active bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10" id="hs-basic-heading-1">
                                            <button
                                            class="hs-accordion-toggle hs-accordion-active:text-primary group py-4 px-5 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                            aria-controls="hs-basic-collapse-1" type="button">
                                            Accordion #1
                                            </button>
                                            <div id="hs-basic-collapse-1"
                                            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                            aria-labelledby="hs-basic-heading-1">
                                            <p class="text-gray-800 dark:text-gray-200 pb-4 px-5">
                                                <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                                plugin adds the appropriate classes that we use to style each element. These classes control the
                                                overall appearance, as well as the showing and hiding via CSS transitions.
                                            </p>
                                            </div>
                                        </div>

                                        <div class="hs-accordion bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10" id="hs-basic-heading-2">
                                            <button
                                            class="hs-accordion-toggle hs-accordion-active:text-primary group py-4 px-5 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                            aria-controls="hs-basic-collapse-2" type="button">
                                            Accordion #2
                                            </button>
                                            <div id="hs-basic-collapse-2"
                                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                            aria-labelledby="hs-basic-heading-2">
                                            <p class="text-gray-800 dark:text-gray-200 pb-4 px-5">
                                                <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                                plugin adds the appropriate classes that we use to style each element. These classes control the
                                                overall appearance, as well as the showing and hiding via CSS transitions.
                                            </p>
                                            </div>
                                        </div>

                                        <div class="hs-accordion bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10" id="hs-basic-heading-3">
                                            <button
                                            class="hs-accordion-toggle hs-accordion-active:text-primary group py-4 px-5 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                            aria-controls="hs-basic-collapse-3" type="button">
                                            Accordion #3
                                            </button>
                                            <div id="hs-basic-collapse-3"
                                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                            aria-labelledby="hs-basic-heading-3">
                                            <p class="text-gray-800 dark:text-gray-200 pb-4 px-5">
                                                <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                                plugin adds the appropriate classes that we use to style each element. These classes control the
                                                overall appearance, as well as the showing and hiding via CSS transitions.
                                            </p>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="box">
                                    <div class="box-header">
                                        <h5 class="box-title"> Basic Accordion With Icon and Border</h5>
                                    </div>
                                    <div class="box-body">
                                        <div class="hs-accordion-group" data-hs-accordion-always-open>
                                        <div class="hs-accordion active bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10" id="hs-basic-always-open-heading-1">
                                            <button
                                            class="hs-accordion-toggle hs-accordion-active:text-primary py-4 px-5 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                            aria-controls="hs-basic-always-open-collapse-1" type="button">
                                            <svg
                                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                                <path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                            </svg>
                                            <svg
                                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                            </svg>
                                            Accordion #1
                                            </button>
                                            <div id="hs-basic-always-open-collapse-1"
                                            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                            aria-labelledby="hs-basic-always-open-heading-1">
                                            <p class="text-gray-800 dark:text-gray-200 pb-4 px-5">
                                                <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                                plugin adds the appropriate classes that we use to style each element. These classes control the
                                                overall appearance, as well as the showing and hiding via CSS transitions.
                                            </p>
                                            </div>
                                        </div>

                                        <div class="hs-accordion bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10" id="hs-basic-always-open-heading-2">
                                            <button
                                            class="hs-accordion-toggle hs-accordion-active:text-primary py-4 px-5 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                            aria-controls="hs-basic-always-open-collapse-2" type="button">
                                            <svg
                                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                                <path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                            </svg>
                                            <svg
                                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                            </svg>
                                            Accordion #2
                                            </button>
                                            <div id="hs-basic-always-open-collapse-2"
                                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                            aria-labelledby="hs-basic-always-open-heading-2">
                                            <p class="text-gray-800 dark:text-gray-200 pb-4 px-5">
                                                <em>This is the second item's accordion body.</em> It is hidden by default, until the collapse
                                                plugin adds the appropriate classes that we use to style each element. These classes control the
                                                overall appearance, as well as the showing and hiding via CSS transitions.
                                            </p>
                                            </div>
                                        </div>

                                        <div class="hs-accordion bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10" id="hs-basic-always-open-heading-3">
                                            <button
                                            class="hs-accordion-toggle hs-accordion-active:text-primary py-4 px-5 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                            aria-controls="hs-basic-always-open-collapse-3" type="button">
                                            <svg
                                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                                <path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                            </svg>
                                            <svg
                                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                            </svg>
                                            Accordion #3
                                            </button>
                                            <div id="hs-basic-always-open-collapse-3"
                                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                            aria-labelledby="hs-basic-always-open-heading-3">
                                            <p class="text-gray-800 dark:text-gray-200 pb-4 px-5">
                                                <em>This is the first item's accordion body.</em> It is hidden by default, until the collapse
                                                plugin adds the appropriate classes that we use to style each element. These classes control the
                                                overall appearance, as well as the showing and hiding via CSS transitions.
                                            </p>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-2 -->

                            <!-- Start::row-3 -->
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="box">
                                    <div class="box-header">
                                        <h5 class="box-title">Accordion With Title And Arrow Stretched </h5>
                                    </div>
                                    <div class="box-body">
                                        <div class="hs-accordion-group">
                                        <div class="hs-accordion active" id="hs-basic-with-title-and-arrow-stretched-heading-one">
                                            <button
                                            class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:pb-3 group py-0 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                            aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-one" type="button">
                                            Accordion #1
                                            <svg
                                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                            <svg
                                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                            </button>
                                            <div id="hs-basic-with-title-and-arrow-stretched-collapse-one"
                                            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                            aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-one">
                                            <p class="text-gray-800 dark:text-gray-200">
                                                <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                                plugin adds the appropriate classes that we use to style each element. These classes control the
                                                overall appearance, as well as the showing and hiding via CSS transitions.
                                            </p>
                                            </div>
                                        </div>

                                        <div class="hs-accordion" id="hs-basic-with-title-and-arrow-stretched-heading-two">
                                            <button
                                            class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:pb-3 group pb-0 pt-3 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                            aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-two" type="button">
                                            Accordion #2
                                            <svg
                                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                            <svg
                                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                            </button>
                                            <div id="hs-basic-with-title-and-arrow-stretched-collapse-two"
                                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                            aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-two">
                                            <p class="text-gray-800 dark:text-gray-200">
                                                <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                                plugin adds the appropriate classes that we use to style each element. These classes control the
                                                overall appearance, as well as the showing and hiding via CSS transitions.
                                            </p>
                                            </div>
                                        </div>

                                        <div class="hs-accordion" id="hs-basic-with-title-and-arrow-stretched-heading-three">
                                            <button
                                            class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:pb-3 group pb-0 pt-3 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                            aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-three" type="button">
                                            Accordion #3
                                            <svg
                                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                            <svg
                                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                            </button>
                                            <div id="hs-basic-with-title-and-arrow-stretched-collapse-three"
                                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                            aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-three">
                                            <p class="text-gray-800 dark:text-gray-200">
                                                <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                                plugin adds the appropriate classes that we use to style each element. These classes control the
                                                overall appearance, as well as the showing and hiding via CSS transitions.
                                            </p>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="box">
                                    <div class="box-header">
                                        <h5 class="box-title">Accordion With Arrows</h5>
                                    </div>
                                    <div class="box-body">
                                        <div class="hs-accordion-group">
                                        <div class="hs-accordion active" id="hs-basic-with-arrow-heading-one">
                                            <button
                                            class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:pb-3 group py-0 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                            aria-controls="hs-basic-with-arrow-collapse-one" type="button">
                                            <svg
                                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                            <svg
                                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                            Accordion #1
                                            </button>
                                            <div id="hs-basic-with-arrow-collapse-one"
                                            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                            aria-labelledby="hs-basic-with-arrow-heading-one">
                                            <p class="text-gray-800 dark:text-gray-200">
                                                <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                                plugin adds the appropriate classes that we use to style each element. These classes control the
                                                overall appearance, as well as the showing and hiding via CSS transitions.
                                            </p>
                                            </div>
                                        </div>

                                        <div class="hs-accordion" id="hs-basic-with-arrow-heading-two">
                                            <button
                                            class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:pb-3 group pb-0 pt-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                            aria-controls="hs-basic-with-arrow-collapse-two" type="button">
                                            <svg
                                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                            <svg
                                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                            Accordion #2
                                            </button>
                                            <div id="hs-basic-with-arrow-collapse-two"
                                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                            aria-labelledby="hs-basic-with-arrow-heading-two">
                                            <p class="text-gray-800 dark:text-gray-200">
                                                <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                                plugin adds the appropriate classes that we use to style each element. These classes control the
                                                overall appearance, as well as the showing and hiding via CSS transitions.
                                            </p>
                                            </div>
                                        </div>

                                        <div class="hs-accordion" id="hs-basic-with-arrow-heading-three">
                                            <button
                                            class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:pb-3 group pb-0 pt-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                            aria-controls="hs-basic-with-arrow-collapse-three" type="button">
                                            <svg
                                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                            <svg
                                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                            Accordion #3
                                            </button>
                                            <div id="hs-basic-with-arrow-collapse-three"
                                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                            aria-labelledby="hs-basic-with-arrow-heading-three">
                                            <p class="text-gray-800 dark:text-gray-200">
                                                <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                                plugin adds the appropriate classes that we use to style each element. These classes control the
                                                overall appearance, as well as the showing and hiding via CSS transitions.
                                            </p>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-3 -->

                            <!-- Start::row-4 -->
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Accordion With Title, Arrow Stretched And Border</h5>
                                        </div>
                                        <div class="box-body">
                                            <div class="hs-accordion-group">
                                            <div class="hs-accordion active bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10" id="hs-basic-with-title-and-arrow-stretched-heading-1">
                                                <button
                                                class="hs-accordion-toggle hs-accordion-active:text-primary group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-1" type="button">
                                                Accordion #1
                                                <svg
                                                    class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                </svg>
                                                <svg
                                                    class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                </svg>
                                                </button>
                                                <div id="hs-basic-with-title-and-arrow-stretched-collapse-1"
                                                class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                                aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-1">
                                                <p class="text-gray-800 dark:text-gray-200 pb-4 px-5">
                                                    <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                                    plugin adds the appropriate classes that we use to style each element. These classes control the
                                                    overall appearance, as well as the showing and hiding via CSS transitions.
                                                </p>
                                                </div>
                                            </div>

                                            <div class="hs-accordion bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10" id="hs-basic-with-title-and-arrow-stretched-heading-2">
                                                <button
                                                class="hs-accordion-toggle hs-accordion-active:text-primary group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-2" type="button">
                                                Accordion #2
                                                <svg
                                                    class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                </svg>
                                                <svg
                                                    class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                </svg>
                                                </button>
                                                <div id="hs-basic-with-title-and-arrow-stretched-collapse-2"
                                                class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                                aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-2">
                                                <p class="text-gray-800 dark:text-gray-200 pb-4 px-5">
                                                    <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                                    plugin adds the appropriate classes that we use to style each element. These classes control the
                                                    overall appearance, as well as the showing and hiding via CSS transitions.
                                                </p>
                                                </div>
                                            </div>

                                            <div class="hs-accordion bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10" id="hs-basic-with-title-and-arrow-stretched-heading-3">
                                                <button
                                                class="hs-accordion-toggle hs-accordion-active:text-primary group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-3" type="button">
                                                Accordion #3
                                                <svg
                                                    class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                </svg>
                                                <svg
                                                    class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                </svg>
                                                </button>
                                                <div id="hs-basic-with-title-and-arrow-stretched-collapse-3"
                                                class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                                aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-3">
                                                <p class="text-gray-800 dark:text-gray-200 pb-4 px-5">
                                                    <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                                    plugin adds the appropriate classes that we use to style each element. These classes control the
                                                    overall appearance, as well as the showing and hiding via CSS transitions.
                                                </p>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Accordion With Arrows and Borders</h5>
                                        </div>
                                        <div class="box-body">
                                            <div class="hs-accordion-group">
                                            <div class="hs-accordion bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10 active" id="hs-basic-with-arrow-heading-1">
                                                <button
                                                class="hs-accordion-toggle hs-accordion-active:text-primary group py-4 px-5 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                aria-controls="hs-basic-with-arrow-collapse-1" type="button">
                                                <svg
                                                    class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                </svg>
                                                <svg
                                                    class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                </svg>
                                                Accordion #1
                                                </button>
                                                <div id="hs-basic-with-arrow-collapse-1"
                                                class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                                aria-labelledby="hs-basic-with-arrow-heading-1">
                                                <p class="text-gray-800 dark:text-gray-200 pb-4 px-5">
                                                    <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                                    plugin adds the appropriate classes that we use to style each element. These classes control the
                                                    overall appearance, as well as the showing and hiding via CSS transitions.
                                                </p>
                                                </div>
                                            </div>

                                            <div class="hs-accordion bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10" id="hs-basic-with-arrow-heading-2">
                                                <button
                                                class="hs-accordion-toggle hs-accordion-active:text-primary group py-4 px-5 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                aria-controls="hs-basic-with-arrow-collapse-2" type="button">
                                                <svg
                                                    class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                </svg>
                                                <svg
                                                    class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                </svg>
                                                Accordion #2
                                                </button>
                                                <div id="hs-basic-with-arrow-collapse-2"
                                                class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                                aria-labelledby="hs-basic-with-arrow-heading-2">
                                                <p class="text-gray-800 dark:text-gray-200 pb-4 px-5">
                                                    <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                                    plugin adds the appropriate classes that we use to style each element. These classes control the
                                                    overall appearance, as well as the showing and hiding via CSS transitions.
                                                </p>
                                                </div>
                                            </div>

                                            <div class="hs-accordion bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10" id="hs-basic-with-arrow-heading-3">
                                                <button
                                                class="hs-accordion-toggle hs-accordion-active:text-primary group py-4 px-5 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                aria-controls="hs-basic-with-arrow-collapse-3" type="button">
                                                <svg
                                                    class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                </svg>
                                                <svg
                                                    class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                </svg>
                                                Accordion #3
                                                </button>
                                                <div id="hs-basic-with-arrow-collapse-3"
                                                class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                                aria-labelledby="hs-basic-with-arrow-heading-3">
                                                <p class="text-gray-800 dark:text-gray-200 pb-4 px-5">
                                                    <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                                    plugin adds the appropriate classes that we use to style each element. These classes control the
                                                    overall appearance, as well as the showing and hiding via CSS transitions.
                                                </p>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-4 -->

                            <!-- Start::row-5 -->
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="box">
                                    <div class="box-header">
                                        <h5 class="box-title">Primary Accordion</h5>
                                    </div>
                                    <div class="box-body">
                                        <div class="hs-accordion-group">
                                        <div class="hs-accordion active overflow-hidden bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10" id="hs-primary-heading-1">
                                            <button
                                            class="hs-accordion-toggle hs-accordion-active:text-white hs-accordion-active:bg-primary group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-white dark:text-gray-200 dark:hover:text-white/80"
                                            aria-controls="hs-primary-collapse-1" type="button">
                                            Accordion #1
                                            <svg
                                                class="hs-accordion-active:hidden hs-accordion-active:text-white hs-accordion-active:group-hover:text-white block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                            <svg
                                                class="hs-accordion-active:block hs-accordion-active:text-white hs-accordion-active:group-hover:text-white hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                            </button>
                                            <div id="hs-primary-collapse-1"
                                            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                            aria-labelledby="hs-primary-heading-1">
                                            <p class="text-gray-800 dark:text-gray-200 py-4 px-5">
                                                <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                                plugin adds the appropriate classes that we use to style each element. These classes control the
                                                overall appearance, as well as the showing and hiding via CSS transitions.
                                            </p>
                                            </div>
                                        </div>

                                        <div class="hs-accordion overflow-hidden bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10" id="hs-primary-heading-2">
                                            <button
                                            class="hs-accordion-toggle hs-accordion-active:text-white hs-accordion-active:bg-primary group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-white dark:text-gray-200 dark:hover:text-white/80"
                                            aria-controls="hs-primary-collapse-2" type="button">
                                            Accordion #2
                                            <svg
                                                class="hs-accordion-active:hidden hs-accordion-active:text-white hs-accordion-active:group-hover:text-white block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                            <svg
                                                class="hs-accordion-active:block hs-accordion-active:text-white hs-accordion-active:group-hover:text-white hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                            </button>
                                            <div id="hs-primary-collapse-2"
                                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                            aria-labelledby="hs-primary-heading-2">
                                            <p class="text-gray-800 dark:text-gray-200 py-4 px-5">
                                                <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                                plugin adds the appropriate classes that we use to style each element. These classes control the
                                                overall appearance, as well as the showing and hiding via CSS transitions.
                                            </p>
                                            </div>
                                        </div>

                                        <div class="hs-accordion overflow-hidden bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10" id="hs-primary-heading-3">
                                            <button
                                            class="hs-accordion-toggle hs-accordion-active:text-white hs-accordion-active:bg-primary group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-white dark:text-gray-200 dark:hover:text-white/80"
                                            aria-controls="hs-primary-collapse-3" type="button">
                                            Accordion #3
                                            <svg
                                                class="hs-accordion-active:hidden hs-accordion-active:text-white hs-accordion-active:group-hover:text-white block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                            <svg
                                                class="hs-accordion-active:block hs-accordion-active:text-white hs-accordion-active:group-hover:text-white hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                            </button>
                                            <div id="hs-primary-collapse-3"
                                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                            aria-labelledby="hs-primary-heading-3">
                                            <p class="text-gray-800 dark:text-gray-200 py-4 px-5">
                                                <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                                plugin adds the appropriate classes that we use to style each element. These classes control the
                                                overall appearance, as well as the showing and hiding via CSS transitions.
                                            </p>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="box">
                                    <div class="box-header">
                                        <h5 class="box-title">secondary Accordion</h5>
                                    </div>
                                    <div class="box-body">
                                        <div class="hs-accordion-group">
                                        <div class="hs-accordion active overflow-hidden bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10" id="hs-secondary-heading-1">
                                            <button
                                            class="hs-accordion-toggle hs-accordion-active:text-white hs-accordion-active:bg-secondary group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-white dark:text-gray-200 dark:hover:text-white/80"
                                            aria-controls="hs-secondary-collapse-1" type="button">
                                            Accordion #1
                                            <svg
                                                class="hs-accordion-active:hidden hs-accordion-active:text-white hs-accordion-active:group-hover:text-white block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                            <svg
                                                class="hs-accordion-active:block hs-accordion-active:text-white hs-accordion-active:group-hover:text-white hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                            </button>
                                            <div id="hs-secondary-collapse-1"
                                            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                            aria-labelledby="hs-secondary-heading-1">
                                            <p class="text-gray-800 dark:text-gray-200 py-4 px-5">
                                                <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                                plugin adds the appropriate classes that we use to style each element. These classes control the
                                                overall appearance, as well as the showing and hiding via CSS transitions.
                                            </p>
                                            </div>
                                        </div>

                                        <div class="hs-accordion overflow-hidden bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10" id="hs-secondary-heading-2">
                                            <button
                                            class="hs-accordion-toggle hs-accordion-active:text-white hs-accordion-active:bg-secondary group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-white dark:text-gray-200 dark:hover:text-white/80"
                                            aria-controls="hs-secondary-collapse-2" type="button">
                                            Accordion #2
                                            <svg
                                                class="hs-accordion-active:hidden hs-accordion-active:text-white hs-accordion-active:group-hover:text-white block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                            <svg
                                                class="hs-accordion-active:block hs-accordion-active:text-white hs-accordion-active:group-hover:text-white hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                            </button>
                                            <div id="hs-secondary-collapse-2"
                                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                            aria-labelledby="hs-secondary-heading-2">
                                            <p class="text-gray-800 dark:text-gray-200 py-4 px-5">
                                                <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                                plugin adds the appropriate classes that we use to style each element. These classes control the
                                                overall appearance, as well as the showing and hiding via CSS transitions.
                                            </p>
                                            </div>
                                        </div>

                                        <div class="hs-accordion overflow-hidden bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10" id="hs-secondary-heading-3">
                                            <button
                                            class="hs-accordion-toggle hs-accordion-active:text-white hs-accordion-active:bg-secondary group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-white dark:text-gray-200 dark:hover:text-white/80"
                                            aria-controls="hs-secondary-collapse-3" type="button">
                                            Accordion #3
                                            <svg
                                                class="hs-accordion-active:hidden hs-accordion-active:text-white hs-accordion-active:group-hover:text-white block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                            <svg
                                                class="hs-accordion-active:block hs-accordion-active:text-white hs-accordion-active:group-hover:text-white hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                            </button>
                                            <div id="hs-secondary-collapse-3"
                                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                            aria-labelledby="hs-secondary-heading-3">
                                            <p class="text-gray-800 dark:text-gray-200 py-4 px-5">
                                                <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                                plugin adds the appropriate classes that we use to style each element. These classes control the
                                                overall appearance, as well as the showing and hiding via CSS transitions.
                                            </p>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-5 -->

                            <!-- Start::row-6 -->
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="box">
                                    <div class="box-header">
                                        <h5 class="box-title">primary Soft Colored Accordion</h5>
                                    </div>
                                    <div class="box-body">
                                        <div class="hs-accordion-group">
                                        <div class="hs-accordion active overflow-hidden bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10" id="hs-accordion-heading-1">
                                            <button
                                            class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:bg-primary/10 group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                            aria-controls="hs-accordion-collapse-1" type="button">
                                            Accordion #1
                                            <svg
                                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                            <svg
                                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                            </button>
                                            <div id="hs-accordion-collapse-1"
                                            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                            aria-labelledby="hs-accordion-heading-1">
                                            <p class="text-gray-800 dark:text-gray-200 py-4 px-5">
                                                <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                                plugin adds the appropriate classes that we use to style each element. These classes control the
                                                overall appearance, as well as the showing and hiding via CSS transitions.
                                            </p>
                                            </div>
                                        </div>

                                        <div class="hs-accordion overflow-hidden bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10" id="hs-accordion-heading-2">
                                            <button
                                            class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:bg-primary/10 group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                            aria-controls="hs-accordion-collapse-2" type="button">
                                            Accordion #2
                                            <svg
                                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                            <svg
                                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                            </button>
                                            <div id="hs-accordion-collapse-2"
                                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                            aria-labelledby="hs-accordion-heading-2">
                                            <p class="text-gray-800 dark:text-gray-200 py-4 px-5">
                                                <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                                plugin adds the appropriate classes that we use to style each element. These classes control the
                                                overall appearance, as well as the showing and hiding via CSS transitions.
                                            </p>
                                            </div>
                                        </div>

                                        <div class="hs-accordion overflow-hidden bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10" id="hs-accordion-heading-3">
                                            <button
                                            class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:bg-primary/10 group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                            aria-controls="hs-accordion-collapse-3" type="button">
                                            Accordion #3
                                            <svg
                                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                            <svg
                                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                            </button>
                                            <div id="hs-accordion-collapse-3"
                                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                            aria-labelledby="hs-accordion-heading-3">
                                            <p class="text-gray-800 dark:text-gray-200 py-4 px-5">
                                                <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                                plugin adds the appropriate classes that we use to style each element. These classes control the
                                                overall appearance, as well as the showing and hiding via CSS transitions.
                                            </p>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="box">
                                    <div class="box-header">
                                        <h5 class="box-title"> Soft Colored Accordion</h5>
                                    </div>
                                    <div class="box-body">
                                        <div class="hs-accordion-group">
                                        <div class="hs-accordion active overflow-hidden bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10" id="hs-accordion-heading-1-primary">
                                            <button
                                            class="hs-accordion-toggle hs-accordion-active:text-secondary hs-accordion-active:bg-secondary/10 group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-secondary dark:text-gray-200 dark:hover:text-white/80"
                                            aria-controls="hs-accordion-collapse-1-primary" type="button">
                                            Accordion #1
                                            <svg
                                                class="hs-accordion-active:hidden hs-accordion-active:text-secondary hs-accordion-active:group-hover:text-secondary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                            <svg
                                                class="hs-accordion-active:block hs-accordion-active:text-secondary hs-accordion-active:group-hover:text-secondary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                            </button>
                                            <div id="hs-accordion-collapse-1-primary"
                                            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                            aria-labelledby="hs-accordion-heading-1-primary">
                                            <p class="text-gray-800 dark:text-gray-200 py-4 px-5">
                                                <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                                plugin adds the appropriate classes that we use to style each element. These classes control the
                                                overall appearance, as well as the showing and hiding via CSS transitions.
                                            </p>
                                            </div>
                                        </div>

                                        <div class="hs-accordion overflow-hidden bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10" id="hs-accordion-heading-2-primary">
                                            <button
                                            class="hs-accordion-toggle hs-accordion-active:text-secondary hs-accordion-active:bg-secondary/10 group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-secondary dark:text-gray-200 dark:hover:text-white/80"
                                            aria-controls="hs-accordion-collapse-1-primary" type="button">
                                            Accordion #2
                                            <svg
                                            class="hs-accordion-active:hidden hs-accordion-active:text-secondary hs-accordion-active:group-hover:text-secondary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                            width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                            <svg
                                            class="hs-accordion-active:block hs-accordion-active:text-secondary hs-accordion-active:group-hover:text-secondary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                            width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                        </button>
                                            <div id="hs-accordion-collapse-2-primary"
                                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                            aria-labelledby="hs-accordion-heading-2-primary">
                                            <p class="text-gray-800 dark:text-gray-200 py-4 px-5">
                                                <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                                plugin adds the appropriate classes that we use to style each element. These classes control the
                                                overall appearance, as well as the showing and hiding via CSS transitions.
                                            </p>
                                            </div>
                                        </div>

                                        <div class="hs-accordion overflow-hidden bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10" id="hs-accordion-heading-3-primary">
                                            <button
                                            class="hs-accordion-toggle hs-accordion-active:text-secondary hs-accordion-active:bg-secondary/10 group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-secondary dark:text-gray-200 dark:hover:text-white/80"
                                            aria-controls="hs-accordion-collapse-1-primary" type="button">
                                            Accordion #3
                                            <svg
                                                class="hs-accordion-active:hidden hs-accordion-active:text-secondary hs-accordion-active:group-hover:text-secondary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                            <svg
                                                class="hs-accordion-active:block hs-accordion-active:text-secondary hs-accordion-active:group-hover:text-secondary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                            </button>
                                            <div id="hs-accordion-collapse-3-primary"
                                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                            aria-labelledby="hs-accordion-heading-3-primary">
                                            <p class="text-gray-800 dark:text-gray-200 py-4 px-5">
                                                <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                                plugin adds the appropriate classes that we use to style each element. These classes control the
                                                overall appearance, as well as the showing and hiding via CSS transitions.
                                            </p>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-6 -->

                            <!-- Start::row-7 -->
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="box">
                                    <div class="box-header">
                                        <h5 class="box-title">Nested Accordion</h5>
                                    </div>
                                    <div class="box-body">
                                        <div class="hs-accordion-group">
                                        <div class="hs-accordion active" id="hs-basic-nested-heading-one">
                                            <button
                                            class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:pb-3 py-0 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                            aria-controls="hs-basic-nested-collapse-one" type="button">
                                            <svg
                                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                                <path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                            </svg>
                                            <svg
                                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                            </svg>
                                            Accordion #1
                                            </button>
                                            <div id="hs-basic-nested-collapse-one"
                                            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                            aria-labelledby="hs-basic-nested-heading-one">
                                            <div class="hs-accordion-group ltr:pl-6 rtl:pr-6">
                                                <div class="hs-accordion active" id="hs-basic-nested-sub-heading-one">
                                                <button
                                                    class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:pb-3 pb-0 pt-0 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                    aria-controls="hs-basic-nested-sub-collapse-one" type="button">
                                                    <svg
                                                    class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" />
                                                    <path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" />
                                                    </svg>
                                                    <svg
                                                    class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" />
                                                    </svg>
                                                    Sub accordion #1
                                                </button>
                                                <div id="hs-basic-nested-sub-collapse-one"
                                                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                                    aria-labelledby="hs-basic-nested-sub-heading-one">
                                                    <p class="text-gray-800 dark:text-gray-200">
                                                    <em>This is the third item's accordion body.</em> It is hidden by default, until the
                                                    collapse plugin adds the appropriate classes that we use to style each element. These
                                                    classes control the overall appearance, as well as the showing and hiding via CSS
                                                    transitions.
                                                    </p>
                                                </div>
                                                </div>

                                                <div class="hs-accordion" id="hs-basic-nested-sub-heading-two">
                                                <button
                                                    class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:pb-3 pb-0 pt-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                    aria-controls="hs-basic-nested-sub-collapse-two" type="button">
                                                    <svg
                                                    class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" />
                                                    <path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" />
                                                    </svg>
                                                    <svg
                                                    class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" />
                                                    </svg>
                                                    Sub accordion #2
                                                </button>
                                                <div id="hs-basic-nested-sub-collapse-two"
                                                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                                    aria-labelledby="hs-basic-nested-sub-heading-two">
                                                    <p class="text-gray-800 dark:text-gray-200">
                                                    <em>This is the second item's accordion body.</em> It is hidden by default, until the
                                                    collapse plugin adds the appropriate classes that we use to style each element. These
                                                    classes control the overall appearance, as well as the showing and hiding via CSS
                                                    transitions.
                                                    </p>
                                                </div>
                                                </div>

                                                <div class="hs-accordion" id="hs-basic-nested-sub-heading-three">
                                                <button
                                                    class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:pb-3 pb-0 pt-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                    aria-controls="hs-basic-nested-sub-collapse-three" type="button">
                                                    <svg
                                                    class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" />
                                                    <path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" />
                                                    </svg>
                                                    <svg
                                                    class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" />
                                                    </svg>
                                                    Sub accordion #3
                                                </button>
                                                <div id="hs-basic-nested-sub-collapse-three"
                                                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                                    aria-labelledby="hs-basic-nested-sub-heading-three">
                                                    <p class="text-gray-800 dark:text-gray-200">
                                                    <em>This is the first item's accordion body.</em> It is hidden by default, until the
                                                    collapse plugin adds the appropriate classes that we use to style each element. These
                                                    classes control the overall appearance, as well as the showing and hiding via CSS
                                                    transitions.
                                                    </p>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="hs-accordion" id="hs-basic-nested-heading-two">
                                            <button
                                            class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:pb-3 pb-0 pt-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                            aria-controls="hs-basic-nested-collapse-two" type="button">
                                            <svg
                                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                                <path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                            </svg>
                                            <svg
                                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                            </svg>
                                            Accordion #2
                                            </button>
                                            <div id="hs-basic-nested-collapse-two"
                                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                            aria-labelledby="hs-basic-nested-heading-two">
                                            <p class="text-gray-800 dark:text-gray-200">
                                                <em>This is the second item's accordion body.</em> It is hidden by default, until the collapse
                                                plugin adds the appropriate classes that we use to style each element. These classes control the
                                                overall appearance, as well as the showing and hiding via CSS transitions.
                                            </p>
                                            </div>
                                        </div>

                                        <div class="hs-accordion" id="hs-basic-nested-heading-three">
                                            <button
                                            class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:pb-3 pb-0 pt-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                            aria-controls="hs-basic-nested-collapse-three" type="button">
                                            <svg
                                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                                <path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                            </svg>
                                            <svg
                                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                            </svg>
                                            Accordion #3
                                            </button>
                                            <div id="hs-basic-nested-collapse-three"
                                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                            aria-labelledby="hs-basic-nested-heading-three">
                                            <p class="text-gray-800 dark:text-gray-200">
                                                <em>This is the first item's accordion body.</em> It is hidden by default, until the collapse
                                                plugin adds the appropriate classes that we use to style each element. These classes control the
                                                overall appearance, as well as the showing and hiding via CSS transitions.
                                            </p>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="box">
                                    <div class="box-header">
                                        <h5 class="box-title">Nested Accordion With Borders</h5>
                                    </div>
                                    <div class="box-body">
                                        <div class="hs-accordion-group">
                                        <div class="hs-accordion bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10 active" id="hs-basic-nested-heading-1">
                                            <button
                                            class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:pb-0 py-4 px-5 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                            aria-controls="hs-basic-nested-collapse-1" type="button">
                                            <svg
                                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                                <path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                            </svg>
                                            <svg
                                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                            </svg>
                                            Accordion #1
                                            </button>
                                            <div id="hs-basic-nested-collapse-1"
                                            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                            aria-labelledby="hs-basic-nested-heading-1">
                                            <div class="hs-accordion-group px-6 py-3">
                                                <div class="hs-accordion bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10 active" id="hs-basic-nested-sub-heading-1">
                                                <button
                                                    class="hs-accordion-toggle hs-accordion-active:text-primary py-4 px-5 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                    aria-controls="hs-basic-nested-sub-collapse-1" type="button">
                                                    <svg
                                                    class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" />
                                                    <path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" />
                                                    </svg>
                                                    <svg
                                                    class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" />
                                                    </svg>
                                                    Sub accordion #1
                                                </button>
                                                <div id="hs-basic-nested-sub-collapse-1"
                                                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                                    aria-labelledby="hs-basic-nested-sub-heading-1">
                                                    <p class="text-gray-800 dark:text-gray-200 pb-4 px-5">
                                                    <em>This is the third item's accordion body.</em> It is hidden by default, until the
                                                    collapse plugin adds the appropriate classes that we use to style each element. These
                                                    classes control the overall appearance, as well as the showing and hiding via CSS
                                                    transitions.
                                                    </p>
                                                </div>
                                                </div>

                                                <div class="hs-accordion bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10" id="hs-basic-nested-sub-heading-2">
                                                <button
                                                    class="hs-accordion-toggle hs-accordion-active:text-primary py-4 px-5 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                    aria-controls="hs-basic-nested-sub-collapse-2" type="button">
                                                    <svg
                                                    class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" />
                                                    <path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" />
                                                    </svg>
                                                    <svg
                                                    class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" />
                                                    </svg>
                                                    Sub accordion #2
                                                </button>
                                                <div id="hs-basic-nested-sub-collapse-2"
                                                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                                    aria-labelledby="hs-basic-nested-sub-heading-2">
                                                    <p class="text-gray-800 dark:text-gray-200 pb-4 px-5">
                                                    <em>This is the second item's accordion body.</em> It is hidden by default, until the
                                                    collapse plugin adds the appropriate classes that we use to style each element. These
                                                    classes control the overall appearance, as well as the showing and hiding via CSS
                                                    transitions.
                                                    </p>
                                                </div>
                                                </div>

                                                <div class="hs-accordion bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10" id="hs-basic-nested-sub-heading-3">
                                                <button
                                                    class="hs-accordion-toggle hs-accordion-active:text-primary py-4 px-5 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                    aria-controls="hs-basic-nested-sub-collapse-3" type="button">
                                                    <svg
                                                    class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" />
                                                    <path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" />
                                                    </svg>
                                                    <svg
                                                    class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" />
                                                    </svg>
                                                    Sub accordion #3
                                                </button>
                                                <div id="hs-basic-nested-sub-collapse-3"
                                                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                                    aria-labelledby="hs-basic-nested-sub-heading-3">
                                                    <p class="text-gray-800 dark:text-gray-200 pb-4 px-5">
                                                    <em>This is the first item's accordion body.</em> It is hidden by default, until the
                                                    collapse plugin adds the appropriate classes that we use to style each element. These
                                                    classes control the overall appearance, as well as the showing and hiding via CSS
                                                    transitions.
                                                    </p>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="hs-accordion bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10" id="hs-basic-nested-heading-2">
                                            <button
                                            class="hs-accordion-toggle hs-accordion-active:text-primary py-4 px-5 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                            aria-controls="hs-basic-nested-collapse-2" type="button">
                                            <svg
                                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                                <path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                            </svg>
                                            <svg
                                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                            </svg>
                                            Accordion #2
                                            </button>
                                            <div id="hs-basic-nested-collapse-2"
                                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                            aria-labelledby="hs-basic-nested-heading-2">
                                            <p class="text-gray-800 dark:text-gray-200 pb-4 px-5">
                                                <em>This is the second item's accordion body.</em> It is hidden by default, until the collapse
                                                plugin adds the appropriate classes that we use to style each element. These classes control the
                                                overall appearance, as well as the showing and hiding via CSS transitions.
                                            </p>
                                            </div>
                                        </div>

                                        <div class="hs-accordion bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bgdark dark:border-white/10" id="hs-basic-nested-heading-3">
                                            <button
                                            class="hs-accordion-toggle hs-accordion-active:text-primary py-4 px-5 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                            aria-controls="hs-basic-nested-collapse-3" type="button">
                                            <svg
                                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                                <path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                            </svg>
                                            <svg
                                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                            </svg>
                                            Accordion #3
                                            </button>
                                            <div id="hs-basic-nested-collapse-3"
                                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                            aria-labelledby="hs-basic-nested-heading-3">
                                            <p class="text-gray-800 dark:text-gray-200 pb-4 px-5">
                                                <em>This is the first item's accordion body.</em> It is hidden by default, until the collapse
                                                plugin adds the appropriate classes that we use to style each element. These classes control the
                                                overall appearance, as well as the showing and hiding via CSS transitions.
                                            </p>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-7 -->

                        </div>
                        <!-- Start::main-content -->

                    </div>
@endsection

@section('scripts')

@endsection