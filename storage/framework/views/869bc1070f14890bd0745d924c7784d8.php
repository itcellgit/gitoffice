
        <header class="header custom-sticky !top-0 !w-full lg:hidden">
            <nav class="main-header" aria-label="Global">
                <div class="header-content justify-between">
                <div class="header-left">
                    <!-- Navigation Toggle -->
                    <div class="">
                    <button type="button" class="sidebar-toggle">
                        <span class="sr-only">Toggle Navigation</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-headerprime" viewBox="0 0 24 24">
                        <path d="M24 0v24H0V0h24z" fill="none" opacity=".87"></path>
                        <path d="M18.41 16.59L13.82 12l4.59-4.59L17 6l-6 6 6 6 1.41-1.41zM6 6h2v12H6V6z"></path>
                        </svg>
                    </button>
                    </div>
                </div>
                <div class="header-center">
                    <!-- End Navigation Toggle -->
                    <div class="responsive-logo my-auto">
                    <a class="responsive-logo-light" href="<?php echo e(url('index')); ?>" aria-label="Brand"><img
                        src="<?php echo e(asset('build/assets/img/brand-logos/desktop-logo.png')); ?>" alt="logo" class="mx-auto"></a>
                    <a class="responsive-logo-dark" href="<?php echo e(url('index')); ?>" aria-label="Brand"><img
                        src="<?php echo e(asset('build/assets/img/brand-logos/desktop-dark.png')); ?>" alt="logo" class="mx-auto"></a>
                    </div>
                </div>
                <div class="header-right !ml-0">
                    <button aria-label="button" type="button" class="hs-collapse-toggle ti-btn ti-btn-ghost-light m-0 py-1"
                    id="headercollapse" data-hs-collapse="#headercollapse-heading">
                    <i class="ri-more-2-line text-base"></i>
                    </button>
                    <div id="headercollapse-heading"
                    class="hs-collapse w-full overflow-hidden transition-[height] duration-300 hidden absolute top-[4.45rem] inset-x-0 p-5 bg-white dark:bg-bgdark"
                    aria-labelledby="headercollapse">
                    <div class="flex space-x-3 rtl:space-x-reverse">
                        <a href="<?php echo e(url('signup')); ?>" class="ti-btn w-[6.375rem] ti-btn-dark m-0 p-2">Sign
                        Up</a>
                        <a href="<?php echo e(url('signup')); ?>" class="ti-btn w-[6.375rem] m-0 p-2 ti-btn-primary">Get Started</a>
                        <a aria-label="anchor" href="javascript:void(0);" class="ti-btn m-0 p-2 px-3 ti-btn-secondary"
                        data-hs-overlay="#hs-overlay-switcher"><i class="ri-settings-2-line animate-spin"></i></a>
                    </div>
                    </div>
                </div>
                </div>
            </nav>
        </header><?php /**PATH E:\projects\my-projects\laravel\vite\synto\synto-laravel\synto\resources\views/layouts/components/landing-header.blade.php ENDPATH**/ ?>