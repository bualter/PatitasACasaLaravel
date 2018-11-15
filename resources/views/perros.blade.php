


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
  </head>
  <body>
    <section class ="mi-header">
      <div class="container-fluid">
        <header class="main-header">
          <div class="header-top">
            <img src="storage/front/logo.png" alt="Logotipo" class="logo" width="250px" class="img-responsive">
          </div>
          <nav class="main-nav">
            <ul id="header-ul">
              <li><a href="/">INICIO</a></li> <!--Cambiar a index.php-->
              <li><a href="/perros">ADOPTAR UN PERRO</a></li>
              <li><a href="/gatos">ADOPTAR UN GATO</a></li>
              <li><a href="/otros">ADOPTAR OTRO ANIMAL</a></li>
              <li><a href="/preguntas">PREGUNTAS FRECUENTES</a></li>

              @guest
                <li><a href="/register">REGISTRARME</a></li>
                <li><a href="/login">LOG IN</a></li>
              @else



                <li>
                  <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn">
                        {{ Auth::user()->name }}
                    </button>
                    <div id="myDropdown" class="dropdown-content">

                      <a href="/perfil" class="w3-bar-item w3-button" id="w3button">
                        Mi Perfil
                      </a>
                      <a
                      @auth
                       href="{{ route('lista-mascotas') }}"> Mis mascotas
                      @endauth
                      </a>
                      <a  href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Cerrar sesión') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                  </div>
                </li>
              @endguest
            </ul>


                          </div>
                        </div>
                      </div>





          </nav>

        </header>
      </div>
    </section>







<!-- yield header-->

<section class="mascotas">


  <div>
    <div id="mascotastitleDiv">
    <div class="titulo-mascotas">
      <h2> Perros en adopción </h2>
    </div>
  </div>
  </div>

      <div class="lista-mascotas">

        @foreach($perros as $mascota)

          <div class="mascota">

            <div id="imagenMascota">
              @if($mascota->foto)
            <img src="/storage/mascotas/fotos/{{ $mascota->foto }}" >
              @endif
            </div>
            <div class="nombreMascota">{{$mascota->nombre}}
            @if($mascota->sexo=="M")
              ♂
            @else
              ♀
            @endif
          </div>
          <div class="datosMascota">
            <div class="edadMascota"> Edad: {{$mascota->edad}} </div>
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

          </div>
        @endforeach

      </div>

</section>


<!-- yield footer-->


<!--USUARIO BOTON-->
<script>

function myFunction() {
   document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(event) {
 if (!event.target.matches('.dropbtn')) {

   var dropdowns = document.getElementsByClassName("dropdown-content");
   var i;
   for (i = 0; i < dropdowns.length; i++) {
     var openDropdown = dropdowns[i];
     if (openDropdown.classList.contains('show')) {
       openDropdown.classList.remove('show');
     }
   }
 }
}
</script>


</body>
</html>
