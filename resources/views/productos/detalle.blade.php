<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="{{asset('css/estilo.css')}}">
    </head>
    <body>
        <h1>Perfil del Producto {{$id}}</h1>


        <div class="contenedor-producto">
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <!--    <div class="row">
<div class="col-sm boton-img">
<img class="boton-izquierda" src="{{ asset('img/icons/boton-izquierda.svg') }}" class="detalle-img" alt="izquierda-img">
</div>
<div class="col-sm">

<img class="papelera" src="{{ asset('img/img.jpg') }}" class="detalle-img" alt="papelera-img">
</div>

<div class="col-sm boton-img">
<img class="boton-derecha"  src="{{ asset('img/icons/boton-derecha.svg') }}" class="derecha-img" alt="derecha-img">
</div>
</div>-->
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('img/img.jpg') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/img2.jpg') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/img3.jpg') }}" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
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

                            <br>
                            <button type="button" class="btn btn-primary btn-sm detalle-boton">Añadir Carrito</button>

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



    </body>
</html>