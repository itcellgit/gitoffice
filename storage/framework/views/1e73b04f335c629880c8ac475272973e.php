

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
                                <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="#">
                                    Staff Designation & Payscale
                                    <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                </a>
                                </li>
                            </ol>
                        </div>
                        <!-- Page Header Close -->
                        
                    </div>
                    <!-- Start::main-content -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="col-span-12 xl:col-span-12">
                            <div class="box">
                                <div class="box-body">                
                                     <!-- The tabluar representation of designation and payscale data-->
                                <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
                                    <table class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                        <thead class="bg-gray-50 dark:bg-black/20">
                                            <tr>
                                                <th rowspan="2" scope="col" class="dark:text-white/80 font-bold">S.no</th>
                                                <th scope="col" colspan="4" class="dark:text-white/80 font-bold">Designation Details
                                                </th>
                                                <th scope="col" colspan="4" class="dark:text-white/80 text-center font-bold">Pay Scale Details</th>
                                            </tr>
                                        <tr class="">
                                            <th scope="col" class="dark:text-white/80 font-bold">Designation Name</th>
                                            <th scope="col" class="dark:text-white/80 font-bold">Start Date</th>
                                            <th scope="col" class="dark:text-white/80 font-bold">End Date</th>
                                            <th scope="col" class="dark:text-white/80 font-bold">Duration</th>
                                            <th scope="col" class="dark:text-white/20 text-center font-bold">Payscale Title</th>
                                            <th scope="col" class="dark:text-white/80 text-center font-bold">Start Date</th>
                                            <th scope="col" class="dark:text-white/80 text-center font-bold">End Date</th>
                                            <th scope="col" class="dark:text-white/80 text-center font-bold">Duration </th>
                                            
                                        </tr>
                                        </thead>
                                        <?php
                                            $i=1;
                                        ?>
                                        <tbody class="">
                                            <?php $__currentLoopData = $staff->designations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $designation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($designation->isadditional == 0 ): ?> <!--For working with regular designations-->
                                                    <?php
                                                    $rowcount=0;
                                                        
                                                            if($staff->teaching_payscale !=null){
                                                                foreach($staff->teaching_payscale as $tp)
                                                                {
                                                                    if($designation->pivot->end_date==null && $tp->pivot->start_date>=$designation->pivot->start_date)
                                                                    {    
                                                                        $rowcount++;
                                                                        
                                                                    }
                                                                    elseif($tp->pivot->start_date>=$designation->pivot->start_date && $tp->pivot->end_date<=$designation->pivot->end_date && $tp->pivot->end_date!=null)
                                                                    {
                                                                        $rowcount++;
                                                                    
                                                                    }
                                                                }
                                                            }
                                                        //  $rowcount++;
                                                            if($staff->consolidated_teaching_pay !=null){
                                                                foreach($staff->consolidated_teaching_pay as $ctp){
                                                                    if($designation->pivot->end_date==null && $ctp->start_date>=$designation->pivot->start_date)
                                                                    {
                                                                        $rowcount++;
                                                                    }
                                                                    elseif($ctp->start_date>=$designation->pivot->start_date && $ctp->end_date<=$designation->pivot->end_date && $ctp->end_date!=null)
                                                                    {
                                                                        $rowcount++;
                                                                    
                                                                    }
                                                                }
                                                            }
                                                            
                                                        
                                                        
                                                            //for getting the non-teaching rowcount
                                                            if($staff->ntpayscale!=null)
                                                            {
                                                                
                                                                foreach($staff->ntpayscale as $ntp)
                                                                {
                                                        
                                                                    if($designation->pivot->end_date==null && $ntp->pivot->start_date>=$designation->pivot->start_date)
                                                                    {
                                                                        $rowcount++;
                                                                    }
                                                                    elseif($ntp->pivot->start_date>=$designation->pivot->start_date && $ntp->pivot->end_date<=$designation->pivot->end_date && $ntp->pivot->end_date!=null)
                                                                    {
                                                                    
                                                                        $rowcount++;
                                                                    
                                                                    }
                                                                }
                                                            
                                                            }
                                                            if($staff->ntcpayscale!=null)
                                                            {
                                                                foreach($staff->ntcpayscale as $ntcp)
                                                                {
                                                                    if($designation->pivot->end_date==null && $ntcp->pivot->start_date>=$designation->pivot->start_date)
                                                                    {
                                                                        $rowcount++;
                                                                    }
                                                                    elseif($ntcp->pivot->start_date>=$designation->pivot->start_date && $ntcp->pivot->end_date<=$designation->pivot->end_date && $ntcp->pivot->end_date!=null)
                                                                    {
                                                                        $rowcount++;
                                                                    
                                                                    }
                                                                }
                                                            }
                                                            if($staff->fixed_nt_pay!=null)
                                                            {
                                                                foreach($staff->fixed_nt_pay as $fntp)
                                                                {
                                                                    if($designation->pivot->end_date==null && $fntp->start_date>=$designation->pivot->start_date)
                                                                    {
                                                                        $rowcount++;
                                                                    }
                                                                    elseif($fntp->start_date>=$designation->pivot->start_date && $fntp->end_date<=$designation->pivot->end_date && $fntp->end_date!=null)
                                                                    {
                                                                        $rowcount++;
                                                                    
                                                                    }
                                                                }
                                                            }
                                                        $rowcount++;
                                                    
                                                        
                                                    ?>

                                                    <tr class="<?php echo e($designation->pivot->status =='inactive'?'bg-gray-200':''); ?>">
                                                        <td rowspan=<?php echo e($rowcount); ?>><?php echo e($i++); ?>   </td>
                                                        <td rowspan=<?php echo e($rowcount); ?>>
                                                            <div class="flex space-x-3 rtl:space-x-reverse w-full min-w-[200px]">
                                                                <div class="block w-full my-auto">
                                                                <?php echo e($designation->design_name); ?> 
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td rowspan=<?php echo e($rowcount); ?>><span><?php echo e(\Carbon\Carbon::parse($designation->pivot->start_date)->format('d-M-Y')); ?></span></td>
                                                        <td rowspan=<?php echo e($rowcount); ?>><span><?php echo e($designation->pivot->end_date==null?'--NA--': \Carbon\Carbon::parse($designation->pivot->end_date)->format('d-M-Y')); ?></span></td>
                                                        <td rowspan=<?php echo e($rowcount); ?>><span>
                                                            <?php
                                                                $sdate=new DateTime($designation->pivot->start_date);
                                                        
                                                                if ($designation->pivot->end_date!=null)
                                                                    $edate=new DateTime($designation->pivot->end_date);
                                                                else
                                                                    $edate=Carbon\Carbon::now();
                                                                    $difference=$sdate->diff($edate);
                                                                ?>    
                                                    
                                                                    <?php echo e($difference->y."years ".$difference->m."months ".$difference->d."days"); ?>

                                                        </span>
                                                        </td>
                                                       
                                                    </tr>

                                                    <!-- Payscale and Designation Display for Teaching-->
                                                    
                                                        
                                                        <?php if($staff->teaching_payscale != null): ?> <!-- For checking if teaching payscale is null-->
                                                            
                                                            <?php $__empty_1 = true; $__currentLoopData = $staff->teaching_payscale; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payscale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                                <?php if($designation->pivot->end_date!=null && $designation->isadditonal==0): ?>
                                                                    <?php if($payscale->pivot->start_date>=$designation->pivot->start_date && $payscale->pivot->end_date!=null && $payscale->pivot->end_date<=$designation->pivot->end_date): ?>
                                                                        <tr class="<?php echo e($payscale->pivot->status =='inactive'?'bg-gray-200':''); ?>">
                                                                                
                                                                            <td><span><?php echo e($payscale->payscale_title.'-'.$payscale->agp); ?></span></td>
                                                                            <td><span><?php echo e(\Carbon\Carbon::parse($payscale->pivot->start_date)->format('d-M-Y')); ?></span></td>
                                                                            <td><span><?php echo e($payscale->pivot->end_date ==null ?'--NA--': \Carbon\Carbon::parse($payscale->pivot->end_date)->format('d-M-Y')); ?></span></td>
                                                                            <td><span>
                                                                                <?php
                                                                                    $sdate=new DateTime($payscale->pivot->start_date);
                                                                
                                                                                    if ($payscale->pivot->end_date!=null)
                                                                                        $edate=new DateTime($payscale->pivot->end_date);
                                                                                    else
                                                                                        $edate=Carbon\Carbon::now();
                                                                                        $difference=$sdate->diff($edate);
                                                                                ?>    
                                                            
                                                                                <?php echo e($difference->y."years ".$difference->m."months ".$difference->d."days"); ?>


                                                                            </span></td>
                                                                        </tr>    
                                                                    <?php endif; ?>
                                                                <?php else: ?>
                                                                    <?php if($payscale->pivot->end_date==null|| ($payscale->pivot->end_date>$designation->pivot->start_date )): ?>
                                                                        <tr class="<?php echo e($payscale->pivot->status =='inactive'?'bg-gray-200':''); ?>"> 
                                                                                        
                                                                            <td><span><?php echo e($payscale->payscale_title.'-'.$payscale->agp); ?></span></td>
                                                                            <td><span><?php echo e(\Carbon\Carbon::parse($payscale->pivot->start_date)->format('d-M-Y')); ?></span></td>
                                                                            <td><span><?php echo e(($payscale->pivot->end_date ==null ?'--NA--':\Carbon\Carbon::parse($payscale->pivot->end_date)->format('d-M-Y'))); ?></span></td>
                                                                            <td><span>
                                                                                <?php
                                                                                    $sdate=new DateTime($payscale->pivot->start_date);
                                                        
                                                                                    if ($payscale->pivot->end_date!=null)
                                                                                        $edate=new DateTime($payscale->pivot->end_date);
                                                                                    else
                                                                                                    $edate=Carbon\Carbon::now();
                                                                                                    $difference=$sdate->diff($edate);
                                                                                                ?>    
                                                    
                                                                                                <?php echo e($difference->y."years ".$difference->m."months ".$difference->d."days"); ?>


                                                                            </span></td>
                                                                            
                                                                        </tr>   
                                                                    <?php endif; ?>
                                                                    
                                                                            
                                                                <?php endif; ?>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                                                            <?php endif; ?>
                                                        <?php endif; ?> 
                                                    <!-- For displaying the consolidated payscales for teaching staff.-->
                                                    <?php if($staff->consolidated_teaching_pay != null): ?>
                                                            <?php $__empty_1 = true; $__currentLoopData = $staff->consolidated_teaching_pay; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cons_teaching_pay): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                                <?php if($designation->pivot->end_date!=null && $designation->isadditonal==0): ?>
                                                                    <?php if($cons_teaching_pay->start_date>=$designation->pivot->start_date && $cons_teaching_pay->end_date!=null && $cons_teaching_pay->end_date<=$designation->pivot->end_date): ?>
                                                                        <tr class="<?php echo e($cons_teaching_pay->status =='inactive'?'bg-gray-200':''); ?>">
                                                                            
                                                                            <td><span><?php echo e($cons_teaching_pay->pay); ?></span></td>
                                                                            <td><span><?php echo e(\Carbon\Carbon::parse($cons_teaching_pay->start_date)->format('d-M-Y')); ?></span></td>
                                                                            <td><span><?php echo e($cons_teaching_pay->end_date ==null ?'--NA--': \Carbon\Carbon::parse($cons_teaching_pay->end_date)->format('d-M-Y')); ?></span></td>
                                                                            <td><span>
                                                                                    <?php
                                                                                        $sdate=new DateTime($cons_teaching_pay->start_date);
                                                            
                                                                                        if ($cons_teaching_pay->end_date!=null)
                                                                                            $edate=new DateTime($cons_teaching_pay->end_date);
                                                                                        else
                                                                                            $edate=Carbon\Carbon::now();
                                                                                            $difference=$sdate->diff($edate);
                                                                                        ?>    
                                                        
                                                                                        <?php echo e($difference->y."years ".$difference->m."months ".$difference->d."days"); ?>


                                                                            </span></td>
                                                                            <td><!--Action button not added.--></td>
                                                                        </tr>
                                                                    <?php endif; ?>  
                                                                <?php else: ?>
                                                                    <?php if($cons_teaching_pay->end_date==null|| ($cons_teaching_pay->end_date>$designation->pivot->start_date)): ?>
                                                                        <tr class="<?php echo e($cons_teaching_pay->status =='inactive'?'bg-gray-200':''); ?>"> 
                                                                                    
                                                                                <td><span><?php echo e($cons_teaching_pay->pay); ?></span></td>
                                                                                <td><span><?php echo e(\Carbon\Carbon::parse($cons_teaching_pay->start_date)->format('d-M-Y')); ?></span></td>
                                                                                <td><span><?php echo e(($cons_teaching_pay->end_date ==null ?'--NA--':\Carbon\Carbon::parse($cons_teaching_pay->end_date)->format('d-M-Y'))); ?></span></td>
                                                                                <td><span>
                                                                                    <?php
                                                                                        $sdate=new DateTime($cons_teaching_pay->start_date);
                                                    
                                                                                            if ($cons_teaching_pay->end_date!=null)
                                                                                                $edate=new DateTime($cons_teaching_pay->end_date);
                                                                                            else
                                                                                                $edate=Carbon\Carbon::now();
                                                                                                $difference=$sdate->diff($edate);
                                                                                            ?>    
                                                
                                                                                            <?php echo e($difference->y."years ".$difference->m."months ".$difference->d."days"); ?>


                                                                                </span></td>
                                                                                
                                                                        </tr>   
                                                                        <?php endif; ?>
                                                                
                                                                        
                                                                <?php endif; ?> 
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                            
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                        <!-- End of Teaching consolidated payscale -->
                                                    </tr>  
                                                    <!-- Teaching section designation and payscale ends here-->
                                                
                                                <!--Non teaching Section starts here-->
                                                
                                                        <?php if($staff->ntpayscale != null): ?>
                                                            <?php $__currentLoopData = $staff->ntpayscale; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ntpays): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            
                                                                <?php if($designation->pivot->end_date==null && $ntpays->pivot->start_date>=$designation->pivot->start_date): ?>

                                                                    <tr class="<?php echo e($ntpays->pivot->status =='inactive'?'bg-gray-200':''); ?>">
                                                                        
                                                                        <td>  
                                                                            <?php
                                                                                $level1_payscales =  explode("-",$ntpays->payband)
                                                                            ?> 
                                                                            <?php if($ntpays->pivot->level == 1): ?>
                                                                                
                                                                                <?php echo e($level1_payscales[0].'-'.$level1_payscales[1].'-'.$level1_payscales[2]); ?>

                                                                            
                                                                            <?php elseif($ntpays->pivot->level == 2): ?>
                                                                            
                                                                                <?php echo e($level1_payscales[2].'-'.$level1_payscales[3].'-'.$level1_payscales[4]); ?>

                                                                                
                                                                            <?php else: ?>
                                                                                    
                                                                                <?php echo e($level1_payscales[4].'-'.$level1_payscales[5].'-'.$level1_payscales[6]); ?>

                                                                            
                                                                            <?php endif; ?>
                                                                        </td>
                                                                        <td><?php echo e(\Carbon\Carbon::parse($ntpays->pivot->start_date)->format('d-M-Y')); ?></td>
                                                                        <td><?php echo e(($ntpays->pivot->end_date == null ? '--NA--': \Carbon\Carbon::parse($ntpays->pivot->end_date)->format('d-M-Y') )); ?></td>
                                                                        <td>
                                                                        <?php
                                                                                    $sdate=new DateTime($ntpays->pivot->start_date);
                                                        
                                                                                    if ($ntpays->pivot->end_date!=null)
                                                                                        $edate=new DateTime($ntpays->pivot->end_date);
                                                                                    else
                                                                                        $edate=Carbon\Carbon::now();
                                                                                        $difference=$sdate->diff($edate);
                                                                                    ?>    
                                                    
                                                                                    <?php echo e($difference->y."years ".$difference->m."months ".$difference->d."days"); ?>


                                                                        </td>
                                                                       
                                                                    </tr>
                                                                <?php elseif($ntpays->pivot->start_date>=$designation->pivot->start_date && $ntpays->pivot->end_date<=$designation->pivot->end_date && $ntpays->pivot->end_date!=null): ?>
                                                                <!--Checking if designation is closed if non-teaching payscale should be between start date and end date-->
                                                                <tr class="<?php echo e($ntpays->pivot->status =='inactive'?'bg-gray-200':''); ?>">
                                                                        
                                                                    <td>  
                                                                        <?php
                                                                            $level1_payscales =  explode("-",$ntpays->payband)
                                                                        ?> 
                                                                        <?php if($ntpays->pivot->level == 1): ?>
                                                                            
                                                                            <?php echo e($level1_payscales[0].'-'.$level1_payscales[1].'-'.$level1_payscales[2]); ?>

                                                                        
                                                                        <?php elseif($ntpays->pivot->level == 2): ?>
                                                                        
                                                                            <?php echo e($level1_payscales[2].'-'.$level1_payscales[3].'-'.$level1_payscales[4]); ?>

                                                                            
                                                                        <?php else: ?>
                                                                                
                                                                            <?php echo e($level1_payscales[4].'-'.$level1_payscales[5].'-'.$level1_payscales[6]); ?>

                                                                        
                                                                        <?php endif; ?>
                                                                    </td>
                                                                    <td><?php echo e(\Carbon\Carbon::parse($ntpays->pivot->start_date)->format('d-M-Y')); ?></td>
                                                                    <td><?php echo e(($ntpays->pivot->end_date == null ? '--NA--': \Carbon\Carbon::parse($ntpays->pivot->end_date)->format('d-M-Y') )); ?></td>
                                                                    <td>
                                                                    <?php
                                                                                $sdate=new DateTime($ntpays->pivot->start_date);
                                                    
                                                                                if ($ntpays->pivot->end_date!=null)
                                                                                    $edate=new DateTime($ntpays->pivot->end_date);
                                                                                else
                                                                                    $edate=Carbon\Carbon::now();
                                                                                    $difference=$sdate->diff($edate);
                                                                                ?>    
                                                
                                                                                <?php echo e($difference->y."years ".$difference->m."months ".$difference->d."days"); ?>


                                                                    </td>
                                                                    
                                                                </tr>
                                                                <!--ends here-->
                                                            <?php endif; ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <?php endif; ?>
                                                            <!--End of non teaching designation and poayscale section-->
                                                                <!--For non-teaching Consolidated payscale-->
                                                            <?php if($staff->ntcpayscale !=null): ?>
                                                                <?php $__currentLoopData = $staff->ntcpayscale; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ntcpays): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if($designation->pivot->end_date==null && $ntcpays->pivot->start_date>=$designation->pivot->start_date): ?>
                                                                    <tr class="<?php echo e($ntcpays->pivot->status =='inactive'?'bg-gray-200':''); ?>">
                                                                        <td>  
                                                                            <?php echo e($ntcpays->basepay.'-'.$ntcpays->allowance.'-'.$ntcpays->year.' Year'); ?>

                                                                        </td>
                                                                        <td><?php echo e(\Carbon\Carbon::parse($ntcpays->pivot->start_date)->format('d-M-Y')); ?></td>
                                                                        <td><?php echo e($ntcpays->pivot->end_date == null? '--NA--': \Carbon\Carbon::parse($ntcpays->pivot->end_date)->format('d-M-Y')); ?></td>
                                                                        <td>
                                                                            <?php
                                                                                $sdate=new DateTime($ntcpays->pivot->start_date);
                                                    
                                                                                if ($ntcpays->pivot->end_date!=null)
                                                                                    $edate=new DateTime($ntcpays->pivot->end_date);
                                                                                else
                                                                                    $edate=Carbon\Carbon::now();
                                                                                    $difference=$sdate->diff($edate);
                                                                            ?>    
                                                            
                                                                            <?php echo e($difference->y."years ".$difference->m."months ".$difference->d."days"); ?>


                                                                        </td>
                                                                        
                                                                        </tr>
                                                                    <?php elseif($ntcpays->pivot->start_date>=$designation->pivot->start_date && $ntcpays->pivot->end_date<=$designation->pivot->end_date && $ntcpays->pivot->end_date!=null): ?>
                                                                    <tr class="<?php echo e($ntcpays->pivot->status =='inactive'?'bg-gray-200':''); ?>">
                                                                        <td>  
                                                                            <?php echo e($ntcpays->basepay.'-'.$ntcpays->allowance.'-'.$ntcpays->year.' Year'); ?>

                                                                        </td>
                                                                        <td><?php echo e(\Carbon\Carbon::parse($ntcpays->pivot->start_date)->format('d-M-Y')); ?></td>
                                                                        <td><?php echo e($ntcpays->pivot->end_date == null? '--NA--': \Carbon\Carbon::parse($ntcpays->pivot->end_date)->format('d-M-Y')); ?></td>
                                                                        <td>
                                                                            <?php
                                                                                $sdate=new DateTime($ntcpays->pivot->start_date);
                                                    
                                                                                if ($ntcpays->pivot->end_date!=null)
                                                                                    $edate=new DateTime($ntcpays->pivot->end_date);
                                                                                else
                                                                                    $edate=Carbon\Carbon::now();
                                                                                    $difference=$sdate->diff($edate);
                                                                            ?>    
                                                            
                                                                            <?php echo e($difference->y."years ".$difference->m."months ".$difference->d."days"); ?>


                                                                        </td>

                                                                       
                                                                        </tr> 
                                                                    <?php endif; ?>   
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                                            <?php endif; ?>
                                                            <!--Non Teaching fixed salary section-->
                                                            <?php if($staff->fixed_nt_pay !=null): ?>
                                                                <?php $__empty_1 = true; $__currentLoopData = $staff->fixed_nt_pay; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fntp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                                <!--CHeck with designation and display accordingly-->
                                                                <?php if($designation->pivot->end_date==null && $fntp->start_date>=$designation->pivot->start_date): ?>
                                                                    <tr class="<?php echo e($fntp->status =='inactive'?'bg-gray-200':''); ?>">
                                                                        <td>  
                                                                            <?php echo e($fntp->pay); ?> 
                                                                        </td>
                                                                        <td><?php echo e(\Carbon\Carbon::parse($fntp->start_date)->format('d-M-Y')); ?></td>
                                                                        <td><?php echo e($fntp->end_date == null? '--NA--': \Carbon\Carbon::parse($fntp->end_date)->format('d-M-Y')); ?></td>
                                                                        <td>
                                                                            <?php
                                                                                $sdate=new DateTime($fntp->start_date);
                                                    
                                                                                if ($fntp->end_date!=null)
                                                                                    $edate=new DateTime($fntp->end_date);
                                                                                else
                                                                                    $edate=Carbon\Carbon::now();
                                                                                    $difference=$sdate->diff($edate);
                                                                            ?>    
                                                            
                                                                                            <?php echo e($difference->y."years ".$difference->m."months ".$difference->d."days"); ?>


                                                                        </td>
                                                                        
                                                                    </tr>
                                                                    <?php elseif($fntp->start_date>=$designation->pivot->start_date && $fntp->end_date<=$designation->pivot->end_date && $fntp->end_date!=null): ?>
                                                                        <!--Check for designation ended matching payscale-->
                                                                        <tr class="<?php echo e($fntp->status =='inactive'?'bg-gray-200':''); ?>">
                                                                            <td>  
                                                                                <?php echo e($fntp->pay); ?>

                                                                            </td>
                                                                            <td><?php echo e(\Carbon\Carbon::parse($fntp->start_date)->format('d-M-Y')); ?></td>
                                                                            <td><?php echo e($fntp->end_date == null? '--NA--': \Carbon\Carbon::parse($fntp->end_date)->format('d-M-Y')); ?></td>
                                                                            <td>
                                                                                <?php
                                                                                    $sdate=new DateTime($fntp->start_date);
                                                        
                                                                                    if ($fntp->end_date!=null)
                                                                                        $edate=new DateTime($fntp->end_date);
                                                                                    else
                                                                                        $edate=Carbon\Carbon::now();
                                                                                        $difference=$sdate->diff($edate);
                                                                                ?>    
                                                                
                                                                                                <?php echo e($difference->y."years ".$difference->m."months ".$difference->d."days"); ?>

                            
                                                                            </td>
                                                                           
                                                                        </tr>
                                                                        <!-- Checking with designation ends here-->
                                                                    <?php endif; ?>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                                        
                                                            <?php endif; ?>
                                                            
                                                        <?php endif; ?>

                                                        <!--End of non-teaching fixed pay (if)-->
                                                        
                                                    
                                            <?php endif; ?> <!--end if for addiotional designation checking--> 
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                        </tbody>
                                    </table>  
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
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
        
        <script
        src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
        <script>
            $(document).ready(function(){
            });
        </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.components.staff.master-nonteaching', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laravel Apps\gitoffice\resources\views/Staff/Non-Teaching/designations.blade.php ENDPATH**/ ?>