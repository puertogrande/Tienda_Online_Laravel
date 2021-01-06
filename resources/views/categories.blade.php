@extends('layouts.nav')

@section('content')

<div class="container ">
    <div class="justify-content-center">
        <h1 class="text-primary">PAGINA DE LAS CATEGORIAS</h1>

        <a class="nav-link" href="{{ url('/newCategoryForm') }}">Añadir nueva categoria</span></a>
        @foreach($categories as $category)
        
            <a class="nav-link" href="{{ url('/showcategory/'.$category->id) }}">  <h1 class="m-5">  {{ $category->name}}</h1></a>
        @endforeach
    </div>
</div>

@endsection('content')
