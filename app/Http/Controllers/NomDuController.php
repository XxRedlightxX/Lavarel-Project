<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;
class NomDuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return response()->json(Type::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function CreateType(Request $request)
    {
         $validated = $request->validate( [
            'name' => 'required',
        ]);

        try {
            $type = Type::create($validated);
            return response()->json( [
                 $type
            ], 201);
            
        }catch (\Exception $e) {
            return response()->json([
                'message' => 'Creation failed.',
                'error'   => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
