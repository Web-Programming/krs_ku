<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Kelas extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'kelas';

    public function krs(){
        return $this->hasMany(Krs::class);
    }
    public function jadwal(){
        return $this->hasMany(Jadwal::class);
    }
    public function matakuliah(): BelongsToMany
    {
        return $this->belongsToMany(MataKuliah::class, 'jadwal', 'kelas_id', 'matakuliah_id');
    }
}
