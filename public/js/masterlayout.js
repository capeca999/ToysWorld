//Cargamos la página completamente antes de empezar
$(function(){
    
    //Añade un controlador de click para redirigir a la página de búsqueda con el valor del input (siempre que no esta vacío)
    $('#lupaHeader').click(function(){
       if($('#inputHeader').val()!=''){
            var ventana = '/productos/busqueda/'+$('#inputHeader').val();  
            location.href=ventana; 
       }else{
            //Pone de color rojo el fondo del input en caso de que el valor sea vacío
            $('#inputHeader').css('background-color','red');
       }
    });
    
    //Añade un controlador para mantener de color blanco el fondo del input
    $('#inputHeader').focus(function(){
       $(this).css('background-color','white'); 
    });

    $('#logout').click(function(event){
        event.preventDefault();
        $('#frm-logout').submit();
    });

});


    function clickProducto(id){
        location.href='/detalle/'+id;
    }