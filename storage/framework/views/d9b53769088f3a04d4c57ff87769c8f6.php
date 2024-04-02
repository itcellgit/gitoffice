<?php $__env->startSection('styles'); ?>

        <!-- FULLCALENDAR CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('build/assets/libs/fullcalendar/main.min.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

                    <div class="content">

                        <!-- Start::main-content -->
                        <div class="main-content">

                            <!-- Page Header -->
                            <div class="block justify-between page-header sm:flex">
                                <div>
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Calendar</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                        <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Advanced Ui
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                        </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        Calendar
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-x-6">
                            <div class="col-span-12 xl:col-span-3">
                                <div class="box">
                                <div class="box-header">
                                    <button type="button" class="ti-btn ti-btn-soft-primary m-0 w-full"><i class="ri-add-line"></i>Create New Event</button>
                                </div>
                                <div class="box-body p-0">
                                    <div class="p-4" id="external-events">
                                    <div
                                        class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event !bg-primary !border-primary text-black">
                                        <div class="fc-event-main">My Event 1</div>
                                    </div>
                                    <div
                                        class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event !bg-secondary !border-secondary text-black"
                                        data-class="bg-secondary">
                                        <div class="fc-event-main">My Event 2</div>
                                    </div>
                                    <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event !bg-success !border-success"
                                        data-class="bg-success">
                                        <div class="fc-event-main">My Event 3</div>
                                    </div>
                                    <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event !bg-info !border-info"
                                        data-class="bg-info">
                                        <div class="fc-event-main">My Event 4</div>
                                    </div>
                                    <div
                                        class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event !bg-warning !border-warning text-black"
                                        data-class="bg-warning">
                                        <div class="fc-event-main">My Event 5</div>
                                    </div>
                                    <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event !bg-danger !border-danger"
                                        data-class="bg-danger">
                                        <div class="fc-event-main">My Event 6</div>
                                    </div>
                                    </div>
                                    <div class="border-y border-dashed border-gray-200 dark:border-white/10">
                                    <div class="p-4 flex items-center justify-between">
                                        <h6 class="font-semibold my-auto text-xl">
                                        Activity :
                                        </h6>
                                        <button type="button" class="ti-btn ti-btn-soft-primary m-0 px-2 py-1">View All</button>
                                    </div>
                                    <div class="p-4" id="full-calendar-activity">
                                        <ul class="fullcalendar-events-activity">
                                        <li>
                                            <div class="flex items-center justify-between">
                                            <p class="mb-1 text-sm font-semibold">
                                                Monday, Jan 1,2023
                                            </p>
                                            <span class="badge rounded-sm bg-gray-100 text-gray-800 mb-1 p-1">12:00PM-1:00PM</span>
                                            </div>
                                            <p class="mb-0 text-gray-500 dark:text-white/70 text-xs">
                                            Meeting with a client about new project requirement.
                                            </p>
                                        </li>
                                        <li>
                                            <div class="flex items-center justify-between">
                                            <p class="mb-1 text-sm font-semibold">
                                                Thursday, Dec 29,2022
                                            </p>
                                            <span class="badge rounded-sm bg-success text-white mb-1 p-1">Completed</span>
                                            </div>
                                            <p class="mb-0 text-gray-500 dark:text-white/70 text-xs">
                                            Birthday party of niha suka
                                            </p>
                                        </li>
                                        <li>
                                            <div class="flex items-center justify-between">
                                            <p class="mb-1 text-sm font-semibold">
                                                Wednesday, Jan 3,2023
                                            </p>
                                            <span class="badge  rounded-sm bg-warning/10 text-warning mb-1 p-1">Reminder</span>
                                            </div>
                                            <p class="mb-0 text-gray-500 dark:text-white/70 text-xs">
                                            WOrk taget for new project is completing
                                            </p>
                                        </li>
                                        <li>
                                            <div class="flex items-center justify-between">
                                            <p class="mb-1 text-sm font-semibold">
                                                Friday, Jan 20,2023
                                            </p>
                                            <span class="badge rounded-sm bg-gray-100 text-gray-800 mb-1 p-1">06:00PM - 09:00PM</span>
                                            </div>
                                            <p class="mb-0 text-gray-500 dark:text-white/70 text-xs">
                                            Watch new movie with family
                                            </p>
                                        </li>
                                        <li>
                                            <div class="flex items-center justify-between">
                                            <p class="mb-1 text-sm font-semibold">
                                                Saturday, Jan 07,2023
                                            </p>
                                            <span class="badge  rounded-sm bg-danger/10 text-danger mb-1 p-1">Due Date</span>
                                            </div>
                                            <p class="mb-0 text-gray-500 dark:text-white/70 text-xs">
                                            Last day to pay the electricity bill and water bill.need to check the bank details.
                                            </p>
                                        </li>
                                        </ul>
                                    </div>
                                    </div>
                                    <div class="p-4 pb-0">
                                    <img src="<?php echo e(asset('build/assets/img/png-images/12.png')); ?>" alt="" class="mx-auto">
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 xl:col-span-9">
                                <div class="box">
                                <div class="box-body">
                                    <div id="calendar2"></div>
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

        <!-- MOMENT JS -->
        <script src="<?php echo e(asset('build/assets/libs/moment/moment.js')); ?>"></script>

        <!-- FULLCALENDAR JS -->
        <script src="<?php echo e(asset('build/assets/libs/fullcalendar/main.min.js')); ?>"></script>
        <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/fullcalendar.js'); ?>
        

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\my-projects\laravel\vite\synto\synto-laravel\synto\resources\views/pages/calendar.blade.php ENDPATH**/ ?>