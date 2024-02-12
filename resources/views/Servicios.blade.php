@extends('layouts.app')

@section('title', 'Servicios')

@section('content')

<div class="Enunciado2">
    <h2>Nuestros servicios</h2>
    <hr noshade="" class="line1">
    <p>Ofrecemos nuestros servicios especializados en la especialidad de la odontología,
      para brindar tratamientos y servicios especialiados con nuestro personal profesional
      cada uno en su area como los valoradores y diagnosticos para la examinacion de nuestros
      clientes, area de limpieza y blanqueamiento, ortodoncia, exodoncia, 
    </p>
</div>

<div class="d-flex justify-content-around my-5 flex-wrap">
<div class="card my-2" style="width: 18rem;">
    <img src="https://images.pexels.com/photos/4269362/pexels-photo-4269362.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title my-3">Tratamientos profesionales.</h5>
      <p class="card-text">Tratamientos esteticos y saludables para una sonrisa mejorada, te atendemos con profesionales en el area.</p>
    </div>
  </div>

  <div class="card my-2" style="width: 18rem;">
    <img src="https://images.pexels.com/photos/6502033/pexels-photo-6502033.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title my-3">Radiografias y Examenes.</h5>
      <p class="card-text">Te hacemos una revisión para darte una valoración precisa, como tambien examenes dentales.</p>
    </div>
  </div>

  <div class="card my-2" style="width: 18rem;">
    <img src="https://images.pexels.com/photos/6502543/pexels-photo-6502543.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title my-3">Ortodoncia y Exodoncia.</h5>
      <p class="card-text">Ofrecemos servicios de Ortodoncia tradicional o invisible. Exodoncias para clientes menores de edad y mayores.</p>
    </div>
  </div>
  <div class="card my-2" style="width: 18rem;">
    <img src="https://images.pexels.com/photos/6627722/pexels-photo-6627722.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title my-3">Blanqueamientos y Limpieza general.</h5>
      <p class="card-text">Una sonrisa limpia y brillante para nuestros clientes, esto posible con nuestros tratamientos.</p>
    </div>
  </div>
</div>   

@endsection
    