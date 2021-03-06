<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Category;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        // $showpages = $request->input('showpages');
        // dd($request);
        $posts = Post::orderBy('id', 'desc')->paginate(10);
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('posts.create', compact('categories'));
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
            'title'=> 'required|max:190',
            'body'=> 'required',
            'category_id'=>'required|integer',
            'slug' =>'required|alpha_dash|min:5|max:190|unique:posts,slug'
        ));
        $post = new Post;
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->category_id = $request->category_id;
        $post->body = $request->body;
        

            $post->save();
            Session::flash('success', 'Blog Post has been saved successfully!');
            return redirect()->route('posts.show', $post->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $post = Post::find($id);

        return view('posts.shows', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        return view('posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            $post = Post::find($id);
            if ($request->input('slug')==$post->slug) {
                $this->validate($request, array(
                'title'=> 'required|max:190',
                'body'=> 'required'));
       
            } else {
                $this->validate($request, array(
                'title'=> 'required|max:190',
                'slug'=> 'required|alpha_dash|min:5|max:190|unique:posts,slug',
                'body'=> 'required'
                 ));
                }
            
          
            $post =Post::find($id);
            $post->title = $request->input('title');
            $post->slug = $request->input('slug');
            $post->category_id = $request->input('category_id');
            $post->body = $request->input('body');
            $post->save();
            Session::flash('success', 'Blog Post has been updated!');
            return redirect()->route('posts.show', $post->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        Session::flash('success', 'Blog Post has been deleted!');
        return redirect()->route('posts.index');

    }
}
