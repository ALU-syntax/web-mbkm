<?php

namespace App\Http\Controllers;

use App\Models\Mbkm;
use App\Models\User;
use App\Models\Jurusan;
use App\Models\Laporan;
use App\Models\Logbook;
use App\Models\LogLogbook;
use App\Models\ProgramMbkm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PembimbingAkademikController extends Controller
{
    public function dashboard(){
        $test = DB::table('mbkms')->get();
        $tist = [];
        // $program = DB::table('program_mbkms')->where('id', );
        foreach($test as $value){
            print_r($value);
            // array_push($tist, $value);
        }
        // print_r($tist);
        return view('dashboard.pembimbing-akademik.dashboard', [
            'active' => 'Dashboard Pembimbing Akademik',
            'title_page' => 'Dashboard',
            'title' => 'Dashboard',
            'mahasiswa' => User::where('fakultas_id', auth()->user()->fakultas_id)->where('role', 7)->get()
        ]);
    }

    public function fetchJurusan(Request $request){
        $data['jurusan'] = Jurusan::where("fakultas_id", $request->fakultas_id)
                            ->where('status', '=' , 'Aktif')
                            ->get(["name", "id"]);

        return response()->json($data);
    }

    public function fetchChartLabel(){
        $data = Mbkm::all();
        $idProgram = [];
        $programName = [];
        foreach($data as $value){
            array_push($idProgram, $value->program);
        }

        // $program = ProgramMbkm::find($idProgram);

        $program = DB::table('program_mbkms')->get();
        foreach($program as $value){
            array_push($programName, $value);
        }

        return response()->json($programName);
    }



    public function detailMahasiswa($id){
        return view('dashboard.pembimbing-akademik.detail-mahasiswa', [
            'active' => 'Dashboard Pembimbing Akademik',
            'title_page' => 'Dashboard / Detail Mahasiswa',
            'title' => 'Dashboard',
            'laporan' => Laporan::where('owner', $id)->with('listMbkm')->get()
        ]);
    }

    public function logbookMahasiswa($id){
        $logbook = Logbook::with('listMbkm')->where('user', $id)->get();
        $log_logbook = LogLogbook::where('logbook', $logbook[0]->id)->get();
        return view('dashboard.pembimbing-akademik.logbook-mahasiswa', [
            'title' => 'Dashboard',
            'title_page' => 'Dashboard / Detail Mahasiswa / Logbook',
            'active' => 'Dashboard Pembimbing Akademik',
            'owner' =>  $logbook[0]->name,
            'log_logbook' => $log_logbook,
        ]);
    }

    public function detailLogbook($id){
        $logbook = LogLogbook::with('listOwner')->where('id', $id)->get();
        return view('dashboard.pembimbing-akademik.detail-logbook', [
            'title' => 'Dashboard',
            'title_page' => 'Dashboard / Detail Mahasiswa / Logbook / Detail',
            'active' => 'Dashboard Pembimbing Akademik',
            'logbook' => $logbook
        ]);
    }

    public function viewPdf($id){
        return view('dashboard.pembimbing-akademik.view-pdf',[
            'laporan' => Laporan::find($id)->get()
        ]);
    }
}
