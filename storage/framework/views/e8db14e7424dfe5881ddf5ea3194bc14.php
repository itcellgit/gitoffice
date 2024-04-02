<?php $__env->startSection('styles'); ?>

        <!-- FLATPICKR CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('build/assets/libs/flatpickr/flatpickr.min.css')); ?>">

        <!-- COLOR PICKER CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('build/assets/libs/@simonwep/pickr/themes/classic.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('build/assets/libs/@simonwep/pickr/themes/monolith.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('build/assets/libs/@simonwep/pickr/themes/nano.min.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

                    <div class="content">

                        <!-- Start::main-content -->
                        <div class="main-content">

                            <!-- Page Header -->
                            <div class="block justify-between page-header sm:flex">
                                <div>
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Advanced Forms</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                    <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Forms
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                    </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        Advanced Forms
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="col-span-12 lg:col-span-3">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Basic Date Picker</h5>
                                        </div>
                                        <div class="box-body">
                                            <div class="flex rounded-sm shadow-sm">
                                                <div
                                                    class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                    <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                            class="ri ri-calendar-line"></i></span>
                                                </div>

                                                <input type="text"
                                                    class="ti-form-input rounded-l-none focus:z-10 flatpickr-input"
                                                    id="date" placeholder="Choose date" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-3">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Date Time Picker</h5>
                                        </div>
                                        <div class="box-body">
                                            <div class="flex rounded-sm shadow-sm">
                                                <div
                                                    class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                    <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                            class="ri ri-calendar-line"></i></span>
                                                </div>

                                                <input type="text"
                                                    class="ti-form-input rounded-l-none focus:z-10 flatpickr-input"
                                                    id="datetime" placeholder="Choose date" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-3">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Human Friendly Date Picker</h5>
                                        </div>
                                        <div class="box-body">
                                            <div class="flex rounded-sm shadow-sm">
                                                <div
                                                    class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                    <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                            class="ri ri-calendar-line"></i></span>
                                                </div>

                                                <input type="text"
                                                    class="ti-form-input rounded-l-none focus:z-10 flatpickr-input"
                                                    id="humanfrienndlydate" placeholder="Choose date" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-3">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Date Range Picker</h5>
                                        </div>
                                        <div class="box-body">
                                            <div class="flex rounded-sm shadow-sm">
                                                <div
                                                    class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                    <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                            class="ri ri-calendar-line"></i></span>
                                                </div>

                                                <input type="text"
                                                    class="ti-form-input rounded-l-none focus:z-10 flatpickr-input"
                                                    id="daterange" placeholder="Choose date" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-1 -->

                            <!-- Start::row-2 -->
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="col-span-12 lg:col-span-3">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Basic Time Picker</h5>
                                        </div>
                                        <div class="box-body">
                                            <div class="flex rounded-sm shadow-sm">
                                                <div
                                                    class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                    <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                            class="ri ri-time-line"></i></span>
                                                </div>

                                                <input type="text"
                                                    class="ti-form-input rounded-l-none focus:z-10 flatpickr-input"
                                                    id="timepikcr" placeholder="Choose date" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-3">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title"> Time Pickr with 24hr Format </h5>
                                        </div>
                                        <div class="box-body">
                                            <div class="flex rounded-sm shadow-sm">
                                                <div
                                                    class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                    <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                            class="ri ri-time-line"></i></span>
                                                </div>

                                                <input type="text"
                                                    class="ti-form-input rounded-l-none focus:z-10 flatpickr-input"
                                                    id="timepikcr1" placeholder="Choose date" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-3">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title"> Time Picker with Limits </h5>
                                        </div>
                                        <div class="box-body">
                                            <div class="flex rounded-sm shadow-sm">
                                                <div
                                                    class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                    <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                            class="ri ri-time-line"></i></span>
                                                </div>

                                                <input type="text"
                                                    class="ti-form-input rounded-l-none focus:z-10 flatpickr-input"
                                                    id="limittime" placeholder="Choose date" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-3">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title"> DateTimePicker with Limited Time Range </h5>
                                        </div>
                                        <div class="box-body">
                                            <div class="flex rounded-sm shadow-sm">
                                                <div
                                                    class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                    <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                            class="ri ri-time-line"></i></span>
                                                </div>

                                                <input type="text"
                                                    class="ti-form-input rounded-l-none focus:z-10 flatpickr-input"
                                                    id="limitdatetime" placeholder="Choose date" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-2 -->

                            <!-- Start::row-3 -->
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="col-span-12 lg:col-span-4">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title"> Inline Time Picker </h5>
                                        </div>
                                        <div class="box-body">
                                            <div class=" rounded-sm shadow-sm">
                                                <input type="text"
                                                    class="ti-form-input focus:z-10 flatpickr-input"
                                                    id="inlinetime" placeholder="Choose date" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-4">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title"> Date Picker with week numbers </h5>
                                        </div>
                                        <div class="box-body">
                                            <div class="flex rounded-sm shadow-sm">
                                                <div
                                                    class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                    <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                            class="ri ri-calendar-line"></i></span>
                                                </div>

                                                <input type="text"
                                                    class="ti-form-input rounded-l-none focus:z-10 flatpickr-input"
                                                    id="weeknum" placeholder="Choose date" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-4">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title"> Preloading time </h5>
                                        </div>
                                        <div class="box-body">
                                            <div class="flex rounded-sm shadow-sm">
                                                <div
                                                    class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                    <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                            class="ri ri-time-line"></i></span>
                                                </div>

                                                <input type="text"
                                                    class="ti-form-input rounded-l-none focus:z-10 flatpickr-input"
                                                    id="pretime" placeholder="Choose date" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-3 -->

                            <!-- Start::row-4 -->
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Inline Calendar </h5>
                                        </div>
                                        <div class="box-body sm:overflow-hidden overflow-auto">
                                            <div class="rounded-sm">
                                                <input type="text" class="ti-form-input focus:z-10 flatpickr-input"
                                                    id="inlinecalendar" placeholder="Choose date" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title"> Color Picker </h5>
                                        </div>
                                        <div class="box-body">
                                        <div class="">
                                            <div class="flex justify-between">
                                                <div>
                                                    <div class="theme-container"></div>
                                                    <div class="pickr-container text-center"></div>
                                                </div>
                                                <div>
                                                    <div class="theme-container1"></div>
                                                    <div class="pickr-container1 text-center"></div>
                                                </div>
                                                <div>
                                                    <div class="theme-container2"></div>
                                                    <div class="pickr-container2 text-center"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-4 -->

                        </div>
                        <!-- Start::main-content -->

                    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

        <!-- FLATPICKR JS -->
        <script src="<?php echo e(asset('build/assets/libs/flatpickr/flatpickr.min.js')); ?>"></script>
        <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/flatpickr.js'); ?>


        <!-- COLOR PICKER JS -->
        <script src="<?php echo e(asset('build/assets/libs/@simonwep/pickr/pickr.es5.min.js')); ?>"></script>
        <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/colorpicker.js'); ?>
        

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\my-projects\laravel\vite\synto\synto-laravel\synto\resources\views/pages/advanced-forms.blade.php ENDPATH**/ ?>