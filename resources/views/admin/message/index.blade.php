@extends('admin.layout.main')
@section('content')
    <div class="container my-5">
        <div class="bg-light p-5 rounded">
            <h2 class="fw-bold fs-2 mb-5 pb-2">UnRead Messages</h2>
            <table class="table table-hover">
                <thead>
                    <tr class="table-dark">
                        <th scope="col"> name</th>
                        <th scope="col">phone</th>
                        <th scope="col">email</th>
                        <th scope="col">message</th>
                        <th scope="col">View</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($unread as $item)
                        <tr>
                            <td scope="row">{{ $item->name }}</td>
                            <td scope="row">{{ $item->phone }}</td>
                            <td scope="row">{{ $item->email }}</td>
                            <td scope="row">{{ Str::limit($item->message, 30, '...') }}</td>
                            <td><form method="POST" action="{{ route('message.read', $item) }}">@csrf <button>Read Message </button></form></td>
                            <td>
                                <form method="POST" action="{{ route('message.destroy', $item) }}">
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
        <hr>
        <div class="bg-light p-5 rounded">
            <h2 class="fw-bold fs-2 mb-5 pb-2">Read Messages</h2>
            <table class="table table-hover">
                <thead>
                    <tr class="table-dark">
                        <th scope="col"> name</th>
                        <th scope="col">phone</th>
                        <th scope="col">email</th>
                        <th scope="col">message</th>
                        <th scope="col">View</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($read as $item)
                        <tr>
                            <td scope="row">{{ $item->name }}</td>
                            <td scope="row">{{ $item->phone }}</td>
                            <td scope="row">{{ $item->email }}</td>
                            <td scope="row">{{ Str::limit($item->message, 30, '...') }}</td>
                            <td><form method="POST" action="{{ route('message.read', $item) }}"> @csrf <button>Read Message </button></form></td>
                            <td>
                                <form method="POST" action="{{ route('message.destroy', $item) }}">
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
