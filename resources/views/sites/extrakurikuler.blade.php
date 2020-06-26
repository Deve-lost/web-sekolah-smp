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
		<title>Nama Sekolah - Extrakurikuler</title>
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
								    	<li class="breadcrumb-item active" aria-current="page">Extrakurikuler</li>
								  	</ol>
								</nav>
							</div> 

						</div>	 <!-- End row -->
					</div>	<!-- End container -->		
				</div>	<!-- END BREADCRUMB -->	


				<!-- NEWS-3
				============================================= -->
				<section id="news-3" class="pt-100 news-section division">
					<div class="container">
					 	<div class="row">
					 		<!-- BLOG POSTS HOLDER -->
					 		<div class="col-lg-9">
					 			<div class="posts-holder pr-25">
					 				<!-- ARTICLE #1 -->
									@forelse($neko as $jquin)
					 				<div class="article-3 row d-flex align-items-center b-bottom">
										<!-- Article Preview -->
										<div class="col-md-4"> 
											<img class="img-fluid" src="{{ (!$jquin->path) ? asset('no-image.png') : asset('storage/'.$jquin->path) }}" alt="article-preview">	
										</div>					
											
										<!-- Article Text -->
										<div class="col-md-8">	
											<!-- Title -->
											<h4 class="h4-sm">
												<a href="{{ route('slug.ek', $jquin->slug) }}">{{ $jquin->nama_ek }}</a>
											</h4>
											<!-- Post Author -->

											<!-- Text -->
											<p>
												{!! Str::limit($jquin->deskripsi, 100, '...') !!}
											</p> 
										</div>
									</div>	<!-- END ARTICLE #1 -->	
									@empty
									<div class="article-3 row d-flex align-items-center b-bottom">
										<!-- Article Preview -->
										<div class="col-md-4"> 
											<img class="img-fluid" src="{{ asset('no-image.png') }}" alt="article-preview">	
										</div>					
											
										<!-- Article Text -->
										<div class="col-md-8">	
											<!-- Title -->
											<h4 class="h4-sm">
												<a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, cumque!</a>
											</h4>
											<!-- Post Author -->
											<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, magnam.</span>	

											<!-- Text -->
											<p>Vitae auctor integer a congue magna undo pretium at purus pretium ligula a rutrum luctus
										       risus and ultrice blandit justo and purus ipsum neque dolor primis libero tempus, tempor 
										       posuere ligula...
											</p> 
										</div>
									</div>	<!-- END ARTICLE #1 -->	
									@endforelse
					 			</div>
					 		</div>	<!-- END BLOG POSTS HOLDER -->


					 		<!-- SIDEBAR -->
							<aside id="sidebar" class="col-lg-3">


								<!-- SEARCH FIELD --> 
								<div id="search-field" class="sidebar-div mb-50">								
									<div class="input-group mb-3">
									  	<input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="search-field">
									 	<div class="input-group-append">
									    	<button class="btn" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
									 	</div>
									</div>
								</div>

								<!-- BLOG CATEGORIES --> 
								<div class="blog-categories sidebar-div mb-50">
									<ul class="blog-category-list clearfix">
										<li><a href="#">eTreeks News</a> <span>(36)</span></li>
										<li><a href="#">Students & Instructors</a> <span>(81)</span></li>
										<li><a href="#">Ideas & Opinions</a> <span>(76)</span></li>
										<li><a href="#">Education Process</a> <span>(143)</span></li>
										<li><a href="#">eTreeks for Business</a> <span>(24)</span></li>
										<li><a href="#">Uncategorized </a> <span>(42)</span></li>
									</ul>
								</div>
							</aside>   <!-- END SIDEBAR -->

					 	</div>	  <!-- End row -->
					</div>	   <!-- End container -->	
				</section>	<!-- END NEWS-3 -->


				<!-- PAGE PAGINATION
				============================================= -->
				<div class="page-pagination division">
					<div class="container">
						<div class="row">	
							<div class="col-md-12">
								<nav aria-label="Page navigation">
									<ul class="pagination justify-content-center">
										<li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-left"></i></a></li>
									    <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
									    <li class="page-item"><a class="page-link" href="#">2</a> </li>
									    <li class="page-item"><a class="page-link" href="#">3</a></li>
									    <li class="page-item"><a class="page-link" href="#">4</a></li>
									    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
									</ul>	
								</nav>					
							</div>
						</div>  <!-- End row -->	
					</div> <!-- End container -->	
				</div>	<!-- END PAGE PAGINATION -->
			</div>

			<!-- FOOTER-3
			============================================= -->
			<x-lpfooter></x-lpfooter>
			<!-- END FOOTER-3 -->
	
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