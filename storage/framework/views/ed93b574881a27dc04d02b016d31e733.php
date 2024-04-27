<div class="mb-0 border-0 shadow-none box">
    <div class="box-header">
        <h5 class="flex leading-none box-title"><i class="ri ri-global-line ltr:mr-2 rtl:ml-2"></i> Department History</h5>
    </div>
    <div class="box-body">
        <div class="space-y-2">


        </div>
        <button data-hs-overlay="#change_department" class="hs-dropdown-toggle ti-btn ti-btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M17 19H19V11H13V19H15V13H17V19ZM3 19V4C3 3.44772 3.44772 3 4 3H18C18.5523 3 19 3.44772 19 4V9H21V19H22V21H2V19H3ZM7 11V13H9V11H7ZM7 15V17H9V15H7ZM7 7V9H9V7H7Z" fill="rgba(255,255,255,1)"></path></svg>
            Change Department
        </button>
        <div id="change_department" class="hidden hs-overlay ti-modal">
            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                <div class="ti-modal-content">
                    <div class="ti-modal-header">
                        <h3 class="ti-modal-title">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                            Change Department of <span class="text-red-400"><?php echo e($staff->fname.' '.$staff->mname.' '.$staff->lname); ?></span>
                        </h3>
                        <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                        data-hs-overlay="#hs-medium-modal">
                        <span class="sr-only">Close</span>
                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                            d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                            fill="currentColor" />
                        </svg>
                        </button>
                    </div>
                    <form  action="<?php echo e(route('ESTB.staff.department.update',$staff->id)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('patch'); ?>
                        <div class="ti-modal-body">
                            <div class="grid gap-1 space-y-2 lg:grid-cols-1 lg:space-y-0">
                                <div class="space-y-2">
                                    <label class="mb-0 font-bold ti-form-label">Department List</label>
                                        <?php
                                            $checked="";
                                            $counter = 0;
                                        ?>
                                        <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php $__currentLoopData = $staff->departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dept): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($department->id==$dept->id && $dept->pivot->status=="active"): ?>
                                                    <?php
                                                        $checked="checked";
                                                        break;
                                                    ?>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            <div class="flex">

                                                <input type="checkbox" name="departments[]"  value="<?php echo e($department->id); ?>" <?php echo e($checked); ?> class="ti-form-checkbox mt-0.5" id="hs-checkbox-group-1">
                                                <label for="hs-checkbox-group-1" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70"><?php echo e($department->dept_name); ?></label>
                                            </div>
                                            <?php
                                                $checked="";
                                            ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>

                            </div>
                            <div class="grid gap-2 space-y-2 lg:grid-cols-2 lg:space-y-0">
                                <div class="space-y-2">
                                        <label for="" class="mb-0 font-bold ti-form-label">Effect from Date :</label>
                                        <div class="flex max-w-sm pb-6 space-y-3 shadow-sm">

                                            <div class="inline-flex items-center px-4 border border-gray-200 min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm ltr:border-r-0 rtl:border-l-0 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z"></path></svg>
                                            </div>

                                            <input type="date" name="start_date"
                                                class="rounded-l-none ti-form-input focus:z-10 flatpickr-input date"
                                                id="date" placeholder="Choose date">
                                        </div>
                                </div>
                                <div class="space-y-2">
                                        <label for="" class="mb-0 font-bold ti-form-label">Reason:</label>
                                        <input type="text" name="reason" class="ti-form-input"/>
                                </div>

                            </div>
                            <div class="grid gap-1 space-y-2 lg:grid-cols-1 lg:space-y-0">
                                <div class="space-y-2">
                                    <label for="" class="mb-0 font-bold ti-form-label">GC Resolution:</label>
                                    <input type="text" name="gcr" class="ti-form-input"/>
                                </div>
                            </div>
                        </div>
                        <div class="ti-modal-footer">
                            <button type="button"
                            class="font-medium text-gray-700 align-middle bg-white shadow-sm hs-dropdown-toggle ti-btn ti-border hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                            data-hs-overlay="#change_department">
                            Close
                            </button>

                            <input type="submit" class="text-white ti-btn bg-primary hover:bg-warning focus:ring-primary dark:focus:ring-offset-white/10" value="Update"/>

                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="overflow-auto rounded-sm table-auto table-bordered ti-custom-table-head">
            <table class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                <thead class="bg-gray-50 dark:bg-black/20">
                <tr class="">
                    <th scope="col" class="font-bold dark:text-white/80 ">S.no</th>
                    <th scope="col" class="font-bold dark:text-white/80">Department Name</th>
                    <th scope="col" class="font-bold dark:text-white/80">Start Date</th>
                    <th scope="col" class="font-bold dark:text-white/80">End Date</th>
                    <th scope="col" class="font-bold dark:text-white/80">Duration</th>
                    <th scope="col" class="font-bold dark:text-white/80">Status</th>
                    <th scope="col" class="font-bold dark:text-white/80">Actions</th>

                </tr>
                </thead>
                <?php
                    $i=1;
                ?>
                <tbody class="">
                    <?php $__currentLoopData = $staff->departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dept): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <tr class="<?php echo e($dept->pivot->status =='active'?'':'bg-gray-200'); ?>">
                        <td><?php echo e($i++); ?></td>
                        <td>
                        <div class="flex space-x-3 rtl:space-x-reverse w-full min-w-[200px]">
                            <div class="block w-full my-auto">

                                    <?php echo e($dept->dept_name); ?>


                            </div>
                        </div>
                        </td>
                        <td><span><?php echo e(\Carbon\Carbon::parse($dept->pivot->start_date)->format('d-M-Y')); ?></span></td>
                        <td><span><?php echo e($dept->pivot->end_date==null?'--NA--':\Carbon\Carbon::parse($dept->pivot->end_date)->format('d-M-Y')); ?></span></td>
                        <td><span>
                            <?php
                                        $sdate=new DateTime($dept->pivot->start_date);

                                        if ($dept->pivot->end_date!=null)
                                            $edate=new DateTime($dept->pivot->end_date);
                                        else
                                            $edate=Carbon\Carbon::now();
                                            $difference=$sdate->diff($edate);
                                        ?>

                               <?php echo e($difference->y."years ".$difference->m."months ".$difference->d."days"); ?>

                            </span></td>
                        <td><span><?php echo e($dept->pivot->status); ?></span></td>

                        <td>
                            <!--Edit modal for departments staff-->
                            <button class="relative w-8 h-8 p-0 m-0 transition-none rounded-full hs-dropdown-toggle hs-tooltip-toggle ti-btn focus:outline-none ti-btn-soft-secondary"
                            data-hs-overlay="#edit_department<?php echo e($i); ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                             <span
                                        class="px-2 py-1 text-xs font-medium text-white bg-gray-900 shadow-sm hs-tooltip-content ti-main-tooltip-content dark:bg-slate-700"
                                        role="tooltip">
                                        Edit
                                    </span>
                            </button>
                            <div id="edit_department<?php echo e($i); ?>" class="hidden hs-overlay ti-modal">
                                <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                    <div class="ti-modal-content">
                                        <div class="ti-modal-header">
                                            <h3 class="ti-modal-title">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                 Edit Department of <span class="text-red-400"><?php echo e($staff->fname.' '.$staff->mname.' '.$staff->lname. ' '); ?>

                                                </span>
                                            </h3>
                                            <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                            data-hs-overlay="#edit_department<?php echo e($i); ?>">
                                            <span class="sr-only">Close</span>
                                            <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                fill="currentColor" />
                                            </svg>
                                            </button>
                                        </div>
                                        <form  action="<?php echo e(route('ESTB.staff.department.correction',[$staff->id,$dept->id])); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('patch'); ?>
                                            <div class="ti-modal-body">
                                                    <?php if($dept->pivot->status == 'closed'): ?>
                                                    <br/>
                                                        <div class="flex">
                                                            <input type="radio" name="status" class="ti-form-radio" id="hs-radio-group-2" value="active">
                                                            <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Make it Active</label>
                                                        </div>
                                                    <?php else: ?>
                                                        <div class="grid gap-1 space-y-2 lg:grid-cols-1 lg:space-y-0">
                                                            <div class="space-y-2">
                                                                <label class="mb-0 font-bold ti-form-label">Department</label>
                                                                <select class="ti-form-select" name="departments_id">
                                                                    <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option value="<?php echo e($department->id); ?>" <?php echo e(($department->id==$dept->id?'selected':'')); ?>><?php echo e($department->dept_name); ?></option>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </select>
                                                            </div>

                                                        </div>
                                                        <div class="grid gap-2 space-y-2 lg:grid-cols-2 lg:space-y-0">
                                                            <div class="space-y-2">
                                                                    <label for="" class="mb-0 font-bold ti-form-label">Effect from Date :</label>
                                                                    <div class="flex max-w-sm pb-6 space-y-3 shadow-sm">

                                                                        <div class="inline-flex items-center px-4 border border-gray-200 min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm ltr:border-r-0 rtl:border-l-0 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z"></path></svg>
                                                                        </div>

                                                                        <input type="date" name="start_date"
                                                                            class="rounded-l-none ti-form-input focus:z-10 flatpickr-input date"
                                                                            id="date" placeholder="Choose date" value="<?php echo e($dept->pivot->start_date); ?>">
                                                                    </div>
                                                            </div>

                                                            <div class="space-y-2">
                                                                    <label for="" class="mb-0 font-bold ti-form-label">Reason</label>
                                                                    <input type="text" name="reason" class="ti-form-input" value="<?php echo e($dept->pivot->reason); ?>"/>
                                                            </div>

                                                        </div>
                                                        <div class="grid gap-2 space-y-2 lg:grid-cols-2 lg:space-y-0">
                                                            <div class="space-y-2">
                                                                <label for="" class="mb-0 font-bold ti-form-label">GC Resolution:</label>
                                                                <input type="text" name="gcr" class="ti-form-input" value="<?php echo e($dept->pivot->gcr); ?>"/>
                                                            </div>

                                                        </div>

                                                        <?php endif; ?>
                                            </div>
                                            <div class="ti-modal-footer">
                                                <button type="button"
                                                class="font-medium text-gray-700 align-middle bg-white shadow-sm hs-dropdown-toggle ti-btn ti-border hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                data-hs-overlay="#edit_department<?php echo e($i); ?>">
                                                Close
                                                </button>

                                                <input type="submit" class="text-white ti-btn bg-primary hover:bg-warning focus:ring-primary dark:focus:ring-offset-white/10" value="Update"/>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--Edit modal for departments staff ends-->
                            <!-- Delete the entry only when the duration is within 1 month of change of the department-->
                            <?php if($dept->pivot->status == 'active' && ($difference->y ==0 && $difference->m <= 1)): ?>
                            <div class="hs-tooltip ti-main-tooltip">
                                <form action="<?php echo e(route('ESTB.staff.departments.destroy',[$staff->id,$dept->pivot->id])); ?>" method="post">

                                   <button onclick="return confirm('Are you Sure')"
                                    class="relative w-8 h-8 p-0 m-0 transition-none rounded-full hs-tooltip-toggle ti-btn focus:outline-none ti-btn-soft-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M7 4V2H17V4H22V6H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V6H2V4H7ZM6 6V20H18V6H6ZM9 9H11V17H9V9ZM13 9H15V17H13V9Z"></path></svg>
                                    <?php echo method_field('delete'); ?>
                                     <?php echo csrf_field(); ?>
                                    <span
                                        class="px-2 py-1 text-xs font-medium text-white bg-gray-900 shadow-sm hs-tooltip-content ti-main-tooltip-content dark:bg-slate-700"
                                        role="tooltip">
                                        Delete
                                    </span>
                                    </button>
                                </form>
                                </div>
                            <!-- Delete the entry ends-->
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php /**PATH F:\laravel Apps\gitoffice\resources\views//ESTB/staff/staffdepartments.blade.php ENDPATH**/ ?>