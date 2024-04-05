<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public $products = [
        [
            // dummy data
            
            'id' =>  1,
            'name' => 'Product  1',
            'price' => 100,
            'description' => 'ito ang product 1',
        ],[
            'id' =>  2,
            'name' => 'Product  2',
            'price' => 150,
            'description' => 'ito ang product 2',
        ],[
            'id' =>  3,
            'name' => 'Product  3',
            'price' => 200,
            'description' => ' ito ang product 3',
        ]
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return response()->json($this->products);

        return response()->json([
            "message" => "Display All Products"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return response()->json([
            "message" => "Product Created Succesfully"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json([
            "message" => "Display Product with ID: " . $id
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return response()->json([
            "message" => "Product with ID: " . $id . " Updated Successfully! "
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return response()->json([
            "message" => "Product with ID: " . $id . " Deleted Successfully!"
        ]);
    }
}
