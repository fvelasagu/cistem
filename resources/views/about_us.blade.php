@extends('layouts.base')

@section('title', 'Quienes somos')

@section('metadata')
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="author" content="" />

    <meta name="robots" content="index,follow" />
@endsection

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <h4 class="fw-bold text-center">Quénes somos</h4>
        </div>
        <div class="col-12 col-md-8">
            <p>Centro Integral de Salud Temuco está conformado por un equipo de profesionales que han dedicado años de trabajo a especializarse en el área clínica tanto en niños, adolescentes y adultos.</p>
            <p>Somos especialistas en velar por todos los aspectos que garanticen tu bienestar pleno. Para nosotros es importante tu tranquilidad y por eso te entregamos soluciones que van más allá de la ausencia de enfermedades.</p>
            <p>Nuestro objetivo es contribuir a que tengas una vida saludable, armónica e integral.</p>
            <h5>¡Tu salud nos importa!</h5>
        </div>
        <div class="col-12 col-md-4">
            <img src="{{ asset('/images/logo_cistem.png') }}" alt="" class="img-fluid">
        </div>
        <div class="col-12 mt-3">
            <h4 class="fw-bold text-center">"Centro Integral de Salud Temuco"</h4>
            <p>La salud integral es la principal condición del desarrollo humano, que se refiere a un estado de bienestar ideal que alcanzamos cuando existe un equilibrio entre los factores físicos, biológicos, emocionales, mentales, espirituales y sociales que nos identifica a cada uno; esto nos permite un adecuado crecimiento y desarrollo en todos los ámbitos de la vida.</p>
            <p>Esa es precisamente la esencia de CISTEM, somos un centro integral de salud que va más allá de lo convencional, ya que entrega una atención completa de la mano de profesionales de todas las ramas de la salud y educación, quienes a través de experiencia y conocimientos buscan brindar la atención y el apoyo que los pacientes necesitan para poder preservar su salud; con la finalidad de generar hábitos y cambios positivos en su vida.</p>
            <h5>Misión</h5>
            <p>CISTEM es un Centro Integral de Salud Temuco dedicado a la continua búsqueda del bienestar y nuestro modelo está centrado en las personas, a cargo de profesionales cercanos, responsables y capaces de orientar a sus pacientes durante el proceso terapéutico según sus propias necesidades.</p>
            <h5>Visión</h5>
            <p>Nuestra meta es ser un centro integral de salud de referencia para la comunidad, desempeñándonos en base a la confianza, profesionalismo y buen trato para aquellas personas que buscan un trato más humano y cercano con los profesionales de la salud.</p>
            <h5>Nuestros valores</h5>
            <ul>
                <li>Cuidar de la salud física y emocional.</li>
                <li>Respeto y buen trato.</li>
                <li>Solidaridad y colaboración para trabajar en equipo.</li>
                <li>Servicios de calidad profesional.</li>
            </ul>
        </div>
    </div>
</div>
@endsection