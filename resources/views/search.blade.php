@extends('layouts.master')

@section('titulo')
   - Página de Búsqueda
@endsection
      
@section('scripts')
    <script src="/js/cargar_mas.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
                  
@section('contenido')
<input type="hidden" id="valorBuscar" value="{{$nombre ?? ''}}">

    <form class="form-inline">
        <div class="form-group">
            <label>Categorias</label>
            <select class="form-control" id="categoriasDesplegable">
                <option value="0">Selecciona Categoria</option>
            </select>
        </div>
        <div class="form-group">
            <label>Productos Por Página:</label>

            <input class="form-control" placeholder="21" min="0" type="number">

        </div>
    </form>
    <div class="container">
        <div class="row product-list dev" id="listaProductos">


            @foreach($productos as $producto)
        <div class="col-sm-6 col-md-4 product-item animation-element slide-rotate-clockwise">
                <div class="product-container">
                    <div class="row">
                        <div class="col-md-12"><a href="/producto/{{$producto->id}}"  class="product-image"><img src="/img/{{$producto->id}}.jpg"></a></div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <h2><a href="/producto/{{$producto->id}}" >{{$producto->name}}</a></h2>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p class="product-description">   {{$producto->description}}  </p>
                            <div class="row">
                                <div class="col-6"><button class="btn btn-light" type="button">Compra Ahora!</button></div>
                                <div class="col-6">
                                    <p class="product-price">{{$producto->price}} </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
    <div class="col-md-4 text-center">
        <button id="cargarMas" name="cargarMas" class="btn btn-primary">Cargar Más</button>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.min.js"></script>

@endsection