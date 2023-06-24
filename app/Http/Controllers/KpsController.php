<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class KpsController extends Controller
{
    public function dashboard(){
        return view('dashboard.kps.dashboard', [
            'active' => 'Dashboard KPS',
            'title_page' => 'Dashboard',
            'title' => 'Dashboard',
            'mahasiswa' => User::where('fakultas_id', auth()->user()->fakultas_id)->where('role', 7)->get()
        ]);
    }

    public function logbook(){
        return view('dashboard.kps.logbook',[
            'active' => 'Logbook KPS',
            'title_page' => 'Dashboard',
            'title' => 'Dashboard',
            'mahasiswa' => User::where('fakultas_id', auth()->user()->fakultas_id)->where('role', 7)->get()
        ]);
    }
}
