<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMascotas extends Controller
{
  function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
		$usuario = Auth::user();
		$mascotas = $usuario->mascotas()->with('duenio')->paginate(6);

    return view('admin.mascotas.index', compact('mascotas'));
  }
}
