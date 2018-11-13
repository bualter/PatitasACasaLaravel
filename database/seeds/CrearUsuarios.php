<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CrearUsuarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          'email'=> 'jose_herrera97@icloud.com',
          'name'=> 'Jose',
          'lastname' => 'Herrera',
          'zonaPertenencia' => 'Palermo',
          'password'=> bcrypt('root'),
          'remember_token'=> str_random(60)
        ]);
    }
}
