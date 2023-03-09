@extends('layouts.base')

@section('title', 'Fonoaudiología')

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
            <img src="{{ asset('images/specialties/fonoaudiologia.jpg')}}" class="img-fluid" />
            
        </div>
        <div class="col-12 col-md-9 p-3">
            <h3>Fonoaudiología</h3>
            <p>La Fonoaudiología es una especialidad que se centra la prevención, evaluación, diagnóstico y rehabilitación de personas con dificultades o trastornos en habla, lenguaje, deglución, cognición, audición y voz, que han sido afectadas por distintos factores tales como trastornos, accidentes o deterioros propios de la edad.</p>
            <p>En Cistem contamos con profesionales de amplia experiencia en el área infanto juvenil, adultos y adultos mayores tanto en el ámbito clínico como educativo, así como el trabajo dentro de equipos interdisciplinarios, para lograr así un enfoque integral de la terapia.</p>
            <a class="btn btn-info text-white" data-bs-toggle="collapse" href="#infantoJuvenil" role="button" aria-expanded="false" aria-controls="infantoJuvenil">
                Infanto Juvenil
            </a>
            <a class="btn btn-info text-white" data-bs-toggle="collapse" href="#adultos" role="button" aria-expanded="false" aria-controls="adultos">
                Adultos y Adultos Mayores
            </a>
        </div>
        <div class="col-12 collapse" id="infantoJuvenil">
            <div class="card card-body mb-4">
                <h4>Infanto Juvenil</h4>
                <p>Nuestras profesionales del área son las encargadas de diagnosticar e intervenir trastornos del desarrollo del lenguaje, de la articulación y fluidez del habla, así como trastornos del lenguaje de origen neurológico y trastornos de la comunicación asociados a trastornos del espectro autista entre otros y tienen como objetivo rehabilitar las patologías asociadas al área lingüística, abordando las diversas alteraciones que se despliegan dentro de esta disciplina, como el lenguaje oral, la voz, la audición y alteraciones en el habla y lenguaje, entre otras tales como:</p>
                <ul>
                    <li>Trastorno del desarrollo del lenguaje (TDL)</li>
                    <li>Trastorno de los sonidos del habla (TSH)</li>
                    <li>Tartamudez</li>
                    <li>Trastornos del lenguaje y la comunicación, asociados a TEA, DI y otras patologías</li>
                </ul>
            </div>
        </div>
        <div class="col-12 collapse" id="adultos">
            <div class="card card-body mb-4">
                <h4>Adultos</h4>
                <p>En esta área adulta nos enfocamos en la evaluación, diagnóstico y tratamiento en los trastornos de la comunicación humana que se presentan a través de diferentes patologías como alteración en la voz, habla, lenguaje o audición.</p>
                <p>En el caso de los adultos mayores son las encargadas de diagnosticar e intervenir terapéuticamente en distintos cuadros médicos vinculados a la población adulta mayor, en ambos casos su objetivo de reactivar funciones perdidas por alguna patología, o mantener un rendimiento en base a la condición de salud.</p>
                <ul>
                    <li>Evaluación clínica y tratamiento de la deglución.</li>
                    <li>Evaluación y rehabilitación de Trastornos de lenguaje asociados a lesiones cerebrales como Tratamiento de Afasias.</li>
                    <li>Evaluación y rehabilitación de trastornos de habla asociados a lesiones cerebrales: Tratamiento de Disartrias y trastornos en la fluidez.</li>
                    <li>Estimulación y rehabilitación cognitiva- comunicativa.</li>
                    <li>Evaluación y tratamiento de voz en pacientes con disfonía, alteraciones asociadas a patologías neurológicas y secuelas post-COVID 19.</li>
                    <li>Evaluación y servicios auditivos: otoscopia y limpieza y/o lavado de oídos.</li>
                </ul>
            </div>
        </div>
        @include('specialties.professionals')
    </div>
</div>
@endsection