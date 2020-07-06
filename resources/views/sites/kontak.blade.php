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
		<title>Nama Sekolah - Kontak</title>
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
								    	<li class="breadcrumb-item active" aria-current="page">Kontak</li>
								  	</ol>
								</nav>
							</div> 

						</div>	 <!-- End row -->
					</div>	<!-- End container -->		
				</div>	<!-- END BREADCRUMB -->	




				<!-- CONTACTS-2
				============================================= -->
				<section id="contacts-2" class="wide-100 contacts-section division">
					<div class="container">

						<!-- SECTION TITLE -->	
						<div class="row">	
							<div class="col-md-12">
								<div class="section-title title-centered mb-60">
									<!-- Title 	-->	
									<h3 class="h3-sm">Kontak Sekolah</h3>	
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-body text-center">
										<h5>Nama Sekolah</h5>
										<table class="table table-borderless">
										  <tbody>
										  	<tr>
										  		<td>
										  			<center>
										  				@foreach($neko as $jquin)
										  				<p>{{ $jquin->nama_kontak }} : {{ $jquin->url }}</p>
										  				@endforeach
										  			</center>
										  		</td>
										  	</tr>
										  </tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						
					</div>	   <!-- End container -->	
				</section>	<!-- END CONTACTS-2 -->

				<!-- GOOGLE MAP
				============================================= -->
				<div id="gmap" class="map-section division">
					<div class="container">
						<div class="row">	
							<div class="col-md-12">
								<div class="google-map">
									{!! $alamat->embed !!}
								</div>
							</div>
						</div>	 <!-- End row -->
					</div>	<!-- End container -->		
				</div>	<!-- END GOOGLE MAP-->

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