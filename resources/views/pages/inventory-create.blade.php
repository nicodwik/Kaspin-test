@extends('layouts.main')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Create Inventory</h1>
        
        <div class="card mb-4">
            <div class="card-body">
                @if (Session::has('error'))
                    <div class="alert alert-danger" role="alert">
                        {{Session::get('error')}}
                    </div>
                @endif
                <form action="{{route('inventory.store')}}" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="">Category</label>
                        <select name="category_id" id="" class="form-control" required>
                            <option value="" selected disabled>Choose category</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}" {{old('category_id') == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" value="{{old('name')}}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Merk</label>
                        <input type="text" class="form-control" name="merk" value="{{old('merk')}}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Supplier</label>
                        <input type="text" class="form-control" name="supplier" value="{{old('supplier')}}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Year</label>
                        <input type="number" class="form-control" name="year" value="{{old('year')}}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Condition</label>
                        <select name="condition" id="" class="form-control" required>
                            <option value="" selected disabled>Choose condition</option>
                            <option value="GOOD">Good</option>
                            <option value="HALF_BROKEN">Half Broken</option>
                            <option value="BROKEN">Broken</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Amount</label>
                        <input type="number" class="form-control" name="amount" value="{{old('amount')}}" required>
                    </div>
                    <div class="form-group mb-3">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection