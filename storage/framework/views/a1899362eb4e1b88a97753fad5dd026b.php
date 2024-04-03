<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

                    <div class="content">

                        <!-- Start::main-content -->
                        <div class="main-content">

                            <!-- Page Header -->
                            <div class="block justify-between page-header sm:flex">
                                <div>
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Collapse</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                    <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Components
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                    </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        Collapse
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-6">
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Basic Collapse</h5>
                                        </div>
                                        <div class="box-body">
                                            <button type="button"
                                                class="hs-collapse-toggle py-2 px-3 inline-flex justify-center items-center gap-2 rounded-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:outline-none focus:ring-0 focus:ring-primary focus:ring-offset-0 transition-all text-sm dark:focus:ring-offset-white/10"
                                                id="hs-basic-collapse" data-hs-collapse="#hs-basic-collapse-heading">
                                                Collapse
                                            </button>
                                            <div id="hs-basic-collapse-heading"
                                                class="hs-collapse hidden w-full overflow-hidden transition-[height] duration-300"
                                                aria-labelledby="hs-basic-collapse">
                                                <div class="mt-5">
                                                    <p class="text-gray-500 dark:text-white/70">
                                                        This is a collapse body. It is hidden by default, until the collapse plugin
                                                        adds the appropriate classes that we use to style each element. These
                                                        classes control the overall appearance, as well as the showing and hiding
                                                        via CSS transitions.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Show/Hide</h5>
                                        </div>
                                        <div class="box-body">
                                            <p class="text-gray-500 dark:text-white/70">
                                            Preline UI is an open-source set of prebuilt UI components based on the utility-first Tailwind CSS framework.
                                            </p>
                                            <p class="mt-2">
                                            <a class="hs-collapse-toggle inline-flex items-center gap-x-2 text-primary" href="javascript:void(0);" id="hs-show-hide-collapse" data-hs-collapse="#hs-show-hide-collapse-heading">
                                                <span class="hs-collapse-open:hidden">Read more</span>
                                                <span class="hs-collapse-open:block hidden">Read less</span>
                                                <svg class="hs-collapse-open:rotate-180 w-2.5 h-2.5" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                                </svg>
                                            </a>
                                            </p>
                                            <div id="hs-show-hide-collapse-heading" class="hs-collapse hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-show-hide-collapse">
                                            <p class="text-gray-500 dark:text-white/70 mt-5">
                                                This is a collapse body. It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
                                            </p>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\laravel\vite\synto\synto\resources\views/pages/collapse.blade.php ENDPATH**/ ?>