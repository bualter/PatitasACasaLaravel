@extends('layouts.front')

@section('patitasHeader')

  <section class ="mi-header">
    <div class="container-fluid">
      <header class="main-header">
        <div class="header-top">
          <img src="img/logo.png" alt="logotipo" class="logo" width="200px" class="img-responsive">
        </div>
        <nav class="main-nav">
          <ul id="header-ul">
            <li><a href="/">INICIO</ion-icon></a></li> <!--Cambiar a index.php-->
            <li><a href="/preguntas">PREGUNTAS FRECUENTES</a></li>
            <li><a href="/perros">ADOPTAR UN PERRO</a></li>
            <li><a href="/gatos">ADOPTAR UN GATO</a></li>
            <li><a href="/otros">ADOPTAR OTRO ANIMAL</a></li>

            @guest
              <li><a href="/register">REGISTRARME</a></li>
              <li><a href="/login">LOG IN</a></li>
            @else
              <li><a href="{{route('lista-mascotas')}}"> {{Auth::user()->name}} <!--{$user->name}}--></a></li>
            @endguest
          </ul>
        </nav>
      </header>
    </div>
  </section>

@endsection
