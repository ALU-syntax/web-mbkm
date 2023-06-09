<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\SSOUser;
use App\Models\Fakultas;
use App\Models\Jurusan;
use App\Models\ProgramMbkm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\DepartementAndLevel;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Laravel\Socialite\Facades\Socialite;

class LoginSSOController extends Controller
{
    public function redirectToSSOPNJ(){
        

        return Socialite::driver('pnj')->redirect();
    }

    public function callback(){
        $user = Socialite::driver('pnj')->user();

        // check if they're an existing user
        $existingUserSSO = SSOUser::where('email', $user->attributes['email'])->first();
        
        if($existingUserSSO){
            // log them in
            $existingUser = User::where('sso_pnj', $existingUserSSO->id)->first();
            Auth::login($existingUser);
            request()->session()->regenerate();
            if(is_null($existingUser->jurusan_id) || empty($existingUser->jurusan_id) ){
                return redirect()->intended('/dashboard/first-create');
            }
            
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
                            ->orderByDesc('id')
                            ->limit(1)
                            ->get();
                            
            $newUser->department_and_level = $lastIdDepartment[0]->id;
            $newUser->save();

            $lastIdSSOUser = DB::table('s_s_o_users')
                            ->select('id')
                            ->where('sub', $user->attributes['sub'])
                            ->orderByDesc('id')
                            ->limit(1)
                            ->get();

            $role = null;
            if($lastIdDepartment[0]->access_level_name == 'Mahasiswa'){
                $role = Role::where('name', $lastIdDepartment[0]->access_level_name)->get();
            }

            $newUserLogin = User::create([
                'name' => $user->attributes['name'],
                'email' => $user->attributes['email'],
                'nim' => $user->attributes['ident'],
                'sso_pnj' => $lastIdSSOUser[0]->id,
                'role' => $role[0]->id, 
            ]);

            Auth::login($newUserLogin, true);
            request()->session()->regenerate();

            return redirect()->intended('/dashboard/first-create');

        }
        return redirect()->intended('/dashboard/index');
    }

    public function firstLogin(){

        $lastIdDepartment = DB::table('departement_and_levels')
        ->orderByDesc('id')
        ->limit(1)
        ->get();
        

        // dd($lastIdDepartment[0]->access_level_name);

        $userSSO = SSOUser::where('ident', auth()->user()->nim)->first();

        $departementAndLevel = DepartementAndLevel::find($userSSO->department_and_level);
        // dd($departementAndLevel->access_level_name);
        
        $user = User::where('sso_pnj', $userSSO->id)->first();

        return view('dashboard.first-login', [
            'title' => 'First Login',
            'title_page' => 'Dashboard / First Login',
            'jabatan' => $departementAndLevel->access_level_name ,
            'name' => auth()->user()->name,
            'user' => $user,
            'fakultas' => Fakultas::where('status', 'Aktif')->get(),
            'programs' => ProgramMbkm::where('status', 'Aktif')->get(),
            'dosbing' => User::where('role', '3')->orWhere('role_kedua', '3')->get()
        ]);
    }
    
    public function storeFirstLogin(Request $request, $id){

        $user = User::find($id);

        $rules = [
            'name' => 'required|max:255',
            'nim' => 'required',
            'email' => 'required',
            'role' => 'required',
            'fakultas_id' => 'required',
            'jurusan_id' => 'required',
        ];
        $user->update($request->validate($rules));

        return redirect('/dashboard/index');
    }
}
