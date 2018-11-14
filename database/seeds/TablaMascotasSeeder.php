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
        
     //   factory(Mascota::class,10)->create()->each(function($mascota) {
     //   factory(Mascota::class,10)->create()->each(function($mascota) {
          	//$mascota = factory(Mascota::class)->make();
    //    	$mascota->save();
    


        $mascota = factory(Mascota::class)->make();


        $perros = 0;
        $gatos = 0;
        $otro = 0;

        for($i = 0; $i < 20; $i++) {
           $mascota = factory(Mascota::class)->make(); 
           $mascota->save();
        
           //$carpeta = $mascota->tipo .'Default';
           

           if($mascota->tipo == "perro"){
            $perros++;
           }elseif ($mascota->tipo == "gato"){
            $gatos++;
           }

            if($mascota->tipo == "gato"){
                if ($gatos > 10){
                    $nombre = $mascota->tipo . "Default.jpg"; 
                } else{
                    $nombre = $mascota->tipo .$gatos.".jpg";
                }
            }


            if($mascota->tipo == "perro"){
                if ($perros > 10){
                    $nombre = $mascota->tipo . "Default.jpg" ;
                } else{
                   $nombre = $mascota->tipo .$perros.".jpg";
                }
            }



            //$path = 'public/storage/mascotas/'. $carpeta .'/'.$nombre;
          
            //$foto = File::get($path);


           // $nombre = "1".'.'.$foto->extension();
          



            //$nombre = $mascota->id.'.'.$foto->extension();
            //$foto->storeAs('public/mascotas/fotos',$nombre);
            //$mascota->foto = $nombre;



           
            //$foto->storeAs('public/mascotas/fotos',$nombre);
//            $foto = storeAs('public/mAsascotas/fotos',$nombre);

            $mascota->foto = $nombre;
            $mascota->save();

        }
    }
}
