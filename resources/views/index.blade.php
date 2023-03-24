@extends('layouts.app')

@section('content')
    <h1>Lista de usuarios</h1>
    <a href="{{ route('usuarios.create') }}">Crear usuario</a>
    <ul>
        @foreach ($usuarios as $usuario)
            <li>
                {{ $usuario->nombre }}
                <a href="{{ route('usuarios.edit', ['id' => $usuario->id]) }}">Editar</a>
                <form action="{{ route('usuarios.destroy', ['id' => $usuario->id]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection