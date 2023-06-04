<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datawalimurid extends Model
{
    // use HasFactory;
    protected $table = 'tb_data_walimurid';
    protected $guarded = [];
    protected $primaryKey = 'id_wali';
    public $timestamps = false;
    protected $keyType = 'string';
    public function Datawalimurid()
    {
        // lokasi, foreign, primary key
        return $this->belongsTo('App\Models\Datasiswa', 'id_siswa', 'id_siswa');
    }
    
}
