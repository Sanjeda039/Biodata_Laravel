<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profileModel extends Model
{
    protected $table='portfolio';
    protected $fillable = ['name','country','university', 'college', 'school', 'phone' ,'email', 'birthdate',
    'gender', 'subject', 'hobby', 'me'];
}
