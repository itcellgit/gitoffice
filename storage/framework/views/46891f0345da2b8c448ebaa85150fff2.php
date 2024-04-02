<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

                    <div class="content">

                        <!-- Start::main-content -->
                        <div class="main-content">

                            <!-- Page Header -->
                            <div class="block justify-between page-header sm:flex">
                                <div>
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Form Elements</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                    <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Forms
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                    </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        Form Elements
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-6">
                                <div class="col-span-12 lg:col-span-4">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Basic Inputs</h5>
                                        </div>
                                        <div class="box-body">
                                            <div class="max-w-sm space-y-3">
                                                <input type="text" class="ti-form-input">
                                                <textarea class="ti-form-input" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-4">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Inputs With Placeholder</h5>
                                        </div>
                                        <div class="box-body">
                                            <div class="max-w-sm space-y-3">
                                                <input type="text" class="ti-form-input" placeholder="This is placeholder">
                                                <textarea class="ti-form-input" rows="3"
                                                    placeholder="This is a textarea placeholder"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-4">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Disabled Inputs</h5>
                                        </div>
                                        <div class="box-body">
                                            <div class="max-w-sm space-y-3">
                                                <input type="text" class="opacity-70 pointer-events-none ti-form-input"
                                                    placeholder="Disabled input" disabled>
                                                <input type="text" class="opacity-70 pointer-events-none ti-form-input"
                                                    placeholder="Disabled readonly input" disabled readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-1 -->

                            <!-- Start::row-2 -->
                            <div class="grid grid-cols-12 gap-6">
                                <div class="col-span-12 lg:col-span-4">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Pilled Inputs</h5>
                                        </div>
                                        <div class="box-body">
                                            <input type="text" class="ti-form-input px-5 rounded-full" placeholder="Input text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-4">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Readonly Inputs</h5>
                                        </div>
                                        <div class="box-body">
                                            <input type="text" class="ti-form-input" placeholder="Readonly input" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-4">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Input With Hidden Label</h5>
                                        </div>
                                        <div class="box-body">
                                            <label for="input-email-label" class="sr-only">Email</label>
                                            <input type="email" id="input-email-label" class="ti-form-input"
                                                placeholder="you@site.com">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-4">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Input With Label</h5>
                                        </div>
                                        <div class="box-body">
                                            <label for="input-label"
                                                class="ti-form-label">Email</label>
                                            <input type="email" id="input-label" class="ti-form-input" placeholder="you@site.com">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-4">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Input With Helper text</h5>
                                        </div>
                                        <div class="box-body">
                                            <label for="input-label-with-helper-text"
                                                class="ti-form-label">Email</label>
                                            <input type="email" id="input-label-with-helper-text" class="ti-form-input"
                                                placeholder="you@site.com" aria-describedby="hs-input-helper-text">
                                            <p class="text-sm text-gray-500 mt-2 dark:text-white/70" id="hs-input-helper-text">We'll never share your
                                                details.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-4">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Input With Inline helper text</h5>
                                        </div>
                                        <div class="box-body">
                                            <div class="sm:inline-flex sm:items-center space-y-2 sm:space-y-0 sm:space-x-3 w-full rtl:space-x-reverse">
                                                <label for="inline-input-label-with-helper-text"
                                                    class="ti-form-label">Email</label>
                                                <input type="email" id="inline-input-label-with-helper-text"
                                                    class="ti-form-input"
                                                    placeholder="you@site.com" aria-describedby="hs-inline-input-helper-text">
                                                <p class="text-sm text-gray-500 mt-2 dark:text-white/70" id="hs-inline-input-helper-text">We'll never
                                                    share your details.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-4">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Input With Corner Hint</h5>
                                        </div>
                                        <div class="box-body">
                                            <div class="flex justify-between items-center">
                                                <label for="with-corner-hint" class="ti-form-label">Email</label>
                                                <span class="block  text-sm text-gray-500 mb-2 dark:text-white/70">Optional</span>
                                            </div>
                                            <input type="email" id="with-corner-hint" class="ti-form-input" placeholder="you@site.com">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-4">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Input Sizes</h5>
                                        </div>
                                        <div class="box-body">
                                            <div class="max-w-sm space-y-3">
                                                <input type="text" class="py-2 px-3 ti-form-input" placeholder="Small size">
                                                <input type="text" class="ti-form-input" placeholder="Default size">
                                                <input type="text" class="ti-form-input sm:p-5" placeholder="Large size">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-4">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Input Validation states</h5>
                                        </div>
                                        <div class="box-body">
                                            <div class="max-w-sm space-y-3">
                                                <div>
                                                    <label for="hs-validation-name-error" class="ti-form-label">Email</label>
                                                    <div class="relative">
                                                    <input type="text" id="hs-validation-name-error" name="hs-validation-name-error" class="ti-form-input !border-danger focus:border-danger focus:ring-danger" required aria-describedby="hs-validation-name-error-helper">
                                                    <div class="absolute inset-y-0 ltr:right-0 rtl:left-0 flex items-center pointer-events-none ltr:pr-3 rtl:pl-3">
                                                        <svg class="h-5 w-5 text-danger" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                                        </svg>
                                                    </div>
                                                    </div>
                                                    <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper">Please enter a valid email address.</p>
                                                </div>

                                                <div>
                                                    <label for="hs-validation-name-success" class="ti-form-label">Email</label>
                                                    <div class="relative">
                                                    <input type="text" id="hs-validation-name-success" name="hs-validation-name-success" class="ti-form-input !border-success focus:border-success focus:ring-success" required aria-describedby="hs-validation-name-success-helper">
                                                    <div class="absolute inset-y-0 ltr:right-0 rtl:left-0 flex items-center pointer-events-none ltr:pr-3 rtl:pl-3">
                                                        <svg class="h-5 w-5 text-success" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                                                        </svg>
                                                    </div>
                                                    </div>
                                                    <p class="text-sm text-green-600 mt-2" id="hs-validation-name-success-helper">Looks good!</p>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\laravel\vite\synto\synto\resources\views/pages/form-elements.blade.php ENDPATH**/ ?>