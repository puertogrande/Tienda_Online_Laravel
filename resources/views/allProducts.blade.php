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
        <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        </style>
    </head>
    <body>
        <div class="container ">
            <div class="justify-content-center">
                <h1 class="text-primary">Todos los productos</h1>
                @foreach($products as $product)
                    <h1>  {{ $product->name}}</h1>
                    <h1>  Precio: {{ $product->price}}</h1>
                @endforeach
            </div>
        </div>
    </body>
</html>
