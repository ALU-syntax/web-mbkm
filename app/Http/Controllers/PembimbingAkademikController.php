<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PembimbingAkademikController extends Controller
{
    public function dashboard(){
        return view('dashboard.pembimbing-akademik.dashboard', [
            'active' => 'Dashboard Pembimbing Akademik',
            'title_page' => 'Dashboard',
            'title' => 'Dashboard',
            'mahasiswa' => User::where('fakultas_id', auth()->user()->fakultas_id)->where('role', 7)->get()
        ]);
    }
}
