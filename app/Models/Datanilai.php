<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datanilai extends Model
{
    // use HasFactory;
    protected $table='tb_data_nilai';
    protected $guarded = [];
    protected $primaryKey = 'id_nilai';
    public $timestamps=false;
    protected $keyType = 'string';
    public function Datanilai()
    {
        // lokasi, foreign, primary key
        return $this->belongsTo('App\Models\Datasiswa', 'id_siswa', 'id_siswa');
    }
}
