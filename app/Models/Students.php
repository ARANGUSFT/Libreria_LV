<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'lastname', 'course', 'gmail', 'book_id'];


    
    //Esto permite acceder al modelo Books para poder cambiar el id que salia por el nombre
    public function book()
    {
        return $this->belongsTo(Books::class);
    }

    

    
}
