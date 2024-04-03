<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom-body'); ?>
<body class="authentication-page">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

            <main id="content" class="w-full max-w-md mx-auto p-6">
                <a href="<?php echo e(url('index')); ?>" class="header-logo">
                    <img src="<?php echo e(asset('build/assets/img/brand-logos/desktop-logo.png')); ?>" alt="logo" class="mx-auto block dark:hidden">
                    <img src="<?php echo e(asset('build/assets/img/brand-logos/desktop-dark.png')); ?>" alt="logo" class="mx-auto hidden dark:block">
                </a>
                <div class="mt-7 bg-white rounded-sm shadow-sm dark:bg-bgdark">
                    <div class="p-4 sm:p-7">
                        <div class="text-center">
                            <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Two Step Verification</h1>
                            <p class="mt-3 text-sm text-gray-600 dark:text-white/70">
                                Please enter the 4 digit code sent to ********25
                            </p>
                        </div>

                        <div class="mt-5">
                            <!-- Form -->
                            <form>
                                <div class="grid gap-y-4">
                                    <div class="grid grid-cols-4 gap-4 max-w-[15rem] mx-auto">
                                        <!-- Form Group -->
                                        <input type="text"
                                            class="text-center py-2 px-3 block w-full border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70"
                                            required id="one" maxlength="1" onkeyup="clickEvent(this,'two')">
                                        <!-- End Form Group -->
                                        <!-- Form Group -->
                                        <input type="text"
                                            class="text-center py-2 px-3 block w-full border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70"
                                            required id="two" maxlength="1" onkeyup="clickEvent(this,'three')">
                                        <!-- End Form Group -->
                                        <!-- Form Group -->
                                        <input type="text"
                                            class="text-center py-2 px-3 block w-full border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70"
                                            required id="three" maxlength="1" onkeyup="clickEvent(this,'four')">
                                        <!-- End Form Group -->
                                        <!-- Form Group -->
                                        <input type="text"
                                            class="text-center py-2 px-3 block w-full border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70"
                                            required id="four" maxlength="1">
                                        <!-- End Form Group -->
                                    </div>
                                    <button type="submit" class="mt-4 w-full py-2 px-3 inline-flex justify-center items-center gap-2 rounded-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:outline-none focus:ring-0 focus:ring-primary focus:ring-offset-0 transition-all text-sm dark:focus:ring-offset-white/10">Confirm</button>

                                    <p class="text-center text-xs text-gray-600 dark:text-white/70">
                                        Didn't received any code ?
                                        <a class="text-primary decoration-2 hover:underline font-medium" href="<?php echo e(url('forgot')); ?>">
                                            Resend
                                        </a>
                                    </p>
                                </div>
                            </form>
                            <!-- End Form -->
                        </div>
                    </div>
                </div>
            </main>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

        <!-- INTERNAL TWO STEP VERIFICATION JS -->
        <script src="<?php echo e(asset('build/assets/two-step-verification.js')); ?>"></script>
        

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.custom-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\laravel\vite\synto\synto\resources\views/pages/verfication.blade.php ENDPATH**/ ?>