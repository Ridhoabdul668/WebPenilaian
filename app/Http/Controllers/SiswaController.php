<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Menampilkan daftar siswa.
     */
    public function index()
    {
        $data_siswa = Siswa::all();
        return view('siswa.index', compact('data_siswa'));
    }

    /**
     * Menyimpan data siswa ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jenis_kelamin' => 'required',
            'agama' => 'required|string|max:50',
            'alamat' => 'required|string|max:500',
        ]);

        Siswa::create($request->all());

        return redirect('/siswa')->with('success', 'Data siswa berhasil ditambahkan.');
    }

    /**
     * Mengambil data siswa untuk diedit.
     */
    public function edit($id)
{
    $siswa = Siswa::findOrFail($id);
    return response()->json($siswa);
}

    /**
     * Memperbarui data siswa.
     */
    public function update(Request $request, $id)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'jenis_kelamin' => 'required',
        'agama' => 'required|string|max:50',
        'alamat' => 'required|string|max:500',
    ]);

    $siswa = Siswa::findOrFail($id);
    $siswa->update([
        'nama' => $request->nama,
        'jenis_kelamin' => $request->jenis_kelamin,
        'agama' => $request->agama,
        'alamat' => $request->alamat,
    ]);

    return redirect('/siswa')->with('success', 'Data siswa berhasil diperbarui.');
}


    /**
     * Menghapus data siswa.
     */
    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();

        return redirect('/siswa')->with('success', 'Data siswa berhasil dihapus.');
    }
}
