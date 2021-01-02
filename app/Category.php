<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{   
    protected $fillable = ['name'];

    public function getAllCategories(){
        return $this::all();
    }
    public function products()
    {
        //return $this->hasMany('App\Product');
        return $this->hasMany(Product::class);
    }

    public function introduceCategory()
    {
        $request = request(); 
        Category::create([
            'name' => $request->name,
        ]);
    }

}
