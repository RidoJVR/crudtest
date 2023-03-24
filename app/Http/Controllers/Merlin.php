<?php

namespace App\Http\Controllers;

use App\Models\Merlin;
use Illuminate\Http\Request;

class Merlin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('usuarios.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.create');
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
     * @param  \App\Models\Merlin  $merlin
     * @return \Illuminate\Http\Response
     */
    public function show(Merlin $merlin)
    {
        $usuario = User::find($id);
    return view('usuarios.show', ['usuario' => $usuario]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Merlin  $merlin
     * @return \Illuminate\Http\Response
     */
    public function edit(Merlin $merlin)
    {
        $usuario = User::find($id);
    return view('usuarios.edit', ['usuario' => $usuario]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Merlin  $merlin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Merlin $merlin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Merlin  $merlin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Merlin $merlin)
    {
        //
    }
}
