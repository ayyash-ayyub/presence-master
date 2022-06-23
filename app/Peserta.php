<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $fillable = ['nama_peserta', 'institusi', 'jabatan','pangkat','email','nohp','ttd', 'kegiatan_id'];

    // bikin relasi untuk ngambil id kegiatan
    public function kegiatan()
    {
        return $this->belongsTo('App\Peserta', 'kegiatan_id', 'id');
    }
}
