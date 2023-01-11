@extends('layouts.mainbase')

@section('contenido')

<a href="articles/create" class='btn btn-success'>Create A New One</a>

<table class="table table-dark table-stripped my-4">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Description</th>
            <th scope="col">Quantity</th>
            <th scope="col">Code</th>
            <th scope="col">Price</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($articles as $article)

        <tr>
            <td>{{$article->id}}</td>
            <td>{{$article->description}}</td>
            <td>{{$article->quantity}}</td>
            <td>{{$article->code}}</td>
            <td>{{$article->precio}}</td>
            <td>
                <form action="{{route('articles.destroy' , $article->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a  class="btn btn-info"  href="/articles/{{$article->id}}/edit">Edit</a>
                    <button type="submit"  class="btn btn-danger" href="">Remove</button>
                </form>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>
@endsection