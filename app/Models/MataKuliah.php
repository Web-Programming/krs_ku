<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class MataKuliah extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'matakuliah';

    public function jadwal(){
        return $this->hasMany(Jadwal::class);
    }
    public function krs(){
        return $this->hasMany(Krs::class);
    }
    public function kelas(): BelongsToMany
    {
        return $this->belongsToMany(Kelas::class, 'jadwal', 'matakuliah_id', 'kelas_id');
    }
}
