<header id="header" id="home">
		<div class="header-top">
			<div class="container">
	  		<div class="row">
	  			<div class="col-lg-6 col-sm-6 col-4 header-top-left no-padding">
	  				<ul>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
						<li><a href="#"><i class="fa fa-behance"></i></a></li>
	  				</ul>
	  			</div>
	  			<div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
	  				<a href="tel:+880 012 3654 896">+880 012 3654 896</a>
	  				<a href="mailto:support@colorlib.com">support@colorlib.com</a>		
	  				 <div class="dropdown d-inline-block">
	                    <button class="btn btn-link dropdown-toggle" type="button" id="languageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                          {{ App::getLocale() == 'de' ? 'Deutsch' : 'English' }} 
	                    </button>
	                    <div class="dropdown-menu" aria-labelledby="languageDropdown">
	                        <a class="dropdown-item" href="{{ route('lang.switch', 'en') }}" data-lang="en" style="color: black;">English</a>
	                        <a class="dropdown-item" href="{{ route('lang.switch', 'de') }}" data-lang="de" style="color: black;" >Deutsch</a>
	                    </div>
	                </div>	

	          

	  			</div>
	  		</div>			  					
			</div>
	</div>
    <div class="container main-menu">
    	<div class="row align-items-center justify-content-between d-flex">
	      <div id="logo">
	        <a href="{{ route('home') }}"><img src="{{ asset('front-1/img/logo.png') }}" alt="" title="" /></a>
	      </div>
	      <nav id="nav-menu-container">
	        <ul class="nav-menu">
	           <li class="menu-active"><a href="{{ route('home') }}">Home</a></li>
    <li><a href="{{ route('about-us') }}">About</a></li>
    <li><a href="{{ route('services') }}">Service</a></li>
    <li><a href="{{ route('products') }}">Products</a></li>
    
     <li class="menu-has-children"><a href="">Blog</a>
            <ul>
              <li><a href="#">Blog Home</a></li>
              <li><a href="{{ route('blog') }}">Blog Single</a></li>
            </ul>
          </li>       

    <li><a href="{{ route('contact-us') }}">Contact</a></li>
	          {{-- <li class="menu-has-children"><a href="">Blog</a>
	            <ul>
	              <li><a href="blog-home.html">Blog Home</a></li>
	              <li><a href="blog-single.html">Blog Single</a></li>
	            </ul>
	          </li>						           --}}
	          
              {{-- <li><a href="elements.html">Elements</a></li> --}}
	        </ul>
	      </nav><!-- #nav-menu-container -->		    		
    	</div>
    </div>
  </header><!-- #header -->