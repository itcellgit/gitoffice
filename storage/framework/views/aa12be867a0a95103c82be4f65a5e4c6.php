<?php $__env->startSection('styles'); ?>

        <!-- CHOICES CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('build/assets/libs/choices.js/public/assets/styles/choices.min.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

                    <div class="content">

                        <!-- Start::main-content -->
                        <div class="main-content">

                            <!-- Page Header -->
                            <div class="block justify-between page-header sm:flex">
                                <div>
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Team</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                        <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Pages
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                        </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        Team
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-6">
                            <div class="col-span-12">
                                <div class="box">
                                <div class="box-body">
                                    <div class="xl:grid grid-cols-12 gap-6 space-y-6 xl:space-y-0">
                                    <div class="col-span-12 xl:col-span-4">
                                        <div class="relative  max-w-xs">
                                        <label for="hs-table-search" class="sr-only">Search</label>
                                        <div class="absolute inset-y-0 ltr:right-0 rtl:left-0 flex items-center pointer-events-none ltr:pr-4 rtl:pl-4">
                                            <i class="ti ti-search"></i>
                                        </div>
                                        <input type="text" name="hs-table-search" id="hs-table-search" class="p-2 ltr:pr-10 rtl:pl-10 ti-form-input"
                                            placeholder="Enter Your Text">
                                        </div>
                                    </div>
                                    <div class="col-span-12 xl:col-span-4">
                                        <div class="text-center max-w-xs xl:mx-auto">
                                        <nav class="flex justify-center space-x-3 rtl:space-x-reverse" aria-label="Tabs" role="tablist">
                                            <button type="button"
                                            class="w-full hs-tab-active:!bg-primary hs-tab-active:!text-white dark:hs-tab-active:border-b-white/10 -mr-px p-2 items-center bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 active"
                                            id="tab-1" data-hs-tab="#tab-style-1" aria-controls="tab-style-1" role="tab">
                                            All Team Members
                                            </button>
                                            <button type="button"
                                            class="w-full hs-tab-active:!bg-primary hs-tab-active:!text-white dark:hs-tab-active:border-b-white/10 ltr:-ml-px rtl:-mr-px p-2 items-center bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300"
                                            id="tab-2" data-hs-tab="#tab-style-2" aria-controls="tab-style-2" role="tab">
                                            My Team Members
                                            </button>
                                        </nav>
                                        </div>
                                    </div>
                                    <div class="col-span-12 xl:col-span-4">
                                        <div class="flex space-x-3 rtl:space-x-reverse xl:justify-end team-right">
                                        <select class="ti-form-select" name="team-choice" id="team-choice">
                                            <option value="0" selected>Categories</option>
                                            <option value="1">UI Team</option>
                                            <option value="2">Java Developers</option>
                                            <option value="3">Networking Team</option>
                                            <option value="4">FullStack Developers</option>
                                            <option value="5">React Developers</option>
                                        </select>
                                        <div class="hs-tooltip ti-main-tooltip">
                                            <a href="javascript:void(0);" class="team-add-btn m-0 hs-tooltip-toggle ti-btn ti-btn-primary">
                                            <i class="ti ti-circle-plus text-xl leading-none"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                role="tooltip">
                                                Add New Team Member
                                            </span>
                                            </a>
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
                            <div class="grid grid-cols-12 gap-6">
                                <div class="col-span-12">
                                    <div class="ti-tab-content">
                                    <div id="tab-style-1" role="tabpanel" aria-labelledby="tab-1">
                                        <section class="mb-6">
                                        <div class="flex flex-wrap">
                                            <div class="w-full px-4">
                                            <div class="mx-auto max-w-lg text-center">
                                                <h2 class="text-2xl font-bold">
                                                Team Members
                                                </h2>
                                                <p class="text-gray-500 dark:text-white/70 text-xs">
                                                Quod itaque fuga amet, id fugiat ratione assumenda saepe magni quae voluptatibus inventore
                                                ullam excepturi possimus eligendi minus labore.
                                                </p>
                                            </div>
                                            </div>
                                        </div>
                                        </section>
                                        <div class="grid grid-cols-12 gap-6">
                                        <div class="col-span-12 md:col-span-6 xxl:col-span-3 team-box">
                                            <div class="box overflow-hidden mb-0">
                                            <div class="block relative -mb-32 before:bg-primary/70 before:absolute before:w-full before:h-full">
                                                <img src="<?php echo e(asset('build/assets/img/png-images/2.png')); ?>" alt="" class="w-full h-32">
                                            </div>
                                            <div class="box-body">
                                                <div class="justify-center text-center relative ">
                                                <a class="relative inline-block mt-8" href="<?php echo e(url('profile')); ?>">
                                                    <img src="<?php echo e(asset('build/assets/img/users/5.jpg')); ?>"
                                                    class="w-24 h-24 rounded-full ring-4 ring-gray-100 mx-auto dark:ring-white/10" alt="user-img">
                                                    <span
                                                    class="absolute bottom-0 ltr:right-0 rtl:left-0 block p-1 rounded-full ring-2 ring-white dark:ring-white/10 text-gray-500 dark:text-white/70 bg-gray-100 dark:bg-bgdark leading-none"><i
                                                        class="ri ri-pencil-line"></i></span>
                                                </a>
                                                <div class="space-y-2">
                                                    <div class="mt-4">
                                                    <h2 class="text-base font-semibold">Socrates Itumay</h2>
                                                    <p class="text-xs text-gray-500 dark:text-white/70">socratesItumay@abc.com</p>
                                                    </div>
                                                    <span class="max-w-[10rem] truncate whitespace-nowrap inline-block py-1.5 px-3 rounded-sm text-xs font-medium bg-primary/20 text-primary">Founder
                                                    &amp; CEO</span>
                                                    <div class="flex space-x-1 rtl:space-x-reverse justify-center text-center">
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-github-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Github
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-instagram-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Instagram
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-twitter-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Twitter
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-linkedin-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Linkedin
                                                        </span>
                                                        </button>
                                                    </div>
                                                    </div>
                                                </div>
                                                <a aria-label="anchor" href="javascript:void(0);" class="absolute top-0 ltr:left-0 rtl:right-0 block text-yellow-500 text-base hover:text-yellow-500"><i class="ri-star-fill"></i></a>
                                                <div
                                                    class="hs-dropdown ti-dropdown absolute top-0 ltr:right-0 rtl:left-0 block text-gray-100 dark:text-white/70 text-base">
                                                    <button aria-label="button" type="button"
                                                    class="hs-dropdown-toggle p-0 !bg-transparent border-0 shadow-none focus:ring-0 focus:ring-offset-0 ti-dropdown-toggle">
                                                    <i class="ri-more-2-line leading-none text-base text-gray-100"></i>
                                                    </button>
                                                    <div class="hs-dropdown-menu ti-dropdown-menu">
                                                    <a class="ti-dropdown-item" href="<?php echo e(url('profile')); ?>"><i
                                                        class="ri ri-edit-2-line text-lg"></i>Edit</a>
                                                    <a class="team-remove ti-dropdown-item" href="javascript:void(0);"><i
                                                        class="ri ri-delete-bin-6-line text-lg"></i>Delete</a>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="box-footer bg-gray-100 dark:bg-bgdark p-0 text-center">
                                                <div class="grid grid-cols-12 gap-6">
                                                <div class="col-span-6 ltr:border-r rtl:border-l p-3 border-gray-200 dark:border-white/10">
                                                    <a href="<?php echo e(url('profile')); ?>" class="space-x-3"><i class="ri-user-line"></i><span>Profile</span></a>
                                                </div>
                                                <div class="col-span-6 p-3">
                                                    <a href="<?php echo e(url('contacts')); ?>" class="space-x-3"><i
                                                        class="ri-message-3-line"></i><span>Chat</span></a>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-span-12 md:col-span-6 xxl:col-span-3 team-box">
                                            <div class="box overflow-hidden mb-0">
                                            <div class="block relative -mb-32 before:bg-primary/70 before:absolute before:w-full before:h-full">
                                                <img src="<?php echo e(asset('build/assets/img/png-images/2.png')); ?>" alt="" class="w-full h-32">
                                            </div>
                                            <div class="box-body">
                                                <div class="justify-center text-center relative ">
                                                <a class="relative inline-block mt-8" href="<?php echo e(url('profile')); ?>">
                                                    <img src="<?php echo e(asset('build/assets/img/users/10.jpg')); ?>"
                                                    class="w-24 h-24 rounded-full ring-4 ring-gray-100 mx-auto dark:ring-white/10" alt="user-img">
                                                    <span
                                                    class="absolute bottom-0 ltr:right-0 rtl:left-0 block p-1 rounded-full ring-2 ring-white dark:ring-white/10 text-gray-500 dark:text-white/70 bg-gray-100 dark:bg-bgdark leading-none"><i
                                                        class="ri ri-pencil-line"></i></span>
                                                </a>
                                                <div class="space-y-2">
                                                    <div class="mt-4">
                                                    <h2 class="text-base font-semibold">Eos Tempor</h2>
                                                    <p class="text-xs text-gray-500 dark:text-white/70">eostempor@abc.com</p>
                                                    </div>
                                                    <span class="max-w-[10rem] truncate whitespace-nowrap inline-block py-1.5 px-3 rounded-sm text-xs font-medium bg-secondary/20 text-secondary">Director</span>
                                                    <div class="flex space-x-1 rtl:space-x-reverse justify-center text-center">
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-github-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Github
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-instagram-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Instagram
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-twitter-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Twitter
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-linkedin-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Linkedin
                                                        </span>
                                                        </button>
                                                    </div>
                                                    </div>
                                                </div>
                                                <a aria-label="anchor" href="javascript:void(0);" class="absolute top-0 ltr:left-0 rtl:right-0 block text-gray-100 opacity-80 hover:opacity-100 text-base hover:text-yellow-500"><i class="ri-star-fill"></i></a>
                                                <div
                                                    class="hs-dropdown ti-dropdown absolute top-0 ltr:right-0 rtl:left-0 block text-gray-100 dark:text-white/70 text-base">
                                                    <button aria-label="button" type="button"
                                                    class="hs-dropdown-toggle p-0 !bg-transparent border-0 shadow-none focus:ring-0 focus:ring-offset-0 ti-dropdown-toggle">
                                                    <i class="ri-more-2-line leading-none text-base text-gray-100"></i>
                                                    </button>
                                                    <div class="hs-dropdown-menu ti-dropdown-menu">
                                                    <a class="ti-dropdown-item" href="<?php echo e(url('profile')); ?>"><i
                                                        class="ri ri-edit-2-line text-lg"></i>Edit</a>
                                                    <a class="team-remove ti-dropdown-item" href="javascript:void(0);"><i
                                                        class="ri ri-delete-bin-6-line text-lg"></i>Delete</a>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="box-footer bg-gray-100 dark:bg-bgdark p-0 text-center">
                                                <div class="grid grid-cols-12 gap-6">
                                                <div class="col-span-6 ltr:border-r rtl:border-l p-3 border-gray-200 dark:border-white/10">
                                                    <a href="<?php echo e(url('profile')); ?>" class="space-x-3"><i class="ri-user-line"></i><span>Profile</span></a>
                                                </div>
                                                <div class="col-span-6 p-3">
                                                    <a href="<?php echo e(url('contacts')); ?>" class="space-x-3"><i
                                                        class="ri-message-3-line"></i><span>Chat</span></a>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-span-12 md:col-span-6 xxl:col-span-3 team-box">
                                            <div class="box overflow-hidden mb-0">
                                            <div class="block relative -mb-32 before:bg-primary/70 before:absolute before:w-full before:h-full">
                                                <img src="<?php echo e(asset('build/assets/img/png-images/2.png')); ?>" alt="" class="w-full h-32">
                                            </div>
                                            <div class="box-body">
                                                <div class="justify-center text-center relative ">
                                                <a class="relative inline-block mt-8" href="<?php echo e(url('profile')); ?>">
                                                    <img src="<?php echo e(asset('build/assets/img/users/2.jpg')); ?>"
                                                    class="w-24 h-24 rounded-full ring-4 ring-gray-100 mx-auto dark:ring-white/10" alt="user-img">
                                                    <span
                                                    class="absolute bottom-0 ltr:right-0 rtl:left-0 block p-1 rounded-full ring-2 ring-white dark:ring-white/10 text-gray-500 dark:text-white/70 bg-gray-100 dark:bg-bgdark leading-none"><i
                                                        class="ri ri-pencil-line"></i></span>
                                                </a>
                                                <div class="space-y-2">
                                                    <div class="mt-4">
                                                    <h2 class="text-base font-semibold">Airi Satou</h2>
                                                    <p class="text-xs text-gray-500 dark:text-white/70">airisatou@abc.com</p>
                                                    </div>
                                                    <span class="max-w-[10rem] truncate whitespace-nowrap inline-block py-1.5 px-3 rounded-sm text-xs font-medium bg-warning/20 text-warning">Hr</span>
                                                    <div class="flex space-x-1 rtl:space-x-reverse justify-center text-center">
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-github-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Github
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-instagram-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Instagram
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-twitter-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Twitter
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-linkedin-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Linkedin
                                                        </span>
                                                        </button>
                                                    </div>
                                                    </div>
                                                </div>
                                                <a aria-label="anchor" href="javascript:void(0);" class="absolute top-0 ltr:left-0 rtl:right-0 block text-yellow-500 text-base hover:text-yellow-500"><i class="ri-star-fill"></i></a>
                                                <div
                                                    class="hs-dropdown ti-dropdown absolute top-0 ltr:right-0 rtl:left-0 block text-gray-100 dark:text-white/70 text-base">
                                                    <button aria-label="button" type="button"
                                                    class="hs-dropdown-toggle p-0 !bg-transparent border-0 shadow-none focus:ring-0 focus:ring-offset-0 ti-dropdown-toggle">
                                                    <i class="ri-more-2-line leading-none text-base text-gray-100"></i>
                                                    </button>
                                                    <div class="hs-dropdown-menu ti-dropdown-menu">
                                                    <a class="ti-dropdown-item" href="<?php echo e(url('profile')); ?>"><i
                                                        class="ri ri-edit-2-line text-lg"></i>Edit</a>
                                                    <a class="team-remove ti-dropdown-item" href="javascript:void(0);"><i
                                                        class="ri ri-delete-bin-6-line text-lg"></i>Delete</a>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="box-footer bg-gray-100 dark:bg-bgdark p-0 text-center">
                                                <div class="grid grid-cols-12 gap-6">
                                                <div class="col-span-6 ltr:border-r rtl:border-l p-3 border-gray-200 dark:border-white/10">
                                                    <a href="<?php echo e(url('profile')); ?>" class="space-x-3"><i class="ri-user-line"></i><span>Profile</span></a>
                                                </div>
                                                <div class="col-span-6 p-3">
                                                    <a href="<?php echo e(url('contacts')); ?>" class="space-x-3"><i
                                                        class="ri-message-3-line"></i><span>Chat</span></a>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-span-12 md:col-span-6 xxl:col-span-3 team-box">
                                            <div class="box overflow-hidden mb-0">
                                            <div class="block relative -mb-32 before:bg-primary/70 before:absolute before:w-full before:h-full">
                                                <img src="<?php echo e(asset('build/assets/img/png-images/2.png')); ?>" alt="" class="w-full h-32">
                                            </div>
                                            <div class="box-body">
                                                <div class="justify-center text-center relative ">
                                                <a class="relative inline-block mt-8" href="<?php echo e(url('profile')); ?>">
                                                    <img src="<?php echo e(asset('build/assets/img/users/11.jpg')); ?>"
                                                    class="w-24 h-24 rounded-full ring-4 ring-gray-100 mx-auto dark:ring-white/10" alt="user-img">
                                                    <span
                                                    class="absolute bottom-0 ltr:right-0 rtl:left-0 block p-1 rounded-full ring-2 ring-white dark:ring-white/10 text-gray-500 dark:text-white/70 bg-gray-100 dark:bg-bgdark leading-none"><i
                                                        class="ri ri-pencil-line"></i></span>
                                                </a>
                                                <div class="space-y-2">
                                                    <div class="mt-4">
                                                    <h2 class="text-base font-semibold">Et Kasd</h2>
                                                    <p class="text-xs text-gray-500 dark:text-white/70">etkasd@abc.com</p>
                                                    </div>
                                                    <span class="max-w-[10rem] truncate whitespace-nowrap inline-block py-1.5 px-3 rounded-sm text-xs font-medium bg-info/20 text-info">Manager</span>
                                                    <div class="flex space-x-1 rtl:space-x-reverse justify-center text-center">
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-github-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Github
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-instagram-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Instagram
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-twitter-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Twitter
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-linkedin-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Linkedin
                                                        </span>
                                                        </button>
                                                    </div>
                                                    </div>
                                                </div>
                                                <a aria-label="anchor" href="javascript:void(0);" class="absolute top-0 ltr:left-0 rtl:right-0 block text-gray-100 opacity-80 hover:opacity-100 text-base hover:text-yellow-500"><i class="ri-star-fill"></i></a>
                                                <div
                                                    class="hs-dropdown ti-dropdown absolute top-0 ltr:right-0 rtl:left-0 block text-gray-100 dark:text-white/70 text-base">
                                                    <button aria-label="button" type="button"
                                                    class="hs-dropdown-toggle p-0 !bg-transparent border-0 shadow-none focus:ring-0 focus:ring-offset-0 ti-dropdown-toggle">
                                                    <i class="ri-more-2-line leading-none text-base text-gray-100"></i>
                                                    </button>
                                                    <div class="hs-dropdown-menu ti-dropdown-menu">
                                                    <a class="ti-dropdown-item" href="<?php echo e(url('profile')); ?>"><i
                                                        class="ri ri-edit-2-line text-lg"></i>Edit</a>
                                                    <a class="team-remove ti-dropdown-item" href="javascript:void(0);"><i
                                                        class="ri ri-delete-bin-6-line text-lg"></i>Delete</a>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="box-footer bg-gray-100 dark:bg-bgdark p-0 text-center">
                                                <div class="grid grid-cols-12 gap-6">
                                                <div class="col-span-6 ltr:border-r rtl:border-l p-3 border-gray-200 dark:border-white/10">
                                                    <a href="<?php echo e(url('profile')); ?>" class="space-x-3"><i class="ri-user-line"></i><span>Profile</span></a>
                                                </div>
                                                <div class="col-span-6 p-3">
                                                    <a href="<?php echo e(url('contacts')); ?>" class="space-x-3"><i
                                                        class="ri-message-3-line"></i><span>Chat</span></a>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-span-12 md:col-span-6 xxl:col-span-3 team-box">
                                            <div class="box overflow-hidden mb-0">
                                            <div class="block relative -mb-32 before:bg-primary/70 before:absolute before:w-full before:h-full">
                                                <img src="<?php echo e(asset('build/assets/img/png-images/2.png')); ?>" alt="" class="w-full h-32">
                                            </div>
                                            <div class="box-body">
                                                <div class="justify-center text-center relative ">
                                                <a class="relative inline-block mt-8" href="<?php echo e(url('profile')); ?>">
                                                    <img src="<?php echo e(asset('build/assets/img/users/3.jpg')); ?>"
                                                    class="w-24 h-24 rounded-full ring-4 ring-gray-100 mx-auto dark:ring-white/10" alt="user-img">
                                                    <span
                                                    class="absolute bottom-0 ltr:right-0 rtl:left-0 block p-1 rounded-full ring-2 ring-white dark:ring-white/10 text-gray-500 dark:text-white/70 bg-gray-100 dark:bg-bgdark leading-none"><i
                                                        class="ri ri-pencil-line"></i></span>
                                                </a>
                                                <div class="space-y-2">
                                                    <div class="mt-4">
                                                    <h2 class="text-base font-semibold">Anderson Itumay</h2>
                                                    <p class="text-xs text-gray-500 dark:text-white/70">andersonitumay@abc.com</p>
                                                    </div>
                                                    <span class="max-w-[10rem] truncate whitespace-nowrap inline-block py-1.5 px-3 rounded-sm text-xs font-medium bg-danger/20 text-danger">Team Lead</span>
                                                    <div class="flex space-x-1 rtl:space-x-reverse justify-center text-center">
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-github-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Github
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-instagram-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Instagram
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-twitter-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Twitter
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-linkedin-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Linkedin
                                                        </span>
                                                        </button>
                                                    </div>
                                                    </div>
                                                </div>
                                                <a aria-label="anchor" href="javascript:void(0);" class="absolute top-0 ltr:left-0 rtl:right-0 block text-gray-100 opacity-80 hover:opacity-100 text-base hover:text-yellow-500"><i class="ri-star-fill"></i></a>
                                                <div
                                                    class="hs-dropdown ti-dropdown absolute top-0 ltr:right-0 rtl:left-0 block text-gray-100 dark:text-white/70 text-base">
                                                    <button aria-label="button" type="button"
                                                    class="hs-dropdown-toggle p-0 !bg-transparent border-0 shadow-none focus:ring-0 focus:ring-offset-0 ti-dropdown-toggle">
                                                    <i class="ri-more-2-line leading-none text-base text-gray-100"></i>
                                                    </button>
                                                    <div class="hs-dropdown-menu ti-dropdown-menu">
                                                    <a class="ti-dropdown-item" href="<?php echo e(url('profile')); ?>"><i
                                                        class="ri ri-edit-2-line text-lg"></i>Edit</a>
                                                    <a class="team-remove ti-dropdown-item" href="javascript:void(0);"><i
                                                        class="ri ri-delete-bin-6-line text-lg"></i>Delete</a>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="box-footer bg-gray-100 dark:bg-bgdark p-0 text-center">
                                                <div class="grid grid-cols-12 gap-6">
                                                <div class="col-span-6 ltr:border-r rtl:border-l p-3 border-gray-200 dark:border-white/10">
                                                    <a href="<?php echo e(url('profile')); ?>" class="space-x-3"><i class="ri-user-line"></i><span>Profile</span></a>
                                                </div>
                                                <div class="col-span-6 p-3">
                                                    <a href="<?php echo e(url('contacts')); ?>" class="space-x-3"><i
                                                        class="ri-message-3-line"></i><span>Chat</span></a>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-span-12 md:col-span-6 xxl:col-span-3 team-box">
                                            <div class="box overflow-hidden mb-0">
                                            <div class="block relative -mb-32 before:bg-primary/70 before:absolute before:w-full before:h-full">
                                                <img src="<?php echo e(asset('build/assets/img/png-images/2.png')); ?>" alt="" class="w-full h-32">
                                            </div>
                                            <div class="box-body">
                                                <div class="justify-center text-center relative ">
                                                <a class="relative inline-block mt-8" href="<?php echo e(url('profile')); ?>">
                                                    <img src="<?php echo e(asset('build/assets/img/users/4.jpg')); ?>"
                                                    class="w-24 h-24 rounded-full ring-4 ring-gray-100 mx-auto dark:ring-white/10" alt="user-img">
                                                    <span
                                                    class="absolute bottom-0 ltr:right-0 rtl:left-0 block p-1 rounded-full ring-2 ring-white dark:ring-white/10 text-gray-500 dark:text-white/70 bg-gray-100 dark:bg-bgdark leading-none"><i
                                                        class="ri ri-pencil-line"></i></span>
                                                </a>
                                                <div class="space-y-2">
                                                    <div class="mt-4">
                                                    <h2 class="text-base font-semibold"> Samantha Paul</h2>
                                                    <p class="text-xs text-gray-500 dark:text-white/70"> samanthapaul@abc.com</p>
                                                    </div>
                                                    <span class="max-w-[10rem] truncate whitespace-nowrap inline-block py-1.5 px-3 rounded-sm text-xs font-medium bg-primary/20 text-primary">Sr.UI Developer</span>
                                                    <div class="flex space-x-1 rtl:space-x-reverse justify-center text-center">
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-github-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Github
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-instagram-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Instagram
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-twitter-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Twitter
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-linkedin-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Linkedin
                                                        </span>
                                                        </button>
                                                    </div>
                                                    </div>
                                                </div>
                                                <a aria-label="anchor" href="javascript:void(0);" class="absolute top-0 ltr:left-0 rtl:right-0 block text-yellow-500 text-base hover:text-yellow-500"><i class="ri-star-fill"></i></a>
                                                <div
                                                    class="hs-dropdown ti-dropdown absolute top-0 ltr:right-0 rtl:left-0 block text-gray-100 dark:text-white/70 text-base">
                                                    <button aria-label="button" type="button"
                                                    class="hs-dropdown-toggle p-0 !bg-transparent border-0 shadow-none focus:ring-0 focus:ring-offset-0 ti-dropdown-toggle">
                                                    <i class="ri-more-2-line leading-none text-base text-gray-100"></i>
                                                    </button>
                                                    <div class="hs-dropdown-menu ti-dropdown-menu">
                                                    <a class="ti-dropdown-item" href="<?php echo e(url('profile')); ?>"><i
                                                        class="ri ri-edit-2-line text-lg"></i>Edit</a>
                                                    <a class="team-remove ti-dropdown-item" href="javascript:void(0);"><i
                                                        class="ri ri-delete-bin-6-line text-lg"></i>Delete</a>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="box-footer bg-gray-100 dark:bg-bgdark p-0 text-center">
                                                <div class="grid grid-cols-12 gap-6">
                                                <div class="col-span-6 ltr:border-r rtl:border-l p-3 border-gray-200 dark:border-white/10">
                                                    <a href="<?php echo e(url('profile')); ?>" class="space-x-3"><i class="ri-user-line"></i><span>Profile</span></a>
                                                </div>
                                                <div class="col-span-6 p-3">
                                                    <a href="<?php echo e(url('contacts')); ?>" class="space-x-3"><i
                                                        class="ri-message-3-line"></i><span>Chat</span></a>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-span-12 md:col-span-6 xxl:col-span-3 team-box">
                                            <div class="box overflow-hidden mb-0">
                                            <div class="block relative -mb-32 before:bg-primary/70 before:absolute before:w-full before:h-full">
                                                <img src="<?php echo e(asset('build/assets/img/png-images/2.png')); ?>" alt="" class="w-full h-32">
                                            </div>
                                            <div class="box-body">
                                                <div class="justify-center text-center relative ">
                                                <a class="relative inline-block mt-8" href="<?php echo e(url('profile')); ?>">
                                                    <img src="<?php echo e(asset('build/assets/img/users/15.jpg')); ?>"
                                                    class="w-24 h-24 rounded-full ring-4 ring-gray-100 mx-auto dark:ring-white/10" alt="user-img">
                                                    <span
                                                    class="absolute bottom-0 ltr:right-0 rtl:left-0 block p-1 rounded-full ring-2 ring-white dark:ring-white/10 text-gray-500 dark:text-white/70 bg-gray-100 dark:bg-bgdark leading-none"><i
                                                        class="ri ri-pencil-line"></i></span>
                                                </a>
                                                <div class="space-y-2">
                                                    <div class="mt-4">
                                                    <h2 class="text-base font-semibold">Mc Greggor</h2>
                                                    <p class="text-xs text-gray-500 dark:text-white/70">mcgreggor@abc.com</p>
                                                    </div>
                                                    <span class="max-w-[10rem] truncate whitespace-nowrap inline-block py-1.5 px-3 rounded-sm text-xs font-medium bg-success/20 text-success">Java Developer</span>
                                                    <div class="flex space-x-1 rtl:space-x-reverse justify-center text-center">
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-github-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Github
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-instagram-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Instagram
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-twitter-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Twitter
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-linkedin-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Linkedin
                                                        </span>
                                                        </button>
                                                    </div>
                                                    </div>
                                                </div>
                                                <a aria-label="anchor" href="javascript:void(0);" class="absolute top-0 ltr:left-0 rtl:right-0 block text-gray-100 opacity-80 hover:opacity-100 text-base hover:text-yellow-500"><i class="ri-star-fill"></i></a>
                                                <div
                                                    class="hs-dropdown ti-dropdown absolute top-0 ltr:right-0 rtl:left-0 block text-gray-100 dark:text-white/70 text-base">
                                                    <button aria-label="button" type="button"
                                                    class="hs-dropdown-toggle p-0 !bg-transparent border-0 shadow-none focus:ring-0 focus:ring-offset-0 ti-dropdown-toggle">
                                                    <i class="ri-more-2-line leading-none text-base text-gray-100"></i>
                                                    </button>
                                                    <div class="hs-dropdown-menu ti-dropdown-menu">
                                                    <a class="ti-dropdown-item" href="<?php echo e(url('profile')); ?>"><i
                                                        class="ri ri-edit-2-line text-lg"></i>Edit</a>
                                                    <a class="team-remove ti-dropdown-item" href="javascript:void(0);"><i
                                                        class="ri ri-delete-bin-6-line text-lg"></i>Delete</a>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="box-footer bg-gray-100 dark:bg-bgdark p-0 text-center">
                                                <div class="grid grid-cols-12 gap-6">
                                                <div class="col-span-6 ltr:border-r rtl:border-l p-3 border-gray-200 dark:border-white/10">
                                                    <a href="<?php echo e(url('profile')); ?>" class="space-x-3"><i class="ri-user-line"></i><span>Profile</span></a>
                                                </div>
                                                <div class="col-span-6 p-3">
                                                    <a href="<?php echo e(url('contacts')); ?>" class="space-x-3"><i
                                                        class="ri-message-3-line"></i><span>Chat</span></a>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-span-12 md:col-span-6 xxl:col-span-3 team-box">
                                            <div class="box overflow-hidden mb-0">
                                            <div class="block relative -mb-32 before:bg-primary/70 before:absolute before:w-full before:h-full">
                                                <img src="<?php echo e(asset('build/assets/img/png-images/2.png')); ?>" alt="" class="w-full h-32">
                                            </div>
                                            <div class="box-body">
                                                <div class="justify-center text-center relative ">
                                                <a class="relative inline-block mt-8" href="<?php echo e(url('profile')); ?>">
                                                    <img src="<?php echo e(asset('build/assets/img/users/6.jpg')); ?>"
                                                    class="w-24 h-24 rounded-full ring-4 ring-gray-100 mx-auto dark:ring-white/10" alt="user-img">
                                                    <span
                                                    class="absolute bottom-0 ltr:right-0 rtl:left-0 block p-1 rounded-full ring-2 ring-white dark:ring-white/10 text-gray-500 dark:text-white/70 bg-gray-100 dark:bg-bgdark leading-none"><i
                                                        class="ri ri-pencil-line"></i></span>
                                                </a>
                                                <div class="space-y-2">
                                                    <div class="mt-4">
                                                    <h2 class="text-base font-semibold">Emiley Jackson</h2>
                                                    <p class="text-xs text-gray-500 dark:text-white/70">emileyjackson@abc.com</p>
                                                    </div>
                                                    <span class="max-w-[10rem] truncate whitespace-nowrap inline-block py-1.5 px-3 rounded-sm text-xs font-medium bg-primary/20 text-primary">Full Stack Developer</span>
                                                    <div class="flex space-x-1 rtl:space-x-reverse justify-center text-center">
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-github-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Github
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-instagram-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Instagram
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-twitter-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Twitter
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-linkedin-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Linkedin
                                                        </span>
                                                        </button>
                                                    </div>
                                                    </div>
                                                </div>
                                                <a aria-label="anchor" href="javascript:void(0);" class="absolute top-0 ltr:left-0 rtl:right-0 block text-yellow-500 text-base hover:text-yellow-500"><i class="ri-star-fill"></i></a>
                                                <div
                                                    class="hs-dropdown ti-dropdown absolute top-0 ltr:right-0 rtl:left-0 block text-gray-100 dark:text-white/70 text-base">
                                                    <button aria-label="button" type="button"
                                                    class="hs-dropdown-toggle p-0 !bg-transparent border-0 shadow-none focus:ring-0 focus:ring-offset-0 ti-dropdown-toggle">
                                                    <i class="ri-more-2-line leading-none text-base text-gray-100"></i>
                                                    </button>
                                                    <div class="hs-dropdown-menu ti-dropdown-menu">
                                                    <a class="ti-dropdown-item" href="<?php echo e(url('profile')); ?>"><i
                                                        class="ri ri-edit-2-line text-lg"></i>Edit</a>
                                                    <a class="team-remove ti-dropdown-item" href="javascript:void(0);"><i
                                                        class="ri ri-delete-bin-6-line text-lg"></i>Delete</a>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="box-footer bg-gray-100 dark:bg-bgdark p-0 text-center">
                                                <div class="grid grid-cols-12 gap-6">
                                                <div class="col-span-6 ltr:border-r rtl:border-l p-3 border-gray-200 dark:border-white/10">
                                                    <a href="<?php echo e(url('profile')); ?>" class="space-x-3"><i class="ri-user-line"></i><span>Profile</span></a>
                                                </div>
                                                <div class="col-span-6 p-3">
                                                    <a href="<?php echo e(url('contacts')); ?>" class="space-x-3"><i
                                                        class="ri-message-3-line"></i><span>Chat</span></a>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-span-12 md:col-span-6 xxl:col-span-3 team-box">
                                            <div class="box overflow-hidden mb-0">
                                            <div class="block relative -mb-32 before:bg-primary/70 before:absolute before:w-full before:h-full">
                                                <img src="<?php echo e(asset('build/assets/img/png-images/2.png')); ?>" alt="" class="w-full h-32">
                                            </div>
                                            <div class="box-body">
                                                <div class="justify-center text-center relative ">
                                                <a class="relative inline-block mt-8" href="<?php echo e(url('profile')); ?>">
                                                    <img src="<?php echo e(asset('build/assets/img/users/9.jpg')); ?>"
                                                    class="w-24 h-24 rounded-full ring-4 ring-gray-100 mx-auto dark:ring-white/10" alt="user-img">
                                                    <span
                                                    class="absolute bottom-0 ltr:right-0 rtl:left-0 block p-1 rounded-full ring-2 ring-white dark:ring-white/10 text-gray-500 dark:text-white/70 bg-gray-100 dark:bg-bgdark leading-none"><i
                                                        class="ri ri-pencil-line"></i></span>
                                                </a>
                                                <div class="space-y-2">
                                                    <div class="mt-4">
                                                    <h2 class="text-base font-semibold">Nicholas Sams</h2>
                                                    <p class="text-xs text-gray-500 dark:text-white/70">nicholassams@abc.com</p>
                                                    </div>
                                                    <span class="max-w-[10rem] truncate whitespace-nowrap inline-block py-1.5 px-3 rounded-sm text-xs font-medium bg-secondary/20 text-secondary">Networking</span>
                                                    <div class="flex space-x-1 rtl:space-x-reverse justify-center text-center">
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-github-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Github
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-instagram-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Instagram
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-twitter-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Twitter
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-linkedin-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Linkedin
                                                        </span>
                                                        </button>
                                                    </div>
                                                    </div>
                                                </div>
                                                <a aria-label="anchor" href="javascript:void(0);" class="absolute top-0 ltr:left-0 rtl:right-0 block text-yellow-500 text-base hover:text-yellow-500"><i class="ri-star-fill"></i></a>
                                                <div
                                                    class="hs-dropdown ti-dropdown absolute top-0 ltr:right-0 rtl:left-0 block text-gray-100 dark:text-white/70 text-base">
                                                    <button aria-label="button" type="button"
                                                    class="hs-dropdown-toggle p-0 !bg-transparent border-0 shadow-none focus:ring-0 focus:ring-offset-0 ti-dropdown-toggle">
                                                    <i class="ri-more-2-line leading-none text-base text-gray-100"></i>
                                                    </button>
                                                    <div class="hs-dropdown-menu ti-dropdown-menu">
                                                    <a class="ti-dropdown-item" href="<?php echo e(url('profile')); ?>"><i
                                                        class="ri ri-edit-2-line text-lg"></i>Edit</a>
                                                    <a class="team-remove ti-dropdown-item" href="javascript:void(0);"><i
                                                        class="ri ri-delete-bin-6-line text-lg"></i>Delete</a>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="box-footer bg-gray-100 dark:bg-bgdark p-0 text-center">
                                                <div class="grid grid-cols-12 gap-6">
                                                <div class="col-span-6 ltr:border-r rtl:border-l p-3 border-gray-200 dark:border-white/10">
                                                    <a href="<?php echo e(url('profile')); ?>" class="space-x-3"><i class="ri-user-line"></i><span>Profile</span></a>
                                                </div>
                                                <div class="col-span-6 p-3">
                                                    <a href="<?php echo e(url('contacts')); ?>" class="space-x-3"><i
                                                        class="ri-message-3-line"></i><span>Chat</span></a>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-span-12 md:col-span-6 xxl:col-span-3 team-box">
                                            <div class="box overflow-hidden mb-0">
                                            <div class="block relative -mb-32 before:bg-primary/70 before:absolute before:w-full before:h-full">
                                                <img src="<?php echo e(asset('build/assets/img/png-images/2.png')); ?>" alt="" class="w-full h-32">
                                            </div>
                                            <div class="box-body">
                                                <div class="justify-center text-center relative ">
                                                <a class="relative inline-block mt-8" href="<?php echo e(url('profile')); ?>">
                                                    <img src="<?php echo e(asset('build/assets/img/users/11.jpg')); ?>"
                                                    class="w-24 h-24 rounded-full ring-4 ring-gray-100 mx-auto dark:ring-white/10" alt="user-img">
                                                    <span
                                                    class="absolute bottom-0 ltr:right-0 rtl:left-0 block p-1 rounded-full ring-2 ring-white dark:ring-white/10 text-gray-500 dark:text-white/70 bg-gray-100 dark:bg-bgdark leading-none"><i
                                                        class="ri ri-pencil-line"></i></span>
                                                </a>
                                                <div class="space-y-2">
                                                    <div class="mt-4">
                                                    <h2 class="text-base font-semibold">Pope Johnson</h2>
                                                    <p class="text-xs text-gray-500 dark:text-white/70">popejohnson@abc.com</p>
                                                    </div>
                                                    <span class="max-w-[10rem] truncate whitespace-nowrap inline-block py-1.5 px-3 rounded-sm text-xs font-medium bg-info/20 text-info">React Developer</span>
                                                    <div class="flex space-x-1 rtl:space-x-reverse justify-center text-center">
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-github-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Github
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-instagram-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Instagram
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-twitter-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Twitter
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-linkedin-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Linkedin
                                                        </span>
                                                        </button>
                                                    </div>
                                                    </div>
                                                </div>
                                                <a aria-label="anchor" href="javascript:void(0);" class="absolute top-0 ltr:left-0 rtl:right-0 block text-gray-100 opacity-80 hover:opacity-100 text-base hover:text-yellow-500"><i class="ri-star-fill"></i></a>
                                                <div
                                                    class="hs-dropdown ti-dropdown absolute top-0 ltr:right-0 rtl:left-0 block text-gray-100 dark:text-white/70 text-base">
                                                    <button aria-label="button" type="button"
                                                    class="hs-dropdown-toggle p-0 !bg-transparent border-0 shadow-none focus:ring-0 focus:ring-offset-0 ti-dropdown-toggle">
                                                    <i class="ri-more-2-line leading-none text-base text-gray-100"></i>
                                                    </button>
                                                    <div class="hs-dropdown-menu ti-dropdown-menu">
                                                    <a class="ti-dropdown-item" href="<?php echo e(url('profile')); ?>"><i
                                                        class="ri ri-edit-2-line text-lg"></i>Edit</a>
                                                    <a class="team-remove ti-dropdown-item" href="javascript:void(0);"><i
                                                        class="ri ri-delete-bin-6-line text-lg"></i>Delete</a>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="box-footer bg-gray-100 dark:bg-bgdark p-0 text-center">
                                                <div class="grid grid-cols-12 gap-6">
                                                <div class="col-span-6 ltr:border-r rtl:border-l p-3 border-gray-200 dark:border-white/10">
                                                    <a href="<?php echo e(url('profile')); ?>" class="space-x-3"><i class="ri-user-line"></i><span>Profile</span></a>
                                                </div>
                                                <div class="col-span-6 p-3">
                                                    <a href="<?php echo e(url('contacts')); ?>" class="space-x-3"><i
                                                        class="ri-message-3-line"></i><span>Chat</span></a>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-span-12 md:col-span-6 xxl:col-span-3 team-box">
                                            <div class="box overflow-hidden mb-0">
                                            <div class="block relative -mb-32 before:bg-primary/70 before:absolute before:w-full before:h-full">
                                                <img src="<?php echo e(asset('build/assets/img/png-images/2.png')); ?>" alt="" class="w-full h-32">
                                            </div>
                                            <div class="box-body">
                                                <div class="justify-center text-center relative ">
                                                <a class="relative inline-block mt-8" href="<?php echo e(url('profile')); ?>">
                                                    <img src="<?php echo e(asset('build/assets/img/users/18.jpg')); ?>"
                                                    class="w-24 h-24 rounded-full ring-4 ring-gray-100 mx-auto dark:ring-white/10" alt="user-img">
                                                    <span
                                                    class="absolute bottom-0 ltr:right-0 rtl:left-0 block p-1 rounded-full ring-2 ring-white dark:ring-white/10 text-gray-500 dark:text-white/70 bg-gray-100 dark:bg-bgdark leading-none"><i
                                                        class="ri ri-pencil-line"></i></span>
                                                </a>
                                                <div class="space-y-2">
                                                    <div class="mt-4">
                                                    <h2 class="text-base font-semibold">Megan Fox</h2>
                                                    <p class="text-xs text-gray-500 dark:text-white/70">meganfox@abc.com</p>
                                                    </div>
                                                    <span class="max-w-[10rem] truncate whitespace-nowrap inline-block py-1.5 px-3 rounded-sm text-xs font-medium bg-primary/20 text-primary">UI Developer</span>
                                                    <div class="flex space-x-1 rtl:space-x-reverse justify-center text-center">
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-github-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Github
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-instagram-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Instagram
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-twitter-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Twitter
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-linkedin-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Linkedin
                                                        </span>
                                                        </button>
                                                    </div>
                                                    </div>
                                                </div>
                                                <a aria-label="anchor" href="javascript:void(0);" class="absolute top-0 ltr:left-0 rtl:right-0 block text-gray-100 opacity-80 hover:opacity-100 text-base hover:text-yellow-500"><i class="ri-star-fill"></i></a>
                                                <div
                                                    class="hs-dropdown ti-dropdown absolute top-0 ltr:right-0 rtl:left-0 block text-gray-100 dark:text-white/70 text-base">
                                                    <button aria-label="button" type="button"
                                                    class="hs-dropdown-toggle p-0 !bg-transparent border-0 shadow-none focus:ring-0 focus:ring-offset-0 ti-dropdown-toggle">
                                                    <i class="ri-more-2-line leading-none text-base text-gray-100"></i>
                                                    </button>
                                                    <div class="hs-dropdown-menu ti-dropdown-menu">
                                                    <a class="ti-dropdown-item" href="<?php echo e(url('profile')); ?>"><i
                                                        class="ri ri-edit-2-line text-lg"></i>Edit</a>
                                                    <a class="team-remove ti-dropdown-item" href="javascript:void(0);"><i
                                                        class="ri ri-delete-bin-6-line text-lg"></i>Delete</a>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="box-footer bg-gray-100 dark:bg-bgdark p-0 text-center">
                                                <div class="grid grid-cols-12 gap-6">
                                                <div class="col-span-6 ltr:border-r rtl:border-l p-3 border-gray-200 dark:border-white/10">
                                                    <a href="<?php echo e(url('profile')); ?>" class="space-x-3"><i class="ri-user-line"></i><span>Profile</span></a>
                                                </div>
                                                <div class="col-span-6 p-3">
                                                    <a href="<?php echo e(url('contacts')); ?>" class="space-x-3"><i
                                                        class="ri-message-3-line"></i><span>Chat</span></a>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-span-12 md:col-span-6 xxl:col-span-3 team-box">
                                            <div class="box overflow-hidden mb-0">
                                            <div class="block relative -mb-32 before:bg-primary/70 before:absolute before:w-full before:h-full">
                                                <img src="<?php echo e(asset('build/assets/img/png-images/2.png')); ?>" alt="" class="w-full h-32">
                                            </div>
                                            <div class="box-body">
                                                <div class="justify-center text-center relative ">
                                                <a class="relative inline-block mt-8" href="<?php echo e(url('profile')); ?>">
                                                    <img src="<?php echo e(asset('build/assets/img/users/20.jpg')); ?>"
                                                    class="w-24 h-24 rounded-full ring-4 ring-gray-100 mx-auto dark:ring-white/10" alt="user-img">
                                                    <span
                                                    class="absolute bottom-0 ltr:right-0 rtl:left-0 block p-1 rounded-full ring-2 ring-white dark:ring-white/10 text-gray-500 dark:text-white/70 bg-gray-100 dark:bg-bgdark leading-none"><i
                                                        class="ri ri-pencil-line"></i></span>
                                                </a>
                                                <div class="space-y-2">
                                                    <div class="mt-4">
                                                    <h2 class="text-base font-semibold">Dolor Dlita</h2>
                                                    <p class="text-xs text-gray-500 dark:text-white/70">dolordlita@abc.com</p>
                                                    </div>
                                                    <span class="max-w-[10rem] truncate whitespace-nowrap inline-block py-1.5 px-3 rounded-sm text-xs font-medium bg-success/20 text-success">Jr.Java Developer</span>
                                                    <div class="flex space-x-1 rtl:space-x-reverse justify-center text-center">
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-github-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Github
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-instagram-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Instagram
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-twitter-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Twitter
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-linkedin-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Linkedin
                                                        </span>
                                                        </button>
                                                    </div>
                                                    </div>
                                                </div>
                                                <a aria-label="anchor" href="javascript:void(0);" class="absolute top-0 ltr:left-0 rtl:right-0 block text-gray-100 opacity-80 hover:opacity-100 text-base hover:text-yellow-500"><i class="ri-star-fill"></i></a>
                                                <div
                                                    class="hs-dropdown ti-dropdown absolute top-0 ltr:right-0 rtl:left-0 block text-gray-100 dark:text-white/70 text-base">
                                                    <button aria-label="button" type="button"
                                                    class="hs-dropdown-toggle p-0 !bg-transparent border-0 shadow-none focus:ring-0 focus:ring-offset-0 ti-dropdown-toggle">
                                                    <i class="ri-more-2-line leading-none text-base text-gray-100"></i>
                                                    </button>
                                                    <div class="hs-dropdown-menu ti-dropdown-menu">
                                                    <a class="ti-dropdown-item" href="<?php echo e(url('profile')); ?>"><i
                                                        class="ri ri-edit-2-line text-lg"></i>Edit</a>
                                                    <a class="team-remove ti-dropdown-item" href="javascript:void(0);"><i
                                                        class="ri ri-delete-bin-6-line text-lg"></i>Delete</a>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="box-footer bg-gray-100 dark:bg-bgdark p-0 text-center">
                                                <div class="grid grid-cols-12 gap-6">
                                                <div class="col-span-6 ltr:border-r rtl:border-l p-3 border-gray-200 dark:border-white/10">
                                                    <a href="<?php echo e(url('profile')); ?>" class="space-x-3"><i class="ri-user-line"></i><span>Profile</span></a>
                                                </div>
                                                <div class="col-span-6 p-3">
                                                    <a href="<?php echo e(url('contacts')); ?>" class="space-x-3"><i
                                                        class="ri-message-3-line"></i><span>Chat</span></a>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div id="tab-style-2" class="hidden" role="tabpanel" aria-labelledby="tab-2">
                                        <section class="mb-6">
                                        <div class="-mx-4 flex flex-wrap">
                                            <div class="w-full px-4">
                                            <div class="mx-auto max-w-lg text-center">
                                                <h2 class="text-2xl font-bold">
                                                Our Team Members
                                                </h2>
                                                <p class="text-gray-500 dark:text-white/70 text-xs">
                                                Quod itaque fuga amet, id fugiat ratione assumenda saepe magni quae voluptatibus inventore
                                                ullam excepturi possimus eligendi minus labore.
                                                </p>
                                            </div>
                                            </div>
                                        </div>
                                        </section>
                                        <div class="grid grid-cols-12 gap-6">
                                        <div class="col-span-12 md:col-span-6 xxl:col-span-3 team-box">
                                            <div class="box overflow-hidden mb-0">
                                            <div class="block relative -mb-32 before:bg-primary/70 before:absolute before:w-full before:h-full">
                                                <img src="<?php echo e(asset('build/assets/img/png-images/2.png')); ?>" alt="" class="w-full h-32">
                                            </div>
                                            <div class="box-body">
                                                <div class="justify-center text-center relative ">
                                                <a class="relative inline-block mt-8" href="<?php echo e(url('profile')); ?>">
                                                    <img src="<?php echo e(asset('build/assets/img/users/3.jpg')); ?>"
                                                    class="w-24 h-24 rounded-full ring-4 ring-gray-100 mx-auto dark:ring-white/10" alt="user-img">
                                                    <span
                                                    class="absolute bottom-0 ltr:right-0 rtl:left-0 block p-1 rounded-full ring-2 ring-white dark:ring-white/10 text-gray-500 dark:text-white/70 bg-gray-100 dark:bg-bgdark leading-none"><i
                                                        class="ri ri-pencil-line"></i></span>
                                                </a>
                                                <div class="space-y-2">
                                                    <div class="mt-4">
                                                    <h2 class="text-base font-semibold">Anderson Itumay</h2>
                                                    <p class="text-xs text-gray-500 dark:text-white/70">andersonitumay@abc.com</p>
                                                    </div>
                                                    <span class="max-w-[10rem] truncate whitespace-nowrap inline-block py-1.5 px-3 rounded-sm text-xs font-medium bg-danger/20 text-danger">Team Lead</span>
                                                    <div class="flex space-x-1 rtl:space-x-reverse justify-center text-center">
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-github-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Github
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-instagram-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Instagram
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-twitter-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Twitter
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-linkedin-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Linkedin
                                                        </span>
                                                        </button>
                                                    </div>
                                                    </div>
                                                </div>
                                                <a aria-label="anchor" href="javascript:void(0);" class="absolute top-0 ltr:left-0 rtl:right-0 block text-gray-100 opacity-80 hover:opacity-100 text-base hover:text-yellow-500"><i class="ri-star-fill"></i></a>
                                                <div
                                                    class="hs-dropdown ti-dropdown absolute top-0 ltr:right-0 rtl:left-0 block text-gray-100 dark:text-white/70 text-base">
                                                    <button aria-label="button" type="button"
                                                    class="hs-dropdown-toggle p-0 !bg-transparent border-0 shadow-none focus:ring-0 focus:ring-offset-0 ti-dropdown-toggle">
                                                    <i class="ri-more-2-line leading-none text-base text-gray-100"></i>
                                                    </button>
                                                    <div class="hs-dropdown-menu ti-dropdown-menu">
                                                    <a class="ti-dropdown-item" href="<?php echo e(url('profile')); ?>"><i
                                                        class="ri ri-edit-2-line text-lg"></i>Edit</a>
                                                    <a class="team-remove ti-dropdown-item" href="javascript:void(0);"><i
                                                        class="ri ri-delete-bin-6-line text-lg"></i>Delete</a>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="box-footer bg-gray-100 dark:bg-bgdark p-0 text-center">
                                                <div class="grid grid-cols-12 gap-6">
                                                <div class="col-span-6 ltr:border-r rtl:border-l p-3 border-gray-200 dark:border-white/10">
                                                    <a href="<?php echo e(url('profile')); ?>" class="space-x-3"><i class="ri-user-line"></i><span>Profile</span></a>
                                                </div>
                                                <div class="col-span-6 p-3">
                                                    <a href="<?php echo e(url('contacts')); ?>" class="space-x-3"><i
                                                        class="ri-message-3-line"></i><span>Chat</span></a>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-span-12 md:col-span-6 xxl:col-span-3 team-box">
                                            <div class="box overflow-hidden mb-0">
                                            <div class="block relative -mb-32 before:bg-primary/70 before:absolute before:w-full before:h-full">
                                                <img src="<?php echo e(asset('build/assets/img/png-images/2.png')); ?>" alt="" class="w-full h-32">
                                            </div>
                                            <div class="box-body">
                                                <div class="justify-center text-center relative ">
                                                <a class="relative inline-block mt-8" href="<?php echo e(url('profile')); ?>">
                                                    <img src="<?php echo e(asset('build/assets/img/users/4.jpg')); ?>"
                                                    class="w-24 h-24 rounded-full ring-4 ring-gray-100 mx-auto dark:ring-white/10" alt="user-img">
                                                    <span
                                                    class="absolute bottom-0 ltr:right-0 rtl:left-0 block p-1 rounded-full ring-2 ring-white dark:ring-white/10 text-gray-500 dark:text-white/70 bg-gray-100 dark:bg-bgdark leading-none"><i
                                                        class="ri ri-pencil-line"></i></span>
                                                </a>
                                                <div class="space-y-2">
                                                    <div class="mt-4">
                                                    <h2 class="text-base font-semibold"> Samantha Paul</h2>
                                                    <p class="text-xs text-gray-500 dark:text-white/70"> samanthapaul@abc.com</p>
                                                    </div>
                                                    <span class="max-w-[10rem] truncate whitespace-nowrap inline-block py-1.5 px-3 rounded-sm text-xs font-medium bg-primary/20 text-primary">Sr.UI Developer</span>
                                                    <div class="flex space-x-1 rtl:space-x-reverse justify-center text-center">
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-github-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Github
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-instagram-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Instagram
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-twitter-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Twitter
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-linkedin-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Linkedin
                                                        </span>
                                                        </button>
                                                    </div>
                                                    </div>
                                                </div>
                                                <a aria-label="anchor" href="javascript:void(0);" class="absolute top-0 ltr:left-0 rtl:right-0 block text-yellow-500 text-base hover:text-yellow-500"><i class="ri-star-fill"></i></a>
                                                <div
                                                    class="hs-dropdown ti-dropdown absolute top-0 ltr:right-0 rtl:left-0 block text-gray-100 dark:text-white/70 text-base">
                                                    <button aria-label="button" type="button"
                                                    class="hs-dropdown-toggle p-0 !bg-transparent border-0 shadow-none focus:ring-0 focus:ring-offset-0 ti-dropdown-toggle">
                                                    <i class="ri-more-2-line leading-none text-base text-gray-100"></i>
                                                    </button>
                                                    <div class="hs-dropdown-menu ti-dropdown-menu">
                                                    <a class="ti-dropdown-item" href="<?php echo e(url('profile')); ?>"><i
                                                        class="ri ri-edit-2-line text-lg"></i>Edit</a>
                                                    <a class="team-remove ti-dropdown-item" href="javascript:void(0);"><i
                                                        class="ri ri-delete-bin-6-line text-lg"></i>Delete</a>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="box-footer bg-gray-100 dark:bg-bgdark p-0 text-center">
                                                <div class="grid grid-cols-12 gap-6">
                                                <div class="col-span-6 ltr:border-r rtl:border-l p-3 border-gray-200 dark:border-white/10">
                                                    <a href="<?php echo e(url('profile')); ?>" class="space-x-3"><i class="ri-user-line"></i><span>Profile</span></a>
                                                </div>
                                                <div class="col-span-6 p-3">
                                                    <a href="<?php echo e(url('contacts')); ?>" class="space-x-3"><i
                                                        class="ri-message-3-line"></i><span>Chat</span></a>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-span-12 md:col-span-6 xxl:col-span-3 team-box">
                                            <div class="box overflow-hidden mb-0">
                                            <div class="block relative -mb-32 before:bg-primary/70 before:absolute before:w-full before:h-full">
                                                <img src="<?php echo e(asset('build/assets/img/png-images/2.png')); ?>" alt="" class="w-full h-32">
                                            </div>
                                            <div class="box-body">
                                                <div class="justify-center text-center relative ">
                                                <a class="relative inline-block mt-8" href="<?php echo e(url('profile')); ?>">
                                                    <img src="<?php echo e(asset('build/assets/img/users/15.jpg')); ?>"
                                                    class="w-24 h-24 rounded-full ring-4 ring-gray-100 mx-auto dark:ring-white/10" alt="user-img">
                                                    <span
                                                    class="absolute bottom-0 ltr:right-0 rtl:left-0 block p-1 rounded-full ring-2 ring-white dark:ring-white/10 text-gray-500 dark:text-white/70 bg-gray-100 dark:bg-bgdark leading-none"><i
                                                        class="ri ri-pencil-line"></i></span>
                                                </a>
                                                <div class="space-y-2">
                                                    <div class="mt-4">
                                                    <h2 class="text-base font-semibold">Mc Greggor</h2>
                                                    <p class="text-xs text-gray-500 dark:text-white/70">mcgreggor@abc.com</p>
                                                    </div>
                                                    <span class="max-w-[10rem] truncate whitespace-nowrap inline-block py-1.5 px-3 rounded-sm text-xs font-medium bg-success/20 text-success">Java Developer</span>
                                                    <div class="flex space-x-1 rtl:space-x-reverse justify-center text-center">
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-github-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Github
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-instagram-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Instagram
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-twitter-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Twitter
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-linkedin-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Linkedin
                                                        </span>
                                                        </button>
                                                    </div>
                                                    </div>
                                                </div>
                                                <a aria-label="anchor" href="javascript:void(0);" class="absolute top-0 ltr:left-0 rtl:right-0 block text-gray-100 opacity-80 hover:opacity-100 text-base hover:text-yellow-500"><i class="ri-star-fill"></i></a>
                                                <div
                                                    class="hs-dropdown ti-dropdown absolute top-0 ltr:right-0 rtl:left-0 block text-gray-100 dark:text-white/70 text-base">
                                                    <button aria-label="button" type="button"
                                                    class="hs-dropdown-toggle p-0 !bg-transparent border-0 shadow-none focus:ring-0 focus:ring-offset-0 ti-dropdown-toggle">
                                                    <i class="ri-more-2-line leading-none text-base text-gray-100"></i>
                                                    </button>
                                                    <div class="hs-dropdown-menu ti-dropdown-menu">
                                                    <a class="ti-dropdown-item" href="<?php echo e(url('profile')); ?>"><i
                                                        class="ri ri-edit-2-line text-lg"></i>Edit</a>
                                                    <a class="team-remove ti-dropdown-item" href="javascript:void(0);"><i
                                                        class="ri ri-delete-bin-6-line text-lg"></i>Delete</a>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="box-footer bg-gray-100 dark:bg-bgdark p-0 text-center">
                                                <div class="grid grid-cols-12 gap-6">
                                                <div class="col-span-6 ltr:border-r rtl:border-l p-3 border-gray-200 dark:border-white/10">
                                                    <a href="<?php echo e(url('profile')); ?>" class="space-x-3"><i class="ri-user-line"></i><span>Profile</span></a>
                                                </div>
                                                <div class="col-span-6 p-3">
                                                    <a href="<?php echo e(url('contacts')); ?>" class="space-x-3"><i
                                                        class="ri-message-3-line"></i><span>Chat</span></a>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-span-12 md:col-span-6 xxl:col-span-3 team-box">
                                            <div class="box overflow-hidden mb-0">
                                            <div class="block relative -mb-32 before:bg-primary/70 before:absolute before:w-full before:h-full">
                                                <img src="<?php echo e(asset('build/assets/img/png-images/2.png')); ?>" alt="" class="w-full h-32">
                                            </div>
                                            <div class="box-body">
                                                <div class="justify-center text-center relative ">
                                                <a class="relative inline-block mt-8" href="<?php echo e(url('profile')); ?>">
                                                    <img src="<?php echo e(asset('build/assets/img/users/6.jpg')); ?>"
                                                    class="w-24 h-24 rounded-full ring-4 ring-gray-100 mx-auto dark:ring-white/10" alt="user-img">
                                                    <span
                                                    class="absolute bottom-0 ltr:right-0 rtl:left-0 block p-1 rounded-full ring-2 ring-white dark:ring-white/10 text-gray-500 dark:text-white/70 bg-gray-100 dark:bg-bgdark leading-none"><i
                                                        class="ri ri-pencil-line"></i></span>
                                                </a>
                                                <div class="space-y-2">
                                                    <div class="mt-4">
                                                    <h2 class="text-base font-semibold">Emiley Jackson</h2>
                                                    <p class="text-xs text-gray-500 dark:text-white/70">emileyjackson@abc.com</p>
                                                    </div>
                                                    <span class="max-w-[10rem] truncate whitespace-nowrap inline-block py-1.5 px-3 rounded-sm text-xs font-medium bg-primary/20 text-primary">Full Stack Developer</span>
                                                    <div class="flex space-x-1 rtl:space-x-reverse justify-center text-center">
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-github-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Github
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-instagram-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Instagram
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-twitter-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Twitter
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-linkedin-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Linkedin
                                                        </span>
                                                        </button>
                                                    </div>
                                                    </div>
                                                </div>
                                                <a aria-label="anchor" href="javascript:void(0);" class="absolute top-0 ltr:left-0 rtl:right-0 block text-yellow-500 text-base hover:text-yellow-500"><i class="ri-star-fill"></i></a>
                                                <div
                                                    class="hs-dropdown ti-dropdown absolute top-0 ltr:right-0 rtl:left-0 block text-gray-100 dark:text-white/70 text-base">
                                                    <button aria-label="button" type="button"
                                                    class="hs-dropdown-toggle p-0 !bg-transparent border-0 shadow-none focus:ring-0 focus:ring-offset-0 ti-dropdown-toggle">
                                                    <i class="ri-more-2-line leading-none text-base text-gray-100"></i>
                                                    </button>
                                                    <div class="hs-dropdown-menu ti-dropdown-menu">
                                                    <a class="ti-dropdown-item" href="<?php echo e(url('profile')); ?>"><i
                                                        class="ri ri-edit-2-line text-lg"></i>Edit</a>
                                                    <a class="team-remove ti-dropdown-item" href="javascript:void(0);"><i
                                                        class="ri ri-delete-bin-6-line text-lg"></i>Delete</a>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="box-footer bg-gray-100 dark:bg-bgdark p-0 text-center">
                                                <div class="grid grid-cols-12 gap-6">
                                                <div class="col-span-6 ltr:border-r rtl:border-l p-3 border-gray-200 dark:border-white/10">
                                                    <a href="<?php echo e(url('profile')); ?>" class="space-x-3"><i class="ri-user-line"></i><span>Profile</span></a>
                                                </div>
                                                <div class="col-span-6 p-3">
                                                    <a href="<?php echo e(url('contacts')); ?>" class="space-x-3"><i
                                                        class="ri-message-3-line"></i><span>Chat</span></a>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-span-12 md:col-span-6 xxl:col-span-3 team-box">
                                            <div class="box overflow-hidden mb-0">
                                            <div class="block relative -mb-32 before:bg-primary/70 before:absolute before:w-full before:h-full">
                                                <img src="<?php echo e(asset('build/assets/img/png-images/2.png')); ?>" alt="" class="w-full h-32">
                                            </div>
                                            <div class="box-body">
                                                <div class="justify-center text-center relative ">
                                                <a class="relative inline-block mt-8" href="<?php echo e(url('profile')); ?>">
                                                    <img src="<?php echo e(asset('build/assets/img/users/9.jpg')); ?>"
                                                    class="w-24 h-24 rounded-full ring-4 ring-gray-100 mx-auto dark:ring-white/10" alt="user-img">
                                                    <span
                                                    class="absolute bottom-0 ltr:right-0 rtl:left-0 block p-1 rounded-full ring-2 ring-white dark:ring-white/10 text-gray-500 dark:text-white/70 bg-gray-100 dark:bg-bgdark leading-none"><i
                                                        class="ri ri-pencil-line"></i></span>
                                                </a>
                                                <div class="space-y-2">
                                                    <div class="mt-4">
                                                    <h2 class="text-base font-semibold">Nicholas Sams</h2>
                                                    <p class="text-xs text-gray-500 dark:text-white/70">nicholassams@abc.com</p>
                                                    </div>
                                                    <span class="max-w-[10rem] truncate whitespace-nowrap inline-block py-1.5 px-3 rounded-sm text-xs font-medium bg-secondary/20 text-secondary">Networking</span>
                                                    <div class="flex space-x-1 rtl:space-x-reverse justify-center text-center">
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-github-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Github
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-instagram-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Instagram
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-twitter-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Twitter
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-linkedin-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Linkedin
                                                        </span>
                                                        </button>
                                                    </div>
                                                    </div>
                                                </div>
                                                <a aria-label="anchor" href="javascript:void(0);" class="absolute top-0 ltr:left-0 rtl:right-0 block text-yellow-500 text-base hover:text-yellow-500"><i class="ri-star-fill"></i></a>
                                                <div
                                                    class="hs-dropdown ti-dropdown absolute top-0 ltr:right-0 rtl:left-0 block text-gray-100 dark:text-white/70 text-base">
                                                    <button aria-label="button" type="button"
                                                    class="hs-dropdown-toggle p-0 !bg-transparent border-0 shadow-none focus:ring-0 focus:ring-offset-0 ti-dropdown-toggle">
                                                    <i class="ri-more-2-line leading-none text-base text-gray-100"></i>
                                                    </button>
                                                    <div class="hs-dropdown-menu ti-dropdown-menu">
                                                    <a class="ti-dropdown-item" href="<?php echo e(url('profile')); ?>"><i
                                                        class="ri ri-edit-2-line text-lg"></i>Edit</a>
                                                    <a class="team-remove ti-dropdown-item" href="javascript:void(0);"><i
                                                        class="ri ri-delete-bin-6-line text-lg"></i>Delete</a>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="box-footer bg-gray-100 dark:bg-bgdark p-0 text-center">
                                                <div class="grid grid-cols-12 gap-6">
                                                <div class="col-span-6 ltr:border-r rtl:border-l p-3 border-gray-200 dark:border-white/10">
                                                    <a href="<?php echo e(url('profile')); ?>" class="space-x-3"><i class="ri-user-line"></i><span>Profile</span></a>
                                                </div>
                                                <div class="col-span-6 p-3">
                                                    <a href="<?php echo e(url('contacts')); ?>" class="space-x-3"><i
                                                        class="ri-message-3-line"></i><span>Chat</span></a>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-span-12 md:col-span-6 xxl:col-span-3 team-box">
                                            <div class="box overflow-hidden mb-0">
                                            <div class="block relative -mb-32 before:bg-primary/70 before:absolute before:w-full before:h-full">
                                                <img src="<?php echo e(asset('build/assets/img/png-images/2.png')); ?>" alt="" class="w-full h-32">
                                            </div>
                                            <div class="box-body">
                                                <div class="justify-center text-center relative ">
                                                <a class="relative inline-block mt-8" href="<?php echo e(url('profile')); ?>">
                                                    <img src="<?php echo e(asset('build/assets/img/users/11.jpg')); ?>"
                                                    class="w-24 h-24 rounded-full ring-4 ring-gray-100 mx-auto dark:ring-white/10" alt="user-img">
                                                    <span
                                                    class="absolute bottom-0 ltr:right-0 rtl:left-0 block p-1 rounded-full ring-2 ring-white dark:ring-white/10 text-gray-500 dark:text-white/70 bg-gray-100 dark:bg-bgdark leading-none"><i
                                                        class="ri ri-pencil-line"></i></span>
                                                </a>
                                                <div class="space-y-2">
                                                    <div class="mt-4">
                                                    <h2 class="text-base font-semibold">Pope Johnson</h2>
                                                    <p class="text-xs text-gray-500 dark:text-white/70">popejohnson@abc.com</p>
                                                    </div>
                                                    <span class="max-w-[10rem] truncate whitespace-nowrap inline-block py-1.5 px-3 rounded-sm text-xs font-medium bg-info/20 text-info">React Developer</span>
                                                    <div class="flex space-x-1 rtl:space-x-reverse justify-center text-center">
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-github-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Github
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-instagram-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Instagram
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-twitter-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Twitter
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-linkedin-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Linkedin
                                                        </span>
                                                        </button>
                                                    </div>
                                                    </div>
                                                </div>
                                                <a aria-label="anchor" href="javascript:void(0);" class="absolute top-0 ltr:left-0 rtl:right-0 block text-gray-100 opacity-80 hover:opacity-100 text-base hover:text-yellow-500"><i class="ri-star-fill"></i></a>
                                                <div
                                                    class="hs-dropdown ti-dropdown absolute top-0 ltr:right-0 rtl:left-0 block text-gray-100 dark:text-white/70 text-base">
                                                    <button aria-label="button" type="button"
                                                    class="hs-dropdown-toggle p-0 !bg-transparent border-0 shadow-none focus:ring-0 focus:ring-offset-0 ti-dropdown-toggle">
                                                    <i class="ri-more-2-line leading-none text-base text-gray-100"></i>
                                                    </button>
                                                    <div class="hs-dropdown-menu ti-dropdown-menu">
                                                    <a class="ti-dropdown-item" href="<?php echo e(url('profile')); ?>"><i
                                                        class="ri ri-edit-2-line text-lg"></i>Edit</a>
                                                    <a class="team-remove ti-dropdown-item" href="javascript:void(0);"><i
                                                        class="ri ri-delete-bin-6-line text-lg"></i>Delete</a>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="box-footer bg-gray-100 dark:bg-bgdark p-0 text-center">
                                                <div class="grid grid-cols-12 gap-6">
                                                <div class="col-span-6 ltr:border-r rtl:border-l p-3 border-gray-200 dark:border-white/10">
                                                    <a href="<?php echo e(url('profile')); ?>" class="space-x-3"><i class="ri-user-line"></i><span>Profile</span></a>
                                                </div>
                                                <div class="col-span-6 p-3">
                                                    <a href="<?php echo e(url('contacts')); ?>" class="space-x-3"><i
                                                        class="ri-message-3-line"></i><span>Chat</span></a>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-span-12 md:col-span-6 xxl:col-span-3 team-box">
                                            <div class="box overflow-hidden mb-0">
                                            <div class="block relative -mb-32 before:bg-primary/70 before:absolute before:w-full before:h-full">
                                                <img src="<?php echo e(asset('build/assets/img/png-images/2.png')); ?>" alt="" class="w-full h-32">
                                            </div>
                                            <div class="box-body">
                                                <div class="justify-center text-center relative ">
                                                <a class="relative inline-block mt-8" href="<?php echo e(url('profile')); ?>">
                                                    <img src="<?php echo e(asset('build/assets/img/users/18.jpg')); ?>"
                                                    class="w-24 h-24 rounded-full ring-4 ring-gray-100 mx-auto dark:ring-white/10" alt="user-img">
                                                    <span
                                                    class="absolute bottom-0 ltr:right-0 rtl:left-0 block p-1 rounded-full ring-2 ring-white dark:ring-white/10 text-gray-500 dark:text-white/70 bg-gray-100 dark:bg-bgdark leading-none"><i
                                                        class="ri ri-pencil-line"></i></span>
                                                </a>
                                                <div class="space-y-2">
                                                    <div class="mt-4">
                                                    <h2 class="text-base font-semibold">Megan Fox</h2>
                                                    <p class="text-xs text-gray-500 dark:text-white/70">meganfox@abc.com</p>
                                                    </div>
                                                    <span class="max-w-[10rem] truncate whitespace-nowrap inline-block py-1.5 px-3 rounded-sm text-xs font-medium bg-primary/20 text-primary">UI Developer</span>
                                                    <div class="flex space-x-1 rtl:space-x-reverse justify-center text-center">
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-github-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Github
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-instagram-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Instagram
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-twitter-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Twitter
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-linkedin-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Linkedin
                                                        </span>
                                                        </button>
                                                    </div>
                                                    </div>
                                                </div>
                                                <a aria-label="anchor" href="javascript:void(0);" class="absolute top-0 ltr:left-0 rtl:right-0 block text-gray-100 opacity-80 hover:opacity-100 text-base hover:text-yellow-500"><i class="ri-star-fill"></i></a>
                                                <div
                                                    class="hs-dropdown ti-dropdown absolute top-0 ltr:right-0 rtl:left-0 block text-gray-100 dark:text-white/70 text-base">
                                                    <button aria-label="button" type="button"
                                                    class="hs-dropdown-toggle p-0 !bg-transparent border-0 shadow-none focus:ring-0 focus:ring-offset-0 ti-dropdown-toggle">
                                                    <i class="ri-more-2-line leading-none text-base text-gray-100"></i>
                                                    </button>
                                                    <div class="hs-dropdown-menu ti-dropdown-menu">
                                                    <a class="ti-dropdown-item" href="<?php echo e(url('profile')); ?>"><i
                                                        class="ri ri-edit-2-line text-lg"></i>Edit</a>
                                                    <a class="team-remove ti-dropdown-item" href="javascript:void(0);"><i
                                                        class="ri ri-delete-bin-6-line text-lg"></i>Delete</a>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="box-footer bg-gray-100 dark:bg-bgdark p-0 text-center">
                                                <div class="grid grid-cols-12 gap-6">
                                                <div class="col-span-6 ltr:border-r rtl:border-l p-3 border-gray-200 dark:border-white/10">
                                                    <a href="<?php echo e(url('profile')); ?>" class="space-x-3"><i class="ri-user-line"></i><span>Profile</span></a>
                                                </div>
                                                <div class="col-span-6 p-3">
                                                    <a href="<?php echo e(url('contacts')); ?>" class="space-x-3"><i
                                                        class="ri-message-3-line"></i><span>Chat</span></a>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-span-12 md:col-span-6 xxl:col-span-3 team-box">
                                            <div class="box overflow-hidden mb-0">
                                            <div class="block relative -mb-32 before:bg-primary/70 before:absolute before:w-full before:h-full">
                                                <img src="<?php echo e(asset('build/assets/img/png-images/2.png')); ?>" alt="" class="w-full h-32">
                                            </div>
                                            <div class="box-body">
                                                <div class="justify-center text-center relative ">
                                                <a class="relative inline-block mt-8" href="<?php echo e(url('profile')); ?>">
                                                    <img src="<?php echo e(asset('build/assets/img/users/20.jpg')); ?>"
                                                    class="w-24 h-24 rounded-full ring-4 ring-gray-100 mx-auto dark:ring-white/10" alt="user-img">
                                                    <span
                                                    class="absolute bottom-0 ltr:right-0 rtl:left-0 block p-1 rounded-full ring-2 ring-white dark:ring-white/10 text-gray-500 dark:text-white/70 bg-gray-100 dark:bg-bgdark leading-none"><i
                                                        class="ri ri-pencil-line"></i></span>
                                                </a>
                                                <div class="space-y-2">
                                                    <div class="mt-4">
                                                    <h2 class="text-base font-semibold">Dolor Dlita</h2>
                                                    <p class="text-xs text-gray-500 dark:text-white/70">dolordlita@abc.com</p>
                                                    </div>
                                                    <span class="max-w-[10rem] truncate whitespace-nowrap inline-block py-1.5 px-3 rounded-sm text-xs font-medium bg-success/20 text-success">Jr.Java Developer</span>
                                                    <div class="flex space-x-1 rtl:space-x-reverse justify-center text-center">
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-github-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Github
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-instagram-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Instagram
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-twitter-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Twitter
                                                        </span>
                                                        </button>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline  border-gray-200 dark:border-white/10 text-gray-500 dark:text-white/70 ring-transparent">
                                                        <i class="ri ri-linkedin-line text-lg leading-none"></i>
                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                            Linkedin
                                                        </span>
                                                        </button>
                                                    </div>
                                                    </div>
                                                </div>
                                                <a aria-label="anchor" href="javascript:void(0);" class="absolute top-0 ltr:left-0 rtl:right-0 block text-gray-100 opacity-80 hover:opacity-100 text-base hover:text-yellow-500"><i class="ri-star-fill"></i></a>
                                                <div
                                                    class="hs-dropdown ti-dropdown absolute top-0 ltr:right-0 rtl:left-0 block text-gray-100 dark:text-white/70 text-base">
                                                    <button aria-label="button" type="button"
                                                    class="hs-dropdown-toggle p-0 !bg-transparent border-0 shadow-none focus:ring-0 focus:ring-offset-0 ti-dropdown-toggle">
                                                    <i class="ri-more-2-line leading-none text-base text-gray-100"></i>
                                                    </button>
                                                    <div class="hs-dropdown-menu ti-dropdown-menu">
                                                    <a class="ti-dropdown-item" href="<?php echo e(url('profile')); ?>"><i
                                                        class="ri ri-edit-2-line text-lg"></i>Edit</a>
                                                    <a class="team-remove ti-dropdown-item" href="javascript:void(0);"><i
                                                        class="ri ri-delete-bin-6-line text-lg"></i>Delete</a>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="box-footer bg-gray-100 dark:bg-bgdark p-0 text-center">
                                                <div class="grid grid-cols-12 gap-6">
                                                <div class="col-span-6 ltr:border-r rtl:border-l p-3 border-gray-200 dark:border-white/10">
                                                    <a href="<?php echo e(url('profile')); ?>" class="space-x-3"><i class="ri-user-line"></i><span>Profile</span></a>
                                                </div>
                                                <div class="col-span-6 p-3">
                                                    <a href="<?php echo e(url('contacts')); ?>" class="space-x-3"><i
                                                        class="ri-message-3-line"></i><span>Chat</span></a>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <nav class="flex justify-end items-center space-x-2 rtl:space-x-reverse my-4">
                                    <a class="w-10 h-10 text-gray-500 dark:text-white/70 bg-gray-200 dark:bg-bgdark hover:text-primary p-4 inline-flex items-center gap-2 rounded-full" href="javascript:void(0);">
                                        <span aria-hidden="true">«</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="w-10 h-10 bg-primary text-white p-4 inline-flex items-center text-sm font-medium rounded-full" href="javascript:void(0);" aria-current="page">1</a>
                                    <a class="w-10 h-10  bg-gray-200 dark:bg-bgdark text-gray-500 dark:text-white/70 hover:text-primary p-4 inline-flex items-center text-sm font-medium rounded-full" href="javascript:void(0);">2</a>
                                    <a class="w-10 h-10  bg-gray-200 dark:bg-bgdark text-gray-500 dark:text-white/70 hover:text-primary p-4 inline-flex items-center text-sm font-medium rounded-full" href="javascript:void(0);">3</a>
                                    <a class="w-10 h-10 text-gray-500 dark:text-white/70 bg-gray-200 dark:bg-bgdark hover:text-primary p-4 inline-flex items-center gap-2 rounded-full" href="javascript:void(0);">
                                        <span class="sr-only">Next</span>
                                        <span aria-hidden="true">»</span>
                                    </a>
                                    </nav>
                                </div>
                            </div>
                            <!-- End::row-2 -->

                        </div>
                        <!-- Start::main-content -->

                    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

        <!-- CHOICES JS -->
        <script src="<?php echo e(asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')); ?>"></script>

        <!-- TEAM JS -->
        <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/team.js'); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\my-projects\laravel\vite\synto\synto-laravel\synto\resources\views/pages/teams.blade.php ENDPATH**/ ?>