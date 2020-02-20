@extends('layouts.master')
@section('contenido')
    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>



    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/styles.min.css">
    <script src="/js/cargar_mas.js"></script>
</head>

<body>




<form class="form-inline">
    <div class="form-group">
        <label >Categorias</label>
        <select  class="form-control" >
            <option>Option</option>
        </select>
    </div>
    <div class="form-group">
        <label>Productos Por Página:</label>

        <input  class="form-control" placeholder="21"  min="0" type="number">

    </div>
</form>
    <div class="container">
        <div class="row product-list dev" id="listaProductos">
<!--
            <div class="col-sm-6 col-md-4 product-item animation-element slide-top-left">
                <div class="product-container">
                    <div class="row">
                        <div class="col-md-12"><a href="#" class="product-image"><img src="assets/img/iphone6.jpg"></a></div>
                    </div>

                    <div class="row">
                        <div class="col-8">
                            <h2><a href="#">iPhone 6s</a></h2>
                        </div>
                        <div class="col-4"><a href="#" class="small-text">compare </a></div>
                    </div>

                    <div class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i><a href="#" class="small-text">82 reviews</a></div>
                    <div class="row">
                        <div class="col-12">
                            <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna. </p>
                            <div class="row">
                                <div class="col-6"><button class="btn btn-light" type="button">Buy Now!</button></div>
                                <div class="col-6">
                                    <p class="product-price">$599.00 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

-->

        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.min.js"></script>

@endsection