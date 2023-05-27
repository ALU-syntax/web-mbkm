<?php

namespace App\Http\Controllers;

use App\Models\Logbook;
use App\Models\LogLogbook;
use Illuminate\Http\Request;

class LogbookController extends Controller
{

    public function index(){
        return view('dashboard.logbook', [
            'title' => 'Logbook',
            'title_page' => 'Logbook',
            'active' => 'Logbook',
            'name' => auth()->user()->name,
            'logbooks' => Logbook::with('listMbkm')->where('user', auth()->user()->id)->get()
            // 'posts' => ForumPost::with('author')->where('created_by', auth()->user()->id)->where('is_delete', '0')->latest('updated_at')->get()
        ]);
    }

    public function create($id){        
        return view('dashboard.create-logbook',[
            'title' => 'Create',
            'title_page' => 'Logbook / Create',
            'name' => auth()->user()->name,
            'active' => 'Logbook',
            'idLogbook' => $id
        ]);
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'tanggal_dibuat' => 'required',
            'body' => 'required',
            'lokasi' => 'required',
            'logbook' => 'required'
        ]);
        $validatedData['owner'] = auth()->user()->id;

        LogLogbook::create($validatedData);

        return redirect('/dashboard/logbook')->with('success', 'Logbook Berhasil Dibuat!');
    }

    public function myLogbook($id){
        return view('dashboard.my-logbook',[
            'title' => 'Detail',
            'title_page' => 'Logbook / Detail',
            'name' => auth()->user()->name,
            'active' => 'Logbook',
            'idLogbook' => $id,
            'log_logbooks' => LogLogbook::where('logbook', $id)->get()
        ]);
    }
}
