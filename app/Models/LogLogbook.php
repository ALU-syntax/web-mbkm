<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogLogbook extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function listOwner()
    {
        return $this->belongsTo(User::class, 'owner');
    }
}
