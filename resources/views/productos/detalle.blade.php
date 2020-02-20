@extends('layouts.master')

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="/js/detalle.js"></script>
@endsection

@section('titulo')
- Detalle Producto
@endsection

@section('contenido')
<div class="contenedor-producto">
    <div class="container">
        <div class="row">
            <div id="carousel-detalle" class="col-sm">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @for($i=0;$tamanyo>$i;$i++)
                        @if ($i == 0)
                        <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}" class="active"></li>
                        @else
                        <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}"></li>
                        @endif
                        @endfor
                    </ol>
                    <div class="carousel-inner">

                        @for($i=0;$tamanyo>$i;$i++)
                        @if ($i == 0)
                        <div class="carousel-item active">
                            <img src="/img/{{$producto[$i]->id}}.{{$producto[$i]->type}}" class="d-block w-100" alt="...">
                        </div>
                        @else
                        <div class="carousel-item">
                            <img src="/img/{{$producto[$i]->id}}.{{$producto[$i]->type}}" class="d-block w-100" alt="...">
                        </div>
                        @endif

                        @endfor
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>

                    </a>
                </div>

            </div>
            <div id="descripcion-detalle" class="col-sm">
                <div class="detalle-producto">
                    <div class="d-flex">

                        <span class="mr-auto" id="nombreProductoDetalle">{{$producto[0]->name}} </span> 
                        <span id="idProductoDetalle">ID {{$id}}</span><br>   
                    </div>

                    <div class="d-flex">
                        <span class="precio-producto mr-auto" id="precioProductoDetalle">{{$producto[0]->price}}€</span><br><br>
                        <span class="descuento-producto">Info de DESCUENTO {{$producto[0]->discount}}% &nbsp;&nbsp;</span>
                        <span class="descuento-producto"> Info de IVA  {{$producto[0]->taxes}}%</span>
                    </div>

                    <form id="cantidad-producto">                    
                        <input type="number" name="cantidad" min="1" max="{{$producto[0]->stock}}" value="1" id="cantidadProductoDetalle">
                    </form>

                    <br>
                    <button id="detalle-boton" type="button" class="btn btn-primary btn-sm detalle-boton">Añadir Carrito</button>

                </div>
                <div class="detalle-producto" id="descProductoDetalle">
                   {{$producto[0]->description}}
                </div>
            </div>
        </div>
    </div>

    <div id="otros-detalle" class="detalle-atributo">

        <div class="d-flex">
            <span class="mr-auto">Marca </span> 
            <span>{{$producto[0]->brand}}</span>   
        </div>
        <hr>
        <div class="d-flex">
            <span class="mr-auto">Edad Recomendad </span> 
            <span>{{$producto[0]->age}} - 100</span>   
        </div>
        <hr>
        <div class="d-flex">
            <span class="mr-auto">Peso</span> 
            <span>{{$producto[0]->weight}}g</span>   
        </div>
    </div>

</div>
@endsection