@extends('layouts.main')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Create User</h1>
        
        <div class="card mb-4">
            <div class="card-body">
                @if (Session::has('error'))
                    <div class="alert alert-danger" role="alert">
                        {{Session::get('error')}}
                    </div>
                @endif
                <form action="{{route('user.store')}}" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" value="{{old('name')}}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" value="{{old('email')}}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Role</label>
                        <select name="role" id="" class="form-control" required>
                            <option value="" selected disabled>Choose role</option>
                            <option value="admin" {{old('role') == 'admin' ? 'selected' : ''}}>Admin</option>
                            <option value="staff" {{old('role') == 'staff' ? 'selected' : ''}}>Staff</option>
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