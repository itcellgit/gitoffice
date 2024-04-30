<?php $__env->startSection('styles'); ?>
         <!-- TABULATOR CSS -->
         <link rel="stylesheet" href="<?php echo e(asset('build/assets/libs/tabulator-tables/css/tabulator.min.css')); ?>">

         <!-- CHOICES CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('build/assets/libs/choices.js/public/assets/styles/choices.min.css')); ?>">



        <!-- FLATPICKR CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('build/assets/libs/flatpickr/flatpickr.min.css')); ?>">

        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.tailwindcss.min.css">
        <script>
            var base_url = "<?php echo e(URL::to('/')); ?>";
        </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

                    <div class="content">

                        <!-- Start::main-content -->
                        <div class="main-content">

                            <!-- Page Header -->
                            <div class="block justify-between page-header sm:flex">
                                <div>
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Establishment Section</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                        <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M4 22C4 17.5817 7.58172 14 12 14C16.4183 14 20 17.5817 20 22H18C18 18.6863 15.3137 16 12 16C8.68629 16 6 18.6863 6 22H4ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11Z"></path></svg>
                                            Staff
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12.1717 12.0005L9.34326 9.17203L10.7575 7.75781L15.0001 12.0005L10.7575 16.2431L9.34326 14.8289L12.1717 12.0005Z"></path></svg>
                                        </a>
                                        </li>


                                </ol>
                            </div>
                            <!-- Page Header Close -->


                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="col-span-6">
                                     <!-- For Checking whether status is set or no-->
                                     <?php if(session('status')): ?>
                                        <?php if(session('status') == 1): ?>
                                        <div class='bg-white dark:bg-bgdark border border-success alert text-success' role='alert'>
                                            <span class='font-bold'>Result: </span> Database transaction Successful
                                        </div>
                                        <?php elseif(session('status') == 0): ?>
                                        <div class='bg-white dark:bg-bgdark border border-danger alert text-danger' role='alert'>
                                            <span class='font-bold'>Result : </span> Error in Database transaction
                                        </div>

                                        <?php endif; ?>
                                        <?php
                                            Illuminate\Support\Facades\Session::forget('status');
                                            header("refresh: 1");
                                        ?>
                                    <?php endif; ?>

                                </div>
                            </div>
                            <!-- Closing of designation insertion div-->
                            <!-- Start::row-5 -->
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="col-span-12">
                                    <!--For filtering the data as per requirement-->
                                    <div class="col-span-2 xl:col-span-2">
                                        <div class="box box-sm">
                                            <div class="box-body searchForm">
                                                <form action="<?php echo e(route('ESTB.staff.filter')); ?>" method="GET" id="searchForm">
                                                    <!-- Department select -->
                                                    <div class="grid gap-1 space-y-2 lg:grid-cols-2 lg:space-y-0">
                                                        <div class="space-y-2">
                                                            <label class="ti-form-label mb-0 font-bold">Department<span class="text-red-500">*</span></label>
                                                            <select class="ti-form-select" name="departments_id">
                                                                <option value="#">Choose a Department</option>
                                                                <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($department->id); ?>"><?php echo e($department->dept_name); ?></option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </select>
                                                        </div>
                                                        <!-- Association select -->
                                                        <div class="space-y-2">
                                                            <label class="ti-form-label mb-0 font-bold">Association<span class="text-red-500">*</span></label>
                                                            <select class="ti-form-select" name="associations_id" id="associations_id" required>
                                                                <option value="#">Choose an Association</option>
                                                                <?php $__currentLoopData = $associations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $association): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($association->id); ?>"><?php echo e($association->asso_name); ?></option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="grid gap-1 space-y-2 lg:grid-cols-2 lg:space-y-0 mt-6">
                                                        <!-- Religion select -->
                                                        <div class="space-y-2">
                                                            <label class="ti-form-label mb-0 font-bold">Religion<span class="text-red-500">*</span></label>
                                                            <select class="ti-form-select" name="religion_id" id="religion_id">
                                                                <option value="#">Choose a Religion</option>
                                                                <?php $__currentLoopData = $religions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $religion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($religion->id); ?>"><?php echo e($religion->religion_name); ?></option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </select>
                                                        </div>
                                                        <!-- Caste Category select -->
                                                        <div class="space-y-2">
                                                            <label class="ti-form-label mb-0 font-bold">Caste Category<span class="text-red-500">*</span></label>
                                                            <select class="ti-form-select" name="castecategory_id" id="castecategory_list">
                                                                <!-- Add options if applicable -->
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="grid gap-1 space-y-2 lg:grid-cols-2 lg:space-y-0 mt-6">
                                                        <!-- Gender radio buttons -->
                                                        <div class="space-y-2">
                                                            <label class="ti-form-label mb-0">Gender<span class="text-red-500">*</span></label>
                                                            <div class="flex gap-x-6">
                                                                <div class="flex">
                                                                    <input type="radio" name="gender" value="female" class="ti-form-radio" id="hs-radio-group-1" checked>
                                                                    <label for="hs-radio-group-1" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Female</label>
                                                                </div>
                                                                <div class="flex">
                                                                    <input type="radio" name="gender" value="male" class="ti-form-radio" id="hs-radio-group-2">
                                                                    <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Male</label>
                                                                </div>
                                                                <div class="flex">
                                                                    <input type="radio" name="gender" value="all" class="ti-form-radio" id="hs-radio-group-3">
                                                                    <label for="hs-radio-group-3" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">All</label>
                                                                </div>
                                                                <!-- Add more radio buttons if applicable -->
                                                            </div>
                                                        </div>
                                                        <div class="space-y-2">
                                                            <label class="ti-form-label mb-0 font-bold">Designations<span class="text-red-500">*</span></label>
                                                            <select class="ti-form-select stdesignation" name="designations_id" id="designation_id" >
                                                                <option value="#">Choose a Designation</option>
                                                                <?php $__currentLoopData = $st->designations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $design): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php if( $design->pivot->status == 'active'): ?>
                                                                        <?php echo e($design->design_name); ?> <br/>
                                                                    <?php endif; ?>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                            </select>
                                                            <?php if($errors->has('designations_id')): ?>
                                                                <div class="text-red-700"><?php echo e($errors->first('designations_id')); ?></div>
                                                            <?php endif; ?>
                                                            <div id="stdesignationError" class="error text-red-700"></div>
                                                        </div>


                                                        <!-- Search button -->
                                                        <div class="flex ">
                                                            <button id="filterBtn" class="bg-blue-500 text-white px-4 mt-10 py-2 rounded-md focus:outline-none hover:bg-blue-700">Search</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Filtering the data Ends-->
                                    <div class="box">
                                        <div class="box-header">
                                            <div class="flex">
                                                <h5 class="box-title my-auto">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M11 14.0619V20H13V14.0619C16.9463 14.554 20 17.9204 20 22H4C4 17.9204 7.05369 14.554 11 14.0619ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13Z" fill="rgba(0,0,0,1)"></path></svg>
                                                    Staff List
                                                </h5>
                                                <div class=" block ltr:ml-auto rtl:mr-auto my-auto">
                                                    <button type="button" id="add_staff_btn" data-hs-overlay="#add_staff" class="hs-dropdown-toggle ti-btn ti-btn-primary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM5 5V19H19V5H5ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z" fill="rgba(255,255,255,1)"></path></svg>
                                                        Add Staff
                                                    </button>
                                                    <div id="add_staff" class="hs-overlay hidden ti-modal">
                                                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 lg:mx-auto">
                                                            <div class="ti-modal-content">
                                                                <div class="ti-modal-header">
                                                                    <h3 class="ti-modal-title">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM5 5V19H19V5H5ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z"></path></svg>

                                                                        Add New Staff
                                                                    </h3>
                                                                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                        data-hs-overlay="#add_staff">
                                                                        <span class="sr-only">Close</span>
                                                                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                            d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                            fill="currentColor" />
                                                                        </svg>
                                                                    </button>
                                                                    <?php if(($errors->has('fname'))||($errors->has('mname'))||($errors->has('lname'))||($errors->has('employee_type'))||($errors->has('email'))||($errors->has('departments_id')||($errors->has('association_id')))||($errors->has('designation_id'))||($errors->has('religion_id'))||($errors->has('castecategory_id'))||($errors->has('gender'))||($errors->has('dob'))||($errors->has('doj'))||($errors->has('date_of_superanuation'))||($errors->has('lname'))||($errors->has('bloodgroup'))||($errors->has('pan_card'))||($errors->has('adhar_card'))||($errors->has('contactno'))||($errors->has('local_address'))||($errors->has('permanent_address'))||($errors->has('emergency_no'))||($errors->has('emergency_name'))||($errors->has('gcr'))): ?>
                                                                        <script>
                                                                            // alert(1);
                                                                            $(window).on('load', function() {

                                                                            //alert(4);
                                                                            //$('#horizontal-alignment-item-2').trigger('click');
                                                                            $('#add_staff_btn').trigger("click");

                                                                            });
                                                                        </script>
                                                                    <?php endif; ?>
                                                                </div>
                                                                <form action="<?php echo e(route('ESTB.staff.store')); ?>" method="post">
                                                                    <?php echo csrf_field(); ?>
                                                                    <div class="ti-modal-body">
                                                                        <div class="grid lg:grid-cols-3 gap-3 space-y-2 lg:space-y-0 pb-4">
                                                                            <div class="space-y-2 ">
                                                                                <label class="ti-form-label mb-0 font-bold">First Name<span class="text-red-500">*</span></label>
                                                                                <input type="text"  name="fname" id="fname" class="my-auto ti-form-input stfname" placeholder="Firstname">
                                                                                <?php if($errors->has('fname')): ?>
                                                                                    <div class="text-red-700"><?php echo e($errors->first('fname')); ?></div>
                                                                                <?php endif; ?>
                                                                                <div id="stfNameError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="space-y-2">
                                                                                <label class="ti-form-label mb-0 font-bold">Middle Name<span class="text-red-500">*</span></label>
                                                                                <input type="text" id="mname" name="mname" class="my-auto ti-form-input stmname"  placeholder="Middle Name">
                                                                                <?php if($errors->has('mname')): ?>
                                                                                    <div class="text-red-700"><?php echo e($errors->first('mname')); ?></div>
                                                                                <?php endif; ?>
                                                                                <div id="stmNameError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="space-y-2">
                                                                                <label class="ti-form-label mb-0 font-bold">Last Name<span class="text-red-500">*</span></label>
                                                                                <input type="text"  name="lname" id="lname" class="my-auto ti-form-input stlname"  placeholder="Lastname">
                                                                                <?php if($errors->has('lname')): ?>
                                                                                    <div class="text-red-700"><?php echo e($errors->first('lname')); ?></div>
                                                                                <?php endif; ?>
                                                                                <div id="stlNameError" class="error text-red-700"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-3 gap-3 space-y-2 lg:space-y-0 pb-4">
                                                                            <div class="space-y-2">
                                                                                <label class="ti-form-label mb-0 font-bold">Employee Type<span class="text-red-500">*</span></label>
                                                                                <select class="ti-form-select stemptype" name="employee_type" id="employee_type" >
                                                                                    <option value="null">Choose a Employee Type</option>
                                                                                    <option value="Teaching">Teaching</option>
                                                                                    <option value="Non-Teaching">Non-Teaching</option>
                                                                                </select>
                                                                                <?php if($errors->has('employee_type')): ?>
                                                                                    <div class="text-red-700"><?php echo e($errors->first('employee_type')); ?></div>
                                                                                <?php endif; ?>
                                                                                <div id="stemptypeError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="space-y-2">
                                                                                <label class="ti-form-label mb-0 font-bold">Email<span class="text-red-500">*</span></label>
                                                                                <div class="flex rounded-sm">
                                                                                    <input type="text" name="email" id="email_id" class="my-auto ti-form-input" placeholder="youremail">
                                                                                    <span class="px-4 inline-flex items-center min-w-fit ltr:rounded-r-sm rtl:rounded-l-sm border ltr:border-l-0 rtl:border-r-0 border-gray-200 bg-gray-50 text-sm dark:bg-black/20 dark:border-white/10">
                                                                                        <span class="text-sm text-gray-500 dark:text-white/70">@git.edu</span>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="space-y-2">
                                                                                <label class="ti-form-label mb-0 font-bold">Check for Availability</label>
                                                                                <span class="badge border border-secondary text-secondary" id="email_id_check">Check</span>
                                                                                <span class="" id="email_check_result"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0 pb-4">
                                                                            <div class="space-y-2">
                                                                                <label class="ti-form-label mb-0 font-bold">Department<span class="text-red-500">*</span></label>
                                                                                <select id="stdepartment" class="ti-form-select" name="departments_id">
                                                                                    <option value="#">Choose a Department</option>
                                                                                    <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                        <option value="<?php echo e($department->id); ?>"><?php echo e($department->dept_name); ?></option>
                                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                </select>
                                                                                <?php if($errors->has('departments_id')): ?>
                                                                                    <div class="text-red-700"><?php echo e($errors->first('departments_id')); ?></div>
                                                                                <?php endif; ?>
                                                                                <div id="stdepartmentError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="space-y-2">
                                                                                <label class="ti-form-label mb-0 font-bold">Association<span class="text-red-500">*</span></label>
                                                                                <select id="stassociation" class="ti-form-select" name="associations_id" id="associations_id" required>
                                                                                    <option value="#">Choose a Association</option>
                                                                                    <?php $__currentLoopData = $associations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $association): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                        <option value="<?php echo e($association->id); ?>"><?php echo e($association->asso_name); ?></option>
                                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                </select>
                                                                                <?php if($errors->has('associations_id')): ?>
                                                                                    <div class="text-red-700"><?php echo e($errors->first('associations_id')); ?></div>
                                                                                <?php endif; ?>
                                                                                <div id="stassociationError" class="error text-red-700"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0 pb-4">
                                                                            <div class="space-y-2">
                                                                                <label class="ti-form-label mb-0 font-bold">Designations<span class="text-red-500">*</span></label>
                                                                                <select class="ti-form-select stdesignation" name="designations_id" id="designation_id" >
                                                                                    <option value="#">Choose a Designation</option>

                                                                                </select>
                                                                                <?php if($errors->has('designations_id')): ?>
                                                                                    <div class="text-red-700"><?php echo e($errors->first('designations_id')); ?></div>
                                                                                <?php endif; ?>
                                                                                <div id="stdesignationError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="space-y-2 pr-4">
                                                                                <label class="ti-form-label mb-0">Pay Type<span class="text-red-500">*</span></label>
                                                                                <div class="flex gap-x-6">
                                                                                    <div class="flex hidden" id="Consolidated">
                                                                                        <input type="radio" name="pay_type" value="Consolidated"  class="ti-form-radio" id="hs-radio-group-1 pay_type">
                                                                                        <label for="hs-radio-group-1" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Consolidated</label>

                                                                                    </div>

                                                                                    <div class="flex">
                                                                                        <input type="radio" name="pay_type" value="Payscale"  id="Payscale" class="ti-form-radio" id="hs-radio-group-2 pay_type">
                                                                                        <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Payscale</label>

                                                                                    </div>

                                                                                    <div class="flex">
                                                                                        <input type="radio" name="pay_type" value="Fixed" id="Fixed" class="ti-form-radio" id="hs-radio-group-2 pay_type">
                                                                                        <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Fixed</label>

                                                                                    </div>
                                                                                    <div id="sttypeError" class="error text-red-700"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="space-y-2 hidden" id="fixed_pay_div">
                                                                                <label class="ti-form-label mb-0 font-bold ">Fixed Pay</label>
                                                                                <input type="text" name="fixed_pay" id="fixed_pay" class="my-auto ti-form-input" placeholder="fixed pay">
                                                                                <?php if($errors->has('fixed_pay')): ?>
                                                                                    <div class="text-red-700"><?php echo e($errors->first('fixed_pay')); ?></div>
                                                                                <?php endif; ?>
                                                                                <div id="stfixedError" class="error text-red-700"></div>
                                                                            </div>

                                                                            <div class="space-y-2 hidden" id="payscale_div">
                                                                                <label class="ti-form-label mb-0 font-bold">Payscale</label>
                                                                                <select class="ti-form-select" name="payscale_id" id="payscale_id">
                                                                                    <option>Choose a payscale</option>
                                                                                </select>
                                                                                <?php if($errors->has('payscale_id')): ?>
                                                                                        <div class="text-red-700"><?php echo e($errors->first('payscale_id')); ?></div>
                                                                                <?php endif; ?>
                                                                                <div id="stpayscaleError" class="error text-red-700"></div>
                                                                            </div>

                                                                            <!--<div class="space-y-2 hidden" id="payscalelevel">
                                                                                <label class="ti-form-label mb-0 font-bold">Increment Level</label>
                                                                                <select  class="ti-form-select" name="payscale_level">
                                                                                    <option value="#">Choose the payscale level</option>
                                                                                    <option value="1">Increment Level-1</option>
                                                                                    <option value="2">Increment Level-2</option>
                                                                                    <option value="3">Increment Level-3</option>
                                                                                </select>
                                                                            </div>-->

                                                                            <div class="space-y-2 hidden" id="duration_div">
                                                                                <label class="ti-form-label mb-0 font-bold ">Duration</label>
                                                                                <input type="text" name="duration" id="duration" class="my-auto ti-form-input" placeholder="Duration">
                                                                                <?php if($errors->has('duration')): ?>
                                                                                        <div class="text-red-700"><?php echo e($errors->first('duration')); ?></div>
                                                                                <?php endif; ?>
                                                                            </div>
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0 pb-4">
                                                                            <div class="space-y-2">
                                                                                <label class="ti-form-label mb-0 font-bold">Religion<span class="text-red-500">*</span></label>
                                                                                <select class="ti-form-select streligion" name="religion_id" id="religion_id">
                                                                                    <option value="#">Choose a Religion</option>
                                                                                    <?php $__currentLoopData = $religions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $religion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                        <option value="<?php echo e($religion->id); ?>"><?php echo e($religion->religion_name); ?></option>
                                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                                                </select>
                                                                                <?php if($errors->has('religion_id ')): ?>
                                                                                    <div class="text-red-700"><?php echo e($errors->first('religion_id ')); ?></div>
                                                                                <?php endif; ?>
                                                                                <div id="streligionError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="space-y-2">
                                                                                <label class="ti-form-label mb-0 font-bold">Caste Category<span class="text-red-500">*</span></label>
                                                                                <select class="ti-form-select stcastecategory" name="castecategory_id" id="castecategory_list">

                                                                                </select>
                                                                                <div id="stcastecategoryError" class="error text-red-700"></div>
                                                                                <?php if($errors->has('castecategory_id ')): ?>
                                                                                    <div class="text-red-700"><?php echo e($errors->first('castecategory_id ')); ?></div>
                                                                                <?php endif; ?>

                                                                            </div>
                                                                            <div class="space-y-2 pr-4">
                                                                                <label class="ti-form-label mb-0">Gender<span class="text-red-500">*</span></label>
                                                                                <div class="flex gap-x-6">
                                                                                    <div class="flex">
                                                                                        <input type="radio" name="gender" value="female" class="ti-form-radio" id="hs-radio-group-1" checked>
                                                                                        <label for="hs-radio-group-1" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Female</label>
                                                                                    </div>

                                                                                    <div class="flex">
                                                                                        <input type="radio" name="gender" value="male" class="ti-form-radio" id="hs-radio-group-2">
                                                                                        <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Male</label>
                                                                                    </div>

                                                                                    <div class="flex">
                                                                                        <input type="radio" name="gender" value="others" class="ti-form-radio" id="hs-radio-group-3" >
                                                                                        <label for="hs-radio-group-3" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Others</label>
                                                                                    </div>
                                                                                    <?php if($errors->has('gender ')): ?>
                                                                                        <div class="text-red-700"><?php echo e($errors->first('gender ')); ?></div>
                                                                                    <?php endif; ?>
                                                                                    <div id="stgenderError" class="error text-red-700"></div>
                                                                                </div>

                                                                            </div>

                                                                            <div class="space-y-2">
                                                                                <label class="ti-form-label mb-0 font-bold">Date Of Birth<span class="text-red-500">*</span></label>
                                                                                <input type="date" id="stdob" name="dob" class="ti-form-input flatpickr-input dob date"
                                                                                    placeholder="Choose date">
                                                                                <div id="stdobError" class="error text-red-700"></div>
                                                                                <?php if($errors->has('dob ')): ?>
                                                                                    <div class="text-red-700"><?php echo e($errors->first('dob ')); ?></div>
                                                                                <?php endif; ?>

                                                                            </div>
                                                                            <div class="space-y-2">
                                                                                <label class="ti-form-label mb-0 font-bold">Date Of Joining<span class="text-red-500">*</span></label>
                                                                                <input type="date" id="stdoj" name="doj" class="ti-form-input flatpickr-input doj date"
                                                                                    placeholder="Choose date">
                                                                                <div id="stdojError" class="error text-red-700"></div>
                                                                                <?php if($errors->has('doj ')): ?>
                                                                                    <div class="text-red-700"><?php echo e($errors->first('doj ')); ?></div>
                                                                                <?php endif; ?>
                                                                            </div>

                                                                            <div class="space-y-2">
                                                                                <label class="ti-form-label mb-0 font-bold">Date Of Superannution</label>
                                                                                <input type="date" id="stdos" name="date_of_superanuation" class="ti-form-input flatpickr-input dos date"
                                                                                placeholder="Choose date">
                                                                                <div id="stdosError" class="error text-red-700"></div>
                                                                                <?php if($errors->has('date_of_superanuation ')): ?>
                                                                                    <div class="text-red-700"><?php echo e($errors->first('date_of_superanuation ')); ?></div>
                                                                                <?php endif; ?>

                                                                            </div>
                                                                            <div class="space-y-2">
                                                                                <label class="ti-form-label mb-0 font-bold">Blood Group</label>
                                                                                <select id="stbloodgroup" class="ti-form-select" name="bloodgroup">
                                                                                    <option value="null">Choose a Blood Group</option>
                                                                                    <option value="A+">A + (Positive)</option>
                                                                                    <option value="A-">A - (Negetive)</option>
                                                                                    <option value="B+">B + (Positive)</option>
                                                                                    <option value="B-">B - (Negetive)</option>
                                                                                    <option value="AB+">AB + (Positive)</option>
                                                                                    <option value="AB-">AB - (Negetive)</option>
                                                                                    <option value="O+">O + (Positive)</option>
                                                                                    <option value="O-">O - (Negetive)</option>
                                                                                </select>
                                                                                <div id="stbloodgroupError" class="error text-red-700"></div>
                                                                                <?php if($errors->has('bloodgroup ')): ?>
                                                                                    <div class="text-red-700"><?php echo e($errors->first('bloodgroup ')); ?></div>
                                                                                <?php endif; ?>
                                                                            </div>
                                                                            <div class="space-y-2">
                                                                                <label class="ti-form-label mb-0 font-bold">PAN Card No:</label>
                                                                                <input type="text" id="stpancard" name="pan_card" class="my-auto ti-form-input"
                                                                                placeholder="XXXXX XXXXX">
                                                                                <div id="stpancardError" class="error text-red-700"></div>
                                                                                <?php if($errors->has('pan_card ')): ?>
                                                                                    <div class="text-red-700"><?php echo e($errors->first('pan_card ')); ?></div>
                                                                                <?php endif; ?>
                                                                            </div>
                                                                            <div class="space-y-2">
                                                                                <label class="ti-form-label mb-0 font-bold">Adhar Card No:</label>
                                                                                <input type="text" id="stadharcard" name="adhar_card" class="my-auto ti-form-input"
                                                                                    placeholder="XXXX-XXXX-XXXX-XXXX">
                                                                                <div id="stadharcardError" class="error text-red-700"></div>
                                                                                <?php if($errors->has('adhar_card ')): ?>
                                                                                    <div class="text-red-700"><?php echo e($errors->first('adhar_card ')); ?></div>
                                                                                <?php endif; ?>
                                                                            </div>
                                                                            <div class="space-y-2">
                                                                                <label class="ti-form-label mb-0 font-bold">Contact No:</label>
                                                                                <input type="text" id="stcontactno" name="contactno" class="my-auto ti-form-input"
                                                                                    placeholder="XXXXX-XXXXX">
                                                                                <div id="stcontactnoError" class="error text-red-700"></div>
                                                                                <?php if($errors->has('contactno ')): ?>
                                                                                    <div class="text-red-700"><?php echo e($errors->first('contactno ')); ?></div>
                                                                                <?php endif; ?>
                                                                            </div>
                                                                        </div>
                                                                        <div class="my-5">
                                                                            <div class="space-y-2">
                                                                                <label class="ti-form-label mb-0 font-bold">Local Address<span class="text-red-500">*</span></label>
                                                                                <input type="text" id="stlocaladd" name="local_address" class="my-auto ti-form-input"  placeholder="Local Address">
                                                                            </div>
                                                                            <div id="stlocaladdError" class="error text-red-700"></div>
                                                                            <?php if($errors->has('local_address ')): ?>
                                                                                <div class="text-red-700"><?php echo e($errors->first('local_address ')); ?></div>
                                                                            <?php endif; ?>
                                                                        </div>
                                                                        <div class="my-5">
                                                                            <div class="space-y-2">
                                                                                <label class="ti-form-label mb-0 font-bold">Permanant Address<span class="text-red-500">*</span></label>
                                                                                <input type="text" id="stpermentadd" name="permanent_address" class="my-auto ti-form-input" placeholder="Permenant Address">
                                                                                <div id="stpermentaddError" class="error text-red-700"></div>
                                                                                <?php if($errors->has('permanent_address ')): ?>
                                                                                    <div class="text-red-700"><?php echo e($errors->first('permanent_address ')); ?></div>
                                                                                <?php endif; ?>
                                                                            </div>
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-3 gap-3 space-y-2 lg:space-y-0">
                                                                            <div class="space-y-2">
                                                                                <label class="ti-form-label mb-0 font-bold">Emergency No</label>
                                                                                <input type="text" id="stemergencyno" name="emergency_no" class="ti-form-input"   placeholder="emergency no">
                                                                                <div id="stemergencynoError" class="error text-red-700"></div>
                                                                                <?php if($errors->has('emergency_no ')): ?>
                                                                                    <div class="text-red-700"><?php echo e($errors->first('emergency_no ')); ?></div>
                                                                                <?php endif; ?>
                                                                            </div>
                                                                            <div class="space-y-2">
                                                                                <label class="ti-form-label mb-0 font-bold">Emergency Name</label>
                                                                                <input type="text" id="stemergencyname" name="emergency_name" class="ti-form-input"  placeholder="emergency name">
                                                                                <div id="stemergencynameError" class="error text-red-700"></div>
                                                                                <?php if($errors->has('emergency_name ')): ?>
                                                                                    <div class="text-red-700"><?php echo e($errors->first('emergency_name ')); ?></div>
                                                                                <?php endif; ?>
                                                                            </div>
                                                                            <div class="space-y-2">
                                                                                <label class="ti-form-label mb-0 font-bold">GC Resolution No</label>
                                                                                <input type="text" id="stgcrno" name="gcr" class="ti-form-input"  placeholder="GC Resolution No:">
                                                                                <div id="stgcrnoError" class="error text-red-700"></div>
                                                                                <?php if($errors->has('gcr ')): ?>
                                                                                    <div class="text-red-700"><?php echo e($errors->first('gcr ')); ?></div>
                                                                                <?php endif; ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ti-modal-footer">
                                                                        <button type="button" id=""
                                                                            class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                            data-hs-overlay="#add_staff">
                                                                            Close
                                                                        </button>
                                                                        <input type="submit" id="staffinformation_store_add_btn" class="ti-btn  bg-primary text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10 float-right" value="Add"/>
                                                                    </div>
                                                                </form>
                                                                <!--newly added-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div id="basic-table" class="ti-custom-table ti-striped-table ti-custom-table-hover table-bordered rounded-sm  overflow-auto">
                                                <table id="staff_table" class="ti-custom-table ti-custom-table-head  max-w-8 overflow-auto relative">
                                                    <thead class="bg-gray-50 dark:bg-black/20">
                                                        <tr class="">
                                                            <th scope="col" class="dark:text-white/80 ">S.no</th>
                                                            <th scope="col" class="dark:text-white/80 ">Staff Name</th>
                                                            <th scope="col" class="dark:text-white/80 ">Employee Type</th>
                                                            <th scope="col" class="dark:text-white/80 ">Department</th>
                                                            <th scope="col" class="dark:text-white/80 columns-6">Designation</th>
                                                            <th scope="col" class="dark:text-white/80 ">Associatation</th>
                                                            <th scope="col" class="dark:text-white/80 ">Actions</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody class="">

                                                        <?php
                                                            $i = 1;
                                                            //print_r($staff->religions->religion_id);
                                                        ?>
                                                        <?php $__empty_1 = true; $__currentLoopData = $staff; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $st): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                                                        <tr class="bg-red-700">
                                                            <td><?php echo e($i++); ?></td>
                                                            <td>
                                                            <div class="flex space-x-3 rtl:space-x-reverse w-full min-w-[200px]">
                                                                <div class="block w-full my-auto">

                                                                    <?php echo e($st->fname.' '.$st->mname.' '.$st->lname); ?>

                                                                </div>
                                                            </div>
                                                            </td>
                                                            <td><span><?php echo e($st->latest_employee_type()->first()->employee_type); ?></span></td>
                                                            <td><span>
                                                                <?php $__currentLoopData = $st->departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dept): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php if($dept->pivot->status == 'active'): ?>
                                                                    <?php echo e($dept->dept_shortname); ?> <br/>
                                                                    <?php endif; ?>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </span></td>
                                                            <td ><span class="w-3/4">

                                                                <?php $__currentLoopData = $st->designations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $design): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php if( $design->pivot->status == 'active'): ?>
                                                                        <?php echo e($design->design_name); ?> <br/>
                                                                    <?php endif; ?>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                            </span></td>

                                                            <td><span><?php $__currentLoopData = $st->associations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $st_asso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if($st_asso->pivot->status=='active'): ?>
                                                                    <?php echo e($st_asso->asso_name); ?>

                                                                <?php endif; ?>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </span></td>
                                                            <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <button
                                                                        class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                                        <a href="<?php echo e(route('ESTB.staff.show',$st->id)); ?>">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12.0003 3C17.3924 3 21.8784 6.87976 22.8189 12C21.8784 17.1202 17.3924 21 12.0003 21C6.60812 21 2.12215 17.1202 1.18164 12C2.12215 6.87976 6.60812 3 12.0003 3ZM12.0003 19C16.2359 19 19.8603 16.052 20.7777 12C19.8603 7.94803 16.2359 5 12.0003 5C7.7646 5 4.14022 7.94803 3.22278 12C4.14022 16.052 7.7646 19 12.0003 19ZM12.0003 16.5C9.51498 16.5 7.50026 14.4853 7.50026 12C7.50026 9.51472 9.51498 7.5 12.0003 7.5C14.4855 7.5 16.5003 9.51472 16.5003 12C16.5003 14.4853 14.4855 16.5 12.0003 16.5ZM12.0003 14.5C13.381 14.5 14.5003 13.3807 14.5003 12C14.5003 10.6193 13.381 9.5 12.0003 9.5C10.6196 9.5 9.50026 10.6193 9.50026 12C9.50026 13.3807 10.6196 14.5 12.0003 14.5Z"></path></svg>
                                                                            <span
                                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                role="tooltip">
                                                                                View & Edit
                                                                            </span>
                                                                        </a>
                                                                    </button>

                                                                    <div class="hs-tooltip ti-main-tooltip">
                                                                        <!--form action="#" method="post">

                                                                        <button onclick="return confirm('Are you Sure')"
                                                                            class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M7 4V2H17V4H22V6H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V6H2V4H7ZM6 6V20H18V6H6ZM9 9H11V17H9V9ZM13 9H15V17H13V9Z"></path></svg>

                                                                            <span
                                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                role="tooltip">
                                                                                Delete
                                                                            </span>
                                                                            </button>
                                                                        </form-->
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                            <p class="text-dark"><b>No Staff Added.</b></p>
                                                        <?php endif; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End::row-5 -->
                            </div>
                            <!-- End::main-content -->
                        </div>
                    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

        <!-- APEX CHARTS JS -->
        <script src="<?php echo e(asset('build/assets/libs/apexcharts/apexcharts.min.js')); ?>"></script>

        <!-- FLATPICKR JS -->
        <script src="<?php echo e(asset('build/assets/libs/flatpickr/flatpickr.min.js')); ?>"></script>
        <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/flatpickr.js'); ?>

         <!-- TABULATOR JS -->
         <script src="<?php echo e(asset('build/assets/libs/tabulator-tables/js/tabulator.min.js')); ?>"></script>

         <!-- CHOICES JS -->
        <script src="<?php echo e(asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')); ?>"></script>

        <script
        src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>

        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/dataTables.tailwindcss.min.js"></script>
        <script href="https://cdn.tailwindcss.com/3.3.5"></script>
        <script>
            $(document).ready(function(){
               //alert('Hello from jquery');

                $(document).on('click','#staffinformation_store_add_btn',function(e){

                    var stfname = $('.stfname').val();
                    var stmname = $('.stmname').val();
                    var stlname = $('.stlname').val();
                    var stemptype = $('.stemptype').val();
                    var stdepartment = $('.stdepartment').val();
                    var stassociation = $('.stassociation').val();
                    var stdesignation  = $('.stdesignation').val();
                    var streligion = $('.streligion').val();
                    var stcastecategory = $('.stcastecategory').val();
                    var stgender = $('#stgender').val();
                    var stdob = $('#stdob').val();
                    var stdoj = $('#stdoj').val();
                    var stdos = $('#stdos').val();
                    var stbloodgroup = $('#stbloodgroup').val();
                    var stpancard = $('#stpancard').val();
                    var stadharcard = $('#stadharcard').val();
                    var stcontactno = $('#stcontactno').val();
                    var stlocaladd = $('#stlocaladd').val();
                    var stpermentadd = $('#stpermentadd').val();
                    var stemergencyno = $('#stemergencyno').val();
                    var stemergencyname = $('#stemergencyname').val();
                    var stgcrno = $('#stgcrno').val();

                    var flag = false;



                    if(stfname == ''){
                        $('#stfNameError').text('First Name is missing');
                        flag = true;
                    }else if (!/^[a-zA-Z\s]+$/.test(stfname.trim())){
                        $('#stfNameError').text('Please fill the correct value');
                        flag = true;
                    }
                    if(stmname == ''){
                        $('#stmNameError').text('Middle Name is missing');
                        flag = true;
                    }else if (!/^[a-zA-Z\s]+$/.test(stmname.trim())){
                        $('#stmNameError').text('Please fill the correct value');
                        flag = true;
                    }
                     if(stlname == ''){
                        $('#stlNameError').text('Last Name is missing');
                        flag = true;
                    }else if (!/^[a-zA-Z\s]+$/.test(stlname.trim())){
                        $('#stlNameError').text('Please fill the correct value');
                        flag = true;
                    }
                    if(stemptype == 'null'){
                        $('#stemptypeError').text('Please Choose a correct option');
                        flag = true;
                    }

                    if(stdepartment == '#'){
                        $('#stdepartmentError').text('Please Choose a correct option');
                        flag = true;
                    }
                    if(stassociation == '#'){
                        $('#stassociationError').text('Please Choose a correct option');
                        flag = true;
                    }
                    if(streligion == '#'){
                        $('#ststreligionError').text('Please Choose a correct option');
                        flag = true;
                    }
                    if(stdesignation == '#'){
                        $('#stdesignationError').text('Please Choose a correct option');
                        flag = true;
                    }
                    if(stcastecategory == '#'){
                        $('#stcastecategoryError').text('Please Choose a correct option');
                        flag = true;
                    }
                    if(stdob.trim() === ''){
                        $('#stdobError').text('Please Select a proper date');
                        flag = true;
                    }
                    if(stdoj.trim() === ''){
                        $('#stdojError').text('Please Select a proper date');
                        flag = true;
                    }
                    if(stdos.trim() === ''){
                        $('#stdosError').text('Please Select a proper date');
                        flag = true;
                    }
                    if(stbloodgroup == 'null'){
                        $('#stbloodgroupError').text('Please Choose a correct option');
                        flag = true;
                    }
                    if (stpancard !== '') {
                        if (!/^[a-zA-Z0-9\s]+$/.test(stpancard.trim())) {
                            $('#stpancardError').text('Please fill the correct value');
                            flag = true;
                        }
                    }

                    if (stadharcard !== '') {
                        if (!/^[0-9\s]+$/.test(stadharcard.trim())) {
                            $('#stadharcardError').text('Please fill the correct value');
                            flag = true;
                        }
                    }

                    if (stcontactno !== '') {
                        if (!/^[0-9\s]+$/.test(stcontactno.trim())) {
                            $('#contactnoError').text('Please fill the correct value');
                            flag = true;
                        }
                    }

                    //if (stlocaladd !== '' && !/^[a-zA-Z\s]+$/.test(stlocaladd.trim())) {
                        //$('#stlocaladdError').text('Please fill the correct value');
                        //flag = true;
                    //}


                    //if (stpermentadd == '') {
                        //$('#stpermentaddError').text('Permanent Address is missing');
                        //flag = true;
                    //} else if (!/^[a-zA-Z\s]+$/.test(stpermentadd.trim())) {
                        //$('#stpermentaddError').text('Please fill the correct value');
                        //flag = true;
                    //}


                    if (stemergencyno !== '') {
                        if (!/^[0-9\s]+$/.test(stemergencyno.trim())) {
                            $('#stemergencynoError').text('Please fill the correct value');
                            flag = true;
                        }
                    }

                    if (stemergencyname !== '') {
                        if (!/^[a-zA-Z\s]+$/.test(stemergencyname.trim())) {
                            $('#stemergencynameError').text('Please fill the correct value');
                            flag = true;
                        }
                    }

                    if (stgcrno !== '') {
                        if (!/^[a-zA-Z0-9\s]+$/.test(stgcrno.trim())) {
                            $('#stgcrnoError').text('Please fill the correct value');
                            flag = true;
                        }
                    }

                    if(flag == true){
                        e.preventDefault();
                    }
                });

              	//for data table generation for staff table
                new DataTable('#staff_table');

                $(document).on('click','#email_id_check',function(){

                    var current_email = $('#email_id').val();
                    var first_name = $('#fname').val();
                    var last_name = $('#lname').val();

                    //alert(current_email);
                    if(first_name != '' && last_name != '' && current_email != ''){

                        if(current_email == first_name.toLocaleLowerCase()){
                            alert('It contains only first name');
                        }else if(current_email == last_name.toLocaleLowerCase()){
                            alert('It contains only last name');
                        }else if(current_email.toLocaleLowerCase().indexOf("@")!=-1){
                            alert('@ is found, kindly change');
                        }else{
                            //alert('ajax Call');
                            $.ajax({
                                url:base_url+'/ESTB/staff/checkemailid',
                                method:'GET',
                                data:{'current_email':current_email},
                                success:function(data) {
                                    console.log(data.length);
                                    $('#email_check_result').empty();
                                    //$('#email_check_result').
                                    if(data.length > 0){
                                        //alert('Email already exists');
                                        $('#email_check_result').html('Email Found ! Kindly change the email ID').addClass('text-red-400');
                                        $('#email_id').focus();

                                    }else{
                                      //  alert('Email Id is okay to be used');
                                        $('#email_check_result').html('Yes! Email ID is valid').addClass('text-green-400');

                                    }
                                },
                                error:function (error) {
                                    console.log(error);
                                }
                            });
                        }
                    }else{
                        //alert('Fill the fields');
                        if(first_name == ''){
                            $('#fname').focus();
                        }
                        if(last_name == ''){
                            $('#lname').focus();
                        }
                        if(current_email == ''){
                            $('#email_id').focus();
                        }
                    }
                });



               $(document).on('change','#employee_type',function(){
                    //alert('changed');
                    var employee_type = $(this).val();

                    if(employee_type=='Teaching'){
                        //alert('teaching');
                        $('#type_of_payscale').hide();
                        //alert($('input[name="pay_type"]:checked').val());
                        $('#Consolidated').hide();
                        $('#payscale_div').hide();

                    } else if(employee_type=='Non-Teaching'){
                        $('#type_of_payscale').show();
                        $('#Consolidated').show();
                        $('#payscale_div').show();

                    }else{
                        $('#type_of_payscale').hide();
                        $('#designation_id').empty();
                        $('#payscalelevel').hide();
                    }

                    if(employee_type !='null'){
                        //alert('ajax call starts');
                        alert(employee_type);
                        $.ajax({
                            url:base_url+'/ESTB/staff/getdesignations_list',
                            method:'GET',
                            data:{'employee_type':employee_type},
                            success:function(data) {
                                //alert(data);
                               console.log(data);
                                var designationsDropdown = $('#designation_id');
                                designationsDropdown.empty(); // Clear existing options
                                data.forEach(function(item) {
                                    designationsDropdown.append($('<option>').text(item['design_name']).attr('value', item['id']));
                                });
                               // alert(designationsDropdown);

                            },
                            error: function (error) {
                                //alert(error);
                                console.log(error);
                            }
                        });
                    }
                });

                //on change of designation , refresh the pay type.
                $(document).on('change','#designation_id',function(){
                    //for re-populating the payscales by reseting the radio button of pay_type
                    //This is connected with (on Change pay type)
                    if($('input[type=radio][name=pay_type]').is(':checked')){
                        //alert('its checked');
                        $('input[type=radio][name=pay_type]').prop('checked', false);
                    }
                });



                /*
                    /    /
                    /   //
                    / /  /
                    /    /

                */
                 //based on designation choosen , the payscales are being vaired through ajax.
                //  $(document).on('change','#designation_id',function(){
                //     //alert('changed');
                //     var employee_type = $('#employee_type').val();
                //     var designation_id = $('#designation_id').val();

                //     //alert(employee_type+'-'+designation_id+'-'+payscale_type);
                //     if(employee_type == "Teaching"){ //for fetching teaching payscales
                //         $.ajax({
                //             url:'/ESTB/staff/getTeachingpayscale_list',
                //             method:'GET',
                //             data:{'designation_id':designation_id},
                //             success:function(data) {
                //                 console.log(data);
                //                 var teachingpayscalesDropdown = $('#payscale_id');
                //                 teachingpayscalesDropdown.empty(); // Clear existing options

                //                 teachingpayscalesDropdown.append($('<option>').text('payscale_title-basepay-maxpay-agp-da-hra').attr('value', 'null'));
                //                 data.forEach(function(item) {
                //                     teachingpayscalesDropdown.append($('<option>').text(item['payscale_title']+"-"+item['basepay']+"-"+item['maxpay']+"-"+item['agp']+"-"+item['da']+"-"+item['hra']).attr('value', item['id']));
                //                 });

                //             },
                //             error: function (error) {
                //                 console.log(error);
                //             }
                //         });
                //     }else if(employee_type == "Non-Teaching"){ // for fetching Non-teaching payscales
                //         //alert('Non teaching Selected');
                //         var payscale_type = $('#payscale_type').val();
                //         if(payscale_type == 0){ // for fetching KLS pay scale

                //             $.ajax({ // ajax call for Non teaching KLS payscale
                //                 url:'/ESTB/staff/getNonTeachingKLSpayscale_list',
                //                 method:'GET',
                //                 data:{'designation_id':designation_id},
                //                 success:function(data) {
                //                     console.log(data.ntpayscales);
                //                     var NTpayscalesDropdown = $('#payscale_id');
                //                     NTpayscalesDropdown.empty(); // Clear existing options
                //                     data.ntpayscales.forEach(function(item) {
                //                         NTpayscalesDropdown.append($('<option>').text(item['title']+"-"+item['payband']).attr('value', item['id']));
                //                     });

                //                 },
                //                 error: function (error) {
                //                     console.log(error);
                //                 }
                //             });
                //         }else if(payscale_type == 1){ // for fetching Consolidated pay scale
                //             $.ajax({ // ajax call for Non teaching Consolidated payscale
                //                 url:'/ESTB/staff/getNTCpayscale_list',
                //                 method:'GET',
                //                 data:{'designation_id':designation_id},
                //                 success:function(data) {
                //                     console.log(data.ntcpayscales);
                //                     var NTCpayscalesDropdown = $('#payscale_id');
                //                     NTCpayscalesDropdown.empty(); // Clear existing options
                //                     NTCpayscalesDropdown.append($('<option>').text('basepay-allowance-year').attr('value', 'null'));

                //                     data.ntcpayscales.forEach(function(item) {
                //                         NTCpayscalesDropdown.append($('<option>').text(item['basepay']+"-"+item['allowance']+"-"+item['year']).attr('value', item['id']));
                //                     });

                //                 },
                //                 error: function (error) {
                //                     console.log(error);
                //                 }
                //             });
                //         }else{
                //             alert('Choose a pay scale Type');
                //             $('#payscale_type').focus();
                //         }

                //     }else{
                //         alert('Choose appropriate Employee type');
                //         $('#employee_type').focus();
                //     }
                //  });

                 //settting the superanuation date based on DoB.
                 $(document).on('change','.dob',function(){
                    var dob = $(this).val();

                    //var doj = $('.doj').val();
                    dob = new Date(dob);
                    var today = new Date();
                    var year = parseInt(dob.getFullYear())+58;
                    var month = parseInt(dob.getMonth())+1;

                     newDoS = new Date(year, month,0); // to get the last date of the month
                     yr      = newDoS.getFullYear();
                     new_dos_month = (parseInt(newDoS.getMonth())+1);
                     mon   =  new_dos_month < 10 ? '0' + new_dos_month : new_dos_month; //
                    day     =  newDoS.getDate(); //new Date(dos.getFullYear(), dos.getDate() + 1, 0) < 10 ? '0' + new Date(dos.getFullYear(), dos.getDate() + 1, 0)  : new Date(dos.getFullYear(), dos.getDate() + 1, 0),

                    final_dos = yr+'-'+mon+'-'+day; // the final dos date.
                    $('.dos').val(final_dos); //updaing it in the field.
                });

                $(document).on('change','#religion_id',function(){
                    //alert('Changed');
                    var religion_id = $(this).val();
                    $.ajax({
                        url:base_url+'/ESTB/staff/getcastecategory_list',
                        method:'GET',
                        data:{'r_id':religion_id},
                        success:function(data) {
                       console.log(data);
                            var castecategoriesDropdown = $('#castecategory_list');
                            castecategoriesDropdown.empty(); // Clear existing options
                            data.forEach(function(item) {
                                castecategoriesDropdown.append($('<option>').text(item['caste_name']+"-"+item['subcastes_name']+"-"+item['category']+"-"+item['category_no']).attr('value', item['id']));
                            });
                                // $.each(data, function (key, value) {
                                //     console.log(value);
                                //
                                // });
                            //$("#castecategory_list").html(data);
                        },
                        error: function (error) {
                            console.log(error);
                        }
                    });

               });

               $(document).on('change','#payscale_type',function(){
                    var payscaletype_val = $(this).val();
                    if(payscaletype_val == 0 ){ // on change of payscale type, reflect the level of increment only when it is KLS pay sclale and not for Consolidated payscale.
                        $('#payscalelevel').show();
                        //alert('level show')
                    }else{
                        $('#payscalelevel').hide();
                    }
               });


               //on change of Pay type , get employee type, designation and then populate appropriate pay
                $(document).on('change','input[type=radio][name=pay_type]',function(){
                    //alert($(this).val());
                    var pay_type = $(this).val();
                    var emp_type = $('#employee_type').val();
                    alert(emp_type);
                    var designation_id = $('#designation_id').val();
                    //$('#payscalelevel').hide();
                    //alert(pay_type+'-'+emp_type+'-'+designation_id);
                    if(pay_type == "Fixed"){
                        $('#fixed_pay_div').show();
                        $('#payscale_div').hide();
                        $('#payscalelevel').hide();
                    }else{
                        $('#fixed_pay_div').hide();
                        // if( $('#payscale_div'))
                        // $('#payscale_div').show();
                        //ajax call for populating the pay

                        $.ajax({
                            url:base_url+'/ESTB/staff/getstaffpay_list',
                            method:'GET',
                            data:{'pay_type':pay_type,'emp_type':emp_type,'designation_id':designation_id},
                            success:function(data) {
                                console.log(data);
                                var staffPayDropdown = $('#payscale_div');
                                staffPayDropdown.empty(); // Clear existing options
                                if(pay_type == "Consolidated"){


                                        $("#payscale_div").html(data);
                                        $('#payscale_div').show();
                                        $('#payscalelevel').hide(); // For displaying the payscale level

                                }else if(pay_type == "Payscale"){
                                    if(emp_type == "Teaching"){

                                        $("#payscale_div").html(data);
                                        $('#payscale_div').show();


                                        $('#payscalelevel').hide();
                                    }else{

                                        $("#payscale_div").html(data);
                                        $("#payscale_div").show();
                                        //$('#payscale_div').hide();
                                        //$('#nt_payscale_div').show();
                                        //$('#payscalelevel').show(); // For displaying the payscale level
                                    }
                                }

                                //$("#castecategory_list").html(data);
                            },
                            error: function (error)
                            {
                                console.log(error);
                            }
                        });
                    }
                });

               $(document).on('change','#associations_id',function(){
            //         alert('Association changed');
                if($(this).val() == 4){ //'Contractual'
                    $('#duration_div').show();
                }else{
                    $('#duration_div').hide();
                }
            });

              /////////// //The association is not connected with designation and payscale.//////////
            //    $(document).on('change','#associations_id',function(){
            //        // alert('Association changed');
            //         var association_id = $(this).val();
            //         var employee_type = $('#employee_type').val();

            //         if(employee_type == 'Teaching'){
            //             //alert(association_id);
            //             if(association_id == 4){ //for contractual (full time)
            //                 //alert('Contractual full time');
            //                 $('#consolidated_pay_div').show();
            //                 $('#payscale_div').hide(); //Consolidated salary doesnt require payscale , so hiding it.

            //             }else{
            //                 //opposit of previous case. (if)
            //                 $('#consolidated_pay_div').hide();
            //                 $('#payscale_div').show();
            //             }
            //         }
            //    });

            $('#hs-radio-group-3').change(function(){
                if ($(this).is(':checked')) {
                    // Select both male and female options
                    $('input[name="gender"]').prop('checked', true);
                }
            });

            });
        </script>

        <script>
            $(document).ready(function() {
                $('#filterBtn').click(function() {
                    var formData = $('#searchForm').serialize();

                    //console.log('123');
                    alert("Search button clicked!");

                    //console.log("Form Data:", formData);

                    // Send AJAX request to server
                    $.ajax({
                        type: 'get',
                        url: 'ESTB/staff/staffinformation',
                        //url: 'staff/staffinformation',

                        data: formData,
                        success: function(response) {
                            $('#staff_table').html(response);
                        },

                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                            //alert("An error occurred. Please try again.");
                        }
                    });
                });
            });
        </script>



        <!-- INDEX JS -->
        <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/index-8.js'); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laravel Apps\gitoffice\resources\views/ESTB/staff/index.blade.php ENDPATH**/ ?>