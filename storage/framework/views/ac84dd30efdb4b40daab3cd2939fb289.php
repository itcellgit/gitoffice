<?php $__env->startSection('styles'); ?>

        <!-- QUILL CSS -->
        <link id="style" href="<?php echo e(asset('build/assets/libs/quill/quill.snow.css')); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

                    <div class="content">

                        <!-- Start::main-content -->
                        <div class="main-content">

                            <!-- Page Header -->
                            <div class="block justify-between page-header sm:flex">
                                <div>
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Quil Editor</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                    <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Forms
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                    </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        Quil Editor
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-6">
                                <div class="col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Quill Snow Editor</h5>
                                        </div>
                                        <div class="box-body">
                                            <div id="editor">
                                                <h4><b class="ql-size-large">Quill Snow"</b> is a free, open source <a
                                                        href="https://github.com/quilljs/quill/" target="_blank">Quill Editor</a>
                                                    built for the modern web. With its <a href="https://quilljs.com/docs/modules/"
                                                        target="_blank">modular architecture</a> and expressive API, it is
                                                    completely customizable to fit any need.</h4>
                                                <p><br></p>
                                                <ol>
                                                    <li class="ql-size-normal">Write text select and edit with multiple options.
                                                    </li>
                                                    <li class="">This is quill snow editor.</li>
                                                    <li class="">Easy to customize and flexible.</li>
                                                </ol>
                                                <p><br></p>
                                                <h4>Quill officially supports a standard toolbar theme <a
                                                        href="https://github.com/quilljs/quill/" target="_blank">"Snow"</a> and a
                                                    floating tooltip theme <a href="https://github.com/quilljs/quill/"
                                                        target="_blank">"Bubble"</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-1 -->

                            <!-- Start::row-2 -->
                            <div class="grid grid-cols-12 gap-6">
                                <div class="col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Quill Snow Editor In Modal</h5>
                                        </div>
                                        <div class="box-body">
                                            <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary"
                                                data-hs-overlay="#quil-editor">
                                                Open modal
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-2 -->

                            <!-- Start::row-3 -->
                            <div class="grid grid-cols-12 gap-6">
                                <div class="col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Quill Bubble Editor</h5>
                                        </div>
                                        <div class="box-body">
                                            <div class="ql-scrolling-demo border dark:border-white/10 rounded-sm"
                                                id="scrolling-container">
                                                <div id="quillInline">
                                                    <h4><b class="ql-size-large">Quill Bubble</b> is a free, open source <a
                                                            href="https://github.com/quilljs/quill/" target="_blank">Quill
                                                            Editor</a> built for the modern web. With its <a
                                                            href="https://quilljs.com/docs/modules/" target="_blank">modular
                                                            architecture</a> and expressive API, it is completely customizable to
                                                        fit any need.</h4>
                                                    <p><br></p>
                                                    <ol>
                                                        <li class="ql-size-normal">Write text select and edit with multiple options.
                                                        </li>
                                                        <li class="">This is quill bubble editor.</li>
                                                        <li class="">Easy to customize and flexible.</li>
                                                    </ol>
                                                    <p><br></p>
                                                    <h4>Quill officially supports a standard toolbar theme <a
                                                            href="https://github.com/quilljs/quill/" target="_blank">"Snow"</a> and
                                                        a floating tooltip theme <a href="https://github.com/quilljs/quill/"
                                                            target="_blank">"Bubble"</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-3 -->


                        </div>
                        <!-- Start::main-content -->

                    </div>

                    <!-- Start quil-editor -->
                    <div id="quil-editor" class="hs-overlay ti-modal hidden">
                        <div class="ti-modal-box">
                            <div class="ti-modal-content">
                                <div class="ti-modal-header">
                                    <h3 class="ti-modal-title">
                                        Modal title
                                    </h3>
                                    <button type="button" class="hs-dropdown-toggle ti-modal-clode-btn"
                                        data-hs-overlay="#quil-editor">
                                        <span class="sr-only">Close</span>
                                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="ti-modal-body">
                                    <div class="ql-wrapper ql-wrapper-modal ht-250">
                                        <div class="flex-1" id="quillEditorModal">
                                            <h4><b class="ql-size-large">Quill Snow"</b> is a free, open source <a
                                                    href="https://github.com/quilljs/quill/" target="_blank">Quill Editor</a> built
                                                for the modern web. With its <a href="https://quilljs.com/docs/modules/"
                                                    target="_blank">modular architecture</a> and expressive API, it is completely
                                                customizable to fit any need.</h4>
                                            <p><br></p>
                                            <ol>
                                                <li class="ql-size-normal">Write text select and edit with multiple options.</li>
                                                <li class="">This is quill snow editor.</li>
                                                <li class="">Easy to customize and flexible.</li>
                                            </ol>
                                            <p><br></p>
                                            <h4>Quill officially supports a standard toolbar theme <a
                                                    href="https://github.com/quilljs/quill/" target="_blank">"Snow"</a> and a
                                                floating tooltip theme <a href="https://github.com/quilljs/quill/"
                                                    target="_blank">"Bubble"</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="ti-modal-footer">
                                    <button type="button"
                                        class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                        data-hs-overlay="#quil-editor">
                                        Close
                                    </button>
                                    <a class="ti-btn ti-btn-primary" href="javascript:void(0);">
                                        Save changes
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End quil-editor -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

        <!-- QUILL EDITOR JS -->
        <script src="<?php echo e(asset('build/assets/libs/quill/quill.min.js')); ?>"></script>
        <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/quill.js'); ?>
        

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\my-projects\laravel\vite\synto\synto-laravel\synto\resources\views/pages/quil-editor.blade.php ENDPATH**/ ?>