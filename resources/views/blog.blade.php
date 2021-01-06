@extends('layouts.nav')

@section('content')
        <div class="container ">
            <div class="justify-content-center">
                <h1 class="text-primary">Mostrando los artículos escritos por los usuarios</h1>

                <a class="nav-link" href="{{ url('/newBlogForm') }}">Añadir nuevo post</span></a>
                @foreach($posts as $post)
                    <h1 class="m-5">  {{ $post->title}}</h1>
                    <h1 class="m-5">  {{ $post->content}}</h1>
                @endforeach
            </div>
        </div>
    </body>
</html>

@endsection('content')