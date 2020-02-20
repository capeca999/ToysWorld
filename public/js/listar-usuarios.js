$(function(){
    //TABLA USUARIOS - Carga la tabla con todos los datos de todos ls usuarios
    $.ajax({
        url: "/usuario/listar/mostrar/",
        method: "GET",
        success: function(usuarios){
            crearTabla(usuarios);
        }
    });

    //SELECCIÓN USUARIO 
    $('#tbody-usuarios').on('click','tr',function(){
        $('#listar-user-error').text('');
        $('#seleccionado').attr('id','');        
        $(this).attr('id','seleccionado'); 
        var nif=$(this).children('td:first').html();

        $.ajax({
            url: "/usuario/listar/historial/"+nif,
            method: "GET",
            success: function(historial){
                crearHistorial(historial);
                if(historial.lenght <=0){
                    $('#listar-user-error').text("*No tiene historiales de compra");
                    $('#listar-user-error').addClass('alert alert-danger');
                }
            }
        });
    });

    //FILTRADO DE IMPORTE
    $('input#importe').blur(function(){
        $('#listar-user-error').text('');
        var importe =$(this).val();
        if(importe != ''){
            if(importe >=0){
                var nif=$('tr#seleccionado').children('td:first').text();
                $.ajax({
                    url: "/usuario/listar/historial/importe/"+nif+"/"+importe,
                    method: "GET",
                    success: function(historial){
                        crearHistorial(historial);
                        if(historial.length == 0){
                            $('#listar-user-error').text("*No tiene historiales de compra con este importe: "+importe);
                            $('#listar-user-error').addClass('alert alert-danger');
                        }
                    }
                });
            }
        }else{
            location.reload();
        }


    });

    //FILTRADO DE FECHA
    $('input#fecha').blur(function(){
        $('#listar-user-error').text('');
        var fecha =$(this).val();
        if(fecha != ''){
            var nif=$('tr#seleccionado').children('td:first').text();
            $.ajax({
                url: "/usuario/listar/historial/fecha/"+nif+"/"+fecha,
                method: "GET",
                success: function(historial){
                    crearHistorial(historial);
                    if(historial.length == 0){
                        $('#listar-user-error').text("*No tiene historiales  de compra con esta fecha: "+fecha);
                        $('#listar-user-error').addClass('alert alert-danger');
                    }
                }
            });

        }else{
            location.reload();
        }
    });

});


//GENERA HISOTIRIALES a partir de lo que traer la consulta ajax
function crearHistorial(historiales){

    $('#historiales').empty();

    for(var i = 0 ; i<historiales.length ; i++){

        var div_contenedor=$('<div>');
        $('#historiales').append(div_contenedor);
        var cont=0;

        for(var clave in historiales[i]){
            var historial= historiales[i][clave];
            var div_historial = $('<div>');
            div_historial.attr('id','historial'+i);
            var div1=$('<div>');
            //DIV 1-------------------------
            div1.addClass('d-flex');
            div1.html('Nombre &nbsp;&nbsp;<span id="nombre" class="nombre mr-auto">'+historiales[i]['name']+'</span>Orden de Pedido:&nbsp;&nbsp;<span class="id" id="order">'+historiales[i]['id_order']+'</span>');
            var div2=$('<div>');

            div2.html('Precio&nbsp;&nbsp;<span id="precio" class="precio">'+historiales[i]['price']+'€</span><br>Cantidad&nbsp;&nbsp;<span id=cantidad class="cantidad">'+historiales[i]['quantity']+'</span><br>Método de pago&nbsp;&nbsp;<span id="pago" class="metodopago">'+historiales[i]['payment_method']+'</span><br>');

            var div3=$('<div>');
            div3.addClass('d-flex');
            div3.html('  Precio Final&nbsp;&nbsp;<span id="precio" class="precio mr-auto">'+historiales[i]['total_price']+'€</span>Fecha de Compra&nbsp;&nbsp;<span id="fecha" class="compra">'+historiales[i]['date']+'</span><br>');

            cont++;
        }

        div_contenedor.append(div1);
        div_contenedor.append(div2);
        div_contenedor.append(div3);
        div_contenedor.append('<hr>');
    }

}


function crearHistorialFecha(historiales){
    $('#historiales').empty();

    for(var i = 0 ; i<historiales.length ; i++){

        var div_contenedor=$('<div>');
        $('#historiales').append(div_contenedor);
        var cont=0;

        for(var clave in historiales[i]){
            console.log('ejem');
            if(clave == 'date'){
                console.log(historiales[i][clave]);
            }

            /*var historial= historiales[i][clave];
            var div_historial = $('<div>');
            div_historial.attr('id','historial'+i);
            var div1=$('<div>');
            //DIV 1-------------------------
            div1.addClass('d-flex');
            div1.html('Nombre &nbsp;&nbsp;<span id="nombre" class="nombre mr-auto">'+historiales[i]['name']+'</span>Orden de Pedido:&nbsp;&nbsp;<span class="id" id="order">'+historiales[i]['id_order']+'</span>');
            var div2=$('<div>');

            div2.html('Precio&nbsp;&nbsp;<span id="precio" class="precio">'+historiales[i]['price']+'€</span><br>Cantidad&nbsp;&nbsp;<span id=cantidad class="cantidad">'+historiales[i]['quantity']+'</span><br>Método de pago&nbsp;&nbsp;<span id="pago" class="metodopago">'+historiales[i]['payment_method']+'</span><br>');

            var div3=$('<div>');
            div3.addClass('d-flex');
            div3.html('  Precio Final&nbsp;&nbsp;<span id="precio" class="precio mr-auto">'+historiales[i]['total_price']+'€</span>Fecha de Compra&nbsp;&nbsp;<span id="fecha" class="compra">'+historiales[i]['date']+'</span><br>');

            cont++;*/
        }

        /* div_contenedor.append(div1);
        div_contenedor.append(div2);
        div_contenedor.append(div3);
        div_contenedor.append('<hr>');*/
    }
}




//CREAR TABLA- a partir del array que le pase por parametro

function crearTabla(usuarios){
    $('#tbody-usuarios').empty();


    for(var i = 0 ; i<usuarios.length ; i++){

        var tr = $('<tr>');
        $('#tbody-usuarios').append(tr);

        var cont=0;
        for(var clave in usuarios[i]){

            var usuario = usuarios[i][clave];
            if(cont <6){
                var td= $('<td>');
                if(cont == 0){
                    tr.attr('id','id'+usuario);
                }
                if(clave == 'role'){
                    td.text(usuarios[i]['date_of_birth']);
                }else{
                    td.text(usuario);
                }
                tr.append(td);
            }
            cont++;
        }

    }
}