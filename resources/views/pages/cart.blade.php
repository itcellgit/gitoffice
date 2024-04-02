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
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Cart</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                        <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Pages
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                        </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        Cart
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-x-6">
                            <div class="col-span-12 xl:col-span-9">
                                <div class="box cart-full overflow-hidden">
                                <div class="box-body p-0">
                                    <div class="overflow-auto">
                                    <table class="ti-custom-table ti-custom-table-head">
                                        <thead class="">
                                        <tr>
                                            <th scope="col" class="!text-sm !p-4 !text-gray-800 dark:!text-white">Product</th>
                                            <th scope="col" class="!text-sm !p-4 !text-gray-800 dark:!text-white">Price (Each) </th>
                                            <th scope="col" class="!text-sm !p-4 !text-gray-800 dark:!text-white">QNTY</th>
                                            <th scope="col" class="!text-sm !p-4 !text-gray-800 dark:!text-white">Discount</th>
                                            <th scope="col" class="!text-sm !p-4 !text-gray-800 dark:!text-white">Total</th>
                                            <th scope="col" class="!text-end !text-sm !p-4 !text-gray-800 dark:!text-white">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="cart-box">
                                            <td class="flex">
                                            <img class="avatar avatar-lg rounded-sm bg-gray-100 dark:bg-black/20 p-1" src="{{asset('build/assets/img/ecommerce/products/1.png')}}" alt="Image Description">
                                            <div class="ltr:ml-3 rtl:mr-3">
                                                <span class="block text-sm font-semibold text-gray-800 dark:text-white max-w-[200px] truncate">Black Heals For Women</span>
                                                <span class="block text-sm text-gray-600 dark:text-white/70">Brown Color</span>
                                                <span class="block text-sm text-gray-600 dark:text-white/70">Size : M</span>
                                            </div>
                                            </td>
                                            <td>$999</td>
                                            <td>
                                            <div class="flex rounded-sm">
                                                <button aria-label="button" type="button" class="product-quantity-minus inline-flex flex-shrink-0 justify-center items-center h-8 w-8 ltr:rounded-l-sm rtl:rounded-r-sm border border-transparent font-semibold ti-btn-soft-light transition-all text-sm">
                                                <i class="ti ti-minus"></i>
                                                </button>
                                                <input type="text" name="product-quantity" class="product-quantity p-0 ti-form-input w-20 rounded-none focus:z-10 text-center"
                                                placeholder="0">
                                                <button aria-label="button" type="button" class="product-quantity-plus inline-flex flex-shrink-0 justify-center items-center h-8 w-8 ltr:rounded-r-sm rtl:rounded-l-sm border border-transparent font-semibold ti-btn-soft-light transition-all text-sm">
                                                <i class="ti ti-plus"></i>
                                                </button>
                                            </div>
                                            </td>
                                            <td>20%</td>
                                            <td>$699</td>
                                            <td class="text-end font-medium">
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <a href="{{url('wishlist')}}" class="hs-tooltip-toggle w-10 h-10 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                <i class="ti ti-heart"></i>
                                                <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                    Save To Whislist
                                                </span>
                                                </a>
                                            </div>
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <a href="javascript:void(0);" class="cart-btn hs-tooltip-toggle w-10 h-10 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                <i class="ti ti-trash"></i>
                                                <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                Delete
                                                </span>
                                                </a>
                                            </div>
                                            </td>
                                        </tr>
                                        <tr class="cart-box">
                                            <td class="flex">
                                            <img class="avatar avatar-lg rounded-sm bg-gray-100 dark:bg-black/20 p-1" src="{{asset('build/assets/img/ecommerce/products/7.png')}}" alt="Image Description">
                                            <div class="ltr:ml-3 rtl:mr-3">
                                                <span class="block text-sm font-semibold text-gray-800 dark:text-white max-w-[200px] truncate">Sun Glasses</span>
                                                <span class="block text-sm text-gray-600 dark:text-white/70">White Color</span>
                                                <span class="block text-sm text-gray-600 dark:text-white/70">Adjustable</span>
                                            </div>
                                            </td>
                                            <td>$699</td>
                                            <td>
                                            <div class="flex rounded-sm">
                                                <button aria-label="button" type="button" class="product-quantity-minus inline-flex flex-shrink-0 justify-center items-center h-8 w-8 ltr:rounded-l-sm rtl:rounded-r-sm border border-transparent font-semibold ti-btn-soft-light transition-all text-sm">
                                                <i class="ti ti-minus"></i>
                                                </button>
                                                <input type="text" name="product-quantity1" class="product-quantity p-0 ti-form-input w-20 rounded-none focus:z-10 text-center"
                                                placeholder="0">
                                                <button aria-label="button" type="button" class="product-quantity-plus inline-flex flex-shrink-0 justify-center items-center h-8 w-8 ltr:rounded-r-sm rtl:rounded-l-sm border border-transparent font-semibold ti-btn-soft-light transition-all text-sm">
                                                <i class="ti ti-plus"></i>
                                                </button>
                                            </div>
                                            </td>
                                            <td>10%</td>
                                            <td>$1,198</td>
                                            <td class="text-end font-medium">
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <a href="{{url('wishlist')}}" class="hs-tooltip-toggle w-10 h-10 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                <i class="ti ti-heart"></i>
                                                <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                    Save To Whislist
                                                </span>
                                                </a>
                                            </div>
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <a href="javascript:void(0);" class="cart-btn hs-tooltip-toggle w-10 h-10 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                <i class="ti ti-trash"></i>
                                                <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                Delete
                                                </span>
                                                </a>
                                            </div>
                                            </td>
                                        </tr>
                                        <tr class="cart-box">
                                            <td class="flex">
                                            <img class="avatar avatar-lg rounded-sm bg-gray-100 dark:bg-black/20 p-1" src="{{asset('build/assets/img/ecommerce/products/10.png')}}" alt="Image Description">
                                            <div class="ltr:ml-3 rtl:mr-3">
                                                <span class="block text-sm font-semibold text-gray-800 dark:text-white max-w-[200px] truncate">Leather Wallet For Grils</span>
                                                <span class="block text-sm text-gray-600 dark:text-white/70">White Color</span>
                                            </div>
                                            </td>
                                            <td>$150</td>
                                            <td>
                                            <div class="flex rounded-sm">
                                                <button aria-label="button" type="button" class="product-quantity-minus inline-flex flex-shrink-0 justify-center items-center h-8 w-8 ltr:rounded-l-sm rtl:rounded-r-sm border border-transparent font-semibold ti-btn-soft-light transition-all text-sm">
                                                <i class="ti ti-minus"></i>
                                                </button>
                                                <input type="text" name="product-quantity2" class="product-quantity p-0 ti-form-input w-20 rounded-none focus:z-10 text-center"
                                                placeholder="0">
                                                <button aria-label="button" type="button" class="product-quantity-plus inline-flex flex-shrink-0 justify-center items-center h-8 w-8 ltr:rounded-r-sm rtl:rounded-l-sm border border-transparent font-semibold ti-btn-soft-light transition-all text-sm">
                                                <i class="ti ti-plus"></i>
                                                </button>
                                            </div>
                                            </td>
                                            <td>5%</td>
                                            <td>$500</td>
                                            <td class="text-end font-medium">
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <a href="{{url('wishlist')}}" class="hs-tooltip-toggle w-10 h-10 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                <i class="ti ti-heart"></i>
                                                <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                    Save To Whislist
                                                </span>
                                                </a>
                                            </div>
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <a href="javascript:void(0);" class="cart-btn hs-tooltip-toggle w-10 h-10 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                <i class="ti ti-trash"></i>
                                                <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                Delete
                                                </span>
                                                </a>
                                            </div>
                                            </td>
                                        </tr>
                                        <tr class="cart-box">
                                            <td class="flex">
                                            <img class="avatar avatar-lg rounded-sm bg-gray-100 dark:bg-black/20 p-1" src="{{asset('build/assets/img/ecommerce/products/5.png')}}" alt="Image Description">
                                            <div class="ltr:ml-3 rtl:mr-3">
                                                <span class="block text-sm font-semibold text-gray-800 dark:text-white max-w-[200px] truncate">Dolor Rose Frangrance Perfume</span>
                                                <span class="block text-sm text-gray-600 dark:text-white/70">Jasmine Fragrance</span>
                                                <span class="block text-sm text-gray-600 dark:text-white/70">500 ML</span>
                                            </div>
                                            </td>
                                            <td>$299</td>
                                            <td>
                                            <div class="flex rounded-sm">
                                                <button aria-label="button" type="button" class="product-quantity-minus inline-flex flex-shrink-0 justify-center items-center h-8 w-8 ltr:rounded-l-sm rtl:rounded-r-sm border border-transparent font-semibold ti-btn-soft-light transition-all text-sm">
                                                <i class="ti ti-minus"></i>
                                                </button>
                                                <input type="text" name="product-quantity3" class="product-quantity p-0 ti-form-input w-20 rounded-none focus:z-10 text-center"
                                                placeholder="0">
                                                <button aria-label="button" type="button" class="product-quantity-plus inline-flex flex-shrink-0 justify-center items-center h-8 w-8 ltr:rounded-r-sm rtl:rounded-l-sm border border-transparent font-semibold ti-btn-soft-light transition-all text-sm">
                                                <i class="ti ti-plus"></i>
                                                </button>
                                            </div>
                                            </td>
                                            <td>10%</td>
                                            <td>$199</td>
                                            <td class="text-end font-medium">
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <a href="{{url('wishlist')}}" class="hs-tooltip-toggle w-10 h-10 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                <i class="ti ti-heart"></i>
                                                <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                    Save To Whislist
                                                </span>
                                                </a>
                                            </div>
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <a href="javascript:void(0);" class="cart-btn hs-tooltip-toggle w-10 h-10 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                <i class="ti ti-trash"></i>
                                                <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                Delete
                                                </span>
                                                </a>
                                            </div>
                                            </td>
                                        </tr>
                                        <tr class="cart-box">
                                            <td class="flex">
                                            <img class="avatar avatar-lg rounded-sm bg-gray-100 dark:bg-black/20 p-1" src="{{asset('build/assets/img/ecommerce/products/4.png')}}" alt="Image Description">
                                            <div class="ltr:ml-3 rtl:mr-3">
                                                <span class="block text-sm font-semibold text-gray-800 dark:text-white max-w-[200px] truncate">Dolor Wireless Airpods </span>
                                                <span class="block text-sm text-gray-600 dark:text-white/70">White color</span>
                                                <span class="block text-sm text-gray-600 dark:text-white/70">Bluetooth</span>
                                            </div>
                                            </td>
                                            <td>$499</td>
                                            <td>
                                            <div class="flex rounded-sm">
                                                <button aria-label="button" type="button" class="product-quantity-minus inline-flex flex-shrink-0 justify-center items-center h-8 w-8 ltr:rounded-l-sm rtl:rounded-r-sm border border-transparent font-semibold ti-btn-soft-light transition-all text-sm">
                                                <i class="ti ti-minus"></i>
                                                </button>
                                                <input type="text" name="product-quantity4" class="product-quantity p-0 ti-form-input w-20 rounded-none focus:z-10 text-center"
                                                placeholder="0">
                                                <button aria-label="button" type="button" class="product-quantity-plus inline-flex flex-shrink-0 justify-center items-center h-8 w-8 ltr:rounded-r-sm rtl:rounded-l-sm border border-transparent font-semibold ti-btn-soft-light transition-all text-sm">
                                                <i class="ti ti-plus"></i>
                                                </button>
                                            </div>
                                            </td>
                                            <td>0</td>
                                            <td>$499</td>
                                            <td class="text-end font-medium">
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <a href="{{url('wishlist')}}" class="hs-tooltip-toggle w-10 h-10 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                <i class="ti ti-heart"></i>
                                                <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                    Save To Whislist
                                                </span>
                                                </a>
                                            </div>
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <a href="javascript:void(0);" class="cart-btn hs-tooltip-toggle w-10 h-10 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                <i class="ti ti-trash"></i>
                                                <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                Delete
                                                </span>
                                                </a>
                                            </div>
                                            </td>
                                        </tr>
                                        <tr class="cart-box">
                                            <td class="flex">
                                            <img class="avatar avatar-lg rounded-sm bg-gray-100 dark:bg-black/20 p-1" src="{{asset('build/assets/img/ecommerce/products/2.png')}}" alt="Image Description">
                                            <div class="ltr:ml-3 rtl:mr-3">
                                                <span class="block text-sm font-semibold text-gray-800 dark:text-white max-w-[200px] truncate">Dolar Tshirt For Men</span>
                                                <span class="block text-sm text-gray-600 dark:text-white/70">Blue color</span>
                                                <span class="block text-sm text-gray-600 dark:text-white/70">Size : M</span>
                                            </div>
                                            </td>
                                            <td>$599</td>
                                            <td>
                                            <div class="flex rounded-sm">
                                                <button aria-label="button" type="button" class="product-quantity-minus inline-flex flex-shrink-0 justify-center items-center h-8 w-8 ltr:rounded-l-sm rtl:rounded-r-sm border border-transparent font-semibold ti-btn-soft-light transition-all text-sm">
                                                <i class="ti ti-minus"></i>
                                                </button>
                                                <input type="text" name="product-quantity5" class="product-quantity p-0 ti-form-input w-20 rounded-none focus:z-10 text-center"
                                                placeholder="0">
                                                <button aria-label="button" type="button" class="product-quantity-plus inline-flex flex-shrink-0 justify-center items-center h-8 w-8 ltr:rounded-r-sm rtl:rounded-l-sm border border-transparent font-semibold ti-btn-soft-light transition-all text-sm">
                                                <i class="ti ti-plus"></i>
                                                </button>
                                            </div>
                                            </td>
                                            <td>20%</td>
                                            <td>$399</td>
                                            <td class="text-end font-medium">
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <a href="{{url('wishlist')}}" class="hs-tooltip-toggle w-10 h-10 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                <i class="ti ti-heart"></i>
                                                <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                    Save To Whislist
                                                </span>
                                                </a>
                                            </div>
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <a href="javascript:void(0);" class="cart-btn hs-tooltip-toggle w-10 h-10 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                <i class="ti ti-trash"></i>
                                                <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                Delete
                                                </span>
                                                </a>
                                            </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                                </div>
                                <div class="box hidden cart-empty">
                                <div class="box-body">
                                    <div class="justify-center text-center">
                                    <img src="{{asset('build/assets/img/ecommerce/1.png')}}" class="mx-auto w-1/2 h-1/2" alt="Image Description">
                                    <h3 class="font-semibold mb-1">Your Cart is Empty</h3>
                                    <h5 class="mb-3">Add Some items to make me happy &#128515;</h5>
                                    <a href="{{url('products')}}" class="ti-btn ti-btn-primary"><i class="ri ri-arrow-right-line ltr:mr-1 rtl:ml-1"></i>continue shopping </a>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 xl:col-span-3">
                                <div class="box">
                                <div class="box-body">
                                    <div class="relative">
                                    <div class="flex rounded-sm space-x-3 rtl:space-x-reverse">
                                        <input type="text" class="p-2 ti-form-input" placeholder="Enter Coupon Number">
                                        <a href="javascript:void(0);" class="ltr:ml-3 rtl:mr-3 m-0 ti-btn p-2 ti-btn-primary">Apply</a>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Product Totals</h5>
                                </div>
                                <div class="box-body p-0">
                                    <div class="overflow-auto">
                                    <table class="ti-custom-table ti-custom-table-head">
                                        <tbody>
                                        <tr>
                                            <td>
                                            <span class="text-sm text-gray-600 dark:text-white/70">Sub Total</span>
                                            </td>
                                            <td class="font-medium">
                                            <span class="text-sm text-gray-600 dark:text-white/70">3,458</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            <span class="text-sm text-gray-600 dark:text-white/70">Over All Discount</span>
                                            </td>
                                            <td class="font-medium">
                                            <span class="text-sm text-gray-600 dark:text-white/70">- 15%</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            <span class="text-sm text-gray-600 dark:text-white/70">Shipping Charges</span>
                                            </td>
                                            <td class="font-medium">
                                            <span class="text-sm text-gray-600 dark:text-white/70">0 (Free)</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            <span class="text-sm text-gray-600 dark:text-white/70">Vatt</span>
                                            </td>
                                            <td class="font-medium">
                                            <span class="text-sm text-gray-600 dark:text-white/70">+25%</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            <span class="text-sm text-gray-600 dark:text-white/70">Gst</span>
                                            </td>
                                            <td class="font-medium">
                                            <span class="text-sm text-gray-600 dark:text-white/70">+20%</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            <span class="text-sm font-semibold text-gray-800 dark:text-white">Total</span>
                                            </td>
                                            <td class="font-medium">
                                            <span class="text-sm font-semibold text-gray-800 dark:text-white">$40,020</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <a href="{{url('checkout')}}" class="w-full ti-btn p-2 ti-btn-primary">
                                    <i class="ti ti-arrow-right"></i>Check Out
                                    </a>
                                    <a href="{{url('products')}}" class="ti-btn p-2 ti-btn-secondary w-full"><i class="ti ti-arrow-left rtl:rotate-180"></i>Continue Shopping
                                    </a>
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

        <!-- CART JS -->
        @vite('resources/assets/js/cart.js')
        

@endsection