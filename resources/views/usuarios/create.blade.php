@extends('layouts.UsuarioP')

@section('bodys')
<br><br>

    <h1 class="text-3xl text-center font-bold">Crear usuario</h1>
    <form action="{{route('usuarios.store')}}" method="POST" enctype="multipart/form-data" class="mt-4">
    
        @csrf
        <label>
            Nombres:
            <br>
            <input type="text" name="Nombres" class=" border border-gray-200 rounded-md bg-gray-200 w-full tex-lg placeholder-gray-900 p-2 my-2 focus:bg-white">
        </label>
        <label>
            Apellidos:
            <br>
            <input type="text" name="Apellidos" class=" border border-gray-200 rounded-md bg-gray-200 w-full tex-lg placeholder-gray-900 p-2 my-2 focus:bg-white">
        </label>
        <br>
        {{-- <label>
            Identificación:
            <br>
            <input type="email" name="correo" class=" border border-gray-200 rounded-md bg-gray-200 w-full tex-lg placeholder-gray-900 p-2 my-2 focus:bg-white">
        </label> --}}
        <label>
            Correo:
            <br>
            <input type="email" name="correo" class=" border border-gray-200 rounded-md bg-gray-200 w-full tex-lg placeholder-gray-900 p-2 my-2 focus:bg-white">
        </label>
        <br>
        <label>
            Contraseña:
            <br>
            <input type="password" name="contraseña" class=" border border-gray-200 rounded-md bg-gray-200 w-full tex-lg placeholder-gray-900 p-2 my-2 focus:bg-white">
        </label>
        <br>
    
        
        <br><br>
        <button type="submit" class="font-semibold hover:bg-indigo-700 py-2 px-3 rounded-md border-2 hover:bg-red">Enviar</button>
    
    </form>
    
@endsection