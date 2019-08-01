<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penerbit extends Model
{
    protected $fillable = ['penerbit_kode','penerbit_nama','penerbit_alamat','penerbit_telp'];
    public $timestamps = true;

    public function buku()
    {
        return $this->hasOne('App\Buku','penerbit_kode');
    }
}
