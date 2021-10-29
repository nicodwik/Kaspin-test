@extends('layouts.main')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Inventory</h1>
        
        <div class="card mb-4">
            @auth
                <div class="card-header">
                    <a href="{{route('inventory.create')}}" class="btn btn-primary">Create</a>
                </div>
            @endauth
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Category</th>
                            <th>Name</th>
                            <th>Merk</th>
                            <th>Supplier</th>
                            <th>Year</th>
                            <th>Condition</th>
                            <th>Amount</th>
                            <th>Created At</th>
                            <th>Action</th>                            
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($inventories as $inventory)
                            <tr>
                                <td>{{$inventory->category}}</td>
                                <td>{{$inventory->name}}</td>
                                <td>{{$inventory->merk}}</td>
                                <td>{{$inventory->supplier}}</td>
                                <td>{{$inventory->year}}</td>
                                <td>{{$inventory->condition}}</td>
                                <td>{{$inventory->amount}}</td>
                                <td>{{$inventory->created_at}}</td>
                                @auth
                                    <td>
                                        <form action="{{route('inventory.destroy', base64_encode($inventory->id))}}" method="post">
                                            <a href="{{route('inventory.edit', base64_encode($inventory->id))}}" class="btn btn-dark">Edit</a>
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">Delete</button>    
                                        </form>    
                                    </td>
                                @endauth
                                @guest
                                    <td>Login to create, edit, delete</td>
                                @endguest
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">No Data</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection