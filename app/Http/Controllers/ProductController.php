<?php

namespace App\Http\Controllers;

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
        return view('products.list_products', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => "required|string|max:50|",
            'cate_id' => 'required',
            'rate' => 'required',
            'price' => 'required',
            'material' => 'required',
            'description' => 'required',
        ]);
        Product::create($request->post());

        return redirect()->route('products.index')->with('success','Company has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
//    public function show(string $id)
//    {
//        //
//    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'rate' => 'required',
        ]);

        $product = Product::find($id);
        $product->fill($request->post())->save();

        return redirect()->route('products.index')->with('success','Company Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::find($id)->delete();
        return redirect()->route('products.index')->with('success','Company Has Been updated successfully');
    }
}
