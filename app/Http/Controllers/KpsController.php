<?php

namespace App\Http\Controllers;

use App\Models\Mbkm;
use App\Models\User;
use App\Models\Laporan;
use App\Models\Logbook;
use App\Models\LogLogbook;
use Illuminate\Http\Request;

class KpsController extends Controller
{
    public function dashboard(){
        return view('dashboard.kps.dashboard', [
            'active' => 'Dashboard KPS',
            'title_page' => 'Dashboard',
            'title' => 'Dashboard',
            'mahasiswa' => Mbkm::where('fakultas', auth()->user()->fakultas_id)->latest()->get()
        ]);
    }

    public function detailMahasiswa($id){
        
        return view('dashboard.kps.detail-mahasiswa', [
            'title' => 'Dashboard',
            'title_page' => 'Dashboard / Detail Mahasiswa',
            'active' => 'Logbook KPS',
            'laporan' => Laporan::where('mbkm', $id)->with('listMbkm')->get()
        ]);
    }

    public function logbook(){
        return view('dashboard.kps.logbook',[
            'active' => 'Logbook KPS',
            'title_page' => 'Logbook',
            'title' => 'Logbook',
            'mahasiswa' => Mbkm::where('fakultas', auth()->user()->fakultas_id)->get()
        ]);
    }

    public function listLogbook($id){
        $logbook = Logbook::with('listMbkm')->where('mbkm', $id)->get();
        // dd($logbook);
        $log_logbook = LogLogbook::where('logbook', $logbook[0]->id)->get();
        // dd($log_logbook);
        return view('dashboard.kps.list-logbook',[
            'active' => 'Logbook KPS',
            'title_page' => 'Logbook',
            'title' => 'Logbook',
            'owner' =>  $logbook[0]->name,
            'log_logbook' => $log_logbook,
        ]);
    }

    public function logLogbook($id){
        $logbook = LogLogbook::find($id);
        return view('dashboard.kps.detail-logbook',[
            'active' => 'Logbook KPS',
            'title_page' => 'Logbook',
            'title' => 'Logbook',
            'logbook' => $logbook
        ]);
    }

    public function logbookFinish($id){
        $log_logbook = LogLogbook::find($id);
        $log_logbook['status'] = '1';
        $log_logbook->update();

        $logbook = Logbook::find($log_logbook->logbook);
        $mbkm = Mbkm::find($logbook->mbkm);
        // dd($mbkm->id);
        
        return redirect('/logbook/kps/list/'.$mbkm->id)->with('success', 'Logbook Mahasiswa sudah dibaca');        
    }

    public function laporan(){
        $mbkm = Mbkm::where('fakultas', auth()->user()->fakultas_id)->get();
        $user = '';
        if(empty($mbkm)){
            $user = User::where('email', $mbkm[0]->email)->get();
        }else{
            $user = $mbkm;
        }
        return view('dashboard.kps.laporan', [
            'active' => 'Laporan KPS',
            'title_page' => 'Laporan',
            'title' => 'Laporan',
            'mahasiswa' => $user,
        ]);
    }
}
