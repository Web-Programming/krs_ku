<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'kelas';

    public function krs(){
        return $this->hasMany(Krs::class);
    }
    public function matakuliah(){
        return $this->belongsTo(MataKuliah::class,'matakuliah_id','id');
    }
}
