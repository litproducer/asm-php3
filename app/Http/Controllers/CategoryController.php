<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
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
        Category::create($request->post());

        return redirect()->route('categories.index')->with('success','Company has been created successfully.');
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
        $categorie = Category::find($id);
        return view('categories.edit', compact('categorie'));
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

        $categorie = Category::find($id);
        $categorie->fill($request->post())->save();

        return redirect()->route('categories.index')->with('success','Company Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::find($id)->delete();
        return redirect()->route('categories.index')->with('success','Company Has Been updated successfully');
    }
}
