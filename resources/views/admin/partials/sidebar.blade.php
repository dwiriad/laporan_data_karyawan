<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-2">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">KEPEGAWAIAN SEMARANG</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dist/img/profil.jpeg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                @if (Auth::user()->role == 'admin')
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link {{ active_class(['dashboard', 'dashboard.*']) }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('divisi') }}" class="nav-link {{ active_class(['divisi','divisi.*']) }}">
                        <i class="nav-icon fas fa-solid fa-tag"></i>
                        <p>
                            Bidang Divisi
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('jenis_kelamin') }}" class="nav-link {{ active_class(['jenis_kelamin','jenis_kelamin.*']) }}">
                        <i class="nav-icon fas fa-male"></i>
                        <p>
                            Jenis Kelamin
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('gol') }}" class="nav-link {{ active_class(['gol', 'gol.*']) }}">
                        <i class="nav-icon fas fa-notes-medical"></i>
                        <p>
                            Golongan Darah
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('status') }}" class="nav-link {{ active_class(['status','status.*']) }}">
                        <i class="nav-icon fas fa-ring"></i>
                        <p>
                            Status
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('agama') }}" class="nav-link {{ active_class(['agama','agama.*']) }}">
                        <i class="nav-icon fas fa-bible"></i>
                        <p>
                            Agama
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('data_karyawan') }}" class="nav-link {{ active_class(['data_karyawan','data_karyawan.*']) }}">
                        <i class="nav-icon fas fa-clipboard"></i>
                        <p>
                            Data Karyawan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('user') }}" class="nav-link {{ active_class(['user','user.*']) }}">
                        <i class="nav-icon fas fa-user-circle"></i>
                        <p>
                            User
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-responsive-nav-link :href="route('logout')" class="nav-link"
                            onclick="event.preventDefault();
                            this.closest('form').submit();">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>Log Out</p>
                        </x-responsive-nav-link>
                    </form>
                </li>
                @else
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link {{ active_class(['dashboard', 'dashboard.*']) }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('data_karyawan') }}" class="nav-link {{ active_class(['data_karyawan', 'data_karyawan.*']) }}">
                        <i class="nav-icon fas fa-tshirt"></i>
                        <p>
                            Data Karyawan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-responsive-nav-link :href="route('logout')" class="nav-link"
                            onclick="event.preventDefault();
                            this.closest('form').submit();">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>Log Out</p>
                        </x-responsive-nav-link>
                    </form>
                </li>
                @endif
            </ul>
        </nav>
    </div>
</aside>
