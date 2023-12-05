<!DOCTYPE html>
<html lang="en" dir="ltr">

@include('admin.includes.header')

<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
    <script>
        NProgress.configure({
            showSpinner: false
        });
        NProgress.start();
    </script>

    {{-- <div id="toaster"></div> --}}

    <!-- ====================================
    ——— WRAPPER
    ===================================== -->
    <div class="wrapper">

        <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
        @include('admin.includes.sidebar')

        <!-- ====================================
        ——— PAGE WRAPPER
        ===================================== -->
        <div class="page-wrapper">

            <!-- Header -->
            <header class="main-header " id="header">
                @include('admin.includes.top_nav')
            </header>


            <!-- ====================================
    ——— CONTENT WRAPPER
    ===================================== -->
            <div class="content-wrapper">
                <div class="content">

                    @yield('content')

                </div> <!-- End Content -->
            </div> <!-- End Content Wrapper -->


            <!-- Footer -->
            @include('admin.includes.footer')
