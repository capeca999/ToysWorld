@extends('layouts.master')
@section('contenido')

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
@endsection

@section('titulo')
    - Detalle Producto
@endsection

<div class="contenedor-producto">
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/img/img.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/img2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/img3.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>

                    </a>
                </div>

            </div>
            <div class="col-sm">
                <div class="detalle-producto">
                    <div class="d-flex">

                        <span class="mr-auto">Producto </span> 
                        <span>ID{{$id}}</span><br>   
                    </div>

                    <div class="d-flex">
                        <span class="precio-producto  mr-auto">35,50€</span><br><br>
                        <span class="descuento-producto">Info de DESCUENTO</span>
                    </div>
                    
                    <form id="cantidad-producto">                    
                        <input type="number" name="cantidad" min="1" max="10" value="1">
                    </form>
                    
                    <br>
                    <button id="detalle-boton" type="button" class="btn btn-primary btn-sm detalle-boton">Añadir Carrito</button>

                </div>
                <div class="detalle-producto">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 

                </div>
            </div>
        </div>
    </div>

    <div class="detalle-atributo">

        <div class="d-flex">
            <span class="mr-auto">Marca </span> 
            <span>Una marca</span>   
        </div>
        <hr>
        <div class="d-flex">
            <span class="mr-auto">Edad Recomendad </span> 
            <span>7 - 100</span>   
        </div>
        <hr>
        <div class="d-flex">
            <span class="mr-auto">Otro</span> 
            <span>Cosas</span>   
        </div>
    </div>

</div>
@endsection