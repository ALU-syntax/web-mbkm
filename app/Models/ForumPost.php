<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ForumPost extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function author(){
        
        // $posts = DB::table('forum_posts')
        //             ->leftJoin('users', 'forum_posts.created_by', '=', 'users.id')
        //             ->leftJoin('roles', 'users.role', '=', 'roles.id')
        //             ->select('forum_posts.*', 'users.name', 'roles.name')
        //             ->get();    

        return $this->belongsTo(User::class, 'created_by');
        // return $posts;
    }

}
