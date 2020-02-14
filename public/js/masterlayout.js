//Cargamos la página completamente antes de empezar
$(function(){
    //Añade un controlador de click al logo para que redirija a la página principal
    $('#logoHeader').click(function(){
       var ventana = '/';  
       location.href=ventana; 
    });
    
    //Añade un controlador de click al icono de la cesta para que redirija a dicha página
    $('#cestaHeader').click(function(){
       var ventana = 'cesta';  
       location.href=ventana; 
    });
    
    //Añade un controlador de click al icono de login para que redirija a la página de inicio de sesión
    $('#loginHeader').click(function(){
       var ventana = 'usuarios/login';  
       location.href=ventana; 
    });
  
    //Añade un controlador de click al icono de registro para que redirija a dicha página    
    $('#registerHeader').click(function(){
       var ventana = 'usuarios/registro';  
       location.href=ventana; 
    });
    
    //Añade un controlador de click al icono de avatar para que redirija a la página de perfil del usuariokklk
    $('#avatarHeader').click(function(){
       var ventana = 'usuarios/perfil';  
       location.href=ventana; 
    });
    
    $('#lupaHeader').click(function(){
       if($('#inputHeader').val()!=''){
            var ventana = 'productos/busqueda/'+$('#inputHeader').val();  
            location.href=ventana; 
       }else{
            $('#inputHeader').css('background-color','red');
       }
    });
    
    $('#inputHeader').focus(function(){
       $(this).css('background-color','white'); 
    });
    
});