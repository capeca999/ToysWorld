<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class ApiController extends Controller
{




    public  function  getToys($pagina, $cantidad=21, $nombreToy=""){
        if($cantidad<=0){
            $cantidad=21;
        }
        if ($pagina < 1){
            $pagina=1;

        }

        if(strlen($nombreToy)>0){
            return Product::all()->where('name','like', $nombreToy)->skip(($pagina-1)*$cantidad)->take($cantidad)->toJson();
        }
        else{
            return Product::all()->skip(($pagina-1)*$cantidad)->take($cantidad)->toJson();
        }

        //      return json_encode(Product::all()->take(($pagina*21)));


    }




    public  function  getCategory($pagina, $cantidad=21, $categoria){
        if($cantidad<=0){
            $cantidad=21;
        }
        if ($pagina < 1){
            $pagina=1;

        }
        //      return json_encode(Product::all()->take(($pagina*21)));
        return Product::all()->where('id_category', '=',  $categoria)->skip(($pagina-1)*$cantidad)->take($cantidad)->toJson();


    }

    public function  getAllCategory(){
        return Category::all();
    }


    //
}

///api/products()
