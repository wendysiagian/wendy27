<!-- Sidebar Start -->
<div class="sidebar pe-7 pb-3">
    <nav class="navbar bg-primary navbar-light">
        <a href="{{ route('home') }}" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-university me-2" style="color: black"> BEASISWA</i></h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{ asset('assets/img/testimonial-2.jpg') }}" alt=""
                    style="width: 40px; height: 40px;">
                <div
                    class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                </div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{ auth()->user()->name }}</h6>
                <span>{{ auth()->user()->role }}</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{ route('home') }}" class="nav-item nav-link <?php echo $currentPage == 'home' ? 'active' : ''; ?>"><i
                    class="fa fa-home me-2"></i>Dashboard</a>
            <a href="{{ route('akademik') }}" class="nav-item nav-link <?php echo $currentPage == 'daftar' ? 'active' : ''; ?>"><i
                    class="fa fa-graduation-cap me-2"></i>Pendaftaran</a>
            <a href="{{ route('nonakademik') }}" class="nav-item nav-link <?php echo $currentPage == 'd' ? 'active' : ''; ?>"><i class="fa fa-file me-2"></i>Laporan Pendaftaran</a>
            <a href="{{ route('users') }}" class="nav-item nav-link <?php echo $currentPage == 'user' ? 'active' : ''; ?>"><i
                    class="fa fa-users me-2"></i>Users</a>
        </div>

        <div class="navbar-nav w-100">
            <br><br><br><br><br><br><br><br>
        </div>
        <div class="navbar-nav w-100">

        </div>
        <div class="navbar-nav w-100">

        </div>
        <div class="navbar-nav w-100">

        </div>

    </nav>
</div>
<!-- Sidebar End -->
