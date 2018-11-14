<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Patitas a Casa</title>
    <link rel="icon" type="image/svg" href="images/fork.svg" />
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
  <div class="contenedor-general">
    <div class ="mi-header">
    <div class="container-fluid">
      <header class="main-header">
        <div class="header-top">
            <img src="img/logo.png" alt="logotipo" class="logo" width="200px" class="img-responsive">
        </div>
        <nav class="main-nav">
          <ul id="header-ul">
            <li><a href="/">INICIO</ion-icon></a></li> <!--Cambiar a index.php-->
            <li><a href="/perros">ADOPTAR UN PERRO</a></li>
            <li><a href="/gatos">ADOPTAR UN GATO</a></li>
            <li><a href="/otros">ADOPTAR OTRO ANIMAL</a></li>
            <li><a href="/mascotas-todas">VER TODOS</a></li>
            <li><a href="/preguntas">PREGUNTAS FRECUENTES</a></li>

            @guest
            <li><a href="/register">REGISTRARME</a></li>
            <li><a href="/login">LOG IN</a></li>
            @else
              <li><a href="/perfil"> {{Auth::user()->name}}</a></li>
            @endguest
          </ul>
        </nav>
      </header>
    </div>
  </div>

<div class="carrusel">
CARRUSEL
</div>

<div class="carrusel">
FORMULARIO BUSQUEDA
</div>

  @yield('mascotasSubidas')

  <div clas="mi-footer" id="mi-footer">
    <div class ="container-fluid">
      <footer class="main-footer" >
        <div class="container">
          <div class= "footer1">
            <form action= "script.php" method="post">
            <div class="row">
              <div class= "col-12 col-s-12 col-md-12 col-lg-5">
                <label id="label-footer" for="email-input"> ¡NO TE PIERDAS NUESTRAS NOTICIAS! </label>
              </div>

              <div class= "col-12 col-s-12 col-md-12 col-lg-4">
                <input type="email" placeholder="E-mail" name="correo">
              </div>
                <div class= "col-12 col-s-12 col-md-12 col-lg-3">
                  <button type="button" class="btn btn-warning" class="suscribe-btn">
                    <a href="mailto:jose_herrera97@icloud.com"> SUSCRIBIRME </a>
                  </button>
                </div>
              </div>
            </form>
          </div>

          <div class="container" id="footer-icons">
            <a href= "https://www.facebook.com/" target="_blank"><ion-icon name="logo-facebook" class="fb-icon"></ion-icon></a> fb
            <a href= "https://www.instagram.com/" target="_blank"><ion-icon name="logo-instagram" class="insta-icon"></ion-icon></a> insta
            <a href= "https://www.twitter.com/" target="_blank"><ion-icon name="logo-twitter" class="twitter-icon"></ion-icon></a> twitter
          </div>

          <div class="footer-last">
            <img src="img/logo.png" alt="logotipo" class="logo" class="img-responsive">
          </div>
        </div>
      </div>
    </footer>
  </div>
  </div>
  </body>
</html>

<!--HEADER

CARRUSEL

FORMULARIO DE BUSQUEDA/EXPLICACION CORTA

MASCOTAS RANDOM

FOOTER-->
