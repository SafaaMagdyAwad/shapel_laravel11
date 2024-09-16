 <!-- header section strats -->
 <header class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container bg-light">
        <a class="navbar-brand" href="{{ route('user.index') }}">
          <span>
            Shapel
          </span>
        </a>
        <div class="" id="">

          <div class="btn btn-light">

            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <a href="{{ route('blog.index') }}" class="btn btn-light">Blogs</a>
                <a href="{{ route('gallery.index') }}" class="btn btn-light">gallery</a>
                <a href="{{ route('message.index') }}" class="btn btn-light">message</a>
                <a href="{{ route('service.index') }}" class="btn btn-light">service</a>
                <a href="{{ route('testimonial.index') }}" class="btn btn-light">testimonial</a>
                <a href="{{ route('user.index') }}" class="btn btn-light">user</a>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!-- end header section -->
