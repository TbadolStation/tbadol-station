<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 1- Validate Data.
        $validated = $request->validate([
           'title' =>  'required|min:10',
           'desc' => 'required',
           'image' => 'nullable',
           'category_id' => 'required'
        ]);
        // 2- Store Data
        $product= Product::create($validated);
        if($product)
        {
            return response()->json($product, 200);
        }else{
            return response()->json('Failed to Insert',400);
        }

        // 3 - return Response

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
