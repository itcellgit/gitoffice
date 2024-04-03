<?php $__env->startSection('styles'); ?>

        <!-- JEVECTOR MAPS CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('build/assets/libs/jsvectormap/css/jsvectormap.min.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

                    <div class="content">

                        <!-- Start::main-content -->
                        <div class="main-content">

                            <!-- Page Header -->
                            <div class="block justify-between page-header sm:flex">
                                <div>
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Widgets</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                        <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Main
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                        </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        Widgets
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-x-6">
                            <div class="xl:!col-span-3 sm:col-span-6 col-span-12">
                                <div class="box">
                                <div class="box-body">
                                    <div class="flex">
                                    <div class="ltr:mr-3 rtl:ml-3">
                                        <span class="avatar w-6 h-6 shadow-sm rounded-full">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-info" viewBox="0 0 128 128"><path d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z"/><path fill="#fff" d="M94.3 71.4c-.5-3.6-2.3-6.4-5.4-8.2-1.4-.8-3.1-1.4-4.7-2.1.2-.1.3-.3.4-.3 7.9-4.1 7.2-16.3 1.5-20.5-2.3-1.7-4.9-2.8-7.7-3.4-2-.4-3.9-.7-6-1.1 0-3.5.1-8.5.1-12.4H65c0 3.8-.1 8.7-.1 12.1H59c0-3.5 0-8.3.1-12.1h-7.4c0 4-.1 8.8-.1 12.3-5.1 0-10-.1-15-.1 0 2.7 0 5.3-.1 7.9h3c.9 0 1.9 0 2.8.1 2.6.2 3.9 1.6 3.9 4.2l-.3 31.9c0 2.3-1 3.3-3.3 3.3h-5c-.5 3-1 5.9-1.6 8.9 5 .1 10 .1 15 .2 0 3.8 0 8.7-.1 12.7h7.4c0-4 .1-8.7.1-12.5 2.1.1 4 .1 5.9.2 0 3.8-.1 8.4-.1 12.3h7.4c0-4 .1-8.7.1-12.4.3 0 .5-.1.6-.1 3.5-.6 7.2-.9 10.6-1.7 4.5-1.1 8.1-3.7 9.9-8.2 1.7-3.6 2-7.2 1.5-11zM59 44.3c4.6 0 9.1-.4 13.4 1.5 2.8 1.2 4.2 3.5 4 6.3-.2 2.9-1.9 5-4.8 6-4.1 1.3-8.3 1.3-12.7 1.1 0-5 .1-9.8.1-14.9zm16.2 37.1c-4.1 1.8-8.5 1.8-12.8 1.9-1.2 0-2.4-.1-3.8-.1.1-5.5.1-10.9.2-16.4 5.6 0 11.2-.4 16.5 1.9 2.7 1.2 4.3 3.3 4.3 6.4 0 3.1-1.6 5.1-4.4 6.3z"/></svg>
                                        </span>
                                    </div>
                                    <div class="flex-auto">
                                        <div class="flex flex-wrap items-center justify-between text-sm mb-2">
                                            <span class="flex-auto">Bitcoin</span>
                                            <span class="ml-1 text-gray-500 dark:text-white/70">BTC</span>
                                        </div>
                                        <div class="flex flex-wrap items-center justify-between">
                                            <h5 class="font-semibold mb-0 text-xl">$12,800</h5>
                                            <div class="flex-auto">
                                                <span class="ltr:ml-2 rtl:mr-2 badge bg-success/10 rounded-full text-success py-1">+25.8%</span>
                                            </div>
                                            <div id="btcCoin"></div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="xl:!col-span-3 sm:col-span-6 col-span-12">
                                <div class="box">
                                <div class="box-body">
                                    <div class="flex">
                                    <div class="ltr:mr-3 rtl:ml-3">
                                        <span class="avatar w-6 h-6 shadow-sm rounded-full">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-success" viewBox="0 0 128 128"><path d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z"></path><path fill="#fff" d="M65.2 87.2v22.7l28.1-39.5zM92.3 63.1l-27.1-45v32.7zM65.2 53.3v28l26.9-15.7zM35.8 63.1l27-45v32.7zM62.8 53.3v28L35.9 65.6zM62.8 87.2v22.7L34.7 70.4z"></path></svg>
                                        </span>
                                    </div>
                                    <div class="flex-auto">
                                        <div class="flex flex-wrap items-center justify-between text-sm mb-2">
                                            <span class="flex-auto">Ethereum</span>
                                            <span class="ml-1 text-gray-500 dark:text-white/70">ETH</span>
                                        </div>
                                        <div class="flex flex-wrap items-center justify-between">
                                            <h5 class="font-semibold mb-0 text-xl">$18,600</h5>
                                            <div class="flex-auto">
                                                <span class="ltr:ml-2 rtl:mr-2 badge bg-success/10 rounded-full text-success py-1">+12.9%</span>
                                            </div>
                                            <div id="ethCoin"></div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="xl:!col-span-3 sm:col-span-6 col-span-12">
                                <div class="box">
                                <div class="box-body">
                                    <div class="flex">
                                    <div class="ltr:mr-3 rtl:ml-3">
                                        <span class="avatar w-6 h-6 shadow-sm rounded-full">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-danger" viewBox="0 0 128 128"><path d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z"></path><path fill="#fff" d="M20.8 89.3c1.4-4.1 2.7-7.9 4.1-11.8.1-.4.9-.7 1.3-.7 2.3-.1 4.7 0 7 0H79c1.2 0 1.8-.4 2.1-1.5 2.5-7.5 5.2-15 7.8-22.5.1-.4.2-.8.4-1.4H33.8c1.4-4.2 2.8-8.1 4.1-12 .1-.3.7-.6 1.1-.6 1.4-.1 2.8 0 4.2 0 18.8 0 37.6.1 56.3-.1 5.6-.1 11.6 4.3 9.2 12.5-1.8 6.1-4.1 12.1-6.2 18.2-.7 2.1-1.4 4.1-2.1 6.2-2.6 7.2-7.9 11.6-15.2 13.6-.7.2-1.4.2-2.1.2H22.3c-.4-.1-.8-.1-1.5-.1z"></path><path fill="#fff" d="M55.9 58.1c-1.4 4-2.8 7.7-4.2 11.4-.1.3-.7.5-1 .5H19.2c-.1 0-.3-.1-.6-.2 1.3-3.7 2.6-7.3 4-10.9.1-.3.7-.7 1-.7 10.7-.1 21.4-.1 32.3-.1z"></path></svg>
                                        </span>
                                    </div>
                                    <div class="flex-auto">
                                        <div class="flex flex-wrap items-center justify-between text-sm mb-2">
                                            <span class="flex-auto">Dash</span>
                                            <span class="ml-1 text-gray-500 dark:text-white/70">DSH</span>
                                        </div>
                                        <div class="flex flex-wrap items-center justify-between">
                                            <h5 class="font-semibold mb-0 text-xl">$16,580</h5>
                                            <div class="flex-auto">
                                                <span class="ltr:ml-2 rtl:mr-2 badge bg-success/10 rounded-full text-success py-1">+15.7%</span>
                                            </div>
                                            <div id="dshCoin"></div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="xl:!col-span-3 sm:col-span-6 col-span-12">
                                <div class="box">
                                <div class="box-body">
                                    <div class="flex">
                                    <div class="ltr:mr-3 rtl:ml-3">
                                        <span class="avatar w-6 h-6 shadow-sm rounded-full">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-warning" viewBox="0 0 128 128"><path d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z"></path><path fill="#fff" d="M63.8 22.6c3.7-.1 7.2.6 10.2 2.7 1.4.9 2.4.8 3.6-.5 2.4-2.6 5-5 7.5-7.6.9-.9 1.8-1.5 2.9-.2 1.1 1.1.8 2-.2 2.9-2.6 2.6-5 5.2-7.6 7.8-1.1 1.1-1.3 1.9-.5 3.3 5.8 10.4 2.9 22.5-8.6 28.1-1.1.5-2.3.8-3.5 1-1.4.3-1.9 1-1.9 2.5.1 3 .1 6 0 8.9 0 1.6.5 2.3 2.1 2.7 6.2 1.5 10.6 5.2 13.3 10.9 2.6 5.5 1.9 15.4-3.8 21.3-4.8 4.9-13.2 6.9-19.5 4.4-7.5-3-12.1-9.6-12.2-17.5-.1-9.6 5.1-16.4 14.3-19 1.4-.4 2.2-1 2.1-2.5-.1-3.4 0-6.8-.2-10.2 0-.6-1.1-1.4-1.8-1.6-6-1.6-10.4-5.2-12.9-10.8-5.6-13 4.3-27.4 16.7-26.6zM79 92.8c0-7.9-6.9-15.1-14.5-15.1-8-.1-15.3 7-15.4 15-.1 7.9 7.3 15.6 14.9 15.5 8.1-.1 15-7.2 15-15.4zM49.3 41.1c0 8.6 6.6 15.6 14.9 15.6 7.7 0 14.8-7.1 14.8-15.1 0-7.4-5.5-15.2-14.7-15-8.4.1-14.9 6.3-15 14.5z"></path></svg>
                                        </span>
                                    </div>
                                    <div class="flex-auto">
                                        <div class="flex flex-wrap items-center justify-between text-sm mb-2">
                                            <span class="flex-auto">Golem</span>
                                            <span class="ml-1 text-gray-500 dark:text-white/70">GLM</span>
                                        </div>
                                        <div class="flex flex-wrap items-center justify-between">
                                            <h5 class="font-semibold mb-0 text-xl">$12,545</h5>
                                            <div class="flex-auto">
                                                <span class="ltr:ml-2 rtl:mr-2 badge bg-success/10 rounded-full text-success py-1">+12.1%</span>
                                            </div>
                                            <div id="glmCoin"></div>
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
                                <div class="xxl:!col-span-2 lg:col-span-6 col-span-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="flex flex-wrap justify-between">
                                            <div class="flex-auto">
                                                <p class="mb-0 text-gray-500 dark-gray-500 text-sm">Total Candidates</p>
                                                <div class="flex items-center">
                                                    <span class="text-xl font-semibold text-gray-800 dark:text-white">9,231</span>
                                                    <span class="text-xs text-success ltr:ml-2 rtl:mr-2 inline-flex"><i class="ti ti-trending-up ltr:mr-1 rtl:ml-1"></i>0.5%</span>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="avatar avatar-sm inline-flex justify-center items-center rounded-full bg-primary/10 text-primary text-lg">
                                                    <i class="ri-group-fill text-base"></i>
                                                </span>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="flex flex-wrap justify-between">
                                                <div class="flex-auto">
                                                    <p class="mb-0 text-gray-500 dark:text-white/70 text-sm">Total Subscriptions</p>
                                                    <div class="flex items-center">
                                                        <span class="text-xl font-semibold text-gray-800 dark:text-white">3,571</span>
                                                        <span class="text-xs text-success ltr:ml-2 rtl:mr-2 inline-flex"><i class="ti ti-trending-up ltr:mr-1 rtl:ml-1"></i>0.42%</span>
                                                    </div>
                                                </div>
                                                <div>
                                                    <span class="avatar avatar-sm inline-flex justify-center items-center rounded-full bg-secondary/10 text-secondary text-lg">
                                                        <i class="ri-contacts-fill text-base"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="flex flex-wrap  justify-between">
                                                <div class="flex-auto">
                                                    <p class="mb-0 text-gray-500 dark:text-white/70 text-sm">Page Views</p>
                                                    <div class="flex items-center">
                                                        <span class="text-xl font-semibold text-gray-800 dark:text-white">1,986</span>
                                                        <span class="text-xs text-success ltr:ml-2 rtl:mr-2 inline-flex"><i class="ti ti-trending-up ltr:mr-1 rtl:ml-1"></i>5.1%</span>
                                                    </div>
                                                </div>
                                                <div>
                                                    <span class="avatar avatar-sm inline-flex justify-center items-center rounded-full bg-success/10 text-success text-lg">
                                                        <i class="ri-eye-fill text-base"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="flex flex-wrap justify-between">
                                                <div class="flex-auto">
                                                    <p class="mb-0 text-gray-500 dark:text-white/70 text-sm">New Registrations</p>
                                                    <div class="flex items-center">
                                                        <span class="text-xl font-semibold text-gray-800 dark:text-white">773</span>
                                                        <span class="text-xs text-success ltr:ml-2 rtl:mr-2 inline-flex"><i class="ti ti-trending-up ltr:mr-1 rtl:ml-1"></i>3.5%</span>
                                                    </div>
                                                </div>
                                                <div>
                                                    <span class="avatar avatar-sm inline-flex justify-center items-center rounded-full bg-info/10 text-info text-lg">
                                                        <i class="ri-file-text-fill text-base"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:!col-span-5 lg:col-span-6 col-span-12">
                                    <div class="grid grid-cols-12 gap-x-6">
                                        <div class="col-span-12 sm:col-span-6">
                                            <div class="box">
                                                <div class="box-body">
                                                    <div class="flex flex-wrap mb-2">
                                                        <div class="flex-auto">
                                                            <p class="mb-0 text-gray-500 dark:text-white/70">Total Recruiters</p>
                                                        </div>
                                                        <div class="ltr:ml-2 rtl:mr-2">
                                                            <span class="avatar avatar-sm inline-flex justify-center items-center rounded-sm text-white bg-info text-lg">
                                                                <i class="ri-account-box-line"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <span class="text-xl font-semibold text-gray-800 dark:text-white">9,231</span>
                                                    <span class="text-xs text-success ltr:ml-1 rtl:mr-1 inline-flex"><i class="ti ti-trending-up ltr:mr-1 rtl:ml-1"></i>0.5%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-12 sm:col-span-6">
                                            <div class="box !bg-primary text-white">
                                                <div class="box-body">
                                                    <div class="flex mb-2">
                                                        <div class="flex-auto">
                                                            <p class="mb-0 opacity-70">Premium Recruiters</p>
                                                        </div>
                                                        <div class="ltr:ml-2 rtl:mr-2">
                                                            <span class="avatar avatar-sm inline-flex justify-center items-center rounded-sm bg-secondary text-white shadow-sm text-lg ring-0">
                                                                <i class="ri-account-box-line"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <span class="text-xl font-semibold text-white">9,231</span>
                                                    <span class="text-xs opacity-70 ltr:ml-1 rtl:mr-1 inline-flex"><i class="ti ti-trending-up ltr:mr-1 rtl:ml-1"></i>0.5%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-12 sm:col-span-6">
                                            <div class="box overflow-hidden">
                                                <div class="box-body p-0">
                                                    <div class="p-4">
                                                        <div class="flex items-center mb-2">
                                                            <span class="avatar avatar-sm inline-flex justify-center items-center rounded-full bg-secondary text-white ltr:mr-2 rtl:ml-2">
                                                                <i class="ri-file-list-2-line text-base"></i>
                                                            </span>
                                                            <p class="mb-0 flex-auto text-gray-500 dark:text-white/70">Total Revenue</p>
                                                        </div>
                                                        <span class="text-xl font-semibold text-gray-800 dark:text-white">$12,897</span>
                                                        <span class="text-xs text-success ltr:ml-1 rtl:mr-1 inline-flex"><i class="ti ti-trending-up ltr:mr-1 rtl:ml-1"></i>3.5%</span>
                                                    </div>
                                                    <div id="totalRevenue"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-12 sm:col-span-6">
                                            <div class="box">
                                                <div class="box-body">
                                                    <div class="flex items-center mb-3">
                                                        <span class="avatar avatar-sm inline-flex justify-center items-center rounded-full bg-success text-white ltr:mr-2 rtl:ml-2">
                                                            <i class="ri-group-line text-base"></i>
                                                        </span>
                                                        <p class="mb-0 flex-auto text-gray-500 dark:text-white/70">Active Members</p>
                                                    </div>
                                                    <span class="text-xl font-semibold text-gray-800 dark:text-white">$12,897</span>
                                                    <span class="text-xs text-success inline-flex"><i class="ti ti-trending-up ltr:mr-1 rtl:ml-1"></i>3.5%</span>
                                                    <div class="font-normal flex items-center mb-2 mt-4">
                                                        <p class="mb-0 flex-auto">Active Candidates</p>
                                                        <span>3,274</span>
                                                    </div>
                                                    <div class="ti-main-progress bg-gray-200 dark:bg-black/20 mb-4">
                                                        <div class="ti-main-progress-bar bg-success text-xs text-white text-center" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="font-normal flex items-center mb-2">
                                                        <p class="mb-0 flex-auto">Active Recruiters</p>
                                                        <span>8,726</span>
                                                    </div>
                                                    <div class="ti-main-progress bg-gray-200 dark:bg-black/20 mb-2">
                                                        <div class="ti-main-progress-bar bg-success text-xs text-white text-center" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="box-footer text-center">
                                                    <div class="d-grid">
                                                        <a href="javascript:void(0);" class="text-primary">View Details <i class="ti ti-external-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:!col-span-3 lg:col-span-6 col-span-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="flex items-center mb-2">
                                                <div class="flex-auto flex items-center">
                                                    <div class="ltr:mr-2 rtl:ml-2">
                                                        <span class="avatar inline-flex justify-center items-center rounded-sm bg-primary text-white text-xl"><i class="ri-group-line"></i></span>
                                                    </div>
                                                    <div class="flex-auto">
                                                        <p class="mb-0 ">Premium Recruiters</p>
                                                        <span class="text-success text-xs">7 New</span>
                                                    </div>
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0);" class="ti-btn ti-btn-soft-primary" aria-label="View All"><i class="ri-arrow-right-s-line rtl:rotate-180"></i></a>
                                                </div>
                                            </div>
                                            <p class="mb-2 text-xl font-semibold text-gray-800 dark:text-white">386</p>
                                            <p class="mb-2 text-gray-500 dark:text-white/70 font-normal">Recents</p>
                                            <div class="flex items-center justify-between">
                                            <div class="flex -space-x-2 rtl:space-x-reverse">
                                                <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/1.jpg')); ?>" alt="Image Description">
                                                <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/4.jpg')); ?>" alt="Image Description">
                                                <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/2.jpg')); ?>" alt="Image Description">
                                                <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/3.jpg')); ?>" alt="Image Description">
                                                <span class="inline-flex items-center justify-center w-6 h-6 rounded-full bg-gray-100 border-2 border-gray-200 dark:bg-black/20 dark:border-white/10">
                                                <span class="font-medium text-gray-500 leading-none dark:text-white/70">4+</span>
                                                </span>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <div class="box-body p-4">
                                            <div class="flex items-center">
                                                <div class="flex-auto">
                                                    <p class="mb-1 text-xl text-gray-800 dark:text-white font-semibold">1,773</p>
                                                    <p class="mb-0 text-gray-500 dark:text-white/70 text-sm">Active Members</p>
                                                    <p class="mb-0 text-xs"><a href="javascript:void(0);" class="text-success underline">View All</a></p>
                                                </div>
                                                <div class="ltr:ml-2 rtl:mr-2">
                                                    <span class="avatar inline-flex items-center justify-center bg-info text-white rounded-full text-xl"><i class="ri-group-line"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <div class="box-body p-4">
                                            <div class="flex items-center">
                                                <div class="flex-auto">
                                                    <p class="mb-1 text-xl text-gray-800 dark:text-white font-semibold">116</p>
                                                    <p class="mb-0 text-gray-500 dark:text-white/70 text-sm">Registrations</p>
                                                    <p class="mb-0 text-xs"><a href="javascript:void(0);" class="text-success underline">View All</a></p>
                                                </div>
                                                <div class="ltr:ml-2 rtl:mr-2">
                                                    <span class="avatar inline-flex items-center justify-center text-white bg-success rounded-full text-xl"><i class="ri-file-text-line"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:!col-span-2 lg:col-span-6 col-span-12">
                                    <div class="box !bg-primary text-white">
                                        <div class="box-header flex justify-between border-b-0 bg-white/10">
                                            <div class="box-title my-auto text-white">
                                                Premium Recruiters
                                            </div>
                                            <div>
                                                <button aria-label="button" type="button" class="ti-btn ti-btn-primary p-2"><i class="ri-arrow-right-s-line rtl:rotate-180"></i></button>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="flex flex-wrap ">
                                                <div class="flex-auto overflow-hidden">
                                                    <p class="mb-2 leading-none text-xl font-semibold">9,231</p>
                                                    <p class="mb-0 text-xs text-white opacity-70">
                                                        <span><i class="ri-arrow-up-s-fill"></i> 2.3%</span>
                                                        <span class="opacity-70 ltr:ml-1 rtl:mr-1">From Last Month</span>
                                                    </p>
                                                </div>
                                                <div>
                                                    <span class="avatar inline-flex justify-center items-center w-6 h-6 bg-success rounded-full ring-0 text-white"><i class="text-xs ri-group-fill"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <div class="box-body p-0">
                                            <div class="p-3">
                                                <div class="flex flex-wrap mb-1">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="ltr:pr-2 rtl:pl-2">
                                                        <span class="avatar rounded-sm inline-flex justify-center items-center border border-gray-200 dark:border-white/10 text-primary"><i class="ri-apple-fill text-lg"></i></span>
                                                    </a>
                                                    <div class="flex-auto">
                                                        <div class="flex flex-wrap items-center justify-between mb-1 text-sm">
                                                            <span class="font-semibold">App1e</span>
                                                            <span class="text-success text-end"><i class="ti ti-trending-up text-xs ltr:mr-1 rtl:ml-1"></i>0.14%</span>
                                                        </div>
                                                        <div class="flex flex-wrap items-center justify-between text-xs mb-3">
                                                            <span class="text-gray-500 dark:text-white/70">$12,289.44</span>
                                                            <span class="text-success text-end">+$1,780.80</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <a href="javascript:void(0);" class="flex-auto ti-btn m-0 py-1 bg-gray-100 text-gray-800 hover:text-white hover:bg-black/20 ring-offset-white focus:ring-white/10 dark:bg-black/20 dark:hover:bg-gray-900 dark:text-white ltr:mr-2 rtl:ml-2">Short</a>
                                                    <a href="javascript:void(0);" class="flex-auto ti-btn ti-btn-soft-primary py-1">Buy</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <div class="box-body p-0">
                                            <div class="p-3">
                                                <div class="flex flex-wrap mb-1">
                                                    <a  aria-label="anchor" href="javascript:void(0);" class="ltr:pr-2 rtl:pl-2">
                                                        <span class="avatar rounded-sm inline-flex justify-center items-center border border-gray-200 dark:border-white/10 text-primary"><i class="ri-bit-coin-fill text-lg"></i></span>
                                                    </a>
                                                    <div class="flex-auto">
                                                        <div class="flex flex-wrap items-center justify-between mb-1 text-sm">
                                                            <span class="font-semibold">Bitcoin</span>
                                                            <span class="text-success text-end"><i class="ti ti-trending-up text-xs ltr:mr-1 rtl:ml-1"></i>2.14%</span>
                                                        </div>
                                                        <div class="flex flex-wrap items-center justify-between text-xs mb-3">
                                                            <span class="text-gray-500 dark:text-white/70">$58,151.02</span>
                                                            <span class="text-success text-end">+$5,745.62</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <a href="javascript:void(0);" class="flex-auto ti-btn m-0 py-1 bg-gray-100 text-gray-800 hover:text-white hover:bg-black/20 ring-offset-white focus:ring-white/10 dark:bg-black/20 dark:hover:bg-gray-900 dark:text-white ltr:mr-2 rtl:ml-2">Short</a>
                                                    <a href="javascript:void(0);" class="flex-auto ti-btn ti-btn-soft-primary py-1">Buy</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-2 -->

                            <!-- Start::row-3 -->
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xxl:!col-span-3 md:col-span-6 col-span-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="flex justify-between mb-6">
                                                <div class="flex-auto flex">
                                                    <div class="ltr:mr-2 rtl:ml-2">
                                                        <span class="avatar inline-flex justify-center items-center avatar-sm text-primary border border-gray-200 dark:border-white/10 bg-gray-100 dark:bg-black/20 rounded-sm"><i class="ti ti-users text-lg"></i></span>
                                                    </div>
                                                    <div class="flex-auto">
                                                        <p class="font-semibold text-sm mb-0">Total Candidates</p>
                                                        <p class="mb-0 text-gray-500 dark:text-white/70 text-xs opacity-70">Magna sit elitr kasd consetetur.</p>
                                                    </div>
                                                </div>
                                                <div class="hs-dropdown ti-dropdown block ltr:ml-auto rtl:mr-auto my-auto">
                                                    <button  aria-label="button" type="button"
                                                        class="hs-dropdown-toggle ti-dropdown-toggle rounded-sm p-2 bg-white !border border-gray-200 text-gray-500 hover:bg-gray-100  focus:ring-gray-200 dark:bg-black/20 dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                                                        <i class="text-sm leading-none ti ti-dots"></i> </button>
                                                    <div class="hs-dropdown-menu ti-dropdown-menu">
                                                        <a class="ti-dropdown-item" href="javascript:void(0)">Action</a>
                                                        <a class="ti-dropdown-item" href="javascript:void(0)">Another Action</a>
                                                        <a class="ti-dropdown-item" href="javascript:void(0)">Something else
                                                            here</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex items-center mb-0">
                                                <p class="mb-0 text-xl font-semibold">2,460</p>
                                                <span class="text-gray-500 dark:text-white/70 ltr:ml-2 rtl:mr-2 inline-flex"><i class="ti ti-trending-up align-middle text-success ltr:mr-1 rtl:ml-1"></i>2.5%</span>
                                            </div>
                                            <div class="flex items-center">
                                                <div class="flex-auto">
                                                    <div class="ti-main-progress bg-gray-200 dark:bg-black/20">
                                                        <div class="ti-main-progress-bar bg-primary text-xs text-white text-center" role="progressbar" style="width: 14%" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                </div>
                                                <div class="ltr:ml-3 rtl:mr-3">
                                                    <span class="text-xs text-gray-500 dark:text-white/70">14% Target</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:!col-span-3 md:col-span-6 col-span-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="flex justify-between mb-6">
                                                <div class="flex-auto flex">
                                                    <div class="ltr:mr-2 rtl:ml-2">
                                                        <span class="avatar inline-flex justify-center items-center avatar-sm text-secondary border border-gray-200 dark:border-white/10 bg-gray-100 dark:bg-black/20 rounded-sm"><i class="ti ti-user-circle text-lg"></i></span>
                                                    </div>
                                                    <div class="flex-auto">
                                                        <p class="font-semibold text-sm mb-0">Recruiters</p>
                                                        <p class="mb-0 text-gray-500 dark:text-white/70 text-xs opacity-70">Elitr at gubergren sit sed.</p>
                                                    </div>
                                                </div>
                                                <div class="hs-dropdown ti-dropdown block ltr:ml-auto rtl:mr-auto my-auto">
                                                    <button  aria-label="button" type="button"
                                                        class="hs-dropdown-toggle ti-dropdown-toggle rounded-sm p-2 bg-white !border border-gray-200 text-gray-500 hover:bg-gray-100  focus:ring-gray-200 dark:bg-black/20 dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                                                        <i class="text-sm leading-none ti ti-dots"></i> </button>
                                                    <div class="hs-dropdown-menu ti-dropdown-menu">
                                                        <a class="ti-dropdown-item" href="javascript:void(0)">Action</a>
                                                        <a class="ti-dropdown-item" href="javascript:void(0)">Another Action</a>
                                                        <a class="ti-dropdown-item" href="javascript:void(0)">Something else
                                                            here</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex items-center mb-0">
                                                <p class="mb-0 text-xl font-semibold">7,539</p>
                                                <span class="text-gray-500 dark:text-white/70 ltr:ml-2 rtl:mr-2 inline-flex"><i class="ti ti-trending-up align-middle text-success ltr:mr-1 rtl:ml-1"></i>3.1%</span>
                                            </div>
                                            <div class="flex items-center">
                                                <div class="flex-auto">
                                                    <div class="ti-main-progress bg-gray-200 dark:bg-black/20">
                                                        <div class="ti-main-progress-bar bg-secondary text-xs text-white text-center" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                </div>
                                                <div class="ltr:ml-3 rtl:mr-3">
                                                    <span class="text-xs text-gray-500 dark:text-white/70">55% Target</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:!col-span-3 md:col-span-6 col-span-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="flex justify-between mb-6">
                                                <div class="flex-auto flex">
                                                    <div class="ltr:mr-2 rtl:ml-2">
                                                        <span class="avatar inline-flex justify-center items-center avatar-sm text-success border border-gray-200 dark:border-white/10 bg-gray-100 dark:bg-black/20 rounded-sm"><i class="ti ti-view-360 text-lg"></i></span>
                                                    </div>
                                                    <div class="flex-auto">
                                                        <p class="font-semibold text-sm mb-0">Page Views</p>
                                                        <p class="mb-0 text-gray-500 dark:text-white/70 text-xs opacity-70">Sed duo ut sanctus gubergren.</p>
                                                    </div>
                                                </div>
                                                <div class="hs-dropdown ti-dropdown block ltr:ml-auto rtl:mr-auto my-auto">
                                                    <button  aria-label="button" type="button"
                                                        class="hs-dropdown-toggle ti-dropdown-toggle rounded-sm p-2 bg-white !border border-gray-200 text-gray-500 hover:bg-gray-100  focus:ring-gray-200 dark:bg-black/20 dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                                                        <i class="text-sm leading-none ti ti-dots"></i> </button>
                                                    <div class="hs-dropdown-menu ti-dropdown-menu">
                                                        <a class="ti-dropdown-item" href="javascript:void(0)">Action</a>
                                                        <a class="ti-dropdown-item" href="javascript:void(0)">Another Action</a>
                                                        <a class="ti-dropdown-item" href="javascript:void(0)">Something else
                                                            here</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex items-center mb-0">
                                                <p class="mb-0 text-xl font-semibold">13,693</p>
                                                <span class="text-gray-500 dark:text-white/70 ltr:ml-2 rtl:mr-2 inline-flex"><i class="ti ti-trending-up align-middle text-success ltr:mr-1 rtl:ml-1"></i>5.4%</span>
                                            </div>
                                            <div class="flex items-center">
                                                <div class="flex-auto">
                                                    <div class="ti-main-progress bg-gray-200 dark:bg-black/20">
                                                        <div class="ti-main-progress-bar bg-success text-xs text-white text-center" role="progressbar" style="width: 24%" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                </div>
                                                <div class="ltr:ml-3 rtl:mr-3">
                                                    <span class="text-xs text-gray-500 dark:text-white/70">24% Target</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:!col-span-3 md:col-span-6 col-span-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="flex justify-between mb-6">
                                                <div class="flex-auto flex">
                                                    <div class="ltr:mr-2 rtl:ml-2">
                                                        <span class="avatar inline-flex justify-center items-center avatar-sm text-info border border-gray-200 dark:border-white/10 bg-gray-100 dark:bg-black/20 rounded-sm"><i class="ti ti-view-360 text-lg"></i></span>
                                                    </div>
                                                    <div class="flex-auto">
                                                        <p class="font-semibold text-sm mb-0">Total Subscriptions</p>
                                                        <p class="mb-0 text-gray-500 dark:text-white/70 text-xs opacity-70">Invidunt magna voluptua.</p>
                                                    </div>
                                                </div>
                                                <div class="hs-dropdown ti-dropdown block ltr:ml-auto rtl:mr-auto my-auto">
                                                    <button  aria-label="button" type="button"
                                                        class="hs-dropdown-toggle ti-dropdown-toggle rounded-sm p-2 bg-white !border border-gray-200 text-gray-500 hover:bg-gray-100  focus:ring-gray-200 dark:bg-black/20 dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                                                        <i class="text-sm leading-none ti ti-dots"></i> </button>
                                                    <div class="hs-dropdown-menu ti-dropdown-menu">
                                                        <a class="ti-dropdown-item" href="javascript:void(0)">Action</a>
                                                        <a class="ti-dropdown-item" href="javascript:void(0)">Another Action</a>
                                                        <a class="ti-dropdown-item" href="javascript:void(0)">Something else
                                                            here</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex items-center mb-0">
                                                <p class="mb-0 text-xl font-semibold">1,116</p>
                                                <span class="text-gray-500 dark:text-white/70 ltr:ml-2 rtl:mr-2 inline-flex"><i class="ti ti-trending-down align-middle text-danger ltr:mr-1 rtl:ml-1"></i>3.2%</span>
                                            </div>
                                            <div class="flex items-center">
                                                <div class="flex-auto">
                                                    <div class="ti-main-progress bg-gray-200 dark:bg-black/20">
                                                        <div class="ti-main-progress-bar bg-info text-xs text-white text-center" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                </div>
                                                <div class="ltr:ml-3 rtl:mr-3">
                                                    <span class="text-xs text-gray-500 dark:text-white/70">67% Target</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-3 -->

                            <!-- Start::row-4 -->
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xxl:col-span-9 col-span-12">
                                    <div class="box">
                                        <div class="box-body p-0">
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-12 md:col-span-3 md:ltr:border-r md:rtl:border-l md:border-b-0 border-b border-dashed border-gray-200 dark:border-white/10">
                                                    <div class="flex flex-wrap p-6">
                                                        <div class="ltr:mr-3 rtl:ml-3 leading-none">
                                                            <span class="avatar inline-flex justify-center items-center avatar-sm rounded-full bg-primary text-white shadow-sm">
                                                                <i class="ti ti-package text-lg"></i>
                                                            </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <h5 class="font-semibold mb-1">45,280</h5>
                                                            <p class="text-gray-500 dark:text-white/70 mb-0 text-xs">Total Products</p>
                                                        </div>
                                                        <div class="mt-2">
                                                            <span class="badge bg-success/10 text-success py-1 rounded-sm"><i class="ri-arrow-up-s-line align-middle"></i>1.31%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-span-12 md:col-span-3 md:ltr:border-r md:rtl:border-l md:border-b-0 border-b border-dashed border-gray-200 dark:border-white/10">
                                                    <div class="flex flex-wrap p-6">
                                                        <div class="ltr:mr-3 rtl:ml-3 leading-none">
                                                            <span class="avatar inline-flex justify-center items-center avatar-sm rounded-full bg-secondary text-white shadow-sm">
                                                                <i class="ti ti-rocket text-lg"></i>
                                                            </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <h5 class="font-semibold mb-1">10,500</h5>
                                                            <p class="text-gray-500 dark:text-white/70 mb-0 text-xs">Total Sales</p>
                                                        </div>
                                                        <div class="mt-2">
                                                            <span class="badge bg-danger/10 text-danger py-1 rounded-sm"><i class="ri-arrow-down-s-line align-middle"></i>1.14%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-span-12 md:col-span-3 md:ltr:border-r md:rtl:border-l md:border-b-0 border-b border-dashed border-gray-200 dark:border-white/10">
                                                    <div class="flex flex-wrap p-6">
                                                        <div class="ltr:mr-3 rtl:ml-3 leading-none">
                                                            <span class="avatar inline-flex justify-center items-center avatar-sm rounded-full bg-success text-white shadow-sm">
                                                                <i class="ti ti-wallet text-lg"></i>
                                                            </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <h5 class="font-semibold mb-1">$69,270</h5>
                                                            <p class="text-gray-500 dark:text-white/70 mb-0 text-xs">Income</p>
                                                        </div>
                                                        <div class="mt-2">
                                                            <span class="badge bg-success/10 text-success py-1 rounded-sm"><i class="ri-arrow-up-s-line align-middle"></i>2.58%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-span-12 md:col-span-3">
                                                    <div class="flex flex-wrap p-6">
                                                        <div class="ltr:mr-3 rtl:ml-3 leading-none">
                                                            <span class="avatar inline-flex justify-center items-center avatar-sm rounded-full bg-warning text-white shadow-sm">
                                                                <i class="ti ti-box text-lg"></i>
                                                            </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <h5 class="font-semibold mb-1">12,088</h5>
                                                            <p class="text-gray-500 dark:text-white/70 mb-0 text-xs">Total Orders</p>
                                                        </div>
                                                        <div class="mt-2">
                                                            <span class="badge bg-success/10 text-success py-1 rounded-sm"><i class="ri-arrow-up-s-line align-middle"></i>12.05%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 xxl:col-span-3">
                                    <div class="box !bg-primary text-white">
                                        <div class="box-body p-0">
                                            <div class="flex p-6">
                                                <div class="ltr:mr-3 rtl:ml-3 leading-none">
                                                    <span class="avatar inline-flex justify-center items-center avatar-sm rounded-full bg-white text-primary shadow-sm">
                                                        <i class="ti ti-coin text-lg"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-auto">
                                                    <h5 class="font-semibold mb-1">$21,520</h5>
                                                    <p class="opacity-70 mb-0 text-xs">Expenses</p>
                                                </div>
                                                <div>
                                                    <span class="badge bg-success text-white py-1 rounded-sm"><i class="ri-arrow-up-s-line align-middle"></i>14.69%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-4 -->

                            <!-- Start::row-5 -->
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xxl:!col-span-2 md:!col-span-4 sm:col-span-6 col-span-12">
                                    <div class="box border-t-4 !border-t-primary">
                                        <div class="box-body">
                                            <div class="text-center">
                                                <span class="avatar inline-flex justify-center items-center avatar-sm bg-primary text-white shadow-sm rounded-full mb-2">
                                                    <i class="ri-briefcase-2-line text-base"></i>
                                                </span>
                                                <p class="text-sm font-semibold mb-2">Total Sales</p>
                                                <div class="flex items-center justify-center">
                                                    <h5 class="mb-0 font-semibold">15,800</h5>
                                                    <span class="badge bg-success/10 rounded-full ltr:ml-1 rtl:mr-1 py-1 text-success">+25.8%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:!col-span-2 md:!col-span-4 sm:col-span-6 col-span-12">
                                    <div class="box border-t-4 !border-t-secondary">
                                        <div class="box-body">
                                            <div class="text-center">
                                                <span class="avatar inline-flex justify-center items-center avatar-sm bg-secondary text-white shadow-sm rounded-full mb-2">
                                                    <i class="ri-bill-line text-base"></i>
                                                </span>
                                                <p class="text-sm font-semibold mb-2">Total Tax</p>
                                                <div class="flex items-center justify-center">
                                                    <h5 class="mb-0 font-semibold">$12,650</h5>
                                                    <span class="badge bg-success/10 rounded-full ltr:ml-1 rtl:mr-1 py-1 text-success">+12.2%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:!col-span-2 md:!col-span-4 sm:col-span-6 col-span-12">
                                    <div class="box border-t-4 !border-t-success">
                                        <div class="box-body">
                                            <div class="text-center">
                                                <span class="avatar inline-flex justify-center items-center avatar-sm bg-success text-white shadow-sm rounded-full mb-2">
                                                    <i class="ri-wallet-2-line text-base"></i>
                                                </span>
                                                <p class="text-sm font-semibold mb-2">Total Income</p>
                                                <div class="flex items-center justify-center">
                                                    <h5 class="mb-0 font-semibold">$14,800</h5>
                                                    <span class="badge bg-success/10 rounded-full ltr:ml-1 rtl:mr-1 py-1 text-success">+7.45%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:!col-span-2 md:!col-span-4 sm:col-span-6 col-span-12">
                                    <div class="box border-t-4 !border-t-info">
                                        <div class="box-body">
                                            <div class="text-center">
                                                <span class="avatar inline-flex justify-center items-center avatar-sm bg-info text-white shadow-sm rounded-full mb-2">
                                                    <i class="ri-line-chart-line text-base"></i>
                                                </span>
                                                <p class="text-sm font-semibold mb-2">Total Expenses</p>
                                                <div class="flex items-center justify-center">
                                                    <h5 class="mb-0 font-semibold">$7,566</h5>
                                                    <span class="badge bg-danger/10 rounded-full ltr:ml-1 rtl:mr-1 py-1 text-danger">-3.21%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:!col-span-2 md:!col-span-4 sm:col-span-6 col-span-12">
                                    <div class="box border-t-4 !border-t-warning">
                                        <div class="box-body">
                                            <div class="text-center">
                                                <span class="avatar inline-flex justify-center items-center avatar-sm bg-warning text-white shadow-sm rounded-full mb-2">
                                                    <i class="ri-money-dollar-box-line text-base"></i>
                                                </span>
                                                <p class="text-sm font-semibold mb-2">Sales Profit</p>
                                                <div class="flex items-center justify-center">
                                                    <h5 class="mb-0 font-semibold">$7,474</h5>
                                                    <span class="badge bg-success/10  rounded-full ltr:ml-1 rtl:mr-1 py-1 text-success">+36.03%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:!col-span-2 md:!col-span-4 sm:col-span-6 col-span-12">
                                    <div class="box border-t-4 !border-t-danger">
                                        <div class="box-body">
                                            <div class="text-center">
                                                <span class="avatar inline-flex justify-center items-center avatar-sm bg-danger text-white shadow-sm rounded-full mb-2">
                                                    <i class="ri-profile-line text-base"></i>
                                                </span>
                                                <p class="text-sm font-semibold mb-2">Opex Ratio</p>
                                                <div class="flex items-center justify-center">
                                                    <h5 class="mb-0 font-semibold">32%</h5>
                                                    <span class="badge bg-success/10  rounded-full ltr:ml-1 rtl:mr-1 py-1 text-success">+0.89%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-5 -->

                            <!-- Start::row-6 -->
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xxl:col-span-6 col-span-12">
                                    <div class="box">
                                        <div class="box-header justify-between flex">
                                            <div class="box-title my-auto">
                                                Upcoming Events
                                            </div>
                                            <div>
                                                <button aria-label="button" type="button" class="ti-btn ti-btn-soft-primary ltr:mr-2 rtl:ml-2 py-1 m-0">View All</button>
                                            </div>
                                        </div>
                                        <div class="box-body overflow-auto">
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
                                                                    <span class="text-gray-500 dark:text-white/70  inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>9:00am - 10:00am</span>
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
                                                                    <span class="text-gray-500 dark:text-white/70  inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>12:00pm - 12:45am</span>
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
                                                                    <span class="text-gray-500 dark:text-white/70  inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>4:00pm - 5:30pm</span>
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
                                                                    <span class="text-gray-500 dark:text-white/70  inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>5:00pm - 5:45pm</span>
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
                                                                    <span class="text-gray-500 dark:text-white/70  inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>9:00am - 10:00am</span>
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
                                                                    <span class="text-gray-500 dark:text-white/70  inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>12:00pm - 12:45am</span>
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
                                                                    <span class="text-gray-500 dark:text-white/70  inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>4:00pm - 5:30pm</span>
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
                                                                    <span class="text-gray-500 dark:text-white/70  inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>5:00pm - 5:45pm</span>
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
                                                                    <span class="text-gray-500 dark:text-white/70  inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>9:00am - 10:00am</span>
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
                                                                    <span class="text-gray-500 dark:text-white/70  inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>12:00pm - 12:45am</span>
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
                                                                    <span class="text-gray-500 dark:text-white/70  inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>4:00pm - 5:30pm</span>
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
                                                                    <span class="text-gray-500 dark:text-white/70  inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>5:00pm - 5:45pm</span>
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
                                                                    <span class="text-gray-500 dark:text-white/70  inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>9:00am - 10:00am</span>
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
                                                                    <span class="text-gray-500 dark:text-white/70  inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>12:00pm - 12:45am</span>
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
                                                                    <span class="text-gray-500 dark:text-white/70  inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>4:00pm - 5:30pm</span>
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
                                                                    <span class="text-gray-500 dark:text-white/70  inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>5:00pm - 5:45pm</span>
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
                                                                    <span class="text-gray-500 dark:text-white/70  inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>9:00am - 10:00am</span>
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
                                                                    <span class="text-gray-500 dark:text-white/70  inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>12:00pm - 12:45am</span>
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
                                                                    <span class="text-gray-500 dark:text-white/70  inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>4:00pm - 5:30pm</span>
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
                                                                    <span class="text-gray-500 dark:text-white/70  inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>5:00pm - 5:45pm</span>
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
                                                                    <span class="text-gray-500 dark:text-white/70  inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>9:00am - 10:00am</span>
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
                                                                    <span class="text-gray-500 dark:text-white/70  inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>12:00pm - 12:45am</span>
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
                                                                    <span class="text-gray-500 dark:text-white/70  inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>4:00pm - 5:30pm</span>
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
                                                                    <span class="text-gray-500 dark:text-white/70  inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>5:00pm - 5:45pm</span>
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
                                                                    <span class="text-gray-500 dark:text-white/70  inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>9:00am - 10:00am</span>
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
                                                                    <span class="text-gray-500 dark:text-white/70  inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>12:00pm - 12:45am</span>
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
                                                                    <span class="text-gray-500 dark:text-white/70  inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>4:00pm - 5:30pm</span>
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
                                                                    <span class="text-gray-500 dark:text-white/70  inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>5:00pm - 5:45pm</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-6 col-span-12">
                                    <div class="box">
                                        <div class="box-header justify-between flex">
                                            <div class="box-title my-auto">
                                                Timeline
                                            </div>
                                            <div>
                                                <button type="button"  aria-label="button" class="ti-btn ti-btn-soft-primary ltr:mr-2 rtl:ml-2 py-1 m-0">View All</button>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="overflow-x-auto">
                                                <ul class="list-unstyled timeline-widget mb-0">
                                                    <li class="ti-list-group border-0 p-0 w-full timeline-widget-list">
                                                        <div class="flex w-full">
                                                            <div class="ltr:mr-12 rtl:ml-12 text-center">
                                                                <span class="block text-sm font-semibold">02</span>
                                                                <span class="block text-xs text-gray-500 dark:text-white/70">Mon</span>
                                                            </div>
                                                            <div class="flex flex-wrap flex-auto items-center justify-between">
                                                                <div>
                                                                    <p class="mb-1 truncate timeline-widget-content text-sm text-wrap">You have an announcement - Ipsum Est Diam Eirmod</p>
                                                                    <p class="mb-0 text-xs leading-none text-gray-500 dark:text-white/70">10:00AM<span class="badge bg-primary/10 ltr:ml-2 rtl:mr-2 py-1 text-xs text-primary rounded-sm">Announcement</span></p>
                                                                </div>
                                                                <div class="hs-dropdown ti-dropdown">
                                                                    <a  aria-label="anchor" href="javascript:void(0);" class="text-lg leading-none text-gray-500">
                                                                    <i class="ri-more-2-line"></i>
                                                                    </a>
                                                                    <div class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                                        <a class="ti-dropdown-item" href="javascript:void(0);">
                                                                            Action
                                                                        </a>
                                                                        <a class="ti-dropdown-item" href="javascript:void(0);">
                                                                            Another action
                                                                        </a>
                                                                        <a class="ti-dropdown-item" href="javascript:void(0);">
                                                                            Something else here
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="ti-list-group border-0 p-0 w-full timeline-widget-list">
                                                        <div class="flex w-full">
                                                            <div class="ltr:mr-12 rtl:ml-12 text-center">
                                                                <span class="block text-sm font-semibold">15</span>
                                                                <span class="block text-xs text-gray-500 dark:text-white/70">Sun</span>
                                                            </div>
                                                            <div class="flex flex-wrap flex-auto items-center justify-between">
                                                                <div>
                                                                    <p class="mb-1 truncate timeline-widget-content text-sm text-wrap">National holiday - Vero Jayanti</p>
                                                                    <p class="mb-0 text-xs leading-none text-gray-500 dark:text-white/70"><span class="badge bg-warning/10 ltr:ml-2 rtl:mr-2 py-1 text-xs text-warning rounded-sm">Holiday</span></p>
                                                                </div>
                                                                <div class="hs-dropdown ti-dropdown">
                                                                    <a  aria-label="anchor" href="javascript:void(0);" class="text-lg leading-none text-gray-500">
                                                                    <i class="ri-more-2-line"></i>
                                                                    </a>
                                                                    <div class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                                        <a class="ti-dropdown-item" href="javascript:void(0);">
                                                                            Action
                                                                        </a>
                                                                        <a class="ti-dropdown-item" href="javascript:void(0);">
                                                                            Another action
                                                                        </a>
                                                                        <a class="ti-dropdown-item" href="javascript:void(0);">
                                                                            Something else here
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="ti-list-group border-0 p-0 w-full timeline-widget-list">
                                                        <div class="flex w-full">
                                                            <div class="ltr:mr-12 rtl:ml-12 text-center">
                                                                <span class="block text-sm font-semibold">23</span>
                                                                <span class="block text-xs text-gray-500 dark:text-white/70">Mon</span>
                                                            </div>
                                                            <div class="flex flex-wrap flex-auto items-center justify-between">
                                                                <div>
                                                                    <p class="mb-1 truncate timeline-widget-content text-sm text-wrap">John pup birthday - Team Member</p>
                                                                    <p class="mb-4 text-xs leading-none text-gray-500 dark:text-white/70">09:00AM<span class="badge bg-success/10 ltr:ml-2 rtl:mr-2">Birthday</span></p>
                                                                    <p class="mb-1 truncate timeline-widget-content text-sm text-wrap">Amet sed no dolor kasd - Et Dolores Tempor Erat</p>
                                                                    <p class="mb-0 text-xs leading-none text-gray-500 dark:text-white/70">04:00PM<span class="badge bg-primary/10 ltr:ml-2 rtl:mr-2 py-1 text-xs text-primary rounded-sm">Announcement</span></p>
                                                                </div>
                                                                <div class="hs-dropdown ti-dropdown">
                                                                    <a aria-label="anchor" href="javascript:void(0);" class="text-lg leading-none text-gray-500">
                                                                    <i class="ri-more-2-line"></i>
                                                                    </a>
                                                                    <div class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                                        <a class="ti-dropdown-item" href="javascript:void(0);">
                                                                            Action
                                                                        </a>
                                                                        <a class="ti-dropdown-item" href="javascript:void(0);">
                                                                            Another action
                                                                        </a>
                                                                        <a class="ti-dropdown-item" href="javascript:void(0);">
                                                                            Something else here
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="ti-list-group border-0 p-0 w-full timeline-widget-list">
                                                        <div class="flex w-full">
                                                            <div class="ltr:mr-12 rtl:ml-12 text-center">
                                                                <span class="block text-sm font-semibold">31</span>
                                                                <span class="block text-xs text-gray-500 dark:text-white/70">Tue</span>
                                                            </div>
                                                            <div class="flex flex-wrap flex-auto items-center justify-between">
                                                                <div>
                                                                    <p class="mb-1 truncate timeline-widget-content text-sm text-wrap">National Holiday - Dolore Ipsum</p>
                                                                    <p class="mb-0 text-xs leading-none text-gray-500 dark:text-white/70"><span class="badge bg-warning/10 ltr:ml-2 rtl:mr-2 py-1 text-xs text-warning rounded-sm">Holiday</span></p>
                                                                </div>
                                                                <div class="hs-dropdown ti-dropdown">
                                                                    <a  aria-label="anchor" href="javascript:void(0);" class="text-lg leading-none text-gray-500">
                                                                    <i class="ri-more-2-line"></i>
                                                                    </a>
                                                                    <div class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                                        <a class="ti-dropdown-item" href="javascript:void(0);">
                                                                            Action
                                                                        </a>
                                                                        <a class="ti-dropdown-item" href="javascript:void(0);">
                                                                            Another action
                                                                        </a>
                                                                        <a class="ti-dropdown-item" href="javascript:void(0);">
                                                                            Something else here
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-6 col-span-12">
                                    <div class="box">
                                        <div class="box-header flex justify-between">
                                            <div class="box-title my-auto">
                                                Traffic Sources
                                            </div>
                                            <div class="hs-dropdown ti-dropdown block ltr:ml-auto rtl:mr-auto my-auto">
                                                <button type="button"
                                                    class="hs-dropdown-toggle ti-dropdown-toggle text-xs rounded-sm px-2 py-1 !border-0 hover:!bg-transparent text-gray-500 shadow-none">
                                                    View All<i
                                                        class="text-xs leading-none ri-arrow-down-s-line align-middle ml-1"></i></button>
                                                <div class="hs-dropdown-menu ti-dropdown-menu">
                                                    <a class="ti-dropdown-item" href="javascript:void(0)">Download</a>
                                                    <a class="ti-dropdown-item" href="javascript:void(0)">Import</a>
                                                    <a class="ti-dropdown-item" href="javascript:void(0)">Export</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-body p-0 widget-table">
                                            <div class="overflow-auto">
                                                <table class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" class="text-center">Browser</th>
                                                            <th scope="col">Sessions</th>
                                                            <th scope="col">Views</th>
                                                            <th scope="col">Traffic</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="flex items-center">
                                                                    <span class="avatar rounded-full avatar-xs p-2 bg-primary ltr:mr-2 rtl:ml-2 inline-flex justify-center align-center">
                                                                        <i class="ri-google-fill text-lg text-white leading-none"></i>
                                                                    </span>
                                                                    <div class="font-semibold">Google</div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span><i class="ri-arrow-up-s-fill ltr:mr-1 rtl:ml-1 text-success align-middle text-lg"></i>23,379</span>
                                                            </td>
                                                            <td>
                                                                <span>16,890</span>
                                                            </td>
                                                            <td>
                                                                <div class="ti-main-progress bg-gray-200 dark:bg-black/20">
                                                                    <div class="ti-main-progress-bar bg-primary text-xs text-white text-center" role="progressbar" style="width: 34%" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="flex items-center">
                                                                    <span class="avatar rounded-full avatar-xs p-2 bg-primary ltr:mr-2 rtl:ml-2 inline-flex justify-center align-center">
                                                                        <i class="ri-safari-line text-lg text-white leading-none"></i>
                                                                    </span>
                                                                    <div class="font-semibold">Safari</div>
                                                                </div>

                                                            </td>
                                                            <td>
                                                                <span><i class="ri-arrow-up-s-fill ltr:mr-1 rtl:ml-1 text-success align-middle text-lg"></i>78,973</span>
                                                            </td>
                                                            <td>
                                                                <span>29,906</span>
                                                            </td>
                                                            <td>
                                                                <div class="ti-main-progress bg-gray-200 dark:bg-black/20">
                                                                    <div class="ti-main-progress-bar bg-primary text-xs text-white text-center" role="progressbar" style="width: 58%" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="flex items-center">
                                                                    <span class="avatar rounded-full avatar-xs p-2 bg-primary ltr:mr-2 rtl:ml-2 inline-flex justify-center align-center">
                                                                        <i class="ri-opera-fill text-lg text-white leading-none"></i>
                                                                    </span>
                                                                    <div class="font-semibold">Opera</div>
                                                                </div>

                                                            </td>
                                                            <td>
                                                                <span><i class="ri-arrow-up-s-fill ltr:mr-1 rtl:ml-1 text-success align-middle text-lg"></i>12,457</span>
                                                            </td>
                                                            <td>
                                                                <span>8,674</span>
                                                            </td>
                                                            <td>
                                                                <div class="ti-main-progress bg-gray-200 dark:bg-black/20">
                                                                    <div class="ti-main-progress-bar bg-primary text-xs text-white text-center" role="progressbar" style="width: 62%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="flex items-center">
                                                                    <span class="avatar rounded-full avatar-xs p-2 bg-primary ltr:mr-2 rtl:ml-2 inline-flex justify-center align-center">
                                                                        <i class="ri-edge-fill text-lg text-white leading-none"></i>
                                                                    </span>
                                                                    <div class="font-semibold">Edge</div>
                                                                </div>

                                                            </td>
                                                            <td>
                                                                <span><i class="ri-arrow-up-s-fill ltr:mr-1 rtl:ml-1 text-success align-middle text-lg"></i>8,570</span>
                                                            </td>
                                                            <td>
                                                                <span>4,980</span>
                                                            </td>
                                                            <td>
                                                                <div class="ti-main-progress bg-gray-200 dark:bg-black/20">
                                                                    <div class="ti-main-progress-bar bg-primary text-xs text-white text-center" role="progressbar" style="width: 71%" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="flex items-center">
                                                                    <span class="avatar rounded-full avatar-xs p-2 bg-primary ltr:mr-2 rtl:ml-2 inline-flex justify-center align-center">
                                                                        <i class="ri-firefox-fill text-lg text-white leading-none"></i>
                                                                    </span>
                                                                    <div class="font-semibold">Firefox</div>
                                                                </div>

                                                            </td>
                                                            <td>
                                                                <span><i class="ri-arrow-up-s-fill ltr:mr-1 rtl:ml-1 text-success align-middle text-lg"></i>6,135</span>
                                                            </td>
                                                            <td>
                                                                <span>4,436</span>
                                                            </td>
                                                            <td>
                                                                <div class="ti-main-progress bg-gray-200 dark:bg-black/20">
                                                                    <div class="ti-main-progress-bar bg-primary text-xs text-white text-center" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="flex items-center">
                                                                    <span class="avatar rounded-full avatar-xs p-2 bg-primary ltr:mr-2 rtl:ml-2 inline-flex justify-center align-center">
                                                                        <i class="ri-ubuntu-fill text-lg text-white leading-none"></i>
                                                                    </span>
                                                                    <div class="font-semibold">Ubuntu</div>
                                                                </div>

                                                            </td>
                                                            <td>
                                                                <span><i class="ri-arrow-up-s-fill ltr:mr-1 rtl:ml-1 text-success align-middle text-lg"></i>4,789</span>
                                                            </td>
                                                            <td>
                                                                <span>2,447</span>
                                                            </td>
                                                            <td>
                                                                <div class="ti-main-progress bg-gray-200 dark:bg-black/20">
                                                                    <div class="ti-main-progress-bar bg-primary text-xs text-white text-center" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-6 col-span-12">
                                    <div class="box">
                                        <div class="box-header flex justify-between">
                                            <div class="box-title my-auto">
                                                Recent Tasks
                                            </div>
                                            <div class="hs-dropdown ti-dropdown block ltr:ml-auto rtl:mr-auto my-auto">
                                                <button type="button"
                                                    class="hs-dropdown-toggle ti-dropdown-toggle text-xs rounded-sm px-2 py-1 !border-0 hover:!bg-transparent text-gray-500 shadow-none">
                                                    View All<i
                                                        class="text-xs leading-none ri-arrow-down-s-line align-middle ml-1"></i></button>
                                                <div class="hs-dropdown-menu ti-dropdown-menu">
                                                    <a class="ti-dropdown-item" href="javascript:void(0)">Download</a>
                                                    <a class="ti-dropdown-item" href="javascript:void(0)">Import</a>
                                                    <a class="ti-dropdown-item" href="javascript:void(0)">Export</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-body widget-table">
                                            <div class="table-bordered rounded-sm overflow-auto">
                                                <table class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">S.No</th>
                                                            <th scope="col">Title</th>
                                                            <th scope="col">Assigned To</th>
                                                            <th scope="col">Progress</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col">Due Date</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>01</td>
                                                            <td>Server Side Validation</td>
                                                            <td>
                                                                <div class="flex -space-x-2 rtl:space-x-reverse">
                                                                    <img class="avatar w-5 h-5 rounded-full" src="<?php echo e(asset('build/assets/img/users/1.jpg')); ?>" alt="Image Description">
                                                                    <img class="avatar w-5 h-5 rounded-full" src="<?php echo e(asset('build/assets/img/users/4.jpg')); ?>" alt="Image Description">
                                                                    <img class="avatar w-5 h-5 rounded-full" src="<?php echo e(asset('build/assets/img/users/2.jpg')); ?>" alt="Image Description">
                                                                    <img class="avatar w-5 h-5 rounded-full" src="<?php echo e(asset('build/assets/img/users/3.jpg')); ?>" alt="Image Description">
                                                                    <span class="inline-flex items-center justify-center w-5 h-5 rounded-full bg-primary border-2 border-primary dark:bg-primary dark:primary">
                                                                    <span class="font-medium text-white leading-none dark:text-white">2+</span>
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="ti-main-progress bg-gray-200 dark:bg-black/20">
                                                                    <div class="ti-main-progress-bar bg-primary text-xs text-white text-center" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-primary/10 text-primary py-1 rounded-sm">In Progress</span>
                                                            </td>
                                                            <td>
                                                                17-04-2023
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>02</td>
                                                            <td>Multipurpose Dashboard Template</td>
                                                            <td>

                                                                <div class="flex -space-x-2 rtl:space-x-reverse">
                                                                    <img class="avatar w-5 h-5 rounded-full" src="<?php echo e(asset('build/assets/img/users/1.jpg')); ?>" alt="Image Description">
                                                                    <img class="avatar w-5 h-5 rounded-full" src="<?php echo e(asset('build/assets/img/users/4.jpg')); ?>" alt="Image Description">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="ti-main-progress bg-gray-200 dark:bg-black/20">
                                                                    <div class="ti-main-progress-bar bg-primary text-xs text-white text-center" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-warning/10 text-warning py-1 rounded-sm">Pending</span>
                                                            </td>
                                                            <td>
                                                                14-05-2023
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>03</td>
                                                            <td>Documentation Project</td>
                                                            <td>

                                                                <div class="flex -space-x-2 rtl:space-x-reverse">
                                                                    <img class="avatar w-5 h-5 rounded-full" src="<?php echo e(asset('build/assets/img/users/1.jpg')); ?>" alt="Image Description">
                                                                    <img class="avatar w-5 h-5 rounded-full" src="<?php echo e(asset('build/assets/img/users/4.jpg')); ?>" alt="Image Description">
                                                                    <img class="avatar w-5 h-5 rounded-full" src="<?php echo e(asset('build/assets/img/users/3.jpg')); ?>" alt="Image Description">
                                                                    <span class="inline-flex items-center justify-center w-5 h-5 rounded-full bg-primary border-2 border-primary dark:bg-primary dark:primary">
                                                                    <span class="font-medium text-white leading-none dark:text-white">1+</span>
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="ti-main-progress bg-gray-200 dark:bg-black/20">
                                                                    <div class="ti-main-progress-bar bg-primary text-xs text-white text-center" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-success/10 text-success py-1 rounded-sm">Completed</span>
                                                            </td>
                                                            <td>
                                                                20-04-2023
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>04</td>
                                                            <td>HR Management Template Design</td>
                                                            <td>
                                                                <div class="flex -space-x-2 rtl:space-x-reverse">
                                                                    <img class="avatar w-5 h-5 rounded-full" src="<?php echo e(asset('build/assets/img/users/1.jpg')); ?>" alt="Image Description">
                                                                    <img class="avatar w-5 h-5 rounded-full" src="<?php echo e(asset('build/assets/img/users/4.jpg')); ?>" alt="Image Description">
                                                                    <img class="avatar w-5 h-5 rounded-full" src="<?php echo e(asset('build/assets/img/users/2.jpg')); ?>" alt="Image Description">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="ti-main-progress bg-gray-200 dark:bg-black/20">
                                                                    <div class="ti-main-progress-bar bg-primary text-xs text-white text-center" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-primary/10 text-primary py-1 rounded-sm">In Progress</span>
                                                            </td>
                                                            <td>
                                                                29-05-2023
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>05</td>
                                                            <td>Developing Backend</td>
                                                            <td>
                                                                <div class="flex -space-x-2 rtl:space-x-reverse">
                                                                    <img class="avatar w-5 h-5 rounded-full" src="<?php echo e(asset('build/assets/img/users/1.jpg')); ?>" alt="Image Description">
                                                                    <img class="avatar w-5 h-5 rounded-full" src="<?php echo e(asset('build/assets/img/users/4.jpg')); ?>" alt="Image Description">
                                                                    <img class="avatar w-5 h-5 rounded-full" src="<?php echo e(asset('build/assets/img/users/2.jpg')); ?>" alt="Image Description">
                                                                    <img class="avatar w-5 h-5 rounded-full" src="<?php echo e(asset('build/assets/img/users/3.jpg')); ?>" alt="Image Description">
                                                                    <span class="inline-flex items-center justify-center w-5 h-5 rounded-full bg-primary border-2 border-primary dark:bg-primary dark:primary">
                                                                    <span class="font-medium text-white leading-none dark:text-white">3+</span>
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="ti-main-progress bg-gray-200 dark:bg-black/20">
                                                                    <div class="ti-main-progress-bar bg-primary text-xs text-white text-center" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-primary/10 text-primary py-1 rounded-sm">In Progress</span>
                                                            </td>
                                                            <td>
                                                                25-05-2023
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>06</td>
                                                            <td>	Design New Dashboard Template</td>
                                                            <td>
                                                                <div class="flex -space-x-2 rtl:space-x-reverse">
                                                                    <img class="avatar w-5 h-5 rounded-full" src="<?php echo e(asset('build/assets/img/users/1.jpg')); ?>" alt="Image Description">
                                                                    <img class="avatar w-5 h-5 rounded-full" src="<?php echo e(asset('build/assets/img/users/4.jpg')); ?>" alt="Image Description">
                                                                    <img class="avatar w-5 h-5 rounded-full" src="<?php echo e(asset('build/assets/img/users/2.jpg')); ?>" alt="Image Description">
                                                                    <img class="avatar w-5 h-5 rounded-full" src="<?php echo e(asset('build/assets/img/users/3.jpg')); ?>" alt="Image Description">
                                                                    <span class="inline-flex items-center justify-center w-5 h-5 rounded-full bg-primary border-2 border-primary dark:bg-primary dark:primary">
                                                                    <span class="font-medium text-white leading-none dark:text-white">3+</span>
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="ti-main-progress bg-gray-200 dark:bg-black/20">
                                                                    <div class="ti-main-progress-bar bg-primary text-xs text-white text-center" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-success/10 text-succbg-success py-1 rounded-sm">Completed</span>
                                                            </td>
                                                            <td>
                                                                04-05-2023
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <div class="box-title">
                                                Users By Country
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="md:flex space-y-3 md:space-y-0 flex-wrap justify-between mb-12">
                                                <div class="ltr:mr-12 rtl:ml-12 flex items-center">
                                                    <div class="ltr:mr-2 rtl:ml-2">
                                                        <span class="avatar inline-flex justify-center items-center rounded-full bg-primary/10 text-primary"><i class="ri-user-3-line text-base"></i></span>
                                                    </div>
                                                    <div class="flex-auto">
                                                        <p class="text-lg leading-none mb-0 text-primary font-semibold">25,350</p>
                                                        <span class="text-gray-500 dark:text-white/70 text-xs">This month</span>
                                                    </div>
                                                </div>
                                                <div class="ltr:mr-6 rtl:ml-6 flex items-center">
                                                    <div class="ltr:mr-2 rtl:ml-2">
                                                        <span class="avatar inline-flex justify-center items-center rounded-full bg-gray-100 dark:bg-black/20"><i class="ri-user-3-line text-base"></i></span>
                                                    </div>
                                                    <div class="flex-auto">
                                                        <p class="text-lg leading-none mb-0 font-semibold">19,200</p>
                                                        <span class="text-gray-500 dark:text-white/70 text-xs">Last month</span>
                                                    </div>
                                                </div>
                                                <div class="ltr:mr-6 rtl:ml-6 flex items-center">
                                                    <div class="ltr:mr-2 rtl:ml-2">
                                                        <span class="avatar inline-flex justify-center items-center rounded-full bg-success/10 text-success"><i class="ri-user-3-line text-base"></i></span>
                                                    </div>
                                                    <div class="flex-auto">
                                                        <p class="text-lg leading-none mb-0 text-success font-semibold">1,24,890</p>
                                                        <span class="text-gray-500 dark:text-white/70 text-xs">This Year</span>
                                                    </div>
                                                </div>
                                                <div class="ltr:mr-6 rtl:ml-6 flex items-center">
                                                    <div class="ltr:mr-2 rtl:ml-2">
                                                        <span class="avatar inline-flex justify-center items-center rounded-full bg-info/10 text-info"><i class="ri-user-3-line text-base"></i></span>
                                                    </div>
                                                    <div class="flex-auto">
                                                        <p class="text-lg leading-none mb-0 text-info font-semibold">1,24,890</p>
                                                        <span class="text-gray-500 dark:text-white/70 text-xs">This Year</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sm:grid sm:grid-cols-12 gap-x-6 space-y-6 sm:space-y-0">
                                                <div class="col-span-12 md:col-span-5">
                                                    <div class="h-full my-auto">
                                                        <ul class="list-group">
                                                            <li class="ti-list-group border-gray-200 bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white w-full">
                                                                <div class="flex items-center justify-between w-full">
                                                                    <div class="inline-flex"><i class="ri-checkbox-blank-circle-fill my-auto text-primary text-xs ltr:mr-1 rtl:ml-1 align-middle"></i>Brazil</div>
                                                                    <div>1,290</div>
                                                                    <div class="text-success"><i class="ri-arrow-up-s-line align-middle ltr:mr-1 rtl:ml-1"></i>2.90%</div>
                                                                </div>
                                                            </li>
                                                            <li class="ti-list-group border-gray-200 bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white w-full">
                                                                <div class="flex items-center justify-between w-full">
                                                                    <div class="inline-flex"><i class="ri-checkbox-blank-circle-fill my-auto text-secondary text-xs ltr:mr-1 rtl:ml-1 align-middle"></i>Greenland</div>
                                                                    <div>2,596</div>
                                                                    <div class="text-danger"><i class="ri-arrow-down-s-line align-middle ltr:mr-1 rtl:ml-1"></i>1.1%</div>
                                                                </div>
                                                            </li>
                                                            <li class="ti-list-group border-gray-200 bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white w-full">
                                                                <div class="flex items-center justify-between w-full">
                                                                    <div class="inline-flex"><i class="ri-checkbox-blank-circle-fill my-auto text-success text-xs ltr:mr-1 rtl:ml-1 align-middle"></i>Russia</div>
                                                                    <div>3,710</div>
                                                                    <div class="text-success"><i class="ri-arrow-up-s-line align-middle ltr:mr-1 rtl:ml-1"></i>0.8%</div>
                                                                </div>
                                                            </li>
                                                            <li class="ti-list-group border-gray-200 bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white w-full">
                                                                <div class="flex items-center justify-between w-full">
                                                                    <div class="inline-flex"><i class="ri-checkbox-blank-circle-fill my-auto text-warning text-xs ltr:mr-1 rtl:ml-1 align-middle"></i>Palestine</div>
                                                                    <div>1,116</div>
                                                                    <div class="text-danger"><i class="ri-arrow-up-s-line align-middle ltr:mr-1 rtl:ml-1"></i>10.06%</div>
                                                                </div>
                                                            </li>
                                                            <li class="ti-list-group border-gray-200 bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white w-full">
                                                                <div class="flex items-center justify-between w-full">
                                                                    <div class="inline-flex"><i class="ri-checkbox-blank-circle-fill my-auto text-danger text-xs ltr:mr-1 rtl:ml-1 align-middle"></i>Canada</div>
                                                                    <div>12,150</div>
                                                                    <div class="text-success"><i class="ri-arrow-up-s-line align-middle ltr:mr-1 rtl:ml-1"></i>9.05%</div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-span-12 md:col-span-7">
                                                    <div id="users-map"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-4 col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <div class="box-title">Recent Applicants</div>
                                        </div>
                                        <div class="box-body">
                                            <div id="views"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-4 col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <div class="box-title">Sessions By Device</div>
                                        </div>
                                        <div class="box-body">
                                            <div id="sessionsByDevice"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-4 col-span-12">
                                    <div class="box">
                                        <div class="box-header flex justify-between">
                                            <div class="box-title my-auto">Target Report</div>
                                            <div class="hs-dropdown ti-dropdown block ltr:ml-auto rtl:mr-auto">
                                                <button type="button"
                                                    class="hs-dropdown-toggle px-2 py-1 ti-btn ti-btn-primary">Sort By<i class="ri-arrow-down-s-line align-middle"></i></button>
                                                <div class="hs-dropdown-menu ti-dropdown-menu">
                                                    <a class="ti-dropdown-item" href="javascript:void(0)">New</a>
                                                    <a class="ti-dropdown-item" href="javascript:void(0)">popular</a>
                                                    <a class="ti-dropdown-item" href="javascript:void(0)">Relevant</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-body pb-4">
                                            <div class="mb-6">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="ltr:float-right rtl:float-left text-primary" fill="currentColor" width="36px" height="36px" viewBox="0 0 24 24"><path fill="currentColor" d="M11,9h4a1,1,0,0,0,0-2H13V6a1,1,0,0,0-2,0V7a3,3,0,0,0,0,6h2a1,1,0,0,1,0,2H9a1,1,0,0,0,0,2h2v1a1,1,0,0,0,2,0V17a3,3,0,0,0,0-6H11a1,1,0,0,1,0-2Zm1-8A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,20a9,9,0,1,1,9-9A9,9,0,0,1,12,21Z"/></svg>
                                                <p class="text-primary font-medium mb-2">Revenue by week</p>
                                                <h4 class="mb-2 font-semibold">$54,125.03</h4>
                                                <span class="text-danger ltr:mr-1 rtl:ml-1 text-sm"> - 1.3%<i class="ri-arrow-down-s-fill align-middle"></i>  </span>
                                                <span class="text-gray-500 dark:text-white/70 text-xs">33% of target reached</span>
                                            </div>
                                            <div id="report"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-6 -->
                            
                        </div>
                        <!-- Start::main-content -->

                    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

        <!-- APEX CHARTS JS -->
        <script src="<?php echo e(asset('build/assets/libs/apexcharts/apexcharts.min.js')); ?>"></script>

        <!-- JSVECTOR MAPS JS -->
        <script src="<?php echo e(asset('build/assets/libs/jsvectormap/js/jsvectormap.min.js')); ?>"></script>

        <!-- JSVECTOR MAPS MAPSJS -->
        <script src="<?php echo e(asset('build/assets/libs/jsvectormap/maps/world-merc.js')); ?>"></script>

        <!-- INDEX JS -->
        <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/widgets.js'); ?>
        

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\laravel\vite\synto\synto\resources\views/pages/widgets.blade.php ENDPATH**/ ?>