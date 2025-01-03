<section class=" relative" id="home" style="background: url('{{ asset('front-1/img/header-bg.jpg') }}') center;background-size: cover;">
{{-- <section class=" relative" id="home" style="background: url('{{ asset('front-1/cust-images/banner/slider1_1.jpg') }}') center;background-size: cover;"> --}}
	

	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row fullscreen d-flex align-items-center justify-content-center">
			<div class="banner-content col-lg-12 col-md-12">
				<h6 class="text-uppercase">{{ trans($lang.'banner_txt_one') }}</h6>
				<h1>
					{{ trans($lang.'banner_txt_two') }}			
				</h1>
				<p class="text-white">
					{{ trans($lang.'banner_txt_three') }}	
				</p>
				<a href="#" class="primary-btn header-btn text-uppercase">{{ trans($lang.'prduct_btn_txt') }}</a>
				<a href="#" class="primary-btn header-btn text-uppercase">{{ trans($lang.'contact_btn_txt') }}</a>
			</div>												
		</div>
	</div>
</section>