<aside class="app-sidebar" id="sidebar">

                <!-- Start::main-sidebar-header -->
                <div class="main-sidebar-header">
                    <a href="<?php echo e(url('index')); ?>" class="header-logo">
                        <img src="<?php echo e(asset('build/assets/img/brand-logos/git_logo.jpg')); ?>" alt="logo" class="main-logo desktop-logo w-10 h-10">
                        <img src="<?php echo e(asset('build/assets/img/brand-logos/git_logo.jpg')); ?>" alt="logo" class="main-logo toggle-logo w-10 h-10">
                        <img src="<?php echo e(asset('build/assets/img/brand-logos/git_logo.jpg')); ?>" alt="logo" class="main-logo desktop-dark w-10 h-10">
                        <img src="<?php echo e(asset('build/assets/img/brand-logos/git_logo.jpg')); ?>" alt="logo" class="main-logo toggle-dark w-10 h-10">
                    </a>
                </div>
                <!-- End::main-sidebar-header -->

                <!-- Start::main-sidebar -->
                <div class="main-sidebar " id="sidebar-scroll">

                    <!-- Start::nav -->
                    <nav class="main-menu-container nav nav-pills flex-column sub-open">
                        <div class="slide-left" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24"
                                height="24" viewBox="0 0 24 24">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                            </svg></div>
                        <ul class="main-menu">
                            <!-- Start::slide__category -->
                            <li class="slide__category"><span class="category-name">Main</span></li>
                            <!-- End::slide__category -->
                            <li class="slide">
                                <a href="<?php echo e(url('/ticket/dashboard')); ?>" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M3 13H11V3H3V13ZM3 21H11V15H3V21ZM13 21H21V11H13V21ZM13 3V9H21V3H13Z" fill="rgba(255,255,255,1)"></path></svg>
                                    <span class="side-menu__label">Dashboard</span>
                                </a>
                            </li>
                            
                        </ul>
                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24"
                                height="24" viewBox="0 0 24 24">
                                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                            </svg>
                        </div>
                    </nav>
                    <!-- End::nav -->

                </div>
                <!-- End::main-sidebar -->

            </aside><?php /**PATH F:\laravel Apps\gitoffice\resources\views/layouts/components/Ticketing/ticketingsidebar.blade.php ENDPATH**/ ?>