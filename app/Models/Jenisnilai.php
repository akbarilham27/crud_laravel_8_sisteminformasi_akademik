<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenisnilai extends Model
{
    // use HasFactory;
    protected $table='tb_jenisnilai';
    protected $guarded = [];
    protected $primaryKey = 'siswa';
    public $timestamps=false;
    protected $keyType = 'string';
    public function Jenisnilai()
    {
        // lokasi, foreign, primary key
        return $this->belongsTo('App\Models\Datasiswa', 'id_siswa', 'id_siswa');
    }
}
