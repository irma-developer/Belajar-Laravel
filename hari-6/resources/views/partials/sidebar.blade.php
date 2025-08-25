<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-school"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Irma Developer</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Data Siswa -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('siswa.index') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Data Siswa</span></a>
    </li>

    <!-- Data Guru -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('guru.index') }}">
            <i class="fas fa-fw fa-chalkboard-teacher"></i>
            <span>Data Guru</span>
        </a>
    </li>

    <!-- Nilai -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-book"></i>
            <span>Nilai</span></a>
    </li>

    <!-- Contact -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('contact') }}">
            <i class="fas fa-fw fa-envelope"></i>
            <span>Contact</span></a>
    </li>

    <!-- About -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('about') }}">
            <i class="fas fa-fw fa-info-circle"></i>
            <span>About</span></a>
    </li>

    <!-- Profil -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-user"></i>
            <span>Profil</span></a>
    </li>

    <!-- Logout -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span></a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
