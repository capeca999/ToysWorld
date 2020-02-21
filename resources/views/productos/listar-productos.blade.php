@extends('layouts.master')
@section('contenido')

@section('scripts')
<script src="/js/listar-productos.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/js/bootstrap-select.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
@endsection

@section('titulo')
- Listar Productos
@endsection

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/css/bootstrap-select.css">


<div id="contenedor-listar">
    <form action="#" method="get">
        <div class="listar-productos">
            <fieldset>
                <legend for="nombre">Nombre</legend>
                <input type="text" class="id-listar" id="nombre" aria-describedby="id" placeholder="Ejemplo: bicicleta">
            </fieldset><br><br>
            <fieldset>
                <legend for="categoria">Categoría/Provincia</legend>
                Categoría
                <select name="categoria" id="select-categoria">
                    <option value="all">Seleccionar Todo</option>
                    @for($i=0;$num_categorias ?? ''>$i;$i++)
                    <option value="{{$categorias[$i]->name}}">{{$categorias[$i]->name}}</option>
                    @endfor
                </select>
                Provincia de Usuarios
                <select id="provincia" name="provincia">
                    <option selected>Seleccionar Todo</option>
                    @for($i=0;$num_provincias ?? ''>$i;$i++)
                    <option>{{$provincias[$i]->province}}</option>
                    @endfor
                </select>
                
                Productos Vendidos
                <select id="vendidos" name="vendidos">
                    <option value="mas" selected>Más Vendidos</option>
                    <option value="menos">Menos Vendidos</option>
                </select>


            </fieldset><br><br>
            <fieldset>
                <legend for="stock">Stock</legend>
                <input type="checkbox" name="poco-stock" id="poco-stock">Productos con poco (menos de 5) o ningún Stock
            </fieldset>
        </div>
    </form>
    <div class="container-fluid">
        <div class="row">
            <table class="tabla-productos table table-responsive text-center">
                <thead class="cabecera-tabla">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Impuesto %</th>
                        <th scope="col">Descuento %</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Peso</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Edad Recomendada</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Foto</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody id="tbody-productos" class="fila-alta">

                </tbody>
            </table>
        </div>
    </div>

    <div id="contenedor-anyadir">
        <img src="/img/icons/suma.svg" id="anyadir-img" alt="crear-elemento" title="Añadir">
    </div>
</div>
@endsection