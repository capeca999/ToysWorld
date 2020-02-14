@extends('layouts.master')
@section('contenido')
<link rel="stylesheet" type="text/css" href="/css/estilo.css">
<script src="/js/listar-productos.js"></script>
<div id="contenedor-listar">
    <form action="#" method="get">
        <div class="listar-productos">
            <label for="nombre">Nombre</label>
            <input type="text" class="id-listar" id="nombre" aria-describedby="id" placeholder="Ejemplo: bicicleta">
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
                <tbody>
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