<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

                    <div class="content">

                        <!-- Start::main-content -->
                        <div class="main-content">

                            <!-- Page Header -->
                            <div class="block justify-between page-header sm:flex">
                                <div>
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Order Details</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                        <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Pages
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                        </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        Order Details
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-6">
                            <div class="col-span-12 lg:col-span-12">
                                <div class="box">
                                <div class="box-header">
                                    <div class="md:flex flex-row justify-between space-y-2 md:space-y-0">
                                    <div class="flex justify-start item-start space-y-2 flex-col">
                                        <h1 class="text-base font-semibold text-gray-800 dark:text-white">Order : #52225</h1>
                                        <p class="text-sm font-medium text-gray-500 dark:text-white/70 ">Order-Placement : 21st Nov 2022 at
                                        5:20 PM</p>
                                    </div>
                                    <a href="<?php echo e(url('invoice')); ?>" class="ti-btn ti-btn-primary"><i class="ri ri-download-2-fill ltr:mr-1 rtl:ml-1"></i>
                                        Invoice</a>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="sm:grid grid-cols-12 gap-6 space-y-6 sm:space-y-0">
                                    <div class="col-span-12 lg:col-span-6 xxl:!col-span-3">
                                        <div class="box shadow-none border-0 mb-0">
                                        <div class="box-body p-0 space-y-2">
                                            <h5 class="text-base font-semibold text-gray-800 dark:text-white">Billing Address</h5>
                                            <p class="text-gray-500 dark:text-white/70 text-sm">Sed rebum., RD. 12,NW, Dolor et., Gubergren
                                            </p>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 lg:col-span-6 xxl:!col-span-3">
                                        <div class="box shadow-none border-0 mb-0">
                                        <div class="box-body p-0 space-y-2">
                                            <h5 class="text-base font-semibold text-gray-800 dark:text-white">Shipping Address</h5>
                                            <p class="text-gray-500 dark:text-white/70 text-sm">Sed rebum., RD. 12,NW, Dolor et., Gubergren
                                            </p>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 lg:col-span-6 xxl:!col-span-3">
                                        <div class="box shadow-none border-0 mb-0">
                                        <div class="box-body p-0 space-y-2">
                                            <h5 class="text-base font-semibold text-gray-800 dark:text-white">Shipping Method</h5>
                                            <p class="text-gray-500 dark:text-white/70 text-sm">Free Delivery - Takes 4 to 5 working days to
                                            delivery</p>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 lg:col-span-6 xxl:!col-span-3">
                                        <div class="box shadow-none border-0 mb-0">
                                        <div class="box-body p-0 space-y-2">
                                            <h5 class="text-base font-semibold text-gray-800 dark:text-white">Payment Method</h5>
                                            <div class="flex flex-col">
                                            <div
                                                class="flex w-full rounded-sm text-base font-semibold focus:ring-primary dark:bg-bgdark dark:text-white/70">
                                                <img src="<?php echo e(asset('build/assets/img/payment-cards/5.png')); ?>" class="avatar !ring-transparent" alt="Image Description">
                                                <div>
                                                <p class="text-sm ltr:ml-3 rtl:mr-3 dark:text-white my-auto">card : <span
                                                    class="text-sm font-medium ltr:ml-3 rtl:mr-3 text-gray-500 dark:text-white my-auto">Master
                                                    Card</span></p>
                                                <p class="text-sm ltr:ml-3 rtl:mr-3 dark:text-white my-auto">Card ending with : <span
                                                    class="text-sm font-medium ltr:ml-3 rtl:mr-3 text-gray-500 dark:text-white my-auto">1253</span></p>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="box-body pt-0">
                                    <div class="table-bordered whitespace-nowrap rounded-sm overflow-auto">
                                    <table class="ti-custom-table ti-custom-table-head">
                                        <thead class="bg-gray-100 dark:bg-black/20">
                                        <tr>
                                            <th scope="col" class="dark:text-white/70">Product Details</th>
                                            <th scope="col" class="dark:text-white/70">Tracking No</th>
                                            <th scope="col" class="dark:text-white/70">Status</th>
                                            <th scope="col" class="dark:text-white/70">Expected Delivery</th>
                                            <th scope="col" class="dark:text-white/70">Price (Each) </th>
                                            <th scope="col" class="dark:text-white/70">QNTY</th>
                                            <th scope="col" class="dark:text-white/70">Total</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                            <div class="flex space-x-3 rtl:space-x-reverse w-[290px]">
                                                <img class="avatar avatar-lg rounded-sm bg-gray-100 dark:bg-black/20 p-1"
                                                src="<?php echo e(asset('build/assets/img/ecommerce/products/1.png')); ?>" alt="Image Description">
                                                <div>
                                                <p class="block text-sm font-semibold text-gray-800 dark:text-white truncate">Black Heals For Women</p>
                                                <span class="block text-sm text-gray-600 dark:text-white/70">Brown Color</span>
                                                <span class="block text-sm text-gray-600 dark:text-white/70">Size : M</span>
                                                </div>
                                            </div>
                                            </td>
                                            <td><a href="javascript:void(0);">#1218153635</a></td>
                                            <td><a class="badge bg-red-100 text-red-800" href="javascript:void(0);">Packed</a></td>
                                            <td>30 Nov 2022</td>
                                            <td>$999</td>
                                            <td>1</td>
                                            <td>$699</td>
                                        </tr>
                                        <tr>
                                            <td>
                                            <div class="flex space-x-3 rtl:space-x-reverse w-[290px]">
                                                <img class="avatar avatar-lg rounded-sm bg-gray-100 dark:bg-black/20 p-1"
                                                src="<?php echo e(asset('build/assets/img/ecommerce/products/7.png')); ?>" alt="Image Description">
                                                <div>
                                                <p class="block text-sm font-semibold text-gray-800 dark:text-white truncate">Sun Glasses</p>
                                                <span class="block text-sm text-gray-600 dark:text-white/70">White Color</span>
                                                <span class="block text-sm text-gray-600 dark:text-white/70">Adjustable</span>
                                                </div>
                                            </div>
                                            </td>
                                            <td><a href="javascript:void(0);">#1218153635</a></td>
                                            <td><a class="badge bg-sky-100 text-sky-800" href="javascript:void(0);">Shipped</a></td>
                                            <td>30 Nov 2022</td>
                                            <td>$699</td>
                                            <td>2</td>
                                            <td>$1,198</td>
                                        </tr>
                                        <tr>
                                            <td>
                                            <div class="flex space-x-3 rtl:space-x-reverse w-[290px]">
                                                <img class="avatar avatar-lg rounded-sm bg-gray-100 dark:bg-black/20 p-1"
                                                src="<?php echo e(asset('build/assets/img/ecommerce/products/10.png')); ?>" alt="Image Description">
                                                <div>
                                                <p class="block text-sm font-semibold text-gray-800 dark:text-white truncate">Leather
                                                    Wallet For Grils</p>
                                                <span class="block text-sm text-gray-600 dark:text-white/70">White Color</span>
                                                </div>
                                            </div>
                                            </td>
                                            <td><a href="javascript:void(0);">#1218153635</a></td>
                                            <td><a class="badge bg-yellow-100 text-yellow-800" href="javascript:void(0);">Out for
                                                Delivery</a></td>
                                            <td>30 Nov 2022</td>
                                            <td>$150</td>
                                            <td>5</td>
                                            <td>$500</td>
                                        </tr>
                                        <tr>
                                            <td>
                                            <div class="flex space-x-3 rtl:space-x-reverse w-[290px]">
                                                <img class="avatar avatar-lg rounded-sm bg-gray-100 dark:bg-black/20 p-1"
                                                src="<?php echo e(asset('build/assets/img/ecommerce/products/5.png')); ?>" alt="Image Description">
                                                <div>
                                                <p class="block text-sm font-semibold text-gray-800 dark:text-white truncate">Dolor Rose Frangrance Perfume</p>
                                                <span class="block text-sm text-gray-600 dark:text-white/70">Jasmine Fragrance</span>
                                                <span class="block text-sm text-gray-600 dark:text-white/70">500 ML</span>
                                                </div>
                                            </div>
                                            </td>
                                            <td><a href="javascript:void(0);">#1218153635</a></td>
                                            <td><a class="badge bg-green-100 text-green-800" href="javascript:void(0);">Delivered</a></td>
                                            <td>30 Nov 2022</td>
                                            <td>$299</td>
                                            <td>1</td>
                                            <td>$199</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-1 -->

                            <!-- Start::row-2 -->
                            <div class="grid grid-cols-12 gap-6">
                            <div class="col-span-12 xxl:!col-span-4 md:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <div class="flex justify-between">
                                    <h5 class="box-title">Order Tracking</h5>
                                    <p class="font-semibold mb-0 text-sm">#152632235822</p>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="order-track">
                                    <div class="hs-accordion-group" data-hs-accordion-always-open>
                                        <div class="hs-accordion active" id="order-heading-one">
                                        <a href="javascript:void(0);"
                                            class="hs-accordion-toggle group pb-3 inline-flex items-center gap-x-3 w-full font-semibold text-start transition"
                                            aria-controls="order-collapse-one">
                                            <div class="flex w-full mb-0">
                                            <div class="ltr:mr-2 rtl:ml-2">
                                                <span class="text-danger">
                                                <i class="ri ri-shopping-bag-2-line text-sm"></i>
                                                </span>
                                            </div>
                                            <div class="sm:flex w-full justify-between">
                                                <p class="font-semibold mb-0 text-sm">Order Placed</p>
                                                <p class="text-xs text-gray-500 dark:text-white/70">Nov 10, 2022</p>
                                            </div>
                                            </div>
                                        </a>
                                        <div id="order-collapse-one"
                                            class="space-y-3 hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                            aria-labelledby="order-heading-one">
                                            <div class="text-xs">
                                            <p class="mb-0">Order placed successfully by <a href="javascript:void(0);"
                                                class="font-semibold text-primary">Json Taylor</a></p>
                                            <span class="text-gray-500 dark:text-white/70">Nov 10, 2022, 15:36</span>
                                            </div>
                                            <div class="text-xs">
                                            <p class="mb-0">Your Order is ready to shipped from seller</p>
                                            <span class="text-gray-500 dark:text-white/70">Nov 11, 2022, 04:52</span>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="hs-accordion active" id="order-heading-two">
                                        <a href="javascript:void(0);"
                                            class="hs-accordion-toggle group pb-3 inline-flex items-center gap-x-3 w-full font-semibold text-start transition"
                                            aria-controls="order-collapse-two">
                                            <div class="flex w-full mb-0">
                                            <div class="ltr:mr-2 rtl:ml-2">
                                                <span class="text-info">
                                                <i class="ri ri-gift-2-line text-sm"></i>
                                                </span>
                                            </div>
                                            <div class="sm:flex w-full justify-between">
                                                <p class="font-semibold mb-0 text-sm ">Order Packed</p>
                                                <p class="text-xs text-gray-500 dark:text-white/70">Nov 10, 2022</p>
                                            </div>
                                            </div>
                                        </a>
                                        <div id="order-collapse-two"
                                            class="space-y-3 hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                            aria-labelledby="order-heading-two">
                                            <div class="text-xs">
                                            <p class="mb-0">Order placed successfully packed by courier Patner</p>
                                            <span class="text-gray-500 dark:text-white/70">Nov 12, 2022, 5:40</span>
                                            </div>
                                            <div class="text-xs">
                                            <p class="mb-0">Your Order is ready to ship from courier Patner</p>
                                            <span class="text-gray-500 dark:text-white/70">Nov 12, 2022, 16:52</span>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="hs-accordion" id="order-heading-three">
                                        <a href="javascript:void(0);"
                                            class="group pb-3 inline-flex items-center gap-x-3 w-full font-semibold text-start transition">
                                            <div class="flex w-full mb-0">
                                            <div class="ltr:mr-2 rtl:ml-2">
                                                <span class="text-primary">
                                                <i class="ri ri-truck-line text-sm"></i>
                                                </span>
                                            </div>
                                            <div class="sm:flex w-full justify-between">
                                                <p class="font-semibold mb-0 text-sm ">Order Shipped</p>
                                                <p class="text-xs text-gray-500 dark:text-white/70">Nov 13, 2022</p>
                                            </div>
                                            </div>
                                        </a>
                                        </div>
                                        <div class="hs-accordion" id="order-heading-four">
                                        <a href="javascript:void(0);"
                                            class="group pb-3 inline-flex items-center gap-x-3 w-full font-semibold text-start transition">
                                            <div class="flex w-full mb-0">
                                            <div class="ltr:mr-2 rtl:ml-2">
                                                <span class="text-primary">
                                                <i class="ri ri-logout-box-r-line text-sm"></i>
                                                </span>
                                            </div>
                                            <div class="sm:flex w-full justify-between">
                                                <p class="font-semibold mb-0 text-sm ">Order Is Out For Delivery</p>
                                                <p class="text-xs text-gray-500 dark:text-white/70">Nov 14, 2022</p>
                                            </div>
                                            </div>
                                        </a>
                                        </div>
                                        <div class="hs-accordion" id="order-heading-five">
                                        <a href="javascript:void(0);" class="group inline-flex items-center gap-x-3 w-full font-semibold text-start transition">
                                            <div class="flex w-full mb-0">
                                            <div class="ltr:mr-2 rtl:ml-2">
                                                <span class="text-primary">
                                                <i class="ri ri-hand-heart-line text-sm"></i>
                                                </span>
                                            </div>
                                            <div class="sm:flex w-full justify-between">
                                                <p class="font-semibold mb-0 text-sm ">Order Is Delivered</p>
                                                <p class="text-xs text-gray-500 dark:text-white/70">Nov 15, 2022</p>
                                            </div>
                                            </div>
                                        </a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 xxl:!col-span-5 md:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Paymeny Summary</h5>
                                </div>
                                <div class="box-body">
                                    <ul class="flex flex-col">
                                    <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white">
                                        <div class="flex justify-between w-full">
                                        Total Items
                                        <span class="">4</span>
                                        </div>
                                    </li>
                                    <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white">
                                        <div class="flex justify-between w-full">
                                        SubTotal
                                        <span class="">$1100</span>
                                        </div>
                                    </li>
                                    <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white">
                                        <div class="flex justify-between w-full">
                                        Other Charges
                                        <span class="">$200</span>
                                        </div>
                                    </li>
                                    <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white">
                                        <div class="flex justify-between w-full">
                                        Shipping Charges
                                        <span class="text-success text-end">-0% (Free)</span>
                                        </div>
                                    </li>
                                    <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white">
                                        <div class="flex justify-between w-full">
                                        Coupon Discount
                                        <span class="text-success">-5%</span>
                                        </div>
                                    </li>
                                    <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white">
                                        <div class="flex justify-between w-full text-xl font-semibold">
                                        Total
                                        <span class="">$1500</span>
                                        </div>
                                    </li>
                                    </ul>
                                </div>
                                <div class="box-footer">
                                    <a href="javascript:void(0);" class="ti-btn ti-btn-primary w-full p-2">Cancel Order</a>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 xxl:!col-span-3">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">
                                    Customer Details
                                    </h5>
                                </div>
                                <div class="box-body">
                                    <div class="flex align-items-center space-x-3 rtl:space-x-reverse">
                                    <div class="flex-auto my-auto space-y-2">
                                        <div class="space-x-3">
                                        <span class="text-sm font-bold">Name :</span>
                                        <span class="text-sm text-gray-500 dark:text-white/70">Json Taylor</span>
                                        </div>
                                        <div class="space-x-3">
                                        <span class="text-sm font-bold">Email :</span>
                                        <span class="text-sm text-gray-500 dark:text-white/70">jsontaylor2135@gmail.com</span>
                                        </div>
                                        <div class="space-x-3">
                                        <span class="text-sm font-bold">Phone No :</span>
                                        <span class="text-sm text-gray-500 dark:text-white/70">+121 45856956956</span>
                                        </div>
                                        <div class="space-x-3">
                                        <span class="text-sm font-bold">Orders:</span>
                                        <span class="text-sm text-gray-500 dark:text-white/70">15 Previous orders</span>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="box">
                                <div class="box-body space-y-2">
                                    <h5 class="text-base font-semibold text-gray-800 dark:text-white">Rate The Product</h5>
                                    <div id="product-rater"></div>
                                    <textarea class="ti-form-input" rows="3"
                                    placeholder="">Some quick example text to build on the card title and make up the bulk of the card's content.</textarea>
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

        <!-- RATING JS -->
        <script src="<?php echo e(asset('build/assets/libs/rater-js/index.js')); ?>"></script>

        <!-- PRODUCTS JS -->
        <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/order-details.js'); ?>
        

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\my-projects\laravel\vite\synto\synto-laravel\synto\resources\views/pages/order-details.blade.php ENDPATH**/ ?>