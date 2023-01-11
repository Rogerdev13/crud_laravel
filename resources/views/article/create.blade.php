@extends('layouts.mainbase')

@section('contenido')
    <h3 class="title my-3">Create A New Register</h3>
    <form action="/articles" method="POST">
        @csrf
        <div class="mb-3">
            <label for="code" class="form-label">Code</label>
            <input type="text" id="code" name="code" class ="form-control" tabindex="1" >
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" id="description" name="description" class ="form-control" tabindex="2" >
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" value="0" id="quantity" name="quantity" class ="form-control" tabindex="3" >
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" id="price" name="price" step="any" value="0.00" class="form-control" tabindex="4" >
        </div>
        <a href="/articles" class="btn btn-danger">Cancel</a>
        <button class="btn btn-primary" type="submit">Save</button>
    </form>
@endsection