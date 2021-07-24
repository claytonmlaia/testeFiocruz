<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipios extends Model
{
    use HasFactory;

    protected $table = 'municipios';
    protected $primaryKey = 'id';
    protected $dates = ['created_at','updated_at'];

    // ligacoes
    public function uf()
    {
        return $this->belongsTo('App\Models\Ufs','ufs_id','id')->withDefault();
    }
}
