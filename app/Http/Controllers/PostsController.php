<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePost;
use App\Models\BlogPost;
use Illuminate\Http\Request;

class PostsController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = BlogPost::orderBy("created_at", "desc")->get();
        $posts = BlogPost::all();

        return view("posts.index", compact("posts"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("posts.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // The Request inside of store() replaced to StorePost for class validation
    // and make sure if you do this, the StorePost already created from
    // terminal and imported at the top of the controller file. We use this
    // kind of concept to replace the specific validation to another file
    public function store(StorePost $request, BlogPost $post)
    { 

        // $request->validate([
            
        //     // These fields came from the input of the user or
        //     // name attribute from the form
        //     "title" => "bail|required|min:5|max:100",
        //     "content" => "required|min:10",
        
        // ]);

        // Make sure that the authorize method inside of StorePost.php
        // is returning true so that it allows the user to send a form
        $validated = $request->validated();
        
        // If we dont have a validation
        // $post->title = $request->title;
        // $post->content = $request->content;

        // If we have a validation
        // $post->title = $validated["title"];
        // $post->content = $validated["content"];
        // $post->save();

        // before we can use the create() make sure that the mass assignment
        // inside of BlogPost Model already made
        $newPost = BlogPost::create($validated);


        $request->session()->flash("status", "The blog post was created");

        return redirect()->route("posts.show", ["post" => $newPost->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(BlogPost $post)
    {
        // $post = BlogPost::findOrFail($id);


        // abort_if(!isset($post), 404);
        

        return view("posts.show", compact("post"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogPost $post)
    {
        // $post = BlogPost::findOrFail($id);

        return view("posts.edit", compact("post"));
    } 

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePost $request, BlogPost $post)
    { 

        $validated = $request->validated();
        $post->fill($validated);
        $post->save();

        $request->session()->flash("status", "The blog post was updated");

        return redirect()->route("posts.show", ["post" => $post->id]);
    } 

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, BlogPost $post)
    {
        $post->delete();

        $request->session()->flash("status", "The blog post was deleted");

        // We can use this kind of syntax for flash message even though 
        // even thoough we dont have a Request $request
        
        // session()->flash("status", "The blog post was delete");

        return redirect()->route("posts.index"); 
    } 
}
