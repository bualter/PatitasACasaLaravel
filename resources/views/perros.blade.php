@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  <h2> Perritos </h2>
                </div>

                <div class="card-body">



                  <div class="table-responsive">
                    <table class="table table-striped table-hover">
                      <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Tipo</th>
                        <th>Edad</th>
                        <th>Tamanio</th>
                        <th>Sexo</th>
                        <th>Zona</th>
                        <th>Descripcion</th>
                        <th></th>
                        </tr>
                        @foreach($perros as $mascota)
                          <tr>

                            <td>{{ $mascota->id }}</td>
                            <td>{{ $mascota->nombre }}</td>
                            <td>{{ $mascota->tipo }}</td>
                            <td>{{ $mascota->edad }}</td>
                            <td>{{ $mascota->tamanio }}</td>
                            <td>{{ $mascota->sexo }}</td>
                            <td>{{ $mascota->zona }}</td>
                            <td>{{ $mascota->descripcion }}</td>
                            <td class="text-right">
                              <form method="post" action="{{ route('eliminar-mascota', compact('mascota')) }}">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <a href="{{ route('editar-mascota', compact('mascota')) }}" class="btn btn-sm btn-warning">Editar</a>
                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                              </form>
                            <td>


                          </tr>
                        @endforeach

                    </table>
 
                  </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection