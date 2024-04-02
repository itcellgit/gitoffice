<?php $__env->startSection('styles'); ?>

        <!-- DRAGULA CSS -->
        <link id="style" href="<?php echo e(asset('build/assets/libs/dragula/dragula.min.css')); ?>" rel="stylesheet">

        <!-- CHOICES CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('build/assets/libs/choices.js/public/assets/styles/choices.min.css')); ?>">

        <!-- FLAT PICKER CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('build/assets/libs/flatpickr/flatpickr.min.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

                    <div class="content">

                        <!-- Start::main-content -->
                        <div class="main-content">

                            <!-- Page Header -->
                            <div class="block justify-between page-header sm:flex">
                                <div>
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Tasks</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                        <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Pages
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                        </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        Tasks
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="box">
                            <div class="box-body">
                                <div class="grid grid-cols-12 gap-6">
                                <div class="col-span-12 lg:col-span-4">
                                    <div class="sm:flex sm:space-x-3 sm:space-y-0 space-y-2 task-left rtl:space-x-reverse">
                                    <a href="javascript:void(0);" class="hs-dropdown-toggle py-2 px-3 ti-btn ti-btn-primary m-0 whitespace-nowrap"
                                        data-hs-overlay="#task-compose">
                                        <i class="ri ri-edit-line"></i> Add New Task
                                    </a>
                                    <div class="relative sm:max-w-xs max-w-[210px]">
                                        <label for="hs-table-search" class="sr-only">Search</label>
                                        <div class="absolute inset-y-0 ltr:right-0 rtl:left-0 flex items-center pointer-events-none ltr:pr-4 rtl:pl-4">
                                        <i class="ti ti-search"></i>
                                        </div>
                                        <input type="text" name="hs-table-search" id="hs-table-search" class="p-2 ltr:pr-10 rtl:pl-10 ti-form-input"
                                        placeholder="Search Boards">
                                    </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-8">
                                    <div class="sm:flex sm:space-x-3  sm:space-y-0 space-y-2 justify-end task-right rtl:space-x-reverse">
                                    <select class="ti-form-select task-choice">
                                        <option value="">Sort By</option>
                                        <option value="1">A To Z</option>
                                        <option value="2">Z To A</option>
                                        <option value="3">Favorites</option>
                                        <option value="4">All</option>
                                    </select>
                                    <select class="ti-form-select task-choice">
                                        <option value="">Status</option>
                                        <option value="1">Pending</option>
                                        <option value="2">Completed</option>
                                        <option value="3">Inprogress</option>
                                        <option value="4">New</option>
                                    </select>
                                    <div class="hs-dropdown ti-dropdown">
                                        <a aria-label="anchor" href="javascript:void(0);"
                                        class="hs-dropdown-toggle ti-dropdown-toggle inline-flex !p-2 flex-shrink-0 justify-center items-center gap-2 w-full rounded-sm border font-medium bg-white text-gray-500 shadow-sm align-middle focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-xs dark:bg-bgdark dark:border-white/10 dark:text-white/70 dark:focus:ring-offset-white/10">
                                        <i class="ri ri-more-2-line text-lg leading-none"></i>
                                        </a>
                                        <div class="hs-dropdown-menu ti-dropdown-menu">
                                        <a class="ti-dropdown-item" href="javascript:void(0);">Select All</a>
                                        <a class="ti-dropdown-item" href="javascript:void(0);">Mark All</a>
                                        <a class="ti-dropdown-item" href="javascript:void(0);">Delete All</a>
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
                            <div class="col-span-12 lg:col-span-6 xxxl:!col-span-3">
                                <div class="box border-t-[5px] border-t-danger dark:border-t-danger">
                                <div class="box-header">
                                    <h5 class="font-semibold text-xl text-danger text-center">New Project <span
                                        class="font-normal text-xs text-gray-500 dark:text-white/70">(03)</span></h5>
                                </div>
                                <div class="box-body overflow-auto">
                                    <div class="gap-4 grid" id="task-left">
                                    <div class="box task-box">
                                        <div class="box-body space-y-4">
                                        <div class="flex">
                                            <div class="flex space-x-3 rtl:space-x-reverse">
                                            <img src="<?php echo e(asset('build/assets/img/logos/4.png')); ?>"
                                                class="p-1 h-full avatar avatar-sm bg-gray-100 dark:bg-black/20 rounded-sm" alt="logo">
                                            <div class="my-auto hidden sm:block">
                                                <h5 class="text-base font-semibold w-44 truncate">Zanex Laravel Project</h5>
                                                <p class="text-gray-500 dark:text-white/70 text-xs my-auto flex space-x-1 rtl:space-x-reverse"><i
                                                    class="ri-calendar-line"></i><span>05-12-2022</span></p>
                                            </div>
                                            </div>
                                            <div class="ltr:ml-auto rtl:mr-auto hs-dropdown ti-dropdown [--placement:left-top]">
                                            <a aria-label="anchor" href="javascript:void(0);"
                                                class="hs-dropdown-toggle ti-dropdown-toggle hover:bg-transparent dark:hover:bg-transparent inline-flex  !p-0 flex-shrink-0 justify-center items-center gap-2 w-full rounded-sm border-0 font-medium text-gray-500 shadow-none align-middle focus:outline-none focus:ring-0 focus:ring-offset-0 transition-all dark:text-white/70">
                                                <i class="ri ri-more-2-line text-lg leading-none"></i>
                                            </a>
                                            <div class="hs-dropdown-menu w-40 min-w-[10rem] mt-0 transition-none ti-dropdown-menu">
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri-eye-line"></i>View</a>
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri-edit-2-line"></i>Edit</a>
                                                <a class="task-remove ti-dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-delete-bin-6-line"></i>Delete</a>
                                            </div>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="mb-2">Justo kasd duo sanctus et elitr et, sed diam clita lorem sed eirmod, clita
                                            labore tempor et
                                            sanctus et ipsum stet, eos.</p>
                                            <div>
                                            <span class="badge bg-gray-100 text-gray-800 dark:bg-black/20 dark:text-gray-200">
                                                Admin
                                                <button aria-label="button" type="button"
                                                class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-gray-500 dark:text-white/70 hover:bg-gray-200 dark:hover:bg-black/20 hover:text-white focus:outline-none focus:bg-gray-200 focus:text-gray-500">
                                                <i class="ri-close-line"></i>
                                                </button>
                                            </span>
                                            <span class="badge bg-gray-100 text-gray-800 dark:bg-black/20 dark:text-gray-200">
                                                Design
                                                <button aria-label="button" type="button"
                                                class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-gray-500 dark:text-white/70 hover:bg-gray-200 dark:hover:bg-black/20 hover:text-white focus:outline-none focus:bg-gray-200 focus:text-gray-500">
                                                <i class="ri-close-line"></i>
                                                </button>
                                            </span>
                                            </div>
                                        </div>
                                        <div class="flex space-x-3 rtl:space-x-reverse">
                                            <div class="ti-main-progress h-2 bg-gray-200 dark:bg-black/20">
                                            <div class="ti-main-progress-bar bg-danger text-[8px] text-white text-center" role="progressbar"
                                                style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <p class="text-gray-500 dark:text-white/70 text-xs my-auto leading-[0]"><span>20%</span></p>
                                        </div>
                                        <div class="sm:flex">
                                            <span class="badge bg-success/10 text-success rounded-sm sm:mb-0">
                                            Low
                                            </span>
                                            <span class="ltr:ml-auto rtl:mr-auto badge bg-primary/10 text-primary rounded-sm sm:mb-0">
                                            Due Date: 25-12-2022
                                            </span>
                                        </div>
                                        </div>
                                        <div class="box-footer">
                                        <div class="sm:flex sm:space-y-0 space-y-2">
                                            <div class="font-medium space-x-1 rtl:space-x-reverse my-auto">
                                            <a href="javascript:void(0);"
                                                class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-1 rtl:space-x-reverse rounded-full bg-gray-100 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex p-3"><i
                                                class="ri-attachment-line"></i><span>2</span></a>
                                            <a href="javascript:void(0);"
                                                class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-1 rtl:space-x-reverse rounded-full bg-gray-100 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex p-3"><i
                                                class="ri-chat-2-line"></i><span>4</span> </a>
                                            <a href="javascript:void(0);"
                                                class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-1 rtl:space-x-reverse rounded-full bg-gray-100 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex p-3"><i
                                                class="ri-eye-line"></i><span>5</span></a>
                                            </div>
                                            <div class="flex -space-x-2 rtl:space-x-reverse ltr:ml-auto rtl:mr-auto">
                                            <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/15.jpg')); ?>"
                                                alt="Image Description">
                                            <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/4.jpg')); ?>"
                                                alt="Image Description">
                                            <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/3.jpg')); ?>"
                                                alt="Image Description">
                                            <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/13.jpg')); ?>"
                                                alt="Image Description">
                                            <span
                                                class="inline-flex items-center justify-center avatar w-6 h-6 rounded-full bg-gray-100 border-2 border-gray-200 dark:bg-black/20 dark:border-white/10">
                                                <span class="font-medium text-gray-500 leading-none dark:text-white/70">4+</span>
                                            </span>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="box task-box">
                                        <div class="box-body space-y-4">
                                        <div class="flex">
                                            <div class="flex space-x-3 rtl:space-x-reverse">
                                            <img src="<?php echo e(asset('build/assets/img/logos/2.png')); ?>"
                                                class="p-1 h-full avatar avatar-sm bg-gray-100 dark:bg-black/20 rounded-sm" alt="logo">
                                            <div class="my-auto hidden sm:block">
                                                <h5 class="text-base font-semibold w-44 truncate">Tailwind Ui Web Application</h5>
                                                <p class="text-gray-500 dark:text-white/70 text-xs my-auto flex space-x-1 rtl:space-x-reverse"><i
                                                    class="ri-calendar-line"></i><span>20-09-2022</span></p>
                                            </div>
                                            </div>
                                            <div class="ltr:ml-auto rtl:mr-auto hs-dropdown ti-dropdown [--placement:left-top]">
                                            <a aria-label="anchor" href="javascript:void(0);"
                                                class="hs-dropdown-toggle ti-dropdown-toggle hover:bg-transparent dark:hover:bg-transparent inline-flex  !p-0 flex-shrink-0 justify-center items-center gap-2 w-full rounded-sm border-0 font-medium text-gray-500 shadow-none align-middle focus:outline-none focus:ring-0 focus:ring-offset-0 transition-all dark:text-white/70">
                                                <i class="ri ri-more-2-line text-lg leading-none"></i>
                                            </a>
                                            <div class="hs-dropdown-menu w-40 min-w-[10rem] mt-0 transition-none ti-dropdown-menu">
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri-eye-line"></i>View</a>
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri-edit-2-line"></i>Edit</a>
                                                <a class="task-remove ti-dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-delete-bin-6-line"></i>Delete</a>
                                            </div>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="mb-2">Justo kasd duo sanctus et elitr et, sed diam clita lorem sed eirmod, clita
                                            labore tempor et
                                            sanctus et ipsum stet, eos.</p>
                                            <div>
                                            <span class="badge bg-gray-100 text-gray-800 dark:bg-black/20 dark:text-gray-200">
                                                Tailwind
                                                <button aria-label="button" type="button"
                                                class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-gray-500 dark:text-white/70 hover:bg-gray-200 hover:text-gray-500 dark:hover:bg-black/20 dark:hover:text-white focus:outline-none focus:bg-gray-200 focus:text-gray-500">
                                                <i class="ri-close-line"></i>
                                                </button>
                                            </span>
                                            <span class="badge bg-gray-100 text-gray-800 dark:bg-black/20 dark:text-gray-200">
                                                Design
                                                <button aria-label="button" type="button"
                                                class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-gray-500 dark:text-white/70 hover:bg-gray-200 hover:text-gray-500 dark:hover:bg-black/20 dark:hover:text-white focus:outline-none focus:bg-gray-200 focus:text-gray-500">
                                                <i class="ri-close-line"></i>
                                                </button>
                                            </span>
                                            </div>
                                        </div>
                                        <div class="flex space-x-3 rtl:space-x-reverse">
                                            <div class="ti-main-progress h-2 bg-gray-200 dark:bg-black/20">
                                            <div class="ti-main-progress-bar bg-danger text-[8px] text-white text-center" role="progressbar"
                                                style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <p class="text-gray-500 dark:text-white/70 text-xs my-auto leading-[0]"><span>30%</span></p>
                                        </div>
                                        <div class="sm:flex">
                                            <span class="badge bg-danger/10 text-danger rounded-sm sm:mb-0">
                                            High
                                            </span>
                                            <span class="ltr:ml-auto rtl:mr-auto badge bg-primary/10 text-primary rounded-sm sm:mb-0">
                                            Due Date: 25-12-2022
                                            </span>
                                        </div>
                                        </div>
                                        <div class="box-footer">
                                        <div class="sm:flex sm:space-y-0 space-y-2">
                                            <div class="font-medium space-x-1 rtl:space-x-reverse my-auto">
                                            <a href="javascript:void(0);"
                                                class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-1 rtl:space-x-reverse rounded-full bg-gray-100 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex p-3"><i
                                                class="ri-attachment-line"></i><span>4</span></a>
                                            <a href="javascript:void(0);"
                                                class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-1 rtl:space-x-reverse rounded-full bg-gray-100 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex p-3"><i
                                                class="ri-chat-2-line"></i><span>3</span> </a>
                                            <a href="javascript:void(0);"
                                                class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-1 rtl:space-x-reverse rounded-full bg-gray-100 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex p-3"><i
                                                class="ri-eye-line"></i><span>2</span></a>
                                            </div>
                                            <div class="flex -space-x-2 rtl:space-x-reverse ltr:ml-auto rtl:mr-auto">
                                            <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/3.jpg')); ?>"
                                                alt="Image Description">
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="box task-box">
                                        <div class="box-body space-y-4">
                                        <div class="flex">
                                            <div class="flex space-x-3 rtl:space-x-reverse">
                                            <img src="<?php echo e(asset('build/assets/img/logos/9.png')); ?>"
                                                class="p-1 h-full avatar avatar-sm bg-gray-100 dark:bg-black/20 rounded-sm" alt="logo">
                                            <div class="my-auto hidden sm:block">
                                                <h5 class="text-base font-semibold w-44 truncate">Spruha Vue Project</h5>
                                                <p class="text-gray-500 dark:text-white/70 text-xs my-auto flex space-x-1 rtl:space-x-reverse"><i
                                                    class="ri-calendar-line"></i><span>28-10-2022</span></p>
                                            </div>
                                            </div>
                                            <div class="ltr:ml-auto rtl:mr-auto hs-dropdown ti-dropdown [--placement:left-top]">
                                            <a aria-label="anchor" href="javascript:void(0);"
                                                class="hs-dropdown-toggle ti-dropdown-toggle hover:bg-transparent dark:hover:bg-transparent inline-flex  !p-0 flex-shrink-0 justify-center items-center gap-2 w-full rounded-sm border-0 font-medium text-gray-500 shadow-none align-middle focus:outline-none focus:ring-0 focus:ring-offset-0 transition-all dark:text-white/70">
                                                <i class="ri ri-more-2-line text-lg leading-none"></i>
                                            </a>
                                            <div class="hs-dropdown-menu w-40 min-w-[10rem] mt-0 transition-none ti-dropdown-menu">
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri-eye-line"></i>View</a>
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri-edit-2-line"></i>Edit</a>
                                                <a class="task-remove ti-dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-delete-bin-6-line"></i>Delete</a>
                                            </div>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="mb-2">Justo kasd duo sanctus et elitr et, sed diam clita lorem sed eirmod, clita
                                            labore tempor et
                                            sanctus et ipsum stet, eos.</p>
                                            <div>
                                            <span class="badge bg-gray-100 text-gray-800 dark:bg-black/20 dark:text-gray-200">
                                                Vue
                                                <button aria-label="button" type="button"
                                                class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-gray-500 dark:text-white/70 hover:bg-gray-200 hover:text-gray-500 dark:hover:bg-black/20 dark:hover:text-white focus:outline-none focus:bg-gray-200 focus:text-gray-500">
                                                <i class="ri-close-line"></i>
                                                </button>
                                            </span>
                                            <span class="badge bg-gray-100 text-gray-800 dark:bg-black/20 dark:text-gray-200">
                                                Developing
                                                <button aria-label="button" type="button"
                                                class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-gray-500 dark:text-white/70 hover:bg-gray-200 hover:text-gray-500 dark:hover:bg-black/20 dark:hover:text-white focus:outline-none focus:bg-gray-200 focus:text-gray-500">
                                                <i class="ri-close-line"></i>
                                                </button>
                                            </span>
                                            </div>
                                        </div>
                                        <div class="flex space-x-3 rtl:space-x-reverse">
                                            <div class="ti-main-progress h-2 bg-gray-200 dark:bg-black/20">
                                            <div class="ti-main-progress-bar bg-danger text-[8px] text-white text-center" role="progressbar"
                                                style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <p class="text-gray-500 dark:text-white/70 text-xs my-auto leading-[0]"><span>10%</span></p>
                                        </div>
                                        <div class="sm:flex">
                                            <span class="badge bg-warning/10 text-warning rounded-sm sm:mb-0">
                                            Medium
                                            </span>
                                            <span class="ltr:ml-auto rtl:mr-auto badge bg-primary/10 text-primary rounded-sm sm:mb-0">
                                            Due Date: 25-12-2022
                                            </span>
                                        </div>
                                        </div>
                                        <div class="box-footer">
                                        <div class="sm:flex sm:space-y-0 space-y-2">
                                            <div class="font-medium space-x-1 rtl:space-x-reverse my-auto">
                                            <a href="javascript:void(0);"
                                                class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-1 rtl:space-x-reverse rounded-full bg-gray-100 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex p-3"><i
                                                class="ri-attachment-line"></i><span>2</span></a>
                                            <a href="javascript:void(0);"
                                                class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-1 rtl:space-x-reverse rounded-full bg-gray-100 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex p-3"><i
                                                class="ri-chat-2-line"></i><span>1</span> </a>
                                            <a href="javascript:void(0);"
                                                class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-1 rtl:space-x-reverse rounded-full bg-gray-100 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex p-3"><i
                                                class="ri-eye-line"></i><span>3</span></a>
                                            </div>
                                            <div class="flex -space-x-2 rtl:space-x-reverse ltr:ml-auto rtl:mr-auto">
                                            <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/15.jpg')); ?>"
                                                alt="Image Description">
                                            <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/3.jpg')); ?>"
                                                alt="Image Description">
                                            <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/19.jpg')); ?>"
                                                alt="Image Description">
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="box-footer flex justify-center">
                                    <a href="javascript:void(0);" data-hs-overlay="#task-compose"
                                    class="w-full p-2 ti-btn ti-btn-soft-primary"><i
                                        class="ri-add-circle-line"></i>Add New Task</a>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-6 xxxl:!col-span-3">
                                <div class="box border-t-[5px] border-t-info dark:border-t-info">
                                <div class="box-header">
                                    <h5 class="font-semibold text-xl text-info text-center">Inprogress <span
                                        class="font-normal text-xs text-gray-500 dark:text-white/70">(04)</span></h5>
                                </div>
                                <div class="box-body overflow-auto">
                                    <div class="gap-4 grid" id="task-left1">
                                    <div class="box task-box">
                                        <div class="box-body space-y-4">
                                        <div class="flex">
                                            <div class="flex space-x-3 rtl:space-x-reverse">
                                            <img src="<?php echo e(asset('build/assets/img/logos/1.png')); ?>"
                                                class="p-1 h-full avatar avatar-sm bg-gray-100 dark:bg-black/20 rounded-sm" alt="logo">
                                            <div class="my-auto hidden sm:block">
                                                <h5 class="text-base font-semibold w-44 truncate">Server side validation</h5>
                                                <p class="text-gray-500 dark:text-white/70 text-xs my-auto flex space-x-1 rtl:space-x-reverse"><i
                                                    class="ri-calendar-line"></i><span>20-10-2022</span></p>
                                            </div>
                                            </div>
                                            <div class="ltr:ml-auto rtl:mr-auto hs-dropdown ti-dropdown [--placement:left-top]">
                                            <a aria-label="anchor" href="javascript:void(0);"
                                                class="hs-dropdown-toggle ti-dropdown-toggle hover:bg-transparent dark:hover:bg-transparent inline-flex  !p-0 flex-shrink-0 justify-center items-center gap-2 w-full rounded-sm border-0 font-medium text-gray-500 shadow-none align-middle focus:outline-none focus:ring-0 focus:ring-offset-0 transition-all dark:text-white/70">
                                                <i class="ri ri-more-2-line text-lg leading-none"></i>
                                            </a>
                                            <div class="hs-dropdown-menu w-40 min-w-[10rem] mt-0 transition-none ti-dropdown-menu">
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri-eye-line"></i>View</a>
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri-edit-2-line"></i>Edit</a>
                                                <a class="task-remove ti-dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-delete-bin-6-line"></i>Delete</a>
                                            </div>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="mb-2">Justo kasd duo sanctus et elitr et, sed diam clita lorem sed eirmod, clita
                                            labore tempor et
                                            sanctus et ipsum stet, eos.</p>
                                            <div>
                                            <span class="badge bg-gray-100 text-gray-800 dark:bg-black/20 dark:text-gray-200">
                                                Angular
                                                <button aria-label="button" type="button"
                                                class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-gray-500 dark:text-white/70 hover:bg-gray-200 hover:text-gray-500 dark:hover:bg-black/20 dark:hover:text-white focus:outline-none focus:bg-gray-200 focus:text-gray-500">
                                                <i class="ri-close-line"></i>
                                                </button>
                                            </span>
                                            <span class="badge bg-gray-100 text-gray-800 dark:bg-black/20 dark:text-gray-200">
                                                Developing
                                                <button aria-label="button" type="button"
                                                class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-gray-500 dark:text-white/70 hover:bg-gray-200 hover:text-gray-500 dark:hover:bg-black/20 dark:hover:text-white focus:outline-none focus:bg-gray-200 focus:text-gray-500">
                                                <i class="ri-close-line"></i>
                                                </button>
                                            </span>
                                            </div>
                                        </div>
                                        <div class="flex space-x-3 rtl:space-x-reverse">
                                            <div class="ti-main-progress h-2 bg-gray-200 dark:bg-black/20">
                                            <div class="ti-main-progress-bar bg-info text-[8px] text-white text-center" role="progressbar"
                                                style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <p class="text-gray-500 dark:text-white/70 text-xs my-auto leading-[0]"><span>40%</span></p>
                                        </div>
                                        <div class="sm:flex space-y-2 sm:space-y-0">
                                            <span class="badge bg-warning/10 text-warning rounded-sm mb-0">
                                            Medium
                                            </span>
                                            <span class="ltr:ml-auto rtl:mr-auto badge bg-primary/10 text-primary rounded-sm mb-0">
                                            Due Date: 25-12-2022
                                            </span>
                                        </div>
                                        </div>
                                        <div class="box-footer">
                                        <div class="sm:flex space-y-2 sm:space-y-0">
                                            <div class="font-medium space-x-1 rtl:space-x-reverse my-auto">
                                            <a href="javascript:void(0);"
                                                class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-1 rtl:space-x-reverse rounded-full bg-gray-100 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex p-3"><i
                                                class="ri-attachment-line"></i><span>2</span></a>
                                            <a href="javascript:void(0);"
                                                class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-1 rtl:space-x-reverse rounded-full bg-gray-100 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex p-3"><i
                                                class="ri-chat-2-line"></i><span>1</span> </a>
                                            <a href="javascript:void(0);"
                                                class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-1 rtl:space-x-reverse rounded-full bg-gray-100 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex p-3"><i
                                                class="ri-eye-line"></i><span>3</span></a>
                                            </div>
                                            <div class="flex -space-x-2 rtl:space-x-reverse ltr:ml-auto rtl:mr-auto">
                                            <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/15.jpg')); ?>"
                                                alt="Image Description">
                                            <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/3.jpg')); ?>"
                                                alt="Image Description">
                                            <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/19.jpg')); ?>"
                                                alt="Image Description">
                                            <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/20.jpg')); ?>"
                                                alt="Image Description">
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="box task-box">
                                        <div class="box-body space-y-4">
                                        <div class="flex">
                                            <div class="flex space-x-3 rtl:space-x-reverse">
                                            <img src="<?php echo e(asset('build/assets/img/logos/3.png')); ?>"
                                                class="p-1 h-full avatar avatar-sm bg-gray-100 dark:bg-black/20 rounded-sm" alt="logo">
                                            <div class="my-auto hidden sm:block">
                                                <h5 class="text-base font-semibold w-44 truncate">Designing Landing Page</h5>
                                                <p class="text-gray-500 dark:text-white/70 text-xs my-auto flex space-x-1 rtl:space-x-reverse"><i
                                                    class="ri-calendar-line"></i><span>20-10-2022</span></p>
                                            </div>
                                            </div>
                                            <div class="ltr:ml-auto rtl:mr-auto hs-dropdown ti-dropdown [--placement:left-top]">
                                            <a aria-label="anchor" href="javascript:void(0);"
                                                class="hs-dropdown-toggle ti-dropdown-toggle hover:bg-transparent dark:hover:bg-transparent inline-flex  !p-0 flex-shrink-0 justify-center items-center gap-2 w-full rounded-sm border-0 font-medium text-gray-500 shadow-none align-middle focus:outline-none focus:ring-0 focus:ring-offset-0 transition-all dark:text-white/70">
                                                <i class="ri ri-more-2-line text-lg leading-none"></i>
                                            </a>
                                            <div class="hs-dropdown-menu w-40 min-w-[10rem] mt-0 transition-none ti-dropdown-menu">
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri-eye-line"></i>View</a>
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri-edit-2-line"></i>Edit</a>
                                                <a class="task-remove ti-dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-delete-bin-6-line"></i>Delete</a>
                                            </div>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="mb-2">Justo kasd duo sanctus et elitr et, sed diam clita lorem sed eirmod, clita
                                            labore tempor et
                                            sanctus et ipsum stet, eos.</p>
                                            <div>
                                            <span class="badge bg-gray-100 text-gray-800 dark:bg-black/20 dark:text-gray-200">
                                                Angular
                                                <button aria-label="button" type="button"
                                                class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-gray-500 dark:text-white/70 hover:bg-gray-200 hover:text-gray-500 dark:hover:bg-black/20 dark:hover:text-white focus:outline-none focus:bg-gray-200 focus:text-gray-500">
                                                <i class="ri-close-line"></i>
                                                </button>
                                            </span>
                                            <span class="badge bg-gray-100 text-gray-800 dark:bg-black/20 dark:text-gray-200">
                                                Developing
                                                <button aria-label="button" type="button"
                                                class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-gray-500 dark:text-white/70 hover:bg-gray-200 hover:text-gray-500 dark:hover:bg-black/20 dark:hover:text-white focus:outline-none focus:bg-gray-200 focus:text-gray-500">
                                                <i class="ri-close-line"></i>
                                                </button>
                                            </span>
                                            </div>
                                        </div>
                                        <div class="flex space-x-3 rtl:space-x-reverse">
                                            <div class="ti-main-progress h-2 bg-gray-200 dark:bg-black/20">
                                            <div class="ti-main-progress-bar bg-info text-[8px] text-white text-center" role="progressbar"
                                                style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <p class="text-gray-500 dark:text-white/70 text-xs my-auto leading-[0]"><span>50%</span></p>
                                        </div>
                                        <div class="sm:flex space-y-2 sm:space-y-0">
                                            <span class="badge bg-success/10 text-success rounded-sm mb-0">
                                            Low
                                            </span>
                                            <span class="ltr:ml-auto rtl:mr-auto badge bg-primary/10 text-primary rounded-sm mb-0">
                                            Due Date: 25-12-2022
                                            </span>
                                        </div>
                                        </div>
                                        <div class="box-footer">
                                        <div class="sm:flex space-y-2 sm:space-y-0">
                                            <div class="font-medium space-x-1 rtl:space-x-reverse my-auto">
                                            <a href="javascript:void(0);"
                                                class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-1 rtl:space-x-reverse rounded-full bg-gray-100 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex p-3"><i
                                                class="ri-attachment-line"></i><span>2</span></a>
                                            <a href="javascript:void(0);"
                                                class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-1 rtl:space-x-reverse rounded-full bg-gray-100 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex p-3"><i
                                                class="ri-chat-2-line"></i><span>1</span> </a>
                                            <a href="javascript:void(0);"
                                                class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-1 rtl:space-x-reverse rounded-full bg-gray-100 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex p-3"><i
                                                class="ri-eye-line"></i><span>3</span></a>
                                            </div>
                                            <div class="flex -space-x-2 rtl:space-x-reverse ltr:ml-auto rtl:mr-auto">
                                            <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/15.jpg')); ?>"
                                                alt="Image Description">
                                            <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/3.jpg')); ?>"
                                                alt="Image Description">
                                            <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/19.jpg')); ?>"
                                                alt="Image Description">
                                            <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/20.jpg')); ?>"
                                                alt="Image Description">
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="box task-box">
                                        <div class="box-body space-y-4">
                                        <div class="flex">
                                            <div class="flex space-x-3 rtl:space-x-reverse">
                                            <img src="<?php echo e(asset('build/assets/img/logos/5.png')); ?>"
                                                class="p-1 h-full avatar avatar-sm bg-gray-100 dark:bg-black/20 rounded-sm" alt="logo">
                                            <div class="my-auto hidden sm:block">
                                                <h5 class="text-base font-semibold w-44 truncate">New Project Blueprint</h5>
                                                <p class="text-gray-500 dark:text-white/70 text-xs my-auto flex space-x-1 rtl:space-x-reverse"><i
                                                    class="ri-calendar-line"></i><span>30-11-2022</span></p>
                                            </div>
                                            </div>
                                            <div class="ltr:ml-auto rtl:mr-auto hs-dropdown ti-dropdown [--placement:left-top]">
                                            <a aria-label="anchor" href="javascript:void(0);"
                                                class="hs-dropdown-toggle ti-dropdown-toggle hover:bg-transparent dark:hover:bg-transparent inline-flex  !p-0 flex-shrink-0 justify-center items-center gap-2 w-full rounded-sm border-0 font-medium text-gray-500 shadow-none align-middle focus:outline-none focus:ring-0 focus:ring-offset-0 transition-all dark:text-white/70">
                                                <i class="ri ri-more-2-line text-lg leading-none"></i>
                                            </a>
                                            <div class="hs-dropdown-menu w-40 min-w-[10rem] mt-0 transition-none ti-dropdown-menu">
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri-eye-line"></i>View</a>
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri-edit-2-line"></i>Edit</a>
                                                <a class="task-remove ti-dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-delete-bin-6-line"></i>Delete</a>
                                            </div>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="mb-2">Justo kasd duo sanctus et elitr et, sed diam clita lorem sed eirmod, clita
                                            labore tempor et
                                            sanctus et ipsum stet, eos.</p>
                                            <div>
                                            <span class="badge bg-gray-100 text-gray-800 dark:bg-black/20 dark:text-gray-200">
                                                Angular
                                                <button aria-label="button" type="button"
                                                class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-gray-500 dark:text-white/70 hover:bg-gray-200 hover:text-gray-500 dark:hover:bg-black/20 dark:hover:text-white focus:outline-none focus:bg-gray-200 focus:text-gray-500">
                                                <i class="ri-close-line"></i>
                                                </button>
                                            </span>
                                            <span class="badge bg-gray-100 text-gray-800 dark:bg-black/20 dark:text-gray-200">
                                                Developing
                                                <button aria-label="button" type="button"
                                                class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-gray-500 dark:text-white/70 hover:bg-gray-200 hover:text-gray-500 dark:hover:bg-black/20 dark:hover:text-white focus:outline-none focus:bg-gray-200 focus:text-gray-500">
                                                <i class="ri-close-line"></i>
                                                </button>
                                            </span>
                                            </div>
                                        </div>
                                        <div class="flex space-x-3 rtl:space-x-reverse">
                                            <div class="ti-main-progress h-2 bg-gray-200 dark:bg-black/20">
                                            <div class="ti-main-progress-bar bg-info text-[8px] text-white text-center" role="progressbar"
                                                style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <p class="text-gray-500 dark:text-white/70 text-xs my-auto leading-[0]"><span>30%</span></p>
                                        </div>
                                        <div class="sm:flex space-y-2 sm:space-y-0">
                                            <span class="badge bg-info/10 text-info rounded-sm mb-0">
                                            Critical
                                            </span>
                                            <span class="ltr:ml-auto rtl:mr-auto badge bg-primary/10 text-primary rounded-sm mb-0">
                                            Due Date: 25-12-2022
                                            </span>
                                        </div>
                                        </div>
                                        <div class="box-footer">
                                        <div class="sm:flex space-y-2 sm:space-y-0">
                                            <div class="font-medium space-x-1 rtl:space-x-reverse my-auto">
                                            <a href="javascript:void(0);"
                                                class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-1 rtl:space-x-reverse rounded-full bg-gray-100 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex p-3"><i
                                                class="ri-attachment-line"></i><span>2</span></a>
                                            <a href="javascript:void(0);"
                                                class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-1 rtl:space-x-reverse rounded-full bg-gray-100 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex p-3"><i
                                                class="ri-chat-2-line"></i><span>1</span> </a>
                                            <a href="javascript:void(0);"
                                                class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-1 rtl:space-x-reverse rounded-full bg-gray-100 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex p-3"><i
                                                class="ri-eye-line"></i><span>3</span></a>
                                            </div>
                                            <div class="flex -space-x-2 rtl:space-x-reverse ltr:ml-auto rtl:mr-auto">
                                            <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/15.jpg')); ?>"
                                                alt="Image Description">
                                            <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/3.jpg')); ?>"
                                                alt="Image Description">
                                            <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/19.jpg')); ?>"
                                                alt="Image Description">
                                            <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/20.jpg')); ?>"
                                                alt="Image Description"><span
                                                class="inline-flex items-center justify-center avatar w-6 h-6 rounded-full bg-gray-100 border-2 border-gray-200 dark:bg-black/20 dark:border-white/10">
                                                <span class="font-medium text-gray-500 leading-none dark:text-white/70">2+</span>
                                            </span>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="box task-box">
                                        <div class="box-body space-y-4">
                                        <div class="flex">
                                            <div class="flex space-x-3 rtl:space-x-reverse">
                                            <img src="<?php echo e(asset('build/assets/img/logos/6.png')); ?>"
                                                class="p-1 h-full avatar avatar-sm bg-gray-100 dark:bg-black/20 rounded-sm" alt="logo">
                                            <div class="my-auto hidden sm:block">
                                                <h5 class="text-base font-semibold w-44 truncate">New Plugin Development</h5>
                                                <p class="text-gray-500 dark:text-white/70 text-xs my-auto flex space-x-1 rtl:space-x-reverse"><i
                                                    class="ri-calendar-line"></i><span>30-11-2022</span></p>
                                            </div>
                                            </div>
                                            <div class="ltr:ml-auto rtl:mr-auto hs-dropdown ti-dropdown [--placement:left-top]">
                                            <a aria-label="anchor" href="javascript:void(0);"
                                                class="hs-dropdown-toggle ti-dropdown-toggle hover:bg-transparent dark:hover:bg-transparent inline-flex  !p-0 flex-shrink-0 justify-center items-center gap-2 w-full rounded-sm border-0 font-medium text-gray-500 shadow-none align-middle focus:outline-none focus:ring-0 focus:ring-offset-0 transition-all dark:text-white/70">
                                                <i class="ri ri-more-2-line text-lg leading-none"></i>
                                            </a>
                                            <div class="hs-dropdown-menu w-40 min-w-[10rem] mt-0 transition-none ti-dropdown-menu">
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri-eye-line"></i>View</a>
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri-edit-2-line"></i>Edit</a>
                                                <a class="task-remove ti-dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-delete-bin-6-line"></i>Delete</a>
                                            </div>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="mb-2">Justo kasd duo sanctus et elitr et, sed diam clita lorem sed eirmod, clita
                                            labore tempor et
                                            sanctus et ipsum stet, eos.</p>
                                            <div>
                                            <span class="badge bg-gray-100 text-gray-800 dark:bg-black/20 dark:text-gray-200">
                                                React
                                                <button aria-label="button" type="button"
                                                class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-gray-500 dark:text-white/70 hover:bg-gray-200 hover:text-gray-500 dark:hover:bg-black/20 dark:hover:text-white focus:outline-none focus:bg-gray-200 focus:text-gray-500">
                                                <i class="ri-close-line"></i>
                                                </button>
                                            </span>
                                            <span class="badge bg-gray-100 text-gray-800 dark:bg-black/20 dark:text-gray-200">
                                                Developing
                                                <button aria-label="button" type="button"
                                                class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-gray-500 dark:text-white/70 hover:bg-gray-200 hover:text-gray-500 dark:hover:bg-black/20 dark:hover:text-white focus:outline-none focus:bg-gray-200 focus:text-gray-500">
                                                <i class="ri-close-line"></i>
                                                </button>
                                            </span>
                                            </div>
                                        </div>
                                        <div class="flex space-x-3 rtl:space-x-reverse">
                                            <div class="ti-main-progress h-2 bg-gray-200 dark:bg-black/20">
                                            <div class="ti-main-progress-bar bg-info text-[8px] text-white text-center" role="progressbar"
                                                style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <p class="text-gray-500 dark:text-white/70 text-xs my-auto leading-[0]"><span>60%</span></p>
                                        </div>
                                        <div class="sm:flex space-y-2 sm:space-y-0">
                                            <span class="badge bg-danger/10 text-danger rounded-sm mb-0">
                                            High
                                            </span>
                                            <span class="ltr:ml-auto rtl:mr-auto badge bg-primary/10 text-primary rounded-sm mb-0">
                                            Due Date: 25-12-2022
                                            </span>
                                        </div>
                                        </div>
                                        <div class="box-footer">
                                        <div class="sm:flex space-y-2 sm:space-y-0">
                                            <div class="font-medium space-x-1 rtl:space-x-reverse my-auto">
                                            <a href="javascript:void(0);"
                                                class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-1 rtl:space-x-reverse rounded-full bg-gray-100 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex p-3"><i
                                                class="ri-attachment-line"></i><span>2</span></a>
                                            <a href="javascript:void(0);"
                                                class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-1 rtl:space-x-reverse rounded-full bg-gray-100 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex p-3"><i
                                                class="ri-chat-2-line"></i><span>1</span> </a>
                                            <a href="javascript:void(0);"
                                                class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-1 rtl:space-x-reverse rounded-full bg-gray-100 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex p-3"><i
                                                class="ri-eye-line"></i><span>3</span></a>
                                            </div>
                                            <div class="flex -space-x-2 rtl:space-x-reverse ltr:ml-auto rtl:mr-auto">
                                            <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/15.jpg')); ?>"
                                                alt="Image Description">
                                            <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/3.jpg')); ?>"
                                                alt="Image Description">
                                            <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/19.jpg')); ?>"
                                                alt="Image Description">
                                            <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/20.jpg')); ?>"
                                                alt="Image Description"><span
                                                class="inline-flex items-center justify-center avatar w-6 h-6 rounded-full bg-gray-100 border-2 border-gray-200 dark:bg-black/20 dark:border-white/10">
                                                <span class="font-medium text-gray-500 leading-none dark:text-white/70">10+</span>
                                            </span>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="box-footer flex justify-center">
                                    <a href="javascript:void(0);" data-hs-overlay="#task-compose"
                                    class="w-full p-2 ti-btn ti-btn-soft-primary"><i
                                        class="ri-add-circle-line"></i>Add New Task</a>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-6 xxxl:!col-span-3">
                                <div class="box border-t-[5px] border-t-warning dark:border-t-warning">
                                <div class="box-header">
                                    <h5 class="font-semibold text-xl text-warning text-center">Pending <span
                                        class="font-normal text-xs text-gray-500 dark:text-white/70">(02)</span></h5>
                                </div>
                                <div class="box-body overflow-auto">
                                    <div class="gap-4 grid" id="task-right">
                                    <div class="box task-box">
                                        <div class="box-body space-y-4">
                                        <div class="flex">
                                            <div class="flex space-x-3 rtl:space-x-reverse">
                                            <img src="<?php echo e(asset('build/assets/img/logos/7.png')); ?>"
                                                class="p-1 h-full avatar avatar-sm bg-gray-100 dark:bg-black/20 rounded-sm" alt="logo">
                                            <div class="my-auto hidden sm:block">
                                                <h5 class="text-base font-semibold w-44 truncate">Designing New Authentication Pages</h5>
                                                <p class="text-gray-500 dark:text-white/70 text-xs my-auto flex space-x-1 rtl:space-x-reverse"><i
                                                    class="ri-calendar-line"></i><span>30-11-2022</span></p>
                                            </div>
                                            </div>
                                            <div class="ml-auto rtl:mr-auto hs-dropdown ti-dropdown [--placement:left-top]">
                                            <a aria-label="anchor" href="javascript:void(0);"
                                                class="hs-dropdown-toggle ti-dropdown-toggle hover:bg-transparent dark:hover:bg-transparent inline-flex  !p-0 flex-shrink-0 justify-center items-center gap-2 w-full rounded-sm border-0 font-medium text-gray-500 shadow-none align-middle focus:outline-none focus:ring-0 focus:ring-offset-0 transition-all dark:text-white/70">
                                                <i class="ri ri-more-2-line text-lg leading-none"></i>
                                            </a>
                                            <div class="hs-dropdown-menu w-40 min-w-[10rem] mt-0 transition-none ti-dropdown-menu">
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri-eye-line"></i>View</a>
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri-edit-2-line"></i>Edit</a>
                                                <a class="task-remove ti-dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-delete-bin-6-line"></i>Delete</a>
                                            </div>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="mb-2">Justo kasd duo sanctus et elitr et, sed diam clita lorem sed eirmod, clita
                                            labore tempor et
                                            sanctus et ipsum stet, eos.</p>
                                            <div>
                                            <span class="badge bg-gray-100 text-gray-800 dark:bg-black/20 dark:text-gray-200">
                                                React
                                                <button aria-label="button" type="button"
                                                class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-gray-500 dark:text-white/70 hover:bg-gray-200 hover:text-gray-500 dark:hover:bg-black/20 dark:hover:text-white focus:outline-none focus:bg-gray-200 focus:text-gray-500">
                                                <i class="ri-close-line"></i>
                                                </button>
                                            </span>
                                            <span class="badge bg-gray-100 text-gray-800 dark:bg-black/20 dark:text-gray-200">
                                                Developing
                                                <button aria-label="button" type="button"
                                                class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-gray-500 dark:text-white/70 hover:bg-gray-200 hover:text-gray-500 dark:hover:bg-black/20 dark:hover:text-white focus:outline-none focus:bg-gray-200 focus:text-gray-500">
                                                <i class="ri-close-line"></i>
                                                </button>
                                            </span>
                                            </div>
                                        </div>
                                        <div class="flex space-x-3 rtl:space-x-reverse">
                                            <div class="ti-main-progress h-2 bg-gray-200 dark:bg-black/20">
                                            <div class="ti-main-progress-bar bg-warning text-[8px] text-white text-center" role="progressbar"
                                                style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <p class="text-gray-500 dark:text-white/70 text-xs my-auto leading-[0]"><span>40%</span></p>
                                        </div>
                                        <div class="sm:flex space-y-2 sm:space-y-0">
                                            <span class="badge bg-danger/10 text-danger rounded-sm mb-0">
                                            High
                                            </span>
                                            <span class=" ltr:ml-auto rtl:mr-auto badge bg-primary/10 text-primary rounded-sm mb-0">
                                            Due Date: 25-12-2022
                                            </span>
                                        </div>
                                        </div>
                                        <div class="box-footer">
                                        <div class="sm:flex space-y-2 sm:space-y-0">
                                            <div class="font-medium space-x-1 rtl:space-x-reverse my-auto">
                                            <a href="javascript:void(0);"
                                                class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-1 rtl:space-x-reverse rounded-full bg-gray-100 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex p-3"><i
                                                class="ri-attachment-line"></i><span>2</span></a>
                                            <a href="javascript:void(0);"
                                                class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-1 rtl:space-x-reverse rounded-full bg-gray-100 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex p-3"><i
                                                class="ri-chat-2-line"></i><span>1</span> </a>
                                            <a href="javascript:void(0);"
                                                class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-1 rtl:space-x-reverse rounded-full bg-gray-100 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex p-3"><i
                                                class="ri-eye-line"></i><span>3</span></a>
                                            </div>
                                            <div class="flex -space-x-2 rtl:space-x-reverse ltr:ml-auto rtl:mr-auto">
                                            <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/15.jpg')); ?>"
                                                alt="Image Description">
                                            <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/3.jpg')); ?>"
                                                alt="Image Description">
                                            <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/19.jpg')); ?>"
                                                alt="Image Description">
                                            <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/20.jpg')); ?>"
                                                alt="Image Description"><span
                                                class="inline-flex items-center justify-center avatar w-6 h-6 rounded-full bg-gray-100 border-2 border-gray-200 dark:bg-black/20 dark:border-white/10">
                                                <span class="font-medium text-gray-500 leading-none dark:text-white/70">15+</span>
                                            </span>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="box task-box">
                                        <div class="box-body space-y-4">
                                        <div class="flex">
                                            <div class="flex space-x-3 rtl:space-x-reverse">
                                            <img src="<?php echo e(asset('build/assets/img/logos/8.png')); ?>"
                                                class="p-1 h-full avatar avatar-sm bg-gray-100 dark:bg-black/20 rounded-sm" alt="logo">
                                            <div class="my-auto hidden sm:block">
                                                <h5 class="text-base font-semibold w-44 truncate">Designing New Authentication Pages</h5>
                                                <p class="text-gray-500 dark:text-white/70 text-xs my-auto flex space-x-1 rtl:space-x-reverse"><i
                                                    class="ri-calendar-line"></i><span>30-11-2022</span></p>
                                            </div>
                                            </div>
                                            <div class="ml-auto rtl:mr-auto hs-dropdown ti-dropdown [--placement:left-top]">
                                            <a aria-label="anchor" href="javascript:void(0);"
                                                class="hs-dropdown-toggle ti-dropdown-toggle hover:bg-transparent dark:hover:bg-transparent inline-flex  !p-0 flex-shrink-0 justify-center items-center gap-2 w-full rounded-sm border-0 font-medium text-gray-500 shadow-none align-middle focus:outline-none focus:ring-0 focus:ring-offset-0 transition-all dark:text-white/70">
                                                <i class="ri ri-more-2-line text-lg leading-none"></i>
                                            </a>
                                            <div class="hs-dropdown-menu w-40 min-w-[10rem] mt-0 transition-none ti-dropdown-menu">
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri-eye-line"></i>View</a>
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri-edit-2-line"></i>Edit</a>
                                                <a class="task-remove ti-dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-delete-bin-6-line"></i>Delete</a>
                                            </div>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="mb-2">Justo kasd duo sanctus et elitr et, sed diam clita lorem sed eirmod, clita
                                            labore tempor et
                                            sanctus et ipsum stet, eos.</p>
                                            <div>
                                            <span class="badge bg-gray-100 text-gray-800 dark:bg-black/20 dark:text-gray-200">
                                                Laravel
                                                <button aria-label="button" type="button"
                                                class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-gray-500 dark:text-white/70 hover:bg-gray-200 hover:text-gray-500 dark:hover:bg-black/20 dark:hover:text-white focus:outline-none focus:bg-gray-200 focus:text-gray-500">
                                                <i class="ri-close-line"></i>
                                                </button>
                                            </span>
                                            <span class="badge bg-gray-100 text-gray-800 dark:bg-black/20 dark:text-gray-200">
                                                Developing
                                                <button aria-label="button" type="button"
                                                class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-gray-500 dark:text-white/70 hover:bg-gray-200 hover:text-gray-500 dark:hover:bg-black/20 dark:hover:text-white focus:outline-none focus:bg-gray-200 focus:text-gray-500">
                                                <i class="ri-close-line"></i>
                                                </button>
                                            </span>
                                            </div>
                                        </div>
                                        <div class="flex space-x-3 rtl:space-x-reverse">
                                            <div class="ti-main-progress h-2 bg-gray-200 dark:bg-black/20">
                                            <div class="ti-main-progress-bar bg-warning text-[8px] text-white text-center" role="progressbar"
                                                style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <p class="text-gray-500 dark:text-white/70 text-xs my-auto leading-[0]"><span>60%</span></p>
                                        </div>
                                        <div class="sm:flex space-y-2 sm:space-y-0">
                                            <span class="badge bg-warning/10 text-warning rounded-sm mb-0">
                                            Medium
                                            </span>
                                            <span class=" ltr:ml-auto rtl:mr-auto badge bg-primary/10 text-primary rounded-sm mb-0">
                                            Due Date: 25-12-2022
                                            </span>
                                        </div>
                                        </div>
                                        <div class="box-footer">
                                        <div class="sm:flex space-y-2 sm:space-y-0">
                                            <div class="font-medium space-x-1 rtl:space-x-reverse my-auto">
                                            <a href="javascript:void(0);"
                                                class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-1 rtl:space-x-reverse rounded-full bg-gray-100 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex p-3"><i
                                                class="ri-attachment-line"></i><span>2</span></a>
                                            <a href="javascript:void(0);"
                                                class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-1 rtl:space-x-reverse rounded-full bg-gray-100 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex p-3"><i
                                                class="ri-chat-2-line"></i><span>1</span> </a>
                                            <a href="javascript:void(0);"
                                                class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-1 rtl:space-x-reverse rounded-full bg-gray-100 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex p-3"><i
                                                class="ri-eye-line"></i><span>3</span></a>
                                            </div>
                                            <div class="flex -space-x-2 rtl:space-x-reverse ltr:ml-auto rtl:mr-auto">
                                            <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/6.jpg')); ?>"
                                                alt="Image Description">
                                            <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/3.jpg')); ?>"
                                                alt="Image Description">
                                            <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/2.jpg')); ?>"
                                                alt="Image Description">
                                            <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/20.jpg')); ?>"
                                                alt="Image Description"><span
                                                class="inline-flex items-center justify-center avatar w-6 h-6 rounded-full bg-gray-100 border-2 border-gray-200 dark:bg-black/20 dark:border-white/10">
                                                <span class="font-medium text-gray-500 leading-none dark:text-white/70">5+</span>
                                            </span>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="box-footer flex justify-center">
                                    <a href="javascript:void(0);" data-hs-overlay="#task-compose"
                                    class="w-full p-2 ti-btn ti-btn-soft-primary"><i
                                        class="ri-add-circle-line"></i>Add New Task</a>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-6 xxxl:!col-span-3">
                                <div class="box border-t-[5px] border-t-success dark:border-t-success">
                                <div class="box-header">
                                    <h5 class="font-semibold text-xl text-success text-center">Completed <span
                                        class="font-normal text-xs text-gray-500 dark:text-white/70">(01)</span></h5>
                                </div>
                                <div class="box-body overflow-auto">
                                    <div class="gap-4 grid" id="task-right1">

                                    <div class="box task-box">
                                        <div class="box-body space-y-4">
                                        <div class="flex">
                                            <div class="flex space-x-3 rtl:space-x-reverse">
                                            <img src="<?php echo e(asset('build/assets/img/logos/10.png')); ?>"
                                                class="p-1 h-full avatar avatar-sm bg-gray-100 dark:bg-black/20 rounded-sm" alt="logo">
                                            <div class="my-auto hidden sm:block">
                                                <h5 class="text-base font-semibold w-44 truncate">Documentation For New Template</h5>
                                                <p class="text-gray-500 dark:text-white/70 text-xs my-auto flex space-x-1 rtl:space-x-reverse"><i
                                                    class="ri-calendar-line"></i><span>15-11-2022</span></p>
                                            </div>
                                            </div>
                                            <div class="ltr:ml-auto rtl:mr-auto hs-dropdown ti-dropdown [--placement:left-top]">
                                            <a aria-label="anchor" href="javascript:void(0);"
                                                class="hs-dropdown-toggle ti-dropdown-toggle hover:bg-transparent dark:hover:bg-transparent inline-flex  !p-0 flex-shrink-0 justify-center items-center gap-2 w-full rounded-sm border-0 font-medium text-gray-500 shadow-none align-middle focus:outline-none focus:ring-0 focus:ring-offset-0 transition-all dark:text-white/70">
                                                <i class="ri ri-more-2-line text-lg leading-none"></i>
                                            </a>
                                            <div class="hs-dropdown-menu w-40 min-w-[10rem] mt-0 transition-none ti-dropdown-menu">
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri-eye-line"></i>View</a>
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri-edit-2-line"></i>Edit</a>
                                                <a class="task-remove ti-dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-delete-bin-6-line"></i>Delete</a>
                                            </div>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil adipisci tempora minus quaerat, rem eum, corporis at, dolor provident id quia similique corrupti sit? Tenetur obcaecati voluptas placeat? Alias, voluptatibus?.</p>
                                            <div>
                                            <span class="badge bg-gray-100 text-gray-800 dark:bg-black/20 dark:text-gray-200">
                                                Html
                                                <button aria-label="button" type="button"
                                                class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-gray-500 dark:text-white/70 hover:bg-gray-200 hover:text-gray-500 dark:hover:bg-black/20 dark:hover:text-white focus:outline-none focus:bg-gray-200 focus:text-gray-500">
                                                <i class="ri-close-line"></i>
                                                </button>
                                            </span>
                                            <span class="badge bg-gray-100 text-gray-800 dark:bg-black/20 dark:text-gray-200">
                                                Developing
                                                <button aria-label="button" type="button"
                                                class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-gray-500 dark:text-white/70 hover:bg-gray-200 hover:text-gray-500 dark:hover:bg-black/20 dark:hover:text-white focus:outline-none focus:bg-gray-200 focus:text-gray-500">
                                                <i class="ri-close-line"></i>
                                                </button>
                                            </span>
                                            </div>
                                        </div>
                                        <div class="flex space-x-3 rtl:space-x-reverse">
                                            <div class="ti-main-progress h-2 bg-gray-200 dark:bg-black/20">
                                            <div class="ti-main-progress-bar bg-success text-[8px] text-white text-center" role="progressbar"
                                                style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <p class="text-gray-500 dark:text-white/70 text-xs my-auto leading-[0]"><span>100%</span></p>
                                        </div>
                                        <div class="sm:flex space-y-2 sm:space-y-0">
                                            <span class="badge bg-danger/10 text-danger rounded-sm mb-0">
                                            High
                                            </span>
                                            <span class="ltr:ml-auto rtl:mr-auto badge bg-primary/10 text-primary rounded-sm mb-0">
                                            Due Date: 25-12-2022
                                            </span>
                                        </div>
                                        </div>
                                        <div class="box-footer">
                                        <div class="sm:flex space-y-2 sm:space-y-0">
                                            <div class="font-medium space-x-1 rtl:space-x-reverse my-auto">
                                            <a href="javascript:void(0);"
                                                class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-1 rtl:space-x-reverse rounded-full bg-gray-100 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex p-3"><i
                                                class="ri-attachment-line"></i><span>2</span></a>
                                            <a href="javascript:void(0);"
                                                class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-1 rtl:space-x-reverse rounded-full bg-gray-100 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex p-3"><i
                                                class="ri-chat-2-line"></i><span>1</span> </a>
                                            <a href="javascript:void(0);"
                                                class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-1 rtl:space-x-reverse rounded-full bg-gray-100 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex p-3"><i
                                                class="ri-eye-line"></i><span>3</span></a>
                                            </div>
                                            <div class="flex -space-x-2 rtl:space-x-reverse ltr:ml-auto rtl:mr-auto">
                                            <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/6.jpg')); ?>"
                                                alt="Image Description">
                                            <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/3.jpg')); ?>"
                                                alt="Image Description">
                                            <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/2.jpg')); ?>"
                                                alt="Image Description">
                                            <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/20.jpg')); ?>"
                                                alt="Image Description"><span
                                                class="inline-flex items-center justify-center avatar w-6 h-6 rounded-full bg-gray-100 border-2 border-gray-200 dark:bg-black/20 dark:border-white/10">
                                                <span class="font-medium text-gray-500 leading-none dark:text-white/70">2+</span>
                                            </span>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="box-footer flex justify-center">
                                    <a href="javascript:void(0);" data-hs-overlay="#task-compose"
                                    class="w-full p-2 ti-btn ti-btn-soft-primary"><i
                                        class="ri-add-circle-line"></i>Add New Task</a>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-2 -->



                        </div>
                        <!-- End::main-content -->

                        <!--Start::Modal-->
                        <div id="task-compose" class="hs-overlay hidden ti-modal">
                            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out">
                                <div class="ti-modal-content">
                                <div class="ti-modal-header">
                                    <h3 class="ti-modal-title">
                                    New Task
                                    </h3>
                                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#task-compose">
                                    <span class="sr-only">Close</span>
                                    <i class="ri-close-line"></i>
                                    </button>
                                </div>
                                <div class="ti-modal-body">
                                    <div class="space-y-3">
                                    <div class="">
                                        <label for="input-label" class="ti-form-label">Task Title</label>
                                        <input type="text" id="input-label" class="ti-form-input" placeholder="Task title">
                                    </div>
                                    <div>
                                        <label class="ti-form-label">Assigned To</label>
                                        <select class="ti-form-select" name="choices-multiple-remove-button"
                                        id="choices-multiple-remove-button" multiple>
                                        <option value="Choice 1" selected>Angelina May</option>
                                        <option value="Choice 2">Kiara advain</option>
                                        <option value="Choice 3">Hercules Jhon</option>
                                        <option value="Choice 4">Mayor Kim</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="input-label" class="ti-form-label">Assigned Date</label>
                                        <div class="flex rounded-sm shadow-sm">
                                        <div
                                            class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                            <span class="text-sm text-gray-500 dark:text-white/70"><i class="ri ri-calendar-line"></i></span>
                                        </div>

                                        <input type="text" class="ti-form-input ltr:rounded-l-none rtl:rounded-r-none focus:z-10 flatpickr-input"
                                            id="addignedDate" placeholder="Choose date and time" readonly>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="input-label" class="ti-form-label">Due Date</label>
                                        <div class="flex rounded-sm shadow-sm">
                                        <div
                                            class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                            <span class="text-sm text-gray-500 dark:text-white/70"><i class="ri ri-calendar-line"></i></span>
                                        </div>

                                        <input type="text" class="ti-form-input ltr:rounded-l-none rtl:rounded-r-none focus:z-10 flatpickr-input"
                                            id="targetDate" placeholder="Choose date and time" readonly>
                                        </div>
                                    </div>
                                    <div>
                                        <label class="ti-form-label">Assigned To</label>
                                        <select class="ti-form-select task-choice" name="choices-single-default">
                                        <option value="">Select</option>
                                        <option value="Critical">Critical</option>
                                        <option value="High">High</option>
                                        <option value="Medium">Medium</option>
                                        <option value="Low">Low</option>
                                        </select>
                                    </div>
                                    </div>
                                </div>
                                <div class="ti-modal-footer">
                                    <button type="button"
                                    class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                    data-hs-overlay="#task-compose">
                                    Close
                                    </button>
                                    <a class="ti-btn ti-btn-primary" href="javascript:void(0);">
                                    Create
                                    </a>
                                </div>
                                </div>
                            </div>
                        </div>
                        <!--End::Modal-->

                    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

        <!-- CHOICES JS -->
        <script src="<?php echo e(asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')); ?>"></script>

        <!-- FLAT PICKER JS -->
        <script src="<?php echo e(asset('build/assets/libs/flatpickr/flatpickr.min.js')); ?>"></script>

        <!-- DRAGULA JS -->
        <script src="<?php echo e(asset('build/assets/libs/dragula/dragula.min.js')); ?>"></script>

        <!-- TASKS JS -->
        <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/tasks.js'); ?>
        

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\laravel\vite\synto\synto\resources\views/pages/tasks.blade.php ENDPATH**/ ?>