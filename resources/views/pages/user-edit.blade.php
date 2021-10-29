@extends('layouts.main')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit User</h1>
        
        <div class="card mb-4">
            <div class="card-body">
                <form action="{{route('user.update', base64_encode($user->id))}}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group mb-3">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" value="{{$user->name}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email" value="{{$user->email}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Password</label>
                        <input type="text" class="form-control" name="password">
                        <span>Leave blank if u dont want to change password</span>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Role</label>
                        <select name="role" id="" class="form-control">
                            <option value="admin" {{$user->role == 'admin' ? 'selected' : ''}}>Admin</option>
                            <option value="staff" {{$user->role == 'staff' ? 'selected' : ''}}>Staff</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection