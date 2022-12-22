<?php

namespace App\Models;

use Illumunate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;
    protected $fillable = ['nome'];

    public function seasons()
    {
        return $this->hasMany(season::class, 'series_id');
    }

}
