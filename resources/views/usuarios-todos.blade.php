@extends('layouts.app')

@section('content')
  <section class="usuarios-todas">

        <div class="col-md-12">
          <div class="titulo-usuario">
            <h2> Usuarios </h2>
          </div>
        </div>

        <div class="lista-usuarios">

 
                  <hr>

                  <div class="table-responsive">
                    <table class="table table-striped table-hover">
                      <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Email</th>
                        <th>Zona</th>
                        <th></th>
                        </tr>
                        @foreach($usuarios as $usuario)
                          <tr>

                            <td>{{ $usuario->id }}</td>
                            <td>{{ $usuario->name }}</td>
                            <td>{{ $usuario->lastname }}</td>
                            <td>{{ $usuario->email }}</td>
                            <td>{{ $usuario->zonaPertenencia }}</td>
                            <td class="text-right">
                              <form method="post" action="{{ route('eliminar-usuario', compact('usuario')) }}">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                              </form>
                            <td>


                          </tr>
                        @endforeach

                    </table>










                 </div>
      </section>

@endsection
