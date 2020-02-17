<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class PrincipalController extends Controller
{
    public function index() {
return view("indice")->with('juguetes' , ProductController::getMostSelled());

    }
}
