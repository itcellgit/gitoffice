<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" class="light" data-header-styles="light" data-menu-styles="dark">
	<head>

		<!-- META DATA -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Tailwind Responsive Admin Web Dashboard Laravel Template">
        <meta name="keywords" content="admin, admin tailwind, laravel admin template, admin laravel, tailwind laravel, admin dashboard template, laravel tailwind, admin dashboard, admin panel, admin template, laravel admin dashboard, tailwind, laravel dashboard template, admin panel template, laravel admin panel, laravel dashboard">
        <meta name="csrf-token" content="{{csrf_token()}}"/>
        <!-- TITLE -->
		<title> KLS GIT | OFFICE </title>

        <!-- FAVICON -->
        <link rel="shortcut icon" href="{{asset('build/assets/img/brand-logos/favicon.ico')}}">

        <!-- APP CSS -->
        @vite(['resources/css/app.css'])


        <!-- APP SCSS -->
        @vite(['resources/sass/app.scss'])

        
        <!-- SIMPLEBAR CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/simplebar/simplebar.min.css')}}">

        <!-- COLOR PICKER CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/@simonwep/pickr/themes/nano.min.css')}}">

        <!-- MAIN JS -->
        <script src="{{asset('build/assets/main.js')}}"></script>

        <!--CDN for datatables-->
        <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet"> 

        @yield('styles')

        <script>
            var base_url = "{{URL::to('/')}}";
        </script>

	</head>

	<body class="">

        <!-- SWITCHER -->
        @include('layouts.components.switcher')

        <!-- END SWITCHER -->

        <!-- PAGE -->
		<div class="page">

            <!-- SIDEBAR -->
            @include('layouts.components.HOD.hodsidebar')

            <!-- END SIDEBAR -->

            <!-- HEADER -->
            @include('layouts.components.header')

            <!-- END HEADER -->

                <!-- MAIN-CONTENT -->
                @yield('content')
                <!-- END MAIN-CONTENT -->

            <!-- SEARCH-MODAL -->
            @include('layouts.components.search-modal')

            <!-- END SEARCH-MODAL -->
            

            <!--change password-->
            @include('layouts.components.change_pwd_modal')

            <!-- FOOTER -->
            @include('layouts.components.footer')

            <!-- END FOOTER -->

		</div>
        <!-- END PAGE-->

        <!-- SCRIPTS -->
        
        @include('layouts.components.scripts')

        <!-- STICKY JS -->
		<script src="{{asset('build/assets/sticky.js')}}"></script>
        
        <!-- SWITCH JS -->
        @vite('resources/assets/js/switch.js')


        <!-- APP JS -->
		@vite('resources/js/app.js')
        
        <!-- CDN for Data tables Script-->
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <!-- END SCRIPTS -->

        <script
        src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
       <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function () {
                // Check current password on focusout(with the existing value from DB)
                $(document).on('focusout', '.current_password', function () {
                    //alert('focussed out of password field');
                    var current_password = $(this).val();
                    $.ajax({
                        url: base_url + '/checkcurrentpassword',
                        method: 'GET',
                        data: { 'current_password': current_password },
                        success: function (data) {
                            console.log(data);
                            if (data == 0) {
                                //if($('#current_password_status').hasClass('text-green-400'))
                                 $('#current_password_status').removeClass('text-green-400');

                                $('#current_password_status').text('The current password seems to be incorrectly entered! Kindly check').addClass('text-red-400');
                                $('.current_password').focus();
                            } else {
                               // if($('#current_password_status').hasClass('text-red-400'))
                                   $('#current_password_status').removeClass('text-red-400');
                                
                                 $('#current_password_status').text('The current password is matching with our records').addClass('text-green-400');
                            }
                        },
                        error: function (error) {
                            console.log(error);
                        }
                    });
                });

                //to check the new password ma confirm password 
                $(document).on('keyup', '#confirm_password', function () {
                    //alert('Out of confirm password field');
                    var new_password = $('#new_password').val();
                    var confirm_password = $('#confirm_password').val();
                    if(new_password != "" || confirm_password != ""){
                          
                        if(new_password == confirm_password){
                            $('.password_error_msg').removeClass('text-red-600');
                            $('.password_error_msg').text('Passwords are matching').addClass('text-green-600');
                            $('.change_pwd_btn').addClass('bg-warning').prop("disabled", false);
                            // $('#new_password').addClass('border-green-500');
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

                        $('.password_error_msg').text('Both the passwords must be entered').addClass('text-red-600');
                    }
                });

                // password visibility
                $("#togglePassword").click(function () {
                    var passwordInput = $("#password");
                    var type = passwordInput.attr("type") === "password" ? "text" : "password";
                    passwordInput.attr("type", type);
                });

                //Password visibility new paswword
                $("#togglenew_password").click(function () {
                    var passwordInput = $("#new_password");
                    var type = passwordInput.attr("type") === "password" ? "text" : "password";
                    passwordInput.attr("type", type);
                });

                //Password visibility confirm paswword
                 $("#toggleconfirm_password").click(function () {
                    var passwordInput = $("#confirm_password");
                    var type = passwordInput.attr("type") === "password" ? "text" : "password";
                    passwordInput.attr("type", type);
                });

                // @error ('caste_name')
                //     $('#add_caste_category_btn').trigger( "click" );
                //     $('#caste_name').css("border", "1px solid red").focus();
                // @enderror 
                
            });
        </script>

	</body>
</html>
