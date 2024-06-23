@extends('layouts.master')

@section('styles')

        <!-- CHOICES CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/choices.js/public/assets/styles/choices.min.css')}}">

        <!-- FLATPICKR CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/flatpickr/flatpickr.min.css')}}">
        <script>
            var base_url = "{{URL::to('/')}}";
        </script>

@endsection

@section('content')

                <div class="content">

                    <!-- Start::main-content -->
                    <div class="main-content">

                        <!-- Page Header -->
                        <div class="block justify-between page-header sm:flex">
                            <div>
                                <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium">Staff Overview of <span class="text-primary">{{$staff->fname.' '.$staff->mname.' '.$staff->lname}}</span></h3>
                            </div>
                            <ol class="flex items-center whitespace-nowrap min-w-0">
                                <li class="text-sm">
                                <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="{{route('ESTB.staff')}}">
                                    Staff
                                    <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                </a>
                                </li>
                                <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                    Staff View
                                </li>

                            </ol>
                        </div>
                        <!-- Page Header Close -->
                        <div class="grid grid-cols-12 gap-x-6">
                            <div class="col-span-6">
                                 <!-- For Checking whether status is set or no-->
                                 @if(session('status'))
                                    @if (session('status') == 1)
                                    <div class='bg-white dark:bg-bgdark border border-success alert text-success' role='alert'>
                                        <span class='font-bold'>Result: </span> Database transaction Successful
                                    </div>
                                    @elseif(session('status') == 0)
                                    <div class='bg-white dark:bg-bgdark border border-danger alert text-danger' role='alert'>
                                        <span class='font-bold'>Result : </span> Error in Database transaction
                                    </div>

                                    @endif
                                    @php
                                        Illuminate\Support\Facades\Session::forget('status');
                                        header("refresh: 1");
                                    @endphp
                                @endif

                            </div>
                        </div>
                        <!-- Start::row-1 -->
                        <div class="grid grid-cols-12 gap-x-6">
                            <div class="col-span-12 xl:col-span-3">
                                <div class="box">
                                    <div class="box-body relative">
                                        <div class="flex relative before:bg-black/50 before:absolute before:w-full before:h-full before:rounded-sm">
                                        <img src="{{asset('build/assets/img/png-images/2.png')}}" alt="" class="h-[200px] w-full rounded-sm" id="profile-img2">
                                        <span class="absolute top-5 ltr:right-5 rtl:left-5 flex p-2 rounded-sm ring-1 ring-black/10 text-white bg-black/10 leading-none">
                                            <i class="ri ri-pencil-line"></i>
                                            <input type="file" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" id="profile-change2">
                                        </span>
                                        </div>
                                        <div class="absolute top-[4.5rem] inset-x-0 text-center space-y-3">
                                        <div class="flex justify-center w-full">
                                            <div class="relative">
                                            <img src="{{asset('build/assets/img/users/1.jpg')}}" class="w-24 h-24 rounded-full ring-4 ring-white/10 mx-auto" id="profile-img" alt="pofile-img">
                                            <span class="absolute bottom-0 ltr:right-0 rtl:left-0 block p-1 rounded-full ring-2 ring-white/10 text-white bg-white/10 dark:bg-bgdark leading-none">
                                                <i class="ri ri-pencil-line"></i>
                                                <input type="file" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" id="profile-change">
                                            </span>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="staff" id="staff" value="{{$staff->id}}">
                                    <div class="box-body pt-0">

                                        <nav class="flex flex-col space-y-2" aria-label="Tabs" role="tablist" data-hs-tabs-vertical="true">
                                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 active" id="profile-settings-item-1" data-hs-tab="#profile-settings-1" aria-controls="profile-settings-1" role="tab">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M11 14.0619V20H13V14.0619C16.9463 14.554 20 17.9204 20 22H4C4 17.9204 7.05369 14.554 11 14.0619ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13Z" fill="rgba(255,255,255,1)"></path></svg>
                                             Staff Basic Information
                                        </button>

                                        <button type="button"  class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300" id="qualification" data-hs-tab="#qualification-tab" aria-controls="qualification-tab">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12 14V22H4C4 17.5817 7.58172 14 12 14ZM18 21.5L15.0611 23.0451L15.6224 19.7725L13.2447 17.4549L16.5305 16.9775L18 14L19.4695 16.9775L22.7553 17.4549L20.3776 19.7725L20.9389 23.0451L18 21.5ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13Z" fill="rgba(255,255,255,1)"></path></svg>
                                             Qualification

                                        </button>
                                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300" id="profile-settings-item-2" data-hs-tab="#profile-settings-2" aria-controls="profile-settings-2" role="tab">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M17 19H19V11H13V19H15V13H17V19ZM3 19V4C3 3.44772 3.44772 3 4 3H18C18.5523 3 19 3.44772 19 4V9H21V19H22V21H2V19H3ZM7 11V13H9V11H7ZM7 15V17H9V15H7ZM7 7V9H9V7H7Z" fill="rgba(255,255,255,1)"></path></svg>
                                             Department
                                        </button>
                                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300" id="profile-settings-item-3" data-hs-tab="#profile-settings-3" aria-controls="profile-settings-3" role="tab">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M11.8611 2.39057C12.8495 1.73163 14.1336 1.71797 15.1358 2.35573L19.291 4.99994H20.9998C21.5521 4.99994 21.9998 5.44766 21.9998 5.99994V14.9999C21.9998 15.5522 21.5521 15.9999 20.9998 15.9999H19.4801C19.5396 16.9472 19.0933 17.9102 18.1955 18.4489L13.1021 21.505C12.4591 21.8907 11.6609 21.8817 11.0314 21.4974C10.3311 22.1167 9.2531 22.1849 8.47104 21.5704L3.33028 17.5312C2.56387 16.9291 2.37006 15.9003 2.76579 15.0847C2.28248 14.7057 2 14.1254 2 13.5109V6C2 5.44772 2.44772 5 3 5H7.94693L11.8611 2.39057ZM4.17264 13.6452L4.86467 13.0397C6.09488 11.9632 7.96042 12.0698 9.06001 13.2794L11.7622 16.2518C12.6317 17.2083 12.7903 18.6135 12.1579 19.739L17.1665 16.7339C17.4479 16.5651 17.5497 16.2276 17.4448 15.9433L13.0177 9.74551C12.769 9.39736 12.3264 9.24598 11.9166 9.36892L9.43135 10.1145C8.37425 10.4316 7.22838 10.1427 6.44799 9.36235L6.15522 9.06958C5.58721 8.50157 5.44032 7.69318 5.67935 7H4V13.5109L4.17264 13.6452ZM14.0621 4.04306C13.728 3.83047 13.3 3.83502 12.9705 4.05467L7.56943 7.65537L7.8622 7.94814C8.12233 8.20827 8.50429 8.30456 8.85666 8.19885L11.3419 7.45327C12.5713 7.08445 13.8992 7.53859 14.6452 8.58303L18.5144 13.9999H19.9998V6.99994H19.291C18.9106 6.99994 18.5381 6.89148 18.2172 6.68727L14.0621 4.04306ZM6.18168 14.5448L4.56593 15.9586L9.70669 19.9978L10.4106 18.7659C10.6256 18.3897 10.5738 17.9178 10.2823 17.5971L7.58013 14.6247C7.2136 14.2215 6.59175 14.186 6.18168 14.5448Z" fill="rgba(255,255,255,1)"></path></svg>
                                             Association
                                        </button>
                                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300" id="profile-settings-item-3" data-hs-tab="#profile-settings-3" aria-controls="profile-settings-3" role="tab">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M11.8611 2.39057C12.8495 1.73163 14.1336 1.71797 15.1358 2.35573L19.291 4.99994H20.9998C21.5521 4.99994 21.9998 5.44766 21.9998 5.99994V14.9999C21.9998 15.5522 21.5521 15.9999 20.9998 15.9999H19.4801C19.5396 16.9472 19.0933 17.9102 18.1955 18.4489L13.1021 21.505C12.4591 21.8907 11.6609 21.8817 11.0314 21.4974C10.3311 22.1167 9.2531 22.1849 8.47104 21.5704L3.33028 17.5312C2.56387 16.9291 2.37006 15.9003 2.76579 15.0847C2.28248 14.7057 2 14.1254 2 13.5109V6C2 5.44772 2.44772 5 3 5H7.94693L11.8611 2.39057ZM4.17264 13.6452L4.86467 13.0397C6.09488 11.9632 7.96042 12.0698 9.06001 13.2794L11.7622 16.2518C12.6317 17.2083 12.7903 18.6135 12.1579 19.739L17.1665 16.7339C17.4479 16.5651 17.5497 16.2276 17.4448 15.9433L13.0177 9.74551C12.769 9.39736 12.3264 9.24598 11.9166 9.36892L9.43135 10.1145C8.37425 10.4316 7.22838 10.1427 6.44799 9.36235L6.15522 9.06958C5.58721 8.50157 5.44032 7.69318 5.67935 7H4V13.5109L4.17264 13.6452ZM14.0621 4.04306C13.728 3.83047 13.3 3.83502 12.9705 4.05467L7.56943 7.65537L7.8622 7.94814C8.12233 8.20827 8.50429 8.30456 8.85666 8.19885L11.3419 7.45327C12.5713 7.08445 13.8992 7.53859 14.6452 8.58303L18.5144 13.9999H19.9998V6.99994H19.291C18.9106 6.99994 18.5381 6.89148 18.2172 6.68727L14.0621 4.04306ZM6.18168 14.5448L4.56593 15.9586L9.70669 19.9978L10.4106 18.7659C10.6256 18.3897 10.5738 17.9178 10.2823 17.5971L7.58013 14.6247C7.2136 14.2215 6.59175 14.186 6.18168 14.5448Z" fill="rgba(255,255,255,1)"></path></svg>
                                              Designation & Payscale
                                        </button>
                                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300" id="profile-settings-item-5" data-hs-tab="#profile-settings-5" aria-controls="profile-settings-5" role="tab">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M11 6V14H19C19 18.4183 15.4183 22 11 22C6.58172 22 3 18.4183 3 14C3 9.66509 6.58 6 11 6ZM21 2V4L15.6726 10H21V12H13V10L18.3256 4H13V2H21Z" fill="rgba(255,255,255,1)"></path></svg>
                                             Leaves
                                        </button>
                                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300" id="salary" data-hs-tab="#salary-tab" aria-controls="salary-tab" role="tab">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12.0004 16C14.2095 16 16.0004 14.2091 16.0004 12 16.0004 9.79086 14.2095 8 12.0004 8 9.79123 8 8.00037 9.79086 8.00037 12 8.00037 14.2091 9.79123 16 12.0004 16ZM21.0049 4.00293H3.00488C2.4526 4.00293 2.00488 4.45064 2.00488 5.00293V19.0029C2.00488 19.5552 2.4526 20.0029 3.00488 20.0029H21.0049C21.5572 20.0029 22.0049 19.5552 22.0049 19.0029V5.00293C22.0049 4.45064 21.5572 4.00293 21.0049 4.00293ZM4.00488 15.6463V8.35371C5.13065 8.017 6.01836 7.12892 6.35455 6.00293H17.6462C17.9833 7.13193 18.8748 8.02175 20.0049 8.3564V15.6436C18.8729 15.9788 17.9802 16.8711 17.6444 18.0029H6.3563C6.02144 16.8742 5.13261 15.9836 4.00488 15.6463Z" fill="rgba(255,255,255,1)"></path></svg>
                                             Salary
                                        </button>
                                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300" id="salary" data-hs-tab="#salary-tab" aria-controls="salary-tab" role="tab">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12.0004 16C14.2095 16 16.0004 14.2091 16.0004 12 16.0004 9.79086 14.2095 8 12.0004 8 9.79123 8 8.00037 9.79086 8.00037 12 8.00037 14.2091 9.79123 16 12.0004 16ZM21.0049 4.00293H3.00488C2.4526 4.00293 2.00488 4.45064 2.00488 5.00293V19.0029C2.00488 19.5552 2.4526 20.0029 3.00488 20.0029H21.0049C21.5572 20.0029 22.0049 19.5552 22.0049 19.0029V5.00293C22.0049 4.45064 21.5572 4.00293 21.0049 4.00293ZM4.00488 15.6463V8.35371C5.13065 8.017 6.01836 7.12892 6.35455 6.00293H17.6462C17.9833 7.13193 18.8748 8.02175 20.0049 8.3564V15.6436C18.8729 15.9788 17.9802 16.8711 17.6444 18.0029H6.3563C6.02144 16.8742 5.13261 15.9836 4.00488 15.6463Z" fill="rgba(255,255,255,1)"></path></svg>
                                             Form 16
                                        </button>
                                        @if($staff->latest_employee_type[0]->employee_type=='Teaching' || $staff->latestassociation[0]->asso_name=='Contractual')
                                            <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300" id="profile-settings-item-9" data-hs-tab="#profile-settings-9" aria-controls="profile-settings-9" role="tab">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M17 19H19V11H13V19H15V13H17V19ZM3 19V4C3 3.44772 3.44772 3 4 3H18C18.5523 3 19 3.44772 19 4V9H21V19H22V21H2V19H3ZM7 11V13H9V11H7ZM7 15V17H9V15H7ZM7 7V9H9V7H7Z" fill="rgba(255,255,255,1)"></path></svg>
                                                Annual Increment
                                            </button>
                                        @endif
                                        @if($staff->latest_employee_type[0]->employee_type=='Non-Teaching')
                                         <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300" id="profile-settings-item-7" data-hs-tab="#profile-settings-7" aria-controls="profile-settings-7" role="tab">
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12.0004 16C14.2095 16 16.0004 14.2091 16.0004 12 16.0004 9.79086 14.2095 8 12.0004 8 9.79123 8 8.00037 9.79086 8.00037 12 8.00037 14.2091 9.79123 16 12.0004 16ZM21.0049 4.00293H3.00488C2.4526 4.00293 2.00488 4.45064 2.00488 5.00293V19.0029C2.00488 19.5552 2.4526 20.0029 3.00488 20.0029H21.0049C21.5572 20.0029 22.0049 19.5552 22.0049 19.0029V5.00293C22.0049 4.45064 21.5572 4.00293 21.0049 4.00293ZM4.00488 15.6463V8.35371C5.13065 8.017 6.01836 7.12892 6.35455 6.00293H17.6462C17.9833 7.13193 18.8748 8.02175 20.0049 8.3564V15.6436C18.8729 15.9788 17.9802 16.8711 17.6444 18.0029H6.3563C6.02144 16.8742 5.13261 15.9836 4.00488 15.6463Z" fill="rgba(255,255,255,1)"></path></svg>
                                             Festival Advance
                                        </button>
                                         @endif
                                         <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300" id="profile-settings-item-8" data-hs-tab="#profile-settings-8" aria-controls="profile-settings-8" role="tab">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12.0004 16C14.2095 16 16.0004 14.2091 16.0004 12 16.0004 9.79086 14.2095 8 12.0004 8 9.79123 8 8.00037 9.79086 8.00037 12 8.00037 14.2091 9.79123 16 12.0004 16ZM21.0049 4.00293H3.00488C2.4526 4.00293 2.00488 4.45064 2.00488 5.00293V19.0029C2.00488 19.5552 2.4526 20.0029 3.00488 20.0029H21.0049C21.5572 20.0029 22.0049 19.5552 22.0049 19.0029V5.00293C22.0049 4.45064 21.5572 4.00293 21.0049 4.00293ZM4.00488 15.6463V8.35371C5.13065 8.017 6.01836 7.12892 6.35455 6.00293H17.6462C17.9833 7.13193 18.8748 8.02175 20.0049 8.3564V15.6436C18.8729 15.9788 17.9802 16.8711 17.6444 18.0029H6.3563C6.02144 16.8742 5.13261 15.9836 4.00488 15.6463Z" fill="rgba(255,255,255,1)"></path></svg>
                                             Laptop Loan
                                        </button>
                                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300" id="lic" data-hs-tab="#lic-tab" aria-controls="lic-tab" role="tab">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M17 15.2454V22.1169C17 22.393 16.7761 22.617 16.5 22.617C16.4094 22.617 16.3205 22.5923 16.2428 22.5457L12 20L7.75725 22.5457C7.52046 22.6877 7.21333 22.6109 7.07125 22.3742C7.02463 22.2964 7 22.2075 7 22.1169V15.2454C5.17107 13.7793 4 11.5264 4 9C4 4.58172 7.58172 1 12 1C16.4183 1 20 4.58172 20 9C20 11.5264 18.8289 13.7793 17 15.2454ZM12 15C15.3137 15 18 12.3137 18 9C18 5.68629 15.3137 3 12 3C8.68629 3 6 5.68629 6 9C6 12.3137 8.68629 15 12 15ZM12 13C9.79086 13 8 11.2091 8 9C8 6.79086 9.79086 5 12 5C14.2091 5 16 6.79086 16 9C16 11.2091 14.2091 13 12 13Z" fill="rgba(255,255,255,1)"></path></svg>
                                             LIC Management
                                        </button>
                                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300" id="share" data-hs-tab="#share-tab" aria-controls="share-tab" role="tab">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M17 15.2454V22.1169C17 22.393 16.7761 22.617 16.5 22.617C16.4094 22.617 16.3205 22.5923 16.2428 22.5457L12 20L7.75725 22.5457C7.52046 22.6877 7.21333 22.6109 7.07125 22.3742C7.02463 22.2964 7 22.2075 7 22.1169V15.2454C5.17107 13.7793 4 11.5264 4 9C4 4.58172 7.58172 1 12 1C16.4183 1 20 4.58172 20 9C20 11.5264 18.8289 13.7793 17 15.2454ZM12 15C15.3137 15 18 12.3137 18 9C18 5.68629 15.3137 3 12 3C8.68629 3 6 5.68629 6 9C6 12.3137 8.68629 15 12 15ZM12 13C9.79086 13 8 11.2091 8 9C8 6.79086 9.79086 5 12 5C14.2091 5 16 6.79086 16 9C16 11.2091 14.2091 13 12 13Z" fill="rgba(255,255,255,1)"></path></svg>
                                             Society Share
                                        </button>
                                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300" id="loan" data-hs-tab="#loan-tab" aria-controls="loan-tab" role="tab">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M17 15.2454V22.1169C17 22.393 16.7761 22.617 16.5 22.617C16.4094 22.617 16.3205 22.5923 16.2428 22.5457L12 20L7.75725 22.5457C7.52046 22.6877 7.21333 22.6109 7.07125 22.3742C7.02463 22.2964 7 22.2075 7 22.1169V15.2454C5.17107 13.7793 4 11.5264 4 9C4 4.58172 7.58172 1 12 1C16.4183 1 20 4.58172 20 9C20 11.5264 18.8289 13.7793 17 15.2454ZM12 15C15.3137 15 18 12.3137 18 9C18 5.68629 15.3137 3 12 3C8.68629 3 6 5.68629 6 9C6 12.3137 8.68629 15 12 15ZM12 13C9.79086 13 8 11.2091 8 9C8 6.79086 9.79086 5 12 5C14.2091 5 16 6.79086 16 9C16 11.2091 14.2091 13 12 13Z" fill="rgba(255,255,255,1)"></path></svg>
                                             Society Loans
                                        </button>
                                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300" id="taxregime" data-hs-tab="#taxregime-tab" aria-controls="taxregime-tab" role="tab">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M17 15.2454V22.1169C17 22.393 16.7761 22.617 16.5 22.617C16.4094 22.617 16.3205 22.5923 16.2428 22.5457L12 20L7.75725 22.5457C7.52046 22.6877 7.21333 22.6109 7.07125 22.3742C7.02463 22.2964 7 22.2075 7 22.1169V15.2454C5.17107 13.7793 4 11.5264 4 9C4 4.58172 7.58172 1 12 1C16.4183 1 20 4.58172 20 9C20 11.5264 18.8289 13.7793 17 15.2454ZM12 15C15.3137 15 18 12.3137 18 9C18 5.68629 15.3137 3 12 3C8.68629 3 6 5.68629 6 9C6 12.3137 8.68629 15 12 15ZM12 13C9.79086 13 8 11.2091 8 9C8 6.79086 9.79086 5 12 5C14.2091 5 16 6.79086 16 9C16 11.2091 14.2091 13 12 13Z" fill="rgba(255,255,255,1)"></path></svg>
                                             Tax Regime
                                        </button>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 xl:col-span-9">
                                <div class="box">
                                    <div class="box-body p-0">
                                        <div id="profile-settings-1" role="tabpanel" aria-labelledby="profile-settings-item-1">
                                            <div class="box border-0 shadow-none mb-0">
                                                <div class="box-header">
                                                <h5 class="box-title leading-none flex"><i class="ri ri-shield-user-line ltr:mr-2 rtl:ml-2"></i> Personal Information</h5>
                                                </div>
                                                <div class="box-body">
                                                    <div>
                                                        <form action="{{route('ESTB.staff.update',$staff->id)}}" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('patch')
                                                            <div class="grid lg:grid-cols-3 gap-3 space-y-2 lg:space-y-0 pb-4">
                                                                <div class="space-y-2 ">
                                                                    <label class="ti-form-label mb-0 font-bold">First Name</label>
                                                                    <input type="text" name="fname" id="fname" class="my-auto ti-form-input" placeholder="Firstname" value="{{$staff->fname}}">
                                                                </div>
                                                                <div class="space-y-2">
                                                                    <label class="ti-form-label mb-0 font-bold">Middle Name</label>
                                                                    <input type="text" name="mname" class="my-auto ti-form-input" placeholder="Middle Name" value="{{$staff->mname}}">
                                                                </div>
                                                                <div class="space-y-2">
                                                                    <label class="ti-form-label mb-0 font-bold">Last Name</label>
                                                                    <input type="text" name="lname" id="lname" class="my-auto ti-form-input" placeholder="Lastname" value="{{$staff->lname}}">
                                                                </div>
                                                            </div>
                                                            <div class="grid lg:grid-cols-3 gap-3 space-y-2 lg:space-y-0 pb-4">
                                                                <div class="space-y-2">
                                                                    <label class="ti-form-label mb-0 font-bold">Employee Type</label>
                                                                    <select class="ti-form-select" name="employee_type" id="employee_type">
                                                                        <option value="null">Choose a Employee Type</option>
                                                                        <option value="Teaching" {{$staff->latest_employee_type[0]->employee_type == "Teaching"?'selected':''}}>Teaching</option>
                                                                        <option value="Non-Teaching" {{$staff->latest_employee_type[0]->employee_type == "Non-Teaching"?'selected':''}}>Non-Teaching</option>
                                                                    </select>
                                                                </div>
                                                                <div class="space-y-2">
                                                                    <label class="ti-form-label mb-0 font-bold">Email</label>
                                                                    <div class="flex rounded-sm">
                                                                        <input type="text" name="email" id="email_id"  class="my-auto ti-form-input" placeholder="youremail" value="{{$user->email}}">
                                                                        <!--span class="px-4 inline-flex items-center min-w-fit ltr:rounded-r-sm rtl:rounded-l-sm border ltr:border-l-0 rtl:border-r-0 border-gray-200 bg-gray-50 text-sm dark:bg-black/20 dark:border-white/10">
                                                                            <span class="text-sm text-gray-500 dark:text-white/70">@git.edu</span>
                                                                        </span-->
                                                                    </div>
                                                                </div>

                                                                <div class="space-y-2">
                                                                    <label class="ti-form-label mb-0 font-bold">Biometric EmployeeCode</label>
                                                                    <div class="flex rounded-sm">
                                                                        <input type="text" name="EmployeeCode" id="EmployeeCode"  class="my-auto ti-form-input" placeholder="Enter EmployeeCode" value="{{$staff->EmployeeCode}}">
                                                                        <!--span class="px-4 inline-flex items-center min-w-fit ltr:rounded-r-sm rtl:rounded-l-sm border ltr:border-l-0 rtl:border-r-0 border-gray-200 bg-gray-50 text-sm dark:bg-black/20 dark:border-white/10">
                                                                            <span class="text-sm text-gray-500 dark:text-white/70">@git.edu</span>
                                                                        </span-->
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0 pb-4">
                                                                <div class="space-y-2">
                                                                    <label class="ti-form-label mb-0 font-bold">Religion</label>
                                                                    <select class="ti-form-select" name="religion_id" id="religion_id">
                                                                        <option>Choose a Religion</option>
                                                                        @foreach ($religions as $religion)
                                                                        <option value="{{$religion->id}}" {{$staff->religion_id == $religion->id? 'selected':''}}>{{$religion->religion_name}}</option>
                                                                    @endforeach

                                                                        </select>
                                                                </div>
                                                                <div class="space-y-2">
                                                                    <label class="ti-form-label mb-0 font-bold">Caste Category</label>

                                                                    <select class="ti-form-select" name="castecategory_id" id="castecategory_list">
                                                                        @foreach ($castecategories as $caste)
                                                                        <option value="{{$caste->id}}" {{$staff->castecategory_id == $caste->id? 'selected':''}}>{{$caste->caste_name.'-'.$caste->subcastes_name.'-'.$caste->category.'-'.$caste->category_no}}</option>
                                                                    @endforeach
                                                                    </select>

                                                                </div>
                                                                    <div class="space-y-2 pr-4">
                                                                        <label class="ti-form-label mb-0">Gender</label>
                                                                        <div class="flex gap-x-6">
                                                                            <div class="flex">
                                                                                <input type="radio" name="gender" value="female" {{$staff->gender == "female"?'checked':''}} class="ti-form-radio" id="hs-radio-group-1">
                                                                                <label for="hs-radio-group-1" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Female</label>
                                                                            </div>

                                                                            <div class="flex">
                                                                                <input type="radio" name="gender" value="male" {{$staff->gender == "male"?'checked':''}} class="ti-form-radio" id="hs-radio-group-2">
                                                                                <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Male</label>
                                                                            </div>

                                                                            <div class="flex">
                                                                                <input type="radio" name="gender" value="others" {{$staff->gender == "others"?'checked':''}} class="ti-form-radio" id="hs-radio-group-3">
                                                                                <label for="hs-radio-group-3" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Others</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="space-y-2">
                                                                        <label class="ti-form-label mb-0 font-bold">Date Of Birth</label>
                                                                        <input type="text" name="dob" value="{{$staff->dob}}" class="ti-form-input flatpickr-input date" id="dob"
                                                                            placeholder="Choose date" readonly>
                                                                    </div>
                                                                    <div class="space-y-2">
                                                                        <label class="ti-form-label mb-0 font-bold">Date Of Joining</label>
                                                                        <input type="text" name="doj" value="{{$staff->doj}}" class="ti-form-input flatpickr-input date" id="doj"
                                                                            placeholder="Choose date" readonly>
                                                                    </div>

                                                                    <div class="space-y-2">
                                                                        <label class="ti-form-label mb-0 font-bold">Date Of Superannution</label>
                                                                        <input type="text" name="date_of_superanuation" class="ti-form-input flatpickr-input date" id="dos"
                                                                        value="{{$staff->date_of_superanuation}}" placeholder="Choose date" readonly>
                                                                    </div>

                                                                    <div class="space-y-2">
                                                                        <label class="ti-form-label mb-0 font-bold">Date Of Confirmation</label>

                                                                         <input type="text" name="date_of_confirmation" class="ti-form-input flatpickr-input" value="{{($confirmationdate!=null ? $confirmationdate:"" )}}"
                                                                            placeholder="Choose date" readonly>
                                                                    </div>
                                                                    <div class="space-y-2">
                                                                        <label class="ti-form-label mb-0 font-bold">Date Of Increment</label>
                                                                        <input type="text" name="date_of_increment" value="{{$staff->date_of_increment}}" class="ti-form-input flatpickr-input date" id=""
                                                                            placeholder="Choose date" readonly>
                                                                    </div>
                                                                    <div class="space-y-2">
                                                                        <label class="ti-form-label mb-0 font-bold">Blood Group</label>
                                                                        <select class="ti-form-select" name="bloodgroup">
                                                                            <option value="null">Choose a Blood Group</option>
                                                                            <option value="A+" {{$staff->bloodgroup == "A+"?'selected':''}}>A + (Positive)</option>
                                                                            <option value="A-" {{$staff->bloodgroup == "A-"?'selected':''}} >A - (Negetive)</option>
                                                                            <option value="B+" {{$staff->bloodgroup == "B+"?'selected':''}}>B + (Positive)</option>
                                                                            <option value="B-" {{$staff->bloodgroup == "B-"?'selected':''}}>B - (Negetive)</option>
                                                                            <option value="AB+" {{$staff->bloodgroup == "AB+"?'selected':''}}>AB + (Positive)</option>
                                                                            <option value="AB-" {{$staff->bloodgroup == "AB-"?'selected':''}}>AB - (Negetive)</option>
                                                                            <option value="O+" {{$staff->bloodgroup == "O+"?'selected':''}}>O + (Positive)</option>
                                                                            <option value="O-" {{$staff->bloodgroup == "O-"?'selected':''}}>O - (Negetive)</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="space-y-2">
                                                                        <label class="ti-form-label mb-0 font-bold">PAN Card No:</label>
                                                                        <input type="text" name="pan_card" class="my-auto ti-form-input"
                                                                            placeholder="XXXXX XXXXX" value="{{$staff->pan_card}}">
                                                                    </div>
                                                                </div>
                                                                    <div class="grid lg:grid-cols-1 gap-2 space-y-1 lg:space-y-0 pb-4">
                                                                        <div class="space-y-2">
                                                                            <label for="" class="ti-form-label pt-4 font-bold">Form-16:<span class="text-red-500">* PDF files up to 500 KB in size are accepted.</span></label>
                                                                            upload form-16 file here:<span class="text-red-500">{{$staff->document}} </span>
                                                                            <input type="file" accept="application/pdf" name="document" id="conf_att_document" class="block w-full text-sm text-gray-500 dark:text-white/70 focus:outline-0
                                                                            ltr:file:mr-4 rtl:file:ml-4 file:py-2 file:px-4
                                                                            file:rounded-sm file:border-0
                                                                            file:text-sm file:font-semibold
                                                                            file:bg-primary file:text-white
                                                                            hover:file:bg-primary focus-visible:outline-none doc" value="">
                                                                            @if($errors->has('document'))
                                                                                <div class="text-red-700">{{ $errors->first('document') }}</div>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0 pb-4">
                                                                    <div class="space-y-2">
                                                                        <label class="ti-form-label mb-0 font-bold">Adhar Card No:</label>
                                                                        <input type="text" name="adhar_card" class="my-auto ti-form-input"
                                                                            placeholder="XXXX-XXXX-XXXX-XXXX" value="{{$staff->adhar_card}}">
                                                                    </div>
                                                                    <div class="space-y-2">
                                                                        <label class="ti-form-label mb-0 font-bold">Contact No:</label>
                                                                        <input type="text" name="contactno" value="{{$staff->contactno}}" class="my-auto ti-form-input"
                                                                            placeholder="XXXXX-XXXXX">
                                                                    </div>
                                                            </div>
                                                            <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0 pb-4">
                                                                <div class="space-y-2" id="AICTE_id">
                                                                    <label class="ti-form-label mb-0 font-bold">AICTE ID:</label>
                                                                    <input type="text" name="aicte_id" class="my-auto ti-form-input" value="{{$staff->aicte_id}}"
                                                                        placeholder="AICTE ID">
                                                                </div>
                                                                <div class="space-y-2" id="VTU_id">
                                                                    <label class="ti-form-label mb-0 font-bold">VTU ID:</label>
                                                                    <input type="text" name="vtu_id" class="my-auto ti-form-input" value="{{$staff->vtu_id}}"
                                                                        placeholder="VTU ID">
                                                                </div>
                                                                @if($staff->latest_employee_type()->first()->employee_type=="Non-Teaching")
                                                                <div class="space-y-2" id="ESI_no">
                                                                    <label class="ti-form-label mb-0 font-bold">ESI No:</label>
                                                                    <input type="text" name="esi_no" class="my-auto ti-form-input" value="{{$staff->esi_no}}"
                                                                        placeholder="ESI no">
                                                                </div>
                                                                <div class="space-y-2" id="UN_no">
                                                                    <label class="ti-form-label mb-0 font-bold">UN No:</label>
                                                                    <input type="text" name="un_no" class="my-auto ti-form-input" value="{{$staff->un_no}}"
                                                                        placeholder="Un No">
                                                                </div>
                                                                @endif
                                                            </div>

                                                            <div class="my-5">
                                                                <div class="space-y-2">
                                                                    <label class="ti-form-label mb-0 font-bold">Local Address</label>
                                                                    <input type="text" name="local_address" class="my-auto ti-form-input" value="{{$staff->local_address}}" placeholder="Local Address">
                                                                </div>
                                                            </div>
                                                            <div class="my-5">
                                                                <div class="space-y-2">
                                                                    <label class="ti-form-label mb-0 font-bold">Permanant Address</label>
                                                                    <input type="text" name="permanent_address" class="my-auto ti-form-input" value="{{$staff->permanent_address}}" placeholder="Permenant Address">
                                                                </div>
                                                            </div>
                                                            {{-- <div class="grid lg:grid-cols-3 gap-3 space-y-2 lg:space-y-0">
                                                                <div class="space-y-2">
                                                                    <label class="ti-form-label mb-0 font-bold">Emergency No</label>
                                                                    <input type="text" name="emergency_no" class="ti-form-input" value="{{$staff->emergency_no}}" placeholder="emergency no">
                                                                </div>
                                                                <div class="space-y-2">
                                                                    <label class="ti-form-label mb-0 font-bold">Emergency Name</label>
                                                                    <input type="text" name="emergency_name" class="ti-form-input" value="{{$staff->emergency_name}}" placeholder="emergency name">
                                                                </div>


                                                            </div> --}}
                                                            <div class="grid lg:grid-cols-2 gap-3">
                                                                <div class="space-y-2">
                                                                    <label class="ti-form-label mb-0 font-bold">Emergency No</label>
                                                                    <input type="text" name="emergency_no" class="ti-form-input" value="{{$staff->emergency_no}}" placeholder="emergency no">
                                                                </div>
                                                                <div class="space-y-2">
                                                                    <label class="ti-form-label mb-0 font-bold">Emergency Name</label>
                                                                    <input type="text" name="emergency_name" class="ti-form-input" value="{{$staff->emergency_name}}" placeholder="emergency name">
                                                                </div>



                                                            </div>

                                                            <div class="pt-6">
                                                                <button type="submit" class="ti-btn m-0 ti-btn-soft-primary text-right">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M5.46257 4.43262C7.21556 2.91688 9.5007 2 12 2C17.5228 2 22 6.47715 22 12C22 14.1361 21.3302 16.1158 20.1892 17.7406L17 12H20C20 7.58172 16.4183 4 12 4C9.84982 4 7.89777 4.84827 6.46023 6.22842L5.46257 4.43262ZM18.5374 19.5674C16.7844 21.0831 14.4993 22 12 22C6.47715 22 2 17.5228 2 12C2 9.86386 2.66979 7.88416 3.8108 6.25944L7 12H4C4 16.4183 7.58172 20 12 20C14.1502 20 16.1022 19.1517 17.5398 17.7716L18.5374 19.5674Z"></path></svg>
                                                                    Update
                                                                </button>
                                                                <!--a href="javascript:void(0);" class="ti-btn m-0 ti-btn-soft-secondary"><i class="ri ri-close-circle-line"></i> Cancel</a-->

                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- qualification section start here --}}

                                        <div id="qualification-tab" class="hidden" role="tabpanel" aria-labelledby="qualification">


                                        </div>
                                         {{-- qualification section ends here --}}

                                        <div id="profile-settings-2" class="hidden" role="tabpanel" aria-labelledby="profile-settings-item-2">

                                        </div>
                                        <!-- Association Section starts here -->
                                        <div id="profile-settings-3" class="hidden" role="tabpanel" aria-labelledby="profile-settings-item-3">

                                        </div>
                                        <!--Desination & Payscale section starts here-->
                                        <div id="profile-settings-4" class="hidden" role="tabpanel" aria-labelledby="profile-settings-item-4">

                                        </div>
                                        <!--Leave Staff-->
                                        <div id="profile-settings-5" class="hidden" role="tabpanel" aria-labelledby="profile-settings-item-5">



                                        </div>

                                        <div id="salary-tab" class="hidden" role="tabpanel" aria-labelledby="salary">
                                            <div class="box border-0 shadow-none mb-0">
                                                <div class="box-header">
                                                    <h5 class="box-title leading-none flex"><i class="ri ri-global-line ltr:mr-2 rtl:ml-2"></i> Salary History</h5>
                                                </div>
                                                <div class="box-body">
                                                    <div class="space-y-2">
                                                        <label class="ti-form-label mb-0 font-bold">Salary</label>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="profile-settings-9" class="hidden" role="tabpanel" aria-labelledby="profile-settings-item-9">

                                        </div>

                                        <div id="profile-settings-7" class="hidden" role="tabpanel" aria-labelledby="profile-settings-item-7">

                                        </div>
                                        <div id="profile-settings-8" class="hidden" role="tabpanel" aria-labelledby="profile-settings-item-8">

                                        </div>
                                        <div id="lic-tab" class="hidden" role="tabpanel" aria-labelledby="lic">
                                        </div>
                                        <div id="share-tab" class="hidden" role="tabpanel" aria-labelledby="share">
                                        </div>
                                        <div id="loan-tab" class="hidden" role="tabpanel" aria-labelledby="loan">
                                        </div>
                                        <div id="taxregime-tab" class="hidden" role="tabpanel" aria-labelledby="taxregime">
                                        </div>
                                    </div>

                                </div>
                            </div>
                    </div>
                    <!-- End::row-1 -->

                    </div>
                    <!-- Start::main-content -->

            </div>

@endsection

@section('scripts')

        <!-- FLATPICKR JS -->
        <script src="{{asset('build/assets/libs/flatpickr/flatpickr.min.js')}}"></script>

        <!-- CHOICES JS -->
        <script src="{{asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

         <!-- TABULATOR JS -->
         <script src="{{asset('build/assets/libs/tabulator-tables/js/tabulator.min.js')}}"></script>

        <!-- FORM-LAYOUT JS -->
        @vite('resources/assets/js/profile-settings.js')

        <script
        src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
        <script>
            $(document).ready(function(){

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                //ajax call to change the dropdwon List for castecategory based on religion
               // The Controller is : GetCaste CategoryListCOntroller.php
               $(document).on('change','#religion_id',function(){
                    //alert('Changed');
                    var religion_id = $(this).val();
                    $.ajax({
                        url:base_url+'/ESTB/staff/getcastecategory_list',
                        method:'GET',
                        data:{'r_id':religion_id},
                        headers: {
                        'Access-Control-Allow-Origin': '*',
                        },
                        success:function(data) {
                       console.log(data);
                            var castecategoriesDropdown = $('#castecategory_list');
                            castecategoriesDropdown.empty(); // Clear existing options
                            data.forEach(function(item) {
                                castecategoriesDropdown.append($('<option>').text(item['caste_name']+"-"+item['subcastes_name']+"-"+item['category']+"-"+item['category_no']).attr('value', item['id']));
                            });

                        },
                        error: function (error) {
                            console.log(error);
                        }
                    });

               });

               //for checking whether the employee type is teaching Or non teaching for enabling id's
               var employee_type = $('#employee_type').val();
                    if($(this).val()=='Teaching'){
                        $('#AICTE_id').show();
                        $('#VTU_id').show();

                        $('#ESI_no').hide();
                        $('#UN_no').hide();

                    }else if($(this).val()=='Non-Teaching'){
                        $('#AICTE_id').hide();
                        $('#VTU_id').hide();

                        $('#ESI_no').show();
                        $('#UN_no').show();
                    }else{
                        //alert('Please choose appropriate employee type');
                    }

                    // on change the ids fields to be changed.
                $(document).on('change','#employee_type',function(){
                        if($(this).val()=='Teaching'){
                            $('#AICTE_id').show();
                            $('#VTU_id').show();

                            $('#ESI_no').hide();
                            $('#UN_no').hide();

                        }else if($(this).val()=='Non-Teaching'){
                            $('#AICTE_id').hide();
                            $('#VTU_id').hide();

                            $('#ESI_no').show();
                            $('#UN_no').show();
                        }else{
                            //do nothing.
                            alert('Please choose appropriate employee type');
                        }

                });



                $(document).on('change','#designation_id',function(){
                    //alert('changed');
                    if($(this).val()==1 || $(this).val()== 69 || $(this).val()==60 ||$(this).val()==59 || $(this).val()==58 || $(this).val()==55 || $(this).val()==62){
                        $('#dept_div').show();
                    }else{
                        $('#dept_div'). hide();
                    }

                });

                //while adding the consolidated field if the association choosen is contractual part time.
                    $(document).on('change','#associations_id',function(){
                        //alert('Association Changed');
                        if($(this).val() == 4){
                            ///for checking if the association is contractual.
                            $('#consolidated_div').removeClass('hidden');
                        //  $('#payscale_id_div').addClass('hidden');
                        }
                        else{
                            $('#consolidated_div').addClass('hidden');
                            //$('#payscale_id_div').removeClass('hidden');
                        }
                    });

                    //while editing the consolidated teacching pay field , if choosen as contractual part time
                    $(document).on('change','#associations_id_edit',function(){
                        alert('Association Changed');
                        if($(this).val() == 4) {//for checking if the association is contractual.

                            $('#Edit_association_closing_date').removeClass('hidden');
                           $('.close_forever_div').removeClass('hidden');


                        }else{
                            $('#Edit_association_closing_date').addClass('hidden');
                            $('.close_forever_div').addClass('hidden');


                        }
                    });



                    //on change of Pay type , get employee type, designation and then populate appropriate pay
                    $(document).on('change','input[type=radio][name=pay_type]',function(){
                          //  alert($(this).val());
                            var pay_type = $(this).val();
                            var emp_type = $('#change_payscale_employee_type').val();
                            var designation_id = $('#change_payscale_designation_id').val();
                            //var staff_id = $('#staff_id').val();

                            alert(pay_type+'-'+emp_type+'-'+designation_id);

                            $.ajax({
                                    url:base_url+'/ESTB/staff/getstaffpay_list',
                                    method:'GET',
                                    headers: {
                                            'Access-Control-Allow-Origin': '*',
                                            },
                                    data:{'pay_type':pay_type,'emp_type':emp_type,'designation_id':designation_id},
                                    success:function(data) {
                                        console.log(data);
                                        var staffPayDropdown = $('#ajax_data_populate');
                                        staffPayDropdown.empty(); // Clear existing options
                                        if(pay_type == "Consolidated"){

                                                console.log(data);

                                                $('#nt_fixed_pay_div').hide(); // For displaying the payscale level
                                                $('#nt_payscale_div').hide();
                                                $('#payscalelevel').hide();

                                                // $("#ajax_data_populate").append(data.ntcpayscales);
                                                staffPayDropdown.append(data);
                                                //$('#nt_consolidated_pay').show();
                                        }

                                        if(pay_type == "Payscale"){
                                            if(emp_type == "Teaching"){
                                                //
                                                $('#teahing_consolidated_pay_div').hide();
                                                if($('#t_payscale_div').css('display') == 'none'){
                                                    $('#t_payscale_div').show();

                                                }else{

                                                    $('#ajax_data_populate').html(data);

                                                }


                                                $('#nt_fixed_pay_div').hide();

                                                $("#payscale_id").append(data);
                                                $('#payscalelevel').hide();
                                                $('#nt_consolidated_pay').hide();
                                            }else{
                                                console.log(data);

                                                $('#nt_fixed_pay_div').hide();
                                                $('#nt_consolidated_pay').hide();
                                            // $("#ajax_data_populate").append(data.ntpayscales);
                                                staffPayDropdown.append(data);

                                            }
                                        }
                                        if(pay_type == "Fixed"){ // for fixed pay .for both (T and NT)

                                            $('#nt_payscale_div').hide();
                                            $("#payscale_id").hide();
                                            $('#t_payscale_div').hide();
                                            $('#nt_consolidated_pay_div').hide();
                                            $('#payscalelevel').hide();
                                        // $('#nt_payscale_div').hide();
                                            if(emp_type == "Teaching"){
                                                //teaching fixed
                                                if($('#teahing_consolidated_pay_div').css('display') == 'none'){
                                                        $('#teahing_consolidated_pay_div').show();
                                                }else{
                                                        $('#ajax_data_populate').append('<label for="" class="ti-form-label mb-0 font-bold">Fixed Pay </label><input type="text" name="fixed_pay" class="ti-form-input" value=""/>');


                                                }
                                            }else{
                                                //non teaching fixed.
                                                if($('#nt_fixed_pay_div').css('display') == 'none'){
                                                    $('#nt_fixed_pay_div').show();
                                                }else{
                                                    $('#ajax_data_populate').append('<label for="" class="ti-form-label mb-0 font-bold">Fixed Pay </label><input type="text" name="fixed_pay" class="ti-form-input" value=""/>');

                                                }
                                            }


                                            $('#payscalelevel').hide();
                                        }

                                        //$("#castecategory_list").html(data);
                                    },
                                    error: function (error) {
                                        console.log(error);
                                    }
                                });
                        });

                    //for reseting the radio buttons
                    $(document).on('change','#change_payscale_designation_id ',function(){
                        //for re-populating the payscales by reseting the radio button of pay_type
                        //This is connected with (on Change pay type)
                        if($('input[type=radio][name=pay_type]').is(':checked')){
                            //alert('its checked');
                            $('input[type=radio][name=pay_type]').prop('checked', false);
                        }
                    });


                  //on edit of Pay type , get employee type, designation and then populate appropriate pay
             $(document).on('change','input[type=radio][name=edit_teaching_pay_type]',function(){
                        //alert('Edit teaching payscale');
                        var pay_type = $(this).val();
                        $('#edit_teaching_payscale_ajax_update').empty();
                        var emp_type = $('#edit_payscale_employee_type').val();
                        var old_pay_type  = "";
                       // alert(pay_type+'-'+emp_type);
                            //doing
                            if(pay_type == "Fixed"){
                                //var cons_pay_content = $('#actual_cons_pay').html();
                                $('#actual_cons_pay').show();
                                var fixed_pay_div_content = "<div class='space-y-2' id='actual_cons_pay'>"
                                                                +"<label for='' class='ti-form-label mb-0 font-bold'>Consolidated Pay </label>"
                                                                    +"<input type='text' name='pay' class='ti-form-input' value=''/>"
                                                            +"</div>";
                               // alert(cons_pay_content);
                                $('#edit_teaching_payscale_ajax_update').append(fixed_pay_div_content);
                                $('#edi_teaching_payscale_div').hide();
                            }else{
                                $('#actual_cons_pay').hide();
                                //alert('Ajax calling');
                                $.ajax({
                                    url:base_url+'/ESTB/staff/getstaffpay_list',
                                    method:'GET',
                                    headers: {
                        'Access-Control-Allow-Origin': '*',
                        },
                                    data:{'pay_type':pay_type,'emp_type':emp_type},
                                    success:function(data) {
                                       console.log(data);
                                                if($('#edi_teaching_payscale_div').css('display') == 'none'){
                                                    $('#edi_teaching_payscale_div').show();

                                                }else{

                                                    $('#edit_teaching_payscale_ajax_update').append('<div class="space-y-2" id="loaded_teaching_payscale_div">'+'<label class="ti-form-label mb-0 font-bold">Payscale</label><select class="ti-form-select" id="edit_teaching_payscale_select">');

                                                    data.forEach(function(item) {

                                                        $('#edit_teaching_payscale_select').append($('<option>').text(item['payscale_title']+"-"+item['basepay']+"-"+item['maxpay']+"-"+item['agp']).attr('value', item['id']));
                                                    });

                                                    $('#edit_teaching_payscale_ajax_update').append('</select>');
                                                }
                                    },
                                    error: function (error) {
                                        console.log(error);
                                    }
                                });
                            }



                });


                //Teaching Consolidated pay Edit for updating.....
                $(document).on('change','input[type=radio][name=edit_cons_pay_type]',function(){
                            var pay_type = $(this).val();
                            var emp_type = $('#emp_type_cons_teaching_pay').val();
                            $('#edit_teaching_payscale_ajax_update').empty();
                            $('#edit_cons_teaching_pay_ajax_update').empty();
                            //var designation_id = $('#change_payscale_designation_id').val();
                            //alert(pay_type+'-'+emp_type);
                            if(pay_type == "Fixed"){
                                if($('#Edit_consolidated_pay_div').css('display') == 'none'){
                                                    $('#Edit_consolidated_pay_div').show();


                                }else{


                                            var fixed_pay_div_content = "<div class='space-y-2' id='Edit_consolidated_pay_div'>"
                                                                            +"<label for='' class='ti-form-label mb-0 font-bold'>Consolidated Pay </label>"
                                                                                +"<input type='text' name='pay' class='ti-form-input' value=''/>"
                                                                        +"</div>";
                                        // alert(cons_pay_content);
                                            $('#edit_cons_teaching_pay_ajax_update').append(fixed_pay_div_content);
                                }
                                //$('#Edit_consolidated_pay_div').hide();
                            }else{
                                ///alert("line 713");
                                //payscale Display
                               // $('#Edit_consolidated_pay_div').hide()
                               $('#Edit_consolidated_pay_div').hide();
                                $.ajax({
                                    url:base_url+'/ESTB/staff/getstaffpay_list',
                                    method:'GET',
                                    data:{'pay_type':pay_type,'emp_type':emp_type},
                                    success:function(data) {
                                       console.log(data);
                                                if($('#edi_teaching_payscale_div').css('display') == 'none'){
                                                    $('#edi_teaching_payscale_div').show();

                                                }else{
                                                   $('#edit_cons_teaching_pay_ajax_update').empty();

                                                   $('#edit_cons_teaching_pay_ajax_update').html(data);
                                                    // $('#edit_cons_teaching_pay_ajax_update').html('<div class="space-y-2" id="loaded_teaching_payscale_div">'+'<label class="ti-form-label mb-0 font-bold">Payscale</label><select class="ti-form-select" name="payscale_id" id="edit_cons_select">');

                                                    // data.forEach(function(item) {

                                                    //     $('#edit_cons_select').append($('<option>').text(item['payscale_title']+"-"+item['basepay']+"-"+item['maxpay']+"-"+item['agp']).attr('value', item['id']));
                                                    // });

                                                    // $('#edit_cons_teaching_pay_ajax_update').append('</select>');
                                                }
                                    },
                                    error: function (error) {
                                        console.log(error);
                                    }
                                });

                            }

                });

                //edit payscale for non-teaching
                $(document).on('change','input[type=radio][name=edit_pay_type]',function(){
                    //alert($(this).val());
                    var pay_type = $(this).val();
                    var emp_type = $('#change_payscale_employee_type').val();
                    var designation_id = $('#change_payscale_designation_id').val();
                    //var staff_id = $('#staff_id').val();

                    //alert(pay_type+'-'+emp_type+'-'+designation_id);

                    $.ajax({
                        url:base_url+'/ESTB/staff/getstaffpay_list',
                        method:'GET',
                        data:{'pay_type':pay_type,'emp_type':emp_type,'designation_id':designation_id},
                        success:function(data) {
                            //console.log(data);
                            var staffPayDropdown = $('#edit_ajax_data_populate');
                            staffPayDropdown.empty(); // Clear existing options
                            if(pay_type == "Consolidated"){

                                console.log(data);

                                            $('#edit_nt_fixed_pay_div').hide(); // For displaying the payscale level
                                            $('#edit_nt_payscale_div').hide();
                                            $('#edit_payscalelevel').hide();
                                            if( $('#edit_nt_consolidated_pay').css('display') == 'none'){
                                                $('#edit_nt_consolidated_pay').show()
                                            }
                                            else{
                                                // $("#ajax_data_populate").append(data.ntcpayscales);
                                            staffPayDropdown.append(data);
                                            //$('#nt_consolidated_pay').show();
                                            }

                                    }

                                    if(pay_type == "Payscale"){

                                        $('#edit_nt_fixed_pay_div').hide();
                                            console.log(data);
                                            $('#edit_nt_consolidated_pay_div').hide();

                                            if( $('#edit_nt_payscale_div').css('display') == 'none'){
                                                $('#edit_nt_payscale_div').show();
                                            }
                                            else{


                                            // $("#ajax_data_populate").append(data.ntpayscales);
                                                staffPayDropdown.append(data);
                                            }


                                    }
                                    if(pay_type == "Fixed"){ // for fixed pay .for both (T and NT)

                                        $('#edit_nt_payscale_div').hide();
                                        $('#edit_nt_consolidated_pay_div').hide();
                                        $('#edit_payscalelevel').hide();
                                        //$('#nt_payscale_div').hide();

                                            //non teaching fixed.
                                            if($('#edit_nt_fixed_pay_div').css('display') == 'none'){
                                                $('#edit_nt_fixed_pay_div').show();
                                            }else{
                                                $('#edit_ajax_data_populate').append('<label for="" class="ti-form-label mb-0 font-bold">Fixed Pay </label><input type="text" name="fixed_pay" class="ti-form-input" value=""/>');

                                            }




                                    }

                                    //$("#castecategory_list").html(data);
                                },
                                error: function (error) {
                                    console.log(error);
                                }
                    });
                });

                ////////////////////////////On change ENDS/////////////////////////////////////
                //ajax loading of qualifications
               $(document).on('click','#qualification',function(){
                //alert('Ajax calling');
                var staff=$('#staff').val();
                var url=base_url+'/ESTB/staff/'+staff+'/qualifications';
                //alert(url);
                        $.ajax({
                            url:url,
                            method:'GET',
                            data:{'staff':staff},
                            success:function(data) {
                            // console.log(data);
                                $('#qualification-tab').html(data).addClass('active');
                            },
                            error: function (error) {
                                console.log(error);
                            }
                        });
                });


                 //ajax loading of ESTB of leave Entitlement
                $(document).on('click','#profile-settings-item-5',function(){
                    //alert('Ajax calling');
                    var staff=$('#staff').val();
                    var url=base_url+'/ESTB/staff/'+staff+'/leave_entitlement';
                    //alert(url);
                    $.ajax({
                        url:url,
                        method:'GET',
                        data:{'staff':staff},
                        success:function(data) {
                        // console.log(data);
                            $('#profile-settings-5').html(data).addClass('active');
                        },
                        error: function (error) {
                            console.log(error);
                        }
                    });
                });

                // //ajax loading of ESTB of leave History
                // $(document).on('click','#profile-settings-item-5',function(){
                //     //alert('Ajax calling');
                //     var staff=$('#staff').val();
                //     alert(staff);
                //     var url=base_url+'/ESTB/staff/'+staff+'/fetch_leave_history';
                //     //alert(url);
                //     $.ajax({
                //         url:url,
                //         method:'GET',
                //         data:{'staff':staff},
                //         success:function(data) {
                //             //console.log(data);
                //             $('#profile-settings-5').html(data).addClass('active');
                //         },
                //         error: function (error) {
                //             console.log(error);
                //             }
                //     });
                // });




                //Ajax loading of associations.
                $(document).on('click','#profile-settings-item-3',function(){
                    //alert('Ajax calling');
                    var staff=$('#staff').val();
                    var url= base_url+'/ESTB/staff/'+staff+'/associations';
                    //alert(url);
                    $.ajax({
                                url:url,
                                method:'GET',
                                data:{'staff':staff},

                                success:function(data) {
                                   // console.log(data);
                                    $('#profile-settings-3').html(data).addClass('active');
                                },
                                error: function (error) {
                                    console.log(error);
                                }
                            });
                });


                //Ajax loading of departments.
                $(document).on('click','#profile-settings-item-2',function(){
                    //alert('Ajax calling');
                    var staff=$('#staff').val();
                    var url=base_url+'/ESTB/staff/'+staff+'/departments';
                    //alert(url);
                    $.ajax({
                                url:url,
                                method:'GET',
                                data:{'staff':staff},
                                success:function(data) {
                                    //console.log(data);
                                    $('#profile-settings-2').html(data).addClass('active');
                                },
                                error: function (error) {
                                    console.log(error);
                                }
                            });
                });

                //Ajax loading of designation_payscale.
                $(document).on('click','#profile-settings-item-4',function(){
                    //alert('Ajax calling');
                    var staff=$('#staff').val();
                    var url=base_url+'/ESTB/staff/'+staff+'/designationpayscales';
                    //alert(url);
                    $.ajax({
                                url:url,
                                method:'GET',
                                data:{'staff':staff},
                                success:function(data) {
                                    console.log(data);
                                    $('#profile-settings-4').html(data).addClass('active');
                                },
                                error: function (error) {
                                    console.log(error);
                                }
                            });
                });

                //Ajax loading of Annual Increment
                 $(document).on('click','#profile-settings-item-9',function(){
                //alert('Ajax calling');
                var staff=$('#staff').val();
                //alert(staff);
                var url=base_url+'/ESTB/staff/'+staff+'/annualincrement';
                //alert(url);
                        $.ajax({
                            url:url,
                            method:'GET',
                            data:{'staff':staff},
                            success:function(data) {
                            console.log(data);
                            //alert('Data');
                                $('#profile-settings-9').html(data).addClass('active');
                            },
                            error: function (error) {
                                console.log(error);
                            }
                        });
                });


                //Ajax loading of festival Advance
                $(document).on('click','#profile-settings-item-7',function(){
                //alert('Ajax calling');
                var staff=$('#staff').val();
                //alert(staff);
                var url=base_url+'/ESTB/staff/'+staff+'/festivaladvance';
                //alert(url);
                        $.ajax({
                                    url:url,
                                    method:'GET',
                                    data:{'staff':staff},
                                    success:function(data) {
                                    console.log(data);
                                    //alert('Data');
                                        $('#profile-settings-7').html(data).addClass('active');
                                    },
                                    error: function (error) {
                                        console.log(error);
                                    }
                                });
                });

                //Ajax loading of laptop loan
                 $(document).on('click','#profile-settings-item-8',function(){
               // alert('Ajax calling');
                var staff=$('#staff').val();
                //alert(staff);
                var url=base_url+'/ESTB/staff/'+staff+'/laptoploan';
                //alert(url);
                        $.ajax({
                                    url:url,
                                    method:'GET',
                                    data:{'staff':staff},
                                    success:function(data) {
                                    console.log(data);
                                    //alert('Data');
                                        $('#profile-settings-8').html(data).addClass('active');
                                    },
                                    error: function (error) {
                                        console.log(error);
                                    }
                                });
                });

                $(document).on('click','#lic',function(){
                    //alert('Ajax calling');
                    var staff=$('#staff').val();
                    var url=base_url+'/ESTB/staff/'+staff+'/stafflics';
                    //alert(url);
                    $.ajax({
                                url:url,
                                method:'GET',
                               // data:{'staff':staff},
                                success:function(data) {
                                    console.log(data);
                                    $('#lic-tab').html(data).addClass('active');
                                },
                                error: function (error) {
                                    console.log(error);
                                }
                            });
                });
                $(document).on('click','#share',function(){
                    //alert('Ajax calling');
                    var staff=$('#staff').val();
                    var url=base_url+'/ESTB/staff/'+staff+'/staffshares';
                    //alert(url);
                    $.ajax({
                                url:url,
                                method:'GET',
                               // data:{'staff':staff},
                                success:function(data) {
                                    console.log(data);
                                    $('#share-tab').html(data).addClass('active');
                                },
                                error: function (error) {
                                    console.log(error);
                                }
                            });
                });

                $(document).on('click','#share',function(){
                    //alert('Ajax calling');
                    var staff=$('#staff').val();
                    var url=base_url+'/ESTB/staff/'+staff+'/staffshares';
                    //alert(url);
                    $.ajax({
                                url:url,
                                method:'GET',
                               // data:{'staff':staff},
                                success:function(data) {
                                    console.log(data);
                                    $('#share-tab').html(data).addClass('active');
                                },
                                error: function (error) {
                                    console.log(error);
                                }
                            });
                });


                $(document).on('click','#loan',function(){
                    //alert('Ajax calling');
                    var staff=$('#staff').val();
                    var url=base_url+'/ESTB/staff/'+staff+'/staffloans';
                    //alert(url);
                    $.ajax({
                                url:url,
                                method:'GET',
                               // data:{'staff':staff},
                                success:function(data) {
                                    console.log(data);
                                    $('#loan-tab').html(data).addClass('active');
                                },
                                error: function (error) {
                                    console.log(error);
                                }
                            });
                });

                //Ajax loading of staff tax regime
                $(document).on('click','#taxregime',function(){
                    //alert('Ajax calling');
                    var staff=$('#staff').val();
                    var url=base_url+'/ESTB/staff/'+staff+'/stafftaxregime';
                    //alert(url);
                    $.ajax({
                                url:url,
                                method:'GET',
                               // data:{'staff':staff},
                                success:function(data) {
                                    console.log(data);
                                    $('#taxregime-tab').html(data).addClass('active');
                                },
                                error: function (error) {
                                    console.log(error);
                                }
                            });
                });


        });



        </script>
@endsection
