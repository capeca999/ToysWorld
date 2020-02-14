<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <!-- Styles -->
        <style>

            .logo-img{
                width: 50px;
                height: 50px;
            }

            .navbar{
                background-color:blue ;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm ">
            <!-- Links -->

            <img src="{{ asset('img/Logo.png') }}" class="logo-img" alt="logo">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Link 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link 2</a>
                </li>
            </ul>
            <!-- Navbar text-->
            <span class="navbar-text">
                Navbar text
            </span>
        </nav>
    </body>
</html>
