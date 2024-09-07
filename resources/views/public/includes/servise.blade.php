 <!-- service section -->

 <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Services
        </h2>
      </div>
      <div class="row">
        @foreach ($services as $service)
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="{{ asset('assets/images/service/'.$service->image) }}" alt="{{ $service->title }}">
            </div>
            <div class="detail-box">
              <h5>
                {{ $service->title }}
              </h5>
              <p>
                {{ Str::limit($service->description, 30, '...') }}
              </p>
              <a href="{{ route('serviceDetails',$service) }}" >
                Read More
              </a>
            </div>
          </div>
        </div>
        @endforeach
        <div class="col-md-6 col-lg-4 mx-auto">
            <div class="box">
                <div class="btn-box">
                    <a href="{{ route('service') }}" @stack('hidden')>
                      View All
                    </a>
                </div>
            </div>
        </div>
      </div>

    </div>

  </section>

  <!-- end service section -->
