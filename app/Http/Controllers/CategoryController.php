<?php

namespace App\Http\Controllers;

use App\Category;

class categorycontroller extends Controller
{
    public function index(Category $category)
    {
        return view('categories.index')->with(['posts' => $category->getByCategory()]);
    }
}
