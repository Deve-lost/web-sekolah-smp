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

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-layout-list-thumb"></i><span> Profil <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="list-unstyled">
                        <li><a href="">Profil Sekolah</a></li>
                        <li><a href="">Sambutan Kepala Sekolah</a></li>
                        <li><a href="">Visi Misi</a></li>
                        <li><a href="">Kontak</a></li>
                    </ul>
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
            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>