<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class utilisateur extends Model
{
    public $table='utilisateur';
    public $timestamps=false;
    use HasFactory;
}
