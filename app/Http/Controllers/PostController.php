<?php

namespace App\Http\Controllers;
use App\Post;
use Session;
use Illuminate\Http\Request;
use Purifier;
use Storage;
use Intervention\Image\Facades\Image;
class PostController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::orderBy('id', 'desc')->paginate(5);
        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, array(
        'title'=> 'required|max:100',
        'slug'=>'required|alpha_dash|min:5|max:100|unique:posts,slug',
        'body'=>'required',
        'featured_image'=>'required|mimes:jpg,jpeg,png,svg|max:8192'
        ));

       $post = new Post;
       $post->title=$request->title;    
       $post->slug=$request->slug;
       $post->body=$request->body;

        // image upload to website 

       if($request->hasFile('featured_image')){
        $image=$request->file('featured_image');
        $filename=time().'.'.$image->getClientOriginalExtension();
        $location=public_path('images/img/blog/'. $filename);
        Image::make($image)->resize(800,400)->save($location);
        $post->image=$filename;
       }

       $post->save();

       Session::flash('success', 'The post was successfully saved');
       return redirect()->route('posts.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $post=Post::find($id);
         return view('posts.edit')->withPost($post);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

         $this->validate($request, array(
            'title'=>'required|max:160', 
            'slug'=>'required|alpha_dash|min:5|max:100|unique:posts,slug,'.$id, 
            'body'=>'required',
            'featured_image'=> 'required|mimes:jpeg,png,jpg,gif,svg'
            ));
          // Save the data to the database 
        $post=Post::find($id);
        $post->title=$request->input('title');
        $post->slug=$request->input('slug');
        $post->body=$request->body;

       if($request->hasFile('featured_image')){
            // add the new photos
        $image=$request->file('featured_image');
        $filename=time().'.'.$image->getClientOriginalExtension();
        $location=public_path('images/img/blog/'. $filename);
        Image::make($image)->resize(800,400)->save($location);
        $oldFileName=$post->image;
          // update the database   
        $post->image=$filename;  

        Storage::delete($oldFileName);        

       }

        $post->save();

        Session::flash('success', 'The post was successfully updated');
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $post=Post::find($id);
       Storage::delete($post->image);
       $post->delete();
       Session::flash('success', "The post was successfully deleted");
       return redirect()->route('posts.index');
    }
}



