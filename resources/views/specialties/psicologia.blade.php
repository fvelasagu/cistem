@extends('layouts.base')

@section('title', 'Psicología')

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
            <img src="{{ asset('images/specialties/psicologia.jpg')}}" class="img-fluid" />
        </div>
        <div class="col-12 col-md-9 p-3">
            <h3>Psicología</h3>
            <p>La Psicología Clínica como rama de la Psicología, se dedica al estudio y comprensión de la conducta y a ayudar a personas que tienen problemas psicológicos o de salud mental. Más específicamente, la Psicología Clínica hace evaluación, diagnóstico, prevención e intervención terapéutica en niños, niñas, adolescentes, adultos y adultos mayores que padecen alguna afectación o trastorno mental, con el objetivo de encontrar el bienestar y equilibrio psicológico.</p>
            <p>Psicólogo Clínico tiene como objetivo el desarrollo y la aplicación de principios teóricos, métodos e instrumentos para observar, comprender, predecir, explicar, prevenir y tratar todo tipo de trastornos mentales, alteraciones y trastornos cognitivos, emocionales y de la conducta.</p>
            <a class="btn btn-info text-white" data-bs-toggle="collapse" href="#infantoJuvenil" role="button" aria-expanded="false" aria-controls="infantoJuvenil">
                Infanto Juvenil
            </a>
            <a class="btn btn-info text-white" data-bs-toggle="collapse" href="#adultos" role="button" aria-expanded="false" aria-controls="adultos">
                Adultos y Adultos Mayores
            </a>
         </p>
        </div>
        <div class="col-12 collapse" id="infantoJuvenil">
            <div class="card card-body mb-4">
                <h4>Infanto Juvenil</h4>
                <p>En Cistem nuestras profesionales están encargadas de evaluar, diagnosticar, prevenir e intervenir terapéuticamente de forma detallada el comportamiento de niños, niñas y adolescentes, enfocándose en diversos aspectos como el desarrollo cognitivo, afectivo y social con el objetivo de potenciar al máximo los procesos de cambio.</p>
                <p>Nuestras especialistas en esta área ofrecen una terapia psicológica integral y personalizada, principalmente en las siguientes problemáticas y trastornos:</p>
                <ul>
                    <li>Problemas y Trastornos de Adaptación (con depresión, ansiedad y/o trastorno de conducta)</li>
                    <li>Problemas y Trastornos de Ansiedad</li>
                    <li>Trastornos del estado del ánimo</li>
                    <li>Problemas y Trastornos de Conducta</li>
                    <li>Problemas académicos y Trastornos del Aprendizaje</li>
                    <li>Trastornos de la eliminación</li>
                    <li>Trastornos de la comunicación</li>
                    <li>Trastornos del sueño</li>
                    <li>Diagnóstico de retraso mental y capacidad diferentes</li>
                    <li>Dependencia emocional</li>
                </ul>
            </div>
        </div>
        <div class="col-12 collapse" id="adultos">
            <div class="card card-body mb-4">
                <h4>Adultos</h4>
                <p>En esta área, en Cistem tenemos como objetivo contribuir de manera integral al desarrollo del bienestar emocional y de la salud mental de los adultos y adultos mayores, ofreciendo terapia psicológica integral enfatizando en la promoción del bienestar emocional, específicamente en las siguientes problemáticas:</p>
                <h5>Adultos</h5>
                <ul>
                    <li>Problemas de pareja</li>
                    <li>Trastornos sexuales</li>
                    <li>Trastornos de adaptación (con depresión, ansiedad y/o trastorno de conducta)</li>
                    <li>Trastornos de ansiedad</li>
                    <li>Trastornos del estado del ánimo</li>
                    <li>Trastornos de la conducta alimentaria</li>
                    <li>Trastornos y personalidad</li>
                </ul>
                <h5>Adultos Mayores</h5>
                <ul>
                    <li>Análisis del estado emocional y del comportamiento del mayor.</li>
                    <li>Evaluación de sus capacidades cognitivas y la mejora o empeoramiento del estado emocional.</li>
                    <li>Terapia familiar o con su cuidador.</li>
                    <li>Trastornos de ansiedad</li>
                    <li>Trastornos del estado del ánimo</li>
                    <li>Trastornos de sueño</li>
                </ul>
            </div>
        </div>
        @include('specialties.professionals')
    </div>
</div>
@endsection