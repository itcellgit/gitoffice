<!DOCTYPE html>
<html lang="en" dir="ltr" class="h-full">
	<head>

		<!-- META DATA -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Tailwind Responsive Admin Web Dashboard Laravel Template">
        <meta name="keywords" content="admin, admin tailwind, laravel admin template, admin laravel, tailwind laravel, admin dashboard template, laravel tailwind, admin dashboard, admin panel, admin template, laravel admin dashboard, tailwind, laravel dashboard template, admin panel template, laravel admin panel, laravel dashboard">
        <meta name="csrf-token" content="{{csrf_token()}}"/>
        <!-- TITLE -->
		<title> GIT | Office ERP </title>

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

        @yield('styles')

	</head>

	@yield('custom-body')

        <!-- MAIN-CONTENT -->
            @yield('content')
        <!-- END MAIN-CONTENT -->

        <!-- SCRIPTS -->

        @include('layouts.components.custom-scripts')

        
        <!-- CUSTOM-PAGES JS -->
        @vite('resources/assets/js/custom-pages.js')


        <!-- END SCRIPTS -->

	</body>
</html>
