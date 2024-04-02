@extends('layouts.master')

@section('styles')

        <!-- CHOICES CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/choices.js/public/assets/styles/choices.min.css')}}">

        <!-- FLATPICKR CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/flatpickr/flatpickr.min.css')}}">

@endsection

@section('content')

                    <div class="content">

                        <!-- Start::main-content -->
                        <div class="main-content">

                            <!-- Page Header -->
                            <div class="block justify-between page-header sm:flex">
                                <div>
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Form Layouts</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                    <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Forms
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                    </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        Form Layouts
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="col-span-12 xxl:col-span-6">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Vertical form Layout</h5>
                                        </div>
                                        <div class="box-body">
                                            <form class="space-y-3">
                                                <div class="space-y-3">
                                                    <label class="ti-form-label">Email Id/ User Name</label>
                                                    <input type="email" class="ti-form-input" placeholder="you@site.com">
                                                </div>
                                                <div class="space-y-3">
                                                    <label class="ti-form-label">Password</label>
                                                    <input type="password" class="ti-form-input" placeholder="password">
                                                </div>
                                                <div class="flex">
                                                    <input type="checkbox" class="ti-form-checkbox mt-0.5" id="hs-checkbox-group-11">
                                                    <label for="hs-checkbox-group-11"
                                                        class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">I agree with the <a
                                                            href="javascript:void(0);" class="text-primary hover:underline">terms and
                                                            conditions</a></label>
                                                </div>
                                                <button type="submit" class="ti-btn ti-btn-primary">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 xxl:col-span-6">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Horizontal form Layout</h5>
                                        </div>
                                        <div class="box-body">
                                            <form class="space-y-3">
                                                <div class="sm:grid grid-cols-12 gap-x-6">
                                                    <label class="col-span-3 ti-form-label">Email Id</label>
                                                    <input type="email" class="col-span-9 ti-form-input" placeholder="you@site.com">
                                                </div>
                                                <div class="sm:grid grid-cols-12 gap-x-6">
                                                    <label class="col-span-3 ti-form-label">Password</label>
                                                    <input type="password" class="col-span-9 ti-form-input" placeholder="password">
                                                </div>
                                                <div class="sm:grid grid-cols-12 gap-x-6">
                                                    <div class="col-span-3"> </div>
                                                    <div class="col-span-9">
                                                        <input type="checkbox" class=" ti-form-checkbox mt-0.5"
                                                            id="hs-checkbox-group-12">
                                                        <label for="hs-checkbox-group-12"
                                                            class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">I agree with the
                                                            <a href="javascript:void(0);" class="text-primary hover:underline">terms and
                                                                conditions</a></label>
                                                    </div>
                                                </div>

                                                <div class="grid grid-cols-12 gap-x-6">
                                                    <div class="col-span-3"> </div>
                                                    <div class="col-span-9">
                                                        <button type="submit" class="ti-btn ti-btn-primary">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-1 -->

                            <!-- Start::row-2 -->
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="col-span-12 lg:col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Inline form Layout</h5>
                                        </div>
                                        <div class="box-body">
                                            <form class="sm:grid grid-cols-12 gap-x-6 space-y-4 lg:space-y-0">
                                                <div class="col-span-12 lg:col-span-3 sm:inline-flex sm:items-center space-y-2 sm:space-y-0 sm:space-x-3 w-full rtl:space-x-reverse">
                                                    <label class="w-32 ti-form-label mb-0">Email Id</label>
                                                    <input type="email" class="my-auto ti-form-input" placeholder="you@site.com">
                                                </div>
                                                <div class="col-span-12 lg:col-span-3 sm:inline-flex sm:items-center space-y-2 sm:space-y-0 sm:space-x-3 w-full rtl:space-x-reverse">
                                                    <label class="w-32 ti-form-label mb-0">Password</label>
                                                    <input type="password" class="ti-form-input" placeholder="password">
                                                </div>
                                                <div class="col-span-12 lg:col-span-3 sm:inline-flex sm:items-center space-y-2 sm:space-y-0 sm:space-x-3 w-full rtl:space-x-reverse">
                                                    <input type="checkbox" class="ti-form-checkbox mt-0.5" id="hs-checkbox-group-13">
                                                    <label for="hs-checkbox-group-13"
                                                        class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">I agree with the <a
                                                            href="javascript:void(0);" class="text-primary hover:underline">terms and
                                                            conditions</a></label>
                                                </div>
                                                <button type="submit" class="col-span-12 lg:col-span-3 ti-btn ti-btn-primary">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-2 -->

                            <!-- Start::row-3 -->
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Form Layout Style-1</h5>
                                        </div>
                                        <div class="box-body">
                                            <form>
                                                <div class="grid lg:grid-cols-2 gap-6 space-y-4 lg:space-y-0">
                                                    <div class="space-y-2">
                                                        <label class="ti-form-label mb-0">First Name</label>
                                                        <input type="text" class="my-auto ti-form-input" placeholder="Firstname">
                                                    </div>
                                                    <div class="space-y-2">
                                                        <label class="ti-form-label mb-0">Last Name</label>
                                                        <input type="text" class="my-auto ti-form-input" placeholder="Lastname">
                                                    </div>
                                                    <div class="space-y-2">
                                                        <label class="ti-form-label mb-0">Phone Number</label>
                                                        <input type="number" class="my-auto ti-form-input"
                                                            placeholder="+91 123-456-789">
                                                    </div>
                                                    <div class="space-y-2">
                                                        <label class="ti-form-label mb-0">Email Address</label>
                                                        <input type="email" class="my-auto ti-form-input"
                                                            placeholder="your@site.com">
                                                    </div>
                                                    <div class="space-y-2">
                                                        <label class="ti-form-label mb-0">Password</label>
                                                        <input type="password" class="ti-form-input" placeholder="password">
                                                    </div>
                                                    <div class="space-y-2">
                                                        <label class="ti-form-label mb-0">Confirm Password</label>
                                                        <input type="password" class="ti-form-input" placeholder="password">
                                                    </div>
                                                    <div class="space-y-2">
                                                        <label class="ti-form-label mb-0">Date Of Birth</label>
                                                        <input type="text" class="ti-form-input flatpickr-input" id="date"
                                                            placeholder="Choose date" readonly>
                                                    </div>
                                                    <div class="space-y-2">
                                                        <label class="ti-form-label mb-0">Gender</label>
                                                        <ul class="flex flex-col sm:flex-row">
                                                            <li
                                                                class="ti-list-group gap-x-2.5 bg-white border text-gray-800 ltr:sm:-ml-px rtl:sm:-mr-px sm:mt-0 ltr:sm:first:rounded-tr-none ltr:sm:first:rounded-tl-none rtl:sm:first:rounded-tr-none rtl:sm:first:rounded-tl-none ltr:sm:first:rounded-bl-sm rtl:sm:first:rounded-br-sm ltr:sm:last:rounded-bl-none ltr:sm:last:rounded-br-none rtl:sm:last:rounded-bl-none rtl:sm:last:rounded-br-none ltr:sm:last:rounded-tr-sm rtl:sm:last:rounded-tl-sm dark:bg-bgdark dark:border-white/10 dark:text-white">
                                                                <div class="relative flex items-start w-full">
                                                                    <div class="flex items-center h-5">
                                                                        <input id="hs-horizontal-list-group-item-radio-1"
                                                                            name="hs-horizontal-list-group-item-radio" type="radio"
                                                                            class="ti-form-radio" checked>
                                                                    </div>
                                                                    <label for="hs-horizontal-list-group-item-radio-1"
                                                                        class="ltr:ml-3 rtl:mr-3 block w-full text-sm text-gray-600 dark:text-white/70">
                                                                        Female
                                                                    </label>
                                                                </div>
                                                            </li>

                                                            <li
                                                            class="ti-list-group gap-x-2.5 bg-white border text-gray-800 ltr:sm:-ml-px rtl:sm:-mr-px sm:mt-0 ltr:sm:first:rounded-tr-none ltr:sm:first:rounded-tl-none rtl:sm:first:rounded-tr-none rtl:sm:first:rounded-tl-none ltr:sm:first:rounded-bl-sm rtl:sm:first:rounded-br-sm ltr:sm:last:rounded-bl-none ltr:sm:last:rounded-br-none rtl:sm:last:rounded-bl-none rtl:sm:last:rounded-br-none ltr:sm:last:rounded-tr-sm rtl:sm:last:rounded-tl-sm dark:bg-bgdark dark:border-white/10 dark:text-white">
                                                            <div class="relative flex items-start w-full">
                                                                    <div class="flex items-center h-5">
                                                                        <input id="hs-horizontal-list-group-item-radio-2"
                                                                            name="hs-horizontal-list-group-item-radio" type="radio"
                                                                            class="ti-form-radio">
                                                                    </div>
                                                                    <label for="hs-horizontal-list-group-item-radio-2"
                                                                        class="ltr:ml-3 rtl:mr-3 block w-full text-sm text-gray-600 dark:text-white/70">
                                                                        Male
                                                                    </label>
                                                                </div>
                                                            </li>

                                                            <li
                                                            class="ti-list-group gap-x-2.5 bg-white border text-gray-800 ltr:sm:-ml-px rtl:sm:-mr-px sm:mt-0 ltr:sm:first:rounded-tr-none ltr:sm:first:rounded-tl-none rtl:sm:first:rounded-tr-none rtl:sm:first:rounded-tl-none ltr:sm:first:rounded-bl-sm rtl:sm:first:rounded-br-sm ltr:sm:last:rounded-bl-none ltr:sm:last:rounded-br-none rtl:sm:last:rounded-bl-none rtl:sm:last:rounded-br-none ltr:sm:last:rounded-tr-sm rtl:sm:last:rounded-tl-sm dark:bg-bgdark dark:border-white/10 dark:text-white">
                                                            <div class="relative flex items-start w-full">
                                                                    <div class="flex items-center h-5">
                                                                        <input id="hs-horizontal-list-group-item-radio-3"
                                                                            name="hs-horizontal-list-group-item-radio" type="radio"
                                                                            class="ti-form-radio">
                                                                    </div>
                                                                    <label for="hs-horizontal-list-group-item-radio-3"
                                                                        class="ltr:ml-3 rtl:mr-3 block w-full text-sm text-gray-600 dark:text-white/70">
                                                                        Others
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="my-5">
                                                    <div class="space-y-2">
                                                        <label class="ti-form-label mb-0">Address</label>
                                                        <input type="text" class="my-auto ti-form-input" placeholder="Address">
                                                    </div>
                                                </div>
                                                <div class="grid lg:grid-cols-2 gap-6 space-y-4 lg:space-y-0">
                                                    <div class="space-y-2">
                                                        <label class="ti-form-label mb-0">City</label>
                                                        <input type="text" class="my-auto ti-form-input" placeholder="city">
                                                    </div>
                                                    <div class="space-y-2">
                                                        <label class="ti-form-label mb-0">State</label>
                                                        <input type="text" class="my-auto ti-form-input" placeholder="state">
                                                    </div>
                                                    <div class="space-y-2">
                                                        <label class="ti-form-label mb-0">Pincode</label>
                                                        <input type="number" class="my-auto ti-form-input" placeholder="pincode">
                                                    </div>
                                                </div>
                                                <div class="my-5">
                                                    <input type="checkbox" class="ti-form-checkbox mt-0.5" id="hs-checkbox-group-4">
                                                    <label for="hs-checkbox-group-4"
                                                        class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">I agree with the <a
                                                            href="javascript:void(0);" class="text-primary hover:underline">terms and
                                                            conditions</a></label>
                                                </div>
                                                <button type="submit" class="ti-btn ti-btn-primary">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Form Layout Style-2</h5>
                                        </div>
                                        <div class="box-body">
                                            <form class="space-y-4">
                                                <div class="space-y-2">
                                                    <label for="hs-trailing-icon" class="ti-form-label">Card number</label>
                                                    <div class="relative">
                                                        <input type="text" id="hs-trailing-icon" name="hs-trailing-icon"
                                                            class="ti-form-input ltr:pr-11 rtl:pl-4 focus:z-10"
                                                            placeholder="xxxx-xxxx-xxxx-xxxx">
                                                        <div
                                                            class="absolute inset-y-0 ltr:right-0 rtl:left-0 flex items-center pointer-events-none z-20 ltr:pr-4 rtl:pl-4">
                                                            <svg class="h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                                                width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M11 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1z">
                                                                </path>
                                                                <path
                                                                    d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm13 2v5H1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm-1 9H2a1 1 0 0 1-1-1v-1h14v1a1 1 0 0 1-1 1z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="space-y-2">
                                                    <label class="ti-form-label mb-0">Name On Card</label>
                                                    <input type="text" class="my-auto ti-form-input" placeholder="Address">
                                                </div>
                                                <div class="grid lg:grid-cols-3 gap-x-6 space-y-4 lg:space-y-0">
                                                    <div class="space-y-2">
                                                        <label class="ti-form-select-label">Expiration Date</label>
                                                        <select class="ti-form-select" data-trigger name="form-choice-select"
                                                            id="form-choice-select">
                                                            <option value="January">January</option>
                                                            <option value="February">February</option>
                                                            <option value="March">March</option>
                                                            <option value="April">April</option>
                                                            <option value="May">May</option>
                                                            <option value="June">June</option>
                                                            <option value="July">July</option>
                                                            <option value="August">August</option>
                                                            <option value="September">September</option>
                                                            <option value="October" selected>October</option>
                                                            <option value="November">November</option>
                                                            <option value="December">December</option>
                                                        </select>
                                                    </div>
                                                    <div class="space-y-2">
                                                        <label class="ti-form-select-label">Expiration Month</label>
                                                        <select class="ti-form-select" data-trigger
                                                            id="form-choice-select1">
                                                            <option value="2019">2019</option>
                                                            <option value="2020">2020</option>
                                                            <option value="2021">2021</option>
                                                            <option value="2022">2022</option>
                                                            <option value="2023">2023</option>
                                                            <option value="2024">2024</option>
                                                            <option value="2025">2025</option>
                                                            <option value="2026">2026</option>
                                                            <option value="2027">2027</option>
                                                            <option value="2028">2028</option>
                                                        </select>
                                                    </div>
                                                    <div class="space-y-2">
                                                        <label class="ti-form-label mb-0">Cvv</label>
                                                        <input type="number" class="my-auto ti-form-input" placeholder="cvv">
                                                    </div>
                                                </div>
                                                <div class="my-5">
                                                    <input type="checkbox" class="ti-form-checkbox mt-0.5" id="hs-checkbox-group-1">
                                                    <label for="hs-checkbox-group-1"
                                                        class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Save my card for
                                                        future purchases </label>
                                                </div>
                                                <button type="submit" class="ti-btn ti-btn-primary w-full">Complete Payment</button>
                                            </form>
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

        <!-- FLATPICKR JS -->
        <script src="{{asset('build/assets/libs/flatpickr/flatpickr.min.js')}}"></script>

        <!-- CHOICES JS -->
        <script src="{{asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

        <!-- FORM-LAYOUTS JS -->
        @vite('resources/assets/js/form-layout.js')
        

@endsection