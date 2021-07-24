<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;

    protected $table = 'usuarios';
    protected $primaryKey = 'id';
    protected $dates = ['created_at','updated_at'];

    // ligacoes
    public function uf()
    {
        return $this->belongsTo('App\Models\Ufs','ufs_id','id')->withDefault();
    }
    public function municipio()
    {
        return $this->belongsTo('App\Models\Municipios','municipios_id','id')->withDefault();
    }
    public function escolaridade()
    {
        return $this->belongsTo('App\Models\Escolaridades','escolaridades_id','id')->withDefault();
    }
}
