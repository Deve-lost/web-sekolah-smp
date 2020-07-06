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
		<title>Nama Sekolah - Sambutan Kepala Sekolah</title>
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
								    	<li class="breadcrumb-item">Profil</li>
								    	<li class="breadcrumb-item active" aria-current="page">Sambutan Kepala Sekolah</li>
								  	</ol>
								</nav>
							</div> 

						</div>	 <!-- End row -->
					</div>	<!-- End container -->		
				</div>	<!-- END BREADCRUMB -->	

				<!-- TEAM-3
				============================================= -->
				<section id="team-3" class="pt-100 team-section division">
					<div class="container">
						<div class="row">	


							<!-- TEACHER PHOTO -->
							<div class="col-md-4">
								<div class="team-3-photo text-center">

									<!-- Teacher Photo -->
									<div class="t-3-photo mb-25">
										<img class="img-fluid" src="{{ asset('storage/'.$profil->path) }}" alt="avatar">
									</div>
								</div>
							</div>	<!-- END TEACHER PHOTO -->


							<!-- TEACHER DATA -->
							<div class="col-md-8">
								<div class="team-3-txt pc-45">
									<!-- Text -->
									<p>
										{!! $profil->deskripsi !!}
									</p>

								</div>
							</div>	<!-- END TEACHER DATA -->
						</div>     <!-- End row -->
					</div>     <!-- End container -->
				</section>	<!-- END TEAM-3 -->

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