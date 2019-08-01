<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $fillable = ['petugas_kode','petugas_nama'];
    public $timestamps = true;

    public function kartupendaftaran()
    {
        return $this->hasOne('App\KartuPendaftaran','petugas_kode');
    }

    public function peminjaman()
    {
        return $this->hasOne('App\Peminjaman','petugas_kode');
    }
}
