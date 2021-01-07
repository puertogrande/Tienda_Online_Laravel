@extends('layouts.nav')

@section('content')

<div class="card-body">
    <!--<form crear la ruta del form !!!! -->
    <form method="POST" enctype="multipart/form-data" action="{{ route('newCategory') }}">
    @csrf
        <div class="row justify-content-center">
            <h1 class="m-5">Introduzca los datos de la nueva categoría</h1>
            <div class="col-md-8"> 
                <div class="card">
                    <div class="card-header">{{ __('Crear categoría') }}</div>
                    <div class="card-body">
                        <div class="form-group row ml-5 mb-0">
                            <label for="name" >{{ __('Nombre de la nueva categoría') }}</label>
                        </div>
                        <div class="row ml-5 mt-0 mb-5">
                            <input id="name" type="text" name="name" required>
                        </div>
                        <div class="form-group row ml-5 mb-0">
                            <label for="description" >{{ __('Descripcion breve de la categoría') }}</label>
                        </div>
                        <div class="row ml-5 mt-0 mb-5">
                            <textarea name="description" rows="2" cols="30" maxlength="191"></textarea>
                        </div>
                        <div class="form-group row ml-5 mb-0">
                            <label for="image" >{{ __('Imagen de la categoría') }}</label>
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
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row m-5">
            <div class="col-md-3 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Crear Categoría') }}
                </button>
            </div>
        </div>
    </form> 
</div>

@endsection('content')