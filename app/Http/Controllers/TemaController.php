<?php

namespace App\Http\Controllers;

use App\Models\Tema;
use Illuminate\Http\Request;
use App\Http\Requests\TemaFormRequest;
use App\Models\Post;

class TemaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $temas = Tema::all();
        return view('tema\index', compact('temas'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tema\create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TemaFormRequest $request)
    {
        $temas = Tema::all();
        $nametema = array();
        foreach ($temas as $valuear){
            array_push($nametema, $valuear->nombretema);
        }
        $tema = new Tema();
        $tema->nombretema = $request->input('nombretema');
        if (in_array($tema->nombretema, $nametema)) {
            return redirect()
            ->route('tema/create')
            ->with('message', 'lblyacreado');
        }
        $tema->save();
        return redirect()
            ->route('tema/index')
            ->with('message', 'lblcreado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tema  $tema
     * @return \Illuminate\Http\Response
     */
    public function show(Tema $tema)
    {
        $allposts = Post::all();
        $posts = $allposts->where('tema',$tema->nombretema);
        return view('tema\indextema', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tema  $tema
     * @return \Illuminate\Http\Response
     */
    public function edit(Tema $tema)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tema  $tema
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tema $tema)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tema  $tema
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tema $tema)
    {
        //
    }
}
