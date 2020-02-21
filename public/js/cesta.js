//Cargamos la página completamente antes de empezar
$(function(){
    
    //Obtiene todo el contenido de la Cookie 'carrito' y va pasando todos los productos de la Cookie a líneas de pedido 
    var productos = JSON.parse(getCookie('carrito'));
    var precios;
    var cont=0;
    if(productos[0]!=null){
        for(var i=0;i<productos.length;i++){
            anyadirProducto(productos[i]);   
        }   
    }
     
    //Añade una línea de pedido a la página
    function anyadirProducto(producto){
        var art = $('<article>').addClass('col-md-12 pb-2');
        var tit = $('<span>').addClass('grande').html(producto[0]+' ');
        var papelera = $('<img>').attr('src','/img/icons/papelera.svg').attr('alt','papelera').addClass('papeleraCesta').attr('id','pap'+cont);
        var desc = $('<span>').addClass('medio').html('<br>'+producto[1]+'<br>');
        art.append(tit);
        art.append(papelera);
        art.append(desc);
        var linea = $('<div>').addClass('row');
        art.append(linea);
        var pre = $('<div>').addClass('font-weight-bold col-md-4 medio').html('Precio: ');
        var preLin = $('<span>').addClass('precioDeLinea').html(producto[3]+'€');
        var cant = $('<div>').addClass('font-weight-bold col-md-4 medio').html('Cantidad: '+producto[4]);
        var tot = $('<div>').addClass('font-weight-bold col-md-4 medio').html('Precio total: ')
        var preTot = $('<span>').addClass('precioTotalDeLinea').html(producto[3]*producto[4]+'€');
        pre.append(preLin);
        tot.append(preTot);
        linea.append(pre);
        linea.append(cant);
        linea.append(tot);
        $('#productosCesta').append(art);  
        cont++;
        calcularTotal();
    }    

    //Calcula el total del pedido con todas las líneas y el gasto de envío correspondiente
    function calcularTotal(){
        var totales = $('.precioTotalDeLinea');
        var dineroTotal=0;
        for(var i=0;i<totales.length;i++){
            var total = totales[i].innerHTML.substring(0,totales[i].innerHTML.length-1);
            total = parseInt(total);
            dineroTotal+=total;
        }
        $('#totalProductosCesta').html(dineroTotal);
        var gastosDeEnvio = $('#gastosDeEnvio').html();
        gastosDeEnvio = parseFloat(gastosDeEnvio);
        $('#totalCesta').html(dineroTotal+gastosDeEnvio);
        precios = JSON.stringify([dineroTotal,gastosDeEnvio]);
    }
    
    //Controla el click sobre el boton de "pagar", te redirige a la página de pago si estas logueado y en caso contrario a la página de registro
    $('#botonPago').click(function(){
        var user = getCookie('logueado');
        if(user==null){
            location.href="/register";
        }else if(precios!=undefined){
            setCookie('preciosDeCesta',precios,45);
            location.href="/cesta/pagar";
        }else{
            location.href="/";
        }
    });
    
    //Al clickar en el icono de la papelera elimina el elemento de la cesta y recarga la página
    $('article').on('click','.papeleraCesta',function(){
       var id = parseInt(this.id.substring(3,this.id.length));
       var cesta = JSON.parse(getCookie('carrito'));
       console.log(cesta);
       cesta.splice(id, 1);
       console.log(cesta);
       setCookie('carrito',JSON.stringify(cesta),9999999999);
       location.href="/cesta/"
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