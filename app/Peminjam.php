<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjam extends Model
{
    protected $fillable = ['peminjam_kode','peminjam_nama','peminjam_alamat','peminjam_telp','peminjam_foto'];
    public $timestamps = true;

    public function peminjaman()
    {
        return $this->hasOne('App\Peminjaman','peminjaman_kode');
    }

    public function kartupendaftaran()
    {
        return $this->hasOne('App\KartuPendaftaran','peminjam_kode');
    }
}
