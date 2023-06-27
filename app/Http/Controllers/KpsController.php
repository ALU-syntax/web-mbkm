<?php

namespace App\Http\Controllers;

use App\Models\Mbkm;
use App\Models\User;
use App\Models\Laporan;
use App\Models\Logbook;
use App\Models\LogLogbook;
use Illuminate\Http\Request;
use App\Models\CommentLaporan;
use Illuminate\Support\Facades\Storage;

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
            'active' => 'Dashboard KPS',
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
            'title_page' => 'Logbook / List Logbook',
            'title' => 'List Logbook',
            'owner' =>  $logbook[0]->name,
            'log_logbook' => $log_logbook,
        ]);
    }

    public function logLogbook($id){
        $logbook = LogLogbook::find($id);
        return view('dashboard.kps.detail-logbook',[
            'active' => 'Logbook KPS',
            'title_page' => 'Logbook / List Logbook / Detail',
            'title' => 'Detail',
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

    public function listLaporan($id){
        return view('dashboard.kps.list-laporan', [
            'title' => 'List Laporan',
            'title_page' => 'Laporan / List Laporan',
            'active' => 'Laporan KPS',
            'laporans' => CommentLaporan::with('dataLaporan')->where('user', $id)->get()
        ]);
    }

    public function detailLaporan($id){

        return view('dashboard.kps.detail-laporan', [
            'title' => 'Laporan',
            'title_page' => 'Laporan / Detail',
            'active' => 'Laporan Dosbing',
            'laporan' => Laporan::find($id)->with('listMbkm')->get(),
            'logcomment' => CommentLaporan::all()->where('laporan', $id)
        ]);
    }

    public function signPdf($id){
        return view('dashboard.kps.sign-pdf',[
            'laporan' => Laporan::find($id)->get()
        ]);
    }

    public function savePdf(Request $request){
        Storage::makeDirectory('dokumen-annotate');
        $data = json_decode($request->file, true);
        Storage::put('dokumen-annotate/'.$request->name.'.json', json_encode($data));

        $rules['json_annotate'] = 'dokumen-annotate/'.$request->name.'.json';
        $rules['sign_fourth'] = '1';

        $pdf = Laporan::find($request->fileId);
        $pdf->update($rules);

        return $pdf;
    }
    
}
