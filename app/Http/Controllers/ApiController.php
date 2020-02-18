<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class ApiController extends Controller
{


 public  function  get($pagina){
    if ($pagina < 1){
        $pagina=1;

    }


return json_encode(Product::all()->take(($pagina*10)));

 }
    //
}

///api/products()
