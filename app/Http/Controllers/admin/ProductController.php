<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $template = "admin.product.index";
        $product = Product::all();
        return view('admin.admin_home', compact('template','product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $storagePath = public_path('uploads');
        echo $storagePath;
        if ($request->hasFile('image')) {
            $avatar = $request->file('image');
            $fileName = time() . '.' . $avatar->getClientOriginalExtension();
            $avatar->move(public_path('uploads'), $fileName);
        } else {
            $fileName = null; // Đảm bảo biến $fileName được định nghĩa dù có tải lên tệp ảnh hay không
        }

        $product = new Product();
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->sale = $request->input('sale');
        $product->unit = $request->input('unit');
        $product->quantity = $request->input('quantity');
        $product->description = $request->input('description');
        $product->image = $fileName;

        $product->save();

        return redirect()->route('admin.products');
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
    public function edit(int $id)
    {
        $product = Product::find($id);
        return view('admin.product.edit', compact('product'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $product = Product::find($id);

        $storagePath = public_path('uploads');
        echo $storagePath;
        if ($request->hasFile('image')) {
            $avatar = $request->file('image');
            $fileName = time() . '.' . $avatar->getClientOriginalExtension();
            $avatar->move(public_path('uploads'), $fileName);
        } else {
            $fileName = null; // Đảm bảo biến $fileName được định nghĩa dù có tải lên tệp ảnh hay không
        }

        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->sale = $request->input('sale');
        $product->unit = $request->input('unit');
        $product->quantity = $request->input('quantity');
        $product->description = $request->input('description');
        $product->image = $fileName;    
        $product->save();
        return redirect()->route('admin.products');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('admin.products');
    }
}
