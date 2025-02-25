<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';

    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'agama',
        'alamat',
        'nilai_harian',
        'ulangan_1',
        'ulangan_2',
        'nilai_akhir_semester',
        'rata_rata',
    ];




    // Hitung rata-rata nilai siswa
    public function getRataRataAttribute()
    {
        return (
            ($this->nilai_harian * 0.2) +
            ($this->ulangan_1 * 0.2) +
            ($this->ulangan_2 * 0.2) +
            ($this->nilai_akhir_semester * 0.4)
        );
    }
}
