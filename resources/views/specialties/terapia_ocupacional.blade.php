@extends('layouts.base')

@section('title', 'Terapia Ocupacional')

@section('metadata')
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="author" content="" />

    <meta name="robots" content="index,follow" />
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-3 p-3">
            <img src="{{ asset('images/specialties/terapia_ocupacional.jpg')}}" class="img-fluid" />
        </div>
        <div class="col-12 col-md-9 p-3">
            <h3>Terapia Ocupacional</h3>
            <p>La Terapia Ocupacional (TO) es una disciplina orientada al proceso de rehabilitación de niños, niñas y adolescentes con discapacidades físicas, sensoriales o cognitivas. Este proceso se basa en la prevención y promoción para mejorar su calidad de vida, brindar un acompañamiento a las familias y a los pacientes, con el fin de entregar herramientas básicas de aprendizaje, potenciar el desarrollo de nuevas destrezas y habilidades, fomentar su participación ocupacional y el desarrollo de actividades de la vida cotidiana, esto les permitirá mayor independencia y autonomía en su entorno personal, familiar y social.</p>
            <a class="btn btn-info text-white" data-bs-toggle="collapse" href="#infantoJuvenil" role="button" aria-expanded="false" aria-controls="infantoJuvenil">
                Infanto Juvenil
            </a>
        </div>
        <div class="col-12 collapse" id="infantoJuvenil">
            <div class="card card-body mb-4">
                <h4>Infanto Juvenil</h4>
                <p>En Cistem contamos con profesionales con formación y amplia experiencia en el área infanto juvenil, así como el trabajo dentro de equipos interdisciplinarios, logrando así un enfoque integral de la terapia basada en promover el mayor grado de inclusión de nuestros pacientes, para alcanzar un equilibrio en sus actividades y entregar herramientas necesarias para se puedan desenvolver de manera integral en cualquier ambiente.</p>
   	            <p>Los Terapeutas Ocupacionales trabajan con los niños, sus familias y contextos educativos, entregando los apoyos requeridos de acuerdo a sus necesidades, interviniendo en:</p>
                   <ul>
                    <li>Trastorno del espectro autista</li>
                    <li>Trastorno de déficit atencional con hiperactividad</li>
                    <li>Hipoacusia</li>
                    <li>Retrasos en el desarrollo psicomotor</li>
                    <li>Dificultades en la integración sensorial</li>
                   </ul>
            </div>
        </div>
        @include('specialties.professionals')
    </div>
</div>
@endsection