 <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard')}}">
    <div class="sidebar-brand-text mx-3">
        NY Admin
    </div>
    </a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
    <li class="nav-item active">
    <a class="nav-link" href="{{ route('dashboard')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <li class="nav-item">
    <a class="nav-link" href="{{ route('travel-package.index')}}">
        <i class="fas fa-fw fa-hotel"></i>
        <span>Travel Packet</span></a>
    </li>

    <li class="nav-item">
    <a class="nav-link" href="{{ route('gallery.index')}}">
        <i class="fas fa-fw fa-images"></i>
        <span>Travel Gallery</span></a>
    </li>

    <li class="nav-item">
    <a class="nav-link" href="{{ route('transaction.index')}}">
        <i class="fas fa-cart-arrow-down"></i>
        <span>Transaction</span></a>
    </li>

<hr class="sidebar-divider">

<!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
    </ul>
<!-- End of Sidebar -->