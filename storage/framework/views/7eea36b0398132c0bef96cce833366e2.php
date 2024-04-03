<?php $__env->startSection('styles'); ?>

        <!-- FILEPOND FILE UPLOAD  Css -->
        <link rel="stylesheet" href="<?php echo e(asset('build/assets/libs/filepond/filepond.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

                    <div class="content">

                        <!-- Start::main-content -->
                        <div class="main-content">

                            <!-- Page Header -->
                            <div class="block justify-between page-header sm:flex">
                                <div>
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> FileManager</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                        <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Advanced Ui
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                        </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        FileManager
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-6">
                            <div class="col-span-12 xxl:col-span-3">
                                <div class="box">
                                <div class="box-body">
                                    <div>
                                    <div class="w-40 h-40 relative mx-auto mb-5">
                                        <div
                                        class="w-full h-10 absolute top-1/2 ltr:left-0 rtl:right-0 text-center -mt-5 leading-[28px]">
                                        80% <br>
                                        Used
                                        </div>
                                        <canvas id="storage-circle" class="chartjs-chart w-full"></canvas>
                                    </div>
                                    <div class="grid grid-cols-12 gap-6 overflow-auto">
                                        <div class="col-span-12 lg:col-span-6 text-center ltr:border-r dark:border-white/10 rtl:border-l">
                                        <h3 class="font-bold">512Mb</h3>
                                        <p class="text-gray-500 dark:text-white/70 text-sm">Total Space</p>
                                        </div>
                                        <div class="col-span-12 lg:col-span-6  text-center">
                                        <h3 class="font-bold">480Mb</h3>
                                        <p class="text-gray-500 dark:text-white/70 text-sm">Total Space Used</p>
                                        </div>
                                    </div>
                                    </div>
                                    <a href="javascript:void(0);" class="ti-btn w-full mt-5 mb-0 ti-btn-primary p-2"><i class="ri ri-upload-cloud-2-line"></i>Upgrade Your Plan</a>
                                </div>
                                </div>
                                <div class="box">
                                <div class="box-body">
                                    <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <div class="flex-shrink-0">
                                        <span
                                            class="inline-flex items-center justify-center h-[2.375rem] w-[2.375rem] rounded-full bg-danger/20">
                                            <span class="font-medium text-danger leading-none">
                                            <i class="ri ri-alert-line"></i>
                                            </span>
                                        </span>
                                        </div>
                                        <div class="ltr:ml-4 rtl:mr-4">
                                        <h3 class="text-sm font-semibold">
                                            Junk Cleaner
                                        </h3>
                                        <div class="mt-1 text-sm">
                                            Clear 5Gb of Duplicate Files
                                        </div>
                                        </div>
                                    </div>
                                    <div class="space-x-2">
                                        <a href="javascript:void(0);" class="ti-btn ti-btn-secondary p-2 mb-0"><span>Clean</span></a>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="box">
                                <div class="box-body">
                                    <ul class="flex flex-col">
                                    <li class="flex flex-col gap-x-3.5 bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white py-1 rounded-sm mb-3">
                                        <div class="flex items-center justify-between">
                                        <div class="flex items-center space-x-3 rtl:space-x-reverse">
                                            <div>
                                            <span class="font-medium">
                                                <i class="ri ri-image-line text-secondary text-xl"></i>
                                            </span>
                                            </div>
                                            <div class="ltr:ml-3 rtl:mr-3">
                                            <h3 class="text-sm font-semibold">
                                                Image
                                            </h3>
                                            <p class="text-xs text-gray-500 dark:text-white/70">20GB</p>
                                            </div>
                                        </div>
                                        <div class="space-x-2 rtl:rotate-180">
                                            <i class="ri ri-arrow-right-s-line text-gray-500 dark:text-white/70 text-lg"></i>
                                        </div>
                                        </div>
                                    </li>
                                    <li class="flex flex-col gap-x-3.5 bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white py-1 rounded-sm mb-3">
                                        <div class="flex items-center justify-between">
                                        <div class="flex items-center space-x-3 rtl:space-x-reverse">
                                            <div>
                                            <span class="font-medium">
                                                <i class="ri ri-file-line text-primary text-xl"></i>
                                            </span>
                                            </div>
                                            <div class="ltr:ml-3 rtl:mr-3">
                                            <h3 class="text-sm font-semibold">
                                                Documents
                                            </h3>
                                            <p class="text-xs text-gray-500 dark:text-white/70">1.5GB</p>
                                            </div>
                                        </div>
                                        <div class="space-x-2 rtl:rotate-180">
                                            <i class="ri ri-arrow-right-s-line text-gray-500 dark:text-white/70 text-lg"></i>
                                        </div>
                                        </div>
                                    </li>
                                    <li class="flex flex-col gap-x-3.5 bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white py-1 rounded-sm mb-3">
                                        <div class="flex items-center justify-between">
                                        <div class="flex items-center space-x-3 rtl:space-x-reverse">
                                            <div>
                                            <span class="font-medium">
                                                <i class="ri ri-vidicon-line text-warning text-xl"></i>
                                            </span>
                                            </div>
                                            <div class="ltr:ml-3 rtl:mr-3">
                                            <h3 class="text-sm font-semibold">
                                                Video
                                            </h3>
                                            <p class="text-xs text-gray-500 dark:text-white/70">1.25GB</p>
                                            </div>
                                        </div>
                                        <div class="space-x-2 rtl:rotate-180">
                                            <i class="ri ri-arrow-right-s-line text-gray-500 dark:text-white/70 text-lg"></i>
                                        </div>
                                        </div>
                                    </li>
                                    <li class="flex flex-col gap-x-3.5 bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white py-1 rounded-sm mb-3">
                                        <div class="flex items-center justify-between">
                                        <div class="flex items-center space-x-3 rtl:space-x-reverse">
                                            <div>
                                            <span class="font-medium">
                                                <i class="ri ri-music-2-line text-info text-xl"></i>
                                            </span>
                                            </div>
                                            <div class="ltr:ml-3 rtl:mr-3">
                                            <h3 class="text-sm font-semibold">
                                                Audio
                                            </h3>
                                            <p class="text-xs text-gray-500 dark:text-white/70">2GB</p>
                                            </div>
                                        </div>
                                        <div class="space-x-2 rtl:rotate-180">
                                            <i class="ri ri-arrow-right-s-line text-gray-500 dark:text-white/70 text-lg"></i>
                                        </div>
                                        </div>
                                    </li>
                                    <li class="flex flex-col gap-x-3.5 bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white py-1 rounded-sm mb-3">
                                        <div class="flex items-center justify-between">
                                        <div class="flex items-center space-x-3 rtl:space-x-reverse">
                                            <div>
                                            <span class="font-medium">
                                                <i class="ri ri-file-line text-danger text-xl"></i>
                                            </span>
                                            </div>
                                            <div class="ltr:ml-3 rtl:mr-3">
                                            <h3 class="text-sm font-semibold">
                                                Archive
                                            </h3>
                                            <p class="text-xs text-gray-500 dark:text-white/70">1.3GB</p>
                                            </div>
                                        </div>
                                        <div class="space-x-2 rtl:rotate-180">
                                            <i class="ri ri-arrow-right-s-line text-gray-500 dark:text-white/70 text-lg"></i>
                                        </div>
                                        </div>
                                    </li>
                                    <li class="flex flex-col gap-x-3.5 bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white py-1 rounded-sm mb-3">
                                        <div class="flex items-center justify-between">
                                        <div class="flex items-center space-x-3 rtl:space-x-reverse">
                                            <div>
                                            <span class="font-medium">
                                                <i class="ri ri-server-line text-success text-xl"></i>
                                            </span>
                                            </div>
                                            <div class="ltr:ml-3 rtl:mr-3">
                                            <h3 class="text-sm font-semibold">
                                                Zip
                                            </h3>
                                            <p class="text-xs text-gray-500 dark:text-white/70">1.5GB</p>
                                            </div>
                                        </div>
                                        <div class="space-x-2 rtl:rotate-180">
                                            <i class="ri ri-arrow-right-s-line text-gray-500 dark:text-white/70 text-lg"></i>
                                        </div>
                                        </div>
                                    </li>
                                    <li class="flex flex-col gap-x-3.5 bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white py-1 rounded-sm">
                                        <div class="flex items-center justify-between">
                                        <div class="flex items-center space-x-3 rtl:space-x-reverse">
                                            <div>
                                            <span class="font-medium">
                                                <i class="ri ri-folder-line text-gray-400 dark:text-white text-xl"></i>
                                            </span>
                                            </div>
                                            <div class="ltr:ml-3 rtl:mr-3">
                                            <h3 class="text-sm font-semibold">
                                                Others
                                            </h3>
                                            <p class="text-xs text-gray-500 dark:text-white/70">5GB</p>
                                            </div>
                                        </div>
                                        <div class="space-x-2 rtl:rotate-180">
                                            <i class="ri ri-arrow-right-s-line text-gray-500 dark:text-white/70 text-lg"></i>
                                        </div>
                                        </div>
                                    </li>
                                    </ul>
                                </div>
                                </div>
                                <div class="box">
                                <div class="box-body">
                                    <input type="file" class="file-manager filepond multiple-filepond !mb-0" name="filepond" multiple
                                    data-allow-reorder="true" data-max-file-size="3MB" data-max-files="5">
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 xxl:col-span-9">
                                <div class="box !bg-transparent border-0 shadow-none">
                                <div class="grid grid-cols-12 gap-6">
                                    <div class="col-span-12 xxl:col-span-8">
                                    <div class="box py-5">
                                        <div class="grid grid-cols-12 gap-6 text-center">
                                        <div class="col-span-6 sm:col-span-3 mt-3 mx-auto">
                                            <div class="space-y-3">
                                            <span><i class="ri ri-image-line text-xl text-primary p-3 bg-primary/20 rounded-sm"></i></span>
                                            <h3 class="text-sm text-center text-gray-500 dark:text-white/70">Image</h3>
                                            </div>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3 mt-3 mx-auto">
                                            <div class="space-y-3">
                                            <span><i class="ri ri-vidicon-line text-xl text-secondary p-3 bg-secondary/20 rounded-sm"></i></span>
                                            <h3 class="text-sm text-center text-gray-500 dark:text-white/70">Video</h3>
                                            </div>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3 mt-3 mx-auto">
                                            <div class="space-y-3">
                                            <span><i class="ri ri-music-2-line text-xl text-danger p-3 bg-danger/20 rounded-sm"></i></span>
                                            <h3 class="text-sm text-center text-gray-500 dark:text-white/70">Audio</h3>
                                            </div>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3 mt-3 mx-auto">
                                            <div class="space-y-3">
                                            <span><i class="ri ri-file-line text-xl text-info p-3 bg-info/20 rounded-sm"></i></span>
                                            <h3 class="text-sm text-center text-gray-500 dark:text-white/70">Document</h3>
                                            </div>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3 mt-3 mx-auto">
                                            <div class="space-y-3">
                                            <span><i class="ri ri-smartphone-line text-xl text-warning p-3 bg-warning/20 rounded-sm"></i></span>
                                            <h3 class="text-sm text-center text-gray-500 dark:text-white/70">Pdfs</h3>
                                            </div>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3 mt-3 mx-auto">
                                            <div class="space-y-3">
                                            <span><i class="ri ri-file-line text-xl text-pink-800 p-3 bg-pink-800/20 rounded-sm"></i></span>
                                            <h3 class="text-sm text-center text-gray-500 dark:text-white/70">Archive</h3>
                                            </div>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3 mt-3 mx-auto">
                                            <div class="space-y-3">
                                            <span><i class="ri ri-download-2-line text-xl text-blue-800 p-3 bg-blue-800/20 rounded-sm"></i></span>
                                            <h3 class="text-sm text-center text-gray-500 dark:text-white/70">Downloads</h3>
                                            </div>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3 mt-3 mx-auto">
                                            <div class="space-y-3">
                                            <span><i class="ri ri-folder-line text-xl text-rose-800 p-3 bg-rose-800/20 rounded-sm"></i></span>
                                            <h3 class="text-sm text-center text-gray-500 dark:text-white/70">All Files</h3>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <h3 class="font-semibold text-lg my-4">Quick Access</h3>
                                    <div class="grid grid-cols-12 gap-6">
                                        <div class="col-span-12 sm:col-span-6 lg:!col-span-3">
                                        <div class="box mb-0">
                                            <div class="box-body">
                                            <a href="<?php echo e(url('file-details')); ?>" class="mx-auto my-3"><img class="mx-auto" src="<?php echo e(asset('build/assets/img/files/2.png')); ?>" alt="img"></a>
                                            </div>
                                            <div class="box-footer bg-transparent">
                                            <div class="flex justify-between">
                                                <div><p class="text-sm">File.pdf</p></div>
                                                <div><p class="text-sm">20MB</p></div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col-span-12 sm:col-span-6 lg:!col-span-3">
                                        <div class="box mb-0 overflow-hidden">
                                            <div class="box-body">
                                            <a href="<?php echo e(url('file-details')); ?>" class="mx-auto my-3"><img class="mx-auto" src="<?php echo e(asset('build/assets/img/files/9.png')); ?>" alt="img"></a>
                                            </div>
                                            <div class="box-footer bg-transparent">
                                            <div class="flex justify-between">
                                                <div><p class="text-sm">projects.doc</p></div>
                                                <div><p class="text-sm">30MB</p></div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col-span-12 sm:col-span-6 lg:!col-span-3">
                                        <div class="box mb-0">
                                            <div class="box-body">
                                            <a href="<?php echo e(url('file-details')); ?>" class="mx-auto my-3"><img class="mx-auto" src="<?php echo e(asset('build/assets/img/files/3.png')); ?>" alt="img"></a>
                                            </div>
                                            <div class="box-footer bg-transparent">
                                            <div class="flex justify-between">
                                                <div><p class="text-sm">6.png</p></div>
                                                <div><p class="text-sm">25MB</p></div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col-span-12 sm:col-span-6 lg:!col-span-3">
                                        <div class="box mb-0 overflow-hidden">
                                            <div class="box-body">
                                            <a href="<?php echo e(url('file-details')); ?>" class="mx-auto my-3"><img class="mx-auto" src="<?php echo e(asset('build/assets/img/files/5.png')); ?>" alt="img"></a>
                                            </div>
                                            <div class="box-footer bg-transparent">
                                            <div class="flex justify-between">
                                                <div><p class="text-sm">Documents</p></div>
                                                <div><p class="text-sm">350MB</p></div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-span-12 xxl:col-span-4">
                                    <div class="box">
                                        <div class="box-body space-y-3">
                                        <p class="text-base font-semibold py-2 inline-flex"><i class="ri ri-smartphone-line text-lg ltr:mr-2 rtl:ml-2 p-2.5 bg-primary/20 text-primary rounded-full avatar avatar-sm leading-none"></i><span>Internal Storage</span></p>
                                        <div class="ti-main-progress bg-gray-200 dark:bg-black/20 h-2">
                                            <div class="ti-main-progress-bar bg-primary" role="progressbar" style="width: 85%" aria-valuenow="80"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="flex items-center justify-between text-xs">
                                            <span class="text-gray-500 dark:text-white/70">480.24 Gb / 512 GB</span>
                                            <a href="javascript:void(0);" class="text-primary">Manage Files</a>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <div class="box-body space-y-3">
                                        <p class="text-base font-semibold py-2 inline-flex"><i class="ri ri-cpu-line text-lg ltr:mr-2 rtl:ml-2 p-2.5 bg-danger/20 text-danger rounded-full avatar avatar-sm leading-none"></i><span>External Storage</span></p>
                                        <div class="ti-main-progress bg-gray-200 dark:bg-black/20 h-2">
                                            <div class="ti-main-progress-bar bg-danger" role="progressbar" style="width: 70%" aria-valuenow="60"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="flex items-center justify-between text-xs"> <span
                                            class="text-gray-500 dark:text-white/70">10Gb / 16GB</span> <a
                                            href="javascript:void(0);" class="text-danger">Manage Files</a>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <div class="box-body space-y-3">
                                        <p class="text-base font-semibold py-2 inline-flex"><i class="ri ri-cloud-line text-lg ltr:mr-2 rtl:ml-2 p-2.5 bg-secondary/20 text-secondary rounded-full avatar avatar-sm leading-none"></i><span>CLoud Storage</span></p>
                                        <div class="ti-main-progress bg-gray-200 dark:bg-black/20 h-2">
                                            <div class="ti-main-progress-bar bg-secondary" role="progressbar" style="width: 50%" aria-valuenow="40"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="flex items-center justify-between text-xs"> <span
                                            class="text-gray-500 dark:text-white/70">3Gb / 8 GB</span> <a
                                            href="javascript:void(0);" class="text-secondary">Manage Files</a>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Recent Files</h5>
                                </div>
                                <div class="box-body">
                                    <div class="pb-5">
                                        <div class="sm:flex justify-between space-y-2 sm:space-y-0">
                                        <div class="relative max-w-xs">
                                            <label for="hs-table-search" class="sr-only">Search</label>
                                            <input type="text" name="hs-table-search" id="hs-table-search" class="p-2 ltr:pr-10 rtl:pl-10 ti-form-input" placeholder="Search for items">
                                            <div class="absolute inset-y-0 ltr:right-0 rtl:left-0 flex items-center pointer-events-none ltr:pr-4 rtl:pl-4">
                                            <svg class="h-3.5 w-3.5 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                                            </svg>
                                            </div>
                                        </div>
                                        <div class="sm:ltr:ml-auto sm:rtl:mr-auto">
                                            <a href="javascript:void(0);" class="ti-btn text-xs m-0 ti-btn-soft-success w-full p-2"><i class="ri ri-add-circle-line"></i>Create New File</a>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="overflow-auto">
                                        <table class="ti-custom-table  table-bordered ti-custom-table-head">
                                        <thead class="bg-gray-50 dark:bg-black/20">
                                            <tr>
                                            <th scope="col" class="!min-w-[13rem]">Name</th>
                                            <th scope="col">Files</th>
                                            <th scope="col">Size</th>
                                            <th scope="col">Type</th>
                                            <th scope="col">Modified Date</th>
                                            <th scope="col" class="!min-w-[13rem]">Members</th>
                                            <th scope="col" class="!text-end">options</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <td class="font-medium">
                                                <a class="flex items-center space-x-2 rtl:space-x-reverse" href="<?php echo e(url('filemanager-list')); ?>">
                                                <img src="<?php echo e(asset('build/assets/img/files/5.png')); ?>" alt="img" class="w-10">
                                                <span>John Brown</span>
                                                </a>
                                            </td>
                                            <td>5 files</td>
                                            <td>250MB</td>
                                            <td>Folder</td>
                                            <td>29-09-2022, 16:40</td>
                                            <td>
                                                <div class="flex -space-x-2 rtl:space-x-reverse">
                                                <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white" src="<?php echo e(asset('build/assets/img/users/8.jpg')); ?>" alt="Image Description">
                                                <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white" src="<?php echo e(asset('build/assets/img/users/4.jpg')); ?>" alt="Image Description">
                                                <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white" src="<?php echo e(asset('build/assets/img/users/6.jpg')); ?>" alt="Image Description">
                                                <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white" src="<?php echo e(asset('build/assets/img/users/7.jpg')); ?>" alt="Image Description">
                                                <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white" src="<?php echo e(asset('build/assets/img/users/2.jpg')); ?>" alt="Image Description">
                                                </div>
                                            </td>
                                            <td class="!text-end">
                                                <div class="hs-dropdown ti-dropdown">
                                                <button aria-label="button" id="hs-dropdown-custom-icon-trigger1" type="button" class="hs-dropdown-toggle p-3 ti-dropdown-toggle">
                                                    <svg class="ti-dropdown-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                        <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                        </path>
                                                    </svg>
                                                </button>
                                                <div class="hs-dropdown-menu ti-dropdown-menu hidden" aria-labelledby="hs-dropdown-custom-icon-trigger1" >
                                                    <a class="ti-dropdown-item" href="javascript:void(0);">
                                                        Action
                                                    </a>
                                                    <a class="ti-dropdown-item" href="javascript:void(0);">
                                                        Another Action
                                                    </a>
                                                    <a class="ti-dropdown-item" href="javascript:void(0);">
                                                        Something Else Here
                                                    </a>
                                                </div>
                                                </div>
                                            </td>
                                            </tr>
                                            <tr>
                                            <td class="font-medium">
                                                <a class="flex items-center space-x-2 rtl:space-x-reverse" href="<?php echo e(url('filemanager-list')); ?>">
                                                <img src="<?php echo e(asset('build/assets/img/files/5.png')); ?>" alt="img" class="w-10">
                                                <span>Jim Green</span>
                                                </a>
                                            </td>
                                            <td>2 files</td>
                                            <td>100MB</td>
                                            <td>Folder</td>
                                            <td>27-09-2022,3:40</td>
                                            <td>
                                                <div class="flex -space-x-2 rtl:space-x-reverse">
                                                <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white" src="<?php echo e(asset('build/assets/img/users/8.jpg')); ?>" alt="Image Description">
                                                <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white" src="<?php echo e(asset('build/assets/img/users/4.jpg')); ?>" alt="Image Description">
                                                <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white" src="<?php echo e(asset('build/assets/img/users/6.jpg')); ?>" alt="Image Description">
                                                <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white" src="<?php echo e(asset('build/assets/img/users/7.jpg')); ?>" alt="Image Description">
                                                </div>
                                            </td>
                                            <td class="!text-end">
                                                <div class="hs-dropdown ti-dropdown">
                                                <button aria-label="button" id="hs-dropdown-custom-icon-trigger2" type="button" class="hs-dropdown-toggle p-3 ti-dropdown-toggle">
                                                    <svg class="ti-dropdown-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                        <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                        </path>
                                                    </svg>
                                                </button>
                                                <div class="hs-dropdown-menu ti-dropdown-menu hidden" aria-labelledby="hs-dropdown-custom-icon-trigger2" >
                                                    <a class="ti-dropdown-item" href="javascript:void(0);">
                                                        Action
                                                    </a>
                                                    <a class="ti-dropdown-item" href="javascript:void(0);">
                                                        Another Action
                                                    </a>
                                                    <a class="ti-dropdown-item" href="javascript:void(0);">
                                                        Something Else Here
                                                    </a>
                                                </div>
                                                </div>
                                            </td>
                                            </tr>
                                            <tr>
                                            <td class="font-medium">
                                                <a class="flex items-center space-x-2 rtl:space-x-reverse" href="<?php echo e(url('filemanager-list')); ?>">
                                                <img src="<?php echo e(asset('build/assets/img/files/2.png')); ?>" alt="img" class="w-10">
                                                <span>Joe Black</span>
                                                </a>
                                            </td>
                                            <td>1 files</td>
                                            <td>50MB</td>
                                            <td>PDF file</td>
                                            <td>17-09-2022,13:40</td>
                                            <td>
                                                <div class="flex -space-x-2 rtl:space-x-reverse">
                                                <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white" src="<?php echo e(asset('build/assets/img/users/1.jpg')); ?>" alt="Image Description">
                                                <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white" src="<?php echo e(asset('build/assets/img/users/8.jpg')); ?>" alt="Image Description">
                                                <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white" src="<?php echo e(asset('build/assets/img/users/4.jpg')); ?>" alt="Image Description">
                                                <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white" src="<?php echo e(asset('build/assets/img/users/6.jpg')); ?>" alt="Image Description">
                                                <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white" src="<?php echo e(asset('build/assets/img/users/7.jpg')); ?>" alt="Image Description">
                                                </div>
                                            </td>
                                            <td class="!text-end">
                                                <div class="hs-dropdown ti-dropdown">
                                                <button id="hs-dropdown-custom-icon-trigger3" type="button" class="hs-dropdown-toggle p-3 ti-dropdown-toggle">
                                                    <svg class="ti-dropdown-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                        <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                        </path>
                                                    </svg>
                                                </button>
                                                <div class="hs-dropdown-menu ti-dropdown-menu hidden" aria-labelledby="hs-dropdown-custom-icon-trigger3" >
                                                    <a class="ti-dropdown-item" href="javascript:void(0);">
                                                        Action
                                                    </a>
                                                    <a class="ti-dropdown-item" href="javascript:void(0);">
                                                        Another Action
                                                    </a>
                                                    <a class="ti-dropdown-item" href="javascript:void(0);">
                                                        Something Else Here
                                                    </a>
                                                </div>
                                                </div>
                                            </td>
                                            </tr>
                                            <tr>
                                            <td class="font-medium">
                                                <a class="flex items-center space-x-2 rtl:space-x-reverse" href="<?php echo e(url('filemanager-list')); ?>">
                                                <img src="<?php echo e(asset('build/assets/img/files/9.png')); ?>" alt="img" class="w-10">
                                                <span>Edward King</span>
                                                </a>
                                            </td>
                                            <td>1 files</td>
                                            <td>50MB</td>
                                            <td>Word Document</td>
                                            <td>17-09-2022,13:40</td>
                                            <td>
                                                <div class="flex -space-x-2 rtl:space-x-reverse">
                                                <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white" src="<?php echo e(asset('build/assets/img/users/1.jpg')); ?>" alt="Image Description">
                                                <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white" src="<?php echo e(asset('build/assets/img/users/6.jpg')); ?>" alt="Image Description">
                                                <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white" src="<?php echo e(asset('build/assets/img/users/7.jpg')); ?>" alt="Image Description">
                                                </div>
                                            </td>
                                            <td class="!text-end">
                                                <div class="hs-dropdown ti-dropdown">
                                                <button aria-label="button" id="hs-dropdown-custom-icon-trigger" type="button" class="hs-dropdown-toggle p-3 ti-dropdown-toggle">
                                                    <svg class="ti-dropdown-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                        <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                        </path>
                                                    </svg>
                                                </button>
                                                <div class="hs-dropdown-menu ti-dropdown-menu hidden" aria-labelledby="hs-dropdown-custom-icon-trigger" >
                                                    <a class="ti-dropdown-item" href="javascript:void(0);">
                                                        Action
                                                    </a>
                                                    <a class="ti-dropdown-item" href="javascript:void(0);">
                                                        Another Action
                                                    </a>
                                                    <a class="ti-dropdown-item" href="javascript:void(0);">
                                                        Something Else Here
                                                    </a>
                                                </div>
                                                </div>
                                            </td>
                                            </tr>
                                            <tr>
                                            <td class="font-medium">
                                                <a class="flex items-center space-x-2 rtl:space-x-reverse" href="<?php echo e(url('filemanager-list')); ?>">
                                                <img src="<?php echo e(asset('build/assets/img/files/5.png')); ?>" alt="img" class="w-10">
                                                <span>Jim Red</span>
                                                </a>
                                            </td>
                                            <td>10 files</td>
                                            <td>500MB</td>
                                            <td>Folder</td>
                                            <td>13-09-2022,5:20</td>
                                            <td>
                                                <div class="flex -space-x-2 rtl:space-x-reverse">
                                                <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white" src="<?php echo e(asset('build/assets/img/users/1.jpg')); ?>" alt="Image Description">
                                                <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white" src="<?php echo e(asset('build/assets/img/users/2.jpg')); ?>" alt="Image Description">
                                                <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white" src="<?php echo e(asset('build/assets/img/users/3.jpg')); ?>" alt="Image Description">
                                                <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white" src="<?php echo e(asset('build/assets/img/users/6.jpg')); ?>" alt="Image Description">
                                                <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white" src="<?php echo e(asset('build/assets/img/users/7.jpg')); ?>" alt="Image Description">
                                                </div>
                                            </td>
                                            <td class="!text-end">
                                                <div class="hs-dropdown ti-dropdown">
                                                <button aria-label="button" id="hs-dropdown-custom-icon-trigger4" type="button" class="hs-dropdown-toggle p-3 ti-dropdown-toggle">
                                                    <svg class="ti-dropdown-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                        <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                        </path>
                                                    </svg>
                                                </button>
                                                <div class="hs-dropdown-menu ti-dropdown-menu hidden" aria-labelledby="hs-dropdown-custom-icon-trigger4" >
                                                    <a class="ti-dropdown-item" href="javascript:void(0);">
                                                        Action
                                                    </a>
                                                    <a class="ti-dropdown-item" href="javascript:void(0);">
                                                        Another Action
                                                    </a>
                                                    <a class="ti-dropdown-item" href="javascript:void(0);">
                                                        Something Else Here
                                                    </a>
                                                </div>
                                                </div>
                                            </td>
                                            </tr>
                                        </tbody>
                                        </table>
                                    </div>
                                    <div class="py-1 ltr:float-right rtl:float-left">
                                        <nav class="flex items-center space-x-2 rtl:space-x-reverse">
                                        <a class="text-gray-500 dark:text-white/70 hover:text-primary p-4 inline-flex items-center gap-2 font-medium rounded-sm" href="javascript:void(0);">
                                            <span aria-hidden="true">«</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="w-10 h-10 bg-primary text-white p-4 inline-flex items-center text-sm font-medium rounded-full" href="javascript:void(0);" aria-current="page">1</a>
                                        <a class="w-10 h-10 text-gray-500 dark:text-white/70 hover:text-primary p-4 inline-flex items-center text-sm font-medium rounded-full" href="javascript:void(0);">2</a>
                                        <a class="w-10 h-10 text-gray-500 dark:text-white/70 hover:text-primary p-4 inline-flex items-center text-sm font-medium rounded-full" href="javascript:void(0);">3</a>
                                        <a class="text-gray-500 dark:text-white/70 hover:text-primary p-4 inline-flex items-center gap-2 font-medium rounded-sm" href="javascript:void(0);">
                                            <span class="sr-only">Next</span>
                                            <span aria-hidden="true">»</span>
                                        </a>
                                        </nav>
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

        <!-- CHARTJS CHART JS -->
        <script src="<?php echo e(asset('build/assets/libs/chart.js/chart.min.js')); ?>"></script>

        <!-- FILEPOND FILE UPLOAD JS -->
        <script src="<?php echo e(asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js')); ?>"></script>
        <script src="<?php echo e(asset('build/assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js')); ?>"></script>
        <script src="<?php echo e(asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.js')); ?>"></script>
        <script src="<?php echo e(asset('build/assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js')); ?>"></script>
        <script src="<?php echo e(asset('build/assets/libs/filepond/filepond.min.js')); ?>"></script>

        <!-- FILEMANAGER JS -->
        <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/filemanager.js'); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\laravel\vite\synto\synto\resources\views/pages/filemanager.blade.php ENDPATH**/ ?>