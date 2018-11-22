<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name', 'user')->first();
        $role_admin = Role::where('name', 'admin')->first();
 

        $user = new User();
        $user->name = 'User';
        $user->email = 'user@example.com';
        $user->lastname = 'User';
        $user->avatar = '';
        $user->provider = '';
        $user->provider_id = '';
        $user->zonaPertenencia = 'Palermo';
        $user->password = bcrypt('secret');
 		$user->save();
        $user->roles()->attach($role_user);

        $user = new User();
        $user->name = 'Jose';
        $user->email = 'jose_herrera97@icloud.com';
        $user->lastname =  'Herrera';
        $user->avatar = '';
        $user->provider = '';
        $user->provider_id = '';
        $user->zonaPertenencia = 'Palermo';
        $user->password = bcrypt('root');
        $user->save();
        $user->roles()->attach($role_user);

        $user = new User();
        $user->name = 'Admin';
        $user->lastname = 'Admin';
        $user->avatar = '';
        $user->provider = '';
        $user->provider_id = '';
        $user->zonaPertenencia = 'Palermo';
        $user->email = 'admin@example.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_admin);


    }
}
