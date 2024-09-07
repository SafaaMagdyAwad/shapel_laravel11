 <!-- blog section -->

 <section class="blog_section ">
    <div class="container-fluid">
      <div class="heading_container">
        <h2>
          Latest Blog
        </h2>
      </div>
      <div class="row">
        @foreach ($blogs as $blog)
        <div class="col-lg-6 ">
          <div class="box">
            <div class="img-box">
              <img src="{{ asset('assets/images/blog/'.$blog->image) }}" alt="{{ $blog->title }}">
            </div>
            <div class="detail-box">
              <h5>
                {{ $blog->title }}
              </h5>
              <p>
                {{ Str::limit($blog->description, 50, '...') }}
              </p>
              <a href="{{ route('blogDetails',$blog) }}">
                Read More
              </a>
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </section>

  <!-- end blog section -->
