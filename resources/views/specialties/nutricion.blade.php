@extends('layouts.base')

@section('title', 'Nutrición')

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
            <img src="{{ asset('images/specialties/nutricion.jpg')}}" class="img-fluid" />
        </div>
        <div class="col-12 col-md-9 p-3">
            <h3>Nutrición</h3>
            <p>Neuropsicología es una rama de la Neurociencia que estudia las relaciones entre el cerebro y la conducta tanto en sujetos sanos como en los que han sufrido algún tipo de daño cerebral. Los objetivos de la evaluación neuropsicológica se centran en las necesidades de tratamiento de aquellas personas afectadas por diferentes alteraciones en las funciones cerebrales superiores.</p>
            <p>Nuestra profesional Neuropsicóloga, es una psicóloga especializada en evaluación de las capacidades cognitivas (atención, lenguaje, memoria, percepción, praxias, funciones ejecutivas y emoción) y los componentes que hay dentro de ellas. Su trabajo le permitirá saber qué aspectos concretos están fallando y cuales están bien en un niño, adolescente, adulto y adulto mayor, para poder plantear así un programa de rehabilitación y poder trabajar para mejorar aquellas cosas que se han quedado dañadas o no se han desarrollado a los niveles esperables para la edad, como, por ejemplo:</p>
            <ul>
                <li>Daño adquirido, patología o lesiones cerebrales como Accidentes Cerebrovasculares ACV, Traumatismos Craneoencefálicos TEC, Tumores e Infecciones del Sistema Nervioso, Epilepsia).</li>
                <li>Trastornos neurodegenerativos como Demencias tipo Alzheimer o Demencias Vasculares, Enfermedad del Parkinson.</li>
                <li>Trastornos del neurodesarrollo como Trastorno del Espectro Autista TEA, Trastorno por Déficit Atencional con Hiperactividad TDAH, Discapacidad Intelectual y Trastornos Específicos del Aprendizaje como dislexia, disgrafía o discalculia etc.</li>
            </ul>
            <p>Esta evaluación neuropsicológica permitirá entregar información necesaria para el tratamiento no solo cognitivo sino fonoaudiológico, kinesiológico, psicológico, de terapia ocupacional y de otras áreas profesionales.</p>
        </div>
        @include('specialties.professionals')
    </div>
</div>
@endsection