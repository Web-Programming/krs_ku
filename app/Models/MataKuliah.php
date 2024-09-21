<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'matakuliah';

    public function kelas(){
        return $this->hasMany(Kelas::class);
    }
}
