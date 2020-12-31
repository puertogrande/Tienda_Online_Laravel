<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{
    public function getAll()
    {
        $this->category = new Category;
        return view('categories', ['categories' => $this->category->getAllCategories()]);
    }
}
