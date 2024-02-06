<!-- sidebar.blade.php -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">ENVOEMART</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('bank.index')}}">
            <i class="fas fa-landmark"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('bank.topup')}}">
            <i class="fas fa-dollar-sign"></i>
            <span>Top Up</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('bank.withdrawal')}}">
            <i class="fas fa-money-bill-wave"></i>
            <span>Tarik Tunai</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
</ul>
