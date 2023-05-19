<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
class DashboardController extends Controller
{
    // public function index(){
    //     return view('dashboard.forum', [
    //         'title' => 'Dashboard',
    //         'active' => 'dashboard'
    //     ]);
    // }


    public function pendaftaranMBKM(){
        return view('dashboard.pendaftaran-mbkm', [
            'title' => 'Pendaftaran MBKM',
            'name' => auth()->user()->name
        ]);
    }

    public function uploadKurikulum(){
        return view('dashboard.upload-kurikulum', [
            'title' => 'Upload Kurikulum',
            'name' => auth()->user()->name
        ]);
    }

    public function hasilKonversi(){
        return view('dashboard.hasil-konversi', [
            'title' => 'Hasil Konversi',
            'name' => auth()->user()->name
        ]);
    }


    public function createLogbook(){
        return view('dashboard.create-logbook',[
            'title' => 'Logbook',
            'name' => auth()->user()->name
        ]);
    }

    public function laporan(){
        return view('dashboard.laporan', [
            'title' => 'laporan',
            'name' => auth()->user()->name
        ]);
    }

    public function welcome(){

        return view('dashboard.welcome', [
            'title' => 'welcome',
            'name' => auth()->user()->name
        ]);
    }

}
