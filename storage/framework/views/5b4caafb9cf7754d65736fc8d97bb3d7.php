

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
                                        <!-- Start of Funding Projects -->
                                        <div class="box border-0 shadow-none mb-0">
                                            <div class="box-body">
                                                <div class="box-header">
                                                    <h5 class="box-title leading-none flex"><i class="ri ri-global-line ltr:mr-2 rtl:ml-2"></i>Fund Details</h5>
                                                </div>
                                                <button id="fund_btn" data-hs-overlay="#add_fund" class="hs-dropdown-toggle ti-btn ti-btn-primary " >
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M17 19H19V11H13V19H15V13H17V19ZM3 19V4C3 3.44772 3.44772 3 4 3H18C18.5523 3 19 3.44772 19 4V9H21V19H22V21H2V19H3ZM7 11V13H9V11H7ZM7 15V17H9V15H7ZM7 7V9H9V7H7Z" fill="rgba(255,255,255,1)"></path></svg>
                                                        Add Fund 
                                                </button>
                                                                                        
                                                <div id="add_fund" class="hs-overlay hidden ti-modal">
                                                    <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                        <div class="ti-modal-content">
                                                            <div class="ti-modal-header">
                                                                <h3 class="ti-modal-title">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                    Add New Fund<span class="text-red-400">
                                                                </h3>
                                                                <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                        data-hs-overlay="#add_fund">
                                                                        <span class="sr-only">Close</span>
                                                                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                            fill="currentColor" />
                                                                        </svg>
                                                                </button>
                                                                <?php if(($errors->has('f_proposal_title'))||($errors->has('f_role'))||($errors->has('f_amount'))||($errors->has('f_proposal_status'))||($errors->has('f_application_date'))||($errors->has('f_fund_received'))||($errors->has('f_project_status'))||($errors->has('f_completion_year'))||($errors->has('f_type'))): ?>
                                                                    <script>
                                                                        //alert(1);
                                                                        $(window).on('load', function() {
                                                                            
                                                                            alert('attended');
                                                                            
                                                                            //  $('#horizontal-alignment-item-1').trigger('click')
                                                                            $('#fund_btn').trigger("click");

                                                                            
                                                                        });      
                                                                    </script>
                                                                <?php endif; ?>
                                                            </div>
                                                            <form  action="<?php echo e(route('Teaching.research.funding.store')); ?>" method="post" enctype="multipart/form-data">
                                                                <?php echo csrf_field(); ?>                                     
                                                                <div class="ti-modal-body">
                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                        
                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                            <label for="with-corner-hint" class="ti-form-label font-bold">Proposal Title :<span class="text-red-500">*</span> </label>
                                                                            <input type="text" name="f_proposal_title" class="ti-form-input" required placeholder="Proposal Title" id="f_proposaltitle">
                                                                                <?php if($errors->has('f_proposal_title')): ?>
                                                                                    <div class="text-red-700"><?php echo e($errors->first('f_proposal_title')); ?></div>
                                                                                <?php endif; ?>
                                                                                <div id="f_proposaltitleError" class="error text-red-700"></div>
                                                                        </div>
                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                            <label for="with-corner-hint" class="ti-form-label font-bold">Role: <span class="text-red-500">*</span></label>
                                                                            <select class="ti-form-select role" name="f_role" required id="fund_role">
                                                                                <option value="#">Choose Role</option>
                                                                                <option value="Principle Investigator">Principle Investigator</option>
                                                                                <option value="Co-Investigator">Co-Investigator</option>
                                                                                <option value="Architect">Architect</option>
                                                                                                        
                                                                            </select>
                                                                            <?php if($errors->has('f_role')): ?>
                                                                                <div class="text-red-700"><?php echo e($errors->first('f_role')); ?></div>
                                                                            <?php endif; ?>
                                                                            <div id="fund_roleError" class="error text-red-700"></div>                                                                                                                                                                               
                                                                        </div>
                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                            <label for="with-corner-hint" class="ti-form-label font-bold">Type: <span class="text-red-500">*</span></label>
                                                                            <select class="ti-form-select role" name="f_type" required id="f_type">
                                                                                <option value="#">Choose Type</option>
                                                                                <option value="Govt-funded">Govt Funded</option>
                                                                                <option value="Private funded">Private Funded</option>
                                                                            </select>
                                                                            <?php if($errors->has('f_type')): ?>
                                                                                <div class="text-red-700"><?php echo e($errors->first('f_type')); ?></div>
                                                                            <?php endif; ?>
                                                                            <div id="f_typeError" class="error text-red-700"></div>                                                                                                                                                                               
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">

                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                            <label for="with-corner-hint" class="ti-form-label font-bold">Amount: </label>
                                                                                <input type="number" min="0" name="f_amount" class="ti-form-input" placeholder="Amount" id="fund_amount">
                                                                                    <?php if($errors->has('f_amount')): ?>
                                                                                    <div class="text-red-700"><?php echo e($errors->first('f_amount')); ?></div>
                                                                                <?php endif; ?>
                                                                                <div id="fund_amountError" class="error text-red-700"></div>                                                                              
                                                                        </div>
                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                            <label for="with-corner-hint" class="ti-form-label font-bold">Proposal Status:<span class="text-red-500">*</span> </label>
                                                                            <select class="ti-form-select proposal_status" name="f_proposal_status" required id="fund_proposal_status">
                                                                                    <option value="#">Choose Proposal Status</option>
                                                                                    <option value="Accepted">Accepted</option>
                                                                                    <option value="Pending">Pending</option>
                                                                                    <option value="Rejected">Rejected</option>
                                                                            </select> 
                                                                            <?php if($errors->has('f_proposal_status')): ?>
                                                                                <div class="text-red-700"><?php echo e($errors->first('f_proposal_status')); ?></div>
                                                                            <?php endif; ?>
                                                                            <div id="fund_proposal_statusError" class="error text-red-700"></div>                             
                                                                        </div>                                                                        
                                                                    </div>
                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                        <div class="flex max-w-sm space-y-3 pb-6">
                                                                            <label for="" class="ti-form-label font-bold">Application Date :<span class="text-red-500">*</span></label>
                                                                            <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                class="ri ri-calendar-line"></i></span>
                                                                            </div>                                                 
                                                                            <input type="date" name="f_application_date" id="fund_application_date"
                                                                                class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                    required placeholder="Choose date" >
                                                                                <?php if($errors->has('f_application_date')): ?>
                                                                                        <div class="text-red-700"><?php echo e($errors->first('f_application_date')); ?></div>
                                                                                <?php endif; ?>
                                                                                <div id="fund_application_dateError" class="error text-red-700"></div>   
                                                                        </div>
                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                            <label for="" class="ti-form-label font-bold">Fund Received:</label>
                                                                            <input type="number" min="0" name="f_fund_received" class="ti-form-input" placeholder="Fund Received" id="fund_received">
                                                                                <?php if($errors->has('f_fund_received')): ?>
                                                                                <div class="text-red-700"><?php echo e($errors->first('f_fund_received')); ?></div>
                                                                            <?php endif; ?> 
                                                                            <div id="f_fundreceivedError" class="error text-red-700"></div> 
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                            <label for="" class="ti-form-label font-bold">Project status:<span class="text-red-500">*</span></label>
                                                                            <select class="ti-form-select project_status" name="f_project_status" required id="fund_project_status">
                                                                                <option value="#">select Project Status</option>
                                                                                <option value="On-Going">On Going</option>
                                                                                <option value="Completed">Completed</option>
                                                                            </select> 
                                                                            <?php if($errors->has('f_project_status')): ?>
                                                                                <div class="text-red-700"><?php echo e($errors->first('f_project_status')); ?></div>
                                                                            <?php endif; ?>
                                                                            <div id="fund_project_statusError" class="error text-red-700"></div>  
                                                                        </div>
                                                                        <div class="flex max-w-sm space-y-3 pb-6">
                                                                            <label for="" class="ti-form-label font-bold">Completion Year :</label>
                                                                            <input type="number" min="0" step="1" name="f_completion_year" class="ti-form-input" required placeholder="Completion Year" id="fund_completion_year">
                                                                            <?php if($errors->has('f_completion_year')): ?>
                                                                                <div class="text-red-700"><?php echo e($errors->first('f_completion_year')); ?></div>
                                                                            <?php endif; ?>
                                                                            <div id="fund_completion_yearError" class="error text-red-700"></div>  
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label pt-4 font-bold">Document:<span class="text-red-500">* </span></label>
                                                                                <span class="sr-only">Choose Profile photo</span>
                                                                                    <input type="file" accept="application/pdf" name="document" id="fund_document" class="block w-full text-sm text-gray-500 dark:text-white/70 focus:outline-0
                                                                                    ltr:file:mr-4 rtl:file:ml-4 file:py-2 file:px-4
                                                                                    file:rounded-sm file:border-0
                                                                                    file:text-sm file:font-semibold
                                                                                    file:bg-primary file:text-white
                                                                                    hover:file:bg-primary focus-visible:outline-none doc" required>
                                                                                    <?php if($errors->has('document')): ?>
                                                                                        <div class="text-red-700"><?php echo e($errors->first('document')); ?></div>
                                                                                    <?php endif; ?>
                                                                                    <div id="fund_documentError" class="error text-red-700"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>                                                                                       
                                                                </div>    
                                                                <div class="ti-modal-footer">
                                                                    <button type="button"
                                                                        class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                        data-hs-overlay="#add_fund">
                                                                        Close
                                                                    </button>                                 
                                                                    <input type="submit" id="funding_add_btn" class="ti-btn  bg-primary text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10" value="Add"/>
                                                                                                            
                                                                </div>
                                                            </form>  
                                                        </div>
                                                    </div>
                                                </div>
                                                                    
                                                <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
                                                    <div class="flex justify-end mt-4">
                                                        <button id="exportToExcel" class="bg-green-500 text-white px-4 py-2 rounded-md focus:outline-none hover:bg-green-600">Export to Excel</button>
                                                    </div>
                                                    <table id="fund_table" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                        <thead class="bg-gray-50 dark:bg-black/20">
                                                            <tr class="">
                                                                <th scope="col" class="dark:text-white/80 font-bold">S.No</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">E-Gov ID</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Proposal Title</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Role</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Type</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Amount</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Proposal Status</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Application Date</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Fund Received</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Project Status</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Completion Year</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Document</th>
                                                                <?php if(!isset($export) || !$export): ?>
                                                                    <th scope="col" class="dark:text-white/80 font-bold ">Action</th>
                                                                <?php endif; ?>  
                                                            </tr>
                                                        </thead>
                                                        <?php
                                                        $i=1;
                                                        ?>
                                                            <tbody class="">
                                                                <?php if($staff->funded_project !=null): ?>
                                                                    <?php $__empty_1 = true; $__currentLoopData = $staff->funded_project; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fund): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                                        <tr class="">
                                                                        
                                                                            <td><span><?php echo e($i++); ?></span></td>
                                                                            <td><span><?php echo e($fund->egov_id); ?></span></td>
                                                                            <td><span><?php echo e($fund->proposal_title); ?></span></td>
                                                                            <td><span><?php echo e($fund->role); ?></span></td>
                                                                                <td><span><?php echo e($fund->type); ?></span></td>
                                                                            <td><span><?php echo e($fund->amount); ?></span></td>
                                                                            <td><span><?php echo e($fund->proposal_status); ?></span></td>
                                                                            <td><span><?php echo e(\Carbon\Carbon::parse($fund->application_date)->format('d-M-Y')); ?></span></td>                                    
                                                                            <td><span><?php echo e($fund->fund_received); ?></span></td>
                                                                            <td><span><?php echo e($fund->project_status); ?></span></td>
                                                                            <td><span><?php echo e(($fund->completion_year)); ?></span></td>
                                                                            <td><span><a href=<?php echo e(asset('Uploads/Research/fundedproject/'.$fund->document)); ?> class='font-medium text-blue-600 dark:text-blue-500 hover:underline' target="_blank"><?php echo e($fund->document); ?></a></span></td>                                 
                                                                            <?php if(!isset($export) || !$export): ?>
                                                                            <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                                    <button data-hs-overlay="#fund_edit_modal<?php echo e($i); ?>" id="btn<?php echo e($i); ?>" btn-val=<?php echo e($i); ?>

                                                                                            class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary fund_edit_modal_click">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                            <span
                                                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                            role="tooltip">
                                                                                            Edit
                                                                                            </span>
                                                                                    </button>
                                                                                                    
                                                                                                
                                                                                    <div id="fund_edit_modal<?php echo e($i); ?>" class="hs-overlay hidden ti-modal">
                                                                                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                                                            <div class="ti-modal-content">
                                                                                                <div class="ti-modal-header">
                                                                                                    <h3 class="ti-modal-title">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                                        Edit Fund Details
                                                                                                    </h3>
                                                                                                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                                                            data-hs-overlay="#fund_edit_modal<?php echo e($i); ?>">
                                                                                                            <span class="sr-only">Close</span>
                                                                                                            <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                            <path
                                                                                                                d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                                                fill="currentColor" />
                                                                                                            </svg>
                                                                                                    </button>
                                                                                                    <?php if(($errors->has('fe_proposal_title'))||($errors->has('fe_role'))||($errors->has('fe_type'))||($errors->has('fe_amount'))||($errors->has('fe_proposal_status'))||($errors->has('fe_application_date'))||($errors->has('fe_fund_received'))||($errors->has('fe_completion_year'))): ?>
                                                                                                        <script>
                                                                                                            //alert(387);
                                                                                                                window.onload=function(){
                                                                                                                //alert('123');
                                                                                                                //alert("Validation errors");

                                                                                                            // document.getElementById('btn'+<?php echo e(old('modal_no')); ?>).click();
                                                                                                            };   
                                                                                                        
                                                                                                        </script>
                                                                                                    <?php endif; ?>
                    
                                                                                                </div>
                                                                                                <form  action="<?php echo e(route('Teaching.research.funding.fund.update',$fund->id)); ?>" method="post" enctype="multipart/form-data">
                                                                                                    <?php echo csrf_field(); ?>
                                                                                                    <?php echo method_field('patch'); ?>
                                                                                                    <div class="ti-modal-body">
                                                                                                    <input type='hidden' name='modal_no' class='modal_no' value=<?php echo e(old('modal_no')); ?>/>
                                                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                                <label for="with-corner-hint" class="ti-form-label font-bold">Proposal Title : <span class="text-red-500">*</span></label>
                                                                                                                <input type="text" name="fe_proposal_title" class="ti-form-input" required placeholder=" Proposal Title" value="<?php echo e($fund->proposal_title); ?>">
                                                                                                                <?php if($errors->has('fe_proposal_title')): ?>
                                                                                                                        <div class="text-red-700"><?php echo e($errors->first('fe_proposal_title')); ?></div>
                                                                                                                <?php endif; ?>
                                                                                                            </div>
                                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                                <label for="with-corner-hint" class="ti-form-label font-bold">Role: <span class="text-red-500">*</span></label>
                                                                                                                <select class="ti-form-select role" name="fe_role" required>
                                                                                                                    <option value="#">Choose Role</option>
                                                                                                                    <option value="Principle Investigator" <?php echo e($fund->role=='Principle Investigator'? 'selected': ''); ?>>Principle Investigator</option>
                                                                                                                    <option value="Co-Investigator"<?php echo e($fund->role=='Co-Investigator'? 'selected': ''); ?>>Co-Investigator</option>
                                                                                                                    <option value="Architect"<?php echo e($fund->role=='Architect'? 'selected': ''); ?>>Architect</option>
                                                                                                                    
                                                                                                                </select> 
                                                                                                                    <?php if($errors->has('fe_role')): ?>
                                                                                                                        <div class="text-red-700"><?php echo e($errors->first('fe_role')); ?></div>
                                                                                                                <?php endif; ?>                                                                                                                                                                                   
                                                                                                            </div>
                                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                                <label for="with-corner-hint" class="ti-form-label font-bold">Type: <span class="text-red-500">*</span></label>
                                                                                                                <select class="ti-form-select role" name="fe_type" required>
                                                                                                                    <option value="#">Choose type</option>
                                                                                                                    <option value="Govt-funded" <?php echo e($fund->type=='Govt-funded'? 'selected': ''); ?>>Govt Funded</option>
                                                                                                                    <option value="Private Funded"<?php echo e($fund->type=='Private Funded'? 'selected': ''); ?>>Private Funded</option>
                                                                                                                    
                                                                                                                </select> 
                                                                                                                    <?php if($errors->has('fe_type')): ?>
                                                                                                                        <div class="text-red-700"><?php echo e($errors->first('fe_type')); ?></div>
                                                                                                                <?php endif; ?>                                                                                                                                                                                   
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">

                                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                                <label for="with-corner-hint" class="ti-form-label font-bold">Amount: </label>
                                                                                                                <input type="number" min="0" name="fe_amount" class="ti-form-input" required placeholder="Amount" value="<?php echo e($fund->amount); ?>">
                                                                                                                    <?php if($errors->has('fe_amount')): ?>
                                                                                                                        <div class="text-red-700"><?php echo e($errors->first('fe_amount')); ?></div>
                                                                                                                <?php endif; ?> 
                                                                                                                                                                                
                                                                                                            </div>
                                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                                                <label for="with-corner-hint" class="ti-form-label font-bold">Proposal Status:<span class="text-red-500">*</span> </label>
                                                                                                                <select class="ti-form-select proposal_status" name="fe_proposal_status" required>
                                                                                                                    <option value="#">Choose Proposal Status</option>
                                                                                                                    <option value="Accepted"<?php echo e($fund->proposal_status=='Accepted'? 'selected': ''); ?>>Accepted</option>
                                                                                                                    <option value="Pending"<?php echo e($fund->proposal_status=='Pending'? 'selected': ''); ?>>Pending</option>
                                                                                                                    <option value="Rejected"<?php echo e($fund->proposal_status=='Rejected'? 'selected': ''); ?>>Rejected</option>
                                                                                                                </select>
                                                                                                                    <?php if($errors->has('fe_proposal_status')): ?>
                                                                                                                        <div class="text-red-700"><?php echo e($errors->first('fe_proposal_status')); ?></div>
                                                                                                                <?php endif; ?>   
                                                                                                                                                                                
                                                                                                            </div>                                                                        
                                                                                                        </div>
                                                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                            <div class="flex max-w-sm space-y-3 pb-6">
                                                                                                                <label for="" class="ti-form-label font-bold">Application Date :<span class="text-red-500">*</span></label>
                                                                                                                    <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                                        <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                                                            class="ri ri-calendar-line"></i></span>
                                                                                                                    </div>
                                                                                                                                            
                                                                                                                        <input type="date" name="fe_application_date"
                                                                                                                                class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                                                                    value=<?php echo e($fund->application_date); ?>  required placeholder="Choose date" >
                                                                                                                                    <?php if($errors->has('fe_application_date')): ?>
                                                                                                                                        <div class="text-red-700"><?php echo e($errors->first('fe_application_date')); ?></div>
                                                                                                                                    <?php endif; ?>  
                                                                                                            </div>
                                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                                <label for="" class="ti-form-label font-bold">Fund Received:</label>
                                                                                                                <input type="number" min="0" name="fe_fund_received" class="ti-form-input" placeholder="Fund Received" value="<?php echo e($fund->fund_received); ?>">
                                                                                                                <?php if($errors->has('fe_fund_received')): ?>
                                                                                                                    <div class="text-red-700"><?php echo e($errors->first('fe_fund_received')); ?></div>
                                                                                                                    <?php endif; ?> 
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                                <label for="" class="ti-form-label font-bold">Project status:<span class="text-red-500">*</span></label>
                                                                                                                    <select class="ti-form-select project_status" name="fe_project_status" required>
                                                                                                                    <option value="#">select Project Status</option>
                                                                                                                    <option value="On-Going"<?php echo e($fund->project_status=='On-Going'? 'selected': ''); ?>>On Going</option>
                                                                                                                    <option value="Completed"<?php echo e($fund->project_status=='Completed'? 'selected': ''); ?>>Completed</option>
                                                                                                                </select>
                                                                                                                <?php if($errors->has('fe_project_status')): ?>
                                                                                                                    <div class="text-red-700"><?php echo e($errors->first('fe_project_status')); ?></div>
                                                                                                                    <?php endif; ?>   
                                                                                                            </div>
                                                                                                            <div class="flex max-w-sm space-y-3 pb-6">
                                                                                                                <label for="" class="ti-form-label font-bold">Completion Year :</label>
                                                                                                                <input type="number" name="fe_completion_year" class="ti-form-input" required placeholder="Completion Year" value="<?php echo e($fund->completion_year); ?>">
                                                                                                                    <?php if($errors->has('fe_completion_year')): ?>
                                                                                                                    <div class="text-red-700"><?php echo e($errors->first('fe_completion_year')); ?></div>
                                                                                                                    <?php endif; ?>
                                                                                                            </div>
                                                                                                           
                                                                                                        </div>
                                                                                                         <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                                                <div class="max-w-sm space-y-3 pb-6">
                                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="" class="ti-form-label pt-4 font-bold">Document:<span class="text-red-500">* </span></label>
                                                                                                                        <span class="sr-only">Choose Profile photo</span>
                                                                                                                            <input type="file" accept="application/pdf" name="document" id="fund_document" class="block w-full text-sm text-gray-500 dark:text-white/70 focus:outline-0
                                                                                                                            ltr:file:mr-4 rtl:file:ml-4 file:py-2 file:px-4
                                                                                                                            file:rounded-sm file:border-0
                                                                                                                            file:text-sm file:font-semibold
                                                                                                                            file:bg-primary file:text-white
                                                                                                                            hover:file:bg-primary focus-visible:outline-none doc" required value="<?php echo e($fund->document); ?>">
                                                                                                                            <?php if($errors->has('document')): ?>
                                                                                                                                <div class="text-red-700"><?php echo e($errors->first('document')); ?></div>
                                                                                                                            <?php endif; ?>
                                                                                                                            <div id="fund_documentError" class="error text-red-700"></div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>      
                                                                                                                                                            
                                                                                                                                                                        
                                                                                                    </div>  
                                                                                                    <div class="ti-modal-footer">
                                                                                                        <button type="button"
                                                                                                                class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                                                data-hs-overlay="#fund_edit_modal<?php echo e($i); ?>">
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
                                                                                    <form action="<?php echo e(route('Teaching.research.funding.fund.destroy',$fund->id)); ?>" method="post">
                                                                                                                            
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
                                        <!--End of Funduing Projects -->

                                        <!--Start of Consultancy Projects -->
                                        <div class="box border-0 shadow-none mb-0">
                                            <div class="box-header">
                                                <h5 class="box-title leading-none flex"><i class="ri ri-global-line ltr:mr-2 rtl:ml-2"></i> Consultancy History</h5>
                                            </div>
                                            <div class="box-body">
                                                <button  id="consultancy_btn" data-hs-overlay="#add_consultancy" class="hs-dropdown-toggle ti-btn ti-btn-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M17 19H19V11H13V19H15V13H17V19ZM3 19V4C3 3.44772 3.44772 3 4 3H18C18.5523 3 19 3.44772 19 4V9H21V19H22V21H2V19H3ZM7 11V13H9V11H7ZM7 15V17H9V15H7ZM7 7V9H9V7H7Z" fill="rgba(255,255,255,1)"></path></svg>
                                                    Add Consultancy
                                                </button>
                                                <div id="add_consultancy" class="hs-overlay hidden ti-modal">
                                                    <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                        <div class="ti-modal-content">
                                                            <div class="ti-modal-header">
                                                                <h3 class="ti-modal-title">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                    Add New Consultancy <span class="text-red-400">
                                                                </h3>
                                                                <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                data-hs-overlay="#add_consultancy">
                                                                <span class="sr-only">Close</span>
                                                                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                    d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                    fill="currentColor" />
                                                                </svg>
                                                                </button>
                                                                <?php if(($errors->has('c_consultancy_title'))||($errors->has('c_agency'))||($errors->has('c_from_date'))||($errors->has('c_to_date'))||($errors->has('c_amount'))): ?>
                                                                    <script>
                                                                        //alert(1);
                                                                        $(window).on('load', function() {
                                                                            
                                                                            //alert('consultancy');
                                                                            
                                                                            //$('#horizontal-alignment-item-1').trigger('click')
                                                                            $('#consultancy_btn').trigger("click");

                                                                            
                                                                                
                                                                        });      
                                                                    </script>
                                                                <?php endif; ?>
                                                            </div>
                                                            <form  action="<?php echo e(route('Teaching.research.consultancy.store')); ?>" method="post" enctype="multipart/form-data">
                                                                    <?php echo csrf_field(); ?>
                                                                
                                                                    <div class="ti-modal-body">
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="with-corner-hint" class="ti-form-label font-bold">Consultacy Title :<span class="text-red-500">*</span></label>
                                                                                <input type="text" name="c_consultancy_title" class="ti-form-input" required placeholder="Consultacy Title" id="consult_consultancy_title">
                                                                                    <?php if($errors->has('c_consultancy_title')): ?>
                                                                                        <div class="text-red-700"><?php echo e($errors->first('c_consultancy_title')); ?></div>
                                                                                <?php endif; ?>
                                                                                <div id="consult_consultancy_titleError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Agency :</label>
                                                                                <input type="text" name="c_agency" class="ti-form-input" required placeholder="Agency" id="consult_agency">
                                                                                    <?php if($errors->has('c_agency')): ?>
                                                                                        <div class="text-red-700"><?php echo e($errors->first('c_agency')); ?></div>
                                                                                <?php endif; ?>

                                                                                <div id="consult_agencyError" class="error text-red-700"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            <div class="flex max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">From Date:<span class="text-red-500">*</span></label>
                                                                                    <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                        <span class="text-sm text-gray-500 dark:text-white/70"><i class="ri ri-calendar-line"></i></span>
                                                                                    </div>                    
                                                                                    <input type="date" name="c_from_date" id="consult_from_date"
                                                                                    class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                        required placeholder="Choose date">
                                                                                            <?php if($errors->has('c_from_date')): ?>
                                                                                                <div class="text-red-700"><?php echo e($errors->first('c_from_date')); ?></div>
                                                                                            <?php endif; ?>
                                                                                        <div id="consult_from_dateError" class="error text-red-700"></div>
                                                                            </div> 
                                                                            <div class="flex max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">To Date:<span class="text-red-500">*</span></label>
                                                                                    <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                        <span class="text-sm text-gray-500 dark:text-white/70"><i class="ri ri-calendar-line"></i></span>
                                                                                    </div>                    
                                                                                    <input type="date" name="c_to_date" id="consult_to_date"
                                                                                        class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                            required placeholder="Choose date">
                                                                                            <?php if($errors->has('c_to_date')): ?>
                                                                                                <div class="text-red-700"><?php echo e($errors->first('c_to_date')); ?></div>
                                                                                            <?php endif; ?>

                                                                                            <div id="consult_to_dateError" class="error text-red-700"></div>
                                                                            </div>     

                                                                            
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Amount:</label>
                                                                                <input type="number" min="0" name="c_amount" class="ti-form-input" placeholder="Amount" id="consult_amount">
                                                                                    <?php if($errors->has('c_amount')): ?>
                                                                                                <div class="text-red-700"><?php echo e($errors->first('c_amount')); ?></div>
                                                                                    <?php endif; ?>
                                                                                <div id="consult_amountError" class="error text-red-700"></div>
                                                                                
                                                                            </div>
                                                                            <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <div class="max-w-sm space-y-3 pb-6">
                                                                                    <label for="" class="ti-form-label pt-4 font-bold">Document:<span class="text-red-500">* </span></label>
                                                                                    <span class="sr-only">Choose Profile photo</span>
                                                                                        <input type="file" accept="application/pdf" name="document" id="consult_document" class="block w-full text-sm text-gray-500 dark:text-white/70 focus:outline-0
                                                                                        ltr:file:mr-4 rtl:file:ml-4 file:py-2 file:px-4
                                                                                        file:rounded-sm file:border-0
                                                                                        file:text-sm file:font-semibold
                                                                                        file:bg-primary file:text-white
                                                                                        hover:file:bg-primary focus-visible:outline-none doc" required value="">
                                                                                        <?php if($errors->has('document')): ?>
                                                                                            <div class="text-red-700"><?php echo e($errors->first('document')); ?></div>
                                                                                        <?php endif; ?>
                                                                                    <div id="consult_documentError" class="error text-red-700"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                            
                                                                        </div>
                                                                    </div>    
                                                                    <div class="ti-modal-footer">
                                                                        <button type="button"
                                                                        class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                        data-hs-overlay="#add_consultancy">
                                                                        Close
                                                                        </button>
                                                                            
                                                                        <input type="submit" id="consultancy_store_add_btn" class="ti-btn  bg-primary text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10" value="Add"/>
                                                                        
                                                                    </div>
                                                            </form>  
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
                                                    <div class="flex justify-end mt-4">
                                                        <button id="consultancy_exportToExcel" class="bg-green-500 text-white px-4 py-2 rounded-md focus:outline-none hover:bg-green-600">Export to Excel</button>
                                                    </div>
                                                    <table id="consultancy_table" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                        <thead class="bg-gray-50 dark:bg-black/20">
                                                        <tr class="">
                                                            <th scope="col" class="dark:text-white/80 font-bold ">S.No</th>
                                                            <th scope="col" class="dark:text-white/80 font-bold ">E-Gov ID</th>
                                                            <th scope="col" class="dark:text-white/80 font-bold ">Consultancy Title</th>
                                                            <th scope="col" class="dark:text-white/80 font-bold">Agency</th>
                                                            <th scope="col" class="dark:text-white/80 font-bold">From Date</th>
                                                            <th scope="col" class="dark:text-white/80 font-bold">To Date</th>
                                                            <th scope="col" class="dark:text-white/80 font-bold">Amount</th>
                                                            <th scope="col" class="dark:text-white/80 font-bold">Document</th>
                                                            <?php if(!isset($export) || !$export): ?>
                                                                <th scope="col" class="dark:text-white/80 font-bold ">Action</th>
                                                            <?php endif; ?>
                                                        </tr>
                                                        </thead>
                                                        <?php
                                                            $i=1;
                                                        ?>
                                                        <tbody class="">
                                                            <?php if($staff->consultancy !=null): ?>
                                                                    <?php $__empty_1 = true; $__currentLoopData = $staff->consultancy; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $consult): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                                    <tr class="">
                                                                        <td><span><?php echo e($i++); ?></span></td>
                                                                        <td><span><?php echo e($consult->egov_id); ?></span></td>
                                                                        <td><span><?php echo e($consult->consultancy_title); ?></span></td>
                                                                        <td><span><?php echo e($consult->agency); ?></span></td>
                                                                        <td><span><?php echo e($consult->from_date); ?></span></td>
                                                                        <td><span><?php echo e($consult->to_date); ?></span></td>
                                                                        <td><span><?php echo e($consult->amount); ?></span></td>
                                                                        <td><span><a href=<?php echo e(asset('Uploads/Research/Consultancy/'.$consult->document)); ?> class='font-medium text-blue-600 dark:text-blue-500 hover:underline' target="_blank"><?php echo e($consult->document); ?></a></span></td>
                                                                        <?php if(!isset($export) || !$export): ?>
                                                                        <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                                            <div class="hs-tooltip ti-main-tooltip">
                                                                                <button data-hs-overlay="#consultancy_edit_modal<?php echo e($i); ?>" id="btn<?php echo e($i); ?>" btn-val=<?php echo e($i); ?>

                                                                                class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary consultancy_edit_modal_click">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                    <span
                                                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                        role="tooltip">
                                                                                        Edit
                                                                                    </span>
                                                                                </button>
                                                    
                                                
                                                                                    <div id="consultancy_edit_modal<?php echo e($i); ?>" class="hs-overlay hidden ti-modal">
                                                                                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                                                                            <div class="ti-modal-content">
                                                                                                <div class="ti-modal-header">
                                                                                                    <h3 class="ti-modal-title">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                                        Edit Consultancy
                                                                                                    </h3>
                                                                                                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                                                    data-hs-overlay="#consultancy_edit_modal<?php echo e($i); ?>">
                                                                                                    <span class="sr-only">Close</span>
                                                                                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path
                                                                                                        d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                                        fill="currentColor" />
                                                                                                    </svg>
                                                                                                    </button>
                                                                                                        <?php if(($errors->has('ce_consultancy_title'))||($errors->has('ce_agency'))||($errors->has('ce_from_date'))||($errors->has('ce_to_date'))||($errors->has('ce_amount'))): ?>
                                                                                                                <script>
                                                                                                                    //alert(387);
                                                                                                                        window.onload=function(){
                                                                                                                        //alert('123');
                                                                                                                        //alert("Validation errors");

                                                                                                                    // document.getElementById('btn'+<?php echo e(old('modal_no')); ?>).click();
                                                                                                                    };   
                                                                                                                
                                                                                                                </script>
                                                                                                        <?php endif; ?>
                                                                                                </div>
                                                                                                <form  action="<?php echo e(route('Teaching.research.consultancy.update',$consult->id)); ?>" method="post" enctype="multipart/form-data">
                                                                                                    <?php echo csrf_field(); ?>
                                                                                                    <?php echo method_field('patch'); ?>
                                                                                                    <div class="ti-modal-body">
                                                                                                    <input type='hidden' name='consultancy_modal_no' class='consultancy_modal_no' value=<?php echo e(old('consultancy_modal_no')); ?>/>
                                                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                                <label for="with-corner-hint" class="ti-form-label">Consultancy Title: <span class="text-red-500">*</span></label>
                                                                                                                <input type="text" name="ce_consultancy_title" class="ti-form-input" required placeholder="Faculty Name" value="<?php echo e($consult->consultancy_title); ?>">
                                                                                                                <?php if($errors->has('ce_consultancy_title')): ?>
                                                                                                                        <div class="text-red-700"><?php echo e($errors->first('ce_consultancy_title')); ?></div>
                                                                                                                <?php endif; ?>
                                                                                                        
                                                                                                            </div>
                                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                                <label for="" class="ti-form-label">Agency :</label>
                                                                                                                <input type="text" name="ce_agency" class="ti-form-input" placeholder="Agency" value="<?php echo e($consult->agency); ?>">
                                                                                                                <?php if($errors->has('ce_agency')): ?>
                                                                                                                        <div class="text-red-700"><?php echo e($errors->first('ce_agency')); ?></div>
                                                                                                                <?php endif; ?>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                            <div class="flex max-w-sm space-y-3 pb-6">
                                                                                                                <label for="" class="ti-form-label font-bold">From Date:</label>
                                                                                                                    <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                                        <span class="text-sm text-gray-500 dark:text-white/70"><i class="ri ri-calendar-line"></i></span>
                                                                                                                    </div>                    
                                                                                                                    <input type="date" name="ce_from_date"
                                                                                                                        class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                                                        required placeholder="Choose date" value="<?php echo e($consult->from_date); ?>">
                                                                                                                        <?php if($errors->has('ce_from_date')): ?>
                                                                                                                                <div class="text-red-700"><?php echo e($errors->first('ce_from_date')); ?></div>
                                                                                                                        <?php endif; ?>
                                                                                                            </div> 
                                                                                                            <div class="flex max-w-sm space-y-3 pb-6">
                                                                                                                <label for="" class="ti-form-label font-bold">To Date:</label>
                                                                                                                    <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                                        <span class="text-sm text-gray-500 dark:text-white/70"><i class="ri ri-calendar-line"></i></span>
                                                                                                                    </div>                    
                                                                                                                    <input type="date" name="ce_to_date"
                                                                                                                        class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                                                        required placeholder="Choose date" value="<?php echo e($consult->to_date); ?>">
                                                                                                                        <?php if($errors->has('ce_to_date')): ?>
                                                                                                                                <div class="text-red-700"><?php echo e($errors->first('ce_to_date')); ?></div>
                                                                                                                        <?php endif; ?>
                                                                                                            </div> 

                                                                                                        
                                                                                                        </div>
                                                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                                <label for="" class="ti-form-label font-bold">Amount:</label>
                                                                                                                <input type="number" min="0" name="ce_amount" class="ti-form-input" required placeholder="Amount" value="<?php echo e($consult->amount); ?>">
                                                                                                                <?php if($errors->has('ce_amount')): ?>
                                                                                                                    <div class="text-red-700"><?php echo e($errors->first('ce_amount')); ?></div>
                                                                                                                <?php endif; ?>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        
                                                                                                        <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                                <div class="max-w-sm space-y-3 pb-6">
                                                                                                                    <label for="" class="ti-form-label pt-4 font-bold">Document:<span class="text-red-500">* </span></label>
                                                                                                                    <span class="sr-only">Choose Profile photo</span>
                                                                                                                        <input type="file" accept="application/pdf" name="document" class="block w-full text-sm text-gray-500 dark:text-white/70 focus:outline-0
                                                                                                                        ltr:file:mr-4 rtl:file:ml-4 file:py-2 file:px-4
                                                                                                                        file:rounded-sm file:border-0
                                                                                                                        file:text-sm file:font-semibold
                                                                                                                        file:bg-primary file:text-white
                                                                                                                        hover:file:bg-primary focus-visible:outline-none doc" required value="<?php echo e($consult->document); ?>">
                                                                                                                        
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>  
                                                                                                    </div>  
                                                                                                    <div class="ti-modal-footer">
                                                                                                        <button type="button"
                                                                                                        class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                                        data-hs-overlay="#consultancy_edit_modal<?php echo e($i); ?>">
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
                                                                                <form action="<?php echo e(route('Teaching.research.consultancy.destroy',$consult->id)); ?>" method="post">
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

                                        <!--End of Consultancy Projects -->

                                       
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
                       
                    //Validation for funded project
               
                    //alert('Hello from jquery');
                    new DataTable('#fund_table');
                    
                    $(document).on('click','.fund_edit_modal_click',function(){
                        //var 
                        var modal_no = $(this).attr("btn-val");
                        
                        //alert($(this).find('.caste_edit_modal_no').val());
                        $('.modal_no').val(modal_no); 
                    });

                     //Validation for consultancy
               
                    //alert('Hello from jquery');
                    new DataTable('#consultancy_table');
                    
                    $(document).on('click','.consultancy_edit_modal_click',function(){
                        //var 
                        var modal_no = $(this).attr("btn-val");
                        
                        //alert($(this).find('.caste_edit_modal_no').val());
                        $('.modal_no').val(modal_no); 
                    });
                    
                    
                   


                     // Validation for Funding project
                    $(document).on('click','#funding_add_btn',function(e){

                        var f_proposaltitle = $('#f_proposaltitle').val();
                        var fund_role = $('#fund_role').val();
                        var fund_amount = $('#fund_amount').val();
                        var fund_proposal_status = $('#fund_proposal_status').val();
                        var fund_application_date = $('#fund_application_date').val();
                        var fund_received = $('#fund_received').val();
                        var fund_project_status = $('#fund_project_status').val();
                        var fund_completion_year = $('#fund_completion_year').val();
                        var f_type = $('#f_type').val();
                        var fund_document = $('$fund_document').val();



                        var flag = false;

                         if(fund_document[0].files.length === 0){
                            //alert('file not choosen');
                            $('#fund_documentError').text('Please choose a file');
                            flag = true;
                        }


                        if(f_proposaltitle == ''){
                            $('#f_proposaltitleError').text('Proposal Title Name is missing');
                            flag = true;
                        }else if (!/^[a-zA-Z\s]+$/.test(f_proposaltitle.trim())){
                            $('#f_proposaltitleError').text('Please fill the correct value');
                            flag = true;
                        }
                        if(fund_role =='#'){
                            $('#fund_roleError').text('Please Choose a correct option.');
                            flag = true;
                        }
                        if(f_type =='#'){
                            $('#f_typeError').text('Please Choose a correct option.');
                            flag = true;
                        }
                        if(fund_amount == ''){
                            $('#fund_amountError').text('Amount is missing');
                            flag = true;
                        }else if (!/^\d+(\.\d{1,2})?$/.test(fund_amount.trim())){
                            $('#fund_amountError').text('Please fill the correct value');
                            flag = true;
                        }
                        if(fund_proposal_status =='#'){
                            $('#fund_proposal_statusError').text('Please Choose a correct option.');
                            flag = true;
                        }
                        if(fund_application_date.trim() === ''){
                            $('#fund_application_dateError').text('Please Select a proper date');
                            flag = true;
                        }
                        if (fund_received !== '') {
                            if (!/^\d+(\.\d{1,2})?$/.test(fund_received.trim())) {
                                $('#f_fundreceivedError').text('Please fill the correct value');
                                flag = true;
                            }
                        }
                        if(fund_project_status =='#'){
                            $('#fund_project_statusError').text('Please Choose a correct option.');
                            flag = true;
                        }
                        if(fund_completion_year == ''){
                            $('#fund_completion_yearError').text('Completion Year is missing');
                            flag = true;
                        }else if (!/^\d+(\.\d{1,2})?$/.test(fund_completion_year.trim())){
                            $('#fund_completion_yearError').text('Please fill the correct value');
                            flag = true;
                        }

                        if(flag == true){
                            e.preventDefault();
                        }

                    });

                    //Validation for Consultancy
                    $(document).on('click','#consultancy_store_add_btn',function(e){

                        var consult_consultancy_title = $('#consult_consultancy_title').val();
                        var consult_agency = $('#consult_agency').val();
                        var consult_from_date = $('#consult_from_date').val();
                        var consult_to_date = $('#consult_to_date').val();
                        var consult_amount = $('#consult_amount').val();
                        var consult_document = $('#consult_document')[0].files[0];
                        
                        var flag = false;

                        if (!consult_document) {
                            $('#consult_documentError').text('Please choose a file');
                            flag = true;
                        }


                        if(consult_consultancy_title == ''){
                            $('#consult_consultancy_titleError').text('Consultancy Title Name is missing');
                            flag = true;
                        }else if (!/^[a-zA-Z\s]+$/.test(consult_consultancy_title.trim())){
                            $('#consult_consultancy_titleError').text('Please fill the correct value');
                            flag = true;
                        }
                        if(consult_agency == ''){
                            $('#consult_agencyError').text('Consultancy Agency Name is missing');
                            flag = true;
                        }else if (!/^[a-zA-Z\s]+$/.test(consult_agency.trim())){
                            $('#consult_agencyError').text('Please fill the correct value');
                            flag = true;
                        }

                        if(consult_from_date.trim() === ''){
                            $('#consult_from_dateError').text('Please Select a proper date');
                            flag = true;
                        }

                        if(consult_to_date.trim() === ''){
                            $('#consult_to_dateError').text('Please Select a proper date');
                            flag = true;
                        }
                        if (consult_amount !== '') {
                            if (!/^\d+$/.test(consult_amount.trim())) {
                                $('#consult_amountError').text('Please fill the correct value (Only digits)');
                                flag = true;
                            }
                        }

                        if(flag == true){
                            e.preventDefault();
                        }

                    });
                    //export to excel funding project
                      $('#exportToExcel').on('click', function () {
                    var table = $('#fund_table').clone();

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
                        window.navigator.msSaveOrOpenBlob(blob, 'fund_data.xls');
                    } else {
                        var link = $('<a>', {
                            href: URL.createObjectURL(blob),
                            download: 'fund_data.xls'
                        });

                        // Trigger the click to download
                        link[0].click();
                    }
                });

                //consultancy export to excel
                
                      $('#consultancy_exportToExcel').on('click', function () {
                    var table = $('#consultancy_table').clone();

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
                        window.navigator.msSaveOrOpenBlob(blob, 'consultancy_data.xls');
                    } else {
                        var link = $('<a>', {
                            href: URL.createObjectURL(blob),
                            download: 'consultancy_data.xls'
                        });

                        // Trigger the click to download
                        link[0].click();
                    }
                });


                  
            });
        </script>


        
    
        

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.components.staff.master-teaching', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laravel Apps\gitoffice\resources\views/Staff/Teaching/research/fundingconsultancy.blade.php ENDPATH**/ ?>