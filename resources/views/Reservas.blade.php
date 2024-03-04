<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/Reservas.css')}}">
    <link rel="stylesheet" href="{{ asset('css/Forms.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Login SENA Sonríe- WEB </title>
</head>
<body>

<div class="d-flex justify-content-between m-5">
<h2 class="text-justify" style="color:#0194d0; font-weight:700;">Reservas</h2>
<a class="btn btn-primary" href="{{route('Agendar.create')}}" role="button" style="background-color: #01d09e; border: 2px solid #01d09e">Hacer una reserva</a>
</div>
    @foreach ($reservas as $reserva)
    <div class="Datos">
            <span><strong>Nombres:</strong> {{ $reserva->Nombres }}</span>
            <span><strong>Apellidos:</strong> {{ $reserva->Apellidos }}</span>
            <span><strong>Identificación:</strong> {{ $reserva->Identificacion }}</span>
            <span><strong>Email:</strong> {{ $reserva->email }}</span>
            <span><strong>Odontologo:</strong> {{ $reserva->odontologo->Nombres}} {{ $reserva->odontologo->Apellidos}} ({{ $reserva->odontologo->Area}})</span>
    </div>

    @endforeach
</body>
</html>
