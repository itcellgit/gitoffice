<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

                    <div class="content">

                        <!-- Start::main-content -->
                        <div class="main-content">

                            <!-- Page Header -->
                            <div class="block justify-between page-header sm:flex">
                                <div>
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium">Form Radio</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                    <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Forms
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                    </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                    Form Radio
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-x-6">
                            <div class="col-span-12  md:col-span-6 xl:!col-span-4">
                                <div class="box">
                                    <div class="box-header">
                                        <h5 class="box-title">Default Radio</h5>
                                    </div>
                                    <div class="box-body">
                                        <div class="space-y-2">
                                            <div class="flex">
                                                <input type="radio" name="hs-default-radio" class="ti-form-radio pointer-events-none" id="hs-default-radio">
                                                <label for="hs-default-radio" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Default radio</label>
                                            </div>

                                            <div class="flex">
                                                <input type="radio" name="hs-default-radio" class="ti-form-radio pointer-events-none" id="hs-checked-radio" checked>
                                                <label for="hs-checked-radio" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Checked radio</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12  md:col-span-6 xl:!col-span-4">
                                <div class="box">
                                    <div class="box-header">
                                        <h5 class="box-title">Disabled Radio</h5>
                                    </div>
                                    <div class="box-body">
                                        <div class="space-y-2">
                                            <div class="flex opacity-40">
                                                <input type="radio" name="hs-disabled-radio" class="ti-form-radio" id="hs-disabled-radio" disabled>
                                                <label for="hs-disabled-radio" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Disabled radio</label>
                                            </div>

                                            <div class="flex opacity-40">
                                                <input type="radio" name="hs-disabled-radio" class="ti-form-radio" id="hs-disabled-checked-radio" checked disabled>
                                                <label for="hs-disabled-checked-radio" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Disabled checked radio</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 xl:col-span-4">
                                <div class="box">
                                    <div class="box-header">
                                        <h5 class="box-title">Inline Radio Group</h5>
                                    </div>
                                    <div class="box-body">
                                        <div class="flex gap-x-6">
                                        <div class="flex">
                                            <input type="radio" name="hs-radio-group" class="ti-form-radio" id="hs-radio-group-1" checked>
                                            <label for="hs-radio-group-1" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Apple</label>
                                        </div>

                                        <div class="flex">
                                            <input type="radio" name="hs-radio-group" class="ti-form-radio" id="hs-radio-group-2">
                                            <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Pear</label>
                                        </div>

                                        <div class="flex">
                                            <input type="radio" name="hs-radio-group" class="ti-form-radio" id="hs-radio-group-3">
                                            <label for="hs-radio-group-3" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Orange</label>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-1 -->

                            <!-- Start::row-2 -->
                            <div class="grid grid-cols-12 gap-x-6">
                            <div class="col-span-12 lg:col-span-4">
                                <div class="box">
                                    <div class="box-header">
                                        <h5 class="box-title">Vertical Radio Group</h5>
                                    </div>
                                    <div class="box-body">
                                        <div class="flex flex-col gap-y-3">
                                        <div class="flex">
                                            <input type="radio" name="hs-radio-vertical-group" class="ti-form-radio" id="hs-radio-vertical-group-1" checked>
                                            <label for="hs-radio-vertical-group-1" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Apple</label>
                                        </div>

                                        <div class="flex">
                                            <input type="radio" name="hs-radio-vertical-group" class="ti-form-radio" id="hs-radio-vertical-group-2">
                                            <label for="hs-radio-vertical-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Pear</label>
                                        </div>

                                        <div class="flex">
                                            <input type="radio" name="hs-radio-vertical-group" class="ti-form-radio" id="hs-radio-vertical-group-3">
                                            <label for="hs-radio-vertical-group-3" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Orange</label>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-4">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">List With Description</h5>
                                </div>
                                <div class="box-body">
                                    <div class="grid space-y-3">
                                    <div class="relative flex items-start">
                                        <div class="flex items-center h-5 mt-1">
                                        <input id="hs-radio-delete" name="hs-radio-with-description" type="radio" class="ti-form-radio" aria-describedby="hs-radio-delete-description" checked>
                                        </div>
                                        <label for="hs-radio-delete" class="ltr:ml-2 rtl:mr-2">
                                        <span class="block text-sm font-semibold text-gray-800 dark:text-white">Delete</span>
                                        <span id="hs-radio-delete-description" class="block text-sm text-gray-600 dark:text-white/70">Notify me when this action happens.</span>
                                        </label>
                                    </div>

                                    <div class="relative flex items-start">
                                        <div class="flex items-center h-5 mt-1">
                                        <input id="hs-radio-archive" name="hs-radio-with-description" type="radio" class="ti-form-radio" aria-describedby="hs-radio-archive-description">
                                        </div>
                                        <label for="hs-radio-archive" class="ltr:ml-2 rtl:mr-2">
                                        <span class="block text-sm font-semibold text-gray-800 dark:text-white">Archive</span>
                                        <span id="hs-radio-archive-description" class="block text-sm text-gray-600 dark:text-white/70">Notify me when this action happens.</span>
                                        </label>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-4">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Vertical Radio Within Form Input</h5>
                                </div>
                                <div class="box-body">
                                    <div class="grid space-y-2">
                                    <label class="max-w-xs flex p-3 w-full bg-white border border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70">
                                        <input type="radio" name="hs-vertical-radio-in-form" class="ti-form-radio pointer-events-none" id="hs-vertical-radio-in-form">
                                        <span class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Default radio</span>
                                    </label>

                                    <label class="max-w-xs flex p-3 w-full bg-white border border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70">
                                        <input type="radio" name="hs-vertical-radio-in-form" class="ti-form-radio pointer-events-none" id="hs-vertical-radio-checked-in-form" checked>
                                        <span class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Checked radio</span>
                                    </label>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-2 -->

                            <!-- Start::row-3 -->
                            <div class="grid grid-cols-12 gap-x-6">
                            <div class="col-span-12 lg:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Radio Within Form Input</h5>
                                </div>
                                <div class="box-body">
                                    <div class="grid sm:grid-cols-2 gap-2">
                                    <label class="flex p-3 w-full bg-white border border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70">
                                        <input type="radio" name="hs-radio-in-form" class="ti-form-radio" id="hs-radio-in-form">
                                        <span class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Default radio</span>
                                    </label>

                                    <label class="flex p-3 w-full bg-white border border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70">
                                        <input type="radio" name="hs-radio-in-form" class="ti-form-radio" id="hs-radio-checked-in-form" checked>
                                        <span class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Checked radio</span>
                                    </label>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Radio On Right Within Form Input</h5>
                                </div>
                                <div class="box-body">
                                    <div class="grid sm:grid-cols-2 gap-2">
                                    <label class="flex p-3 w-full bg-white border border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70">
                                        <span class="text-sm text-gray-500 dark:text-white/70">Default radio</span>
                                        <input type="radio" name="hs-radio-on-right" class="ti-form-radio pointer-events-none ltr:ml-auto rtl:mr-auto" id="hs-radio-on-right">
                                    </label>

                                    <label class="flex p-3 w-full bg-white border border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70">
                                        <span class="text-sm text-gray-500 dark:text-white/70">Checked radio</span>
                                        <input type="radio" name="hs-radio-on-right" class="ti-form-radio pointer-events-none ltr:ml-auto rtl:mr-auto" id="hs-radioradio-on-right" checked>
                                    </label>
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
                                    <h5 class="box-title">Radio With Listgroup</h5>
                                </div>
                                <div class="box-body">
                                    <ul class="flex flex-col">
                                    <li class="ti-list-group bg-white border text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white">
                                        <div class="relative flex items-start w-full">
                                        <div class="flex items-center h-5">
                                            <input id="hs-list-group-item-radio-1" name="hs-list-group-item-radio" type="radio" class="ti-form-radio" checked>
                                        </div>
                                        <label for="hs-list-group-item-radio-1" class="ltr:ml-2 rtl:mr-2 block w-full text-sm text-gray-600 dark:text-white/70">
                                            Chris Lynch
                                        </label>
                                        </div>
                                    </li>

                                    <li class="ti-list-group bg-white border text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white">
                                        <div class="relative flex items-start w-full">
                                        <div class="flex items-center h-5">
                                            <input id="hs-list-group-item-radio-2" name="hs-list-group-item-radio" type="radio" class="ti-form-radio">
                                        </div>
                                        <label for="hs-list-group-item-radio-2" class="ltr:ml-2 rtl:mr-2 block w-full text-sm text-gray-600 dark:text-white/70">
                                            Maria Guan
                                        </label>
                                        </div>
                                    </li>

                                    <li class="ti-list-group bg-white border text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white">
                                        <div class="relative flex items-start w-full">
                                        <div class="flex items-center h-5">
                                            <input id="hs-list-group-item-radio-3" name="hs-list-group-item-radio" type="radio" class="ti-form-radio">
                                        </div>
                                        <label for="hs-list-group-item-radio-3" class="ltr:ml-2 rtl:mr-2 block w-full text-sm text-gray-600 dark:text-white/70">
                                            Bob Arum
                                        </label>
                                        </div>
                                    </li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Radio With Listgroup</h5>
                                </div>
                                <div class="box-body">
                                    <ul class="flex flex-col sm:flex-row">
                                    <li class="ti-list-group gap-x-2.5 bg-white border text-gray-800 ltr:sm:-ml-px rtl:sm:-mr-px sm:mt-0 ltr:sm:first:rounded-tr-none rtl:sm:first:rounded-tl-none ltr:sm:first:rounded-bl-sm rtl:sm:first:rounded-br-sm ltr:sm:last:rounded-bl-none rtl:sm:last:rounded-br-none ltr:sm:last:rounded-tr-sm rtl:sm:last:rounded-tl-sm dark:bg-bgdark dark:border-white/10 dark:text-white">
                                        <div class="relative flex items-start w-full">
                                        <div class="flex items-center h-5">
                                            <input id="hs-horizontal-list-group-item-radio-1" name="hs-horizontal-list-group-item-radio" type="radio" class="ti-form-radio" checked>
                                        </div>
                                        <label for="hs-horizontal-list-group-item-radio-1" class="ltr:ml-2 rtl:mr-2 block w-full text-sm text-gray-600 dark:text-white/70">
                                            Chris Lynch
                                        </label>
                                        </div>
                                    </li>

                                    <li class="ti-list-group gap-x-2.5 bg-white border text-gray-800 ltr:sm:-ml-px rtl:sm:-mr-px sm:mt-0 ltr:sm:first:rounded-tr-none rtl:sm:first:rounded-tl-none ltr:sm:first:rounded-bl-sm rtl:sm:first:rounded-br-sm ltr:sm:last:rounded-bl-none rtl:sm:last:rounded-br-none ltr:sm:last:rounded-tr-sm rtl:sm:last:rounded-tl-sm dark:bg-bgdark dark:border-white/10 dark:text-white">
                                        <div class="relative flex items-start w-full">
                                        <div class="flex items-center h-5">
                                            <input id="hs-horizontal-list-group-item-radio-2" name="hs-horizontal-list-group-item-radio" type="radio" class="ti-form-radio">
                                        </div>
                                        <label for="hs-horizontal-list-group-item-radio-2" class="ltr:ml-2 rtl:mr-2 block w-full text-sm text-gray-600 dark:text-white/70">
                                            Maria Guan
                                        </label>
                                        </div>
                                    </li>

                                    <li class="ti-list-group gap-x-2.5 bg-white border text-gray-800 ltr:sm:-ml-px rtl:sm:-mr-px sm:mt-0 ltr:sm:first:rounded-tr-none rtl:sm:first:rounded-tl-none ltr:sm:first:rounded-bl-sm rtl:sm:first:rounded-br-sm ltr:sm:last:rounded-bl-none rtl:sm:last:rounded-br-none ltr:sm:last:rounded-tr-sm rtl:sm:last:rounded-tl-sm dark:bg-bgdark dark:border-white/10 dark:text-white">
                                        <div class="relative flex items-start w-full">
                                        <div class="flex items-center h-5">
                                            <input id="hs-horizontal-list-group-item-radio-3" name="hs-horizontal-list-group-item-radio" type="radio" class="ti-form-radio">
                                        </div>
                                        <label for="hs-horizontal-list-group-item-radio-3" class="ltr:ml-2 rtl:mr-2 block w-full text-sm text-gray-600 dark:text-white/70">
                                            Bob Arum
                                        </label>
                                        </div>
                                    </li>
                                    </ul>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\my-projects\laravel\vite\synto\synto-laravel\synto\resources\views/pages/form-radio.blade.php ENDPATH**/ ?>