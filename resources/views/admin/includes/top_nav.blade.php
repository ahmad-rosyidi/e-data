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
            {{-- <li class="right-sidebar-in right-sidebar-2-menu">
                    <i class="mdi mdi-settings mdi-spin"></i>
                  </li> --}}
            <!-- User Account -->
            <li class="dropdown user-menu">
                <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    {{-- <img src="assets/img/user/user.png" class="user-image" alt="User Image" /> --}}
                    <span class="d-none d-lg-inline-block">Admin</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right">
                    <!-- User image -->
                    {{-- <li class="dropdown-header">
                        <img src="assets/img/user/user.png" class="img-circle" alt="User Image" />
                        <div class="d-inline-block">
                         User <small class="pt-1">admin@admin.com</small>
                        </div>
                      </li> --}}
                    <li class="dropdown">
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i
                                class="mdi mdi-logout"></i>Log Out</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
