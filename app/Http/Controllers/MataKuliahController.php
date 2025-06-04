<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use App\Models\Prodi;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matakuliah = Mata_kuliah::all();

        return view('matakuliah.index')->with('matakuliah', $matakuliah);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prodi = Prodi::all();

        return view('matakuliah.create', compact('prodi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $input = $request->validate([
            'kode_mk' => 'required|unique:matakuliah',
            'nama' => 'required|max:100',
            'prodi_id' => 'required|exists:prodi,id'
        ]);

        Matakuliah::create($input);

        return redirect()->route('prodi.index')->with('success', 'Data prodi berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Matakuliah $matakuliah)
    {
        //dd($matakuliah);

        return view('matakuliah.show', compact('matakuliah'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Matakuliah $matakuliah)
    {
        $prodi = Prodi::all();
        //dd($matakuliah);
        return view('matakuliah.edit', compact('matakuliah', 'prodi'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Matakuliah $matakuliah)
    {
        //dd($matakuliah);

        $input = $request->validate([
            'kode_mk' => 'required|unique:matakuliah',
            'nama' => 'required|max:100',
            'prodi_id' => 'required|exists:prodi,id'
        ]);

        $matakuliah->update($input);

        return redirect()->route('matakuliah.index')->with('success', 'Data Matakuliah berhasil ditambahkan!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Matakuliah $matakuliah)
    {
        //dd($matakuliah);
        $matakuliah->delete();

        return redirect()->route('matakuliah.index')->with('success', 'Data Matakuliah berhasil dihapus!');
        //
    }
}
