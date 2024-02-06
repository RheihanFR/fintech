<!-- topbar.blade.php -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span style="color: black; margin-right: 10px;">{{ auth()->user()->nama }}</span>
                <img class="img-profile rounded-circle" src="{{ asset('img/undraw_profile.svg')}}">
            </a>

            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>
    </ul>
</nav>

<div class="d-sm-flex align-items-center justify-content-between mb-4 container-fluid">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

    <!-- Dropdown -->
    <div class="dropdown">
        <button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm dropdown-toggle" type="button"
            id="reportDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-download fa-sm text-white-50"></i> Generate Report
        </button>
        <div class="dropdown-menu" aria-labelledby="reportDropdown">
            <a class="dropdown-item" href="{{ route('customer.riwayat.transaksi') }}">
                <i class="fas fa-file-invoice-dollar"></i> Transaksi
            </a>
            <a class="dropdown-item" href="{{ route('customer.riwayat.topup') }}">
                <i class="fas fa-file-invoice-dollar"></i> Top Up
            </a>
            <a class="dropdown-item" href="{{ route('customer.riwayat.withdrawal') }}">
                <i class="fas fa-file-invoice-dollar"></i> Tarik Tunai
            </a>
        </div>
    </div>
</div>
