
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
    <title></title>
  </head>
  <body>

<!--Header-->
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
              <li><a href="/login">   <button class="dropbtn"> LOG IN </button></a></li>
              <li><a href="/register"><button class="dropbtn2">REGISTRARME</button></a></li>
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
        </nav>
      </header>
    </div>
  </section>

<!--Fin Header-->

<!--Preguntas frecuentes-->
  <div class="preguntas-frecuentes">
    <h2>PREGUNTAS FRECUENTES</h2>
  </div>
  <div class="preguntas-todo">
    <div class="preguntas-panel">
      <div class="panel1">
        <h4 class="panel-title">
          ¿Por qué adoptar en vez de comprar?</a>
        </h4>
        <div class="panel-body">
          <p>
            Adoptando estás salvando la vida de un animal rescatado.
            <br>
            Adoptar es un acto de amor y de responsabilidad, por eso es necesario estar completamente
            seguros de que estamos capacitados y listos para tener un animal que dependerá toda su vida  de nosotros.
            <br>
            Las ventajas de adoptar una mascota son muchas.
            <br>
            En primer lugar, esto le da la oportunidad de cambiar no solo una, sino la vida de dos animales, el que decides adoptar y el callejero que va a ocupar el puesto que deja el perro que tú te llevas.
            <br>
            Además, en contra de lo que se cree, las razas mestizas son mucho mejor que las razas puras, como en la naturaleza estas mezclas hacen que las nuevas generaciones vengan con más fortalezas y mejor adaptación a las enfermedades propias de los animales.
            <br>
            Todos estos animales suelen ser muy agradecidos y nobles por haber sido rescatados y reintegrados a una nueva familia, así que encontrarás un amigo fiel y muy cariñoso cada vez que entres por la puerta.
          </p>
        </div>
      </div>
      <div class="panel1">
        <h4 class="panel-title">
          ¿Como adoptar a través de Patitas a casa?</a>
        </h4>
        <div class="panel-body">
          <p>
            ¡Adoptar mediante Patitas a casa es muy fácil!
            <br>
            Solo debes usar el  buscador de nuestra página de inicio, y seleccionar las opciones que se adapten a lo que estás buscando.
            <br>
            Nosotros te presentaremos todos los animales que tenemos disponibles, dentro de tus requsiitos, y así podrás elegir el que prefieras.
            <br>
            Una vez que hayas elegido a tu compañero ideal, se le enviará una solicitud de adopción a sus "dueños" de tránsito, y de ser aceptado te pondremos en contacto ellos para coordinar su entrega.
            <br>
            ¡Y listo!
          </p>
        </div>
      </div>
    </div>

    <div class="preguntas-panel">
      <div class="panel1">
        <div class="panel-title">
          <h3> PARA TENER EN CUENTA ANTES DE ADOPTAR UN ANIMAL </h3>
        </div>
        <br>
        <p>
          Integrar un perro o gato a la familia sólo porque los niños piden un cachorrito para jugar es un gran error. Los animales no son un juguete.
          <br>
          ¿Qué pasará cuando tus hijos crezcan, o cuando se aburran de él?
          ¿Quién lo bañará?
          ¿Quién lo sacará a pasear?
          <br>
          El animal es parte de la familia y todos tienen que estar de acuerdo con la adopción.
          <br>
          <br>
          Espacio y lugar donde vivirá: no todos los perros necesitan un parque para correr, pero sí espacio para moverse cómodamente por la casa y un lugar diferenciado para dormir y descansar.
          Si hay espacios al aire libre deben estar cercados para evitar que el animal pueda escaparse. Si vivís en departamento deberás considerar el tamaño del animal a la hora de elegirlo, y sobre todo su nivel de actividad. La falta de grandes ambientes puede compensarse con ejercicio diario para que el animal desgaste energía. Corroborá que en tu edificio esté permitido tener animales de compañía.
          Si eligís un cachorro, averiguá antes qué tamaño tendrá cuando crezca.
          <br>
          <br>
          Tiempo y dedicación: es necesario que tengas tiempo para compartir con ellos. Los perros necesitan interactuar con sus dueños, no pueden ser ignorados sólo porque estés ocupado o cansado. Pensá antes de adoptar si tendrás momentos de juego con tu perro, si pasarás tiempo a su lado y si saldrás a caminar con él (incluso en días de lluvia o frío), aún cuando vuelvas cansado del trabajo; él te estará esperando ansioso y querrá salir después de estar varias horas solo.
          <br>
          <br>
          Mantenimiento y gastos: los perros tienen un calendario de vacunación anual que cumplir, más pipetas y desparasitasiones periódicas. También necesitan un alimento de buena calidad, para preservar su salud, pelaje y dentadura. Y hay que considerar que la atención veterinaria tiene un costo elevado.
          <br>
          <br>
          Hábitos de vida: evaluá si tendrás paciencia con el animal, si soportarás los pelos en las alfombras, los hoyos en el jardín y algún mueble o prenda rota por el perro.
          Si hay niños pequeños o personas muy mayores no es conveniente incorporar un perro de gran porte y muy enérgico, ya que podría tirarlos accidentalmente jugando. Si estás muchas horas fuera tendrás que buscar un perro tranquilo acostumbrado a quedarse solo.
          Si no estás seguro si es preferible un cachorro o un adulto tené en cuenta que un cachorro requiere bastante dedicación para educarlo: deberá aprender dónde hacer sus necesidades y cuáles son las cosas que no debe morder y romper. Adoptar un perro adulto es una ventaja ya que la mayoría vivió antes en un hogar.
          También tené en cuenta si viajás por trabajo o vacaciones, qué posibilidades tendrás de llevarlo con vos o si alguien podrá cuidarlo en tu ausencia.
          <br>
          <br>
          Quizás te parezcan demasiadas preguntas para hacerse, pero muchos animales en los refugios están allí porque sus dueños no pensaron realmente cuánto tiempo y dinero llevaba cuidar de ellos.
          Pero un animal te dará amor incondicional, compañía y mejorará para siempre tu vida.
          <br>
          <div class="panel-title">
            <h3> NO COMPRES DE RAZA, ¡ADOPTA UNO SIN CASA! <h3>
          </div>
            </p>
          </div>
        </div>
      </div>
  </body>
</html>
