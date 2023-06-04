<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekstrakulikuler extends Model
{
    // use HasFactory;
    protected $table='tb_ekstrakulikuler';
    protected $guarded = [];
    protected $primaryKey = 'id_ekstrakulikuler';
    public $timestamps=false;
    protected $keyType = 'string';
    public function Ekstrakulikuler()
    {
        // lokasi, foreign, primary key
        return $this->belongsTo('App\Models\Datasiswa', 'id_siswa', 'id_siswa');
    }
}
