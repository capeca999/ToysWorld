<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\payment_method;
use Auth;

class pagoController extends Controller{
    
    public function getMetodos(){
        $nif = Auth::user()->nif;
        $mpagos = payment_method::all()->where('nif',$nif)->toJson();
        return view('paginaDePago')->with('mpagos',$mpagos); 
    }    
    
}