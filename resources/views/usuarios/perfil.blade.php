@extends('layouts.master')
@section('contenido')

@section('scripts')
<script src="/js/perfil-usuario.js"></script>
@endsection

@section('titulo')
- Perfil
@endsection




<div id="usuario-perfil">
    <div id="contenedor-perfil">
        <h1>Perfil</h1>
        Nombre&nbsp;&nbsp;<span class="nombre" title="Doble click para cambiar">Pepa</span><br><br>
        Apellidos&nbsp;&nbsp;<span id="apellido1" title="Doble click para cambiar">Rodrigo</span>&nbsp;<span id="apellido2" title="Doble click para cambiar">Morcillo</span> <br><br>
        Fecha Nacimiento&nbsp;&nbsp; <span id="nacimiento" title="Doble click para cambiar">12-2-2018</span><br><br>
        <hr>
        Email&nbsp;&nbsp;<span id="email" title="Doble click para cambiar">pepa@gmail.com</span><br><br>
        <a href="#" id="recu-contras">Recuperar Contraseña</a>

    </div>
    <div id="contenedor-historial">
        <h1>Historial de Pedidos</h1>

        <div id="historiales">
        
        </div>
    </div>
</div>

@endsection