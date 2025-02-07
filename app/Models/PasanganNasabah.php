<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasanganNasabah extends Model
{
    protected $fillable = [
        'nasabah_id', 'nama', 'nomor_telepon', 'alamat', 'jenis_kelamin',
        'agama', 'tempat_lahir', 'tanggal_lahir', 'pekerjaan',
        'alamat_pekerjaan', 'estimasi_penghasilan_bulanan'
    ];

    protected $table = 'pasangan_nasabah';

    public function nasabah()
    {
        return $this->belongsTo(Nasabah::class);
    }
}
