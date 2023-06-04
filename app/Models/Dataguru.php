<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dataguru extends Model
{
    protected $table='tb_guru';
    protected $guarded = [];
    protected $primaryKey = 'id_guru';
    // public $timestamps=false;
    protected $keyType = 'string';
}
