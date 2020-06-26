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
		<title>Nama Sekolah - Read {{ $jquin->judul }}</title>
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
								    	<li class="breadcrumb-item"><a href="{{ route('berita.info') }}">Berita dan Informasi</a></li>
								    	<li class="breadcrumb-item active" aria-current="page"> {{ $jquin->judul }} </li>
								  	</ol>
								</nav>
							</div> 

						</div>	 <!-- End row -->
					</div>	<!-- End container -->		
				</div>	<!-- END BREADCRUMB -->	

				<!-- SINGLE POST
				============================================= -->
				<section id="single-post" class="wide-80 single-post-section division">
					<div class="container">

						<!-- SINGLE POST CONTENT -->
						<div class="row">
							<div class="col-lg-10 offset-lg-1">
								<div class="single-post-wrapper">
									<!-- SINGLE POST TITLE -->
									<div class="single-post-title mb-35 text-center">
										<!-- Post Title -->
										<h3 class="h3-md">{{ $jquin->judul }}</h3>
									</div>	<!-- END SINGLE POST TITLE -->
									<!-- BLOG MAIN POST IMAGE -->
						 			<div class="post-inner-img">
										<img class="img-fluid" src="{{ (!$jquin->path) ? asset('no-image.png') : asset('storage/'.$jquin->path) }}" alt="thumbnail" />		
									</div>
									<div class="single-post-txt">
										<!-- Text -->
										<p>{!! $jquin->artikel !!}</p>
									</div>
								</div>
							</div>	<!-- END SINGLE POST CONTENT -->


						</div>
					</div>
				</section>	<!-- END SINGLE POST -->


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