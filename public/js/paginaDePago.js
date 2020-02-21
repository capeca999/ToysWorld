//Cargamos la página completamente antes de empezar
$(function(){
    //Obtiene todos los precios de la cesta y los pone en el resumen del pedido
    var precios = JSON.parse(getCookie('preciosDeCesta'));
    $('#subtotal').html(precios[0]);
    $('#gastosDeEnvio').html(precios[1]);
    $('#total').html(precios[0]+precios[1]);
       
    //Obtiene todos los métodos de pago que tiene el usuario que entra a la página
    var metodosDePagoDelUsuario;
    $.getJSON('/pagar/metodos',function(data){
        metodosDePagoDelUsuario=data;
    });
        
    //Comprueba si existe el método de pago que se selecciona y en caso contrario pone un formulario para añadirlo 
    $('#seleccionMetodoDePago').change(function(){
        $('#botonPagoFinal').remove();
        $('#tickVerde').html('');
        var metodosDisponibles = JSON.parse($('#metodosEscondidos').html());
        var metodo = $('#seleccionMetodoDePago option:selected').val();
        var existe = false;
        $.each(metodosDisponibles, function(index, met){
           console.log(met);
           if(met['name']==metodo){
                existe=true;
           } 
        });
        if(existe){
            ponerBotonDePago();
        }else{
            ponerFormMet();
        }
    });
    
    function ponerBotonDePago(){
        var tickVerde = $('<img>').attr('src','/img/tickverde.png');
        var botonPago = $('<img>').attr('src','/img/botonpago.png').attr('style','margin-left:3%;').attr('id','botonPagoFinal');
        $('#sectionDePago').append(botonPago);
        $('#tickVerde').append(tickVerde);
    }
    
    function ponerFormMet(){
        var cruzRoja = $('<img>').attr('src','/img/equisroja.png');
        $('#tickVerde').append(cruzRoja);
    }
    
    //Obtiene la cookie con el nombre pasado como parámetro
    function getCookie(cname) {
        var name=cname + "=";
        var decodedCookie=decodeURIComponent(document.cookie);
        var ca=decodedCookie.split(';');
        for(var i=0;i<ca.length;i++){
                var c=ca[i];
                while(c.charAt(0)==' '){
                    c=c.substring(1);
                }
                if(c.indexOf(name)==0){
                    return c.substring(name.length,c.length);
                }
        }
        return null;
    }
    
});