@extends('layouts.master')

@section('styles')

        <!-- DROPZONE FILE UPLOAD CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/dropzone/dropzone.css')}}">

        <!-- FILEPOND FILE UPLOAD CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/filepond/filepond.min.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css')}}">

@endsection

@section('content')

                    <div class="content">

                        <!-- Start::main-content -->
                        <div class="main-content">

                            <!-- Page Header -->
                            <div class="block justify-between page-header sm:flex">
                                <div>
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> File Uploads</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                    <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Forms
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                    </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        File Uploads
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-6">
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Basic File Input</h5>
                                        </div>
                                        <div class="box-body">
                                            <div>
                                                <label for="file-input" class="sr-only">Choose file</label>
                                                <input type="file" name="file-input" id="file-input" class="block w-full border border-gray-200 focus:shadow-sm dark:focus:shadow-white/10 rounded-sm text-sm focus:z-10 focus:outline-0 focus:border-gray-200 dark:focus:border-white/10 dark:border-white/10 dark:text-white/70
                                                file:border-0
                                                file:bg-gray-100 ltr:file:mr-4 rtl:file:ml-4
                                                file:py-3 file:px-4
                                                dark:file:bg-black/20 dark:file:text-white/70">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">File Input Buttons</h5>
                                        </div>
                                        <div class="box-body">
                                            <div>
                                                <label class="block">
                                                    <span class="sr-only">Choose Profile photo</span>
                                                    <input type="file" class="block w-full text-sm text-gray-500 dark:text-white/70 focus:outline-0
                                                    ltr:file:mr-4 rtl:file:ml-4 file:py-2 file:px-4
                                                    file:rounded-sm file:border-0
                                                    file:text-sm file:font-semibold
                                                    file:bg-primary file:text-white
                                                    hover:file:bg-primary focus-visible:outline-none
                                                ">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-1 -->

                            <!-- Start::row-2 -->
                            <div class="grid grid-cols-12 gap-6">
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">File Input Sizes</h5>
                                        </div>
                                        <div class="box-body space-y-3">
                                            <div>
                                                <label for="small-file-input" class="sr-only">Choose file</label>
                                                <input type="file" name="small-file-input" id="small-file-input" class="block w-full border border-gray-200 focus:shadow-sm dark:focus:shadow-white/10 rounded-sm text-sm focus:z-10 focus:outline-0 focus:border-gray-200 dark:focus:border-white/10 dark:border-white/10 dark:text-white/70
                                                file:border-0
                                                file:bg-gray-100 ltr:file:mr-4 rtl:file:ml-4
                                                file:py-2 file:px-4
                                                dark:file:bg-black/20 dark:file:text-white/70">
                                            </div>

                                            <div>
                                                <label for="file-input-medium" class="sr-only">Choose file</label>
                                                <input type="file" name="file-input-medium" id="file-input-medium" class="block w-full border border-gray-200 focus:shadow-sm dark:focus:shadow-white/10 rounded-sm text-sm focus:z-10 focus:outline-0 focus:border-gray-200 dark:focus:border-white/10 dark:border-white/10 dark:text-white/70
                                                file:border-0
                                                file:bg-gray-100 ltr:file:mr-4 rtl:file:ml-4
                                                file:py-3 file:px-4
                                                dark:file:bg-black/20 dark:file:text-white/70">
                                            </div>

                                            <div>
                                                <label for="large-file-input" class="sr-only">Choose file</label>
                                                <input type="file" name="large-file-input" id="large-file-input" class="block w-full border border-gray-200 focus:shadow-sm dark:focus:shadow-white/10 rounded-sm text-sm focus:z-10 focus:outline-0 focus:border-gray-200 dark:focus:border-white/10 dark:border-white/10 dark:text-white/70
                                                file:border-0
                                                file:bg-gray-100 ltr:file:mr-4 rtl:file:ml-4
                                                file:py-3 file:px-4 file:sm:py-5
                                                dark:file:bg-black/20 dark:file:text-white/70">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Dropzone File Upload</h5>
                                        </div>
                                        <div class="box-body">
                                            <div data-single="true" class="dropzone"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Start::row-2 -->
                            
                            <!-- End::row-3 -->
                            <div class="grid grid-cols-12 gap-6">
                                <div class="col-span-12 lg:col-span-4">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Single File Upload</h5>
                                        </div>
                                        <div class="box-body">
                                            <input type="file" class="filepond basic-filepond" data-allow-reorder="true" data-max-file-size="3MB" data-max-files="1">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-4">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Multiple File Upload</h5>
                                        </div>
                                        <div class="box-body">
                                            <input type="file" class="filepond multiple-filepond" multiple data-allow-reorder="true" data-max-file-size="3MB" data-max-files="5">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-4">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Circular File Upload</h5>
                                        </div>
                                        <div class="box-body">
                                            <input type="file" class="filepond circular-filepond" accept="image/png, image/jpeg, image/gif">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-3 -->

                        </div>
                        <!-- Start::main-content -->

                    </div>

@endsection

@section('scripts')

        <!-- DROPZONE FILE UPLOAD JS -->
        <script src="{{asset('build/assets/libs/dropzone/dropzone-min.js')}}"></script>

        <!-- FILEPOND FILE UPLOAD JS -->
        <script src="{{asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-crop/filepond-plugin-image-crop.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-resize/filepond-plugin-image-resize.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-transform/filepond-plugin-image-transform.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond/filepond.min.js')}}"></script>
        @vite('resources/assets/js/fileupload.js')
        

@endsection