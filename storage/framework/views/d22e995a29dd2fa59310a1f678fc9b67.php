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
                                    <nav class="-mb-0.5 flex justify-center space-x-6 rtl:space-x-reverse md:h-full md:w-48" aria-label="Tabs">
                                        
                                    </nav>

                                    <div class="mt-3">
                                        <!-- Start Books And Chapters -->
                                        
                                            <div class="box border-0 shadow-none mb-0">
                                                <div class="box-header">
                                                    <h5 class="box-title leading-none flex"><i class="ri ri-global-line ltr:mr-2 rtl:ml-2"></i>Books And Chapters</h5>
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
                                                    <button id="books_chapter_btn" data-hs-overlay="#add_book_chapter" class="hs-dropdown-toggle ti-btn ti-btn-primary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M17 19H19V11H13V19H15V13H17V19ZM3 19V4C3 3.44772 3.44772 3 4 3H18C18.5523 3 19 3.44772 19 4V9H21V19H22V21H2V19H3ZM7 11V13H9V11H7ZM7 15V17H9V15H7ZM7 7V9H9V7H7Z" fill="rgba(255,255,255,1)"></path></svg>
                                                            Add Books And Chapters
                                                    </button>
                                                    <div id="add_book_chapter" class="hs-overlay hidden ti-modal">
                                                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                            <div class="ti-modal-content">
                                                                <div class="ti-modal-header">
                                                                    <h3 class="ti-modal-title">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                            Add New Books And Chapters <span class="text-red-400">
                                                                    </h3>
                                                                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                        data-hs-overlay="#add_book_chapter">
                                                                        <span class="sr-only">Close</span>
                                                                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                            d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                            fill="currentColor" />
                                                                        </svg>
                                                                    </button>
                                                                      <?php if(($errors->has('bc_title'))||($errors->has('bc_publisher_name'))||($errors->has('bc_edition'))||($errors->has('bc_doi'))||($errors->has('bc_date'))||($errors->has('bc_issue'))||($errors->has('bc_type'))||($errors->has('bc_chapter_title'))||($errors->has('bc_start_page_no'))||($errors->has('bc_end_page_no'))||($errors->has('bc_book_level'))): ?>
                                                                                <script>
                                                                                    // alert(1);
                                                                                    $(window).on('load', function() {

                                                                                        $('#pills-with-brand-color-3').trigger('click');
                                                                                        //alert('conducted clicked');
                                                                                        $('#books_chapter_btn').trigger("click");

                                                                                    });
                                                                                </script>
                                                                        <?php endif; ?>
                                                                </div>
                                                                <form  action="<?php echo e(route('Teaching.research.bookchapaters.store')); ?>" method="post" enctype="multipart/form-data">
                                                                    <?php echo csrf_field(); ?>

                                                                    <div class="ti-modal-body">
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Title :<span class="text-red-500">*</span></label>
                                                                                <input type="text" name="bc_title" class="ti-form-input" required placeholder="Title" id="bp_title" value="<?php echo e(old('bc_title')); ?>">
                                                                                <?php if($errors->has('bc_title')): ?>
                                                                                    <div class="text-red-700"><?php echo e($errors->first('bc_title')); ?></div>
                                                                                 <?php endif; ?>
                                                                                <div id="bp_titleError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Book Level:<span class="text-red-500">*</span></label>
                                                                                <select class="ti-form-select" required name="bc_book_level" id="bp_book_level">
                                                                                    <option value="#">Choose One</option>
                                                                                    <option value="National" <?php echo e(old('bc_book_level') == 'National' ? 'selected' : ''); ?>>National</option>
                                                                                    <option value="International" <?php echo e(old('bc_book_level') == 'International' ? 'selected' : ''); ?>>International</option>
                                                                                </select>
                                                                                 <?php if($errors->has('bc_book_level')): ?>
                                                                                    <div class="text-red-700"><?php echo e($errors->first('bc_book_level')); ?></div>
                                                                                 <?php endif; ?>
                                                                                 <div id="bp_booklevelError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Publisher Name :<span class="text-red-500">*</span></label>
                                                                                <input type="text" name="bc_publisher_name" class="ti-form-input" required placeholder="Publisher Name" id="bp_publisher_name" value="<?php echo e(old('bc_publisher_name')); ?>">
                                                                                 <?php if($errors->has('bc_publisher_name')): ?>
                                                                                    <div class="text-red-700"><?php echo e($errors->first('bc_publisher_name')); ?></div>
                                                                                 <?php endif; ?>
                                                                                 <div id="bp_publishernameError" class="error text-red-700"></div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Edition:</label>
                                                                                <input type="text" name="bc_edition" class="ti-form-input" required placeholder="Edition" id="bp_edition" value="<?php echo e(old('bc_edition')); ?>">
                                                                                 <?php if($errors->has('bc_edition')): ?>
                                                                                    <div class="text-red-700"><?php echo e($errors->first('bc_edition')); ?></div>
                                                                                 <?php endif; ?>
                                                                                <div id="bp_editionError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">DOI Number:</label>
                                                                                <input type="text" name="bc_doi" class="ti-form-input" placeholder="DOI" id="bp_doi" value="<?php echo e(old('bc_doi')); ?>">
                                                                                 <?php if($errors->has('bc_doi')): ?>
                                                                                    <div class="text-red-700"><?php echo e($errors->first('bc_doi')); ?></div>
                                                                                 <?php endif; ?>
                                                                                <div id="bp_doiError" class="error text-red-700"></div>
                                                                            </div>

                                                                        </div>
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            <div class="flex max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Date:<span class="text-red-500">*</span></label>
                                                                                    <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                        <span class="text-sm text-gray-500 dark:text-white/70"><i class="ri ri-calendar-line"></i></span>
                                                                                    </div>

                                                                                    <input type="date" name="bc_date" id="bp_date"
                                                                                            class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                             required placeholder="Choose date" value="<?php echo e(old('bc_date')); ?>">
                                                                                 <?php if($errors->has('bc_date')): ?>
                                                                                        <div class="text-red-700"><?php echo e($errors->first('bc_date')); ?></div>
                                                                                 <?php endif; ?>
                                                                                 <div id="bp_dateError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Issue:</label>
                                                                                <input type="text" name="bc_issue" class="ti-form-input" required placeholder="Issue" id="bp_issue" value="<?php echo e(old('bc_issue')); ?>">
                                                                                 <?php if($errors->has('bc_issue')): ?>
                                                                                    <div class="text-red-700"><?php echo e($errors->first('bc_issue')); ?></div>
                                                                                 <?php endif; ?>
                                                                                 <div id="bp_issueError" class="error text-red-700"></div>
                                                                            </div>


                                                                        </div>
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Type:<span class="text-red-500">*</span></label>
                                                                                <select class="ti-form-select book_chapter_type" name="bc_type" required id="bp_type">
                                                                                    <option value="#">Choose One</option>
                                                                                    <option value="Book" <?php echo e(old('bc_type') == 'Book' ? 'selected' : ''); ?>>Book</option>
                                                                                    <option value="Chapter" <?php echo e(old('bc_type') == 'Chapter' ? 'selected' : ''); ?>>Chapter</option>
                                                                                </select>
                                                                                 <?php if($errors->has('bc_type')): ?>
                                                                                    <div class="text-red-700"><?php echo e($errors->first('bc_type')); ?></div>
                                                                                 <?php endif; ?>
                                                                                 <div id="bp_typeError" class="error text-red-700"></div>
                                                                            </div>
                                                                             <div class="max-w-sm space-y-3 pb-6 chapter_title">
                                                                                <label for="" class="ti-form-label font-bold">Chapter Title:</label>
                                                                                <input type="text" name="bc_chapter_title" class="ti-form-input"  placeholder="Chapter Title" id="bp_chapter_title" value="<?php echo e(old('bc_chapter_title')); ?>">
                                                                                <?php if($errors->has('bc_chapter_title')): ?>
                                                                                    <div class="text-red-700"><?php echo e($errors->first('bc_chapter_title')); ?></div>
                                                                                <?php endif; ?>
                                                                                <div id="bp_chaptertitleError" class="error text-red-700"></div>
                                                                            </div>


                                                                        </div>
                                                                        

                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            <div class="max-w-sm space-y-3 pb-6 start_page_no">
                                                                                <label for="" class="ti-form-label font-bold">Start Page No:</label>
                                                                                <input type="number" min="0" step="1" name="bc_start_page_no" class="ti-form-input"  placeholder="Start Page No" id="bp_start_page_no" value="<?php echo e(old('bc_start_page_no')); ?>">
                                                                                <?php if($errors->has('bc_start_page_no')): ?>
                                                                                    <div class="text-red-700"><?php echo e($errors->first('bc_start_page_no')); ?></div>
                                                                                <?php endif; ?>
                                                                                <div id="bp_startpagenoError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6 end_page_no">
                                                                                <label for="" class="ti-form-label font-bold">End Page No:</label>
                                                                                <input type="number" min="0" step="1" name="bc_end_page_no" class="ti-form-input"  placeholder="End Page No" id="bp_end_page_no" value="<?php echo e(old('bc_end_page_no')); ?>">
                                                                                <?php if($errors->has('bc_end_page_no')): ?>
                                                                                    <div class="text-red-700"><?php echo e($errors->first('bc_end_page_no')); ?></div>
                                                                                <?php endif; ?>
                                                                                <div id="bp_endpagenoError" class="error text-red-700"></div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <div class="max-w-sm space-y-3 pb-6">
                                                                                    <label for="" class="ti-form-label pt-4 font-bold">Document:<span class="text-red-500">*  Only PDF files up to 500 KB in size are accepted.</span></label>
                                                                                    <span class="sr-only">Choose Profile photo</span>
                                                                                        <input type="file" accept="application/pdf" name="document" id="book_document" class="block w-full text-sm text-gray-500 dark:text-white/70 focus:outline-0
                                                                                        ltr:file:mr-4 rtl:file:ml-4 file:py-2 file:px-4
                                                                                        file:rounded-sm file:border-0
                                                                                        file:text-sm file:font-semibold
                                                                                        file:bg-primary file:text-white
                                                                                        hover:file:bg-primary focus-visible:outline-none doc" required>
                                                                                        <?php if($errors->has('document')): ?>
                                                                                            <div class="text-red-700"><?php echo e($errors->first('document')); ?></div>
                                                                                        <?php endif; ?>
                                                                                    <div id="bookchap_documentError" class="error text-red-700"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ti-modal-footer">
                                                                        <button type="button"
                                                                            class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                            data-hs-overlay="#add_book_chapter">
                                                                            Close
                                                                        </button>

                                                                        <input type="submit" id="book_chapter_add_btn" class="ti-btn bg-primary text-white hover:bg-primary focus:ring-primary dark:focus:ring-offset-white/10" id="add" value="Add"/>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
                                                        <div class="flex justify-end mt-4">
                                                            <button id="exportToExcel" class="bg-green-500 text-white px-4 py-2 rounded-md focus:outline-none hover:bg-green-600">Export to Excel</button>
                                                        </div>
                                                        <table id="book_chapter_table" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                            <thead class="bg-gray-50 dark:bg-black/20">
                                                                <tr class="">
                                                                    <th scope="col" class="dark:text-white/80 font-bold">S NO</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">E-Gov ID</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">title</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Book Level</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Publisher Name</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Edition</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">DOI Number</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Date</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Issue</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Type</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Chapter Title</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Start Page No</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">End Page No</th>
                                                                    
                                                                    <?php if(!isset($export) || !$export): ?>
                                                                        <th scope="col" class="dark:text-white/80 font-bold ">Action</th>
                                                                    <?php endif; ?>
                                                                </tr>
                                                            </thead>
                                                            <?php
                                                                $i=1;
                                                            ?>
                                                            <tbody class="">
                                                                <?php if($staff->book_publications!=null): ?>
                                                                    <?php $__empty_1 = true; $__currentLoopData = $staff->book_publications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                                        
                                                                        <tr style="<?php if($book->validation_status =='invalid'): ?> background-color: #ffcccc; <?php elseif($book->validation_status =='updated'): ?> background-color: #fff2cc; <?php elseif($book->validation_status =='valid'): ?> background-color: #ccffcc; <?php endif; ?>">


                                                                            <td><span><?php echo e($i++); ?></span></td>
                                                                            
                                                                            <td>
                                                                                <a href="https://git.edu/storage/Uploads/Research/Book_Chapters/<?php echo e($book->document); ?>" class="text-blue-500">
                                                                                    <span><?php echo e($book->egov_id); ?></span>
                                                                                </a>
                                                                            </td>
                                                                            <td><span><?php echo e($book->title); ?></span></td>
                                                                            <td><span><?php echo e($book->book_level); ?></span></td>
                                                                            <td><span><?php echo e($book->publisher_name); ?></span></td>
                                                                            <td><span><?php echo e($book->edition); ?></span></td>
                                                                            <td><span><?php echo e($book->doi); ?></span></td>
                                                                            <td><span><?php echo e(\Carbon\Carbon::parse($book->date)->format('d-M-Y')); ?></span></td>
                                                                            <td><span><?php echo e($book->issue); ?></span></td>
                                                                            
                                                                            <td><span><?php echo e($book->type); ?></span></td>
                                                                            <td><span><?php echo e($book->type == 'Book' ? '--NA--' : $book->chapter_title); ?></span></td>
                                                                            <td><span><?php echo e($book->type == 'Book' ? '--NA--' : $book->start_page_no); ?></span></td>
                                                                            <td><span><?php echo e($book->type == 'Book' ? '--NA--' : $book->end_page_no); ?></span></td>
                                                                            

                                                                            <?php if(!isset($export) || !$export): ?>
                                                                            <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                                                 <!--modal Start Here-->
                                                                                <?php if ($book->validation_status === 'invalid'): ?>
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
                                                                                                            Reason Details of Book and Chapter
                                                                                                        </h3>
                                                                                                        <button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#reason_view_modal<?php echo e($i); ?>">
                                                                                                            <span class="sr-only">Close</span>
                                                                                                            <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                                                
                                                                                                                <path d="M14 14.252V16.3414C13.3744 16.1203 12.7013 16 12 16C8.68629 16 6 18.6863 6 22H4C4 17.5817 7.58172 14 12 14C12.6906 14 13.3608 14.0875 14 14.252ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11ZM19 17.5858L21.1213 15.4645L22.5355 16.8787L20.4142 19L22.5355 21.1213L21.1213 22.5355L19 20.4142L16.8787 22.5355L15.4645 21.1213L17.5858 19L15.4645 16.8787L16.8787 15.4645L19 17.5858Z"></path></svg>


                                                                                                        </button>
                                                                                                    </div>
                                                                                                    <div class="ti-modal-body">
                                                                                                        <div class="ti-form-label font-bold">Reason:</div>
                                                                                                        <div><?php echo e($book->reason); ?></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                <?php endif; ?>
                                                                                <!--Modal Ends Here-->
                                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                                    <a  href="<?php echo e(Storage::url('Uploads/Research/Book_Chapters/' . $book->document)); ?>" class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary" target="_blank" <?php echo e($book->document); ?>>
                                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12.0003 3C17.3924 3 21.8784 6.87976 22.8189 12C21.8784 17.1202 17.3924 21 12.0003 21C6.60812 21 2.12215 17.1202 1.18164 12C2.12215 6.87976 6.60812 3 12.0003 3ZM12.0003 19C16.2359 19 19.8603 16.052 20.7777 12C19.8603 7.94803 16.2359 5 12.0003 5C7.7646 5 4.14022 7.94803 3.22278 12C4.14022 16.052 7.7646 19 12.0003 19ZM12.0003 16.5C9.51498 16.5 7.50026 14.4853 7.50026 12C7.50026 9.51472 9.51498 7.5 12.0003 7.5C14.4855 7.5 16.5003 9.51472 16.5003 12C16.5003 14.4853 14.4855 16.5 12.0003 16.5ZM12.0003 14.5C13.381 14.5 14.5003 13.3807 14.5003 12C14.5003 10.6193 13.381 9.5 12.0003 9.5C10.6196 9.5 9.50026 10.6193 9.50026 12C9.50026 13.3807 10.6196 14.5 12.0003 14.5Z"></path></svg>
                                                                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm" role="tooltip">
                                                                                        View Document
                                                                                        </span>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                                    <button data-hs-overlay="#book_edit_modal<?php echo e($i); ?>"  id="btn<?php echo e($i); ?>" btn-val=<?php echo e($i); ?>

                                                                                        class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary book_edit_modal_click">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                            <span
                                                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                                role="tooltip">
                                                                                                Edit
                                                                                            </span>
                                                                                    </button>


                                                                                    <div id="book_edit_modal<?php echo e($i); ?>" class="hs-overlay hidden ti-modal">
                                                                                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                                                            <div class="ti-modal-content">
                                                                                                <div class="ti-modal-header">
                                                                                                    <h3 class="ti-modal-title">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                                        Edit Books And Chapters
                                                                                                    </h3>
                                                                                                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                                                        data-hs-overlay="#book_edit_modal<?php echo e($i); ?>">
                                                                                                        <span class="sr-only">Close</span>
                                                                                                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                                            <path
                                                                                                            d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                                            fill="currentColor" />
                                                                                                        </svg>
                                                                                                    </button>
                                                                                                        <?php if(($errors->has('ebc_title'))||($errors->has('ebc_publisher_name'))||($errors->has('ebc_edition'))||($errors->has('ebc_doi'))||($errors->has('ebc_date'))||($errors->has('ebc_issue'))||($errors->has('ebc_type'))||($errors->has('ebc_chapter_title'))||($errors->has('ebc_start_page_no'))||($errors->has('ebc_end_page_no'))||($errors->has('ebc_book_level'))): ?>
                                                                                                        <script>
                                                                                                                window.onload=function(){
                                                                                                            //alert('123');
                                                                                                            //alert(899);
                                                                                                            // document.getElementById('btn'+<?php echo e(old('modal_no')); ?>).click();

                                                                                                        };

                                                                                                        </script>
                                                                                                    <?php endif; ?>
                                                                                                </div>
                                                                                                <form  action="<?php echo e(route('Teaching.research.bookchapaters.update',$book->id)); ?>" method="post" enctype="multipart/form-data">
                                                                                                    <?php echo csrf_field(); ?>
                                                                                                    <?php echo method_field('patch'); ?>
                                                                                                    <div class="ti-modal-body">
                                                                                                        <input type='hidden' name='book_edit_modal' class='book_edit_modal_no' value=<?php echo e(old('book_edit_modal_no')); ?>/>
                                                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                                <label for="" class="ti-form-label font-bold">Title :<span class="text-red-500">*</span></label>
                                                                                                                <input type="text" name="ebc_title" class="ti-form-input" required placeholder="Title" value="<?php echo e($book->title); ?>">
                                                                                                                    <?php if($errors->has('ebc_title')): ?>
                                                                                                                    <div class="text-red-700"><?php echo e($errors->first('ebc_title')); ?></div>
                                                                                                                <?php endif; ?>

                                                                                                            </div>
                                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                                <label for="" class="ti-form-label font-bold">Book Level:<span class="text-red-500">*</span></label>
                                                                                                                <select class="ti-form-select edit_bp_book_level" required name="ebc_book_level">
                                                                                                                    <option value="#">Choose One</option>
                                                                                                                    <option value="National" <?php echo e($book->book_level=='National'? 'selected':''); ?>>National</option>
                                                                                                                    <option value="International" <?php echo e($book->book_level=='International'? 'selected':''); ?>>International</option>
                                                                                                                </select>
                                                                                                                <?php if($errors->has('ebcbook_level')): ?>
                                                                                                                    <div class="text-red-700"><?php echo e($errors->first('ebcbook_level')); ?></div>
                                                                                                                <?php endif; ?>
                                                                                                                <div id="bp_booklevelError" class="error text-red-700"></div>
                                                                                                            </div>
                                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                                <label for="" class="ti-form-label font-bold">Publisher Name :<span class="text-red-500">*</span></label>
                                                                                                                <input type="text" name="ebc_publisher_name" class="ti-form-input" required placeholder="Publisher Name" value="<?php echo e($book->publisher_name); ?>">
                                                                                                                    <?php if($errors->has('ebc_publisher_name')): ?>
                                                                                                                    <div class="text-red-700"><?php echo e($errors->first('ebc_publisher_name')); ?></div>
                                                                                                                <?php endif; ?>

                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                                <label for="" class="ti-form-label font-bold">Edition:</label>
                                                                                                                <input type="text" name="ebc_edition" class="ti-form-input" required placeholder="Edition" value="<?php echo e($book->edition); ?>">
                                                                                                                    <?php if($errors->has('ebc_edition')): ?>
                                                                                                                    <div class="text-red-700"><?php echo e($errors->first('ebc_edition')); ?></div>
                                                                                                                <?php endif; ?>
                                                                                                            </div>
                                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                                <label for="" class="ti-form-label font-bold">DOI:</label>
                                                                                                                <input type="text" name="ebc_doi" class="ti-form-input" required placeholder="DOI" value="<?php echo e($book->doi); ?>">
                                                                                                                    <?php if($errors->has('ebc_doi')): ?>
                                                                                                                    <div class="text-red-700"><?php echo e($errors->first('ebc_doi')); ?></div>
                                                                                                                <?php endif; ?>
                                                                                                            </div>

                                                                                                        </div>
                                                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                            <div class="flex max-w-sm space-y-3 pb-6">
                                                                                                                <label for="" class="ti-form-label font-bold">Date:<span class="text-red-500">*</span></label>
                                                                                                                    <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                                        <span class="text-sm text-gray-500 dark:text-white/70"><i class="ri ri-calendar-line"></i></span>
                                                                                                                    </div>

                                                                                                                    <input type="date" name="ebc_date"
                                                                                                                            class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                                                                required placeholder="Choose date" value="<?php echo e($book->date); ?>">
                                                                                                                <?php if($errors->has('ebc_date')): ?>
                                                                                                                    <div class="text-red-700"><?php echo e($errors->first('ebc_date')); ?></div>
                                                                                                                <?php endif; ?>
                                                                                                            </div>
                                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                                <label for="" class="ti-form-label font-bold">Issue:</label>
                                                                                                                <input type="text" name="ebc_issue" class="ti-form-input" required placeholder="Issue" value="<?php echo e($book->issue); ?>">
                                                                                                                    <?php if($errors->has('ebc_issue')): ?>
                                                                                                                    <div class="text-red-700"><?php echo e($errors->first('ebc_issue')); ?></div>
                                                                                                                <?php endif; ?>
                                                                                                            </div>


                                                                                                        </div>
                                                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                                <label for="" class="ti-form-label font-bold">Type:<span class="text-red-500">*</span></label>
                                                                                                                <select class="ti-form-select book_chapter_type" name="ebc_type">
                                                                                                                    <option value="#">Choose One</option>
                                                                                                                    <option value="Book" <?php echo e($book->type=='Book'?'selected': ''); ?>>Book</option>
                                                                                                                    <option value="Chapter" <?php echo e($book->type=='Chapter'?'selected':''); ?>>Chapter</option>
                                                                                                                    <?php if($errors->has('ebc_type')): ?>
                                                                                                                    <div class="text-red-700"><?php echo e($errors->first('ebc_type')); ?></div>
                                                                                                                <?php endif; ?>
                                                                                                                </select>
                                                                                                            </div>
                                                                                                            <div class="max-w-sm space-y-3 pb-6 chapter_title">
                                                                                                                <label for="" class="ti-form-label font-bold">Chapter Title:</label>
                                                                                                                <input type="text" name="ebc_chapter_title" class="ti-form-input"  placeholder="Chapter Title" value="<?php echo e($book->chapter_title); ?>">
                                                                                                                    <?php if($errors->has('ebc_chapter_title')): ?>
                                                                                                                    <div class="text-red-700"><?php echo e($errors->first('ebc_chapter_title')); ?></div>
                                                                                                                <?php endif; ?>
                                                                                                            </div>


                                                                                                        </div>
                                                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                            <div class="max-w-sm space-y-3 pb-6 start_page_no">
                                                                                                                <label for="" class="ti-form-label font-bold">Start Page No:</label>
                                                                                                                <input type="number" min="0" step="1" name="ebc_start_page_no" class="ti-form-input"  placeholder="Start Page No" value="<?php echo e($book->start_page_no); ?>">
                                                                                                                <?php if($errors->has('ebc_start_page_no')): ?>
                                                                                                                    <div class="text-red-700"><?php echo e($errors->first('ebc_start_page_no')); ?></div>
                                                                                                                <?php endif; ?>

                                                                                                            </div>
                                                                                                            <div class="max-w-sm space-y-3 pb-6 end_page_no">
                                                                                                                <label for="" class="ti-form-label font-bold">End Page No:</label>
                                                                                                                <input type="number" min="0" step="1" name="ebc_end_page_no" class="ti-form-input"  placeholder="End Page No" value="<?php echo e($book->end_page_no); ?>">
                                                                                                                <?php if($errors->has('ebc_end_page_no')): ?>
                                                                                                                    <div class="text-red-700"><?php echo e($errors->first('ebc_end_page_no')); ?></div>
                                                                                                                <?php endif; ?>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                                <div class="max-w-sm space-y-3 pb-6">
                                                                                                                    <label for="" class="ti-form-label pt-4 font-bold">Document:<span class="text-red-500">* <?php echo e($book->document); ?></span></label>
                                                                                                                    <span class="sr-only">Choose Profile photo</span>
                                                                                                                        <input type="file" accept="application/pdf" name="document" class="block w-full text-sm text-gray-500 dark:text-white/70 focus:outline-0
                                                                                                                        ltr:file:mr-4 rtl:file:ml-4 file:py-2 file:px-4
                                                                                                                        file:rounded-sm file:border-0
                                                                                                                        file:text-sm file:font-semibold
                                                                                                                        file:bg-primary file:text-white
                                                                                                                        hover:file:bg-primary focus-visible:outline-none edit_book_chap_document doc" required value="<?php echo e($book->document); ?>">
                                                                                                                        <?php if($errors->has('document')): ?>
                                                                                                                            <div class="text-red-700"><?php echo e($errors->first('document')); ?></div>
                                                                                                                        <?php endif; ?>
                                                                                                                    <div id="book_chap_documentError" class="error text-red-700"></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                           <input type="hidden" name="validation_status" value="updated">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="ti-modal-footer">
                                                                                                        <button type="button"
                                                                                                            class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                                            data-hs-overlay="#book_edit_modal<?php echo e($i); ?>">
                                                                                                            Close
                                                                                                        </button>

                                                                                                        <input type="submit" class="ti-btn bg-primary text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10" value="Update"/>

                                                                                                    </div>
                                                                                                </form>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                                    <form action="<?php echo e(route('Teaching.research.bookchapaters.destroy',$book->id)); ?>" method="post">

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

                                        
                                        <!-- End Books And Chapters -->
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

                $('#bp_start_page_no, #bp_end_page_no').on('input', function(){
                    var startPageNo = parseInt($('#bp_start_page_no').val());
                    var endPageNo = parseInt($('#bp_end_page_no').val());

                    // Check if End Page No is less than or equal to Start Page No
                    if (endPageNo <= startPageNo) {

                        $('#bp_endpagenoError').text('End Page No must be greater than Start Page No');

                        $('#book_chapter_add_btn').prop('disabled', true);
                    } else {

                        $('#bp_endpagenoError').text('');

                        $('#book_chapter_add_btn').prop('disabled', false);
                    }
                });



                $('.sponsoredBy').change(function () {
                    if ($(this).val() === 'Other') {
                        $('.otherSponsor').show();
                    } else {
                        $('.otherSponsor').hide();
                    }

                    new DataTable('#book_chapter_table');
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

                    //Validation for books and chapters

                //alert('Hello from jquery');
                new DataTable('#book_chapter_table');

                $(document).on('click','.book_edit_modal_click',function(){
                    //var
                    var modal_no = $(this).attr("btn-val");

                    //alert($(this).find('.caste_edit_modal_no').val());
                    $('.modal_no').val(modal_no);
                });

                // Validation for Books And Publications
                $(document).on('click','#book_chapter_add_btn',function(e){

                    var bp_title = $('#bp_title').val();
                    var bp_publisher_name = $('#bp_publisher_name').val();
                    var bp_edition = $('#bp_edition').val();
                    var bp_doi = $('#bp_doi').val();
                    var bp_date = $('#bp_date').val();
                    var bp_issue = $('#bp_issue').val();
                    var bp_type = $('#bp_type').val();
                    var bp_chapter_title = $('#bp_chapter_title').val();
                    var bp_start_page_no = $('#bp_start_page_no').val();
                    var bp_end_page_no = $('#bp_end_page_no').val();
                    var bp_book_level = $('#bp_book_level').val();
                    var book_document = $('#book_document')[0].files[0];

                    var flag = false;

                    if (!book_document) {
                        $('#bookchap_documentError').text('Please choose a file');
                        flag = true;
                    }

                    // if(bp_title == ''){
                    //     $('#bp_titleError').text('Title Name is missing');
                    //     flag = true;
                    // } else if (!/^[a-zA-Z\s0-9]*$/.test(bp_title.trim())) {
                    //     $('#bp_titleError').text('Please fill the correct value');
                    //     flag = true;
                    // }



                    if (bp_title.trim() === '') {
                        $('#bp_titleError').text('Title Name is missing');
                        flag = true;
                    } else if (!/^[\w\s\/.,]+$/.test(bp_title.trim())) {
                        $('#bp_titleError').text('Please fill the correct value');
                        flag = true;
                    }



                    if(bp_book_level =='#'){
                        $('#bp_booklevelError').text('Please Choose a correct option.');
                        flag = true;
                    }
                    if(bp_publisher_name == ''){
                        $('#bp_publishernameError').text('Publisher Name is missing');
                        flag = true;
                    }else if (!/^[a-zA-Z\s]+$/.test(bp_publisher_name.trim())){
                        $('#bp_publishernameError').text('Please fill the correct value');
                        flag = true;
                    }
                    if(bp_edition == ''){
                        $('#bp_editionError').text('Edition is missing');
                        flag = true;
                    }else if (!/^[a-zA-Z0-9\s]+$/.test(bp_edition.trim())){
                        $('#bp_editionError').text('Please fill the correct value');
                        flag = true;
                    }
                    if(bp_date.trim() === ''){
                        $('#bp_dateError').text('Please Select a proper date');
                        flag = true;
                    }
                    if (bp_doi !== '') {
                        if (!/^[0-9a-zA-Z]*$/.test(bp_doi.trim())) {
                            $('#bp_doiError').text('Please fill with alphanumeric characters');
                        }

                    } else {
                        // The field is optional and empty, no validation need
                    }
                        if(bp_issue == ''){
                        $('#bp_issueError').text('Issue Name is missing');
                        flag = true;
                    }else if (!/^[a-zA-Z\s]+$/.test(bp_issue.trim())){
                        $('#bp_issueError').text('Please fill the correct value');
                        flag = true;
                    }
                    if(bp_type =='#'){
                        $('#bp_typeError').text('Please Choose a correct option.');
                        flag = true;
                    }


                    if (bp_chapter_title !== '') {
                        if (!/^[\w\s\/.,]+$/.test(bp_chapter_title.trim())) {
                            $('#bp_chaptertitleError').text('Please fill the correct value');
                            flag = true;
                        }
                    }

                    if (bp_start_page_no !== '') {
                        if (!/^\d+$/.test(bp_start_page_no.trim())) {
                            $('#bp_startpagenoError').text('Please fill the correct value (Only Number)');
                            flag = true;
                        }
                    }

                    if (bp_end_page_no !== '') {
                        if (!/^\d+$/.test(bp_end_page_no.trim())) {
                            $('#bp_endpagenoError').text('Please fill the correct value (Only Number)');
                            flag = true;
                        }
                    }


                    if(flag == true){
                        e.preventDefault();
                    }


                });
                 //Export to Excel books_chapters
                $('#exportToExcel').on('click', function () {
                    var table = $('#book_chapter_table').clone();

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


                    if (window.navigator && window.navigator.msSaveOrOpenBlob) {
                        window.navigator.msSaveOrOpenBlob(blob, 'book_chapter_data.xls');
                    } else {
                        var link = $('<a>', {
                            href: URL.createObjectURL(blob),
                            download: 'book_chapter_data.xls'
                        });

                        // Trigger the click to download
                        link[0].click();
                    }
                });


            });

        </script>






<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.components.staff.master-teaching', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laravel Apps\gitoffice\resources\views/Staff/Teaching/research/bookchapters.blade.php ENDPATH**/ ?>