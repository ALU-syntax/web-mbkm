<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Mbkm;
use App\Models\Laporan;
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
            'active' => 'Dashboard Dosbing',
            'laporan' => Laporan::where('mbkm', $id)->with('listMbkm')->get()
        ]);
    }

    public function logbook(){
        return view('dashboard.kps.logbook',[
            'active' => 'Logbook KPS',
            'title_page' => 'Logbook',
            'title' => 'Logbook',
            'mahasiswa' => User::where('fakultas_id', auth()->user()->fakultas_id)->where('role', 7)->get()
        ]);
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
