<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mhs extends Model
{
    //
    protected $table ="table_wisudawan";
    
    protected $fillable = [
        'npm',
        'nama',
        'fakultas',
        'prodi',
        'barcode',
        'status',
        'tahun'
    ];

    public function bukuTamu(){
        return $this->hasOne('App\BukuTamu');
    }
}
