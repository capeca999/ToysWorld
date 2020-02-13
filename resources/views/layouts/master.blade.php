<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>ToysWorld - </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.min.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-light navbar-expand-md custom-header">
        <div class="container-fluid">
        
        <div>
            <img class="logotoys  img-fluid2" src="img/caballo.png">
            <img class="nombrelogo   img-fluid" src="img/titulo.png">
            <input class="buscar " type="text" placeholder="Buscar juguetes">
        </div>
        
         <div class="collapse navbar-collapse " id="navbar-collapse">

            <ul class="nav navbar-nav ml-auto  ">
                <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"> <img src="img/avatar.jpg" class="dropdown-image"></a>
                    <div class="dropdown-menu dropdown-menu-right" role="menu"><a class="dropdown-item" role="presentation" href="#">Perfil </a><a class="dropdown-item" role="presentation" href="#">Pedidos </a><a class="dropdown-item" role="presentation" href="#">Logout </a></div>
                </li>
            </ul>

            <ul class="nav navbar-nav links  ">
                <li class="nav-item" role="presentation"><a class="nav-link" href="#"> <img class="iconos" src="img/login.svg">LogIn </a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#"> <img class="iconos" src="img/register.svg">Registrarse </a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#"> <img class="iconos" src="img/basket.svg"> Carrito</a></li>
            </ul>
        </div>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>

        </div>
        </nav>
    </header>   
    
    <div id="contenedorPrincipal">         
        @yield('contenido')
    </div>
    
    <footer>
       <div class="row">
            <div class="col-sm-6 col-md-4 footer-navigation">
        
                <p class="links"><a href="#">Terminos Y condiciones</a><strong> · </strong><a href="#">Nuestro Compromiso</a><strong> · </strong><a href="#">Sobre Nosotros</a><strong> · </strong><a href="#">Politica De Privacidad</a></p>
                <img class="logo " src="img/logo.svg">
                <p class="company-name">Tummys © 2019</p>
            </div>
            <div class="col-sm-6 col-md-4 footer-contacts">
                <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                    <p><span class="new-line-span">Plaza Rafael Atard 24</span> Valencia, Manises</p>
                </div>
                <div><i class="fa fa-phone footer-contacts-icon"></i>
                    <p class="footer-center-info email text-left"> +34 722513578</p>
                </div>
                <div><i class="fa fa-envelope footer-contacts-icon"></i>
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