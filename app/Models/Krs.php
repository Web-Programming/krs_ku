<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Krs extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'krs';

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function kelas(){
        return $this->belongsTo(Kelas::class,'kelas_id','id');
    }
    public function matakuliah(){
        return $this->belongsTo(MataKuliah::class,'matakuliah_id','id');
    }
}
