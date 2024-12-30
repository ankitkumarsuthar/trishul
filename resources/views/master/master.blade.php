	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		@include("master._partials.header_meta")
		@include("master._partials.header_css")
		@yield('page-css')
		
		</head>
		<body>	

			@include("master._partials.header_top")		
			@yield('content')     		
			@include("master._partials.footer")
			@include("master._partials.footer_js")
			@yield('page-js')
			
		</body>
	</html>



