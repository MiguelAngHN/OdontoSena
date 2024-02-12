@extends('layouts.app')

@section('title', 'Home')
    
@section('content')

@if (session('AlertaAgenda'))
<div class="alert alert-success alert-dismissible fade show text-center my-2" role="alert" style="width: 60%; margin:0 auto;">
  <strong>{{ session('AlertaAgenda') }}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
  @endif

<div class="Enunciado1">
    <h2>Lorem ipsum dolor sit amet elit..</h2>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam, dolorum niahet dignissimos.</p>
    <a href="{{route('Agendar.create')}}">Agendar una cita</a>
</div>



<div class="Enunciado2">
    <h2>Haz parte de nosotros</h2>
    <hr noshade="" class="line1">
    <p>Lorem ipsum dolor sit amet adipisicing elit. Necessitatibus, laboriosam . Quidem 
        sunt porro tempore quibusdam laudantium excepturi, in maiores
         consequatur accusantium necessitatibus, repellat natus? Fuga delectus  veniam
          doloribus. Ratione dolorem mollitia optio odio ex!
           Facere sapiente officiis harum a molestiae veritatis placeat fugit alias dolor 
            vel aliquam nulla debitis ab, numquam amet   ad doloremque, eius ipsum qleam
             voluptate.</p>
</div>

<div class="d-flex justify-content-around my-5 flex-wrap">
    <div class="card my-2 text-center card-index" style="width: 18rem;">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#0194d0" class="bi bi-award-fill" viewBox="0 0 16 16" style="margin: 10px auto;">
            <path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864z"/>
            <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1z"/>
          </svg>
        <div class="card-body">
          <h5 class="card-title">Tratamientos dentales</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="{{route('Servicios')}}" class="btn" style="background-color: #01d09e">Ver más</a>
        </div>
      </div>
      <div class="card my-2 text-center card-index" style="width: 18rem;">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#0194d0" class="bi bi-telephone-fill" viewBox="0 0 16 16" style="margin: 10px auto;">
            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
          </svg>
        <div class="card-body">
          <h5 class="card-title">Reserva tu cita</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="{{route ('Agendar.create')}}" class="btn" style="background-color: #01d09e">Ver más</a>
        </div>
      </div>
      <div class="card my-2 text-center card-index" style="width: 18rem;">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#0194d0" class="bi bi-person-lines-fill" viewBox="0 0 16 16" style="margin: 10px auto;">
            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z"/>
          </svg>
        <div class="card-body">
          <h5 class="card-title">Acerca de nosotros</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn" style="background-color: #01d09e">Ver más</a>
        </div>
      </div>
</div>
    
@endsection