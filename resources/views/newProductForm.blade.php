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
        <div class="card-body">
            <!--<form crear la ruta del form !!!! -->
            <form method="POST" action="{{ route('newProduct') }}">
            @csrf
                <div class="row justify-content-center">
                    <h1 class="m-5">Introduzca un nuevo producto a la categoría  {{$category->name}}</h1>
                    <div class="col-md-8"> 
                        <div class="card">
                            <div class="card-header">{{ __('Crear producto') }}</div>
                            <div class="card-body">
                                <div class="form-group row ml-5">
                                    <label for="name" >{{ __('Nombre del producto') }}</label>
                                </div>
                                <div class="row ml-5 mb-5">
                                    <input id="name" type="text" name="name" required>
                                </div>
                                <div class="form-group row ml-5">
                                    <label for="price" >{{ __('Precio actual del producto') }}</label>
                                </div>
                                <div class="row ml-5">
                                    <input id="number" type="text" name="price" required>
                                </div>
                                <input id="category_id" name="category_id" type="hidden" value="{{$category->id}}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row m-5">
                    <div class="col-md-3 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Crear Producto') }}
                        </button>
                    </div>
                </div>
            </form> 
        </div>
    </body>