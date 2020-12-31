<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tienda de ropa</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('/css/welcome.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="//assets.jumpseller.com/public/jquery-3.3.1.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ url('/categories') }}">Categorias</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/categories') }}">Productos</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="{{ url('/categories') }}">Sobre Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/categories') }}">Trabaja con Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/categories') }}">Blog</a>
                    </li>
        
                    @if (Route::has('login'))
                        @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/home') }}">Home</a>
                        </li>
                        @else
                            <li>
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                            @if (Route::has('register'))
                                <li>
                                    <a class="nav-link" href="{{ route('register') }}">Registro</a>
                                </li>
                            @endif
                        @endauth
                        @endif
                </ul>
            </div>
        </nav>
        


            <div id="carouselHomeControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">   
                    <div class="carousel-item active">
                        <img class="d-block h-25 w-100" src="/img//ropa_tendida.jpeg" alt="fashion">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block h-25 w-100" src="/img//hipster.webp" alt="hipster clothing">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block h-25 w-100" src="/img//pantalones.jpg" alt="pants">
                    </div> 
                    <div class="carousel-item">
                        <img class="d-block h-25 w-100" src="/img//gente.jpg" alt="people">
                    </div>  
                </div>
                <a class="carousel-control-prev" href="#carouselHomeControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselHomeControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        
    </body>

     <!-- Script to Activate Tooltips -->
     <script>
      $(function () {
        $('[data-toggle="tooltip"]').tooltip()
        $('.carousel').carousel()
      })
      
    </script>

       <!-- Bootstrap Core JavaScript -->
       <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="//stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</html>
