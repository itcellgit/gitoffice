@extends('layouts.master')

@section('styles')

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
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Form Validations</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                    <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Forms
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                    </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        Form Validations
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-6">
                                <div class="col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Default Validation</h5>
                                        </div>
                                        <div class="box-body">
                                            <form class="ti-validation">
                                                <div class="grid lg:grid-cols-2 gap-6">
                                                    <div class="space-y-2">
                                                        <label class="ti-form-label mb-0">First Name</label>
                                                        <input type="text" class="my-auto ti-form-input" placeholder="Firstname" required>
                                                    </div>
                                                    <div class="space-y-2">
                                                        <label class="ti-form-label mb-0">Last Name</label>
                                                        <input type="text" class="my-auto ti-form-input" placeholder="Lastname" required>
                                                    </div>
                                                    <div class="space-y-2">
                                                        <label class="ti-form-label mb-0">Phone Number</label>
                                                        <input type="number" class="my-auto ti-form-input" placeholder="+91 123-456-789" required>
                                                    </div>
                                                    <div class="space-y-2">
                                                        <label class="ti-form-label mb-0">Email Address</label>
                                                        <input type="email" class="my-auto ti-form-input" placeholder="your@site.com" required>
                                                    </div>
                                                    <div class="space-y-2">
                                                        <label class="ti-form-label mb-0">Password</label>
                                                        <input type="password" class="ti-form-input" placeholder="password" required>
                                                    </div>
                                                    <div class="space-y-2">
                                                        <label class="ti-form-label mb-0">Confirm Password</label>
                                                        <input type="password" class="ti-form-input" placeholder="password" required>
                                                    </div>
                                                    <div class="space-y-2">
                                                        <label class="ti-form-label mb-0">Date Of Birth</label>
                                                        <input type="date" class="ti-form-input flatpickr-input" id="date" readonly required>
                                                    </div>
                                                    <div class="space-y-2">
                                                        <label class="ti-form-label mb-0">Gender</label>
                                                        <ul class="flex flex-col sm:flex-row">
                                                            <li class="ti-list-group w-full gap-x-2.5 bg-white border text-gray-800 ltr:sm:-ml-px rtl:sm:-mr-px sm:mt-0 ltr:sm:first:rounded-tr-none rtl:sm:first:rounded-tl-none ltr:sm:first:rounded-bl-sm rtl:sm:first:rounded-br-sm ltr:sm:last:rounded-bl-none rtl:sm:last:rounded-br-none ltr:sm:last:rounded-tr-sm rtl:sm:last:rounded-tl-sm dark:bg-bgdark dark:border-white/10 dark:text-white">
                                                            <div class="relative flex items-start w-full">
                                                                <div class="flex items-center h-5">
                                                                <input id="ti-radio-validation-1" name="ti-radio-validation" type="radio" class="ti-form-radio" checked required>
                                                                </div>
                                                                <label for="ti-radio-validation-1" class="ltr:ml-3 rtl:mr-3 block w-full text-sm text-gray-600 dark:text-white/70">
                                                                Female
                                                                </label>
                                                            </div>
                                                            </li>

                                                            <li class="ti-list-group w-full gap-x-2.5 bg-white border text-gray-800 ltr:sm:-ml-px rtl:sm:-mr-px sm:mt-0 ltr:sm:first:rounded-tr-none rtl:sm:first:rounded-tl-none ltr:sm:first:rounded-bl-sm rtl:sm:first:rounded-br-sm ltr:sm:last:rounded-bl-none rtl:sm:last:rounded-br-none ltr:sm:last:rounded-tr-sm rtl:sm:last:rounded-tl-sm dark:bg-bgdark dark:border-white/10 dark:text-white">
                                                            <div class="relative flex items-start w-full">
                                                                <div class="flex items-center h-5">
                                                                <input id="ti-radio-validation-2" name="ti-radio-validation" type="radio" class="ti-form-radio" required>
                                                                </div>
                                                                <label for="ti-radio-validation-2" class="ltr:ml-3 rtl:mr-3 block w-full text-sm text-gray-600 dark:text-white/70">
                                                                Male
                                                                </label>
                                                            </div>
                                                            </li>

                                                            <li class="ti-list-group w-full gap-x-2.5 bg-white border text-gray-800 ltr:sm:-ml-px rtl:sm:-mr-px sm:mt-0 ltr:sm:first:rounded-tr-none rtl:sm:first:rounded-tl-none ltr:sm:first:rounded-bl-sm rtl:sm:first:rounded-br-sm ltr:sm:last:rounded-bl-none rtl:sm:last:rounded-br-none ltr:sm:last:rounded-tr-sm rtl:sm:last:rounded-tl-sm dark:bg-bgdark dark:border-white/10 dark:text-white">
                                                            <div class="relative flex items-start w-full">
                                                                <div class="flex items-center h-5">
                                                                <input id="ti-radio-validation-3" name="ti-radio-validation" type="radio" class="ti-form-radio" required>
                                                                </div>
                                                                <label for="ti-radio-validation-3" class="ltr:ml-3 rtl:mr-3 block w-full text-sm text-gray-600 dark:text-white/70">
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
                                                        <input type="text" class="my-auto ti-form-input" placeholder="Address" required>
                                                    </div>
                                                </div>
                                                <div class="grid lg:grid-cols-2 gap-6">
                                                    <div class="space-y-2">
                                                        <label class="ti-form-label mb-0">City</label>
                                                        <input type="text" class="my-auto ti-form-input" placeholder="city" required>
                                                    </div>
                                                    <div class="space-y-2">
                                                        <label class="ti-form-label mb-0">State</label>
                                                        <input type="text" class="my-auto ti-form-input" placeholder="state" required>
                                                    </div>
                                                    <div class="space-y-2">
                                                        <label class="ti-form-label mb-0">Pincode</label>
                                                        <input type="number" class="my-auto ti-form-input" placeholder="pincode" required>
                                                    </div>
                                                </div>
                                                <div class="my-5">
                                                    <input type="checkbox" class="ti-form-checkbox mt-0.5" id="hs-checkbox-group-1" required>
                                                    <label for="hs-checkbox-group-1" class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">I agree with the <a href="javascript:void(0);" class="text-primary hover:underline">terms and conditions</a></label>
                                                </div>
                                                <button type="submit" class="ti-btn ti-btn-primary">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Custom Validation</h5>
                                        </div>
                                        <div class="box-body">
                                            <form class="ti-custom-validation" novalidate>
                                                <div class="grid lg:grid-cols-2 gap-6">
                                                    <div class="space-y-2">
                                                        <label class="ti-form-label mb-0">First Name</label>
                                                        <input type="text" class="firstName my-auto ti-form-input" placeholder="Firstname" value="John mark"  required>
                                                        <span class="firstNameError text-red-500 text-xs hidden">error</span>
                                                    </div>
                                                    <div class="space-y-2">
                                                        <label class="ti-form-label mb-0">Last Name</label>
                                                        <input type="text" class="lastName my-auto ti-form-input" placeholder="Lastname" required>
                                                        <span class="lastNameError text-red-500 text-xs hidden">error</span>
                                                    </div>
                                                    <div class="space-y-2">
                                                        <label class="ti-form-label mb-0">Phone Number</label>
                                                        <input type="number" class="phonenumber my-auto ti-form-input" placeholder="+91 123-456-789" required>
                                                        <span class="phoneError text-red-500 text-xs hidden">error</span>
                                                    </div>
                                                    <div class="space-y-2">
                                                        <label class="ti-form-label mb-0">Email Address</label>
                                                        <input type="email" class="email-address my-auto ti-form-input" placeholder="your@site.com" required>
                                                        <span class="emailError text-red-500 text-xs hidden">error</span>
                                                    </div>
                                                    <div class="space-y-2">
                                                        <label class="ti-form-label mb-0">Password</label>
                                                        <input type="password" class="password ti-form-input" placeholder="password" required>
                                                        <span class="passwordError text-red-500 text-xs hidden">error</span>
                                                    </div>
                                                    <div class="space-y-2">
                                                        <label class="ti-form-label mb-0">Confirm Password</label>
                                                        <input type="password" class="confirmPassword ti-form-input" placeholder="password" required>
                                                        <span class="confirmPasswordError text-red-500 text-xs hidden">error</span>
                                                    </div>
                                                    <div class="space-y-2">
                                                        <label class="ti-form-label mb-0">Date Of Birth</label>
                                                        <input type="date" class="birthdate ti-form-input flatpickr-input" readonly required>
                                                        <span class="dobError text-red-500 text-xs hidden">error</span>
                                                    </div>
                                                    <div class="space-y-2">
                                                        <label class="ti-form-label mb-0">Gender</label>
                                                        <ul class="flex flex-col sm:flex-row">
                                                            <li class="ti-list-group w-full gap-x-2.5 bg-white border text-gray-800 ltr:sm:-ml-px rtl:sm:-mr-px sm:mt-0 ltr:sm:first:rounded-tr-none rtl:sm:first:rounded-tl-none ltr:sm:first:rounded-bl-sm rtl:sm:first:rounded-br-sm ltr:sm:last:rounded-bl-none rtl:sm:last:rounded-br-none ltr:sm:last:rounded-tr-sm rtl:sm:last:rounded-tl-sm dark:bg-bgdark dark:border-white/10 dark:text-white">
                                                            <div class="relative flex items-start w-full">
                                                                <div class="flex items-center h-5">
                                                                <input id="ti-radio-validation-11" name="ti-radio-validation" type="radio" class="ti-form-radio" checked required>
                                                                </div>
                                                                <label for="ti-radio-validation-11" class="ltr:ml-3 rtl:mr-3 block w-full text-sm text-gray-600 dark:text-white/70">
                                                                Female
                                                                </label>
                                                            </div>
                                                            </li>

                                                            <li class="ti-list-group w-full gap-x-2.5 bg-white border text-gray-800 ltr:sm:-ml-px rtl:sm:-mr-px sm:mt-0 ltr:sm:first:rounded-tr-none rtl:sm:first:rounded-tl-none ltr:sm:first:rounded-bl-sm rtl:sm:first:rounded-br-sm ltr:sm:last:rounded-bl-none rtl:sm:last:rounded-br-none ltr:sm:last:rounded-tr-sm rtl:sm:last:rounded-tl-sm dark:bg-bgdark dark:border-white/10 dark:text-white">
                                                            <div class="relative flex items-start w-full">
                                                                <div class="flex items-center h-5">
                                                                <input id="ti-radio-validation-12" name="ti-radio-validation" type="radio" class="ti-form-radio" required>
                                                                </div>
                                                                <label for="ti-radio-validation-12" class="ltr:ml-3 rtl:mr-3 block w-full text-sm text-gray-600 dark:text-white/70">
                                                                Male
                                                                </label>
                                                            </div>
                                                            </li>

                                                            <li class="ti-list-group w-full gap-x-2.5 bg-white border text-gray-800 ltr:sm:-ml-px rtl:sm:-mr-px sm:mt-0 ltr:sm:first:rounded-tr-none rtl:sm:first:rounded-tl-none ltr:sm:first:rounded-bl-sm rtl:sm:first:rounded-br-sm ltr:sm:last:rounded-bl-none rtl:sm:last:rounded-br-none ltr:sm:last:rounded-tr-sm rtl:sm:last:rounded-tl-sm dark:bg-bgdark dark:border-white/10 dark:text-white">
                                                            <div class="relative flex items-start w-full">
                                                                <div class="flex items-center h-5">
                                                                <input id="ti-radio-validation-13" name="ti-radio-validation" type="radio" class="ti-form-radio" required>
                                                                </div>
                                                                <label for="ti-radio-validation-13" class="ltr:ml-3 rtl:mr-3 block w-full text-sm text-gray-600 dark:text-white/70">
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
                                                        <input type="text" class="postalAddress my-auto ti-form-input" placeholder="Address" required>
                                                        <span class="addressError text-red-500 text-xs hidden">error</span>
                                                    </div>
                                                </div>
                                                <div class="grid lg:grid-cols-2 gap-6">
                                                    <div class="space-y-2">
                                                        <label class="ti-form-label mb-0">City</label>
                                                        <input type="text" class="cityName my-auto ti-form-input" placeholder="city" required>
                                                        <span class="cityError text-red-500 text-xs hidden">error</span>
                                                    </div>
                                                    <div class="space-y-2">
                                                        <label class="ti-form-label mb-0">State</label>
                                                        <input type="text" class="stateName my-auto ti-form-input" placeholder="state" required>
                                                        <span class="stateError text-red-500 text-xs hidden">error</span>
                                                    </div>
                                                    <div class="space-y-2">
                                                        <label class="ti-form-label mb-0">Pincode</label>
                                                        <input type="number" class="pincode my-auto ti-form-input" placeholder="pincode" required>
                                                        <span class="pincodeError text-red-500 text-xs hidden">error</span>
                                                    </div>
                                                </div>
                                                <div class="my-5">
                                                    <input type="checkbox" class="validationCheckbox ti-form-checkbox mt-0.5" id="hs-checkbox-group-12" required>
                                                    <span class="checkboxError text-red-500 text-xs hidden">error</span>
                                                    <label for="hs-checkbox-group-12" class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">I agree with the <a href="javascript:void(0);" class="text-primary hover:underline">terms and conditions</a></label>
                                                </div>
                                                <button value="Login Now" type="submit" class="ti-btn ti-btn-primary ti-custom-validate-btn">Submit</button>
                                            </form>
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

        <!-- FLATPICKR JS -->
        <script src="{{asset('build/assets/libs/flatpickr/flatpickr.min.js')}}"></script>

        <!-- FORM-VALIDATION JS -->
        @vite('resources/assets/js/form-validation.js')


@endsection