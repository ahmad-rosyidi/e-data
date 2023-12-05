<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    

    <link href="<?php echo e(URL::asset('main/assets/dist/bootstrap-5.2.3/css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Fonts -->
    
    
    
    
    

    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <img src="<?php echo e(URL::asset('main/assets/img/favicon.png')); ?>" alt="">
                &nbsp;
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <?php echo e(config('app.name', 'Laravel')); ?>

                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <?php if(Route::has('login')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                                </li>
                            <?php endif; ?>

                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?>

                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                                    <?php if(Auth::user()->type == 'client'): ?>
                                        <a class="dropdown-item" href="<?php echo e(route('client.dashboard')); ?>">Dashboard</a>
                                    <?php endif; ?>

                                    <?php if(Auth::user()->type == 'admin'): ?>
                                        <a class="dropdown-item" href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a>
                                    <?php endif; ?>

                                    <?php if(Auth::user()->type == 'superadmin'): ?>
                                        <a class="dropdown-item" href="<?php echo e(route('superadmin.dashboard')); ?>">Dashboard</a>
                                    <?php endif; ?>

                                    <?php if(Auth::user()->type == 'management'): ?>
                                        <a class="dropdown-item" href="<?php echo e(route('management.dashboard')); ?>">Dashboard</a>
                                    <?php endif; ?>

                                    <?php if(Auth::user()->type == 'sme'): ?>
                                        <a class="dropdown-item" href="<?php echo e(route('sme.dashboard')); ?>">Dashboard</a>
                                    <?php endif; ?>

                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>

    <!-- Javascript --> 
    <script src="<?php echo e(URL::asset('main/assets/plugins/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('main/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
</body>


<script>
    $(".alert").delay(10000).slideUp(200, function() {
        $(this).alert('close');
    });
</script>

</html>
<?php /**PATH C:\laragon\www\e-data\resources\views/layouts/app.blade.php ENDPATH**/ ?>