@extends('layouts.app')

@section('content')
  <div class="container">

        <div class="col-md-12">
          <div class="titulo-mascotas">
            <h2> Perritos </h2>
          </div>
        </div>

        <div class="lista-mascotas">

          @foreach($gatos as $mascota)

            <div class="mascota">

              <div class="imageMascota">
                @if($mascota->foto)
              <img src="/storage/mascotas/fotos/{{ $mascota->foto }}" >
                @endif
              </div>
              <div class="nombreMascota">{{ $mascota->nombre }}</div>
              <div class="tipoMascota">{{ $mascota->tipo }}</div>
              <div class="datosMascota">
                <div class="edadMascota">{{ $mascota->edad }}</div>
                <div lass="edadMascota">{{ $mascota->tamanio }}</div>
              </div>
              <div class="datosMascota">
                <div class="edadMascota">{{ $mascota->sexo }}</div>
                <div class="edadMascota">{{ $mascota->zona }}</div>
              </div>
              <div class="descripcionMascota">{{ $mascota->descripcion }}</div>
              <div class="contactoMascota">
                Contacto: {{$mascota->duenio->email}}
              </div>

            </div>
          @endforeach

        </div>
      </div>
@endsection
