<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Jurusan;
use App\Models\Fakultas;
use App\Models\ProgramMbkm;
use Illuminate\Http\Request;
use App\Models\HasilKonversi;
use App\Models\CommentKonversi;
use Illuminate\Support\Facades\DB;
use Laravel\Socialite\Facades\Socialite;

class DashboardController extends Controller
{
    // public function index(){
    //     return view('dashboard.forum', [
    //         'title' => 'Dashboard',
    //         'active' => 'dashboard'
    //     ]);
    // }


    public function fetchJurusan(Request $request){
        $data['jurusan'] = Jurusan::where("fakultas_id", $request->fakultas_id)
                            ->where('status', '=' , 'Aktif')
                            ->get(["name", "id"]);

        return response()->json($data);
    }

    public function pendaftaranMBKM(){
        
        return view('dashboard.informasi-mbkm', [
            'title' => 'Pendaftaran MBKM',
            'title_page' => 'Informasi MBKM',
            'active' => 'Informasi MBKM',
            'name' => auth()->user()->name,
            'fakultas' => Fakultas::where('status', 'Aktif')->get(),
            'programs' => ProgramMbkm::where('status', 'Aktif')->get(),
            'dosbing' => User::where('role', '3')->orWhere('role_kedua', '3')->get()

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
        $idKonversi = DB::table('hasil_konversis')
                            ->select('id')
                            ->where('owner', '=', auth()->user()->id)
                            ->orderByDesc('id')
                            ->limit(1)
                            ->get();
        // dd($data);


        return view('dashboard.hasil-konversi', [
            'title' => 'Hasil Konversi',
            'title_page' => 'Hasil Konversi',
            'active' => 'Hasil Konversi',
            'name' => auth()->user()->name,
            'hasil' => CommentKonversi::with('dataHasilKonversi')->where('owner', auth()->user()->id)->latest()->get(),
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
