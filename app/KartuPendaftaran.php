<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KartuPendaftaran extends Model
{
    protected $fillable = ['kartu_barkode','petugas_kode','peminjam_kode','kartu_tgl_pembuatan','kartu_tgl_akhir','kartu_status_aktif'];
    public $timestamps = true;

    public function peminjam()
    {
        return $this->belongsTo('App\Peminjam','peminjam_kode');
    }

    public function petugas()
    {
        return $this->belongsTo('App\Petugas','petugas_kode');
    }
}
