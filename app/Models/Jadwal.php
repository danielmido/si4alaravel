<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'jadwal';

    protected $fillable = [
        'tahun_akademik',
        'kode_smt',
        'kelas',
        'matakuliah_id',
        'dosen_id',
        'sesi_id'
    ];

    public function matakuliah()
    {
        return $this->belongsTo(Mata_kuliah::class, 'matakuliah_id', 'id');
    }
    public function users()
    {
        return $this->belongsTo(User::class, 'dosen_id', 'id');
    }
    public function sesi()
    {
        return $this->belongsTo(Sesi::class, 'sesi_id', 'id');
    }
    //
}
