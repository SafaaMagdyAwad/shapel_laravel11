@extends('admin.layout.main')
@section('content')
<div class="container my-5">
  <div class="bg-light p-5 rounded">
    <h2 class="fw-bold fs-2 mb-5 pb-2">Add user</h2>
    <form action="{{route('user.update',$data)}}" method="post" class="px-md-5" enctype="multipart/form-data">
      @csrf
      @method('put')
      <input type="hidden" name="old_password" value="{{ $data->password }}">
      <div class="form-group mb-3 row">
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="" class="form-label col-md-2 fw-bold text-md-end">name:</label>
        <div class="col-md-10">
          <input type="text" placeholder="name" name="name" class="form-control py-2" value="{{old('name',$data->name)}}" />
        </div>
      </div>
      <div class="form-group mb-3 row">
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="" class="form-label col-md-2 fw-bold text-md-end">email:</label>
        <div class="col-md-10">
          <input type="text" placeholder="email" name="email" class="form-control py-2" value="{{old('email',$data->email)}}" />
        </div>
      </div>
      



      <hr>
      <div class="form-group mb-3 row">
        @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="" class="form-label col-md-2 fw-bold text-md-end">Password:</label>
        <div class="col-md-10">
            <input type="password" name="password" class="form-control py-2" placeholder="***********" >
        </div>
      </div>
      <hr>
      <hr>
      <div class="form-group mb-3 row">

        <label for="" class="form-label col-md-2 fw-bold text-md-end">active:</label>
        <input type="hidden" name="active" value="0">
        <div class="col-md-10">
            <input type="checkbox" name="active" class="form-check-input" style="padding: 0.7rem;" value="1" @checked(old('active',$data->active)==1)/>
        </div>
      </div>
      <hr>

      <div class="text-md-end">
        <button class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
          Edit user
        </button>
      </div>
    </form>
  </div>
</div>
@endsection
