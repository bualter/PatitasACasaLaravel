<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
        protected $table = 'mascotas';

        protected $fillable = ['nombre', 'tipo', 'edad', 'tamanio', 'sexo', 'zona', 'descripcion'];

        public function duenio() {
          return $this -> belongsTo(User::class, 'id_user');
        }

}
