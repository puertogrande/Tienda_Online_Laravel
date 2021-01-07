<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{   
    protected $fillable = ['name','image','description'];

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
        request()->validate([
            'image'=>'required|image',
        ]);
       $imageName = time().'.'.request()->image->getClientOriginalExtension();
        echo $imageName;
        request()->image->move(public_path('images'),$imageName);
        $request = request(); 
        Category::create([
            'name' => $request->name,
            'image' => $imageName,
        ]);
    }

}
