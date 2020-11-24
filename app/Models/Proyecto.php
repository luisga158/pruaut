<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'content', 'estado', 'autor', 'participantes'
    ];
    protected $hidden = [
        'id', 'user_id',
    ];
}
