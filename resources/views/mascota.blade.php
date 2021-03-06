@extends('layouts.app')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Nuestros Perros</title>
    <link rel="icon" type="image/svg" href="images/fork.svg" />
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:600" rel="stylesheet"> <!-- google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Gochi+Hand|Leckerli+One|Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Didact+Gothic|Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Asap:500i,600,600i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:200,300" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.1.2/dist/css/ionicons.min.css" rel="stylesheet"> <!-- ionicons-->
  </head>
  <body>


@section('content')
  <section class="mascotas-todas">


          <div class="titulo-mascota">
            <h2> {{$mascota->nombre}} </h2>
          </div>


        <div class="lista-mascotas">

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

                <a href="mailto:{{$mascota->duenio->email}}?Subject=Contacto%20Patitas" target="_top"> <button class="dropbtn3"> ¡Adoptar!   </button> </a>

              </div>
              <!--<li><a href="/mascota/{{$mascota->id}}">ver mascota</a></li>-->
            </div>
            <br>

        </div>
      </section>

@endsection


</body>
</html>
