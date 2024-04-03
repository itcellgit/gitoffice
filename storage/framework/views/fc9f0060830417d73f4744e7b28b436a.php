<?php $__env->startSection('styles'); ?>

        <!-- TABULATOR CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('build/assets/libs/tabulator-tables/css/tabulator.min.css')); ?>">

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
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Data Tables</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                        <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Basic Ui
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                        </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        Data Tables
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-6">
                            <div class="col-span-12">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Basic DataTable</h5>
                                </div>
                                <div class="box-body">
                                    <div class="overflow-auto table-bordered">
                                    <div id="basic-table" class="ti-custom-table ti-striped-table ti-custom-table-hover"></div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-1 -->

                            <!-- Start::row-2 -->
                            <div class="grid grid-cols-12 gap-6">
                            <div class="col-span-12">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Sortable DataTable</h5>
                                </div>
                                <div class="box-body space-y-3">
                                    <div class="sortable-data">
                                    <div class="sm:grid grid-cols-12 gap-6 space-y-2 sm:space-y-0">
                                        <div class="col-span-12 lg:!col-span-2 sm:col-span-3">
                                        <select id="sort-field" class="ti-form-select " data-trigger>
                                            <option value="name" selected>Name</option>
                                            <option value="progress">Position</option>
                                            <option value="gender">Office</option>
                                            <option value="rating">Age</option>
                                            <option value="col">Salary</option>
                                        </select>
                                        </div>
                                        <div class="col-span-12 lg:!col-span-2 sm:col-span-3">
                                        <select id="sort-direction" class="ti-form-select" data-trigger>
                                            <option value="asc" selected>asc</option>
                                            <option value="desc">desc</option>
                                        </select>
                                        </div>
                                        <button type="button" class="ti-btn ti-btn-primary py-2 col-span-12 lg:!col-span-2 sm:col-span-3" id="sort-trigger">Trigger Sort</button>
                                    </div>
                                    </div>
                                    <div class="overflow-hidden table-bordered">
                                    <div id="sort-table" class="ti-custom-table ti-striped-table ti-custom-table-hover"></div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-2 -->

                            <!-- Start::row-3 -->
                            <div class="grid grid-cols-12 gap-6">
                            <div class="col-span-12">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Reactivity DataTable</h5>
                                </div>
                                <div class="box-body space-y-3">
                                    <div class="reactivity-data">
                                    <button type="button" class="ti-btn ti-btn-primary" id="reactivity-add">Add New Row</button>
                                    <button type="button" class="ti-btn ti-btn-primary" id="reactivity-delete">Remove Row</button>
                                    <button type="button" class="ti-btn ti-btn-primary" id="clear">Empty the table</button>
                                    <button type="button" class="ti-btn ti-btn-primary" id="reset">Reset</button>
                                    </div>
                                    <div class="overflow-hidden table-bordered">
                                    <div id="reactivity-table" class="ti-custom-table ti-striped-table ti-custom-table-hover"></div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-3 -->

                            <!-- Start::row-3 -->
                            <div class="grid grid-cols-12 gap-6">
                            <div class="col-span-12">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Download DataTable</h5>
                                </div>
                                <div class="box-body space-y-3">
                                    <div class="download-data">
                                        <button type="button" class="ti-btn ti-btn-primary" id="download-csv">Download CSV</button>
                                        <button type="button" class="ti-btn ti-btn-primary" id="download-json">Download JSON</button>
                                        <button type="button" class="ti-btn ti-btn-primary" id="download-xlsx">Download XLSX</button>
                                        <button type="button" class="ti-btn ti-btn-primary" id="download-pdf">Download PDF</button>
                                        <button type="button" class="ti-btn ti-btn-primary" id="download-html">Download HTML</button>
                                    </div>
                                    <div class="overflow-hidden table-bordered">
                                    <div id="download-table" class="ti-custom-table ti-striped-table ti-custom-table-hover"></div>
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

        <!-- TABULATOR JS -->
        <script src="<?php echo e(asset('build/assets/libs/tabulator-tables/js/tabulator.min.js')); ?>"></script>

        <!-- CHOICES JS -->
        <script src="<?php echo e(asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')); ?>"></script>

        <!-- XLXS JS -->
        <script src="<?php echo e(asset('build/assets/libs/xlsx/xlsx.full.min.js')); ?>"></script>

        <!-- JSPDF JS -->
        <script src="<?php echo e(asset('build/assets/libs/jspdf/jspdf.umd.min.js')); ?>"></script>
        <script src="<?php echo e(asset('build/assets/libs/jspdf-autotable/jspdf.plugin.autotable.min.js')); ?>"></script>

        <!-- TABULATOR CUSTOM JS -->
        <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/datatable.js'); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\my-projects\laravel\vite\synto\synto-laravel\synto\resources\views/pages/datatables.blade.php ENDPATH**/ ?>