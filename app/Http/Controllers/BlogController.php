<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except'=>['userBlog']]);
    }

	public function getIndex(){
		$posts=Post::orderBy('id', 'desc')->paginate(3);
	     return view('blog.index')->withPosts($posts);
	}

    public  function getSingle($slug){
 	 // fetch from the DB 
     // passed post object 
    $post=Post::where('slug', '=', $slug)->first();
    return view('blog.single')->withPost($post);
    }

    public function userBlog(){
        $posts=Post::orderBy('id', 'desc')->paginate(4);
        return view('blog.userBlog')->withPosts($posts);
    }
}
