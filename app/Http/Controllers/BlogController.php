<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mail\BlogCreated;

class blogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        
        //$blogs = auth()->user()->blogs;
        //$blogs = Blog::where('owner_id',auth()->id())->get();
        
        return view('blog.index',[
            'blogs' => auth()->user()->blogs
        ]);

    }

    /**
     * Show the form for creating a new resource.
     
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $attributes = $this->validateBlog();

        $attributes['owner_id'] = auth()->id();

        $blog = Blog::create($attributes);

        //event(new BlogCreated($blog));

        \Mail::to($blog->owner->email)->send(
            new BlogCreated($blog)
        ); 

        return redirect('/blog');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {   //abort_unless
        //abort_if($blog->owner_id !== auth()->id(),403);

        $this->authorize('update',$blog);

        return view('blog.show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('blog.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Blog $blog)
    {   
        // $blog->update(request()->validate([
        //     'blog'=>'required',
        //     'description' => ['required','min:3']
        // ]));
        $blog->update($this->validateBlog()); 

        return redirect('/blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return back();
    }

    protected function validateBlog() {

        return request()->validate([
            'blog' => 'required',
            'description' => 'required | min:3'
        ]);

    }
}
