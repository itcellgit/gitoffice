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
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Cards</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                    <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Components
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                    </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        Cards
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-x-6">
                            <div class="xxl:col-span-3 md:col-span-6 col-span-12">
                                <div class="box">
                                <img src="{{asset('build/assets/img/media/1.jpg')}}" class="box-img-top rounded-t-sm" alt="...">
                                <div class="box-body">
                                    <h6 class="text-base box-title font-semibold mb-2">box title</h6>
                                    <p class="text-[0.813rem] text-gray-500 dark:text-white/70 mb-4">when an unknown printer took a galley
                                    of type and scrambled it to make a type specimen book. It has survived not only five centuries, but
                                    also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    <a href="javascript:void(0);" class="ti-btn ti-btn-primary">Read More</a>
                                </div>
                                <div class="box-footer">
                                    <span class="text-sm">Last updated 3 mins ago</span>
                                </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-3 md:col-span-6 col-span-12">
                                <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Featured</div>
                                </div>
                                <div class="box-body">
                                    <h6 class="text-base box-title font-semibold mb-2">Special title treatment</h6>
                                    <p class="text-[0.813rem] mb-4">Richard McClintock, a Latin professor at Hampden-Sydney College in
                                    Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage</p>
                                    <a href="javascript:void(0);" class="ti-btn ti-btn-primary">Read More</a>
                                </div>
                                </div>
                                <div class="box">
                                <div class="box-body">
                                    <h6 class="text-base box-title font-semibold mb-2">box title</h6>
                                    <p class="box-subtitle text-sm mb-4 text-gray-500 dark:text-white/70">box subtitle</p>
                                    <p class="text-[0.813rem]">There are many variations of passages of Lorem Ipsum available, but the
                                    majority have suffered alteration many variations of passages of Lorem Ipsum available there are so
                                    many ways to solve but the majority have suffered.</p>
                                </div>
                                <div class="box-footer space-x-4 rtl:space-x-reverse inline-flex">
                                    <a href="javascript:void(0);" class="text-sm text-danger">Buy Now</a>
                                    <a href="javascript:void(0);" class="text-sm text-success"><u>Review</u></a>
                                </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-3 md:col-span-6 col-span-12">
                                <div class="box">
                                <img src="{{asset('build/assets/img/media/2.jpg')}}" class="box-img-top rounded-t-sm" alt="...">
                                <div class="box-body">
                                    <p class="text-[0.813rem]">Some quick example text to build on the box title and
                                    make up the bulk of the box's content.</p>
                                </div>
                                </div>
                                <h6 class="text-base mb-4 font-semibold text-gray-800 dark:text-white">Only box Body:</h6>
                                <div class="box">
                                <div class="box-body">
                                    <div class="text-[0.813rem]">
                                    <p class="mb-0 text-[0.813rem]">It is a long established fact that a reader will be distracted by the
                                        readable content.</p>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-3 md:col-span-6 col-span-12">
                                <div class="box">
                                <img src="{{asset('build/assets/img/media/3.jpg')}}" class="box-img-top rounded-t-sm" alt="...">
                                <div class="box-body pb-0">
                                    <h6 class="text-base box-title font-semibold mb-2">box title</h6>
                                    <p class="mb-4 text-[0.813rem]">Some quick example text to build on the box title and
                                    make up the bulk of the box's content.</p>
                                </div>
                                <ul class="flex flex-col divide-y divide-gray-200 dark:divide-white/10">
                                    <li class="ti-list-group border-0 text-gray-800 dark:text-white">An item</li>
                                    <li class="ti-list-group border-0 text-gray-800 dark:text-white">A second item</li>
                                </ul>
                                <div class="box-body space-x-4 rtl:space-x-reverse inline-flex">
                                    <a href="javascript:void(0);" class="text-sm text-primary">Box link</a>
                                    <a href="javascript:void(0);" class="text-sm text-secondary">Another link</a>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-1 -->

                            <!-- Start::row-2 -->
                            <div class="grid grid-cols-12 gap-x-6">
                            <div class="xxl:col-span-6 col-span-12">
                                <div class="grid grid-cols-12 gap-x-6">
                                <h6 class="text-base mb-4">Quote:</h6>
                                <div class="col-span-12">
                                    <div class="box">
                                    <div class="box-body">
                                        <blockquote class="blockquote mb-0 text-center">
                                        <h6 class="text-base mb-2">The greatest glory in living lies not in never falling, but in rising
                                            every time we fall.</h6>
                                        <footer
                                            class="blockquote-footer before:content-['_'] text-gray-500 dark:text-white/70 mt-2 text-sm">
                                            Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                        </blockquote>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-span-12">
                                    <h6 class="text-base mb-4">List Group:</h6>
                                    <div class="grid grid-cols-12 gap-x-6">
                                    <div class="xxl:col-span-4 col-span-12">
                                        <div class="box">
                                        <ul class="flex flex-col divide-y divide-gray-200 dark:divide-white/10">
                                            <li class="ti-list-group border-0 text-gray-800 dark:text-white">An item</li>
                                            <li class="ti-list-group border-0 text-gray-800 dark:text-white">A second item</li>
                                            <li class="ti-list-group border-0 text-gray-800 dark:text-white">A third item</li>
                                            <li class="ti-list-group border-0 text-gray-800 dark:text-white">A fourth item</li>
                                        </ul>
                                        </div>
                                    </div>
                                    <div class="xxl:col-span-4 col-span-12">
                                        <div class="box">
                                        <div class="box-header">
                                            Featured
                                        </div>
                                        <ul class="flex flex-col divide-y divide-gray-200 dark:divide-white/10">
                                            <li class="ti-list-group border-0 text-gray-800 dark:text-white">An item</li>
                                            <li class="ti-list-group border-0 text-gray-800 dark:text-white">A second item</li>
                                            <li class="ti-list-group border-0 text-gray-800 dark:text-white">A third item</li>
                                        </ul>
                                        </div>
                                    </div>
                                    <div class="xxl:col-span-4 col-span-12">
                                        <div class="box">
                                        <ul class="flex flex-col divide-y divide-gray-200 dark:divide-white/10">
                                            <li class="ti-list-group border-0 text-gray-800 dark:text-white">An item</li>
                                            <li class="ti-list-group border-0 text-gray-800 dark:text-white">A second item</li>
                                            <li class="ti-list-group border-0 text-gray-800 dark:text-white">A third item</li>
                                        </ul>
                                        <div class="box-footer">
                                            Box footer
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-6 col-span-12">
                                <h6 class="text-base mb-4">Using Grid Markups:</h6>
                                <div class="grid sm:grid-cols-3 gap-x-6">
                                <div class="box">
                                    <div class="box-body">
                                    <img src="{{asset('build/assets/img/media/4.jpg')}}" class="rounded-sm mb-4" alt="...">
                                    <h6 class="text-base box-title font-semibold mb-2">Product A</h6>
                                    <p class="text-[0.813rem] mb-4">With supporting text below as a natural
                                        lead-in to additional content.</p>
                                    <a href="javascript:void(0);" class="ti-btn ti-btn-primary">Purchase</a>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="box-body">
                                    <img src="{{asset('build/assets/img/media/5.jpg')}}" class="rounded-sm mb-4" alt="...">
                                    <h6 class="text-base box-title font-semibold mb-2">Product B</h6>
                                    <p class="text-[0.813rem] mb-4">With supporting text below as a natural
                                        lead-in to additional content.</p>
                                    <a href="javascript:void(0);" class="ti-btn ti-btn-secondary">Purchase</a>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="box-body">
                                    <img src="{{asset('build/assets/img/media/6.jpg')}}" class="rounded-sm mb-4" alt="...">
                                    <h6 class="text-base box-title font-semibold mb-2">Product-C</h6>
                                    <p class="text-[0.813rem] mb-4">With supporting text below as a natural
                                        lead-in to additional content.</p>
                                    <a href="javascript:void(0);" class="ti-btn ti-btn-light">Purchase</a>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-2 -->

                            <!-- Start::row-3-->
                            <div class="grid grid-cols-12 gap-x-6">
                            <div class="xxl:col-span-9 col-span-12">
                                <h6 class="text-base mb-4">Text Alignment:</h6>
                                <div class="grid grid-cols-12 gap-x-6">
                                <div class="xxl:col-span-4 col-span-12">
                                    <div class="box">
                                    <div class="box-body">
                                        <div class="mb-2">
                                        <img src="{{asset('build/assets/img/users/15.jpg')}}" class="avatar avatar-sm rounded-sm" alt="Image Description">
                                        </div>
                                        <h6 class="text-base box-title font-semibold mb-2">Where it come from</h6>
                                        <p class="text-[0.813rem] mb-4">Contrary to popular belief, Lorem Ipsum is not simply random text.
                                        It has
                                        roots in a piece of classical Latin literature.</p>
                                        <a href="javascript:void(0);" class="ti-btn ti-btn-primary">Go somewhere</a>
                                    </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-4 col-span-12">
                                    <div class="box text-center">
                                    <div class="box-body">
                                        <div class="mb-2">
                                        <img src="{{asset('build/assets/img/users/3.jpg')}}" class="avatar avatar-sm rounded-sm" alt="Image Description">
                                        </div>
                                        <h6 class="text-base box-title font-semibold mb-2">Why do we use it?</h6>
                                        <p class="text-[0.813rem] mb-4">Many desktop publishing packages and web page editors now use Lorem
                                        Ipsum as
                                        their default model text.</p>
                                        <a href="javascript:void(0);" class="ti-btn ti-btn-primary">Go somewhere</a>
                                    </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-4 col-span-12">
                                    <div class="box text-end">
                                    <div class="box-body">
                                        <div class="mb-2">
                                        <img src="{{asset('build/assets/img/users/11.jpg')}}" class="avatar avatar-sm rounded-sm" alt="Image Description">
                                        </div>
                                        <h6 class="text-base box-title font-semibold mb-2">What is special?</h6>
                                        <p class="text-[0.813rem] mb-4">There are many variations of passages of Lorem Ipsum available, but
                                        the
                                        majority have suffered alteration in some form.</p>
                                        <a href="javascript:void(0);" class="ti-btn ti-btn-primary">Go somewhere</a>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-3 col-span-12">
                                <div class="grid grid-cols-12 gap-x-6">
                                <h6 class="text-base mb-4 whitespace-nowrap">Mixins utilities:</h6>
                                <div class="col-span-12">
                                    <div class="box">
                                    <div class="box-header px-4 py-3">Header</div>
                                    <div class="box-body text-success">
                                        <h6 class="text-base box-title font-semibold mb-2">Looking For Success?</h6>
                                        <p class="text-[0.813rem]">If you are going to use a passage of Lorem Ipsum, you need to be sure
                                        there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum
                                        generators on the Internet tend to repeat predefined chunks as necessary.</p>
                                    </div>
                                    <div class="box-footer px-4 py-3">Footer</div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-3-->

                            <!-- Start::row-4 -->
                            <h6 class="text-base mb-4">Box Header &amp; Footer:</h6>
                            <div class="grid grid-cols-12 gap-x-6">
                            <div class="xxl:col-span-3 col-span-12">
                                <div class="box">
                                <div class="box-header">
                                    <div class="flex items-center w-full">
                                    <div class="ltr:mr-2 rtl:ml-2">
                                        <img src="{{asset('build/assets/img/users/11.jpg')}}" class="avatar rounded-full" alt="Image Description">
                                    </div>
                                    <div class="">
                                        <div class="text-base font-semibold">Adam Smith</div>
                                        <p class="mb-0 text-gray-500 dark:text-white/70 text-[0.813rem]">28 Years, Male</p>
                                    </div>
                                    <div class="ltr:ml-auto rtl:mr-auto">
                                        <div class="hs-dropdown ti-dropdown">
                                        <button aria-label="button" id="hs-dropdown-custom-icon-trigger1" type="button"
                                            class="hs-dropdown-toggle p-0 !bg-transparent border-0 shadow-none focus:ring-0 focus:ring-offset-0  ti-dropdown-toggle">
                                            <svg class="ti-dropdown-icon" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                </path>
                                            </svg>
                                        </button>
                                        <div class="hs-dropdown-menu ti-dropdown-menu" aria-labelledby="hs-dropdown-custom-icon-trigger1">
                                            <a class="ti-dropdown-item" href="javascript:void(0);">Edit</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">Download</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">Delete</a>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="box-body">
                                    If you are going to use, you need to be sure there isn't anything embarrassing hidden in the middle of
                                    text. All the Lorem Ipsum generators.
                                </div>
                                <div class="box-footer">
                                    <div class="flex justify-between">
                                    <div class="font-semibold text-sm">28,Nov 2022</div>
                                    <div class="font-semibold text-sm text-success">Assistant Professor</div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-3 col-span-12">
                                <div class="box">
                                <div class="box-header border-b-0 pb-0">
                                    <div>
                                    <span class="text-warning text-base leading-none ltr:mr-1 rtl:ml-1"><i class="ri-star-s-fill"></i></span>
                                    <span class="text-warning text-base leading-none ltr:mr-1 rtl:ml-1"><i class="ri-star-s-fill"></i></span>
                                    <span class="text-warning text-base leading-none ltr:mr-1 rtl:ml-1"><i class="ri-star-s-fill"></i></span>
                                    <span class="text-warning text-base leading-none ltr:mr-1 rtl:ml-1"><i class="ri-star-s-fill"></i></span>
                                    <span class="text-gray-200 dark:text-gray-200 text-base leading-none"><i
                                        class="ri-star-s-fill"></i></span>
                                    <p class="block text-gray-500 dark:text-white/70 mb-0 text-[0.813rem] font-semibold">1 year ago</p>
                                    </div>
                                </div>
                                <div class="box-body py-3">
                                    <div class="font-semibold text-base mb-2">Very Great!</div>
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                                    alteration in some form, by injected humour
                                </div>
                                <div class="box-footer">
                                    <div class="flex items-center">
                                    <img src="{{asset('build/assets/img/users/12.jpg')}}" class="avatar w-6 h-6 rounded-full ltr:mr-2 rtl:ml-2" alt="Image Description">
                                    <div class="font-semibold text-sm">Corey Anderson</div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-3 col-span-12">
                                <div class="box text-center">
                                <div class="box-header border-b-0 pb-0">
                                    <span class="ltr:float-right rtl:float-left text-lg"><i class="ri-heart-fill text-danger"></i></span>
                                </div>
                                <div class="box-body pt-1">
                                    <img src="{{asset('build/assets/img/users/5.jpg')}}" class="avatar avatar-lg rounded-full ltr:mr-2 rtl:ml-2 mb-2" alt="Image Description">
                                    <div class="font-semibold text-base">Sasha Max</div>
                                    <p class="mb-4 text-gray-500 dark:text-white/70 text-[0.813rem]">Web Developer</p>
                                    <div class="">
                                    <button type="button"  aria-label="button"
                                        class="ti-btn p-0 flex-shrink-0 h-[2.375rem] w-[2.375rem] bg-[#3b5998] text-white hover:bg-[#3b5998] focus:ring-0 focus:ring-[#3b5998] dark:focus:ring-offset-white/10 ti-btn-facebook">
                                        <i class="ri-facebook-line"></i>
                                    </button>
                                    <button type="button"  aria-label="button"
                                        class="ti-btn p-0 flex-shrink-0 h-[2.375rem] w-[2.375rem] bg-[#00acee] text-white hover:bg-[#00acee] focus:ring-0 focus:ring-[#00acee] dark:focus:ring-offset-white/10 ti-btn-twitter">
                                        <i class="ri-twitter-line"></i>
                                    </button>
                                    <button type="button"  aria-label="button"
                                        class="ti-btn p-0 flex-shrink-0 h-[2.375rem] w-[2.375rem] bg-instagram text-white hover:bg-instagram focus:ring-0 focus:ring-instagram dark:focus:ring-offset-white/10 ti-btn-instagram">
                                        <i class="ri-instagram-line"></i>
                                    </button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-3 col-span-12">
                                <div class="box">
                                <div class="box-body">
                                    <svg class="w-16 h-16 mb-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path fill="#C6CDD1" d="M19 21H3a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2z" />
                                    <path fill="#C6CDD1" d="M11 1H3a2 2 0 0 0-2 2v8h10V1z" />
                                    <path fill="#A1ABB2" d="M21 11V3a2 2 0 0 0-2-2h-8v10h10z" />
                                    <path fill="#878A8F" d="M1 11v8a2 2 0 0 0 2 2h8V11H1z" />
                                    <path fill="#797D82" d="M11 11v10h8a2 2 0 0 0 2-2v-8H11z" />
                                    <path fill="#FFF" d="M14 6h5v1h-5z" />
                                    <path d="M19 20.75H3a2 2 0 0 1-2-2V19a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-.25a2 2 0 0 1-2 2z"
                                        opacity=".1" />
                                    <circle cx="16" cy="16" r="7" fill="#136ad0" />
                                    <path
                                        d="M16 22.75c-3.08 0-5.704-1.97-6.696-4.713C10.18 20.907 12.85 23 16 23s5.82-2.094 6.696-4.963C21.704 20.781 19.08 22.75 16 22.75z"
                                        opacity=".1" />
                                    <path fill="#FFF"
                                        d="M16 9.25c3.08 0 5.704 1.97 6.696 4.713C21.82 11.093 19.15 9 16 9s-5.82 2.094-6.696 4.963C10.296 11.219 12.92 9.25 16 9.25z"
                                        opacity=".2" />
                                    <path fill="#FFF" d="M4 6h5v1H4z" />
                                    <path fill="#FFF"
                                        d="M6 4h1v5H6zM13 14h6v1h-6zM13 17h6v1h-6zM4.379 15.086l.707-.707 3.535 3.535-.707.707z" />
                                    <path fill="#FFF" d="m4.379 17.914 3.535-3.535.707.707-3.535 3.535z" />
                                    <path fill="#FFF" d="M19 1H3a2 2 0 0 0-2 2v.25a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2V3a2 2 0 0 0-2-2z"
                                        opacity=".2" />
                                    <linearGradient id="a" x1="14.367" x2="19.862" y1="14.367" y2="19.862" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#3E2723" stop-opacity=".2" />
                                        <stop offset="1" stop-color="#3E2723" stop-opacity=".02" />
                                    </linearGradient>
                                    <path fill="url(#a)" d="M19 14v1h-6l2 2h4v1h-6l4.766 4.766a7.014 7.014 0 0 0 5-5L19 14z" />
                                    <linearGradient id="b" x1="-.448" x2="23.366" y1="5.662" y2="16.766" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#FFF" stop-opacity=".2" />
                                        <stop offset="1" stop-color="#FFF" stop-opacity="0" />
                                    </linearGradient>
                                    <path fill="url(#b)"
                                        d="M21 11.11V3a2 2 0 0 0-2-2H3a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h8.11A6.974 6.974 0 0 0 16 23c3.86 0 7-3.14 7-7a6.974 6.974 0 0 0-2-4.89z" />
                                    </svg>
                                    <p class="mb-0 mt-4 text-sm font-semibold leading-none">
                                    Calculations
                                    </p>
                                </div>
                                <div class="box-footer">
                                    Lorem Ipsum is therefore always free from repetition, injected humour.
                                </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-2 col-span-12">
                                <div class="box">
                                <div class="box-body">
                                    <img src="{{asset('build/assets/img/media/7.jpg')}}" class="rounded-sm mb-4 w-full" alt="...">
                                    <h6 class="text-base box-title font-semibold mb-4">Mountains<span
                                        class="badge rounded-sm bg-primary text-white ltr:float-right rtl:float-left text-[0.813rem] leading-none py-1">New</span></h6>
                                    <p class="text-[0.813rem]">With supporting text below as a natural
                                    lead-in.</p>
                                </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-2 col-span-12">
                                <div class="box">
                                <div class="box-body">
                                    <img src="{{asset('build/assets/img/media/8.jpg')}}" class="rounded-sm mb-4 w-full" alt="...">
                                    <h6 class="text-base box-title font-semibold mb-4">Hills<span
                                        class="badge rounded-sm bg-secondary text-white ltr:float-right rtl:float-left text-[0.813rem] leading-none py-1">Hot</span>
                                    </h6>
                                    <p class="text-[0.813rem]">With supporting text below as a natural
                                    lead-in.</p>
                                </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-2 col-span-12">
                                <div class="box">
                                <div class="box-body">
                                    <img src="{{asset('build/assets/img/media/9.jpg')}}" class="rounded-sm mb-4 w-full" alt="...">
                                    <h6 class="text-base box-title font-semibold mb-4">Nature<span
                                        class="badge rounded-sm bg-gray-100 text-gray-500 ltr:float-right rtl:float-left text-[0.813rem] leading-none py-1">Offer</span>
                                    </h6>
                                    <p class="text-[0.813rem]">With supporting text below as a natural
                                    lead-in.</p>
                                </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-3 col-span-12">
                                <div class="box text-center">
                                <div class="box-header">
                                    <div class="box-title">Featured</div>
                                </div>
                                <div class="box-body">
                                    <h6 class="text-base box-title font-semibold mb-2">Breaking News !</h6>
                                    <p class="text-[0.813rem] mb-4">With supporting text below as a natural lead-in to
                                    additional content.</p>
                                    <a href="javascript:void(0);" class="ti-btn ti-btn-primary mt-2">Read More</a>
                                    <a href="javascript:void(0);" class="ti-btn ti-btn-outline ti-btn-outline-secondary mt-2">Close</a>
                                </div>
                                <div class="box-footer text-gray-500 dark:text-white/70">
                                    11.32pm
                                </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-3 col-span-12">
                                <div class="box">
                                <div class="box-header">
                                    <div class="xxxl:flex w-full">
                                    <img src="{{asset('build/assets/img/users/12.jpg')}}" class="avatar rounded-full ltr:mr-6 rtl:ml-6" alt="Image Description">
                                    <div class="flex items-center justify-between w-full">
                                        <div class="">
                                        <p class="text-sm text-gray-500 dark:text-white/70 mb-0">Posts</p>
                                        <p class="font-semibold text-base mb-0">25</p>
                                        </div>
                                        <div class="">
                                        <p class="text-sm text-gray-500 dark:text-white/70 mb-0">Followers</p>
                                        <p class="font-semibold text-base mb-0">1253</p>
                                        </div>
                                        <div class="">
                                        <p class="text-sm text-gray-500 dark:text-white/70 mb-0">Following</p>
                                        <p class="font-semibold text-base mb-0">367</p>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="font-semibold text-base">Angelina Caprio</div>
                                    <div class="text-gray-500 dark:text-white/70 text-[0.813rem] mb-4">Angular Developer</div>
                                    <p class="text-sm font-semibold mb-1">About:</p>
                                    <p class="mb-0 text-[0.813rem]">Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact
                                    original form, accompanied by English versions </p>
                                </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-4 col-span-12">
                                <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title my-auto">
                                    box With Collapse Button
                                    </div>
                                    <a aria-label="anchor" class="hs-collapse-toggle inline-flex items-center gap-x-2" href="javascript:void(0);"
                                    id="hs-show-hide-collapse" data-hs-collapse="#collapseExample">
                                    <i class="hs-collapse-open:rotate-180 ri-arrow-up-s-line text-lg"></i>
                                    </a>
                                </div>
                                <div class="hs-collapse w-full overflow-hidden transition-[height] duration-300" id="collapseExample"
                                    aria-labelledby="hs-show-hide-collapse">
                                    <div class="box-body">
                                    <h6 class="text-base font-semibold">Collapsible box</h6>
                                    <p class="text-[0.813rem] mb-0">There are many variations of passages of Lorem Ipsum available, but
                                        the
                                        majority have suffered alteration in some form, by injected humour, or randomised words</p>
                                    </div>
                                    <div class="box-footer">
                                    <button type="button" class="ti-btn ti-btn-primary">Read More</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-4 col-span-12">
                                <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title my-auto">
                                    box With Close Button
                                    </div>
                                    <a aria-label="anchor" href="javascript:void(0);" class="box-remove">
                                    <i class="ri-close-line text-lg"></i>
                                    </a>
                                </div>
                                <div class="box-body">
                                    <h6 class="text-base font-semibold">Closed box</h6>
                                    <p class="text-[0.813rem] mb-0">There are many variations of passages of Lorem Ipsum available, but the
                                    majority
                                    have suffered alteration in some form, by injected humour, or randomised words</p>
                                </div>
                                <div class="box-footer">
                                    <button type="button" class="ti-btn ti-btn-primary">Read More</button>
                                </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-4 col-span-12">
                                <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title my-auto">
                                    box With Fullscreen Button
                                    </div>
                                    <a aria-label="anchor" href="javascript:void(0);" class="box-fullscreen">
                                    <i class="ri-fullscreen-line"></i>
                                    </a>
                                </div>
                                <div class="box-body">
                                    <h6 class="text-base font-semibold">FullScreen box</h6>
                                    <p class="text-[0.813rem] mb-0">There are many variations of passages of Lorem Ipsum available, but the
                                    majority
                                    have suffered alteration in some form, by injected humour, or randomised words</p>
                                </div>
                                <div class="box-footer">
                                    <button type="button" class="ti-btn ti-btn-primary">Read More</button>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-4 -->

                            <!-- Start::row-5 -->
                            <div class="grid grid-cols-12 gap-x-6">
                            <div class="col-span-12">
                                <h6 class="text-base mb-4">Using Utilities:</h6>
                                <div class="grid grid-cols-12 gap-x-6">
                                <div class="xxl:col-span-6 col-span-12">
                                    <div class="box w-3/4">
                                    <div class="box-header">
                                        <div class="box-title">Using Width 75%</div>
                                    </div>
                                    <div class="box-body">
                                        <div class="text-[0.813rem]">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id nostrum omnis excepturi
                                        consequatur molestiae
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <a href="javascript:void(0);" class="ti-btn ti-btn-primary w-full">Button</a>
                                    </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-6 col-span-12">
                                    <div class="box w-1/2">
                                    <div class="box-header">
                                        <div class="box-title">Using Width 50%</div>
                                    </div>
                                    <div class="box-body">
                                        <div class="text-[0.813rem]">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <a href="javascript:void(0);" class="ti-btn ti-btn-primary w-full">Button</a>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12">
                                <h6 class="text-base mb-4">Navigation:</h6>
                                <div class="grid grid-cols-12 gap-x-6">
                                <div class="xxl:col-span-6 col-span-12">
                                    <div class="box text-center">
                                    <div class=" p-6 dark:bg-black/20 ">
                                        <div
                                        class="flex flex-col bg-white border shadow-sm rounded-sm dark:bg-black/20 dark:border-gray-700 dark:shadow-black/[0.05]">
                                        <div
                                            class="bg-gray-100 border-b rounded-t-sm pt-3 px-4 md:pt-4 md:px-5 dark:bg-black/20 dark:border-gray-700 overflow-hidden">
                                            <nav class="flex space-x-2 rtl:space-x-reverse" aria-label="Tabs">
                                            <a class="-mb-px py-3 px-4 bg-white text-sm font-medium text-center border border-b-transparent text-gray-500 rounded-t-sm hover:text-gray-700 focus:z-10 dark:bg-black/20 dark:border-gray-700 dark:border-b-white/10 dark:hover:text-white/80"
                                                href="javascript:void(0);">
                                                Active
                                            </a>

                                            <a class="-mb-px py-3 px-4 text-sm font-medium text-center border-b text-gray-500 rounded-t-sm hover:text-gray-700 focus:z-10 dark:border-gray-700 dark:hover:text-white/80"
                                                href="javascript:void(0);">
                                                Link
                                            </a>

                                            <a class="-mb-px py-3 px-4 text-sm font-medium text-center border-b text-gray-500 rounded-t-sm hover:text-gray-700 focus:z-10 dark:border-gray-700 dark:hover:text-white/80"
                                                href="javascript:void(0);">
                                                Link
                                            </a>
                                            </nav>
                                        </div>
                                        <div class="p-4 text-center md:py-7 md:px-5">
                                            <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                                            Box title
                                            </h3>
                                            <p class="mt-2 text-gray-800 dark:text-white/70">
                                            With supporting text below as a natural lead-in to additional content.
                                            </p>
                                            <a class="mt-3 ti-btn ti-btn-primary" href="javascript:void(0);">
                                            Go somewhere
                                            </a>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-6 col-span-12">
                                    <div class="box text-center">
                                    <div
                                        class="flex flex-col bg-white dark:bg-black/20  dark:shadow-black/[0.05]">
                                        <!-- Select (Mobile only) -->
                                        <div class="sm:hidden">
                                        <label for="hs-box-nav-tabs" class="sr-only">Select a nav</label>
                                        <select name="hs-box-nav-tabs" id="hs-box-nav-tabs"
                                            class="block w-full border-t-0 border-x-0 border-gray-300 rounded-t-sm focus:ring-primary focus:border-primary">
                                            <option selected>My Account</option>
                                            <option>Company</option>
                                            <option>Team Members</option>
                                            <option>Billing</option>
                                        </select>
                                        </div>
                                        <!-- End Select (Mobile only) -->

                                        <!-- Nav Tabs (Device only) -->
                                        <div class="hidden sm:block">
                                        <nav
                                            class="relative z-0 flex border-b rounded-sm divide-x rtl:divide-x-reverse divide-gray-200 dark:border-gray-700 dark:divide-white/10"
                                            aria-label="Tabs">
                                            <a class="group relative min-w-0 flex-1 bg-white py-4 px-4 border-b-2 border-b-primary text-gray-900 rounded-tl-sm text-sm font-medium text-center overflow-hidden hover:bg-gray-50 focus:z-10 dark:bg-black/20 dark:text-gray-300"
                                            aria-current="page" href="javascript:void(0);">
                                            My Account
                                            </a>

                                            <a class="group relative min-w-0 flex-1 bg-white py-4 px-4 text-gray-500 hover:text-gray-700 text-sm font-medium text-center overflow-hidden hover:bg-gray-50 focus:z-10 dark:bg-black/20 dark:hover:text-white/80"
                                            href="javascript:void(0);">
                                            Company
                                            </a>

                                            <a class="group relative min-w-0 flex-1 bg-white py-4 px-4 text-gray-500 hover:text-gray-700 text-sm font-medium text-center overflow-hidden hover:bg-gray-50 focus:z-10 dark:bg-black/20 dark:hover:text-white/80"
                                            href="javascript:void(0);">
                                            Team Members
                                            </a>

                                            <a class="group relative min-w-0 flex-1 bg-white py-4 px-4 text-gray-500 hover:text-gray-700 ltr:rounded-tr-sm rtl:rounded-tl-sm text-sm font-medium text-center overflow-hidden hover:bg-gray-50 focus:z-10 dark:bg-black/20 dark:hover:text-white/80"
                                            href="javascript:void(0);">
                                            Billing
                                            </a>
                                        </nav>
                                        </div>
                                        <!-- End Nav Tabs (Device only) -->

                                        <div class="p-4 text-center md:py-7 md:px-5">
                                        <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                                            Box title
                                        </h3>
                                        <p class="mt-2 text-gray-800 dark:text-white/70">
                                            With supporting text below as a natural lead-in to additional content.
                                        </p>
                                        <a class="mt-3 ti-btn ti-btn-primary" href="javascript:void(0);">
                                            Go somewhere
                                        </a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-5 -->

                            <!-- Start::row-6 -->
                            <h6 class="text-base mb-4">Image Caps:</h6>
                            <div class="grid grid-cols-12 gap-x-6">
                            <div class="xxl:col-span-4 col-span-12">
                                <div class="box">
                                <img src="{{asset('build/assets/img/media/10.jpg')}}" class="box-img-top rounded-t-sm" alt="...">
                                <div class="box-body">
                                    <h6 class="text-base box-title font-semibold">Image caps are widely used in Blog's</h6>
                                    <p class="text-[0.813rem] mb-4 text-gray-500 dark:text-white/70">But I must explain to you how all this mistaken
                                    idea of denouncing pleasure and praising pain was born and I will give you a complete account of the
                                    system, and expound the actual teachings.</p>
                                    <p class="text-[0.813rem] mb-0"><small class="text-sm">Last updated 3 mins
                                        ago</small></p>
                                </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-4 col-span-12">
                                <div class="box">
                                <div class="box-body">
                                    <h6 class="text-base box-title font-semibold">Image caps are widely used in Blog's</h6>
                                    <p class="text-[0.813rem] mb-4 text-gray-500 dark:text-white/70">But I must explain to you how all this mistaken
                                    idea of denouncing pleasure and praising pain was born and I will give you a complete account of the
                                    system, and expound.</p>
                                    <p class="text-[0.813rem] mb-0"><small class="text-sm">Last updated 3 mins
                                        ago</small></p>
                                </div>
                                <img src="{{asset('build/assets/img/media/11.jpg')}}" class="box-img-bottom rounded-b-sm" alt="...">
                                </div>
                            </div>
                            <div class="xxl:col-span-4 col-span-12">
                                <div class="box">
                                <div class="box-body">
                                    <h6 class="text-base box-title font-semibold mb-1">Image caps are widely used in Blog's</h6>
                                    <p class="text-[0.813rem] mb-1 text-gray-500 dark:text-white/70">This is a wider box with supporting text below
                                    as
                                    a natural lead-in to additional content. This content is a
                                    little
                                    bit longer.</p>
                                </div>
                                <img src="{{asset('build/assets/img/media/12.jpg')}}" class="" alt="...">
                                <div class="box-body">
                                    <p class="text-[0.813rem] mb-0"><small class="text-sm">Last updated 3 mins
                                        ago</small></p>
                                </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-4 col-span-12">
                                <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Image caps are widely used in Blog's</div>
                                </div>
                                <div class="box-body">
                                    <p class="text-[0.813rem] mb-1 text-gray-500 dark:text-white/70">This is a wider box with supporting text below
                                    as
                                    a natural lead-in to additional content. This content is a
                                    little
                                    bit longer.</p>
                                </div>
                                <img src="{{asset('build/assets/img/media/13.jpg')}}" class="" alt="...">
                                <div class="box-footer">
                                    <p class="text-[0.813rem] mb-0"><small class="text-sm">Last updated 3 mins
                                        ago</small></p>
                                </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-4 col-span-12">
                                <div class="box">
                                <img src="{{asset('build/assets/img/media/14.jpg')}}" class="box-img-top rounded-t-sm" alt="...">
                                <div class="box-header">
                                    <div class="box-title">Image caps are widely used in Blog's</div>
                                </div>
                                <div class="box-body">
                                    <p class="text-[0.813rem] mb-1 text-gray-500 dark:text-white/70">This is a wider box with supporting text below
                                    as
                                    a natural lead-in to additional content. This content is a
                                    little
                                    bit longer.</p>
                                </div>
                                <div class="box-footer">
                                    <p class="text-[0.813rem] mb-0"><small class="text-sm">Last updated 3 mins
                                        ago</small></p>
                                </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-4 col-span-12">
                                <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Image caps are widely used in Blog's</div>
                                </div>
                                <div class="box-body">
                                    <p class="text-[0.813rem] mb-1 text-gray-500 dark:text-white/70">This is a wider box with supporting text below
                                    as
                                    a natural lead-in to additional content. This content is a
                                    little
                                    bit longer.</p>
                                </div>
                                <div class="box-footer">
                                    <p class="text-[0.813rem] mb-0"><small class="text-sm">Last updated 3 mins
                                        ago</small></p>
                                </div>
                                <img src="{{asset('build/assets/img/media/15.jpg')}}" class="box-img-bottom rounded-b-sm" alt="...">
                                </div>
                            </div>
                            </div>
                            <!-- End::row-6 -->

                            <!-- Start::row-7 -->
                            <h6 class="text-base mb-4">Image Overlays:</h6>
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xxl:col-span-4 col-span-12">
                                    <div class="box overlay-box">
                                        <img src="{{asset('build/assets/img/media/16.jpg')}}" class="box-img" alt="...">
                                        <div class="box-img-overlay flex flex-col p-0">
                                            <div class="box-header">
                                                <div class="box-title text-white">
                                                    Image Overlays Are Awesome!
                                                </div>
                                            </div>
                                            <div class="box-body">
                                                <div class="text-[0.813rem] mb-2">There are many variations of passages of Lorem Ipsum available, but the
                                                    majority have suffered alteration in some form, by injected humour, or randomised words which
                                                    don't look even.</div>
                                                <div class="text-[0.813rem]">Last updated 3 mins ago</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-4 col-span-12">
                                    <div class="box overlay-box">
                                        <img src="{{asset('build/assets/img/media/17.jpg')}}" class="box-img" alt="...">
                                        <div class="box-img-overlay flex flex-col p-0 over-content-bottom">
                                            <div class="box-body">
                                                <div class="box-title text-white mb-4">
                                                    Image Overlays Are Awesome!
                                                </div>
                                                <div class="text-[0.813rem] mb-2">There are many variations of passages of Lorem Ipsum available, but the
                                                    majority have suffered alteration in some form, by injected humour, or randomised words which
                                                    don't look even.</div>
                                            </div>
                                            <div class="box-footer">Last updated 3 mins ago</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-4 col-span-12">
                                    <div class="box bg-dark overlay-box">
                                        <img src="{{asset('build/assets/img/media/18.jpg')}}" class="box-img" alt="...">
                                        <div class="box-img-overlay flex flex-col p-0">
                                            <div class="box-header">
                                                <div class="box-title text-white">
                                                    Image Overlays Are Awesome!
                                                </div>
                                            </div>
                                            <div class="box-body h-full">
                                                <div class="text-[0.813rem]">There are many variations of passages of Lorem Ipsum available, but the
                                                    majority have suffered alteration in some form, by injected humour, or randomised words which
                                                    don't look even.</div>
                                            </div>
                                            <div class="box-footer">Last updated 3 mins ago</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-7 -->

                            <!-- Start::row-8 -->
                            <h6 class="text-base mb-4">Horizontal box:</h6>
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xxl:col-span-4 col-span-12">
                                    <div class="box">
                                        <div class="grid grid-cols-12 gap-0">
                                            <div class="col-span-12 md:col-span-4">
                                                <img src="{{asset('build/assets/img/media/19.jpg')}}" class="img-fluid ltr:rounded-l-sm rtl:rounded-r-sm h-full w-full" alt="...">
                                            </div>
                                            <div class="col-span-12 md:col-span-8">
                                                <div class="box-header">
                                                    <div class="box-title">Horizontal box</div>
                                                </div>
                                                <div class="box-body">
                                                    <h6 class="text-base box-title font-semibold">Horizontal box are awesome!</h6>
                                                    <p class="text-[0.813rem]">This is a wider box with supporting text below as a natural .</p>
                                                </div>
                                                <div class="box-footer">
                                                    <p class="text-[0.813rem]">Last updated 3 mins
                                                    ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-4 col-span-12">
                                    <div class="box">
                                        <div class="grid grid-cols-12 gap-0">
                                            <div class="col-span-12 md:col-span-8">
                                                <div class="box-header">
                                                    <div class="box-title">Horizontal box</div>
                                                </div>
                                                <div class="box-body">
                                                    <h6 class="text-base box-title font-semibold">Horizontal box are awesome!</h6>
                                                    <p class="text-[0.813rem] mb-4">This is a wider box with suppo rting text below as a natural lead-in to
                                                        additional content. This content is a little bit longer.</p>

                                                        <p class="text-[0.813rem]">Last updated 3 mins
                                                        ago</p>
                                                </div>
                                            </div>
                                            <div class="col-span-12 md:col-span-4">
                                                <img src="{{asset('build/assets/img/media/20.jpg')}}" class="img-fluid ltr:rounded-r-sm rtl:rounded-l-sm h-full w-full" alt="...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-4 col-span-12">
                                    <div class="box">
                                        <div class="grid grid-cols-12 gap-0">
                                            <div class="col-span-12 md:col-span-8">
                                                <div class="box-body">
                                                    <h6 class="text-base box-title font-semibold mb-2">Horizontal box</h6>
                                                    <div class="mb-4">Horizontal box are awesome!</div>
                                                    <p class="text-[0.813rem]">This is a wider box with supporting text below as a natural lead-in to
                                                        additional content. This content is a little bit longer.</p>
                                                </div>
                                                <div class="box-footer">

                                                <p class="text-[0.813rem]">Last updated 3 mins
                                                    ago</p>
                                                </div>
                                            </div>
                                            <div class="col-span-12 md:col-span-4">
                                                <img src="{{asset('build/assets/img/media/21.jpg')}}" class="img-fluid ltr:rounded-r-sm rtl:rounded-l-sm h-full w-full" alt="...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-8 -->

                            <!-- Start::row-9 -->
                            <h6 class="text-base mb-4">Background Colored box:</h6>
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xxl:col-span-3 col-span-12">
                                    <div class="box !bg-primary text-white">
                                        <div class="box-body">
                                            <div class="flex items-center w-full">
                                                <div class="ltr:mr-2 rtl:ml-2">
                                                <img src="{{asset('build/assets/img/users/11.jpg')}}" class="avatar rounded-full ring-0" alt="Image Description">
                                                </div>
                                                <div class="">
                                                    <div class="text-base font-semibold">Adam Smith</div>
                                                    <p class="mb-0 text-white opacity-70 text-xs">Finished by today</p>
                                                </div>
                                                <div class="ltr:ml-auto rtl:mr-auto">
                                                <div class="hs-dropdown ti-dropdown">
                                                    <button aria-label="button" id="hs-dropdown-custom-icon-trigger11" type="button" class="hs-dropdown-toggle p-0 !bg-transparent border-0 shadow-none focus:ring-0 focus:ring-offset-0  ti-dropdown-toggle">
                                                        <i class="ri-more-2-line ti-dropdown-icon text-white"></i>
                                                    </button>
                                                    <div class="hs-dropdown-menu ti-dropdown-menu" aria-labelledby="hs-dropdown-custom-icon-trigger11">
                                                        <a class="ti-dropdown-item" href="javascript:void(0);">Edit</a>
                                                        <a class="ti-dropdown-item" href="javascript:void(0);">Download</a>
                                                        <a class="ti-dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-3 col-span-12">
                                    <div class="box !bg-secondary text-white">
                                        <div class="box-body">
                                        <div class="flex items-center w-full">
                                            <div class="ltr:mr-2 rtl:ml-2">
                                                <img src="{{asset('build/assets/img/users/12.jpg')}}" class="avatar rounded-full ring-0" alt="Image Description">
                                            </div>
                                            <div class="">
                                                <div class="text-base font-semibold">Elisha Corner</div>
                                                <p class="mb-0 text-white opacity-70 text-xs">Completed 24 days back</p>
                                            </div>
                                            <div class="ltr:ml-auto rtl:mr-auto">
                                                <div class="hs-dropdown ti-dropdown">
                                                <button aria-label="button" id="hs-dropdown-custom-icon-trigger12" type="button" class="hs-dropdown-toggle p-0 !bg-transparent border-0 shadow-none focus:ring-0 focus:ring-offset-0  ti-dropdown-toggle">
                                                    <i class="ri-more-2-line ti-dropdown-icon text-white"></i>
                                                </button>
                                                <div class="hs-dropdown-menu ti-dropdown-menu" aria-labelledby="hs-dropdown-custom-icon-trigger12">
                                                    <a class="ti-dropdown-item" href="javascript:void(0);">Edit</a>
                                                    <a class="ti-dropdown-item" href="javascript:void(0);">Download</a>
                                                    <a class="ti-dropdown-item" href="javascript:void(0);">Delete</a>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-3 col-span-12">
                                    <div class="box !bg-warning text-white">
                                        <div class="box-body">
                                            <div class="flex items-center w-full">
                                                <div class="ltr:mr-2 rtl:ml-2">
                                                <img src="{{asset('build/assets/img/users/1.jpg')}}" class="avatar rounded-full ring-0" alt="Image Description">
                                                </div>
                                                <div class="">
                                                    <div class="text-base font-semibold">Sarah Alina</div>
                                                    <p class="mb-0 text-white opacity-70 text-xs">Completed today</p>
                                                </div>
                                                <div class="ltr:ml-auto rtl:mr-auto">
                                                <div class="hs-dropdown ti-dropdown">
                                                    <button aria-label="button" id="hs-dropdown-custom-icon-trigger13" type="button" class="hs-dropdown-toggle p-0 !bg-transparent border-0 shadow-none focus:ring-0 focus:ring-offset-0  ti-dropdown-toggle">
                                                        <i class="ri-more-2-line ti-dropdown-icon text-white"></i>
                                                    </button>
                                                    <div class="hs-dropdown-menu ti-dropdown-menu" aria-labelledby="hs-dropdown-custom-icon-trigger13">
                                                        <a class="ti-dropdown-item" href="javascript:void(0);">Edit</a>
                                                        <a class="ti-dropdown-item" href="javascript:void(0);">Download</a>
                                                        <a class="ti-dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-3 col-span-12">
                                    <div class="box !bg-info text-white">
                                        <div class="box-body">
                                            <div class="flex items-center w-full">
                                                <div class="ltr:mr-2 rtl:ml-2">
                                                <img src="{{asset('build/assets/img/users/1.jpg')}}" class="avatar rounded-full ring-0" alt="Image Description">
                                                </div>
                                                <div class="">
                                                    <div class="text-base font-semibold">Monica Karen</div>
                                                    <p class="mb-0 text-white opacity-70 text-xs">Pending from 4 days</p>
                                                </div>
                                                <div class="ltr:ml-auto rtl:mr-auto">
                                                <div class="hs-dropdown ti-dropdown">
                                                    <button aria-label="button" id="hs-dropdown-custom-icon-trigger14" type="button" class="hs-dropdown-toggle p-0 !bg-transparent border-0 shadow-none focus:ring-0 focus:ring-offset-0  ti-dropdown-toggle">
                                                        <i class="ri-more-2-line ti-dropdown-icon text-white"></i>
                                                    </button>
                                                    <div class="hs-dropdown-menu ti-dropdown-menu" aria-labelledby="hs-dropdown-custom-icon-trigger14">
                                                        <a class="ti-dropdown-item" href="javascript:void(0);">Edit</a>
                                                        <a class="ti-dropdown-item" href="javascript:void(0);">Download</a>
                                                        <a class="ti-dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-3 col-span-12">
                                    <div class="box !bg-success text-white">
                                        <div class="box-body">
                                            <div class="flex items-center w-full">
                                                <div class="ltr:mr-2 rtl:ml-2">
                                                <img src="{{asset('build/assets/img/users/5.jpg')}}" class="avatar rounded-full ring-0" alt="Image Description">
                                                </div>
                                                <div class="">
                                                    <div class="text-base font-semibold">Samantha sid</div>
                                                    <p class="mb-0 text-white opacity-70 text-xs">In leave for 1 month</p>
                                                </div>
                                                <div class="ltr:ml-auto rtl:mr-auto">
                                                <div class="hs-dropdown ti-dropdown">
                                                    <button aria-label="button" id="hs-dropdown-custom-icon-trigger15" type="button" class="hs-dropdown-toggle p-0 !bg-transparent border-0 shadow-none focus:ring-0 focus:ring-offset-0  ti-dropdown-toggle">
                                                        <i class="ri-more-2-line ti-dropdown-icon text-white"></i>
                                                    </button>
                                                    <div class="hs-dropdown-menu ti-dropdown-menu" aria-labelledby="hs-dropdown-custom-icon-trigger15">
                                                        <a class="ti-dropdown-item" href="javascript:void(0);">Edit</a>
                                                        <a class="ti-dropdown-item" href="javascript:void(0);">Download</a>
                                                        <a class="ti-dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-3 col-span-12">
                                    <div class="box !bg-danger text-white">
                                        <div class="box-body">
                                            <div class="flex items-center w-full">
                                                <div class="ltr:mr-2 rtl:ml-2">
                                                <img src="{{asset('build/assets/img/users/14.jpg')}}" class="avatar rounded-full ring-0" alt="Image Description">
                                                </div>
                                                <div class="">
                                                    <div class="text-base font-semibold">Sebastien steyn</div>
                                                    <p class="mb-0 text-white opacity-70 text-xs">Completed by Tomorrow</p>
                                                </div>
                                                <div class="ltr:ml-auto rtl:mr-auto">
                                                <div class="hs-dropdown ti-dropdown">
                                                    <button aria-label="button" id="hs-dropdown-custom-icon-trigger16" type="button" class="hs-dropdown-toggle p-0 !bg-transparent border-0 shadow-none focus:ring-0 focus:ring-offset-0  ti-dropdown-toggle">
                                                        <i class="ri-more-2-line ti-dropdown-icon text-white"></i>
                                                    </button>
                                                    <div class="hs-dropdown-menu ti-dropdown-menu" aria-labelledby="hs-dropdown-custom-icon-trigger16">
                                                        <a class="ti-dropdown-item" href="javascript:void(0);">Edit</a>
                                                        <a class="ti-dropdown-item" href="javascript:void(0);">Download</a>
                                                        <a class="ti-dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-3 col-span-12">
                                    <div class="box !bg-light">
                                        <div class="box-body">
                                            <div class="flex items-center w-full">
                                            <div class="ltr:mr-2 rtl:ml-2">
                                                <img src="{{asset('build/assets/img/users/13.jpg')}}" class="avatar rounded-full ring-0" alt="Image Description">
                                            </div>
                                                <div class="">
                                                    <div class="text-base font-semibold">Jacob Smith</div>
                                                    <p class="mb-0 text-gray-500 dark:text-white/70 opacity-70 text-xs">Finished by 24,Nov</p>
                                                </div>
                                                <div class="ltr:ml-auto rtl:mr-auto">
                                                <div class="hs-dropdown ti-dropdown">
                                                    <button aria-label="button" id="hs-dropdown-custom-icon-trigger17" type="button" class="hs-dropdown-toggle p-0 !bg-transparent border-0 shadow-none focus:ring-0 focus:ring-offset-0  ti-dropdown-toggle">
                                                        <i class="ri-more-2-line ti-dropdown-icon text-dark"></i>
                                                    </button>
                                                    <div class="hs-dropdown-menu ti-dropdown-menu" aria-labelledby="hs-dropdown-custom-icon-trigger17">
                                                        <a class="ti-dropdown-item" href="javascript:void(0);">Edit</a>
                                                        <a class="ti-dropdown-item" href="javascript:void(0);">Download</a>
                                                        <a class="ti-dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-3 col-span-12">
                                    <div class="box !bg-dark text-white">
                                        <div class="box-body">
                                            <div class="flex items-center w-full">
                                            <div class="ltr:mr-2 rtl:ml-2">
                                                <img src="{{asset('build/assets/img/users/16.jpg')}}" class="avatar rounded-full ring-0" alt="Image Description">
                                            </div>
                                                <div class="">
                                                    <div class="text-base font-semibold">Pope Adam</div>
                                                    <p class="mb-0 text-white opacity-70 text-xs">Completed on 24,may</p>
                                                </div>
                                                <div class="ltr:ml-auto rtl:mr-auto">
                                                <div class="hs-dropdown ti-dropdown">
                                                    <button aria-label="button" id="hs-dropdown-custom-icon-trigger" type="button" class="hs-dropdown-toggle p-0 !bg-transparent border-0 shadow-none focus:ring-0 focus:ring-offset-0  ti-dropdown-toggle">
                                                        <i class="ri-more-2-line ti-dropdown-icon text-white"></i>
                                                    </button>
                                                    <div class="hs-dropdown-menu ti-dropdown-menu" aria-labelledby="hs-dropdown-custom-icon-trigger">
                                                        <a class="ti-dropdown-item" href="javascript:void(0);">Edit</a>
                                                        <a class="ti-dropdown-item" href="javascript:void(0);">Download</a>
                                                        <a class="ti-dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-9 -->

                            <!-- Start::row-10 -->
                            <h6 class="text-base mb-4">Colored Border box:</h6>
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xxl:col-span-3 col-span-12">
                                    <div class="box border !border-primary">
                                        <div class="box-body">
                                            <p class="text-sm font-semibold mb-2 leading-none">Home Page Design
                                                <a aria-label="anchor" href="javascript:void(0);"><i class="ri ri-add-box-line my-auto leading-none ltr:float-right rtl:float-left text-primary text-lg font-normal"></i></a>
                                            </p>
                                            <div class="mb-6">
                                                <span class="badge py-1 rounded-sm bg-primary/10 text-primary">Framework</span>
                                                <span class="badge py-1 rounded-sm bg-secondary/10 text-secondary">Angular</span>
                                                <span class="badge py-1 rounded-sm bg-info/10 text-info">Php</span>
                                            </div>
                                            <div class="flex -space-x-2 rtl:space-x-reverse">
                                            <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/img/users/1.jpg')}}" alt="Image Description">
                                            <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/img/users/4.jpg')}}" alt="Image Description">
                                            <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/img/users/2.jpg')}}" alt="Image Description">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-3 col-span-12">
                                    <div class="box border !border-secondary">
                                        <div class="box-body">
                                            <p class="text-sm font-semibold mb-2 leading-none">Landing Page Design
                                                <a aria-label="anchor" href="javascript:void(0);"><i class="ri ri-add-box-line my-auto leading-none ltr:float-right rtl:float-left text-secondary text-lg font-normal"></i></a>
                                            </p>
                                            <div class="mb-6">
                                                <span class="badge py-1 rounded-sm bg-danger/10 text-danger">Laravel</span>
                                                <span class="badge py-1 rounded-sm bg-teal-500/10 text-teal-500">Codeignitor</span>
                                                <span class="badge py-1 rounded-sm bg-success/10 text-success">Php</span>
                                            </div>
                                            <div class="flex -space-x-2 rtl:space-x-reverse">
                                            <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/img/users/1.jpg')}}" alt="Image Description">
                                            <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/img/users/4.jpg')}}" alt="Image Description">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-3 col-span-12">
                                    <div class="box border !border-warning">
                                        <div class="box-body">
                                            <p class="text-sm font-semibold mb-2 leading-none">Update New Project
                                                <a aria-label="anchor" href="javascript:void(0);"><i class="ri ri-add-box-line my-auto leading-none ltr:float-right rtl:float-left text-warning text-lg font-normal"></i></a>
                                            </p>
                                            <div class="mb-6">
                                                <span class="badge py-1 rounded-sm bg-warning/10 text-warning">Laravel</span>
                                                <span class="badge py-1 rounded-sm bg-secondary/10 text-secondary">Codeignitor</span>
                                                <span class="badge py-1 rounded-sm bg-info/10 text-info">Php</span>
                                            </div>
                                            <div class="flex -space-x-2 rtl:space-x-reverse">
                                            <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/img/users/1.jpg')}}" alt="Image Description">
                                            <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/img/users/4.jpg')}}" alt="Image Description">
                                            <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/img/users/12.jpg')}}" alt="Image Description">
                                            <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/img/users/10.jpg')}}" alt="Image Description">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-3 col-span-12">
                                    <div class="box border !border-info">
                                        <div class="box-body">
                                            <p class="text-sm font-semibold mb-2 leading-none">New Project Discussion
                                                <a aria-label="anchor" href="javascript:void(0);"><i class="ri ri-add-box-line my-auto leading-none ltr:float-right rtl:float-left text-info text-lg font-normal"></i></a>
                                            </p>
                                            <div class="mb-6">
                                                <span class="badge py-1 rounded-sm bg-info/10 text-info">React</span>
                                                <span class="badge py-1 rounded-sm bg-primary/10 text-primary">Typescript</span>
                                            </div>
                                            <div class="flex -space-x-2 rtl:space-x-reverse">
                                            <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/img/users/1.jpg')}}" alt="Image Description">
                                            <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/img/users/4.jpg')}}" alt="Image Description">
                                            <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/img/users/12.jpg')}}" alt="Image Description">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-3 col-span-12">
                                    <div class="box border !border-danger">
                                        <div class="box-body">
                                            <p class="text-sm font-semibold mb-2 leading-none">Recent Projects Testing
                                                <a aria-label="anchor" href="javascript:void(0);"><i class="ri ri-add-box-line my-auto leading-none ltr:float-right rtl:float-left text-danger text-lg font-normal"></i></a>
                                            </p>
                                            <div class="mb-6">
                                                <span class="badge py-1 rounded-sm bg-primary/10 text-primary">Ui</span>
                                                <span class="badge py-1 rounded-sm bg-secondary/10 text-secondary">Angular</span>
                                                <span class="badge py-1 rounded-sm bg-info/10 text-info">Java</span>
                                            </div>
                                            <div class="flex -space-x-2 rtl:space-x-reverse">
                                            <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/img/users/1.jpg')}}" alt="Image Description">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-3 col-span-12">
                                    <div class="box border !border-success">
                                        <div class="box-body">
                                            <p class="text-sm font-semibold mb-2 leading-none">About Us Page redesign
                                            <a aria-label="anchor" href="javascript:void(0);"><i class="ri ri-add-box-line my-auto leading-none ltr:float-right rtl:float-left text-success text-lg font-normal"></i></a>
                                            </p>
                                            <div class="mb-6">
                                                <span class="badge py-1 rounded-sm bg-danger/10 text-danger">Html</span>
                                                <span class="badge py-1 rounded-sm bg-warning/10 text-warning">Symphony</span>
                                                <span class="badge py-1 rounded-sm bg-success/10 text-success">Php</span>
                                            </div>
                                            <div class="flex -space-x-2 rtl:space-x-reverse">
                                            <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/img/users/6.jpg')}}" alt="Image Description">
                                            <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/img/users/9.jpg')}}" alt="Image Description">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-3 col-span-12">
                                    <div class="box border border-gray-200 dark:border-white/10">
                                        <div class="box-body">
                                            <p class="text-sm font-semibold mb-2 leading-none">New Employees
                                            <a aria-label="anchor" href="javascript:void(0);"><i class="ri ri-add-box-line my-auto leading-none ltr:float-right rtl:float-left dark:text-white text-lg font-normal"></i></a>
                                            </p>
                                            <div class="mb-6">
                                                <span class="badge py-1 rounded-sm bg-warning/10 text-warning">Html</span>
                                                <span class="badge py-1 rounded-sm bg-info/10 text-info">Cake Php</span>
                                                <span class="badge py-1 rounded-sm bg-success/10 text-success">React</span>
                                            </div>
                                            <div class="flex -space-x-2 rtl:space-x-reverse">
                                            <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/img/users/6.jpg')}}" alt="Image Description">
                                            <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/img/users/5.jpg')}}" alt="Image Description">
                                            <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/img/users/9.jpg')}}" alt="Image Description">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-3 col-span-12">
                                    <div class="box border border-dark">
                                        <div class="box-body">
                                            <p class="text-sm font-semibold mb-2 leading-none">Terminated Employees
                                            <a aria-label="anchor" href="javascript:void(0);"><i class="ri ri-add-box-line my-auto leading-none ltr:float-right rtl:float-left text-dark dark:text-white text-lg font-normal"></i></a>
                                            </p>
                                            <div class="mb-6">
                                                <span class="badge py-1 rounded-sm bg-primary/10 text-primary">Angular</span>
                                            </div>
                                            <div class="flex -space-x-2 rtl:space-x-reverse">
                                            <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/img/users/6.jpg')}}" alt="Image Description">
                                            <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/img/users/5.jpg')}}" alt="Image Description">
                                            <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/img/users/9.jpg')}}" alt="Image Description">
                                            <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/img/users/15.jpg')}}" alt="Image Description">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-10 -->

                            <!-- Start::row-11 -->
                            <h6 class="text-base mb-4">Box Groups With Footer:</h6>
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="col-span-12">
                                    <div class="grid border rounded-sm shadow-sm divide-y overflow-hidden sm:flex sm:divide-y-0 sm:divide-x sm:rtl:divide-x-reverse dark:border-gray-700 dark:shadow-black/[0.05] dark:divide-gray-600">
                                        <div class="mb-0 box rounded-none border-0 flex flex-col flex-[1_0_0%]">
                                        <img class="w-full h-auto rounded-t-sm ltr:sm:rounded-tr-none rtl:sm:rounded-tl-none" src="{{asset('build/assets/img/media/22.jpg')}}" alt="Image Description">
                                        <div class="box-body flex-1">
                                            <h6 class="box-title fw-semibold">Delecious food is a blessing!</h6>
                                            <p class="text-[0.813rem]">This is a wider box with supporting text below as
                                                a
                                                natural lead-in to additional content. This content is a little bit
                                                longer.</p>
                                        </div>
                                        <div class="box-footer">
                                        <small class="text-gray-500 dark:text-white/70">Last updated 3 mins ago</small>
                                        </div>
                                    </div>
                                    <div class="mb-0 box rounded-none border-0 flex flex-col flex-[1_0_0%]">
                                    <img class="w-full h-auto" src="{{asset('build/assets/img/media/23.jpg')}}" alt="Image Description">
                                    <div class="box-body flex-1">
                                        <h6 class="box-title fw-semibold">Is office the best place to earn knowledge?</h6>
                                        <p class="text-[0.813rem]">This box has supporting text below as a natural lead-in to additional content.</p>
                                    </div>
                                    <div class="box-footer">
                                        <small class="text-gray-500 dark:text-white/70">Last updated 3 mins ago</small>
                                    </div>
                                    </div>
                                    <div class="mb-0 box rounded-none border-0 flex flex-col flex-[1_0_0%]">
                                    <img class="w-full h-auto ltr:sm:rounded-tr-sm rtl:sm:rounded-tl-sm" src="{{asset('build/assets/img/media/24.jpg')}}" alt="Image Description">
                                    <div class="box-body flex-1">
                                        <h6 class="box-title fw-semibold">Writing is an art.</h6>
                                        <p class="text-[0.813rem]">This is a wider box with supporting text below as a natural lead-in to additional content. This box has even longer content than the first to show that equal height action.</p>
                                    </div>
                                    <div class="box-footer">
                                        <small class="text-gray-500 dark:text-white/70">Last updated 3 mins ago</small>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <!-- End::row-11 -->

                            <!-- Start::row-12 -->
                            <h6 class="text-base my-4">Box With Link:</h6>
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xxl:col-span-3 col-span-12">
                                    <div class="box">
                                        <a aria-label="anchor" href="javascript:void(0);" class="box-anchor"></a>
                                        <img src="{{asset('build/assets/img/media/2.jpg')}}" class="box-img-top rounded-t-sm" alt="...">
                                        <div class="box-body">
                                            <h6 class="text-base box-title font-semibold mb-0">Forests are Awesome.</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-6 col-span-12">
                                    <div class="grid grid-cols-12 gap-x-6">
                                        <div class="col-span-12">
                                            <div class="box !bg-primary text-white">
                                                <a aria-label="anchor" href="javascript:void(0);" class="box-anchor"></a>
                                                <div class="box-body">
                                                    <blockquote class="blockquote mb-0 text-center">
                                                        <h6>The best and most beautiful things in the world cannot be seen or even touched — they
                                                            must be felt with the heart..</h6>
                                                        <footer class="blockquote-footer mt-3 text-sm text-white opacity-70">Someone famous as <cite
                                                                title="Source Title">-Helen Keller</cite></footer>
                                                    </blockquote>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-5 col-span-12">
                                            <div class="box">
                                                <a aria-label="anchor" href="javascript:void(0);" class="box-anchor"></a>
                                                <div class="box-body">
                                                    <div class="flex items-center">
                                                        <div class="ltr:mr-3 rtl:ml-3">
                                                        <img src="{{asset('build/assets/img/users/15.jpg')}}" class="avatar avatar-sm rounded-sm" alt="Image Description">
                                                        </div>
                                                        <div>
                                                            <p class="text-[0.813rem] mb-0 text-sm font-semibold">Atharva Simon.</p>
                                                            <div class="box-title text-gray-500 dark:text-white/70 text-xs mb-0">Correspondent
                                                                Professor</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box border !border-info">
                                                <a aria-label="anchor" href="javascript:void(0);" class="box-anchor"></a>
                                                <div class="box-body">
                                                    <div class="flex items-center">
                                                        <div class="ltr:mr-3 rtl:ml-3">
                                                            <img src="{{asset('build/assets/img/users/8.jpg')}}" class="avatar avatar-lg  rounded-sm" alt="Image Description">
                                                        </div>
                                                        <div>
                                                            <p class="text-[0.813rem] text-info mb-1 text-sm font-semibold">Alicia Keys.</p>
                                                            <div class="box-title text-xs mb-1">Department Of Commerce</div>
                                                            <div class="box-title text-gray-500 dark:text-white/70 text-xs mb-0">24 Years, Female
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-7 col-span-12">
                                            <div class="box">
                                                <a aria-label="anchor" href="javascript:void(0);" class="box-anchor"></a>
                                                <div class="grid grid-cols-12 gap-0">
                                                    <div class="col-span-12 md:col-span-8">
                                                        <div class="box-body">
                                                            <h6 class="text-base box-title mb-2 font-semibold">Fox is Beautiful ?</h6>
                                                            <p class="text-[0.813rem] text-sm mb-0">This is a wild animal with supporting tactics and are
                                                                very efficient at kill,they are very Dangerous.</p>
                                                            <p class="mb-0 text-[0.813rem]">
                                                                Fox lives mainly in forests and are well known for their hunting skills.
                                                            </p>
                                                        </div>
                                                        <div class="box-footer">
                                                            <p class="text-[0.813rem]"><small class="text-gray-500 dark:text-white/70">Last updated 3 mins
                                                                    ago</small></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-span-12 md:col-span-4">
                                                        <img src="{{asset('build/assets/img/media/21.jpg')}}" class="img-fluid ltr:rounded-r-sm rtl:rounded-l-sm h-full" alt="...">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-3 col-span-12">
                                    <div class="box">
                                        <a aria-label="anchor" href="javascript:void(0);" class="box-anchor"></a>
                                        <img src="{{asset('build/assets/img/media/25.jpg')}}" class="box-img-top rounded-t-sm" alt="...">
                                        <div class="box-body">
                                            <h6 class="text-base box-title font-semibold">Most tropical areas are suitable</h6>
                                            <p class="text-[0.813rem]"> If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                                anything embarrassing hidden in the middle of text.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-12 -->

                            <!-- Start::row-13 -->
                            <h6 class="text-base mb-4">Grid box:</h6>
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="col-span-12">
                                    <div class="grid md:grid-cols-4 grid-cols-1 gap-x-6">
                                        <div class="box">
                                            <img src="{{asset('build/assets/img/media/26.jpg')}}" class="box-img-top rounded-t-sm" alt="...">
                                            <div class="box-body">
                                                <h6 class="text-base box-title font-semibold">Morphology of a typical fruit.</h6>
                                                <p class="text-[0.813rem]"> If you are going to use a passage of Lorem Ipsum, you need to be sure there
                                                    isn't anything embarrassing hidden in the middle of text.</p>
                                            </div>
                                        </div>
                                        <div class="box">
                                            <img src="{{asset('build/assets/img/media/27.jpg')}}" class="box-img-top rounded-t-sm" alt="...">
                                            <div class="box-body">
                                                <h6 class="text-base box-title font-semibold">Research improves ability &amp; agility !</h6>
                                                <p class="text-[0.813rem]"> If you are going to use a passage of Lorem Ipsum, you need to be sure there
                                                    isn't anything embarrassing hidden in the middle of text.</p>
                                            </div>
                                        </div>
                                        <div class="box">
                                            <img src="{{asset('build/assets/img/media/28.jpg')}}" class="box-img-top rounded-t-sm" alt="...">
                                            <div class="box-body">
                                                <h6 class="text-base box-title font-semibold">Most tropical areas are suitable</h6>
                                                <p class="text-[0.813rem]"> If you are going to use a passage of Lorem Ipsum, you need to be sure there
                                                    isn't anything embarrassing hidden in the middle of text.</p>
                                            </div>
                                        </div>
                                        <div class="box">
                                            <img src="{{asset('build/assets/img/media/29.jpg')}}" class="box-img-top rounded-t-sm" alt="...">
                                            <div class="box-body">
                                                <h6 class="text-base box-title font-semibold">Are They seasonal fruits ?</h6>
                                                <p class="text-[0.813rem]"> If you are going to use a passage of Lorem Ipsum, you need to be sure there
                                                    isn't anything embarrassing hidden in the middle of text.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-13 -->

                        </div>
                        <!-- Start::main-content -->

                    </div>

@endsection

@section('scripts')

@endsection