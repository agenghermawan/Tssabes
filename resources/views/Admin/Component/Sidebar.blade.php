<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="{{ route('Dashboard') }}">Pusbindiklat Gemilang</a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>
                <li class="sidebar-item active ">
                    <a href="{{ route('Dashboard') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Pendaftaran</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="{{ route('pendaftarn-baru') }}">Pendaftaran Baru </a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{ route('pendaftarn-ulang') }}">Pendaftaran Ulang </a>
                        </li>
                    </ul>
                </li>

                <!--<li class="sidebar-item  has-sub">-->
                <!--    <a href="#" class='sidebar-link'>-->
                <!--        <i class="bi bi-collection-fill"></i>-->
                <!--        <span>Prestasi </span>-->
                <!--    </a>-->
                <!--    <ul class="submenu ">-->
                <!--        <li class="submenu-item ">-->
                <!--            <a href="{{ route('prestasi.create') }}">Tambahkan Prestasi</a>-->
                <!--        </li>-->
                <!--        <li class="submenu-item ">-->
                <!--            <a href="{{ route('prestasi-sd') }}">Prestasi SD</a>-->
                <!--        </li>-->
                <!--        <li class="submenu-item ">-->
                <!--            <a href="{{ route('prestasi-remaja') }}">Prestasi Remaja</a>-->
                <!--        </li>-->
                <!--    </ul>-->
                <!--</li>-->

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>Galeri</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="{{ route('gallery.index') }}">Daftar Galeri</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{ route('gallery.create') }}">Tambahkan Galeri</a>
                        </li>
                    </ul>
                </li>
                <!--<li class="sidebar-item  has-sub">-->
                <!--    <a href="#" class='sidebar-link'>-->
                <!--        <i class="bi bi-person-fill"></i>-->
                <!--        <span>Peserta </span>-->
                <!--    </a>-->
                <!--    <ul class="submenu ">-->
                <!--        <li class="submenu-item ">-->
                <!--            <a href="{{ route('peserta.index') }}">Daftar Peserta</a>-->
                <!--        </li>-->
                <!--        <li class="submenu-item ">-->
                <!--            <a href="{{ route('peserta.create') }}">Tambah Statistik </a>-->
                <!--        </li>-->
                <!--    </ul>-->
                <!--</li>-->
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-calendar-day"></i>
                        <span>Event </span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="{{ route('event.index') }}">Daftar Event</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{ route('event.create') }}">Tambah Event </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-archive-fill"></i>
                        <span>Fitur </span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="{{ route('fitur.index') }}">Edit Fitur </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="sidebar-link" style="background-color: transparent; border:none">
                            <a type="submit">
                                <i class="bi bi-door-open-fill"> </i>
                                <span>Logout</span>
                            </a>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
