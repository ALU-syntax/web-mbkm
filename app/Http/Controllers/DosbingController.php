<?php

namespace App\Http\Controllers;

use App\Models\Logbook;
use App\Models\LogLogbook;
use Throwable;
use App\Models\Mbkm;
use App\Models\User;
use Illuminate\Http\Request;

class DosbingController extends Controller
{
    public function dashboard(){
        $mbkm = Mbkm::where('dosen_pembimbing', auth()->user()->id)->get();
        $user = '';

        if(empty($mbkm)){
            $user = User::where('email', $mbkm[0]->email)->get();
        }else{
            $user = $mbkm;
        }

        return view('dashboard.dosbing.dashboard', [
            'title' => 'Dashboard',
            'title_page' => 'Dashboard',
            'active' => 'Dashboard Dosbing',
            'name' => auth()->user()->name,
            'mahasiswa' => $user
            
        ]);
    }

    public function logbook(){
        $mbkm = Mbkm::where('dosen_pembimbing', auth()->user()->id)->get();
        // $logbook = Logbook::where('dosen_pembimbing', auth()->user()->id)->get();
        $user = '';

        if(empty($mbkm)){
            $user = User::where('email', $mbkm[0]->email)->get();
        }else{
            $user = $mbkm;
        }
        return view('dashboard.dosbing.logbook', [
            'title' => 'Logbook',
            'title_page' => 'Logbook',
            'active' => 'Logbook Dosbing',
            'name' => auth()->user()->name,
            'mahasiswa' => $user
        ]);
    }
    
    public function listLogbookMahasiswa($owner){
        return view('dashboard.dosbing.list-logbook', [
            'title' => 'Logbook',
            'title_page' => 'Logbook / Mahasiswa',
            'active' => 'Dosbing Logbook',
            'name' => auth()->user()->name,
            'logbooks' => Logbook::with('listMbkm')->where('user', $owner)->get()
        ]);
    }

    public function detailLogbook($id){
        $log_logbook = LogLogbook::where('logbook', $id)->get();
        return view('dashboard.dosbing.detail-logbook',[
            'title' => 'Logbook',
            'title_page' => 'Logbook / Mahasiswa / Detail',
            'active' => 'Dosbing Logbook',
            'name' => auth()->user()->name,
            'log_logbook' => $log_logbook,
        ]);
    }

    public function logLogbook($id){
        $logbook = LogLogbook::find($id);
        // dd($logbook);
        return view('dashboard.dosbing.log-logbook',[
            'title' => 'Logbook',
            'title_page' => 'Logbook / Mahasiswa / Log-Logbook',
            'active' => 'Dosbing Logbook',
            'logbook' => $logbook
        ]);
    }
    
}
