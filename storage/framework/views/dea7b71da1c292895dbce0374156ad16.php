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
                                    
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium">Welcome<span class="text-primary"> <?php echo e($staff->fname.' '.$staff->mname.' '.$staff->lname); ?></span></h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                        <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                            Research Activities
                                            <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                        </a>
                                    </li>

                                </ol>
                            </div>
                        <!-- Page Header Close -->

                        <div class="grid grid-cols-12 gap-x-6">
                            <div class="col-span-6">
                                 <!-- For Checking whether status is set or no-->
                                 <?php if(session('return_data')): ?>
                                    <?php if(Session::get('return_data')['status'] == 1): ?>
                                        <div class='bg-white dark:bg-bgdark border border-success alert text-success' role='alert'>
                                            <span class='font-bold'>Result: </span> Database transaction Successful
                                        </div>
                                    <?php elseif(Session::get('return_data')['status'] == 0 && Session::get('return_data')['file_size_status'] == 0): ?>
                                        <?php if(Session::get('return_data')['status'] == 0): ?>
                                            <div class='bg-white dark:bg-bgdark border border-danger alert text-danger' role='alert'>
                                                <span class='font-bold'>Result : </span> Something went Wrong !
                                            </div>
                                        <?php endif; ?>
                                        <?php if(Session::get('return_data')['file_size_status'] == 0): ?>
                                            <div class='bg-white dark:bg-bgdark border border-danger alert text-danger' role='alert'>
                                                <span class='font-bold'>Result : </span> File size is more than 500KB. Please consider re-uploading
                                            </div>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                    <?php
                                        Illuminate\Support\Facades\Session::forget('return_data');
                                        header("refresh: 2");
                                    ?>
                                <?php endif; ?>

                            </div>
                        </div>
                        <!-- Start::row-1 -->
                        <div class="col-span-12 xl:col-span-9">
                            <div class="box">
                                <div class="box-body pt-0">
                                    <div class="mt-3">
                                        <!-- Conferences tab content-->
                                        <div class="box border-0 shadow-none mb-0">
                                            <div class="box-body">
                                                <div class="box-header">
                                                    <h5 class="box-title leading-none flex"><i class="ri ri-global-line ltr:mr-2 rtl:ml-2"></i> Conference Attended Details

                                                    </h5>
                                                    <div class="avatar-container flex py-4">
                                                        <div class="avatar-wrapper flex items-center">
                                                            <div class="avatar rounded-sm p-1 bg-green-500 border-gray-900 border-2 w-6 h-6"></div>
                                                            <div class="avatar-text font-bold ml-2 ">Valid</div>
                                                        </div>

                                                        <div class="avatar-wrapper flex items-center mx-2">
                                                            <div class="avatar rounded-sm p-1 bg-red-500 border-gray-900 border-2 w-6 h-6"></div>
                                                            <div class="avatar-text font-bold ml-2">Invalid</div>
                                                        </div>

                                                        <div class="avatar-wrapper flex items-center mx-2">
                                                            <div class="avatar rounded-sm p-1 bg-yellow-400 border-gray-900 border-2 w-6 h-6"></div>
                                                            <div class="avatar-text font-bold ml-2">Updated</div>
                                                        </div>

                                                        <div class="avatar-wrapper flex items-center">
                                                            <div class="avatar rounded-sm p-1 border-gray-900 border-2 w-6 h-6"></div>
                                                            <div class="avatar-text font-semibold ml-2">New</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button id="conference_attended_btn" data-hs-overlay="#add_conference_activity_attended" class="hs-dropdown-toggle ti-btn ti-btn-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M17 19H19V11H13V19H15V13H17V19ZM3 19V4C3 3.44772 3.44772 3 4 3H18C18.5523 3 19 3.44772 19 4V9H21V19H22V21H2V19H3ZM7 11V13H9V11H7ZM7 15V17H9V15H7ZM7 7V9H9V7H7Z" fill="rgba(255,255,255,1)"></path></svg>
                                                    Add Conference Attended
                                                </button>
                                                <div id="add_conference_activity_attended" class="hs-overlay hidden ti-modal">
                                                    <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                        <div class="ti-modal-content">
                                                            <div class="ti-modal-header">
                                                                <h3 class="ti-modal-title">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                    Add New Conference Attended details<span class="text-red-400">
                                                                </h3>
                                                                <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                    data-hs-overlay="#add_conference_activity_attended">
                                                                    <span class="sr-only">Close</span>
                                                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                        d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                        fill="currentColor" />
                                                                    </svg>
                                                                </button>
                                                                <?php if(($errors->has('conference_name'))||($errors->has('attended_as'))||($errors->has('from_date'))||($errors->has('to_date'))||($errors->has('no_of_days'))||($errors->has('title'))||($errors->has('place'))||($errors->has('sponsored'))||($errors->has('sponsored_by'))||($errors->has('amount'))||($errors->has('weblink'))||($errors->has('type_of_level'))||($errors->has('ISSN_NO'))): ?>
                                                                    <script>
                                                                        // alert(100);
                                                                        $(window).on('load', function() {
                                                                            $('#pills-with-brand-color-1').trigger('click')
                                                                            $('#conference_attended_btn').trigger("click");
                                                                        });
                                                                    </script>
                                                                <?php endif; ?>
                                                            </div>
                                                            <form action="<?php echo e(route('Teaching.research.conferenceactivities.attended.store')); ?>" method="post" enctype="multipart/form-data">
                                                                <?php echo csrf_field(); ?>
                                                                <div class="ti-modal-body">
                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                            <label for="with-corner-hint" class="ti-form-label font-bold"> Conference Name:<span class="text-red-500">*</span></label>
                                                                            <input type="text" name="conference_name" class="ti-form-input" placeholder=" Conference Name" id="con_att_conference_name" value="<?php echo e(old('conference_name')); ?>">
                                                                            <?php if($errors->has('conference_name')): ?>
                                                                                <div class="text-red-700"><?php echo e($errors->first('conference_name')); ?></div>
                                                                            <?php endif; ?>
                                                                            <div id="con_att_conferenceNameError" class="error text-red-700"></div>
                                                                        </div>
                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                            <label for="" class="ti-form-label font-bold">Attended As: <span class="text-red-500">*</span></label>
                                                                            <select class="ti-form-input" name="attended_as" id="con_att_attended_as">
                                                                                <option value="#">Choose an option</option>
                                                                                <option value="Resource Person" <?php echo e(old('attended_as') == 'Resource Person' ? 'selected' : ''); ?>>Resource Person</option>
                                                                                <option value="Paper Presenter" <?php echo e(old('attended_as') == 'Paper Presenter' ? 'selected' : ''); ?>>Paper Presenter</option>
                                                                                <option value="Participant" <?php echo e(old('attended_as') == 'Participant' ? 'selected' : ''); ?>>Participant</option>
                                                                                <option value="Session Chair" <?php echo e(old('attended_as') == 'Session Chair' ? 'selected' : ''); ?>>Session Chair</option>
                                                                            </select>
                                                                            <?php if($errors->has('attended_as')): ?>
                                                                                <div class="text-red-700"><?php echo e($errors->first('attended_as')); ?></div>
                                                                            <?php endif; ?>
                                                                            <div id="con_att_attendedasError" class="error text-red-700"></div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                        <div class="flex max-w-sm space-y-3 pb-6">
                                                                            <label for="" class="ti-form-label font-bold">From Date: <span class="text-red-500">*</span></label>
                                                                            <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                class="ri ri-calendar-line"></i></span>
                                                                            </div>
                                                                            <input type="date" name="from_date" id="con_att_from_date"
                                                                                class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date conf_attended_from_date"
                                                                                placeholder="Choose date" value="<?php echo e(old('from_date')); ?>">
                                                                            <?php if($errors->has('from_date')): ?>
                                                                                <div class="text-red-700"><?php echo e($errors->first('from_date')); ?></div>
                                                                            <?php endif; ?>
                                                                            <div id="con_att_fromdateError" class="error text-red-700"></div>
                                                                        </div>
                                                                        <div class="flex max-w-sm space-y-3 pb-6">
                                                                            <label for="" class="ti-form-label font-bold">To Date: <span class="text-red-500">*</span></label>
                                                                            <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                    class="ri ri-calendar-line"></i></span>
                                                                            </div>
                                                                            <input type="date" name="to_date" id="con_att_to_date"
                                                                                    class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date conf_attended_to_date"
                                                                                        placeholder="Choose date" value="<?php echo e(old('to_date')); ?>">
                                                                            <?php if($errors->has('to_date')): ?>
                                                                                <div class="text-red-700"><?php echo e($errors->first('to_date')); ?></div>
                                                                            <?php endif; ?>
                                                                            <div id="con_att_todateError" class="error text-red-700"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                            <label for="" class="ti-form-label font-bold">No Of Days: <span class="text-red-500">*</span></label>
                                                                            <input type="text" name="no_of_days" id="con_att_no_ofdays" class="ti-form-input conf_attended_no_of_days" placeholder="No Of Days" value="<?php echo e(old('no_of_days')); ?>" readonly>
                                                                            <div id="con_att_noofdaysError" class="error text-red-700"></div>
                                                                        </div>
                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                            <label for="" class="ti-form-label font-bold">Title: <span class="text-red-500">*</span></label>
                                                                            <input type="text" name="title" class="ti-form-input" placeholder="Paper Title" id="con_att_title" value="<?php echo e(old('title')); ?>">
                                                                            <?php if($errors->has('title')): ?>
                                                                                <div class="text-red-700"><?php echo e($errors->first('title')); ?></div>
                                                                            <?php endif; ?>
                                                                            <div id="con_att_titleError" class="error text-red-700"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                            <label for="" class="ti-form-label font-bold">Place: <span class="text-red-500">*</span></label>
                                                                            <input type="text" name="place" class="ti-form-input" placeholder="Place" id="con_att_place" value="<?php echo e(old('place')); ?>">
                                                                            <?php if($errors->has('place')): ?>
                                                                                <div class="text-red-700"><?php echo e($errors->first('place')); ?></div>
                                                                            <?php endif; ?>
                                                                            <div id="con_att_palceError" class="error text-red-700"></div>
                                                                        </div>
                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                            <label for="" class="ti-form-label font-bold">Sponsored: <span class="text-red-500">*</span></label>
                                                                            <select class="ti-form-select sponsor_type_attended sponsored" name="sponsored" id="con_att_sponsored">
                                                                                <option value="#">Choose One</option>
                                                                                <option value="Yes" <?php echo e(old('sponsored') == 'Yes' ? 'selected' : ''); ?>>Yes</option>
                                                                                <option value="No" <?php echo e(old('sponsored') == 'No' ? 'selected' : ''); ?>>No</option>
                                                                            </select>
                                                                            <?php if($errors->has('sponsored')): ?>
                                                                                <div class="text-red-700"><?php echo e($errors->first('sponsored')); ?></div>
                                                                            <?php endif; ?>
                                                                            <div id="con_att_sponsoredError" class="error text-red-700"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                        <div class="max-w-sm space-y-3 pb-6 sponsored_by">
                                                                            <label for="" class="ti-form-label font-bold">Sponsored By:</label>
                                                                            <select class="ti-form-select sponsoredBy" name="sponsored_by" id="con_att_sponsoredby">
                                                                                <option value="#">Choose One</option>
                                                                                <option value="KLS GIT" <?php echo e(old('sponsored_by') == 'KLS GIT' ? 'selected' : ''); ?>>KLS GIT</option>
                                                                                <option value="Other" <?php echo e(old('sponsored_by') == 'Other' ? 'selected' : ''); ?>>Other</option>
                                                                            </select>
                                                                            <?php if($errors->has('sponsored_by')): ?>
                                                                                <div class="text-red-700"><?php echo e($errors->first('sponsored_by')); ?></div>
                                                                            <?php endif; ?>
                                                                            <div id="con_att_sponsoredbyError" class="error text-red-700"></div>
                                                                        </div>
                                                                        <div class="max-w-sm space-y-3 pb-6 otherSponsor" id="otherSponsor">
                                                                            <label for="" class="ti-form-label font-bold">Other Sponsor:</label>
                                                                            <input type="text" name="other_sponsored" class="ti-form-input" placeholder="Other Sponsor" id="con_att_other_sponsored"  value="<?php echo e(old('other_sponsored')); ?>">
                                                                            <?php if($errors->has('other_sponsored')): ?>
                                                                                <div class="text-red-700"><?php echo e($errors->first('other_sponsored')); ?></div>
                                                                            <?php endif; ?>
                                                                            <div id="con_att_othersponsoredError" class="error text-red-700"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                        <div class="max-w-sm space-y-3 pb-6 amount">
                                                                            <label for="" class="ti-form-label font-bold">Amount :</label>
                                                                            <input type="number" min="0" step="1" name="amount" class="ti-form-input" placeholder="Amount" id="con_att_amount" value="<?php echo e(old('amount')); ?>">
                                                                            <?php if($errors->has('amount')): ?>
                                                                                <div class="text-red-700"><?php echo e($errors->first('amount')); ?></div>
                                                                            <?php endif; ?>
                                                                            <div id="con_att_amountError" class="error text-red-700"></div>
                                                                        </div>
                                                                        <div class="max-w-sm space-y-6 pb-6">
                                                                            <label for="" class="ti-form-label font-bold">Weblink:</label>
                                                                            <input type="url" name="weblink" id="cont_att_weblink" class="ti-form-input" placeholder=" https://www." value="<?php echo e(old('weblink')); ?>">
                                                                            <?php if($errors->has('weblink')): ?>
                                                                                <div class="text-red-700"><?php echo e($errors->first('weblink')); ?></div>
                                                                            <?php endif; ?>
                                                                            <div id="con_att_weblinkError" class="error text-red-700"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                            <label for="" class="ti-form-label font-bold">Type Of Level:<span class="text-red-500">*</span></label>
                                                                            <select class="ti-form-select" name="type_of_level" id="con_att_typeoflevel">
                                                                                <option value="#">Choose One</option>
                                                                                <option value="National" <?php echo e(old('type_of_level') == 'National' ? 'selected' : ''); ?>>National</option>
                                                                                <option value="International" <?php echo e(old('type_of_level') == 'International' ? 'selected' : ''); ?>>International</option>
                                                                            </select>
                                                                            <?php if($errors->has('type_of_level')): ?>
                                                                                <div class="text-red-700"><?php echo e($errors->first('type_of_level')); ?></div>
                                                                            <?php endif; ?>
                                                                            <div id="con_att_typeoflevelError" class="error text-red-700"></div>
                                                                        </div>
                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                            <label for="" class="ti-form-label font-bold">ISSN Number:</label>
                                                                            <input type="text" name="ISSN_NO" class="ti-form-input" placeholder="ISSN Number" id="con_att_issn_number" value="<?php echo e(old('ISSN_NO')); ?>">
                                                                            <?php if($errors->has('ISSN_NO')): ?>
                                                                                <div class="text-red-700"><?php echo e($errors->first('ISSN_NO')); ?></div>
                                                                            <?php endif; ?>
                                                                            <div id="con_att_issnnumberError" class="error text-red-700"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                            <label for="" class="ti-form-label pt-4 font-bold">Document:<span class="text-red-500">*  Only PDF files up to 500 KB in size are accepted.</span></label>
                                                                            <span class="sr-only">Choose Profile photo</span>
                                                                            <input type="file" accept="application/pdf" name="document" id="conf_att_document" class="block w-full text-sm text-gray-500 dark:text-white/70 focus:outline-0
                                                                            ltr:file:mr-4 rtl:file:ml-4 file:py-2 file:px-4
                                                                            file:rounded-sm file:border-0
                                                                            file:text-sm file:font-semibold
                                                                            file:bg-primary file:text-white
                                                                            hover:file:bg-primary focus-visible:outline-none doc" required>
                                                                            <?php if($errors->has('document')): ?>
                                                                                <div class="text-red-700"><?php echo e($errors->first('document')); ?></div>
                                                                            <?php endif; ?>
                                                                            <div id="pro_att_documentError" class="error text-red-700"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ti-modal-footer">
                                                                    <button type="button"
                                                                        class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                        data-hs-overlay="#add_conference_activity_attended">
                                                                        Close
                                                                    </button>
                                                                    <input type="submit" id="conference_attended_add_btn" class="ti-btn  bg-primary text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10" value="Add"/>

                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
                                                    <div class="flex justify-end mt-4">
                                                        <button id="exportToExcel" class="bg-green-500 text-white px-4 py-2 rounded-md focus:outline-none hover:bg-green-600">Export to Excel</button>
                                                    </div>
                                                    <table id="conference_attended_table" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                        <thead class="bg-gray-50 dark:bg-black/20">
                                                            <tr class="">
                                                                <th scope="col" class="dark:text-white/80 font-bold">S.No</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">E-Gov Id</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Conference Name</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Attended As</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">From date</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">To Date</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">No Of Days</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Paper Title</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Place</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Sponsored</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Sponsored By</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Amount</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Weblink</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Type Of Level</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">ISSN Number</th>
                                                                
                                                                <?php if(!isset($export) || !$export): ?>
                                                                    <th scope="col" class="dark:text-white/80 font-bold ">Action</th>
                                                                <?php endif; ?>

                                                            </tr>
                                                        </thead>
                                                        <?php
                                                            $i=1;
                                                        ?>
                                                        <tbody class="">
                                                                <?php if($staff->conferences_attendee!=null): ?>
                                                                <?php $__empty_1 = true; $__currentLoopData = $staff->conferences_attendee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $act): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                                    
                                                                    <tr style="<?php if($act->validation_status =='invalid'): ?> background-color: #ffcccc; <?php elseif($act->validation_status =='updated'): ?> background-color: #fff2cc; <?php elseif($act->validation_status =='valid'): ?> background-color: #ccffcc; <?php endif; ?>">

                                                                        <td><span><?php echo e($i++); ?></span></td>
                                                                        
                                                                        <td>
                                                                            <a href="https://git.edu/storage/Uploads/Research/Conference_Attended/<?php echo e($act->document); ?>" class="text-blue-500">
                                                                                <span><?php echo e($act->egov_id); ?></span>
                                                                            </a>
                                                                        </td>
                                                                        <td><span><?php echo e($act->conference_name); ?></span></td>
                                                                        <td><span><?php echo e($act->attended_as); ?></span></td>
                                                                        <td><span><?php echo e(\Carbon\Carbon::parse($act->from_date)->format('d-M-Y')); ?></span></td>
                                                                        <td><span><?php echo e(\Carbon\Carbon::parse($act->to_date)->format('d-M-Y')); ?></span></td>
                                                                        <td><span><?php echo e($act->no_of_days); ?></span></td>
                                                                        <td><span><?php echo e($act->title); ?></span></td>
                                                                        <td><span><?php echo e($act->place); ?></span></td>
                                                                        <td><span><?php echo e($act->sponsored); ?></span></td>
                                                                        <td><span><?php echo e(($act->sponsored=="No"? '--NA--' : $act->sponsored_by)); ?></span></td>
                                                                        
                                                                        <td><span><?php echo e($act->amount); ?></span></td>
                                                                        <td><span><?php echo e($act->weblink); ?></span></td>
                                                                        <td><span><?php echo e($act->type_of_level); ?></span></td>
                                                                        <td><span><?php echo e($act->ISSN_NO); ?></span></td>
                                                                        

                                                                        <?php if(!isset($export) || !$export): ?>
                                                                        <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                                            <!--modal Start Here-->
                                                                            <?php if ($act->validation_status === 'invalid'): ?>
                                                                                <div class="hs-tooltip ti-main-tooltip text-center">
                                                                                    <button data-hs-overlay="#reason_view_modal<?php echo e($i); ?>"
                                                                                            class="hs-dropdown-toggle m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor">
                                                                                            <path d="M14 14.252V16.3414C13.3744 16.1203 12.7013 16 12 16C8.68629 16 6 18.6863 6 22H4C4 17.5817 7.58172 14 12 14C12.6906 14 13.3608 14.0875 14 14.252ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11ZM19 17.5858L21.1213 15.4645L22.5355 16.8787L20.4142 19L22.5355 21.1213L21.1213 22.5355L19 20.4142L16.8787 22.5355L15.4645 21.1213L17.5858 19L15.4645 16.8787L16.8787 15.4645L19 17.5858Z"></path></svg>

                                                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">reason</span>
                                                                                    </button>
                                                                                    <div id="reason_view_modal<?php echo e($i); ?>" class="hs-overlay hidden ti-modal">
                                                                                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                                                            <div class="ti-modal-content">
                                                                                                <div class="ti-modal-header">
                                                                                                    <h3 class="ti-modal-title">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                                                                                                            <path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z">
                                                                                                            </path>
                                                                                                        </svg>
                                                                                                        Reason Details of Conference Activity Attended
                                                                                                    </h3>
                                                                                                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#reason_view_modal<?php echo e($i); ?>">
                                                                                                        <span class="sr-only">Close</span>
                                                                                                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                                            
                                                                                                            <path d="M14 14.252V16.3414C13.3744 16.1203 12.7013 16 12 16C8.68629 16 6 18.6863 6 22H4C4 17.5817 7.58172 14 12 14C12.6906 14 13.3608 14.0875 14 14.252ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11ZM19 17.5858L21.1213 15.4645L22.5355 16.8787L20.4142 19L22.5355 21.1213L21.1213 22.5355L19 20.4142L16.8787 22.5355L15.4645 21.1213L17.5858 19L15.4645 16.8787L16.8787 15.4645L19 17.5858Z"></path></svg>


                                                                                                    </button>
                                                                                                </div>
                                                                                                <div class="ti-modal-body">
                                                                                                    <div class="ti-form-label font-bold">Reason:</div>
                                                                                                    <div><?php echo e($act->reason); ?></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            <?php endif; ?>


                                                                            <!--Modal Ends Here-->
                                                                            <div class="hs-tooltip ti-main-tooltip">
                                                                                <a  href="<?php echo e(Storage::url('Uploads/Research/Conference_Attended/' . $act->document)); ?>" class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary" target="_blank" <?php echo e($act->document); ?>>
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12.0003 3C17.3924 3 21.8784 6.87976 22.8189 12C21.8784 17.1202 17.3924 21 12.0003 21C6.60812 21 2.12215 17.1202 1.18164 12C2.12215 6.87976 6.60812 3 12.0003 3ZM12.0003 19C16.2359 19 19.8603 16.052 20.7777 12C19.8603 7.94803 16.2359 5 12.0003 5C7.7646 5 4.14022 7.94803 3.22278 12C4.14022 16.052 7.7646 19 12.0003 19ZM12.0003 16.5C9.51498 16.5 7.50026 14.4853 7.50026 12C7.50026 9.51472 9.51498 7.5 12.0003 7.5C14.4855 7.5 16.5003 9.51472 16.5003 12C16.5003 14.4853 14.4855 16.5 12.0003 16.5ZM12.0003 14.5C13.381 14.5 14.5003 13.3807 14.5003 12C14.5003 10.6193 13.381 9.5 12.0003 9.5C10.6196 9.5 9.50026 10.6193 9.50026 12C9.50026 13.3807 10.6196 14.5 12.0003 14.5Z"></path></svg>
                                                                                    <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm" role="tooltip">
                                                                                    View Document
                                                                                    </span>
                                                                                </a>
                                                                            </div>
                                                                            <div class="hs-tooltip ti-main-tooltip">
                                                                                <button data-hs-overlay="#conference_attended_edit_modal<?php echo e($i); ?>" id="btn<?php echo e($i); ?>" btn-val=<?php echo e($i); ?>

                                                                                class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary conference_attended_edit_modal_click">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                    <span
                                                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                        role="tooltip">
                                                                                        Edit
                                                                                    </span>
                                                                                </button>
                                                                                <div id="conference_attended_edit_modal<?php echo e($i); ?>" class="hs-overlay hidden ti-modal">
                                                                                    <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                                                        <div class="ti-modal-content">
                                                                                            <div class="ti-modal-header">
                                                                                                <h3 class="ti-modal-title">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                                    Edit Conference Attended Details
                                                                                                </h3>
                                                                                                <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                                                data-hs-overlay="#conference_attended_edit_modal<?php echo e($i); ?>">
                                                                                                <span class="sr-only">Close</span>
                                                                                                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <path
                                                                                                    d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                                    fill="currentColor" />
                                                                                                </svg>
                                                                                                </button>
                                                                                                <?php if(($errors->has('edit_conference_name'))||($errors->has('edit_attended_as'))||($errors->has('edit_from_date'))||($errors->has('edit_to_date'))||($errors->has('edit_no_of_days'))||($errors->has('edit_title'))||($errors->has('edit_place'))||($errors->has('edit_sponsored'))||($errors->has('edit_sponsored_by'))||($errors->has('edit_amount'))||($errors->has('edit_weblink'))||($errors->has('edit_type_of_level'))): ?>
                                                                                                    <script>
                                                                                                        window.onload=function(){
                                                                                                        //alert('123');
                                                                                                        //alert("Validation errors");

                                                                                                        // document.getElementById('btn'+<?php echo e(old('modal_no')); ?>).click();

                                                                                                        };

                                                                                                    </script>
                                                                                                <?php endif; ?>
                                                                                            </div>
                                                                                            <form  action="<?php echo e(route('Teaching.research.conferenceactivities.attended.update',$act->id)); ?>" enctype="multipart/form-data" method="post">
                                                                                                <?php echo csrf_field(); ?>
                                                                                                <?php echo method_field('patch'); ?>
                                                                                                <div class="ti-modal-body">
                                                                                                    <input type='hidden' name='modal_no' class='modal_no' value=<?php echo e(old('modal_no')); ?>/>
                                                                                                    <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                                            <label for="with-corner-hint" class="ti-form-label font-bold">Conference Name : <span class="text-red-500">*</span></label>
                                                                                                            <input type="text" name="edit_conference_name" class="ti-form-input" required placeholder="Conference Name" value="<?php echo e($act->conference_name); ?>">
                                                                                                            <?php if($errors->has('edit_conference_name')): ?>
                                                                                                                <div class="text-red-700"><?php echo e($errors->first('edit_conference_name')); ?></div>
                                                                                                            <?php endif; ?>
                                                                                                            <div id="titleError" class="error text-red-700"></div>
                                                                                                        </div>
                                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                                            <label for="" class="ti-form-label font-bold">Attended As : <span class="text-red-500">*</span></label>
                                                                                                            <select  class="ti-form-input" name="edit_attended_as" required>
                                                                                                                <option value="#">Choose an option</option>
                                                                                                                <option value="Resource Person" <?php echo e($act->attended_as=='Resource Person'? 'selected':''); ?>>Resource Person</option>
                                                                                                                <option value="Paper Presenter"  <?php echo e($act->attended_as=='Paper Presenter'? 'selected':''); ?>>Paper Presenter</option>
                                                                                                                <option value="Participant" <?php echo e($act->attended_as=='Participant'? 'selected':''); ?>>Participant</option>
                                                                                                                <option value="Session Chair" <?php echo e($act->attended_as=='Session Chair'? 'selected':''); ?>>Session Chair</option>

                                                                                                            </select>
                                                                                                            <?php if($errors->has('edit_attended_as')): ?>
                                                                                                                <div class="text-red-700"><?php echo e($errors->first('edit_attended_as')); ?></div>
                                                                                                            <?php endif; ?>
                                                                                                            <div id="attendedError" class="error text-red-700"></div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                                        <div class="flex max-w-sm space-y-3 pb-6">
                                                                                                            <label for="" class="ti-form-label font-bold">From Date : <span class="text-red-500">*</span></label>
                                                                                                            <div class="px-2 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                                <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                                                    class="ri ri-calendar-line"></i></span>
                                                                                                            </div>

                                                                                                            <input type="date" name="edit_from_date"
                                                                                                                class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date conf_attended_from_date_edit"
                                                                                                                required placeholder="Choose date" value="<?php echo e($act->from_date); ?>">
                                                                                                                <?php if($errors->has('edit_from_date')): ?>
                                                                                                                    <div class="text-red-700"><?php echo e($errors->first('edit_from_date')); ?></div>
                                                                                                                <?php endif; ?>
                                                                                                                <div id="fromdateError" class="error text-red-700"></div>
                                                                                                        </div>
                                                                                                        <div class="flex max-w-sm space-y-3 pb-6">
                                                                                                            <label for="" class="ti-form-label font-bold">To Date : <span class="text-red-500">*</span></label>
                                                                                                            <div class="px-2 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                                <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                                                        class="ri ri-calendar-line"></i></span>
                                                                                                            </div>

                                                                                                            <input type="date" name="edit_to_date"
                                                                                                                class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date conf_attended_to_date_edit"
                                                                                                                required placeholder="Choose date" value="<?php echo e($act->to_date); ?>">
                                                                                                                <?php if($errors->has('edit_to_date')): ?>
                                                                                                                    <div class="text-red-700"><?php echo e($errors->first('edit_to_date')); ?></div>
                                                                                                                <?php endif; ?>
                                                                                                            <div id="todateError" class="error text-red-700"></div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">

                                                                                                    </div>
                                                                                                    <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                                            <label for="" class="ti-form-label font-bold">No Of Days:</label>
                                                                                                            <input type="text" name="edit_no_of_days" class="ti-form-input conf_attended_no_of_days_edit" required placeholder="No Of Days" value="<?php echo e($act->no_of_days); ?>" readonly>
                                                                                                            <?php if($errors->has('edit_no_of_days')): ?>
                                                                                                                <div class="text-red-700"><?php echo e($errors->first('edit_no_of_days')); ?></div>
                                                                                                            <?php endif; ?>
                                                                                                            <div id="noofdaysError" class="error text-red-700"></div>

                                                                                                        </div>
                                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                                            <label for="" class="ti-form-label font-bold">Title:</label>
                                                                                                            <input type="text" name="edit_title" class="ti-form-input" required placeholder="Paper Title" value="<?php echo e($act->title); ?>">
                                                                                                            <?php if($errors->has('edit_title')): ?>
                                                                                                                <div class="text-red-700"><?php echo e($errors->first('edit_title')); ?></div>
                                                                                                            <?php endif; ?>
                                                                                                            <div id="titleError" class="error text-red-700"></div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                                            <label for="" class="ti-form-label font-bold">Place:</label>
                                                                                                            <input type="text" name="edit_place" class="ti-form-input" placeholder="Place" value="<?php echo e($act->place); ?>">
                                                                                                            <?php if($errors->has('edit_place')): ?>
                                                                                                                <div class="text-red-700"><?php echo e($errors->first('edit_place')); ?></div>
                                                                                                            <?php endif; ?>
                                                                                                            <div id="placeError" class="error text-red-700"></div>
                                                                                                        </div>
                                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                                            <label for="" class="ti-form-label font-bold">Sponsored:<span class="text-red-500">*</span></label>
                                                                                                            <select class="ti-form-select sponsor_type_attended sponsored" name="edit_sponsored">
                                                                                                                <option value="#">Choose One</option>
                                                                                                                <option value="Yes" <?php echo e($act->sponsored=='Yes'? 'selected':''); ?>>Yes</option>
                                                                                                                <option value="No"  <?php echo e($act->sponsored=='No'? 'selected':''); ?>>No</option>
                                                                                                            </select>
                                                                                                            <?php if($errors->has('edit_sponsored')): ?>
                                                                                                                <div class="text-red-700"><?php echo e($errors->first('edit_sponsored')); ?></div>
                                                                                                            <?php endif; ?>
                                                                                                            <div id="sponsoredError" class="error text-red-700"></div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                                        
                                                                                                        <div class="max-w-sm space-y-3 pb-6 sponsored_by">
                                                                                                            <label for="" class="ti-form-label font-bold">Sponsored By:</label>
                                                                                                            <select class="ti-form-select sponsoredBy" name="edit_sponsored_by">
                                                                                                                <option value="#">Choose One</option>
                                                                                                                <option value="KLS GIT" <?php echo e($act->sponsored_by=='KLS GIT'? 'selected':''); ?>>KLS GIT</option>
                                                                                                                <option value="Other" <?php echo e($act->sponsored_by=='Other'? 'selected':''); ?>>Other</option>
                                                                                                            </select>
                                                                                                            <?php if($errors->has('edit_sponsored_by')): ?>
                                                                                                                <div class="text-red-700"><?php echo e($errors->first('edit_sponsored_by')); ?></div>
                                                                                                            <?php endif; ?>
                                                                                                            <div id="sponsoredbyError" class="error text-red-700"></div>
                                                                                                        </div>
                                                                                                        <div class="max-w-sm space-y-3 pb-6 otherSponsor" id="otherSponsor">
                                                                                                            <label for="" class="ti-form-label font-bold">Other Sponsor:</label>
                                                                                                            <input type="text" name="edit_other_sponsored" class="ti-form-input" placeholder="Other Sponsor" value="<?php echo e($act->other_sponsored); ?>">
                                                                                                            <div id="othersponsorError" class="error text-red-700"></div>
                                                                                                        </div>



                                                                                                    </div>
                                                                                                    <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                                        <div class="max-w-sm space-y-3 pb-6 amount">
                                                                                                            <label for="" class="ti-form-label font-bold">Amount :</label>
                                                                                                            <input type="number" min="0" step="1" name="edit_amount" class="ti-form-input" placeholder="Amount" value="<?php echo e($act->amount); ?>">
                                                                                                            <?php if($errors->has('edit_amount')): ?>
                                                                                                                <div class="text-red-700"><?php echo e($errors->first('edit_amount')); ?></div>
                                                                                                            <?php endif; ?>
                                                                                                            <div id="amountError" class="error text-red-700"></div>
                                                                                                        </div>
                                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                                            <label for="" class="ti-form-label font-bold">Weblink:</label>
                                                                                                            <input type="url" name="edit_weblink" class="ti-form-input" placeholder="Weblink" value="<?php echo e($act->weblink); ?>">
                                                                                                            <?php if($errors->has('edit_weblink')): ?>
                                                                                                                    <div class="text-red-700"><?php echo e($errors->first('edit_weblink')); ?></div>
                                                                                                            <?php endif; ?>
                                                                                                            <div id="weblinkError" class="error text-red-700"></div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                                            <label for="" class="ti-form-label font-bold">Type Of Level:<span class="text-red-500">*</span></label>
                                                                                                            <select class="ti-form-select" name="edit_type_of_level">
                                                                                                                <option value="#">Choose One</option>
                                                                                                                <option value="National" <?php echo e($act->type_of_level=='National'? 'selected':''); ?>>National</option>
                                                                                                                <option value="International" <?php echo e($act->type_of_level=='International'? 'selected':''); ?>>International</option>

                                                                                                            </select>
                                                                                                            <?php if($errors->has('type_of_level')): ?>
                                                                                                                <div class="text-red-700"><?php echo e($errors->first('type_of_level')); ?></div>
                                                                                                            <?php endif; ?>

                                                                                                        </div>
                                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                                            <label for="" class="ti-form-label font-bold">ISSN Number:</label>
                                                                                                            <input type="text" name="edit_ISSN_NO" class="ti-form-input" placeholder="ISSN Number" value="<?php echo e($act->ISSN_NO); ?>">
                                                                                                            <?php if($errors->has('ISSN_NO')): ?>
                                                                                                                <div class="text-red-700"><?php echo e($errors->first('ISSN_NO')); ?></div>
                                                                                                            <?php endif; ?>
                                                                                                            <div id="pub_issnnumberError" class="error text-red-700"></div>
                                                                                                        </div>
                                                                                                        <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                                <div class="max-w-sm space-y-3 pb-6">
                                                                                                                    <label for="" class="ti-form-label pt-4 font-bold">Document:<span class="text-red-500">* <?php echo e($act->document); ?></span></label>
                                                                                                                    <span class="sr-only">Choose Profile photo</span>
                                                                                                                        <input type="file" accept="application/pdf" name="document" class="block w-full text-sm text-gray-500 dark:text-white/70 focus:outline-0
                                                                                                                        ltr:file:mr-4 rtl:file:ml-4 file:py-2 file:px-4
                                                                                                                        file:rounded-sm file:border-0
                                                                                                                        file:text-sm file:font-semibold
                                                                                                                        file:bg-primary file:text-white
                                                                                                                        hover:file:bg-primary focus-visible:outline-none doc" required value="<?php echo e($act->document); ?>">
                                                                                                                        <?php if($errors->has('document')): ?>
                                                                                                                            <div class="text-red-700"><?php echo e($errors->first('document')); ?></div>
                                                                                                                        <?php endif; ?>
                                                                                                                    <div id="con_att_documentError" class="error text-red-700"></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                           <input type="hidden" name="validation_status" value="updated">

                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="ti-modal-footer">
                                                                                                    <button type="button"
                                                                                                    class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                                    data-hs-overlay="#conference_attended_edit_modal<?php echo e($i); ?>">
                                                                                                    Close
                                                                                                    </button>

                                                                                                    <input type="submit" class="ti-btn  bg-warning text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10" value="Update"/>

                                                                                                </div>
                                                                                            </form>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="hs-tooltip ti-main-tooltip">
                                                                            <form action="<?php echo e(route('Teaching.research.conferenceactivities.attended.destroy',$act->id)); ?>" method="post">
                                                                            <button onclick="return confirm('Are you Sure')"
                                                                                class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M7 4V2H17V4H22V6H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V6H2V4H7ZM6 6V20H18V6H6ZM9 9H11V17H9V9ZM13 9H15V17H13V9Z"></path></svg>
                                                                                <?php echo method_field('delete'); ?>
                                                                                <?php echo csrf_field(); ?>
                                                                                <span
                                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                    role="tooltip">
                                                                                    Delete
                                                                                </span>
                                                                                </button>
                                                                            </form>
                                                                            </div>
                                                                        </td>
                                                                        <?php endif; ?>
                                                                    </tr>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                                        
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End of Conferences attended table-->

                                        <!-- Start of Conferences COnducted details-->
                                        <div class="box border-0 shadow-none mb-0">
                                            <div class="box-header">
                                                <h5 class="box-title leading-none flex"><i class="ri ri-global-line ltr:mr-2 rtl:ml-2"></i> Conference Conducted Details</h5>
                                                <div class="avatar-container flex py-4">
                                                    <div class="avatar-wrapper flex items-center">
                                                        <div class="avatar rounded-sm p-1 bg-green-500 border-gray-900 border-2 w-6 h-6"></div>
                                                        <div class="avatar-text font-bold ml-2 ">Valid</div>
                                                    </div>

                                                    <div class="avatar-wrapper flex items-center mx-2">
                                                        <div class="avatar rounded-sm p-1 bg-red-500 border-gray-900 border-2 w-6 h-6"></div>
                                                        <div class="avatar-text font-bold ml-2">Invalid</div>
                                                    </div>

                                                    <div class="avatar-wrapper flex items-center mx-2">
                                                        <div class="avatar rounded-sm p-1 bg-yellow-400 border-gray-900 border-2 w-6 h-6"></div>
                                                        <div class="avatar-text font-bold ml-2">Updated</div>
                                                    </div>

                                                    <div class="avatar-wrapper flex items-center">
                                                        <div class="avatar rounded-sm p-1 border-gray-900 border-2 w-6 h-6"></div>
                                                        <div class="avatar-text font-semibold ml-2">New</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-body">
                                                <button id="conference_conducted_btn" data-hs-overlay="#add_conference_activity_conducted" class="hs-dropdown-toggle ti-btn ti-btn-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M17 19H19V11H13V19H15V13H17V19ZM3 19V4C3 3.44772 3.44772 3 4 3H18C18.5523 3 19 3.44772 19 4V9H21V19H22V21H2V19H3ZM7 11V13H9V11H7ZM7 15V17H9V15H7ZM7 7V9H9V7H7Z" fill="rgba(255,255,255,1)"></path></svg>
                                                    Add Conference Conducted
                                                </button>
                                                <div id="add_conference_activity_conducted" class="hs-overlay hidden ti-modal">
                                                    <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                        <div class="ti-modal-content">
                                                            <div class="ti-modal-header">
                                                                <h3 class="ti-modal-title">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                    Add New Conference Conducted Details<span class="text-red-400">
                                                                </h3>
                                                                <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                data-hs-overlay="#add_conference_activity_conducted">
                                                                <span class="sr-only">Close</span>
                                                                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                    d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                    fill="currentColor" />
                                                                </svg>
                                                                </button>
                                                                <?php if(($errors->has('cc_conference_name'))||($errors->has('cc_co_organizer'))||($errors->has('cc_no_of_participants'))||($errors->has('cc_sponsored'))||($errors->has('cc_sponsoring_agency'))||($errors->has('cc_sponsored'))||($errors->has('cc_sponsoring_agency_name_address'))||($errors->has('cc_from_date'))||($errors->has('cc_to_date'))||($errors->has('cc_no_of_days'))||($errors->has('cc_place'))||($errors->has('cc_publisher'))||($errors->has('cc_role'))||($errors->has('cc_weblink'))||($errors->has('cc_ISSN_NO'))): ?>
                                                                    <script>
                                                                        // alert(1);

                                                                        $(window).on('load', function() {
                                                                            //if($('#horizontal-alignment-item-2').parent().find('.active')){
                                                                            // alert('Its active');
                                                                            //$('#horizontal-alignment-item-2').trigger('click')
                                                                            $('#conference_conducted_btn').trigger("click");


                                                                        });
                                                                    </script>
                                                                <?php endif; ?>
                                                            </div>
                                                            <form action="<?php echo e(route('Teaching.research.conferenceactivities.conducted.store')); ?>" method="post" enctype="multipart/form-data">
                                                                <?php echo csrf_field(); ?>
                                                                <div class="ti-modal-body">
                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                            <label for="with-corner-hint" class="ti-form-label">CONFERENCE NAME:<span class="text-red-500">*</span></label>
                                                                            <input type="text" name="cc_conference_name" class="ti-form-input" required placeholder="Title" id="con_cond_conference_name" value="<?php echo e(old('cc_conference_name')); ?>">
                                                                            <?php if($errors->has('cc_conference_name')): ?>
                                                                                <div class="text-red-700"><?php echo e($errors->first('cc_conference_name')); ?></div>
                                                                            <?php endif; ?>
                                                                            <div id="con_cond_conferenceNameError" class="error text-red-700"></div>
                                                                        </div>

                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                            <label for="" class="ti-form-label">Co Organizer :</label>
                                                                            <input type="text" name="cc_co_organizer" class="ti-form-input" required placeholder="Co Organizer" id="con_cond_co_organizer" value="<?php echo e(old('cc_co_organizer')); ?>">
                                                                            <?php if($errors->has('cc_co_organizer')): ?>
                                                                                <div class="text-red-700"><?php echo e($errors->first('cc_co_organizer')); ?></div>
                                                                            <?php endif; ?>
                                                                            <div id="con_cond_coorganizerError" class="error text-red-700"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                            <label for="" class="ti-form-label">No of Participants:<span class="text-red-500">*</span></label>
                                                                            <input type="number" min="0" name="cc_no_of_participants" class="ti-form-input" required placeholder="No of Participants" id="con_cond_no_ofparticipants" value="<?php echo e(old('cc_no_of_participants')); ?>">
                                                                            <?php if($errors->has('cc_no_of_participants')): ?>
                                                                                <div class="text-red-700"><?php echo e($errors->first('cc_no_of_participants')); ?></div>
                                                                            <?php endif; ?>
                                                                            <div id="con_cond_participantError" class="error text-red-700"></div>
                                                                        </div>

                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                            <label for="" class="ti-form-label font-bold">Sponsored:<span class="text-red-500">*</span></label>
                                                                            <select class="ti-form-select sponsor_type sponsored" name="cc_sponsored" id="con_cond_sponsored">
                                                                                <option value="#">Choose One</option>
                                                                                <option value="Yes" <?php echo e(old('cc_sponsored') == 'Yes' ? 'selected' : ''); ?>>Yes</option>
                                                                                <option value="No" <?php echo e(old('cc_sponsored') == 'No' ? 'selected' : ''); ?>>No</option>
                                                                            </select>
                                                                            <?php if($errors->has('cc_sponsored')): ?>
                                                                                <div class="text-red-700"><?php echo e($errors->first('cc_sponsored')); ?></div>
                                                                            <?php endif; ?>
                                                                            <div id="con_cond_sponsoredError" class="error text-red-700"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                        <div class="max-w-sm space-y-3 pb-6 sponsoring_agency">
                                                                            <label for="" class="ti-form-label">Sponsoring Agency:</label>
                                                                            <input type="text" name="cc_sponsoring_agency" class="ti-form-input" placeholder="Sponsoring Agency" id="con_cond_sponsoring_agency" value="<?php echo e(old('cc_sponsoring_agency')); ?>">
                                                                            <?php if($errors->has('cc_sponsoring_agency')): ?>
                                                                                <div class="text-red-700"><?php echo e($errors->first('cc_sponsoring_agency')); ?></div>
                                                                            <?php endif; ?>
                                                                            <div id="con_cond_sponsoragencyError" class="error text-red-700"></div>
                                                                        </div>
                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                            <label for="" class="ti-form-label">ISSN Number:</label>
                                                                            <input type="text" name="cc_ISSN_NO" class="ti-form-input" placeholder="ISSN Number" id="issn_no" value="<?php echo e(old('cc_ISSN_NO')); ?>">
                                                                            <?php if($errors->has('cc_ISSN_NO')): ?>
                                                                                <div class="text-red-700"><?php echo e($errors->first('cc_ISSN_NO')); ?></div>
                                                                            <?php endif; ?>
                                                                            <div id="con_issn_noError" class="error text-red-700"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                        <div class="flex max-w-sm space-y-3 pb-6">
                                                                            <label for="" class="ti-form-label">From Date :<span class="text-red-500">*</span></label>
                                                                            <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                    class="ri ri-calendar-line"></i></span>


                                                                            </div>

                                                                            <input type="date" name="cc_from_date" id="con_cond_from_date"
                                                                                class="ti-form-input date rounded-l-none focus:z-10 flatpickr-input conf_conducted_from_date"
                                                                                required placeholder="Choose date" value="<?php echo e(old('cc_from_date')); ?>">
                                                                                <?php if($errors->has('cc_from_date')): ?>
                                                                                    <div class="text-red-700"><?php echo e($errors->first('cc_from_date')); ?></div>
                                                                                <?php endif; ?>
                                                                                <div id="con_cond_fromdateError" class="error text-red-700"></div>
                                                                        </div>


                                                                        <div class="flex max-w-sm space-y-3 pb-6">
                                                                            <label for="" class="ti-form-label">To Date :<span class="text-red-500">*</span></label>
                                                                            <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                        class="ri ri-calendar-line"></i></span>
                                                                            </div>

                                                                            <input type="date" name="cc_to_date" id="con_cond_to_date"
                                                                                class="ti-form-input date rounded-l-none focus:z-10 flatpickr-input conf_conducted_to_date"
                                                                                    required placeholder="Choose date" value="<?php echo e(old('cc_to_date')); ?>">
                                                                                <?php if($errors->has('cc_to_date')): ?>
                                                                                    <div class="text-red-700"><?php echo e($errors->first('cc_to_date')); ?></div>
                                                                                <?php endif; ?>
                                                                                <div id="con_cond_todateError" class="error text-red-700"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                            <label for="" class="ti-form-label">No Of Days:</label>
                                                                            <input type="text" id="con_cond_no_ofdays" name="cc_no_of_days" class="ti-form-input conf_conducted_no_of_days" required placeholder="No Of Days" value="<?php echo e(old('cc_no_of_days')); ?>" readonly>
                                                                            <?php if($errors->has('con_cond_no_ofdays')): ?>
                                                                                <div class="text-red-700"><?php echo e($errors->first('con_cond_no_ofdays')); ?></div>
                                                                            <?php endif; ?>
                                                                            <div id="con_cond_noofError" class="error text-red-700"></div>
                                                                        </div>
                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                            <label for="" class="ti-form-label">Place:</label>
                                                                            <input type="text" name="cc_place" class="ti-form-input" placeholder="Place" id="con_cond_place" value="<?php echo e(old('cc_place')); ?>">
                                                                            <?php if($errors->has('cc_place')): ?>
                                                                                <div class="text-red-700"><?php echo e($errors->first('cc_place')); ?></div>
                                                                            <?php endif; ?>
                                                                            <div id="con_cond_placeError" class="error text-red-700"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                            <label for="" class="ti-form-label">Publisher:</label>
                                                                            <input type="text" name="cc_publisher" class="ti-form-input" placeholder="Publisher" id="con_cond_publisher" value="<?php echo e(old('cc_publisher')); ?>">
                                                                            <?php if($errors->has('cc_publisher')): ?>
                                                                                <div class="text-red-700"><?php echo e($errors->first('cc_publisher')); ?></div>
                                                                            <?php endif; ?>
                                                                            <div id="con_cond_publisherError" class="error text-red-700"></div>
                                                                        </div>
                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                            <label for="with-corner-hint" class="ti-form-label font-bold"> Role: <span class="text-red-500">*</span></label>
                                                                            <select class="ti-form-select sponsored" name="cc_role" required id="con_cond_role">
                                                                                <option value="#">Choose the role</option>
                                                                                <option value="Convener" <?php echo e(old('cc_role') == 'Convener' ? 'selected' : ''); ?>>Convener</option>
                                                                                <option value="Co-convener" <?php echo e(old('cc_role') == 'Co-convener' ? 'selected' : ''); ?>>Co-convener</option>
                                                                                <option value="Team Member" <?php echo e(old('cc_role') == 'Team Member' ? 'selected' : ''); ?>>Team Member</option>
                                                                                <option value="Coordinator" <?php echo e(old('cc_role') == 'Coordinator' ? 'selected' : ''); ?>>Coordinator</option>
                                                                            </select>
                                                                            <?php if($errors->has('cc_role')): ?>
                                                                                <div class="text-red-700"><?php echo e($errors->first('cc_role')); ?></div>
                                                                            <?php endif; ?>
                                                                            <div id="con_cond_roleError" class="error text-red-700"></div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                            <label for="" class="ti-form-label">Weblink:</label>
                                                                            <input type="url" id="con_cond_weblink" name="cc_weblink" class="ti-form-input" placeholder="https://wwww." value="<?php echo e(old('cc_weblink')); ?>">
                                                                            <?php if($errors->has('cc_weblink')): ?>
                                                                                <div class="text-red-700"><?php echo e($errors->first('cc_weblink')); ?></div>
                                                                            <?php endif; ?>
                                                                            <div id="con_cond_weblinkError" class="error text-red-700"></div>
                                                                        </div>
                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                            <label for="" class="ti-form-label font-bold">Type Of Level:<span class="text-red-500">*</span></label>
                                                                            <select class="ti-form-select" name="cc_type_of_level" id="cc_typeof_level">
                                                                                <option value="#">Choose One</option>
                                                                                <option value="National" <?php echo e(old('cc_type_of_level') == 'National' ? 'selected' : ''); ?>>National</option>
                                                                                <option value="International" <?php echo e(old('cc_type_of_level') == 'International' ? 'selected' : ''); ?>>International</option>
                                                                            </select>
                                                                            <?php if($errors->has('cc_type_of_level')): ?>
                                                                                <div class="text-red-700"><?php echo e($errors->first('cc_type_of_level')); ?></div>
                                                                            <?php endif; ?>
                                                                            <div id="cc_typeoflevelError" class="error text-red-700"></div>
                                                                        </div>


                                                                    </div>
                                                                    <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label pt-4 font-bold">Document:<span class="text-red-500">*  Only PDF files up to 500 KB in size are accepted.</span></label>
                                                                                <span class="sr-only">Choose Profile photo</span>
                                                                                    <input type="file" accept="application/pdf" name="document" class="block w-full text-sm text-gray-500 dark:text-white/70 focus:outline-0
                                                                                    ltr:file:mr-4 rtl:file:ml-4 file:py-2 file:px-4
                                                                                    file:rounded-sm file:border-0
                                                                                    file:text-sm file:font-semibold
                                                                                    file:bg-primary file:text-white
                                                                                    hover:file:bg-primary focus-visible:outline-none doc" required id="con_cond_document">
                                                                                    
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ti-modal-footer">
                                                                    <button type="button"
                                                                    class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                    data-hs-overlay="#add_conference_activity_conducted">
                                                                    Close
                                                                    </button>

                                                                    <input type="submit" id="conference_conducted_add_btn" class="ti-btn  bg-primary text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10" value="Add"/>

                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
                                                    <div class="flex justify-end mt-4">
                                                        <button id="conduct_exportToExcel" class="bg-green-500 text-white px-4 py-2 rounded-md focus:outline-none hover:bg-green-600">Export to Excel</button>
                                                    </div>
                                                    <table id="conference_conducted_table" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                        <thead class="bg-gray-50 dark:bg-black/20">
                                                            <tr class="">
                                                                <th scope="col" class="dark:text-white/80 font-bold">S.No</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">E-Gov ID</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold ">Conference Name</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Co Organizer</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">No Of Participants</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Sponsored</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Sponsoring Agency</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">From date</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">To Date</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">No Of Days</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Place</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Publisher</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Role</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Weblink</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Type Of Level</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">ISSN Number</th>
                                                                
                                                                <?php if(!isset($export) || !$export): ?>
                                                                    <th scope="col" class="dark:text-white/80 font-bold ">Action</th>
                                                                <?php endif; ?>

                                                            </tr>
                                                        </thead>
                                                        <?php
                                                            $i=1;
                                                        ?>
                                                        <tbody class="">
                                                            <?php if($staff->conferences_conducted !=null): ?>
                                                                <?php $__empty_1 = true; $__currentLoopData = $staff->conferences_conducted; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $con): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                                                                
                                                                <tr style="<?php if($con->validation_status =='invalid'): ?> background-color: #ffcccc; <?php elseif($con->validation_status =='updated'): ?> background-color: #fff2cc; <?php elseif($con->validation_status =='valid'): ?> background-color: #ccffcc; <?php endif; ?>">

                                                                    <td><span><?php echo e($i++); ?></span></td>
                                                                    
                                                                    <td>
                                                                        <a href="https://git.edu/storage/Uploads/Research/Conference_Conducted/<?php echo e($con->document); ?>" class="text-blue-500">
                                                                            <span><?php echo e($con->egov_id); ?></span>
                                                                        </a>
                                                                    </td>
                                                                    <td><span><?php echo e($con->conference_name); ?></span></td>
                                                                    <td><span><?php echo e($con->co_organizer); ?></span></td>
                                                                    <td><span><?php echo e($con->no_of_participants); ?></span></td>
                                                                    <td><span><?php echo e($con->sponsored); ?></span></td>
                                                                    <td>
                                                                        <span>
                                                                            <?php echo e($con->sponsored == 'No' ? '--NA--' : $con->sponsoring_agency); ?>

                                                                        </span>
                                                                    </td>
                                                                    
                                                                    <td><span><?php echo e(\Carbon\Carbon::parse($con->from_date)->format('d-M-Y')); ?></span></td>
                                                                    <td><span><?php echo e(\Carbon\Carbon::parse($con->to_date)->format('d-M-Y')); ?></span></td>
                                                                    <td><span><?php echo e($con->no_of_days); ?></span></td>
                                                                    <td><span><?php echo e($con->place); ?></span></td>
                                                                    <td><span><?php echo e($con->publisher); ?></span></td>
                                                                    <td><span><?php echo e($con->role); ?></span></td>
                                                                    <td><span><?php echo e($con->weblink); ?></span></td>
                                                                    <td><span><?php echo e($con->type_of_level); ?></span></td>
                                                                    <td><span><?php echo e($con->ISSN_NO); ?></span></td>
                                                                    

                                                                    <?php if(!isset($export) || !$export): ?>
                                                                    <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                                        <!--modal Start Here-->
                                                                        <?php if ($con->validation_status === 'invalid'): ?>
                                                                            <div class="hs-tooltip ti-main-tooltip text-center">
                                                                                <button data-hs-overlay="#reason_view_modal<?php echo e($i); ?>"
                                                                                        class="hs-dropdown-toggle m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor">
                                                                                    <path d="M14 14.252V16.3414C13.3744 16.1203 12.7013 16 12 16C8.68629 16 6 18.6863 6 22H4C4 17.5817 7.58172 14 12 14C12.6906 14 13.3608 14.0875 14 14.252ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11ZM19 17.5858L21.1213 15.4645L22.5355 16.8787L20.4142 19L22.5355 21.1213L21.1213 22.5355L19 20.4142L16.8787 22.5355L15.4645 21.1213L17.5858 19L15.4645 16.8787L16.8787 15.4645L19 17.5858Z"></path></svg>
                                                                                    <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">reason</span>
                                                                                </button>
                                                                                <div id="reason_view_modal<?php echo e($i); ?>" class="hs-overlay hidden ti-modal">
                                                                                    <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                                                        <div class="ti-modal-content">
                                                                                            <div class="ti-modal-header">
                                                                                                <h3 class="ti-modal-title">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                                                                                                        <path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                    Reason Details of Conference Activity Conducted
                                                                                                </h3>
                                                                                                <button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#reason_view_modal<?php echo e($i); ?>">
                                                                                                    <span class="sr-only">Close</span>
                                                                                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                                    <path d="M14 14.252V16.3414C13.3744 16.1203 12.7013 16 12 16C8.68629 16 6 18.6863 6 22H4C4 17.5817 7.58172 14 12 14C12.6906 14 13.3608 14.0875 14 14.252ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11ZM19 17.5858L21.1213 15.4645L22.5355 16.8787L20.4142 19L22.5355 21.1213L21.1213 22.5355L19 20.4142L16.8787 22.5355L15.4645 21.1213L17.5858 19L15.4645 16.8787L16.8787 15.4645L19 17.5858Z"></path></svg>

                                                                                                </button>
                                                                                            </div>
                                                                                            <div class="ti-modal-body">
                                                                                                <div class="ti-form-label font-bold">Reason:</div>
                                                                                                <div><?php echo e($con->reason); ?></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        <?php endif; ?>
                                                                        <!--Modal Ends Here-->
                                                                        <div class="hs-tooltip ti-main-tooltip">
                                                                            <a  href="<?php echo e(Storage::url('Uploads/Research/Conference_Conducted/' . $con->document)); ?>" class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary" target="_blank" <?php echo e($con->document); ?>>
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12.0003 3C17.3924 3 21.8784 6.87976 22.8189 12C21.8784 17.1202 17.3924 21 12.0003 21C6.60812 21 2.12215 17.1202 1.18164 12C2.12215 6.87976 6.60812 3 12.0003 3ZM12.0003 19C16.2359 19 19.8603 16.052 20.7777 12C19.8603 7.94803 16.2359 5 12.0003 5C7.7646 5 4.14022 7.94803 3.22278 12C4.14022 16.052 7.7646 19 12.0003 19ZM12.0003 16.5C9.51498 16.5 7.50026 14.4853 7.50026 12C7.50026 9.51472 9.51498 7.5 12.0003 7.5C14.4855 7.5 16.5003 9.51472 16.5003 12C16.5003 14.4853 14.4855 16.5 12.0003 16.5ZM12.0003 14.5C13.381 14.5 14.5003 13.3807 14.5003 12C14.5003 10.6193 13.381 9.5 12.0003 9.5C10.6196 9.5 9.50026 10.6193 9.50026 12C9.50026 13.3807 10.6196 14.5 12.0003 14.5Z"></path></svg>
                                                                                <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm" role="tooltip">
                                                                                View Document
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                        <div class="hs-tooltip ti-main-tooltip">
                                                                            <button data-hs-overlay="#conference_conducted_edit_modal<?php echo e($i); ?>" id="btn<?php echo e($i); ?>" btn-val=<?php echo e($i); ?>

                                                                            class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary conference_conducted_edit_modal_click">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                <span
                                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                    role="tooltip">
                                                                                    Edit
                                                                                </span>
                                                                            </button>
                                                                            <div id="conference_conducted_edit_modal<?php echo e($i); ?>" class="hs-overlay hidden ti-modal">
                                                                                <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                                                    <div class="ti-modal-content">
                                                                                        <div class="ti-modal-header">
                                                                                            <h3 class="ti-modal-title">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                                Edit Conference Conducted<?php echo e($con->id); ?>

                                                                                            </h3>
                                                                                            <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                                                data-hs-overlay="#conference_conducted_edit_modal<?php echo e($i); ?>">
                                                                                                <span class="sr-only">Close</span>
                                                                                                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <path
                                                                                                    d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                                    fill="currentColor" />
                                                                                                </svg>
                                                                                            </button>
                                                                                            <?php if(($errors->has('ce_conference_name'))||($errors->has('ce_co_organizer'))||($errors->has('ce_no_of_participants'))||($errors->has('ce_sponsored'))||($errors->has('ce_sponsoring_agency'))||($errors->has('ce_sponsored'))||($errors->has('ce_sponsoring_agency_name_address'))||($errors->has('ce_from_date'))||($errors->has('ce_to_date'))||($errors->has('ce_no_of_days'))||($errors->has('ce_place'))||($errors->has('ce_publisher'))||($errors->has('ce_role'))||($errors->has('ce_weblink'))||($errors->has('ce_ISSN_NO'))): ?>
                                                                                                <script>
                                                                                                    // alert(1);

                                                                                                    $(window).on('load', function() {

                                                                                                    });
                                                                                                </script>
                                                                                            <?php endif; ?>

                                                                                        </div>
                                                                                        <form  action="<?php echo e(route('Teaching.research.conferenceactivities.conducted.update',$con->id)); ?>" enctype="multipart/form-data" method="post">
                                                                                            <?php echo csrf_field(); ?>
                                                                                            <?php echo method_field('patch'); ?>
                                                                                            <div class="ti-modal-body">
                                                                                                <input type='hidden' name='modal_no' id='modal_no' value=<?php echo e(old('modal_no')); ?>/>
                                                                                                <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                        <label for="with-corner-hint" class="ti-form-label">Conference Name :<span class="text-red-500">*</span> </label>
                                                                                                        <input type="text" name="ce_conference_name" class="ti-form-input" required placeholder="Title" value="<?php echo e($con->conference_name); ?>">
                                                                                                        <div id="conferenceNameError" class="error text-red-700"></div>
                                                                                                    </div>
                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                        <label for="" class="ti-form-label">Co Organizer :<span class="text-red-500">*</span></label>
                                                                                                        <input type="text" name="ce_co_organizer" class="ti-form-input" required placeholder="Co Organizer"value="<?php echo e($con->co_organizer); ?>">
                                                                                                        <div id="coorganizerError" class="error text-red-700"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                        <label for="" class="ti-form-label">No of Participants :<span class="text-red-500">*</span></label>
                                                                                                        <input type="text" name="ce_no_of_participants" class="ti-form-input" required placeholder="No of Participants"value="<?php echo e($con->no_of_participants); ?>">
                                                                                                        <div id="participantError" class="error text-red-700"></div>
                                                                                                    </div>
                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                        <label for="" class="ti-form-label">Sponsored :<span class="text-red-500">*</span></label>
                                                                                                        <select class="ti-form-select sponsor_type sponsored" name="ce_sponsored">
                                                                                                            <option value="#">Choose One</option>
                                                                                                            <option value="Yes" <?php echo e($con->sponsored=='Yes'? 'selected':''); ?>>Yes</option>
                                                                                                            <option value="No" <?php echo e($con->sponsored=='No'? 'selected':''); ?>>No</option>
                                                                                                        </select>
                                                                                                        <div id="sponsoredError" class="error text-red-700"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">

                                                                                                    <div class="max-w-sm space-y-3 pb-6 sponsoring_agency">
                                                                                                        <label for="" class="ti-form-label">Sponsoring Agency:</label>
                                                                                                        <input type="text" name="ce_sponsoring_agency" class="ti-form-input" placeholder="Sponsoring Agency" value="<?php echo e($con->sponsoring_agency); ?>">
                                                                                                        <div id="sponsoragencyError" class="error text-red-700"></div>
                                                                                                    </div>
                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                        <label for="" class="ti-form-label">ISSN Number:</label>
                                                                                                        <input type="text" name="ce_ISSN_NO" class="ti-form-input" placeholder="ISSN Number" value="<?php echo e($con->ISSN_NO); ?>">
                                                                                                        <?php if($errors->has('cc_ISSN_NO')): ?>
                                                                                                            <div class="text-red-700"><?php echo e($errors->first('cc_ISSN_NO')); ?></div>
                                                                                                        <?php endif; ?>
                                                                                                        <div id="con_cond_placeError" class="error text-red-700"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                    <div class="flex max-w-sm space-y-3 pb-6">
                                                                                                        <label for="" class="ti-form-label">From Date :<span class="text-red-500">*</span></label>
                                                                                                        <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                            <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                                                    class="ri ri-calendar-line"></i></span>
                                                                                                        </div>

                                                                                                        <input type="date" name="ce_from_date"
                                                                                                            class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date conf_conducted_from_date_edit"
                                                                                                                required placeholder="Choose date" value="<?php echo e($con->from_date); ?>">
                                                                                                        <div id="fromdateError" class="error text-red-700"></div>
                                                                                                    </div>


                                                                                                    <div class="flex max-w-sm space-y-3 pb-6">
                                                                                                        <label for="" class="ti-form-label">To Date :<span class="text-red-500">*</span></label>
                                                                                                        <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                            <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                                                    class="ri ri-calendar-line"></i></span>
                                                                                                        </div>
                                                                                                        <input type="date" name="ce_to_date"
                                                                                                            class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date conf_conducted_to_date_edit"
                                                                                                                required placeholder="Choose date" value="<?php echo e($con->to_date); ?>">
                                                                                                        <div id="todateError" class="error text-red-700"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                        <label for="" class="ti-form-label">No Of Days:</label>
                                                                                                        <input type="text" name="ce_no_of_days" class="ti-form-input conf_conducted_no_of_days_edit" required placeholder="No Of Days" value="<?php echo e($con->no_of_days); ?>">
                                                                                                        <div id="noofdaysError" class="error text-red-700"></div>
                                                                                                    </div>
                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                        <label for="" class="ti-form-label">Place:</label>
                                                                                                        <input type="text" name="ce_place" class="ti-form-input" placeholder="Place" value="<?php echo e($con->place); ?>">
                                                                                                        <div id="placeError" class="error text-red-700"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                        <label for="" class="ti-form-label">Publisher:</label>
                                                                                                        <input type="text" name="ce_publisher" class="ti-form-input" placeholder="Publisher" value="<?php echo e($con->publisher); ?>">
                                                                                                        <div id="publisherError" class="error text-red-700"></div>
                                                                                                    </div>
                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                        <label for="with-corner-hint" class="ti-form-label font-bold"> Role:<span class="text-red-500">*</span> </label>
                                                                                                        <select class="ti-form-select sponsored" name="ce_role" required>
                                                                                                                <option value="#">Choose the role</option>
                                                                                                                <option value="Convener" <?php echo e($con->role=='Convener'?'selected':''); ?>>convener</option>
                                                                                                                <option value="Co-convener" <?php echo e($con->role=='Co-convener'?'selected':''); ?>>Co-convener</option>
                                                                                                                <option value="Team Member" <?php echo e($con->role=='Team Member'?'selected':''); ?>>Team Member</option>
                                                                                                                <option value="Coordinator" <?php echo e($con->role=='Coordinator'?'selected':''); ?>>Coordinator</option>
                                                                                                            </select>
                                                                                                        <div id="roleError" class="error text-red-700"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                        <label for="" class="ti-form-label">Weblink:</label>
                                                                                                        <input type="url" name="ce_weblink" class="ti-form-input" placeholder="Weblink" value="<?php echo e($con->weblink); ?>">
                                                                                                        <div id="weblinkError" class="error text-red-700"></div>
                                                                                                    </div>
                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                        <label for="" class="ti-form-label font-bold">Type Of Level:<span class="text-red-500">*</span></label>
                                                                                                        <select class="ti-form-select" name="ce_type_of_level">
                                                                                                            <option value="#">Choose One</option>
                                                                                                            <option value="National" <?php echo e($con->type_of_level=='National'? 'selected':''); ?>>National</option>
                                                                                                            <option value="International" <?php echo e($con->type_of_level=='International'? 'selected':''); ?>>International</option>

                                                                                                        </select>
                                                                                                        <?php if($errors->has('ce_type_of_level')): ?>
                                                                                                                <div class="text-red-700"><?php echo e($errors->first('ce_type_of_level')); ?></div>
                                                                                                            <?php endif; ?>
                                                                                                        <div id="cc_typeoflevelError" class="error text-red-700"></div>
                                                                                                    </div>
                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                        <label for="" class="ti-form-label pt-4 font-bold">Document:<span class="text-red-500">* <?php echo e($con->document); ?></span></label>
                                                                                                        <span class="sr-only">Choose Profile photo</span>
                                                                                                            <input type="file" accept="application/pdf" name="document" class="block w-full text-sm text-gray-500 dark:text-white/70 focus:outline-0
                                                                                                            ltr:file:mr-4 rtl:file:ml-4 file:py-2 file:px-4
                                                                                                            file:rounded-sm file:border-0
                                                                                                            file:text-sm file:font-semibold
                                                                                                            file:bg-primary file:text-white
                                                                                                            hover:file:bg-primary focus-visible:outline-none doc" required value="<?php echo e($con->document); ?>">
                                                                                                            <?php if($errors->has('document')): ?>
                                                                                                                <div class="text-red-700"><?php echo e($errors->first('document')); ?></div>
                                                                                                            <?php endif; ?>
                                                                                                        <div id="docEditError" class="error text-red-700"></div>
                                                                                                    </div>
                                                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                        <input type="hidden" name="validation_status" value="updated">

                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="ti-modal-footer">
                                                                                                <button type="button"
                                                                                                class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                                data-hs-overlay="#conference_conducted_edit_modal<?php echo e($i); ?>">
                                                                                                Close
                                                                                                </button>

                                                                                                <input type="submit" class="ti-btn  bg-warning text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10" value="Update"/>

                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="hs-tooltip ti-main-tooltip">
                                                                            <form action="<?php echo e(route('Teaching.research.conferenceactivities.conducted.destroy',$con->id)); ?>" method="post">
                                                                            
                                                                                <button onclick="return confirm('Are you Sure')"
                                                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M7 4V2H17V4H22V6H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V6H2V4H7ZM6 6V20H18V6H6ZM9 9H11V17H9V9ZM13 9H15V17H13V9Z"></path></svg>
                                                                                        <?php echo method_field('delete'); ?>
                                                                                        <?php echo csrf_field(); ?>
                                                                                    <span
                                                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                        role="tooltip">
                                                                                        Delete
                                                                                    </span>
                                                                                </button>
                                                                            </form>
                                                                        </div>
                                                                    </td>
                                                                        <?php endif; ?>
                                                                </tr>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                                    
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End of Conference conducted details-->
                                    </div>
                                </div>
                            </div>
                        </div>
                             <!-- End::row-1 -->
                    </div>
                    <!-- End::main-content -->

                </div>




<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

        <!-- FLATPICKR JS -->
        <script src="<?php echo e(asset('build/assets/libs/flatpickr/flatpickr.min.js')); ?>"></script>

        <!-- CHOICES JS -->
        <script src="<?php echo e(asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')); ?>"></script>

         <!-- TABULATOR JS -->
         <script src="<?php echo e(asset('build/assets/libs/tabulator-tables/js/tabulator.min.js')); ?>"></script>

        <!-- FORM-LAYOUT JS -->
        <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/profile-settings.js'); ?>
        <!-- pro activity other sponsored code start-->
        <!-- Include the latest jQuery -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <!-- Include the latest DataTables -->
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
        <script>
            $(document).ready(function(){

                $('.sponsoredBy').change(function () {
                    if ($(this).val() === 'Other') {
                        $('.otherSponsor').show();
                    } else {
                        $('.otherSponsor').hide();
                    }


                    new DataTable('#conference_attended_table');
                    new DataTable('#conference_conducted_table');

                });



                //      //for calculating the no of days for Conference attended (Adding)
                //     $(document).on('change', '.conf_attended_to_date',function(){
                //             //alert('Date altered');

                //         var conf_attended_from_date = $('.conf_attended_from_date').val();
                //         var conf_attended_to_date = $('.conf_attended_to_date').val();
                //      // alert(attended_to_date+'-'+attended_from_date);
                //         if(conf_attended_from_date != ""){
                //             var startDay = new Date(conf_attended_from_date);
                //             var endDay = new Date(conf_attended_to_date);

                //             //alert(startDay+'-'+endDay);

                //             // Determine the time difference between two dates
                //             var millisBetween = endDay.getTime() - startDay.getTime();

                //             // Determine the number of days between two dates
                //             var days = millisBetween / (1000 * 3600 * 24);
                //             $('.conf_attended_no_of_days').val(days);
                //         }else{
                //             $('.conf_attended_from_date').focus();
                //             alert('Please fill the from date');
                //         }

                //         //alert(millisBetween);
                //     });


                // //for calculating the no of days for Conference attended (Editing)
                // $(document).on('change', '.conf_attended_to_date_edit',function(){
                //         //alert('Date altered');

                //     var conf_attended_from_date_edit = $('.conf_attended_from_date_edit').val();
                //     var conf_attended_to_date_edit = $('.conf_attended_to_date_edit').val();
                //     // alert(attended_to_date+'-'+attended_from_date);
                //     if(conf_attended_from_date_edit != ""){
                //         var startDay = new Date(conf_attended_from_date_edit);
                //         var endDay = new Date(conf_attended_to_date_edit);

                //         //alert(startDay+'-'+endDay);

                //         // Determine the time difference between two dates
                //         var millisBetween = endDay.getTime() - startDay.getTime();

                //         // Determine the number of days between two dates
                //         var days = millisBetween / (1000 * 3600 * 24);
                //         $('.conf_attended_no_of_days_edit').val(days);
                //     }else{
                //         $('.conf_attended_from_date_edit').focus();
                //         alert('Please fill the from date');
                //     }

                //     //alert(millisBetween);
                // });


                // //for calculating the no of days for Conference conducted (Adding)
                // $(document).on('change', '.conf_conducted_to_date',function(){
                //         //alert('Date altered');

                //     var conf_conducted_from_date = $('.conf_conducted_from_date').val();
                //     var conf_conducted_to_date = $('.conf_conducted_to_date').val();
                //     // alert(attended_to_date+'-'+attended_from_date);
                //     if(conf_conducted_from_date != ""){
                //         var startDay = new Date(conf_conducted_from_date);
                //         var endDay = new Date(conf_conducted_to_date);

                //         //alert(startDay+'-'+endDay);

                //         // Determine the time difference between two dates
                //         var millisBetween = endDay.getTime() - startDay.getTime();

                //         // Determine the number of days between two dates
                //         var days = millisBetween / (1000 * 3600 * 24);
                //         $('.conf_conducted_no_of_days').val(days);
                //     }else{
                //         $('.conf_conducted_from_date').focus();
                //         alert('Please fill the from date');
                //     }

                //     //alert(millisBetween);
                // });

                // //for calculating the no of days for Conference conducted (Editing)
                // $(document).on('change', '.conf_conducted_to_date_edit',function(){
                //         //alert('Date altered');

                //     var conf_conducted_from_date_edit = $('.conf_conducted_from_date_edit').val();
                //     var conf_conducted_to_date_edit = $('.conf_conducted_to_date_edit').val();
                // // alert(attended_to_date+'-'+attended_from_date);
                //     if(conf_conducted_from_date != ""){
                //         var startDay = new Date(conf_conducted_from_date_edit);
                //         var endDay = new Date(conf_conducted_to_date_edit);

                //         //alert(startDay+'-'+endDay);

                //         // Determine the time difference between two dates
                //         var millisBetween = endDay.getTime() - startDay.getTime();

                //         // Determine the number of days between two dates
                //         var days = millisBetween / (1000 * 3600 * 24);
                //         $('.conf_conducted_no_of_days_edit').val(days);
                //     }else{
                //         $('.conf_conducted_from_date_edit').focus();
                //         alert('Please fill the from date');
                //     }

                //     //alert(millisBetween);
                // });

                //for calculating the no of days for Conference activities attended (Adding)
                $(document).on('change', '.conf_attended_to_date',function(){
                                //alert('Date altered');

                            var conf_attended_from_date = $('.conf_attended_from_date').val();
                            var conf_attended_to_date = $('.conf_attended_to_date').val();
                        // alert(attended_to_date+'-'+attended_from_date);
                            if(conf_attended_to_date != ""){
                                if(conf_attended_from_date == conf_attended_to_date){
                                    $('.conf_attended_no_of_days').removeClass('border border-red-500 focus:border-blue-500');

                                    $('.conf_attended_no_of_days').val(1); // when both from date and to date are same, it means the no of days should be 1.

                                }else if(conf_attended_from_date > conf_attended_to_date){
                                    $('.conf_attended_no_of_days').val(0);
                                    $('.conf_attended_no_of_days').addClass('border border-red-500 focus:border-blue-500');
                                    $('.conf_attended_to_date').val();
                                    $('.conf_attended_to_date').focus();

                                }else{
                                    $('.conf_attended_no_of_days').removeClass('border border-red-500 focus:border-blue-500');
                                    var startDay = new Date(conf_attended_from_date);
                                    var endDay = new Date(conf_attended_to_date);


                                    // Determine the time difference between two dates
                                    var millisBetween = endDay.getTime() - startDay.getTime();

                                    // Determine the number of days between two dates
                                    var days = millisBetween / (1000 * 3600 * 24);
                                    var days=days+1; //for acurate no calculation.

                                    $('.conf_attended_no_of_days').val(days);
                                }
                            }else{
                                    $('.conf_attended_from_date').focus();
                                    alert('Please fill the from date');
                            }



                        });

                        ////////
                        ////////

                            //Calculating the no of days while Editing th entry
                        ///////
                        //for calculating the no of days for Research Conference activities attended (Editing)
                        $(document).on('change', '.conf_attended_to_date_edit',function(){
                                //alert('Date altered');

                            var conf_attended_from_date_edit = $('.conf_attended_from_date_edit').val();
                            var conf_attended_to_date_edit = $('.conf_attended_to_date_edit').val();
                        // alert(attended_to_date+'-'+attended_from_date);
                            if(conf_attended_from_date_edit != ""){
                                if(conf_attended_from_date_edit == conf_attended_to_date_edit){
                                    //when both dates are same , then no of days would be 1.
                                    $('.conf_attended_no_of_days_edit').removeClass('border border-red-500 focus:border-blue-500');

                                    $('.conf_attended_no_of_days_edit').val(1);
                                }else if(conf_attended_from_date_edit > conf_attended_to_date_edit){
                                    $('.conf_attended_no_of_days_edit').val(0);
                                    $('.conf_attended_no_of_days_edit').addClass('border border-red-500 focus:border-blue-500');
                                    $('.conf_attended_to_date_edit').val();
                                    $('.conf_attended_to_date_edit').focus();
                                    //$('.no_of_days_attended_edit').val(days);
                                }else{
                                    $('.conf_attended_no_of_days_edit').removeClass('border border-red-500 focus:border-blue-500');

                                    var startDay = new Date(conf_attended_from_date_edit);
                                    var endDay = new Date(conf_attended_to_date_edit);

                                    //alert(startDay+'-'+endDay);

                                    // Determine the time difference between two dates
                                    var millisBetween = endDay.getTime() - startDay.getTime();

                                    // Determine the number of days between two dates
                                    var days = millisBetween / (1000 * 3600 * 24);
                                    days =  days+1;
                                    $('.conf_attended_no_of_days_edit').val(days);
                                }


                            }else{
                                $('.conf_attended_from_date_edit').focus();
                                alert('Please fill the from date');
                            }

                            //alert(millisBetween);



                        });


                        //for calculating the no of days for Conference activities Conducted (Adding)
                        $(document).on('change', '.conf_conducted_to_date',function(){
                            //alert('Date altered');

                            var conf_conducted_from_date = $('.conf_conducted_from_date').val();
                            var conf_conducted_to_date = $('.conf_conducted_to_date').val();
                            // alert(attended_to_date+'-'+attended_from_date);
                            if(conf_conducted_to_date != ""){
                                if(conf_conducted_from_date == conf_conducted_to_date){
                                    $('.conf_conducted_no_of_days').removeClass('border border-red-500 focus:border-blue-500');

                                    $('.conf_conducted_no_of_days').val(1); // when both from date and to date are same, it means the no of days should be 1.

                                }else if(conf_conducted_from_date > conf_conducted_to_date){
                                    $('.conf_conducted_no_of_days').val(0);
                                    $('.conf_conducted_no_of_days').addClass('border border-red-500 focus:border-blue-500');
                                    $('.conf_conducted_to_date').val();
                                    $('.conf_conducted_to_date').focus();

                                }else{
                                    $('.conf_conducted_no_of_days').removeClass('border border-red-500 focus:border-blue-500');
                                    var startDay = new Date(conf_conducted_from_date);
                                    var endDay = new Date(conf_conducted_to_date);


                                    // Determine the time difference between two dates
                                    var millisBetween = endDay.getTime() - startDay.getTime();

                                    // Determine the number of days between two dates
                                    var days = millisBetween / (1000 * 3600 * 24);
                                    var days=days+1; //for acurate no calculation.

                                    $('.conf_conducted_no_of_days').val(days);
                                }
                            }
                            else{
                                    $('.conf_conducted_from_date').focus();
                                    alert('Please fill the from date');
                                }


                        });

                        ////////
                        ////////

                            //Calculating the no of days while Editing th entry
                        ///////
                        //for calculating the no of days for Research Conference activities Conducted (Editing)
                        $(document).on('change', '.conf_conducted_to_date_edit',function(){
                                //alert('Date altered');

                            var conf_conducted_from_date_edit = $('.conf_conducted_from_date_edit').val();
                            var conf_conducted_to_date_edit = $('.conf_conducted_to_date_edit').val();
                            // alert(attended_to_date+'-'+attended_from_date);
                            if(conf_conducted_from_date_edit != ""){
                                if(conf_conducted_from_date_edit == conf_conducted_to_date_edit){
                                    //when both dates are same , then no of days would be 1.
                                    $('.conf_conducted_no_of_days_edit').removeClass('border border-red-500 focus:border-blue-500');

                                    $('.conf_conducted_no_of_days_edit').val(1);
                                }else if(conf_conducted_from_date_edit > conf_conducted_to_date_edit){
                                    $('.conf_conducted_no_of_days_edit').val(0);
                                    $('.conf_conducted_no_of_days_edit').addClass('border border-red-500 focus:border-blue-500');
                                    $('.conf_conducted_to_date_edit').val();
                                    $('.conf_conducted_to_date_edit').focus();
                                    //$('.no_of_days_attended_edit').val(days);
                                }else{
                                    $('.conf_conducted_no_of_days_edit').removeClass('border border-red-500 focus:border-blue-500');

                                    var startDay = new Date(conf_conducted_from_date_edit);
                                    var endDay = new Date(conf_conducted_to_date_edit);

                                    //alert(startDay+'-'+endDay);

                                    // Determine the time difference between two dates
                                    var millisBetween = endDay.getTime() - startDay.getTime();

                                    // Determine the number of days between two dates
                                    var days = millisBetween / (1000 * 3600 * 24);
                                    days =  days+1;
                                    $('.conf_conducted_no_of_days_edit').val(days);
                                }


                            }else{
                                $('.conf_conducted_from_date_edit').focus();
                                alert('Please fill the from date');
                            }

                            //alert(millisBetween);



                        });




                    $(document).on('change','.book_chapter_type',function(){
                    //   alert('changed');
                            if($(this).val() == "Book"){
                                //if books
                                $('.chapter_title').hide();
                                $('.start_page_no').hide();
                                $('.end_page_no').hide();

                            }else{
                                //if chapters
                                $('.chapter_title').show();
                                $('.start_page_no').show();
                                $('.end_page_no').show();
                            }
                    });




                    //profeesional activity attented
                     $(document).on('change','.sponsor_type_attended',function(){
                    //   alert('changed');
                            if($(this).val() == "Yes"){
                                //if yes
                                $('.sponsored_by').show();


                            }else{
                                //if no
                                $('.sponsored_by').hide();
                                $('.otherSponsor').hide();
                                $('.amount').hide();

                            }
                    });


                      //profeesional activity Conducted
                    $(document).on('change','.sponsor_type',function(){
                        //   alert('changed');
                            if($(this).val() == "Yes"){
                                //if yes
                                $('.sponsoring_agency').show();


                            }else{
                                //if no
                                $('.sponsoring_agency').hide();

                            }
                    });

                    //Validation for Conference Activity Attended
                    new DataTable('#conference_attended_table');

                    $(document).on('click','.conference_attended_edit_modal_click',function(){
                        //var
                        var modal_no = $(this).attr("btn-val");

                        //alert($(this).find('.caste_edit_modal_no').val());
                        $('.modal_no').val(modal_no);
                    });

                    //Validation for Conference Activity Conducted
                    new DataTable('#conference_conducted_table');

                    $(document).on('click','.conference_conducted_edit_modal_click',function(){
                        //var
                        var modal_no = $(this).attr("btn-val");

                        //alert($(this).find('.caste_edit_modal_no').val());
                        $('.modal_no').val(modal_no);
                    });








                    //Conference Activity Attended Validation
                    function isValidUrl(url) {
                        var urlRegex = /^(https?|ftp):\/\/[^\s/$.?#].[^\s]*$/;
                        return urlRegex.test(url);
                    }
                    $(document).on('click','#conference_attended_add_btn',function(e){
                        //alert('123')

                        var con_att_conference_name = $('#con_att_conference_name').val();
                        var con_att_attended_as = $('#con_att_attended_as').val();
                        var con_att_from_date = $('#con_att_from_date').val();
                        var con_att_to_date = $('#con_att_to_date').val();
                        var con_att_no_ofdays = $('#con_att_no_ofdays').val();
                        var con_att_title = $('#con_att_title').val();
                        var con_att_place = $('#con_att_place').val();
                        var con_att_sponsored = $('#con_att_sponsored').val();
                        var con_att_sponsoredby = $('#con_att_sponsoredby').val();
                        var con_att_other_sponsored = $('#con_att_other_sponsored').val();
                        var con_att_amount = $('#con_att_amount').val();
                        var cont_att_weblink = $('#cont_att_weblink').val();
                        var con_att_typeoflevel = $('#con_att_typeoflevel').val();
                        var con_att_issn_number = $('#con_att_issn_number').val();
                        var conf_att_document = $('#conf_att_document').val();



                        var flag = false;

                        //alert(con_att_conference_name + '-' + con_att_attended_as + '-' + con_att_from_date + '-' + con_att_to_date + '-' + con_att_no_ofdays + '-' + con_att_title + '-' + con_att_place + '-' + con_att_sponsored + '-' + con_att_sponsoredby + '-' + con_att_other_sponsored + '-' + con_att_amount + '-' + cont_att_weblink);

                        if(con_att_conference_name == ''){
                            $('#con_att_conferenceNameError').text('Conference Name is missing');
                            flag = true;
                        }else if (!/^[a-zA-Z\s]+$/.test(con_att_conference_name.trim())){
                            $('#con_att_conferenceNameError').text('Please fill the correct value');
                            flag = true;
                        }
                        if(con_att_attended_as == '#'){
                            $('#con_att_attendedasError').text('Please Choose a correct Option');
                            flag = true;
                        }
                        if(con_att_from_date.trim() === ''){
                            $('#con_att_fromdateError').text('Please Select a proper date');
                            flag = true;
                        }

                        if(con_att_to_date.trim() === ''){
                            $('#con_att_todateError').text('Please Select a proper date');
                            flag = true;
                        }
                        if(con_att_no_ofdays <= 0){
                            $('#con_att_noofdaysError').text('Choose a proper from date and to date.');
                            flag = true;
                        }

                        // if (con_att_title === '') {
                        //     $('#con_att_titleError').text('Title Name is missing');
                        //     flag = true;
                        // } else if (!/^[a-zA-Z0-9\s,./]*$/.test(con_att_title.trim())) {
                        //     $('#con_att_titleError').text('Please fill in the correct value');
                        //     flag = true;
                        // }

                        if (con_att_title.trim() === '') {
                            $('#con_att_titleError').text('Title Name is missing');
                            flag = true;
                        } else if (!/^[\w\s\/.,]+$/.test(con_att_title.trim())) {
                            $('#con_att_titleError').text('Please fill in the correct value');
                            flag = true;
                        }




                        if(con_att_place == ''){
                            $('#con_att_palceError').text('Place Name is missing');
                            flag = true;
                        }else if (!/^[a-zA-Z\s]+$/.test(con_att_place.trim())){
                            $('#con_att_palceError').text('Please fill the correct value');
                            flag = true;
                        }
                        if(con_att_sponsored == '#'){
                            $('#con_att_sponsoredError').text('Please Choose a correct option');
                            flag = true;
                        }


                        if (con_att_sponsoredby !== '#' && con_att_sponsoredby !== '') {

                        }

                        if (con_att_other_sponsored !== '') {
                            if (!/^[a-zA-Z\s]+$/.test(con_att_other_sponsored.trim())) {
                                $('#con_att_othersponsoredError').text('Please fill the correct value');
                                flag = true;
                            }
                        }

                        if (con_att_amount.trim() !== '') {
                            if (!/^\d+$/.test(con_att_amount.trim())) {
                                $('#con_att_amountError').text('Please fill a valid numeric value');
                                flag = true;
                            }

                        } else {
                            // The field is optional and empty, no validation needed
                        }

                        if (cont_att_weblink.trim() !== '') {
                            if (!isValidUrl(cont_att_weblink)) {
                                $('#con_att_weblinkError').text('Please enter a valid web link');
                                flag = true;
                            }

                        } else {
                            // The field is optional and empty, no validation
                        }
                        if(con_att_typeoflevel == '#'){
                            $('#con_att_typeoflevelError').text('Please Choose a correct Option');
                            flag = true;
                        }
                        if(conf_att_document[0].files.length === 0){
                            //alert('file not choosen');
                            $('#pro_att_documentError').text('Please choose a file');
                            flag = true;
                        }

                        //code for make optional issn number
                        if (con_att_issn_number.trim() !== '') {
                            if (!/^\d{4}-\d{4}(\d{1}|[Xx]{1})$/.test(con_att_issn_number.trim()))
                            {
                                $('#con_att_issnnumberError').text('Please enter a valid ISSN Number');
                                flag = true;
                            }
                        }

                        if(flag == true){
                            e.preventDefault();
                        }

                    });




                    function isValidUrl(url) {
                        var urlRegex = /^(https?|ftp):\/\/[^\s/$.?#].[^\s]*$/;
                        return urlRegex.test(url);
                    }


                    //Validation for conference conducted
                    $(document).on('click','#conference_conducted_add_btn',function(e){
                        //alert('123')

                        var con_cond_conference_name = $('#con_cond_conference_name').val();
                        var con_cond_co_organizer = $('#con_cond_co_organizer').val();
                        var con_cond_no_ofparticipants = $('#con_cond_no_ofparticipants').val();
                        var con_cond_sponsored = $('#con_cond_sponsored').val();
                        var con_cond_sponsoring_agency = $('#con_cond_sponsoring_agency').val();
                        var con_cond_from_date = $('#con_cond_from_date').val();
                        var con_cond_to_date = $('#con_cond_to_date').val();
                        var con_cond_no_ofdays = $('#con_cond_no_ofdays').val();
                        var con_cond_place = $('#con_cond_place').val();
                        var con_cond_publisher = $('#con_cond_publisher').val();
                        var con_cond_role = $('#con_cond_role').val();
                        var con_cond_weblink = $('#con_cond_weblink').val();
                        var cc_typeof_level = $("#cc_typeof_level").val();
                        var cc_issn_no = $('#cc_issn_no').val();
                        var con_cond_document = $('$con_cond_document').val();

                        var flag = false;

                        //alert('');
                        if(con_cond_conference_name == ''){
                            $('#con_cond_conferenceNameError').text('Conference Name is missing');
                            flag = true;
                        }else if (!/^[a-zA-Z\s]+$/.test(con_cond_conference_name.trim())){
                            $('#con_cond_conferenceNameError').text('Please fill the correct value');
                            flag = true;
                        }
                        if(con_cond_co_organizer == ''){
                            $('#con_cond_coorganizerError').text('Organizer Name is missing');
                            flag = true;
                        }else if (!/^[a-zA-Z\s]+$/.test(con_cond_co_organizer.trim())){
                            $('#con_cond_coorganizerError').text('Please fill the correct value');
                            flag = true;
                        }
                        if(con_cond_no_ofparticipants == ''){
                            $('#con_cond_participantError').text('No Of Participant is missing');
                            flag = true;
                        }else if (!/^\d+$/.test(con_cond_no_ofparticipants.trim())){
                            $('#con_cond_participantError').text('Please fill the correct value');
                            flag = true;
                        }
                        if(con_cond_sponsored == '#'){
                            $('#con_cond_sponsoredError').text('Please Choose a correct option');
                            flag = true;
                        }
                        //if(con_cond_sponsoring_agency == ''){
                            //$('#con_cond_sponsoragencyError').text('Organizer Name is missing');
                            //flag = true;
                        // }else if (!/^[a-zA-Z\s]+$/.test(con_cond_sponsoring_agency.trim())){
                            //$('#con_cond_sponsoragencyError').text('Please fill the correct value');
                            //flag = true;
                        // }
                        if(con_cond_from_date.trim() === ''){
                            $('#con_cond_fromdateError').text('Please Select a proper date');
                            flag = true;
                        }

                        if(con_cond_to_date.trim() === ''){
                            $('#con_cond_todateError').text('Please Select a proper date');
                            flag = true;
                        }
                        if(con_cond_no_ofdays <= 0){
                            $('#con_cond_noofError').text('Choose a proper from date and to date.');
                            flag = true;
                        }
                        if(con_cond_place == ''){
                            $('#con_cond_placeError').text('Place Name is missing');
                            flag = true;
                        }else if (!/^[a-zA-Z\s]+$/.test(con_cond_place.trim())){
                            $('#con_cond_placeError').text('Please fill the correct value');
                            flag = true;
                        }
                        if(con_cond_publisher == ''){
                            $('#con_cond_publisherError').text('Publisher Name is missing');
                            flag = true;
                        }else if (!/^[a-zA-Z\s]+$/.test(con_cond_publisher.trim())){
                            $('#con_cond_publisherError').text('Please fill the correct value');
                            flag = true;
                        }
                        if(con_cond_role =='#'){
                            $('#con_cond_roleError').text('Please Choose a correct option.');
                            flag = true;
                        }


                        if (con_cond_weblink.trim() !== '') {
                            if (!isValidUrl(con_cond_weblink)) {
                                $('#con_cond_weblinkError').text('Please enter a valid web link');
                                flag = true;
                            }

                        } else {
                            // The field is optional and empty, no validation
                        }

                        if(cc_typeof_level =='#'){
                            $('#cc_typeoflevelError').text('Please Choose a correct option.');
                            flag = true;
                        }


                        //code for make optional issn number
                        if (cc_issn_no.trim() !== '') {
                            if (!/^\d{4}-\d{4}(\d{1}|[Xx]{1})$/.test(cc_issn_no.trim()))
                            {
                                $('#con_issn_noError').text('Please enter a valid ISSN Number');
                                flag = true;
                            }
                        }


                        //if(con_cond_document[0].files.length === 0){
                            //alert('file not choosen');
                            //$('#con_cond_documentError').text('Please choose a file');
                            //flag = true;
                       // }


                        if(flag == true){
                            e.preventDefault();
                        }

                    });

                      //Export to Exceel conference attended
                        $('#exportToExcel').on('click', function () {
                            var table = $('#conference_attended_table').clone();

                            table.find('td:last-child').remove();

                            table.find('thead tr th:last-child').remove();

                            // Remove any colspan attributes from table cells
                            table.find('td').removeAttr('colspan');

                            // Ensure each cell has proper formatting
                            table.find('td').css({
                                'border': '1px solid #000',
                                'padding': '5px'
                            });

                            // Create a Blob containing the modified table data
                            var blob = new Blob([table[0].outerHTML], { type: 'application/vnd.ms-excel;charset=utf-8' });

                            // Check for Internet Explorer and Edge
                            if (window.navigator && window.navigator.msSaveOrOpenBlob) {
                                window.navigator.msSaveOrOpenBlob(blob, 'conferenceattended_data.xls');
                            } else {
                                var link = $('<a>', {
                                    href: URL.createObjectURL(blob),
                                    download: 'conferenceattended_data.xls'
                                });

                                // Trigger the click to download
                                link[0].click();
                            }
                        });

                         //Export to Exceel conference conducted
                        $('#conduct_exportToExcel').on('click', function () {
                            var table = $('#conference_conducted_table').clone();

                            table.find('td:last-child').remove();

                            table.find('thead tr th:last-child').remove();

                            // Remove any colspan attributes from table cells
                            table.find('td').removeAttr('colspan');

                            // Ensure each cell has proper formatting
                            table.find('td').css({
                                'border': '1px solid #000',
                                'padding': '5px'
                            });

                            // Create a Blob containing the modified table data
                            var blob = new Blob([table[0].outerHTML], { type: 'application/vnd.ms-excel;charset=utf-8' });

                            // Check for Internet Explorer and Edge
                            if (window.navigator && window.navigator.msSaveOrOpenBlob) {
                                window.navigator.msSaveOrOpenBlob(blob, 'conferenceconducted_data.xls');
                            } else {
                                var link = $('<a>', {
                                    href: URL.createObjectURL(blob),
                                    download: 'conferenceconducted_data.xls'
                                });

                                // Trigger the click to download
                                link[0].click();
                            }
                        });
            });





        </script>






<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.components.staff.master-teaching', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laravel Apps\gitoffice\resources\views/Staff/Teaching/research/conferenceactivities.blade.php ENDPATH**/ ?>