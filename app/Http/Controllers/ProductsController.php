<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category as Category;
use App\Product as Product;

class ProductsController extends Controller
{
    public function getAllProducts()
    {
        $this->product = new Product;
        return view('allProducts', ['products' => $this->product->getAllProducts()]);
    }

    public function newProductForm($categoryId)
    {   
        #$user = App\User::find(1); 
        $category = Category::find($categoryId);
        $products = Category::find($categoryId)->products;
        return view('newProductForm', ['category' => $category]);  
    }

    public function introduceProduct()
    {
        echo "se ha llamado al controlador";
        $this->product = new Product;
        $this->product->introduceProduct();
        return redirect('/allProducts');
    }
}
