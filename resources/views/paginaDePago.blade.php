@extends('layouts.master')

@section('titulo')
    - Pagar
@endsection

@section('contenido')
<div id="mainPaginaDePago">
    <section class="col-md-5 p-5" id="productosCesta">
        <table cellpadding="15" id="tablaDePago1">
           <form action="post">
            <tr>
                <td class="text-center grande" colspan="2">Envío</td><td></td>
            </tr>
            <tr>
                <td class="font-weight-bold medio">Detalles de envío</td>
            </tr>
            <tr>
                <td class="text-left font-weight-bold medio">Nombre</td><td class="font-weight-bold medio">Apellidos</td>
            </tr>
            <tr>
                <td class="text-left"><input type="text" name="nombre"></td><td><input type="text" name="apellidos"></td>
            </tr>
            
            <tr>
                <td class="text-left font-weight-bold medio">Dirección</td><td></td>
            </tr>
            <tr>
                <td class="text-left"><select name="tipoDeDireccion">
                        <option value="Calle">Calle</option>
                        <option value="Avenida">Avenida</option>
                        <option value="Bulevar">Bulevar</option>
                        <option value="Plaza">Plaza</option>
                    </select>
                </td><td><input type="text" name="direccion"></td><td><input type="number" name="numero" id="numeroDirPago"></td>
            </tr>
            
           </form> 
        </table>
    </section>
</div>
@endsection