@extends('admin.layout.main')
@section('content')
    <div class="container my-5">
      <div class="bg-light p-5 rounded">
        <h2 class="fw-bold fs-2 mb-5 pb-2">all gallerys</h2>
        <a href="{{ route('gallery.create') }}">Add gallery</a>
        <table class="table table-hover">
          <thead>
            <tr class="table-dark">
              <th scope="col"> image_title</th>
              <th scope="col">image</th>
              <th scope="col">is Published</th>
              <th scope="col">View</th>
              <th scope="col">Edit</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $item)
            <tr>
              <td scope="row">{{$item->image_title}}</td>
              <td> <img src="{{ asset('assets/images/gallery/' . $item->image) }}"
                alt="{{$item->image_title}}" class="card-img"
                  width="50" height="100" /></td>

              <td>{{$item->isPublished?"Yes":"NO"}}</td>
              <td><a href="{{route('gallery.show',$item)}}">View</a></td>
              <td><a href="{{route('gallery.edit',$item)}}">Edit</a></td>
              <td>
                <form method="POST" action="{{route('gallery.destroy',$item)}}">
                  @csrf
                  @method('delete')
                  <button onclick="return confirm('Are you sure you want to delete?')"> Delete</button>
                </form>
              </td>
            </tr>
            @endforeach


          </tbody>
        </table>
        </div>
    </div>
 @endsection
