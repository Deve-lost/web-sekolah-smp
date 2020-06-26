<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="author" content="Amico Studio"/>	
		<meta name="description" content=""/>
		<meta name="keywords" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
				
  		<!-- SITE TITLE -->
		<title>Nama Sekolah - Modul Siswa</title>
		<x-lpcss></x-lpcss>
	</head>

	<body>

		<!-- PAGE CONTENT
		============================================= -->	
		<div id="page" class="page">
			<!-- HEADER
			============================================= -->
			<x-lpheader></x-lpheader>
			<!-- END HEADER -->
			<div class="inner-page-wrapper">

				<!-- BREADCRUMB
				============================================= -->
				<div id="breadcrumb" class="division">
					<div class="container">
						<div class="row">

							<!-- BREADCRUMB NAV -->
							<div class="col-md-12">
								<nav aria-label="breadcrumb">
								  	<ol class="breadcrumb">
								    	<li class="breadcrumb-item"><a href="/">Beranda</a></li>
								    	<li class="breadcrumb-item">Modul</li>
								    	<li class="breadcrumb-item active" aria-current="page">Modul Siswa</li>
								  	</ol>
								</nav>
							</div> 

						</div>	 <!-- End row -->
					</div>	<!-- End container -->		
				</div>	<!-- END BREADCRUMB -->	


				<!-- CATEGORIES-1
				============================================= -->
				<section id="categories-1" class="bg-whitesmoke categories-section division">
					<div class="container">


						<!-- SECTION TITLE -->	
						<div class="row">	
							<div class="col-md-12">
								<div class="section-title mb-40">
									<!-- Title 	-->	
									<h4 class="h4-xs">Modul Siswa</h4>
								</div>
							</div>
						</div>


						<div class="row d-flex align-items-center">
							<div class="col text-center">	
								<!-- CATEGORIE BOX #1 -->
								@forelse($modul as $mdl)
								<div class="c1-box">
									<div class="c1-box-txt">

										<h5 class="h5-xs">{{ $mdl->nama_modul }}</h5>
										<p><a href="{{ route('modul.download', $mdl->id) }}">Download</a></p>

									</div>
								</div>
								@empty
								<div class="c1-box">
									<div class="c1-box-txt">

										<h5 class="h5-xs">Lorem ipsum dolor sit amet.</h5>
										<p>-</p>

									</div>
								</div>	<!-- END CATEGORIE BOX #1 -->
								@endforelse
							</div>
						</div>    <!-- End row --> 	
					</div>	   <!-- End container --> 	
				</section>	<!-- End CATEGORIES-1 --> 

				<!-- FOOTER-3
			============================================= -->
			<x-lpfooter></x-lpfooter>
			<!-- END FOOTER-3 -->
			</div>
		</div>	<!-- END PAGE CONTENT -->


		<!-- EXTERNAL SCRIPTS
		============================================= -->	
		<x-lpjs></x-lpjs>

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
		<!-- [if lt IE 9]>
			<script src="js/html5shiv.js" type="text/javascript"></script>
			<script src="js/respond.min.js" type="text/javascript"></script>
		<![endif] -->

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->	
		<!--
		<script>
			window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
			ga('create', 'UA-XXXXX-Y', 'auto');
			ga('send', 'pageview');
		</script>
		<script async src='https://www.google-analytics.com/analytics.js'></script>
		-->
		<!-- End Google Analytics -->

	</body>
</html>	