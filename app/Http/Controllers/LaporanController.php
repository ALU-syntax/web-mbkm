<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\CommentLaporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index($id){
        return view('dashboard.detail-laporan', [
            'title' => 'Laporan',
            'title_page' => 'Laporan / Edit',
            'active' => 'Laporan',
            'name' => auth()->user()->name,
            'laporan' => Laporan::find($id)->with('listMbkm')->get(),
            'logcomment' => CommentLaporan::all()->where('laporan', $id)
        ]);
    }    

    public function viewPdf(){
        return view('dashboard.viewpdf');
    }

    public function update(Request $request, $id){

        $rules = $request->validate([
            'dokumen' => 'required|mimes:pdf'            
        ]);

        $rules['dokumen_name'] = $request->dokumen->getClientOriginalName();
        $rules['dokumen_path'] = $request->file('dokumen')->store('dokumen-laporan');
        $rules['sign_first'] = 0;
        $rules['sign_second']= 0;

        // Laporan::where('id', $id)->update($rules);

        $laporan = Laporan::find($id);

        $laporan->update($rules);

        return redirect('/dashboard/laporan/'.$id)->with('success', 'Dokumen Laporan berhasil ditambahkan!');
        
    }
}
