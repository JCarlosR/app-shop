<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
    	$products = $category->products()->paginate(10);
    	return view('categories.show')->with(compact('category', 'products'));
    }
}
