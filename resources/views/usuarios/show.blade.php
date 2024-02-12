@extends('layouts.UsuarioP')

@section('bodys')

<h1>Pagina SHOW de usuarios</h1>
<br><br>

<span>
        {{$usuario->Nombres}} {{$usuario->Apellidos}}
</span>
    
@endsection