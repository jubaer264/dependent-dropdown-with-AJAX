<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
class DropdownController extends Controller
{
    


    //dropdown page view

    public function dropdown_page()
    {
        $categories = Category::all();

        return view('dropdown-page',compact('categories'));
    }

      //get subcategory
    public function get_subcategory(Request $request)
    {
        $subcategories = Subcategory::where('category_id', $request->category)->get();
        return response()->json([
            'status' => 'success',
            'subcategories' => $subcategories,
        ]);
    }
}
