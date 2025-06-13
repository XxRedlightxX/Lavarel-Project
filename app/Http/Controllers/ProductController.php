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
         $produits = Produit::with('type')->get();

        return response()->json($produits);

        //return response()->json(Produit::all());
    }

    public function create() {
        return view('produits.create');
     
    }
public function createProduct(Request $request)
{
    $validated = $request->validate([
        'name'        => 'required|string|max:255',
        'description' => 'nullable|string',
        'size'        => 'nullable|string|max:50',
    ]);

    try {
        $produit = Produit::create($validated);
        return response()->json([
            'message' => 'Product created successfully.',
            'data'    => $produit,
        ], 201);
    } catch (\Exception $e) {
        return response()->json([
            'message' => 'Creation failed.',
            'error'   => $e->getMessage(),
        ], 500);
    }
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
