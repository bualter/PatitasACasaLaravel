<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Patitas a Casa</title>
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
  <div class="contenedor-general">


    <section class ="mi-header">
      <div class="container-fluid">
        <header class="main-header">
          <div class="header-top">
            <img src="storage/front/logo.png" alt="Logotipo" class="logo" width="250px" class="img-responsive">
          </div>
          <nav class="main-nav">
            <ul id="header-ul">
              <li><a href="/">INICIO</ion-icon></a></li> <!--Cambiar a index.php-->
              <li><a href="/perros">ADOPTAR UN PERRO</a></li>
              <li><a href="/gatos">ADOPTAR UN GATO</a></li>
              <li><a href="/otros">ADOPTAR OTRO ANIMAL</a></li>
              <li><a href="/preguntas">PREGUNTAS FRECUENTES</a></li>

              @guest

                <li><a href="/login">   <button class="loginbtn"> INICIAR SESION </button></a></li>
                <li><a href="/register"><button class="registerbtn">REGISTRARME</button></a></li>
              @else



                <li>
                  <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn">
                      {{ Auth::user()->name}} &nbsp
                      <ion-icon name="paw"> </ion-icon>
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

<div id="break">
    <div class="slideshow-container">

    <div class="mySlides fade">
      <img src="/storage/front/foto1.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="/storage/front/foto10.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="/storage/front/foto12.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="/storage/front/foto4.jpg" style="width:100%">
    </div>



    </div>


    <div style="text-align:center" style="margin-top: 0">
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
    </div>

    <div class="break2">
      <div class="raza">
        <div class="fraseRaza">
        NO COMPRES DE RAZA, ¡ADOPTA UNO SIN CASA! <br> ♥
       </div>
      </div>
    </div>
      </div>

<!--     <div id="break">
        <div class="break1">
          <img src="/storage/front/foto4.jpg" >
        </div>
       <div class="break1">
          <img src="/storage/front/foto1.jpg" >
        </div>
        <div class="break1">
          <img src="/storage/front/foto5.png" >
        </div>
        <div class="break2">
          <div class="raza">
            <div class="fraseRaza">
            NO COMPRES DE RAZA, ¡ADOPTA UNO SIN CASA! <br> ♥
           </div>
          </div>
        </div>
    </div> -->

  @yield('mascotasSubidas')

  <div clas="mi-footer" id="mi-footer">
    <div class ="container-fluid">
      <footer class="main-footer" >
        <div class="container">

          <div class= "footer1">
          <div class="patitasFrase">
            ♥ Hacé de la adopción tu única opción ♥
          </div>


  <!--        <div class="container" id="footer-icons">
            <a href= "https://www.facebook.com/" target="_blank"><ion-icon name="logo-facebook" class="fb-icon"></ion-icon></a> fb
            <a href= "https://www.instagram.com/" target="_blank"><ion-icon name="logo-instagram" class="insta-icon"></ion-icon></a> insta
            <a href= "https://www.twitter.com/" target="_blank"><ion-icon name="logo-twitter" class="twitter-icon"></ion-icon></a> twitter
          </div>-->

          <div class="footer-last">
            <img src="storage/front/logo.png" alt="Logotipo" class="logo" width="250px" class="img-responsive">
          </div>
        </div>
      </div>
    </footer>
  </div>
  </div>

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


<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2300); // Change image every 2 seconds
}
</script>

<script src="https://unpkg.com/ionicons@4.1.2/dist/ionicons.js"></script>

  </body>
</html>

<!--HEADER

CARRUSEL

FORMULARIO DE BUSQUEDA/EXPLICACION CORTA

MASCOTAS RANDOM

FOOTER-->
