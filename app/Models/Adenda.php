<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\odontologo;

class Adenda extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nombres',
        'Apellidos',      
        'identificacion',
        'email',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function odontologo(){
        return $this->belongsTo(odontologo::class);
    }
}
