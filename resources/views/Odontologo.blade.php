<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/Forms.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Odontologo SENA Sonríe - WEB </title>
</head>
<body>

<h2 class="text-3xl text-center py-3" style="color:#0194d0; font-weight:700;">Crear odontologo</h2>
<form action="" method="POST" enctype="multipart/form-data">

    @csrf
    <label>
        Nombres:
        <br>
        <input type="text" name="Nombres" class=" border border-gray-200 rounded-md bg-gray-200 w-full tex-lg placeholder-gray-900 p-2 my-1 focus:bg-white" required>
    </label>
    <label>
        Apellidos:
        <br>
        <input type="text" name="Apellidos" class=" border border-gray-200 rounded-md bg-gray-200 w-full tex-lg placeholder-gray-900 p-2 my-1 focus:bg-white" required>
    </label>
    <label>
        Area:
        <br>
        <select name="Area" style="width: 200px" class="border border-gray-200 rounded-md bg-gray-200 w-full tex-lg placeholder-gray-900 p-2 my-2 focus:bg-white" required>
        <option value="Limpieza">Limpieza</option>
        <option value="Ortodoncia">Ortodoncia</option>
        <option value="Valoración">Valoración</option>
        </select>
    </label>
    
    <span class="line-form"></span>
    <button type="submit" class="Form-submit">Enviar</button>

</form>

</body>
</html>