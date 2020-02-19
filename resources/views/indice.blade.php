@extends('layouts.master')
@section('contenido')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <section id="carousel">
        <div class="carousel slide" data-ride="carousel" id="carousel-1">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item">
                    <div class="jumbotron pulse animated hero-primera carousel-hero">
                        <h1 class="hero-title">Los mejores juguetes del planeta</h1>
                        <p class="hero-subtitle">Estos son los mejores juguetes de todo el planeta</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="jumbotron pulse animated hero-segunda carousel-hero">
                        <h1 class="hero-title">Lo mejor para nuestros pequeños</h1>
                        <p class="hero-subtitle">Nuestros hijos son lo más importante que tenemos y por ello merecen lo mejor</p>

                    </div>
                </div>
                <div class="carousel-item active">
                    <div class="jumbotron pulse animated hero-tercera carousel-hero">
                        <h1 class="hero-title">Ofertas de primavera</h1>
                        <p class="hero-subtitle">Disfruta ya de los mejores productos rebajados más que nunca en ToysWorld</p>

                    </div>
                </div>
            </div>
            <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><i
                            class="fa fa-chevron-left"></i><span class="sr-only">Previous</span></a><a
                        class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><i
                            class="fa fa-chevron-right"></i><span class="sr-only">Next</span></a></div>
            <ol
                    class="carousel-indicators">
                <li data-target="#carousel-1" data-slide-to="0"></li>
                <li data-target="#carousel-1" data-slide-to="1"></li>
                <li data-target="#carousel-1" data-slide-to="2" class="active"></li>
            </ol>
        </div>
    </section>



    <div class="container">
        <div class="row product-list dev">

            @foreach($juguetes as $juguete)
            <div class="col-sm-6 col-md-4 product-item animation-element slide-top-left">
                <div class="product-container">
                    <div class="row">
                        <div class="col-md-12"><a href="#" class="product-image"><img src="/img/{{$juguete['producto']->id}}.jpg"></a></div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <h2><a href="producto/{{$juguete['producto']->id}}">{{$juguete['producto']->name}}

                                </a></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p class="product-description">{{$juguete['producto']->description}}</p>
                            <div class="row">
                                <div class="col-6"> <button class="btn btn-light" type="button">Buy Now!</button></div>
                                <div class="col-6">
                                    <p class="product-price">Precio: {{$juguete['producto']->price}} €</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.min.js"></script>
@endsection