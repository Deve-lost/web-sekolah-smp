<footer id="footer-3" class="footer division">
	<div class="container">
		<!-- FOOTER CONTENT -->
		<div class="row">	
			<!-- FOOTER CONTACTS -->
			<div class="col-md-5 col-lg-5 col-xl-3">
				<div class="footer-box mb-40">
				
					<!-- Footer Logo -->
					<!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 344 x 80 pixels) -->
					<!-- <img src="images/logo.png" width="172" height="40" alt="footer-logo"> -->
					<h3>Logo</h3>
					<!-- Address -->
					<p class="mt-25">
						{{ $alamat->alamat }}
					</p> 

					<!-- Phone -->
					<p>No. Hp/Wa: {{ $alamat->no_hp }}</p>
					
					<!-- Email -->
					<p class="foo-email">Email: <a href="mailto:{{ $alamat->email }}">{{ $alamat->email }}</a></p>
				</div>
			</div>

			<!-- FOOTER LINKS -->
			<div class="col-md-3 col-lg-3 col-xl-3">
				<div class="footer-links mb-40">
					<!-- Title -->
					<h5 class="h5-md">Modul Terbaru</h5>
					<!-- Footer Links -->
					<ul class="foo-links clearfix">
						@foreach($modul as $mdl)
						<li><a href="{{ route('modul.siswa') }}">{{ $mdl->nama_modul }}</a></li>
						@endforeach
					</ul>
				</div>
			</div>

			<!-- FOOTER LINKS -->
			<div class="col-md-4 col-lg-4 col-xl-3">
				<div class="footer-links mb-40">
					<!-- Title -->
					<h5 class="h5-md">Extrakurikuler</h5>
					<!-- Footer Links -->
					<ul class="clearfix">
						@foreach($extrakurikuler as $kurikuler)
						<li><a href="{{ route('slug.ek', $kurikuler->slug) }}">{{ $kurikuler->nama_ek }}</a></li>
						@endforeach
					</ul>
				</div>
			</div>	
		</div>	<!-- END FOOTER CONTENT -->


		<!-- BOTTOM FOOTER -->
		<div class="bottom-footer">
			<div class="row">
				<!-- FOOTER COPYRIGHT -->
				<div class="col-lg-8">
					<p class="footer-copyright">&copy; {{ date('Y') }} Dikembangkan Oleh <a href="http://amicostudio.com/">Amico Studio</a>.</p>
				</div>

				<!-- FOOTER SOCIALS LINKS -->
				<div class="col-lg-4 text-right">
					<ul class="foo-socials text-center clearfix">
						@foreach($kontak as $sosmed)
						<li><a href="{{ $sosmed->url }}" target="_blank" class="ico-facebook"><i class="{{ $sosmed->icon }}"></i></a></li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>	<!-- END BOTTOM FOOTER -->
	</div>	   <!-- End container -->										
</footer>