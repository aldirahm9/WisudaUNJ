<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
    protected $table = 'slot';
    protected $fillable = [
        'tanggal',
        'kapasitas'
    ];

    public function pendaftaran()
    {
        return $this->hasMany('App\Models\Pendaftaran');
    }

}
