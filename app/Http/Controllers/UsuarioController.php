<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    public function index(){

        return view('usuarios.index');
    }

    public function create(){
        return view('auth.register');
    }

    public function store(Request $request){
        // $usuario = new User();
        // $usuario->Nombres = $request->Nombres;
        // $usuario->Apellidos = $request->Apellidos;
        // $usuario->correo = $request->correo;
        // $usuario->contraseña = $request->contraseña;
        // $usuario->save();

        // return redirect()->route('usuario.show', compact('usuario'));
        // return redirect()->route('usuario.index', compact('usuario'));
        // view()->share('layouts.UsuarioP', $usuario);
        // return redirect()->route('usuarios.index', $usuario);
        
        $this->validate(request(), [
            'Nombres' => 'required',
            'Apellidos' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        $User = User::create(request(['Nombres', 'Apellidos', 'email', 'password']));


        auth()->login($User);
        return redirect()->to('/');
    }

    // public function show(User $usuario) {
    //     view()->share('layouts.UsuarioP', $usuario);
    //     return view('usuarios.show', compact('usuario'));
    // }
}