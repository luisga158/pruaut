<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests\PostFormRequest;
use App\Models\Tema;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $posts = Post::paginate(10);
        return view('post\index', compact('posts'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $temas = Tema::all();
        return view('post\create', compact("temas"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostFormRequest $request)
    {
        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->tema = $request->input('tema');
        $post->user_id = $request->user()->id;
        $post->autor = $request->user()->name;
        $post->save();
        return redirect()
            ->route('post/my', ['post' => $post])
            ->with('message', 'lblcreado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('post.show', compact("post"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $temas = Tema::all();
        return view('post\edit', compact("post"), compact("temas"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostFormRequest $request, Post $post)
    {
        if (Auth::user()->cant('update', $post)) {
            return redirect()
            ->route('post/my', ['post' => $post])
            ->with('message', 'lblnopermisos');
        }
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->tema = $request->input('tema');
        $post->save();
        return redirect()
            ->route('post/my', ['post' => $post])
            ->with('message', 'lblactualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if (Auth::user()->cant('delete', $post)) {
            return redirect()
            ->route('post/my', ['post' => $post])
            ->with('message', 'lblnopermisos.');
        }
        $post->delete();
        return redirect()
            ->route('post/my', ['post' => $post])
            ->with('message', 'lblborrado');
    }
    public function my(Request $request)
    {
        $idlcluser = $request->user()->id;
        $allposts = Post::all();
        $posts = $allposts->where('user_id', $idlcluser);
        return view('post/my', compact("posts"));
    }
}
