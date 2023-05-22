<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ForumPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Deployer\timestamp;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.forum', [
            'title' => 'Forum',
            'title_page' => 'Forum ',
            'name' => auth()->user()->name,
            'posts' => ForumPost::with('author')->latest('updated_at')->get(),
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

        return redirect('/dashboard/forum')->with('success', 'New Post has been added!');
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
        if($forum->author->id !== auth()->user()->id) {
            abort(403);
       }

        return view('dashboard.edit-forum', [
            'title' => 'Edit Post',
            'title_page' => 'Forum / My Post / Edit',
            'name' => auth()->user()->name, 
            'forum' => $forum
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ForumPost $forum)
    {
        $rules = [
            'body' => 'required'
        ];

        $validatedData = $request->validate($rules);

        $validatedData['created_by'] = auth()->user()->id;

        ForumPost::where('id', $forum->id)
                ->update($validatedData);

        return redirect('/dashboard/forum')->with('success', 'Post has been updated!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ForumPost $forum)
    {
        //
    }

    public function myPost(){
        return view('dashboard.mypost',[
            'title' => 'My Forum Post',
            'title_page' => 'Forum / My Post',
            'name' => auth()->user()->name,
            'posts' => ForumPost::where('created_by', auth()->user()->id)->get()
        ]);
    }
}
