<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="<?php echo e(env('APP_NAME')); ?>">
    <meta name="web-developer" content="Ahmad Rosyidi" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />

    <!-- theme meta -->
    <meta name="theme-name" content="aro" />
    <script src=<?php echo e(URL::asset('main/assets/plugins/ckeditor5/ckeditor.js')); ?>></script>
    

    <title><?php echo e(env('APP_NAME')); ?> <?php echo $__env->yieldContent('title'); ?></title>

    <link href="<?php echo e(URL::asset('main/assets/dist/bootstrap-5.2.3/css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- GOOGLE FONTS -->
    
    
    <link
        href="<?php echo e(URL::asset('main/assets/dist/fonts/googleapis/css.css?family=Montserrat:400,500|Poppins:400,500,600,700')); ?>"
        rel="stylesheet" />

    
    <link href="<?php echo e(URL::asset('main/assets/dist/materialdesignicons/4.9.95/css/materialdesignicons.min.css')); ?>"
        rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="<?php echo e(URL::asset('main/assets/plugins/simplebar/simplebar.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(URL::asset('main/assets/plugins/nprogress/nprogress.css')); ?>" rel="stylesheet" />

    <!-- No Extra plugin used -->
    <link href="<?php echo e(URL::asset('main/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(URL::asset('main/assets/plugins/daterangepicker/daterangepicker.css')); ?>" rel="stylesheet" />

    

    <!-- SLEEK CSS -->
    
    <link id="css" href="<?php echo e(URL::asset('main/assets/css/sleek.css')); ?>" rel="stylesheet" />

    <!-- FAVICON -->
    <link href="<?php echo e(URL::asset('main/assets/img/favicon.png')); ?>" rel="shortcut icon" />

    <!--
      HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
    -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    
    <link href="<?php echo e(URL::asset('main/assets/dist/datatables/1.13.5/css/jquery.dataTables.min.css')); ?>"
        rel="stylesheet" />

    
    <link href="<?php echo e(URL::asset('main/assets/dist/datatables/rowreorder/1.3.3/css/rowReorder.dataTables.min.css')); ?>"
        rel="stylesheet" />

    
    <link href="<?php echo e(URL::asset('main/assets/dist/datatables/responsive/2.4.1/css/responsive.dataTables.min.css')); ?>"
        rel="stylesheet" />

    
    <link href="<?php echo e(URL::asset('main/assets/dist/datatables/datetime/1.5.1/css/dataTables.dateTime.min.css')); ?>"
        rel="stylesheet" />

    
    <link href="<?php echo e(URL::asset('main/assets/dist/jquery/ui/1.13.2/themes/base/jquery-ui.css')); ?>" rel="stylesheet" />



    


    
    <script src="<?php echo e(URL::asset('main/assets/dist/jquery-3.6.0.js')); ?>"></script>

    
    <script src="<?php echo e(URL::asset('main/assets/dist/ui/1.13.2/jquery-ui.js')); ?>"></script>

    
    <script src="<?php echo e(URL::asset('main/assets/dist/jquery-3.7.0.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('main/assets/plugins/nprogress/nprogress.js')); ?>"></script>



    <style>
        * {}

        .zoom {
            transition: transform .2s;
            width: 10px;
            height: 10px;
            margin: 0;
        }

        .zoom:hover {
            -ms-transform: scale(25);
            /* IE 9 */
            -webkit-transform: scale(25);
            /* Safari 3-8 */
            transform: scale(25);
        }

        /* Dropdown Button */
        .dropbtn {
            padding: 16px;
        }

        /* The container <div> - needed to position the dropdown content */
        .dropdown {
            position: block;
        }

        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
            display: none;
            background-color: #ed8936;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
            color: white;
            font-size: 18px;
            padding: 12px 16px;
            text-decoration: none;
            display: block;

        }

        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {
            background-color: rgba(0, 0, 0, 0.1);
        }

        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {
            display: block;
            width: 100%;
            margin-top: 5px;
            border-radius: 5px;
            z-index: 1;


        }

        /* Change the background color of the dropdown button when the dropdown content is shown */
        .dropdown:hover .dropbtn {
            background-color: #c90922;
        }

        /* --------------------- */
        /* The container <div> - needed to position the dropdown content */
        .dropdown-two {
            position: block;
        }

        /* Dropdown Content (Hidden by Default) */
        .dropdown-content-two {
            display: none;
            background-color: #38b2ac;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        /* Links inside the dropdown */
        .dropdown-content-two a {
            color: white;
            font-size: 18px;
            padding: 12px 16px;
            text-decoration: none;
            display: block;

        }

        /* Change color of dropdown links on hover */
        .dropdown-content-two a:hover {
            background-color: rgba(0, 0, 0, 0.1);
        }

        /* Show the dropdown menu on hover */
        .dropdown-two:hover .dropdown-content-two {
            display: block;
            width: 100%;
            margin-top: 5px;
            border-radius: 5px;
            z-index: 1;

        }

        /* Change the background color of the dropdown button when the dropdown content is shown */
        .dropdown-two:hover .dropbtn-two {
            background-color: #c90922;
        }
    </style>

</head>
<?php /**PATH C:\laragon\www\e-data\resources\views/admin/includes/header.blade.php ENDPATH**/ ?>