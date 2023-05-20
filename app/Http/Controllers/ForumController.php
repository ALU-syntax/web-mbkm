<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\ForumPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data = ForumPost::latest();


        // $posts = DB::table('forum_posts')
        //             ->leftJoin('users', 'forum_posts.created_by', '=', 'users.id')
        //             ->leftJoin('roles', 'users.role', '=', 'roles.id')
        //             // ->select('forum_posts.*', 'users.name', 'roles.name')
        //             ->select('*')
        //             ->get();    

        // dd($posts);


        return view('dashboard.forum', [
            'title' => 'Forum',
            'name' => auth()->user()->name,
            'posts' => ForumPost::latest()->get(),
            // 'posts' => $data->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.create-forum', [
            'title' => 'Forum',
            'name' => auth()->user()->name
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'body' => 'required'
        ]);

        $validatedData['created_by'] = auth()->user()->id;
        $validatedData['is_delete'] = '0';

        ForumPost::create($validatedData);

        return redirect('/dashboard/forum')->with('success', 'New Post has beend added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(ForumPost $forum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ForumPost $forum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ForumPost $forum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ForumPost $forum)
    {
        //
    }
}
