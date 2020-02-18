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
                <select id="vendidos" class="selectpicker">
                    <option selected>Más Vendidos</option>
                    <option>Menos Vendidos</option>
                </select>
            </fieldset><br><br>
            <fieldset>
                <legend for="categoria">Categoría/Provincia</legend>
                Categoría
                <select id="categoria" class="selectpicker" multiple data-live-search="true">
                    <option>Seleccionar Todo</option>
                    <option>Juguetes</option>
                    <option>Juegos de mesa</option>
                    <option>Relish</option>
                </select>
                Provincia de Usuarios
                <select id="categoria" class="selectpicker" multiple data-live-search="true">
                    <option>Seleccionar Todo</option>
                    <option>Valencia</option>
                    <option>Madrid</option>
                    <option>Barcelona</option>
                </select>
            </fieldset><br><br>
            <fieldset>
                <legend for="categoria">Stock</legend>
                <input type="checkbox" value="">Productos con poco o ningún Stock
            </fieldset>

        </div>
    </form>
    <div class="container-fluid">
        <div class="row">
            <table class="table table-responsive text-center">
                <thead class="cabecera-tabla">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Impuesto</th>
                        <th scope="col">Descuento</th>
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
                <tbody id="tbody-productos">
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td><img src="/img/icons/papelera.svg" id="baja" alt="papelera" title="Dar de baja"></td>
                    </tr>
                    <tr> 
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>@fat</td>
                        <td>@fat</td>
                        <td>@fat</td>
                        <td>@fat</td>
                        <td>@fat</td>
                        <td>@fat</td>
                        <td>@fat</td>
                        <td>@fat</td>
                        <td><img src="/img/icons/papelera.svg" id="baja" alt="papelera" title="Dar de baja"></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td>@twitter</td>
                        <td>@twitter</td>
                        <td>@twitter</td>
                        <td>@twitter</td>
                        <td>@twitter</td>
                        <td>@twitter</td>
                        <td>@twitter</td>
                        <td>@twitter</td>
                        <td><img src="/img/icons/papelera.svg" id="baja" alt="papelera" title="Dar de baja"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div id="contenedor-anyadir">
        <img src="/img/icons/suma.svg" id="anyadir-img" alt="crear-elemento" title="Añadir">
    </div>
</div>
@endsection