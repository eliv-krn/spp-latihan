<!-- Brand Logo -->
<a href="../../index3.html" class="brand-link">
    <img src="{{ asset('template/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
        class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{ asset('template/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">{{ Auth::user()->level }}</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
            @if (Auth::user()->level == 'admin')
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-key"></i>
                        <p>
                            Data Siswa
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../widgets.html" class="nav-link">
                        <i class="nav-icon fas fa-check"></i>
                        <p>
                            Data Petugas
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('kelas.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-pen"></i>
                        <p>
                            Data Kelas
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../widgets.html" class="nav-link">
                        <i class="nav-icon fas fa-pen"></i>
                        <p>
                            Data SPP
                        </p>
                    </a>
                </li>
            @endif
            @if (Auth::user()->level == 'admin' || Auth::user()->level == 'petugas')
                <li class="nav-item">
                    <a href="../widgets.html" class="nav-link">
                        <i class="nav-icon fas fa-print"></i>
                        <p>
                            Transaksi Pembayaran
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../widgets.html" class="nav-link">
                        <i class="nav-icon fas fa-print"></i>
                        <p>
                            Histori Pembayaran
                        </p>
                    </a>
                </li>
            @endif
            @if (Auth::user()->level == 'admin')
                <li class="nav-item">
                    <a href="../widgets.html" class="nav-link">
                        <i class="nav-icon fas fa-print"></i>
                        <p>
                            Generate Laporan
                        </p>
                    </a>
                </li>
            @endif
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
