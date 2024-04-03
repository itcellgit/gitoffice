@extends('layouts.master')

@section('styles')

        <!-- SWIPER CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/swiper/swiper-bundle.min.css')}}">

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
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> NFT Dashboard</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                    <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Dashboards
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                    </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        NFT Dashboard
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="col-span-12 xxl:col-span-9">
                                    <div class="grid grid-cols-12 gap-x-6">
                                        <div class="col-span-12">
                                            <div class="mb-6 flex items-center justify-between">
                                                <h5 class="box-title">Hot Autions :</h5>
                                                <div>
                                                    <button type="button" class="ti-btn ti-btn-soft-primary m-0 py-1">View
                                                        All</button>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-12 gap-x-6">
                                                <div class="md:!col-span-4 col-span-12">
                                                    <div class="box">
                                                        <img src="{{asset('build/assets/img/nft-images/1.png')}}" class="box-img-top rounded-sm h-[380px]"
                                                            alt="...">
                                                        <div class="flex align-center justify-between nft-like-section w-full px-4">
                                                            <div class="flex-auto">
                                                                <button type="button"
                                                                    class="ti-btn ti-btn-success rounded-full m-0 px-2 py-1"
                                                                    aria-label="button">
                                                                    <i class="ri-heart-fill"></i>
                                                                </button>
                                                            </div>
                                                            <div>
                                                                <span class="badge rounded-sm nft-like-badge text-white"><i
                                                                        class="ri-heart-fill ltr:mr-1 rtl:ml-1 text-danger align-middle"></i>1.32k</span>
                                                            </div>
                                                        </div>
                                                        <div class="box-body nft-auction-time text-white p-4">
                                                            <h5 class="text-base font-semibold mb-4">Color Abstract - NFT</h5>
                                                            <div class="flex items-center mb-4">
                                                                <div class="ltr:mr-2 rtl:ml-2 leading-none">
                                                                    <img src="{{asset('build/assets/img/users/10.jpg')}}" alt=""
                                                                        class="avatar avatar-sm rounded-full ring-transparent">
                                                                </div>
                                                                <div>
                                                                    <p class="mb-0 font-semibold">Bloom NFT</p>
                                                                    <p class="text-xs text-white/70 mb-0">@bloom116</p>
                                                                </div>
                                                            </div>
                                                            <div class="flex flex-wrap items-center justify-between">
                                                                <div>
                                                                    <div class="text-sm font-semibold mb-2 text-white/70">
                                                                        Highest Bid
                                                                    </div>
                                                                    <div class="flex flex-wrap items-center leading-none">
                                                                        <img src="{{asset('build/assets/img/crypto-currencies/square-color/Bitcoin.svg')}}"
                                                                            alt=""
                                                                            class="avatar ring-transparent w-5 h-5 ltr:mr-1 rtl:ml-1">0.19
                                                                        BTC
                                                                    </div>
                                                                </div>
                                                                <div class="sm:text-end">
                                                                    <div class="text-sm font-semibold mb-2 text-white/70">Ending -In
                                                                    </div>
                                                                    <div class="flex flex-wrap items-center leading-none">
                                                                        04 Days 02 : 27 : 32</div>
                                                                </div>
                                                            </div>
                                                            <button type="button"
                                                                class="ti-btn ti-btn-light py-1 m-0 mt-4 w-full">Place Bid</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="md:!col-span-4 col-span-12">
                                                    <div class="box">
                                                        <img src="{{asset('build/assets/img/nft-images/2.png')}}" class="box-img-top rounded-sm h-[380px]"
                                                            alt="...">
                                                        <div class="flex align-center justify-between nft-like-section w-full px-4">
                                                            <div class="flex-auto">
                                                                <button type="button"
                                                                    class="ti-btn ti-btn-success rounded-full m-0 px-2 py-1"
                                                                    aria-label="button">
                                                                    <i class="ri-heart-fill"></i>
                                                                </button>
                                                            </div>
                                                            <div>
                                                                <span class="badge rounded-sm nft-like-badge text-white"><i
                                                                        class="ri-heart-fill ltr:mr-1 rtl:ml-1 text-danger align-middle"></i>1.26k</span>
                                                            </div>
                                                        </div>
                                                        <div class="box-body nft-auction-time text-white p-4">
                                                            <h5 class="text-base font-semibold mb-4">Fluid Abstract - NFT</h5>
                                                            <div class="flex items-center mb-4">
                                                                <div class="ltr:mr-2 rtl:ml-2 leading-none">
                                                                    <img src="{{asset('build/assets/img/users/5.jpg')}}" alt=""
                                                                        class="avatar avatar-sm ring-transparent rounded-full">
                                                                </div>
                                                                <div>
                                                                    <p class="mb-0 font-semibold">Ergos NFT</p>
                                                                    <p class="text-xs text-white/70 mb-0">@ergos900</p>
                                                                </div>
                                                            </div>
                                                            <div class="flex flex-wrap items-center justify-between">
                                                                <div>
                                                                    <div class="text-sm font-semibold mb-2 text-white/70">
                                                                        Highest Bid
                                                                    </div>
                                                                    <div class="flex flex-wrap items-center leading-none">
                                                                        <img src="{{asset('build/assets/img/crypto-currencies/square-color/Bitcoin.svg')}}"
                                                                            alt=""
                                                                            class="avatar ring-transparent w-5 h-5 ltr:mr-1 rtl:ml-1">0.35
                                                                        BTC
                                                                    </div>
                                                                </div>
                                                                <div class="sm:text-end">
                                                                    <div class="text-sm font-semibold mb-2 text-white/70">Ending -In
                                                                    </div>
                                                                    <div class="flex flex-wrap items-center leading-none">
                                                                        04 Days 02 : 27 : 32</div>
                                                                </div>
                                                            </div>
                                                            <button type="button"
                                                                class="ti-btn ti-btn-light py-1 m-0 mt-4 w-full">Place Bid</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="md:!col-span-4 col-span-12">
                                                    <div class="box">
                                                        <img src="{{asset('build/assets/img/nft-images/3.png')}}" class="box-img-top rounded-sm h-[380px]"
                                                            alt="...">
                                                        <div class="flex align-center justify-between nft-like-section w-full px-4">
                                                            <div class="flex-auto">
                                                                <button type="button"
                                                                    class="ti-btn ti-btn-success rounded-full m-0 px-2 py-1"
                                                                    aria-label="button">
                                                                    <i class="ri-heart-fill"></i>
                                                                </button>
                                                            </div>
                                                            <div>
                                                                <span class="badge rounded-sm nft-like-badge text-white"><i
                                                                        class="ri-heart-fill ltr:mr-1 rtl:ml-1 text-danger align-middle"></i>2.45k</span>
                                                            </div>
                                                        </div>
                                                        <div class="box-body nft-auction-time text-white p-4">
                                                            <h5 class="text-base font-semibold mb-4">Space Fluid - NFT</h5>
                                                            <div class="flex items-center mb-4">
                                                                <div class="ltr:mr-2 rtl:ml-2 leading-none">
                                                                    <img src="{{asset('build/assets/img/users/7.jpg')}}" alt=""
                                                                        class="avatar avatar-sm ring-transparent rounded-full">
                                                                </div>
                                                                <div>
                                                                    <p class="mb-0 font-semibold">Caros NFT</p>
                                                                    <p class="text-xs text-white/70 mb-0">@caros002</p>
                                                                </div>
                                                            </div>
                                                            <div class="flex flex-wrap items-center justify-between">
                                                                <div>
                                                                    <div class="text-sm font-semibold mb-2 text-white/70">
                                                                        Highest Bid
                                                                    </div>
                                                                    <div class="flex flex-wrap items-center leading-none">
                                                                        <img src="{{asset('build/assets/img/crypto-currencies/square-color/Bitcoin.svg')}}"
                                                                            alt=""
                                                                            class="avatar ring-transparent w-5 h-5 ltr:mr-1 rtl:ml-1">0.19
                                                                        BTC
                                                                    </div>
                                                                </div>
                                                                <div class="sm:text-end">
                                                                    <div class="text-sm font-semibold mb-2 text-white/70">Ending -In
                                                                    </div>
                                                                    <div class="flex flex-wrap items-center leading-none">
                                                                        04 Days 02 : 27 : 32</div>
                                                                </div>
                                                            </div>
                                                            <button type="button"
                                                                class="ti-btn ti-btn-light py-1 m-0 mt-4 w-full">Place Bid</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-12 xxl:col-span-4">
                                            <div class="box">
                                                <div class="box-header">
                                                    <div class="flex justify-between relative z-10">
                                                        <h5 class="box-title my-auto">Personal Listings</h5>
                                                        <div class=" block ltr:ml-auto rtl:mr-auto my-auto">
                                                            <button type="button" class="ti-btn m-0 rounded-sm p-1 px-3 !border border-gray-200 text-gray-400 hover:text-gray-500 hover:bg-gray-200 hover:border-gray-200 focus:ring-gray-200  dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                                                                View All</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="box-body p-0">
                                                    <ul class="flex flex-col">
                                                        <li class="ti-list-group py-4 border-t-0 border-x-0 text-gray-800 dark:text-white dark:border-white/10">
                                                            <a href="javascript:void(0);" class="w-full">
                                                                <div class="flex items-center justify-between">
                                                                    <div class="flex items-center">
                                                                        <img src="{{asset('build/assets/img/nft-images/8.png')}}" alt="" class="rounded-sm ltr:mr-2 rtl:ml-2 leading-none nft-img">
                                                                        <div>
                                                                            <p class="text-sm font-semibold mb-0">Kakasha Si</p>
                                                                            <span
                                                                                class="text-gray-500 dark:text-white/70 text-xs">@sensei011<span
                                                                                    class="ltr:ml-2 rtl:mr-2 text-success text-xs"><i
                                                                                        class="ri-arrow-up-s-line align-middle ltr:mr-1 rtl:ml-1"></i>0.45%</span></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-end">
                                                                        <span
                                                                            class="text-xs text-gray-500 dark:text-white/70 ltr:pl-6 rtl:pr-6">PRICE</span>
                                                                        <p class="mb-0 font-semibold flex items-center"><span
                                                                                class="avatar w-6 h-6 p-1 !ring-transparent"><img
                                                                                    src="{{asset('build/assets/img/crypto-currencies/regular/Bitcoin.svg')}}"
                                                                                    alt=""></span>1.75BTC</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="ti-list-group py-4 border-t-0 border-x-0 text-gray-800 dark:text-white dark:border-white/10">
                                                            <a href="javascript:void(0);" class="w-full">
                                                                <div class="flex items-center justify-between">
                                                                    <div class="flex items-center">
                                                                        <img src="{{asset('build/assets/img/nft-images/15.png')}}" alt="" class="rounded-sm ltr:mr-2 rtl:ml-2 leading-none nft-img">
                                                                        <div>
                                                                            <p class="text-sm font-semibold mb-0">Naruto Uzumaki</p>
                                                                            <span
                                                                                class="text-gray-500 dark:text-white/70 text-xs">@naruto111<span
                                                                                    class="ltr:ml-2 rtl:mr-2 text-success  text-xs"><i
                                                                                        class="ri-arrow-up-s-line align-middle ltr:mr-1 rtl:ml-1"></i>1.70%</span></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-end">
                                                                        <span
                                                                            class="text-xs text-gray-500 dark:text-white/70 ltr:pl-6 rtl:pr-6">PRICE</span>
                                                                        <p class="mb-0 font-semibold flex items-center"><span
                                                                                class="avatar w-6 h-6 p-1 !ring-transparent"><img
                                                                                    src="{{asset('build/assets/img/crypto-currencies/regular/Bitcoin.svg')}}"
                                                                                    alt=""></span>2.45BTC</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="ti-list-group py-4 border-t-0 border-x-0 text-gray-800 dark:text-white dark:border-white/10">
                                                            <a href="javascript:void(0);" class="w-full">
                                                                <div class="flex items-center justify-between">
                                                                    <div class="flex items-center">
                                                                        <img src="{{asset('build/assets/img/nft-images/14.png')}}" alt="" class="rounded-sm ltr:mr-2 rtl:ml-2 leading-none nft-img">
                                                                        <div>
                                                                            <p class="text-sm font-semibold mb-0">Kazimo Aruke</p>
                                                                            <span
                                                                                class="text-gray-500 dark:text-white/70 text-xs">@kazimo900<span
                                                                                    class="ltr:ml-2 rtl:mr-2 text-danger text-xs"><i
                                                                                        class="ri-arrow-down-s-line align-middle ltr:mr-1 rtl:ml-1"></i>1.21%</span></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-end">
                                                                        <span
                                                                            class="text-xs text-gray-500 dark:text-white/70 ltr:pl-6 rtl:pr-6">PRICE</span>
                                                                        <p class="mb-0 font-semibold flex items-center"><span
                                                                                class="avatar w-6 h-6 p-1 !ring-transparent"><img
                                                                                    src="{{asset('build/assets/img/crypto-currencies/regular/Bitcoin.svg')}}"
                                                                                    alt=""></span>1.95BTC</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="ti-list-group py-4 border-t-0 border-x-0 text-gray-800 dark:text-white dark:border-white/10">
                                                            <a href="javascript:void(0);" class="w-full">
                                                                <div class="flex items-center justify-between">
                                                                    <div class="flex items-center">
                                                                        <img src="{{asset('build/assets/img/nft-images/2.png')}}" alt="" class="rounded-sm ltr:mr-2 rtl:ml-2 leading-none nft-img">
                                                                        <div>
                                                                            <p class="text-sm font-semibold mb-0">Oorichimaru lo</p>
                                                                            <span
                                                                                class="text-gray-500 dark:text-white/70 text-xs">@ooro001<span
                                                                                    class="ltr:ml-2 rtl:mr-2 text-danger text-xs"><i
                                                                                        class="ri-arrow-down-s-line align-middle ltr:mr-1 rtl:ml-1"></i>0.35%</span></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-end">
                                                                        <span
                                                                            class="text-xs text-gray-500 dark:text-white/70 ltr:pl-6 rtl:pr-6">PRICE</span>
                                                                        <p class="mb-0 font-semibold flex items-center"><span
                                                                                class="avatar w-6 h-6 p-1 !ring-transparent"><img
                                                                                    src="{{asset('build/assets/img/crypto-currencies/regular/Bitcoin.svg')}}"
                                                                                    alt=""></span>1.65BTC</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="ti-list-group py-4 border-t-0 border-x-0 text-gray-800 dark:text-white dark:border-white/10">
                                                            <a href="javascript:void(0);" class="w-full">
                                                                <div class="flex items-center justify-between">
                                                                    <div class="flex items-center">
                                                                        <img src="{{asset('build/assets/img/nft-images/10.png')}}" alt="" class="rounded-sm ltr:mr-2 rtl:ml-2 leading-none nft-img">
                                                                        <div>
                                                                            <p class="text-sm font-semibold mb-0">Sasuke Uchiha</p>
                                                                            <span
                                                                                class="text-gray-500 dark:text-white/70 text-xs">@sasuke777<span
                                                                                    class="ltr:ml-2 rtl:mr-2 text-danger text-xs"><i
                                                                                        class="ri-arrow-down-s-line align-middle ltr:mr-1 rtl:ml-1"></i>1.52%</span></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-end">
                                                                        <span
                                                                            class="text-xs text-gray-500 dark:text-white/70 ltr:pl-6 rtl:pr-6">PRICE</span>
                                                                        <p class="mb-0 font-semibold flex items-center"><span
                                                                                class="avatar w-6 h-6 p-1 !ring-transparent"><img
                                                                                    src="{{asset('build/assets/img/crypto-currencies/regular/Bitcoin.svg')}}"
                                                                                    alt=""></span>1.15BTC</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="ti-list-group py-4 border-t-0 border-x-0 text-gray-800 dark:text-white dark:border-white/10">
                                                            <a href="javascript:void(0);" class="w-full">
                                                                <div class="flex items-center justify-between">
                                                                    <div class="flex items-center">
                                                                        <img src="{{asset('build/assets/img/nft-images/12.png')}}" alt="" class="rounded-sm ltr:mr-2 rtl:ml-2 leading-none nft-img">
                                                                        <div>
                                                                            <p class="text-sm font-semibold mb-0">Lorem Ipsum Uch</p>
                                                                            <span
                                                                                class="text-gray-500 dark:text-white/70 text-xs">@kakashi092<span
                                                                                    class="ltr:ml-2 rtl:mr-2 text-danger text-xs"><i
                                                                                        class="ri-arrow-down-s-line align-middle ltr:mr-1 rtl:ml-1"></i>2.32%</span></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-end">
                                                                        <span
                                                                            class="text-xs text-gray-500 dark:text-white/70 ltr:pl-6 rtl:pr-6">PRICE</span>
                                                                        <p class="mb-0 font-semibold flex items-center"><span
                                                                                class="avatar w-6 h-6 p-1 !ring-transparent"><img
                                                                                    src="{{asset('build/assets/img/crypto-currencies/regular/Bitcoin.svg')}}"
                                                                                    alt=""></span>1.25BTC</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="ti-list-group py-4 border-0 text-gray-800 dark:text-white">
                                                            <a href="javascript:void(0);" class="w-full">
                                                                <div class="flex items-center justify-between">
                                                                    <div class="flex items-center">
                                                                        <img src="{{asset('build/assets/img/nft-images/4.png')}}" alt="" class="rounded-sm ltr:mr-2 rtl:ml-2 leading-none nft-img">
                                                                        <div>
                                                                            <p class="text-sm font-semibold mb-0">Nagiro Ohinavo</p>
                                                                            <span
                                                                                class="text-gray-500 dark:text-white/70 text-xs">@nagiro096<span
                                                                                    class="ltr:ml-2 rtl:mr-2 text-success text-xs"><i
                                                                                        class="ri-arrow-up-s-line align-middle ltr:mr-1 rtl:ml-1"></i>0.99%</span></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-end">
                                                                        <span
                                                                            class="text-xs text-gray-500 dark:text-white/70 ltr:pl-6 rtl:pr-6">PRICE</span>
                                                                        <p class="mb-0 font-semibold flex items-center"><span
                                                                                class="avatar w-6 h-6 p-1 !ring-transparent"><img
                                                                                    src="{{asset('build/assets/img/crypto-currencies/regular/Bitcoin.svg')}}"
                                                                                    alt=""></span>1.12BTC</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-12 xxl:col-span-8">
                                            <div class="box">
                                                <div class="box-header">
                                                    <div class="sm:flex justify-between">
                                                        <h5 class="box-title my-auto">Sales Overview</h5>
                                                        <div class="inline-flex rounded-md shadow-sm">
                                                            <button type="button"
                                                                class="ti-btn-group text-xs !border-0 py-2 px-3 ti-btn-primary">
                                                                1D
                                                            </button>
                                                            <button type="button"
                                                                class="ti-btn-group text-xs !border-0 py-2 px-3 ti-btn-soft-primary">
                                                                1W
                                                            </button>
                                                            <button type="button"
                                                                class="ti-btn-group text-xs !border-0 py-2 px-3 ti-btn-soft-primary">
                                                                1M
                                                            </button>
                                                            <button type="button"
                                                                class="ti-btn-group text-xs !border-0 py-2 px-3 ti-btn-soft-primary">
                                                                3M
                                                            </button>
                                                            <button type="button"
                                                                class="ti-btn-group text-xs !border-0 py-2 px-3 ti-btn-soft-primary">
                                                                6M
                                                            </button>
                                                            <button type="button"
                                                                class="ti-btn-group text-xs !border-0 py-2 px-3 ti-btn-soft-primary">
                                                                1Y
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="box-body p-0">
                                                    <div
                                                        class="flex flex-wrap p-4 border-b border-dashed border-gray-200 dark:border-white/10">
                                                        <div class="ltr:mr-3 rtl:ml-3">
                                                            <span class="avatar avatar-sm rounded-full p-2 bg-gray-100 dark:bg-black/20">
                                                                <img src="{{asset('build/assets/img/crypto-currencies/regular/Bitcoin.svg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="flex flex-wrap justify-evenly flex-auto">
                                                            <div class="sm:m-0 m-2">
                                                                <span>Symbol</span>
                                                                <p class="font-semibold mb-0">BTC</p>
                                                            </div>
                                                            <div class="sm:m-0 m-2">
                                                                <span>Price Benchmark</span>
                                                                <p class="font-semibold mb-0">-0.39%</p>
                                                            </div>
                                                            <div class="sm:m-0 m-2">
                                                                <span>Price (USD)</span>
                                                                <p class="text-success font-semibold mb-0">$1,212.67</p>
                                                            </div>
                                                            <div class="sm:m-0 m-2">
                                                                <span>Change (24H)</span>
                                                                <p class="text-danger font-semibold mb-0">-0.14%</p>
                                                            </div>
                                                            <div class="sm:m-0 m-2">
                                                                <span>Market Cap</span>
                                                                <p class="font-semibold mb-0">$148.20B</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="nft-statistics" class="p-4"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 xxl:col-span-3">
                                    <div class="box overflow-hidden">
                                        <div class="box-header">
                                            <div class="flex justify-between">
                                                <h5 class="box-title my-auto">Top Creators</h5>
                                                <div class="hs-dropdown ti-dropdown block ltr:ml-auto rtl:mr-auto my-auto">
                                                    <button id="hs-dropdown-custom-icon-trigger" type="button" aria-label="button"
                                                        class="hs-dropdown-toggle ti-dropdown-toggle rounded-sm p-2 bg-white !border border-gray-200 text-gray-500 hover:bg-gray-100  focus:ring-gray-200 dark:bg-black/20 dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                                                        <i class="text-sm leading-none ti ti-dots-vertical"></i> </button>
                                                    <div class="hs-dropdown-menu ti-dropdown-menu"
                                                        aria-labelledby="hs-dropdown-custom-icon-trigger">
                                                        <a class="ti-dropdown-item" href="javascript:void(0)">Action</a>
                                                        <a class="ti-dropdown-item" href="javascript:void(0)">Another Action</a>
                                                        <a class="ti-dropdown-item" href="javascript:void(0)">SomBTCing else
                                                            here</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-body p-0">
                                            <div class="overflow-auto creators-table">
                                                <table class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="flex items-center min-w-[180px]">
                                                                    <img src="{{asset('build/assets/img/users/4.jpg')}}" alt=""
                                                                        class="avatar avatar-sm rounded-full ltr:mr-2 rtl:ml-2">
                                                                    <div class="items-center">
                                                                        <p class="text-sm mb-0 flex font-semibold">Amanda Nanes<svg
                                                                                class="fill-primary w-4 h-4 ltr:ml-2 rtl:mr-2"
                                                                                xmlns="http://www.w3.org/2000/svg" width="100"
                                                                                height="100" enable-background="new 0 0 100 100"
                                                                                viewBox="0 0 100 100">
                                                                                <path
                                                                                    d="M88.057,45.286l-5.456-5.455c-1.295-1.295-2.356-3.854-2.356-5.689v-7.715c0-3.67-2.998-6.668-6.667-6.67h-7.718  c-1.833,0-4.395-1.063-5.69-2.357l-5.455-5.455c-2.592-2.592-6.836-2.592-9.428,0l-5.455,5.459c-1.296,1.295-3.861,2.355-5.69,2.355  h-7.715c-3.665,0-6.667,2.998-6.667,6.668v7.715c0,1.828-1.061,4.395-2.356,5.689l-5.456,5.455c-2.594,2.592-2.594,6.836,0,9.432  l5.456,5.455c1.296,1.295,2.356,3.861,2.356,5.689v7.715c0,3.666,3.002,6.668,6.667,6.668h7.715c1.833,0,4.395,1.061,5.69,2.355  l5.455,5.457c2.592,2.59,6.836,2.59,9.428,0l5.455-5.457c1.296-1.295,3.857-2.355,5.69-2.355h7.718c3.669,0,6.667-3.002,6.667-6.668  v-7.715c0-1.836,1.062-4.395,2.356-5.689l5.456-5.455C90.647,52.122,90.647,47.878,88.057,45.286z M44.709,65.001L30,50.29  l4.714-4.713l9.996,9.996l20.577-20.572L70,39.714L44.709,65.001z">
                                                                                </path>
                                                                            </svg></p>
                                                                        <span
                                                                            class="text-xs text-gray-500 dark:text-white/70">amandananes@</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="items-center">
                                                                    <span class="text-xs text-gray-500 dark:text-white/70">Total
                                                                        Sold</span>
                                                                    <p class="text-sm mb-0 font-semibold">18</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="items-center">
                                                                    <span class="text-xs text-gray-500 dark:text-white/70">Sale
                                                                        Value</span>
                                                                    <p class="text-sm mb-0 font-semibold">$1,982</p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="flex items-center min-w-[180px]">
                                                                    <img src="{{asset('build/assets/img/users/15.jpg')}}" alt=""
                                                                        class="avatar avatar-sm rounded-full ltr:mr-2 rtl:ml-2">
                                                                    <div class="items-center">
                                                                        <p class="text-sm mb-0 flex font-semibold">
                                                                            Charles Achilles<svg
                                                                                class="fill-primary w-4 h-4 ltr:ml-2 rtl:mr-2"
                                                                                xmlns="http://www.w3.org/2000/svg" width="100"
                                                                                height="100" enable-background="new 0 0 100 100"
                                                                                viewBox="0 0 100 100">
                                                                                <path
                                                                                    d="M88.057,45.286l-5.456-5.455c-1.295-1.295-2.356-3.854-2.356-5.689v-7.715c0-3.67-2.998-6.668-6.667-6.67h-7.718  c-1.833,0-4.395-1.063-5.69-2.357l-5.455-5.455c-2.592-2.592-6.836-2.592-9.428,0l-5.455,5.459c-1.296,1.295-3.861,2.355-5.69,2.355  h-7.715c-3.665,0-6.667,2.998-6.667,6.668v7.715c0,1.828-1.061,4.395-2.356,5.689l-5.456,5.455c-2.594,2.592-2.594,6.836,0,9.432  l5.456,5.455c1.296,1.295,2.356,3.861,2.356,5.689v7.715c0,3.666,3.002,6.668,6.667,6.668h7.715c1.833,0,4.395,1.061,5.69,2.355  l5.455,5.457c2.592,2.59,6.836,2.59,9.428,0l5.455-5.457c1.296-1.295,3.857-2.355,5.69-2.355h7.718c3.669,0,6.667-3.002,6.667-6.668  v-7.715c0-1.836,1.062-4.395,2.356-5.689l5.456-5.455C90.647,52.122,90.647,47.878,88.057,45.286z M44.709,65.001L30,50.29  l4.714-4.713l9.996,9.996l20.577-20.572L70,39.714L44.709,65.001z">
                                                                                </path>
                                                                            </svg></p>
                                                                        <span
                                                                            class="text-xs text-gray-500 dark:text-white/70">@charlesachilles</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="items-center">
                                                                    <span class="text-xs text-gray-500 dark:text-white/70">Total
                                                                        Sold</span>
                                                                    <p class="text-sm mb-0 font-semibold">126</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="items-center">
                                                                    <span class="text-xs text-gray-500 dark:text-white/70">Sale
                                                                        Value</span>
                                                                    <p class="text-sm mb-0 font-semibold">$16,982</p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="flex items-center min-w-[180px]">
                                                                    <img src="{{asset('build/assets/img/users/5.jpg')}}" alt=""
                                                                        class="avatar avatar-sm rounded-full ltr:mr-2 rtl:ml-2">
                                                                    <div class="items-center">
                                                                        <p class="text-sm mb-0 flex font-semibold">
                                                                            Julia Camo<svg
                                                                                class="fill-primary w-4 h-4 ltr:ml-2 rtl:mr-2"
                                                                                xmlns="http://www.w3.org/2000/svg" width="100"
                                                                                height="100" enable-background="new 0 0 100 100"
                                                                                viewBox="0 0 100 100">
                                                                                <path
                                                                                    d="M88.057,45.286l-5.456-5.455c-1.295-1.295-2.356-3.854-2.356-5.689v-7.715c0-3.67-2.998-6.668-6.667-6.67h-7.718  c-1.833,0-4.395-1.063-5.69-2.357l-5.455-5.455c-2.592-2.592-6.836-2.592-9.428,0l-5.455,5.459c-1.296,1.295-3.861,2.355-5.69,2.355  h-7.715c-3.665,0-6.667,2.998-6.667,6.668v7.715c0,1.828-1.061,4.395-2.356,5.689l-5.456,5.455c-2.594,2.592-2.594,6.836,0,9.432  l5.456,5.455c1.296,1.295,2.356,3.861,2.356,5.689v7.715c0,3.666,3.002,6.668,6.667,6.668h7.715c1.833,0,4.395,1.061,5.69,2.355  l5.455,5.457c2.592,2.59,6.836,2.59,9.428,0l5.455-5.457c1.296-1.295,3.857-2.355,5.69-2.355h7.718c3.669,0,6.667-3.002,6.667-6.668  v-7.715c0-1.836,1.062-4.395,2.356-5.689l5.456-5.455C90.647,52.122,90.647,47.878,88.057,45.286z M44.709,65.001L30,50.29  l4.714-4.713l9.996,9.996l20.577-20.572L70,39.714L44.709,65.001z">
                                                                                </path>
                                                                            </svg></p>
                                                                        <span
                                                                            class="text-xs text-gray-500 dark:text-white/70">@juliacamo</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="items-center">
                                                                    <span class="text-xs text-gray-500 dark:text-white/70">Total
                                                                        Sold</span>
                                                                    <p class="text-sm mb-0 font-semibold">42</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="items-center">
                                                                    <span class="text-xs text-gray-500 dark:text-white/70">Sale
                                                                        Value</span>
                                                                    <p class="text-sm mb-0 font-semibold">$3,432</p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="flex items-center min-w-[180px]">
                                                                    <img src="{{asset('build/assets/img/users/12.jpg')}}" alt=""
                                                                        class="avatar avatar-sm rounded-full ltr:mr-2 rtl:ml-2">
                                                                    <div class="items-center">
                                                                        <p class="text-sm mb-0 flex font-semibold">Json Taylor<svg
                                                                                class="fill-primary w-4 h-4 ltr:ml-2 rtl:mr-2"
                                                                                xmlns="http://www.w3.org/2000/svg" width="100"
                                                                                height="100" enable-background="new 0 0 100 100"
                                                                                viewBox="0 0 100 100">
                                                                                <path
                                                                                    d="M88.057,45.286l-5.456-5.455c-1.295-1.295-2.356-3.854-2.356-5.689v-7.715c0-3.67-2.998-6.668-6.667-6.67h-7.718  c-1.833,0-4.395-1.063-5.69-2.357l-5.455-5.455c-2.592-2.592-6.836-2.592-9.428,0l-5.455,5.459c-1.296,1.295-3.861,2.355-5.69,2.355  h-7.715c-3.665,0-6.667,2.998-6.667,6.668v7.715c0,1.828-1.061,4.395-2.356,5.689l-5.456,5.455c-2.594,2.592-2.594,6.836,0,9.432  l5.456,5.455c1.296,1.295,2.356,3.861,2.356,5.689v7.715c0,3.666,3.002,6.668,6.667,6.668h7.715c1.833,0,4.395,1.061,5.69,2.355  l5.455,5.457c2.592,2.59,6.836,2.59,9.428,0l5.455-5.457c1.296-1.295,3.857-2.355,5.69-2.355h7.718c3.669,0,6.667-3.002,6.667-6.668  v-7.715c0-1.836,1.062-4.395,2.356-5.689l5.456-5.455C90.647,52.122,90.647,47.878,88.057,45.286z M44.709,65.001L30,50.29  l4.714-4.713l9.996,9.996l20.577-20.572L70,39.714L44.709,65.001z">
                                                                                </path>
                                                                            </svg></p>
                                                                        <span
                                                                            class="text-xs text-gray-500 dark:text-white/70">@jsontaylor</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="items-center">
                                                                    <span class="text-xs text-gray-500 dark:text-white/70">Total
                                                                        Sold</span>
                                                                    <p class="text-sm mb-0 font-semibold">63</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="items-center">
                                                                    <span class="text-xs text-gray-500 dark:text-white/70">Sale
                                                                        Value</span>
                                                                    <p class="text-sm mb-0 font-semibold">$9,236</p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-6 flex items-center justify-between">
                                        <h5 class="box-title">Featured Collections :</h5>
                                        <div>
                                            <button type="button" class="ti-btn ti-btn-soft-primary m-0 py-1">View All</button>
                                        </div>
                                    </div>
                                    <div class="swiper pagination-dynamic text-start !h-auto">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="box">
                                                    <div class="box-body">
                                                        <div class="grid grid-cols-12 gap-2">
                                                            <div class="col-span-6">
                                                                <img src="{{asset('build/assets/img/nft-images/4.png')}}" alt=""
                                                                    class="nft-featuredcollect-image">
                                                            </div>
                                                            <div class="col-span-6">
                                                                <img src="{{asset('build/assets/img/nft-images/5.png')}}" alt=""
                                                                    class="nft-featuredcollect-image">
                                                            </div>
                                                            <div class="col-span-6">
                                                                <img src="{{asset('build/assets/img/nft-images/6.png')}}" alt=""
                                                                    class="nft-featuredcollect-image">
                                                            </div>
                                                            <div class="col-span-6">
                                                                <img src="{{asset('build/assets/img/nft-images/7.png')}}" alt=""
                                                                    class="nft-featuredcollect-image">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="box-footer">
                                                        <div class="flex items-center">
                                                            <div class="flex items-center flex-auto">
                                                                <div class="ltr:mr-2 rtl:ml-2 leading-none">
                                                                    <div class="relative inline-block">
                                                                        <img class="avatar avatar-xs !rounded-full"
                                                                            src="{{asset('build/assets/img/users/1.jpg')}}" alt="Image Description">
                                                                        <span
                                                                            class="absolute top-0 ltr:right-0 rtl:left-0 block h-3 w-3 rounded-full transform -translate-y-1/2 translate-x-1/2 ring-2 ring-white bg-primary text-white"><i
                                                                                class="ri-check-line"></i></span>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <p class="mb-0 font-semibold"><a
                                                                            href="javascript:void(0);">Simon Cowell</a></p>
                                                                    <p class="text-gray-500 dark:text-white/70 text-xs mb-0">@simon
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="hs-dropdown ti-dropdown ltr:ml-auto rtl:mr-auto [--placement:top-left]">
                                                                <button id="hs-dropup11" type="button" aria-label="button"
                                                                    class="hs-dropdown-toggle ti-dropdown-toggle rounded-sm p-2 bg-primary/10 !border border-primary/10 text-primary hover:text-white hover:bg-primary hover:border-primary focus:ring-primary dark:bg-primary/10 dark:hover:bg-primary dark:border-primary/10 dark:hover:border-primary dark:focus:ring-primary dark:focus:ring-offset-primary">
                                                                    <i class="text-sm leading-none ti ti-dots-vertical"></i>
                                                                </button>
                                                                <div class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                                    aria-labelledby="hs-dropup11">
                                                                    <a class="ti-dropdown-item" href="javascript:void(0)">Action</a>
                                                                    <a class="ti-dropdown-item" href="javascript:void(0)">Another
                                                                        Action</a>
                                                                    <a class="ti-dropdown-item" href="javascript:void(0)">SomBTCing
                                                                        else
                                                                        here</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="box">
                                                    <div class="box-body">
                                                        <div class="grid grid-cols-12 gap-2">
                                                            <div class="col-span-6">
                                                                <img src="{{asset('build/assets/img/nft-images/8.png')}}" alt=""
                                                                    class="nft-featuredcollect-image">
                                                            </div>
                                                            <div class="col-span-6">
                                                                <img src="{{asset('build/assets/img/nft-images/9.png')}}" alt=""
                                                                    class="nft-featuredcollect-image">
                                                            </div>
                                                            <div class="col-span-6">
                                                                <img src="{{asset('build/assets/img/nft-images/10.png')}}" alt=""
                                                                    class="nft-featuredcollect-image">
                                                            </div>
                                                            <div class="col-span-6">
                                                                <img src="{{asset('build/assets/img/nft-images/11.png')}}" alt=""
                                                                    class="nft-featuredcollect-image">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="box-footer">
                                                        <div class="flex items-center">
                                                            <div class="flex items-center flex-auto">
                                                                <div class="ltr:mr-2 rtl:ml-2 leading-none">
                                                                    <div class="relative inline-block">
                                                                        <img class="avatar avatar-xs !rounded-full"
                                                                            src="{{asset('build/assets/img/users/5.jpg')}}" alt="Image Description">
                                                                        <span
                                                                            class="absolute top-0 ltr:right-0 rtl:left-0 block h-3 w-3 rounded-full transform -translate-y-1/2 translate-x-1/2 ring-2 ring-white bg-primary text-white"><i
                                                                                class="ri-check-line"></i></span>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <p class="mb-0 font-semibold"><a
                                                                            href="javascript:void(0);">Melissa Smith</a></p>
                                                                    <p class="text-gray-500 dark:text-white/70 text-xs mb-0">
                                                                        @melissa </p>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="hs-dropdown ti-dropdown ltr:ml-auto rtl:mr-auto [--placement:top-left]">
                                                                <button id="hs-dropup12" type="button" aria-label="button"
                                                                    class="hs-dropdown-toggle ti-dropdown-toggle rounded-sm p-2 bg-primary/10 !border border-primary/10 text-primary hover:text-white hover:bg-primary hover:border-primary focus:ring-primary dark:bg-primary/10 dark:hover:bg-primary dark:border-primary/10 dark:hover:border-primary dark:focus:ring-primary dark:focus:ring-offset-primary">
                                                                    <i class="text-sm leading-none ti ti-dots-vertical"></i>
                                                                </button>
                                                                <div class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                                    aria-labelledby="hs-dropup12">
                                                                    <a class="ti-dropdown-item" href="javascript:void(0)">Action</a>
                                                                    <a class="ti-dropdown-item" href="javascript:void(0)">Another
                                                                        Action</a>
                                                                    <a class="ti-dropdown-item" href="javascript:void(0)">SomBTCing
                                                                        else
                                                                        here</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="box">
                                                    <div class="box-body">
                                                        <div class="grid grid-cols-12 gap-2">
                                                            <div class="col-span-6">
                                                                <img src="{{asset('build/assets/img/nft-images/8.png')}}" alt=""
                                                                    class="nft-featuredcollect-image">
                                                            </div>
                                                            <div class="col-span-6">
                                                                <img src="{{asset('build/assets/img/nft-images/15.png')}}" alt=""
                                                                    class="nft-featuredcollect-image">
                                                            </div>
                                                            <div class="col-span-6">
                                                                <img src="{{asset('build/assets/img/nft-images/15.png')}}" alt=""
                                                                    class="nft-featuredcollect-image">
                                                            </div>
                                                            <div class="col-span-6">
                                                                <img src="{{asset('build/assets/img/nft-images/14.png')}}" alt=""
                                                                    class="nft-featuredcollect-image">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="box-footer">
                                                        <div class="flex items-center">
                                                            <div class="flex items-center flex-auto">
                                                                <div class="ltr:mr-2 rtl:ml-2 leading-none">
                                                                    <div class="relative inline-block">
                                                                        <img class="avatar avatar-xs !rounded-full"
                                                                            src="{{asset('build/assets/img/users/10.jpg')}}"
                                                                            alt="Image Description">
                                                                        <span
                                                                            class="absolute top-0 ltr:right-0 rtl:left-0 block h-3 w-3 rounded-full transform -translate-y-1/2 translate-x-1/2 ring-2 ring-white bg-primary text-white"><i
                                                                                class="ri-check-line"></i></span>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <p class="mb-0 font-semibold"><a href="javascript:void(0);">Json
                                                                            Talor</a></p>
                                                                    <p class="text-gray-500 dark:text-white/70 text-xs mb-0">@taylor
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="hs-dropdown ti-dropdown ltr:ml-auto rtl:mr-auto [--placement:top-left]">
                                                                <button id="hs-dropup1" type="button" aria-label="button"
                                                                    class="hs-dropdown-toggle ti-dropdown-toggle rounded-sm p-2 bg-primary/10 !border border-primary/10 text-primary hover:text-white hover:bg-primary hover:border-primary focus:ring-primary dark:bg-primary/10 dark:hover:bg-primary dark:border-primary/10 dark:hover:border-primary dark:focus:ring-primary dark:focus:ring-offset-primary">
                                                                    <i class="text-sm leading-none ti ti-dots-vertical"></i>
                                                                </button>
                                                                <div class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                                    aria-labelledby="hs-dropup1">
                                                                    <a class="ti-dropdown-item" href="javascript:void(0)">Action</a>
                                                                    <a class="ti-dropdown-item" href="javascript:void(0)">Another
                                                                        Action</a>
                                                                    <a class="ti-dropdown-item" href="javascript:void(0)">SomBTCing
                                                                        else
                                                                        here</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 xxl:col-span-4">
                                        <div class="box overflow-hidden">
                                            <div class="box-body">
                                                <div class="flex items-start justify-between mb-3">
                                                    <div class="flex-grow">
                                                        <p class="text-sm mb-0 text-gray-500 dark:text-white/70">Your Balance
                                                        </p>
                                                        <h6 class="text-2xl mb-4 text-gray-800 dark:text-white font-medium">$23,773.09</h6>
                                                    </div>
                                                    <span
                                                        class="bg-primary/20 text-primary avatar rounded-sm text-3xl leading-none p-2"><i
                                                            class="ri-refund-2-line"></i></span>
                                                </div>
                                                <p class="text-gray-500 dark:text-white/70 mb-0 text-sm">Transactions</p>
                                                <div class="flex items-center justify-between mb-4">
                                                    <h6 class="text-lg mb-0 text-gray-800 dark:text-white font-medium">1,107</h6>
                                                    <span class="text-xs text-gray-500 dark:text-white/70">Last activity
                                                        07-08-22</span>
                                                </div>
                                                <div class="flex items-center space-x-2 rtl:space-x-reverse">
                                                    <a href="javascript:void(0);" class="ti-btn ti-btn-primary m-0"><i
                                                            class="ti ti-wallet text-xl leading-none"></i>Withdraw Money</a>
                                                    <a href="javascript:void(0);" class="ti-btn ti-btn-outline-primary m-0"><i
                                                            class="ti ti-circle-plus text-xl leading-none"></i>Top Up Wallet</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-1 -->

                            <!-- Start::row-2 -->
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <div class="flex justify-between">
                                                <h5 class="box-title my-auto">Trending NFTs</h5>
                                                <div class="hs-dropdown ti-dropdown block ltr:ml-auto rtl:mr-auto my-auto">
                                                    <button id="hs-dropdown-custom-icon-trigger2" type="button"
                                                        class="hs-dropdown-toggle px-2 py-1 ti-btn ti-btn-primary">Sort
                                                        By<i class="ri-arrow-down-s-line align-middle"></i></button>
                                                    <div class="hs-dropdown-menu ti-dropdown-menu"
                                                        aria-labelledby="hs-dropdown-custom-icon-trigger2">
                                                        <a class="ti-dropdown-item" href="javascript:void(0)">New</a>
                                                        <a class="ti-dropdown-item" href="javascript:void(0)">popular</a>
                                                        <a class="ti-dropdown-item" href="javascript:void(0)">Relevant</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="table-bordered rounded-sm overflow-auto crypto-table">
                                                <table class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                    <thead class="">
                                                        <tr>
                                                            <th scope="col" class="min-w-[200px]">Collection</th>
                                                            <th scope="col">Rank</th>
                                                            <th scope="col" class="min-w-[200px]">Volume</th>
                                                            <th scope="col">24h %</th>
                                                            <th scope="col">7d %</th>
                                                            <th scope="col" class="min-w-[200px]">Floor Price</th>
                                                            <th scope="col">Items</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="flex items-center">
                                                                    <div class="ltr:mr-2 rtl:ml-2 leading-none">
                                                                        <img src="{{asset('build/assets/img/nft-images/4.png')}}" alt=""
                                                                            class="avatar avatar-sm rounded-full">
                                                                    </div>
                                                                    <div>
                                                                        <p class="mb-0 font-semibold text-sm"><a
                                                                                href="javascript:void(0);" title="nft_name">Starter
                                                                                Sense NFT</a></p>
                                                                        <a href="javascript:void(0);"
                                                                            class="text-xs text-gray-500 dark:text-white/70 font-normal"
                                                                            title="creator_name">@irukasensei229</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span class="text-sm font-semibold">#1</span></td>
                                                            <td>
                                                                <div class="flex items-center">
                                                                    <div class="ltr:mr-2 rtl:ml-2 leading-none">
                                                                        <img src="{{asset('build/assets/img/crypto-currencies/regular/Bitcoin.svg')}}"
                                                                            alt="" class="avatar w-5 h-5 rounded-full">
                                                                    </div>
                                                                    <div>
                                                                        <p class="mb-0 font-semibold text-sm"><a
                                                                                href="javascript:void(0);"
                                                                                title="nft_name">2.56BTC</a></p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="text-sm text-success"><i
                                                                        class="ti ti-trending-up ltr:mr-1 rtl:ml-1 align-middle"></i>15.2%</span>
                                                            </td>
                                                            <td><span class="text-sm text-success"><i
                                                                        class="ti ti-trending-up ltr:mr-1 rtl:ml-1 align-middle"></i>3.1%</span>
                                                            </td>
                                                            <td>
                                                                <div class="flex items-center">
                                                                    <div class="ltr:mr-2 rtl:ml-2 leading-none">
                                                                        <img src="{{asset('build/assets/img/crypto-currencies/regular/Bitcoin.svg')}}"
                                                                            alt="" class="avatar w-5 h-5 rounded-full">
                                                                    </div>
                                                                    <div>
                                                                        <p class="mb-0 font-semibold text-sm"><a
                                                                                href="javascript:void(0);"
                                                                                title="nft_name">2.31BTC</a></p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>12.4K</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="flex items-center">
                                                                    <div class="ltr:mr-2 rtl:ml-2 leading-none">
                                                                        <img src="{{asset('build/assets/img/nft-images/5.png')}}" alt=""
                                                                            class="avatar avatar-sm rounded-full">
                                                                    </div>
                                                                    <div>
                                                                        <p class="mb-0 font-semibold text-sm"><a
                                                                                href="javascript:void(0);" title="nft_name">Lorem
                                                                                Kekkei</a></p>
                                                                        <a href="javascript:void(0);"
                                                                            class="text-xs text-gray-500 dark:text-white/70 font-normal"
                                                                            title="creator_name">@clansound209</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span class="text-sm font-semibold">#2</span></td>
                                                            <td>
                                                                <div class="flex items-center">
                                                                    <div class="ltr:mr-2 rtl:ml-2 leading-none">
                                                                        <img src="{{asset('build/assets/img/crypto-currencies/regular/Bitcoin.svg')}}"
                                                                            alt="" class="avatar w-5 h-5 rounded-full">
                                                                    </div>
                                                                    <div>
                                                                        <p class="mb-0 font-semibold text-sm"><a
                                                                                href="javascript:void(0);"
                                                                                title="nft_name">1.25BTC</a></p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="text-sm text-success"><i
                                                                        class="ti ti-trending-up ltr:mr-1 rtl:ml-1 align-middle"></i>3.7%</span>
                                                            </td>
                                                            <td><span class="text-sm text-danger"><i
                                                                        class="ti ti-trending-down ltr:mr-1 rtl:ml-1 align-middle"></i>0.5%</span>
                                                            </td>
                                                            <td>
                                                                <div class="flex items-center">
                                                                    <div class="ltr:mr-2 rtl:ml-2 leading-none">
                                                                        <img src="{{asset('build/assets/img/crypto-currencies/regular/Bitcoin.svg')}}"
                                                                            alt="" class="avatar w-5 h-5 rounded-full">
                                                                    </div>
                                                                    <div>
                                                                        <p class="mb-0 font-semibold text-sm"><a
                                                                                href="javascript:void(0);"
                                                                                title="nft_name">0.25BTC</a></p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>10.1K</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="flex items-center">
                                                                    <div class="ltr:mr-2 rtl:ml-2 leading-none">
                                                                        <img src="{{asset('build/assets/img/nft-images/6.png')}}" alt=""
                                                                            class="avatar avatar-sm rounded-full">
                                                                    </div>
                                                                    <div>
                                                                        <p class="mb-0 font-semibold text-sm"><a
                                                                                href="javascript:void(0);" title="nft_name"> NFT
                                                                                Uchiha</a></p>
                                                                        <a href="javascript:void(0);"
                                                                            class="text-xs text-gray-500 dark:text-white/70 font-normal"
                                                                            title="creator_name">@sasukeuhi990</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span class="text-sm font-semibold">#3</span></td>
                                                            <td>
                                                                <div class="flex items-center">
                                                                    <div class="ltr:mr-2 rtl:ml-2 leading-none">
                                                                        <img src="{{asset('build/assets/img/crypto-currencies/regular/Bitcoin.svg')}}"
                                                                            alt="" class="avatar w-5 h-5 rounded-full">
                                                                    </div>
                                                                    <div>
                                                                        <p class="mb-0 font-semibold text-sm"><a
                                                                                href="javascript:void(0);"
                                                                                title="nft_name">2,092BTC</a></p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="text-sm text-danger"><i
                                                                        class="ti ti-trending-down ltr:mr-1 rtl:ml-1 align-middle"></i>23.1%</span>
                                                            </td>
                                                            <td><span class="text-sm text-success"><i
                                                                        class="ti ti-trending-up ltr:mr-1 rtl:ml-1 align-middle"></i>9.12%</span>
                                                            </td>
                                                            <td>
                                                                <div class="flex items-center">
                                                                    <div class="ltr:mr-2 rtl:ml-2 leading-none">
                                                                        <img src="{{asset('build/assets/img/crypto-currencies/regular/Bitcoin.svg')}}"
                                                                            alt="" class="avatar w-5 h-5 rounded-full">
                                                                    </div>
                                                                    <div>
                                                                        <p class="mb-0 font-semibold text-sm"><a
                                                                                href="javascript:void(0);"
                                                                                title="nft_name">2,000BTC</a></p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>52.7K</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="flex items-center">
                                                                    <div class="ltr:mr-2 rtl:ml-2 leading-none">
                                                                        <img src="{{asset('build/assets/img/nft-images/7.png')}}" alt=""
                                                                            class="avatar avatar-sm rounded-full">
                                                                    </div>
                                                                    <div>
                                                                        <p class="mb-0 font-semibold text-sm"><a
                                                                                href="javascript:void(0);" title="nft_name"> Lorem
                                                                                Ipsum Uch</a></p>
                                                                        <a href="javascript:void(0);"
                                                                            class="text-xs text-gray-500 dark:text-white/70 font-normal"
                                                                            title="creator_name">@kakashi092</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span class="text-sm font-semibold">#4</span></td>
                                                            <td>
                                                                <div class="flex items-center">
                                                                    <div class="ltr:mr-2 rtl:ml-2 leading-none">
                                                                        <img src="{{asset('build/assets/img/crypto-currencies/regular/Bitcoin.svg')}}"
                                                                            alt="" class="avatar w-5 h-5 rounded-full">
                                                                    </div>
                                                                    <div>
                                                                        <p class="mb-0 font-semibold text-sm"><a
                                                                                href="javascript:void(0);"
                                                                                title="nft_name">36.25BTC</a></p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="text-sm text-danger"><i
                                                                        class="ti ti-trending-down ltr:mr-1 rtl:ml-1 align-middle"></i>5.2%</span>
                                                            </td>
                                                            <td><span class="text-sm text-danger"><i
                                                                        class="ti ti-trending-down ltr:mr-1 rtl:ml-1 align-middle"></i>4.1%</span>
                                                            </td>
                                                            <td>
                                                                <div class="flex items-center">
                                                                    <div class="ltr:mr-2 rtl:ml-2 leading-none">
                                                                        <img src="{{asset('build/assets/img/crypto-currencies/regular/Bitcoin.svg')}}"
                                                                            alt="" class="avatar w-5 h-5 rounded-full">
                                                                    </div>
                                                                    <div>
                                                                        <p class="mb-0 font-semibold text-sm"><a
                                                                                href="javascript:void(0);"
                                                                                title="nft_name">30.12BTC</a></p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>31.4K</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="flex items-center">
                                                                    <div class="ltr:mr-2 rtl:ml-2 leading-none">
                                                                        <img src="{{asset('build/assets/img/nft-images/8.png')}}" alt=""
                                                                            class="avatar avatar-sm rounded-full">
                                                                    </div>
                                                                    <div>
                                                                        <p class="mb-0 font-semibold text-sm"><a
                                                                                href="javascript:void(0);" title="nft_name">Ivan
                                                                                Shomer Har</a></p>
                                                                        <a href="javascript:void(0);"
                                                                            class="text-xs text-gray-500 dark:text-white/70 font-normal"
                                                                            title="creator_name">narutouze025</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span class="text-sm font-semibold">#5</span></td>
                                                            <td>
                                                                <div class="flex items-center">
                                                                    <div class="ltr:mr-2 rtl:ml-2 leading-none">
                                                                        <img src="{{asset('build/assets/img/crypto-currencies/regular/Bitcoin.svg')}}"
                                                                            alt="" class="avatar w-5 h-5 rounded-full">
                                                                    </div>
                                                                    <div>
                                                                        <p class="mb-0 font-semibold text-sm"><a
                                                                                href="javascript:void(0);" title="nft_name">
                                                                                12.52BTC</a></p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="text-sm text-success"><i
                                                                        class="ti ti-trending-up ltr:mr-1 rtl:ml-1 align-middle"></i>7.0%</span>
                                                            </td>
                                                            <td><span class="text-sm text-success"><i
                                                                        class="ti ti-trending-up ltr:mr-1 rtl:ml-1 align-middle"></i>12.5%</span>
                                                            </td>
                                                            <td>
                                                                <div class="flex items-center">
                                                                    <div class="ltr:mr-2 rtl:ml-2 leading-none">
                                                                        <img src="{{asset('build/assets/img/crypto-currencies/regular/Bitcoin.svg')}}"
                                                                            alt="" class="avatar w-5 h-5 rounded-full">
                                                                    </div>
                                                                    <div>
                                                                        <p class="mb-0 font-semibold text-sm"><a
                                                                                href="javascript:void(0);" title="nft_name">
                                                                                12.50BTC</a></p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>121.5K</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                        <div class="box-footer">
                                            <div class="flex items-center">
                                                <div class="">
                                                    showing 5 Entries <i
                                                        class="ri-arrow-right-line ltr:ml-2 rtl:mr-2 font-semibold"></i>
                                                </div>
                                                <div class="ltr:ml-auto rtl:mr-auto">
                                                    <nav class="flex justify-center items-center space-x-2 rtl:space-x-reverse">
                                                        <a class="text-gray-500 dark:text-white/70 hover:text-primary e py-1 px-2 leading-none inline-flex items-center gap-2 rounded-sm"
                                                            href="javascript:void(0);">
                                                            <span aria-hidden="true">Prev</span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="bg-primary text-white py-1 px-2 leading-none inline-flex items-center text-sm font-medium rounded-sm"
                                                            href="javascript:void(0);" aria-current="page">1</a>
                                                        <a class="text-gray-500 dark:text-white/70 hover:text-primary e py-1 px-2 leading-none inline-flex items-center text-sm font-medium rounded-sm"
                                                            href="javascript:void(0);">2</a>
                                                        <a class="text-gray-500 dark:text-white/70 hover:text-primary e py-1 px-2 leading-none inline-flex items-center text-sm font-medium rounded-sm"
                                                            href="javascript:void(0);">3</a>
                                                        <a class="text-gray-500 dark:text-white/70 hover:text-primary e py-1 px-2 leading-none inline-flex items-center gap-2 rounded-sm"
                                                            href="javascript:void(0);">
                                                            <span class="sr-only">Next</span>
                                                            <span aria-hidden="true">Next</span>
                                                        </a>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-2 -->

                        </div>
                        <!-- Start::main-content -->

                    </div>

@endsection

@section('scripts')

        <!-- APEX CHARTS JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- CHOICES JS -->
        <script src="{{asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

        <!-- SWIPER JS -->
        <script src="{{asset('build/assets/libs/swiper/swiper-bundle.min.js')}}"></script>

        <!-- INDEX JS -->
        @vite('resources/assets/js/index-5.js')


@endsection