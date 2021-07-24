<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ufs extends Model
{
    use HasFactory;

    protected $table = 'ufs';
    protected $primaryKey = 'id';
    protected $dates = ['created_at','updated_at'];

}
