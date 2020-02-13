$(function(){

    /*Al hacer doble click creara un input en el td cliqueado*/
    $( "tr" ).on( "dblclick", "td", function() {
        var contenido=$(this).html();
        $(this).html('');
        var input =$('<input>');
        input.attr('type','text');
        input.attr('id','dato-anyadir');
        input.attr('placeholder',contenido);
        $(this).append(input);
        input.select();

    });

    /*Al perder el foco del input creado anteriormente, según que contenga se guardara a la BBDD o no*/
    $('tbody').on('blur','#dato-anyadir',function(){

        if($(this).val() == ''){
            $(this).parent().html($(this).attr('placeholder'));
        }else{
            $(this).parent().html($(this).val());
        }

    });

    $('.contenedor-anyadir').click(function(){
        var fila=$('<tr>');
        fila.attr('id','fanyadir');
        $('tbody').append(fila);
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
    });

    $('#fanyadir').on('click','#guardar',function(){
        console.log('entra');
        for(var i=1;i<13;i++){
            console.log($('#fanyadir').children(i).val());
        }
    });


    $('body').on('click','.papelera-img',function(){
        var fila=$(this).parent().parent();
        console.log(fila.attr('id'));
        fila.attr('id','eliminado');
        $(this).hide();
        fila.children().off();
    });



});