<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datakelas extends Model
{
    // use HasFactory;
    protected $table='tb_data_kelas';
    protected $guarded = [];
    protected $primaryKey = 'id_kelas';
    public $timestamps=false;
    protected $keyType = 'string';
}
