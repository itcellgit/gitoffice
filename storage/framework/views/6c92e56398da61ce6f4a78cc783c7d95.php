<?php $__env->startSection('styles'); ?>

        <!-- SWIPER CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('build/assets/libs/swiper/swiper-bundle.min.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

                    <div class="content">

                        <!-- Start::main-content -->
                        <div class="main-content">

                            <!-- Page Header -->
                            <div class="block justify-between page-header sm:flex">
                                <div>
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Chat</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                        <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Pages
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                        </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        Chat
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="main-chart-wrapper px-5 gap-2 lg:flex">
                                <div class="chat-info">
                                    <div class="box">
                                    <div class="box-header">
                                        <div class="relative">
                                        <label for="hs-table-search" class="sr-only">Search</label>
                                        <div
                                            class="absolute inset-y-0 ltr:right-0 rtl:left-0 flex items-center pointer-events-none ltr:pr-4 rtl:pl-4">
                                            <svg class="h-3.5 w-3.5 text-gray-400 dark:text-white/70" xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
                                            </path>
                                            </svg>
                                        </div><input type="text" name="hs-table-search" id="hs-table-search"
                                            class="p-3 ltr:pr-10 rtl:pl-10 ti-form-input" placeholder="Enter Your Text">
                                        </div>
                                    </div>
                                    <div class="box-body px-0 pb-0">
                                        <div class="main-chat-content space-y-5">
                                        <div class="chat-active space-y-3 pb-6 px-6 border-b border-gray-200 dark:border-white/10">
                                            <h3 class="text-gray-800 dark:text-gray-200 font-semibold">Active</h3>
                                            <div class="swiper active-chat">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                <a class="relative inline-block" href="javascript:void(0);">
                                                    <img class="avatar avatar-sm rounded-full" src="<?php echo e(asset('build/assets/img/users/2.jpg')); ?>"
                                                    alt="Image Description">
                                                    <span class="online"></span>
                                                </a>
                                                </div>
                                                <div class="swiper-slide">
                                                <a class="relative inline-block" href="javascript:void(0);">
                                                    <img class="avatar avatar-sm rounded-full" src="<?php echo e(asset('build/assets/img/users/3.jpg')); ?>"
                                                    alt="Image Description">
                                                    <span class="online"></span>
                                                </a>
                                                </div>
                                                <div class="swiper-slide">
                                                <a class="relative inline-block" href="javascript:void(0);">
                                                    <img class="avatar avatar-sm rounded-full" src="<?php echo e(asset('build/assets/img/users/4.jpg')); ?>"
                                                    alt="Image Description">
                                                    <span class="online"></span>
                                                </a>
                                                </div>
                                                <div class="swiper-slide">
                                                <a class="relative inline-block" href="javascript:void(0);">
                                                    <img class="avatar avatar-sm rounded-full" src="<?php echo e(asset('build/assets/img/users/19.jpg')); ?>"
                                                    alt="Image Description">
                                                    <span class="online"></span>
                                                </a>
                                                </div>
                                                <div class="swiper-slide">
                                                <a class="relative inline-block" href="javascript:void(0);">
                                                    <img class="avatar avatar-sm rounded-full" src="<?php echo e(asset('build/assets/img/users/18.jpg')); ?>"
                                                    alt="Image Description">
                                                    <span class="online"></span>
                                                </a>
                                                </div>
                                                <div class="swiper-slide">
                                                <a class="relative inline-block" href="javascript:void(0);">
                                                    <img class="avatar avatar-sm rounded-full" src="<?php echo e(asset('build/assets/img/users/17.jpg')); ?>"
                                                    alt="Image Description">
                                                    <span class="online"></span>
                                                </a>
                                                </div>
                                                <div class="swiper-slide">
                                                <a class="relative inline-block" href="javascript:void(0);">
                                                    <img class="avatar avatar-sm rounded-full" src="<?php echo e(asset('build/assets/img/users/16.jpg')); ?>"
                                                    alt="Image Description">
                                                    <span class="online"></span>
                                                </a>
                                                </div>
                                                <div class="swiper-slide">
                                                <a class="relative inline-block" href="javascript:void(0);">
                                                    <img class="avatar avatar-sm rounded-full" src="<?php echo e(asset('build/assets/img/users/15.jpg')); ?>"
                                                    alt="Image Description">
                                                    <span class="online"></span>
                                                </a>
                                                </div>
                                                <div class="swiper-slide">
                                                <a class="relative inline-block" href="javascript:void(0);">
                                                    <img class="avatar avatar-sm rounded-full" src="<?php echo e(asset('build/assets/img/users/14.jpg')); ?>"
                                                    alt="Image Description">
                                                    <span class="online"></span>
                                                </a>
                                                </div>
                                                <div class="swiper-slide">
                                                <a class="relative inline-block" href="javascript:void(0);">
                                                    <img class="avatar avatar-sm rounded-full" src="<?php echo e(asset('build/assets/img/users/13.jpg')); ?>"
                                                    alt="Image Description">
                                                    <span class="online"></span>
                                                </a>
                                                </div>
                                                <div class="swiper-slide">
                                                <a class="relative inline-block" href="javascript:void(0);">
                                                    <img class="avatar avatar-sm rounded-full" src="<?php echo e(asset('build/assets/img/users/12.jpg')); ?>"
                                                    alt="Image Description">
                                                    <span class="online"></span>
                                                </a>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="chat-message">
                                            <div class=" space-y-3 px-6">
                                            <h3 class="text-gray-800 dark:text-gray-200 font-semibold">Messages</h3>
                                            <div class="text-center">
                                                <nav
                                                class="flex justify-center bg-gray-100 dark:bg-black/20 p-2 mx-auto w-full rounded-sm gap-2"
                                                aria-label="Tabs" role="tablist">
                                                <button type="button"
                                                    class="w-full hs-tab-active:!bg-primary hs-tab-active:!text-white dark:hs-tab-active:border-b-white/10 -mb-px p-2 items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 active"
                                                    id="messages-1" data-hs-tab="#messages-style-1" aria-controls="messages-style-1" role="tab">
                                                    <i class="ti ti-mail"></i> Chat
                                                </button>
                                                <button type="button"
                                                    class="w-full hs-tab-active:!bg-primary hs-tab-active:!text-white dark:hs-tab-active:border-b-white/10 -mb-px p-2 items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300"
                                                    id="messages-2" data-hs-tab="#messages-style-2" aria-controls="messages-style-2" role="tab">
                                                    <i class="ti ti-message"></i> Contacts
                                                </button>
                                                <button type="button"
                                                    class="w-full hs-tab-active:!bg-primary hs-tab-active:!text-white dark:hs-tab-active:border-b-white/10 -mb-px p-2 items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300"
                                                    id="messages-3" data-hs-tab="#messages-style-3" aria-controls="messages-style-3" role="tab">
                                                    <i class="ti ti-phone-call"></i> Calls
                                                </button>
                                                </nav>
                                            </div>
                                            </div>
                                            <div class="ti-tab-content mt-3" id="messagelist">
                                            <div id="messages-style-1" role="tabpanel" aria-labelledby="messages-1">
                                                <ul class="flex flex-col divide-y divide-gray-200 dark:divide-white/10">
                                                <li class="ti-list-group border-0 text-gray-800 dark:text-white relative checkforactive">
                                                    <a aria-label="anchor" class="before:absolute before:inset-0 before:z-1" href="javascript:void(0);"
                                                    onclick="changeTheInfo(this,'Socrates Itumay😎','2','online')"></a>
                                                    <div class="flex items-center space-x-3 rtl:space-x-reverse w-full">
                                                    <div class="flex">
                                                        <a class="relative inline-block avatar avatar-sm rounded-full" href="javascript:void(0);">
                                                        <img class="rounded-full" src="<?php echo e(asset('build/assets/img/users/2.jpg')); ?>"
                                                            alt="Image Description">
                                                        <span class="online"></span>
                                                        </a>
                                                    </div>
                                                    <div class="w-full">
                                                        <div class="flex items-center justify-between">
                                                        <p class="text-slate-700 font-semibold text-sm dark:text-white">
                                                            Socrates Itumay😎
                                                        </p>
                                                        <p class="text-gray-500 font-normal text-xs dark:text-white/70">5mins ago</p>
                                                        </div>
                                                        <div class="flex items-center justify-between">
                                                        <p class="text-xs text-gray-500 dark:text-white/70 chat-msg-text">
                                                            <i class="ti ti-check text-sm ltr:mr-1 rtl:ml-1"></i>Consetetur sanctus.
                                                        </p>
                                                        <span class="badge py-0.5 px-1.5 bg-primary text-white">5</span>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group border-0 text-gray-800 dark:text-white relative checkforactive">
                                                    <a aria-label="anchor" class="before:absolute before:inset-0 before:z-1" href="javascript:void(0);"
                                                    onclick="changeTheInfo(this,'Eos Tempor','20','online')"></a>
                                                    <div class="flex items-center space-x-3 rtl:space-x-reverse w-full">
                                                    <div class="flex">
                                                        <a class="relative inline-block avatar avatar-sm rounded-full" href="javascript:void(0);">
                                                        <img class="rounded-full" src="<?php echo e(asset('build/assets/img/users/20.jpg')); ?>"
                                                            alt="Image Description">
                                                        <span class="online"></span>
                                                        </a>
                                                    </div>
                                                    <div class="w-full">
                                                        <div class="flex items-center justify-between">
                                                        <p class="text-slate-700 font-semibold text-sm dark:text-white">
                                                            Eos Tempor
                                                        </p>
                                                        <p class="text-gray-500 font-normal text-xs dark:text-white/70">30mins ago</p>
                                                        </div>
                                                        <div class="flex items-center justify-between">
                                                        <p class="text-xs text-gray-500 dark:text-white/70 chat-msg-text">
                                                            <i class="ti ti-checks text-sm ltr:mr-1 rtl:ml-1"></i>Ipsum lorem kasd sed elitr....
                                                        </p>
                                                        <span class="badge py-0.5 px-1.5 bg-primary text-white">2</span>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group border-0 text-gray-800 dark:text-white relative checkforactive">
                                                    <a aria-label="anchor" class="before:absolute before:inset-0 before:z-1" href="javascript:void(0);"
                                                    onclick="changeTheInfo(this,'Et Kasd','15','online')"></a>
                                                    <div class="flex items-center space-x-3 rtl:space-x-reverse w-full">
                                                    <div class="flex">
                                                        <a class="relative inline-block avatar avatar-sm rounded-full" href="javascript:void(0);">
                                                        <img class="rounded-full" src="<?php echo e(asset('build/assets/img/users/15.jpg')); ?>"
                                                            alt="Image Description">
                                                        <span class="online"></span>
                                                        </a>
                                                    </div>
                                                    <div class="w-full">
                                                        <div class="flex items-center justify-between">
                                                        <p class="text-slate-700 font-semibold text-sm dark:text-white">
                                                            Et Kasd
                                                        </p>
                                                        <p class="text-gray-500 font-normal text-xs dark:text-white/70">45mins ago</p>
                                                        </div>
                                                        <div class="flex items-center justify-between">
                                                        <p class="text-xs text-gray-500 dark:text-white/70 chat-msg-text">
                                                            <i class="ti ti-checks text-green-500 text-sm ltr:mr-1 rtl:ml-1"></i>Sit takimata
                                                            sanctus
                                                            takimata takimata et ipsum no. Eos duo elitr.
                                                        </p>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group border-0 text-gray-800 dark:text-white relative checkforactive">
                                                    <a aria-label="anchor" class="before:absolute before:inset-0 before:z-1" href="javascript:void(0);"
                                                    onclick="changeTheInfo(this,' Ipsum Et','18','offline')"></a>
                                                    <div class="flex items-center space-x-3 rtl:space-x-reverse w-full">
                                                    <div class="flex">
                                                        <a class="relative inline-block avatar avatar-sm rounded-full" href="javascript:void(0);">
                                                        <img class="rounded-full" src="<?php echo e(asset('build/assets/img/users/18.jpg')); ?>"
                                                            alt="Image Description">
                                                        <span class="offline"></span>
                                                        </a>
                                                    </div>
                                                    <div class="w-full">
                                                        <div class="flex items-center justify-between">
                                                        <p class="text-slate-700 font-semibold text-sm dark:text-white">
                                                            Ipsum Et
                                                        </p>
                                                        <p class="text-gray-500 font-normal text-xs dark:text-white/70">1hr ago</p>
                                                        </div>
                                                        <div class="flex items-center justify-between">
                                                        <p class="text-xs text-gray-500 dark:text-white/70 chat-msg-text">
                                                            <i class="ti ti-checks text-sm ltr:mr-1 rtl:ml-1"></i>Aliquyam justo diam eirmod
                                                            rebum diam.
                                                            Dolores dolores dolor justo.
                                                        </p>
                                                        <span class="badge py-0.5 px-2 bg-primary text-white">1</span>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group border-0 text-gray-800 dark:text-white relative checkforactive">
                                                    <a aria-label="anchor" class="before:absolute before:inset-0 before:z-1" href="javascript:void(0);"
                                                    onclick="changeTheInfo(this,' Ut Nonumy','19','online')"></a>
                                                    <div class="flex items-center space-x-3 rtl:space-x-reverse w-full">
                                                    <div class="flex">
                                                        <a class="relative inline-block avatar avatar-sm rounded-full" href="javascript:void(0);">
                                                        <img class="rounded-full" src="<?php echo e(asset('build/assets/img/users/19.jpg')); ?>"
                                                            alt="Image Description">
                                                        <span class="online"></span>
                                                        </a>
                                                    </div>
                                                    <div class="w-full">
                                                        <div class="flex items-center justify-between">
                                                        <p class="text-slate-700 font-semibold text-sm dark:text-white">
                                                            Ut Nonumy
                                                        </p>
                                                        <p class="text-gray-500 font-normal text-xs dark:text-white/70">2hr ago</p>
                                                        </div>
                                                        <div class="flex items-center justify-between">
                                                        <p class="text-xs text-green-500 chat-msg-text">
                                                            Typing.......
                                                        </p>
                                                        <span class="badge py-0.5 px-2 bg-primary text-white">1</span>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group border-0 text-gray-800 dark:text-white relative checkforactive">
                                                    <a aria-label="anchor" class="before:absolute before:inset-0 before:z-1" href="javascript:void(0);"
                                                    onclick="changeTheInfo(this,'Dolor Dlita 😒','16','online')"></a>
                                                    <div class="flex items-center space-x-3 rtl:space-x-reverse w-full">
                                                    <div class="flex">
                                                        <a class="relative inline-block avatar avatar-sm rounded-full" href="javascript:void(0);">
                                                        <img class="rounded-full" src="<?php echo e(asset('build/assets/img/users/16.jpg')); ?>"
                                                            alt="Image Description">
                                                        <span class="online"></span>
                                                        </a>
                                                    </div>
                                                    <div class="w-full">
                                                        <div class="flex items-center justify-between">
                                                        <p class="text-slate-700 font-semibold text-sm dark:text-white">
                                                            Dolor Dlita 😒
                                                        </p>
                                                        <p class="text-gray-500 font-normal text-xs dark:text-white/70">5hr ago</p>
                                                        </div>
                                                        <div class="flex items-center justify-between">
                                                        <p class="text-xs text-gray-500 dark:text-white/70 chat-msg-text">
                                                            <i class="ti ti-checks text-sm ltr:mr-1 rtl:ml-1"></i>Erat clita gubergren sit
                                                            labore. Dolor
                                                            labore eirmod takimata diam.
                                                        </p>
                                                        <span class="badge py-0.5 px-1.5 bg-primary text-white">2</span>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group border-0 text-gray-800 dark:text-white relative checkforactive">
                                                    <a aria-label="anchor" class="before:absolute before:inset-0 before:z-1" href="javascript:void(0);"
                                                    onclick="changeTheInfo(this,'Voluptua Ipsum','13','offline')"></a>
                                                    <div class="flex items-center space-x-3 rtl:space-x-reverse w-full">
                                                    <div class="flex">
                                                        <a class="relative inline-block avatar avatar-sm rounded-full" href="javascript:void(0);">
                                                        <img class="rounded-full" src="<?php echo e(asset('build/assets/img/users/13.jpg')); ?>"
                                                            alt="Image Description">
                                                        <span class="offline"></span>
                                                        </a>
                                                    </div>
                                                    <div class="w-full">
                                                        <div class="flex items-center justify-between">
                                                        <p class="text-slate-700 font-semibold text-sm dark:text-white">
                                                            Voluptua Ipsum
                                                        </p>
                                                        <p class="text-gray-500 font-normal text-xs dark:text-white/70">1day ago</p>
                                                        </div>
                                                        <div class="flex items-center justify-between">
                                                        <p class="text-xs text-gray-500 dark:text-white/70 chat-msg-text">
                                                            <i class="ti ti-checks text-sm ltr:mr-1 rtl:ml-1"></i>Stet erat diam lorem ut ea ut
                                                            ut at. At
                                                            dolor dolore.
                                                        </p>
                                                        <span class="badge py-0.5 px-2 bg-primary text-white">1</span>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group border-0 text-gray-800 dark:text-white relative checkforactive">
                                                    <a aria-label="anchor" class="before:absolute before:inset-0 before:z-1" href="javascript:void(0);"
                                                    onclick="changeTheInfo(this,' Joan Powell😊','14','offline')"></a>
                                                    <div class="flex items-center space-x-3 rtl:space-x-reverse w-full">
                                                    <div class="flex">
                                                        <a class="relative inline-block avatar avatar-sm rounded-full" href="javascript:void(0);">
                                                        <img class="rounded-full" src="<?php echo e(asset('build/assets/img/users/14.jpg')); ?>"
                                                            alt="Image Description">
                                                        <span class="offline"></span>
                                                        </a>
                                                    </div>
                                                    <div class="w-full">
                                                        <div class="flex items-center justify-between">
                                                        <p class="text-slate-700 font-semibold text-sm dark:text-white">
                                                            Joan Powell 😊
                                                        </p>
                                                        <p class="text-gray-500 font-normal text-xs dark:text-white/70">2day ago</p>
                                                        </div>
                                                        <div class="flex items-center justify-between">
                                                        <p class="text-xs text-gray-500 dark:text-white/70 chat-msg-text">
                                                            <i class="ti ti-checks text-green-500 text-sm ltr:mr-1 rtl:ml-1"></i>Stet erat diam
                                                            lorem ut ea
                                                            ut ut at. At dolor dolore.
                                                        </p>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </li>
                                                </ul>
                                            </div>
                                            <div id="messages-style-2" class="hidden" role="tabpanel" aria-labelledby="messages-2">
                                                <ul class="flex flex-col divide-y divide-gray-200 dark:divide-white/10">
                                                <li class="ti-list-group border-0 text-gray-800 dark:text-white">
                                                    <div class="fw-bold">A</div>
                                                </li>
                                                <li class="ti-list-group border-0 text-gray-800 dark:text-white relative checkforactive">
                                                    <a aria-label="anchor" class="before:absolute before:inset-0 before:z-1" href="javascript:void(0);"
                                                    onclick="changeTheInfo(this,'Anna Sthesia','2','online')"></a>
                                                    <div class="flex items-center space-x-3 rtl:space-x-reverse w-full">
                                                    <div class="flex">
                                                        <img class="avatar avatar-xs rounded-full" src="<?php echo e(asset('build/assets/img/users/2.jpg')); ?>"
                                                        alt="Image Description">
                                                    </div>
                                                    <div class="flex items-center justify-between w-full">
                                                        <div class="items-center">
                                                        <p class="text-slate-700 font-semibold text-sm dark:text-white">
                                                            Anna Sthesia
                                                        </p>
                                                        <p class="text-xs text-gray-500 dark:text-white/70 chat-msg-text">
                                                            +123(45)-678-90.
                                                        </p>
                                                        </div>
                                                        <div class="my-auto space-x-3 rtl:space-x-reverse inline-flex">
                                                        <i class="text-base text-primary ti ti-message-circle-2"></i>
                                                        <i class="text-base text-secondary ti ti-phone-call"></i>
                                                        <i class="text-base text-danger ti ti-video"></i>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group border-0 text-gray-800 dark:text-white relative checkforactive">
                                                    <a aria-label="anchor" class="before:absolute before:inset-0 before:z-1" href="javascript:void(0);"
                                                    onclick="changeTheInfo(this,'Abraham Clark','20','online')"></a>
                                                    <div class="flex items-center space-x-3 rtl:space-x-reverse w-full">
                                                    <div class="flex">
                                                        <img class="avatar avatar-xs rounded-full" src="<?php echo e(asset('build/assets/img/users/20.jpg')); ?>"
                                                        alt="Image Description">
                                                    </div>
                                                    <div class="flex items-center justify-between w-full">
                                                        <div class="items-center">
                                                        <p class="text-slate-700 font-semibold text-sm dark:text-white">
                                                            Abraham Clark
                                                        </p>
                                                        <p class="text-xs text-gray-500 dark:text-white/70 chat-msg-text">
                                                            +123(45)-158-90.
                                                        </p>
                                                        </div>
                                                        <div class="my-auto space-x-3 rtl:space-x-reverse inline-flex">
                                                        <i class="text-base text-primary ti ti-message-circle-2"></i>
                                                        <i class="text-base text-secondary ti ti-phone-call"></i>
                                                        <i class="text-base text-danger ti ti-video"></i>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group border-0 text-gray-800 dark:text-white relative checkforactive">
                                                    <a aria-label="anchor" class="before:absolute before:inset-0 before:z-1" href="javascript:void(0);"
                                                    onclick="changeTheInfo(this,'Anderson','3','offline')"></a>
                                                    <div class="flex items-center space-x-3 rtl:space-x-reverse w-full">
                                                    <div class="flex">
                                                        <img class="avatar avatar-xs rounded-full" src="<?php echo e(asset('build/assets/img/users/3.jpg')); ?>"
                                                        alt="Image Description">
                                                    </div>
                                                    <div class="flex items-center justify-between w-full">
                                                        <div class="items-center">
                                                        <p class="text-slate-700 font-semibold text-sm dark:text-white">
                                                            Anderson
                                                        </p>
                                                        <p class="text-xs text-gray-500 dark:text-white/70 chat-msg-text">
                                                            +123(45)-258-80.
                                                        </p>
                                                        </div>
                                                        <div class="my-auto space-x-3 rtl:space-x-reverse inline-flex">
                                                        <i class="text-base text-primary ti ti-message-circle-2"></i>
                                                        <i class="text-base text-secondary ti ti-phone-call"></i>
                                                        <i class="text-base text-danger ti ti-video"></i>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group border-0 text-gray-800 dark:text-white relative checkforactive">
                                                    <a aria-label="anchor" class="before:absolute before:inset-0 before:z-1" href="javascript:void(0);"
                                                    onclick="changeTheInfo(this,' Andern Vanhron','4','offline')"></a>
                                                    <div class="flex items-center space-x-3 rtl:space-x-reverse w-full">
                                                    <div class="flex">
                                                        <img class="avatar avatar-xs rounded-full" src="<?php echo e(asset('build/assets/img/users/4.jpg')); ?>"
                                                        alt="Image Description">
                                                    </div>
                                                    <div class="flex items-center justify-between w-full">
                                                        <div class="items-center">
                                                        <p class="text-slate-700 font-semibold text-sm dark:text-white">
                                                            Andern Vanhron
                                                        </p>
                                                        <p class="text-xs text-gray-500 dark:text-white/70 chat-msg-text">
                                                            +123(45)-258-80.
                                                        </p>
                                                        </div>
                                                        <div class="my-auto space-x-3 rtl:space-x-reverse inline-flex">
                                                        <i class="text-base text-primary ti ti-message-circle-2"></i>
                                                        <i class="text-base text-secondary ti ti-phone-call"></i>
                                                        <i class="text-base text-danger ti ti-video"></i>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group border-0 text-gray-800 dark:text-white relative checkforactive">
                                                    <a aria-label="anchor" class="before:absolute before:inset-0 before:z-1" href="javascript:void(0);"
                                                    onclick="changeTheInfo(this,'Albert silver','16','offline')"></a>
                                                    <div class="flex items-center space-x-3 rtl:space-x-reverse w-full">
                                                    <div class="flex">
                                                        <img class="avatar avatar-xs rounded-full" src="<?php echo e(asset('build/assets/img/users/16.jpg')); ?>"
                                                        alt="Image Description">
                                                    </div>
                                                    <div class="flex items-center justify-between w-full">
                                                        <div class="items-center">
                                                        <p class="text-slate-700 font-semibold text-sm dark:text-white">
                                                            Albert silver
                                                        </p>
                                                        <p class="text-xs text-gray-500 dark:text-white/70 chat-msg-text">
                                                            +123(45)-258-80.
                                                        </p>
                                                        </div>
                                                        <div class="my-auto space-x-3 rtl:space-x-reverse inline-flex">
                                                        <i class="text-base text-primary ti ti-message-circle-2"></i>
                                                        <i class="text-base text-secondary ti ti-phone-call"></i>
                                                        <i class="text-base text-danger ti ti-video"></i>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group border-0 text-gray-800 dark:text-white">
                                                    <div class="fw-bold">B</div>
                                                </li>
                                                <li class="ti-list-group border-0 text-gray-800 dark:text-white relative checkforactive">
                                                    <a aria-label="anchor" class="before:absolute before:inset-0 before:z-1" href="javascript:void(0);"
                                                    onclick="changeTheInfo(this,' Bernadette','5','online')"></a>
                                                    <div class="flex items-center space-x-3 rtl:space-x-reverse w-full">
                                                    <div class="flex">
                                                        <img class="avatar avatar-xs rounded-full" src="<?php echo e(asset('build/assets/img/users/5.jpg')); ?>"
                                                        alt="Image Description">
                                                    </div>
                                                    <div class="flex items-center justify-between w-full">
                                                        <div class="items-center">
                                                        <p class="text-slate-700 font-semibold text-sm dark:text-white">
                                                            Bernadette
                                                        </p>
                                                        <p class="text-xs text-gray-500 dark:text-white/70 chat-msg-text">
                                                            +123(45)-678-90.
                                                        </p>
                                                        </div>
                                                        <div class="my-auto space-x-3 rtl:space-x-reverse inline-flex">
                                                        <i class="text-base text-primary ti ti-message-circle-2"></i>
                                                        <i class="text-base text-secondary ti ti-phone-call"></i>
                                                        <i class="text-base text-danger ti ti-video"></i>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group border-0 text-gray-800 dark:text-white relative checkforactive">
                                                    <a aria-label="anchor" class="before:absolute before:inset-0 before:z-1" href="javascript:void(0);"
                                                    onclick="changeTheInfo(this,'Brenden Wagner','18','offline')"></a>
                                                    <div class="flex items-center space-x-3 rtl:space-x-reverse w-full">
                                                    <div class="flex">
                                                        <img class="avatar avatar-xs rounded-full" src="<?php echo e(asset('build/assets/img/users/18.jpg')); ?>"
                                                        alt="Image Description">
                                                    </div>
                                                    <div class="flex items-center justify-between w-full">
                                                        <div class="items-center">
                                                        <p class="text-slate-700 font-semibold text-sm dark:text-white">
                                                            Brenden Wagner
                                                        </p>
                                                        <p class="text-xs text-gray-500 dark:text-white/70 chat-msg-text">
                                                            +123(45)-158-90.
                                                        </p>
                                                        </div>
                                                        <div class="my-auto space-x-3 rtl:space-x-reverse inline-flex">
                                                        <i class="text-base text-primary ti ti-message-circle-2"></i>
                                                        <i class="text-base text-secondary ti ti-phone-call"></i>
                                                        <i class="text-base text-danger ti ti-video"></i>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group border-0 text-gray-800 dark:text-white relative checkforactive">
                                                    <a aria-label="anchor" class="before:absolute before:inset-0 before:z-1" href="javascript:void(0);"
                                                    onclick="changeTheInfo(this,'Bradley Greer','9','online')"></a>
                                                    <div class="flex items-center space-x-3 rtl:space-x-reverse w-full">
                                                    <div class="flex">
                                                        <img class="avatar avatar-xs rounded-full" src="<?php echo e(asset('build/assets/img/users/9.jpg')); ?>"
                                                        alt="Image Description">
                                                    </div>
                                                    <div class="flex items-center justify-between w-full">
                                                        <div class="items-center">
                                                        <p class="text-slate-700 font-semibold text-sm dark:text-white">
                                                            Bradley Greer
                                                        </p>
                                                        <p class="text-xs text-gray-500 dark:text-white/70 chat-msg-text">
                                                            +123(45)-258-80.
                                                        </p>
                                                        </div>
                                                        <div class="my-auto space-x-3 rtl:space-x-reverse inline-flex">
                                                        <i class="text-base text-primary ti ti-message-circle-2"></i>
                                                        <i class="text-base text-secondary ti ti-phone-call"></i>
                                                        <i class="text-base text-danger ti ti-video"></i>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group border-0 text-gray-800 dark:text-white relative checkforactive">
                                                    <a aria-label="anchor" class="before:absolute before:inset-0 before:z-1" href="javascript:void(0);"
                                                    onclick="changeTheInfo(this,'Bruno Nash','10','online')"></a>
                                                    <div class="flex items-center space-x-3 rtl:space-x-reverse w-full">
                                                    <div class="flex">
                                                        <img class="avatar avatar-xs rounded-full" src="<?php echo e(asset('build/assets/img/users/10.jpg')); ?>"
                                                        alt="Image Description">
                                                    </div>
                                                    <div class="flex items-center justify-between w-full">
                                                        <div class="items-center">
                                                        <p class="text-slate-700 font-semibold text-sm dark:text-white">
                                                            Bruno Nash
                                                        </p>
                                                        <p class="text-xs text-gray-500 dark:text-white/70 chat-msg-text">
                                                            +123(45)-258-80.
                                                        </p>
                                                        </div>
                                                        <div class="my-auto space-x-3 rtl:space-x-reverse inline-flex">
                                                        <i class="text-base text-primary ti ti-message-circle-2"></i>
                                                        <i class="text-base text-secondary ti ti-phone-call"></i>
                                                        <i class="text-base text-danger ti ti-video"></i>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group border-0 text-gray-800 dark:text-white">
                                                    <div class="fw-bold">C</div>
                                                </li>
                                                <li class="ti-list-group border-0 text-gray-800 dark:text-white relative checkforactive">
                                                    <a aria-label="anchor" class="before:absolute before:inset-0 before:z-1" href="javascript:void(0);"
                                                    onclick="changeTheInfo(this,'Caesar Vance 🎉','6','online')"></a>
                                                    <div class="flex items-center space-x-3 rtl:space-x-reverse w-full">
                                                    <div class="flex">
                                                        <img class="avatar avatar-xs rounded-full" src="<?php echo e(asset('build/assets/img/users/6.jpg')); ?>"
                                                        alt="Image Description">
                                                    </div>
                                                    <div class="flex items-center justify-between w-full">
                                                        <div class="items-center">
                                                        <p class="text-slate-700 font-semibold text-sm dark:text-white">
                                                            Caesar Vance🎉
                                                        </p>
                                                        <p class="text-xs text-gray-500 dark:text-white/70 chat-msg-text">
                                                            +123(45)-678-90.
                                                        </p>
                                                        </div>
                                                        <div class="my-auto space-x-3 rtl:space-x-reverse inline-flex">
                                                        <i class="text-base text-primary ti ti-message-circle-2"></i>
                                                        <i class="text-base text-secondary ti ti-phone-call"></i>
                                                        <i class="text-base text-danger ti ti-video"></i>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group border-0 text-gray-800 dark:text-white relative checkforactive">
                                                    <a aria-label="anchor" class="before:absolute before:inset-0 before:z-1" href="javascript:void(0);"
                                                    onclick="changeTheInfo(this,'Cara Stevens','8','offline')"></a>
                                                    <div class="flex items-center space-x-3 rtl:space-x-reverse w-full">
                                                    <div class="flex">
                                                        <img class="avatar avatar-xs rounded-full" src="<?php echo e(asset('build/assets/img/users/8.jpg')); ?>"
                                                        alt="Image Description">
                                                    </div>
                                                    <div class="flex items-center justify-between w-full">
                                                        <div class="items-center">
                                                        <p class="text-slate-700 font-semibold text-sm dark:text-white">
                                                            Cara Stevens
                                                        </p>
                                                        <p class="text-xs text-gray-500 dark:text-white/70 chat-msg-text">
                                                            +123(45)-678-90.
                                                        </p>
                                                        </div>
                                                        <div class="my-auto space-x-3 rtl:space-x-reverse inline-flex">
                                                        <i class="text-base text-primary ti ti-message-circle-2"></i>
                                                        <i class="text-base text-secondary ti ti-phone-call"></i>
                                                        <i class="text-base text-danger ti ti-video"></i>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group border-0 text-gray-800 dark:text-white relative checkforactive">
                                                    <a aria-label="anchor" class="before:absolute before:inset-0 before:z-1" href="javascript:void(0);"
                                                    onclick="changeTheInfo(this,' Cedric Kelly','4','online')"></a>
                                                    <div class="flex items-center space-x-3 rtl:space-x-reverse w-full">
                                                    <div class="flex">
                                                        <img class="avatar avatar-xs rounded-full" src="<?php echo e(asset('build/assets/img/users/4.jpg')); ?>"
                                                        alt="Image Description">
                                                    </div>
                                                    <div class="flex items-center justify-between w-full">
                                                        <div class="items-center">
                                                        <p class="text-slate-700 font-semibold text-sm dark:text-white">
                                                            Cedric Kelly
                                                        </p>
                                                        <p class="text-xs text-gray-500 dark:text-white/70 chat-msg-text">
                                                            +123(45)-678-90.
                                                        </p>
                                                        </div>
                                                        <div class="my-auto space-x-3 rtl:space-x-reverse inline-flex">
                                                        <i class="text-base text-primary ti ti-message-circle-2"></i>
                                                        <i class="text-base text-secondary ti ti-phone-call"></i>
                                                        <i class="text-base text-danger ti ti-video"></i>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </li>
                                                </ul>
                                            </div>
                                            <div id="messages-style-3" class="hidden" role="tabpanel" aria-labelledby="messages-3">
                                                <ul class="flex flex-col divide-y divide-gray-200 dark:divide-white/10">
                                                <li class="ti-list-group border-0 text-gray-800 dark:text-white relative checkforactive">
                                                    <a aria-label="anchor" class="before:absolute before:inset-0 before:z-1" href="javascript:void(0);"
                                                    onclick="changeTheInfo(this,'Anna Sthesia 😂','2','online')"></a>
                                                    <div class="flex items-center space-x-3 rtl:space-x-reverse w-full">
                                                    <div class="flex">
                                                        <img class="avatar avatar-xs rounded-full" src="<?php echo e(asset('build/assets/img/users/2.jpg')); ?>"
                                                        alt="Image Description">
                                                    </div>
                                                    <div class="flex items-center justify-between w-full">
                                                        <div class="items-center">
                                                        <p class="text-slate-700 font-semibold text-sm dark:text-white">
                                                            Anna Sthesia😂
                                                        </p>
                                                        <p class="text-xs text-gray-500 dark:text-white/70 chat-msg-text">
                                                            <i class="text-base text-success ti ti-phone-incoming"></i>
                                                            <span class="">oct 18 2022 ,10:50Am</span>
                                                        </p>
                                                        </div>
                                                        <div class="my-auto space-x-3 rtl:space-x-reverse">
                                                        <i class="text-base text-gray-500 dark:text-white/70 ti ti-phone-call"></i>
                                                        <i class="text-base text-gray-500 dark:text-white/70 ti ti-video"></i>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group border-0 text-gray-800 dark:text-white relative checkforactive">
                                                    <a aria-label="anchor" class="before:absolute before:inset-0 before:z-1" href="javascript:void(0);"
                                                    onclick="changeTheInfo(this,'Socrates Itumay 😍','5','online')"></a>
                                                    <div class="flex items-center space-x-3 rtl:space-x-reverse w-full">
                                                    <div class="flex">
                                                        <img class="avatar avatar-xs rounded-full" src="<?php echo e(asset('build/assets/img/users/5.jpg')); ?>"
                                                        alt="Image Description">
                                                    </div>
                                                    <div class="flex items-center justify-between w-full">
                                                        <div class="items-center">
                                                        <p class="text-slate-700 font-semibold text-sm dark:text-white">
                                                            Socrates Itumay😍
                                                        </p>
                                                        <p class="text-xs text-gray-500 dark:text-white/70 chat-msg-text">
                                                            <i class="text-base text-success ti ti-phone-outgoing"></i>
                                                            <span class="">oct 17 2022 ,5:50Pm</span>
                                                        </p>
                                                        </div>
                                                        <div class="my-auto space-x-3 rtl:space-x-reverse">
                                                        <i class="text-base text-gray-500 dark:text-white/70 ti ti-phone-call"></i>
                                                        <i class="text-base text-gray-500 dark:text-white/70 ti ti-video"></i>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group border-0 text-gray-800 dark:text-white relative checkforactive">
                                                    <a aria-label="anchor" class="before:absolute before:inset-0 before:z-1" href="javascript:void(0);"
                                                    onclick="changeTheInfo(this,'Cedric Kelly','20','online')"></a>
                                                    <div class="flex items-center space-x-3 rtl:space-x-reverse w-full">
                                                    <div class="flex">
                                                        <img class="avatar avatar-xs rounded-full" src="<?php echo e(asset('build/assets/img/users/20.jpg')); ?>"
                                                        alt="Image Description">
                                                    </div>
                                                    <div class="flex items-center justify-between w-full">
                                                        <div class="items-center">
                                                        <p class="text-slate-700 font-semibold text-sm dark:text-white">
                                                            Cedric Kelly
                                                        </p>
                                                        <p class="text-xs text-gray-500 dark:text-white/70 chat-msg-text">
                                                            <i class="text-base text-danger ti ti-phone-x"></i>
                                                            <span class="">oct 16 2022 ,03:50Pm</span>
                                                        </p>
                                                        </div>
                                                        <div class="my-auto space-x-3 rtl:space-x-reverse">
                                                        <i class="text-base text-gray-500 dark:text-white/70 ti ti-phone-call"></i>
                                                        <i class="text-base text-gray-500 dark:text-white/70 ti ti-video"></i>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group border-0 text-gray-800 dark:text-white relative checkforactive">
                                                    <a aria-label="anchor" class="before:absolute before:inset-0 before:z-1" href="javascript:void(0);"
                                                    onclick="changeTheInfo(this,' Tiger Nixon','5','offline')"></a>
                                                    <div class="flex items-center space-x-3 rtl:space-x-reverse w-full">
                                                    <div class="flex">
                                                        <img class="avatar avatar-xs rounded-full" src="<?php echo e(asset('build/assets/img/users/5.jpg')); ?>"
                                                        alt="Image Description">
                                                    </div>
                                                    <div class="flex items-center justify-between w-full">
                                                        <div class="items-center">
                                                        <p class="text-slate-700 font-semibold text-sm dark:text-white">
                                                            Tiger Nixon
                                                        </p>
                                                        <p class="text-xs text-gray-500 dark:text-white/70 chat-msg-text">
                                                            <i class="text-base text-danger ti ti-phone-x"></i>
                                                            <span class="">oct 16 2022 ,02:20Pm</span>
                                                        </p>
                                                        </div>
                                                        <div class="my-auto space-x-3 rtl:space-x-reverse">
                                                        <i class="text-base text-gray-500 dark:text-white/70 ti ti-phone-call"></i>
                                                        <i class="text-base text-gray-500 dark:text-white/70 ti ti-video"></i>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group border-0 text-gray-800 dark:text-white relative checkforactive">
                                                    <a aria-label="anchor" class="before:absolute before:inset-0 before:z-1" href="javascript:void(0);"
                                                    onclick="changeTheInfo(this,'Tatyana Fitzpatrick','9','online')"></a>
                                                    <div class="flex items-center space-x-3 rtl:space-x-reverse w-full">
                                                    <div class="flex">
                                                        <img class="avatar avatar-xs rounded-full" src="<?php echo e(asset('build/assets/img/users/9.jpg')); ?>"
                                                        alt="Image Description">
                                                    </div>
                                                    <div class="flex items-center justify-between w-full">
                                                        <div class="items-center">
                                                        <p class="text-slate-700 font-semibold text-sm dark:text-white">
                                                            Tatyana Fitzpatrick
                                                        </p>
                                                        <p class="text-xs text-gray-500 dark:text-white/70 chat-msg-text">
                                                            <i class="text-base text-success ti ti-phone-outgoing"></i>
                                                            <span class="">oct 14 2022 ,5:50Pm</span>
                                                        </p>
                                                        </div>
                                                        <div class="my-auto space-x-3 rtl:space-x-reverse">
                                                        <i class="text-base text-gray-500 dark:text-white/70 ti ti-phone-call"></i>
                                                        <i class="text-base text-gray-500 dark:text-white/70 ti ti-video"></i>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group border-0 text-gray-800 dark:text-white relative checkforactive">
                                                    <a aria-label="anchor" class="before:absolute before:inset-0 before:z-1" href="javascript:void(0);"
                                                    onclick="changeTheInfo(this,'Unity Butler','10','online')"></a>
                                                    <div class="flex items-center space-x-3 rtl:space-x-reverse w-full">
                                                    <div class="flex">
                                                        <img class="avatar avatar-xs rounded-full" src="<?php echo e(asset('build/assets/img/users/10.jpg')); ?>"
                                                        alt="Image Description">
                                                    </div>
                                                    <div class="flex items-center justify-between w-full">
                                                        <div class="items-center">
                                                        <p class="text-slate-700 font-semibold text-sm dark:text-white">
                                                            Unity Butler
                                                        </p>
                                                        <p class="text-xs text-gray-500 dark:text-white/70 chat-msg-text">
                                                            <i class="text-base text-success ti ti-phone-incoming"></i>
                                                            <span class="">oct 14 2022 ,5:50Pm</span>
                                                        </p>
                                                        </div>
                                                        <div class="my-auto space-x-3 rtl:space-x-reverse">
                                                        <i class="text-base text-gray-500 dark:text-white/70 ti ti-phone-call"></i>
                                                        <i class="text-base text-gray-500 dark:text-white/70 ti ti-video"></i>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group border-0 text-gray-800 dark:text-white relative checkforactive">
                                                    <a aria-label="anchor" class="before:absolute before:inset-0 before:z-1" href="javascript:void(0);"
                                                    onclick="changeTheInfo(this,'Thor Walton','11','offline')"></a>
                                                    <div class="flex items-center space-x-3 rtl:space-x-reverse w-full">
                                                    <div class="flex">
                                                        <img class="avatar avatar-xs rounded-full" src="<?php echo e(asset('build/assets/img/users/11.jpg')); ?>"
                                                        alt="Image Description">
                                                    </div>
                                                    <div class="flex items-center justify-between w-full">
                                                        <div class="items-center">
                                                        <p class="text-slate-700 font-semibold text-sm dark:text-white">
                                                            Thor Walton
                                                        </p>
                                                        <p class="text-xs text-gray-500 dark:text-white/70 chat-msg-text">
                                                            <i class="text-base text-success ti ti-phone-incoming"></i>
                                                            <span class="">oct 13 2022 ,5:50Pm</span>
                                                        </p>
                                                        </div>
                                                        <div class="my-auto space-x-3 rtl:space-x-reverse">
                                                        <i class="text-base text-gray-500 dark:text-white/70 ti ti-phone-call"></i>
                                                        <i class="text-base text-gray-500 dark:text-white/70 ti ti-video"></i>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group border-0 text-gray-800 dark:text-white relative checkforactive">
                                                    <a aria-label="anchor" class="before:absolute before:inset-0 before:z-1" href="javascript:void(0);"
                                                    onclick="changeTheInfo(this,'Abraham Clark','6','offline')"></a>
                                                    <div class="flex items-center space-x-3 rtl:space-x-reverse w-full">
                                                    <div class="flex">
                                                        <img class="avatar avatar-xs rounded-full" src="<?php echo e(asset('build/assets/img/users/6.jpg')); ?>"
                                                        alt="Image Description">
                                                    </div>
                                                    <div class="flex items-center justify-between w-full">
                                                        <div class="items-center">
                                                        <p class="text-slate-700 font-semibold text-sm dark:text-white">
                                                            Abraham Clark
                                                        </p>
                                                        <p class="text-xs text-gray-500 dark:text-white/70 chat-msg-text">
                                                            <i class="text-base text-danger ti ti-phone-x"></i>
                                                            <span class="">oct 12 2022 ,03:50Pm</span>
                                                        </p>
                                                        </div>
                                                        <div class="my-auto space-x-3 rtl:space-x-reverse">
                                                        <i class="text-base text-gray-500 dark:text-white/70 ti ti-phone-call"></i>
                                                        <i class="text-base text-gray-500 dark:text-white/70 ti ti-video"></i>
                                                        </div>
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
                                </div>
                                <div class="main-chat-area">
                                    <div class="box">
                                    <div class="box-header bg-transparent">
                                        <div class="sm:flex justify-between">
                                        <div class="flex items-center space-x-4 rtl:space-x-reverse">
                                            <div class="flex">
                                            <a class="relative inline-block" href="javascript:void(0);">
                                                <img class="avatar avatar-sm rounded-full chatimageperson" src="<?php echo e(asset('build/assets/img/users/2.jpg')); ?>"
                                                alt="Image Description">
                                                <span class="chatstatusperson online"></span>
                                            </a>
                                            </div>
                                            <div>
                                            <p class="text-base">
                                                <a href="javascript:void(0);" class="chatnameperson responsive-userinfo-open">Airi Satou</a>
                                            </p>
                                            <p class="text-xs text-gray-500 dark:text-white/70 chatpersonstatus">
                                                online
                                            </p>
                                            </div>
                                        </div>
                                        <div class="flex my-auto main-chat-right-icons mt-5 sm:mt-auto">
                                            <div class="flex justify-center items-center rounded-sm relative">
                                            <div class="cursor-pointer search-chat-icon sm:absolute sm:ltr:right-0 sm:rtl:left-0 ti-btn ti-btn-outline rounded-full p-2 border-gray-200 text-gray-500 dark:text-white/70  focus:ring-gray-200   dark:border-white/10  dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                                            >
                                            <input type="search" class="search-chat-input focus-visible:outline-0 border-0 focus:border-0 focus:shadow-none focus:ring-0 bg-transparent py-0 leading-[0]" placeholder="Search">
                                            <i class="text-base leading-none ti ti-search"></i>
                                            </div>
                                            </div>
                                            <a aria-label="anchor" class="ti-btn ti-btn-outline rounded-full p-2 border-gray-200 text-gray-500 dark:text-white/70 hover:text-gray-700 hover:bg-gray-100 hover:border-gray-200 focus:ring-gray-200  dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                                            href="javascript:void(0);"><i class="text-base leading-none ti ti-phone-call"></i></a>
                                            <a aria-label="anchor" class="ti-btn ti-btn-outline rounded-full p-2 border-gray-200 text-gray-500 dark:text-white/70 hover:text-gray-700 hover:bg-gray-100 hover:border-gray-200 focus:ring-gray-200  dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                                            href="javascript:void(0);"><i class="text-base leading-none ti ti-video"></i></a>
                                            <a aria-label="anchor" class="ti-btn ti-btn-outline rounded-full p-2 border-gray-200 text-gray-500 dark:text-white/70 hover:text-gray-700 hover:bg-gray-100 hover:border-gray-200 focus:ring-gray-200  dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                                            href="javascript:void(0);"><i class="text-base leading-none ti ti-user-plus"></i></a>
                                            <a aria-label="anchor" class="ti-btn ti-btn-outline rounded-full p-2 border-gray-200 text-gray-500 dark:text-white/70 hover:text-gray-700 hover:bg-gray-100 hover:border-gray-200 focus:ring-gray-200  dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10 responsive-userinfo-open"
                                            href="javascript:void(0);"><i class="text-base leading-none ti ti-user-circle"
                                                id="responsive-chat-close"></i></a>
                                            <div class="hs-dropdown ti-dropdown block ltr:mr-1 rtl:ml-1 my-auto">
                                            <button aria-label="button" id="hs-dropdown-custom-icon-trigger" type="button"
                                                class="hs-dropdown-toggle ti-dropdown-toggle rounded-full p-2 !border border-gray-200 text-gray-500 dark:text-white/70 hover:text-gray-700 hover:bg-gray-100 hover:border-gray-200 focus:ring-gray-200  dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                                                <i class="text-base leading-none ti ti-dots-vertical"></i> </button>
                                            <div class="hs-dropdown-menu ti-dropdown-menu" aria-labelledby="hs-dropdown-custom-icon-trigger">
                                                <a class="ti-dropdown-item" href="javascript:void(0)"><i
                                                    class="ri ri-edit-2-line ltr:mr-1 rtl:ml-1"></i>Edit</a>
                                                <a class="ti-dropdown-item" href="javascript:void(0)"><i
                                                    class="ri ri-share-forward-line ltr:mr-1 rtl:ml-1"></i>Share</a>
                                                <a class="ti-dropdown-item" href="javascript:void(0)"><i
                                                    class="ri ri-delete-bin-5-line ltr:mr-1 rtl:ml-1"></i>Delete</a>
                                            </div>
                                            </div>
                                            <a aria-label="anchor" class="responsive-chat-close ti-btn ti-btn-outline rounded-full p-2 border-gray-200 text-gray-400 dark:text-white/70 hover:text-white hover:bg-gray-500 hover:border-gray-200 focus:ring-gray-200  dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                                            href="javascript:void(0);"><i class="text-base leading-none ti ti-x"></i></a>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="main-chat-content2 chat-content">
                                        <div class="absolute top-0 inset-x-0">
                                        <div id="chatlist">
                                            <div class="box-body p-8">
                                            <div class="chat-lable">
                                                <span class="badge bg-gray-100 dark:bg-black/20 text-gray-800 dark:text-white">Yesterday</span>
                                            </div>
                                            <div class="chat-left">
                                                <div>
                                                <img src="<?php echo e(asset('build/assets/img/users/2.jpg')); ?>" class="chatimageperson avatar rounded-full"
                                                    alt="Image Description">
                                                </div>
                                                <div class="flex flex-col items-start space-y-2">
                                                <div class="chat-inner-msg space-y-1">
                                                    <span
                                                    class="p-2 rounded-sm inline-block border border-gray-200 bg-primary/20 text-primary dark:text-white dark:border-white/10">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor
                                                    </span>
                                                    <div>
                                                    <p class="text-start text-xs text-gray-500 dark:text-white/70">
                                                        08:10 AM
                                                    </p>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="chat-right">
                                                <div class="flex flex-col items-end space-y-2">
                                                <div class="chat-inner-msg">
                                                    <span
                                                    class="p-2 rounded-sm inline-block  border border-gray-200 bg-primary text-white dark:border-white/10">
                                                    Nulla consequat massa quis enim. Donec pede justo, fringilla vel... </span>
                                                </div>
                                                <div class="chat-inner-msg space-y-1">
                                                    <span
                                                    class="p-2 rounded-sm inline-block  border border-gray-200 bg-primary text-white dark:border-white/10">
                                                    rhoncus ut, imperdiet a, venenatis vitae, justo... </span>

                                                </div>
                                                <p class="text-end text-xs text-gray-500 dark:text-white/70">
                                                    08:35 AM
                                                </p>
                                                </div>
                                                <div>
                                                <img src="<?php echo e(asset('build/assets/img/users/1.jpg')); ?>" class="avatar rounded-full" alt="Image Description">
                                                </div>
                                            </div>
                                            <div class="chat-left">
                                                <div>
                                                <img src="<?php echo e(asset('build/assets/img/users/2.jpg')); ?>" class="chatimageperson avatar rounded-full"
                                                    alt="Image Description">
                                                </div>
                                                <div class="flex flex-col items-start space-y-2">
                                                <div class="chat-inner-msg space-y-1">
                                                    <span
                                                    class="p-2 rounded-sm inline-block border border-gray-200 bg-primary/20 text-primary dark:text-white dark:border-white/10">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor
                                                    </span>
                                                </div>
                                                <div class="chat-inner-msg space-y-1">
                                                    <div
                                                    class="p-2 rounded-sm border border-gray-200 bg-primary/20 text-primary dark:border-white/10 flex flex-row items-center dark:text-white">
                                                    <a aria-label="anchor" href="javascript:void(0)" class="ti-btn p-0"><i class="ri ri-play-circle-line"></i></a>
                                                    <span class="mx-2 flex">
                                                        <svg width="20" height="20">
                                                        <defs></defs>
                                                        <g transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg"
                                                            data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20">
                                                            <path
                                                                d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z"
                                                                fill="rgba(255, 255, 255, 0.5)" class="fill-primary dark:fill-white"></path>
                                                            </svg></g>
                                                        </svg>
                                                        <svg class="chat_audio" width="20" height="20">
                                                        <defs></defs>
                                                        <g transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg"
                                                            data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20">
                                                            <path
                                                                d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z"
                                                                fill="rgba(255, 255, 255, 0.5)" class="fill-primary dark:fill-white"></path>
                                                            </svg></g>
                                                        </svg>
                                                        <svg class="chat_audio" width="20" height="20">
                                                        <defs></defs>
                                                        <g transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg"
                                                            data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20">
                                                            <path
                                                                d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z"
                                                                fill="rgba(255, 255, 255, 0.5)" class="fill-primary dark:fill-white"></path>
                                                            </svg></g>
                                                        </svg>
                                                        <svg class="chat_audio" width="20" height="20">
                                                        <defs></defs>
                                                        <g transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg"
                                                            data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20">
                                                            <path
                                                                d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z"
                                                                fill="rgba(255, 255, 255, 0.5)" class="fill-primary dark:fill-white"></path>
                                                            </svg></g>
                                                        </svg>
                                                        <svg class="chat_audio" width="20" height="20">
                                                        <defs></defs>
                                                        <g transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg"
                                                            data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20">
                                                            <path
                                                                d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z"
                                                                fill="rgba(255, 255, 255, 0.5)" class="fill-primary dark:fill-white"></path>
                                                            </svg></g>
                                                        </svg>
                                                        <svg class="chat_audio" width="20" height="20">
                                                        <defs></defs>
                                                        <g transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg"
                                                            data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20">
                                                            <path
                                                                d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z"
                                                                fill="rgba(255, 255, 255, 0.5)" class="fill-primary dark:fill-white"></path>
                                                            </svg></g>
                                                        </svg>
                                                        <svg class="chat_audio" width="20" height="20">
                                                        <defs></defs>
                                                        <g transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg"
                                                            data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20">
                                                            <path
                                                                d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z"
                                                                fill="rgba(255, 255, 255, 0.5)" class="fill-primary dark:fill-white"></path>
                                                            </svg></g>
                                                        </svg>
                                                        <svg class="chat_audio" width="20" height="20">
                                                        <defs></defs>
                                                        <g transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg"
                                                            data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20">
                                                            <path
                                                                d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z"
                                                                fill="rgba(255, 255, 255, 0.5)" class="fill-primary dark:fill-white"></path>
                                                            </svg></g>
                                                        </svg>
                                                        <svg class="chat_audio" width="20" height="20">
                                                        <defs></defs>
                                                        <g transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg"
                                                            data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20">
                                                            <path
                                                                d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z"
                                                                fill="rgba(255, 255, 255, 0.5)" class="fill-primary dark:fill-white"></path>
                                                            </svg></g>
                                                        </svg>
                                                        <svg class="chat_audio" width="20" height="20">
                                                        <defs></defs>
                                                        <g transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg"
                                                            data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20">
                                                            <path
                                                                d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z"
                                                                fill="rgba(255, 255, 255, 0.5)" class="fill-primary dark:fill-white"></path>
                                                            </svg></g>
                                                        </svg>
                                                    </span>
                                                    <a aria-label="anchor" href="javascript:void(0)" class="ti-btn p-0"><i class="ri ri-download-2-line"></i></a>
                                                    </div>
                                                    <p class="text-start text-xs text-gray-500 dark:text-white/70">
                                                    08:50 AM
                                                    </p>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="chat-right">
                                                <div class="flex flex-col items-end space-y-2">
                                                <div class="chat-inner-msg">
                                                    <span
                                                    class="p-2 rounded-sm inline-block  border border-gray-200 bg-primary text-white dark:border-white/10">
                                                    Nulla consequat massa quis enim. Donec pede justo, fringilla vel... </span>
                                                </div>
                                                <div class="chat-inner-msg flex space-y-1 space-x-3 rtl:space-x-reverse">
                                                    <img src="<?php echo e(asset('build/assets/img/gallery/3.jpg')); ?>" class="w-1/4 rounded-sm ltr:ml-auto rtl:mr-auto"
                                                    alt="Image Description">
                                                    <img src="<?php echo e(asset('build/assets/img/gallery/1.jpg')); ?>" class="w-1/4 rounded-sm ltr:ml-auto rtl:mr-auto"
                                                    alt="Image Description">
                                                    <img src="<?php echo e(asset('build/assets/img/gallery/4.jpg')); ?>" class="w-1/4 rounded-sm ltr:ml-auto rtl:mr-auto"
                                                    alt="Image Description">
                                                </div>
                                                <p class="text-end text-xs text-gray-500 dark:text-white/70">
                                                    10:35 AM
                                                </p>
                                                </div>
                                                <div>
                                                <img src="<?php echo e(asset('build/assets/img/users/1.jpg')); ?>" class="avatar rounded-full" alt="Image Description">
                                                </div>
                                            </div>
                                            <div class="chat-lable">
                                                <span class="badge bg-gray-100 dark:bg-black/20 text-gray-800 dark:text-white">Today</span>
                                            </div>
                                            <div class="chat-right">
                                                <div class="flex flex-col items-end space-y-2">
                                                <div class="chat-inner-msg">
                                                    <span
                                                    class="p-2 rounded-sm inline-block  border border-gray-200 bg-primary text-white dark:border-white/10">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor
                                                    </span>
                                                    <p class="text-end text-xs text-gray-500 dark:text-white/70">
                                                    08:50 AM
                                                    </p>
                                                </div>
                                                <div class="chat-inner-msg">
                                                    <span
                                                    class="p-2 rounded-sm inline-block  border border-gray-200 bg-primary text-white dark:border-white/10">
                                                    Nulla consequat massa quis enim. Donec pede justo, fringilla vel... </span>
                                                </div>
                                                <div class="chat-inner-msg space-y-1">
                                                    <div
                                                    class="p-2 rounded-sm border border-gray-200 bg-primary/20 text-primary dark:border-white/10 flex flex-row items-center dark:text-white">
                                                    <a aria-label="anchor" href="javascript:void(0)" class="ti-btn p-0"><i class="ri ri-play-circle-line"></i></a>
                                                    <span class="mx-2 flex">
                                                        <svg width="20" height="20">
                                                        <defs></defs>
                                                        <g transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg"
                                                            data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20">
                                                            <path
                                                                d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z"
                                                                fill="rgba(255, 255, 255, 0.5)" class="fill-primary dark:fill-white"></path>
                                                            </svg></g>
                                                        </svg>
                                                        <svg class="chat_audio" width="20" height="20">
                                                        <defs></defs>
                                                        <g transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg"
                                                            data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20">
                                                            <path
                                                                d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z"
                                                                fill="rgba(255, 255, 255, 0.5)" class="fill-primary dark:fill-white"></path>
                                                            </svg></g>
                                                        </svg>
                                                        <svg class="chat_audio" width="20" height="20">
                                                        <defs></defs>
                                                        <g transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg"
                                                            data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20">
                                                            <path
                                                                d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z"
                                                                fill="rgba(255, 255, 255, 0.5)" class="fill-primary dark:fill-white"></path>
                                                            </svg></g>
                                                        </svg>
                                                        <svg class="chat_audio" width="20" height="20">
                                                        <defs></defs>
                                                        <g transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg"
                                                            data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20">
                                                            <path
                                                                d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z"
                                                                fill="rgba(255, 255, 255, 0.5)" class="fill-primary dark:fill-white"></path>
                                                            </svg></g>
                                                        </svg>
                                                        <svg class="chat_audio" width="20" height="20">
                                                        <defs></defs>
                                                        <g transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg"
                                                            data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20">
                                                            <path
                                                                d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z"
                                                                fill="rgba(255, 255, 255, 0.5)" class="fill-primary dark:fill-white"></path>
                                                            </svg></g>
                                                        </svg>
                                                        <svg class="chat_audio" width="20" height="20">
                                                        <defs></defs>
                                                        <g transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg"
                                                            data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20">
                                                            <path
                                                                d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z"
                                                                fill="rgba(255, 255, 255, 0.5)" class="fill-primary dark:fill-white"></path>
                                                            </svg></g>
                                                        </svg>
                                                        <svg class="chat_audio" width="20" height="20">
                                                        <defs></defs>
                                                        <g transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg"
                                                            data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20">
                                                            <path
                                                                d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z"
                                                                fill="rgba(255, 255, 255, 0.5)" class="fill-primary dark:fill-white"></path>
                                                            </svg></g>
                                                        </svg>
                                                        <svg class="chat_audio" width="20" height="20">
                                                        <defs></defs>
                                                        <g transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg"
                                                            data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20">
                                                            <path
                                                                d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z"
                                                                fill="rgba(255, 255, 255, 0.5)" class="fill-primary dark:fill-white"></path>
                                                            </svg></g>
                                                        </svg>
                                                        <svg class="chat_audio" width="20" height="20">
                                                        <defs></defs>
                                                        <g transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg"
                                                            data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20">
                                                            <path
                                                                d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z"
                                                                fill="rgba(255, 255, 255, 0.5)" class="fill-primary dark:fill-white"></path>
                                                            </svg></g>
                                                        </svg>
                                                        <svg class="chat_audio" width="20" height="20">
                                                        <defs></defs>
                                                        <g transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg"
                                                            data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20">
                                                            <path
                                                                d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z"
                                                                fill="rgba(255, 255, 255, 0.5)" class="fill-primary dark:fill-white"></path>
                                                            </svg></g>
                                                        </svg>
                                                    </span>
                                                    <a aria-label="anchor" href="javascript:void(0)" class="ti-btn p-0"><i class="ri ri-download-2-line"></i></a>
                                                    </div>
                                                </div>
                                                <p class="text-end text-xs text-gray-500 dark:text-white/70">
                                                    10:35 AM
                                                </p>
                                                </div>
                                                <div>
                                                <img src="<?php echo e(asset('build/assets/img/users/1.jpg')); ?>" class="avatar rounded-full" alt="Image Description">
                                                </div>
                                            </div>
                                            <div class="chat-left">
                                                <div>
                                                <img src="<?php echo e(asset('build/assets/img/users/2.jpg')); ?>" class="chatimageperson avatar rounded-full"
                                                    alt="Image Description">
                                                </div>
                                                <div class="flex flex-col items-start space-y-2">
                                                <div class="chat-inner-msg space-y-1">
                                                    <span
                                                    class="p-2 rounded-sm inline-block border border-gray-200 bg-primary/20 text-primary dark:text-white dark:border-white/10">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor
                                                    </span>
                                                    <p class="text-start text-xs text-gray-500 dark:text-white/70">
                                                    1:10 PM
                                                    </p>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="chat-left">
                                                <div>
                                                <img src="<?php echo e(asset('build/assets/img/users/2.jpg')); ?>" class="chatimageperson avatar rounded-full"
                                                    alt="Image Description">
                                                </div>
                                                <div class="flex flex-col items-start space-y-2">
                                                <div class="chat-inner-msg space-y-1">
                                                    <span
                                                    class="p-2 rounded-sm inline-block border border-gray-200 bg-primary/20 text-primary dark:text-white dark:border-white/10">
                                                    <i class="text-base text-danger ti ti-phone-x"></i> Missed Call </span>
                                                    <p class="text-start text-xs text-gray-500 dark:text-white/70">
                                                    3:10 PM
                                                    </p>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <div class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <div class="hidden sm:flex">
                                            <a aria-label="anchor" class="ti-btn px-2 py-1 text-gray-500 bg-gray-100 focus:ring-gray-500 dark:text-white/70 dark:bg-dark dark:hover:bg-black/20 dark:hover:text-gray-300 dark:focus:ring-offset-white/10"
                                            href="javascript:void(0);"><i class="text-xl ti ti-paperclip"></i></a>
                                            <a aria-label="anchor" class="ti-btn px-2 py-1 text-gray-500 bg-gray-100 focus:ring-gray-500 dark:text-white/70 dark:bg-dark dark:hover:bg-black/20 dark:hover:text-gray-300 dark:focus:ring-offset-white/10"
                                            href="javascript:void(0);"><i class="text-xl ti ti-mood-smile"></i></a>
                                        </div>
                                        <div class="relative w-full">
                                            <input type="text" name="hs-table-search1" id="hs-table-search1" class="p-3 ti-form-input"
                                            placeholder="Type Your Text Here.................">
                                        </div>
                                        <div class="flex">
                                            <a aria-label="anchor" class="hidden sm:block ti-btn px-2 py-1 text-gray-500 bg-gray-100 focus:ring-gray-500 dark:bg-dark dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300 dark:focus:ring-offset-white/10"
                                            href="javascript:void(0);"><i class="text-xl ti ti-microphone"></i></a>
                                            <a aria-label="anchor" class="ti-btn px-2 py-1 ti-btn-primary" href="javascript:void(0);"><i
                                                class="text-xl ti ti-send"></i></a>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="chat-user-details" id="chat-user-details">
                                    <div class="box">
                                    <a aria-label="anchor" href="javascript:void(0);"
                                        class="user-close z-40 absolute top-2 ltr:right-2 rtl:left-2 block lg:hidden bg-white dark:bg-black/20 p-2 leading-none rounded-full text-gray-500 dark:text-white text-base"><i
                                        class="ti ti-x"></i></a>
                                    <div class="main-chat-content3">
                                        <div class="chat-profile" id="profile-list">
                                        <div class="box-body">
                                            <div class="space-y-4">
                                            <div class="text-center space-y-2">
                                                <div class="flex justify-center">
                                                <a class="relative inline-block" href="javascript:void(0);">
                                                    <img class="w-24 h-24 rounded-full chatimageperson" src="<?php echo e(asset('build/assets/img/users/2.jpg')); ?>"
                                                    alt="Image Description">
                                                    <span class="chatstatusperson bottom-2 ltr:right-2 rtl:left-2 online"></span>
                                                </a>
                                                </div>
                                                <div>
                                                <a href="javascript:void(0);">
                                                    <h5 class="text-slate-700 font-semibold text-base dark:text-white chatnameperson">Airi Satou
                                                    </h5>
                                                </a>
                                                <p class="text-xs text-gray-500 dark:text-white/70 mb-1">UI/UX Designer</p>
                                                <p class="text-xs text-gray-500 dark:text-white/70">+123(45)-158-90.</p>
                                                </div>
                                            </div>
                                            <div class="flex sm:space-x-3 justify-center text-center rtl:space-x-reverse">
                                                <div class="block">
                                                <button aria-label="button" type="button"
                                                    class="ti-btn ti-btn-outline p-2 border-gray-200 text-gray-500 dark:text-white/70 hover:text-white hover:bg-gray-500 hover:border-gray-200 focus:ring-gray-200  dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                                                    <i class="ti ti-message-dots text-lg leading-none"></i>
                                                </button>
                                                </div>
                                                <div class="block">
                                                <button aria-label="button" type="button"
                                                    class="ti-btn ti-btn-outline p-2 border-gray-200 text-gray-500 dark:text-white/70 hover:text-white hover:bg-gray-500 hover:border-gray-200 focus:ring-gray-200  dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                                                    <i class="ti ti-phone text-lg leading-none"></i>
                                                </button>
                                                </div>
                                                <div class="block">
                                                <button aria-label="button" type="button"
                                                    class="ti-btn ti-btn-outline p-2 border-gray-200 text-gray-500 dark:text-white/70 hover:text-white hover:bg-gray-500 hover:border-gray-200 focus:ring-gray-200  dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                                                    <i class="ti ti-video text-lg leading-none"></i>
                                                </button>
                                                </div>
                                                <div class="block">
                                                <button aria-label="button" type="button"
                                                    class="ti-btn ti-btn-outline p-2 border-gray-200 text-gray-500 dark:text-white/70 hover:text-white hover:bg-gray-500 hover:border-gray-200 focus:ring-gray-200  dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                                                    <i class="ti ti-search text-lg leading-none"></i>
                                                </button>
                                                </div>
                                                <div class="block hs-dropdown ti-dropdown">
                                                <button aria-label="button" id="chat-options" type="button"
                                                    class="hs-dropdown-toggle ti-dropdown-toggle ti-btn ti-btn-outline p-2 border-gray-200 text-gray-500 dark:text-white/70 hover:text-white hover:bg-gray-500 hover:border-gray-200 focus:ring-gray-200  dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                                                    <i class="ti ti-dots text-lg leading-none"></i>
                                                </button>
                                                <div class="hs-dropdown-menu ti-dropdown-menu" aria-labelledby="chat-options">
                                                    <a class="ti-dropdown-item" href="javascript:void(0)"><i
                                                        class="ri ri-edit-2-line ltr:mr-1 rtl:ml-1"></i>Edit</a>
                                                    <a class="ti-dropdown-item" href="javascript:void(0)"><i
                                                        class="ri ri-share-forward-line ltr:mr-1 rtl:ml-1"></i>
                                                    Share</a>
                                                    <a class="ti-dropdown-item" href="javascript:void(0)"><i
                                                        class="ri ri-delete-bin-5-line ltr:mr-1 rtl:ml-1"></i>
                                                    Delete</a>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="border p-3 rounded-sm border-gray-200 dark:border-white/10">
                                                <h1 class="font-semibold">About Me</h1>
                                                <p class="mt-2 text-gray-500 dark:text-white/70 text-sm">Lorem ipsum dolor sit amet,
                                                consectetuer adipiscing elit.
                                                Aenean commodo ligula eget dolor. </p>
                                            </div>
                                            <div class="border p-3 rounded-sm border-gray-200 dark:border-white/10 space-y-3">
                                                <div class="">
                                                <nav class="sm:flex sm:space-x-4 rtl:space-x-reverse" aria-label="Tabs" role="tablist">
                                                    <button type="button"
                                                    class="hs-tab-active:border-primary hs-tab-active:text-primary border-b-[3px] border-transparent py-2 px-1 inline-flex items-center sm:gap-2 text-sm font-medium text-center whitespace-nowrap text-gray-500 dark:text-white/70 hover:text-primary  active"
                                                    id="chat-gallery-item-1" data-hs-tab="#chat-gallery-1" aria-controls="chat-gallery-1"
                                                    role="tab">
                                                    <i class="ti ti-photo text-lg leading-none"></i> Media
                                                    </button>
                                                    <button type="button"
                                                    class="hs-tab-active:border-primary hs-tab-active:text-primary border-b-[3px] border-transparent py-2 px-1 inline-flex items-center sm:gap-2 text-sm font-medium text-center whitespace-nowrap text-gray-500 dark:text-white/70 hover:text-primary"
                                                    id="chat-gallery-item-2" data-hs-tab="#chat-gallery-2" aria-controls="chat-gallery-2"
                                                    role="tab">
                                                    <i class="ti ti-files text-lg leading-none"></i> Docs
                                                    </button>
                                                    <button type="button"
                                                    class="hs-tab-active:border-primary hs-tab-active:text-primary border-b-[3px] border-transparent py-2 px-1 inline-flex items-center sm:gap-2 text-sm font-medium text-center whitespace-nowrap text-gray-500 dark:text-white/70 hover:text-primary"
                                                    id="chat-gallery-item-3" data-hs-tab="#chat-gallery-3" aria-controls="chat-gallery-3"
                                                    role="tab">
                                                    <i class="ti ti-info-circle text-lg leading-none"></i> Info
                                                    </button>
                                                </nav>
                                                </div>
                                                <div class="border p-3 rounded-sm border-gray-200 dark:border-white/10">
                                                <div id="chat-gallery-1" role="tabpanel" aria-labelledby="chat-gallery-item-1">
                                                    <div class="grid grid-cols-3 gap-6">
                                                    <a href="javascript:void(0);" class="inner">
                                                        <img class="w-full object-cover rounded-sm" src="<?php echo e(asset('build/assets/img/gallery/1.jpg')); ?>"
                                                        alt="Image Description">
                                                        <div class="image-overlay justify-center !items-center">
                                                        <p class="image-caption"><i class="ti ti-cloud-download"></i></p>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0);" class="inner">
                                                        <img class="w-full object-cover rounded-sm" src="<?php echo e(asset('build/assets/img/gallery/2.jpg')); ?>"
                                                        alt="Image Description">
                                                        <div class="image-overlay justify-center !items-center">
                                                        <p class="image-caption"><i class="ti ti-cloud-download"></i></p>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0);" class="inner">
                                                        <img class="w-full object-cover rounded-sm" src="<?php echo e(asset('build/assets/img/gallery/4.jpg')); ?>"
                                                        alt="Image Description">
                                                        <div class="image-overlay justify-center !items-center">
                                                        <p class="image-caption"><i class="ti ti-cloud-download"></i></p>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0);" class="inner">
                                                        <img class="w-full object-cover rounded-sm" src="<?php echo e(asset('build/assets/img/gallery/9.jpg')); ?>"
                                                        alt="Image Description">
                                                        <div class="image-overlay justify-center !items-center">
                                                        <p class="image-caption"><i class="ti ti-cloud-download"></i></p>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0);" class="inner">
                                                        <img class="w-full object-cover rounded-sm" src="<?php echo e(asset('build/assets/img/gallery/8.jpg')); ?>"
                                                        alt="Image Description">
                                                        <div class="image-overlay justify-center !items-center">
                                                        <p class="image-caption"><i class="ti ti-cloud-download"></i></p>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0);" class="inner">
                                                        <img class="w-full object-cover rounded-sm" src="<?php echo e(asset('build/assets/img/gallery/7.jpg')); ?>"
                                                        alt="Image Description">
                                                        <div class="image-overlay justify-center !items-center">
                                                        <p class="image-caption"><i class="ti ti-cloud-download"></i></p>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0);" class="inner">
                                                        <img class="w-full object-cover rounded-sm" src="<?php echo e(asset('build/assets/img/gallery/5.jpg')); ?>"
                                                        alt="Image Description">
                                                        <div class="image-overlay justify-center !items-center">
                                                        <p class="image-caption"><i class="ti ti-cloud-download"></i></p>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0);" class="inner">
                                                        <img class="w-full object-cover rounded-sm" src="<?php echo e(asset('build/assets/img/gallery/6.jpg')); ?>"
                                                        alt="Image Description">
                                                        <div class="image-overlay justify-center !items-center">
                                                        <p class="image-caption"><i class="ti ti-cloud-download"></i></p>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0);" class="inner">
                                                        <img class="w-full object-cover rounded-sm" src="<?php echo e(asset('build/assets/img/gallery/1.jpg')); ?>"
                                                        alt="Image Description">
                                                        <div class="image-overlay justify-center !items-center">
                                                        <p class="image-caption"><i class="ti ti-cloud-download"></i></p>
                                                        </div>
                                                    </a>
                                                    </div>
                                                </div>
                                                <div id="chat-gallery-2" class="hidden" role="tabpanel" aria-labelledby="chat-gallery-item-2">
                                                    <ul class="flex flex-col space-y-4">
                                                    <li
                                                        class="flex flex-col gap-x-3.5 bg-white text-gray-800 dark:bg-bgdark dark:text-white py-1 rounded-sm">
                                                        <div class="flex items-center justify-between">
                                                        <div class="flex items-center space-x-3 rtl:space-x-reverse">
                                                            <div class="">
                                                            <span class="font-medium">
                                                                <i
                                                                class="ri ri-smartphone-line text-secondary text-base p-2 bg-secondary/20 rounded-sm"></i>
                                                            </span>
                                                            </div>
                                                            <div class="ltr:ml-3 rtl:mr-3">
                                                            <h3 class="text-sm font-semibold">
                                                                My-Document.pdf
                                                            </h3>
                                                            <p class="text-xs text-gray-500 dark:text-white/70">20MB</p>
                                                            </div>
                                                        </div>
                                                        <div class="space-x-2">
                                                            <a aria-label="anchor" href="javascript:void(0);"><span><i
                                                                class="ti ti-cloud-download text-gray-500 dark:text-white/70 text-lg"></i></span></a>
                                                            <div class="hs-dropdown ti-dropdown">
                                                            <button aria-label="button" type="button"
                                                                class="hs-dropdown-toggle p-0 ti-dropdown-toggle border-0 shadow-none focus:ring-0 focus:ring-transparent focus:shadow-none">
                                                                <i class="text-lg text-gray-500 dark:text-white/70 ti ti-dots-vertical"></i>
                                                            </button>
                                                            <div class="hs-dropdown-menu ti-dropdown-menu">
                                                                <a class="ti-dropdown-item" href="javascript:void(0)"><i
                                                                    class="ri ri-edit-2-line ltr:mr-1 rtl:ml-1"></i>Edit</a>
                                                                <a class="ti-dropdown-item" href="javascript:void(0)"><i
                                                                    class="ri ri-share-forward-line ltr:mr-1 rtl:ml-1"></i> Share</a>
                                                                <a class="ti-dropdown-item" href="javascript:void(0)"><i
                                                                    class="ri ri-delete-bin-5-line ltr:mr-1 rtl:ml-1"></i> Delete</a>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </li>
                                                    <li
                                                        class="flex flex-col gap-x-3.5 bg-white text-gray-800 dark:bg-bgdark dark:text-white py-1 rounded-sm">
                                                        <div class="flex items-center justify-between">
                                                        <div class="flex items-center space-x-3 rtl:space-x-reverse">
                                                            <div class="">
                                                            <span class="font-medium">
                                                                <i
                                                                class="ri ri-vidicon-line text-primary text-base p-2 bg-primary/20 rounded-sm"></i>
                                                            </span>
                                                            </div>
                                                            <div class="ltr:ml-3 rtl:mr-3">
                                                            <h3 class="text-sm font-semibold">
                                                                project.mp4
                                                            </h3>
                                                            <p class="text-xs text-gray-500 dark:text-white/70">20MB</p>
                                                            </div>
                                                        </div>
                                                        <div class="space-x-2">
                                                            <a  aria-label="anchor" href="javascript:void(0);"><span><i
                                                                class="ti ti-cloud-download text-gray-500 dark:text-white/70 text-lg"></i></span></a>
                                                            <div class="hs-dropdown ti-dropdown">
                                                            <button aria-label="button" type="button"
                                                                class="hs-dropdown-toggle p-0 ti-dropdown-toggle border-0 shadow-none focus:ring-0 focus:ring-transparent focus:shadow-none">
                                                                <i class="text-lg text-gray-500 dark:text-white/70 ti ti-dots-vertical"></i>
                                                            </button>
                                                            <div class="hs-dropdown-menu ti-dropdown-menu">
                                                                <a class="ti-dropdown-item" href="javascript:void(0)"><i
                                                                    class="ri ri-edit-2-line ltr:mr-1 rtl:ml-1"></i>Edit</a>
                                                                <a class="ti-dropdown-item" href="javascript:void(0)"><i
                                                                    class="ri ri-share-forward-line ltr:mr-1 rtl:ml-1"></i> Share</a>
                                                                <a class="ti-dropdown-item" href="javascript:void(0)"><i
                                                                    class="ri ri-delete-bin-5-line ltr:mr-1 rtl:ml-1"></i> Delete</a>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </li>
                                                    <li
                                                        class="flex flex-col gap-x-3.5 bg-white text-gray-800 dark:bg-bgdark dark:text-white py-1 rounded-sm">
                                                        <div class="flex items-center justify-between">
                                                        <div class="flex items-center space-x-3 rtl:space-x-reverse">
                                                            <div class="">
                                                            <span class="font-medium">
                                                                <i
                                                                class="ri ri-music-2-line text-base text-danger p-3 bg-danger/20 rounded-sm"></i>
                                                            </span>
                                                            </div>
                                                            <div class="ltr:ml-3 rtl:mr-3">
                                                            <h3 class="text-sm font-semibold">
                                                                songs.mp3
                                                            </h3>
                                                            <p class="text-xs text-gray-500 dark:text-white/70">20MB</p>
                                                            </div>
                                                        </div>
                                                        <div class="space-x-2">
                                                            <a aria-label="anchor" href="javascript:void(0);"><span><i
                                                                class="ti ti-cloud-download text-gray-500 dark:text-white/70 text-lg"></i></span></a>
                                                            <div class="hs-dropdown ti-dropdown">
                                                            <button aria-label="button" type="button"
                                                                class="hs-dropdown-toggle p-0 ti-dropdown-toggle border-0 shadow-none focus:ring-0 focus:ring-transparent focus:shadow-none">
                                                                <i class="text-lg text-gray-500 dark:text-white/70 ti ti-dots-vertical"></i>
                                                            </button>
                                                            <div class="hs-dropdown-menu ti-dropdown-menu">
                                                                <a class="ti-dropdown-item" href="javascript:void(0)"><i
                                                                    class="ri ri-edit-2-line ltr:mr-1 rtl:ml-1"></i>Edit</a>
                                                                <a class="ti-dropdown-item" href="javascript:void(0)"><i
                                                                    class="ri ri-share-forward-line ltr:mr-1 rtl:ml-1"></i> Share</a>
                                                                <a class="ti-dropdown-item" href="javascript:void(0)"><i
                                                                    class="ri ri-delete-bin-5-line ltr:mr-1 rtl:ml-1"></i> Delete</a>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </li>
                                                    <li
                                                        class="flex flex-col gap-x-3.5 bg-white text-gray-800 dark:bg-bgdark dark:text-white py-1 rounded-sm">
                                                        <div class="flex items-center justify-between">
                                                        <div class="flex items-center space-x-3 rtl:space-x-reverse">
                                                            <div class="">
                                                            <span class="font-medium">
                                                                <i
                                                                class="ri ri-file-line text-base text-warning p-3 bg-warning/20 rounded-sm"></i>
                                                            </span>
                                                            </div>
                                                            <div class="ltr:ml-3 rtl:mr-3">
                                                            <h3 class="text-sm font-semibold">
                                                                Document.txt
                                                            </h3>
                                                            <p class="text-xs text-gray-500 dark:text-white/70">20MB</p>
                                                            </div>
                                                        </div>
                                                        <div class="space-x-2">
                                                            <a aria-label="anchor" href="javascript:void(0);"><span><i
                                                                class="ti ti-cloud-download text-gray-500 dark:text-white/70 text-lg"></i></span></a>
                                                            <div class="hs-dropdown ti-dropdown">
                                                            <button aria-label="button" type="button"
                                                                class="hs-dropdown-toggle p-0 ti-dropdown-toggle border-0 shadow-none focus:ring-0 focus:ring-transparent focus:shadow-none">
                                                                <i class="text-lg text-gray-500 dark:text-white/70 ti ti-dots-vertical"></i>
                                                            </button>
                                                            <div class="hs-dropdown-menu ti-dropdown-menu">
                                                                <a class="ti-dropdown-item" href="javascript:void(0)"><i
                                                                    class="ri ri-edit-2-line ltr:mr-1 rtl:ml-1"></i>Edit</a>
                                                                <a class="ti-dropdown-item" href="javascript:void(0)"><i
                                                                    class="ri ri-share-forward-line ltr:mr-1 rtl:ml-1"></i> Share</a>
                                                                <a class="ti-dropdown-item" href="javascript:void(0)"><i
                                                                    class="ri ri-delete-bin-5-line ltr:mr-1 rtl:ml-1"></i> Delete</a>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </li>
                                                    </ul>
                                                </div>
                                                <div id="chat-gallery-3" class="hidden" role="tabpanel" aria-labelledby="chat-gallery-item-3">
                                                    <div class="space-y-3">
                                                    <div class="flex p-1 space-x-2 rtl:space-x-reverse">
                                                        <div class="flex-shrink-0 my-auto">
                                                        <span
                                                            class="inline-flex items-center justify-center h-[2.375rem] w-[2.375rem] rounded-full bg-danger/20">
                                                            <span class="font-medium text-danger leading-none">
                                                            <i class="ti ti-mail"></i>
                                                            </span>
                                                        </span>
                                                        </div>
                                                        <div class="">
                                                        <h3 class="font-bold">Email</h3>
                                                        <p class="text-gray-500 dark:text-white/70 text-sm">Airisatou@youremail.com</p>
                                                        </div>
                                                    </div>
                                                    <div class="flex p-1 space-x-2 rtl:space-x-reverse">
                                                        <div class="flex-shrink-0 my-auto">
                                                        <span
                                                            class="inline-flex items-center justify-center h-[2.375rem] w-[2.375rem] rounded-full bg-warning/20">
                                                            <span class="font-medium text-warning leading-none">
                                                            <i class="ti ti-phone"></i>
                                                            </span>
                                                        </span>
                                                        </div>
                                                        <div class="">
                                                        <h3 class="font-bold">Phone</h3>
                                                        <p class="text-gray-500 dark:text-white/70 text-sm">+123(45)-158-90.</p>
                                                        </div>
                                                    </div>
                                                    <div class="flex p-1 space-x-2 rtl:space-x-reverse">
                                                        <div class="flex-shrink-0 my-auto">
                                                        <span
                                                            class="inline-flex items-center justify-center h-[2.375rem] w-[2.375rem] rounded-full bg-success/20">
                                                            <span class="font-medium text-success leading-none">
                                                            <i class="ti ti-map-pin"></i>
                                                            </span>
                                                        </span>
                                                        </div>
                                                        <div class="">
                                                        <h3 class="font-bold">Address</h3>
                                                        <p class="text-gray-500 dark:text-white/70 text-sm">2nd street,houston texas,united
                                                            states.</p>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button type="button" class="w-full ti-btn ti-btn-primary">
                                                <i class="ti ti-report"></i>Report
                                                </button>
                                                <button type="button"
                                                class="w-full ti-btn font-medium border-gray-200 bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10">
                                                <i class="ti ti-ban"></i>Block
                                                </button>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-1 -->

                        </div>
                        <!-- Start::main-content -->

                    </div>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

        <!-- SWIPER JS -->
        <script src="<?php echo e(asset('build/assets/libs/swiper/swiper-bundle.min.js')); ?>"></script>

        <!-- CHAT JS -->
        <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/chat.js'); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\laravel\vite\synto\synto\resources\views/pages/chat.blade.php ENDPATH**/ ?>