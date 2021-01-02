<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['category_id','chart_id','name','price'];
    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
    public function getAllProducts(){
        return $this::orderBy('category_id')->get();
    }
    public function introduceProduct()
    {
        echo "se ha llamado a nuevo producto";
        $request = request(); 
        Product::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'price' => $request->price,
        ]);
    }
}
