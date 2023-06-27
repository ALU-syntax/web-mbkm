<?php

namespace App\Http\Controllers;

use App\Models\Mbkm;
use App\Models\User;
use App\Models\Laporan;
use App\Models\Logbook;
use App\Models\LogLogbook;
use Illuminate\Http\Request;

class PembimbingIndustriController extends Controller
{
    public function dashboard(){
        $mbkm = Mbkm::where('pembimbing_industri', auth()->user()->id)->distinct()->get();
        $user = '';

        if(empty($mbkm)){
            $user = User::where('email', $mbkm[0]->email)->get();
        }else{
            $user = $mbkm;
        }

        return view('dashboard.pembimbing-industri.dashboard',[
            'title' => 'Dashboard',
            'title_page' => 'Dashboard',
            'active' => 'Dashboard Pembimbing Industri',
            'name' => auth()->user()->name,
            'mahasiswa' => $user
        ]);
    }

    public function detailMahasiswa($id){
        return view('dashboard.pembimbing-industri.detail-mahasiswa', [
            'title' => 'Dashboard',
            'title_page' => 'Dashboard / Detail Mahasiswa',
            'active' => 'Dashboard Dosbing',
            'laporan' => Laporan::where('mbkm', $id)->with('listMbkm')->get()
        ]);
    }

    public function logbook(){
        $mbkm = Mbkm::where('pembimbing_industri', auth()->user()->id)->get();
        $user = '';

        if(empty($mbkm)){
            $user = User::where('email', $mbkm[0]->email)->get();
        }else{
            $user = $mbkm;
        }
        return view('dashboard.pembimbing-industri.logbook', [
            'title' => 'Logbook',
            'title_page' => 'Logbook',
            'active' => 'Logbook Pembimbing Industri',
            'name' => auth()->user()->name,
            'mahasiswa' => $user
        ]);
    }

    public function detailLogbook($id){
        $logbook = Logbook::with('listMbkm')->where('mbkm', $id)->get();
        // dd($logbook);
        $log_logbook = LogLogbook::where('logbook', $logbook[0]->id)->get();
        // dd($log_logbook);
        return view('dashboard.pembimbing-industri.detail-logbook',[
            'title' => 'Logbook',
            'title_page' => 'Logbook / Mahasiswa',
            'active' => 'Logbook Pembimbing Industri',
            'name' => auth()->user()->name,
            'owner' =>  $logbook[0]->name,
            'log_logbook' => $log_logbook,
        ]);
    }

    public function logLogbook($id){
        // $logbook = LogLogbook::find($id);
        $logbook = LogLogbook::with('listOwner')->where('id', $id)->get();
        // dd($logbook);
        return view('dashboard.pembimbing-industri.log-logbook',[
            'title' => 'Logbook',
            'title_page' => 'Logbook / Mahasiswa / Detail',
            'active' => 'Logbook Pembimbing Industri',
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
        
        return redirect('/logbook/pi/detail/'.$mbkm->id)->with('success', 'Logbook Mahasiswa sudah dibaca');
    }

    public function laporan(){
        $mbkm = Mbkm::where('pembimbing_industri', auth()->user()->id)->get();
        $user = '';
        if(empty($mbkm)){
            $user = User::where('email', $mbkm[0]->email)->get();
        }else{
            $user = $mbkm;
        }
        
        return view('dashboard.pembimbing-industri.laporan',[
            'title' => 'Laporan',
            'title_page' => 'Laporan',
            'active' => 'Laporan Pembimbing Industri',
            'name' => auth()->user()->name,
            'mahasiswa' => $user
        ]);
    }
}
