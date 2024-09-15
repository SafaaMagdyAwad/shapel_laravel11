@extends('admin.layout.main')
@section('content')
    <div class="container my-5">
      <div class="bg-light p-5 rounded">
        <h2 class="fw-bold fs-2 mb-5 pb-2">all services</h2>
        <a href="{{ route('service.create') }}">Add service</a>
        <table class="table table-hover">
          <thead>
            <tr class="table-dark">
              <th scope="col"> Title</th>
              <th scope="col">image</th>
              <th scope="col">discription</th>
              <th scope="col">is Published</th>
              <th scope="col">View</th>
              <th scope="col">Edit</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $item)
            <tr>
              <td scope="row">{{$item->title}}</td>
              <td> <img src="{{ asset('assets/images/service/' . $item->image) }}"
                alt="{{$item->title}}" class="card-img"
                  width="50" height="100" /></td>
              <td>{{Str::limit($item->description, 25, '...')}}</td>
              <td>{{$item->isPublished?"Yes":"NO"}}</td>
              <td><a href="{{route('service.show',$item)}}">View</a></td>
              <td><a href="{{route('service.edit',$item)}}">Edit</a></td>
              <td>
                <form method="POST" action="{{route('service.destroy',$item)}}">
                  @csrf
                  @method('delete')
                  <button onclick="return confirm('Are you sure you want to delete?')"> delete</button>
                </form>
              </td>
            </tr>
            @endforeach


          </tbody>
        </table>
        </div>
    </div>
 @endsection
