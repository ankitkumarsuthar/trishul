@extends('master.master')
@section('page-css')

 {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}
@stop
@section('content')


		@include("front.product.partials.banner")		
		@include("front.product.partials.product_detail")				
		@include("front.product.partials.images")				
@stop
@section('page-js')

{{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}

@stop