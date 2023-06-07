<?php

namespace App\Http\Controllers;

use App\Models\SSOLogin;
use App\Models\SSOUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SocialiteProviders\Manager\Config;
use Laravel\Socialite\Facades\Socialite;

class LoginSSOController extends Controller
{
    public function redirectToSSOPNJ(){
        return Socialite::driver('pnj')->redirect();
    }

    public function callback(){
        $user = Socialite::driver('pnj')->user();

        // dd($user->attributes['sub']);
        // check if they're an existing user
        $existingUser = SSOUser::where('email', $user->attributes['email'])->first();
        if($existingUser){
            // $login = SSOLogin::where
            auth()->login($existingUser, true);

        } else {
            // create a new user
            $newUser                  = new SSOUser();
            $newUser->name            = $user->name;
            $newUser->email           = $user->email;
            $newUser->google_id       = $user->id;
            $newUser->avatar          = $user->avatar;
            $newUser->avatar_original = $user->avatar_original;
            $newUser->save();
            // auth()->login($newUser, true);
        }
        return redirect()->to('/home');

        // try {
        //     $user = Socialite::driver('google')->user();
        // } catch (\Exception $e) {
        //     return redirect('/login');
        // }
        
        return response()->json($user->attributes);
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            // 'email' => 'required|email:dns',
            'email' => 'required|email', 
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard/index');
        }
        return back()->with('loginError', 'Login failed!');
    }

}
