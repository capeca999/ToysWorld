@extends('layouts.master')
@section('contenido')
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
            <ol class="carousel-indicators">
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
                <div class="product-container" onclick="clickProducto({{$juguete['producto']->id}})">
                    <div class="row">
                        <div class="col-md-12"><a class="product-image"><img src="/img/{{$juguete['producto']->id}}.jpg"></a></div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <h2>{{$juguete['producto']->name}}</h2>
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
@endsection