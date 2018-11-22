<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\User;

class SocialController extends Controller
{
    public function redirect($provider)
    {
     return Socialite::driver($provider)->redirect();
    }

    public function Callback($provider)
	{
        $userSocial =   Socialite::driver($provider)->stateless()->user();
        
		try{
        	$users      =   User::where(['email' => $userSocial->getEmail()])->first();
    	} catch (Illuminate\Database\Eloquent\ModelNotFoundException $e) {

			$user = User::create([
                'name'          => $userSocial->getName(),
                'lastname'      => $userSocial->getLastname(),
                'email'         => $userSocial->getEmail(),
                'avatar'        => $userSocial->getAvatar(),
                'provider_id'   => $userSocial->getId(),
                'zonaPertenencia' => "",              
                'provider'      => $provider,
            ]);
         return redirect('/');

    	}

		if($users){
            Auth::login($users);
            return redirect('/');
        }
      
	}
}
