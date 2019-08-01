<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillable = ['kategori_kode','kategori_nama'];
    public $timestamps = true;

    public function buku()
    {
        return $this->hasOne('App/Buku','kategori_kode');
    }
}
