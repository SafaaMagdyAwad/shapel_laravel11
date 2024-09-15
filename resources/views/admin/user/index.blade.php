@extends('admin.layout.main')
@section('content')
    <div class="container my-5">
      <div class="bg-light p-5 rounded">
        <h2 class="fw-bold fs-2 mb-5 pb-2">all users</h2>
        <a href="{{ route('user.create') }}">Add user</a>
        <table class="table table-hover">
          <thead>
            <tr class="table-dark">
              <th scope="col"> name</th>
              <th scope="col">email</th>
              <th scope="col">is active</th>
              <th scope="col">View</th>
              <th scope="col">Edit</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $item)
            <tr>
              <td scope="row">{{$item->name}}</td>
            
              <td>{{$item->email}} </td>
              <td>{{$item->active?"Yes":"NO"}}</td>
              <td><a href="{{route('user.show',$item)}}">View</a></td>
              <td><a href="{{route('user.edit',$item)}}">Edit</a></td>
              <td>
                <form method="POST" action="{{route('user.destroy',$item)}}">
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
