<section class="home-about-area section-gap" id="about">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-8 col-md-12 home-about-left">
                <h6>{{ trans($lang.'company_sub_title_txt') }}	</h6>
                <h1>
                   {{ trans($lang.'company_title_txt_1') }}	 <br>
                    {{ trans($lang.'company_title_txt_2') }}	
                </h1>
                <p class="sub">{{ trans($lang.'company_sub_txt_title') }}</p>
                <p class="pb-20">
                	{{ trans($lang.'company_sub_txt_detail') }}                    
                </p>
                <a class="primary-btn" href="#">{{ trans($lang.'detail_btn_txt') }}</a>
            </div>
            <div class="col-lg-4 col-md-12 home-about-right relative">
                <form class="form-wrap" action="#">
                    <h4 class="text-white pb-20">{{ trans($lang.'form_title') }}</h4>
                    <div class="form-select" id="service-select">
                        <select>
                            <option value="1">{{ trans($lang.'select_service_txt') }}</option>
                            <option value="2">{{ trans($lang.'select_service_1') }}</option>
                            <option value="3">{{ trans($lang.'select_service_2') }}</option>
                            <option value="4">{{ trans($lang.'select_service_3') }}</option>
                        </select>
                    </div>                              
                    <input type="text" class="form-control" placeholder="{{ trans($lang.'input_placeholder_1') }}">
                    <input type="phone" class="form-control" placeholder="{{ trans($lang.'input_placeholder_2') }}">
                    <input type="email" class="form-control" placeholder="{{ trans($lang.'input_placeholder_3') }}">
                    <textarea name="message" id="" cols="30" rows="5" placeholder="Message" class="form-control"></textarea>
                    <button class="primary-btn">{{ trans($lang.'form_btn') }}</button>
                </form>
            </div>
        </div>
    </div>  
</section>


{{-- <section class="home-about-area section-gap" id="about">
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-lg-8 col-md-12 home-about-left">
				<h6>Connecting Global Markets</h6>
				<h1>
					Experience the Essence of India <br>
					With SHREE TRISHUL EXIM
				</h1>
				<p class="sub">Your Trusted Partner for Psyllium Husk, Spices, and Seeds</p>
				<p class="pb-20">
					SHREE TRISHUL EXIM is a leading exporter and importer, dedicated to providing the highest quality Psyllium Husk, a diverse range of Indian Spices, and premium quality Seeds. We prioritize ethical sourcing, customer satisfaction, and building long-term relationships with our global partners. 
				</p>
				<a class="primary-btn" href="#">Explore Our Products</a> 
			</div>
			<div class="col-lg-4 col-md-12 home-about-right relative" style="background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('{{ asset('front-1/images_new/Global-Traders-of-Premium-Psyllium-Husk-Indian-Spices.png') }}'../images_new/form-bg.jpg);background-size: cover;">
				
				<form class="form-wrap" action="#">
					<h4 class="text-white pb-20">Request a Quote</h4>
					<div class="form-select" id="service-select">
						<select>
							<option value="1">Select Product</option>
							<option value="2">Psyllium Husk</option>
							<option value="3">Spices</option>
							<option value="4">Seeds</option>
						</select>
					</div>								
					<input type="text" class="form-control" placeholder="Your Name">
					<input type="phone" class="form-control" placeholder="Phone Number">
					<input type="email" class="form-control" placeholder="Email Address">
					<textarea name="message" id="" cols="30" rows="5" placeholder="Your Message" class="form-control"></textarea>
					<button class="primary-btn">Submit Inquiry</button>
				</form>
			</div>
		</div>
	</div>	
</section> --}}