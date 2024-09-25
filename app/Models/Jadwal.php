<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'jadwal';

    public function krs(){
        return $this->hasMany(Krs::class);
    }
    public function kelas(){
        return $this->belongsTo(Kelas::class,'kelas_id','id');
    }
    public function matakuliah(){
        return $this->belongsTo(MataKuliah::class,'matakuliah_id','id');
    }
}
