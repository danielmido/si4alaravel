<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // cara 1: sql query
        $mahasiswaprodi = DB::select('
            SELECT prodi.nama, COUNT(*) AS "jumlah" 
            FROM `mahasiswas` 
            JOIN prodi ON mahasiswas.prodi_id = prodi.id GROUP BY prodi.nama;
        ');

        return view('dashboard.index', compact('mahasiswaprodi'));
    }
}
