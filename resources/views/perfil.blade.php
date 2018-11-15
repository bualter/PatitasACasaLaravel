<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Mi perfil</title>
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
            <li><a href="/register">REGISTRARME</a></li>
            <li><a href="/login">LOG IN</a></li>
          @else
            <li>
              <button class="dropbtn2">
                  <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Cerrar sesión') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </button>
            </li>
          @endguest
        </ul>
      </nav>
    </header>
  </div>
</section>



<div class="containerPerfil">
 <h2 class="mascotasUsuario3">¡BIENVENIDO A TU PERFIL!</h2>

 <div class="perfilUsuario">

   <div class="imgUser">
       <img src="/storage/users/fotos/boba.jpg"> <!--FALTA IMG DE USUARIO EN DB-->
   </div>
<div class="userDB">
   <div class="nombreUsuario">
     <div class="userData"><h2>{{Auth::user()->name}}</h2></div>
     <div class="userData"><h2>{{Auth::user()->lastname}}</h2></div>
   </div>

   <div class="mailUsuario">
     {{Auth::user()->email}}
   </div>
   <div class="mailUsuario">
     Zona: {{Auth::user()->zonaPertenencia}}
   </div>
</div>

<!--<div class="userBtns01"> HACER EDITAR Y ELIMINAR USUARIO

         <div>
           <a href="/" class="actualizarUsuario"> Editar Mi Perfil <ion-icon name="create"></ion-icon> </a>
         </div>
         <div>
           <a href="/" class="eliminarUsuario"> Eliminar Mi Usuario <ion-icon name="trash"></ion-icon> </a>
         </div>
</div> -->


</div>
<div class="userBtnsDiv">
<div class="userBtns02">
<div>
 <a href="/admin/mascotas" class="mascotasUsuario2"> MIS MASCOTAS EN ADOPCION <ion-icon name="paw"></ion-icon></a>
</div>
<div>
<a href="/admin/mascotas/nuevo" class="mascotasUsuario"> SUBIR MASCOTAS <ion-icon name="add"></ion-icon> </a>
</div>
<!--<div>
 <a href="/" class="mascotasUsuario"> BUSCAR MASCOTAS <ion-icon name="search"></ion-icon> </a>
</div>-->
</div>
</div>
</div>

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

<!--        <div class= "footer1">
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
-->
<!--        <div class="container" id="footer-icons">
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
-->
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
</div>
</body>
</html>
