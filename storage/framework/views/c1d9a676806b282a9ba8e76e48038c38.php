<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom-body'); ?>
    <body class="flex h-full !py-0 bg-white dark:bg-bgdark">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

            <div class="grid grid-cols-12 gap-6 w-full">
                <div class="lg:col-span-5 col-span-12 hidden lg:block relative  bg-primary/20">
                    <div class="relative w-full h-full z-[1] p-10">
                        <div class="authentication-page justify-center w-full max-w-7xl mx-auto p-6">
                            <div class="mt-7">
                                <div class="p-6 sm:p-7 space-y-8">
                                    <img src="<?php echo e(asset('build/assets/img/authentication/4.png')); ?>" alt="logo" class="mx-auto xxl:h-[500px]">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-7 col-span-12">
                    <div class="authentication-page w-full">
                        <!-- ========== MAIN CONTENT ========== -->
                        <main id="content"  class="w-full max-w-5xl p-6 ">
                            <div class="mt-7">
                                <div class="p-0 md:p-7">
                                    <div class="text-center">
                                        <h1 class="block text-2xl sm:text-5xl font-bold text-gray-800 dark:text-white">Under Maintenance</h1>
                                        <p class="mt-3 text-sm text-gray-600 dark:text-white/70">
                                            The Site You are looking For is Currently Under Maintenance And it will be back shortly , We will notify you when we are back..!
                                        </p>
                                    </div>

                                    <div class="mt-5 space-y-6">

                                        <!-- Form -->
                                        <div class="">
                                            <div class="grid md:grid-cols-4 gap-4 max-w-xl mx-auto">
                                                <div class="p-5 text-center bg-gray-100 dark:bg-black/20 rounded-sm space-y-5">
                                                    <h4 class="font-semibold text-3xl leading-none">
                                                        365
                                                    </h4>
                                                    <p class="mb-1 text-sm font-semibold text-gray-500 dark:text-white/70">DAYS
                                                    </p>
                                                </div>
                                                <div class="p-5 text-center bg-gray-100 dark:bg-black/20 rounded-sm space-y-5">
                                                    <h4 class="font-semibold text-3xl leading-none">
                                                        24
                                                    </h4>
                                                    <p class="mb-1 text-sm font-semibold text-gray-500 dark:text-white/70">Hours
                                                    </p>
                                                </div>
                                                <div class="p-5 text-center bg-gray-100 dark:bg-black/20 rounded-sm space-y-5">
                                                    <h4 class="font-semibold text-3xl leading-none">
                                                        60
                                                    </h4>
                                                    <p class="mb-1 text-sm font-semibold text-gray-500 dark:text-white/70">
                                                        MINUTES</p>
                                                </div>
                                                <div class="p-5 text-center bg-gray-100 dark:bg-black/20 rounded-sm space-y-5">
                                                    <h4 class="font-semibold text-3xl leading-none">
                                                        60
                                                    </h4>
                                                    <p class="mb-1 text-sm font-semibold text-gray-500 dark:text-white/70">
                                                        SECONDS</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Form -->

                                        <div>
                                            <p class="mb-2 text-center text-sm text-gray-600 dark:text-white/70">
                                            Follow Us
                                            </p>
                                            <div class="flex space-x-1 rtl:space-x-reverse justify-center text-center">
                                                <button aria-label="button" type="button"
                                                    class="m-0 ti-btn ti-btn-soft-primary">
                                                    <i class="ri ri-github-line text-lg leading-none"></i>
                                                </button>
                                                <button aria-label="button" type="button"
                                                    class="m-0 ti-btn ti-btn-soft-primary">
                                                    <i class="ri ri-instagram-line text-lg leading-none"></i>
                                                </button>
                                                <button aria-label="button" type="button"
                                                    class="m-0 ti-btn ti-btn-soft-primary">
                                                    <i class="ri ri-twitter-line text-lg leading-none"></i>
                                                </button>
                                                <button aria-label="button" type="button"
                                                    class="m-0 ti-btn ti-btn-soft-primary">
                                                    <i class="ri ri-linkedin-line text-lg leading-none"></i>
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </main>
                        <!-- ========== END MAIN CONTENT ========== -->
                    </div>
                </div>
            </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.custom-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\my-projects\laravel\vite\synto\synto-laravel\synto\resources\views/pages/maintenance.blade.php ENDPATH**/ ?>