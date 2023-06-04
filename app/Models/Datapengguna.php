<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datapengguna extends Model
{
    protected $table='tb_pengguna';
    protected $guarded = [];
    protected $primaryKey = 'id_pengguna';
    public $timestamps=false;
    protected $keyType = 'string';
}
