<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mascota;

class Front extends Controller
{

	public function home()
	{
		$mascotas = Mascota::with('duenio')->paginate(6);
		return view('inicio', compact('mascotas'));
	}


}
