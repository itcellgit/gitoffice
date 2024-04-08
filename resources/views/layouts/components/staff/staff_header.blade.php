
<header class="header custom-sticky !top-0 !w-full">
    <nav class="main-header" aria-label="Global">
    <div class="header-content">
        <div class="header-left">
        <!-- Navigation Toggle -->
        <div class="">
            <button type="button" class="sidebar-toggle !w-100 !h-100">
                <span class="sr-only">Toggle Navigation</span>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M8 4H21V6H8V4ZM3 3.5H6V6.5H3V3.5ZM3 10.5H6V13.5H3V10.5ZM3 17.5H6V20.5H3V17.5ZM8 11H21V13H8V11ZM8 18H21V20H8V18Z"></path></svg>
            </button>
        </div>
        <!-- End Navigation Toggle -->
        </div>

        <div class="responsive-logo">

        {{-- <a class="responsive-logo-dark" href="{{url('index')}}" aria-label="Brand"><img
            src="{{asset('build/assets/img/brand-logos/git_logo.jpg')}}" alt="logo" class="mx-auto"></a>
        <a class="responsive-logo-light" href="{{url('index')}}" aria-label="Brand"><img
            src="{{asset('build/assets/img/brand-logos/git_logo.jpg')}}" alt="logo" class="mx-auto"></a> --}}
        </div>

        <div class="header-right">
        <div class="responsive-headernav">
            <div class="header-nav-right">


            <div class="header-theme-mode hidden sm:block">
                <a aria-label="anchor" class="hs-dark-mode-active:hidden flex hs-dark-mode group flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full font-medium bg-gray-100 hover:bg-gray-200 text-gray-500 align-middle focus:outline-none focus:ring-0 focus:ring-gray-400 focus:ring-offset-0 focus:ring-offset-white transition-all text-xs dark:bg-bgdark dark:hover:bg-black/20 dark:text-white/70 dark:hover:text-white dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                href="javascript:;" data-hs-theme-click-value="dark">
                    <!--Moon Logo from remixicon-->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12 21.9966C6.47715 21.9966 2 17.5194 2 11.9966C2 6.47373 6.47715 1.99658 12 1.99658C17.5228 1.99658 22 6.47373 22 11.9966C22 17.5194 17.5228 21.9966 12 21.9966ZM5.32889 16.4219C6.76378 18.5674 9.20868 19.9801 11.9836 19.9801C16.4018 19.9801 19.9836 16.3984 19.9836 11.9801C19.9836 9.20518 18.5707 6.76021 16.4251 5.32535C17.2705 8.35312 16.5025 11.7367 14.1213 14.118C11.7401 16.4992 8.3566 17.2671 5.32889 16.4219Z" fill="rgba(0,0,0,1)"></path></svg>
                </a>
                <a aria-label="anchor" class="hs-dark-mode-active:flex hidden hs-dark-mode group flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full font-medium bg-gray-100 hover:bg-gray-200 text-gray-500 align-middle focus:outline-none focus:ring-0 focus:ring-gray-400 focus:ring-offset-0 focus:ring-offset-white transition-all text-xs dark:bg-bgdark dark:hover:bg-black/20 dark:text-white/70 dark:hover:text-white dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                href="javascript:;" data-hs-theme-click-value="light">
                <!-- Sun logo from remixicon-->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12 18C8.68629 18 6 15.3137 6 12C6 8.68629 8.68629 6 12 6C15.3137 6 18 8.68629 18 12C18 15.3137 15.3137 18 12 18ZM11 1H13V4H11V1ZM11 20H13V23H11V20ZM3.51472 4.92893L4.92893 3.51472L7.05025 5.63604L5.63604 7.05025L3.51472 4.92893ZM16.9497 18.364L18.364 16.9497L20.4853 19.0711L19.0711 20.4853L16.9497 18.364ZM19.0711 3.51472L20.4853 4.92893L18.364 7.05025L16.9497 5.63604L19.0711 3.51472ZM5.63604 16.9497L7.05025 18.364L4.92893 20.4853L3.51472 19.0711L5.63604 16.9497ZM23 11V13H20V11H23ZM4 11V13H1V11H4Z"></path></svg>
            </a>
            </div>
            <div class="header-fullscreen hidden lg:block">
                <a aria-label="anchor" href="javascript:void(0);" onclick="openFullscreen();"
                class="inline-flex flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full font-medium bg-gray-100 hover:bg-gray-200 text-gray-500 align-middle focus:outline-none focus:ring-0 focus:ring-gray-400 focus:ring-offset-0 focus:ring-offset-white transition-all text-xs dark:bg-bgdark dark:hover:bg-black/20 dark:text-white/70 dark:hover:text-white dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                <!--full screen open logo-->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16 3H22V9H20V5H16V3ZM2 3H8V5H4V9H2V3ZM20 19V15H22V21H16V19H20ZM4 19H8V21H2V15H4V19Z"></path></svg>
                 <!-- full screen close logo-->
                 <svg xmlns="http://www.w3.org/2000/svg" class="hidden" viewBox="0 0 24 24" width="16" height="16"><path d="M18 7H22V9H16V3H18V7ZM8 9H2V7H6V3H8V9ZM18 17V21H16V15H22V17H18ZM8 15V21H6V17H2V15H8Z"></path></svg>
                </a>
            </div>


            <div class="header-notification hs-dropdown ti-dropdown hidden sm:block"
                data-hs-dropdown-placement="bottom-right">
                <button id="dropdown-notification" type="button"
                    class="hs-dropdown-toggle ti-dropdown-toggle p-0 border-0 flex-shrink-0 h-[2.375rem] w-[2.375rem] rounded-full shadow-none focus:ring-gray-400 text-xs dark:focus:ring-white/10">
                        {{-- notification logo --}}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M20 17H22V19H2V17H4V10C4 5.58172 7.58172 2 12 2C16.4183 2 20 5.58172 20 10V17ZM9 21H15V23H9V21Z"></path></svg>
                    <span class="flex absolute h-5 w-5 top-0 ltr:right-0 rtl:left-0 -mt-1 ltr:-mr-1 rtl:-ml-1">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-success/80 opacity-75"></span>
                        <span
                        class="relative inline-flex rounded-full h-5 w-5 bg-success text-white justify-center items-center" id="notify-data"></span>
                    </span>
                </button>
                <div class="hs-dropdown-menu ti-dropdown-menu w-[20rem] border-0" aria-labelledby="dropdown-notification">
                    <div class="ti-dropdown-header !bg-primary border-b dark:border-white/10 flex justify-between items-center">
                        <p class="ti-dropdown-header-title !text-white font-semibold">Notifications</p>
                        <a href="javascript:void(0)" class="badge bg-black/20 text-white rounded-sm">Mark All Read</a>
                    </div>
                    <!--<div class="ti-dropdown-divider divide-y divide-gray-200 dark:divide-white/10">
                        <div class="py-2 first:pt-0 last:pb-0" id="allNotifyContainer">
                        <div class="ti-dropdown-item relative header-box">
                            <a href="{{url('mail-inbox')}}" class="flex space-x-3 rtl:space-x-reverse">
                            <div class="ltr:mr-2 rtl:ml-2 avatar rounded-full ring-0">
                                <img src="{{asset('build/assets/img/users/17.jpg')}}" alt="img" class="rounded-sm">
                            </div>
                            <div class="relative w-full">
                                <h5 class="text-sm text-gray-800 dark:text-white font-semibold mb-1">Elon Isk</h5>
                                <p class="text-xs mb-1 max-w-[200px] truncate">Hello there! How are you doing? Call me when...</p>
                                <p class="text-xs text-gray-400 dark:text-white/70">2 min</p>
                            </div>
                            </a>
                            <a aria-label="anchor" href="javascript:void(0);" class="header-remove-btn ltr:ml-auto rtl:mr-auto text-lg text-gray-500/20 dark:text-white/20 hover:text-gray-800 dark:hover:text-white">
                            <i class="ri-close-circle-line"></i>
                            </a>
                        </div>
                        <div class="ti-dropdown-item relative header-box">
                            <a href="{{url('mail-inbox')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
                            <div class="ltr:mr-2 rtl:ml-2 avatar rounded-full ring-0">
                                <img src="{{asset('build/assets/img/users/2.jpg')}}" alt="img" class="rounded-sm">
                            </div>
                            <div class="relative w-full">
                                <h5 class="text-sm text-gray-800 dark:text-white font-semibold mb-1">Shakira Sen</h5>
                                <p class="text-xs mb-1 max-w-[200px] truncate">I would like to discuss about that assets...</p>
                                <p class="text-xs text-gray-400 dark:text-white/70">09:43</p>
                            </div>
                            </a>
                            <a aria-label="anchor" href="javascript:void(0);" class="header-remove-btn ltr:ml-auto rtl:mr-auto text-lg text-gray-500/20 dark:text-white/20 hover:text-gray-800 dark:hover:text-white">
                            <i class="ri-close-circle-line"></i>
                            </a>
                        </div>
                        <div class="ti-dropdown-item relative header-box">
                            <a href="{{url('mail-inbox')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
                            <div class="ltr:mr-2 rtl:ml-2 avatar rounded-full ring-0">
                                <img src="{{asset('build/assets/img/users/21.jpg')}}" alt="img" class="rounded-sm">
                            </div>
                            <div class="relative w-full">
                                <h5 class="text-sm text-gray-800 dark:text-white font-semibold mb-1">Sebastian</h5>
                                <p class="text-xs mb-1 max-w-[200px] truncate">Shall we go to the cafe at downtown...</p>
                                <p class="text-xs text-gray-400 dark:text-white/70">yesterday</p>
                            </div>
                            </a>
                            <a aria-label="anchor" href="javascript:void(0);" class="header-remove-btn ltr:ml-auto rtl:mr-auto text-lg text-gray-500/20 dark:text-white/20 hover:text-gray-800 dark:hover:text-white">
                            <i class="ri-close-circle-line"></i>
                            </a>
                        </div>
                        <div class="ti-dropdown-item relative header-box">
                            <a href="{{url('mail-inbox')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
                            <div class="ltr:mr-2 rtl:ml-2 avatar rounded-full ring-0">
                                <img src="{{asset('build/assets/img/users/11.jpg')}}" alt="img" class="rounded-sm">
                            </div>
                            <div class="relative w-full">
                                <h5 class="text-sm text-gray-800 dark:text-white font-semibold mb-1">Charlie Davieson</h5>
                                <p class="text-xs mb-1 max-w-[200px] truncate">Lorem ipsum dolor sit amet, consectetur</p>
                                <p class="text-xs text-gray-400 dark:text-white/70">yesterday</p>
                            </div>
                            </a>
                            <a aria-label="anchor" href="javascript:void(0);" class="header-remove-btn ltr:ml-auto rtl:mr-auto text-lg text-gray-500/20 dark:text-white/20 hover:text-gray-800 dark:hover:text-white">
                            <i class="ri-close-circle-line"></i>
                            </a>
                        </div>
                        </div>
                        <div class="py-2 first:pt-0 px-5">
                        <a class="w-full ti-btn ti-btn-primary p-2" href="{{url('mail-inbox')}}">
                            View All
                        </a>
                        </div>
                    </div>-->
                </div>
            </div>

            <div class="header-profile hs-dropdown ti-dropdown" data-hs-dropdown-placement="bottom-right">
                <button id="dropdown-profile" type="button"
                    class="hs-dropdown-toggle ti-dropdown-toggle gap-2 p-0 flex-shrink-0 h-8 w-8 rounded-full shadow-none focus:ring-gray-400 text-xs dark:focus:ring-white/10">
                    <img class="inline-block rounded-full ring-2 ring-white dark:ring-white/10"
                        src="{{asset('build/assets/img/users/avtar1.jpg')}}" alt="Image Description">
                </button>

                <div class="hs-dropdown-menu ti-dropdown-menu border-0 w-[20rem]" aria-labelledby="dropdown-profile">
                <div class="ti-dropdown-header !bg-primary flex">
                    <div class="ltr:mr-3 rtl:ml-3">
                    <img class="avatar shadow-none rounded-full !ring-transparent"
                        src="{{asset('build/assets/img/users/avtar1.jpg')}}" alt="profile-img">
                    </div>
                    <div>
                    <p class="ti-dropdown-header-title !text-white">{{Auth::user()->role}}</p>
                        {{-- <p class="ti-dropdown-header-content !text-white/50">Establishment Section</p> --}}
                    </div>
                </div>
                <div class="mt-2 ti-dropdown-divider">
                    <a href="{{url('Staff/Teaching/updateprofile')}}" class="ti-dropdown-item">
                        <!-- pofile logo-->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M2 3.9934C2 3.44476 2.45531 3 2.9918 3H21.0082C21.556 3 22 3.44495 22 3.9934V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V3.9934ZM6 15V17H18V15H6ZM6 7V13H12V7H6ZM14 7V9H18V7H14ZM14 11V13H18V11H14ZM8 9H10V11H8V9Z"></path></svg>
                            Profile
                    </a>

                    <a id="change_pwd_btn" data-hs-overlay="#change_password_btn" class="ti-dropdown-item">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                        <path d="M12 4C9.4095 4 7.10606 5.23053 5.64274 7.14274L8 9.5H2V3.5L4.21863 5.71863C6.05061 3.452 8.85558 2 12 2 17.5228 2 22 6.47715 22 12H20C20 7.58172 16.4183 4 12 4ZM4 12C4 16.4183 7.58172 20 12 20 14.5905 20 16.894 18.7695 18.3573 16.8573L16 14.5 22 14.5V20.5L19.7814 18.2814C17.9494 20.548 15.1444 22 12 22 6.47715 22 2 17.5228 2 12H4Z" fill="currentColor"></path>
                        </svg>
                        <!--change password logo-->
                        Change Password
                    </a>

                    <!--code for seperate page change password-->


                    <!--code for seperate page change password-->
                    <a href="{{route('logout')}}" class="ti-dropdown-item">
                        <!-- logout logo-->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M5 22C4.44772 22 4 21.5523 4 21V3C4 2.44772 4.44772 2 5 2H19C19.5523 2 20 2.44772 20 3V6H18V4H6V20H18V18H20V21C20 21.5523 19.5523 22 19 22H5ZM18 16V13H11V11H18V8L23 12L18 16Z"></path></svg>
                    Log Out
                    </a>
                </div>
                </div>
            </div>
            <div class="switcher-icon">
                <button aria-label="button" type="button"
                class="hs-dropdown-toggle inline-flex flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full font-medium bg-gray-100 hover:bg-gray-200 text-gray-500 align-middle focus:outline-none focus-visible:outline-none focus:ring-0 focus:ring-gray-400 focus:ring-offset-0 focus:ring-offset-white transition-all text-xs dark:bg-bgdark dark:hover:bg-black/20 dark:text-white/70 dark:hover:text-white dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                data-hs-overlay="#hs-overlay-switcher">
                <i class="ri-settings-5-line header-icon animate-spin"></i>
                </button>
            </div>
            </div>
        </div>
        </div>
    </div>
    </nav>
</header>

