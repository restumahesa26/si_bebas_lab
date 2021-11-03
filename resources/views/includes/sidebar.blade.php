<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <div class="sidebar-brand-icon">
            <img src="{{ url('logo-unib.png') }}">
        </div>
        <div class="sidebar-brand-text mx-3">LAB. SI UNIB</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Features
    </div>
    <li class="nav-item">
        @if (Auth::user()->role === 'MAHASISWA')
            <a class="nav-link" href="{{ route('surat.index') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Surat</span></a>
        @elseif (Auth::user()->role === 'LABORAN')
            <a class="nav-link" href="{{ route('laboran.surat.index') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Surat</span></a>
        @elseif (Auth::user()->role === 'KEPALA LAB')
            <a class="nav-link" href="{{ route('ka_lab.surat.index') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Surat</span></a>
        @endif

    </li>
</ul>
<!-- Sidebar -->
