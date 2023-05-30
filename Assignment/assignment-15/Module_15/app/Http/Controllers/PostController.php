<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;
use App\Http\Requests\StorepostsRequest;
use App\Http\Requests\UpdatepostsRequest;


class PostController extends Controller
{
    /**
     * Display the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('page.index', compact('products'));
    }

    /**
     * Show a new resource.
     */
    public function create()
    {
        return view('page.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorepostsRequest $request)
    {
        $product = Product::create($request->validated());
        return redirect()->route('page.index')->with('success', 'Product created successfully');
    }

    /**
     * Display resource.
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('page.index', compact('product'));
    }

    /**
     * Show the form for editing the resource.
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('page.edit', compact('product'));
    }

    /**
     * Update the resource in storage.
     */
    public function update(UpdatepostsRequest $request, $id)
    {
        $product = Product::findOrFail($id);

        $product->update($request->validated());

        return redirect()->route('page.index')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('page.index')->with('success', 'Product deleted successfully');
    }
}
