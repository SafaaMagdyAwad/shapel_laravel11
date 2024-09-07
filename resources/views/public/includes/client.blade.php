 <!-- client section -->

 <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Testimonial
        </h2>
      </div>
      <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ($testimonials  as $testimonial)
            <div class="carousel-item {{ $loop->first?"active":"" }}">
              <div class="row">
                <div class="col-md-11 col-lg-10 mx-auto">
                  <div class="box">
                    <div class="img-box">
                      <img src="{{ asset('assets/images/testimonial/'.$testimonial->image) }}" alt="{{ $testimonial->name }}" />
                    </div>
                    <div class="detail-box">
                      <div class="name">
                        <h6>
                            {{ $testimonial->name }}
                        </h6>
                      </div>
                      <p>
                        {{ $testimonial->message }}
                      </p>
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach

        </div>
        <div class="carousel_btn-container">
          <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
            <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->
