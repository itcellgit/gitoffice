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
                                <div class="box-header">
                                    
                                </div>

                                <div class="box-body pt-0">


                                    <div class="mt-3">
                                        <!--Start of publications details-->
                                            <div class="box border-0 shadow-none mb-0">
                                                <div class="box-header">
                                                    <h5 class="box-title leading-none flex"><i class="ri ri-global-line ltr:mr-2 rtl:ml-2"></i>Journal Publications</h5>
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
                                                    <button id="publication_btn" data-hs-overlay="#add_publicaitons" class="hs-dropdown-toggle ti-btn ti-btn-primary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M17 19H19V11H13V19H15V13H17V19ZM3 19V4C3 3.44772 3.44772 3 4 3H18C18.5523 3 19 3.44772 19 4V9H21V19H22V21H2V19H3ZM7 11V13H9V11H7ZM7 15V17H9V15H7ZM7 7V9H9V7H7Z" fill="rgba(255,255,255,1)"></path></svg>
                                                            Add Journal Publication
                                                    </button>
                                                    <div id="add_publicaitons" class="hs-overlay hidden ti-modal">
                                                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                            <div class="ti-modal-content">
                                                                <div class="ti-modal-header">
                                                                    <h3 class="ti-modal-title">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                            Add New Journal Publication<span class="text-red-400">
                                                                    </h3>
                                                                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                        data-hs-overlay="#add_publicaitons">
                                                                        <span class="sr-only">Close</span>
                                                                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                            d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                            fill="currentColor" />
                                                                        </svg>
                                                                    </button>
                                                                    <?php if(($errors->has('level'))||($errors->has('other_level'))||($errors->has('title'))||($errors->has('date'))||($errors->has('journal'))||($errors->has('publication_type'))||($errors->has('link'))||($errors->has('doi_number'))||($errors->has('role'))||($errors->has('document'))): ?>

                                                                        <script>
                                                                            //alert('Errror is set');
                                                                            $(window).on('load', function() {
                                                                                //if($('#horizontal-alignment-item-2').parent().find('.active')){
                                                                                    //alert('Its active');
                                                                                    //alert(614);
                                                                                    //$('#pills-with-brand-color-2').trigger('click');
                                                                                    //alert('conducted clicked');
                                                                                    $('#publication_btn').trigger("click");

                                                                            });
                                                                        </script>
                                                                    <?php endif; ?>
                                                                </div>
                                                                <form  action="<?php echo e(route('Teaching.research.publications.store')); ?>" method="post" enctype="multipart/form-data">
                                                                    <?php echo csrf_field(); ?>
                                                                    <div class="ti-modal-body">
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="with-corner-hint" class="ti-form-label font-bold"> Level :<span class="text-red-500">*</span> </label>
                                                                                <select class="ti-form-select level pub_level" name="level"  id="pub_level">
                                                                                    <option value="#">Choose Level</option>
                                                                                    <option value="Q1" <?php echo e(old('level') == 'Q1' ? 'selected' : ''); ?>>Q1</option>
                                                                                    <option value="Q2" <?php echo e(old('level') == 'Q2' ? 'selected' : ''); ?>>Q2</option>
                                                                                    <option value="Q3" <?php echo e(old('level') == 'Q3' ? 'selected' : ''); ?>>Q3</option>
                                                                                    <option value="Q4" <?php echo e(old('level') == 'Q4' ? 'selected' : ''); ?>>Q4</option>
                                                                                    <option value="SCI" <?php echo e(old('level') == 'SCI' ? 'selected' : ''); ?>>SCI</option>
                                                                                    <option value="Web of Science" <?php echo e(old('level') == 'Web of Science' ? 'selected' : ''); ?>>Web of Science</option>
                                                                                    <option value="Scopus Indexed" <?php echo e(old('level') == 'Scopus Indexed' ? 'selected' : ''); ?>>Scopus Indexed</option>
                                                                                    <option value="UGC General" <?php echo e(old('level') == 'UGC General' ? 'selected' : ''); ?>>UGC General</option>
                                                                                    <option value="Other" <?php echo e(old('level') == 'Other' ? 'selected' : ''); ?>>Other</option>
                                                                                </select>
                                                                                <?php if($errors->has('level')): ?>
                                                                                    <div class="text-red-700"><?php echo e($errors->first('level')); ?></div>
                                                                                <?php endif; ?>
                                                                                <div id="pub_levelError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6" id="pub_other_level">
                                                                                <label for="" class="ti-form-label font-bold">Other Level:</label>
                                                                                <input type="text" name="other_level" class="ti-form-input" placeholder="Other Level" id="pub_otherlevel" value="<?php echo e(old('other_level')); ?>">
                                                                                <?php if($errors->has('other_level')): ?>
                                                                                    <div class="text-red-700"><?php echo e($errors->first('other_level')); ?></div>
                                                                                <?php endif; ?>
                                                                                <div id="pub_other_levelError" class="error text-red-700"></div>
                                                                            </div>

                                                                        </div>
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Title :<span class="text-red-500">*</span></label>
                                                                                <input type="text" name="title" class="ti-form-input" placeholder="Title" id="pub_title" value="<?php echo e(old('title')); ?>">
                                                                                 <?php if($errors->has('title')): ?>
                                                                                     <div class="text-red-700"><?php echo e($errors->first('title')); ?></div>
                                                                                 <?php endif; ?>
                                                                                <div id="pub_titleError" class="error text-red-700"></div>
                                                                            </div>

                                                                            <div class="flex max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Date of Publication:<span class="text-red-500">*</span></label>
                                                                                    <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                        <span class="text-sm text-gray-500 dark:text-white/70"><i class="ri ri-calendar-line"></i></span>
                                                                                    </div>

                                                                                    <input type="date" name="date" id="pub_dateofpublication"
                                                                                            class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date conf_attended_from_date"
                                                                                              placeholder="Choose date" value="<?php echo e(old('date')); ?>">
                                                                                    <?php if($errors->has('date')): ?>
                                                                                         <div class="text-red-700"><?php echo e($errors->first('date')); ?></div>
                                                                                     <?php endif; ?>
                                                                                    <div id="pub_dateofpublicatonError" class="error text-red-700"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Journal:<span class="text-red-500">*</span></label>
                                                                                <input type="text" name="journal" class="ti-form-input"  placeholder="Journal" id="pub_journal" value="<?php echo e(old('journal')); ?>">
                                                                                 <?php if($errors->has('journal')): ?>
                                                                                    <div class="text-red-700"><?php echo e($errors->first('journal')); ?></div>
                                                                                <?php endif; ?>
                                                                                <div id="pub_journalError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Publication Type:<span class="text-red-500">*</span></label>
                                                                                <select class="ti-form-select" name="publication_type" id="pubtype">
                                                                                    <option value="#">Choose One</option>
                                                                                    <option value="Journal" <?php echo e(old('publication_type') == 'Journal' ? 'selected' : ''); ?>>Journal</option>
                                                                                    <option value="Conference Proceeding" <?php echo e(old('publication_type') == 'Conference Proceeding' ? 'selected' : ''); ?>>Conference Proceeding</option>
                                                                                </select>
                                                                                <?php if($errors->has('publication_typeError')): ?>
                                                                                        <div class="text-red-700"><?php echo e($errors->first('publication_typeError')); ?></div>
                                                                                    <?php endif; ?>
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">DOI Number:<span class="text-red-500">*</span></label>
                                                                                <input type="text" name="doi_number" class="ti-form-input" required placeholder="Doi Number" id="pub_doi_number" value="<?php echo e(old('doi_number')); ?>">
                                                                                    <?php if($errors->has('doi_number')): ?>
                                                                                    <div class="text-red-700"><?php echo e($errors->first('doi_number')); ?></div>
                                                                                <?php endif; ?>
                                                                                <div id="pub_doi_numberError" class="error text-red-700"></div>
                                                                            </div>

                                                                        </div>
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">

                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Link:</label>
                                                                                <input type="url" id="pub_link" name="link" class="ti-form-input" placeholder="Link Should Be http://www." value="<?php echo e(old('link')); ?>">
                                                                                    <?php if($errors->has('link')): ?>
                                                                                         <div class="text-red-700"><?php echo e($errors->first('link')); ?></div>
                                                                                     <?php endif; ?>
                                                                                     <div id="pub_linkError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Author Role:<span class="text-red-500">*</span></label>
                                                                                <select class="ti-form-select role" name="role" id="pub_authorrole">
                                                                                    <option value="#">Choose One</option>
                                                                                    <option value="Author" <?php echo e(old('role') == 'Author' ? 'selected' : ''); ?>>Author</option>
                                                                                    <option value="Co-Author" <?php echo e(old('role') == 'Co-Author' ? 'selected' : ''); ?>>Co-Author</option>
                                                                                    <option value="Corresponding-Author" <?php echo e(old('role') == 'Corresponding-Author' ? 'selected' : ''); ?>>Corresponding-Author</option>
                                                                                </select>
                                                                                <?php if($errors->has('role')): ?>
                                                                                        <div class="text-red-700"><?php echo e($errors->first('role')); ?></div>
                                                                                    <?php endif; ?>
                                                                                <div id="pub_authorroleError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                <div class="max-w-sm space-y-3 pb-6">
                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                        <label for="" class="ti-form-label pt-4 font-bold">Document:<span class="text-red-500">*Only PDF files up to 500 KB in size are accepted.</span></label>
                                                                                        <span class="sr-only">Choose Profile photo</span>
                                                                                            <input type="file" accept="application/pdf" name="document" id="pub_document" class="block w-full text-sm text-gray-500 dark:text-white/70 focus:outline-0
                                                                                            ltr:file:mr-4 rtl:file:ml-4 file:py-2 file:px-4
                                                                                            file:rounded-sm file:border-0
                                                                                            file:text-sm file:font-semibold
                                                                                            file:bg-primary file:text-white
                                                                                            hover:file:bg-primary focus-visible:outline-none doc" required value="">
                                                                                            <?php if($errors->has('document')): ?>
                                                                                                <div class="text-red-700"><?php echo e($errors->first('document')); ?></div>
                                                                                            <?php endif; ?>
                                                                                        <div id="pub_documentError" class="error text-red-700"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="ti-modal-footer">
                                                                        <button type="button"
                                                                            class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                            data-hs-overlay="#add_publicaitons">
                                                                            Close
                                                                        </button>

                                                                        <input type="submit" id="publication_add_btn" class="ti-btn  bg-primary text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10" value="Add"/>

                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
                                                            <div class="flex justify-end mt-4">
                                                                <button id="exportToExcel" class="bg-green-500 text-white px-4 py-2 rounded-md focus:outline-none hover:bg-green-600">Export to Excel</button>
                                                            </div>
                                                            <table id="publication_table"class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                                <thead class="bg-gray-50 dark:bg-black/20">
                                                                    <tr class="">
                                                                        <th scope="col" class="dark:text-white/80 font-bold">S.No</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">E-Gov ID</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Journal Level</th>
                                                                         <th scope="col" class="dark:text-white/80 font-bold">Other Level</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Paper Title</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Date of Publication</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Name of the Journal</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Publication Type</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">DOI Number</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Web Link of the Publication</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Role of the Author</th>
                                                                        
                                                                        <?php if(!isset($export) || !$export): ?>
                                                                            <th scope="col" class="dark:text-white/80 font-bold ">Action</th>
                                                                        <?php endif; ?>
                                                                    </tr>
                                                                </thead>
                                                                <?php
                                                                    $i=1;
                                                                ?>
                                                                <tbody class="">
                                                                    <?php if($staff->publications!=null): ?>
                                                                        <?php $__empty_1 = true; $__currentLoopData = $staff->publications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                                            
                                                                            <tr style="<?php if($pub->validation_status =='invalid'): ?> background-color: #ffcccc; <?php elseif($pub->validation_status =='updated'): ?> background-color: #fff2cc; <?php elseif($pub->validation_status =='valid'): ?> background-color: #ccffcc; <?php endif; ?>">

                                                                                <td><span><?php echo e($i++); ?></span></td>
                                                                                
                                                                                <td>
                                                                                    <a href="https://git.edu/storage/Uploads/Research/Publications/<?php echo e($pub->document); ?>" class="text-blue-500">
                                                                                        <span><?php echo e($pub->egov_id); ?></span>
                                                                                    </a>
                                                                                </td>
                                                                                <td><span><?php echo e($pub->level); ?></span></td>
                                                                                <td>
                                                                                    <span>
                                                                                        <?php if(in_array($pub->level, ['Q1', 'Q2', 'Q3', 'Q4', 'SCI', 'Web of Science', 'Scopus Indexed', 'UGC General'])): ?>
                                                                                            --NA--
                                                                                        <?php else: ?>
                                                                                            <?php echo e($pub->other_level); ?>

                                                                                        <?php endif; ?>
                                                                                    </span>
                                                                                </td>
                                                                                
                                                                                <td><span><?php echo e($pub->title); ?></span></td>
                                                                                <td><span><?php echo e(\Carbon\Carbon::parse($pub->date)->format('d-M-Y')); ?></span></td>
                                                                                <td><span><?php echo e($pub->journal); ?></span></td>
                                                                                <td><span><?php echo e($pub->publication_type); ?></span></td>

                                                                                <td><span><?php echo e($pub->doi_number); ?></span></td>
                                                                                <td><span><?php echo e($pub->link); ?></span></td>
                                                                                <td><span><?php echo e($pub->role); ?></span></td>
                                                                                
                                                                                <?php if(!isset($export) || !$export): ?>
                                                                                    <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                                                         <!--Reason Modal start-->
                                                                                        <?php if ($pub->validation_status === 'invalid'): ?>
                                                                                            <div class="hs-tooltip ti-main-tooltip text-center">
                                                                                                <button data-hs-overlay="#reason_view_modal<?php echo e($i); ?>"
                                                                                                        class="hs-dropdown-toggle m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M14 14.252V16.3414C13.3744 16.1203 12.7013 16 12 16C8.68629 16 6 18.6863 6 22H4C4 17.5817 7.58172 14 12 14C12.6906 14 13.3608 14.0875 14 14.252ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11ZM19 17.5858L21.1213 15.4645L22.5355 16.8787L20.4142 19L22.5355 21.1213L21.1213 22.5355L19 20.4142L16.8787 22.5355L15.4645 21.1213L17.5858 19L15.4645 16.8787L16.8787 15.4645L19 17.5858Z"></path></svg>
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
                                                                                                                    Reason Details of Publication
                                                                                                                </h3>
                                                                                                                <button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#reason_view_modal<?php echo e($i); ?>">
                                                                                                                    <span class="sr-only">Close</span>
                                                                                                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                                                        <path d="M14 14.252V16.3414C13.3744 16.1203 12.7013 16 12 16C8.68629 16 6 18.6863 6 22H4C4 17.5817 7.58172 14 12 14C12.6906 14 13.3608 14.0875 14 14.252ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11ZM19 17.5858L21.1213 15.4645L22.5355 16.8787L20.4142 19L22.5355 21.1213L21.1213 22.5355L19 20.4142L16.8787 22.5355L15.4645 21.1213L17.5858 19L15.4645 16.8787L16.8787 15.4645L19 17.5858Z"></path></svg>

                                                                                                                </button>
                                                                                                            </div>
                                                                                                            <div class="ti-modal-body">
                                                                                                                <div class="ti-form-label font-bold">Reason:</div>
                                                                                                                <div><?php echo e($pub->reason); ?></div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        <?php endif; ?>
                                                                                        <!--reason modal ends-->
                                                                                        <div class="hs-tooltip ti-main-tooltip">
                                                                                            <a  href="<?php echo e(Storage::url('Uploads/Research/Publications/' . $pub->document)); ?>" class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary" target="_blank" <?php echo e($pub->document); ?>>
                                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12.0003 3C17.3924 3 21.8784 6.87976 22.8189 12C21.8784 17.1202 17.3924 21 12.0003 21C6.60812 21 2.12215 17.1202 1.18164 12C2.12215 6.87976 6.60812 3 12.0003 3ZM12.0003 19C16.2359 19 19.8603 16.052 20.7777 12C19.8603 7.94803 16.2359 5 12.0003 5C7.7646 5 4.14022 7.94803 3.22278 12C4.14022 16.052 7.7646 19 12.0003 19ZM12.0003 16.5C9.51498 16.5 7.50026 14.4853 7.50026 12C7.50026 9.51472 9.51498 7.5 12.0003 7.5C14.4855 7.5 16.5003 9.51472 16.5003 12C16.5003 14.4853 14.4855 16.5 12.0003 16.5ZM12.0003 14.5C13.381 14.5 14.5003 13.3807 14.5003 12C14.5003 10.6193 13.381 9.5 12.0003 9.5C10.6196 9.5 9.50026 10.6193 9.50026 12C9.50026 13.3807 10.6196 14.5 12.0003 14.5Z"></path></svg>
                                                                                                <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm" role="tooltip">
                                                                                                View Document
                                                                                                </span>
                                                                                            </a>
                                                                                        </div>

                                                                                        <div class="hs-tooltip ti-main-tooltip">
                                                                                            <button data-hs-overlay="#publication_edit_modal<?php echo e($i); ?>"  id="btn<?php echo e($i); ?>" btn-val=<?php echo e($i); ?>

                                                                                                class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary publication_edit_modal_click">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                                    <span
                                                                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                                        role="tooltip">
                                                                                                        Edit
                                                                                                    </span>
                                                                                            </button>


                                                                                            <div id="publication_edit_modal<?php echo e($i); ?>" class="hs-overlay hidden ti-modal">
                                                                                                <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                                                                    <div class="ti-modal-content">
                                                                                                        <div class="ti-modal-header">
                                                                                                            <h3 class="ti-modal-title">
                                                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                                                Edit Journal Publication
                                                                                                            </h3>
                                                                                                            <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                                                                    data-hs-overlay="#publication_edit_modal<?php echo e($i); ?>">
                                                                                                                <span class="sr-only">Close</span>
                                                                                                                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                                    <path
                                                                                                                        d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                                                        fill="currentColor" />
                                                                                                                </svg>
                                                                                                            </button>
                                                                                                            <?php if((($errors->has('e_level'))||($errors->has('e_other_level'))||($errors->has('e_title'))||($errors->has('e_date'))||($errors->has('e_journal'))||($errors->has('e_publication_type'))||($errors->has('e_link'))||($errors->has('e_role'))||($errors->has('e_doi_number'))||($errors->has('document')))): ?>
                                                                                                                <script>
                                                                                                                    window.onload=function(){
                                                                                                                    //alert('123');
                                                                                                                        document.getElementById('btn'+<?php echo e(old('modal_no')); ?>).click();

                                                                                                                    };

                                                                                                                </script>
                                                                                                            <?php endif; ?>
                                                                                                        </div>
                                                                                                        <form action="<?php echo e(route('Teaching.research.publications.update',$pub->id)); ?>" enctype="multipart/form-data" method="post">
                                                                                                                <?php echo csrf_field(); ?>
                                                                                                            <?php echo method_field('patch'); ?>
                                                                                                            <div class="ti-modal-body">
                                                                                                                <input type='hidden' name='modal_no' class='modal_no' value=<?php echo e(old('modal_no')); ?>/>

                                                                                                                <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="with-corner-hint" class="ti-form-label font-bold"> Level : <span class="text-red-500">*</span></label>
                                                                                                                        <select class="ti-form-select level pub_level" name="e_level" id="pub_level" >
                                                                                                                            <option value="#">Choose Level</option>
                                                                                                                            <option value="Q1" <?php echo e($pub->level=='Q1'? 'selected':''); ?>>Q1</option>
                                                                                                                            <option value="Q2"  <?php echo e($pub->level=='Q2'? 'selected':''); ?>>Q2</option>
                                                                                                                            <option value="Q3"  <?php echo e($pub->level=='Q3'? 'selected':''); ?>>Q3</option>
                                                                                                                            <option value="Q4"  <?php echo e($pub->level=='Q4'? 'selected':''); ?>>Q4</option>
                                                                                                                            <option value="SCI"  <?php echo e($pub->level=='SCI'? 'selected':''); ?>>SCI</option>
                                                                                                                            <option value="Web of Science"  <?php echo e($pub->level=='Web of Science'? 'selected':''); ?>>Web of Science</option>
                                                                                                                            <option value="Scopus Indexed" <?php echo e($pub->level=='Scopus Indexed'? 'selected':''); ?>>Scopus Indexed</option>
                                                                                                                            <option value="UGC General" <?php echo e($pub->level=='UGC General'? 'selected':''); ?>>UGC General</option>
                                                                                                                            <option value="Other" <?php echo e($pub->level=='Other'? 'selected':''); ?>>Other</option>
                                                                                                                        </select>
                                                                                                                        <?php if($errors->has('e_level')): ?>
                                                                                                                            <div class="text-red-700"><?php echo e($errors->first('e_level')); ?></div>
                                                                                                                        <?php endif; ?>

                                                                                                                    </div>
                                                                                                                    <div class="max-w-sm space-y-3 pb-6" id="pub_other_level" >
                                                                                                                        <label for="" class="ti-form-label font-bold">Other Level:</label>
                                                                                                                        <input type="text" name="e_other_level" class="ti-form-input" placeholder="Other Level" value="<?php echo e($pub->other_level); ?>">
                                                                                                                        <?php if($errors->has('other_level')): ?>
                                                                                                                            <div class="text-red-700"><?php echo e($errors->first('other_level')); ?></div>
                                                                                                                        <?php endif; ?>
                                                                                                                        <div id="pub_other_levelError" class="error text-red-700"></div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="" class="ti-form-label font-bold">Title :<span class="text-red-500">*</span></label>
                                                                                                                        <input type="text" name="e_title" class="ti-form-input" required placeholder=" Title" value="<?php echo e($pub->title); ?>">
                                                                                                                            <?php if($errors->has('e_title')): ?>
                                                                                                                                <div class="text-red-700"><?php echo e($errors->first('e_title')); ?></div>
                                                                                                                            <?php endif; ?>

                                                                                                                    </div>
                                                                                                                    <div class="flex max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="" class="ti-form-label font-bold">Date :<span class="text-red-500">*</span></label>
                                                                                                                        <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                                            <span class="text-sm text-gray-500 dark:text-white/70">
                                                                                                                                <i class="ri ri-calendar-line"></i></span>
                                                                                                                        </div>
                                                                                                                        <input type="date" name="e_date"
                                                                                                                                class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date conf_attended_from_date"
                                                                                                                                    required placeholder="Choose date" value="<?php echo e($pub->date); ?>" >
                                                                                                                            <?php if($errors->has('e_date')): ?>
                                                                                                                                <div class="text-red-700"><?php echo e($errors->first('e_date')); ?></div>
                                                                                                                        <?php endif; ?>
                                                                                                                    </div>

                                                                                                                </div>
                                                                                                                <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                                            <label for="" class="ti-form-label font-bold">Journal:<span class="text-red-500">*</span></label>
                                                                                                                            <input type="text" name="e_journal" class="ti-form-input" required placeholder="Journal" value="<?php echo e($pub->journal); ?>">
                                                                                                                            <?php if($errors->has('e_journal')): ?>
                                                                                                                                <div class="text-red-700"><?php echo e($errors->first('e_journal')); ?></div>
                                                                                                                            <?php endif; ?>
                                                                                                                    </div>
                                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="" class="ti-form-label font-bold">Publication Type:<span class="text-red-500">*</span></label>
                                                                                                                        <select class="ti-form-select role" name="e_publication_type">
                                                                                                                            <option value="#">Choose One</option>
                                                                                                                            <option value="Journal" <?php echo e($pub->publication_type=='Journal'? 'selected': ''); ?>>Journal</option>
                                                                                                                            <option value="Conference Proceeding" <?php echo e($pub->publication_type=='Conference Proceeding'?'selected':''); ?>>Conference Proceeding</option>


                                                                                                                        </select>
                                                                                                                        <?php if($errors->has('e_publication_type')): ?>
                                                                                                                            <div class="text-red-700"><?php echo e($errors->first('e_publication_type')); ?></div>
                                                                                                                        <?php endif; ?>

                                                                                                                    </div>
                                                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="" class="ti-form-label font-bold">DOI Number:<span class="text-red-500">*</span></label>
                                                                                                                        <input type="text" name="e_doi_number" class="ti-form-input" placeholder="Doi Number" id="pub_doi_number" value="<?php echo e($pub->doi_number); ?>">
                                                                                                                            <?php if($errors->has('e_doi_number')): ?>
                                                                                                                            <div class="text-red-700"><?php echo e($errors->first('e_doi_number')); ?></div>
                                                                                                                        <?php endif; ?>
                                                                                                                        <div id="pub_doi_numberError" class="error text-red-700"></div>
                                                                                                                    </div>

                                                                                                                </div>
                                                                                                                <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="" class="ti-form-label font-bold">Link:</label>
                                                                                                                        <input type="url" name="e_link" class="ti-form-input" required placeholder="Link Should Be http://www." value="<?php echo e($pub->link); ?>">
                                                                                                                        <?php if($errors->has('e_link')): ?>
                                                                                                                                <div class="text-red-700"><?php echo e($errors->first('e_link')); ?></div>
                                                                                                                            <?php endif; ?>
                                                                                                                    </div>
                                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="" class="ti-form-label font-bold">Author Role:<span class="text-red-500">*</span></label>
                                                                                                                        <select class="ti-form-select role" name="e_role">
                                                                                                                            <option value="#">Choose One</option>
                                                                                                                            <option value="Author" <?php echo e($pub->role=='Author'? 'selected': ''); ?>>Author</option>
                                                                                                                            <option value="Co-Author" <?php echo e($pub->role=='Co-Author'?'selected':''); ?>>Co-Author</option>
                                                                                                                            <option value="Corresponding-Author" <?php echo e($pub->role=='Corresponding-Author'?'selected':''); ?>>Corresponding-Author</option>

                                                                                                                        </select>
                                                                                                                        <?php if($errors->has('e_role')): ?>
                                                                                                                            <div class="text-red-700"><?php echo e($errors->first('e_role')); ?></div>
                                                                                                                        <?php endif; ?>

                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="" class="ti-form-label pt-4 font-bold">Document:<span class="text-red-500">* <?php echo e($pub->document); ?></span></label>
                                                                                                                        <span class="sr-only">Choose Profile photo</span>
                                                                                                                            <input type="file" accept="application/pdf" name="document" class="block w-full text-sm text-gray-500 dark:text-white/70 focus:outline-0
                                                                                                                            ltr:file:mr-4 rtl:file:ml-4 file:py-2 file:px-4
                                                                                                                            file:rounded-sm file:border-0
                                                                                                                            file:text-sm file:font-semibold
                                                                                                                            file:bg-primary file:text-white
                                                                                                                            hover:file:bg-primary focus-visible:outline-none doc" required value="<?php echo e($pub->document); ?>">
                                                                                                                            <?php if($errors->has('document')): ?>
                                                                                                                                <div class="text-red-700"><?php echo e($errors->first('document')); ?></div>
                                                                                                                            <?php endif; ?>
                                                                                                                        <div id="docEditError" class="error text-red-700"></div>
                                                                                                                    </div>

                                                                                                                </div>
                                                                                                                <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                                   <input type="hidden" name="validation_status" value="updated">

                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="ti-modal-footer">
                                                                                                                <button type="button"
                                                                                                                    class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                                                    data-hs-overlay="#publication_edit_modal<?php echo e($i); ?>">
                                                                                                                    Close
                                                                                                                </button>

                                                                                                                <input type="submit" class="ti-btn  bg-primary text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10" value="Update"/>

                                                                                                            </div>
                                                                                                        </form>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="hs-tooltip ti-main-tooltip">
                                                                                            <form action="<?php echo e(route('Teaching.research.publications.destroy',$pub->id)); ?>" method="post">

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
                                        <!--end of publications-->
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

        <!-- Include jQuery library if not already included -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <!-- Include jQuery library (if not already included) -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

        <script>
            $(document).ready(function(){
                $('#pub_other_level').hide();
                $('#pub_level').change(function(){
                if($(this).val() == 'Other'){
                    $('#pub_other_level').show();
                } else {
                    $('#pub_other_level').hide();
                }

                });
            });
        </script>

        <script>
            $(document).ready(function(){


                    //Validation for publication

                    //alert('Hello from jquery');
                    new DataTable('#publication_table');

                    $(document).on('click','.publication_edit_modal_click',function(){
                        //var
                        var modal_no = $(this).attr("btn-val");

                        //alert($(this).find('.caste_edit_modal_no').val());
                        $('.modal_no').val(modal_no);
                    });

                    function isValidUrl(url) {
                        var urlRegex = /^(https?|ftp):\/\/[^\s/$.?#].[^\s]*$/;
                        return urlRegex.test(url);
                    }
                    // Validation for publication
                    $(document).on('click','#publication_add_btn',function(e){

                        var pub_level = $('#pub_level').val();
                        var pub_title = $('#pub_title').val();
                        var pub_dateofpublication = $('#pub_dateofpublication').val();
                        var pub_journal = $('#pub_journal').val();
                        var pub_link = $('#pub_link').val();
                        var pub_authorrole = $('#pub_authorrole').val();
                        var pub_otherlevel = $('#pub_otherlevel').val();
                        var pub_doi_number = $('#pub_doi_number').val();
                        var pub_document = $('#pub_document').val();
                        var pubtype = $('#pubtype').val();

                        var flag = false;



                        if(pubtype =='#'){
                            $('#publication_typeError').text('Please Choose a correct option.');
                            flag = true;
                        }
                        if(pub_level =='#'){
                            $('#pub_levelError').text('Please Choose a correct option.');
                            flag = true;
                        }
                        if (pub_otherlevel !== '') {
                            if (!/^[a-zA-Z0-9\s]*$/.test(pub_otherlevel.trim())) {
                                $('#pub_other_levelError').text('Please fill the correct value');
                                flag = true;
                            }
                        }

                        /////
                        if(pub_doi_number == ''){
                            $('#pub_doi_numberError').text('DOI Number is missing');
                            flag = true;
                        }else if (!/^[0-9a-zA-Z]*$/.test(pub_doi_number.trim())){
                            $('#pub_doi_numberError').text('Please fill the correct value');
                            flag = true;
                        }




                        ///

                        // if(pub_title == ''){
                        //     $('#pub_titleError').text('Title Name is missing');
                        //     flag = true;
                        // } else if (!/^[a-zA-Z\s0-9]*$/.test(pub_title.trim())) {
                        //     $('#pub_titleError').text('Please fill the correct value');
                        //     flag = true;
                        // }

                        if (pub_title.trim() === '') {
                            $('#pub_titleError').text('Title Name is missing');
                            flag = true;
                        } else if (!/^[\w\s\/.,]+$/.test(pub_title.trim())) {
                            $('#pub_titleError').text('Please fill the correct value');
                            flag = true;
                        }



                        if(pub_dateofpublication.trim() === ''){
                            $('#pub_dateofpublicatonError').text('Please Select a proper date');
                            flag = true;
                        }
                        if(pub_journal == ''){
                            $('#pub_journalError').text('Journal Name is missing');
                            flag = true;
                        }else if (!/^[a-zA-Z\s]+$/.test(pub_journal.trim())){
                            $('#pub_journalError').text('Please fill the correct value');
                            flag = true;
                        }
                        if(pub_authorrole =='#'){
                            $('#pub_authorroleError').text('Please Choose a correct option.');
                            flag = true;
                        }
                        if (pub_link == '') {
                            $('#pub_linkError').text('Web link is missing');
                            flag = true;
                        } else if (!isValidUrl(pub_link)) {
                            $('#pub_linkError').text('Please enter a valid web link');
                            flag = true;
                        }

                         if(pub_document[0].files.length === 0){
                            //alert('file not choosen');
                            $('#pub_documentError').text('Please choose a file');
                            flag = true;
                        }

                        if(flag == true){
                            e.preventDefault();
                        }

                    });


                    //export to Excel publication
                    $('#exportToExcel').on('click', function () {
                        var table = $('#publication_table').clone();

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
                            window.navigator.msSaveOrOpenBlob(blob, 'publication_data.xls');
                        } else {
                            var link = $('<a>', {
                                href: URL.createObjectURL(blob),
                                download: 'publication_data.xls'
                            });

                            // Trigger the click to download
                            link[0].click();
                        }
                    });



            });

            $(document).ready(function() {
                $("#levelButton").click(function() {
                    $("#levelOptions").toggle();
                });

                $("#levelOptions input[type=checkbox]").change(function() {
                    var selectedValues = [];
                    $("#levelOptions input[type=checkbox]:checked").each(function() {
                        selectedValues.push($(this).val());
                    });
                    $("#pub_level").val(selectedValues.join(","));
                });
            });

        </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.components.staff.master-teaching', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laravel Apps\gitoffice\resources\views/Staff/Teaching/research/publication.blade.php ENDPATH**/ ?>