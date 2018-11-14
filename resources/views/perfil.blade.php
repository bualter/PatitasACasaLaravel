

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
<div>
 <a href="/" class="mascotasUsuario"> BUSCAR MASCOTAS <ion-icon name="search"></ion-icon> </a>
</div>
</div>
</div>
</div>
