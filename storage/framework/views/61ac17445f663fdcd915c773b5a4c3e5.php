<?php $__env->startSection('styles'); ?>

        <!-- GLIGHTBOX CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('build/assets/libs/glightbox/css/glightbox.min.css')); ?>">

        <!-- CHOICES CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('build/assets/libs/choices.js/public/assets/styles/choices.min.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

                    <div class="content relative">

                        <div class="flex relative before:bg-black/50 before:absolute before:w-full before:h-full">
                            <img src="<?php echo e(asset('build/assets/img/png-images/2.png')); ?>" alt="" class="h-[500px] w-full rounded-sm" id="profile-img2">
                            <span
                                class="absolute top-5 ltr:right-5 rtl:left-5 flex p-3 rounded-sm ring-1 ring-black/10 text-white bg-black/10 leading-none">
                                <i class="ri ri-pencil-line ltr:mr-2 rtl:ml-2"></i> <span>Change Profile Pic</span>
                                <input type="file" name="photo" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer"
                                id="profile-change2">
                            </span>
                        </div>
                        <div class="absolute top-28 inset-x-0 text-center space-y-3">
                            <div class="flex justify-center w-full">
                                <div class="relative cursor-pointer">
                                    <img src="<?php echo e(asset('build/assets/img/users/1.jpg')); ?>" class="w-24 h-24 rounded-full ring-4 ring-white/10 mx-auto"
                                    id="profile-img" alt="profile-img">
                                    <span
                                        class="absolute bottom-0 ltr:right-0 rtl:left-0 block p-1 rounded-full ring-2 ring-white/10 text-white bg-white/10 dark:bg-bgdark leading-none cursor-pointer">
                                        <i class="ri ri-pencil-line cursor-pointer"></i>
                                        <input type="file"  class="absolute inset-0 w-full h-full opacity-0 cursor-pointer"
                                        id="profile-change">
                                    </span>
                                </div>
                            </div>
                            <div class="text-white">
                                <h2 class="text-base font-semibold">Anderson Itumay</h2>
                                <p class="text-xs text-white/50">andersonitumay@abc.com</p>
                            </div>
                            <div class="flex space-x-2 rtl:space-x-reverse text-center justify-center">
                                <div class="text-yellow-500 text-base hover:text-yellow-500"><i class="ri-star-fill"></i></div>
                                <div class="text-yellow-500 text-base hover:text-yellow-500"><i class="ri-star-fill"></i></div>
                                <div class="text-yellow-500 text-base hover:text-yellow-500"><i class="ri-star-fill"></i></div>
                                <div class="text-yellow-500 text-base hover:text-yellow-500"><i class="ri-star-fill"></i></div>
                                <div class="text-yellow-500 text-base hover:text-yellow-500"><i class="ri-star-fill"></i></div>
                            </div>
                            <div class="flex space-x-1 rtl:space-x-reverse justify-center text-center">
                                <div class="hs-tooltip ti-main-tooltip">
                                <button type="button"
                                    class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline ring-white/10 text-white bg-white/10  border-white/10">
                                    <i class="ri ri-github-line text-lg leading-none"></i>
                                    <span
                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700 hidden"
                                    role="tooltip" data-popper-placement="top"
                                    style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(823px, -92px);">
                                    Github
                                    </span>
                                </button>
                                </div>
                                <div class="hs-tooltip ti-main-tooltip">
                                <button type="button"
                                    class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline ring-white/10 text-white bg-white/10  border-white/10">
                                    <i class="ri ri-instagram-line text-lg leading-none"></i>
                                    <span
                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                    role="tooltip" data-popper-placement="top"
                                    style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(823px, -92px);">
                                    Instagram
                                    </span>
                                </button>
                                </div>
                                <div class="hs-tooltip ti-main-tooltip">
                                <button type="button"
                                    class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline ring-white/10 text-white bg-white/10  border-white/10">
                                    <i class="ri ri-twitter-line text-lg leading-none"></i>
                                    <span
                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                    role="tooltip">
                                    Twitter
                                    </span>
                                </button>
                                </div>
                                <div class="hs-tooltip ti-main-tooltip">
                                <button type="button"
                                    class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline ring-white/10 text-white bg-white/10  border-white/10">
                                    <i class="ri ri-linkedin-line text-lg leading-none"></i>
                                    <span
                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                    role="tooltip">
                                    Linkedin
                                    </span>
                                </button>
                                </div>
                                <div class="hs-tooltip ti-main-tooltip">
                                <button type="button"
                                    class="hs-tooltip-toggle m-0 rounded-full p-2 ti-btn ti-btn-outline ring-white/10 text-white bg-white/10  border-white/10">
                                    <i class="ri ri-facebook-circle-line text-lg leading-none"></i>
                                    <span
                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                    role="tooltip">
                                    Facebook
                                    </span>
                                </button>
                                </div>
                            </div>
                        </div>

                        <!-- Start::main-content -->
                        <div class="main-content -mt-28">

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="col-span-12 xxl:col-span-3">
                                <div class="box">
                                    <div class="box-header">
                                    <div class="flex justify-between">
                                        <h5 class="box-title">About Me</h5>
                                    </div>
                                    </div>
                                    <div class="box-body space-y-3">
                                    <div class="space-y-3">
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
                                        <p>A odit dignissimos minima atque sapiente, eos mollitia amet officiis tempora voluptate laboriosam
                                        id perferendis nobis est vitae facere tenetur? Ut, nam?</p>
                                    </div>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="box-header">
                                    <div class="flex justify-between">
                                        <h5 class="box-title">General Info</h5>
                                    </div>
                                    </div>
                                    <div class="box-body py-2">
                                    <div class="overflow-x-auto">
                                        <table class="ti-custom-table border-0">
                                        <tbody>
                                            <tr class="">
                                            <td class="font-medium !p-2">Designation</td>
                                            <td class="!p-2">:</td>
                                            <td class="!p-2">Sr.Ui Developer</td>
                                            </tr>
                                            <tr class="!border-0">
                                            <td class="font-medium !p-2">Joined</td>
                                            <td class="!p-2">:</td>
                                            <td class="!p-2">01 November 2019</td>
                                            </tr>
                                            <tr class="!border-0">
                                            <td class="font-medium !p-2">Age</td>
                                            <td class="!p-2">:</td>
                                            <td class="!p-2">26</td>
                                            </tr>
                                            <tr class="!border-0">
                                            <td class="font-medium !p-2">City</td>
                                            <td class="!p-2">:</td>
                                            <td class="!p-2">Lake Park</td>
                                            </tr>
                                            <tr class="!border-0">
                                            <td class="font-medium !p-2">Country</td>
                                            <td class="!p-2">:</td>
                                            <td class="!p-2">Newyork</td>
                                            </tr>
                                            <tr class="!border-0">
                                            <td class="font-medium !p-2">State</td>
                                            <td class="!p-2">:</td>
                                            <td class="!p-2">U.S.A</td>
                                            </tr>
                                        </tbody>
                                        </table>
                                    </div>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="box-header">
                                    <div class="flex justify-between">
                                        <h5 class="box-title">Followers</h5>
                                    </div>
                                    </div>
                                    <div class="box-body space-y-4 text-center">
                                    <ul class="flex flex-col">
                                        <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white">
                                        <div class="sm:flex xxl:block xxxl:flex space-y-2 xxxl:space-y-0 justify-between w-full">
                                            <div class="flex items-center">
                                            <img class="avatar avatar-xs rounded-sm" src="<?php echo e(asset('build/assets/img/users/2.jpg')); ?>"
                                                alt="Image Description">
                                            <div class="ltr:ml-4 rtl:mr-4">
                                                <h5 class="text-gray-800 dark:text-white">Socrates Itumay</h5>
                                                <p class="text-xs text-gray-500 dark:text-white/70">UI/Ux Designer</p>
                                            </div>
                                            </div>
                                            <div class="my-auto">
                                            <button type="button"
                                                class="ti-btn p-1 m-0 text-xs font-medium bg-white border-gray-200 text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10">
                                                <i class="ri-user-unfollow-line"></i> Following
                                            </button>
                                            </div>
                                        </div>
                                        </li>
                                        <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white">
                                        <div class="sm:flex xxl:block xxxl:flex space-y-2 xxxl:space-y-0 justify-between w-full">
                                            <div class="flex items-center">
                                            <img class="avatar avatar-xs rounded-sm" src="<?php echo e(asset('build/assets/img/users/12.jpg')); ?>"
                                                alt="Image Description">
                                            <div class="ltr:ml-4 rtl:mr-4">
                                                <h5 class="text-gray-800 dark:text-white">Ben Dover</h5>
                                                <p class="text-xs text-gray-500 dark:text-white/70">Java Developer</p>
                                            </div>
                                            </div>
                                            <div class="my-auto">
                                            <button type="button"
                                                class="ti-btn p-1 m-0 text-xs font-medium bg-white border-gray-200 text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10">
                                                <i class="ri-user-unfollow-line"></i> Following
                                            </button>
                                            </div>
                                        </div>
                                        </li>
                                        <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white">
                                        <div class="sm:flex xxl:block xxxl:flex space-y-2 xxxl:space-y-0 justify-between w-full">
                                            <div class="flex items-center">
                                            <span
                                                class="avatar avatar-xs ring-0 rounded-sm bg-secondary leading-none  p-2 text-center text-lg text-white">B</span>
                                            <div class="ltr:ml-4 rtl:mr-4">
                                                <h5 class="text-gray-800 dark:text-white">Benz Makit</h5>
                                                <p class="text-xs text-gray-500 dark:text-white/70">React Developer</p>
                                            </div>
                                            </div>
                                            <div class="my-auto">
                                            <button type="button"
                                                class="ti-btn p-1 m-0 text-xs font-medium bg-white border-gray-200 text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10">
                                                <i class="ri-user-unfollow-line"></i> Following
                                            </button>
                                            </div>
                                        </div>
                                        </li>
                                        <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white">
                                        <div class="sm:flex xxl:block xxxl:flex space-y-2 xxxl:space-y-0 justify-between w-full">
                                            <div class="flex items-center">
                                            <img class="avatar avatar-xs rounded-sm" src="<?php echo e(asset('build/assets/img/users/3.jpg')); ?>"
                                                alt="Image Description">
                                            <div class="ltr:ml-4 rtl:mr-4">
                                                <h5 class="text-gray-800 dark:text-white">Wiley Waites</h5>
                                                <p class="text-xs text-gray-500 dark:text-white/70">Web Designer</p>
                                            </div>
                                            </div>
                                            <div class="my-auto">
                                            <button type="button"
                                                class="ti-btn p-1 m-0 text-xs font-medium bg-white border-gray-200 text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10">
                                                <i class="ri-user-unfollow-line"></i> Following
                                            </button>
                                            </div>
                                        </div>
                                        </li>
                                        <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white">
                                        <div class="sm:flex xxl:block xxxl:flex space-y-2 xxxl:space-y-0 justify-between w-full">
                                            <div class="flex items-center">
                                            <img class="avatar avatar-xs rounded-sm" src="<?php echo e(asset('build/assets/img/users/13.jpg')); ?>"
                                                alt="Image Description">
                                            <div class="ltr:ml-4 rtl:mr-4">
                                                <h5 class="text-gray-800 dark:text-white">King Berunda </h5>
                                                <p class="text-xs text-gray-500 dark:text-white/70">Full Stack Developer</p>
                                            </div>
                                            </div>
                                            <div class="my-auto">
                                            <button type="button"
                                                class="ti-btn p-1 m-0 text-xs font-medium bg-white border-gray-200 text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10">
                                                <i class="ri-user-unfollow-line"></i> Following
                                            </button>
                                            </div>
                                        </div>
                                        </li>
                                        <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white">
                                        <div class="sm:flex xxl:block xxxl:flex space-y-2 xxxl:space-y-0 justify-between w-full">
                                            <div class="flex items-center">
                                            <img class="avatar avatar-xs rounded-sm" src="<?php echo e(asset('build/assets/img/users/4.jpg')); ?>"
                                                alt="Image Description">
                                            <div class="ltr:ml-4 rtl:mr-4">
                                                <h5 class="text-gray-800 dark:text-white">Samantha May</h5>
                                                <p class="text-xs text-gray-500 dark:text-white/70">Full Stack Developer</p>
                                            </div>
                                            </div>
                                            <div class="my-auto">
                                            <button type="button"
                                                class="ti-btn p-1 m-0 text-xs font-medium bg-white border-gray-200 text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10">
                                                <i class="ri-user-unfollow-line"></i> Following
                                            </button>
                                            </div>
                                        </div>
                                        </li>
                                    </ul>
                                    <a href="javascript:void(0);" class="ti-btn ti-btn-primary py-1 px-2 m-0">View more</a>
                                    </div>
                                </div>
                                </div>
                                <div class="col-span-12 xxl:col-span-6">
                                <div class="box">
                                    <div class="box-header">
                                    <nav class="sm:flex sm:space-x-2 space-y-2 sm:space-y-0 rtl:space-x-reverse block" aria-label="Tabs" role="tablist">
                                        <button type="button"
                                        class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white py-2 px-3 inline-flex items-center w-full justify-center gap-2 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300 active"
                                        id="profile-item-1" data-hs-tab="#profile-1" aria-controls="profile-1" role="tab">
                                        Profile
                                        </button>
                                        <button type="button"
                                        class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white py-2 px-3 inline-flex items-center w-full justify-center gap-2 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300"
                                        id="profile-item-2" data-hs-tab="#profile-2" aria-controls="profile-2" role="tab">
                                        Activities
                                        </button>
                                        <button type="button"
                                        class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white py-2 px-3 inline-flex items-center w-full justify-center gap-2 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300"
                                        id="profile-item-3" data-hs-tab="#profile-3" aria-controls="profile-3" role="tab">
                                        Posts
                                        </button>
                                        <button type="button"
                                        class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white py-2 px-3 inline-flex items-center w-full justify-center gap-2 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300"
                                        id="profile-item-4" data-hs-tab="#profile-4" aria-controls="profile-4" role="tab">
                                        Projects
                                        </button>
                                    </nav>
                                    </div>
                                    <div class="box-body">
                                    <div id="profile-1" class="" role="tabpanel" aria-labelledby="profile-item-1">
                                        <h5 class="box-title mb-3">Basic Information</h5>
                                        <div class="overflow-auto">
                                        <table class="ti-custom-table border-0 whitespace-nowrap">
                                            <tbody>
                                            <tr class="">
                                                <td class="!p-2 font-medium !text-gray-500 dark:!text-white/70">First name</td>
                                                <td class="!p-2">:</td>
                                                <td class="!p-2 !text-gray-500 dark:!text-white/70">Anderson</td>
                                            </tr>
                                            <tr class="!border-0">
                                                <td class="!p-2 font-medium !text-gray-500 dark:!text-white/70">Last Name</td>
                                                <td class="!p-2">:</td>
                                                <td class="!p-2 !text-gray-500 dark:!text-white/70">Itumay</td>
                                            </tr>
                                            <tr class="!border-0">
                                                <td class="!p-2 font-medium !text-gray-500 dark:!text-white/70">Birthday</td>
                                                <td class="!p-2">:</td>
                                                <td class="!p-2 !text-gray-500 dark:!text-white/70">03 September 1990</td>
                                            </tr>
                                            <tr class="!border-0">
                                                <td class="!p-2 font-medium !text-gray-500 dark:!text-white/70">Gender</td>
                                                <td class="!p-2">:</td>
                                                <td class="!p-2 !text-gray-500 dark:!text-white/70">Female</td>
                                            </tr>
                                            <tr class="!border-0">
                                                <td class="!p-2 font-medium !text-gray-500 dark:!text-white/70">Languages</td>
                                                <td class="!p-2">:</td>
                                                <td class="!p-2 !text-gray-500 dark:!text-white/70">Telugu ,Hindi , English</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        </div>
                                        <h5 class="box-title my-3">Contact Information</h5>
                                        <div class="overflow-auto">
                                        <table class="ti-custom-table border-0 whitespace-nowrap">
                                            <tbody>
                                            <tr class="">
                                                <td class="!p-2 font-medium !text-gray-500 dark:!text-white/70">Personal Contact No</td>
                                                <td class="!p-2">:</td>
                                                <td class="!p-2 !text-gray-500 dark:!text-white/70">+123(45)-158-90.</td>
                                            </tr>
                                            <tr class="!border-0">
                                                <td class="!p-2 font-medium !text-gray-500 dark:!text-white/70">Email Id</td>
                                                <td class="!p-2">:</td>
                                                <td class="!p-2 !text-gray-500 dark:!text-white/70">andersonitumay@abc.com</td>
                                            </tr>
                                            <tr class="!border-0">
                                                <td class="!p-2 font-medium !text-gray-500 dark:!text-white/70">Address</td>
                                                <td class="!p-2">:</td>
                                                <td class="!p-2 !text-gray-500 dark:!text-white/70">andersonitumay@abc.com</td>
                                            </tr>
                                            <tr class="!border-0">
                                                <td class="!p-2 font-medium !text-gray-500 dark:!text-white/70">Website link</td>
                                                <td class="!p-2">:</td>
                                                <td class="!p-2 !text-gray-500 dark:!text-white/70">www.andersonitumay.com</td>
                                            </tr>
                                            <tr class="!border-0">
                                                <td class="!p-2 font-medium !text-gray-500 dark:!text-white/70">Linked in link</td>
                                                <td class="!p-2">:</td>
                                                <td class="!p-2 !text-gray-500 dark:!text-white/70">https://in.linkedin.com/andersonitumay
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        </div>
                                        <h5 class="box-title my-3">Education Information</h5>
                                        <div class="overflow-auto">
                                        <table class="ti-custom-table border-0 whitespace-nowrap">
                                            <tbody>
                                            <tr class="">
                                                <td class="!p-2 font-medium !text-gray-500 dark:!text-white/70 w-[252px]">School</td>
                                                <td class="!p-2">:</td>
                                                <td class="!p-2 !text-gray-500 dark:!text-white/70">Studied at Makit Hight school ,1-12th</td>
                                            </tr>
                                            <tr class="!border-0">
                                                <td class="!p-2 font-medium !text-gray-500 dark:!text-white/70 w-[252px]">Graduation</td>
                                                <td class="!p-2">:</td>
                                                <td class="!p-2 !text-gray-500 dark:!text-white/70">Studied at Abc University , Btech(cse)
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        </div>
                                        <h5 class="box-title my-3">Work Experience</h5>
                                        <div class="overflow-auto">
                                        <table class="ti-custom-table border-0 whitespace-nowrap">
                                            <tbody>
                                            <tr class="">
                                                <td class="!p-2 font-medium !text-gray-500 dark:!text-white/70 w-[252px]">Work1</td>
                                                <td class="!p-2">:</td>
                                                <td class="!p-2 !text-gray-500 dark:!text-white/70">Web Designer at abc ,2015 - 2018</td>
                                            </tr>
                                            <tr class="!border-0">
                                                <td class="!p-2 font-medium !text-gray-500 dark:!text-white/70 w-[252px]">Work2</td>
                                                <td class="!p-2">:</td>
                                                <td class="!p-2 !text-gray-500 dark:!text-white/70">Sr. Ui Developer at abc ,2018 - present
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        </div>
                                    </div>
                                    <div id="profile-2" class="hidden" role="tabpanel" aria-labelledby="profile-item-2">
                                        <div class="">
                                        <div class="flex flex-row">
                                            <div class="mx-auto relative">
                                            <div class="h-full w-6 flex items-center justify-center">
                                                <div class="h-full w-[3px] bg-gray-100 dark:bg-black/20 pointer-events-none"></div>
                                            </div>
                                            <div
                                                class="avatar avatar-xs absolute top-0 rounded-full bg-gray-200 shadow text-center ltr:-left-[4px] rtl:-right-[4px]">
                                                <img src="<?php echo e(asset('build/assets/img/users/1.jpg')); ?>" class="rounded-full" alt="profile-img">
                                            </div>
                                            </div>
                                            <div class="flex w-full pb-8">
                                            <div class="ltr:ml-5 rtl:mr-5 rounded-sm ltr:mr-auto rtl:ml-auto my-auto w-full space-y-3">
                                                <div class="sm:flex">
                                                <h3 class="my-auto text-gray-500 dark:text-white/70"><span
                                                    class="text-dark dark:text-white">Elida
                                                    Distefa</span> added a comment to <span class="text-dark dark:text-white">Anderson
                                                    Itumay</span> post</h3>
                                                <p class="my-auto ltr:ml-auto rtl:mr-auto text-gray-500 dark:text-white/70 text-xs">
                                                    Today, 04:30 PM
                                                </p>
                                                </div>
                                                <div class="flex -space-x-2 rtl:space-x-reverse">
                                                <img class="avatar avatar-xs rounded-full" src="<?php echo e(asset('build/assets/img/users/1.jpg')); ?>"
                                                    alt="Image Description">
                                                <img class="avatar avatar-xs rounded-full" src="<?php echo e(asset('build/assets/img/users/4.jpg')); ?>"
                                                    alt="Image Description">
                                                <img class="avatar avatar-xs rounded-full" src="<?php echo e(asset('build/assets/img/users/2.jpg')); ?>"
                                                    alt="Image Description">
                                                <img class="avatar avatar-xs rounded-full" src="<?php echo e(asset('build/assets/img/users/3.jpg')); ?>"
                                                    alt="Image Description">
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-row">
                                            <div class="mx-auto relative">
                                            <div class="h-full w-6 flex items-center justify-center">
                                                <div class="h-full w-[3px] bg-gray-100 dark:bg-black/20 pointer-events-none"></div>
                                            </div>
                                            <div
                                                class="avatar avatar-xs absolute top-0 rounded-full bg-gray-200 shadow text-center ltr:-left-[4px] rtl:-right-[4px]">
                                                <img src="<?php echo e(asset('build/assets/img/users/3.jpg')); ?>" class="rounded-full" alt="profile-img">
                                            </div>
                                            </div>
                                            <div class="flex w-full pb-8">
                                            <div class="ltr:ml-5 rtl:mr-5 rounded-sm ltr:mr-auto rtl:ml-auto my-auto w-full space-y-3">
                                                <div class="sm:flex">
                                                <h3 class="my-auto text-gray-500 dark:text-white/70"><span
                                                    class="text-dark dark:text-white">Samantha
                                                    Melon</span> added a 😎 reaction to <span class="text-dark dark:text-white">Anderson
                                                    Itumay</span> post</h3>
                                                <p class="my-auto ltr:ml-auto rtl:mr-auto text-gray-500 dark:text-white/70 text-xs">
                                                    Today, 04:30 PM
                                                </p>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-row">
                                            <div class="mx-auto relative">
                                            <div class="h-full w-6 flex items-center justify-center">
                                                <div class="h-full w-[3px] bg-gray-100 dark:bg-black/20 pointer-events-none"></div>
                                            </div>
                                            <div
                                                class="avatar avatar-xs absolute top-0 rounded-full bg-gray-200 shadow text-center ltr:-left-[4px] rtl:-right-[4px]">
                                                <img src="<?php echo e(asset('build/assets/img/users/2.jpg')); ?>" class="rounded-full" alt="profile-img">
                                            </div>
                                            </div>
                                            <div class="flex w-full pb-8">
                                            <div class="ltr:ml-5 rtl:mr-5 rounded-sm ltr:mr-auto rtl:ml-auto my-auto w-full space-y-3">
                                                <div class="sm:flex">
                                                <h3 class="my-auto text-gray-500 dark:text-white/70"><span
                                                    class="text-dark dark:text-white">Samantha
                                                    Melon</span> like an Image</h3>
                                                <p class="my-auto ltr:ml-auto rtl:mr-auto text-gray-500 dark:text-white/70 text-xs">
                                                    Today, 05:45 PM
                                                </p>
                                                </div>
                                                <div><img src="<?php echo e(asset('build/assets/img/gallery/2.jpg')); ?>" class="avatar avatar-lg rounded-sm"
                                                    alt="profile-img"></div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-row">
                                            <div class="mx-auto relative">
                                            <div class="h-full w-6 flex items-center justify-center">
                                                <div class="h-full w-[3px] bg-gray-100 dark:bg-black/20 pointer-events-none"></div>
                                            </div>
                                            <div
                                                class="avatar avatar-xs absolute top-0 rounded-full bg-gray-200 shadow text-center ltr:-left-[4px] rtl:-right-[4px]">
                                                <img src="<?php echo e(asset('build/assets/img/users/15.jpg')); ?>" class="rounded-full" alt="profile-img">
                                            </div>
                                            </div>
                                            <div class="flex w-full pb-8">
                                            <div class="ltr:ml-5 rtl:mr-5 rounded-sm ltr:mr-auto rtl:ml-auto my-auto w-full space-y-3">
                                                <div class="sm:flex">
                                                <h3 class="my-auto text-gray-500 dark:text-white/70"><span
                                                    class="text-dark dark:text-white">Dennis
                                                    Trexy</span> Shared an image</h3>
                                                <p class="my-auto ltr:ml-auto rtl:mr-auto text-gray-500 dark:text-white/70 text-xs">
                                                    yesterday, 10:20 am
                                                </p>
                                                </div>
                                                <div class="space-y-3">
                                                <p class="text-xs textbg-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Nostrum sit consequuntur quia aperiam quibusdam rerum ut! Id ducimus nobis rerum modi
                                                    veniam odit totam rem asperiores adipisci, sed quia voluptas?</p>
                                                <img src="<?php echo e(asset('build/assets/img/gallery/5.jpg')); ?>" class="avatar avatar-lg rounded-sm"
                                                    alt="profile-img">
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-row">
                                            <div class="mx-auto relative">
                                            <div class="h-full w-6 flex items-center justify-center">
                                                <div class="h-full w-[3px] bg-gray-100 dark:bg-black/20 pointer-events-none"></div>
                                            </div>
                                            <div
                                                class="avatar avatar-xs absolute top-0 rounded-full bg-gray-200 shadow text-center ltr:-left-[4px] rtl:-right-[4px]">
                                                <img src="<?php echo e(asset('build/assets/img/users/21.jpg')); ?>" class="rounded-full" alt="profile-img">
                                            </div>
                                            </div>
                                            <div class="flex w-full pb-8">
                                            <div class="ltr:ml-5 rtl:mr-5 rounded-sm ltr:mr-auto rtl:ml-auto my-auto w-full space-y-3">
                                                <div class="sm:flex">
                                                <h3 class="my-auto text-gray-500 dark:text-white/70"><span
                                                    class="text-dark dark:text-white">Anesthesia</span>
                                                    commented on today's meeting</h3>
                                                <p class="my-auto ltr:ml-auto rtl:mr-auto text-gray-500 dark:text-white/70 text-xs">
                                                    yesterday, 05:06 pm
                                                </p>
                                                </div>
                                                <div
                                                class="border border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10 p-4 rounded-sm">
                                                <p class="text-xs textbg-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Nostrum sit consequuntur quia aperiam quibusdam rerum ut! Id ducimus nobis rerum modi
                                                    veniam odit totam rem asperiores adipisci, sed quia voluptas?</p>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-row">
                                            <div class="mx-auto relative">
                                            <div class="h-full w-6 flex items-center justify-center">
                                                <div class="h-full w-[3px] bg-gray-100 dark:bg-black/20 pointer-events-none"></div>
                                            </div>
                                            <div
                                                class="avatar avatar-xs absolute top-0 rounded-full bg-gray-200 dark:bg-bgdark2 shadow text-center ltr:-left-[4px] rtl:-right-[4px] leading-[2.3]">
                                                H
                                            </div>
                                            </div>
                                            <div class="flex w-full pb-8">
                                            <div class="ltr:ml-5 rtl:mr-5 rounded-sm ltr:mr-auto rtl:ml-auto my-auto w-full space-y-3">
                                                <div class="sm:flex">
                                                <h3 class="my-auto text-gray-500 dark:text-white/70"><span
                                                    class="text-dark dark:text-white">Harvey
                                                    Mattos</span> Followed You</h3>
                                                <p class="my-auto ltr:ml-auto rtl:mr-auto text-gray-500 dark:text-white/70 text-xs">
                                                    03-12-20222, 12:06 pm
                                                </p>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-row">
                                            <div class="mx-auto relative">
                                            <div class="h-full w-6 flex items-center justify-center">
                                                <div class="h-full w-[3px] bg-gray-100 dark:bg-black/20 pointer-events-none"></div>
                                            </div>
                                            <div
                                                class="avatar avatar-xs absolute top-0 rounded-full bg-gray-200 shadow text-center ltr:-left-[4px] rtl:-right-[4px]">
                                                <img src="<?php echo e(asset('build/assets/img/users/15.jpg')); ?>" class="rounded-full" alt="profile-img">
                                            </div>
                                            </div>
                                            <div class="flex w-full">
                                            <div class="ltr:ml-5 rtl:mr-5 rounded-sm ltr:mr-auto rtl:ml-auto my-auto w-full space-y-3">
                                                <div class="sm:flex">
                                                <h3 class="my-auto text-gray-500 dark:text-white/70"><span
                                                    class="text-dark dark:text-white">Anesthesia</span>
                                                    5 Days left for Montly submission of progress report </h3>
                                                <p class="my-auto ltr:ml-auto rtl:mr-auto text-gray-500 dark:text-white/70 text-xs">
                                                    02-12-2022, 6:20 pm
                                                </p>
                                                </div>
                                                <div
                                                class="border border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10 p-4 rounded-sm">
                                                <p class="text-xs textbg-gray-500 mb-3">Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Nostrum sit consequuntur quia aperiam quibusdam rerum ut! Id ducimus nobis rerum
                                                    modi veniam odit totam rem asperiores adipisci, sed quia voluptas?</p>
                                                <p class="text-xs textbg-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Nostrum sit consequuntur quia aperiam quibusdam rerum ut! Id ducimus nobis rerum modi
                                                    veniam odit totam rem asperiores adipisci, sed quia voluptas?</p>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div id="profile-3" class="hidden text-center" role="tabpanel" aria-labelledby="profile-item-3">
                                        <div class="box text-start">
                                        <div class="box-body p-0">
                                            <div
                                            class="sm:flex sm:space-x-3 space-y-2 sm:space-y-0 p-6 border-b border-gray-200 dark:border-white/10 rtl:space-x-reverse">
                                            <img class="avatar avatar-sm rounded-full" src="<?php echo e(asset('build/assets/img/users/1.jpg')); ?>" alt="profile-img">
                                            <div class="relative w-full">
                                                <input type="text"
                                                class="ti-form-input ltr:pr-16 rtl:pl-16 rounded-full shadow-sm focus:z-10 bg-gray-100 dark:bg-black/20"
                                                placeholder="What's On Your Mind ..........">
                                                <div
                                                class="absolute inset-y-0 ltr:right-8 rtl:left-8 flex items-center z-20 ltr:pr-4 rtl:pl-4">
                                                <a aria-label="anchor" href="javascript:void(0);"><i
                                                    class="ri ri-emotion-line text-gray-500 dark:text-white/70 text-lg leading-none"></i></a>
                                                </div>
                                                <div
                                                class="absolute inset-y-0 ltr:right-0 rtl:left-0 flex items-center z-20 ltr:pr-4 rtl:pl-4">
                                                <a aria-label="anchor" href="javascript:void(0);"><i
                                                    class="ri ri-pencil-line text-gray-500 dark:text-white/70 text-lg leading-none"></i></a>
                                                </div>
                                            </div>
                                            </div>
                                            <ul class="sm:flex sm:space-x-5 space-y-2 sm:space-y-0 flex-row p-6 rtl:space-x-reverse">
                                            <li>
                                                <a class="flex space-x-1 rtl:space-x-reverse" href="javascript:void(0);">
                                                <i class="ri ri-image-2-line text-lg leading-none text-primary"></i>
                                                <span class="text-gray-500 dark:text-white/70">
                                                    Image
                                                </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="flex space-x-1 rtl:space-x-reverse" href="javascript:void(0);">
                                                <i class="ri ri-vidicon-line text-lg leading-none text-secondary"></i>
                                                <span class="text-gray-500 dark:text-white/70">
                                                    Video
                                                </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="flex space-x-1 rtl:space-x-reverse" href="javascript:void(0);">
                                                <i class="ri ri-attachment-2 text-lg leading-none text-warning"></i>
                                                <span class="text-gray-500 dark:text-white/70">
                                                    Attachment
                                                </span>
                                                </a>
                                            </li>
                                            <li class="hidden md:flex">
                                                <a class="flex space-x-1 rtl:space-x-reverse" href="javascript:void(0);">
                                                <i class="ri ri-hashtag text-lg leading-none text-danger"></i>
                                                <span class="text-gray-500 dark:text-white/70">
                                                    Hashtag
                                                </span>
                                                </a>
                                            </li>
                                            <li class="hidden xxxl:flex">
                                                <a class="flex space-x-1 rtl:space-x-reverse" href="javascript:void(0);">
                                                <i class="ri ri-at-line text-lg leading-none text-info"></i>
                                                <span class="text-gray-500 dark:text-white/70">
                                                    Mention
                                                </span>
                                                </a>
                                            </li>
                                            </ul>
                                        </div>
                                        <div class="box-footer">
                                            <div class="Profile-post-footer flex space-x-5 rtl:space-x-reverse justify-end">
                                            <select class="ti-form-select" data-trigger>
                                                <option value="1">Only Me</option>
                                                <option value="2" selected>Public</option>
                                                <option value="3">Private</option>
                                                <option value="4">Friends Only</option>
                                                <option value="5">Friends Of Friends</option>
                                            </select>
                                            <a href="javascript:void(0);" class="m-0 ti-btn ti-btn-primary">post</a>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="box p-5 text-start">
                                        <div class="sm:flex flex-row space-y-2 sm:space-y-0">
                                            <img class="sm:w-1/4 rounded-sm border border-gray-200 dark:border-white/10"
                                            src="<?php echo e(asset('build/assets/img/gallery/9.jpg')); ?>" alt="Image Description">
                                            <div class="box-body ltr:sm:pl-5 rtl:sm:pr-5 px-0 py-0 space-y-4 my-auto w-full">
                                            <h5 class="font-semibold mb-0 text-base leading-none">Lorem ipsum dolor sit amet consectetur
                                                adipisicing.</h5>
                                            <div class="space-x-2 sm:space-y-0 rtl:space-x-reverse flex">
                                                <a href="javascript:void(0);"
                                                class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-2 rtl:space-x-reverse rounded-full bg-gray-100 px-3 py-1 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex"><i
                                                    class="text-xs ri ri-heart-line"></i><span class="my-auto">30</span></a>
                                                <a href="javascript:void(0);"
                                                class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-2 rtl:space-x-reverse rounded-full bg-gray-100 px-3 py-1 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex"><i
                                                    class="text-xs ri ri-thumb-up-line"></i><span class="my-auto">25k</span></a>
                                            </div>
                                            <div class="md:flex md:justify-between space-y-2 md:space-y-0">
                                                <div class="flex items-center space-x-3 rtl:space-x-reverse">
                                                <div class="flex">
                                                    <img class="avatar avatar-xs ring-0 rounded-full" src="<?php echo e(asset('build/assets/img/users/1.jpg')); ?>"
                                                    alt="avatar">
                                                </div>
                                                <div>
                                                    <p class="text-slate-700 font-semibold text-sm dark:text-white">
                                                    Json Taylor
                                                    </p>
                                                    <p class="text-xs text-gray-500 dark:text-white/70">
                                                    20 min ago
                                                    </p>
                                                </div>
                                                </div>
                                                <div class="flex -space-x-2 rtl:space-x-reverse">
                                                <img class="avatar avatar-xs rounded-full" src="<?php echo e(asset('build/assets/img/users/15.jpg')); ?>"
                                                    alt="Image Description">
                                                <img class="avatar avatar-xs rounded-full" src="<?php echo e(asset('build/assets/img/users/4.jpg')); ?>"
                                                    alt="Image Description">
                                                <img class="avatar avatar-xs rounded-full" src="<?php echo e(asset('build/assets/img/users/12.jpg')); ?>"
                                                    alt="Image Description">
                                                <img class="avatar avatar-xs rounded-full" src="<?php echo e(asset('build/assets/img/users/3.jpg')); ?>"
                                                    alt="Image Description">
                                                <span
                                                    class="inline-flex items-center justify-center avatar avatar-xs rounded-full bg-gray-100 border-2 border-gray-200 dark:bg-black/20 dark:border-white/10">
                                                    <span class="font-medium text-gray-500 leading-none dark:text-white/70">2+</span>
                                                </span>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="box p-5 text-start">
                                        <div class="sm:flex flex-row space-y-2 sm:space-y-0">
                                            <img class="sm:w-1/4 rounded-sm border border-gray-200 dark:border-white/10"
                                            src="<?php echo e(asset('build/assets/img/gallery/3.jpg')); ?>" alt="Image Description">
                                            <div class="box-body ltr:sm:pl-5 rtl:sm:pr-5 px-0 py-0 space-y-4 my-auto w-full">
                                            <h5 class="font-semibold mb-0 text-base leading-none">Deserunt dolore ad incididunt excepteur
                                                excepteur Lorem amet excepteur.</h5>
                                            <div class="space-x-2 sm:space-y-0 rtl:space-x-reverse flex">
                                                <a href="javascript:void(0);"
                                                class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-2 rtl:space-x-reverse rounded-full bg-gray-100 px-3 py-1 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex"><i
                                                    class="text-xs ri ri-heart-line"></i><span class="my-auto">30</span></a>
                                                <a href="javascript:void(0);"
                                                class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-2 rtl:space-x-reverse rounded-full bg-gray-100 px-3 py-1 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex"><i
                                                    class="text-xs ri ri-thumb-up-line"></i><span class="my-auto">25k</span></a>
                                            </div>
                                            <div class="md:flex md:justify-between space-y-2 md:space-y-0">
                                                <div class="flex items-center space-x-3 rtl:space-x-reverse">
                                                <div class="flex">
                                                    <img class="avatar avatar-xs ring-0 rounded-full" src="<?php echo e(asset('build/assets/img/users/3.jpg')); ?>"
                                                    alt="avatar">
                                                </div>
                                                <div>
                                                    <p class="text-slate-700 font-semibold text-sm dark:text-white">
                                                    Sujika
                                                    </p>
                                                    <p class="text-xs text-gray-500 dark:text-white/70">
                                                    5 hrs ago
                                                    </p>
                                                </div>
                                                </div>
                                                <div class="flex -space-x-2 rtl:space-x-reverse">
                                                <img class="avatar avatar-xs rounded-full" src="<?php echo e(asset('build/assets/img/users/15.jpg')); ?>"
                                                    alt="Image Description">
                                                <img class="avatar avatar-xs rounded-full" src="<?php echo e(asset('build/assets/img/users/4.jpg')); ?>"
                                                    alt="Image Description">
                                                <img class="avatar avatar-xs rounded-full" src="<?php echo e(asset('build/assets/img/users/12.jpg')); ?>"
                                                    alt="Image Description">
                                                <img class="avatar avatar-xs rounded-full" src="<?php echo e(asset('build/assets/img/users/13.jpg')); ?>"
                                                    alt="Image Description">
                                                <span
                                                    class="inline-flex items-center justify-center avatar avatar-xs rounded-full bg-gray-100 border-2 border-gray-200 dark:bg-black/20 dark:border-white/10">
                                                    <span class="font-medium text-gray-500 leading-none dark:text-white/70">4+</span>
                                                </span>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="box p-5 text-start">
                                        <div class="sm:flex flex-row space-y-2 sm:space-y-0">
                                            <img class="sm:w-1/4 rounded-sm border border-gray-200 dark:border-white/10"
                                            src="<?php echo e(asset('build/assets/img/gallery/4.jpg')); ?>" alt="Image Description">
                                            <div class="box-body ltr:sm:pl-5 rtl:sm:pr-5 px-0 py-0 space-y-4 my-auto w-full">
                                            <h5 class="font-semibold mb-0 text-base leading-none">Minim Lorem sunt in sunt adipisicing anim
                                                est enim duis...</h5>
                                            <div class="space-x-2 sm:space-y-0 rtl:space-x-reverse flex">
                                                <a href="javascript:void(0);"
                                                class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-2 rtl:space-x-reverse rounded-full bg-gray-100 px-3 py-1 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex"><i
                                                    class="text-xs ri ri-heart-line"></i><span class="my-auto">30</span></a>
                                                <a href="javascript:void(0);"
                                                class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-2 rtl:space-x-reverse rounded-full bg-gray-100 px-3 py-1 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex"><i
                                                    class="text-xs ri ri-thumb-up-line"></i><span class="my-auto">25k</span></a>
                                            </div>
                                            <div class="md:flex md:justify-between space-y-2 md:space-y-0">
                                                <div class="flex items-center space-x-3 rtl:space-x-reverse">
                                                <div class="flex">
                                                    <img class="avatar avatar-xs ring-0 rounded-full" src="<?php echo e(asset('build/assets/img/users/13.jpg')); ?>"
                                                    alt="avatar">
                                                </div>
                                                <div>
                                                    <p class="text-slate-700 font-semibold text-sm dark:text-white">
                                                    King Berunda
                                                    </p>
                                                    <p class="text-xs text-gray-500 dark:text-white/70">
                                                    Yesterday, 10:27AM
                                                    </p>
                                                </div>
                                                </div>
                                                <div class="flex -space-x-2 rtl:space-x-reverse">
                                                <img class="avatar avatar-xs rounded-full" src="<?php echo e(asset('build/assets/img/users/15.jpg')); ?>"
                                                    alt="Image Description">
                                                <img class="avatar avatar-xs rounded-full" src="<?php echo e(asset('build/assets/img/users/4.jpg')); ?>"
                                                    alt="Image Description">
                                                <img class="avatar avatar-xs rounded-full" src="<?php echo e(asset('build/assets/img/users/12.jpg')); ?>"
                                                    alt="Image Description">
                                                <img class="avatar avatar-xs rounded-full" src="<?php echo e(asset('build/assets/img/users/3.jpg')); ?>"
                                                    alt="Image Description">
                                                <span
                                                    class="inline-flex items-center justify-center avatar avatar-xs rounded-full bg-gray-100 border-2 border-gray-200 dark:bg-black/20 dark:border-white/10">
                                                    <span class="font-medium text-gray-500 leading-none dark:text-white/70">4+</span>
                                                </span>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="box p-5 text-start">
                                        <div class="sm:flex flex-row space-y-2 sm:space-y-0">
                                            <img class="sm:w-1/4 rounded-sm border border-gray-200 dark:border-white/10"
                                            src="<?php echo e(asset('build/assets/img/gallery/5.jpg')); ?>" alt="Image Description">
                                            <div class="box-body ltr:sm:pl-5 rtl:sm:pr-5 px-0 py-0 space-y-4 my-auto w-full">
                                            <h5 class="font-semibold mb-0 text-base leading-none">Minim Lorem sunt in sunt adipisicing anim
                                                est enim duis...</h5>
                                            <div class="space-x-2 sm:space-y-0 rtl:space-x-reverse flex">
                                                <a href="javascript:void(0);"
                                                class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-2 rtl:space-x-reverse rounded-full bg-gray-100 px-3 py-1 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex"><i
                                                    class="text-xs ri ri-heart-line"></i><span class="my-auto">30</span></a>
                                                <a href="javascript:void(0);"
                                                class="text-xs leading-[0] text-gray-500 dark:text-white/70 space-x-2 rtl:space-x-reverse rounded-full bg-gray-100 px-3 py-1 font-normal hover:bg-gray-300 focus:bg-gary-800 dark:bg-black/20 dark:hover:bg-bgdark inline-flex"><i
                                                    class="text-xs ri ri-thumb-up-line"></i><span class="my-auto">25k</span></a>
                                            </div>
                                            <div class="md:flex md:justify-between space-y-2 md:space-y-0">
                                                <div class="flex items-center space-x-3 rtl:space-x-reverse">
                                                <div class="flex">
                                                    <img class="avatar avatar-xs ring-0 rounded-full" src="<?php echo e(asset('build/assets/img/users/15.jpg')); ?>"
                                                    alt="avatar">
                                                </div>
                                                <div>
                                                    <p class="text-slate-700 font-semibold text-sm dark:text-white">
                                                    Michael Jeremy
                                                    </p>
                                                    <p class="text-xs text-gray-500 dark:text-white/70">
                                                    08 Aug 2022
                                                    </p>
                                                </div>
                                                </div>
                                                <div class="flex -space-x-2 rtl:space-x-reverse">
                                                <img class="avatar avatar-xs rounded-full" src="<?php echo e(asset('build/assets/img/users/15.jpg')); ?>"
                                                    alt="Image Description">
                                                <img class="avatar avatar-xs rounded-full" src="<?php echo e(asset('build/assets/img/users/4.jpg')); ?>"
                                                    alt="Image Description">
                                                <img class="avatar avatar-xs rounded-full" src="<?php echo e(asset('build/assets/img/users/12.jpg')); ?>"
                                                    alt="Image Description">
                                                <img class="avatar avatar-xs rounded-full" src="<?php echo e(asset('build/assets/img/users/3.jpg')); ?>"
                                                    alt="Image Description">
                                                <span
                                                    class="inline-flex items-center justify-center avatar avatar-xs rounded-full bg-gray-100 border-2 border-gray-200 dark:bg-black/20 dark:border-white/10">
                                                    <span class="font-medium text-gray-500 leading-none dark:text-white/70">4+</span>
                                                </span>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        <a href="javascript:void(0);" class="ti-btn ti-btn-primary py-1 px-2 m-0">View All</a>
                                    </div>
                                    <div id="profile-4" class="hidden text-center" role="tabpanel" aria-labelledby="profile-item-4">
                                        <div class="sm:grid grid-cols-12 gap-x-6 space-y-6 sm:space-y-0 text-start">
                                        <div class="md:col-span-6 col-span-12">
                                            <div class="box">
                                            <div class="box-body space-y-3">
                                                <div class="sm:flex sm:space-x-3 sm:space-y-0 space-y-2 rtl:space-x-reverse">
                                                <img src="<?php echo e(asset('build/assets/img/logos/2.png')); ?>"
                                                    class="p-2 avatar w-14 h-14  bg-gray-100 dark:bg-black/20 rounded-sm" alt="profile-img">
                                                <div class="my-auto space-y-2">
                                                    <h5 class="text-sm font-semibold">Tailwind Ui Web Application</h5>
                                                    <div class="flex -space-x-2 rtl:space-x-reverse">
                                                    <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/15.jpg')); ?>"
                                                        alt="Image Description">
                                                    <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/4.jpg')); ?>"
                                                        alt="Image Description">
                                                    <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/12.jpg')); ?>"
                                                        alt="Image Description">
                                                    <span
                                                        class="inline-flex items-center justify-center avatar w-6 h-6 rounded-full bg-gray-100 border-2 border-gray-200 dark:bg-black/20 dark:border-white/10">
                                                        <span class="font-medium text-gray-500 leading-none dark:text-white/70">2+</span>
                                                    </span>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="sm:flex sm:space-y-0 space-y-2 justify-between">
                                                <span class="badge bg-success/10 text-success rounded-sm mb-0">
                                                    <span class="w-1.5 h-1.5 inline-block bg-success/40 rounded-full"></span>
                                                    Completed
                                                </span>
                                                <p class="text-gray-500 dark:text-white/70 text-sm font-medium my-auto whitespace-nowrap">15-12-2022</p>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="md:col-span-6 col-span-12">
                                            <div class="box">
                                            <div class="box-body space-y-3">
                                                <div class="sm:flex sm:space-x-3 sm:space-y-0 space-y-2 rtl:space-x-reverse">
                                                <img src="<?php echo e(asset('build/assets/img/logos/1.png')); ?>"
                                                    class="p-2 avatar w-14 h-14  bg-gray-100 dark:bg-black/20 rounded-sm" alt="profile-img">
                                                <div class="my-auto space-y-2">
                                                    <h5 class="text-sm font-semibold">Synto Ui Mobile Application</h5>
                                                    <div class="flex -space-x-2 rtl:space-x-reverse">
                                                    <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/15.jpg')); ?>"
                                                        alt="Image Description">
                                                    <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/4.jpg')); ?>"
                                                        alt="Image Description">
                                                    <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/3.jpg')); ?>"
                                                        alt="Image Description">
                                                    <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/12.jpg')); ?>"
                                                        alt="Image Description">
                                                    <span
                                                        class="inline-flex items-center justify-center avatar w-6 h-6 rounded-full bg-gray-100 border-2 border-gray-200 dark:bg-black/20 dark:border-white/10">
                                                        <span class="font-medium text-gray-500 leading-none dark:text-white/70">4+</span>
                                                    </span>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="sm:flex sm:space-y-0 space-y-2 justify-between">
                                                <span class="badge bg-warning/10 text-warning rounded-sm mb-0">
                                                    <span class="w-1.5 h-1.5 inline-block bg-warning/40 rounded-full"></span>
                                                    Inprogress
                                                </span>
                                                <p class="text-gray-500 dark:text-white/70 text-sm font-medium my-auto whitespace-nowrap">10-12-2022</p>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="md:col-span-6 col-span-12">
                                            <div class="box">
                                            <div class="box-body space-y-3">
                                                <div class="sm:flex sm:space-x-3 sm:space-y-0 space-y-2 rtl:space-x-reverse">
                                                <img src="<?php echo e(asset('build/assets/img/logos/3.png')); ?>"
                                                    class="p-2 avatar w-14 h-14  bg-gray-100 dark:bg-black/20 rounded-sm" alt="profile-img">
                                                <div class="my-auto space-y-2">
                                                    <h5 class="text-sm font-semibold">Valex Laravel Project</h5>
                                                    <div class="flex -space-x-2 rtl:space-x-reverse">
                                                    <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/15.jpg')); ?>"
                                                        alt="Image Description">
                                                    <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/4.jpg')); ?>"
                                                        alt="Image Description">
                                                    <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/3.jpg')); ?>"
                                                        alt="Image Description">
                                                    <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/12.jpg')); ?>"
                                                        alt="Image Description">
                                                    <span
                                                        class="inline-flex items-center justify-center avatar w-6 h-6 rounded-full bg-gray-100 border-2 border-gray-200 dark:bg-black/20 dark:border-white/10">
                                                        <span class="font-medium text-gray-500 leading-none dark:text-white/70">4+</span>
                                                    </span>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="sm:flex sm:space-y-0 space-y-2 justify-between">
                                                <span class="badge bg-warning/10 text-warning rounded-sm mb-0">
                                                    <span class="w-1.5 h-1.5 inline-block bg-warning/40 rounded-full"></span>
                                                    Inprogress
                                                </span>
                                                <p class="text-gray-500 dark:text-white/70 text-sm font-medium my-auto whitespace-nowrap">10-12-2022</p>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="md:col-span-6 col-span-12">
                                            <div class="box">
                                            <div class="box-body space-y-3">
                                                <div class="sm:flex sm:space-x-3 sm:space-y-0 space-y-2 rtl:space-x-reverse">
                                                <img src="<?php echo e(asset('build/assets/img/logos/4.png')); ?>"
                                                    class="p-2 avatar w-14 h-14  bg-gray-100 dark:bg-black/20 rounded-sm" alt="profile-img">
                                                <div class="my-auto space-y-2">
                                                    <h5 class="text-sm font-semibold">Zanex Laravel Project</h5>
                                                    <div class="flex -space-x-2 rtl:space-x-reverse">
                                                    <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/15.jpg')); ?>"
                                                        alt="Image Description">
                                                    <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/4.jpg')); ?>"
                                                        alt="Image Description">
                                                    <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/3.jpg')); ?>"
                                                        alt="Image Description">
                                                    <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/12.jpg')); ?>"
                                                        alt="Image Description">
                                                    <span
                                                        class="inline-flex items-center justify-center avatar w-6 h-6 rounded-full bg-gray-100 border-2 border-gray-200 dark:bg-black/20 dark:border-white/10">
                                                        <span class="font-medium text-gray-500 leading-none dark:text-white/70">4+</span>
                                                    </span>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="sm:flex sm:space-y-0 space-y-2 justify-between">
                                                <span class="badge bg-primary/10 text-primary rounded-sm mb-0 whitespace-nowrap">
                                                    <span class="w-1.5 h-1.5 inline-block bg-primary/40 rounded-full"></span>
                                                    New Project
                                                </span>
                                                <p class="text-gray-500 dark:text-white/70 text-sm font-medium my-auto whitespace-nowrap">05-12-2022</p>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="md:col-span-6 col-span-12">
                                            <div class="box">
                                            <div class="box-body space-y-3">
                                                <div class="sm:flex sm:space-x-3 sm:space-y-0 space-y-2 rtl:space-x-reverse">
                                                <img src="<?php echo e(asset('build/assets/img/logos/5.png')); ?>"
                                                    class="p-2 avatar w-14 h-14  bg-gray-100 dark:bg-black/20 rounded-sm" alt="profile-img">
                                                <div class="my-auto space-y-2">
                                                    <h5 class="text-sm font-semibold">Adminor Laravel Project</h5>
                                                    <div class="flex -space-x-2 rtl:space-x-reverse">
                                                    <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/15.jpg')); ?>"
                                                        alt="Image Description">
                                                    <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/4.jpg')); ?>"
                                                        alt="Image Description">
                                                    <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/3.jpg')); ?>"
                                                        alt="Image Description">
                                                    <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/12.jpg')); ?>"
                                                        alt="Image Description">
                                                    <span
                                                        class="inline-flex items-center justify-center avatar w-6 h-6 rounded-full bg-gray-100 border-2 border-gray-200 dark:bg-black/20 dark:border-white/10">
                                                        <span class="font-medium text-gray-500 leading-none dark:text-white/70">4+</span>
                                                    </span>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="sm:flex sm:space-y-0 space-y-2 justify-between">
                                                <span class="badge bg-primary/10 text-primary rounded-sm mb-0 whitespace-nowrap">
                                                    <span class="w-1.5 h-1.5 inline-block bg-primary/40 rounded-full"></span>
                                                    New Project
                                                </span>
                                                <p class="text-gray-500 dark:text-white/70 text-sm font-medium my-auto whitespace-nowrap">05-12-2022</p>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="md:col-span-6 col-span-12">
                                            <div class="box">
                                            <div class="box-body space-y-3">
                                                <div class="sm:flex sm:space-x-3 sm:space-y-0 space-y-2 rtl:space-x-reverse">
                                                <img src="<?php echo e(asset('build/assets/img/logos/6.png')); ?>"
                                                    class="p-2 avatar w-14 h-14  bg-gray-100 dark:bg-black/20 rounded-sm" alt="profile-img">
                                                <div class="my-auto space-y-2">
                                                    <h5 class="text-sm font-semibold">Client Project</h5>
                                                    <div class="flex -space-x-2 rtl:space-x-reverse">
                                                    <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/15.jpg')); ?>"
                                                        alt="Image Description">
                                                    <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/4.jpg')); ?>"
                                                        alt="Image Description">
                                                    <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/3.jpg')); ?>"
                                                        alt="Image Description">
                                                    <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/12.jpg')); ?>"
                                                        alt="Image Description">
                                                    <span
                                                        class="inline-flex items-center justify-center avatar w-6 h-6 rounded-full bg-gray-100 border-2 border-gray-200 dark:bg-black/20 dark:border-white/10">
                                                        <span class="font-medium text-gray-500 leading-none dark:text-white/70">4+</span>
                                                    </span>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="sm:flex sm:space-y-0 space-y-2 justify-between">
                                                <span class="badge bg-danger/10 text-danger rounded-sm mb-0">
                                                    <span class="w-1.5 h-1.5 inline-block bg-danger/40 rounded-full"></span>
                                                    Aborted
                                                </span>
                                                <p class="text-gray-500 dark:text-white/70 text-sm font-medium my-auto whitespace-nowrap">05-12-2022</p>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="md:col-span-6 col-span-12">
                                            <div class="box">
                                            <div class="box-body space-y-3">
                                                <div class="sm:flex sm:space-x-3 sm:space-y-0 space-y-2 rtl:space-x-reverse">
                                                <img src="<?php echo e(asset('build/assets/img/logos/7.png')); ?>"
                                                    class="p-2 avatar w-14 h-14  bg-gray-100 dark:bg-black/20 rounded-sm" alt="profile-img">
                                                <div class="my-auto space-y-2">
                                                    <h5 class="text-sm font-semibold">React Project</h5>
                                                    <div class="flex -space-x-2 rtl:space-x-reverse">
                                                    <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/15.jpg')); ?>"
                                                        alt="Image Description">
                                                    <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/4.jpg')); ?>"
                                                        alt="Image Description">
                                                    <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/3.jpg')); ?>"
                                                        alt="Image Description">
                                                    <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/12.jpg')); ?>"
                                                        alt="Image Description">
                                                    <span
                                                        class="inline-flex items-center justify-center avatar w-6 h-6 rounded-full bg-gray-100 border-2 border-gray-200 dark:bg-black/20 dark:border-white/10">
                                                        <span class="font-medium text-gray-500 leading-none dark:text-white/70">5+</span>
                                                    </span>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="sm:flex sm:space-y-0 space-y-2 justify-between">
                                                <span class="badge bg-info/10 text-info rounded-sm mb-0">
                                                    <span class="w-1.5 h-1.5 inline-block bg-info/40 rounded-full"></span>
                                                    Approved
                                                </span>
                                                <p class="text-gray-500 dark:text-white/70 text-sm font-medium my-auto whitespace-nowrap">05-12-2022</p>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="md:col-span-6 col-span-12">
                                            <div class="box">
                                            <div class="box-body space-y-3">
                                                <div class="sm:flex sm:space-x-3 sm:space-y-0 space-y-2 rtl:space-x-reverse">
                                                <img src="<?php echo e(asset('build/assets/img/logos/8.png')); ?>"
                                                    class="p-2 avatar w-14 h-14  bg-gray-100 dark:bg-black/20 rounded-sm" alt="profile-img">
                                                <div class="my-auto space-y-2">
                                                    <h5 class="text-sm font-semibold">Angular Project</h5>
                                                    <div class="flex -space-x-2 rtl:space-x-reverse">
                                                    <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/15.jpg')); ?>"
                                                        alt="Image Description">
                                                    <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/4.jpg')); ?>"
                                                        alt="Image Description">
                                                    <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/3.jpg')); ?>"
                                                        alt="Image Description">
                                                    <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/12.jpg')); ?>"
                                                        alt="Image Description">
                                                    <span
                                                        class="inline-flex items-center justify-center avatar w-6 h-6 rounded-full bg-gray-100 border-2 border-gray-200 dark:bg-black/20 dark:border-white/10">
                                                        <span class="font-medium text-gray-500 leading-none dark:text-white/70">5+</span>
                                                    </span>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="sm:flex sm:space-y-0 space-y-2 justify-between">
                                                <span class="badge bg-primary/10 text-primary rounded-sm mb-0 whitespace-nowrap">
                                                    <span class="w-1.5 h-1.5 inline-block bg-primary/40 rounded-full"></span>
                                                    New Project
                                                </span>
                                                <p class="text-gray-500 dark:text-white/70 text-sm font-medium my-auto whitespace-nowrap">05-12-2022</p>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="md:col-span-6 col-span-12">
                                            <div class="box">
                                            <div class="box-body space-y-3">
                                                <div class="sm:flex sm:space-x-3 sm:space-y-0 space-y-2 rtl:space-x-reverse">
                                                <img src="<?php echo e(asset('build/assets/img/logos/9.png')); ?>"
                                                    class="p-2 avatar w-14 h-14  bg-gray-100 dark:bg-black/20 rounded-sm" alt="profile-img">
                                                <div class="my-auto space-y-2">
                                                    <h5 class="text-sm font-semibold">Vue Project</h5>
                                                    <div class="flex -space-x-2 rtl:space-x-reverse">
                                                    <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/15.jpg')); ?>"
                                                        alt="Image Description">
                                                    <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/4.jpg')); ?>"
                                                        alt="Image Description">
                                                    <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/3.jpg')); ?>"
                                                        alt="Image Description">
                                                    <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/12.jpg')); ?>"
                                                        alt="Image Description">
                                                    <span
                                                        class="inline-flex items-center justify-center avatar w-6 h-6 rounded-full bg-gray-100 border-2 border-gray-200 dark:bg-black/20 dark:border-white/10">
                                                        <span class="font-medium text-gray-500 leading-none dark:text-white/70">5+</span>
                                                    </span>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="sm:flex sm:space-y-0 space-y-2 justify-between">
                                                <span class="badge bg-success/10 text-success rounded-sm mb-0">
                                                    <span class="w-1.5 h-1.5 inline-block bg-success/40 rounded-full"></span>
                                                    Completed
                                                </span>
                                                <p class="text-gray-500 dark:text-white/70 text-sm font-medium my-auto whitespace-nowrap">05-12-2022</p>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="md:col-span-6 col-span-12">
                                            <div class="box">
                                            <div class="box-body space-y-3">
                                                <div class="sm:flex sm:space-x-3 sm:space-y-0 space-y-2 rtl:space-x-reverse">
                                                <img src="<?php echo e(asset('build/assets/img/logos/10.png')); ?>"
                                                    class="p-2 avatar w-14 h-14  bg-gray-100 dark:bg-black/20 rounded-sm" alt="profile-img">
                                                <div class="my-auto space-y-2">
                                                    <h5 class="text-sm font-semibold">Nextjs Project</h5>
                                                    <div class="flex -space-x-2 rtl:space-x-reverse">
                                                    <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/15.jpg')); ?>"
                                                        alt="Image Description">
                                                    <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/4.jpg')); ?>"
                                                        alt="Image Description">
                                                    <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/3.jpg')); ?>"
                                                        alt="Image Description">
                                                    <img class="avatar w-6 h-6 rounded-full" src="<?php echo e(asset('build/assets/img/users/12.jpg')); ?>"
                                                        alt="Image Description">
                                                    <span
                                                        class="inline-flex items-center justify-center avatar w-6 h-6 rounded-full bg-gray-100 border-2 border-gray-200 dark:bg-black/20 dark:border-white/10">
                                                        <span class="font-medium text-gray-500 leading-none dark:text-white/70">5+</span>
                                                    </span>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="sm:flex sm:space-y-0 space-y-2 justify-between">
                                                <span class="badge bg-warning/10 text-warning rounded-sm mb-0">
                                                    <span class="w-1.5 h-1.5 inline-block bg-warning/40 rounded-full"></span>
                                                    Inprogress
                                                </span>
                                                <p class="text-gray-500 dark:text-white/70 text-sm font-medium my-auto whitespace-nowrap">05-12-2022</p>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        <a href="javascript:void(0);" class="ti-btn ti-btn-primary py-1 px-2 m-0">View more</a>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="col-span-12 xxl:col-span-3">
                                <div class="box">
                                    <div class="box-header">
                                    <h5 class="box-title">Skills</h5>
                                    </div>
                                    <div class="box-body">
                                    <span class="badge bg-gray-100 text-gray-800 dark:bg-black/20 dark:text-gray-200">Laravel</span>
                                    <span class="badge bg-gray-100 text-gray-800 dark:bg-black/20 dark:text-gray-200">Angular</span>
                                    <span class="badge bg-gray-100 text-gray-800 dark:bg-black/20 dark:text-gray-200">Html</span>
                                    <span class="badge bg-gray-100 text-gray-800 dark:bg-black/20 dark:text-gray-200">VueJs</span>
                                    <span class="badge bg-gray-100 text-gray-800 dark:bg-black/20 dark:text-gray-200">React</span>
                                    <span class="badge bg-gray-100 text-gray-800 dark:bg-black/20 dark:text-gray-200">Codeignator</span>
                                    <span class="badge bg-gray-100 text-gray-800 dark:bg-black/20 dark:text-gray-200">Javascript</span>
                                    <span class="badge bg-gray-100 text-gray-800 dark:bg-black/20 dark:text-gray-200">Bootstarp</span>
                                    <span class="badge bg-gray-100 text-gray-800 dark:bg-black/20 dark:text-gray-200">Php</span>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="box-header">
                                    <h5 class="box-title">Recent Posts</h5>
                                    </div>
                                    <div class="box-body">
                                    <ul class="flex flex-col">
                                        <li class="ti-list-group pt-0 px-0 border-0 text-gray-800 dark:text-white">
                                        <a href="javascript:void(0);" class="space-x-3 flex rtl:space-x-reverse">
                                            <img src="<?php echo e(asset('build/assets/img/gallery/1.jpg')); ?>" class="avatar rounded-sm ring-0" alt="profile-img">
                                            <div class="space-y-1 my-auto">
                                            <h3 class="font-semibold text-xs leading-none">Minim Lorem sunt in sunt adipisicing anim est
                                                enim duis..</h3>
                                            <p class="flex space-x-2 rtl:space-x-reverse text-gray-500 dark:text-white/70 text-xs"><i
                                                class="ri ri-calendar-line text-xs"></i><span>Sept 29 , 2022</span></p>
                                            </div>
                                        </a>
                                        </li>
                                        <li class="ti-list-group px-0 border-0 text-gray-800 dark:text-white">
                                        <a href="javascript:void(0);" class="space-x-3 flex rtl:space-x-reverse">
                                            <img src="<?php echo e(asset('build/assets/img/gallery/2.jpg')); ?>" class="avatar rounded-sm ring-0" alt="profile-img">
                                            <div class="space-y-1 my-auto">
                                            <h3 class="font-semibold text-xs leading-none">Deserunt dolore ad incididunt excepteur excepteur
                                                Lorem amet excepteur.</h3>
                                            <p class="flex space-x-2 rtl:space-x-reverse text-gray-500 dark:text-white/70 text-xs"><i
                                                class="ri ri-time-line text-xs"></i><span>3 hours ago</span></p>
                                            </div>
                                        </a>
                                        </li>
                                        <li class="ti-list-group px-0 border-0 text-gray-800 dark:text-white">
                                        <a href="javascript:void(0);" class="space-x-3 flex rtl:space-x-reverse">
                                            <img src="<?php echo e(asset('build/assets/img/gallery/3.jpg')); ?>" class="avatar rounded-sm ring-0" alt="profile-img">
                                            <div class="space-y-1 my-auto">
                                            <h3 class="font-semibold text-xs leading-none">Exercitation officia Lorem amet commodo.</h3>
                                            <p class="flex space-x-2 rtl:space-x-reverse text-gray-500 dark:text-white/70 text-xs"><i
                                                class="ri ri-time-line text-xs"></i><span>30 mins ago</span></p>
                                            </div>
                                        </a>
                                        </li>
                                        <li class="ti-list-group px-0 border-0 text-gray-800 dark:text-white">
                                        <a href="javascript:void(0);" class="space-x-3 flex rtl:space-x-reverse">
                                            <img src="<?php echo e(asset('build/assets/img/gallery/4.jpg')); ?>" class="avatar rounded-sm ring-0" alt="profile-img">
                                            <div class="space-y-1 my-auto">
                                            <h3 class="font-semibold text-xs leading-none">Sunt occaecat ut dolor veniam id cillum laboris
                                                ad et.</h3>
                                            <p class="flex space-x-2 rtl:space-x-reverse text-gray-500 dark:text-white/70 text-xs"><i
                                                class="ri ri-calendar-line text-xs"></i><span>l day ago</span></p>
                                            </div>
                                        </a>
                                        </li>
                                    </ul>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="box-header">
                                    <h5 class="box-title">Photos</h5>
                                    </div>
                                    <div class="box-body">
                                    <div class="relative">
                                        <div class="grid grid-cols-3 gap-3">
                                        <a href="<?php echo e(asset('build/assets/img/gallery/1.jpg')); ?>" class="gallery">
                                            <img class="w-full object-cover rounded-sm" src="<?php echo e(asset('build/assets/img/gallery/1.jpg')); ?>"
                                            alt="Image Description">
                                        </a>
                                        <a href="<?php echo e(asset('build/assets/img/gallery/2.jpg')); ?>" class="gallery">
                                            <img class="w-full object-cover rounded-sm" src="<?php echo e(asset('build/assets/img/gallery/2.jpg')); ?>"
                                            alt="Image Description">
                                        </a>
                                        <a href="<?php echo e(asset('build/assets/img/gallery/3.jpg')); ?>" class="gallery">
                                            <img class="w-full object-cover rounded-sm" src="<?php echo e(asset('build/assets/img/gallery/3.jpg')); ?>"
                                            alt="Image Description">
                                        </a>
                                        <a href="<?php echo e(asset('build/assets/img/gallery/4.jpg')); ?>" class="gallery">
                                            <img class="w-full object-cover rounded-sm" src="<?php echo e(asset('build/assets/img/gallery/4.jpg')); ?>"
                                            alt="Image Description">
                                        </a>
                                        <a href="<?php echo e(asset('build/assets/img/gallery/5.jpg')); ?>" class="gallery">
                                            <img class="w-full object-cover rounded-sm" src="<?php echo e(asset('build/assets/img/gallery/5.jpg')); ?>"
                                            alt="Image Description">
                                        </a>
                                        <a href="<?php echo e(asset('build/assets/img/gallery/6.jpg')); ?>" class="gallery">
                                            <img class="w-full object-cover rounded-sm" src="<?php echo e(asset('build/assets/img/gallery/6.jpg')); ?>"
                                            alt="Image Description">
                                        </a>
                                        <a href="<?php echo e(asset('build/assets/img/gallery/7.jpg')); ?>" class="gallery">
                                            <img class="w-full object-cover rounded-sm" src="<?php echo e(asset('build/assets/img/gallery/7.jpg')); ?>"
                                            alt="Image Description">
                                        </a>
                                        <a href="<?php echo e(asset('build/assets/img/gallery/8.jpg')); ?>" class="gallery">
                                            <img class="w-full object-cover rounded-sm" src="<?php echo e(asset('build/assets/img/gallery/8.jpg')); ?>"
                                            alt="Image Description">
                                        </a>
                                        <a href="<?php echo e(asset('build/assets/img/gallery/9.jpg')); ?>" class="gallery">
                                            <img class="w-full object-cover rounded-sm" src="<?php echo e(asset('build/assets/img/gallery/9.jpg')); ?>"
                                            alt="Image Description">
                                        </a>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="box-footer text-center">
                                    <a href="javascript:void(0);" class="ti-btn ti-btn-primary py-1 px-2 m-0">View All</a>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <!-- End::row-1 -->

                        </div>
                        <!-- Start::main-content -->

                    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

        <!-- GLIGHTBOX JS -->
        <script src="<?php echo e(asset('build/assets/libs/glightbox/js/glightbox.min.js')); ?>"></script>

        <!-- CHOICES JS -->
        <script src="<?php echo e(asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')); ?>"></script>

        <!-- PROFILE JS -->
        <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/profile.js'); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\laravel\vite\synto\synto\resources\views/pages/profile.blade.php ENDPATH**/ ?>