@extends('layouts.master')

@section('scripts')
    <script src="/js/cesta.js"></script>
@endsection

@section('titulo')
    - Cesta
@endsection

@section('contenido')
<div id="mainCesta" class="row">
    <section class="col-md-9 p-5" id="productosCesta">
        
    </section>
    
    <section class="col-md-3">
        <article class="m-5">
            <table cellpadding="15" id="tablaCesta">
                <tr><td class="grande">Resumen de pedido</td></tr>
                <tr><td class="font-weight-bold text-right medio">Productos: <span id="totalProductosCesta"></span>€</td></tr>
                <tr><td class="font-weight-bold text-right medio">IVA: 21%</td></tr>
                <tr><td class="font-weight-bold text-right medio">Gastos de envío: <span id="gastosDeEnvio">5.50</span>€</td></tr>
                <tr><td class="text-right medio"></td></tr>
                <tr><td class="text-right medio"></td></tr>
                <tr><td class="text-right font-weight-bold medio">Total: <span id="totalCesta"></span>€</td></tr>
            </table>
        </article>
        
        <article class="ml-5">
            <img src="img/botonpago.png" id="botonPago" class="ml-5" alt="Pagar">
        </article>
    </section>
</div>
@endsection