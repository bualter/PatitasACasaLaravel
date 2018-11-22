@extends('layouts.app')

@section('content')
  <section class="mascotas-todas">

        <div class="col-md-12">
          <div class="titulo-mascotas">
            <h2> Mascotas en adopción </h2>
          </div>
        </div>

        <div class="lista-mascotas">

          @foreach($mascotas as $mascota)

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
              <!--  Contacto: {$mascota->duenio->name}}-->

                <a href="mailto:{{$mascota->duenio->email}}?Subject=Contacto%20Patitas" target="_top">   <button class="dropbtn3"> ¡Adoptar!   </button> </a>

              </div>
              <!--<li><a href="/mascota/{{$mascota->id}}">ver mascota</a></li>-->
            </div>
            <br>
          @endforeach

        </div>
      </section>

@endsection
