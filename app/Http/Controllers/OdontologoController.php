<?php

namespace App\Http\Controllers;

use App\Models\Adenda;
use App\Models\odontologo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OdontologoController extends Controller
{
    public function create(){
        return view('Odontologo');
    }

    public function store() {
        $odontologo = New odontologo(request(['Nombres', 'Apellidos', 'Area']));
        $odontologo->save();

        $odontologos = odontologo::all();
        session(['odontologos' => $odontologos]);

        return redirect()->to('/');
    }

    // public function show()
    // {
    //     $odontologos = odontologo::all();
    //     return view('Agenda', ['odontologos' => $odontologos]);
    // }
}
