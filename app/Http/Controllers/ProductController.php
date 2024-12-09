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
        $prod = Product::orderBy('id', 'ASC')->paginate(50);

        return view('admin.product.index', compact('prod'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'name'=> 'required|unique:products',
            'image' => 'required',
            'price' => 'required|numeric',
            'content' => 'optional',
            'category_id' => 'required|exists:category',
        ]);

        $data = $request->all('name', 'image', 'price','content', 'category_id');

        return redirect('')->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $Product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $Product)
    {
        return view('admin.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $Product)
    {
        $request -> validate([
            'name'=> 'required|unique:products',
            'image' => 'required',
            'price' => 'required|numeric',
            'content' => 'optional',
            'category_id' => 'required|exists:category'
        ]);

        $data = $request->all('name', 'image', 'price','content');
        $Product -> update($data);

        return redirect('')->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $Product)
    {
        $Product->delete();

        return redirect()->route('product.index');
    }
}
