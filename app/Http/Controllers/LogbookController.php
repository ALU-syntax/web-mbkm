<?php

namespace App\Http\Controllers;

// use App\Models\Logbook;
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
            'name' => auth()->user()->name
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.create-logbook',[
            'title' => 'logbook',
            'name' => auth()->user()->name
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
}
