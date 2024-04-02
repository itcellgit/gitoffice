@extends('layouts.master')

@section('styles')

        <!-- SWIPER CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/swiper/swiper-bundle.min.css')}}">

@endsection

@section('content')

                    <div class="content">

                        <!-- Start::main-content -->
                        <div class="main-content">

                            <!-- Page Header -->
                            <div class="block justify-between page-header sm:flex">
                                <div>
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Blog</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                        <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Pages
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                        </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        Blog
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-x-6">
                            <div class="col-span-12 xxl:col-span-9">
                                <div class="grid grid-cols-12 gap-x-6">
                                <div class="col-span-12 xxxl:col-span-8">
                                    <div class="box">
                                    <div class="p-6">
                                        <img class="w-full h-auto rounded-sm" src="{{asset('build/assets/img/gallery/8.jpg')}}" alt="Image Description">
                                        <div class="box-body px-0 pb-0">
                                        <a href="javascript:void(0);" class="text-sm leading-[0] text-success font-semibold">Music</a>
                                        <h5 class="font-semibold mb-0 text-lg leading-none">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit.</h5>
                                        <p class="mt-3 mb-3 text-gray-500 dark:text-white/70 text-sm">
                                            Some quick example text to build on the card title and make up the bulk of the
                                            card's content.Some quick example text to build on the card title and make up the bulk of the
                                            card's content.
                                        </p>
                                        <a class="p-0 font-semibold text-primary text-sm flex" href="{{url('blog-details')}}">
                                            Read More<i class="ri ri-arrow-right-line ltr:ml-3 rtl:mr-3 leading-none my-auto rtl:rotate-180"></i>
                                        </a>
                                        </div>
                                    </div>
                                    <div class="box-footer bg-transparent">
                                        <div class="sm:sm:flex items-center justify-between space-y-2 sm:space-y-0 ">
                                        <div class="flex items-center space-x-3 rtl:space-x-reverse">
                                            <div class="flex">
                                            <img class="avatar avatar-sm ring-0 rounded-full" src="{{asset('build/assets/img/users/1.jpg')}}"
                                                alt="avatar">
                                            </div>
                                            <div>
                                            <p class="text-slate-700 font-semibold text-sm dark:text-white">
                                                Json Taylor
                                            </p>
                                            <p class="text-xs text-gray-500 dark:text-white/70">
                                                20 min ago
                                            </p>
                                            </div>
                                        </div>
                                        <div class="">
                                            <a href="javascript:void(0);"
                                            class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-2 rtl:space-x-reverse rounded-full bg-gray-100 px-3 py-1 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex"><i
                                                class="text-xs ri ri-heart-line"></i><span class="my-2">30</span></a>
                                            <a href="javascript:void(0);"
                                            class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-2 rtl:space-x-reverse rounded-full bg-gray-100 px-3 py-1 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex"><i
                                                class="text-xs ri ri-thumb-up-line"></i><span class="my-2">25k</span></a>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-span-12 xxxl:col-span-4">
                                    <div class="box">
                                    <div class="p-6">
                                        <img class="w-full rounded-sm" src="{{asset('build/assets/img/gallery/3.jpg')}}" alt="Image Description">
                                        <div class="box-body px-0 pb-0">
                                        <a href="javascript:void(0);" class="text-sm leading-[0] text-danger font-semibold">Marketing</a>
                                        <h5 class="font-semibold mb-0 text-lg leading-none">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit.</h5>
                                        <p class="mt-3 mb-3 text-gray-500 dark:text-white/70 text-sm">
                                            Some quick example text to build on the card title and make up the bulk of the
                                            card's content.
                                        </p>
                                        <a class="p-0 font-semibold text-primary text-sm flex" href="{{url('blog-details')}}">
                                            Read More<i class="ri ri-arrow-right-line ltr:ml-3 rtl:mr-3 leading-none my-auto rtl:rotate-180"></i>
                                        </a>
                                        </div>
                                    </div>
                                    <div class="box-footer bg-transparent">
                                        <div class="sm:flex items-center justify-between space-y-2 sm:space-y-0 xxxl:flex xxxl:space-y-0">
                                        <div class="flex items-center space-x-3 rtl:space-x-reverse">
                                            <div class="flex">
                                            <img class="avatar avatar-sm ring-0 rounded-full" src="{{asset('build/assets/img/users/1.jpg')}}"
                                                alt="avatar">
                                            </div>
                                            <div>
                                            <p class="text-slate-700 font-semibold text-sm dark:text-white">
                                                Json Taylor
                                            </p>
                                            <p class="text-xs text-gray-500 dark:text-white/70">
                                                20 min ago
                                            </p>
                                            </div>
                                        </div>
                                        <div class="">
                                            <a href="javascript:void(0);"
                                            class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-2 rtl:space-x-reverse rounded-full bg-gray-100 px-3 py-1 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex"><i
                                                class="text-xs ri ri-heart-line"></i><span class="my-2">30</span></a>
                                            <a href="javascript:void(0);"
                                            class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-2 rtl:space-x-reverse rounded-full bg-gray-100 px-3 py-1 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex"><i
                                                class="text-xs ri ri-thumb-up-line"></i><span class="my-2">25k</span></a>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="box">
                                    <div class="p-6">
                                        <div class="box-body p-0">
                                        <a href="javascript:void(0);" class="text-sm leading-[0] text-info font-semibold">Bussiness</a>
                                        <h5 class="font-semibold mb-0 text-lg leading-none">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit.</h5>
                                        <p class="mt-3 mb-3 text-gray-500 dark:text-white/70 text-sm">
                                            Some quick example text to build on the card title and make up the bulk of the
                                            card's content.Some quick title and make up the bulk of the
                                            card's content.
                                        </p>
                                        <a class="p-0 font-semibold text-primary text-sm flex" href="{{url('blog-details')}}">
                                            Read More<i class="ri ri-arrow-right-line ltr:ml-3 rtl:mr-3 leading-none my-auto rtl:rotate-180"></i>
                                        </a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-span-12 xxxl:col-span-6">
                                    <div class="box p-5">
                                    <div class="sm:flex sm:flex-row">
                                        <img class="sm:w-1/4 rounded-sm" src="{{asset('build/assets/img/gallery/9.jpg')}}" alt="Image Description">
                                        <div class="box-body ltr:sm:pl-5 rtl:sm:pr-5 px-0 sm:pt-0 pb-0 my-auto">
                                        <a href="javascript:void(0);" class="text-sm leading-[0] text-warning font-semibold">Tourism</a>
                                        <h5 class="font-semibold mb-0 text-lg leading-none">Lorem ipsum dolor sit amet consectetur
                                            adipisicing.</h5>
                                        <p class="mt-3 mb-3 text-gray-500 dark:text-white/70 text-sm">
                                            Some quick example text to build on the card title and make up the bulk of the
                                            card's content.
                                        </p>
                                        <a class="p-0 font-semibold text-primary text-sm flex" href="{{url('blog-details')}}">
                                            Read More<i class="ri ri-arrow-right-line ltr:ml-3 rtl:mr-3 leading-none my-auto rtl:rotate-180"></i>
                                        </a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-span-12 xxxl:col-span-6">
                                    <div class="box p-5">
                                    <div class="sm:flex flex-row">
                                        <div class="box-body px-0 ltr:sm:pr-5 rtl:sm:pl-5 sm:pb-0 pt-0 my-auto">
                                        <a href="javascript:void(0);" class="text-sm leading-[0] text-secondary font-semibold">Trucking</a>
                                        <h5 class="font-semibold mb-0 text-lg leading-none">Lorem ipsum dolor sit amet consectetur
                                            adipisicing.</h5>
                                        <p class="mt-3 mb-3 text-gray-500 dark:text-white/70 text-sm">
                                            Some quick example text to build on the card title and make up the bulk of the
                                            card's content.
                                        </p>
                                        <a class="p-0 font-semibold text-primary text-sm flex" href="{{url('blog-details')}}">
                                            Read More<i class="ri ri-arrow-right-line ltr:ml-3 rtl:mr-3 leading-none my-auto rtl:rotate-180"></i>
                                        </a>
                                        </div>
                                        <img class="sm:w-1/4 rounded-sm" src="{{asset('build/assets/img/gallery/7.jpg')}}" alt="Image Description">
                                    </div>
                                    </div>
                                </div>
                                <div class="col-span-12 xxxl:col-span-4">
                                    <div class="box">
                                    <div class="p-6">
                                        <img class="w-full rounded-sm" src="{{asset('build/assets/img/gallery/3.jpg')}}" alt="Image Description">
                                        <div class="box-body px-0 pb-0">
                                        <a href="javascript:void(0);" class="text-sm leading-[0] text-danger font-semibold">Technology</a>
                                        <h5 class="font-semibold mb-0 text-lg leading-none">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit.</h5>
                                        <p class="mt-3 mb-3 text-gray-500 dark:text-white/70 text-sm">
                                            Some quick example text to build on the card title and make up the bulk of the
                                            card's content.
                                        </p>
                                        <a class="p-0 font-semibold text-primary text-sm flex" href="{{url('blog-details')}}">
                                            Read More<i class="ri ri-arrow-right-line ltr:ml-3 rtl:mr-3 leading-none my-auto rtl:rotate-180"></i>
                                        </a>
                                        </div>
                                    </div>
                                    <div class="box-footer bg-transparent">
                                        <div class="sm:flex items-center justify-between space-y-2 sm:space-y-0 xxxl:flex xxxl:space-y-0">
                                        <div class="flex items-center space-x-3 rtl:space-x-reverse">
                                            <div class="flex">
                                            <img class="avatar avatar-sm ring-0 rounded-full" src="{{asset('build/assets/img/users/1.jpg')}}"
                                                alt="avatar">
                                            </div>
                                            <div>
                                            <p class="text-slate-700 font-semibold text-sm dark:text-white">
                                                Json Taylor
                                            </p>
                                            <p class="text-xs text-gray-500 dark:text-white/70">
                                                20 min ago
                                            </p>
                                            </div>
                                        </div>
                                        <div class="">
                                            <a href="javascript:void(0);"
                                            class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-2 rtl:space-x-reverse rounded-full bg-gray-100 px-3 py-1 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex"><i
                                                class="text-xs ri ri-heart-line"></i><span class="my-2">30</span></a>
                                            <a href="javascript:void(0);"
                                            class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-2 rtl:space-x-reverse rounded-full bg-gray-100 px-3 py-1 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex"><i
                                                class="text-xs ri ri-thumb-up-line"></i><span class="my-2">25k</span></a>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-span-12 xxxl:col-span-4">
                                    <div class="box">
                                    <div class="p-6">
                                        <img class="w-full rounded-sm" src="{{asset('build/assets/img/gallery/2.jpg')}}" alt="Image Description">
                                        <div class="box-body px-0 pb-0">
                                        <a href="javascript:void(0);" class="text-sm leading-[0] text-secondary font-semibold">Nature</a>
                                        <h5 class="font-semibold mb-0 text-lg leading-none">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit.</h5>
                                        <p class="mt-3 mb-3 text-gray-500 dark:text-white/70 text-sm">
                                            Some quick example text to build on the card title and make up the bulk of the
                                            card's content.
                                        </p>
                                        <a class="p-0 font-semibold text-primary text-sm flex" href="{{url('blog-details')}}">
                                            Read More<i class="ri ri-arrow-right-line ltr:ml-3 rtl:mr-3 leading-none my-auto rtl:rotate-180"></i>
                                        </a>
                                        </div>
                                    </div>
                                    <div class="box-footer bg-transparent">
                                        <div class="sm:flex items-center justify-between space-y-2 sm:space-y-0 xxxl:flex xxxl:space-y-0">
                                        <div class="flex items-center space-x-3 rtl:space-x-reverse">
                                            <div class="flex">
                                            <img class="avatar avatar-sm ring-0 rounded-full" src="{{asset('build/assets/img/users/1.jpg')}}"
                                                alt="avatar">
                                            </div>
                                            <div>
                                            <p class="text-slate-700 font-semibold text-sm dark:text-white">
                                                Json Taylor
                                            </p>
                                            <p class="text-xs text-gray-500 dark:text-white/70">
                                                20 min ago
                                            </p>
                                            </div>
                                        </div>
                                        <div class="">
                                            <a href="javascript:void(0);"
                                            class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-2 rtl:space-x-reverse rounded-full bg-gray-100 px-3 py-1 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex"><i
                                                class="text-xs ri ri-heart-line"></i><span class="my-2">30</span></a>
                                            <a href="javascript:void(0);"
                                            class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-2 rtl:space-x-reverse rounded-full bg-gray-100 px-3 py-1 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex"><i
                                                class="text-xs ri ri-thumb-up-line"></i><span class="my-2">25k</span></a>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-span-12 xxxl:col-span-4">
                                    <div class="box">
                                    <div class="p-6">
                                        <img class="w-full rounded-sm" src="{{asset('build/assets/img/gallery/1.jpg')}}" alt="Image Description">
                                        <div class="box-body px-0 pb-0">
                                        <a href="javascript:void(0);" class="text-xs leading-[0] text-warning font-semibold">Travel</a>
                                        <h5 class="font-semibold mb-0 text-lg leading-none">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit.</h5>
                                        <p class="mt-3 mb-3 text-gray-500 dark:text-white/70 text-sm">
                                            Some quick example text to build on the card title and make up the bulk of the
                                            card's content.
                                        </p>
                                        <a class="p-0 font-semibold text-primary text-sm flex" href="{{url('blog-details')}}">
                                            Read More<i class="ri ri-arrow-right-line ltr:ml-3 rtl:mr-3 leading-none my-auto rtl:rotate-180"></i>
                                        </a>
                                        </div>
                                    </div>
                                    <div class="box-footer bg-transparent">
                                        <div class="sm:flex items-center justify-between space-y-2 sm:space-y-0 xxxl:flex xxxl:space-y-0">
                                        <div class="flex items-center space-x-3 rtl:space-x-reverse">
                                            <div class="flex">
                                            <img class="avatar avatar-sm ring-0 rounded-full" src="{{asset('build/assets/img/users/1.jpg')}}"
                                                alt="avatar">
                                            </div>
                                            <div>
                                            <p class="text-slate-700 font-semibold text-sm dark:text-white">
                                                Json Taylor
                                            </p>
                                            <p class="text-xs text-gray-500 dark:text-white/70">
                                                20 min ago
                                            </p>
                                            </div>
                                        </div>
                                        <div class="">
                                            <a href="javascript:void(0);"
                                            class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-2 rtl:space-x-reverse rounded-full bg-gray-100 px-3 py-1 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex"><i
                                                class="text-xs ri ri-heart-line"></i><span class="my-2">30</span></a>
                                            <a href="javascript:void(0);"
                                            class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-2 rtl:space-x-reverse rounded-full bg-gray-100 px-3 py-1 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex"><i
                                                class="text-xs ri ri-thumb-up-line"></i><span class="my-2">25k</span></a>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 xxl:col-span-3">
                                <div class="box">
                                <div class="box-body p-0">
                                    <div class="swiper mySwiper8">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                        <div class="rtl:dir-rtl">
                                            <img src="{{asset('build/assets/img/gallery/4.jpg')}}" alt="image">
                                            <div class="blog-caption text-start">
                                            <p class="mb-2 text-xs">The agency has a diverse workforce of just under 18,000 civil servants, and
                                                works with many more U.S.</p>
                                            <h6 class="text-base font-semibold mb-2">N.A.S.A</h6>
                                            <div class="flex items-center">
                                                <img src="{{asset('build/assets/img/users/15.jpg')}}" alt="" class="shadow-none ring-transparent avatar avatar-sm !rounded-full ltr:mr-2 rtl:ml-2">
                                                <div class="font-semibold">Json Taylor - <span class="text-xs opacity-70 font-normal">12,Dec 2022 -
                                                    04:34PM</span></div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="swiper-slide">
                                        <div class="rtl:dir-rtl">
                                            <img src="{{asset('build/assets/img/gallery/5.jpg')}}" alt="image">
                                            <div class="blog-caption text-start">
                                            <p class="mb-2 text-xs">The agency has a diverse workforce of just under 18,000 civil servants, and
                                                works with many more U.S.</p>
                                            <h6 class="text-base font-semibold mb-2">N.A.S.A</h6>
                                            <div class="flex items-center">
                                                <img src="{{asset('build/assets/img/users/15.jpg')}}" alt="" class="shadow-none ring-transparent avatar avatar-sm !rounded-full ltr:mr-2 rtl:ml-2">
                                                <div class="font-semibold">Json Taylor - <span class="text-xs opacity-70 font-normal">12,Dec 2022 -
                                                    04:34PM</span></div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="swiper-slide">
                                        <div class="rtl:dir-rtl">
                                            <img src="{{asset('build/assets/img/gallery/6.jpg')}}" alt="image">
                                            <div class="blog-caption text-start">
                                            <p class="mb-2 text-xs">The agency has a diverse workforce of just under 18,000 civil servants, and
                                                works with many more U.S.</p>
                                            <h6 class="text-base font-semibold mb-2">N.A.S.A</h6>
                                            <div class="flex items-center">
                                                <img src="{{asset('build/assets/img/users/15.jpg')}}" alt="" class="shadow-none ring-transparent avatar avatar-sm !rounded-full ltr:mr-2 rtl:ml-2">
                                                <div class="font-semibold">Json Taylor - <span class="text-xs opacity-70 font-normal">12,Dec 2022 -
                                                    04:34PM</span></div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>

                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Recent Blogs</h5>
                                </div>
                                <div class="box-body">
                                    <ul class="flex flex-col">
                                    <li class="ti-list-group pt-0 px-0 border-0 text-gray-800 dark:text-white">
                                        <a href="javascript:void(0);" class="space-x-3 flex rtl:space-x-reverse">
                                        <img src="{{asset('build/assets/img/gallery/7.jpg')}}" class="avatar avatar-lg rounded-sm ring-0" alt="Image Description">
                                        <div class="space-y-1 my-auto">
                                            <h3 class="font-semibold text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                                            <p class="flex space-x-2 rtl:space-x-reverse text-gray-500 dark:text-white/70 text-xs"><i
                                                class="ri ri-calendar-line text-xs"></i><span>Sept 29 , 2022</span></p>
                                        </div>
                                        </a>
                                    </li>
                                    <li class="ti-list-group px-0 border-0 text-gray-800 dark:text-white">
                                        <a href="javascript:void(0);" class="space-x-3 flex rtl:space-x-reverse">
                                        <img src="{{asset('build/assets/img/gallery/9.jpg')}}" class="avatar avatar-lg rounded-sm ring-0" alt="Image Description">
                                        <div class="space-y-1 my-auto">
                                            <h3 class="font-semibold text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                                            <p class="flex space-x-2 rtl:space-x-reverse text-gray-500 dark:text-white/70 text-xs"><i
                                                class="ri ri-time-line text-xs"></i><span>3 hours ago</span></p>
                                        </div>
                                        </a>
                                    </li>
                                    <li class="ti-list-group px-0 border-0 text-gray-800 dark:text-white">
                                        <a href="javascript:void(0);" class="space-x-3 flex rtl:space-x-reverse">
                                        <img src="{{asset('build/assets/img/gallery/8.jpg')}}" class="avatar avatar-lg rounded-sm ring-0" alt="Image Description">
                                        <div class="space-y-1 my-auto">
                                            <h3 class="font-semibold text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                                            <p class="flex space-x-2 rtl:space-x-reverse text-gray-500 dark:text-white/70 text-xs"><i
                                                class="ri ri-time-line text-xs"></i><span>30 mins ago</span></p>
                                        </div>
                                        </a>
                                    </li>
                                    <li class="ti-list-group px-0 border-0 text-gray-800 dark:text-white">
                                        <a href="javascript:void(0);" class="space-x-3 flex rtl:space-x-reverse">
                                        <img src="{{asset('build/assets/img/gallery/3.jpg')}}" class="avatar avatar-lg rounded-sm ring-0" alt="Image Description">
                                        <div class="space-y-1 my-auto">
                                            <h3 class="font-semibold text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                                            <p class="flex space-x-2 rtl:space-x-reverse text-gray-500 dark:text-white/70 text-xs"><i
                                                class="ri ri-calendar-line text-xs"></i><span>l day ago</span></p>
                                        </div>
                                        </a>
                                    </li>
                                    <li class="ti-list-group px-0 border-0 text-gray-800 dark:text-white">
                                        <a href="javascript:void(0);" class="space-x-3 flex rtl:space-x-reverse">
                                        <img src="{{asset('build/assets/img/gallery/2.jpg')}}" class="avatar avatar-lg rounded-sm ring-0" alt="Image Description">
                                        <div class="space-y-1 my-auto">
                                            <h3 class="font-semibold text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                                            <p class="flex space-x-2 rtl:space-x-reverse text-gray-500 dark:text-white/70 text-xs"><i
                                                class="ri ri-calendar-line text-xs"></i><span>l day ago</span></p>
                                        </div>
                                        </a>
                                    </li>
                                    <li class="ti-list-group px-0 pb-0 border-0 text-gray-800 dark:text-white">
                                        <a href="javascript:void(0);" class="space-x-3 flex rtl:space-x-reverse">
                                        <img src="{{asset('build/assets/img/gallery/8.jpg')}}" class="avatar avatar-lg rounded-sm ring-0" alt="Image Description">
                                        <div class="space-y-1 my-auto">
                                            <h3 class="font-semibold text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                                            <p class="flex space-x-2 rtl:space-x-reverse text-gray-500 dark:text-white/70 text-xs"><i
                                                class="ri ri-time-line text-xs"></i><span>30 mins ago</span></p>
                                        </div>
                                        </a>
                                    </li>
                                    </ul>
                                </div>
                                </div>

                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Categories</h5>
                                </div>
                                <div class="box-body">
                                    <span class="badge bg-gray-100 text-gray-800 dark:bg-black/20 dark:text-gray-200">
                                    #Lifestyle
                                    </span>
                                    <span class="badge bg-gray-100 text-gray-800 dark:bg-black/20 dark:text-gray-200">
                                    #Health
                                    </span>
                                    <span class="badge bg-gray-100 text-gray-800 dark:bg-black/20 dark:text-gray-200">
                                    #Tour
                                    </span>
                                    <span class="badge bg-gray-100 text-gray-800 dark:bg-black/20 dark:text-gray-200">
                                    #Music
                                    </span>
                                    <span class="badge bg-gray-100 text-gray-800 dark:bg-black/20 dark:text-gray-200">
                                    #Travel
                                    </span>
                                    <span class="badge bg-gray-100 text-gray-800 dark:bg-black/20 dark:text-gray-200">
                                    #Nature
                                    </span>
                                    <span class="badge bg-gray-100 text-gray-800 dark:bg-black/20 dark:text-gray-200">
                                    #Tourism
                                    </span>
                                    <span class="badge bg-gray-100 text-gray-800 dark:bg-black/20 dark:text-gray-200">
                                    #Hotels
                                    </span>
                                    <span class="badge bg-gray-100 text-gray-800 dark:bg-black/20 dark:text-gray-200">
                                    #Marketing
                                    </span>
                                    <span class="badge bg-gray-100 text-gray-800 dark:bg-black/20 dark:text-gray-200">
                                    #Development
                                    </span>
                                    <span class="badge bg-gray-100 text-gray-800 dark:bg-black/20 dark:text-gray-200">
                                    #Shopping
                                    </span>
                                    <span class="badge bg-gray-100 text-gray-800 dark:bg-black/20 dark:text-gray-200">
                                    #Realestate
                                    </span>
                                    <span class="badge bg-gray-100 text-gray-800 dark:bg-black/20 dark:text-gray-200">
                                    #Business
                                    </span>
                                </div>
                                </div>

                                <div class="box">
                                <div class="box-body">
                                    <h3 class="font-semibold text-base mb-5 text-primary">Subscribe For More Blog's</h3>
                                    <input type="email" id="input-label" class="ti-form-input" placeholder="you@site.com">
                                    <button type="button" class="py-2 px-3 w-full ti-btn ti-btn-primary mt-2">
                                    subscribe
                                    </button>
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

        <!-- SWIPER JS -->
        <script src="{{asset('build/assets/libs/swiper/swiper-bundle.min.js')}}"></script>
        @vite('resources/assets/js/blog.js')


@endsection