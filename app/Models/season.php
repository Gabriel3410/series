<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class season extends Model
{
    use HasFactory;

    public function series()
    {
        return $this->belongsTo(Serie::class);
    }

    public function episodes()
    {       
        return $this->hasMany(Episode::class);
    }
}
