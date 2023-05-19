<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
    ];


    Public function user() : BelongsTo
    {
        return $this->belongsTo(user::class);
    }
}
