<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class PostController extends Controller
{

    public function  index() {
        $title ='';
        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if(request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' By ' . $author->name;
        }

        return view('posts', [
            "title" => "All Posts" . $title,
            "active" => "posts",
            // "posts" => Post::all(),
            "posts" => Post::latest()->filter(request(['search','category','author']))->paginate(7)->withQueryString(),
        ]);
    }

    public function show(Post $post){
        $post->increment("views");
        $post->author()->increment("writer_post_views");
        $post->save();
        return view('post', [
            "title" => "Post details",
            "active" => "posts",
            "post" => $post,
        ]);
    }
}
