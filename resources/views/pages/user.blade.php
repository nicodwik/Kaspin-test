@extends('layouts.main')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">User</h1>
        
        <div class="card mb-4">
            <div class="card-header">
                <a href="{{route('user.create')}}" class="btn btn-primary">Create</a>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Roles</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->role}}</td>
                                <td>{{$user->created_at}}</td>
                                <td>{{$user->updated_at}}</td>
                                <td>
                                    <form action="{{route('user.destroy', base64_encode($user->id))}}" method="post">
                                        <a href="{{route('user.edit', base64_encode($user->id))}}" class="btn btn-dark">Edit</a>
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Delete</button>    
                                    </form>    
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">No Data</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection