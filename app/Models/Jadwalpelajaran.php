<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwalpelajaran extends Model
{
    // use HasFactory;
    protected $table='tb_jadwal_pelajaran';
    protected $guarded = [];
    protected $primaryKey = 'id_jadwal';
    // public $timestamps=false;
    protected $keyType = 'string';
}
