<?php

namespace App\Http\Controllers;

use App\Models\Mbkm;
use App\Models\User;
use App\Models\Laporan;
use App\Models\Logbook;
use App\Models\LogLogbook;
use Illuminate\Http\Request;
use App\Models\CommentLaporan;
use Illuminate\Support\Facades\DB;

class DosbingController extends Controller
{
    public function dashboard(){
        $mbkm = Mbkm::where('dosen_pembimbing', auth()->user()->id)->distinct()->get('name');
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
    
    public function listLogbookMahasiswa($id){
        return view('dashboard.dosbing.list-logbook', [
            'title' => 'Logbook',
            'title_page' => 'Logbook / Mahasiswa',
            'active' => 'Dosbing Logbook',
            'name' => auth()->user()->name,
            'logbooks' => Logbook::with('listMbkm')->where('mbkm', $id)->get()
        ]);
    }

    public function detailLogbook($id){
        $logbook = Logbook::with('listMbkm')->where('mbkm', $id)->get();
        // dd($logbook[0]->name);
        $log_logbook = LogLogbook::where('logbook', $logbook[0]->id)->get();
        // dd($log_logbook);
        return view('dashboard.dosbing.detail-logbook',[
            'title' => 'Logbook',
            'title_page' => 'Logbook / Mahasiswa / Detail',
            'active' => 'Dosbing Logbook',
            'name' => auth()->user()->name,
            'owner' =>  $logbook[0]->name,
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

    public function laporan(){
        $mbkm = Mbkm::where('dosen_pembimbing', auth()->user()->id)->get();
        $user = '';
        if(empty($mbkm)){
            $user = User::where('email', $mbkm[0]->email)->get();
        }else{
            $user = $mbkm;
        }
        
        return view('dashboard.dosbing.laporan', [
            'title' => 'Laporan',
            'title_page' => 'Laporan',
            'active' => 'Laporan Dosbing',
            'name' => auth()->user()->name,
            'mahasiswa' => $user
        ]);
    }

    public function listLaporan($id){
        return view('dashboard.dosbing.list-laporan', [
            'title' => 'Laporan',
            'title_page' => 'Laporan',
            'active' => 'Laporan Dosbing',
            'laporans' => CommentLaporan::with('dataLaporan')->where('user', $id)->get()
        ]);
    }

    public function detailLaporan($id){

        return view('dashboard.dosbing.detail-laporan', [
            'title' => 'Laporan',
            'title_page' => 'Laporan / Detail',
            'active' => 'Laporan Dosbing',
            'laporan' => Laporan::find($id)->with('listMbkm')->get(),
            'logcomment' => CommentLaporan::all()->where('laporan', $id)
        ]);
    }

    public function viewPdf($id){
        return view('dashboard.dosbing.view-pdf',[
            'laporan' => Laporan::find($id)->get()
        ]);
    }

    public function approveFile(Request $request, $file){
        $laporan = Laporan::find($file);

        $laporan['status'] = 'Diterima';
        $laporan->update();
        return redirect('/laporan/dosbing')->with('success', 'Laporan Mahasiswa Berhasil Disetujui');

    }

}
