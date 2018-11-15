@extends('layouts.app')

@section('footerPatitas')

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

@endsection
