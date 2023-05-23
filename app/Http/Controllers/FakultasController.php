<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    public function index(){
        return view('dashboard.fakultas',[
            'title' => 'Fakultas',
            'title_page' => 'Fakultas',
            'active' => 'Fakultas',
            'name' => auth()->user()->name,
            'fakultas' => Fakultas::all()
        ]);
    }

    public function create(){
        return view('dashboard.create-fakultas', [
            'title' => 'Create',
            'title_page' => 'Fakultas / Create',
            'active' => 'Fakultas',
            'name' => auth()->user()->name,
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|unique:fakultas',
            'status' => 'required'
        ]);
        Fakultas::create($validatedData);

        return redirect('/dashboard/fakultas')->with('success', 'Fakultas Berhasil Dibuat!');
    }

    public function edit($id){
        return view('dashboard.edit-fakultas',[
            'title' => 'Edit',
            'title_page' => 'Fakultas / Edit',
            'active' => 'Fakultas',
            'name' => auth()->user()->name,
            'fakultas' => Fakultas::find($id)
        ]);
    }

    public function destroy($id){
        Fakultas::destroy($id);
        return redirect('/dashboard/fakultas')->with('success', 'Data Fakultas Berhasil di Hapus');
    }
}
