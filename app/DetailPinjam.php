<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPinjam extends Model
{
    protected $fillable = ['peminjaman_kode','buku_kode','detail_tgl_kembali','detail_denda','detail_status_kembali'];
    public $timestamps = true;

    public function peminjaman()
    {
        return $this->belongsTo('App\Peminjaman','peminjaman_kode');
    }
    public function buku()
    {
        return $this->belongsTo('App\Buku','buku_kode');
    }   
}
