$(function(){

    //DOBLE CLICK en los SPAN PERFIL: Al hacer doble click sobre un span, vaciaremos el 'span' y crearemos un input
    $('#usuario-perfil').on('dblclick', '#contenedor-perfil span',function(){
        var valor=$(this).text();
        console.log(valor);
        $(this).empty();
        var input=$('<input>');
        input.attr('id','perfil-input');
        if($(this).attr('class') == 'nacimiento'){
            input.prop('type','data');
            input.attr('placeholder',valor);

        }else{
            input.attr('type','text');
            input.attr('placeholder',valor);


        }



        $(this).append(input);
        input.focus();
    });


    //BLUR en los INPUT PERFIL: Al hacer blur sobre un input se debe comporbar los datos introducidos por el ususario
    $('#usuario-perfil').on('blur', '#perfil-input',function(){
        var span=$(this).parent();

        if($(this).val()!= ''){
            var dato=$(this).val();
            span.empty();
            span.text(dato);

            if(!$('#guardar-perfil').length > 0){
                var img=$('<img>');
                img.attr('src','/img/icons/guarda.svg');
                img.attr('id','guardar-perfil');
                $('#recu-contras').append(img);
            }

        }else{
            var dato=$(this).attr('placeholder');
            span.empty();
            span.text(dato);
        }
    });

    $('#usuario-perfil').on('click','#guardar-perfil',function(){
        console.log('MODIFICARLO - para insertar los datos en la BBDD');
    })

});