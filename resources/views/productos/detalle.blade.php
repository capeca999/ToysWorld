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
                        <img src="{{ asset('img/img.jpg') }}" class="detalle-img" alt="detalles_producto">

                    </div>
                    <div class="col-sm">
                        <div class="detalle-producto">
                            <div class="d-flex">

                                <span class="mr-auto">Producto </span> 
                                <span>ID{{$id}}</span><br>   
                            </div>


                            <span>35,50€</span><br><br> <span>Info de DESCUENTO</span>

                            <br><br><br>
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
                    <span>5 - 7</span>   
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