<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mascota;

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

  public function nuevo()
      {
          $mascota = new Mascota;
          return view('admin.mascotas.nuevo', compact('mascota'));
      }


  public function crear(Request $request)
    {
      $this->validate(
        $request,
          [
            'nombre' => 'required',
            'tipo' => 'required',
            'edad' => 'required',
            'tamanio' => 'required',
            'sexo' => 'required',
            'zona' => 'required',
            'descripcion' => 'required|max:300'
          ]
      );
      $mascota = new Mascota;
      $mascota->fill($request->all());

      $usuario = Auth::user(); /*se la subo al usuario logueado*/
      $usuario->mascotas()->save($mascota);

/*      $foto = $request->file('foto');
      if($foto) {
        $nombre = $post->id . '.' . $foto->extension();
        $foto->storeAs('public/posts/fotos', $nombre);
        $post->foto = $nombre; //'/storage/...  ->   /storage/public/...'
        $post->save();
      }
*/
return redirect()->route('lista-mascotas');
}

public function editar(Mascota $mascota)
{
    return view('admin.mascotas.editar', compact('mascota'));
}

public function guardar(Mascota $mascota, Request $request)
{
    $this->validate(
        $request,
        [
          'nombre' => 'required',
          'tipo' => 'required',
          'edad' => 'required',
          'tamanio' => 'required',
          'sexo' => 'required',
          'zona' => 'required',
          'descripcion' => 'required|max:300'
        ]
    );

    $mascota->fill($request->all());

    $mascota->save();

    return redirect()->route('lista-mascotas');
}

public function eliminar(Mascota $mascota)
{
    $mascota->delete();
    return redirect()->route('lista-mascotas');
}

}
