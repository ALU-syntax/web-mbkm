<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use SocialiteProviders\Manager\Config;

class LoginSSOController extends Controller
{
    public function redirectToSSOPNJ(){
        return Socialite::driver('pnj')->redirect();
    }

    public function callback(){
        $user = Socialite::driver('pnj')->user();

        // try {
        //     $user = Socialite::driver('google')->user();
        // } catch (\Exception $e) {
        //     return redirect('/login');
        // }
        
        return response()->json($user->attributes);
    }
}
