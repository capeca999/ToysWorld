@extends('layouts.master')
@section('contenido')

<div id="usuario-perfil">

    <div id="contenedor-perfil">
        <h1>Perfil</h1>
        Nombre&nbsp;&nbsp;<span class="nombre">Pepa</span><br><br>
        Apellidos&nbsp;&nbsp;<span class="apellidos">Rodrigo Morcillo</span><br><br>
        Fecha Nacimiento&nbsp;&nbsp; <span class="nacimiento">12-2-2018</span><br><br>
        <hr>
        Email&nbsp;&nbsp;<span class="email">pepa@gmail.com</span><br><br>
        <span class="Cambiar contraseña">Recuperar Contraseña</span>
    </div>
    <div id="contenedor-historial">
        <h1>Historial</h1>

        <div class="historial-1">
            <div class="d-flex">
                Nombre &nbsp;&nbsp;<span class="nombre mr-auto"> Fulana</span>
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