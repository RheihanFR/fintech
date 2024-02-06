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
        <a class="nav-link" href="{{ route('kantin.index')}}">
            <i class="fas fa-fw fa-landmark"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('produk.index')}}">
            <i class="fas fa-fw fa-shopping-bag"></i>
            <span>Produk</span>
        </a>
    </li>
    
    <hr class="sidebar-divider">
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('kategori.index')}}">
            <i class="fas fa-fw fa-shopping-basket"></i>
            <span>Kategori</span>
        </a>
    </li>
    
    

    <!-- Divider -->
    <hr class="sidebar-divider">
</ul>
