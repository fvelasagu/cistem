@extends('layouts.base')

@section('title', 'Medicina general')

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
            <img src="{{ asset('images/specialties/medicina_general.jpeg')}}" class="img-fluid" />
        </div>
        <div class="col-12 col-md-9 p-3">
            <h3>Medicina general</h3>
            <p>La Medicina general es el primer nivel de atención médica cuyo objetivo es prevenir, detectar y tratar enfermedades comunes, así como también derivar con el especialista indicado, en caso de ser necesario.</p>
            <p>Cistem puedes consultar con nuestra especialista cuando no tengas claridad del origen de tu dolor o malestar, o cuando enfrentes síntomas que no sean graves, pero que requieren evaluación médica y medicamentos para tratarlos como, por ejemplo, resfrío común, dolor de estómago o golpe leve, entre otros. También puedes acudir cuando quieras realizarte un chequeo preventivo, que incluya evaluación médica y órdenes para exámenes.</p>
            <p>En esta área contamos con una médica con amplia experiencia en atención a niños, adolescentes, adultos y adultos mayores, así como también su experiencia dentro de equipos interdisciplinarios, que la hacen contar con un desarrollo profesional centrado en las personas, con el fin de mejorar su bienestar.</p>
            <p>Enfermedades más consultadas en medicina general:</p>
            <ul>
                <li><b>Bronquitis aguda:</b> Ocurre cuando se inflaman las vías respiratorias de los pulmones y producen mucosidad en los pulmones, eso es lo que lo hace toser y dura menos de 3 semanas.</li>
                <li><b>Faringitis:</b> Inflamación de la faringe que puede provocar dolor de garganta, sequedad, enrojecimiento de la mucosa y, en ocasiones, fiebre.</li>
                <li><b>Gripe o resfriado común:</b> Enfermedad infecciosa, aguda y contagiosa, causada por un virus, que ataca a las vías respiratorias y produce fiebre, dolor de cabeza y una sensación de malestar general.</li>
                <li><b>Enfermedades estomacales:</b> Existen diversos tipos, algunas son causadas por infecciones y en otros casos pueden ser causadas por virus.</li>
                <li><b>Sinusitis:</b> Inflamación de los senos del cráneo situados en la frente sobre los dos lados de la nariz, que es debida a una infección de las fosas nasales o de los alvéolos dentarios; suele producir obstrucción nasal y dolor de cabeza.</li>
                <li><b>Chequeo preventivo:</b> Quienes quieran realizarse una revisión general de su estado de salud, deben acudir a un médico general para que puede indicar cuáles son los exámenes que se deben realizar y, luego de los resultados, pueda derivar a algún especialista, si es necesario, o trabajar en un tratamiento.</li>
                <li>Detección y tratamiento oportuno de enfermedades.</li>
                <li>Seguimiento de tratamiento.</li>

            </ul>
        </div>
        @include('specialties.professionals')
    </div>
</div>
@endsection