<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function index(){
    	return "Hola desde controller";
    }

    public function nombre($nombre){
    	return "Hola mi nombre es ".$nombre;
    }
}
