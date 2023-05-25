<?php

namespace App\Http\Controllers;

use App\Models\Mbkm;
use App\Models\ProgramMbkm;
use Illuminate\Http\Request;

class MbkmController extends Controller
{

    public function programIndex(){
        return view('dashboard.program-mbkm', [
            'title' => 'Program MBKM',
            'title_page' => 'Program MBKM',
            'active' => 'Program Mbkm',
            'name' => auth()->user()->name,
            'programMbkm' => ProgramMbkm::all()
        ]);
    }

    public function create(){
        return view('dashboard.create-program-mbkm', [
            'title' => 'Create',
            'title_page' => 'Program MBKM / Create',
            'active' => 'Program Mbkm',
            'name' => auth()->user()->name,
        ]);
    }

    public function storeProgram(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|unique:program_mbkms',
            'status' => 'required'
        ]);
        ProgramMbkm::create($validatedData);

        return redirect('/dashboard/program-mbkm')->with('success', 'Program MBKM Berhasil Dibuat!');
    }

    public function edit($id){
        return view('dashboard.edit-program-mbkm',[
            'title' => 'Edit',
            'title_page' => 'Program Mbkm / Edit',
            'active' => 'Program Mbkm',
            'name' => auth()->user()->name,
            'program' => ProgramMbkm::find($id)
        ]);
    }

    public function update(Request $request, $program){
        $mbkm = ProgramMbkm::find($program);

        $mbkm->update($request->all());
        return redirect('/dashboard/program-mbkm')->with('success', 'Data Program Mbkm has been updated!');
    }

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
            'active' => 'Pendaftaran MBKM',
            'name' => auth()->user()->name,
            'mbkms' => Mbkm::latest()->get()
        ]);
    }
}
