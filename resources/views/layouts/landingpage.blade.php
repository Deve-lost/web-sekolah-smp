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
		<title>Nama Sekolah</title>
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

			<!-- HERO-5
			============================================= -->	
			<section id="hero-5" class="hero-section division">
				<!-- SLIDER -->
				<div class="slider blue-nav">
			    	<ul class="slides">
				     	<!-- SLIDE #1 -->
				     	@forelse($sliders as $slider)
				     	<li id="slide-1">
					        <!-- Background Image -->
				        	<img src="{{ (!$slider->path) ? asset('no-image.png') : asset('storage/'.$slider->path) }}" alt="slide-background">
							<!-- Image Caption -->
		       				<div class="caption d-flex align-items-center center-align">
		       					<div class="container">
		       						<div class="row">
		       							<div class="col-md-12">
		       								<div class="caption-txt white-color">
						       					<!-- Title -->
								         	 	<h2>{{ $slider->judul }}</h2>
									          	
									          	<!-- Text -->
												<p>
													{{ $slider->deskripsi }}
												</p>
											</div>
										</div>
									</div>  <!-- End row -->
								</div>  <!-- End container -->
					        </div>	<!-- End Image Caption -->
					    </li>	<!-- END SLIDE #1 -->
				     	@empty
				      	<li id="slide-1">
					        <!-- Background Image -->
				        	<img src="{{asset('no-image.png')}}" alt="slide-background">
							<!-- Image Caption -->
		       				<div class="caption d-flex align-items-center center-align">
		       					<div class="container">
		       						<div class="row">
		       							<div class="col-md-12">
		       								<div class="caption-txt white-color">
						       					<!-- Title -->
								         	 	<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde optio vero facilis at nesciunt dicta illum, laboriosam perferendis harum laudantium!</h2>
									          	
									          	<!-- Text -->
												<p>Feugiat primis ligula risus auctor egestas augue mauri viverra tortor in iaculis 
												   placerat eugiat mauris ipsum in viverra gravida purus
												</p>
											</div>
										</div>
									</div>  <!-- End row -->
								</div>  <!-- End container -->
					        </div>	<!-- End Image Caption -->
					    </li>	<!-- END SLIDE #1 -->
					    @endforelse
				    </ul>
			  	</div>	<!-- END SLIDER -->
			</section>	<!-- END HERO-5 -->	


			<!-- ABOUT-3
			============================================= -->
			<section id="about-3" class="pt-100 about-section division">
				<div class="container">
					<div class="row d-flex align-items-center">
						<!-- ABOUT TEXT -->
					 	<div class="col-md-7 col-lg-6">
					 		<div class="txt-block pc-25">
					 			<!-- Title -->	
								<h3 class="h3-sm">Sambutan Kepala Sekolah</h3>
								<!-- Text -->
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus saepe maiores ab, harum adipisci qui. Magnam, nisi aperiam. Accusantium deserunt accusamus quae deleniti id asperiores facilis provident nam aliquam cupiditate.
								</p> 
								<!-- List -->	
								<ul class="txt-list mb-15">
									<li>Nullam rutrum eget nunc varius etiam mollis risus undo</li>
									<li>Integer congue magna at pretium purus pretium ligula at rutrum risus luctus dolor auctor 
										ipsum blandit purus			
									</li>
									<li>Risus at congue etiam aliquam sapien egestas posuere</li>
								</ul>
					 		</div>
					 	</div>	  <!-- END ABOUT TEXT -->


					 	<!-- ABOUT IMAGE -->
						<div class="col-md-5 col-lg-6">
							<div class="img-block">
								<img class="img-fluid" src="{{asset('landingpage/images/image-02.png')}}" alt="about-image">
					 		</div>
						</div>
					</div>    <!-- End row --> 	
				</div>	   <!-- End container --> 	
			</section>	<!-- End ABOUT-3 --> 

			<!-- COURSES-3
			============================================= -->
			<section id="courses-3" class="bg-whitesmoke wide-60 courses-section division">
				<div class="container">
					<!-- SECTION TITLE -->	
					<div class="row">	
						<div class="col-md-12">
							<div class="section-title title-centered mb-60">

								<!-- Title 	-->	
								<h3 class="h3-sm">Berita dan Informasi</h3>	

								<!-- Text -->	
								<p class="p-md">
									<!-- Coming Soon! >_! -->
								</p>
							</div>	
						</div>
					</div>

					<!-- COURSES HOLDER -->
					<div class="row courses-grid">
						@forelse($beritaInfo as $bi)
						<div class="col-md-6 col-lg-4 col-xl-3">
							<div class="cbox-1">
								<a href="course-details.html">
									<!-- Image -->
									<img class="img-fluid" src="{{ (!$bi->path) ? asset('no-image.png') : asset('storage/'.$bi->path) }}" alt="thumbnail" />
									<!-- Text -->
									<div class="cbox-1-txt">
										<p class="course-tags">
											<span><i class="fas fa-user"></i></span>
											<span>{{ $bi->user->nama_lengkap }}</span>
										</p>	

										<h5 class="h5-xs">{{ Str::limit($bi->judul, 30, '...') }}</h5>
									</div>
								</a>
							</div>
						</div>	
						@empty
						<div class="col-md-6 col-lg-4 col-xl-3">
							<div class="cbox-1">
								<a href="course-details.html">
									<!-- Image -->
									<img class="img-fluid" src="{{asset('no-image.png')}}" alt="thumbnail" />
									<!-- Text -->
									<div class="cbox-1-txt">
										<!-- Course Tags -->
										<p class="course-tags">
											<span><i class="fas fa-user"></i></span>
											<span>Admin</span>
										</p>	

										<!-- Course Title -->
										<h5 class="h5-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quasi.</h5>
									</div>
								</a>
							</div>
						</div>
						@endforelse	
					</div>	  <!-- END COURSES HOLDER -->

					@if(count($beritaInfo) >= 4)
					<!-- ALL COURSES BUTTON -->
					<div class="row">
						<div class="col-md-12">
							<div class="all-courses-btn">							
								<a href="categories-list.html" class="btn btn-md btn-rose tra-black-hover">Lihat Semua Berita dan Informasi</a>
							</div>	
						</div>
					</div>
					@endif
				</div>     <!-- End container -->
			</section>	<!-- END COURSES-3 -->

			<!-- CATEGORIES-1
			============================================= -->
			<section id="categories-1" class="categories-section division">
				<div class="container">
					<!-- SECTION TITLE -->	
					<div class="row">	
						<div class="col-md-12">
							<div class="section-title mb-40">
								<!-- Title 	-->	
								<h4 class="h4-xs">Extrakurikuler</h4>
							</div>
						</div>
					</div>

					<div class="row d-flex align-items-center">
						<div class="col text-center">	
							<!-- CATEGORIE BOX #1 -->
							@forelse($extrakurikuler as $ek)
							<div class="c1-box">
								<a href="">
									<div class="c1-box-txt">
										<h5 class="h5-xs">{{ $ek->nama_ek }}</h5>
										<p>{{ $ek->jml_anggota }} Anggota</p>
									</div>
								</a>
							</div>
							@empty
							<div class="c1-box">
								<div class="c1-box-txt">
									<h5 class="h5-xs">Pramuka</h5>
									<p>0 Anggota</p>
								</div>
							</div>
							@endforelse
							<!-- END CATEGORIE BOX #1 -->
						</div>
					</div>    <!-- End row --> 	
				</div>	   <!-- End container --> 	
			</section>	<!-- End CATEGORIES-1 --> 


			<!-- BANNER-5
			============================================= -->
			<section id="banner-5" class="bg-whitesmoke wide-60 banner-section division">
				<div class="container">
					<div class="row">


						<!-- BANNER TEXT -->
						<div class="col-md-6">
							<div class="banner-5-txt">

								<!-- Icon --> 
								<img src="{{asset('landingpage/images/image-04.png')}}" alt="banner-icon" />

								<!-- Text --> 
								<div class="b5-txt">

									<!-- Title -->	
									<h4 class="h4-xs">Modul Guru</h4>

									<!-- Text -->
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius pariatur quaerat, reiciendis quos sed ullam enim dolore temporibus. Voluptatibus, voluptatum.
									</p>

									<!-- Button -->	
									<a href="become-a-teacher.html" class="btn btn-rose tra-black-hover">Selengkapnya</a>

								</div>

							</div>
						</div>	<!-- END BANNER TEXT -->


						<!-- BANNER TEXT -->
						<div class="col-md-6">
							<div class="banner-5-txt">

								<!-- Icon --> 
								<img src="{{asset('landingpage/images/image-05.png')}}" alt="banner-icon" />

								<!-- Text --> 
								<div class="b5-txt">

									<!-- Title -->	
									<h4 class="h4-xs">Modul Peserta</h4>

									<!-- Text -->
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius pariatur quaerat, reiciendis quos sed ullam enim dolore temporibus. Voluptatibus, voluptatum.
									</p>

									<!-- Button -->	
									<a href="courses-list.html" class="btn btn-rose tra-black-hover">Selengkapnya</a>

								</div>
							</div>
						</div>	<!-- END BANNER TEXT -->
					</div>   <!-- End row -->
				</div>	   <!-- End container -->
			</section>	<!-- END BANNER-5 -->


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