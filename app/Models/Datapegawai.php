<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datapegawai extends Model
{
    // use HasFactory;
    
    protected $table='tb_datapegawai';
    protected $guarded = [];
    protected $primaryKey = 'id_admin';
    public $timestamps=false;
    protected $keyType = 'string';
    
}
