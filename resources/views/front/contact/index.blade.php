@extends('master.master')

@section('page-meta')
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" href="{{ asset('front-1/img/fav.png') }}">
<meta name="author" content="Shree Trishul Exim">
<meta name="description" content="{{ trans($lang.'meta_description_lbl') }}">
<meta name="keywords" content="{{ trans($lang.'meta_keywords_lbl') }}">
<meta charset="UTF-8">

<!-- Title -->
<title>{{ trans($lang.'meta_title_lbl') }}</title>

<!-- Open Graph Meta Tags -->
<meta property="og:title" content="{{ trans($lang.'og_title_lbl') }}">
<meta property="og:description" content="{{ trans($lang.'og_description_lbl') }}">
<meta property="og:image" content="{{ trans($lang.'og_image_lbl') }}">
<meta property="og:url" content="{{ trans($lang.'og_url_lbl') }}">
<meta property="og:type" content="website">

<!-- Twitter Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ trans($lang.'twitter_title_lbl') }}">
<meta name="twitter:description" content="{{ trans($lang.'twitter_description_lbl') }}">
<meta name="twitter:image" content="{{ trans($lang.'twitter_image_lbl') }}">
<meta name="twitter:url" content="{{ trans($lang.'twitter_url_lbl') }}">

<!-- Canonical Tag -->
<link rel="canonical" href="{{ trans($lang.'canonical_url_lbl') }}">
@stop

@section('page-css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
@stop
@section('content')
	
	@include("front.contact.partials.banner")
	

  	<section class="contact-page-area section-gap">
			<div class="container">
				<div class="row">
					@include("front.contact.partials.contact_map")
					@include("front.contact.partials.contact_detail")
					@include("front.contact.partials.contact_form")						
				</div>
			</div>	
		</section>


  			
@stop
@section('page-js')


@stop