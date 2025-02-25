@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Siswa</h1>
    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control">
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Agama</label>
            <input type="text" name="agama" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <textarea name="alamat" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Nilai Harian</label>
            <input type="number" name="nilai_harian" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Ulangan Harian 1</label>
            <input type="number" name="ulangan_1" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Ulangan Harian 2</label>
            <input type="number" name="ulangan_2" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Nilai Akhir Semester</label>
            <input type="number" name="nilai_akhir_semester" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
