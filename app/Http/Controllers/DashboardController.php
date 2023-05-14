<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // public function index(){
    //     return view('dashboard.forum', [
    //         'title' => 'Dashboard',
    //         'active' => 'dashboard'
    //     ]);
    // }

    public function index(){
        return view('dashboard.forum');
    }

}
