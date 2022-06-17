<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('admin.product.index', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create', compact('categories'));
    }


    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        Product::firstOrCreate($data);

        return redirect()->route('admin.products.index');
    }

    public function show(Product $product)
    {
        $productIdCategory = $product->category_id;
        $category = Category::findOrFail($productIdCategory);
        
        return view('admin.products.show', compact('product', 'category'));
    }


    public function edit(Product $product)
    {
        return view("admin.product.edit", compact('product'));
    }

  
    public function update(UpdateRequest $request, Product $product)
    {
        $data = $request->validated();
        $product->update($data);

        return view('admin.prooduct.show', compact('product'));
    }


    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('admin.product.index');
    }


    public function restore(Product $product)
    {
        Product::withTrashed()->find($product->id)->restore();
  
        return back();
    }  
  
   
    public function restoreAll()
    {
        Product::onlyTrashed()->restore();
  
        return back();
    }
}
