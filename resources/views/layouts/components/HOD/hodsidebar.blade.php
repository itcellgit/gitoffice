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
                    <a href="{{url('/HOD/dashboard')}}" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M3 13H11V3H3V13ZM3 21H11V15H3V21ZM13 21H21V11H13V21ZM13 3V9H21V3H13Z" fill="rgba(255,255,255,1)"></path></svg>
                        <span class="side-menu__label">Dashboard</span>
                    </a>
                </li>
                <li class="slide">
                    <a href="{{url('/HOD/department/overview')}}" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M2 3C2 2.44772 2.44772 2 3 2H17C17.5523 2 18 2.44772 18 3V6H21C21.5523 6 22 6.44772 22 7V21C22 21.5523 21.5523 22 21 22H7C6.44772 22 6 21.5523 6 21V18H3C2.44772 18 2 17.5523 2 17V3ZM8 18V20H11.4393L9.43934 18H8ZM11.5607 18L13.5607 20H16.4393L14.4393 18H11.5607ZM20 20V18.5607L18 16.5607V17C18 17.5523 17.5523 18 17 18H16.5607L18.5607 20H20ZM20 13.5607L18 11.5607V14.4393L20 16.4393V13.5607ZM20 11.4393V8H18V9.43934L20 11.4393Z" fill="rgba(255,255,255,1)"></path></svg>
                        <span class="side-menu__label">Department Overview</span>
                    </a>
                </li>
                <li class="slide">
                    <a href="{{url('/HOD/staff/stafflist')}}" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M22 21H2V19H3V4C3 3.44772 3.44772 3 4 3H18C18.5523 3 19 3.44772 19 4V9H21V19H22V21ZM17 19H19V11H13V19H15V13H17V19ZM17 9V5H5V19H11V9H17ZM7 11H9V13H7V11ZM7 15H9V17H7V15ZM7 7H9V9H7V7Z" fill="rgba(255,255,255,1)"></path></svg>
                        <span class="side-menu__label">My Staff</span>
                    </a>
                </li>
                <li class="slide">
                    <a href="{{url('/HOD/leaves_management')}}" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M21 11.6458V21C21 21.5523 20.5523 22 20 22H4C3.44772 22 3 21.5523 3 21V11.6458C2.37764 10.9407 2 10.0144 2 9V3C2 2.44772 2.44772 2 3 2H21C21.5523 2 22 2.44772 22 3V9C22 10.0144 21.6224 10.9407 21 11.6458ZM14 9C14 8.44772 14.4477 8 15 8C15.5523 8 16 8.44772 16 9C16 10.1046 16.8954 11 18 11C19.1046 11 20 10.1046 20 9V4H4V9C4 10.1046 4.89543 11 6 11C7.10457 11 8 10.1046 8 9C8 8.44772 8.44772 8 9 8C9.55228 8 10 8.44772 10 9C10 10.1046 10.8954 11 12 11C13.1046 11 14 10.1046 14 9Z" fill="rgba(255,255,255,1)"></path></svg>
                        <span class="side-menu__label">Leaves Management</span>
                    </a>
                </li>
                <li class="slide  has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M2 3.9934C2 3.44476 2.45531 3 2.9918 3H21.0082C21.556 3 22 3.44495 22 3.9934V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V3.9934ZM6 15V17H18V15H6ZM6 7V13H12V7H6ZM14 7V9H18V7H14ZM14 11V13H18V11H14ZM8 9H10V11H8V9Z" fill="rgba(255,255,255,1)"></path></svg>
                        <span class="side-menu__label">Professional Activity</span>
                        <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide  has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <span class="side-menu__label">Teaching</span>
                                <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide"><a href="{{url('/HOD/Teaching/hodactivityattended')}}" class="side-menu__item">Attended</a></li>
                                <li class="slide"><a href="{{url('/HOD/Teaching/hodactivityconducted')}}" class="side-menu__item">Conducted</a></li>
                            </ul>
                        </li>
                        <li class="slide  has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <span class="side-menu__label">Non-Teaching</span>
                                <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide"><a href="{{url('/HOD/NonTeaching/hodattended')}}" class="side-menu__item">Attended</a></li>
                                <li class="slide"><a href="{{url('/HOD/NonTeaching/hodconducted')}}" class="side-menu__item">Conducted</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="slide  has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16 2L21 7V21.0082C21 21.556 20.5551 22 20.0066 22H3.9934C3.44476 22 3 21.5447 3 21.0082V2.9918C3 2.44405 3.44495 2 3.9934 2H16ZM13.529 14.4464L15.7395 16.6569L17.1537 15.2426L14.9432 13.0322C15.8492 11.4983 15.6432 9.48951 14.3252 8.17157C12.7631 6.60948 10.2305 6.60948 8.66839 8.17157C7.1063 9.73367 7.1063 12.2663 8.66839 13.8284C9.98633 15.1464 11.9951 15.3524 13.529 14.4464ZM12.911 12.4142C12.13 13.1953 10.8637 13.1953 10.0826 12.4142C9.30156 11.6332 9.30156 10.3668 10.0826 9.58579C10.8637 8.80474 12.13 8.80474 12.911 9.58579C13.6921 10.3668 13.6921 11.6332 12.911 12.4142Z" fill="rgba(255,255,255,1)"></path></svg>
                        <span class="side-menu__label">Research</span>
                        <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide  has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <span class="side-menu__label">Conference</span>
                                <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide"><a href="{{url('/HOD/Teaching/research/hodconferenceattended')}}" class="side-menu__item">Attended</a></li>
                                <li class="slide"><a href="{{url('/HOD/Teaching/research/hodconferenceconducted')}}" class="side-menu__item">Conducted</a></li>
                            </ul>
                        </li>
                       <li class="slide"><a href="{{url('/HOD/Teaching/research/hodpublication')}}" class="side-menu__item">Publication</a></li>
                       <li class="slide"><a href="{{url('/HOD/Teaching/research/hodfundedproject')}}" class="side-menu__item">Funded Project</a></li>
                       <li class="slide"><a href="{{url('/HOD/Teaching/research/hodbookchap')}}" class="side-menu__item">Book Chapter</a></li>
                       <li class="slide"><a href="{{url('/HOD/Teaching/research/hodconsultancy')}}" class="side-menu__item">Consultancy</a></li>
                       <li class="slide"><a href="{{url('/HOD/Teaching/research/hodpatents')}}" class="side-menu__item">Patents</a></li>
                       <li class="slide"><a href="{{url('/HOD/Teaching/research/hodcopyrights')}}" class="side-menu__item">Copyrights</a></li>
                       <li class="slide"><a href="{{url('/HOD/Teaching/research/hodachivements')}}" class="side-menu__item">Achivements</a></li>
                       <li class="slide"><a href="{{url('/HOD/Teaching/research/hodreviewereditor')}}" class="side-menu__item">Reviewer/Editor</a></li>

                    </ul>
                </li>

                <li class="slide">
                    <a href="{{url('/HOD/event')}}" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="rgba(255,255,255,1)"><path d="M17 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9V3H15V1H17V3ZM4 9V19H20V9H4ZM6 13H11V17H6V13Z"></path></svg>
                        <span class="side-menu__label">Events</span>
                    </a>
                </li>
                <li class="slide">
                    <a href="{{url('/HOD/notice')}}" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="rgba(255,255,255,1)"><path d="M12.8659 3.00017L22.3922 19.5002C22.6684 19.9785 22.5045 20.5901 22.0262 20.8662C21.8742 20.954 21.7017 21.0002 21.5262 21.0002H2.47363C1.92135 21.0002 1.47363 20.5525 1.47363 20.0002C1.47363 19.8246 1.51984 19.6522 1.60761 19.5002L11.1339 3.00017C11.41 2.52187 12.0216 2.358 12.4999 2.63414C12.6519 2.72191 12.7782 2.84815 12.8659 3.00017ZM10.9999 16.0002V18.0002H12.9999V16.0002H10.9999ZM10.9999 9.00017V14.0002H12.9999V9.00017H10.9999Z"></path></svg>
                        <span class="side-menu__label">Notice</span>
                    </a>
                </li>

                <!--Greivance-->
                <li class="slide  has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="rgba(255,255,255,1)"><path d="M17 12C17 8.68628 14.7615 6 12 6 9.23853 6 7 8.68628 7 12 7 15.3137 9.23853 18 12 18 14.7615 18 17 15.3137 17 12ZM10.7629 15.6451 14.3253 9.47241C14.7471 10.1614 15 11.0413 15 12 15 14.2091 13.6569 16 12 16 11.559 16 11.1401 15.873 10.7629 15.6451ZM9 12C9 9.79089 10.3431 8 12 8 12.441 8 12.8599 8.12695 13.2371 8.35486L9.67468 14.5276C9.25293 13.8386 9 12.9587 9 12ZM12 2C9.23987 2 6.73865 3.12134 4.93005 4.93005 3.12134 6.73865 2 9.23987 2 12 2 14.7601 3.12134 17.2614 4.93005 19.0699 6.73865 20.8787 9.23987 22 12 22 14.7601 22 17.2614 20.8787 19.0699 19.0699 20.8787 17.2614 22 14.7601 22 12 22 9.23987 20.8787 6.73865 19.0699 4.93005 17.2614 3.12134 14.7601 2 12 2ZM6.34424 6.34424C7.79358 4.8949 9.79224 4 12 4 14.2078 4 16.2064 4.8949 17.6558 6.34424 19.1051 7.79358 20 9.79224 20 12 20 14.2078 19.1051 16.2064 17.6558 17.6558 16.2064 19.1051 14.2078 20 12 20 9.79224 20 7.79358 19.1051 6.34424 17.6558 4.8949 16.2064 4 14.2078 4 12 4 9.79224 4.8949 7.79358 6.34424 6.34424Z"></path></svg>
                        <span class="side-menu__label">Grievance</span>
                        <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide"><a href="{{url('/HOD/grievancecategory')}}" class="side-menu__item">Grievance Category</a></li>
                        <li class="slide"><a href="{{url('/HOD/grievance')}}" class="side-menu__item">View Grievance</a></li>
                    </ul>
                </li>
                <!--End-->
                <li class="slide">
                    <a href="{{url('/ticket/dashboard')}}" class="side-menu__item" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M2.00488 9.49966V3.99966C2.00488 3.44738 2.4526 2.99966 3.00488 2.99966H21.0049C21.5572 2.99966 22.0049 3.44738 22.0049 3.99966V9.49966C20.6242 9.49966 19.5049 10.619 19.5049 11.9997C19.5049 13.3804 20.6242 14.4997 22.0049 14.4997V19.9997C22.0049 20.5519 21.5572 20.9997 21.0049 20.9997H3.00488C2.4526 20.9997 2.00488 20.5519 2.00488 19.9997V14.4997C3.38559 14.4997 4.50488 13.3804 4.50488 11.9997C4.50488 10.619 3.38559 9.49966 2.00488 9.49966ZM9.00488 8.99966V10.9997H15.0049V8.99966H9.00488ZM9.00488 12.9997V14.9997H15.0049V12.9997H9.00488Z"></path></svg>
                        <span class="side-menu__label">Raise Ticket</span>

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
