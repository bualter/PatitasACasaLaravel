<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
        protected $table = 'mascotas';

        protected $fillable = ['nombre', 'tipo', 'edad', 'tamanio', 'sexo', 'zona', 'descripcion'];


        public $tamanios= array('chico','mediano', 'grande');
        public $sexos= array('M', 'F');
        public $tipos= array('perro', 'gato', 'otro');



        public function duenio() {
          return $this -> belongsTo(User::class, 'id_user');
        }

}
