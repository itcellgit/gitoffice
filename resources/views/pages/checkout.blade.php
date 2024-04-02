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
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Checkout</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                        <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Pages
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                        </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                    Checkout
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-x-6">
                            <div class="col-span-12 xxl:col-span-9">
                                <div class="box shadow-none border-0 !bg-transparent">
                                <div class="box-body space-y-2 p-0">
                                    <div class="sm:flex justify-between space-y-2 sm:space-y-0">
                                    <h3 class="text-xl my-auto font-semibold text-gray-800 dark:text-white">Billing Address</h3>
                                    <button type="button" data-hs-overlay="#addadress"
                                        class="hs-dropdown-toggle ti-btn ti-btn-primary m-0"><i class="ri-map-pin-add-line"></i>Add New
                                        Address</button>
                                    </div>
                                    <div class="sm:grid grid-cols-12 gap-6 space-y-4 sm:space-y-0">
                                    <div class="col-span-12 lg:col-span-6">
                                        <label class="flex p-3 w-full bg-white border border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70">
                                        <input type="radio" name="address" class="ti-form-radio" id="address1" checked>
                                        <span class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70 w-full">
                                            <span class="sm:flex">
                                            <span>
                                                <span class="text-base font-semibold text-primary block"> Address 1</span>
                                                <span> Json Taylor ,Sed rebum., RD. 12,NW, Dolor et., Gubergren </span>
                                                <span><i class="ri-smartphone-line"></i> +(773)-1614311</span>
                                            </span>
                                            <span class="ltr:ml-auto rtl:mr-auto my-auto flex">
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                class="ti-btn text-xs font-medium rounded-sm transition-none focus:outline-none ti-btn-soft-secondary">
                                                <i class="ti ti-pencil"></i>
                                                </a>
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                class="ti-btn text-xs font-medium rounded-sm transition-none focus:outline-none ti-btn-soft-danger">
                                                <i class="ti ti-trash"></i>
                                                </a>
                                            </span>
                                            </span>
                                        </span>
                                        </label>
                                    </div>
                                    <div class="col-span-12 lg:col-span-6">
                                        <label
                                        class="flex p-3 w-full bg-white border border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70">
                                        <input type="radio" name="address" class="ti-form-radio" id="address2">
                                        <span class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70 w-full">
                                            <span class="sm:flex">
                                            <span>
                                                <span class="text-base font-semibold text-primary block"> Address 2 </span>
                                                <span> Json Taylor ,Sed rebum., RD. 12,NW, Dolor et., Gubergren </span>
                                                <span><i class="ri-smartphone-line"></i> +(773)-1614311</span>
                                            </span>
                                            <span class="ltr:ml-auto rtl:mr-auto my-auto flex">
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                class="ti-btn text-xs font-medium rounded-sm transition-none focus:outline-none ti-btn-soft-secondary">
                                                <i class="ti ti-pencil"></i>
                                                </a>
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                class="ti-btn text-xs font-medium rounded-sm transition-none focus:outline-none ti-btn-soft-danger">
                                                <i class="ti ti-trash"></i>
                                                </a>
                                            </span>
                                            </span>
                                        </span>
                                        </label>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="box shadow-none border-0 !bg-transparent">
                                <div class="box-body space-y-2 p-0">
                                    <h3 class="text-xl my-auto font-semibold text-gray-800 dark:text-white">Shipping Address</h3>
                                    <div class="sm:grid grid-cols-12 gap-6 space-y-4 sm:space-y-0">
                                    <div class="col-span-12 lg:col-span-6">
                                        <label 
                                        class="flex p-3 w-full bg-white border border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70">
                                        <input type="radio" name="address2" class="ti-form-radio" id="address3">
                                        <span class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70 w-full">
                                            <span class="sm:flex">
                                            <span>
                                                <span class="text-base font-semibold text-primary block"> Address 1</span>
                                                <span> Json Taylor ,Sed rebum., RD. 12,NW, Dolor et., Gubergren </span>
                                                <span><i class="ri-smartphone-line"></i> +(773)-1614311</span>
                                            </span>
                                            <span class="ltr:ml-auto rtl:mr-auto my-auto flex">
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                class="ti-btn text-xs font-medium rounded-sm transition-none focus:outline-none ti-btn-soft-secondary">
                                                <i class="ti ti-pencil"></i>
                                                </a>
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                class="ti-btn text-xs font-medium rounded-sm transition-none focus:outline-none ti-btn-soft-danger">
                                                <i class="ti ti-trash"></i>
                                                </a>
                                            </span>
                                            </span>
                                        </span>
                                        </label>
                                    </div>
                                    <div class="col-span-12 lg:col-span-6">
                                        <label 
                                        class="flex p-3 w-full bg-white border border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70">
                                        <input type="radio" name="address2" class="ti-form-radio" id="address4" checked>

                                        <span class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70 w-full">
                                            <span class="sm:flex">
                                            <span>
                                                <span class="text-base font-semibold text-primary block"> Address 2 </span>
                                                <span> Json Taylor ,Sed rebum., RD. 12,NW, Dolor et., Gubergren </span>
                                                <span><i class="ri-smartphone-line"></i> +(773)-1614311</span>
                                            </span>
                                            <span class="ltr:ml-auto rtl:mr-auto my-auto flex">
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                class="ti-btn text-xs font-medium rounded-sm transition-none focus:outline-none ti-btn-soft-secondary">
                                                <i class="ti ti-pencil"></i>
                                                </a>
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                class="ti-btn text-xs font-medium rounded-sm transition-none focus:outline-none ti-btn-soft-danger">
                                                <i class="ti ti-trash"></i>
                                                </a>
                                            </span>
                                            </span>
                                        </span>
                                        </label>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="box shadow-none border-0 !bg-transparent">
                                <div class="box-body space-y-2 p-0">
                                    <h3 class="text-xl my-auto font-semibold text-gray-800 dark:text-white">Delivery Method</h3>
                                    <div class="sm:grid grid-cols-12 gap-6 space-y-4 sm:space-y-0">
                                    <div class="col-span-12 lg:col-span-6">
                                        <div class="box mb-0">
                                        <div class="box-body">
                                            <div class="flex flex-col">
                                                <label class="flex rounded-sm text-base font-semibold focus:ring-primary dark:bg-bgdark dark:text-white/70">
                                                <input type="radio" name="delivery" class="ti-form-radio" id="delivery-1">
                                                <span class="sm:flex w-full ltr:ml-3 rtl:mr-3">
                                                    <span class="block">
                                                    <span class="text-base dark:text-white leading-none block">Free Delivery</span>
                                                    <span class="text-sm text-gray-500 dark:text-white/70 font-normal"> Expected Deilivery on 20 Nov</span>
                                                    </span>
                                                    <span class="ltr:ml-auto rtl:mr-auto my-auto">
                                                    <span class="text-xl font-semibold">$0</span>
                                                    </span>
                                                </span>
                                                </label>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 lg:col-span-6">
                                        <div class="box mb-0">
                                        <div class="box-body">
                                            <div class="flex flex-col">
                                                <label
                                                class="flex rounded-sm text-base font-semibold focus:ring-primary dark:bg-bgdark dark:text-white/70">
                                                <input type="radio" name="delivery" class="ti-form-radio" id="delivery-2">
                                                <span class="sm:flex w-full ltr:ml-3 rtl:mr-3">
                                                    <span class="block">
                                                    <span class="text-base dark:text-white leading-none block">Standard Delivery</span>
                                                    <span class="text-sm text-gray-500 dark:text-white/70 font-normal"> Expected Deilivery on 15 Nov</span>
                                                    </span>
                                                    <span class="ltr:ml-auto rtl:mr-auto my-auto">
                                                    <span class="text-xl font-semibold">$3.99</span>
                                                    </span>
                                                </span>
                                                </label>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 lg:col-span-6">
                                        <div class="box mb-0">
                                        <div class="box-body">
                                            <div class="flex flex-col">
                                            <label
                                                class="flex rounded-sm text-base font-semibold focus:ring-primary dark:bg-bgdark dark:text-white/70">
                                                <input type="radio" name="delivery" class="ti-form-radio" id="delivery-3">
                                                <span class="sm:flex w-full ltr:ml-3 rtl:mr-3">
                                                <span class="block">
                                                    <span class="text-base dark:text-white leading-none block">Courier Delivery</span>
                                                    <span class="text-sm text-gray-500 dark:text-white/70 font-normal"> Expected Deilivery on 10 Nov</span>
                                                </span>
                                                <span class="ltr:ml-auto rtl:mr-auto my-auto">
                                                    <span class="text-xl font-semibold">$5.99</span>
                                                </span>
                                                </span>
                                            </label>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 lg:col-span-6">
                                        <div class="box mb-0">
                                        <div class="box-body">
                                            <div class="flex flex-col">
                                                <label
                                                class="flex rounded-sm text-base font-semibold focus:ring-primary dark:bg-bgdark dark:text-white/70">
                                                <input type="radio" name="delivery" class="ti-form-radio" id="delivery-4">
                                                <span class="sm:flex w-full ltr:ml-3 rtl:mr-3">
                                                    <span class="block">
                                                    <span class="text-base dark:text-white leading-none block">Express Delivery</span>
                                                    <span class="text-sm text-gray-500 dark:text-white/70 font-normal"> Expected Deilivery Tommorrow</span>
                                                    </span>
                                                    <span class="ltr:ml-auto rtl:mr-auto my-auto">
                                                    <span class="text-xl font-semibold">$10.99</span>
                                                    </span>
                                                </span>
                                                </label>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="box shadow-none border-0 !bg-transparent">
                                <div class="box-body space-y-2 p-0">
                                    <h3 class="text-xl my-auto font-semibold text-gray-800 dark:text-white">Payment Method</h3>
                                    <div class="sm:grid grid-cols-12 gap-6 text-center space-y-4 sm:space-y-0">
                                    <div class="col-span-12 md:col-span-2">
                                        <label class="payment-box">
                                        <input type="radio" name="payment" class="ti-form-radio" id="payment1" checked>
                                        <span class="payment-sec">
                                            <span class="block">
                                            <img src="{{asset('build/assets/img/payment-cards/1.png')}}" alt="payment-img"
                                                class="avatar avatar-lg shadow-none !ring-transparent rounded-sm mx-auto">
                                            </span>
                                            <span class="text-sm text-center font-semibold">Amazon Pay</span>
                                        </span>
                                        </label>
                                    </div>
                                    <div class="col-span-12 md:col-span-2">
                                        <label class="payment-box">
                                        <input type="radio" name="payment" class="ti-form-radio" id="payment2">
                                        <span class="payment-sec">
                                            <span class="block">
                                            <img src="{{asset('build/assets/img/payment-cards/2.png')}}" alt="payment-img"
                                                class="avatar avatar-lg shadow-none !ring-transparent rounded-sm mx-auto">
                                            </span>
                                            <span class="text-sm text-center font-semibold">PayPal</span>
                                        </span>
                                        </label>
                                    </div>
                                    <div class="col-span-12 md:col-span-2">
                                        <label class="payment-box">
                                        <input type="radio" name="payment" class="ti-form-radio" id="payment3">
                                        <span class="payment-sec">
                                            <span class="block">
                                            <img src="{{asset('build/assets/img/payment-cards/3.png')}}" alt="payment-img"
                                                class="avatar avatar-lg shadow-none !ring-transparent rounded-sm mx-auto">
                                            </span>
                                            <span class="text-sm text-center font-semibold">Rupay</span>
                                        </span>
                                        </label>
                                    </div>
                                    <div class="col-span-12 md:col-span-2">
                                        <label class="payment-box">
                                        <input type="radio" name="payment" class="ti-form-radio" id="payment4">
                                        <span class="payment-sec">
                                            <span class="block">
                                            <img src="{{asset('build/assets/img/payment-cards/4.png')}}" alt="payment-img"
                                                class="avatar avatar-lg shadow-none !ring-transparent rounded-sm mx-auto">
                                            </span>
                                            <span class="text-sm text-center font-semibold">Mastero card</span>
                                        </span>
                                        </label>
                                    </div>
                                    <div class="col-span-12 md:col-span-2">
                                        <label class="payment-box">
                                        <input type="radio" name="payment" class="ti-form-radio" id="payment5">
                                        <span class="payment-sec">
                                            <span class="block">
                                            <img src="{{asset('build/assets/img/payment-cards/5.png')}}" alt="payment-img"
                                                class="avatar avatar-lg shadow-none !ring-transparent rounded-sm mx-auto">
                                            </span>
                                            <span class="text-sm text-center font-semibold">Master card</span>
                                        </span>
                                        </label>
                                    </div>
                                    <div class="col-span-12 md:col-span-2">
                                        <label class="payment-box">
                                        <input type="radio" name="payment" class="ti-form-radio" id="payment6">
                                        <span class="payment-sec">
                                            <span class="block">
                                            <img src="{{asset('build/assets/img/payment-cards/6.png')}}" alt="payment-img"
                                                class="avatar avatar-lg shadow-none !ring-transparent rounded-sm mx-auto">
                                            </span>
                                            <span class="text-sm text-center font-semibold">Visa card</span>
                                        </span>
                                        </label>
                                    </div>
                                    <div class="col-span-12 md:col-span-2">
                                        <label class="payment-box">
                                        <input type="radio" name="payment" class="ti-form-radio" id="payment7">
                                        <span class="payment-sec">
                                            <span class="block">
                                            <img src="{{asset('build/assets/img/payment-cards/7.png')}}" alt="payment-img"
                                                class="avatar avatar-lg shadow-none !ring-transparent rounded-sm mx-auto">
                                            </span>
                                            <span class="text-sm text-center font-semibold">Cash On Delivery</span>
                                        </span>
                                        </label>
                                    </div>
                                    <div class="col-span-12 md:col-span-2">
                                        <label class="payment-box">
                                        <input type="radio" name="payment" class="ti-form-radio" id="payment8">
                                        <span class="payment-sec">
                                            <span class="block">
                                            <img src="{{asset('build/assets/img/payment-cards/8.png')}}" alt="payment-img"
                                                class="avatar avatar-lg shadow-none !ring-transparent rounded-sm mx-auto">
                                            </span>
                                            <span class="text-sm text-center font-semibold">Net Banking</span>
                                        </span>
                                        </label>
                                    </div>
                                    <div class="col-span-12 md:col-span-2">
                                        <label class="payment-box">
                                        <input type="radio" name="payment" class="ti-form-radio" id="payment9">
                                        <span class="payment-sec">
                                            <span class="block">
                                            <img src="{{asset('build/assets/img/payment-cards/9.png')}}" alt="payment-img"
                                                class="avatar avatar-lg shadow-none !ring-transparent rounded-sm mx-auto">
                                            </span>
                                            <span class="text-sm text-center font-semibold">Bitcoin</span>
                                        </span>
                                        </label>
                                    </div>
                                    <div class="col-span-12 md:col-span-2">
                                        <label class="payment-box">
                                        <input type="radio" name="payment" class="ti-form-radio" id="payment10">
                                        <span class="payment-sec">
                                            <span class="block">
                                            <img src="{{asset('build/assets/img/payment-cards/10.png')}}" alt="payment-img"
                                                class="avatar avatar-lg shadow-none !ring-transparent rounded-sm mx-auto">
                                            </span>
                                            <span class="text-sm text-center font-semibold">American Express</span>
                                        </span>
                                        </label>
                                    </div>
                                    <div class="col-span-12 md:col-span-2">
                                        <label class="payment-box">
                                        <input type="radio" name="payment" class="ti-form-radio" id="payment11">
                                        <span class="payment-sec">
                                            <span class="block">
                                            <img src="{{asset('build/assets/img/payment-cards/11.png')}}" alt="payment-img"
                                                class="avatar avatar-lg shadow-none !ring-transparent rounded-sm mx-auto">
                                            </span>
                                            <span class="text-sm text-center font-semibold">Wallet</span>
                                        </span>
                                        </label>
                                    </div>
                                    <div class="col-span-12 md:col-span-2">
                                        <label class="payment-box">
                                        <input type="radio" name="payment" class="ti-form-radio" id="payment12">
                                        <span class="payment-sec">
                                            <span class="block">
                                            <img src="{{asset('build/assets/img/payment-cards/12.png')}}" alt="payment-img"
                                                class="avatar avatar-lg shadow-none !ring-transparent rounded-sm mx-auto">
                                            </span>
                                            <span class="text-sm text-center font-semibold">Bank Transfer</span>
                                        </span>
                                        </label>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="flex justify-between mb-6">
                                <a href="{{url('cart')}}" class="ti-btn ti-btn-secondary m-0"><i class="ri-arrow-left-line"></i> Back to cart</a>
                                <a href="javascript:void(0);" data-hs-overlay="#payment-success" class="ti-btn ti-btn-primary hs-dropdown-toggle m-0">Place Order<i class="ri-arrow-right-line"></i></a>
                                </div>
                            </div>
                            <div class="col-span-12 xxl:col-span-3">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-titile">Order Summary</h5>
                                </div>
                                <div class="box-body px-0 space-y-5">
                                    <div class="flex flex-row justify-between border-b pb-5 px-6 border-gray-200 dark:border-white/10">
                                    <div class="flex items-center">
                                        <img
                                        class="inline-block flex-shrink-0 h-[3.875rem] w-[3.875rem] rounded-sm p-2 border dark:border-white/10 bg-gray-100 dark:bg-black/20"
                                        src="{{asset('build/assets/img/ecommerce/products/1.png')}}" alt="Image Description">
                                        <div class="ltr:ml-4 rtl:mr-4 space-y-1">
                                        <h5 class="font-semibold text-gray-800 dark:text-white">Black Heals For Women</h5>
                                        <p class="text-xs tetext-gray-400 dark:text-white/70">Quantity : 2 ,Discount : 20%</p>
                                        <div class="">
                                            <span class="font-semibold text-base">$699</span>
                                            <span class="text-sm font-normal text-gray-500 dark:text-white/70 line-through">$999</span>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <a aria-label="anchor" href="javascript:void(0);"
                                        class="ti-btn text-xs font-medium rounded-sm p-1 transition-none focus:outline-none ti-btn-soft-danger">
                                        <i class="ti ti-trash"></i>
                                        </a>
                                    </div>
                                    </div>
                                    <div class="flex flex-row justify-between border-b pb-5 px-6 border-gray-200 dark:border-white/10">
                                    <div class="flex items-center">
                                        <img
                                        class="inline-block flex-shrink-0 h-[3.875rem] w-[3.875rem] rounded-sm p-2 border dark:border-white/10 bg-gray-100 dark:bg-black/20"
                                        src="{{asset('build/assets/img/ecommerce/products/7.png')}}" alt="Image Description">
                                        <div class="ltr:ml-4 rtl:mr-4 space-y-1">
                                        <h5 class="font-semibold text-gray-800 dark:text-white">Sun Glasses</h5>
                                        <p class="text-xs tetext-gray-400 dark:text-white/70">Quantity : 2 ,Discount : 10%</p>
                                        <div class="">
                                            <span class="font-semibold text-base">$599</span>
                                            <span class="text-sm font-normal text-gray-500 dark:text-white/70 line-through">$699</span>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <a aria-label="anchor" href="javascript:void(0);"
                                        class="ti-btn text-xs font-medium rounded-sm p-1 transition-none focus:outline-none ti-btn-soft-danger">
                                        <i class="ti ti-trash"></i>
                                        </a>
                                    </div>
                                    </div>
                                    <div class="flex flex-row justify-between border-b pb-5 px-6 border-gray-200 dark:border-white/10">
                                    <div class="flex items-center">
                                        <img
                                        class="inline-block flex-shrink-0 h-[3.875rem] w-[3.875rem] rounded-sm p-2 border dark:border-white/10 bg-gray-100 dark:bg-black/20"
                                        src="{{asset('build/assets/img/ecommerce/products/10.png')}}" alt="Image Description">
                                        <div class="ltr:ml-4 rtl:mr-4 space-y-1">
                                        <h5 class="font-semibold text-gray-800 dark:text-white">Leather Wallet For Grils</h5>
                                        <p class="text-xs tetext-gray-400 dark:text-white/70">Quantity : 1 ,Discount : 10%</p>
                                        <div class="">
                                            <span class="font-semibold text-base">$100</span>
                                            <span class="text-sm font-normal text-gray-500 dark:text-white/70 line-through">$150</span>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <a aria-label="anchor" href="javascript:void(0);"
                                        class="ti-btn text-xs font-medium rounded-sm p-1 transition-none focus:outline-none ti-btn-soft-danger">
                                        <i class="ti ti-trash"></i>
                                        </a>
                                    </div>
                                    </div>
                                    <ul class="flex flex-col px-6">
                                    <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white">
                                        <div class="flex justify-between w-full">
                                        Total Items
                                        <span class="">4</span>
                                        </div>
                                    </li>
                                    <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white">
                                        <div class="flex justify-between w-full">
                                        SubTotal
                                        <span class="">$1100</span>
                                        </div>
                                    </li>
                                    <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white">
                                        <div class="flex justify-between w-full">
                                        Other Charges
                                        <span class="">$200</span>
                                        </div>
                                    </li>
                                    <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white">
                                        <div class="flex justify-between w-full">
                                        Delivery Charges
                                        <span class="text-success">-0% (Free)</span>
                                        </div>
                                    </li>
                                    <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white">
                                        <div class="flex justify-between w-full">
                                        Coupon Discount
                                        <span class="text-success">-5%</span>
                                        </div>
                                    </li>
                                    <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white">
                                        <div class="flex justify-between w-full">
                                        Over all Discount
                                        <span class="text-success">-10%</span>
                                        </div>
                                    </li>
                                    <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white">
                                        <div class="flex justify-between w-full text-xl font-semibold">
                                        Total
                                        <span class="">$1500</span>
                                        </div>
                                    </li>
                                    <li class="ti-list-group bg-success/30 text-success border-success/30">
                                        <div class="flex justify-between w-full">
                                        Your Total Savings On this Order
                                        <span class="">$500</span>
                                        </div>
                                    </li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-1 -->

                            <!-- Start::Modal -->
                            <div id="addadress" class="hs-overlay ti-modal hidden">
                            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out flex items-center !max-w-2xl">
                                <div class="ti-modal-content w-full">
                                <div class="ti-modal-header">
                                    <h3 class="ti-modal-title">
                                    Add Address
                                    </h3>
                                    <button type="button" class="hs-dropdown-toggle ti-modal-clode-btn" data-hs-overlay="#addadress">
                                    <span class="sr-only">Close</span>
                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                        d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                        fill="currentColor"></path>
                                    </svg>
                                    </button>
                                </div>
                                <div class="ti-modal-body">
                                    <div class="grid lg:grid-cols-2 gap-6">
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
                                        <input type="number" class="my-auto ti-form-input" placeholder="+91 123-456-789">
                                    </div>
                                    <div class="space-y-2">
                                        <label class="ti-form-label mb-0">Email Address</label>
                                        <input type="email" class="my-auto ti-form-input" placeholder="your@site.com">
                                    </div>
                                    </div>
                                    <div class="my-5">
                                    <div class="space-y-2">
                                        <label class="ti-form-label mb-0">Address</label>
                                        <input type="text" class="my-auto ti-form-input" placeholder="Address">
                                    </div>
                                    </div>
                                    <div class="grid lg:grid-cols-2 gap-6">
                                    <div class="space-y-2">
                                        <label class="ti-form-label mb-0">Address Type</label>
                                        <select class="ti-form-select billing-search">
                                        <option value="0">Select One</option>
                                        <option value="1">Home</option>
                                        <option value="2">Office</option>
                                        </select>
                                    </div>
                                    <div class="space-y-2">
                                        <label class="ti-form-label mb-0">Available Timings</label>
                                        <select class="ti-form-select billing-search">
                                        <option value="0">Select One</option>
                                        <option value="1">7Am - 9Pm</option>
                                        <option value="2">9Am - 7Pm</option>
                                        </select>
                                    </div>
                                    <div class="space-y-2">
                                        <label class="ti-form-label mb-0">City</label>
                                        <input type="text" class="my-auto ti-form-input" placeholder="city">
                                    </div>
                                    <div class="space-y-2">
                                        <label class="ti-form-label mb-0">State</label>
                                        <input type="text" class="my-auto ti-form-input" placeholder="state">
                                    </div>
                                    <div class="space-y-2">
                                        <label class="ti-form-label mb-0">Country</label>
                                        <input type="text" class="my-auto ti-form-input" placeholder="country">
                                    </div>
                                    <div class="space-y-2">
                                        <label class="ti-form-label mb-0">Pincode</label>
                                        <input type="number" class="my-auto ti-form-input" placeholder="pincode">
                                    </div>
                                    </div>
                                </div>
                                <div class="ti-modal-footer">
                                    <button type="button"
                                    class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                    data-hs-overlay="#addadress">
                                    Discard
                                    </button>
                                    <a class="ti-btn ti-btn-primary" href="javascript:void(0);">
                                    Save
                                    </a>
                                </div>
                                </div>
                            </div>
                            </div>

                            <div id="payment-success" class="hs-overlay ti-modal hidden">
                            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out h-[calc(100%-3.5rem)] min-h-[calc(100%-3.5rem)] flex items-center !max-w-2xl">
                                <div class="ti-modal-content">
                                <div class="ti-modal-body !p-6">
                                    <div class="checkout-payment-success">
                                    <div class="mb-5">
                                        <img src="{{asset('build/assets/img/png-images/13.png')}}" alt="" class="mx-auto">
                                    </div>
                                    <div class="text-center">
                                        <h5 class="text-base font-semibold mb-1">Hurray !..Your Order Has Been confirmed </h5>
                                        <p class="text-sm font-semibold text-gray-500 dark:text-white/70">Order Has Been Placed Successfully Now You Can Track Your Order ...</p>
                                        <a href="{{url('order-details')}}" class="ti-btn ti-btn-secondary mt-4">Track Your Order</a>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::Modal -->

                        </div>
                        <!-- Start::main-content -->

                    </div>

@endsection

@section('scripts')

        <!-- FLATPICKR JS -->
        <script src="{{asset('build/assets/libs/flatpickr/flatpickr.min.js')}}"></script>

        <!-- CHOICES JS -->
        <script src="{{asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

        <!-- CHECK-OUT JS -->
        @vite('resources/assets/js/checkout.js')


@endsection