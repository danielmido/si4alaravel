<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mata_kuliah extends Model
{
    protected $table = 'matakuliah';
    //
    protected $fillable = [
        'kode_mk',
        'nama',
        'prodi_id',
    ];

    public function prodi()
    {
        return $this->belongsTo(Prodi::class, 'prodi_id', 'id');
    }
}
