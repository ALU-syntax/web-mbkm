<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;
use App\Models\CommentLaporan;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

class LaporanController extends Controller
{
    public function index($id){

        $test = Laporan::find($id)->with('listMbkm')->get();
        // dd($test);
        return view('dashboard.detail-laporan', [
            'title' => 'Laporan',
            'title_page' => 'Laporan / Edit',
            'active' => 'Laporan',
            'name' => auth()->user()->name,
            'laporan' => Laporan::find($id)->with('listMbkm')->get(),
            'logcomment' => CommentLaporan::all()->where('laporan', $id)
        ]);
    }    

    public function viewPdf($id){
        return view('dashboard.viewpdf',[
            'laporan' => Laporan::find($id)->get()
        ]);
    }

    public function fetchDokumen(Request $request){
        $data['dokumen'] = Laporan::where("id", $request->dokumen)
                            ->get();
                            
        return response()->json($data);
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

    public function savePdf(Request $request){
        // $rules['dokumen_name'] = $request->file->getClientOriginalName();
        // $rules['dokumen_path'] = $request->file('file')->store('dokumen-laporan');
        // $rules['sign_first'] = 1;
        
        
        // return response()->json($pdf);
        // return $request->dokumenName;
        // return response()->json($pdf);

        // if($request->hasFile('image')) {
        //     $file = $request->file('image');
 
        //     //you also need to keep file extension as well
        //     $name = $file->getClientOriginalName().'.'.$file->getClientOriginalExtension();
 
        //     //using the array instead of object
        //     $image['filePath'] = $name;
        //     $file->move(public_path().'/uploads/', $name);
        //     $user->image= public_path().'/uploads/'. $name;
        //     $user->save();
        // Storage::url($filename)
        // if($request->hasFile('file')){
        //     return $request->file->getClientOriginalName();
        // }else{
        //     return $request->all();
        // }
        // $path = $request->file->store('public/uploads');
        // $data = Input::all();
        // $fileContents = file_get_contents($request->file->get());
        Storage::makeDirectory('dokumen-annotate');
        $data = json_decode($request->file, true);
        Storage::put('dokumen-annotate/'.$request->name.'.json', json_encode($data));
        // Storage::move($sourcePath, $destinationPath);
        // $file = Storage::putFileAs('dokumen-annotate', new File(json_encode($data)), 'annotate_'.$request->name.'.json' );
        $rules['json_annotate'] = 'dokumen-annotate/'.$request->name.'.json';

        $pdf = Laporan::find($request->fileId);
        $pdf->update($rules);

        return $pdf;
    }
}
