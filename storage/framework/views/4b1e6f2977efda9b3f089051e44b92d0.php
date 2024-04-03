<?php $__env->startSection('styles'); ?>

        <!-- CHOICES CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('build/assets/libs/choices.js/public/assets/styles/choices.min.css')); ?>">

        <!-- FLATPICKR CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('build/assets/libs/flatpickr/flatpickr.min.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

                <div class="content">

                    <!-- Start::main-content -->
                    <div class="main-content">

                        <!-- Page Header -->
                        <div class="block justify-between page-header sm:flex">
                            <div>
                                <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Profile Settings</h3>
                            </div>
                            <ol class="flex items-center whitespace-nowrap min-w-0">
                                <li class="text-sm">
                                <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                    Pages
                                    <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                </a>
                                </li>
                                <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                    Profile Settings
                                </li>
                            </ol>
                        </div>
                        <!-- Page Header Close -->

                        <!-- Start::row-1 -->
                        <div class="grid grid-cols-12 gap-x-6">
                        <div class="col-span-12 xl:col-span-3">
                            <div class="box">
                            <div class="box-body relative">
                                <div class="flex relative before:bg-black/50 before:absolute before:w-full before:h-full before:rounded-sm">
                                <img src="<?php echo e(asset('build/assets/img/png-images/2.png')); ?>" alt="" class="h-[200px] w-full rounded-sm" id="profile-img2">
                                <span class="absolute top-5 ltr:right-5 rtl:left-5 flex p-2 rounded-sm ring-1 ring-black/10 text-white bg-black/10 leading-none">
                                    <i class="ri ri-pencil-line"></i>
                                    <input type="file" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" id="profile-change2">
                                </span>
                                </div>
                                <div class="absolute top-[4.5rem] inset-x-0 text-center space-y-3">
                                <div class="flex justify-center w-full">
                                    <div class="relative">
                                    <img src="<?php echo e(asset('build/assets/img/users/1.jpg')); ?>" class="w-24 h-24 rounded-full ring-4 ring-white/10 mx-auto" id="profile-img" alt="pofile-img">
                                    <span class="absolute bottom-0 ltr:right-0 rtl:left-0 block p-1 rounded-full ring-2 ring-white/10 text-white bg-white/10 dark:bg-bgdark leading-none">
                                        <i class="ri ri-pencil-line"></i>
                                        <input type="file" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" id="profile-change">
                                    </span>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="box-body pt-0">
                                <nav class="flex flex-col space-y-2" aria-label="Tabs" role="tablist" data-hs-tabs-vertical="true">
                                <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 active" id="profile-settings-item-1" data-hs-tab="#profile-settings-1" aria-controls="profile-settings-1" role="tab">
                                    <i class="ri ri-shield-user-line"></i> Personal Settings
                                </button>
                                <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300" id="profile-settings-item-2" data-hs-tab="#profile-settings-2" aria-controls="profile-settings-2" role="tab">
                                    <i class="ri ri-global-line"></i> General Settings
                                </button>
                                <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300" id="profile-settings-item-3" data-hs-tab="#profile-settings-3" aria-controls="profile-settings-3" role="tab">
                                    <i class="ri ri-lock-line"></i> Password Settings
                                </button>
                                <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300" id="profile-settings-item-4" data-hs-tab="#profile-settings-4" aria-controls="profile-settings-4" role="tab">
                                    <i class="ri ri-account-circle-line"></i> Account Settings
                                </button>
                                <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300" id="profile-settings-item-5" data-hs-tab="#profile-settings-5" aria-controls="profile-settings-5" role="tab">
                                    <i class="ri ri-notification-4-line"></i> Notifications Settings
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
                                    <h5 class="box-title leading-none flex"><i class="ri ri-shield-user-line ltr:mr-2 rtl:ml-2"></i> Personal Settings</h5>
                                    </div>
                                    <div class="box-body">
                                    <div>
                                        <div class="grid lg:grid-cols-2 gap-6">
                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">First Name</label>
                                                <input type="text" class="my-auto ti-form-input" placeholder="Firstname">
                                            </div>
                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Last Name</label>
                                                <input type="text" class="my-auto ti-form-input" placeholder="Lastname">
                                            </div>
                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Phone Number</label>
                                                <input type="number" class="my-auto ti-form-input" placeholder="+91 123-456-789">
                                            </div>
                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Email Address</label>
                                                <input type="email" class="my-auto ti-form-input" placeholder="your@site.com">
                                            </div>
                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Date Of Birth</label>
                                                <input type="text" class="ti-form-input flatpickr-input date" placeholder="Choose date" readonly>
                                            </div>
                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Gender</label>
                                                <ul class="flex flex-col sm:flex-row">
                                                    <li class="ti-list-group gap-x-2.5 bg-white border text-gray-800 ltr:sm:-ml-px rtl:sm:-mr-px sm:mt-0 ltr:sm:first:rounded-tr-none rtl:sm:first:rounded-tl-none ltr:sm:first:rounded-bl-sm rtl:sm:first:rounded-br-sm ltr:sm:last:rounded-bl-none rtl:sm:last:rounded-br-none ltr:sm:last:rounded-tr-sm rtl:sm:last:rounded-tl-sm dark:bg-bgdark dark:border-white/10 dark:text-white">
                                                    <div class="relative flex items-start w-full">
                                                        <div class="flex items-center h-5">
                                                        <input id="hs-horizontal-list-group-item-radio-1" name="hs-horizontal-list-group-item-radio" type="radio" class="ti-form-radio" checked>
                                                        </div>
                                                        <label for="hs-horizontal-list-group-item-radio-1" class="ltr:ml-3 rtl:mr-3 block w-full text-sm text-gray-600 dark:text-white/70">
                                                        Female
                                                        </label>
                                                    </div>
                                                    </li>

                                                    <li class="ti-list-group gap-x-2.5 bg-white border text-gray-800 ltr:sm:-ml-px rtl:sm:-mr-px sm:mt-0 ltr:sm:first:rounded-tr-none rtl:sm:first:rounded-tl-none ltr:sm:first:rounded-bl-sm rtl:sm:first:rounded-br-sm ltr:sm:last:rounded-bl-none rtl:sm:last:rounded-br-none ltr:sm:last:rounded-tr-sm rtl:sm:last:rounded-tl-sm dark:bg-bgdark dark:border-white/10 dark:text-white">
                                                    <div class="relative flex items-start w-full">
                                                        <div class="flex items-center h-5">
                                                        <input id="hs-horizontal-list-group-item-radio-2" name="hs-horizontal-list-group-item-radio" type="radio" class="ti-form-radio">
                                                        </div>
                                                        <label for="hs-horizontal-list-group-item-radio-2" class="ltr:ml-3 rtl:mr-3 block w-full text-sm text-gray-600 dark:text-white/70">
                                                        Male
                                                        </label>
                                                    </div>
                                                    </li>

                                                    <li class="ti-list-group gap-x-2.5 bg-white border text-gray-800 ltr:sm:-ml-px rtl:sm:-mr-px sm:mt-0 ltr:sm:first:rounded-tr-none rtl:sm:first:rounded-tl-none ltr:sm:first:rounded-bl-sm rtl:sm:first:rounded-br-sm ltr:sm:last:rounded-bl-none rtl:sm:last:rounded-br-none ltr:sm:last:rounded-tr-sm rtl:sm:last:rounded-tl-sm dark:bg-bgdark dark:border-white/10 dark:text-white">
                                                    <div class="relative flex items-start w-full">
                                                        <div class="flex items-center h-5">
                                                        <input id="hs-horizontal-list-group-item-radio-3" name="hs-horizontal-list-group-item-radio" type="radio" class="ti-form-radio">
                                                        </div>
                                                        <label for="hs-horizontal-list-group-item-radio-3" class="ltr:ml-3 rtl:mr-3 block w-full text-sm text-gray-600 dark:text-white/70">
                                                        Others
                                                        </label>
                                                    </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="my-5">
                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Address</label>
                                                <input type="text" class="my-auto ti-form-input" placeholder="Address">
                                            </div>
                                        </div>
                                        <div class="grid lg:grid-cols-2 gap-6">
                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">City</label>
                                                <input type="text" class="my-auto ti-form-input" placeholder="city">
                                            </div>
                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Country</label>
                                                <input type="text" class="my-auto ti-form-input" placeholder="state">
                                            </div>
                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">State</label>
                                                <input type="text" class="my-auto ti-form-input" placeholder="state">
                                            </div>
                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Pincode</label>
                                                <input type="number" class="my-auto ti-form-input" placeholder="pincode">
                                            </div>
                                        </div>
                                        <div class="mt-5">
                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Bio</label>
                                                <textarea class="ti-form-input" rows="3" placeholder="Add Your Bio"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div id="profile-settings-2" class="hidden" role="tabpanel" aria-labelledby="profile-settings-item-2">
                                <div class="box border-0 shadow-none mb-0">
                                    <div class="box-header">
                                    <h5 class="box-title leading-none flex"><i class="ri ri-global-line ltr:mr-2 rtl:ml-2"></i> General Settings</h5>
                                    </div>
                                    <div class="box-body">
                                    <h5 class="text-base font-semibold">User Details</h5>
                                    <div class="my-4">
                                        <div class="grid lg:grid-cols-2 gap-6 mb-6">
                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">User Id</label>
                                                <input type="text" class="my-auto ti-form-input" placeholder="User Id">
                                            </div>
                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Joining Date</label>
                                                <input type="text" class="ti-form-input flatpickr-input date" placeholder="Choose date" readonly>
                                            </div>
                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Language</label>
                                                <select class="ti-form-select" data-trigger>
                                                <option value="1" selected>US English</option>
                                                <option value="2">Arabic</option>
                                                <option value="3">Korean</option>
                                                <option value="4">Russia</option>
                                                </select>
                                            </div>
                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Time Zone</label>
                                                <select class="ti-form-select" data-trigger>
                                                <option value="Pacific/Midway">(GMT-11:00) Midway Island, Samoa</option>
                                                <option value="America/Adak">(GMT-10:00) Hawaii-Aleutian</option>
                                                <option value="Etc/GMT+10">(GMT-10:00) Hawaii</option>
                                                <option value="Pacific/Marquesas">(GMT-09:30) Marquesas Islands</option>
                                                <option value="Pacific/Gambier">(GMT-09:00) Gambier Islands</option>
                                                <option value="America/Anchorage">(GMT-09:00) Alaska</option>
                                                <option value="America/Ensenada">(GMT-08:00) Tijuana, Baja California</option>
                                                <option value="Etc/GMT+8">(GMT-08:00) Pitcairn Islands</option>
                                                <option value="America/Los_Angeles">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                                                <option value="America/Denver">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                                                <option value="America/Chihuahua">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
                                                <option value="America/Dawson_Creek">(GMT-07:00) Arizona</option>
                                                <option value="America/Belize">(GMT-06:00) Saskatchewan, Central America</option>
                                                <option value="America/Cancun">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
                                                <option value="Chile/EasterIsland">(GMT-06:00) Easter Island</option>
                                                <option value="America/Chicago">(GMT-06:00) Central Time (US &amp; Canada)</option>
                                                <option value="America/New_York">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                                                <option value="America/Havana">(GMT-05:00) Cuba</option>
                                                <option value="America/Bogota">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
                                                <option value="America/Caracas">(GMT-04:30) Caracas</option>
                                                <option value="America/Santiago">(GMT-04:00) Santiago</option>
                                                <option value="America/La_Paz">(GMT-04:00) La Paz</option>
                                                <option value="Atlantic/Stanley">(GMT-04:00) Faukland Islands</option>
                                                <option value="America/Campo_Grande">(GMT-04:00) Brazil</option>
                                                <option value="America/Goose_Bay">(GMT-04:00) Atlantic Time (Goose Bay)</option>
                                                <option value="America/Glace_Bay">(GMT-04:00) Atlantic Time (Canada)</option>
                                                <option value="America/St_Johns">(GMT-03:30) Newfoundland</option>
                                                <option value="America/Araguaina">(GMT-03:00) UTC-3</option>
                                                <option value="America/Montevideo">(GMT-03:00) Montevideo</option>
                                                <option value="America/Miquelon">(GMT-03:00) Miquelon, St. Pierre</option>
                                                <option value="America/Godthab">(GMT-03:00) Greenland</option>
                                                <option value="America/Argentina/Buenos_Aires">(GMT-03:00) Buenos Aires</option>
                                                <option value="America/Sao_Paulo">(GMT-03:00) Brasilia</option>
                                                <option value="America/Noronha">(GMT-02:00) Mid-Atlantic</option>
                                                <option value="Atlantic/Cape_Verde">(GMT-01:00) Cape Verde Is.</option>
                                                <option value="Atlantic/Azores">(GMT-01:00) Azores</option>
                                                <option value="Europe/Belfast">(GMT) Greenwich Mean Time : Belfast</option>
                                                <option value="Europe/Dublin">(GMT) Greenwich Mean Time : Dublin</option>
                                                <option value="Europe/Lisbon">(GMT) Greenwich Mean Time : Lisbon</option>
                                                <option value="Europe/London">(GMT) Greenwich Mean Time : London</option>
                                                <option value="Africa/Abidjan">(GMT) Monrovia, Reykjavik</option>
                                                <option value="Europe/Amsterdam">(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
                                                <option value="Europe/Belgrade">(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
                                                <option value="Europe/Brussels">(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
                                                <option value="Africa/Algiers">(GMT+01:00) West Central Africa</option>
                                                <option value="Africa/Windhoek">(GMT+01:00) Windhoek</option>
                                                <option value="Asia/Beirut">(GMT+02:00) Beirut</option>
                                                <option value="Africa/Cairo">(GMT+02:00) Cairo</option>
                                                <option value="Asia/Gaza">(GMT+02:00) Gaza</option>
                                                <option value="Africa/Blantyre">(GMT+02:00) Harare, Pretoria</option>
                                                <option value="Asia/Jerusalem">(GMT+02:00) Jerusalem</option>
                                                <option value="Europe/Minsk">(GMT+02:00) Minsk</option>
                                                <option value="Asia/Damascus">(GMT+02:00) Syria</option>
                                                <option value="Europe/Moscow">(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>
                                                <option value="Africa/Addis_Ababa">(GMT+03:00) Nairobi</option>
                                                <option value="Asia/Tehran">(GMT+03:30) Tehran</option>
                                                <option value="Asia/Dubai">(GMT+04:00) Abu Dhabi, Muscat</option>
                                                <option value="Asia/Yerevan">(GMT+04:00) Yerevan</option>
                                                <option value="Asia/Kabul">(GMT+04:30) Kabul</option>
                                                <option value="Asia/Yekaterinburg">(GMT+05:00) Ekaterinburg</option>
                                                <option value="Asia/Tashkent">(GMT+05:00) Tashkent</option>
                                                <option value="Asia/Kolkata">(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
                                                <option value="Asia/Katmandu">(GMT+05:45) Kathmandu</option>
                                                <option value="Asia/Dhaka">(GMT+06:00) Astana, Dhaka</option>
                                                <option value="Asia/Novosibirsk">(GMT+06:00) Novosibirsk</option>
                                                <option value="Asia/Rangoon">(GMT+06:30) Yangon (Rangoon)</option>
                                                <option value="Asia/Bangkok">(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
                                                <option value="Asia/Krasnoyarsk">(GMT+07:00) Krasnoyarsk</option>
                                                <option value="Asia/Hong_Kong">(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
                                                <option value="Asia/Irkutsk">(GMT+08:00) Irkutsk, Ulaan Bataar</option>
                                                <option value="Australia/Perth">(GMT+08:00) Perth</option>
                                                <option value="Australia/Eucla">(GMT+08:45) Eucla</option>
                                                <option value="Asia/Tokyo">(GMT+09:00) Osaka, Sapporo, Tokyo</option>
                                                <option value="Asia/Seoul">(GMT+09:00) Seoul</option>
                                                <option value="Asia/Yakutsk">(GMT+09:00) Yakutsk</option>
                                                <option value="Australia/Adelaide">(GMT+09:30) Adelaide</option>
                                                <option value="Australia/Darwin">(GMT+09:30) Darwin</option>
                                                <option value="Australia/Brisbane">(GMT+10:00) Brisbane</option>
                                                <option value="Australia/Hobart">(GMT+10:00) Hobart</option>
                                                <option value="Asia/Vladivostok">(GMT+10:00) Vladivostok</option>
                                                <option value="Australia/Lord_Howe">(GMT+10:30) Lord Howe Island</option>
                                                <option value="Etc/GMT-11">(GMT+11:00) Solomon Is., New Caledonia</option>
                                                <option value="Asia/Magadan">(GMT+11:00) Magadan</option>
                                                <option value="Pacific/Norfolk">(GMT+11:30) Norfolk Island</option>
                                                <option value="Asia/Anadyr">(GMT+12:00) Anadyr, Kamchatka</option>
                                                <option value="Pacific/Auckland">(GMT+12:00) Auckland, Wellington</option>
                                                <option value="Etc/GMT-12">(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
                                                <option value="Pacific/Chatham">(GMT+12:45) Chatham Islands</option>
                                                <option value="Pacific/Tongatapu">(GMT+13:00) Nuku'alofa</option>
                                                <option value="Pacific/Kiritimati">(GMT+14:00) Kiritimati</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="space-y-2" id="skills">
                                        <label class="ti-form-label">Skills</label>
                                        <input class="ti-form-input skills" type="text"
                                            value="Laravel ,Angular ,Html ,React ,Bootstrap"
                                            placeholder="This is a placeholder">
                                        </div>
                                    </div>
                                    <h5 class="text-base font-semibold">Education Details</h5>
                                    <div class="my-4">
                                        <div class="grid lg:grid-cols-3 gap-6">
                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Schooling</label>
                                                <input type="text" class="my-auto ti-form-input" placeholder="Schooling">
                                            </div>
                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Joining Date</label>
                                                <input type="text" class="ti-form-input flatpickr-input date" placeholder="Choose date" readonly>
                                            </div>
                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Completed Date</label>
                                                <input type="text" class="ti-form-input flatpickr-input date" placeholder="Choose date" readonly>
                                            </div>
                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Graduation</label>
                                                <input type="text" class="my-auto ti-form-input" placeholder="Graduation">
                                            </div>
                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Joining Date</label>
                                                <input type="text" class="ti-form-input flatpickr-input date" placeholder="Choose date" readonly>
                                            </div>
                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Completed Date</label>
                                                <input type="text" class="ti-form-input flatpickr-input date" placeholder="Choose date" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="text-base font-semibold">Work  Experience</h5>
                                    <div class="my-4">
                                        <div class="grid lg:grid-cols-4 gap-6">
                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Work 1 :</label>
                                                <input type="text" class="my-auto ti-form-input" placeholder="company Name">
                                            </div>
                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Designation</label>
                                                <input type="text" class="my-auto ti-form-input" placeholder="Designation">
                                            </div>
                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Joining Date</label>
                                                <input type="text" class="ti-form-input flatpickr-input date" placeholder="Choose date" readonly>
                                            </div>
                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Completed Date</label>
                                                <input type="text" class="ti-form-input flatpickr-input date" placeholder="Choose date" readonly>
                                            </div>
                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Work 2 :</label>
                                                <input type="text" class="my-auto ti-form-input" placeholder="company Name">
                                            </div>
                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Designation</label>
                                                <input type="text" class="my-auto ti-form-input" placeholder="Designation">
                                            </div>
                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Joining Date</label>
                                                <input type="text" class="ti-form-input flatpickr-input date" placeholder="Choose date" readonly>
                                            </div>
                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Completed Date</label>
                                                <input type="text" class="ti-form-input flatpickr-input date" placeholder="Choose date" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div id="profile-settings-3" class="hidden" role="tabpanel" aria-labelledby="profile-settings-item-3">
                                <div class="box border-0 shadow-none mb-0">
                                    <div class="box-header">
                                    <h5 class="box-title leading-none flex"><i class="ri ri-lock-line ltr:mr-2 rtl:ml-2"></i> Password Settings</h5>
                                    </div>
                                    <div class="box-body p-0">
                                    <div class="grid grid-cols-12">
                                        <div class="col-span-12 xl:col-span-6 xl:ltr:border-r xl:rtl:border-l xl:border-b-0 border-b p-6 border-gray-200 dark:border-white/10">
                                            <div class="space-y-4">
                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Email Id<sup class="text-danger">*</sup></label>
                                                <input type="email" class="my-auto ti-form-input" placeholder="Email Id" required>
                                            </div>
                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Current Password<sup class="text-danger">*</sup></label>
                                                <input type="password" class="my-auto ti-form-input" autocomplete="off" placeholder="Current Password" required>
                                            </div>
                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">New Password<sup class="text-danger">*</sup></label>
                                                <input type="password" class="my-auto ti-form-input" autocomplete="off" placeholder="New Password" required>
                                            </div>
                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Confirm Password<sup class="text-danger">*</sup></label>
                                                <input type="password" class="my-auto ti-form-input" autocomplete="off" placeholder="Confirm Password" required>
                                            </div>
                                            <p class="text-xs text-gray-500 dark:text-white/70">Password should be min of <b class="text-success">10 characters <sup>*</sup> </b> (and up to 100 characters),<b class="text-success">One Upper Case Character<sup>*</sup></b> and <b class="text-success">One Special Character<sup>*</sup></b>   e.g., ! @ # ? included.</p>
                                            </div>
                                        </div>
                                        <div class="col-span-12 xl:col-span-6">
                                            <div class="box border-0 shadow-none">
                                            <div class="box-header">
                                                <div class="sm:flex space-y-4">
                                                <h5 class="box-title my-auto">Web Linked Devices</h5>
                                                <button type="button" class="py-1 px-3 ti-btn ti-btn-primary text-sm m-0">Log out From All Devices </button>
                                                </div>
                                            </div>
                                            <div class="box-body">
                                                <ul class="flex flex-col">
                                                    <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white">
                                                        <div class="sm:flex w-full space-y-2">
                                                        <div class="flex space-x-3 rtl:space-x-reverse">
                                                            <div class="avatar rounded-sm avatar-sm bg-gray-100 dark:bg-black/20 p-2.5">
                                                            <i class="ri ri-smartphone-line text-xl leading-none text-gray-500 dark:text-white/70"></i>
                                                            </div>
                                                            <div class="">
                                                            <p class="mb-0 text-sm">Mobile-Poco-M2-Pro</p>
                                                            <p class="mb-0 text-gray-500 dark:text-white/70 text-xs">Manchester, UK-Nov 30, 04:45PM</p>
                                                            </div>
                                                        </div>
                                                        <div class="ltr:ml-auto rtl:mr-auto my-auto text-end">
                                                            <button type="button" class="px-2 py-1 ti-btn ti-btn-soft-info text-xs">ReWoke</button>
                                                            <button type="button" class="px-2 py-1 ti-btn ti-btn-soft-danger text-xs">Logout</button>
                                                        </div>
                                                        </div>
                                                    </li>
                                                    <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white">
                                                        <div class="sm:flex w-full space-y-2">
                                                        <div class="flex space-x-3 rtl:space-x-reverse">
                                                            <div class="avatar rounded-sm avatar-sm bg-gray-100 dark:bg-black/20 p-2.5">
                                                            <i class="ri ri-tablet-line text-xl leading-none text-gray-500 dark:text-white/70"></i>
                                                            </div>
                                                            <div class="">
                                                            <p class="mb-0 text-sm">Apple Tablet</p>
                                                            <p class="mb-0 text-gray-500 dark:text-white/70 text-xs">Manchester, UK-Nov 30, 02:45PM</p>
                                                            </div>
                                                        </div>
                                                        <div class="ltr:ml-auto rtl:mr-auto my-auto text-end">
                                                            <button type="button" class="px-2 py-1 ti-btn ti-btn-soft-info text-xs">ReWoke</button>
                                                            <button type="button" class="px-2 py-1 ti-btn ti-btn-soft-danger text-xs">Logout</button>
                                                        </div>
                                                        </div>
                                                    </li>
                                                    <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white">
                                                        <div class="sm:flex w-full space-y-2">
                                                        <div class="flex space-x-3 rtl:space-x-reverse">
                                                            <div class="avatar rounded-sm avatar-sm bg-gray-100 dark:bg-black/20 p-2.5">
                                                            <i class="ri ri-airplay-line text-xl leading-none text-gray-500 dark:text-white/70"></i>
                                                            </div>
                                                            <div class="">
                                                            <p class="mb-0 text-sm">Dell Desktop</p>
                                                            <p class="mb-0 text-gray-500 dark:text-white/70 text-xs">Manchester, UK-Nov 30, 02:45PM</p>
                                                            </div>
                                                        </div>
                                                        <div class="ltr:ml-auto rtl:mr-auto my-auto text-end">
                                                            <button type="button" class="px-2 py-1 ti-btn ti-btn-soft-info text-xs">ReWoke</button>
                                                            <button type="button" class="px-2 py-1 ti-btn ti-btn-soft-danger text-xs">Logout</button>
                                                        </div>
                                                        </div>
                                                    </li>
                                                    <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white">
                                                        <div class="sm:flex w-full space-y-2">
                                                        <div class="flex space-x-3 rtl:space-x-reverse">
                                                            <div class="avatar rounded-sm avatar-sm bg-gray-100 dark:bg-black/20 p-2.5">
                                                            <i class="ri ri-macbook-line text-xl leading-none text-gray-500 dark:text-white/70"></i>
                                                            </div>
                                                            <div class="">
                                                            <p class="mb-0 text-sm">Lenovo Laptop</p>
                                                            <p class="mb-0 text-gray-500 dark:text-white/70 text-xs">Manchester, UK-Nov 30, 02:45PM</p>
                                                            </div>
                                                        </div>
                                                        <div class="ltr:ml-auto rtl:mr-auto my-auto text-end">
                                                            <button type="button" class="px-2 py-1 ti-btn ti-btn-soft-info text-xs">ReWoke</button>
                                                            <button type="button" class="px-2 py-1 ti-btn ti-btn-soft-danger text-xs">Logout</button>
                                                        </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            </div>
                                            <div class="my-5 px-6">
                                            <div class="sm:space-x-6 rtl:space-x-reverse sm:flex space-y-4">
                                                <label class="ti-form-label my-auto">Account :</label>
                                                <button type="button" class="ti-btn ti-btn-danger">
                                                    Deactivate Account
                                                </button>
                                                <button type="button" class="ti-btn-disabled ti-btn ti-btn-success">
                                                    Activate Account
                                                </button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div id="profile-settings-4" class="hidden" role="tabpanel" aria-labelledby="profile-settings-item-4">
                                <div class="box border-0 shadow-none mb-0">
                                    <div class="box-header">
                                    <h5 class="box-title leading-none flex"><i class="ri ri-account-circle-line ltr:mr-2 rtl:ml-2"></i> Account Settings</h5>
                                    </div>
                                    <div class="box-body">
                                    <div class="sm:grid grid-cols-12 gap-6 space-y-6">
                                        <div class="col-span-2 my-auto">
                                        <label class="ti-form-label mb-0">Verfication Step - 2
                                            <a aria-label="anchor" class="ltr:ml-2 rtl:mr-2" href="javascript:void(0);">
                                            <i class="ri ri-question-line"></i>
                                            </a>
                                        </label>
                                        </div>
                                        <div class="col-span-10">
                                        <div class="flex items-center">
                                            <input type="checkbox" class="ti-switch shrink-0 w-11 h-6 before:w-5 before:h-5 m-0">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="my-5">
                                        <nav class="flex space-x-2 rtl:space-x-reverse mb-4" aria-label="Tabs" role="tablist">
                                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:text-white py-2 px-4 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 active" id="adhar-tab" data-hs-tab="#adhar" aria-controls="adhar" role="tab">
                                            Adhar Number
                                        </button>
                                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:text-white py-2 px-4 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300" id="mobile-tab" data-hs-tab="#mobile" aria-controls="mobile" role="tab">
                                            mobile Number
                                        </button>
                                        </nav>
                                        <div>
                                        <div id="adhar" role="tabpanel" aria-labelledby="adhar-tab">
                                            <input type="text" class="ti-form-input" placeholder="name" value="5353 2525 2525">
                                        </div>
                                        <div id="mobile" class="hidden" role="tabpanel" aria-labelledby="mobile-tab">
                                            <input type="number" class="ti-form-input" placeholder="name" value="9699696996">
                                        </div>
                                        </div>
                                    </div>
                                    <h5 class="text-base font-semibold ">Social Accounts</h5>
                                    <div class="space-y-3 mt-5">
                                        <div class="sm:grid grid-cols-12 gap-6 space-y-4">
                                        <div class="col-span-2 my-auto">
                                            <label class="ti-form-label">Facebook</label>
                                        </div>
                                        <div class="col-span-10">
                                            <input type="email" class="ti-form-input" value="https://www.facebook.com/Spruha">
                                        </div>
                                        </div>
                                        <div class="sm:grid grid-cols-12 gap-6 space-y-4">
                                        <div class="col-span-2 my-auto">
                                            <label class="ti-form-label">Twitter</label>
                                        </div>
                                        <div class="col-span-10">
                                            <input type="email" class="ti-form-input" value="twitter.com/spruko.me">
                                        </div>
                                        </div>
                                        <div class="sm:grid grid-cols-12 gap-6 space-y-4">
                                        <div class="col-span-2 my-auto">
                                            <label class="ti-form-label">Google+</label>
                                        </div>
                                        <div class="col-span-10">
                                            <input type="email" class="ti-form-input" value="spruko.com">
                                        </div>
                                        </div>
                                        <div class="sm:grid grid-cols-12 gap-6 space-y-4">
                                        <div class="col-span-2 my-auto">
                                            <label class="ti-form-label">Linked in</label>
                                        </div>
                                        <div class="col-span-10">
                                            <input type="email" class="ti-form-input" value="linkedin.com/in/spruko">
                                        </div>
                                        </div>
                                        <div class="sm:grid grid-cols-12 gap-6 space-y-4">
                                        <div class="col-span-2 my-auto">
                                            <label class="ti-form-label">Github</label>
                                        </div>
                                        <div class="col-span-10">
                                            <input type="email" class="ti-form-input" value="github.com/spruko">
                                        </div>
                                        </div>
                                        <div class="sm:grid grid-cols-12 gap-6 space-y-4">
                                        <div class="col-span-2 my-auto">
                                            <label class="ti-form-label">Website</label>
                                        </div>
                                        <div class="col-span-10">
                                            <input type="email" class="ti-form-input" value="www.andersonitumay.com">
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div id="profile-settings-5" class="hidden" role="tabpanel" aria-labelledby="profile-settings-item-5">
                                <div class="box border-0 shadow-none mb-0">
                                    <div class="box-header">
                                    <h5 class="box-title leading-none flex"><i class="ri ri-notification-4-line ltr:mr-2 rtl:ml-2"></i> Notifications Settings</h5>
                                    </div>
                                    <div class="box-body">
                                    <div class="space-y-4">
                                        <div class="p-4 border border-gray-200 dark:border-white/10 rounded-sm">
                                        <div class="md:grid grid-cols-12 gap-6 space-y-4">
                                            <div class="col-span-12 md:col-span-6 my-auto">
                                            <p class="text-base mb-1 font-semibold">Comments</p>
                                            <p class="text-xs mb-0 text-gray-500 dark:text-white/70">The Comment Notifications are the notifications you get for your posts and replies for your comments.</p>
                                            </div>
                                            <div class="col-span-12 md:col-span-6">
                                            <div class="space-y-2">
                                                <div class="sm:grid grid-cols-12 gap-6 space-y-4 md:text-end">
                                                <div class="col-span-9 my-auto">
                                                    <label class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Notify Me</label>
                                                </div>
                                                <div class="col-span-3 my-auto">
                                                    <input type="checkbox" class="ti-switch shrink-0 w-11 h-6 before:w-5 before:h-5" checked>
                                                </div>
                                                </div>
                                                <div class="sm:grid grid-cols-12 gap-6 space-y-4 md:text-end">
                                                <div class="col-span-9 my-auto">
                                                    <label class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Notify Me If Mentioned</label>
                                                </div>
                                                <div class="col-span-3 my-auto">
                                                    <input type="checkbox" class="ti-switch shrink-0 w-11 h-6 before:w-5 before:h-5">
                                                </div>
                                                </div>
                                                <div class="sm:grid grid-cols-12 gap-6 space-y-4 md:text-end">
                                                <div class="col-span-9 my-auto">
                                                    <label class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Notify For My Posts</label>
                                                </div>
                                                <div class="col-span-3 my-auto">
                                                    <input type="checkbox" class="ti-switch shrink-0 w-11 h-6 before:w-5 before:h-5" checked>
                                                </div>
                                                </div>
                                                <div class="sm:grid grid-cols-12 gap-6 space-y-4 md:text-end">
                                                <div class="col-span-9 my-auto">
                                                    <label class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">All Comments</label>
                                                </div>
                                                <div class="col-span-3 my-auto">
                                                    <input type="checkbox" class="ti-switch shrink-0 w-11 h-6 before:w-5 before:h-5">
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="p-4 border border-gray-200 dark:border-white/10 rounded-sm">
                                        <div class="md:grid grid-cols-12 gap-6 space-y-4">
                                            <div class="col-span-12 md:col-span-6 my-auto">
                                            <p class="text-base mb-1 font-semibold">Tags</p>
                                            <p class="text-xs mb-0 text-gray-500 dark:text-white/70">The Tag Notifications are the notifications you get when you are tagged for others posts.</p>
                                            </div>
                                            <div class="col-span-12 md:col-span-6">

                                            <div class="space-y-2">
                                                <div class="sm:grid grid-cols-12 gap-6 space-y-4 md:text-end">
                                                <div class="col-span-9 my-auto">
                                                    <label class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Notify Me</label>
                                                </div>
                                                <div class="col-span-3 my-auto">
                                                    <input type="checkbox" class="ti-switch shrink-0 w-11 h-6 before:w-5 before:h-5" checked>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="p-4 border border-gray-200 dark:border-white/10 rounded-sm">
                                        <div class="md:grid grid-cols-12 gap-6 space-y-4">
                                            <div class="col-span-12 md:col-span-6 my-auto">
                                            <p class="text-base mb-1 font-semibold">Reminders</p>
                                            <p class="text-xs mb-0 text-gray-500 dark:text-white/70">The Reminder Notifications are the notifications you get when you missed any update .</p>
                                            </div>
                                            <div class="col-span-12 md:col-span-6">
                                            <div class="space-y-2">
                                                <div class="sm:grid grid-cols-12 gap-6 space-y-4 md:text-end">
                                                <div class="col-span-9 my-auto">
                                                    <label class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Remind Me</label>
                                                </div>
                                                <div class="col-span-3 my-auto">
                                                    <input type="checkbox" class="ti-switch shrink-0 w-11 h-6 before:w-5 before:h-5" checked>
                                                </div>
                                                </div>
                                                <div class="sm:grid grid-cols-12 gap-6 space-y-4 md:text-end">
                                                <div class="col-span-9 my-auto">
                                                    <label class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Remind Me only Important Updates</label>
                                                </div>
                                                <div class="col-span-3 my-auto">
                                                    <input type="checkbox" class="ti-switch shrink-0 w-11 h-6 before:w-5 before:h-5" checked>
                                                </div>
                                                </div>
                                                <div class="sm:grid grid-cols-12 gap-6 space-y-4 md:text-end">
                                                <div class="col-span-9 my-auto">
                                                    <label class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Remind Me All updates</label>
                                                </div>
                                                <div class="col-span-3 my-auto">
                                                    <input type="checkbox" class="ti-switch shrink-0 w-11 h-6 before:w-5 before:h-5">
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="p-4 border border-gray-200 dark:border-white/10 rounded-sm">
                                        <div class="md:grid grid-cols-12 gap-6 space-y-4">
                                            <div class="col-span-12 md:col-span-6 my-auto">
                                            <p class="text-base mb-1 font-semibold">More Activity</p>
                                            <p class="text-xs mb-0 text-gray-500 dark:text-white/70">The Notifications is for likes ,comments,reactions for your profile  .</p>
                                            </div>
                                            <div class="col-span-12 md:col-span-6">
                                            <div class="space-y-2">
                                                <div class="sm:grid grid-cols-12 gap-6 space-y-4 md:text-end">
                                                <div class="col-span-9 my-auto">
                                                    <label class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Notify Me</label>
                                                </div>
                                                <div class="col-span-3 my-auto">
                                                    <input type="checkbox" class="ti-switch shrink-0 w-11 h-6 before:w-5 before:h-5">
                                                </div>
                                                </div>
                                                <div class="sm:grid grid-cols-12 gap-6 space-y-4 md:text-end">
                                                <div class="col-span-9 my-auto">
                                                    <label class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Notify Me only Important</label>
                                                </div>
                                                <div class="col-span-3 my-auto">
                                                    <input type="checkbox" class="ti-switch shrink-0 w-11 h-6 before:w-5 before:h-5">
                                                </div>
                                                </div>
                                                <div class="sm:grid grid-cols-12 gap-6 space-y-4 md:text-end">
                                                <div class="col-span-9 my-auto">
                                                    <label class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Notify Me All</label>
                                                </div>
                                                <div class="col-span-3 my-auto">
                                                    <input type="checkbox" class="ti-switch shrink-0 w-11 h-6 before:w-5 before:h-5" checked>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="box-footer text-end space-x-3 rtl:space-x-reverse">
                                <a href="javascript:void(0);" class="ti-btn m-0 ti-btn-soft-primary"><i class="ri ri-refresh-line"></i> Update</a>
                                <a href="javascript:void(0);" class="ti-btn m-0 ti-btn-soft-secondary"><i class="ri ri-close-circle-line"></i> Cancel</a>
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

        <!-- FLATPICKR JS -->
        <script src="<?php echo e(asset('build/assets/libs/flatpickr/flatpickr.min.js')); ?>"></script>

        <!-- CHOICES JS -->
        <script src="<?php echo e(asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')); ?>"></script>

        <!-- FORM-LAYOUT JS -->
        <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/profile-settings.js'); ?>
        

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\laravel\vite\synto\synto\resources\views/pages/profile-settings.blade.php ENDPATH**/ ?>