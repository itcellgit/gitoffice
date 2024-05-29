        
            <aside class="app-sidebar" id="sidebar">

                <!-- Start::main-sidebar-header -->
                <div class="main-sidebar-header">
                    <a href="{{url('index')}}" class="header-logo">
                        <img src="{{asset('build/assets/img/brand-logos/git_logo.jpg')}}" alt="logo" class="main-logo desktop-logo w-10 h-10">
                        <img src="{{asset('build/assets/img/brand-logos/git_logo.jpg')}}" alt="logo" class="main-logo toggle-logo w-10 h-10">
                        <img src="{{asset('build/assets/img/brand-logos/git_logo.jpg')}}" alt="logo" class="main-logo desktop-dark w-10 h-10">
                        <img src="{{asset('build/assets/img/brand-logos/git_logo.jpg')}}" alt="logo" class="main-logo toggle-dark w-10 h-10">
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
                                <a href="{{url('/PRINCIPAL/dashboard')}}" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M3 13H11V3H3V13ZM3 21H11V15H3V21ZM13 21H21V11H13V21ZM13 3V9H21V3H13Z" fill="rgba(255,255,255,1)"></path></svg>
                                    <span class="side-menu__label">My Dashboard</span>
                                </a>
                            </li>
                            <li class="slide">
                                <a href="{{url('PRINCIPAL/staff/index')}}" class="side-menu__item">
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
                            <li class="slide  has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M20 5C20 6.65685 18.6569 8 17 8C15.3431 8 14 6.65685 14 5C14 3.34315 15.3431 2 17 2C18.6569 2 20 3.34315 20 5ZM7 3C4.79086 3 3 4.79086 3 7V9H5V7C5 5.89543 5.89543 5 7 5H10V3H7ZM17 21C19.2091 21 21 19.2091 21 17V15H19V17C19 18.1046 18.1046 19 17 19H14V21H17ZM7 16C8.65685 16 10 14.6569 10 13C10 11.3431 8.65685 10 7 10C5.34315 10 4 11.3431 4 13C4 14.6569 5.34315 16 7 16ZM17 9C14.7909 9 13 10.7909 13 13H21C21 10.7909 19.2091 9 17 9ZM3 21C3 18.7909 4.79086 17 7 17C9.20914 17 11 18.7909 11 21H3Z" fill="rgba(255,255,255,1)"></path></svg>
                                    <span class="side-menu__label">Leaves Management</span>
                                    <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide"><a href="{{url('/PRINCIPAL/leaves_management/principal_leaves')}}" class="side-menu__item">Leaves</a></li>

                                   <li class="slide"><a href="{{url('/PRINCIPAL/leaves_management/principal_entitlement')}}" class="side-menu__item">Enititlement</a></li>

                                    <li class="slide"><a href="{{url('/PRINCIPAL/leaves_management/principal_holiday_rh')}}" class="side-menu__item">Holiday And RH List</a></li>
                                    <li class="slide"><a href="{{url('/PRINCIPAL/leaves_management/principal_leaves_calender')}}" class="side-menu__item">Leaves Calender</a></li>
                                </ul>
                            </li>
                            <li class="slide  has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="rgba(255,255,255,1)"><path d="M17 12C17 8.68628 14.7615 6 12 6 9.23853 6 7 8.68628 7 12 7 15.3137 9.23853 18 12 18 14.7615 18 17 15.3137 17 12ZM10.7629 15.6451 14.3253 9.47241C14.7471 10.1614 15 11.0413 15 12 15 14.2091 13.6569 16 12 16 11.559 16 11.1401 15.873 10.7629 15.6451ZM9 12C9 9.79089 10.3431 8 12 8 12.441 8 12.8599 8.12695 13.2371 8.35486L9.67468 14.5276C9.25293 13.8386 9 12.9587 9 12ZM12 2C9.23987 2 6.73865 3.12134 4.93005 4.93005 3.12134 6.73865 2 9.23987 2 12 2 14.7601 3.12134 17.2614 4.93005 19.0699 6.73865 20.8787 9.23987 22 12 22 14.7601 22 17.2614 20.8787 19.0699 19.0699 20.8787 17.2614 22 14.7601 22 12 22 9.23987 20.8787 6.73865 19.0699 4.93005 17.2614 3.12134 14.7601 2 12 2ZM6.34424 6.34424C7.79358 4.8949 9.79224 4 12 4 14.2078 4 16.2064 4.8949 17.6558 6.34424 19.1051 7.79358 20 9.79224 20 12 20 14.2078 19.1051 16.2064 17.6558 17.6558 16.2064 19.1051 14.2078 20 12 20 9.79224 20 7.79358 19.1051 6.34424 17.6558 4.8949 16.2064 4 14.2078 4 12 4 9.79224 4.8949 7.79358 6.34424 6.34424Z"></path></svg>
                                    <span class="side-menu__label">SEMS</span>
                                    <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide"><a href="{{url('/PRINCIPAL/examsectionissues')}}" class="side-menu__item">Issues</a></li>
                                    {{-- <li class="slide"><a href="{{url('/HOD/issuescategory')}}" class="side-menu__item">Issues Subcategory</a></li> --}}
                                    <li class="slide"><a href="{{url('/PRINCIPAL/viewstudentissues')}}" class="side-menu__item">View Student Issues</a></li>
                                </ul>
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