<?php $__env->startSection('styles'); ?>

        <!-- GLIGHTBOX CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('build/assets/libs/glightbox/css/glightbox.min.css')); ?>">

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
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> File Details</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                        <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Advanced Ui
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                        </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        File Details
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 xl:gap-6">
                            <div class="col-span-12 xl:col-span-8">
                                <div class="box">
                                    <div class="box-body space-y-4">
                                    <img class="rounded-sm" src="<?php echo e(asset('build/assets/img/gallery/8.jpg')); ?>" alt="Image Description">
                                    <div class="sm:flex justify-between space-y-2 sm:space-y-0">
                                        <div class="flex space-x-2 rtl:space-x-reverse"><i class="ri ri-image-line text-primary p-2 leading-none bg-primary/20 rounded-sm"></i><h3 class="my-auto font-bold">Nature.jpg</h3></div>
                                        <div class="flex space-x-3 rtl:space-x-reverse">
                                        <i class="ri ri-edit-2-line p-2 leading-none bg-gray-200 text-gray-500 dark:text-white/70 dark:bg-black/20 rounded-sm"></i>
                                        <i class="ri ri-star-line p-2 leading-none bg-gray-200 text-gray-500 dark:text-white/70 dark:bg-black/20 rounded-sm"></i>
                                        <i class="ri ri-share-line p-2 leading-none bg-gray-200 text-gray-500 dark:text-white/70 dark:bg-black/20 rounded-sm"></i>
                                        <i class="ri ri-download-2-line p-2 leading-none bg-gray-200 text-gray-500 dark:text-white/70 dark:bg-black/20 rounded-sm"></i>
                                        <i class="ri ri-delete-bin-6-line p-2 leading-none bg-gray-200 text-gray-500 dark:text-white/70 dark:bg-black/20 rounded-sm"></i>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="box-header">
                                        <h5 class="box-title">Related Files</h5>
                                    </div>
                                    <div class="box-body">
                                    <div class="swiper mySwiper">
                                        <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="box mb-0 overflow-hidden">
                                            <div class="box-body">
                                                <a href="javascript:void(0);" class="mx-auto my-3"><img class="mx-auto" src="<?php echo e(asset('build/assets/img/files/9.png')); ?>" alt="img"></a>
                                            </div>
                                            <div class="box-footer bg-transparent">
                                                <div class="flex justify-between">
                                                <div><p class="text-sm">projects.doc</p></div>
                                                <div class="swiper-text"><p class="text-sm">30MB</p></div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="box mb-0 overflow-hidden">
                                            <div class="box-body">
                                                <a href="javascript:void(0);" class="mx-auto my-3"><img class="mx-auto" src="<?php echo e(asset('build/assets/img/files/2.png')); ?>" alt="img"></a>
                                            </div>
                                            <div class="box-footer bg-transparent">
                                                <div class="flex justify-between">
                                                <div><p class="text-sm">projects.pdf</p></div>
                                                <div class="swiper-text"><p class="text-sm">30MB</p></div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="box mb-0 overflow-hidden">
                                            <div class="box-body">
                                                <a href="javascript:void(0);" class="mx-auto my-3"><img class="mx-auto" src="<?php echo e(asset('build/assets/img/files/3.png')); ?>" alt="img"></a>
                                            </div>
                                            <div class="box-footer bg-transparent">
                                                <div class="flex justify-between">
                                                <div><p class="text-sm">projects.png</p></div>
                                                <div class="swiper-text"><p class="text-sm">30MB</p></div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="box mb-0 overflow-hidden">
                                            <div class="box-body">
                                                <a href="javascript:void(0);" class="mx-auto my-3"><img class="mx-auto" src="<?php echo e(asset('build/assets/img/files/5.png')); ?>" alt="img"></a>
                                            </div>
                                            <div class="box-footer bg-transparent">
                                                <div class="flex justify-between">
                                                <div><p class="text-sm">projects</p></div>
                                                <div class="swiper-text"><p class="text-sm">30MB</p></div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 xl:col-span-4">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">File Details</h5>
                                </div>
                                <div class="box-body p-0">
                                    <div class="rounded-sm overflow-auto">
                                    <table class="ti-custom-table ti-custom-table-head">
                                        <tbody>
                                        <tr class="divide-x divide-gray-200 dark:divide-white/10">
                                            <td class="font-medium">Type</td>
                                            <td>Jpg File(.jpg)</td>
                                        </tr>

                                        <tr class="divide-x divide-gray-200 dark:divide-white/10">
                                            <td class="font-medium">Location</td>
                                            <td>file/gallery</td>
                                        </tr>

                                        <tr class="divide-x divide-gray-200 dark:divide-white/10">
                                            <td class="font-medium">Size</td>
                                            <td>909KB</td>
                                        </tr>

                                        <tr class="divide-x divide-gray-200 dark:divide-white/10">
                                            <td class="font-medium">Created Date</td>
                                            <td>1-10-2022</td>
                                        </tr>

                                        <tr class="divide-x divide-gray-200 dark:divide-white/10">
                                            <td class="font-medium">Modified Date</td>
                                            <td>12-10-2022</td>
                                        </tr>

                                        <tr class="divide-x divide-gray-200 dark:divide-white/10">
                                            <td class="font-medium">Dimensions</td>
                                            <td>7360 * 4912</td>
                                        </tr>

                                        <tr class="divide-x divide-gray-200 dark:divide-white/10">
                                            <td class="font-medium">File Location</td>
                                            <td>Device/Storage/Archives/AMB-2012.zip</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                                </div>
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">File Description</h5>
                                </div>
                                <div class="box-body">
                                    <p class="mb-3">
                                    This file contains 3 folder Synto.main &amp; Synto.premium &amp; Synto.featured and 42 images and layout styles are added in this update.
                                    </p>
                                    <h5 class="font-semibold text-slate-700 dark:text-white text-sm">Shared With :-</h5>
                                    <div class="flex -space-x-2 rtl:space-x-reverse mt-2 overflow-auto">
                                        <img class="avatar avatar-sm rounded-full" src="<?php echo e(asset('build/assets/img/users/1.jpg')); ?>" alt="Image Description">
                                        <img class="avatar avatar-sm rounded-full" src="<?php echo e(asset('build/assets/img/users/4.jpg')); ?>" alt="Image Description">
                                        <img class="avatar avatar-sm rounded-full" src="<?php echo e(asset('build/assets/img/users/6.jpg')); ?>" alt="Image Description">
                                        <img class="avatar avatar-sm rounded-full" src="<?php echo e(asset('build/assets/img/users/5.jpg')); ?>" alt="Image Description">
                                        <img class="avatar avatar-sm rounded-full" src="<?php echo e(asset('build/assets/img/users/7.jpg')); ?>" alt="Image Description">
                                        <img class="avatar avatar-sm rounded-full" src="<?php echo e(asset('build/assets/img/users/2.jpg')); ?>" alt="Image Description">
                                        <img class="avatar avatar-sm rounded-full" src="<?php echo e(asset('build/assets/img/users/9.jpg')); ?>" alt="Image Description">
                                        <span class="inline-flex items-center justify-center h-[2.375rem] w-[2.375rem] rounded-full bg-gray-100 border-2 border-gray-200 dark:bg-black/20 dark:border-white/10">
                                        <span class="font-medium text-gray-500 leading-none dark:text-white/70">9+</span>
                                        </span>
                                    </div>
                                </div>
                                </div>
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Recent Files</h5>
                                </div>
                                <div class="box-body">
                                    <div class="relative">
                                    <div class="sm:grid grid-cols-12 gap-6 sm:space-y-0 space-y-6">
                                        <div class="col-span-12 sm:col-span-4">
                                            <div class="inner">
                                                <a href="<?php echo e(asset('build/assets/img/gallery/1.jpg')); ?>" class="gallery">
                                                    <img src="<?php echo e(asset('build/assets/img/gallery/1.jpg')); ?>" alt="image" class="w-full" >
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-span-12 sm:col-span-4">
                                            <div class="inner">
                                                <a href="<?php echo e(asset('build/assets/img/gallery/2.jpg')); ?>" class="gallery">
                                                    <img src="<?php echo e(asset('build/assets/img/gallery/2.jpg')); ?>" alt="image" class="w-full" >
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-span-12 sm:col-span-4">
                                            <div class="inner">
                                                <a href="<?php echo e(asset('build/assets/img/gallery/3.jpg')); ?>" class="gallery">
                                                    <img src="<?php echo e(asset('build/assets/img/gallery/3.jpg')); ?>" alt="image" class="w-full" >
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-span-12 sm:col-span-4">
                                            <div class="inner">
                                                <a href="<?php echo e(asset('build/assets/img/gallery/4.jpg')); ?>" class="gallery">
                                                    <img src="<?php echo e(asset('build/assets/img/gallery/4.jpg')); ?>" alt="image" class="w-full" >
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-span-12 sm:col-span-4">
                                            <div class="inner">
                                                <a href="<?php echo e(asset('build/assets/img/gallery/5.jpg')); ?>" class="gallery">
                                                    <img src="<?php echo e(asset('build/assets/img/gallery/5.jpg')); ?>" alt="image" class="w-full" >
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-span-12 sm:col-span-4">
                                            <div class="inner">
                                                <a href="<?php echo e(asset('build/assets/img/gallery/6.jpg')); ?>" class="gallery">
                                                    <img src="<?php echo e(asset('build/assets/img/gallery/6.jpg')); ?>" alt="image" class="w-full" >
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-span-12 sm:col-span-4">
                                            <div class="inner">
                                                <a href="<?php echo e(asset('build/assets/img/gallery/7.jpg')); ?>" class="gallery">
                                                    <img src="<?php echo e(asset('build/assets/img/gallery/7.jpg')); ?>" alt="image" class="w-full" >
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-span-12 sm:col-span-4">
                                            <div class="inner">
                                                <a href="<?php echo e(asset('build/assets/img/gallery/8.jpg')); ?>" class="gallery">
                                                    <img src="<?php echo e(asset('build/assets/img/gallery/8.jpg')); ?>" alt="image" class="w-full" >
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-span-12 sm:col-span-4">
                                            <div class="inner">
                                                <a href="<?php echo e(asset('build/assets/img/gallery/9.jpg')); ?>" class="gallery">
                                                    <img src="<?php echo e(asset('build/assets/img/gallery/9.jpg')); ?>" alt="image" class="w-full" >
                                                </a>
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

        <!-- GLIGHTBOX JS -->
        <script src="<?php echo e(asset('build/assets/libs/glightbox/js/glightbox.min.js')); ?>"></script>

        <!-- FILE-DETAILS JS -->
        <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/file-details.js'); ?>
        

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\laravel\vite\synto\synto\resources\views/pages/file-details.blade.php ENDPATH**/ ?>