<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
class ProductController extends Controller
{
    public function index() {
        

        
        
       /* return view("produits.index", [
            'products' =>  Produit::all()
        ]);*/

        return response()->json(Produit::all());
    }

    public function create() {
        return view('produits.create');
    }

    public function store(Request $request) {
        
        /*$produit = new Produit;
        
        $produit->name = $request->name;
        $produit->description = $request->description;
        $produit->size = $request->size;

        $produit->save();*/

        Produit::create($request->input());
         return redirect() -> route('produits.index');
    }
}
