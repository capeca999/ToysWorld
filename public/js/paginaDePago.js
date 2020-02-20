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
        var metodo = $('#seleccionMetodoDePago option:selected').val();
        var existe = false;
        metodosDePagoDelUsuario.forEach(comprobar);
        $.each(metodosDePagoDelUsuario, function(){
            console.log(this.name);
        })
//        alert(existe);
    });
    
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