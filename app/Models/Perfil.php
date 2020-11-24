<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_name', 'nombres', 'apellidos', 'conocimientos', 'roll', 'roll_name', 'email',
    ];
    protected $hidden = [
        'id',
    ];    
}
