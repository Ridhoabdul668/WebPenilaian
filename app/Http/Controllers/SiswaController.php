<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth; // Tambahkan ini

class SiswaController extends Controller
{
    public function index()
    {
        $data_siswa = Siswa::all()->map(function ($siswa) {
            $siswa->jenis_kelamin = $siswa->jenis_kelamin == 'P' ? 'Perempuan' : 'Laki-Laki';
            return $siswa;
        });

        return view('siswa.index', compact('data_siswa'));
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:L,P',
            'agama' => 'required|string',
            'alamat' => 'required|string',
            'nilai_harian' => 'required|numeric',
            'ulangan_1' => 'required|numeric',
            'ulangan_2' => 'required|numeric',
            'nilai_akhir_semester' => 'required|numeric',
        ]);

        $rata_rata = (
            ($request->nilai_harian * 0.2) +
            ($request->ulangan_1 * 0.2) +
            ($request->ulangan_2 * 0.2) +
            ($request->nilai_akhir_semester * 0.4)
        );

        Siswa::create([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'nilai_harian' => $request->nilai_harian,
            'ulangan_1' => $request->ulangan_1,
            'ulangan_2' => $request->ulangan_2,
            'nilai_akhir_semester' => $request->nilai_akhir_semester,
            'rata_rata' => $rata_rata,
        ]);

        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:L,P',
            'agama' => 'required|string',
            'alamat' => 'required|string',
            'nilai_harian' => 'required|numeric',
            'ulangan_1' => 'required|numeric',
            'ulangan_2' => 'required|numeric',
            'nilai_akhir_semester' => 'required|numeric',
        ]);

        $rata_rata = (
            ($request->nilai_harian * 0.2) +
            ($request->ulangan_1 * 0.2) +
            ($request->ulangan_2 * 0.2) +
            ($request->nilai_akhir_semester * 0.4)
        );

        $siswa = Siswa::findOrFail($id);
        $siswa->update([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'nilai_harian' => $request->nilai_harian,
            'ulangan_1' => $request->ulangan_1,
            'ulangan_2' => $request->ulangan_2,
            'nilai_akhir_semester' => $request->nilai_akhir_semester,
            'rata_rata' => $rata_rata,
        ]);

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil dihapus!');
    }
} 


