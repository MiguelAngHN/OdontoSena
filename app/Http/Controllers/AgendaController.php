<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Adenda;
use App\Models\odontologo;
use App\Models\User;


class AgendaController extends Controller
{
    public function index(){

    }

    public function create(){
        return view('Agenda');
    }

    public function store(Request $request){
        
        $Error = Adenda::where('identificacion', request('identificacion'))
        ->orWhere('email', request('email'))
        ->exists();

        if ($Error) {
            return back()->withErrors([
                'error' => 'La identificacion y correo son incorrectos'
            ]);
        }

        // $Cita = Adenda::create(request(['Nombres', 'Apellidos', 'identificacion', 'email']));
        // return redirect()->to('/')->with('AlertaAgenda', 'Reserva exitosa');

        $cita = new Adenda(request(['Nombres', 'Apellidos', 'identificacion', 'email','odontologo_id']));
        $cita->user_id = Auth::id();

        $cita->odontologo_id = $request->odontologo_id;
        
        $cita->save();

        return redirect()->to('/')->with('AlertaAgenda', 'Reserva exitosa');
    }

    public function show()
{
    $reservas = Adenda::all();
    return view('reservas', ['reservas' => $reservas]);
}
    
}