<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Prodi;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // panggil model prodi menggunakan eloquent
        $mahasiswa = Mahasiswa::all();
        // dd($prodi);
        return view('mahasiswa.index')->with('mahasiswa', $mahasiswa);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prodi=Prodi::all();
        return view('mahasiswa.create', compact('prodi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi input
        $input = $request->validate([
            'npm' => 'required|unique:mahasiswas',
            'nama' => 'required',
            'jk' => 'required',
            'tanggal_lahir' => 'required',
            'tempat_lahir' => 'required',
            'asal_sma' => 'required',
            'prodi_id' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // upload foto
        if($request->hasFile('foto')) {
            $file = $request->file('foto'); // ambil file foto
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename); // simpan foto ke folder public/images
            $input['foto'] = $filename; // simpan nama file baru ke input
        }

        // simpan data ke tabel mahasiswa
        Mahasiswa::create($input);

        // redirect ke route mahasiswa.index
        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        // dd($mahasiswa);
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        // dd($mahasiswa);

        // hapus foto jika ada
        if($mahasiswa->foto) {
            $fotoPath = public_path('images/' . $mahasiswa->foto);
            if(file_exists($fotoPath)) {
                unlink($fotoPath); // hapus file foto
            }
        }

        // hapus data mahasiswa
        $mahasiswa->delete();

        // redirect ke route mahasiswa.index
        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil dihapus.');
    }
}
