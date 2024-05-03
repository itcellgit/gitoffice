
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
                                <a href="<?php echo e(url('/ESTB/dashboard')); ?>" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M3 13H11V3H3V13ZM3 21H11V15H3V21ZM13 21H21V11H13V21ZM13 3V9H21V3H13Z" fill="rgba(255,255,255,1)"></path></svg>
                                    <span class="side-menu__label">Dashboard</span>
                                </a>
                            </li>
                            <li class="slide">
                                <a href="<?php echo e(url('ESTB/associations')); ?>" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M11.8611 2.39057C12.8495 1.73163 14.1336 1.71797 15.1358 2.35573L19.291 4.99994H20.9998C21.5521 4.99994 21.9998 5.44766 21.9998 5.99994V14.9999C21.9998 15.5522 21.5521 15.9999 20.9998 15.9999H19.4801C19.5396 16.9472 19.0933 17.9102 18.1955 18.4489L13.1021 21.505C12.4591 21.8907 11.6609 21.8817 11.0314 21.4974C10.3311 22.1167 9.2531 22.1849 8.47104 21.5704L3.33028 17.5312C2.56387 16.9291 2.37006 15.9003 2.76579 15.0847C2.28248 14.7057 2 14.1254 2 13.5109V6C2 5.44772 2.44772 5 3 5H7.94693L11.8611 2.39057ZM4.17264 13.6452L4.86467 13.0397C6.09488 11.9632 7.96042 12.0698 9.06001 13.2794L11.7622 16.2518C12.6317 17.2083 12.7903 18.6135 12.1579 19.739L17.1665 16.7339C17.4479 16.5651 17.5497 16.2276 17.4448 15.9433L13.0177 9.74551C12.769 9.39736 12.3264 9.24598 11.9166 9.36892L9.43135 10.1145C8.37425 10.4316 7.22838 10.1427 6.44799 9.36235L6.15522 9.06958C5.58721 8.50157 5.44032 7.69318 5.67935 7H4V13.5109L4.17264 13.6452ZM14.0621 4.04306C13.728 3.83047 13.3 3.83502 12.9705 4.05467L7.56943 7.65537L7.8622 7.94814C8.12233 8.20827 8.50429 8.30456 8.85666 8.19885L11.3419 7.45327C12.5713 7.08445 13.8992 7.53859 14.6452 8.58303L18.5144 13.9999H19.9998V6.99994H19.291C18.9106 6.99994 18.5381 6.89148 18.2172 6.68727L14.0621 4.04306ZM6.18168 14.5448L4.56593 15.9586L9.70669 19.9978L10.4106 18.7659C10.6256 18.3897 10.5738 17.9178 10.2823 17.5971L7.58013 14.6247C7.2136 14.2215 6.59175 14.186 6.18168 14.5448Z" fill="rgba(255,255,255,1)"></path></svg>
                                    <span class="side-menu__label">Associations</span>
                                </a>
                            </li>
                            <li class="slide">
                                <a href="<?php echo e(url('ESTB/departments')); ?>" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M22 21H2V19H3V4C3 3.44772 3.44772 3 4 3H18C18.5523 3 19 3.44772 19 4V9H21V19H22V21ZM17 19H19V11H13V19H15V13H17V19ZM17 9V5H5V19H11V9H17ZM7 11H9V13H7V11ZM7 15H9V17H7V15ZM7 7H9V9H7V7Z" fill="rgba(255,255,255,1)"></path></svg>
                                    <span class="side-menu__label">Departments</span>
                                </a>
                            </li>
                            <li class="slide">
                                <a href="<?php echo e(url('ESTB/designations')); ?>" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M17 15.2454V22.1169C17 22.393 16.7761 22.617 16.5 22.617C16.4094 22.617 16.3205 22.5923 16.2428 22.5457L12 20L7.75725 22.5457C7.52046 22.6877 7.21333 22.6109 7.07125 22.3742C7.02463 22.2964 7 22.2075 7 22.1169V15.2454C5.17107 13.7793 4 11.5264 4 9C4 4.58172 7.58172 1 12 1C16.4183 1 20 4.58172 20 9C20 11.5264 18.8289 13.7793 17 15.2454ZM12 15C15.3137 15 18 12.3137 18 9C18 5.68629 15.3137 3 12 3C8.68629 3 6 5.68629 6 9C6 12.3137 8.68629 15 12 15ZM12 13C9.79086 13 8 11.2091 8 9C8 6.79086 9.79086 5 12 5C14.2091 5 16 6.79086 16 9C16 11.2091 14.2091 13 12 13Z" fill="rgba(255,255,255,1)"></path></svg>
                                    <span class="side-menu__label">Designations</span>
                                </a>
                            </li>
                            <li class="slide  has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M20 5C20 6.65685 18.6569 8 17 8C15.3431 8 14 6.65685 14 5C14 3.34315 15.3431 2 17 2C18.6569 2 20 3.34315 20 5ZM7 3C4.79086 3 3 4.79086 3 7V9H5V7C5 5.89543 5.89543 5 7 5H10V3H7ZM17 21C19.2091 21 21 19.2091 21 17V15H19V17C19 18.1046 18.1046 19 17 19H14V21H17ZM7 16C8.65685 16 10 14.6569 10 13C10 11.3431 8.65685 10 7 10C5.34315 10 4 11.3431 4 13C4 14.6569 5.34315 16 7 16ZM17 9C14.7909 9 13 10.7909 13 13H21C21 10.7909 19.2091 9 17 9ZM3 21C3 18.7909 4.79086 17 7 17C9.20914 17 11 18.7909 11 21H3Z" fill="rgba(255,255,255,1)"></path></svg>
                                    <span class="side-menu__label">Leaves Management</span>
                                    <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide"><a href="<?php echo e(url('/ESTB/leaves')); ?>" class="side-menu__item">Leaves</a></li>

                                   <li class="slide"><a href="<?php echo e(url('/ESTB/leaves/leave_entitlement')); ?>" class="side-menu__item">Enititlement</a></li>

                                    <li class="slide"><a href="<?php echo e(url('/ESTB/leaves/holiday_rhlist')); ?>" class="side-menu__item">Holiday And RH List</a></li>
                                    <li class="slide"><a href="<?php echo e(url('/ESTB/leaves_calender')); ?>" class="side-menu__item">Leaves Calender</a></li>


                                </ul>
                            </li>
                            <li class="slide has-sub">
                                <a href="#" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12.998 2V3H19.998V5H12.998V19H16.998V21H6.99805V19H10.998V5H3.99805V3H10.998V2H12.998ZM4.99805 6.34315L7.82647 9.17157C8.55033 9.89543 8.99805 10.8954 8.99805 12C8.99805 14.2091 7.20719 16 4.99805 16C2.78891 16 0.998047 14.2091 0.998047 12C0.998047 10.8954 1.44576 9.89543 2.16962 9.17157L4.99805 6.34315ZM18.998 6.34315L21.8265 9.17157C22.5503 9.89543 22.998 10.8954 22.998 12C22.998 14.2091 21.2072 16 18.998 16C16.7889 16 14.998 14.2091 14.998 12C14.998 10.8954 15.4458 9.89543 16.1696 9.17157L18.998 6.34315ZM18.998 9.17157L17.5838 10.5858C17.2099 10.9597 16.998 11.4606 16.998 12L20.998 12.001C20.998 11.4606 20.7862 10.9597 20.4123 10.5858L18.998 9.17157ZM4.99805 9.17157L3.58383 10.5858C3.20988 10.9597 2.99805 11.4606 2.99805 12L6.99805 12.001C6.99805 11.4606 6.78621 10.9597 6.41226 10.5858L4.99805 9.17157Z" fill="rgba(255,255,255,1)"></path></svg>
                                    <span class="side-menu__label">Pay Scale Heads</span>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide side-menu__label1"><a href="javascript:void(0)">Pay Scale Heads</a></li>
                                    <li class="slide">
                                        <a href="<?php echo e(url('ESTB/payscales/teaching')); ?>" class="side-menu__item">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M11 14.0619V20H13V14.0619C16.9463 14.554 20 17.9204 20 22H4C4 17.9204 7.05369 14.554 11 14.0619ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13Z" fill="rgba(255,255,255,1)"></path></svg>
                                            Teaching
                                        </a>
                                    </li>
                                    <li class="slide">
                                         <a href="<?php echo e(url('ESTB/payscales/non_teaching')); ?>" class="side-menu__item">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M7.38938 16.5386C5.33894 15.0901 4 12.7014 4 10C4 5.58172 7.58172 2 12 2C16.4183 2 20 5.58172 20 10C20 12.7014 18.6611 15.0901 16.6106 16.5386L18.6936 21.2996C18.8043 21.5526 18.6889 21.8474 18.4359 21.9581C18.3727 21.9857 18.3045 22 18.2355 22H5.76451C5.48837 22 5.26451 21.7761 5.26451 21.5C5.26451 21.431 5.27878 21.3628 5.30643 21.2996L7.38938 16.5386ZM8.11851 10.9704C8.55217 12.7106 10.1255 14 12 14C13.8745 14 15.4478 12.7106 15.8815 10.9704L13.9407 10.4852C13.7239 11.3553 12.9372 12 12 12C11.0628 12 10.2761 11.3553 10.0593 10.4852L8.11851 10.9704Z" fill="rgba(255,255,255,1)"></path></svg>
                                            Non-Teaching
                                        </a>
                                    </li>
                                    <li class="slide">
                                        <a href="<?php echo e(url('ESTB/payscales/allowances')); ?>" class="side-menu__item">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M11 11V7H13V11H17V13H13V17H11V13H7V11H11ZM12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20Z" fill="rgba(255,255,255,1)"></path></svg>
                                             Allowances
                                       </a>
                                   </li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a href="<?php echo e(url('ESTB/qualifications')); ?>" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M22 21H2V19H3V4C3 3.44772 3.44772 3 4 3H18C18.5523 3 19 3.44772 19 4V9H21V19H22V21ZM17 19H19V11H13V19H15V13H17V19ZM17 9V5H5V19H11V9H17ZM7 11H9V13H7V11ZM7 15H9V17H7V15ZM7 7H9V9H7V7Z" fill="rgba(255,255,255,1)"></path></svg>
                                    <span class="side-menu__label">Qualifications</span>
                                </a>
                            </li>

                            <li class="slide">
                                <a href="<?php echo e(url('ESTB/religion')); ?>" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M9 19H12V12.9416L8 9.45402L4 12.9416V19H7V15H9V19ZM21 21H3C2.44772 21 2 20.5523 2 20V12.4868C2 12.1978 2.12501 11.9229 2.34282 11.733L6 8.54435V4C6 3.44772 6.44772 3 7 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21ZM16 11V13H18V11H16ZM16 15V17H18V15H16ZM16 7V9H18V7H16ZM12 7V9H14V7H12Z" fill="rgba(255,255,255,1)"></path></svg>
                                    <span class="side-menu__label">Religions & Castes</span>
                                </a>
                            </li>


                            <li class="slide">
                                <a href="<?php echo e(url('ESTB/renumerations')); ?>" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12.0001 8.5L14.1161 13.5875L19.6085 14.0279L15.4239 17.6125L16.7023 22.9721L12.0001 20.1L7.29777 22.9721L8.57625 17.6125L4.3916 14.0279L9.88403 13.5875L12.0001 8.5ZM12.0001 13.707L11.2615 15.4835L9.34505 15.637L10.8051 16.8883L10.3581 18.759L12.0001 17.7564L13.6411 18.759L13.195 16.8883L14.6541 15.637L12.7386 15.4835L12.0001 13.707ZM8.00005 2V11H6.00005V2H8.00005ZM18.0001 2V11H16.0001V2H18.0001ZM13.0001 2V7H11.0001V2H13.0001Z" fill="rgba(255,255,255,1)"></path></svg>
                                    <span class="side-menu__label">Renumeration Heads</span>
                                </a>
                            </li>
                            <li class="slide">
                                <a href="<?php echo e(url('ESTB/salaryheads')); ?>" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M22.0049 7H23.0049V17H22.0049V20C22.0049 20.5523 21.5572 21 21.0049 21H3.00488C2.4526 21 2.00488 20.5523 2.00488 20V4C2.00488 3.44772 2.4526 3 3.00488 3H21.0049C21.5572 3 22.0049 3.44772 22.0049 4V7ZM20.0049 17H14.0049C11.2435 17 9.00488 14.7614 9.00488 12C9.00488 9.23858 11.2435 7 14.0049 7H20.0049V5H4.00488V19H20.0049V17ZM21.0049 15V9H14.0049C12.348 9 11.0049 10.3431 11.0049 12C11.0049 13.6569 12.348 15 14.0049 15H21.0049ZM14.0049 11H17.0049V13H14.0049V11Z" fill="rgba(255,255,255,1)"></path></svg>
                                     <span class="side-menu__label">Salary Heads</span>
                                </a>
                            </li>
                            <li class="slide">
                                <a href="<?php echo e(url('ESTB/staff')); ?>" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-cog" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h2.5" />
                                        <path d="M19.001 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                        <path d="M19.001 15.5v1.5" />
                                        <path d="M19.001 21v1.5" />
                                        <path d="M22.032 17.25l-1.299 .75" />
                                        <path d="M17.27 20l-1.3 .75" />
                                        <path d="M15.97 17.25l1.3 .75" />
                                        <path d="M20.733 20l1.3 .75" />
                                      </svg>
                                      <span class="side-menu__label">Staff</span>
                                </a>
                            </li>
                            <li class="slide">
                                <a href="<?php echo e(url('ESTB/Biometric/Biometric_data')); ?>" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M11 11V7H13V11H17V13H13V17H11V13H7V11H11ZM12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20Z" fill="rgba(255,255,255,1)"></path></svg>
                                     Biometric
                               </a>
                           </li>

                            

                            <li class="slide">
                                <a href="<?php echo e(url('ESTB/construction')); ?>" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12.0049 22.0029C6.48204 22.0029 2.00488 17.5258 2.00488 12.0029C2.00488 6.48008 6.48204 2.00293 12.0049 2.00293C17.5277 2.00293 22.0049 6.48008 22.0049 12.0029C22.0049 17.5258 17.5277 22.0029 12.0049 22.0029ZM8.50488 14.0029V16.0029H11.0049V18.0029H13.0049V16.0029H14.0049C15.3856 16.0029 16.5049 14.8836 16.5049 13.5029C16.5049 12.1222 15.3856 11.0029 14.0049 11.0029H10.0049C9.72874 11.0029 9.50488 10.7791 9.50488 10.5029C9.50488 10.2268 9.72874 10.0029 10.0049 10.0029H15.5049V8.00293H13.0049V6.00293H11.0049V8.00293H10.0049C8.62417 8.00293 7.50488 9.12222 7.50488 10.5029C7.50488 11.8836 8.62417 13.0029 10.0049 13.0029H14.0049C14.281 13.0029 14.5049 13.2268 14.5049 13.5029C14.5049 13.7791 14.281 14.0029 14.0049 14.0029H8.50488Z" fill="rgba(255,255,255,1)"></path></svg>
                                    <span class="side-menu__label">TDS Heads</span>
                                </a>
                            </li>














                        </ul>
                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24"
                                height="24" viewBox="0 0 24 24">
                                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                            </svg></div>
                    </nav>
                    <!-- End::nav -->

                </div>
                <!-- End::main-sidebar -->

            </aside>
<?php /**PATH F:\laravel Apps\gitoffice\resources\views/layouts/components/sidebar.blade.php ENDPATH**/ ?>