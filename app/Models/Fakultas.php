<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    protected $table = 'fakultas';
    protected $fillable = [
        'nama_fakultas',
        'tanggal_awal_photoshoot',
        'tanggal_akhir_photoshoot'
    ];

    public function pendaftaran()
    {
        return $this->hasMany('App\Models\Pendaftaran');
    }
}
