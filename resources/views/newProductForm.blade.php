@extends('layouts.nav')

@section('content')
<div class="card-body">
    <!--<form crear la ruta del form !!!! -->
    <form method="POST" enctype="multipart/form-data" action="{{ route('newProduct') }}">
    @csrf
        <div class="row justify-content-center">
            <h1 class="mt-5 mb-0">Introduzca un nuevo producto a la categoría  {{$category->name}}</h1>
            <div class="col-md-8"> 
                <div class="card">
                    <div class="card-header">{{ __('Crear producto') }}</div>
                    <div class="card-body">
                        <div class="form-group row ml-5 mb-0">
                            <label for="name" >{{ __('Nombre del producto') }}</label>
                        </div>
                        <div class="row ml-5 mb-5">
                            <input id="name" type="text" name="name" required>
                        </div>
                        
                        <div class="form-group row ml-5 mb-0">
                            <label for="price" >{{ __('Precio actual del producto') }}</label>
                        </div>
                        <div class="row ml-5 mb-5">
                            <input id="number" type="number"  step="0.01" name="price" required>
                        </div>
                        <div class="form-group row ml-5 mb-0">
                            <label for="image" >{{ __('Imagen del producto') }}</label>
                        </div>
                        <div class="row ml-5 mb-5">
                            <input id="image" type="file" name="image" required>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        
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

@endsection('content')