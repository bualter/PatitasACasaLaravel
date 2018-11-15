<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class adminUsuarios extends Controller
{

  public function listarTodos()
  {
    $usuarios = User::all();

    return view('usuarios-todos', compact('usuarios'));
  }


  public function eliminar(User $usuario)
  {
      $usuario->delete();
      return redirect()->route('lista-usuarios');
  }

}