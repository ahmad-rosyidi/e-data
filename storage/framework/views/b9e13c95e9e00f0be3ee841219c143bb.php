<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="#" title="Admin Dashboard">
                <img src="<?php echo e(URL::asset('main/assets/img/favicon.png')); ?>" alt="">
                <span class="brand-name text-truncate"><?php echo e(env('APP_NAME')); ?></span>
            </a>
        </div>



        <!-- begin sidebar scrollbar -->
        <div class="" data-simplebar style="height: 100%;">
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">


                <li class="<?php if(Request::segment(1) == 'admin' and Request::segment(2) == 'siswa'): ?> active <?php endif; ?>">
                    <a class="sidenav-item-link" href="<?php echo e(route('admin.siswa.index')); ?>">
                        <i class="mdi mdi-account-multiple-outline"></i>
                        <span class="nav-text">Data Siswa</span>
                    </a>
                </li>

                <li class="<?php if(Request::segment(1) == 'admin' and Request::segment(2) == 'log'): ?> active <?php endif; ?>">
                    <a class="sidenav-item-link" href="<?php echo e(route('admin.log.index')); ?>">
                        <i class="mdi mdi-book-open"></i>
                        <span class="nav-text">Data Log</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</aside>
<?php /**PATH C:\laragon\www\e-data\resources\views/admin/includes/sidebar.blade.php ENDPATH**/ ?>