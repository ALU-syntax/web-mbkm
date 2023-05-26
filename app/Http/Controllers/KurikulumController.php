<?php

namespace App\Http\Controllers;

use App\Models\Kurikulum;
use App\Models\LogMatakuliah;
use Illuminate\Http\Request;

class KurikulumController extends Controller
{
    public function store(Request $request){

        $kurikulum = $request->validate([
            'dokumen' => 'required|mimes:pdf,xlx,csv|max:2048'            
        ]);

        $kurikulum['owner'] = auth()->user()->id;
        Kurikulum::create($kurikulum);

        dd($request);

        $logMatakuliah = $request->validate([
            'inputs.*.matakuliah' => 'required',
            'inputs.*.sks' => 'required',
        ],[
            'inputs.*.matakuliah' => 'Mata Kuliah Tidak Boleh Kosong',
            'inputs.*.sks' => 'SKS tidak boleh kosong'
        ]);
        
        $logMatakuliah['kurikulum'] = Request::instance()->id;
        dd($logMatakuliah);
        

        foreach($logMatakuliah['inputs'] as $key => $value){
            LogMatakuliah::create($value);
        }
    }
}
