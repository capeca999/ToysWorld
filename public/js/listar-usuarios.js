$(function(){
    //TABLA USUARIOS - Carga la tabla con todos los datos de todos ls usuarios
    $.ajax({
        url: "listar/mostrar/",
        method: "GET",
        success: function(usuarios){
            crearTabla(usuarios);
            console.log(usuarios);
        },
        dataType: "json",
    });

    $('#tbody-usuarios').on('click','tr',function(){
        $('#seleccionado').attr('id','');
        $(this).attr('id','seleccionado'); 
    });

});

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