@extends('layouts.master')
@section('contenido')

@section('scripts')
<script src="/js/listar-usuarios.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/js/bootstrap-select.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
@endsection

@section('titulo')
- Listar Usuarios
@endsection

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/css/bootstrap-select.css">


<div id="contenedor-listar">
    <form action="#" method="get">
        <div class="listar-usuarios">
            <fieldset>
                <legend for="nombre">Fecha de Compra</legend>
                <input type="date" class="id-listar" id="fecha" aria-describedby="id">
            </fieldset><br><br>
            <fieldset>
                <legend>Importe</legend>
                <input type="number" id="importe" class="id-listar">
            </fieldset><br><br>
        </div>
    </form>
    <div class="container-fluid">
        <div class="row">
            <table class="tabla-usuarios table table-responsive text-center">
                <thead class="cabecera-tabla">
                    <tr>
                        <th scope="col">NIF</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Primer Apellido</th>
                        <th scope="col">Segundo Apellido</th>
                        <th scope="col">Email</th>
                        <th scope="col">Fecha Nacimiento</th>
                    </tr>
                </thead>
                <tbody id="tbody-usuarios" class="fila-alta">
                    <tr>
                        <td class="id-usuario" scope="row">1</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                    </tr>
                    <tr> 
                        <td class="id-usuario" scope="row">2</td>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <td class="id-usuario" scope="row">2</td>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>@fat</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <hr>
</div>
@endsection