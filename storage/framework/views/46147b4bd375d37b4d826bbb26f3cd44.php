<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

                    <div class="content">

                        <!-- Start::main-content -->
                        <div class="main-content">

                            <!-- Page Header -->
                            <div class="block justify-between page-header sm:flex">
                                <div>
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Form Switch</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                    <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Forms
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                    </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        Form Switch
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-6">
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Default Toggle Switch</h5>
                                        </div>
                                        <div class="box-body">
                                            <input type="checkbox" id="hs-basic-usage" class="ti-switch">
                                            <label for="hs-basic-usage" class="sr-only">Toggle switch</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Toggle Switch With Tooltip</h5>
                                        </div>
                                        <div class="box-body">
                                            <div class="hs-tooltip flex items-center">
                                            <input type="checkbox" id="hs-tooltip-example" class="hs-tooltip-toggle ti-switch shrink-0">
                                            <label for="hs-tooltip-example" class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Allow push notifications</label>
                                            <div class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-sm shadow-sm dark:bg-slate-700" role="tooltip">
                                                Enable push notifications
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-1 -->

                            <!-- Start::row-2 -->
                            <div class="grid grid-cols-12 gap-6">
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Toggle Switch With Description</h5>
                                        </div>
                                        <div class="box-body">
                                            <div class="space-y-4">
                                            <div class="flex items-center">
                                                <input type="checkbox" id="hs-basic-with-description-unchecked" class="ti-switch">
                                                <label for="hs-basic-with-description-unchecked" class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Unchecked</label>
                                            </div>

                                            <div class="flex items-center">
                                                <input type="checkbox" id="hs-basic-with-description-checked" class="ti-switch" checked>
                                                <label for="hs-basic-with-description-checked" class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Checked</label>
                                            </div>

                                            <div class="flex items-center">
                                                <label class="text-sm text-gray-500 ltr:mr-3 rtl:ml-3 dark:text-white/70">On</label>
                                                <input type="checkbox" id="hs-basic-with-description" class="ti-switch">
                                                <label class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Off</label>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Disabled Toggle Switch</h5>
                                        </div>
                                        <div class="box-body">
                                            <div class="space-y-4">
                                            <div class="flex items-center opacity-70">
                                                <input type="checkbox" id="hs-basic-disabled-with-description-unchecked" class="ti-switch shrink-0 pointer-events-none" disabled>
                                                <label for="hs-basic-disabled-with-description-unchecked" class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Unchecked</label>
                                            </div>

                                            <div class="flex items-center opacity-70">
                                                <input type="checkbox" id="hs-basic-disabled-with-description-checked" class="ti-switch shrink-0 pointer-events-none" checked disabled>
                                                <label for="hs-basic-disabled-with-description-checked" class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Checked</label>
                                            </div>

                                            <div class="flex items-center opacity-70">
                                                <label class="text-sm text-gray-500 ltr:mr-3 rtl:ml-3 dark:text-white/70">On</label>
                                                <input type="checkbox" id="hs-basic-disabled-with-description" class="ti-switch shrink-0 pointer-events-none" disabled>
                                                <label class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Off</label>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-2 -->

                            <!-- Start::row-3 -->
                            <div class="grid grid-cols-12 gap-6">
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Toggle Switch With Sizes</h5>
                                        </div>
                                        <div class="box-body">
                                            <div class="space-y-4">
                                            <div class="flex items-center">
                                                <input type="checkbox" id="hs-small-switch" class="ti-switch shrink-0 w-11 h-6 before:w-5 before:h-5">
                                                <label for="hs-small-switch" class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Small</label>
                                            </div>

                                            <div class="flex items-center">
                                                <input type="checkbox" id="hs-medium-switch" class="ti-switch shrink-0">
                                                <label for="hs-medium-switch" class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Medium</label>
                                            </div>

                                            <div class="flex items-center">
                                                <input type="checkbox" id="hs-large-switch" class="ti-switch shrink-0 w-[4.25rem] h-9 before:w-8 before:h-8">
                                                <label for="hs-large-switch" class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Large</label>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Toggle Switch Validation States</h5>
                                        </div>
                                        <div class="box-body">
                                            <div class="space-y-4">
                                            <div class="flex items-center">
                                                <input type="checkbox" id="hs-valid-toggle-switch" class="ti-switch shrink-0 checked:bg-none checked:bg-green-600 checked:hover:bg-green-600 checked:focus:bg-green-600 focus:border-green-600 focus:ring-green-600 dark:checked:bg-green-600

                                                checked:before:bg-green-200 dark:checked:before:bg-green-200" checked>
                                                <label for="hs-valid-toggle-switch" class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Valid toggle switch</label>
                                            </div>

                                            <div class="flex items-center">
                                                <input type="checkbox" id="hs-invalid-toggle-switch" class="ti-switch shrink-0 checked:bg-none checked:bg-red-600 checked:hover:bg-red-600 checked:focus:bg-red-600 focus:border-red-600 focus:ring-red-600 dark:checked:bg-red-600

                                                checked:before:bg-red-200 dark:checked:before:bg-red-200" checked>
                                                <label for="hs-invalid-toggle-switch" class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Invalid toggle switch</label>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-3-->

                        </div>
                        <!-- Start::main-content -->

                    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\laravel\vite\synto\synto\resources\views/pages/form-switch.blade.php ENDPATH**/ ?>