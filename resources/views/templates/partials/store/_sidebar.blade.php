<div class="page-sidebar">
    <div class="main-header-left d-none d-lg-block">
        <div class="logo-wrapper"><a href="index.html"><img class="blur-up lazyloaded" src="{{ asset('assets/images/dashboard/multikart-logo.png') }}" alt=""></a></div>
    </div>
    <div class="sidebar custom-scrollbar">
        <div class="sidebar-user text-center">
            <div><img class="img-60 rounded-circle lazyloaded blur-up" src="{{ asset('assets/images/dashboard/man.png') }}" alt="#">
            </div>
            <h6 class="mt-3 f-14">JOHN</h6>
            <p>general manager.</p>
        </div>
        <ul class="sidebar-menu">
            <li><a class="sidebar-header" href="index.html"><i data-feather="home"></i><span>Dashboard</span></a></li>
            <li><a class="sidebar-header" href="{{route('food.index')}}"><i data-feather="box"></i><span>Makanan</span></a></li>
            <li><a class="sidebar-header" href="#"><i data-feather="box"></i><span>Pesanan</span></a></li>

        </ul>
    </div>
</div>