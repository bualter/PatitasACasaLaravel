<?php

use Faker\Generator as Faker;
use App\Mascota;

$factory->define(App\Mascota::class, function (Faker $faker) {

	$tipoCollection = collect(['perro','gato']);
	$sexoCollection = collect(['M','F']);
	$tamanioCollection = collect(['Chico','Mediano', 'Grande']);
	$zonaCollection = collect(['Sur','Oeste', 'Norte']);
	
    return [

    	 'id_user'=>random_int(1, 1),
    	 'nombre' => $faker->firstName,
    	 'tipo'=> $tipoCollection->random(),
    	 'edad'=> random_int(1, 16),
    	 'tamanio' => $tamanioCollection->random(), 
    	 'sexo' => $sexoCollection->random(),
    	 'zona' => $zonaCollection->random(),
    	 'descripcion'=> $faker->sentence
        
    ];
});
