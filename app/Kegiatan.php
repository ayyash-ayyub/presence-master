<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $fillable = ['nama_kegiatan', 'tanggal_waktu', 'koordinator', 'slug'];

    public function peserta()
    {
        return $this->hasMany('App\Peserta', 'kegiatan_id', 'id');
    }
}
