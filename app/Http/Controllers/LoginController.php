<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;


class LoginController extends Controller
{
    public function index(){
        return view('login');
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

    public function logout(){
        Auth::logout();
 
        request()->session()->invalidate();
     
        request()->session()->regenerateToken();
     
        return redirect('/');
    }

    public function redirectToSSOPNJ(){
        return Socialite::driver('pnj')->redirect();
    }

    public function callback(){
        $pnjuser = Socialite::driver('pnj')->user();

        dd($pnjuser);
        return redirect('/dashboard/');

        // return response()->json($pnjuser);
    }
}
