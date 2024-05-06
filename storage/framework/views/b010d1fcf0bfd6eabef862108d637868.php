<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" class="light" data-header-styles="light" data-menu-styles="dark">
	<head>

		<!-- META DATA -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Tailwind Responsive Admin Web Dashboard Laravel Template">
        <meta name="keywords" content="admin, admin tailwind, laravel admin template, admin laravel, tailwind laravel, admin dashboard template, laravel tailwind, admin dashboard, admin panel, admin template, laravel admin dashboard, tailwind, laravel dashboard template, admin panel template, laravel admin panel, laravel dashboard">

        <!-- TITLE -->
		<title> KLS GIT | OFFICE </title>

        <!-- FAVICON -->
        <link rel="shortcut icon" href="<?php echo e(asset('build/assets/img/brand-logos/favicon.ico')); ?>">

        <!-- APP CSS -->
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css']); ?>


        <!-- APP SCSS -->
        <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss']); ?>

        
        <!-- SIMPLEBAR CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('build/assets/libs/simplebar/simplebar.min.css')); ?>">

        <!-- COLOR PICKER CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('build/assets/libs/@simonwep/pickr/themes/nano.min.css')); ?>">

        <!-- MAIN JS -->
        <script src="<?php echo e(asset('build/assets/main.js')); ?>"></script>

        <!--CDN for datatables-->
        <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet"> 

        <?php echo $__env->yieldContent('styles'); ?>

	</head>

	<body class="">

        <!-- SWITCHER -->
        <?php echo $__env->make('layouts.components.switcher', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- END SWITCHER -->

        <!-- PAGE -->
		<div class="page">

            <!-- SIDEBAR -->
            <?php echo $__env->make('layouts.components.Ticketing.ticketingsidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- END SIDEBAR -->

            <!-- HEADER -->
            <?php echo $__env->make('layouts.components.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- END HEADER -->

                <!-- MAIN-CONTENT -->
                <?php echo $__env->yieldContent('content'); ?>
                <!-- END MAIN-CONTENT -->


            <?php echo $__env->make('layouts.components.change_pwd_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- SEARCH-MODAL -->
            <?php echo $__env->make('layouts.components.search-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- END SEARCH-MODAL -->

            <!-- FOOTER -->
            <?php echo $__env->make('layouts.components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- END FOOTER -->

		</div>
        <!-- END PAGE-->

        <!-- SCRIPTS -->
        
        <?php echo $__env->make('layouts.components.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        


        <!-- STICKY JS -->
		<script src="<?php echo e(asset('build/assets/sticky.js')); ?>"></script>
        
        <!-- SWITCH JS -->
        <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/switch.js'); ?>


        <!-- APP JS -->
		<?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
        
        <!-- CDN for Data tables Script-->
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <!-- END SCRIPTS -->

	</body>
</html>
<?php /**PATH F:\laravel Apps\gitoffice\resources\views/layouts/components/Ticketing/master-ticketing.blade.php ENDPATH**/ ?>