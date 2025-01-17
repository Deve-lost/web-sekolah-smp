<header id="header" class="header white-menu navbar-dark">
	<div class="header-wrapper">

		<!-- MOBILE HEADER -->
	    <div class="wsmobileheader clearfix">	
	    	<a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>	    	
	    	<!-- <span class="smllogo smllogo-black"><img src="images/logo.png" width="172" height="40" alt="mobile-logo"/></span> -->
	    	<h3 class="mt-3">Logo</h3>
	    	<!-- <span class="smllogo smllogo-white"><img src="images/logo-white.png" width="172" height="40" alt="mobile-logo"/></span> -->
	 	</div>

	 	<!-- NAVIGATION MENU -->
	  	<div class="wsmainfull menu clearfix">
			<div class="wsmainwp clearfix">

				<!-- LOGO IMAGE -->
				<!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 344 x 80 pixels) -->
				<div class="desktoplogo"><!-- <a href="#hero-5" class="logo-black"><img src="images/logo.png" width="172" height="40" alt="header-logo"></a> -->
	    		<h3 class="logo-black mt-3">Logo</h3>
				</div>
				<div class="desktoplogo"><!-- <a href="#hero-5" class="logo-white"><img src="images/logo-white.png" width="172" height="40" alt="header-logo"></a> -->
	    		<h3 class="logo-white mt-3">Logo</h3>
				</div>


				<!-- MAIN MENU -->
					<nav class="wsmenu clearfix">
					<ul class="wsmenu-list">
						<!-- SIMPLE NAVIGATION LINK -->
				    	<li class="nl-simple" aria-haspopup="true"><a href="{{ getenv('APP_URL') }}">Beranda</a></li>
				    	<!-- DROPDOWN MENU -->
			          	<li aria-haspopup="true"><a href="#">Profil <span class="wsarrow"></span></a>
    						<ul class="sub-menu">
			           			<li aria-haspopup="true"><a href="{{ route('profil.sekolah') }}">Sejarah Singkat</a></li>
			           			<li aria-haspopup="true"><a href="{{ route('sambutan.kepsek') }}">Sambutan Kepala Sekolah</a></li>
			           			<li aria-haspopup="true"><a href="{{ route('visi.misi') }}">Visi Misi</a></li>
			           			<li aria-haspopup="true"><a href="{{ route('extrakurikuler') }}">Extrakurikuler</a></li>
			           		</ul>
					    </li>	<!-- END DROPDOWN MENU -->

				    	<!-- SIMPLE NAVIGATION LINK -->
				    	<li class="nl-simple" aria-haspopup="true"><a href="{{ route('berita.info') }}">Berita Dan Informasi</a></li>

				    	<!-- SIMPLE NAVIGATION LINK -->
				    	<li aria-haspopup="true"><a href="#">Modul <span class="wsarrow"></span></a>
    						<ul class="sub-menu">
			           			<li aria-haspopup="true"><a href="{{ route('modul.guru') }}">Modul Guru</a></li>
			           			<li aria-haspopup="true"><a href="{{ route('modul.siswa') }}">Modul Siswa</a></li>
			           		</ul>
					    </li>

				    	<!-- SIMPLE NAVIGATION LINK -->
				    	<li class="nl-simple" aria-haspopup="true"><a href="{{ route('galeri') }}">Galeri</a></li>

				    	<!-- SIMPLE NAVIGATION LINK -->
				    	<li class="nl-simple" aria-haspopup="true"><a href="{{ route('kontak') }}">Kontak</a></li>

					</ul>
				</nav>	<!-- END MAIN MENU -->
			</div>
		</div>	<!-- END NAVIGATION MENU -->
	</div>     <!-- End header-wrapper -->
</header>