<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post as Post;

class PostsController extends Controller
{
    public function getAllPosts()
    {
        $this->post = new Post;
        //introducir el auth
        return view('blog', ['posts' => $this->post->getAllPosts()]);
    }

    public function newPostForm()
    {
        $this->post = new Post;
        return view('newBlogForm');
    }

    public function introducePost()
    {
        $this->post = new Post;
        $this->post->introducePost();
        return redirect('/blog');
    }
}
