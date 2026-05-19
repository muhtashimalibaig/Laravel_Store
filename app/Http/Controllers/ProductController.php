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
        //
        $products = Product::where('user_id', auth()->id())->latest()->get();

        return view('pages.products.view_all_products', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'product_image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        'product_name' => 'required',
        'price' => 'required|numeric',
        'category' => 'required',
        'stock' => 'required|integer',
        'description' => 'nullable'
    ]);

    $imagePath = $request->file('product_image')->store('products', 'public');

    Product::create([
        'user_id' => auth()->id(),
        'product_image' => $imagePath,
        'product_name' => $request->product_name,
        'price' => $request->price,
        'category' => $request->category,
        'stock' => $request->stock,
        'description' => $request->description
    ]);

    return redirect()->back()->with('success', 'Product Uploaded');
}

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
{
    return view('pages.products.edit_product', compact('product'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
{
    // Security check (owner only)
    if ($product->user_id !== auth()->id()) {
        abort(403);
    }

    // Validate input
    $request->validate([
        'product_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'product_name'  => 'required',
        'price'         => 'required|numeric',
        'category'      => 'required',
        'stock'         => 'required|integer',
        'description'   => 'nullable'
    ]);

    // Prepare update data
    $data = [
        'product_name' => $request->product_name,
        'price'        => $request->price,
        'category'     => $request->category,
        'stock'        => $request->stock,
        'description'  => $request->description,
    ];

    // If new image uploaded
    if ($request->hasFile('product_image')) {

        // delete old image
        if ($product->product_image) {
            \Storage::disk('public')->delete($product->product_image);
        }

        // store new image
        $imagePath = $request->file('product_image')->store('products', 'public');
        $data['product_image'] = $imagePath;
    }

    // Update product
    $product->update($data);

    return redirect()->route('products.index')
        ->with('success', 'Product updated successfully');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        // Delete Product
        if($product->user_id !== auth()->id()){
            abort(403);
        };

        if($product->product_image){
            \Storage::disk('public')->delete($product->product_image);
        };

        $product->delete();

        return redirect()->back()->with('success', 'Product deleted successfully');


    }
}
