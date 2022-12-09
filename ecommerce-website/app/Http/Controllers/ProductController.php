<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $product, $products, $brands, $categories;

    public function addProduct()
    {
        $this->categories = Category::where('status',1)->get();
        $this->brands = Brand::where('status',1)->get();

        return view('admin.product.add', [
            'categories' => $this->categories,
            'brands' => $this->brands,
        ]);
    }

    public function newProduct(Request $request)
    {
        Product::createProduct($request);
        return redirect()->back()->with('message', 'Product Created Successfully');
    }

    public function manageProduct()
    {
        $this->products = Product::orderBy('id', 'DESC')->get();
        return view('admin.product.manage', [
            'products' => $this->products
        ]);
    }

    public function editProduct($id)
    {
        $this->product = Product::find($id);
        $this->categories = Category::where('status',1)->get();
        $this->brands = Brand::where('status',1)->get();
//        $this->products = Product::all();
//        $this->categories = Category::all();
        $this->brands = Brand::all();
        return view('admin.product.edit', [
            'product' => $this->product,
//            'products' => $this->products,
            'categories' => $this->categories,
            'brands' => $this->brands,
        ]);
    }

    public function updateProduct(Request $request, $id)
    {
        Product::updateProduct($request, $id);
        return redirect('/manage-product')->with('message', 'Product info update Successfully');
    }
    public function deleteProduct($id)
    {
        Product::deleteProduct($id);
        return redirect('/manage-product')->with('message', 'Product info Delete Successfully');
    }
    public function detailProduct($id)
    {
        $this->product = Product::find($id);
        return view('admin.product.detail', [
            'product' => $this->product
        ]);
    }
}
