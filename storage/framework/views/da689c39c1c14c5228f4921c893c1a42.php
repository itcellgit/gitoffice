<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

                    <div class="content">

                        <!-- Start::main-content -->
                        <div class="main-content">

                            <!-- Page Header -->
                            <div class="block justify-between page-header sm:flex">
                                <div>
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Pagination</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                    <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Elements
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                    </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        Pagination
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xxl:!col-span-3 md:col-span-6 col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Basic Pagination</h5>
                                        </div>
                                        <div class="box-body">
                                        <nav class="overflow-auto">
                                            <ul class="ti-pagination">
                                            <li><a class="page-link" href="javascript:void(0);">
                                                Previous
                                            </a></li>
                                            <li><a class="page-link" href="javascript:void(0);" aria-current="page">1</a></li>
                                            <li><a class="page-link" href="javascript:void(0);">2</a></li>
                                            <li><a class="page-link" href="javascript:void(0);">3</a></li>
                                            <li><a class="page-link" href="javascript:void(0);">
                                                Next
                                            </a></li>
                                            </ul>
                                        </nav>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:!col-span-3 md:col-span-6 col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Pagination Working with icons</h5>
                                        </div>
                                        <div class="box-body">
                                        <nav >
                                            <ul class="ti-pagination">
                                            <li><a class="page-link" href="javascript:void(0);">

                                            <span aria-hidden="true">«</span>
                                            <span class="sr-only">Previous</span>
                                            </a></li>
                                            <li><a class="page-link" href="javascript:void(0);" aria-current="page">1</a></li>
                                            <li><a class="page-link" href="javascript:void(0);">2</a></li>
                                            <li><a class="page-link" href="javascript:void(0);">3</a></li>
                                            <li><a class="page-link" href="javascript:void(0);">
                                                <span class="sr-only">Next</span>
                                                <span aria-hidden="true">»</span>
                                            </a></li>
                                            </ul>
                                        </nav>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:!col-span-3 md:col-span-6 col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Pagination Disabled and Active State</h5>
                                        </div>
                                        <div class="box-body">
                                        <nav >
                                            <ul class="ti-pagination">
                                            <li><a class="page-link disabled" href="javascript:void(0);">
                                            <span aria-hidden="true">«</span>
                                            <span class="sr-only">Previous</span>
                                            </a></li>
                                            <li><a class="page-link active" href="javascript:void(0);" aria-current="page">1</a></li>
                                            <li><a class="page-link" href="javascript:void(0);">2</a></li>
                                            <li><a class="page-link" href="javascript:void(0);">3</a></li>
                                            <li><a class="page-link" href="javascript:void(0);">
                                                <span class="sr-only">Next</span>
                                                <span aria-hidden="true">»</span>
                                            </a></li>
                                            </ul>
                                        </nav>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:!col-span-3 md:col-span-6 col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Pagination Center Alignment</h5>
                                        </div>
                                        <div class="box-body">
                                        <nav >
                                            <ul class="ti-pagination justify-center">
                                            <li><a class="page-link" href="javascript:void(0);">
                                            <span aria-hidden="true">«</span>
                                            <span class="sr-only">Previous</span>
                                            </a></li>
                                            <li><a class="page-link active" href="javascript:void(0);" aria-current="page">1</a></li>
                                            <li><a class="page-link" href="javascript:void(0);">2</a></li>
                                            <li><a class="page-link" href="javascript:void(0);">3</a></li>
                                            <li><a class="page-link" href="javascript:void(0);">
                                                <span class="sr-only">Next</span>
                                                <span aria-hidden="true">»</span>
                                            </a></li>
                                            </ul>
                                        </nav>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:!col-span-3 md:col-span-6 col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Pagination Right Alignment</h5>
                                        </div>
                                        <div class="box-body">
                                        <nav >
                                            <ul class="ti-pagination justify-end">
                                            <li><a class="page-link" href="javascript:void(0);">
                                            <span aria-hidden="true">«</span>
                                            <span class="sr-only">Previous</span>
                                            </a></li>
                                            <li><a class="page-link active" href="javascript:void(0);" aria-current="page">1</a></li>
                                            <li><a class="page-link" href="javascript:void(0);">2</a></li>
                                            <li><a class="page-link" href="javascript:void(0);">3</a></li>
                                            <li><a class="page-link" href="javascript:void(0);">
                                                <span class="sr-only">Next</span>
                                                <span aria-hidden="true">»</span>
                                            </a></li>
                                            </ul>
                                        </nav>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:!col-span-3 md:col-span-6 col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Pagination Style 1</h5>
                                        </div>
                                        <div class="box-body">
                                        <nav class="pagination-style-1 overflow-auto">
                                            <ul class="ti-pagination">
                                            <li><a aria-label="anchor" class="page-link" href="javascript:void(0);">
                                                <i class="ri-arrow-left-s-line align-middle rtl:rotate-180"></i>
                                            </a></li>
                                            <li><a class="page-link active" href="javascript:void(0);" aria-current="page">1</a></li>
                                            <li><a class="page-link" href="javascript:void(0);">2</a></li>
                                            <li><a aria-label="anchor" class="page-link" href="javascript:void(0);"><i class="ri-more-line"></i></a></li>
                                            <li><a class="page-link" href="javascript:void(0);">21</a></li>
                                            <li><a class="page-link" href="javascript:void(0);">22</a></li>
                                            <li><a aria-label="anchor" class="page-link" href="javascript:void(0);">
                                                <i class="ri-arrow-right-s-line align-middle rtl:rotate-180"></i>
                                            </a></li>
                                            </ul>
                                        </nav>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:!col-span-3 md:col-span-6 col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Pagination Style 2</h5>
                                        </div>
                                        <div class="box-body">
                                        <nav class="pagination-style-2 overflow-auto">
                                            <ul class="ti-pagination">
                                            <li><a class="page-link" href="javascript:void(0);">
                                                Prev
                                            </a></li>
                                            <li><a class="page-link active" href="javascript:void(0);" aria-current="page">1</a></li>
                                            <li><a class="page-link" href="javascript:void(0);">2</a></li>
                                            <li><a  aria-label="anchor" class="page-link" href="javascript:void(0);"><i class="ri-more-line"></i></a></li>
                                            <li><a class="page-link" href="javascript:void(0);">21</a></li>
                                            <li><a class="page-link" href="javascript:void(0);">22</a></li>
                                            <li><a class="page-link" href="javascript:void(0);">
                                                Next
                                            </a></li>
                                            </ul>
                                        </nav>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:!col-span-3 md:col-span-6 col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Pagination Style 3</h5>
                                        </div>
                                        <div class="box-body">
                                        <nav class="pagination-style-3 overflow-auto">
                                            <ul class="ti-pagination">
                                            <li><a class="page-link" href="javascript:void(0);">
                                            Prev
                                            </a></li>
                                            <li><a class="page-link active" href="javascript:void(0);" aria-current="page">1</a></li>
                                            <li><a class="page-link" href="javascript:void(0);">2</a></li>
                                            <li><a aria-label="anchor" class="page-link" href="javascript:void(0);"><i class="ri-more-line"></i></a></li>
                                            <li><a class="page-link" href="javascript:void(0);">21</a></li>
                                            <li><a class="page-link" href="javascript:void(0);">22</a></li>
                                            <li><a class="page-link" href="javascript:void(0);">
                                                Next
                                            </a></li>
                                            </ul>
                                        </nav>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:!col-span-3 col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Pagination Style 4</h5>
                                        </div>
                                        <div class="box-body">
                                        <nav class="pagination-style-1 overflow-auto">
                                            <ul class="ti-pagination">
                                            <li><a class="page-link" href="javascript:void(0);">
                                            Prev
                                            </a></li>
                                            <li><a class="page-link active" href="javascript:void(0);" aria-current="page">1</a></li>
                                            <li><a class="page-link" href="javascript:void(0);">2</a></li>
                                            <li><a aria-label="anchor" class="page-link" href="javascript:void(0);"><i class="ri-more-line"></i></a></li>
                                            <li><a class="page-link" href="javascript:void(0);">16</a></li>
                                            <li><a class="page-link" href="javascript:void(0);">17</a></li>
                                            <li><a class="page-link" href="javascript:void(0);">
                                                Next
                                            </a></li>
                                            </ul>
                                        </nav>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:!col-span-9 col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Pagination Sizing</h5>
                                        </div>
                                        <div class="box-body space-y-4">
                                        <nav>
                                            <ul class="ti-pagination pagination-sm">
                                            <li><a class="page-link" href="javascript:void(0);">
                                            <span aria-hidden="true">«</span>
                                            <span class="sr-only">Previous</span>
                                            </a></li>
                                            <li><a class="page-link active" href="javascript:void(0);" aria-current="page">1</a></li>
                                            <li><a class="page-link" href="javascript:void(0);">2</a></li>
                                            <li><a class="page-link" href="javascript:void(0);">3</a></li>
                                            <li><a class="page-link" href="javascript:void(0);">
                                                <span class="sr-only">Next</span>
                                                <span aria-hidden="true">»</span>
                                            </a></li>
                                            </ul>
                                        </nav>
                                        <nav>
                                            <ul class="ti-pagination sm:justify-center">
                                            <li><a class="page-link" href="javascript:void(0);">
                                            <span aria-hidden="true">«</span>
                                            <span class="sr-only">Previous</span>
                                            </a></li>
                                            <li><a class="page-link active" href="javascript:void(0);" aria-current="page">1</a></li>
                                            <li><a class="page-link" href="javascript:void(0);">2</a></li>
                                            <li><a class="page-link" href="javascript:void(0);">3</a></li>
                                            <li><a class="page-link" href="javascript:void(0);">
                                                <span class="sr-only">Next</span>
                                                <span aria-hidden="true">»</span>
                                            </a></li>
                                            </ul>
                                        </nav>
                                        <nav>
                                            <ul class="ti-pagination sm:justify-end pagination-lg">
                                            <li><a class="page-link" href="javascript:void(0);">
                                            <span aria-hidden="true">«</span>
                                            <span class="sr-only">Previous</span>
                                            </a></li>
                                            <li><a class="page-link active" href="javascript:void(0);" aria-current="page">1</a></li>
                                            <li><a class="page-link" href="javascript:void(0);">2</a></li>
                                            <li><a class="page-link" href="javascript:void(0);">3</a></li>
                                            <li><a class="page-link" href="javascript:void(0);">
                                                <span class="sr-only">Next</span>
                                                <span aria-hidden="true">»</span>
                                            </a></li>
                                            </ul>
                                        </nav>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\laravel\vite\synto\synto\resources\views/pages/pagination.blade.php ENDPATH**/ ?>