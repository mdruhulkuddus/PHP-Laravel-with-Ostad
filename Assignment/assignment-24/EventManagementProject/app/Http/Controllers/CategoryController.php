<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function CategoryPage()
    {
        return view('pages.dashboard.category-page');
    }

    function CategoryList(Request $request)
    {
        return Category::all();
    }

    function CategoryCreate(Request $request)
    {
        return Category::create([
            'name' => $request->input('name'),
        ]);
    }

    function CategoryDelete(Request $request)
    {
        $category_id = $request->input('id');
        return Category::where('id', $category_id)->delete();
    }

    function UpdateCategory(Request $request)
    {
        $category_id = $request->input('id');
        return Category::where('id', $category_id)->update([
            'name' => $request->input('name'),
        ]);
    }
}
