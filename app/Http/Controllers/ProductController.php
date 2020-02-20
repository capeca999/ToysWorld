<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use App\Product;
use App\Line;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }




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




    public static function getMostSelled()
    {
        $lineas = Line::all(['id_product', 'quantity'])->groupBy('id_product')->map(function ($item) {return $item->sum('quantity');})->toArray();
        asort($lineas);
        $lineas =  array_reverse($lineas, true);
        $lineas = array_slice($lineas, 0,3, true);


        foreach($lineas as $key=>$valor) {
            $products[] = ['producto'=>Product::find($key), 'cantidad'=>$valor];
        }
        return $products;

    }


    /**
     * Saca todos los productos
     *
     * @param  void
     * @return json productos
     */
    public static function listarProductos(){
        $productos = Product::all();

        return json_encode($productos);
    }

    /**
     * Saca todos los productos, que tiene relacion con la categoria
     *
     * @param  string $categoria
     * @return array productos
     */
    public static function listarProductosCategoria($categoria){
        return $productos = Product::all()->where('id_category', $categoria);
    }

    /**
     * Modifica el valor con el $valor pasado del atributo pasado con el valor $atributo del producto con ese id 
     *
     * @param  int $id
     * @param  string $atributo
     * @param  string $valor
     *
     * @return array productos
     */
    public static function modificarProducto($id,$atributo,$valor){
        $producto = Product::find($id);
        $producto->$atributo = $valor;
        $producto->save(); 
    }

    public static function modificarEstado($id,$estado){
        $producto = Product::find($id);
        $producto->status = $estado;
        $producto->save();
    }



    public static function mostrarProducto($id){

        $producto = Product::select('images.type','images.id','products.taxes','products.discount','products.name','products.description','products.brand','products.stock','products.weight','products.price','products.age','products.age')
            ->join('images','images.id_product','=','products.id')
            ->where('products.id',$id)
            ->get();

        $tamanyo= Product::select('*')
            ->join('images','images.id_product','=','products.id')
            ->where('products.id',$id)
            ->get()->count();

        //view('productos.detalle')->with('producto',
        return view('productos.detalle')
            ->with('producto',$producto)
            ->with('tamanyo',$tamanyo)
            ->with('id',$id);
        return producto;
    }

}
