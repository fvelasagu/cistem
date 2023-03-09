@extends('layouts.base')

@section('title', 'Educación diferencial')

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
            <img src="{{ asset('images/specialties/educacion_diferencial.jpg')}}" class="img-fluid" />
        </div>
        <div class="col-12 col-md-9 p-3">
            <h3>Educación diferencial</h3>
            <p>La Educación Diferencial es una especialidad del ámbito de las pedagogías que contribuye directamente en los procesos de inclusión de las y los estudiantes y de sus comunidades educativas, a partir de una perspectiva respetuosa de las diferencias individuales.</p>
                <p>Las educadoras diferenciales, tienen como objetivo detectar necesidades de apoyo específico para estudiantes con y sin necesidades educativas especiales, proponiendo una diversidad de estrategias a los docentes y padres o tutores con el fin de motivar el acceso, su participación y sus oportunidades de aprendizaje, y a la vez, esto favorece la incorporación de una multiplicidad de formas de evaluación en los distintos niveles y modalidades educativas.<p>
                <p>En Cistem nos ocupamos del aprendizaje y sus alteraciones, por lo tanto, buscamos potenciar los aprendizajes como herramienta de desarrollo, como también detectar, diagnosticar y tratar estos problemas presentes en los niños, niñas y adolescentes. Favoreciendo su aprendizaje, abordando los contenidos escolares y análisis de estrategias pedagógicas acorde a sus habilidades y dificultades, mejorando, de esta forma, y potenciando la calidad y capacidad de aprendizaje.<p>
                <p>Es de suma importancia realizar un buen diagnóstico que considere las diversas áreas que puedan estar afectando el aprendizaje de los estudiantes. Mientras más información se obtenga ya sea a través de test o entrevistas, se puede elaborar un informe más completo, lo que llevará a planificar el tratamiento más adecuado para superar las dificultades pedagógicas que aquejan y perturban el desarrollo académico y personal.<p>
                <p>Nuestras profesionales en el área están capacitadas y son competentes a la hora de llevar a cabo procesos como:</p>
                <ul>
                    <li>Evaluación y apoyo psicopedagógico.</li>
                    <li>Identificación de NEE y detección de las fortalezas en su desarrollo.</li>
                    <li>Elaborar estrategias de acuerdo a características del paciente.</li>
                    <li>Adaptaciones curriculares.</li>
                    <li>Seguimiento de evaluación de competencias personales.</li>
                    <li>Informes y orientaciones a la familia en cuanto al apoyo del paciente.</li>
                </ul>
        </div>
        @include('specialties.professionals')
    </div>
</div>
@endsection