<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('/css/welcome.css') }}" rel="stylesheet">
    </head>
    <body>
        <a class="nav-link" href="{{ url('/newProductForm/'.$category->id) }}">  <h1 class="m-5">Añadir nuevo producto a la categoría</h1></a>
        <h1 class="text-primary">Mostrando los elementos de la categoría {{$category->name}}</h1>
        @foreach($products as $product)
            <h1>  {{ $product->name}}</h1>
            <h1>  Precio: {{ $product->price}}</h1>
        @endforeach
    </body>
</html>
