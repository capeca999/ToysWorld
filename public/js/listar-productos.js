$(function(){
            console.log('holaddd');

    //TABLA crear las filas de la tabla con sus productos
    $.ajax({
        url: "/producto/listar/mostrar/",
        method: "GET",
        success: function(productos){
            anyadirTabla(productos);
        },
        dataType: "json"
    });

    function anyadirTabla(productos){
        $('#tbody-productos').empty();

        for(var i = 0 ; i<productos.length ; i++){
            var tr = $('<tr>');
            $('#tbody-productos').append(tr);

            var cont=0;
            for(var clave in productos[i]){
                if(cont != 13){
                    var producto = productos[i][clave];
                    columna = $('<td>');
                    if(cont==0){
                        columna=$('<th>');
                        tr.attr('id','id'+producto);
                        columna.attr('scope','col');
                    }else{
                        if(clave == "status"){
                            if(productos[i][clave] == "No_Disponible"){
                                tr.addClass('eliminado');
                            }
                        }
                        columna.addClass(clave);
                    }  
                    if(cont==12){
                        var img=$('<img>');
                        if(tr.attr('class') == 'eliminado'){
                            img.attr('src','/img/icons/alta.svg');
                            img.attr('id','alta');

                        }else{
                            img.attr('src','/img/icons/papelera.svg');
                            img.attr('id','baja');
                        }
                        img.attr('alt','papelera');
                        img.attr('title','Dar de baja');
                        columna.append(img);
                    }else{
                        columna.text(producto);
                    }
                    tr.append(columna);

                }
                cont++;
            }
        }
    }


    $('fieldset #categoria').selectpicker();

    /*MODIFICAR PRODUCTO (Añadir input)- Al hacer doble click creara un input en el td cliqueado*/
    $( "#tbody-productos" ).on( "dblclick", "td", function() {
        if($(this).attr('class') != 'status'){
            if($(this).text() != ''){
                var contenido=$(this).html();
                $(this).html('');
                var input =$('<input>');
                input.attr('type','text');
                input.attr('id','dato-anyadir');
                input.attr('placeholder',contenido);
                $(this).append(input);
                input.select();
            }
        }

    });

    /*MODIFICAR PRODUCTO (Modificar datos) - Al perder el foco del input creado anteriormente, según que contenga se guardara a la BBDD o no*/
    $('#tbody-productos').on('blur','#dato-anyadir',function(){

        var atributo=$(this).parent().attr('class');
        var id=$(this).parent().parent().attr('id').split('id')[1];

        if($(this).val() == ''){
            $(this).parent().html($(this).attr('placeholder'));
        }else{
            if(!comprobacionModificacion(atributo,$(this).val())){
                $.ajax({
                    url: "/producto/listar/modificar/"+id+"/"+atributo+"/"+$(this).val(),
                    method: "GET",
                });

            }


            $(this).parent().html($(this).val());
        }

    });

    /*******************    QUEDAN LAS COMPROBACIONES    ********************/
    function comprobacionModificacion(atributo,valor){
        var error=false;
        /*  if(atributo == 'taxes' || atributo == 'discount'){
            if(isNaN(valor)){
               error=true; 
            }
        }*/
        return error;
    }


    /*AÑADIR PRODUCTO - Al hacer click en el icono de + se añadira una nueva fila con sus columnas para insertar los datos*/
    $('body').on('click','#contenedor-anyadir',function(){
        var fila=$('<tr>');
        fila.attr('id','fanyadir');
        $('tbody').append(fila);
        //Añadimos una fila
        for(var i=0;i<13;i++){

            if(i == 12){
                var columna=$('<td>');
                fila.append(columna);
                var img =$('<img>');
                img.attr('id','guardar');
                img.attr('src',"/img/icons/guarda.svg");
                columna.append(img);
            }else if(i != 0){
                var columna=$('<td>');
                fila.append(columna);
                var input=('<input>');
                columna.append(input);
            }else{
                var columna=$('<td>');
                fila.append(columna);
            }
        }

        //Cambiamos el añadir elemento
        $('#anyadir-img').attr('src','/img/icons/resta.svg');
        $('#anyadir-img').attr('title','Atrás');
        $(this).attr('id','contenedor-eliminar');

    });

    /*ELIMINAR PRODUCTO - Al hacer click en el icono de - se eliminara la fila*/
    $('body').on('click','#contenedor-eliminar',function(){
        $('#fanyadir').remove();

        //Cambiamos el añadir elemento
        $('#anyadir-img').attr('src','/img/icons/suma.svg');
        $('#anyadir-img').attr('title','Añadir');
        $(this).attr('id','contenedor-anyadir');


    });

    /*GUARDAR PRODUCTO - Al hacer click en el icono de guardado se deberá comprobar si se ha añadido todo correctamente y si es así insertarlo en la BBDD*/
    $('body').on('click','#guardar',function(){
        var error=false;
        var producto=[];
        for(var i=1;i<12;i++){
            if($('#fanyadir td:eq('+i+') input').val() == ''){
                error=true;
            }else{
                producto.push($('#fanyadir td:eq('+i+') input').val());

            }
        }

        if(!error){
            for(var i=1;i<13;i++){
                console.log(producto[i]);
                $('#fanyadir td:eq('+i+')').html(producto[i]);
            }
        }


    });

    /*DAR DE BAJA - Al hacer click en la papelera el pedido pasara a estar de baja*/
    $('body').on('click','#baja',function(){
        var fila=$(this).parent().parent();
        fila.addClass('eliminado');
        var img=$('<img>');
        img.attr('src','/img/icons/alta.svg');
        img.attr('title','Dar de alta');
        img.attr('id','alta');
        $(this).parent().append(img);
        var id =$(this).parent().parent().attr('id').split('id')[1];
        $('#id'+id+" .status").text("No_Disponible");
        modificarEstado(id,'No_Disponible');
        $(this).remove();
    });

    /*DAR DE ALTA - Al hacer click en el archivo del + , se se cambiara el estado del praducto a dado de alta*/

    $('body').on('click','#alta',function(){
        $(this).attr('src','/img/icons/papelera.svg');
        $(this).attr('id','baja');
        $(this).attr('title','Dar de baja');
        $(this).parent().parent().removeClass('eliminado');
        var id =$(this).parent().parent().attr('id').split('id')[1];
        $('#id'+id+" td.status").text("Disponible");
        modificarEstado(id,'Disponible');
    });


    function modificarEstado(id,estado){
        var ruta= "/producto/listar/modificar/"+id+"/status/Disponible";
        if(estado != "Disponible"){
            ruta= "listar/modificar/"+id+"/status/No_Disponible";
        }
        $.ajax({
            url: ruta,
            method: "GET",
        });


    }






});