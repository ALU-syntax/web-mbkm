<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Laporan;
use App\Models\Logbook;
use App\Models\LogLogbook;
use Illuminate\Http\Request;

class WadirController extends Controller
{
    public function dashboard(){
        
        return view('dashboard.wadir.dashboard', [
            'active' => 'Dashboard Wadir',
            'title_page' => 'Dashboard',
            'title' => 'Dashboard',
            'mahasiswa' => User::where('role', 7)->get()
        ]);
    }

    public function detailMahasiswa($id){
        return view('dashboard.wadir.detail-mahasiswa', [
            'active' => 'Dashboard Wadir',
            'title_page' => 'Dashboard / Detail Mahasiswa',
            'title' => 'Dashboard',       
            'laporan' => Laporan::where('owner', $id)->with('listMbkm')->get()
        ]);
    }

    public function logbookMahasiswa($id){
        $logbook = Logbook::with('listMbkm')->where('user', $id)->get();
        $log_logbook = LogLogbook::where('logbook', $logbook[0]->id)->get();
        return view('dashboard.wadir.logbook-mahasiswa',[
            'title' => 'Dashboard',
            'title_page' => 'Dashboard / Detail Mahasiswa / Logbook',
            'active' => 'Dashboard Wadir',
            'owner' =>  $logbook[0]->name,
            'log_logbook' => $log_logbook,
        ]);
    }

    public function detailLogbook($id){
        $logbook = LogLogbook::with('listOwner')->where('id', $id)->get();
        return view('dashboard.wadir.detail-logbook', [
            'title' => 'Dashboard',
            'title_page' => 'Dashboard / Detail Mahasiswa / Logbook / Detail',
            'active' => 'Dashboard Wadir',
            'logbook' => $logbook
        ]);
    }

    public function viewPdf($id){
        return view('dashboard.wadir.view-pdf',[
            'laporan' => Laporan::find($id)->get()
        ]);
    }
}
