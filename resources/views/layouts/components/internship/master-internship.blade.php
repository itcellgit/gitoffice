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

	</head>

	<body class="">

        <!-- SWITCHER -->
        @include('layouts.components.switcher')

        <!-- END SWITCHER -->

        <!-- PAGE -->
		<div class="page">

            <!-- SIDEBAR -->
            @include('layouts.components.internship.internshipsidebar')

            <!-- END SIDEBAR -->

            <!-- HEADER -->
            @include('layouts.components.header')

            <!-- END HEADER -->

                <!-- MAIN-CONTENT -->
                @yield('content')
                <!-- END MAIN-CONTENT -->


            @include('layouts.components.change_pwd_modal')

            <!-- SEARCH-MODAL -->
            @include('layouts.components.search-modal')

            <!-- END SEARCH-MODAL -->

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

	</body>
</html>
