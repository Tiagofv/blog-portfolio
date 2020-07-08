<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::with('author')
            ->when(auth()->user() === null, function ($query){
                return $query->where('published', true);
            })
            ->orderBy('created_at', 'desc')
            ->paginate(5);
        if(auth()->user()){
            return view('post.index', ['posts' => $posts]);
        }
        return view('blog.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
           'title' => 'required|max:255',
           'description' => 'required|max:255',
           'content' => 'required',
           'categories' => 'required',
        ]);

        $request->merge(['author' => auth()->user()->id, 'slug' => Str::slug($request->title), 'published' => $request->has('published') ? $request->published : false]);
        Post::create($request->all());

        return redirect('home')->withSuccess('Post criado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post, $id)
    {
        //
        return view('post.create', ['post' => Post::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        return view('post.create', ['post' => Post::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $postId)
    {
        //
        $request->validate([
            'title' => 'max:255|nullable',
            'description' => 'max:255|nullable',
            'content' => 'nullable',
            'published' => 'boolean|nullable',
            'categories' => 'string|max:255',
        ]);
        $post = Post::find($postId);
        $request->merge([
            'published' => $request->has('published') ? $request->published : false
        ]);
        $post->update($request->all());
        return  redirect('home')->withSuccess('Artigo editado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
