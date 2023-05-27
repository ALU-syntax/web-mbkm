<?php

namespace App\Http\Controllers;

use App\Models\Logbook;
use Illuminate\Http\Request;

class LogbookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.logbook', [
            'title' => 'Logbook',
            'title_page' => 'Logbook',
            'active' => 'Logbook',
            'name' => auth()->user()->name,
            'logbooks' => Logbook::with('listMbkm')->where('user', auth()->user()->id)->get()
            // 'posts' => ForumPost::with('author')->where('created_by', auth()->user()->id)->where('is_delete', '0')->latest('updated_at')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.create-logbook',[
            'title' => 'Create',
            'title_page' => 'Logbook / Create',
            'name' => auth()->user()->name,
            'active' => 'Logbook'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //
    }

    public function myLogbook(){
        return view('dashboard.my-logbook',[
            'title' => 'Create',
            'title_page' => 'Logbook / Create',
            'name' => auth()->user()->name,
            'active' => 'Logbook'
        ]);
    }
}
