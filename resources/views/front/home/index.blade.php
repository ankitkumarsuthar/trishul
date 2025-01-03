@extends('master.master')
@section('page-css')
@stop
@section('content')
		@include("front.home.partials.banner")			
		@include("front.home.partials.services")		
		@include("front.home.partials.company_detail")	
		@include("front.home.partials.service_detail")			
		@include("front.home.partials.tickers")			
		@include("front.home.partials.latest_project")			
		@include("front.home.partials.feedback")			
		@include("front.home.partials.latest_blogs")			
@stop
@section('page-js')

@stop