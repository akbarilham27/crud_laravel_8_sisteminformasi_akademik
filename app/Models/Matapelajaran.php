<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matapelajaran extends Model
{
    // use HasFactory;
    protected $table='tb_matapelajaran';
    protected $guarded = [];
    protected $primaryKey = 'id_pelajaran';
    public $timestamps=false;
    protected $keyType = 'string';
    public function Matapelajaran()
    {
        // lokasi, foreign, primary key
        return $this->belongsTo('App\Models\Dataguru', 'id_guru', 'id_guru');
    }
}
