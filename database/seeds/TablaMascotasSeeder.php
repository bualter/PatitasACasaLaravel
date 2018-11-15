<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
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
        $mascota = factory(Mascota::class)->make();

        $perros = 0;
        $gatos = 0;
        $otros = 0;

        for($i = 0; $i < 33; $i++) {
           $mascota = factory(Mascota::class)->make(); 
           $mascota->save();
        
           if($mascota->tipo == "perro"){
            $perros++;
           }elseif ($mascota->tipo == "gato"){
            $gatos++;
           }elseif ($mascota->tipo == "otro"){
            $otros++;
           }

            if($mascota->tipo == "gato"){
                if ($gatos > 9){
                    $nombre = $mascota->tipo . "Default.svg"; 
                } else{
                    $nombre = $mascota->tipo .$gatos.".jpg";
                }
            }

            if($mascota->tipo == "perro"){
                if ($perros > 9){
                    $nombre = $mascota->tipo . "Default.svg" ;
                } else{
                   $nombre = $mascota->tipo .$perros.".jpg";
                }
            }

            if($mascota->tipo == "otro"){
                if ($otros > 9){
                    $nombre = $mascota->tipo . "Default.svg" ;
                } else{
                   $nombre = $mascota->tipo .$otros.".jpg";
                }
            }

            $mascota->foto = $nombre;
            $mascota->save();

        }
    }
}
