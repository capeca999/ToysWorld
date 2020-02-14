$(function(){

    /*MODIFICAR PRODUCTO (Añadir input)- Al hacer doble click creara un input en el td cliqueado*/
    $( "tr" ).on( "dblclick", "td", function() {
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

    });

    /*MODIFICAR PRODUCTO (Modificar datos) - Al perder el foco del input creado anteriormente, según que contenga se guardara a la BBDD o no*/
    $('tbody').on('blur','#dato-anyadir',function(){

        if($(this).val() == ''){
            $(this).parent().html($(this).attr('placeholder'));
        }else{
            $(this).parent().html($(this).val());
        }

    });
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
                img.attr('src',"../img/icons/guarda.svg");
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
        $('#anyadir-img').attr('src','../img/icons/resta.svg');
        $('#anyadir-img').attr('title','Atrás');
        $(this).attr('id','contenedor-eliminar');

    });

    /*ELIMINAR PRODUCTO - Al hacer click en el icono de - se eliminara la fila*/
    $('body').on('click','#contenedor-eliminar',function(){
        $('#fanyadir').remove();

        //Cambiamos el añadir elemento
        $('#anyadir-img').attr('src','../img/icons/suma.svg');
        $('#anyadir-img').attr('title','Añadir');
        $(this).attr('id','contenedor-anyadir');


    });

    /*GUARDAR PRODUCTO - Al hacer click en el icono de guardado se deberá comprobar si se ha añadido todo correctamente y si es así insertarlo en la BBDD*/
    $('body').on('click','#guardar',function(){

        for(var i=1;i<12;i++){
            console.log($('#fanyadir td:nth-child(1)').val());
        }


    });

    /*DAR DE BAJA - Al hacer click en la papelera el pedido pasara a estar de baja*/
    $('body').on('click','#baja',function(){
        var fila=$(this).parent().parent();
        console.log(fila.attr('id'));
        fila.attr('id','eliminado');
        var img=$('<img>');
        img.attr('src','../img/icons/alta.svg');
        img.attr('title','Dar de alta');
        img.attr('id','alta');
        $(this).parent().append(img);

        $(this).hide();
        fila.children().off();
    });

    /*DAR DE ALTA - Al hacer click en el archivo del + , se se cambiara el estado del praducto a dado de alta*/

    $('body').on('click','#alta',function(){
        $(this).attr('src','../img/icons/papelera.svg');
        $(this).attr('id','baja');
        $(this).attr('title','Dar de baja');
        $(this).parent().parent().attr('id','');
    });


});