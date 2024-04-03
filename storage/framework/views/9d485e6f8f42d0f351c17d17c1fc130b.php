<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

                    <div class="content">

                        <!-- Start::main-content -->
                        <div class="main-content">

                            <!-- Page Header -->
                            <div class="block justify-between page-header sm:flex">
                                <div>
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Projects Dashboard</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                    <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Dashboards
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                    </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        Projects Dashboard
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="col-span-12">
                                    <div class="grid grid-cols-12 gap-x-6">
                                    <div class="col-span-12 xxl:col-span-3">
                                        <div class="box">
                                        <div class="box-body">
                                            <div class="flex flex-wrap">
                                            <div class="flex-1">
                                                <p class="mb-2 font-semibold text-sm text-gray-500 dark:text-white/70">Total Projects</p>
                                                <h3 class="mb-2 font-semibold text-2xl text-gray-800 dark:text-white">1,293</h3>
                                                <p class="mb-0 text-xs"><span
                                                    class="badge bg-danger/20 text-danger py-1 rounded-full font-semibold ltr:mr-1 rtl:ml-1">1.35%</span><span
                                                    class="tx-muted font-semibold text-gray-500 dark:text-white/70">Since Last Month</span></p>
                                            </div>
                                            <div class="min-w-fit ltr:ml-2 rtl:mr-2">
                                                <div class="avatar bg-primary text-white rounded-sm p-2.5">
                                                <i class="ri-book-open-line leading-none text-2xl"></i>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="box">
                                        <div class="box-body">
                                            <div class="flex flex-wrap">
                                            <div class="flex-1">
                                                <p class="mb-2 font-semibold text-sm text-gray-500 dark:text-white/70">Completed</p>
                                                <h3 class="mb-2 font-semibold text-2xl text-gray-800 dark:text-white">853</h3>
                                                <p class="mb-0 text-xs"><span
                                                    class="badge bg-success/20 text-success py-1 rounded-full font-semibold ltr:mr-1 rtl:ml-1">1.25%</span><span
                                                    class="tx-muted font-semibold text-gray-500 dark:text-white/70">Since Last Month</span></p>
                                            </div>
                                            <div class="min-w-fit ltr:ml-2 rtl:mr-2">
                                                <div class="avatar bg-secondary text-white rounded-sm p-2.5">
                                                <i class="ri-task-line leading-none text-2xl"></i>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="box">
                                        <div class="box-body">
                                            <div class="flex flex-wrap">
                                            <div class="flex-1">
                                                <p class="mb-2 font-semibold text-sm text-gray-500 dark:text-white/70">In Complete</p>
                                                <h3 class="mb-2 font-semibold text-2xl text-gray-800 dark:text-white">625</h3>
                                                <p class="mb-0 text-xs"><span
                                                    class="badge bg-danger/20 text-danger py-1 rounded-full font-semibold ltr:mr-1 rtl:ml-1">2.23%</span><span
                                                    class="tx-muted font-semibold text-gray-500 dark:text-white/70">Since Last Month</span></p>
                                            </div>
                                            <div class="min-w-fit ltr:ml-2 rtl:mr-2">
                                                <div class="avatar bg-info text-white rounded-sm p-2.5">
                                                <i class="ri-file-warning-line leading-none text-2xl"></i>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 xxl:col-span-6">
                                        <div class="box">
                                        <div class="box-header">
                                            <div class="flex">
                                            <h5 class="box-title my-auto">Project Analysis</h5>
                                            <div class="hs-dropdown ti-dropdown block ltr:ml-auto rtl:mr-auto my-auto open">
                                                <button type="button"
                                                class="hs-dropdown-toggle ti-dropdown-toggle rounded-sm p-1 px-3 !border border-gray-200 text-gray-400 hover:text-gray-500 hover:bg-gray-200 hover:border-gray-200 focus:ring-gray-200  dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                                                This Week <i class="ti ti-chevron-down"></i></button>
                                                <div class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                <a class="ti-dropdown-item" href="javascript:void(0)">Today</a>
                                                <a class="ti-dropdown-item" href="javascript:void(0)">This Week</a>
                                                <a class="ti-dropdown-item" href="javascript:void(0)">This Month</a>
                                                <a class="ti-dropdown-item" href="javascript:void(0)">This Year</a>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div id="projectAnalysis"></div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 xxl:col-span-3">
                                        <div class="box projects-tracking-card overflow-hidden text-center">
                                        <div class="box-body text-center">
                                            <img src="<?php echo e(asset('build/assets/img/png-images/15.png')); ?>" alt="Project-img" class="h-40 w-40 mx-auto">
                                            <div>
                                            <h5 class="font-semibold text-gray-800 dark:text-white text-xl mb-1"> Welcome Back ...!</h5>
                                            <p class="text-xs text-gray-500 dark:text-white/70 mb-4">Start Working On the Assigned project....
                                            </p>
                                            <button type="button" class="ti-btn ti-btn-primary">Let's Start</button>
                                            </div>
                                        </div>
                                        <span class="shape-1 text-primary"><i class="ti ti-circle text-base font-bold"></i></span>
                                        <span class="shape-2 text-secondary"><i class="ti ti-triangle text-base font-bold"></i></span>
                                        <span class="shape-3 text-warning"><i class="ti ti-square text-base font-bold"></i></span>
                                        <span class="shape-4 text-info"><i class="ti ti-square-rotated text-base font-bold"></i></span>
                                        <span class="shape-5 text-success"><i class="ti ti-pentagon text-base font-bold"></i></span>
                                        <span class="shape-6 text-danger"><i class="ti ti-star text-base font-bold"></i></span>
                                        <span class="shape-7 text-pink-500"><i class="ti ti-hexagon text-base font-bold"></i></span>
                                        <span class="shape-8 text-teal-500"><i class="ti ti-octagon text-base font-bold"></i></span>
                                        <span class="shape-9 text-primary"><i class="ti ti-circle text-base font-bold"></i></span>
                                        <span class="shape-10 text-secondary"><i class="ti ti-triangle text-base font-bold"></i></span>
                                        <span class="shape-11 text-warning"><i class="ti ti-square text-base font-bold"></i></span>
                                        <span class="shape-12 text-info"><i class="ti ti-square-rotated text-base font-bold"></i></span>
                                        <span class="shape-13 text-success"><i class="ti ti-pentagon text-base font-bold"></i></span>
                                        </div>
                                        <div class="box !bg-primary !text-white">
                                        <div class="box-body">
                                            <div class="flex mb-5 relative">
                                            <div class="flex-1">
                                                <div class="flex items-center mb-1">
                                                <p class="mb-0 font-semibold text-base">Designing Landing Page</p>
                                                <span class="badge rounded-sm bg-gray-100 text-gray-500 py-1 ltr:ml-2 rtl:mr-2">High</span>
                                                </div>
                                                <p class="mb-0 font-semibold">
                                                <span class="opacity-50 ltr:mr-1 rtl:ml-1">Tasks:</span>
                                                <span class="opacity-60">112 / 369</span>
                                                </p>
                                            </div>
                                            <div class="ltr:ml-2 rtl:mr-2 min-w-fit">
                                                <div class="avatar bg-white/20 text-white ring-transparent p-3"><i
                                                    class="ri-codepen-line text-2xl leading-none"></i></div>
                                            </div>
                                            <a aria-label="anchor" href="<?php echo e(url('index7')); ?>" class="absolute h-full w-full top-0 left-0"></a>
                                            </div>
                                            <div class="flex justify-between items-center">
                                            <div class="flex -space-x-2 rtl:space-x-reverse">
                                                <img class="inline-block avatar avatar-xs rounded-full ring-0" src="<?php echo e(asset('build/assets/img/users/8.jpg')); ?>"
                                                alt="Image Description">
                                                <img class="inline-block avatar avatar-xs rounded-full ring-0" src="<?php echo e(asset('build/assets/img/users/4.jpg')); ?>"
                                                alt="Image Description">
                                                <img class="inline-block avatar avatar-xs rounded-full ring-0" src="<?php echo e(asset('build/assets/img/users/6.jpg')); ?>"
                                                alt="Image Description">
                                                <img class="inline-block avatar avatar-xs rounded-full ring-0" src="<?php echo e(asset('build/assets/img/users/7.jpg')); ?>"
                                                alt="Image Description">
                                                <span
                                                class="inline-flex items-center justify-center avatar avatar-xs rounded-full bg-white/20 border-2 border-white/20 ring-0">
                                                <span class="font-medium text-white leading-none">9+</span>
                                                </span>
                                            </div>
                                            <div class="ltr:ml-1 rtl:mr-1 min-w-fit">
                                                <a href="javascript:void(0);" class="ltr:mr-2 rtl:ml-2 opacity-60 text-sm text-white inline-flex"><i
                                                    class="ri-attachment-2 ltr:mr-1 rtl:ml-1 text-sm "></i>3</a>
                                                <a href="javascript:void(0);" class="opacity-60 text-sm text-white inline-flex"><i
                                                    class="ri-chat-3-line ltr:mr-1 rtl:ml-1 text-sm"></i>29</a>
                                            </div>
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
                                <div class="xxl:col-span-5 col-span-12 ">
                                    <div class="box">
                                    <div class="box-header flex">
                                        <h5 class="box-title my-auto">On Going Projects</h5>
                                        <button aria-label="button" type="button" class="ti-btn ti-btn-soft-primary ltr:mr-2 rtl:ml-2 py-1 m-0">View All</button>
                                    </div>
                                    <div class="box-body p-0">
                                        <div class="overflow-auto">
                                        <table class="ti-custom-table ti-custom-table-head">
                                            <thead>
                                            <tr>
                                                <th scope="col" class="text-center !p-[0.75rem]">Member</th>
                                                <th scope="col" class="!p-[0.75rem]">Role</th>
                                                <th scope="col" class="!p-[0.75rem]">Hours</th>
                                                <th scope="col" class="!p-[0.75rem]">Tasks</th>
                                                <th scope="col" class="!p-[0.75rem]">Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="leading-none !text-gray-800 dark:!text-white !p-[0.75rem]">
                                                <div class="flex">
                                                    <div class="ltr:mr-3 rtl:ml-3">
                                                    <span class="avatar avatar-sm"><img src="<?php echo e(asset('build/assets/img/users/2.jpg')); ?>" alt="img" class="rounded-full"></span>
                                                    </div>
                                                    <div class="flex-1">
                                                    <h6 class="font-semibold text-sm">Richard Dom</h6>
                                                    <span class="text-xs text-gray-500 dark:text-white/70">richarddom1116@demo.com</span>
                                                    </div>
                                                </div>
                                                </td>
                                                <td class="!p-[0.75rem]">Team Leader</td>
                                                <td class="!p-[0.75rem]">31h<span class="ltr:ml-2 rtl:mr-2 text-gray-500 dark:text-white/70 opacity-50">/ 36h</span></td>
                                                <td class="!p-[0.75rem]">
                                                <span class="text-sm font-semibold">143</span>
                                                </td>
                                                <td class="!p-[0.75rem] text-sm"><span class="badge leading-none bg-success/10 text-success rounded-sm py-1">Online</span></td>
                                            </tr>
                                            <tr>
                                                <td class="leading-none !text-gray-800 dark:!text-white !p-[0.75rem]">
                                                <div class="flex">
                                                    <div class="ltr:mr-3 rtl:ml-3">
                                                    <span class="avatar avatar-sm"><img src="<?php echo e(asset('build/assets/img/users/21.jpg')); ?>" alt="img" class="rounded-full"></span>
                                                    </div>
                                                    <div class="flex-1">
                                                    <h6 class="font-semibold text-sm">Jennifer Tab</h6>
                                                    <span class="text-xs text-gray-500 dark:text-white/70">jenny258@demo.com</span>
                                                    </div>
                                                </div>
                                                </td>
                                                <td class="!p-[0.75rem]">Project Manager</td>
                                                <td class="!p-[0.75rem]">11h<span class="ltr:ml-2 rtl:mr-2 text-gray-500 dark:text-white/70 opacity-50">/ 20h</span></td>
                                                <td class="!p-[0.75rem]">
                                                <span class="text-sm font-semibold">186</span>
                                                </td>
                                                <td class="!p-[0.75rem] text-sm"><span class="badge leading-none bg-success/10 text-success rounded-sm py-1">Online</span></td>
                                            </tr>
                                            <tr>
                                                <td class="leading-none !text-gray-800 dark:!text-white !p-[0.75rem]">
                                                <div class="flex">
                                                    <div class="ltr:mr-3 rtl:ml-3">
                                                    <span class="avatar avatar-sm"><img src="<?php echo e(asset('build/assets/img/users/3.jpg')); ?>" alt="img" class="rounded-full"></span>
                                                    </div>
                                                    <div class="flex-1">
                                                    <h6 class="font-semibold text-sm">Nikki Jey</h6>
                                                    <span class="text-xs text-gray-500 dark:text-white/70">nikkiJ141@demo.com</span>
                                                    </div>
                                                </div>
                                                </td>
                                                <td class="!p-[0.75rem]">UI Developer</td>
                                                <td class="!p-[0.75rem]">20h<span class="ltr:ml-2 rtl:mr-2 text-gray-500 dark:text-white/70 opacity-50">/ 22h</span></td>
                                                <td class="!p-[0.75rem]">
                                                <span class="text-sm font-semibold">652</span>
                                                </td>
                                                <td class="!p-[0.75rem] text-sm"><span class="badge leading-none bg-gray-200 text-gray-500 rounded-sm py-1">Offline</span></td>
                                            </tr>
                                            <tr>
                                                <td class="leading-none !text-gray-800 dark:!text-white !p-[0.75rem]">
                                                <div class="flex">
                                                    <div class="ltr:mr-3 rtl:ml-3">
                                                    <span class="avatar avatar-sm"><img src="<?php echo e(asset('build/assets/img/users/21.jpg')); ?>" alt="img" class="rounded-full"></span>
                                                    </div>
                                                    <div class="flex-1">
                                                    <h6 class="font-semibold text-sm">Arifa Zed</h6>
                                                    <span class="text-xs text-gray-500 dark:text-white/70">arifaZ@demo.com</span>
                                                    </div>
                                                </div>
                                                </td>
                                                <td class="!p-[0.75rem]">Web Developer</td>
                                                <td class="!p-[0.75rem]">83h<span class="ltr:ml-2 rtl:mr-2 text-gray-500 dark:text-white/70 opacity-50">/ 83h</span></td>
                                                <td class="!p-[0.75rem]">
                                                <span class="text-sm font-semibold">752</span>
                                                </td>
                                                <td class="!p-[0.75rem] text-sm"><span class="badge leading-none bg-success/10 text-success rounded-sm py-1">Online</span></td>
                                            </tr>
                                            <tr>
                                                <td class="leading-none !text-gray-800 dark:!text-white !p-[0.75rem]">
                                                <div class="flex">
                                                    <div class="ltr:mr-3 rtl:ml-3">
                                                    <span class="avatar avatar-sm"><img src="<?php echo e(asset('build/assets/img/users/4.jpg')); ?>" alt="img" class="rounded-full"></span>
                                                    </div>
                                                    <div class="flex-1">
                                                    <h6 class="font-semibold text-sm">Xiong Yu</h6>
                                                    <span class="text-xs text-gray-500 dark:text-white/70">xingzing444@demo.com</span>
                                                    </div>
                                                </div>
                                                </td>
                                                <td class="!p-[0.75rem]">Team Member</td>
                                                <td class="!p-[0.75rem]">51h<span class="ltr:ml-2 rtl:mr-2 text-gray-500 dark:text-white/70 opacity-50">/ 62h</span></td>
                                                <td class="!p-[0.75rem]">
                                                <span class="text-sm font-semibold">268</span>
                                                </td>
                                                <td class="!p-[0.75rem] text-sm"><span class="badge leading-none bg-gray-200 text-gray-500 rounded-sm py-1">Offline</span></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-4 col-span-12">
                                    <div class="box">
                                        <div class="box-header justify-between flex">
                                            <div class="box-title my-auto">
                                                Upcoming Events
                                            </div>
                                            <div>
                                                <button aria-label="button" type="button" class="ti-btn ti-btn-soft-primary ltr:mr-2 rtl:ml-2 py-1 m-0">View All</button>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="overflow-auto">
                                            <nav class="flex space-x-1 rtl:space-x-reverse justify-between mb-6" aria-label="Tabs" role="tablist">
                                                <button type="button" class="hs-tab-active:text-white hs-tab-active:bg-primary dark:hs-tab-active:bg-primary dark:hs-tab-active:text-white p-2 sm:p-3 w-full text-sm leading-none font-medium text-center bg-gray-100 text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:text-white/70 dark:hover:text-gray-300 active" id="mon-item-1" data-hs-tab="#mon-1" aria-controls="mon-1" role="tab">
                                                    <span class="block mb-1">09</span>
                                                    <span class="block mb-0 opacity-70 text-xs">Mon</span>
                                                </button>
                                                <button type="button" class="hs-tab-active:text-white hs-tab-active:bg-primary dark:hs-tab-active:bg-primary dark:hs-tab-active:text-white p-2 sm:p-3 w-full text-sm leading-none font-medium text-center bg-gray-100 text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:text-white/70 dark:hover:text-gray-300" id="tue-item-2" data-hs-tab="#tue-2" aria-controls="tue-2" role="tab">
                                                    <span class="block mb-1">10</span>
                                                    <span class="block mb-0 opacity-70 text-xs">Tue</span>
                                                </button>
                                                <button type="button" class="hs-tab-active:text-white hs-tab-active:bg-primary dark:hs-tab-active:bg-primary dark:hs-tab-active:text-white p-2 sm:p-3 w-full text-sm leading-none font-medium text-center bg-gray-100 text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:text-white/70 dark:hover:text-gray-300" id="wed-item-2" data-hs-tab="#wed-2" aria-controls="wed-2" role="tab">
                                                    <span class="block mb-1">11</span>
                                                    <span class="block mb-0 opacity-70 text-xs">Wed</span>
                                                </button>
                                                <button type="button" class="hs-tab-active:text-white hs-tab-active:bg-primary dark:hs-tab-active:bg-primary dark:hs-tab-active:text-white p-2 sm:p-3 w-full text-sm leading-none font-medium text-center bg-gray-100 text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:text-white/70 dark:hover:text-gray-300" id="thu-item-2" data-hs-tab="#thu-2" aria-controls="thu-2" role="tab">
                                                    <span class="block mb-1">12</span>
                                                    <span class="block mb-0 opacity-70 text-xs">Thu</span>
                                                </button>
                                                <button type="button" class="hs-tab-active:text-white hs-tab-active:bg-primary dark:hs-tab-active:bg-primary dark:hs-tab-active:text-white p-2 sm:p-3 w-full text-sm leading-none font-medium text-center bg-gray-100 text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:text-white/70 dark:hover:text-gray-300" id="fri-item-2" data-hs-tab="#fri-2" aria-controls="fri-2" role="tab">
                                                    <span class="block mb-1">13</span>
                                                    <span class="block mb-0 opacity-70 text-xs">Fri</span>
                                                </button>
                                                <button type="button" class="hidden sm:block hs-tab-active:text-white hs-tab-active:bg-primary dark:hs-tab-active:bg-primary dark:hs-tab-active:text-white p-2 sm:p-3 w-full text-sm leading-none font-medium text-center bg-gray-100 text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:text-white/70 dark:hover:text-gray-300" id="sat-item-2" data-hs-tab="#sat-2" aria-controls="sat-2" role="tab">
                                                    <span class="block mb-1">14</span>
                                                    <span class="block mb-0 opacity-70 text-xs">Sat</span>
                                                </button>
                                                <button type="button" class="hidden sm:block hs-tab-active:text-white hs-tab-active:bg-primary dark:hs-tab-active:bg-primary dark:hs-tab-active:text-white p-2 sm:p-3 w-full text-sm leading-none font-medium text-center bg-gray-100 text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:text-white/70 dark:hover:text-gray-300" id="sun-item-2" data-hs-tab="#sun-2" aria-controls="sun-2" role="tab">
                                                    <span class="block mb-1">15</span>
                                                    <span class="block mb-0 opacity-70 text-xs">Sun</span>
                                                </button>
                                            </nav>
                                            <div class="pt-2">
                                                <div id="mon-1" class="" role="tabpanel" aria-labelledby="mon-item-1">
                                                    <ul class="list-unstyled mb-0 upcoming-events-list">
                                                        <li class="ti-list-group border-0 p-0 w-full">
                                                            <div class="sm:flex justify-between w-full">
                                                                <div class="flex-auto">
                                                                    <p class="mb-0 text-sm">Meeting with client</p>
                                                                    <p class="mb-0 text-gray-500 dark:text-white/70">Video Conference</p>
                                                                </div>
                                                                <div>
                                                                    <span class="text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>9:00am - 10:00am</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ti-list-group border-0 p-0 w-full">
                                                            <div class="sm:flex justify-between w-full">
                                                                <div class="flex-auto">
                                                                    <p class="mb-0 text-sm">Lunch with team members</p>
                                                                    <p class="mb-0 text-gray-500 dark:text-white/70">Dolores Ait Labore Sit</p>
                                                                </div>
                                                                <div>
                                                                    <span class="text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>12:00pm - 12:45am</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ti-list-group border-0 p-0 w-full">
                                                            <div class="sm:flex justify-between w-full">
                                                                <div class="flex-auto">
                                                                    <p class="mb-0 text-sm">General board meeting</p>
                                                                    <p class="mb-0 text-gray-500 dark:text-white/70">Golden PArk</p>
                                                                </div>
                                                                <div>
                                                                    <span class="text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>4:00pm - 5:30pm</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ti-list-group border-0 p-0 w-full">
                                                            <div class="sm:flex justify-between w-full">
                                                                <div class="flex-auto">
                                                                    <p class="mb-0 text-sm">Create New Registration Page</p>
                                                                    <p class="mb-0 text-gray-500 dark:text-white/70">2UA Project</p>
                                                                </div>
                                                                <div>
                                                                    <span class="text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>5:00pm - 5:45pm</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div id="tue-2" class="hidden" role="tabpanel" aria-labelledby="tue-item-2">
                                                    <ul class="list-unstyled mb-0 upcoming-events-list">
                                                        <li class="ti-list-group border-0 p-0 w-full">
                                                            <div class="sm:flex justify-between w-full">
                                                                <div class="flex-auto">
                                                                    <p class="mb-0 text-sm">Meeting with client</p>
                                                                    <p class="mb-0 text-gray-500 dark:text-white/70">Video Conference</p>
                                                                </div>
                                                                <div>
                                                                    <span class="text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>9:00am - 10:00am</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ti-list-group border-0 p-0 w-full">
                                                            <div class="sm:flex justify-between w-full">
                                                                <div class="flex-auto">
                                                                    <p class="mb-0 text-sm">Lunch with team members</p>
                                                                    <p class="mb-0 text-gray-500 dark:text-white/70">Dolores Ait Labore Sit</p>
                                                                </div>
                                                                <div>
                                                                    <span class="text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>12:00pm - 12:45am</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ti-list-group border-0 p-0 w-full">
                                                            <div class="sm:flex justify-between w-full">
                                                                <div class="flex-auto">
                                                                    <p class="mb-0 text-sm">General board meeting</p>
                                                                    <p class="mb-0 text-gray-500 dark:text-white/70">Golden PArk</p>
                                                                </div>
                                                                <div>
                                                                    <span class="text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>4:00pm - 5:30pm</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ti-list-group border-0 p-0 w-full">
                                                            <div class="sm:flex justify-between w-full">
                                                                <div class="flex-auto">
                                                                    <p class="mb-0 text-sm">Create New Registration Page</p>
                                                                    <p class="mb-0 text-gray-500 dark:text-white/70">2UA Project</p>
                                                                </div>
                                                                <div>
                                                                    <span class="text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>5:00pm - 5:45pm</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div id="wed-2" class="hidden" role="tabpanel" aria-labelledby="wed-item-2">
                                                    <ul class="list-unstyled mb-0 upcoming-events-list">
                                                        <li class="ti-list-group border-0 p-0 w-full">
                                                            <div class="sm:flex justify-between w-full">
                                                                <div class="flex-auto">
                                                                    <p class="mb-0 text-sm">Meeting with client</p>
                                                                    <p class="mb-0 text-gray-500 dark:text-white/70">Video Conference</p>
                                                                </div>
                                                                <div>
                                                                    <span class="text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>9:00am - 10:00am</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ti-list-group border-0 p-0 w-full">
                                                            <div class="sm:flex justify-between w-full">
                                                                <div class="flex-auto">
                                                                    <p class="mb-0 text-sm">Lunch with team members</p>
                                                                    <p class="mb-0 text-gray-500 dark:text-white/70">Dolores Ait Labore Sit</p>
                                                                </div>
                                                                <div>
                                                                    <span class="text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>12:00pm - 12:45am</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ti-list-group border-0 p-0 w-full">
                                                            <div class="sm:flex justify-between w-full">
                                                                <div class="flex-auto">
                                                                    <p class="mb-0 text-sm">General board meeting</p>
                                                                    <p class="mb-0 text-gray-500 dark:text-white/70">Golden PArk</p>
                                                                </div>
                                                                <div>
                                                                    <span class="text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>4:00pm - 5:30pm</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ti-list-group border-0 p-0 w-full">
                                                            <div class="sm:flex justify-between w-full">
                                                                <div class="flex-auto">
                                                                    <p class="mb-0 text-sm">Create New Registration Page</p>
                                                                    <p class="mb-0 text-gray-500 dark:text-white/70">2UA Project</p>
                                                                </div>
                                                                <div>
                                                                    <span class="text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>5:00pm - 5:45pm</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div id="thu-2" class="hidden" role="tabpanel" aria-labelledby="thu-item-2">
                                                    <ul class="list-unstyled mb-0 upcoming-events-list">
                                                        <li class="ti-list-group border-0 p-0 w-full">
                                                            <div class="sm:flex justify-between w-full">
                                                                <div class="flex-auto">
                                                                    <p class="mb-0 text-sm">Meeting with client</p>
                                                                    <p class="mb-0 text-gray-500 dark:text-white/70">Video Conference</p>
                                                                </div>
                                                                <div>
                                                                    <span class="text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>9:00am - 10:00am</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ti-list-group border-0 p-0 w-full">
                                                            <div class="sm:flex justify-between w-full">
                                                                <div class="flex-auto">
                                                                    <p class="mb-0 text-sm">Lunch with team members</p>
                                                                    <p class="mb-0 text-gray-500 dark:text-white/70">Dolores Ait Labore Sit</p>
                                                                </div>
                                                                <div>
                                                                    <span class="text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>12:00pm - 12:45am</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ti-list-group border-0 p-0 w-full">
                                                            <div class="sm:flex justify-between w-full">
                                                                <div class="flex-auto">
                                                                    <p class="mb-0 text-sm">General board meeting</p>
                                                                    <p class="mb-0 text-gray-500 dark:text-white/70">Golden PArk</p>
                                                                </div>
                                                                <div>
                                                                    <span class="text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>4:00pm - 5:30pm</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ti-list-group border-0 p-0 w-full">
                                                            <div class="sm:flex justify-between w-full">
                                                                <div class="flex-auto">
                                                                    <p class="mb-0 text-sm">Create New Registration Page</p>
                                                                    <p class="mb-0 text-gray-500 dark:text-white/70">2UA Project</p>
                                                                </div>
                                                                <div>
                                                                    <span class="text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>5:00pm - 5:45pm</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div id="fri-2" class="hidden" role="tabpanel" aria-labelledby="fri-item-2">
                                                    <ul class="list-unstyled mb-0 upcoming-events-list">
                                                        <li class="ti-list-group border-0 p-0 w-full">
                                                            <div class="sm:flex justify-between w-full">
                                                                <div class="flex-auto">
                                                                    <p class="mb-0 text-sm">Meeting with client</p>
                                                                    <p class="mb-0 text-gray-500 dark:text-white/70">Video Conference</p>
                                                                </div>
                                                                <div>
                                                                    <span class="text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>9:00am - 10:00am</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ti-list-group border-0 p-0 w-full">
                                                            <div class="sm:flex justify-between w-full">
                                                                <div class="flex-auto">
                                                                    <p class="mb-0 text-sm">Lunch with team members</p>
                                                                    <p class="mb-0 text-gray-500 dark:text-white/70">Dolores Ait Labore Sit</p>
                                                                </div>
                                                                <div>
                                                                    <span class="text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>12:00pm - 12:45am</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ti-list-group border-0 p-0 w-full">
                                                            <div class="sm:flex justify-between w-full">
                                                                <div class="flex-auto">
                                                                    <p class="mb-0 text-sm">General board meeting</p>
                                                                    <p class="mb-0 text-gray-500 dark:text-white/70">Golden PArk</p>
                                                                </div>
                                                                <div>
                                                                    <span class="text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>4:00pm - 5:30pm</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ti-list-group border-0 p-0 w-full">
                                                            <div class="sm:flex justify-between w-full">
                                                                <div class="flex-auto">
                                                                    <p class="mb-0 text-sm">Create New Registration Page</p>
                                                                    <p class="mb-0 text-gray-500 dark:text-white/70">2UA Project</p>
                                                                </div>
                                                                <div>
                                                                    <span class="text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>5:00pm - 5:45pm</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div id="sat-2" class="hidden" role="tabpanel" aria-labelledby="sat-item-2">
                                                    <ul class="list-unstyled mb-0 upcoming-events-list">
                                                        <li class="ti-list-group border-0 p-0 w-full">
                                                            <div class="sm:flex justify-between w-full">
                                                                <div class="flex-auto">
                                                                    <p class="mb-0 text-sm">Meeting with client</p>
                                                                    <p class="mb-0 text-gray-500 dark:text-white/70">Video Conference</p>
                                                                </div>
                                                                <div>
                                                                    <span class="text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>9:00am - 10:00am</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ti-list-group border-0 p-0 w-full">
                                                            <div class="sm:flex justify-between w-full">
                                                                <div class="flex-auto">
                                                                    <p class="mb-0 text-sm">Lunch with team members</p>
                                                                    <p class="mb-0 text-gray-500 dark:text-white/70">Dolores Ait Labore Sit</p>
                                                                </div>
                                                                <div>
                                                                    <span class="text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>12:00pm - 12:45am</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ti-list-group border-0 p-0 w-full">
                                                            <div class="sm:flex justify-between w-full">
                                                                <div class="flex-auto">
                                                                    <p class="mb-0 text-sm">General board meeting</p>
                                                                    <p class="mb-0 text-gray-500 dark:text-white/70">Golden PArk</p>
                                                                </div>
                                                                <div>
                                                                    <span class="text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>4:00pm - 5:30pm</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ti-list-group border-0 p-0 w-full">
                                                            <div class="sm:flex justify-between w-full">
                                                                <div class="flex-auto">
                                                                    <p class="mb-0 text-sm">Create New Registration Page</p>
                                                                    <p class="mb-0 text-gray-500 dark:text-white/70">2UA Project</p>
                                                                </div>
                                                                <div>
                                                                    <span class="text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>5:00pm - 5:45pm</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div id="sun-2" class="hidden" role="tabpanel" aria-labelledby="sun-item-2">
                                                    <ul class="list-unstyled mb-0 upcoming-events-list">
                                                        <li class="ti-list-group border-0 p-0 w-full">
                                                            <div class="sm:flex justify-between w-full">
                                                                <div class="flex-auto">
                                                                    <p class="mb-0 text-sm">Meeting with client</p>
                                                                    <p class="mb-0 text-gray-500 dark:text-white/70">Video Conference</p>
                                                                </div>
                                                                <div>
                                                                    <span class="text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>9:00am - 10:00am</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ti-list-group border-0 p-0 w-full">
                                                            <div class="sm:flex justify-between w-full">
                                                                <div class="flex-auto">
                                                                    <p class="mb-0 text-sm">Lunch with team members</p>
                                                                    <p class="mb-0 text-gray-500 dark:text-white/70">Dolores Ait Labore Sit</p>
                                                                </div>
                                                                <div>
                                                                    <span class="text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>12:00pm - 12:45am</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ti-list-group border-0 p-0 w-full">
                                                            <div class="sm:flex justify-between w-full">
                                                                <div class="flex-auto">
                                                                    <p class="mb-0 text-sm">General board meeting</p>
                                                                    <p class="mb-0 text-gray-500 dark:text-white/70">Golden PArk</p>
                                                                </div>
                                                                <div>
                                                                    <span class="text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>4:00pm - 5:30pm</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ti-list-group border-0 p-0 w-full">
                                                            <div class="sm:flex justify-between w-full">
                                                                <div class="flex-auto">
                                                                    <p class="mb-0 text-sm">Create New Registration Page</p>
                                                                    <p class="mb-0 text-gray-500 dark:text-white/70">2UA Project</p>
                                                                </div>
                                                                <div>
                                                                    <span class="text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>5:00pm - 5:45pm</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-3 col-span-12">
                                    <div class="box">
                                    <div class="box-header">
                                        <div class="flex justify-between">
                                        <h5 class="box-title my-auto">On Going Tasks</h5>
                                        <div class="hs-dropdown ti-dropdown block ltr:ml-auto rtl:mr-auto my-auto">
                                            <button type="button"
                                            class="hs-dropdown-toggle ti-dropdown-toggle rounded-sm p-1 px-3 !border border-gray-200 text-gray-400 hover:text-gray-500 hover:bg-gray-200 hover:border-gray-200 focus:ring-gray-200  dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                                            Today <i class="ti ti-chevron-down"></i></button>
                                            <div class="hs-dropdown-menu ti-dropdown-menu hidden">
                                            <a class="ti-dropdown-item" href="javascript:void(0)">Today</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0)">This Week</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0)">This Month</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0)">This Year</a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <ul class="list-unstyled mb-0">
                                            <li class="ti-list-group mb-5 border-0 p-0 w-full">
                                            <div class="flex w-full">
                                                                        <div class="ltr:mr-3 rtl:ml-3">
                                                                            <div class="flex">
                                                    <input type="checkbox" class="ti-form-checkbox mt-0.5" id="hs-default-checkbox">
                                                </div>
                                                                        </div>
                                                                        <div class="flex-1">
                                                                            <div class="flex items-center justify-between mb-1">
                                                    <h5 class="mb-1 text-sm font-semibold text-gray-800 dark:text-white">Designing a landing page</h5>
                                                    <div class="hs-dropdown ti-dropdown block ltr:ml-auto rtl:mr-auto my-auto">
                                                    <button type="button" aria-label="button" class="shadow-none hs-dropdown-toggle ti-dropdown-toggle rounded-sm p-0 bg-transparent border-0 text-gray-500 dark:bg-transparent">
                                                        <i class="text-sm leading-none ti ti-dots-vertical"></i> </button>
                                                    <div class="hs-dropdown-menu ti-dropdown-menu hidden" >
                                                        <a class="ti-dropdown-item" href="javascript:void(0)">Action</a>
                                                        <a class="ti-dropdown-item" href="javascript:void(0)">Another Action</a>
                                                        <a class="ti-dropdown-item" href="javascript:void(0)">Something Else Here</a>
                                                    </div>
                                                    </div>
                                                </div>
                                                                            <div class="flex items-center justify-between">
                                                                                <div class="flex -space-x-2 rtl:space-x-reverse">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/8.jpg')); ?>" alt="Image Description">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/4.jpg')); ?>" alt="Image Description">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/6.jpg')); ?>" alt="Image Description">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/7.jpg')); ?>" alt="Image Description">
                                                    </div>
                                                                                <span class="text-gray-500 dark:text-white/70 flex text-xs"><i class="ri-time-line ltr:mr-1 rtl:ml-1 my-auto "></i>10-04-23</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                            </li>
                                            <li class="ti-list-group mb-5 border-0 p-0 w-full">
                                            <div class="flex w-full">
                                                                        <div class="ltr:mr-3 rtl:ml-3">
                                                                            <div class="flex">
                                                    <input type="checkbox" class="ti-form-checkbox mt-0.5" id="hs-default-checkbox2">
                                                </div>
                                                                        </div>
                                                                        <div class="flex-1">
                                                                            <div class="flex items-center justify-between mb-1">
                                                    <h5 class="mb-1 text-sm font-semibold text-gray-800 dark:text-white">Fixing Responsive Issues</h5>
                                                    <div class="hs-dropdown ti-dropdown block ltr:ml-auto rtl:mr-auto my-auto">
                                                    <button type="button" aria-label="button" class="shadow-none hs-dropdown-toggle ti-dropdown-toggle rounded-sm p-0 bg-transparent border-0 text-gray-500 dark:bg-transparent">
                                                        <i class="text-sm leading-none ti ti-dots-vertical"></i> </button>
                                                    <div class="hs-dropdown-menu ti-dropdown-menu hidden" >
                                                        <a class="ti-dropdown-item" href="javascript:void(0)">Action</a>
                                                        <a class="ti-dropdown-item" href="javascript:void(0)">Another Action</a>
                                                        <a class="ti-dropdown-item" href="javascript:void(0)">Something Else Here</a>
                                                    </div>
                                                    </div>
                                                </div>
                                                                            <div class="flex items-center justify-between">
                                                                                <div class="flex -space-x-2 rtl:space-x-reverse">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/8.jpg')); ?>" alt="Image Description">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/4.jpg')); ?>" alt="Image Description">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/6.jpg')); ?>" alt="Image Description">
                                                    <span class="inline-flex items-center justify-center avatar w-6 h-6  rounded-full bg-gray-100 border-2 border-gray-200 dark:bg-black/20 dark:border-white/10">
                                                        <span class="font-medium text-gray-500 leading-none dark:text-white/70">9+</span>
                                                    </span>
                                                    </div>
                                                                                <span class="text-gray-500 dark:text-white/70 flex text-xs"><i class="ri-time-line ltr:mr-1 rtl:ml-1 my-auto "></i>10-04-23</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                            </li>
                                            <li class="ti-list-group mb-5 border-0 p-0 w-full">
                                            <div class="flex w-full">
                                                                        <div class="ltr:mr-3 rtl:ml-3">
                                                                            <div class="flex">
                                                    <input type="checkbox" class="ti-form-checkbox mt-0.5" id="hs-default-checkbox3">
                                                </div>
                                                                        </div>
                                                                        <div class="flex-1">
                                                                            <div class="flex items-center justify-between mb-1">
                                                    <h5 class="mb-1 text-sm font-semibold text-gray-800 dark:text-white">Fixing Bugs</h5>
                                                    <div class="hs-dropdown ti-dropdown block ltr:ml-auto rtl:mr-auto my-auto">
                                                    <button type="button" aria-label="button" class="shadow-none hs-dropdown-toggle ti-dropdown-toggle rounded-sm p-0 bg-transparent border-0 text-gray-500 dark:bg-transparent">
                                                        <i class="text-sm leading-none ti ti-dots-vertical"></i> </button>
                                                    <div class="hs-dropdown-menu ti-dropdown-menu hidden" >
                                                        <a class="ti-dropdown-item" href="javascript:void(0)">Action</a>
                                                        <a class="ti-dropdown-item" href="javascript:void(0)">Another Action</a>
                                                        <a class="ti-dropdown-item" href="javascript:void(0)">Something Else Here</a>
                                                    </div>
                                                    </div>
                                                </div>
                                                                            <div class="flex items-center justify-between">
                                                                                <div class="flex -space-x-2 rtl:space-x-reverse">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/8.jpg')); ?>" alt="Image Description">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/4.jpg')); ?>" alt="Image Description">
                                                    </div>
                                                                                <span class="text-gray-500 dark:text-white/70 flex text-xs"><i class="ri-time-line ltr:mr-1 rtl:ml-1 my-auto "></i>10-04-23</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                            </li>
                                            <li class="ti-list-group mb-5 border-0 p-0 w-full">
                                            <div class="flex w-full">
                                                                        <div class="ltr:mr-3 rtl:ml-3">
                                                                            <div class="flex">
                                                    <input type="checkbox" class="ti-form-checkbox mt-0.5" id="hs-default-checkbox4">
                                                </div>
                                                                        </div>
                                                                        <div class="flex-1">
                                                                            <div class="flex items-center justify-between mb-1">
                                                    <h5 class="mb-1 text-sm font-semibold text-gray-800 dark:text-white">Fixing Javascript Issues</h5>
                                                    <div class="hs-dropdown ti-dropdown block ltr:ml-auto rtl:mr-auto my-auto">
                                                    <button type="button" aria-label="button" class="shadow-none hs-dropdown-toggle ti-dropdown-toggle rounded-sm p-0 bg-transparent border-0 text-gray-500 dark:bg-transparent">
                                                        <i class="text-sm leading-none ti ti-dots-vertical"></i> </button>
                                                    <div class="hs-dropdown-menu ti-dropdown-menu hidden" >
                                                        <a class="ti-dropdown-item" href="javascript:void(0)">Action</a>
                                                        <a class="ti-dropdown-item" href="javascript:void(0)">Another Action</a>
                                                        <a class="ti-dropdown-item" href="javascript:void(0)">Something Else Here</a>
                                                    </div>
                                                    </div>
                                                </div>
                                                                            <div class="flex items-center justify-between">
                                                                                <div class="flex -space-x-2 rtl:space-x-reverse">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/8.jpg')); ?>" alt="Image Description">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/4.jpg')); ?>" alt="Image Description">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/21.jpg')); ?>" alt="Image Description">
                                                    </div>
                                                                                <span class="text-gray-500 dark:text-white/70 flex text-xs"><i class="ri-time-line ltr:mr-1 rtl:ml-1 my-auto "></i>10-04-23</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                            </li>
                                            <li class="ti-list-group mb-0 border-0 p-0 w-full">
                                            <div class="flex w-full">
                                                                        <div class="ltr:mr-3 rtl:ml-3">
                                                                            <div class="flex">
                                                    <input type="checkbox" class="ti-form-checkbox mt-0.5" id="hs-default-checkbox5">
                                                </div>
                                                                        </div>
                                                                        <div class="flex-1">
                                                                            <div class="flex items-center justify-between mb-1">
                                                    <h5 class="mb-1 text-sm font-semibold text-gray-800 dark:text-white">Adding New Pages</h5>
                                                    <div class="hs-dropdown ti-dropdown block ltr:ml-auto rtl:mr-auto my-auto">
                                                    <button type="button" aria-label="button" class="shadow-none hs-dropdown-toggle ti-dropdown-toggle rounded-sm p-0 bg-transparent border-0 text-gray-500 dark:bg-transparent">
                                                        <i class="text-sm leading-none ti ti-dots-vertical"></i> </button>
                                                    <div class="hs-dropdown-menu ti-dropdown-menu hidden" >
                                                        <a class="ti-dropdown-item" href="javascript:void(0)">Action</a>
                                                        <a class="ti-dropdown-item" href="javascript:void(0)">Another Action</a>
                                                        <a class="ti-dropdown-item" href="javascript:void(0)">Something Else Here</a>
                                                    </div>
                                                    </div>
                                                </div>
                                                                            <div class="flex items-center justify-between">
                                                                                <div class="flex -space-x-2 rtl:space-x-reverse">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/8.jpg')); ?>" alt="Image Description">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/4.jpg')); ?>" alt="Image Description">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/21.jpg')); ?>" alt="Image Description">
                                                    </div>
                                                                                <span class="text-gray-500 dark:text-white/70 flex text-xs"><i class="ri-time-line ltr:mr-1 rtl:ml-1 my-auto "></i>10-04-23</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                            </li>
                                        </ul>
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
                                        <div class="flex">
                                        <h5 class="box-title my-auto">Project Summary</h5>
                                        <div class="hs-dropdown ti-dropdown block ltr:ml-auto rtl:mr-auto my-auto">
                                            <button type="button"
                                            class="hs-dropdown-toggle ti-dropdown-toggle rounded-sm p-1 px-3 !border border-gray-200 text-gray-400 hover:text-gray-500 hover:bg-gray-200 hover:border-gray-200 focus:ring-gray-200  dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                                            View All <i class="ti ti-chevron-down"></i></button>
                                            <div class="hs-dropdown-menu ti-dropdown-menu hidden">
                                            <a class="ti-dropdown-item" href="javascript:void(0)">Download</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0)">Import</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0)">Export</a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto">
                                        <table class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                            <thead class="bg-gray-50 dark:bg-black/20">
                                            <tr class="">
                                                <th scope="col" class="dark:text-white/80">S.no</th>
                                                <th scope="col" class="dark:text-white/80">Project Title</th>
                                                <th scope="col" class="dark:text-white/80">Assigned Team</th>
                                                <th scope="col" class="dark:text-white/80">Tasks</th>
                                                <th scope="col" class="dark:text-white/80">Progress</th>
                                                <th scope="col" class="dark:text-white/80">Status</th>
                                                <th scope="col" class="dark:text-white/80">Due Date</th>
                                                <th scope="col" class="dark:text-white/80">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody class="">
                                            <tr class="">
                                                <td>1</td>
                                                <td>
                                                <span class="text-sm text-gray-800 dark:text-white font-semibold">Home Page</span>
                                                </td>
                                                <td>
                                                <div class="flex -space-x-2 rtl:space-x-reverse">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/8.jpg')); ?>" alt="Image Description">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/4.jpg')); ?>" alt="Image Description">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/6.jpg')); ?>" alt="Image Description">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/7.jpg')); ?>" alt="Image Description">
                                                </div>
                                                </td>
                                                <td>110<span class="ltr:ml-1 rtl:mr-1 text-gray-500 dark:text-white/70 opacity-70">/ 180</span></td>
                                                <td>
                                                <div class="flex items-center">
                                                    <div class="w-2/3">
                                                    <div class="ti-main-progress h-2 bg-gray-200 dark:bg-black/20">
                                                        <div class="ti-main-progress-bar bg-primary text-xs text-white text-center" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    </div>
                                                    <div class="ltr:ml-2 rtl:mr-2">25%</div>
                                                </div>
                                                </td>
                                                <td><span
                                                    class="truncate whitespace-nowrap inline-block py-1 px-3 rounded-full text-xs font-medium bg-primary/10 text-primary/80">In Progress</span>
                                                </td>
                                                <td>14-04-2023</td>
                                                <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <a href="javascript:void(0);"
                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                    <i class="ti ti-eye"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        View
                                                    </span>
                                                    </a>
                                                </div>
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <a href="javascript:void(0);"
                                                    class="customer-edit m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                    <i class="ti ti-pencil"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        Edit
                                                    </span>
                                                    </a>
                                                </div>
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <a href="javascript:void(0);"
                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                    <i class="ti ti-trash"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        Delete
                                                    </span>
                                                    </a>
                                                </div>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>2</td>
                                                <td>
                                                <span class="text-sm text-gray-800 dark:text-white font-semibold">Landing Design</span>
                                                </td>
                                                <td>
                                                <div class="flex -space-x-2 rtl:space-x-reverse">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/8.jpg')); ?>" alt="Image Description">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/4.jpg')); ?>" alt="Image Description">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/6.jpg')); ?>" alt="Image Description">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/7.jpg')); ?>" alt="Image Description">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/19.jpg')); ?>" alt="Image Description">
                                                </div>
                                                </td>
                                                <td>95<span class="ltr:ml-1 rtl:mr-1 text-gray-500 dark:text-white/70 opacity-70">/ 100</span></td>
                                                <td>
                                                <div class="flex items-center">
                                                    <div class="w-2/3">
                                                    <div class="ti-main-progress h-2 bg-gray-200 dark:bg-black/20">
                                                        <div class="ti-main-progress-bar bg-primary text-xs text-white text-center" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    </div>
                                                    <div class="ltr:ml-2 rtl:mr-2">90%</div>
                                                </div>
                                                </td>
                                                <td><span
                                                    class="truncate whitespace-nowrap inline-block py-1 px-3 rounded-full text-xs font-medium bg-primary/10 text-primary/80">In Progress</span>
                                                </td>
                                                <td>20-04-2023</td>
                                                <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <a href="javascript:void(0);"
                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                    <i class="ti ti-eye"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        View
                                                    </span>
                                                    </a>
                                                </div>
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <a href="javascript:void(0);"
                                                    class="customer-edit m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                    <i class="ti ti-pencil"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        Edit
                                                    </span>
                                                    </a>
                                                </div>
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <a href="javascript:void(0);"
                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                    <i class="ti ti-trash"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        Delete
                                                    </span>
                                                    </a>
                                                </div>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>3</td>
                                                <td>
                                                <span class="text-sm text-gray-800 dark:text-white font-semibold">New Template Design</span>
                                                </td>
                                                <td>
                                                <div class="flex -space-x-2 rtl:space-x-reverse">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/8.jpg')); ?>" alt="Image Description">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/4.jpg')); ?>" alt="Image Description">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/16.jpg')); ?>" alt="Image Description">
                                                </div>
                                                </td>
                                                <td>0<span class="ltr:ml-1 rtl:mr-1 text-gray-500 dark:text-white/70 opacity-70">/ 50</span></td>
                                                <td>
                                                <div class="flex items-center">
                                                    <div class="w-2/3">
                                                    <div class="ti-main-progress h-2 bg-gray-200 dark:bg-black/20">
                                                        <div class="ti-main-progress-bar bg-primary text-xs text-white text-center" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    </div>
                                                    <div class="ltr:ml-2 rtl:mr-2">0%</div>
                                                </div>
                                                </td>
                                                <td><span
                                                    class="truncate whitespace-nowrap inline-block py-1 px-3 rounded-full text-xs font-medium bg-warning/10 text-warning/80">Pending</span>
                                                </td>
                                                <td>29-04-2023</td>
                                                <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <a href="javascript:void(0);"
                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                    <i class="ti ti-eye"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        View
                                                    </span>
                                                    </a>
                                                </div>
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <a href="javascript:void(0);"
                                                    class="customer-edit m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                    <i class="ti ti-pencil"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        Edit
                                                    </span>
                                                    </a>
                                                </div>
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <a href="javascript:void(0);"
                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                    <i class="ti ti-trash"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        Delete
                                                    </span>
                                                    </a>
                                                </div>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>4</td>
                                                <td>
                                                <span class="text-sm text-gray-800 dark:text-white font-semibold">HR Management Template Design</span>
                                                </td>
                                                <td>
                                                <div class="flex -space-x-2 rtl:space-x-reverse">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/8.jpg')); ?>" alt="Image Description">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/14.jpg')); ?>" alt="Image Description">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/4.jpg')); ?>" alt="Image Description">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/16.jpg')); ?>" alt="Image Description">
                                                    <span class="inline-flex items-center justify-center avatar w-6 h-6  rounded-full bg-gray-100 border-2 border-gray-200 dark:bg-black/20 dark:border-white/10">
                                                    <span class="font-medium text-gray-500 leading-none dark:text-white/70">2+</span>
                                                    </span>
                                                </div>
                                                </td>
                                                <td>30<span class="ltr:ml-1 rtl:mr-1 text-gray-500 dark:text-white/70 opacity-70">/ 70</span></td>
                                                <td>
                                                <div class="flex items-center">
                                                    <div class="w-2/3">
                                                    <div class="ti-main-progress h-2 bg-gray-200 dark:bg-black/20">
                                                        <div class="ti-main-progress-bar bg-primary text-xs text-white text-center" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    </div>
                                                    <div class="ltr:ml-2 rtl:mr-2">40%</div>
                                                </div>
                                                </td>
                                                <td><span
                                                    class="truncate whitespace-nowrap inline-block py-1 px-3 rounded-full text-xs font-medium bg-primary/10 text-primary/80">In Progress</span>
                                                </td>
                                                <td>18-04-2023</td>
                                                <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <a href="javascript:void(0);"
                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                    <i class="ti ti-eye"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        View
                                                    </span>
                                                    </a>
                                                </div>
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <a href="javascript:void(0);"
                                                    class="customer-edit m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                    <i class="ti ti-pencil"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        Edit
                                                    </span>
                                                    </a>
                                                </div>
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <a href="javascript:void(0);"
                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                    <i class="ti ti-trash"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        Delete
                                                    </span>
                                                    </a>
                                                </div>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>5</td>
                                                <td>
                                                <span class="text-sm text-gray-800 dark:text-white font-semibold">Designing New Template</span>
                                                </td>
                                                <td>
                                                <div class="flex -space-x-2 rtl:space-x-reverse">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/8.jpg')); ?>" alt="Image Description">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/14.jpg')); ?>" alt="Image Description">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/4.jpg')); ?>" alt="Image Description">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/16.jpg')); ?>" alt="Image Description">
                                                    <span class="inline-flex items-center justify-center avatar w-6 h-6  rounded-full bg-gray-100 border-2 border-gray-200 dark:bg-black/20 dark:border-white/10">
                                                    <span class="font-medium text-gray-500 leading-none dark:text-white/70">3+</span>
                                                    </span>
                                                </div>
                                                </td>
                                                <td>120<span class="ltr:ml-1 rtl:mr-1 text-gray-500 dark:text-white/70 opacity-70">/ 120</span></td>
                                                <td>
                                                <div class="flex items-center">
                                                    <div class="w-2/3">
                                                    <div class="ti-main-progress h-2 bg-gray-200 dark:bg-black/20">
                                                        <div class="ti-main-progress-bar bg-primary text-xs text-white text-center" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    </div>
                                                    <div class="ltr:ml-2 rtl:mr-2">100%</div>
                                                </div>
                                                </td>
                                                <td><span
                                                    class="truncate whitespace-nowrap inline-block py-1 px-3 rounded-full text-xs font-medium bg-success/10 text-success/80">Completed</span>
                                                </td>
                                                <td>02-04-2023</td>
                                                <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <a href="javascript:void(0);"
                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                    <i class="ti ti-eye"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        View
                                                    </span>
                                                    </a>
                                                </div>
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <a href="javascript:void(0);"
                                                    class="customer-edit m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                    <i class="ti ti-pencil"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        Edit
                                                    </span>
                                                    </a>
                                                </div>
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <a href="javascript:void(0);"
                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                    <i class="ti ti-trash"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        Delete
                                                    </span>
                                                    </a>
                                                </div>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>6</td>
                                                <td>
                                                <span class="text-sm text-gray-800 dark:text-white font-semibold">Documentation Project</span>
                                                </td>
                                                <td>
                                                <div class="flex -space-x-2 rtl:space-x-reverse">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/8.jpg')); ?>" alt="Image Description">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/14.jpg')); ?>" alt="Image Description">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/4.jpg')); ?>" alt="Image Description">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/16.jpg')); ?>" alt="Image Description">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/21.jpg')); ?>" alt="Image Description">
                                                </div>
                                                </td>
                                                <td>40<span class="ltr:ml-1 rtl:mr-1 text-gray-500 dark:text-white/70 opacity-70">/ 80</span></td>
                                                <td>
                                                <div class="flex items-center">
                                                    <div class="w-2/3">
                                                    <div class="ti-main-progress h-2 bg-gray-200 dark:bg-black/20">
                                                        <div class="ti-main-progress-bar bg-primary text-xs text-white text-center" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    </div>
                                                    <div class="ltr:ml-2 rtl:mr-2">50%</div>
                                                </div>
                                                </td>
                                                <td><span
                                                    class="truncate whitespace-nowrap inline-block py-1 px-3 rounded-full text-xs font-medium bg-primary/10 text-primary/80">In Progress</span>
                                                </td>
                                                <td>05-04-2023</td>
                                                <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <a href="javascript:void(0);"
                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                    <i class="ti ti-eye"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        View
                                                    </span>
                                                    </a>
                                                </div>
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <a href="javascript:void(0);"
                                                    class="customer-edit m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                    <i class="ti ti-pencil"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        Edit
                                                    </span>
                                                    </a>
                                                </div>
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <a href="javascript:void(0);"
                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                    <i class="ti ti-trash"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        Delete
                                                    </span>
                                                    </a>
                                                </div>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>7</td>
                                                <td>
                                                <span class="text-sm text-gray-800 dark:text-white font-semibold">Developing Backend</span>
                                                </td>
                                                <td>
                                                <div class="flex -space-x-2 rtl:space-x-reverse">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/8.jpg')); ?>" alt="Image Description">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/14.jpg')); ?>" alt="Image Description">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/4.jpg')); ?>" alt="Image Description">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/21.jpg')); ?>" alt="Image Description">
                                                    <span class="inline-flex items-center justify-center avatar w-6 h-6  rounded-full bg-gray-100 border-2 border-gray-200 dark:bg-black/20 dark:border-white/10">
                                                    <span class="font-medium text-gray-500 leading-none dark:text-white/70">3+</span>
                                                    </span>
                                                </div>
                                                </td>
                                                <td>50<span class="ltr:ml-1 rtl:mr-1 text-gray-500 dark:text-white/70 opacity-70">/ 60</span></td>
                                                <td>
                                                <div class="flex items-center">
                                                    <div class="w-2/3">
                                                    <div class="ti-main-progress h-2 bg-gray-200 dark:bg-black/20">
                                                        <div class="ti-main-progress-bar bg-primary text-xs text-white text-center" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    </div>
                                                    <div class="ltr:ml-2 rtl:mr-2">80%</div>
                                                </div>
                                                </td>
                                                <td><span
                                                    class="truncate whitespace-nowrap inline-block py-1 px-3 rounded-full text-xs font-medium bg-primary/10 text-primary/80">In Progress</span>
                                                </td>
                                                <td>08-04-2023</td>
                                                <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <a href="javascript:void(0);"
                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                    <i class="ti ti-eye"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        View
                                                    </span>
                                                    </a>
                                                </div>
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <a href="javascript:void(0);"
                                                    class="customer-edit m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                    <i class="ti ti-pencil"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        Edit
                                                    </span>
                                                    </a>
                                                </div>
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <a href="javascript:void(0);"
                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                    <i class="ti ti-trash"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        Delete
                                                    </span>
                                                    </a>
                                                </div>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>8</td>
                                                <td>
                                                <span class="text-sm text-gray-800 dark:text-white font-semibold">Multipurpose Dashboard Template</span>
                                                </td>
                                                <td>
                                                <div class="flex -space-x-2 rtl:space-x-reverse">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/8.jpg')); ?>" alt="Image Description">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/14.jpg')); ?>" alt="Image Description">
                                                </div>
                                                </td>
                                                <td>0<span class="ltr:ml-1 rtl:mr-1 text-gray-500 dark:text-white/70 opacity-70">/ 60</span></td>
                                                <td>
                                                <div class="flex items-center">
                                                    <div class="w-2/3">
                                                    <div class="ti-main-progress h-2 bg-gray-200 dark:bg-black/20">
                                                        <div class="ti-main-progress-bar bg-primary text-xs text-white text-center" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    </div>
                                                    <div class="ltr:ml-2 rtl:mr-2">0%</div>
                                                </div>
                                                </td>
                                                <td><span
                                                    class="truncate whitespace-nowrap inline-block py-1 px-3 rounded-full text-xs font-medium bg-warning/10 text-warning/80">Pending</span>
                                                </td>
                                                <td>30-04-2023</td>
                                                <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <a href="javascript:void(0);"
                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                    <i class="ti ti-eye"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        View
                                                    </span>
                                                    </a>
                                                </div>
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <a href="javascript:void(0);"
                                                    class="customer-edit m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                    <i class="ti ti-pencil"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        Edit
                                                    </span>
                                                    </a>
                                                </div>
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <a href="javascript:void(0);"
                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                    <i class="ti ti-trash"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        Delete
                                                    </span>
                                                    </a>
                                                </div>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>9</td>
                                                <td>
                                                <span class="text-sm text-gray-800 dark:text-white font-semibold">Design New Dashboard Template</span>
                                                </td>
                                                <td>
                                                <div class="flex -space-x-2 rtl:space-x-reverse">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/8.jpg')); ?>" alt="Image Description">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/14.jpg')); ?>" alt="Image Description">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/16.jpg')); ?>" alt="Image Description">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/3.jpg')); ?>" alt="Image Description">
                                                </div>
                                                </td>
                                                <td>100<span class="ltr:ml-1 rtl:mr-1 text-gray-500 dark:text-white/70 opacity-70">/ 100</span></td>
                                                <td>
                                                <div class="flex items-center">
                                                    <div class="w-2/3">
                                                    <div class="ti-main-progress h-2 bg-gray-200 dark:bg-black/20">
                                                        <div class="ti-main-progress-bar bg-primary text-xs text-white text-center" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    </div>
                                                    <div class="ltr:ml-2 rtl:mr-2">100%</div>
                                                </div>
                                                </td>
                                                <td><span
                                                    class="truncate whitespace-nowrap inline-block py-1 px-3 rounded-full text-xs font-medium bg-success/10 text-success/80">Completed</span>
                                                </td>
                                                <td>03-04-2023</td>
                                                <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <a href="javascript:void(0);"
                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                    <i class="ti ti-eye"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        View
                                                    </span>
                                                    </a>
                                                </div>
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <a href="javascript:void(0);"
                                                    class="customer-edit m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                    <i class="ti ti-pencil"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        Edit
                                                    </span>
                                                    </a>
                                                </div>
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <a href="javascript:void(0);"
                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                    <i class="ti ti-trash"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        Delete
                                                    </span>
                                                    </a>
                                                </div>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>10</td>
                                                <td>
                                                <span class="text-sm text-gray-800 dark:text-white font-semibold">Server Side Validation</span>
                                                </td>
                                                <td>
                                                <div class="flex -space-x-2 rtl:space-x-reverse">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/8.jpg')); ?>" alt="Image Description">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/14.jpg')); ?>" alt="Image Description">
                                                    <img class="inline-block avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/16.jpg')); ?>" alt="Image Description">
                                                    <span class="inline-flex items-center justify-center avatar w-6 h-6  rounded-full bg-gray-100 border-2 border-gray-200 dark:bg-black/20 dark:border-white/10">
                                                    <span class="font-medium text-gray-500 leading-none dark:text-white/70">2+</span>
                                                    </span>
                                                </div>
                                                </td>
                                                <td>80<span class="ltr:ml-1 rtl:mr-1 text-gray-500 dark:text-white/70 opacity-70">/ 160</span></td>
                                                <td>
                                                <div class="flex items-center">
                                                    <div class="w-2/3">
                                                    <div class="ti-main-progress h-2 bg-gray-200 dark:bg-black/20">
                                                        <div class="ti-main-progress-bar bg-primary text-xs text-white text-center" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    </div>
                                                    <div class="ltr:ml-2 rtl:mr-2">50%</div>
                                                </div>
                                                </td>
                                                <td><span
                                                    class="truncate whitespace-nowrap inline-block py-1 px-3 rounded-full text-xs font-medium bg-primary/10 text-primary/80">In Progress</span>
                                                </td>
                                                <td>10-04-2023</td>
                                                <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <a href="javascript:void(0);"
                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                    <i class="ti ti-eye"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        View
                                                    </span>
                                                    </a>
                                                </div>
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <a href="javascript:void(0);"
                                                    class="customer-edit m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                    <i class="ti ti-pencil"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        Edit
                                                    </span>
                                                    </a>
                                                </div>
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <a href="javascript:void(0);"
                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                    <i class="ti ti-trash"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
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
                                    <div class="box-footer">
                                        <div class="flex items-center">
                                            <div class="">
                                                showing 5 Entries <i class="ri-arrow-right-line ml-2 font-semibold"></i>
                                            </div>
                                            <div class="ltr:ml-auto rtl:mr-auto">
                                                <nav class="flex justify-center items-center space-x-2 rtl:space-x-reverse">
                                                    <a class="text-gray-500 hover:text-primary e py-1 px-2 leading-none inline-flex items-center gap-2 rounded-sm" href="javascript:void(0);">
                                                        <span aria-hidden="true">Prev</span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="bg-primary text-white py-1 px-2 leading-none inline-flex items-center text-sm font-medium rounded-sm" href="javascript:void(0);" aria-current="page">1</a>
                                                    <a class="text-gray-500 hover:text-primary e py-1 px-2 leading-none inline-flex items-center text-sm font-medium rounded-sm" href="javascript:void(0);">2</a>
                                                    <a class="text-gray-500 hover:text-primary e py-1 px-2 leading-none inline-flex items-center text-sm font-medium rounded-sm" href="javascript:void(0);">3</a>
                                                    <a class="text-gray-500 hover:text-primary e py-1 px-2 leading-none inline-flex items-center gap-2 rounded-sm" href="javascript:void(0);">
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
                            <!-- End::row-3 -->

                        </div>
                        <!-- Start::main-content -->

                    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

        <!-- APEX CHARTS JS -->
        <script src="<?php echo e(asset('build/assets/libs/apexcharts/apexcharts.min.js')); ?>"></script>

        <!-- INDEX JS -->
        <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/index-7.js'); ?>
        

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\my-projects\laravel\vite\synto\synto-laravel\synto\resources\views/pages/index7.blade.php ENDPATH**/ ?>