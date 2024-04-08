<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom-body'); ?>
<body class="authentication-page">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

            <main id="content"  class="w-full max-w-md mx-auto p-6">
                <a href="<?php echo e(url('index')); ?>" class="header-logo">
                    <img src="<?php echo e(asset('build/assets/img/brand-logos/git_logo.jpg')); ?>" alt="logo" class="mx-auto block dark:hidden">
                    <img src="<?php echo e(asset('build/assets/img/brand-logos/git_logo.jpg')); ?>" alt="logo" class="mx-auto hidden dark:block">
                </a>
                <div class="mt-7 bg-white rounded-sm shadow-sm dark:bg-bgdark">
                    <div class="p-4 sm:p-7">
                        <div class="mt-5">
                            <!-- Form -->
                            <form id="passwordForm" action="<?php echo e(route('reset.password.update',$token)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <div class="grid gap-y-4">
                                    <input type="text" name="token" hidden value="<?php echo e($token); ?>">
                                    <!-- Form Group -->
                                    
                                    <!-- End Form Group -->

                                    <!-- Form Group -->
                                    <div>
                                        <div class="flex justify-between items-center">
                                            <label class="block text-sm mb-2 dark:text-white font-bold">New Password</label>
                                        </div>
                                        <div class="relative">
                                            <input placeholder="Enter new password" id="new_password" type="password" name="new_password" class="py-2 px-3 block w-full border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70" required>
                                            <span id="new_password_status"></span>
                                            <?php if($errors->has('new_password')): ?>
                                                <span id="new-password-error" class="text-red"><?php echo e($errors->first('new_password')); ?></span>
                                            <?php endif; ?>
                                            <div id="togglenew_password" style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); cursor: pointer;">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                                                    <path d="M12.0003 3C17.3924 3 21.8784 6.87976 22.8189 12C21.8784 17.1202 17.3924 21 12.0003 21C6.60812 21 2.12215 17.1202 1.18164 12C2.12215 6.87976 6.60812 3 12.0003 3ZM12.0003 19C16.2359 19 19.8603 16.052 20.7777 12C19.8603 7.94803 16.2359 5 12.0003 5C7.7646 5 4.14022 7.94803 3.22278 12C4.14022 16.052 7.7646 19 12.0003 19ZM12.0003 16.5C9.51498 16.5 7.90026 14.4853 7.90026 12C7.90026 9.51472 9.51498 7.5 12.0003 7.5C14.4855 7.5 16.9003 9.51472 16.9003 12C16.9003 14.4853 14.4855 16.5 12.0003 16.5ZM12.0003 14.5C13.381 14.5 14.9003 13.3807 14.9003 12C14.9003 10.6193 13.381 9.5 12.0003 9.5C10.6196 9.5 9.90026 10.6193 9.90026 12C9.90026 13.3807 10.6196 14.5 12.0003 14.5Z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group -->
                                    <div>
                                        <div class="flex justify-between items-center">
                                            <label class="block text-sm mb-2 dark:text-white font-bold">Confirm Password</label>
                                        </div>
                                        <div class="relative">
                                            <input placeholder="Enter Confirm password" id="confirm_password" type="password" name="confirm_password" class="py-2 px-3 block w-full border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70" required>
                                            <span id="confirm_password_status"></span>
                                            <?php if($errors->has('confirm_password')): ?>
                                                <span id="confirm-password-error" class="text-red"><?php echo e($errors->first('confirm_password')); ?></span>
                                            <?php endif; ?>
                                            <div id="toggleconfirm_password" style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); cursor: pointer;">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                                                    <path d="M12.0003 3C17.3924 3 21.8784 6.87976 22.8189 12C21.8784 17.1202 17.3924 21 12.0003 21C6.60812 21 2.12215 17.1202 1.18164 12C2.12215 6.87976 6.60812 3 12.0003 3ZM12.0003 19C16.2359 19 19.8603 16.052 20.7777 12C19.8603 7.94803 16.2359 5 12.0003 5C7.7646 5 4.14022 7.94803 3.22278 12C4.14022 16.052 7.7646 19 12.0003 19ZM12.0003 16.5C9.51498 16.5 7.90026 14.4853 7.90026 12C7.90026 9.51472 9.51498 7.5 12.0003 7.5C14.4855 7.5 16.9003 9.51472 16.9003 12C16.9003 14.4853 14.4855 16.5 12.0003 16.5ZM12.0003 14.5C13.381 14.5 14.9003 13.3807 14.9003 12C14.9003 10.6193 13.381 9.5 12.0003 9.5C10.6196 9.5 9.90026 10.6193 9.90026 12C9.90026 13.3807 10.6196 14.5 12.0003 14.5Z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Checkbox -->
                                    <div class="flex items-center">
                                        <div class="flex">
                                            <input id="remember-me" name="remember-me" type="checkbox"
                                                class="shrink-0 mt-0.5 border-gray-200 rounded text-primary pointer-events-none focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:checked:bg-primary dark:checked:border-primary dark:focus:ring-offset-white/10">
                                        </div>
                                        <div class="ltr:ml-3 rtl:mr-3">
                                            <label for="remember-me" class="text-sm dark:text-white">Remember me</label>
                                        </div>
                                    </div>
                                    <span class="password_error_msg"></span>
                                    <!-- End Checkbox -->

                                    <button type="submit" disabled
                                        class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:outline-none focus:ring-0 focus:ring-primary focus:ring-offset-0 transition-all text-sm dark:focus:ring-offset-white/10 change_pwd_btn">Change
                                        password</button>
                                </div>
                            </form>
                            <!-- End Form -->
                        </div>
                    </div>
                </div>
            </main>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script
    src="https://code.jquery.com/jquery-3.7.1.js"
    integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script> 
        $(document).ready(function () {
            // New password visibility
            $("#togglenew_password").click(function () {
                var passwordInput = $("#new_password");
                var type = passwordInput.attr("type") === "password" ? "text" : "password";
                passwordInput.attr("type", type);
            });

            //confirm paswword visibility 
            $("#toggleconfirm_password").click(function () {
                var passwordInput = $("#confirm_password");
                var type = passwordInput.attr("type") === "password" ? "text" : "password";
                passwordInput.attr("type", type);
            });
       

        //to check the new password matching confirm password 
        $(document).on('keyup', '#confirm_password', function () {
            //alert('Out of confirm password field');
            var new_password = $('#new_password').val();
            var confirm_password = $('#confirm_password').val();
            if((new_password != "" || confirm_password != "") && validatePassword(new_password) &&  validatePassword(confirm_password)){
                    
                if(new_password == confirm_password){
                    $('.password_error_msg').removeClass('text-red-600');
                    $('.password_error_msg').text('Passwords are matching').addClass('text-green-600');
                    $('.change_pwd_btn').addClass('bg-primary').prop("disabled", false);
                    //$('#new_password').addClass('border-green-500');
                    // $('#confirm_password').addClass('border-green-500');
                }else{
                    $('.password_error_msg').removeClass('text-green-600');
                    $('.password_error_msg').text("Passwords are'nt Matching ! Please Check").addClass('text-red-600');
                    $('.change_pwd_btn').attr("disabled");
                    // $('#new_password').addClass('border-red-500');
                    // $('#confirm_password').addClass('border-red-500');
                }
                
            }else{
                if(new_password == "")
                    $('#new_password_status').text('New Password is empty !! Please Fill.').addClass('text-red-600');
                
                if(confirm_password == "")  
                    $('#confirm_password_status').text('Confirm Password is empty !! Please Fill.').addClass('text-red-600');

                 if(validatePassword(new_password) == false)
                        $('#new_password_status').text('The password doesnt satisfy the conditions.').addClass('text-red-600');
                 else
                        $('#new_password_status').text('');
                    
                if(validatePassword(confirm_password) == false)
                    $('#confirm_password_status').text('Confirm Password doesnt satisfy the conditions.').addClass('text-red-600');
                else
                    $('#confirm_password_status').text('');
                    
                $('.password_error_msg').text('Both the passwords must be entered').addClass('text-red-600');
            }
        });
    
    


        function validatePassword(password) {
            // Minimum length requirement
            if (password.length < 8) {
                return false;
            }

            // Check for at least one uppercase and one lowercase letter
            if (!/[a-z]/.test(password) || !/[A-Z]/.test(password)) {
                return false;
            }

            // Check for at least one digit
            if (!/\d/.test(password)) {
                return false;
            }

            return true;
        }
        
    });
    </script> --}}
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.custom-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laravel Apps\gitoffice\resources\views/auth/reset_password.blade.php ENDPATH**/ ?>