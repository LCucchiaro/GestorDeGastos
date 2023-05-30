<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
