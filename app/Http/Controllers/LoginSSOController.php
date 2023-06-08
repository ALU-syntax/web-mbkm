<?php

namespace App\Http\Controllers;

use App\Models\SSOUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\DepartementAndLevel;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginSSOController extends Controller
{
    public function redirectToSSOPNJ(){
        return Socialite::driver('pnj')->redirect();
    }

    public function callback(){
        $user = Socialite::driver('pnj')->user();

        // dd($user->attributes['department_and_level'][0]['access_level']);
        // check if they're an existing user
        $existingUserSSO = SSOUser::where('email', $user->attributes['email'])->first();
        $existingUser = User::where('sso_pnj', $existingUserSSO->id)->first();
        if($existingUser){
            // log them in
            Auth::login($existingUser, true);
            request()->session()->regenerate();
            // auth()->login($existingUser, true);
            return redirect()->intended('/dashboard/index');
        } else {
            // create a new user
            $newUser                 = new SSOUser();
            
            $newUser->sub            = $user->attributes['sub'];
            $newUser->ident          = $user->attributes['ident'];
            $newUser->name           = $user->attributes['name'];
            $newUser->email          = $user->attributes['email'];
            $newUser->address        = $user->attributes['address'];
            $newUser->date_of_birth  = $user->attributes['date_of_birth'];
            $newUser->date_of_birth  = $user->attributes['date_of_birth'];

            $existingDepartment = DepartementAndLevel::where('access_level_name', $user->attributes['department_and_level'][0]['access_level_name'])
                                                        ->where('department', $user->attributes['department_and_level'][0]['department'])
                                                        ->first();

            if($existingDepartment){
                $newUser->department_and_level = $existingDepartment->id;
            }else{
                $newDepartment = new DepartementAndLevel();
                $newDepartment->access_level = $user->attributes['department_and_level'][0]['access_level'];
                $newDepartment->access_level_name = $user->attributes['department_and_level'][0]['access_level_name'];
                $newDepartment->department = $user->attributes['department_and_level'][0]['department'];
                $newDepartment->department_short_name = $user->attributes['department_and_level'][0]['department_short_name'];
                $newDepartment->save();

                
            }

            $lastIdDepartment = DB::table('departement_and_levels')
                            ->select('id')
                            ->orderByDesc('id')
                            ->limit(1)
                            ->get();

            $newUser->department_and_level = $lastIdDepartment;
            $newUser->save();

            $lastIdSSOUser = DB::table('s_s_o_users')
                            ->select('id')
                            ->where('sub', $user->attributes['sub'])
                            ->orderByDesc('id')
                            ->limit(1)
                            ->get();

            $newUserLogin = User::create([
                'name' => $user->attributes['name'],
                'email' => $user->attributes['email'],
                'sso_pnj' => $lastIdSSOUser
            ]);

            Auth::login($newUserLogin, true);
            request()->session()->regenerate();
            // auth()->login($newUser, true);
        }
        return redirect()->intended('/dashboard/index');
    }

    
}
