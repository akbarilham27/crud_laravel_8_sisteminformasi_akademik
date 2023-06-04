<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tahunajaran extends Model
{
    // use HasFactory;
    protected $table='tb_tahunajaran';
    protected $guarded = [];
    protected $primaryKey = 'id_tahun';
    public $timestamps=false;
    protected $keyType = 'string';
    
}
