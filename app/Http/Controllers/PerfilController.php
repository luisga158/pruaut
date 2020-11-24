<?php

namespace App\Http\Controllers;

use App\Models\Perfil;
use App\Models\User;
use App\Models\Roll;
use Illuminate\Http\Request;
use App\Http\Requests\PerfilFormRequest;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $perfil = $this->getrolluseractive($request);
        if ($perfil->roll >= 3){
            $perfils = Perfil::all();
            return view('perfil/index', compact('perfils'));
        } else {
            return redirect()
                ->route('perfils.my')
                ->with('message', 'lblonlymyperfil');
        }
    }
    public function getrolluseractive(Request $request){
        $idlcluser = $request->user()->id;
        $allperfils = Perfil::all();
        $perfils = $allperfils->where('id', $idlcluser);
        $perfil = $perfils->get($idlcluser-1);
        return $perfil;
    }
        
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function show(Perfil $perfil)
    {
        return view('perfil/show', compact('perfil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Perfil $perfil)
    {
        $perfilact = $this->getrolluseractive($request);
        if ($perfilact->roll >= 3){
            $rolls = Roll::all();
            return view('perfil\editroll', compact("perfil"), compact("rolls"));
        } else {
            return view('perfil\edit', compact("perfil"));
        }        
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function update(PerfilFormRequest $request, Perfil $perfil)
    {
        $perfilact = $this->getrolluseractive($request);
        if ($perfilact->roll >= 3){
            $perfil->nombres = $request->input('nombres');
            $perfil->apellidos = $request->input('apellidos');
            $perfil->conocimientos = $request->input('conocimientos');
            $perfil->roll_name = $request->input('roll_name');
            $perfil->roll = $this->getidroll($perfil->roll_name);
            if ($perfil->roll == 0){
                $rolls = Roll::all();
                return view('perfil\editroll', compact("perfil"), compact("rolls"));
            }
        } else {
            $perfil->nombres = $request->input('nombres');
            $perfil->apellidos = $request->input('apellidos');
            $perfil->conocimientos = $request->input('conocimientos');
        }
        $perfil->save();
        return redirect()
            ->route('home')
            ->with('message', 'lblactualizado');
    }
    public function getidroll(String $nameroll){
        if ($nameroll == 'Superusuario'){
            return 5;
        } elseif ($nameroll == 'Administrador de proyectos'){
            return 4;
        } elseif ($nameroll == 'Administrador de Roles'){
            return 3;
        } elseif ($nameroll == 'Editor'){
            return 2;
        } elseif ($nameroll == 'Estudiante'){
            return 1;
        } else { return 0;}
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perfil $perfil)
    {
        //
    }
    public function my(Request $request)
    {
        $idlcluser = $request->user()->id;
        $allperfils = Perfil::all();
        $perfils = $allperfils->where('id', $idlcluser);
        $perfil = $perfils->get($idlcluser-1);
        return view('perfil/show', ['perfil' => $perfil]);
    }
}
