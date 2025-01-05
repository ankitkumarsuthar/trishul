{{-- <section class="sample-text-area">
	<div class="container">
		<h3 class="text-heading">{{ trans($lang.'about_detail_title_h3') }}</h3>
		<p class="sample-text">{{ trans($lang.'about_detail_title_p_1') }}</p>
		<p class="sample-text">{{ trans($lang.'about_detail_title_p_2') }}</p>
		<p class="sample-text">{{ trans($lang.'about_detail_title_p_3') }}</p>
		<p class="sample-text">{{ trans($lang.'about_detail_title_p_4') }}</p>
		<p class="sample-text">{{ trans($lang.'about_detail_title_p_5') }}</p>
	</div>
</section> --}}

<div class="whole-wrap">
	<div class="container">
		<div class="section-top-border">
			<h3 class="mb-30">{{ trans($lang.'about_detail_title_h3') }}</h3>
			<div class="row">
				<div class="col-md-3">
					<img src="{{ asset('front-1/img/elements/d.jpg') }}" alt="" class="img-fluid">
				</div>
				<div class="col-md-9 mt-sm-20">
					<p>{{ trans($lang.'about_detail_title_p_1') }}</p>
					<p>{{ trans($lang.'about_detail_title_p_2') }}</p>
				</div>
			</div>
		</div>
		<div class="section-top-border text-right">
			<h3 class="mb-30">{{ trans($lang.'about_detail_title_h3_2') }}</h3>
			<div class="row">
				<div class="col-md-9">
					<p class="text-right">{{ trans($lang.'about_detail_title_p_3') }}</p>
					<p class="text-right">{{ trans($lang.'about_detail_title_p_4') }}</p>
				</div>
				<div class="col-md-3">
					<img src="{{ asset('front-1/img/elements/dd.jpg') }}" alt="" class="img-fluid">
				</div>
			</div>
		</div>

		<div class="section-top-border">
			<h3 class="mb-30">{{ trans($lang.'block_quotes_h3') }}</h3>
			<div class="row">
				<div class="col-lg-12">
					<blockquote class="generic-blockquote">
						“{{ trans($lang.'block_quotes_text') }}" 
					</blockquote>
				</div>
			</div>
	</div>
</div>