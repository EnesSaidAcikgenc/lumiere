<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('adminpage.info');
    }

    public function categories()
    {
        $categories = category::all();
        return view('adminpage.categories', compact('categories'));
    }
    public function products()
    {
//        $category_name = category::all(); -> Bu sorunu en erkenden çözmeye çalış
        $products = Product::all();
        return view('adminpage.product', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function add_categories()
    {
        return view('adminpage.add_categories');
    }

    public function category_add(Request $request)
    {
        $category = new Category();
        $category -> category_name = $request->input('category_name');
        if($request->hasfile('image')){
            $path = public_path('images');
            $name=\Illuminate\Support\Str::random(20);
            $file=$request->file('image');
            $name .= $name.$file->getClientOriginalExtension();
            $file->move($path,$name);
            $category->image = $name;
        }
        $category->save();

        return redirect()->route('categorie');
    }

    public function edit_categories($id,Request $request)
    {
        $ucategory = category::find($id);
        return view('adminpage.update_categories', compact('ucategory'));
    }

    public function category_update(Request $request)
    {
        $category = category::find($request->id);
        $category -> category_name = $request->input('category_name');
        if($request->hasfile('image')){
            $path = public_path('images');
            $name=\Illuminate\Support\Str::random(20);
            $file=$request->file('image');
            $name .= $name.$file->getClientOriginalExtension();
            $file->move($path,$name);
            $category->image = $name;
        }
        $category->save();

        return redirect()->route('categorie');
    }

    public function delete_categories($id)
    {
        $category = category::find($id);
        if(isset($category)){
            $category->delete();
        }
        return redirect()->route('categorie');
    }

    public function add_product()
    {
        $categories = category::all();
        return view('adminpage.add_product', compact('categories'));
    }

    public function product_add(Request $request)
    {
        $products = new Product();
        $products -> category_id = $request->input('category_id');
        $products -> product_name = $request->input('product_name');
        $products -> price = $request->input('price');
        $products -> explanation = $request->input('explanation');

        if($request->hasFile('image')){
            $path = public_path('images');
            $filename = \Illuminate\Support\Str::random(20).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move($path, $filename);
            $products->image = $filename;
        }
        $products->save();

        return redirect()->route('products');
    }

    public function edit_product($id,Request $request)
    {
        $categories = category::all();
        $uproducts = Product::find($id);
        return view('adminpage.update_product', compact('uproducts', 'categories'));
    }

    public function products_update(Request $request)
    {
        $products = Product::find($request->id);
        $products -> category_id = $request->input('category_id');
        $products -> product_name = $request->input('product_name');
        $products -> price = $request->input('price');
        $products -> explanation = $request->input('explanation');

        if($request->hasFile('image')){
            $path = public_path('images');
            $filename = \Illuminate\Support\Str::random(20).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move($path, $filename);
            $products->image = $filename;
        }
        $products->save();

        return redirect()->route('products');
    }

    public function delete_product($id)
    {
        $product = Product::find($id);
        if(isset($product)){
            $product->delete();
        }
        return redirect()->route('products');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
