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

	public function logout () {
	    //logout user
	    auth()->logout();
	    // redirect to homepage
	    return redirect('/');
	}

	public function verMascota($id)
	{
		$mascota = Mascota::where('id',$id)->first();
		return view('mascota', compact('mascota'));
	}

}
