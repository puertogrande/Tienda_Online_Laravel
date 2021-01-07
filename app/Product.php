<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;

class Product extends Model
{
    protected $fillable = ['category_id','chart_id','name','price','image'];
    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
    public function getAllProducts(){
        return $this::orderBy('category_id')->get();
    }
    public function introduceProduct()
    {
        request()->validate([
            'image' => 'required|mimes:jpeg,jpg,png',
        ]);
       
       $imageName = time().'.'.request()->image->getClientOriginalExtension();
       request()->image->move(public_path('images'),$imageName);

        $request = request(); 
        Product::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'image'=> $imageName,
            'price' => $request->price,
        ]);
    }
}
