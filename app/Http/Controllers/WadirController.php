<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class WadirController extends Controller
{
    public function dashboard(){
        
        return view('dashboard.wadir.dashboard', [
            'active' => 'Dashboard Wadir',
            'title_page' => 'Dashboard',
            'title' => 'Dashboard',
            'mahasiswa' => User::where('fakultas_id', auth()->user()->fakultas_id)->where('role', 7)->get()
        ]);
    }

    public function detailMahasiswa($id){
        return view('dashboard.wadir.detail-mahasiswa', [

        ]);
    }
}
