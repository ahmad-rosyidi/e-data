<nav class="navbar navbar-static-top navbar-expand-lg">
    <!-- Sidebar toggle button -->
    <button id="sidebar-toggler" class="sidebar-toggle">
        <span class="sr-only">Toggle navigation</span>
    </button>

    <div class="search-form d-none d-lg-inline-block">
        <div class="input-group">

        </div>
        <div id="search-results-container">
        </div>
    </div>

    <div class="navbar-right ">
        <ul class="nav navbar-nav">
            <li class="dropdown notifications-menu custom-dropdown">

            </li>
            
            <!-- User Account -->
            <li class="dropdown user-menu">
                <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    
                    <span class="d-none d-lg-inline-block">Admin</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right">
                    <!-- User image -->
                    
                    <li class="dropdown">
                        <a href="<?php echo e(route('logout')); ?>"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i
                                class="mdi mdi-logout"></i>Log Out</a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                            <?php echo csrf_field(); ?>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
<?php /**PATH C:\laragon\www\e-data\resources\views/admin/includes/top_nav.blade.php ENDPATH**/ ?>