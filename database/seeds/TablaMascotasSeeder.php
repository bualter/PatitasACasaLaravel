<?php

use Illuminate\Database\Seeder;
use App\Mascota;



class TablaMascotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        factory(Mascota::class,10)->create()->each(function($mascota) {
        	$mascota = factory(Mascota::class)->make();
        	//$mascota->save();
        });

    }
}
