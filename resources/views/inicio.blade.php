@extends('layouts.front')

@section('mascotasSubidas')

  <section class="mascotas">

    <div>
      <div id="mascotastitleDiv">
      <div class="titulo-mascotas">
        <h2> Mascotas en adopción </h2>
      </div>
    </div>
    </div>

    <div class="lista-mascotas">
      @foreach ($mascotas as $mascota)
        <div class="mascota">
          <div id="imagenMascota">
              @if($mascota->foto)
                 <img src="/storage/mascotas/fotos/{{ $mascota->foto }}" >
              @endif
          </div>
            <div class="nombreMascota">{{$mascota->nombre}}

          </div>
          <div class="datosMascota">
            <div class="edadMascota"> Sexo:
              @if($mascota->sexo=="M")
                Macho
              @else
                Hembra
              @endif
            </div>
            <div class="edadMascota"> Edad: {{$mascota->edad}} años </div>
          </div>
          <div class="datosMascota2">
            <div class="edadMascota"> Tamaño: {{$mascota->tamanio}} </div>
          </div>
          <div class="descripcionMascota">
              {{$mascota->descripcion}}
          </div>
          <div class="datosMascota2">
            <div class="edadMascota"> Zona {{$mascota->zona}}  </div>
          </div>
          <div class="contactoMascota">

          <a href="{{route('ver-mascota', compact('mascota'))}}" class="btnVer">Ver mas</> </a>




          </div>

        </div>
        <br>

      @endforeach

    </div>
    <div class="paginador">
      {{$mascotas->links()}}
    </div>
  </section>

@endsection


<!--HEADER

CARRUSEL

FORMULARIO DE BUSQUEDA/EXPLICACION CORTA

MASCOTAS RANDOM

FOOTER-->
