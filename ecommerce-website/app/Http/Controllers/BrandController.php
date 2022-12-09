<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public $Brands, $Brand;
    public function addBrand()
    {
        return view('admin.brand.add');
    }
    public function newBrand(Request $request)
    {
        Brand::createBrand($request);
        return redirect()->back()->with('message', 'Brand Created Successfully');
//        return $request->all();
//        return view('admin.category.new-category');
    }

    public function manageBrand()
    {
        $this->Brands = Brand::orderBy('id', 'DESC')->get(); // all for geting all data ascending order and get use kore customize kore nite pati select or array use kore
        return view('admin.brand.manage', ['brands' => $this->Brands]);
    }

    public function editBrand($id)
    {
        $this->Brand = Brand::find($id); // all for geting all data ascending order and get use kore customize kore nite pati select or array use kore
        return view('admin.brand.edit', ['brand' => $this->Brand]);
    }

    public function updateBrand(Request $request, $id)
    {
        Brand::updateBrand($request, $id);
        return redirect('/manage-brand')->with('message', 'Brand Update Successfully');
    }

    public function deleteBrand($id)
    {
        Brand::deleteBrand($id);
        return redirect('/manage-brand')->with('message', 'Brand Delete Successfully');
    }
}
