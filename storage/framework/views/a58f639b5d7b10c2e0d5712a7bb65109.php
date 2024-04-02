<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

                    <div class="content">

                        <!-- Start::main-content -->
                        <div class="main-content">

                            <!-- Page Header -->
                            <div class="block justify-between page-header sm:flex">
                                <div>
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Columns</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                    <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Elements
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                    </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        Columns
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-6">
                                <div class="col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Based On Column Count</h5>
                                        </div>
                                        <div class="box-body">
                                            <div class="relative">
                                                <div class="absolute inset-0 -top-8 -bottom-8 grid grid-cols-1 sm:grid-cols-3 gap-8">
                                                    <div class="bg-stripes-primary dark:bg-stripes-primary opacity-75 w-full h-full"></div>
                                                    <div class="hidden sm:block bg-stripes-primary dark:bg-stripes-primary opacity-75 w-full h-full"></div>
                                                    <div class="hidden sm:block bg-stripes-primary dark:bg-stripes-primary opacity-75 w-full h-full"></div>
                                                </div>
                                                <div class="relative columns-1 sm:columns-3 gap-8">
                                                    <div class="relative aspect-w-16 aspect-h-9">
                                                        <img class="w-full object-cover rounded-sm" src="<?php echo e(asset('build/assets/img/gallery/1.jpg')); ?>" alt="Image Description">
                                                    </div>
                                                    <div class="relative aspect-w-1 aspect-h-1 mt-8">
                                                        <img class="w-full object-cover rounded-sm" src="<?php echo e(asset('build/assets/img/gallery/2.jpg')); ?>" alt="Image Description">
                                                    </div>
                                                    <div class="relative aspect-w-1 aspect-h-1 mt-8">
                                                        <img class="w-full object-cover rounded-sm" src="<?php echo e(asset('build/assets/img/gallery/4.jpg')); ?>" alt="Image Description">
                                                    </div>
                                                    <div class="hidden sm:block relative aspect-w-1 aspect-h-1 mt-8 sm:mt-0">
                                                        <img class="w-full object-cover rounded-sm" src="<?php echo e(asset('build/assets/img/gallery/9.jpg')); ?>" alt="Image Description">
                                                    </div>
                                                    <div class="hidden sm:block relative aspect-w-16 aspect-h-9 mt-8">
                                                        <img class="w-full object-cover rounded-sm" src="<?php echo e(asset('build/assets/img/gallery/8.jpg')); ?>" alt="Image Description">
                                                    </div>
                                                    <div class="hidden sm:block relative aspect-w-1 aspect-h-1 mt-8">
                                                        <img class="w-full object-cover rounded-sm" src="<?php echo e(asset('build/assets/img/gallery/7.jpg')); ?>" alt="Image Description">
                                                    </div>
                                                    <div class="hidden sm:block relative aspect-w-1 aspect-h-1 mt-8 sm:mt-0">
                                                        <img class="w-full object-cover rounded-sm" src="<?php echo e(asset('build/assets/img/gallery/5.jpg')); ?>" alt="Image Description">
                                                    </div>
                                                    <div class="hidden sm:block relative aspect-w-1 aspect-h-1 mt-8">
                                                        <img class="w-full object-cover rounded-sm" src="<?php echo e(asset('build/assets/img/gallery/6.jpg')); ?>" alt="Image Description">
                                                    </div>
                                                    <div class="hidden sm:block relative aspect-w-16 aspect-h-9 mt-8">
                                                        <img class="w-full object-cover rounded-sm" src="<?php echo e(asset('build/assets/img/gallery/5.jpg')); ?>" alt="Image Description">
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
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Based On Column Width</h5>
                                        </div>
                                        <div class="box-body">
                                            <div class="relative rounded-sm overflow-auto max-h-[800px]">
                                                <div class="relative">
                                                    <div class="columns-3xs gap-8 space-y-8">
                                                        <div class="relative aspect-w-16 aspect-h-9">
                                                        <img class="w-full object-cover rounded-sm" src="<?php echo e(asset('build/assets/img/gallery/1.jpg')); ?>" alt="Image Description">
                                                        </div>
                                                        <div class="relative aspect-w-1 aspect-h-1">
                                                        <img class="w-full object-cover rounded-sm" src="<?php echo e(asset('build/assets/img/gallery/7.jpg')); ?>" alt="Image Description">
                                                        </div>
                                                        <div class="relative hidden sm:block aspect-w-1 aspect-h-1">
                                                        <img class="w-full object-cover rounded-sm" src="<?php echo e(asset('build/assets/img/gallery/8.jpg')); ?>" alt="Image Description">
                                                        </div>
                                                        <div class="relative hidden sm:block aspect-w-16 aspect-h-9">
                                                        <img class="w-full object-cover rounded-sm" src="<?php echo e(asset('build/assets/img/gallery/5.jpg')); ?>" alt="Image Description">
                                                        </div>
                                                        <div class="relative hidden sm:block aspect-w-16 aspect-h-9">
                                                        <img class="w-full object-cover rounded-sm" src="<?php echo e(asset('build/assets/img/gallery/6.jpg')); ?>" alt="Image Description">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-2 -->

                        </div>
                        <!-- Start::main-content -->

                    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\laravel\vite\synto\synto\resources\views/pages/columns.blade.php ENDPATH**/ ?>