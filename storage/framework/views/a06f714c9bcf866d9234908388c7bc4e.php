<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

                    <div class="content">

                        <!-- Start::main-content -->
                        <div class="main-content">

                            <!-- Page Header -->
                            <div class="block justify-between page-header sm:flex">
                                <div>
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Orders</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                        <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Pages
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                        </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        Orders
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-x-6 gap-y-2 max-w-7xl mx-auto">
                            <div class="col-span-12 lg:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <div class="flex justify-between">
                                    <div class="">
                                        <span class="text-sm font-semibold">Order Id</span>
                                        <span class="block text-xs text-gray-500 dark:text-white/70">#25256</span>
                                    </div>
                                    <div class="">
                                        <span class="fs-14 font-semibold">Ordered Date </span>
                                        <span class="block text-xs text-gray-500 dark:text-white/70">12,November</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="space-y-3">
                                    <div class="sm:flex space-x-3 rtl:space-x-reverse">
                                        <img src="<?php echo e(asset('build/assets/img/ecommerce/products/1.png')); ?>" alt="product" class="avatar w-24 h-24 rounded-sm bg-gray-100 dark:bg-black/20 p-2">
                                        <div class="flex justify-between w-full">
                                        <div class="product-details space-y-1">
                                            <h5 class="text-lg font-semibold">Black Heals For Women</h5>
                                            <p class="font-medium text-sm">Delivery Address : <span
                                                class="text-gray-500 dark:text-white/70 text-xs  font-normal">
                                                2nd street,houston texas,united states.</span>
                                            </p>
                                            <p class="font-medium text-sm">Delivery Dated : <span
                                                class="text-gray-500 dark:text-white/70 text-xs font-normal">
                                                25 November</span>
                                            </p>
                                            <div><span class="font-medium text-sm ltr:mr-2 rtl:ml-2">Status : </span><a class="text-info hover:underline" href="<?php echo e(url('order-details')); ?>">Packed</a></div>
                                        </div>
                                        <div class="flex space-x-2 rtl:space-x-reverse">
                                            <h5 class="text-base font-semibold text-gray-500 dark:text-white/70">$699</h5>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <a href="javascript:void(0);"
                                    class="ti-btn m-0 py-2 px-3 ti-btn-secondary">
                                    Cancel Order
                                    </a>
                                    <a href="<?php echo e(url('products')); ?>"
                                    class="ltr:float-right rtl:float-left ti-btn m-0 py-2 px-3 ti-btn-danger">
                                    Shop Similar
                                    </a>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <div class="flex justify-between">
                                    <div class="">
                                        <span class="text-sm font-semibold">Order Id</span>
                                        <span class="block text-xs text-gray-500 dark:text-white/70">#12852</span>
                                    </div>
                                    <div class="">
                                        <span class="fs-14 font-semibold">Ordered Date </span>
                                        <span class="block text-xs text-gray-500 dark:text-white/70">13,November</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="space-y-3">
                                    <div class="sm:flex space-x-3 rtl:space-x-reverse">
                                        <img src="<?php echo e(asset('build/assets/img/ecommerce/products/7.png')); ?>" alt="product" class="avatar w-24 h-24 rounded-sm bg-gray-100 dark:bg-black/20 p-2">
                                        <div class="flex justify-between w-full">
                                        <div class="product-details space-y-1">
                                            <h5 class="text-lg font-semibold">Sun Glasses</h5>
                                            <p class="font-medium text-sm">Delivery Address : <span
                                                class="text-gray-500 dark:text-white/70 text-xs  font-normal">
                                                2nd street,houston texas,united states.</span>
                                            </p>
                                            <p class="font-medium text-sm">Delivery Dated : <span
                                                class="text-gray-500 dark:text-white/70 text-xs font-normal">
                                                26 November</span>
                                            </p>
                                            <div><span class="font-medium text-sm ltr:mr-2 rtl:ml-2">Status : </span><a class="text-primary hover:underline" href="<?php echo e(url('order-details')); ?>">Ordered</a></div>
                                        </div>
                                        <div class="flex space-x-2 rtl:space-x-reverse">
                                            <h5 class="text-base font-semibold text-gray-500 dark:text-white/70">$599</h5>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <a href="javascript:void(0);"
                                    class="ti-btn m-0 py-2 px-3 ti-btn-secondary">
                                    Cancel Order
                                    </a>
                                    <a href="<?php echo e(url('products')); ?>"
                                    class="ltr:float-right rtl:float-left ti-btn m-0 py-2 px-3 ti-btn-danger">
                                    Shop Similar
                                    </a>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <div class="flex justify-between">
                                    <div class="">
                                        <span class="text-sm font-semibold">Order Id</span>
                                        <span class="block text-xs text-gray-500 dark:text-white/70">#58584</span>
                                    </div>
                                    <div class="">
                                        <span class="fs-14 font-semibold">Ordered Date </span>
                                        <span class="block text-xs text-gray-500 dark:text-white/70">11,November</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="space-y-3">
                                    <div class="sm:flex space-x-3 rtl:space-x-reverse">
                                        <img src="<?php echo e(asset('build/assets/img/ecommerce/products/4.png')); ?>" alt="product" class="avatar w-24 h-24 rounded-sm bg-gray-100 dark:bg-black/20 p-2">
                                        <div class="flex justify-between w-full">
                                        <div class="product-details space-y-1">
                                            <h5 class="text-lg font-semibold">Dolor Wireless Airpods </h5>
                                            <p class="font-medium text-sm">Delivery Address : <span
                                                class="text-gray-500 dark:text-white/70 text-xs  font-normal">
                                                2nd street,houston texas,united states.</span>
                                            </p>
                                            <p class="font-medium text-sm">Delivery Dated : <span
                                                class="text-gray-500 dark:text-white/70 text-xs font-normal">
                                                21 November</span>
                                            </p>
                                            <div><span class="font-medium text-sm ltr:mr-2 rtl:ml-2">Status : </span><a class="text-danger hover:underline" href="<?php echo e(url('order-details')); ?>">Cancelled</a></div>
                                        </div>
                                        <div class="flex space-x-2 rtl:space-x-reverse">
                                            <h5 class="text-base font-semibold text-gray-500 dark:text-white/70">$399</h5>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <a href="<?php echo e(url('products')); ?>"
                                    class="ltr:float-right rtl:float-left ti-btn m-0 py-2 px-3 ti-btn-primary">
                                    Back To Shop
                                    </a>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <div class="flex justify-between">
                                    <div class="">
                                        <span class="text-sm font-semibold">Order Id</span>
                                        <span class="block text-xs text-gray-500 dark:text-white/70">#25465</span>
                                    </div>
                                    <div class="">
                                        <span class="fs-14 font-semibold">Ordered Date </span>
                                        <span class="block text-xs text-gray-500 dark:text-white/70">10,November</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="space-y-3">
                                    <div class="sm:flex space-x-3 rtl:space-x-reverse">
                                        <img src="<?php echo e(asset('build/assets/img/ecommerce/products/5.png')); ?>" alt="product" class="avatar w-24 h-24 rounded-sm bg-gray-100 dark:bg-black/20 p-2">
                                        <div class="flex justify-between w-full">
                                        <div class="product-details space-y-1">
                                            <h5 class="text-lg font-semibold">Dolor Rose Frangrance Perfume</h5>
                                            <p class="font-medium text-sm">Delivery Address : <span
                                                class="text-gray-500 dark:text-white/70 text-xs  font-normal">
                                                2nd street,houston texas,united states.</span>
                                            </p>
                                            <p class="font-medium text-sm">Delivered On : <span
                                                class="text-gray-500 dark:text-white/70 text-xs font-normal">
                                                12 November ,5:51pm</span>
                                            </p>
                                            <div><span class="font-medium text-sm ltr:mr-2 rtl:ml-2">Status : </span><a class="text-success hover:underline" href="<?php echo e(url('order-details')); ?>">Delivered</a></div>
                                        </div>
                                        <div class="flex space-x-2 rtl:space-x-reverse">
                                            <h5 class="text-base font-semibold text-gray-500 dark:text-white/70">$245</h5>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <a href="javascript:void(0);"
                                    class="ti-btn m-0 py-2 px-3 ti-btn-info">
                                    Rate product
                                    </a>
                                    <a href="<?php echo e(url('products')); ?>"
                                    class="ltr:float-right rtl:float-left ti-btn m-0 py-2 px-3 ti-btn-danger">
                                    Shop Similar
                                    </a>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <div class="flex justify-between">
                                    <div class="">
                                        <span class="text-sm font-semibold">Order Id</span>
                                        <span class="block text-xs text-gray-500 dark:text-white/70">#25465</span>
                                    </div>
                                    <div class="">
                                        <span class="fs-14 font-semibold">Ordered Date </span>
                                        <span class="block text-xs text-gray-500 dark:text-white/70">15,November</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="space-y-3">
                                    <div class="sm:flex space-x-3 rtl:space-x-reverse">
                                        <img src="<?php echo e(asset('build/assets/img/ecommerce/products/2.png')); ?>" alt="product" class="avatar w-24 h-24 rounded-sm bg-gray-100 dark:bg-black/20 p-2">
                                        <div class="flex justify-between w-full">
                                        <div class="product-details space-y-1">
                                            <h5 class="text-lg font-semibold">Tshirt For Men </h5>
                                            <p class="font-medium text-sm">Delivery Address : <span
                                                class="text-gray-500 dark:text-white/70 text-xs  font-normal">
                                                2nd street,houston texas,united states.</span>
                                            </p>
                                            <p class="font-medium text-sm">Delivered Date : <span
                                                class="text-gray-500 dark:text-white/70 text-xs font-normal">
                                                25 November </span>
                                            </p>
                                            <div><span class="font-medium text-sm ltr:mr-2 rtl:ml-2">Status : </span><a class="text-secondary hover:underline" href="<?php echo e(url('order-details')); ?>">Shipped</a></div>
                                        </div>
                                        <div class="flex space-x-2 rtl:space-x-reverse">
                                            <h5 class="text-base font-semibold text-gray-500 dark:text-white/70">$245</h5>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <a href="javascript:void(0);"
                                    class="ti-btn m-0 py-2 px-3 ti-btn-secondary">
                                    Cancel Order
                                    </a>
                                    <a href="<?php echo e(url('products')); ?>"
                                    class="ltr:float-right rtl:float-left ti-btn m-0 py-2 px-3 ti-btn-danger">
                                    Shop Similar
                                    </a>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <div class="flex justify-between">
                                    <div class="">
                                        <span class="text-sm font-semibold">Order Id</span>
                                        <span class="block text-xs text-gray-500 dark:text-white/70">#25465</span>
                                    </div>
                                    <div class="">
                                        <span class="fs-14 font-semibold">Ordered Date </span>
                                        <span class="block text-xs text-gray-500 dark:text-white/70">08,November</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="space-y-3">
                                    <div class="sm:flex space-x-3 rtl:space-x-reverse">
                                        <img src="<?php echo e(asset('build/assets/img/ecommerce/products/9.png')); ?>" alt="product" class="avatar w-24 h-24 rounded-sm bg-gray-100 dark:bg-black/20 p-2">
                                        <div class="flex justify-between w-full">
                                        <div class="product-details space-y-1">
                                            <h5 class="text-lg font-semibold">Travel Bag For Womens </h5>
                                            <p class="font-medium text-sm">Delivery Address : <span
                                                class="text-gray-500 dark:text-white/70 text-xs  font-normal">
                                                2nd street,houston texas,united states.</span>
                                            </p>
                                            <p class="font-medium text-sm">Delivered Date : <span
                                                class="text-gray-500 dark:text-white/70 text-xs font-normal">
                                                20 November </span>
                                            </p>
                                            <div><span class="font-medium text-sm ltr:mr-2 rtl:ml-2">Status : </span><a class="text-warning hover:underline" href="<?php echo e(url('order-details')); ?>">Out For Delivery</a></div>
                                        </div>
                                        <div class="flex space-x-2 rtl:space-x-reverse">
                                            <h5 class="text-base font-semibold text-gray-500 dark:text-white/70">$299</h5>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <a href="javascript:void(0);"
                                    class="ti-btn m-0 py-2 px-3 ti-btn-secondary">
                                    Cancel Order
                                    </a>
                                    <a href="<?php echo e(url('products')); ?>"
                                    class="ltr:float-right rtl:float-left ti-btn m-0 py-2 px-3 ti-btn-danger">
                                    Shop Similar
                                    </a>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-1 -->
                            
                            <nav class="flex justify-center mx-auto space-x-2 rtl:space-x-reverse mb-5">
                            <a class="w-10 h-10 bg-gray-100 dark:bg-black/20 dark:text-white/70 text-gray-500 hover:bg-primary hover:text-white p-2 inline-flex justify-center text-sm font-medium items-center gap-2 rounded-full" href="javascript:void(0);">
                                <span aria-hidden="true">«</span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="w-10 h-10 bg-primary text-white p-2 inline-flex items-center justify-center text-sm font-medium rounded-full" href="javascript:void(0);" aria-current="page">1</a>
                            <a class="w-10 h-10 bg-gray-100 dark:bg-black/20 dark:text-white/70 text-gray-500 hover:bg-primary hover:text-white p-2 inline-flex justify-center items-center text-sm font-medium rounded-full" href="javascript:void(0);">2</a>
                            <a class="w-10 h-10 bg-gray-100 dark:bg-black/20 dark:text-white/70 text-gray-500 hover:bg-primary hover:text-white p-2 inline-flex justify-center items-center text-sm font-medium rounded-full" href="javascript:void(0);">3</a>
                            <a class="w-10 h-10 bg-gray-100 dark:bg-black/20 dark:text-white/70 text-gray-500 hover:bg-primary hover:text-white p-2 inline-flex justify-center text-sm font-medium items-center gap-2 rounded-full" href="javascript:void(0);">
                                <span class="sr-only">Next</span>
                                <span aria-hidden="true">»</span>
                            </a>
                            </nav>

                        </div>
                        <!-- Start::main-content -->

                    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\laravel\vite\synto\synto\resources\views/pages/orders.blade.php ENDPATH**/ ?>