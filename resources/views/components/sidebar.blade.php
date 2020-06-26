<div class="left side-menu">

    <!-- LOGO -->
    <div class="topbar-left">
        <div class="">
            <a href="{{ url()->previous() }}" class="logo text-center">Logo</a>
            <!-- <a href="{{ url()->previous() }}" class="logo"><img src="" height="20" alt="logo"></a> -->
        </div>
    </div>

    <div class="sidebar-inner slimscrollleft">
        <div id="sidebar-menu">
            <ul>
                <li class="menu-title">Menu</li>
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="waves-effect"><i class="dripicons-device-desktop"></i><span> Dashboard </span></a>
                </li>

                <li>
                    <a href="{{ route('profil-sekolah.index') }}" class="waves-effect"><i class="ti-home"></i><span> Profil Sekolah </span></a>
                </li>

                <li>
                    <a href="{{ route('slider.index') }}" class="waves-effect"><i class="ti-layout-slider"></i><span> Slider </span></a>
                </li>

                <li>
                    <a href="{{ route('informasi.index') }}" class="waves-effect"><i class="ti-announcement"></i><span> Berita Dan Informasi </span></a>
                </li>

                <li>
                    <a href="{{ route('modul.index') }}" class="waves-effect"><i class="ti-bookmark-alt"></i><span> Modul </span></a>
                </li>

                <li>
                    <a href="{{ route('galeri.index') }}" class="waves-effect"><i class="ti-gallery"></i><span> Galeri </span></a>
                </li>

                <li>
                    <a href="{{ route('extrakurikuler.index') }}" class="waves-effect"><i class="ti-layout-media-right"></i><span> Extrakurikuler </span></a>
                </li>

                <li>
                    <a href="{{ route('extrakurikuler.index') }}" class="waves-effect"><i class="ti-email"></i><span> Kontak </span></a>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>