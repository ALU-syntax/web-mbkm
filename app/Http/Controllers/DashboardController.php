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
            'title_page' => 'Pendaftaran MBKM',
            'active' => 'Pendaftaran MBKM',
            'name' => auth()->user()->name
        ]);
    }

    public function uploadKurikulum(){
        return view('dashboard.upload-kurikulum', [
            'title' => 'Upload Kurikulum',
            'title_page' => 'Upload Kurikulum',
            'active' => 'Upload Kurikulum',
            'name' => auth()->user()->name
        ]);
    }

    public function hasilKonversi(){
        return view('dashboard.hasil-konversi', [
            'title' => 'Hasil Konversi',
            'title_page' => 'Hasil Konversi',
            'active' => 'Hasil Konversi',
            'name' => auth()->user()->name
        ]);
    }


    public function createLogbook(){
        return view('dashboard.create-logbook',[
            'title' => 'Logbook',
            'title_page' => 'Hasil Logbook',
            'active' => 'Logbook',
            'name' => auth()->user()->name
        ]);
    }

    public function laporan(){
        return view('dashboard.laporan', [
            'title' => 'Laporan',
            'title_page' => 'Laporan',
            'active' => 'Laporan',
            'name' => auth()->user()->name
        ]);
    }

    public function welcome(){

        return view('dashboard.welcome', [
            'title' => 'welcome',
            'title_page' => 'Dashboard',
            'active' => '',
            'name' => auth()->user()->name
        ]);
    }

}
