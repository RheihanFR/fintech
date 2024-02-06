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
        <a class="nav-link" href="{{ route('customer.index')}}">
            <i class="fas fa-fw fa-landmark"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('canteen.index')}}">
            <i class="fas fa-shopping-bag"></i>
            <span>Kantin</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('keranjang.index')}}">
            <i class="fas fa-shopping-cart"></i>
            <span>Keranjang</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
</ul>
