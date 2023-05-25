<?php

namespace App\Http\Controllers;

use App\Models\Mbkm;
use App\Models\Fakultas;
use App\Models\Jurusan;
use App\Models\User;
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

        $validatedData['user'] = auth()->user()->id;

        Mbkm::create($validatedData);

        return redirect('/dashboard/pendaftaran-mbkm')->with('success', 'New Data Mbkm has been added!');
    }

    public function myForm(){
        return view('dashboard.my-mbkm-form',[
            'title' => 'My Mbkm Form',
            'title_page' => 'Pendaftaran-Mbkm / Form Mbkm Saya',
            'active' => 'Pendaftaran MBKM',
            'name' => auth()->user()->name,
            'mbkms' => Mbkm::where('user', auth()->user()->id)->get()
        ]);
    }

    public function editMyForm($mbkm){
        return view('dashboard.edit-my-mbkm-form',[
            'title' => 'Edit',
            'title_page' => 'Pendaftaran Mbkm / Form Mbkm Saya / Edit',
            'active' => 'Pendaftaran MBKM',
            'name' => auth()->user()->name,
            'mbkm' => Mbkm::find($mbkm),
            'fakultas' => Fakultas::where('status', 'Aktif')->get(),
            'programs' => ProgramMbkm::where('status', 'Aktif')->get(),
            'jurusans' => Jurusan::where('status', 'Aktif')->get(),
            'dosbing' => User::where('role', '3')->orWhere('role_kedua', '3')->get()
        ]);
    }

    public function updateMyForm(Request $request, $mbkm){

        $form = Mbkm::find($mbkm);

        $rules = [
            'name' => 'required|max:255',
            'nim' => 'required',
            'fakultas' => 'required',
            'jurusan' => 'required',
            'semester' => 'required',
            'program' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
            'tempat_program_perusahaan' => 'required',
            'lokasi_program' => 'required',
            'program_keberapa' => 'required',
        ];

        $form->update($request->validate($rules));
        return redirect('/dashboard/pendaftaran-mbkm/personal')->with('success', 'Data Mbkm has been updated!');
    }
}
