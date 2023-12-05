<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="#" title="Admin Dashboard">
                <img src="{{ URL::asset('main/assets/img/favicon.png') }}" alt="">
                <span class="brand-name text-truncate">{{ env('APP_NAME') }}</span>
            </a>
        </div>



        <!-- begin sidebar scrollbar -->
        <div class="" data-simplebar style="height: 100%;">
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">


                <li class="@if (Request::segment(1) == 'admin' and Request::segment(2) == 'siswa') active @endif">
                    <a class="sidenav-item-link" href="{{ route('admin.siswa.index') }}">
                        <i class="mdi mdi-account-multiple-outline"></i>
                        <span class="nav-text">Data Siswa</span>
                    </a>
                </li>

                <li class="@if (Request::segment(1) == 'admin' and Request::segment(2) == 'log') active @endif">
                    <a class="sidenav-item-link" href="{{ route('admin.log.index') }}">
                        <i class="mdi mdi-book-open"></i>
                        <span class="nav-text">Data Log</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</aside>
