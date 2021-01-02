<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category as Category;

class CategoriesController extends Controller
{
    public function getAll()
    {
        $this->category = new Category;
        return view('categories', ['categories' => $this->category->getAllCategories()]);
    }
    public function getShow($categoryId)
    {   
        #$user = App\User::find(1); 
        $category = Category::find($categoryId);
        $products = Category::find($categoryId)->products;
        return view('categoryProducts', ['products' =>  $products, 'category' => $category]);  
    }

    public function newCategoryForm()
    {
        $this->category = new Category;
        return view('newCategoryForm');
    }
    public function introduceCategory()
    {
        $this->category = new Category;
        $this->category->introduceCategory();
        return redirect('/categories');
    }
}
