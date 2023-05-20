<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class ForumPost extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function author(){
        return $this->belongsTo(User::class, 'created_by');
    }

    public function role(){
        return $this->belongsTo(Role::class);
    }

    

}
