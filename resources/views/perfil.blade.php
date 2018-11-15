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
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/perfil"> Mi perfil </a>
                  <a
                  @auth
                   href="{{ route('lista-mascotas') }}"> Mis mascotas
                  @endauth
                  </a>
                  <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Cerrar sesión') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
          @endguest
        </ul>
      </nav>
    </header>
  </div>
</section>

<div class="containerPerfil">
 <h2>¡BIENVENIDO A TU PERFIL!</h2>

 <div class="perfilUsuario">

   <div class="imgUser">
       <img src="/storage/users/fotos/darth.png"> <!--FALTA IMG DE USUARIO EN DB-->
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
     {{Auth::user()->zonaPertenencia}}
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
