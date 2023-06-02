<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index($id){
        return view('dashboard.detail-laporan', [
            'title' => 'Laporan',
            'title_page' => 'Laporan / Edit',
            'active' => 'Laporan',
            'name' => auth()->user()->name,
        ]);
    }    

    public function viewPdf(){
        return view('dashboard.viewpdf');
    }
}
