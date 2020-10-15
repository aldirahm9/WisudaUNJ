<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $table = 'pendaftaran';
    protected $fillable = [
        'kode_unik','user_id','fakultas_id','slot_id','nama_mahasiswa'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function fakultas()
    {
        return $this->belongsTo('App\Models\Fakultas');
    }

    public function slot()
    {
        return $this->belongsTo('App\Models\Slot');
    }
}
