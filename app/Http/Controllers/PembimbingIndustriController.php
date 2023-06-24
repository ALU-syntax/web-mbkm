<?php

namespace App\Http\Controllers;

use App\Models\Mbkm;
use App\Models\User;
use Illuminate\Http\Request;

class PembimbingIndustriController extends Controller
{
    public function dashboard(){
        $mbkm = Mbkm::where('pembimbing_industri', auth()->user()->id)->distinct()->get('name');
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
