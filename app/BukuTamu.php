<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BukuTamu extends Model
{
    //
    protected $table = "table_bukutam";
    protected $fillable = [
        'kehadiran',
        'id_mhs'
    ];

    public function mahasiswa()
    {
        return $this->belongsTo('App\Mhs', 'id_mhs');
    }
}
