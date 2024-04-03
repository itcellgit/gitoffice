<?php $__env->startSection('styles'); ?>

        <!-- QUILL CSS -->
        <link id="style" href="<?php echo e(asset('build/assets/libs/quill/quill.snow.css')); ?>" rel="stylesheet">

        <!-- CHOICES CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('build/assets/libs/choices.js/public/assets/styles/choices.min.css')); ?>">

        <!-- FILEPOND CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('build/assets/libs/filepond/filepond.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css')); ?>">

        <!-- FLATPICKR CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('build/assets/libs/flatpickr/flatpickr.min.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

                    <div class="content">

                        <!-- Start::main-content -->
                        <div class="main-content">

                            <!-- Page Header -->
                            <div class="block justify-between page-header sm:flex">
                                <div>
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Edit Product</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                        <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Pages
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                        </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        Edit Product
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-6">
                            <div class="col-span-12">
                                <div class="box !bg-transparent border-0 shadow-none">
                                <div class="box-body p-0">
                                    <div class="grid grid-cols-12 gap-6">
                                    <div class="col-span-12 xl:col-span-6">
                                        <div class="box ">
                                        <div class="box-body">
                                            <div class="space-y-3">
                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Product Title</label>
                                                <input type="text" class="my-auto ti-form-input" placeholder="Dolar Leather Handbag For Women" value="HandBag For Womens" id="product-name">
                                            </div>
                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Product Id</label>
                                                <input type="text" class="my-auto ti-form-input" placeholder="#2515445145" value="#2515445145">
                                            </div>
                                            <div class="">
                                                <label class="ti-form-label">Product Description</label>
                                                <div id="product-editor">
                                                    <ul class="list-disc list-inside space-y-3 text-gray-900 dark:text-gray-200">
                                                    <li>
                                                        At vero eos et accusamus et iusto odio dignissimos
                                                        ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas
                                                        molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
                                                        officia deserunt mollitia animi, id est laborum et dolorum fuga.
                                                    </li>
                                                    <li>
                                                        On the other hand, we denounce with righteous
                                                        indignation and dislike men who are so beguiled and demoralized .
                                                    </li>
                                                    <li>
                                                        But I must explain to you how all this mistaken idea
                                                        of denouncing pleasure and praising pain was born and I will give you a complete account of
                                                        the system.
                                                    </li>
                                                </ul>
                                                </div>
                                            </div>
                                            <div class="space-y-2">
                                                <label class="ti-form-label">Product Features</label>
                                                <textarea class="ti-form-input" rows="2" >But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system.</textarea>
                                                <label class="ti-form-label mt-1 text-sm font-normal opacity-70 text-gray-500 dark:text-white/70 mb-0">*Description should not exceed 500 letters</label>
                                            </div>
                                            <div class="grid grid-cols-12 gap-4">
                                                <div class="col-span-12 lg:col-span-6">
                                                <div class="space-y-2 product-1">
                                                    <label class="ti-form-label mb-0">Product Status</label>
                                                    <select class="ti-form-select product-search">
                                                    <option value="0">Status</option>
                                                    <option value="1" selected>Publish</option>
                                                    <option value="2">Unpublish</option>
                                                    <option value="3">Schedule</option>
                                                    </select>
                                                </div>
                                                </div>
                                                <div class="col-span-12 lg:col-span-6">
                                                <div class="space-y-2  product-1">
                                                    <label class="ti-form-label mb-0">Product Visibility</label>
                                                    <select class="ti-form-select product-search">
                                                    <option value="">Visibility</option>
                                                    <option value="1">Private</option>
                                                    <option value="2" selected>Public</option>
                                                    </select>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 xl:col-span-6">
                                        <div class="box">
                                        <div class="box-body space-y-3">
                                            <div class="grid grid-cols-12 gap-4">
                                            <div class="col-span-12 lg:col-span-4">
                                                <div class="space-y-2 product-1">
                                                <label class="ti-form-label mb-0">Product Category</label>
                                                <select class="ti-form-select product-search">
                                                    <option value="">Category</option>
                                                    <option value="Clothing">Clothing</option>
                                                    <option value="Footwear">Footwear</option>
                                                    <option value="Accesories" selected>Accesories</option>
                                                    <option value="Grooming">Grooming</option>
                                                    <option value="Ethnic &amp; Festive">Ethnic &amp; Festive</option>
                                                    <option value="Jewellery">Jewellery</option>
                                                    <option value="Toys &amp; Babycare">Toys &amp; Babycare</option>
                                                    <option value="Festive Gifts">Festive Gifts</option>
                                                    <option value="Kitchen">Kitchen</option>
                                                    <option value="Dining">Dining</option>
                                                    <option value="Home Decors">Home Decors</option>
                                                    <option value="Stationery">Stationery</option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-span-12 lg:col-span-4">
                                                <div class="space-y-2  product-1">
                                                <label class="ti-form-label mb-0">Gender</label>
                                                <select class="ti-form-select product-search">
                                                    <option value="">Gender</option>
                                                    <option value="1">Male</option>
                                                    <option value="2" selected>Female</option>
                                                    <option value="3">Others</option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-span-12 lg:col-span-4">
                                                <div class="space-y-2  product-1">
                                                <label class="ti-form-label mb-0">Brand</label>
                                                <select class="ti-form-select product-search">
                                                    <option value="">Select</option>
                                                    <option value="Armani">Armani</option>
                                                    <option value="Lacoste">Lacoste</option>
                                                    <option value="Puma">Puma</option>
                                                    <option value="Spykar">Spykar</option>
                                                    <option value="Mufti">Mufti</option>
                                                    <option value="Home Town selected">Home Town</option>
                                                    <option value="Arrabi">Arrabi</option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-span-12 lg:col-span-6">
                                                <div class="space-y-2  product-1">
                                                <label class="ti-form-label mb-0">Published Date and Time</label>
                                                <input type="text" class="ti-form-input focus:z-10 flatpickr-input" id="product-datetime" placeholder="Choose date" readonly value="2022-11-16 23:45">
                                                </div>
                                            </div>
                                            <div class="col-span-12 lg:col-span-6">
                                                <div class="space-y-2  product-1">
                                                <label class="ti-form-label mb-0">Product Size</label>
                                                <select class="ti-form-select product-search">
                                                    <option value="Extra Small">Extra Small</option>
                                                    <option value="Small">Small</option>
                                                    <option value="Medium" selected>Medium</option>
                                                    <option value="Large">Large</option>
                                                    <option value="XL">XL</option>
                                                    <option value="xxl">xxl</option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-span-12 lg:col-span-4">
                                                <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Actual Price </label>
                                                <input type="text" class="my-auto ti-form-input" placeholder="$550"  value="$550">
                                                </div>
                                            </div>
                                            <div class="col-span-12 lg:col-span-4">
                                                <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Dealer Price </label>
                                                <input type="text" class="my-auto ti-form-input" placeholder="$400"  value="$400">
                                                </div>
                                            </div>
                                            <div class="col-span-12 lg:col-span-4">
                                                <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Discount</label>
                                                <input type="text" class="my-auto ti-form-input" placeholder="10%"  value="10%">
                                                </div>
                                            </div>
                                            <div class="col-span-12 lg:col-span-6">
                                                <div class="space-y-2">
                                                <label class="ti-form-label">Available Colors</label>
                                                <select class="ti-form-select product-search">
                                                    <option value="">Colors</option>
                                                    <option value="1" selected>blue</option>
                                                    <option value="2">pink</option>
                                                    <option value="3">yellow</option>
                                                    <option value="4">orange</option>
                                                    <option value="5">lemon-green</option>
                                                    <option value="6">green</option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-span-12 lg:col-span-6">
                                                <div class="space-y-2  product-1">
                                                <label class="ti-form-label mb-0">Availabilty</label>
                                                <select class="ti-form-select product-search">
                                                    <option value="">Availabilty</option>
                                                    <option value="1" selected>Instock</option>
                                                    <option value="2">Out Of Stock</option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-span-12 lg:col-span-6">
                                                <div class="space-y-2  product-1">
                                                <label class="ti-form-label mb-0">Type</label>
                                                <input type="text" class="my-auto ti-form-input" placeholder="Hand Bag" value="Hand Bag">
                                                </div>
                                            </div>
                                            <div class="col-span-12 lg:col-span-6">
                                                <div class="space-y-2  product-1">
                                                <label class="ti-form-label mb-0">Item Weight</label>
                                                <input type="text" class="my-auto ti-form-input" placeholder="250grams" value="250grams">
                                                </div>
                                            </div>
                                            </div>
                                            <div class="space-y-2">
                                            <label class="flex justify-between ti-form-label">
                                                <span class="my-auto">Product Images</span></label>
                                                <input type="file" class="filepond multiple-filepond" name="filepond" multiple data-allow-reorder="true" data-max-file-size="3MB" data-max-files="5">
                                            </div>
                                            <div class="space-y-2">
                                            <label class="ti-form-label">Product Tags</label>
                                            <input class="ti-form-input product-tags custom class" id="product-tags" type="text"
                                                value="water-resistant, spacious ,5 pockets ,office bag"
                                                placeholder="This is a placeholder">
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="box-footer text-end border-t-0 px-0">
                                    <a class="ti-btn ti-btn-primary"><i class="ri-refresh-line"></i>update Product</a>
                                    <a class="ti-btn ti-btn-danger"><i class="ri-delete-bin-line"></i>Discard Product</a>
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

        <!-- QUILL EDITOR JS -->
        <script src="<?php echo e(asset('build/assets/libs/quill/quill.min.js')); ?>"></script>

        <!-- CHOICES JS -->
        <script src="<?php echo e(asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')); ?>"></script>

        <!-- FILEPOND JS -->
        <script src="<?php echo e(asset('build/assets/libs/filepond/filepond.min.js')); ?>"></script>
        <script src="<?php echo e(asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js')); ?>"></script>
        <script src="<?php echo e(asset('build/assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js')); ?>"></script>
        <script src="<?php echo e(asset('build/assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js')); ?>"></script>
        <script src="<?php echo e(asset('build/assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js')); ?>"></script>
        <script src="<?php echo e(asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.js')); ?>"></script>
        <script src="<?php echo e(asset('build/assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js')); ?>"></script>
        <script src="<?php echo e(asset('build/assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js')); ?>"></script>
        <script src="<?php echo e(asset('build/assets/libs/filepond-plugin-image-crop/filepond-plugin-image-crop.min.js')); ?>"></script>
        <script src="<?php echo e(asset('build/assets/libs/filepond-plugin-image-resize/filepond-plugin-image-resize.min.js')); ?>"></script>
        <script src="<?php echo e(asset('build/assets/libs/filepond-plugin-image-transform/filepond-plugin-image-transform.min.js')); ?>"></script>

        <!-- FLATPICKR JS -->
        <script src="<?php echo e(asset('build/assets/libs/flatpickr/flatpickr.min.js')); ?>"></script>

        <!-- ADD PRODUCT JS -->
        <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/editproduct.js'); ?>
        

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\my-projects\laravel\vite\synto\synto-laravel\synto\resources\views/pages/edit-product.blade.php ENDPATH**/ ?>