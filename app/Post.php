<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['user_id','title','content'];

    public function getAllPosts(){
        return $this::all();
    }

    
    public function introducePost()
    {
        $request = request(); 
        Post::create([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'content' => $request->content,
        ]);
    }
}
