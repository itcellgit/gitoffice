<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

                    <div class="content">

                        <!-- Start::main-content -->
                        <div class="main-content">

                            <!-- Page Header -->
                            <div class="block justify-between page-header sm:flex">
                                <div>
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium">Analytics Dashboard</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                    <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Dashboards
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                    </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                    Analytics Dashboard
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-x-6">
                            <div class="col-span-12 xxl:col-span-9">
                                <div class="grid grid-cols-12 gap-x-6">
                                <div class="col-span-12 xl:col-span-4">
                                    <div class="box">
                                    <div class="box-body">
                                        <div class="flex items-start">
                                        <div class="ltr:mr-4 rtl:ml-4">
                                            <span class="avatar bg-primary/20 text-primary text-2xl p-3 rounded-sm"><i
                                                class="ri-flag-2-line leading-none"></i></span>
                                        </div>
                                        <div class="flex-1">
                                            <div class="font-medium text-sm mb-1">Total Sessions</div>
                                            <div class="flex items-center justify-between mb-1">
                                            <h5 class="text-xl font-bold text-gray-800 dark:text-white">1,289</h5>
                                            <span class="badge bg-success/20 text-success rounded-sm py-1">+12.2%</span>
                                            </div>
                                            <p class="text-gray-500 dark:text-white/70 mb-0 text-xs">since last 2 months</p>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-span-12 xl:col-span-4">
                                    <div class="box">
                                    <div class="box-body">
                                        <div class="flex items-start">
                                        <div class="ltr:mr-4 rtl:ml-4">
                                            <span class="avatar bg-secondary/20 text-secondary text-2xl p-3 rounded-sm"><i
                                                class="ri-share-circle-line leading-none"></i></span>
                                        </div>
                                        <div class="flex-1">
                                            <div class="font-medium text-sm mb-1">Bounce Rate</div>
                                            <div class="flex items-center justify-between mb-1">
                                            <h5 class="text-xl font-bold text-gray-800 dark:text-white">19.8%</h5>
                                            <span class="badge bg-danger/20 text-danger rounded-sm py-1">-2.6%</span>
                                            </div>
                                            <p class="text-gray-500 dark:text-white/70 mb-0 text-xs">since last 2 months</p>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-span-12 xl:col-span-4">
                                    <div class="box">
                                    <div class="box-body">
                                        <div class="flex items-start">
                                        <div class="ltr:mr-4 rtl:ml-4">
                                            <span class="avatar bg-danger/20 text-danger text-2xl p-3 rounded-sm"><i
                                                class="ri-eye-line leading-none"></i></span>
                                        </div>
                                        <div class="flex-1">
                                            <div class="font-medium text-sm mb-1">Page Views</div>
                                            <div class="flex items-center justify-between mb-1">
                                            <h5 class="text-xl font-bold text-gray-800 dark:text-white">15,250</h5>
                                            <span class="badge bg-success/20 text-success rounded-sm py-1">+35.6%</span>
                                            </div>
                                            <p class="text-gray-500 dark:text-white/70 mb-0 text-xs">since last 2 months</p>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-8">
                                    <div class="box">
                                    <div class="box-header">
                                        <div class="flex justify-between">
                                        <h5 class="box-title my-auto">Session Overview</h5>
                                        <div class="hs-dropdown ti-dropdown block ltr:ml-auto rtl:mr-auto my-auto">
                                            <button type="button"
                                            class="hs-dropdown-toggle ti-dropdown-toggle rounded-sm p-1 px-3 !border border-gray-200 text-gray-400 hover:text-gray-500 hover:bg-gray-200 hover:border-gray-200 focus:ring-gray-200  dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                                            This year <i class="ti ti-chevron-down"></i></button>
                                            <div class="hs-dropdown-menu ti-dropdown-menu hidden">
                                            <a class="ti-dropdown-item" href="javascript:void(0)">Today</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0)">This Week</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0)">This Month</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0)">This Year</a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="box-body ">
                                        <div id="audienceReport"></div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-4">
                                    <div class="box">
                                    <div class="box-header">
                                        <div class="flex justify-between">
                                        <h5 class="box-title my-auto">Visitors By Countries</h5>
                                        <button type="button"
                                            class="ti-btn m-0 rounded-sm p-1 px-3 !border border-gray-200 text-gray-400 hover:text-gray-500 hover:bg-gray-200 hover:border-gray-200 focus:ring-gray-200  dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                                            View All</button>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <ul class="flex flex-col">
                                        <li class="p-0 mb-4 ti-list-group border-0 text-gray-800 dark:text-white">
                                            <a href="javascript:void(0);" class="w-full">
                                            <div class="flex items-center">
                                                <div class="avatar avatar-xs rounded-sm">
                                                <img src="<?php echo e(asset('build/assets/img/flags/10.png')); ?>" alt="">
                                                </div>
                                                <div class="ltr:ml-3 rtl:mr-3 flex-auto">
                                                <span class="text-sm">United States</span>
                                                </div>
                                                <div>
                                                <span class="badge rounded-sm bg-gray-100 text-gray-500 dark:bg-black/20 dark:text-white">32,190</span>
                                                </div>
                                            </div>
                                            </a>
                                        </li>
                                        <li class="p-0 mb-4 ti-list-group border-0 text-gray-800 dark:text-white">
                                            <a href="javascript:void(0);" class="w-full">
                                            <div class="flex items-center">
                                                <div class="avatar avatar-xs rounded-sm">
                                                <img src="<?php echo e(asset('build/assets/img/flags/1.png')); ?>" alt="">
                                                </div>
                                                <div class="ltr:ml-3 rtl:mr-3 flex-auto">
                                                <span class="text-sm">Argentina</span>
                                                </div>
                                                <div>
                                                <span class="badge rounded-sm bg-gray-100 text-gray-500 dark:bg-black/20 dark:text-white">17,578</span>
                                                </div>
                                            </div>
                                            </a>
                                        </li>
                                        <li class="p-0 mb-4 ti-list-group border-0 text-gray-800 dark:text-white">
                                            <a href="javascript:void(0);" class="w-full">
                                            <div class="flex items-center">
                                                <div class="">
                                                <img src="<?php echo e(asset('build/assets/img/flags/3.png')); ?>" alt="" class="avatar avatar-xs rounded-sm">
                                                </div>
                                                <div class="ltr:ml-3 rtl:mr-3 flex-auto">
                                                <span class="text-sm">France</span>
                                                </div>
                                                <div>
                                                <span class="badge rounded-sm bg-gray-100 text-gray-500 dark:bg-black/20 dark:text-white">2,345</span>
                                                </div>
                                            </div>
                                            </a>
                                        </li>
                                        <li class="p-0 mb-4 ti-list-group border-0 text-gray-800 dark:text-white">
                                            <a href="javascript:void(0);" class="w-full">
                                            <div class="flex items-center">
                                                <div class="">
                                                <img src="<?php echo e(asset('build/assets/img/flags/4.png')); ?>" alt="" class="avatar avatar-xs rounded-sm">
                                                </div>
                                                <div class="ltr:ml-3 rtl:mr-3 flex-auto">
                                                <span class="text-sm">Germany</span>
                                                </div>
                                                <div>
                                                <span class="badge rounded-sm bg-gray-100 text-gray-500 dark:bg-black/20 dark:text-white">8,798</span>
                                                </div>
                                            </div>
                                            </a>
                                        </li>
                                        <li class="p-0 mb-4 ti-list-group border-0 text-gray-800 dark:text-white">
                                            <a href="javascript:void(0);" class="w-full">
                                            <div class="flex items-center">
                                                <div class="">
                                                <img src="<?php echo e(asset('build/assets/img/flags/5.png')); ?>" alt="" class="avatar avatar-xs rounded-sm">
                                                </div>
                                                <div class="ltr:ml-3 rtl:mr-3 flex-auto">
                                                <span class="text-sm">Mexico</span>
                                                </div>
                                                <div>
                                                <span class="badge rounded-sm bg-gray-100 text-gray-500 dark:bg-black/20 dark:text-white">16,885</span>
                                                </div>
                                            </div>
                                            </a>
                                        </li>
                                        <li class="p-0 mb-4 ti-list-group border-0 text-gray-800 dark:text-white">
                                            <a href="javascript:void(0);" class="w-full">
                                            <div class="flex items-center">
                                                <div class="">
                                                <img src="<?php echo e(asset('build/assets/img/flags/7.png')); ?>" alt="" class="avatar avatar-xs rounded-sm">
                                                </div>
                                                <div class="ltr:ml-3 rtl:mr-3 flex-auto">
                                                <span class="text-sm">Russia</span>
                                                </div>
                                                <div>
                                                <span class="badge rounded-sm bg-gray-100 text-gray-500 dark:bg-black/20 dark:text-white">10,118</span>
                                                </div>
                                            </div>
                                            </a>
                                        </li>
                                        <li class="p-0 mb-4 ti-list-group border-0 text-gray-800 dark:text-white">
                                            <a href="javascript:void(0);" class="w-full">
                                            <div class="flex items-center">
                                                <div class="">
                                                <img src="<?php echo e(asset('build/assets/img/flags/2.png')); ?>" alt="" class="avatar avatar-xs rounded-sm">
                                                </div>
                                                <div class="ltr:ml-3 rtl:mr-3 flex-auto">
                                                <span class="text-sm">Cannada</span>
                                                </div>
                                                <div>
                                                <span class="badge rounded-sm bg-gray-100 text-gray-500 dark:bg-black/20 dark:text-white">1,678</span>
                                                </div>
                                            </div>
                                            </a>
                                        </li>
                                        <li class="p-0 mb-0 ti-list-group border-0 text-gray-800 dark:text-white">
                                            <a href="javascript:void(0);" class="w-full">
                                            <div class="flex items-center">
                                                <div class="">
                                                <img src="<?php echo e(asset('build/assets/img/flags/6.png')); ?>" alt="" class="avatar avatar-xs rounded-sm">
                                                </div>
                                                <div class="ltr:ml-3 rtl:mr-3 flex-auto">
                                                <span class="text-sm">Malaysia</span>
                                                </div>
                                                <div>
                                                <span class="badge rounded-sm bg-gray-100 text-gray-500 dark:bg-black/20 dark:text-white">6,578</span>
                                                </div>
                                            </div>
                                            </a>
                                        </li>
                                        </ul>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 xxl:col-span-3">
                                <div class="box overflow-hidden">
                                <div class="box-body">
                                    <div class="flex mb-4">
                                    <h5 class="box-title my-auto">Active Users</h5>
                                    <div class="hs-dropdown ti-dropdown block ltr:ml-auto rtl:mr-auto my-auto">
                                        <button type="button" aria-label="button"
                                        class="hs-dropdown-toggle ti-dropdown-toggle text-gray-500 dark:text-white/70 p-0 border-0 shadow-none">
                                        <i class="text-sm leading-none ti ti-dots-vertical"></i> </button>
                                        <div class="hs-dropdown-menu ti-dropdown-menu">
                                        <a class="ti-dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="ti-dropdown-item" href="javascript:void(0)">Another Acttion</a>
                                        <a class="ti-dropdown-item" href="javascript:void(0)">Something Else Here</a>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="flex">
                                    <div class="ltr:mr-2 rtl:ml-2 my-auto">
                                        <span class="avatar rounded-full bg-primary text-white text-xl p-3"><i
                                            class="ri-pulse-line leading-none"></i></span>
                                    </div>
                                    <div class="flex-1">
                                        <p class="text-2xl text-gray-800 dark:text-white font-bold">12,890<span
                                            class="text-success text-xs ltr:ml-2 rtl:mr-2"><i
                                            class="ri-arrow-right-up-line text-xs"></i>10.5%</span></p>
                                        <p class="mb-0 text-xs text-gray-500 dark:text-white/70">Currently active now</p>
                                    </div>
                                    </div>
                                </div>
                                <div id="active-chart" class=""></div>
                                </div>
                                <div class="box">
                                <div class="box-header">
                                    <div class="flex justify-between">
                                    <h5 class="box-title my-auto">Device views</h5>
                                    <div class="hs-dropdown ti-dropdown block ltr:ml-auto rtl:mr-auto my-auto">
                                        <button type="button"
                                        class="hs-dropdown-toggle ti-dropdown-toggle rounded-sm p-1 px-3 !border border-gray-200 text-gray-400 hover:text-gray-500 hover:bg-gray-200 hover:border-gray-200 focus:ring-gray-200  dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                                        This year <i class="ti ti-chevron-down"></i></button>
                                        <div class="hs-dropdown-menu ti-dropdown-menu hidden">
                                        <a class="ti-dropdown-item" href="javascript:void(0)">Today</a>
                                        <a class="ti-dropdown-item" href="javascript:void(0)">This Week</a>
                                        <a class="ti-dropdown-item" href="javascript:void(0)">This Month</a>
                                        <a class="ti-dropdown-item" href="javascript:void(0)">This Year</a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="box-body ">
                                    <div id="sessions"></div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-1 -->

                            <!-- Start::row-2 -->
                            <div class="grid grid-cols-12 gap-x-6">
                            <div class="col-span-12 xxl:col-span-4">
                                <div class="box">
                                <div class="box-header">
                                    <div class="flex">
                                    <h5 class="box-title my-auto">Sessions By Gender</h5>
                                    <div class="hs-dropdown ti-dropdown block ltr:ml-auto rtl:mr-auto my-auto">
                                        <button type="button" aria-label="button"
                                        class="hs-dropdown-toggle ti-dropdown-toggle rounded-sm p-2 bg-white !border border-gray-200 text-gray-500 hover:bg-gray-100  focus:ring-gray-200 dark:bg-black/20 dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                                        <i class="text-sm leading-none ti ti-dots-vertical"></i> </button>
                                        <div class="hs-dropdown-menu ti-dropdown-menu">
                                        <a class="ti-dropdown-item" href="javascript:void(0)">Download</a>
                                        <a class="ti-dropdown-item" href="javascript:void(0)">Import</a>
                                        <a class="ti-dropdown-item" href="javascript:void(0)">Export</a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div id="session2" class="flex justify-center"></div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 xxl:col-span-4">
                                <div class="box">
                                <div class="box-header">
                                    <div class="flex">
                                    <h5 class="box-title my-auto">Traffic Sources</h5>
                                    <div class="hs-dropdown ti-dropdown block ltr:ml-auto rtl:mr-auto my-auto">
                                        <button type="button" aria-label="button"
                                        class="hs-dropdown-toggle ti-dropdown-toggle rounded-sm p-2 bg-white !border border-gray-200 text-gray-500 hover:bg-gray-100  focus:ring-gray-200 dark:bg-black/20 dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                                        <i class="text-sm leading-none ti ti-dots-vertical"></i> </button>
                                        <div class="hs-dropdown-menu ti-dropdown-menu">
                                        <a class="ti-dropdown-item" href="javascript:void(0)">Download</a>
                                        <a class="ti-dropdown-item" href="javascript:void(0)">Import</a>
                                        <a class="ti-dropdown-item" href="javascript:void(0)">Export</a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="box-body p-0">
                                    <div class="overflow-auto">
                                    <table class="ti-custom-table ti-custom-table-head">
                                        <thead>
                                        <tr>
                                            <th scope="col">Browser</th>
                                            <th scope="col">Sessions</th>
                                            <th scope="col">Traffic</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="">
                                            <div class="flex items-center">
                                                <div class="ltr:mr-2 rtl:ml-2">
                                                <span class="avatar avatar-xs rounded-sm bg-primary/20 text-primary p-1.5"><i
                                                    class="ri-chrome-line text-xl leading-none"></i></span>
                                                </div>
                                                <p class="mb-0">Chrome</p>
                                            </div>
                                            </td>
                                            <td class="">20,937<i
                                                class="ri-arrow-up-s-fill ltr:ml-2 rtl:mr-2 text-base text-success my-auto"></i></td>
                                            <td class="">
                                            <div class="ti-main-progress h-2 bg-gray-200 dark:bg-black/20">
                                                <div class="ti-main-progress-bar bg-primary text-xs text-white text-center" role="progressbar" style="width: 80%"
                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">
                                            <div class="flex items-center">
                                                <div class="ltr:mr-2 rtl:ml-2">
                                                <span class="avatar avatar-xs rounded-sm bg-secondary/20 text-secondary p-1.5"><i
                                                    class="ri-safari-line text-xl leading-none"></i></span>
                                                </div>
                                                <p class="mb-0">Safari</p>
                                            </div>
                                            </td>
                                            <td class="">23,379<i
                                                class="ri-arrow-up-s-fill ltr:ml-2 rtl:mr-2 text-base text-success my-auto"></i></td>
                                            <td class="">
                                            <div class="ti-main-progress h-2 bg-gray-200 dark:bg-black/20">
                                                <div class="ti-main-progress-bar bg-secondary text-xs text-white text-center" role="progressbar" style="width: 40%"
                                                aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">
                                            <div class="flex items-center">
                                                <div class="ltr:mr-2 rtl:ml-2">
                                                <span class="avatar avatar-xs rounded-sm bg-danger/20 text-danger p-1.5"><i
                                                    class="ri-opera-line text-xl leading-none"></i></span>
                                                </div>
                                                <p class="mb-0">Opera</p>
                                            </div>
                                            </td>
                                            <td class="">20,582<i
                                                class="ri-arrow-down-s-fill ltr:ml-2 rtl:mr-2 text-base text-danger my-auto"></i></td>
                                            <td class="">
                                            <div class="ti-main-progress h-2 bg-gray-200 dark:bg-black/20">
                                                <div class="ti-main-progress-bar bg-danger text-xs text-white text-center" role="progressbar" style="width: 30%"
                                                aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">
                                            <div class="flex items-center">
                                                <div class="ltr:mr-2 rtl:ml-2">
                                                <span class="avatar avatar-xs rounded-sm bg-warning/20 text-warning p-1.5"><i
                                                    class="ri-firefox-line text-xl leading-none"></i></span>
                                                </div>
                                                <p class="mb-0">Firefox</p>
                                            </div>
                                            </td>
                                            <td class="">18,120<i
                                                class="ri-arrow-up-s-fill ltr:ml-2 rtl:mr-2 text-base text-success my-auto"></i></td>
                                            <td class="">
                                            <div class="ti-main-progress h-2 bg-gray-200 dark:bg-black/20">
                                                <div class="ti-main-progress-bar bg-warning text-xs text-white text-center" role="progressbar" style="width: 50%"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">
                                            <div class="flex items-center">
                                                <div class="ltr:mr-2 rtl:ml-2">
                                                <span class="avatar avatar-xs rounded-sm bg-success/20 text-success p-1.5"><i
                                                    class="ri-edge-line text-xl leading-none"></i></span>
                                                </div>
                                                <p class="mb-0">Edge</p>
                                            </div>
                                            </td>
                                            <td class="">11,352<i
                                                class="ri-arrow-up-s-fill ltr:ml-2 rtl:mr-2 text-base text-danger my-auto"></i></td>
                                            <td class="">
                                            <div class="ti-main-progress h-2 bg-gray-200 dark:bg-black/20">
                                                <div class="ti-main-progress-bar bg-success text-xs text-white text-center" role="progressbar" style="width: 25%"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 xxl:col-span-4">
                                <div class="box">
                                <div class="box-header">
                                    <div class="flex">
                                    <h5 class="box-title my-auto">Audience Overview</h5>
                                    <div class="hs-dropdown ti-dropdown block ltr:ml-auto rtl:mr-auto my-auto">
                                        <button type="button" aria-label="button"
                                        class="hs-dropdown-toggle ti-dropdown-toggle rounded-sm p-2 bg-white !border border-gray-200 text-gray-500 hover:bg-gray-100  focus:ring-gray-200 dark:bg-black/20 dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                                        <i class="text-sm leading-none ti ti-dots-vertical"></i> </button>
                                        <div class="hs-dropdown-menu ti-dropdown-menu">
                                        <a class="ti-dropdown-item" href="javascript:void(0)">Download</a>
                                        <a class="ti-dropdown-item" href="javascript:void(0)">Import</a>
                                        <a class="ti-dropdown-item" href="javascript:void(0)">Export</a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <ul class="flex flex-wrap space-x-6 rtl:space-x-reverse">
                                    <li>
                                        <p class="inline-flex items-center">
                                        <span
                                            class="block w-3 h-3 rounded-full ltr:mr-2 rtl:ml-2 border-4 border-primary pointer-events-none"></span>
                                        <span class="flex items-center">
                                            <span
                                            class="text-base text-gray-800 dark:text-white font-bold ltr:mr-2 rtl:ml-2 pointer-events-none">New
                                            Visitors</span>
                                        </span>
                                        </p>
                                    </li>
                                    <li>
                                        <p class="inline-flex items-center">
                                        <span
                                            class="block w-3 h-3 rounded-full ltr:mr-2 rtl:ml-2 border-4 border-gray-200 pointer-events-none"></span>
                                        <span class="flex items-center">
                                            <span
                                            class="text-base text-gray-800 dark:text-white font-bold ltr:mr-2 rtl:ml-2 pointer-events-none">Online
                                            Visitors</span>
                                        </span>
                                        </p>
                                    </li>
                                    </ul>
                                    <div id="audience"></div>
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
                                    <h5 class="box-title my-auto">Visitors By Channel</h5>
                                    <div class="hs-dropdown ti-dropdown block ltr:ml-auto rtl:mr-auto my-auto">
                                        <button id="hs-dropdown-custom-icon-trigger" type="button"
                                        class="hs-dropdown-toggle px-2 py-1 ti-btn ti-btn-primary">Sort
                                        By<i class="ri-arrow-down-s-line align-middle"></i></button>
                                        <div class="hs-dropdown-menu ti-dropdown-menu hidden"
                                        aria-labelledby="hs-dropdown-custom-icon-trigger">
                                        <a class="ti-dropdown-item" href="javascript:void(0)">New</a>
                                        <a class="ti-dropdown-item" href="javascript:void(0)">popular</a>
                                        <a class="ti-dropdown-item" href="javascript:void(0)">Relevant</a>
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
                                            <th scope="col" class="dark:text-white/80">Channel</th>
                                            <th scope="col" class="dark:text-white/80">Sessions</th>
                                            <th scope="col" class="dark:text-white/80">Bounce Rate</th>
                                            <th scope="col" class="dark:text-white/80">Avg Session Duration</th>
                                            <th scope="col" class="dark:text-white/80">Target Reached</th>
                                            <th scope="col" class="dark:text-white/80">Pages Per Session</th>
                                            <th scope="col" class="dark:text-white/80">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody class="">
                                        <tr class="">
                                            <td>1</td>
                                            <td>
                                            <div class="flex items-center">
                                                <span class="avatar avatar-xs bg-primary/20 rounded-full p-2">
                                                <i class="ri-search-2-line text-base font-semibiold text-primary leading-none"></i>
                                                </span>
                                                <span class="ltr:ml-2 rtl:mr-2">
                                                Organic Search
                                                </span>
                                            </div>
                                            </td>
                                            <td>782</td>
                                            <td>32.09%</td>
                                            <td>0 hrs : 0 mins : 32 secs</td>
                                            <td><span class="badge bg-primary/20 rounded-sm text-primary">278</span></td>
                                            <td>2.9</td>
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
                                            <div class="flex items-center">
                                                <span class="avatar avatar-xs bg-secondary/20 rounded-full p-2">
                                                <i class="ri-globe-line text-base font-semibiold text-secondary leading-none"></i>
                                                </span>
                                                <span class="ltr:ml-2 rtl:mr-2">
                                                Direct
                                                </span>
                                            </div>
                                            </td>
                                            <td>882</td>
                                            <td>39.38%</td>
                                            <td>0 hrs : 2 mins : 45 secs</td>
                                            <td><span class="badge bg-secondary/20 rounded-sm text-secondary">782</span></td>
                                            <td>1.5</td>
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
                                            <div class="flex items-center">
                                                <span class="avatar avatar-xs bg-danger/20 rounded-full p-2">
                                                <i class="ri-share-forward-line text-base font-semibiold text-danger leading-none"></i>
                                                </span>
                                                <span class="ltr:ml-2 rtl:mr-2">
                                                Referral
                                                </span>
                                            </div>
                                            </td>
                                            <td>322</td>
                                            <td>22.67%</td>
                                            <td>0 hrs : 38 mins : 28 secs</td>
                                            <td><span class="badge bg-danger/20 rounded-sm text-danger">622</span></td>
                                            <td>3.2</td>
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
                                            <div class="flex items-center">
                                                <span class="avatar avatar-xs bg-warning/20 rounded-full p-2">
                                                <i class="ri-reactjs-line text-base font-semibiold text-warning leading-none"></i>
                                                </span>
                                                <span class="ltr:ml-2 rtl:mr-2">
                                                Social
                                                </span>
                                            </div>
                                            </td>
                                            <td>389</td>
                                            <td>25.11%</td>
                                            <td>0 hrs : 12 mins : 89 secs</td>
                                            <td><span class="badge bg-warning/20 rounded-sm text-warning">142</span></td>
                                            <td>1.4</td>
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
                                            <div class="flex items-center">
                                                <span class="avatar avatar-xs bg-info/20 rounded-full p-2">
                                                <i class="ri-mail-line text-base font-semibiold text-info leading-none"></i>
                                                </span>
                                                <span class="ltr:ml-2 rtl:mr-2">
                                                Email
                                                </span>
                                            </div>
                                            </td>
                                            <td>378</td>
                                            <td>23.79%</td>
                                            <td>0 hrs : 14 mins : 27 secs</td>
                                            <td><span class="badge bg-info/20 rounded-sm text-info">178</span></td>
                                            <td>1.6</td>
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
                                            <div class="flex items-center">
                                                <span class="avatar avatar-xs bg-success/20 rounded-full p-2">
                                                <i class="ri-bank-card-line text-base font-semibiold text-success leading-none"></i>
                                                </span>
                                                <span class="ltr:ml-2 rtl:mr-2">
                                                Paid Search
                                                </span>
                                            </div>
                                            </td>
                                            <td>488</td>
                                            <td>28.77%</td>
                                            <td>0 hrs : 16 mins : 28 secs</td>
                                            <td><span class="badge bg-success/20 rounded-sm text-success">578</span></td>
                                            <td>2.5</td>
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
                                    <div class="sm:flex items-center">
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
        <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/index-6.js'); ?>
        

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\laravel\vite\synto\synto-final\synto\resources\views/pages/index6.blade.php ENDPATH**/ ?>