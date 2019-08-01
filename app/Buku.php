<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $fillable = ['buku_kode','kategori_kode','penerbit_kode','buku_judul','buku_jumhal','buku_diskripsi','buku_pengarang','buku_tahun_terbit'];
    public $timestamps = true;

    public function penerbit()
    {
        return $this->belongsTo('App\Penerbit','penerbit_kode');
    }
    public function kategori()
    {
        return $this->belongsTo('App\Kategori','kategori_kode');
    }
    public function detailpinjam()
    {
        return $this->hasOne('App\DetailPinjam','buku_kode');
    }
}
