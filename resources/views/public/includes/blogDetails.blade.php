<section class="blog_section ">
    <div class="container-fluid">
        <div class="heading_container">
            <h2>
            Blog Details
            </h2>
          </div>
        <div class="row">

            <div class="col-lg-8 col-12 m-auto">
                <img src="{{ asset('assets/images/blog/'.$blog->image) }}" alt="{{ $blog->title }}"/>
            </div>

        </div>
        <div class="row">

            <div class="col-lg-8 col-12 m-auto">
                <h3 class="mb-4">{{ $blog->title }}</h3>

                <p>{{ $blog->description }}</p>
            </div>

        </div>
    </div>
</section>
