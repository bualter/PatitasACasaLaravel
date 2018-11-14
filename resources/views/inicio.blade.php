@extends('layouts.front')

@section('mascotasSubidas')

  <section class="mascotas">
    <h3> Algunas Mascotas</h3>
    <div class="lista-mascotas">
      @foreach ($mascotas as $mascota)
        <div class="mascota">
          <div class="imageMascota">
              @if($mascota->foto)
                 <img src="/storage/mascotas/fotos/{{ $mascota->foto }}" >
              @endif
          </div>
          <div class="nombreMascota">
            {{$mascota->nombre}}
          </div>
          <div class="tipoMascota">
            {{$mascota->tipo}}
          </div>
          <div class="datosMascota">
            <div class="edadMascota"> {{$mascota->edad}} </div>
            <div class="edadMascota"> {{$mascota->tamanio}} </div>
          </div>
          <div class="datosMascota">
            <div class="edadMascota"> {{$mascota->sexo}} </div>
            <div class="edadMascota"> {{$mascota->zona}} </div>
          </div>
          <div class="descripcionMascota">
              {{$mascota->descripcion}}
          </div>
          <div class="contactoMascota">
            Contacto: {{$mascota->duenio->email}}
          </div>
          <a href="{{ route('ver-mascota', compact('mascota')) }}" class="btn btn-primary">Ver mascota</a>
        </div>
        <br>

      @endforeach

    </div>
    {{$mascotas->links()}}
  </section>

@endsection


<!--HEADER

CARRUSEL

FORMULARIO DE BUSQUEDA/EXPLICACION CORTA

MASCOTAS RANDOM

FOOTER-->
