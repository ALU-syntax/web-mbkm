<?php

namespace App\Http\Controllers;

use App\Models\Mbkm;
use Illuminate\Http\Request;

class MbkmController extends Controller
{
    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'nim' => 'required|unique:mbkms',
            'fakultas' => 'required',
            'jurusan' => 'required',
            'semester' => 'required',
            'program' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
            'tempat_program_perusahaan' => 'required',
            'lokasi_program' => 'required',
            'program_keberapa' => 'required',
        ]);

        Mbkm::create($validatedData);

        return redirect('/dashboard/pendaftaran-mbkm')->with('success', 'New Data Mbkm has been added!');
    }

    public function myForm(){


        return view('dashboard.my-mbkm-form',[
            'title' => 'My Mbkm Form',
            'title_page' => 'Pendaftaran-Mbkm / Form Mbkm Saya',
            'name' => auth()->user()->name,
            'mbkms' => Mbkm::latest()->get()
        ]);
    }
}
