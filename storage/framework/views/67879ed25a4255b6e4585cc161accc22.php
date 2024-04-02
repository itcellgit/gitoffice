<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

                    <div class="content">

                        <!-- Start::main-content -->
                        <div class="main-content">

                            <!-- Page Header -->
                            <div class="block justify-between page-header sm:flex">
                                <div>
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Invoice Details</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                    <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Pages
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                    </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        Invoice Details
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-6 lg:max-w-4xl mx-auto">
                                <div class="col-span-12">
                                <div class="box">
                                    <div class="box-body">
                                        <div class="flex flex-col lg:flex-row justify-between mb-5 space-y-4">
                                            <div>
                                                <div class="mb-2">
                                                    <img src="<?php echo e(asset('build/assets/img/brand-logos/desktop-logo.png')); ?>" alt="logo" class="flex dark:hidden">
                                                    <img src="<?php echo e(asset('build/assets/img/brand-logos/desktop-dark.png')); ?>" alt="logo" class="hidden dark:flex">
                                                </div>
                                                <div class="mt-1">Cecilia Chapman</div>
                                                <div class="mt-1">P.O. Box 283 8562 Fusce Rd., 20620</div>
                                                <div class="mt-1">ypurdomain@example.com</div>
                                            </div>
                                            <div class="text-end">
                                                <h3 class="text-2xl text-primary uppercase font-semibold">Invoice</h3>
                                                <div class="mt-1"><span class="font-bold"> #INV-0033970</span></div>
                                                <div class="mt-1">Created Date: <span class="font-bold"> September 28 2022</span></div>
                                                <div class="mt-1">Due Date:<span class="font-bold"> September 28 2022</span></div>
                                            </div>
                                        </div>
                                        <hr class="pb-5 dark:border-t-white/10">
                                        <div class="flex flex-col lg:flex-row justify-between mb-5 space-y-4">
                                            <div class="lg:col-span-6 col-span-12">
                                                <h3 class="font-semibold text-xl">Billed To :</h3>
                                                <address class="not-italic">
                                                    Cecilia Chapman<br>
                                                    P.O. Box 283 8562 Fusce Rd., 20620<br>
                                                    ypurdomain@example.com
                                                </address>
                                            </div>
                                            <div class="lg:col-span-6 col-span-12 text-end">
                                                <h3 class="font-semibold text-xl">Shipped To :</h3>
                                                <address class="not-italic">
                                                    Cecilia Chapman<br>
                                                    P.O. Box 283 8562 Fusce Rd., 20620<br>
                                                    ypurdomain@example.com
                                                </address>
                                            </div>
                                        </div>
                                        <div class="py-5">
                                            <div class="overflow-auto">
                                                <table class="ti-custom-table !border dark:border-white/10">
                                                <thead class="bg-gray-100 dark:bg-black/20 overflow-hidden">
                                                    <tr>
                                                    <th scope="col" class="">S.No</th>
                                                    <th scope="col" class="">Product</th>
                                                    <th scope="col" class="">Quantity</th>
                                                    <th scope="col" class="">Unit</th>
                                                    <th scope="col" class="!text-end">Amount</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="">
                                                    <tr>
                                                        <td class="">1</td>
                                                        <td class="">
                                                            <span class="font-bold">Logo Creation</span>
                                                            <p class="text-gray-500 dark:text-white/70">PhotoShop</p>
                                                        </td>
                                                        <td class="font-semibold ">2</td>
                                                        <td class="">$60.00</td>
                                                        <td class="text-end font-medium">$120.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="">2</td>
                                                        <td class="">
                                                            <span class="font-bold">Online Store Design &amp; Development</span>
                                                            <p class="text-gray-500 dark:text-white/70">Html</p>
                                                        </td>
                                                        <td class="font-semibold ">3</td>
                                                        <td class="">$80.00</td>
                                                        <td class="text-end font-medium">$240.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="">3</td>
                                                        <td class="">
                                                            <span class="font-bold">App Design</span>
                                                            <p class="text-gray-500 dark:text-white/70">Android Studio</p>
                                                        </td>
                                                        <td class="font-semibold ">1</td>
                                                        <td class="">$40.00</td>
                                                        <td class="text-end font-medium">$40.00</td>
                                                    </tr>
                                                    <tr class="!border-b-0">
                                                        <td colspan="3" class="ltr:border-r rtl:border-l border-gray-200 dark:border-white/10">
                                                            <h3 class="font-bold text-xl">Invoice Payment Method</h3>
                                                        </td>
                                                        <td class="">Sub-Total</td>
                                                        <td class="!text-end">$700.00</td>
                                                    </tr>
                                                    <tr class="!border-b-0 !border-t-0">
                                                        <td colspan="3" class="ltr:border-r rtl:border-l border-gray-200 dark:border-white/10">Account :<span class="font-bold"> 000252522525253625</span> </td>
                                                        <td class="">Tax</td>
                                                        <td class="!text-end">3%</td>
                                                    </tr>
                                                    <tr class="!border-b-0 !border-t-0">
                                                        <td colspan="3" class="ltr:border-r rtl:border-l border-gray-200 dark:border-white/10">Account Name : <span class="font-bold"> Synto</span></td>
                                                        <td class="">Discount</td>
                                                        <td class="!text-end">20%</td>
                                                    </tr>
                                                    <tr  class="!border-t-0">
                                                        <td colspan="3" class="ltr:border-r rtl:border-l border-gray-200 dark:border-white/10">Bank Details :<span class="font-bold"> Lorem Ipsum</span> </td>
                                                        <td class="">Total</td>
                                                        <td class="!text-end">$900.2</td>
                                                    </tr>
                                                </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="sm:grid grid-cols-12 gap-6 pb-5 space-y-5">
                                            <div class="lg:col-span-6 col-span-12">
                                                <h3 class="text-xl fon-bold mb-2">Terms And Conditions</h3>
                                                <p class="text-gray-500 dark:text-white/70 font-light text-sm">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                            </div>
                                            <div class="lg:col-span-6 col-span-12 text-end my-auto">
                                                <div class="text-3xl text-primary">Synto</div>
                                                <h3 class="font-semibold">Signature</h3>
                                            </div>
                                        </div>
                                        <hr class="pb-5 dark:border-t-white/10">
                                        <div class="flex justify-end">
                                            <button type="button" class="w-20 !p-1 ti-btn ti-btn-primary" onclick="location.href='javascript:window.print()'"> Print</button>
                                            <button type="button" class="w-20 !p-1 ti-btn ti-btn-secondary">Save</button>
                                            <button type="button" class="w-20 !p-1 ti-btn ti-btn-danger">Cancel</button>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\my-projects\laravel\vite\synto\synto-laravel\synto\resources\views/pages/invoice.blade.php ENDPATH**/ ?>