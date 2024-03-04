<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Adenda;

class odontologo extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nombres',
        'Apellidos',      
        'Area',
    ];
 
    public function citas()
    {
        return $this->hasMany(Adenda::class);
    }
}
