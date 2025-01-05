@extends('master.master')
@section('page-css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
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