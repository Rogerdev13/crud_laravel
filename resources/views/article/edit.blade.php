@extends('layouts.mainbase')

@section('contenido')
<h2>editing xd</h2>
<form action="/articles/{{$article->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="code" class="form-label">Code</label>
            <input type="text" id="code" name="code" class ="form-control" tabindex="1" value="{{$article->code}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" id="description" name="description" class ="form-control" tabindex="2" value="{{$article->description}}"} >
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="text" id="quantity" name="quantity" class ="form-control" tabindex="3"  value="{{$article->quantity}}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" id="price" name="price" step="any"  class ="form-control" tabindex="4" value="{{$article->precio}}">
        </div>
        <a href="/articles" class="btn btn-danger">Cancel</a>
        <button class="btn btn-primary" type="submit">Save</button>
</form>

@endsection