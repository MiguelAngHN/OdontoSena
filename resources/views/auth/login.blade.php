<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/Forms.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Login SENA Sonríe- WEB </title>
</head>
<body>

<h2 class="text-3xl text-center py-3" style="color:#0194d0; font-weight:700;">Login</h2>
<form action="" method="POST" enctype="multipart/form-data">

    @csrf
    {{-- <label>
        Nombres:
        <br>
        <input type="text" name="Nombres" class=" border border-gray-200 rounded-md bg-gray-200 w-full tex-lg placeholder-gray-900 p-2 my-2 focus:bg-white">
    </label>
    <label>
        Apellidos:
        <br>
        <input type="text" name="Apellidos" class=" border border-gray-200 rounded-md bg-gray-200 w-full tex-lg placeholder-gray-900 p-2 my-2 focus:bg-white">
    </label>
    <br> --}}
    {{-- <label>
        Identificación:
        <br>
        <input type="email" name="correo" class=" border border-gray-200 rounded-md bg-gray-200 w-full tex-lg placeholder-gray-900 p-2 my-2 focus:bg-white">
    </label> --}}
    <label>
        Correo:
        <br>
        <input type="email" name="email" class=" border border-gray-200 rounded-md bg-gray-200 w-full tex-lg placeholder-gray-900 p-2 my-1 focus:bg-white">
    </label>
    <label>
        Contraseña:
        <br>
        <input type="password" name="password" class=" border border-gray-200 rounded-md bg-gray-200 w-full tex-lg placeholder-gray-900 p-2 my-1 focus:bg-white">
    </label>

    @error('message')
    <p class="border p-2 my-2" style="width: 75%; background-color: rgba(255, 0, 0, 0.6); border-radius: 10px;"">
    {{$message}}</p>
    @enderror  
    <span class="line-form"></span>
    <div class="OpcionesLogin">
        {{-- <a href="{{route('login.index')}}">Ya tengo una cuenta</a> --}}
        <a href="#">¿Olvidaste tu Contraseña?</a>
    </div>
    <button type="submit" class="Form-submit">Enviar</button>

</form>
    
</body>
</html>

