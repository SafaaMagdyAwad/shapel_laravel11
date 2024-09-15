@extends('admin.layout.main')
@section('content')
<div class="container my-5">
  <div class="bg-light p-5 rounded">
    <h2 class="fw-bold fs-2 mb-5 pb-2">Add Gallery</h2>
    <form action="{{route('gallery.store')}}" method="post" class="px-md-5" enctype="multipart/form-data">
      @csrf
      <div class="form-group mb-3 row">
        @error('image_title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="" class="form-label col-md-2 fw-bold text-md-end">image_title:</label>
        <div class="col-md-10">
          <input type="text" placeholder="title" name="image_title" class="form-control py-2" value="{{old('image_title')}}" />
        </div>
      </div>
      <div class="form-group mb-3 row">
        @error('image')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="" class="form-label col-md-2 fw-bold text-md-end">class image:</label>
        <div class="col-md-10">
          <input type="file"  name="image" class="form-control py-2" />
        </div>
      </div>

      <hr>

      <div class="form-group mb-3 row">

        <label for="" class="form-label col-md-2 fw-bold text-md-end">isPublished:</label>
        <input type="hidden" name="isPublished" value="0">
        <div class="col-md-10">
            <input type="checkbox" name="isPublished" class="form-check-input" style="padding: 0.7rem;" value="1" @checked(old('isPublished')==1)/>
        </div>
      </div>
      <hr>

      <div class="text-md-end">
        <button class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
          Add Image To Gallery
        </button>
      </div>
    </form>
  </div>
</div>
@endsection
