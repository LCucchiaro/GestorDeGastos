<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class gasto extends Model
{
    use HasFactory;

    protected $fillable = [
        'descripcion',
        'monto',
        'fecha',
        'establecimiento',
        'efectivo',
        
    ];

    Public function categoria() : BelongsTo
    {
        return $this->belongsTo(categoria::class);
    }

Public function user() : BelongsTo
{
    return $this->belongsTo(user::class);
}




}
