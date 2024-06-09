<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resever extends Model
{
    use HasFactory;

    protected $fillable = ['nameVoiture','name','prenom','telephone','email','carteNationale','date_debut','date_fin'];

}
