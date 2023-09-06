<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::paginate(5);

        return view("products.index", compact("products"));
    }

    public function create(){
        return view("products.create");
    }
    
    public function store(Request $request){
        //validacion de los datos
        // return $request->all();
        //Guardado de los datos
        Product::create($request->all());

        //Redireccion con un mensaje flash de sesion
        return redirect()->route("products.index")->with("status", "Producto creado 
        satisfactoriamente!");
    }
}
