<?php

namespace App\Http\Controllers;

use App\Models\UserController;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $usuarios = User::all();
        return view('usuarios.index', ['usuarios' => $usuarios]);
    }
    
    public function create()
    {
        return view('usuarios.create');
    }
    
    public function store(Request $request)
    {
        $usuario = new User;
        $usuario->nombre = $request->nombre;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request->password);
        $usuario->save();
        return redirect()->route('usuarios.index');
    }
    
    public function edit($id)
    {
        $usuario = User::find($id);
        return view('usuarios.edit', ['usuario' => $usuario]);
    }
    
    public function update(Request $request, $id)
    {
        $usuario = User::find($id);
        $usuario->nombre = $request->nombre;
        $usuario->email = $request->email;
        if(!empty($request->password)) {
            $usuario->password = Hash::make($request->password);
        }
        $usuario->save();
        return redirect()->route('usuarios.index');
    }
    
    public function destroy($id)
    {
        $usuario = User::find($id);
        $usuario->delete();
        return redirect()->route('usuarios.index');
    }
    
}
