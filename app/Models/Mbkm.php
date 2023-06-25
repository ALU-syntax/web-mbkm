<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mbkm extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function dataFakultas(){
        return $this->belongsTo(Fakultas::class, 'fakultas');
    }

    public function dataJurusan(){
        return $this->belongsTo(Jurusan::class, 'jurusan');
    }

    public function dataProgram(){
        return $this->belongsTo(ProgramMbkm::class, 'program');
    }

    public function mbkms(){
        return $this->hasMany(Logbook::class);
    }

    public function listUser(){
        return $this->belongsTo(User::class, 'dosen_pembimbing');
    }

    public function listPI(){
        return $this->belongsTo(User::class, 'pembimbing_industri');
    }
}
