@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Product</h1>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Product Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="price" name="price" required min="0">
        </div>
        <div class="form-group">
            <label for="image">Product Image</label>
            <input type="file" class="form-control-file" id="image" name="image" required accept="image/*">
        </div>
        <button type="submit" class="btn btn-primary">Add Product</button>
    </form>
</div>
@endsection
