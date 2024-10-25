<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use App\Models\Track;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('app.categories.index', ['categories' => Category::all()]);
    }


    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        $tracks = $category->tracks;
        return view('app.categories.show', ["category" => $category, 'tracks' => $tracks]);
    }
}
