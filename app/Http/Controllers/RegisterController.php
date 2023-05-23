<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('dashboard.register',[
            'title' => 'Buat Akun',
            'title_page' => 'Buat Akun',
            'name' => auth()->user()->name,
            'active' => 'Buat Akun'
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
            'role' => 'required',
            'role_kedua' => 'required',
            'fakultas_id' => 'required',
            'jurusan_id' => 'required',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        session()->flash('success', 'Registration successfull!');

        return redirect('/dashboard/register');
    }

    public function kelolaAkun(){
        view('dashboard.kelola-akun', [
            'title' => 'Buat Akun / Kelola Akun',
            'title_page' => 'Buat Akun',
            'name' => auth()->user()->name,
            'active' => 'Buat Akun' 
        ]);
    }
}
