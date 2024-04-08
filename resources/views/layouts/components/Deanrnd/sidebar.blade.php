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
                                <a href="{{url('/Deanrnd/dashboard')}}" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M3 13H11V3H3V13ZM3 21H11V15H3V21ZM13 21H21V11H13V21ZM13 3V9H21V3H13Z" fill="rgba(255,255,255,1)"></path></svg>
                                    <span class="side-menu__label">Dashboard</span>
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
                                                <li class="slide"><a href="{{url('/Deanrnd/Teaching/activityattended')}}" class="side-menu__item">Attended</a></li>
                                                <li class="slide"><a href="{{url('/Deanrnd/Teaching/activityconducted')}}" class="side-menu__item">Conducted</a></li>
                                            </ul>
                                    </li>
                                   <li class="slide  has-sub">
                                            <a href="javascript:void(0);" class="side-menu__item">
                                                <span class="side-menu__label">Non-Teaching</span>
                                                <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                                            </a>
                                            <ul class="slide-menu child1">
                                                <li class="slide"><a href="{{url('/Deanrnd/NonTeaching')}}" class="side-menu__item">Attended</a></li>
                                                <li class="slide"><a href="{{url('/Deanrnd/NonTeaching/conducted')}}" class="side-menu__item">Conducted</a></li>
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
                                            <li class="slide"><a href="{{url('/Deanrnd/Teaching/research/conferenceattended')}}" class="side-menu__item">Attended</a></li>
                                            <li class="slide"><a href="{{url('/Deanrnd/Teaching/research/conferenceconducted')}}" class="side-menu__item">Conducted</a></li>
                                        </ul>
                                    </li>
                                   <li class="slide"><a href="{{url('/Deanrnd/Teaching/research/publication')}}" class="side-menu__item">Publication</a></li>
                                   <li class="slide"><a href="{{url('/Deanrnd/Teaching/research/fundedproject')}}" class="side-menu__item">Funded Project</a></li>
                                   <li class="slide"><a href="{{url('/Deanrnd/Teaching/research/dean_consultancy')}}" class="side-menu__item">Consultancy</a></li>
                                   <li class="slide"><a href="{{url('/Deanrnd/Teaching/research/book_chapter')}}" class="side-menu__item">Books Chapter</a></li>
                                   <li class="slide"><a href="{{url('/Deanrnd/Teaching/research/patents')}}" class="side-menu__item">Patents</a></li>
                                   <li class="slide"><a href="{{url('/Deanrnd/Teaching/research/copyrights')}}" class="side-menu__item">Copyrights</a></li>
                                   <li class="slide"><a href="{{url('/Deanrnd/Teaching/research/achivements')}}" class="side-menu__item">Achivements</a></li>
                                   <li class="slide"><a href="{{url('/Deanrnd/Teaching/research/reviewer_editor')}}" class="side-menu__item">Reviewer/editor</a></li>


                                   
                                </ul>
                            </li>
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