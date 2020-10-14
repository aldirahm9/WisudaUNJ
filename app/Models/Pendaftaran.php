<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $fillable = [
        'kode_unik','user_id','fakultas_id','slot_id'
    ];
}
