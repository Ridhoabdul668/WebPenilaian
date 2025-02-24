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
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'jenis_kelamin' => 'required',
            'agama' => 'required|string|max:50',
            'alamat' => 'required|string|max:500',
        ]);

        // Simpan data siswa
        Siswa::create($request->all());

        return redirect('/siswa')->with('success', 'Data siswa berhasil ditambahkan.');
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
