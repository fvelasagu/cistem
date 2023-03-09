@extends('layouts.base')

@section('title', 'Psicopedagogía')

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
            <img src="{{ asset('images/specialties/psicopedagogia.jpg')}}" class="img-fluid" />
        </div>
        <div class="col-12 col-md-9 p-3">
            <h3>Psicopedagogía</h3>
            <p>Psicopedagogía es una ciencia social que estudia los procesos de aprendizaje y enseñanza; todo esto basándose en dos ramas de las cuales emerge: la psicología y la pedagogía, de ahí que busca analizar los fenómenos ligados al desarrollo psicológico, por medio de métodos didácticos y pedagógicos, por ende, en su evaluación, ha de averiguar cuál es el motivo por el que una persona no está logrando avanzar en el aprendizaje.</p>
            <p>Nuestra profesional del área tiene la tarea de facilitar los procesos de enseñanza en primera infancia y etapa de la vida de los niños. Para llevar esto a cabo, emplea el estudio de los procesos de desarrollo cognitivo, analizando el problema, así como también las posibles causas y soluciones a los comportamientos o patrones que pueden estar afectando la capacidad cognitiva del niño. Estos problemas de aprendizaje no siempre son propios e inherentes de estos niños, sino que también se desarrollan a partir del entorno en que viven, las personas con las que habitan, los conflictos familiares o socioeconómicos a los que están expuestos, entre otras causas.</p>
            <p>A continuación, citamos algunos de los casos que son detectados y que afectan al aprendizaje:</p>
            @php
                $datos = ["Alteraciones en la organización en el circuito del grafismo (escritura/coloreado).","Representación gráfica no adecuada (del cuerpo u otro tipo de dibujos).","Desorientación izquierda-derecha.","Tardanza en la definición de la mano dominante para la escritura.","Sustituciones sistemáticas de letras y números en la escritura y lectura.","Desorganización espacial en la ubicación y realización de las operaciones matemáticas.","Dificultad en la resolución de problemas aritméticos.","Problemas comprensivos de textos.","Dificultad para utilizar o realizar diagramas o mapas.","Problemas para resumir o comparar.","Alteración en la comprensión de reglas de juego.","Dificultad para recordar detalles de una secuencia."];
            @endphp
            <ul>
                @foreach ($datos as $d)
                    <li>{{ $d }}</li>
                @endforeach
            </ul>
        </div>
        @include('specialties.professionals')
    </div>
</div>
@endsection