<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\payment_method;

class pagoController extends Controller{
    
    public function getMetodos(){
        $nif = Auth::user()->nif;
        return payment_method::all()->where('nif',$nif)->toJson(); 
    }    
    
}