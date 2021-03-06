@extends('layouts.master')

@section('titulo')
    - Terminos y condiciones
@endsection
   
@section('contenido')
<div class="container py-5">


<div class="row">
  <div class="col-lg-8 mx-auto">

    <!-- List group-->
    <ul class="list-group shadow">

      <!-- list group item-->
      <li class="list-group-item">
        <!-- Custom content-->
        <div class="media align-items-lg-center flex-column flex-lg-row p-3">
          <div class="media-body order-2 order-lg-1">
            <h5 class="mt-0 font-weight-bold mb-2">Taza Tummys</h5>
            <p class="font-italic text-muted mb-0 small">Una taza con un diseño sencillo pero muy especial.</p>
            <div class="d-flex align-items-center justify-content-between mt-1">
              <h6 class="font-weight-bold my-2">€10.00</h6>
              <ul class="list-inline small">
              <input type="number" min="0">
              </ul>
            </div>
          </div><img src="/img/products/tazaTummys/taza.jpg" id="giftaza" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2 ">
        </div>
        <!-- End -->
      </li>
      <!-- End -->

      <!-- list group item-->
      <li class="list-group-item">
        <!-- Custom content-->
        <div class="media align-items-lg-center flex-column flex-lg-row p-3">
          <div class="media-body order-2 order-lg-1">
            <h5 class="mt-0 font-weight-bold mb-2">Camiseta Manga Larga Unisex Tummys</h5>
            <p class="font-italic text-muted mb-0 small"></p>
            <div class="d-flex align-items-center justify-content-between mt-1">
              <h6 class="font-weight-bold my-2">$99.00</h6>
              <ul class="list-inline small">
                <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
              </ul>
            </div>
          </div>
          <img src="/img/products/camisetaBlancaTummys/1.JPG" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2">
        </div>
        <!-- End -->
      </li>
      <!-- End -->

      <!-- list group item -->
      <li class="list-group-item">
        <!-- Custom content-->
        <div class="media align-items-lg-center flex-column flex-lg-row p-3">
          <div class="media-body order-2 order-lg-1">
            <h5 class="mt-0 font-weight-bold mb-2">Awesome product</h5>
            <p class="font-italic text-muted mb-0 small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit fuga autem maiores necessitatibus.</p>
            <div class="d-flex align-items-center justify-content-between mt-1">
              <h6 class="font-weight-bold my-2">$140.00</h6>
              <ul class="list-inline small">
                <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                <li class="list-inline-item m-0"><i class="fa fa-star-o text-gray"></i></li>
              </ul>
            </div>
          </div>
          
          
          <img src="https://res.cloudinary.com/mhmd/image/upload/v1556485078/shoes-2_g4qame.jpg" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2">
 
       
        </div>
        <!-- End -->
      </li>
      <!-- End -->

      <!-- list group item -->
      <li class="list-group-item">
        <!-- Custom content-->
        <div class="media align-items-lg-center flex-column flex-lg-row p-3">
          <div class="media-body order-2 order-lg-1">
            <h5 class="mt-0 font-weight-bold mb-2">Awesome product</h5>
            <p class="font-italic text-muted mb-0 small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit fuga autem maiores necessitatibus.</p>
            <div class="d-flex align-items-center justify-content-between mt-1">
              <h6 class="font-weight-bold my-2">$220.00</h6>
              <ul class="list-inline small">
                <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
              </ul>
            </div>
          </div><img src="https://res.cloudinary.com/mhmd/image/upload/v1556485078/shoes-4_vgfjy9.jpg" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2">
        </div>
        <!-- End -->
      </li>
      <!-- End -->

    </ul>
    <!-- End -->
  </div>
</div>
</div>
@endsection