@extends('layouts.master')
@section('contenido')
    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
    <script src="/js/cargar_mas.js"></script>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/styles.min.css">

    </head>

    <body>

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


        </div>
    </div>
    <div class="col-md-4 text-center">
        <button id="cargarMas" name="cargarMas" class="btn btn-primary">Cargar Más</button>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.min.js"></script>

@endsection