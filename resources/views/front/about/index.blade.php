@extends('master.master')
@section('page-css')
@stop
@section('content')


		@include("front.about.partials.banner")			
		@include("front.about.partials.services")		
		@include("front.about.partials.company_detail")	
		@include("front.about.partials.service_detail")			
		@include("front.about.partials.tickers")			
		@include("front.about.partials.latest_project")			
		@include("front.about.partials.feedback")			
		@include("front.about.partials.latest_blogs")			
@stop
@section('page-js')

@stop