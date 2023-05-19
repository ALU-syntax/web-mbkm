<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // public function index(){
    //     return view('dashboard.forum', [
    //         'title' => 'Dashboard',
    //         'active' => 'dashboard'
    //     ]);
    // }

    public function forum(){
        return view('dashboard.forum', [
            'title' => 'Forum'
        ]);
    }

    public function pendaftaranMBKM(){
        return view('dashboard.pendaftaran-mbkm', [
            'title' => 'Pendaftaran MBKM'
        ]);
    }

    public function uploadKurikulum(){
        return view('dashboard.upload-kurikulum', [
            'title' => 'Upload Kurikulum'
        ]);
    }

    public function hasilKonversi(){
        return view('dashboard.hasil-konversi', [
            'title' => 'Hasil Konversi'
        ]);
    }


    public function createLogbook(){
        return view('dashboard.create-logbook',[
            'title' => 'Logbook'
        ]);
    }

    public function laporan(){
        return view('dashboard.laporan', [
            'title' => 'laporan'
        ]);
    }

    public function welcome(){
        return view('dashboard.welcome', [
            'title' => 'welcome'
        ]);
    }

}
