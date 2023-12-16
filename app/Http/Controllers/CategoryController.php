<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function showCategories()
    {
        $categories = Category::with('children')->whereNull('parent_id')->get();

        return view('categories.index2', compact('categories'));
    }
}
