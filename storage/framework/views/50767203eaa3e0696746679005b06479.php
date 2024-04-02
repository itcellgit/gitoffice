<?php $__env->startSection('styles'); ?>

        <!-- NOTIFICATION CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('build/assets/libs/awesome-notifications/style.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

                    <div class="content">

                        <!-- Start::main-content -->
                        <div class="main-content">

                            <!-- Page Header -->
                            <div class="block justify-between page-header sm:flex">
                                <div>
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Notifications</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                        <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Advanced Ui
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                        </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        Notifications
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-x-5">
                            <div class="col-span-12 lg:col-span-3">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Basic Notification</h5>
                                </div>
                                <div class="box-body text-center">
                                    <button type="button" class="ti-btn ti-btn-primary" id="basic">Basic Notification</button>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-3">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Async Notification With Error Message</h5>
                                </div>
                                <div class="box-body text-center">
                                    <button type="button" class="ti-btn ti-btn-primary" id="async-error">Async Notification</button>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-3">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Async Notification With Success Message</h5>
                                </div>
                                <div class="box-body text-center">
                                    <button type="button" class="ti-btn ti-btn-primary" id="async-success">Async Notification</button>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-3">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">PopUp Notification</h5>
                                </div>
                                <div class="box-body text-center">
                                    <button type="button" class="ti-btn ti-btn-primary" id="popup">Notification</button>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-1 -->

                            <!-- Start::row-2 -->
                            <div class="grid grid-cols-12 gap-x-5">
                            <div class="col-span-12 lg:col-span-3">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Info Notification</h5>
                                </div>
                                <div class="box-body text-center">
                                    <button type="button" class="ti-btn  ti-btn-info" id="info">Info Notification</button>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-3">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Success Notification</h5>
                                </div>
                                <div class="box-body text-center">
                                    <button type="button" class="ti-btn  ti-btn-success" id="success">Success Notification</button>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-3">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Warning Notification</h5>
                                </div>
                                <div class="box-body text-center">
                                    <button type="button" class="ti-btn ti-btn-warning" id="warning">Warning Notification</button>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-3">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Error Notification</h5>
                                </div>
                                <div class="box-body text-center">
                                    <button type="button" class="ti-btn ti-btn-danger" id="error">Error Notification</button>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-2 -->

                            <!-- Start::row-3 -->
                            <div class="grid grid-cols-12 gap-x-5">
                            <div class="col-span-12 lg:col-span-3">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Confirmation Notification</h5>
                                </div>
                                <div class="box-body text-center">
                                    <button type="button" class="ti-btn  ti-btn-secondary" id="confirm">Notification</button>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-3">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Async Block With Error Notification</h5>
                                </div>
                                <div class="box-body text-center">
                                    <button type="button" class="ti-btn ti-btn-primary" id="async">Notification</button>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-3">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Async Block With Success Notification</h5>
                                </div>
                                <div class="box-body text-center">
                                    <button type="button" class="ti-btn ti-btn-primary" id="async-block">Notification</button>
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

        <!-- RATING JS -->
        <script src="<?php echo e(asset('build/assets/libs/awesome-notifications/index.var.js')); ?>"></script>
        <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/notifications.js'); ?>
        

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\laravel\vite\synto\synto\resources\views/pages/notifications.blade.php ENDPATH**/ ?>