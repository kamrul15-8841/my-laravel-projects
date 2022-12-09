<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public $categories, $category;
    public function addCategory()
    {
        return view('admin.category.add-category');
    }
    public function newCategory(Request $request)
    {
        Category::createCategory($request);
        return redirect()->back()->with('message', 'Category Created Successfully');
//        return $request->all();
//        return view('admin.category.new-category');
    }

    public function manageCategory()
    {
        $this->categories = Category::orderBy('id', 'DESC')->get(); // all for geting all data ascending order and get use kore customize kore nite pati select or array use kore
        return view('admin.category.manage', ['categories' => $this->categories]);
    }

    public function editCategory($id)
    {
        $this->category = Category::find($id); // all for geting all data ascending order and get use kore customize kore nite pati select or array use kore
        return view('admin.category.edit', ['category' => $this->category]);
    }

    public function updateCategory(Request $request, $id)
    {
        Category::updateCategory($request, $id);
        return redirect('/manage-category')->with('message', 'Category Update Successfully');
    }

    public function deleteCategory($id)
    {
        Category::deleteCategory($id);
        return redirect('/manage-category')->with('message', 'Category Delete Successfully');
    }

}
