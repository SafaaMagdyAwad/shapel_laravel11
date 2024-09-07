<section class="blog_section ">
    <div class="container-fluid">
        <div class="heading_container">
            <h2>
            Service Details
            </h2>
          </div>
        <div class="row">

            <div class="col-lg-8 col-12 m-auto">
                <img src="{{ asset('assets/images/service/'.$service->image) }}" alt="{{ $service->title }}"/>
            </div>

        </div>
        <div class="row">

            <div class="col-lg-8 col-12 m-auto">
                <h3 class="mb-4">{{ $service->title }}</h3>

                <p>{{ $service->description }}</p>
            </div>

        </div>
    </div>
</section>
