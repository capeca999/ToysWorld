//Carga el documento completamente
$(function(){
    
    //Añade un controlador de click al botón para añadir a la cesta un producto
    $('#detalle-boton').click(function(){
        var nombre = $('#nombreProductoDetalle').html();
        var descripcion = $('#descProductoDetalle').html();
        var id = $('#idProductoDetalle').html().split(' ')[1];;
        var precio = $('#precioProductoDetalle').html().split('€',1)[0];
        var cantidad = $('#cantidadProductoDetalle')[0].value;
        var nuevoProducto = [nombre,descripcion,id,precio,cantidad];
        
        var cestaActual = JSON.parse(getCookie('carrito'));
        if(cestaActual==null){
            setCookie('carrito',JSON.stringify([nuevoProducto]),9999999999);
        }else{
            cestaActual.push(nuevoProducto);
            setCookie('carrito',JSON.stringify(cestaActual),9999999999)
        }
    });  
    
    //Crea una cookie pasando el nombre, el valor y la fecha de caducidad    
    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        var expires = "expires="+ d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
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