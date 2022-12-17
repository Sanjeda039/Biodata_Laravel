<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class skillModel extends Model
{
    protected $table='skill_models';
    protected $fillable = ['name','type','percant'];
}
