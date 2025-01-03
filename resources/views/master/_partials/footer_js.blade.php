<script src="{{ asset('front-1/js/vendor/jquery-2.2.4.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="{{ asset('front-1/js/vendor/bootstrap.min.js') }}"></script>			
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="{{ asset('front-1/js/easing.min.js') }}"></script>			
<script src="{{ asset('front-1/js/hoverIntent.js') }}"></script>
<script src="{{ asset('front-1/js/superfish.min.js') }}"></script>	
<script src="{{ asset('front-1/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('front-1/js/jquery.magnific-popup.min.js') }}"></script>	
<script src="{{ asset('front-1/js/owl.carousel.min.js') }}"></script>	
<script src="{{ asset('front-1/js/hexagons.min.js') }}"></script>							
<script src="{{ asset('front-1/js/jquery.nice-select.min.js') }}"></script>	
<script src="{{ asset('front-1/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('front-1/js/waypoints.min.js') }}"></script>							
<script src="{{ asset('front-1/js/mail-script.js') }}"></script>	
<script src="{{ asset('front-1/js/main.js') }}"></script>

<script type="text/javascript">
	document.addEventListener('DOMContentLoaded', function() {
    const languageOptions = document.querySelectorAll('.dropdown-item');
    languageOptions.forEach(option => {
        option.addEventListener('click', function(e) {
            e.preventDefault();
            const lang = e.target.dataset.lang;

            // Set language to the selected one
            changeLanguage(lang);
        });
    });

    function changeLanguage(lang) {
        // Use Laravel's URL to set the language
        window.location.href = `/lang/${lang}`;
    }
});

</script>
