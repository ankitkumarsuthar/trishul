<section class="banner-area relative" id="about" style="background: url('{{ asset('front-1/img/header-bg.jpg') }}') center;
    background-size: cover;">	
	<div class="overlay overlay-bg"></div>
	<div class="container">				
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">{{ trans($lang.'banner_title_lbl') }}</h1>	
				<p class="text-white link-nav"><a href="{{ route('home') }}">{{ trans($lang.'banner_home_lbl') }} </a>  <span class="lnr lnr-arrow-right"></span>  <a href="javascript:void(0);"> {{ trans($lang.'banner_title_lbl') }}</a></p>
			</div>	
		</div>
	</div>
</section>