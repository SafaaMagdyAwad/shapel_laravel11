@extends('admin.layout.main')
@section('content')
<div class="container my-5">
      <div class="bg-light p-5 rounded">
        <div class="card bg-light border-0">
          <div class="row justify-content-center">



            @if ($data->image !="null")

            <div class="col-lg-4 col-md-6 col-10 position-relative overflow-hidden">
              <img src="{{ asset('assets/images/blog/' . $data->image) }}"
              alt="" class="card-img"
                style="position: absolute; margin: auto; top: 50%; transform: translateY(-50%); width: 100%;height: 100%; object-fit: cover;" />
            </div>

            @endif


            <div class="col-lg-8 col-md-6 col-12 card-body">
              <div class="mb-4 text-center py-2">
                <h2 class="fw-bold bg-light card-header">{{$data->title}}</h2>
              </div>
              <div class="mb-4">
                <p class="card-text">
                  <span class="fw-bold">Description:<br></span> {{$data->description}}
                </p>
              </div>
              <div class="mb-4">
                <p class="card-text">
                  <span class="fw-bold">isPublished:</span> {{$data->isPublished?"YES":"NO"}}
                </p>
              </div>
              <div class="mb-4">
                <p class="card-text">
                  <span class="fw-bold"></span> {{$data->like}}  Likes
                </p>
              </div>

              <div class="text-md-end">
                <a href="{{route('blog.index')}}" class="btn mt-4 btn-primary text-white fs-5 fw-bold border-0 py-2 px-md-5">
                  Back to All Bloges
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
