@extends('layouts.nav')

@section('content')
    <div class="container ">
        <div class="justify-content-center">
            <h1 class="text-primary">Todos los productos</h1>
            @foreach($products as $product)
                <h1>  {{ $product->name}}</h1>
                <h1>  Precio: {{ $product->price}}</h1>
            @endforeach
        </div>
    </div>
@endsection('content')