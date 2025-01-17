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
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" rel="stylesheet">
@stop
@section('content')
	
	@include("front.service.partials.banner")
	@include("front.service.partials.service_detail")
	@include("front.service.partials.service_detail_two")


    <header class="bg-dark text-white text-center py-5">
    <h1 class="display-4">SHREE TRISHUL EXIM</h1>
    <p>Your Trusted Partner in Export, Import, Logistics, and Global Trade</p>
  </header>
  			
@stop
@section('page-js')


@stop