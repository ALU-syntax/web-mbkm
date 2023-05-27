<?php

namespace App\Http\Controllers;

use App\Models\Kurikulum;
use Illuminate\Http\Request;
use App\Models\LogMatakuliah;
use Illuminate\Support\Facades\DB;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class KurikulumController extends Controller
{
    public function store(Request $request){

        $kurikulum = $request->validate([
            'dokumen' => 'required|mimes:pdf,xlx,csv|max:2048'            
        ]);

        $kurikulum['owner'] = auth()->user()->id;
        Kurikulum::create($kurikulum);

        $lastIdKurikulum = DB::table('kurikulums')
                            ->select('id')
                            ->orderByDesc('id')
                            ->limit(1)
                            ->get();

        $request->validate([
            'inputs.*.mata_kuliah' => 'required',
            'inputs.*.sks' => 'required'
        ],[
            'inputs.*.mata_kuliah' => 'Mata Kuliah Tidak Boleh Kosong',
            'inputs.*.sks' => 'SKS tidak boleh kosong',
        ]);
        
        foreach($request->inputs as $key => $value){
            LogMatakuliah::create([
                'mata_kuliah' => $value['mata_kuliah'],
                'sks' => $value['sks'],
                'kurikulum' => $lastIdKurikulum[0]->id
            ]);
        }
        return redirect('/dashboard/upload-kurikulum')->with('success', 'Upload Kurikulum has been updated!');
    }

}
