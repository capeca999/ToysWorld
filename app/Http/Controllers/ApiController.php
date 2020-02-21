<<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class ApiController extends Controller
{

/*

        $productosPorPagina = 20;
        return Product::all()->where('state','=','alta')->skip(($numPag-1)*$productosPorPagina)->take($productosPorPagina);

*/


public function indexToysGenerico(){
$productos = $this::getToys(1,21);

return view('search')->with('productos', json_decode($productos));


//return view('search')->with('productos', $this::json_decode(getToys(1, 21)));
}

public function indexToysName($nombre){
    $productos = $this::getToysByName(1,21, $nombre);
    return view('search')->with('productos', json_decode($productos));
    //return view('search')->with('productos', $this::json_decode(getToys(1, 21)));
    }
    


public static function getToysByName($pagina=1, $cantidad=21, $nombreToy=""){

    if($cantidad<=0){
$cantidad=21;
    }

    if($pagina<1){
        $pagina=1;
    }
$pagina--;
return Product::all()->where('name', 'like', '%'.$nombreToy.'%')->splice(($cantidad*$pagina), $cantidad)->toJson();
}


public static function  getToys($pagina, $cantidad=21 ){
    if($cantidad<=0){
        $cantidad=21;
    }
    if ($pagina < 1){
        $pagina=1;
    }
    $pagina--;
        return Product::all()->splice(($cantidad*$pagina), $cantidad)->toJson();
 
    //      return json_encode(Product::all()->take(($pagina*21)));
}



    public static function  getCategory($categoria=0, $pagina=1, $cantidad=21){
        if($cantidad<=0){
            $cantidad=21;
        }
        if ($pagina < 1){
            $pagina=1;
        }

        $pagina--;
        //      return json_encode(Product::all()->take(($pagina*21)));
        return Product::all()->where('id_category', '=', $categoria)->splice(($cantidad*$pagina), $cantidad)->toJson();
        
    }

    public static function  getAllCategory(){
        return Category::all();
    }


    //
}

///api/products()
