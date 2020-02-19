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
        <h1>Historial</h1>

        <div class="historial-1">
            <div class="d-flex">
                Nombre &nbsp;&nbsp;<span class="nombre mr-auto" > Fulana</span>
                ID:&nbsp;&nbsp;<span class="id">{{$id}}</span><br>
            </div>


            <div>
                Precio&nbsp;&nbsp;<span class="precio">89,7€</span><br>
                Cantidad&nbsp;&nbsp;<span class="cantidad">2</span><br>
                IVA&nbsp;&nbsp;<span class="iva">21%</span><br>
                Método de pago&nbsp;&nbsp;<span class="metodopago">PayPal</span><br>
            </div>
            <div class="d-flex">

                Precio Final&nbsp;&nbsp;<span class="precio mr-auto">55€</span>
                Fecha de Compra&nbsp;&nbsp;<span class="compra">21-04-2019</span><br>
            </div>
        </div>
        <hr>

        <div class="historial-2">
            <div class="d-flex">
                Nombre &nbsp;&nbsp;<span class="nombre mr-auto"> Mengano</span>
                ID:&nbsp;&nbsp;<span class="id">{{$id}}</span><br>
            </div>


            <div>
                Precio&nbsp;&nbsp;<span class="precio">89,7€</span><br>
                Cantidad&nbsp;&nbsp;<span class="cantidad">2</span><br>
                IVA&nbsp;&nbsp;<span class="iva">21%</span><br>
                Método de pago&nbsp;&nbsp;<span class="metodopago">PayPal</span><br>
            </div>
            <div class="d-flex">

                Precio Final&nbsp;&nbsp;<span class="precio mr-auto">89,7</span>
                Fecha de Compra&nbsp;&nbsp;<span class="compra">21-04-2019</span><br>
            </div>
        </div>
    </div>

</div>




@endsection