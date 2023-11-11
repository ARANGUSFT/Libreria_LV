<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// Se importa 
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Books extends Model
{
    use HasFactory;

      
    protected $fillable = [
        'tittle',
        'category',
        'pages',
        'description'
    ];

    // Esto permite relacionar las tareas creadas al usuario
    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }
    
}
