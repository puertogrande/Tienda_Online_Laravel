@extends('layouts.nav')

@section('content')

<a class="nav-link" href="{{ url('/newProductForm/'.$category->id) }}">  <h1 class="m-5">Añadir nuevo producto a la categoría</h1></a>
<h1 class="text-primary">Mostrando los elementos de la categoría {{$category->name}}</h1>
@foreach($products as $product)
    <h1>  {{ $product->name}}</h1>
    <h1>  Precio: {{ $product->price}}</h1>
@endforeach

@endsection('content')