
		 <!-- Export & Import Services Section -->
<section id="export-import-services" class="py-5">
  <div class="container">
    <h2 class="section-title text-center">{{ trans($lang.'export_import_services_title') }}</h2>
    
    <!-- Service Cards Row -->
    <div class="row">
      
      <!-- Bulk Trading -->
      <div class="col-md-4 mb-4">
        <div class="card service-card">
          <div class="card-body text-center">
            <div class="service-icon">
              <i class="fas fa-box"></i>
            </div>
            <h4 class="card-title">{{ trans($lang.'bulk_trading_title') }}</h4>
            <p class="card-text">{{ trans($lang.'bulk_trading_description') }}</p>
            <a href="#" class="btn btn-outline-primary">{{ trans($lang.'learn_more_button') }}</a>
          </div>
        </div>
      </div>
      
      <!-- International Shipping -->
      <div class="col-md-4 mb-4">
        <div class="card service-card">
          <div class="card-body text-center">
            <div class="service-icon">
              <i class="fas fa-plane"></i>
            </div>
            <h4 class="card-title">{{ trans($lang.'international_shipping_title') }}</h4>
            <p class="card-text">{{ trans($lang.'international_shipping_description') }}</p>
            <a href="#" class="btn btn-outline-primary">{{ trans($lang.'learn_more_button') }}</a>
          </div>
        </div>
      </div>
      
      <!-- Custom Packaging -->
      <div class="col-md-4 mb-4">
        <div class="card service-card">
          <div class="card-body text-center">
            <div class="service-icon">
              <i class="fas fa-cogs"></i>
            </div>
            <h4 class="card-title">{{ trans($lang.'custom_packaging_title') }}</h4>
            <p class="card-text">{{ trans($lang.'custom_packaging_description') }}</p>
            <a href="#" class="btn btn-outline-primary">{{ trans($lang.'learn_more_button') }}</a>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>


  <!-- Logistics & Supply Chain Management Section -->
<section id="logistics" class="bg-light py-5">
  <div class="container">
    <h2 class="section-title text-center">{{ trans($lang.'logistics_supply_chain_management_title') }}</h2>
    
    <div class="accordion" id="logisticsAccordion">
      
      <!-- Timely Delivery -->
      <div class="card">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              {{ trans($lang.'timely_delivery_title') }}
            </button>
          </h5>
        </div>
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#logisticsAccordion">
          <div class="card-body">
            <ul>
              @foreach(trans($lang.'timely_delivery_points') as $point)
                <li>{{ $point }}</li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>

      <!-- Quality Assurance -->
      <div class="card">
        <div class="card-header" id="headingTwo">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              {{ trans($lang.'quality_assurance_title') }}
            </button>
          </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#logisticsAccordion">
          <div class="card-body">
            <ul>
              @foreach(trans($lang.'quality_assurance_points') as $point)
                <li>{{ $point }}</li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>

      <!-- Customized Solutions -->
      <div class="card">
        <div class="card-header" id="headingThree">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              {{ trans($lang.'customized_solutions_title') }}
            </button>
          </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#logisticsAccordion">
          <div class="card-body">
            <ul>
              @foreach(trans($lang.'customized_solutions_points') as $point)
                <li>{{ $point }}</li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>



  <!-- Global Reach Section -->
<section id="global-reach" class="py-5">
  <div class="container">
    <h2 class="section-title text-center">{{ trans($lang.'global_reach_title') }}</h2>
    <div class="row">
      
      <!-- Countries We Serve -->
      <div class="col-md-6 mb-4">
        <h4>{{ trans($lang.'countries_we_serve_title') }}</h4>
        <ul class="list-group">
          <li class="list-group-item">{{ trans($lang.'countries_we_serve.asia') }}</li>
          <li class="list-group-item">{{ trans($lang.'countries_we_serve.europe') }}</li>
          <li class="list-group-item">{{ trans($lang.'countries_we_serve.north_america') }}</li>
          <li class="list-group-item">{{ trans($lang.'countries_we_serve.africa') }}</li>
          <li class="list-group-item">{{ trans($lang.'countries_we_serve.middle_east') }}</li>
          <li class="list-group-item">{{ trans($lang.'countries_we_serve.australia_new_zealand') }}</li>
        </ul>
      </div>

      <!-- Key Trade Regions -->
      <div class="col-md-6 mb-4">
        <h4>{{ trans($lang.'key_trade_regions_title') }}</h4>
        <ul class="list-group">
          <li class="list-group-item">{{ trans($lang.'key_trade_regions.asean') }}</li>
          <li class="list-group-item">{{ trans($lang.'key_trade_regions.eu_efta') }}</li>
          <li class="list-group-item">{{ trans($lang.'key_trade_regions.nafta') }}</li>
          <li class="list-group-item">{{ trans($lang.'key_trade_regions.sub_saharan_africa') }}</li>
        </ul>
      </div>

    </div>
  </div>
</section>
