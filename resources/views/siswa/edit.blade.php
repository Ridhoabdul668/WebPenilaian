@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Data Siswa</h2>

    <form method="POST" action="{{ route('siswa.update', $siswa->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input name="nama" type="text" class="form-control" id="nama" value="{{ $siswa->nama }}" required>
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select name="jenis_kelamin" id="jenis_kelamin" class="form-select">
                <option value="L" {{ $siswa->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-Laki</option>
                <option value="P" {{ $siswa->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="agama" class="form-label">Agama</label>
            <input name="agama" type="text" class="form-control" id="agama" value="{{ $siswa->agama }}" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea name="alamat" class="form-control" id="alamat" rows="3">{{ $siswa->alamat }}</textarea>
        </div>
        <div class="mb-3">
            <label for="nilai_harian" class="form-label">Nilai Harian</label>
            <input name="nilai_harian" type="number" class="form-control" id="nilai_harian" value="{{ $siswa->nilai_harian }}" required>
        </div>
        <div class="mb-3">
            <label for="ulangan_1" class="form-label">Ulangan Harian 1</label>
            <input name="ulangan_1" type="number" class="form-control" id="ulangan_1" value="{{ $siswa->ulangan_1 }}" required>
        </div>
        <div class="mb-3">
            <label for="ulangan_2" class="form-label">Ulangan Harian 2</label>
            <input name="ulangan_2" type="number" class="form-control" id="ulangan_2" value="{{ $siswa->ulangan_2 }}" required>
        </div>
        <div class="mb-3">
            <label for="nilai_akhir_semester" class="form-label">Nilai Akhir Semester</label>
            <input name="nilai_akhir_semester" type="number" class="form-control" id="nilai_akhir_semester" value="{{ $siswa->nilai_akhir_semester }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>
@endsection
