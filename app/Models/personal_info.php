<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personal_info extends Model
{
    protected $table='personal_infos';
    protected $fillable = ['name','email','phone','img','designation', 'birthdate','me', 'address' , 'skype','fb', 'linkedin'];
}
