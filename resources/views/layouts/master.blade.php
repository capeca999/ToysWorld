<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>ToysWorld @yield('titulo')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    
    <!-- BOOTSTRAP -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Icono -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--JQUERY -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="/css/styles.min.css">
    <!-- JavaScript -->
    <script src="/js/masterlayout.js"></script>
    @yield('scripts')
</head>
<body>
    <header>
        <div class="row ml-5 mr-0">
            <div class="col-md-9 col-12 mt-md-2 mt-5 mb-0 pb-0">
                <a href="{{url('indice')}}"><img id="logoHeader" class="cursorHand" src="/img/caballo.png"></a>
                <img id="tituloHeader" src="/img/titulo.png">
                <a class="d-none d-md-inline-flex " href="productos/busqueda"><img class="cursorHand iconos ml-5" src="/img/logomenuBusqueda.png" alt="Busqueda"></a>
                <input id="inputHeader" class="ml-5" type="text"  placeholder="Buscar juguetes"><img id="lupaHeader" class="cursorHand" src="/img/lupa.png" alt="lupa">
            </div>

            <div class="col-md-3 col-12 ml-4 ml-sm-5 ml-md-0 mt-4">
               @if(Auth::user()==null)
                <a href="usuarios/login"><img class="cursorHand iconos ml-3" src="/img/icons/login.svg" id="loginHeader" alt="Login" title="Login"></a>
                <a href="usuarios/registro"><img class="cursorHand iconos ml-5" src="/img/icons/register.svg" id="registerHeader" alt="Registrarse" title="Registrarse"></a>
               @endif
                <a href="{{url('usuario/cesta')}}"><img class="cursorHand iconos ml-5" src="/img/icons/basket.svg" id="cestaHeader" alt="Cesta" title="Cesta"></a>
                <a href="{{url('usuario/perfil/1564')}}"><img class="cursorHand iconos ml-5" src="/img/avatar.jpg" id="avatarHeader" alt="Perfil" title="Perfil"></a>
            </div>
        </div>
    </header>   
    
    <div id="contenedorPrincipal">         
        @yield('contenido')
    </div>
    
    <footer>
       <div class="row">
            <div class="col-sm-6 col-md-4 footer-navigation">
        
                <p class="links"><a href="#">Terminos Y condiciones</a><strong> · </strong><a href="#">Nuestro Compromiso</a><strong> ·<br><br> </strong><a href="#">Sobre Nosotros</a><strong> · </strong><a href="#">Politica De Privacidad</a></p>
                <img class="logo " src="/img/icons/logo.svg">
                <p class="company-name">Tummys © 2019</p>
            </div>
            <div class="col-sm-6 col-md-4 footer-contacts">
                <div class="cursorHand"><span class="fa fa-map-marker footer-contacts-icon"> </span>
                    <p><span class="new-line-span">Plaza Rafael Atard 24</span> Valencia, Manises</p>
                </div>
                <div class="cursorHand"><i class="fa fa-phone footer-contacts-icon"></i>
                    <p class="footer-center-info email text-left"> +34 722513578</p>
                </div>
                <div class="cursorHand"><i class="fa fa-envelope footer-contacts-icon"></i>
                    <p> <a href="#" target="_blank">toysworld@gmail.com</a></p>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-4 footer-about">
                <h4>SUGERENCIAS</h4>
                <p> Si tiene alguna sugerencia, o simplemente quiera comunicarnos algo diganoslo a nuestro E-mail. Siguenos en nuestras redes sociales!</p>
                <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-instagram"></i></a><a href="#"><i class="fa fa-youtube"></i></a><a href="#"><i class="fa fa-google-plus"></i></a></div>
            </div>
        </div>     
</footer>

</body>
</html>