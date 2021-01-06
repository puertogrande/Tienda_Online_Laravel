@extends('layouts.nav')

@section('content')
<div class="container">
    <div class="row justify-content-center mb-5">
        <h1>Tiendaropa.com </h1>
    </div>
</div>

<div id="carouselHomeControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">   
        <div class="carousel-item active">
            <img class="d-block" src="/img//ropa_tendida.jpeg" alt="fashion">
        </div>
        <div class="carousel-item">
            <img class="d-block" src="/img//hipster.webp" alt="hipster clothing">
        </div>
        <div class="carousel-item">
            <img class="d-block" src="/img//pantalones.jpg" alt="pants">
        </div> 
        <div class="carousel-item">
            <img class="d-block" src="/img//gente.jpg" alt="people">
        </div>  
    </div>
    <a class="carousel-control-prev" href="#carouselHomeControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselHomeControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" ></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- Script to Activate Tooltips -->
<script>
$(function () {
$('[data-toggle="tooltip"]').tooltip()
$('.carousel').carousel()
})

</script>

@endsection('content')