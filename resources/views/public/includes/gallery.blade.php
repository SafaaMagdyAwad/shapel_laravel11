 <!-- gallery section -->

 <div class="gallery_section layout_padding2">
    <div class="container-fluid">
      <div class="heading_container heading_center">
        <h2>
          Gallery
        </h2>
      </div>
      <div class="row">
        @foreach ($galleryItems as $gallery)
        <div class=" col-sm-{{ $loop->first || $loop->last ? 8 : ($loop->index==1||$loop->index==4 ? 4 : 6) }} col-md-{{ $loop->first||$loop->last?6:3 }} px-0">
          <div class="img-box">
            <img src="{{ asset('assets/images/gallery/'.$gallery->image) }}" alt=""  width="{{ $loop->first||$loop->last ? 600:300 }} px"  height="345 px">
            <a href="{{ asset('assets/images/gallery/'.$gallery->image) }}" data-toggle="lightbox" data-gallery="gallery">
              <i class="fa fa-picture-o" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        @endforeach
      </div>
      <div class="btn-box">
        <a href="{{ route('gallery') }}" @stack('hidden')>
          View All
        </a>
      </div>
    </div>
  </div>

  <!-- end gallery section -->
