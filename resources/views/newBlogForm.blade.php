@extends('layouts.nav')

@section('content')

    <div class="card-body">
        <!--<form crear la ruta del form !!!! -->
        <form method="POST" action="{{ route('newPost') }}">
        @csrf
            <div class="row justify-content-center">
                <h1 class="m-5">Introduzca Los Datos Del Nuevo Post</h1>
                <div class="col-md-8"> 
                    <div class="card">
                        <div class="card-header">{{ __('Crear Post') }}</div>
                        <div class="card-body">
                            <div class="form-group row ml-5">
                                <label for="name" >{{ __('Título del Post') }}</label>
                            </div>
                            <div class="row ml-5">
                                <input id="name" type="text" name="title" required>
                            </div>
                        
                            <div class="form-group row ml-5 mt-5">
                                <label for="content" >{{ __('Contenido del Artículo') }}</label>
                            </div>
                            <div class="row ml-5">
                                <textarea  class="form-control col-10" rows="15" cols="50" id="content" type="text" name="content" required> </textarea>
                            </div>
                            <input id="user_id" name="user_id" type="hidden" value="{{ Auth::user()->id }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row m-5">
                <div class="col-md-3 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Crear Post') }}
                    </button>
                </div>
            </div>
        </form> 
    </div>

@endsection('content')
