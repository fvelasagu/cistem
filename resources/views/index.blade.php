@extends('layouts.base')

@section('title', 'Inicio')

@section('metadata')
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="author" content="" />

    <meta name="robots" content="index,follow" />
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6 col-md-3 p-0">
            <img src="{{ asset('/images/center/1.png') }}" alt="" class="img-fluid">
        </div>
        <div class="col-6 col-md-3 p-0">
            <img src="{{ asset('/images/center/3.png') }}" alt="" class="img-fluid">
        </div>
        <div class="col-6 col-md-3 p-0">
            <img src="{{ asset('/images/center/2.png') }}" alt="" class="img-fluid">
        </div>
        <div class="col-6 col-md-3 p-0">
            <img src="{{ asset('/images/center/4.jpeg') }}" alt="" class="img-fluid">
        </div>
        <div class="col-6 col-md-3 p-0">
            <img src="{{ asset('/images/center/7.png') }}" alt="" class="img-fluid">
        </div>
        <div class="col-6 col-md-3 p-0">
            <img src="{{ asset('/images/center/8.png') }}" alt="" class="img-fluid">
        </div>
        <div class="col-6 col-md-3 p-0">
            <img src="{{ asset('/images/center/5.jpeg') }}" alt="" class="img-fluid">
        </div>
        <div class="col-6 col-md-3 p-3 d-flex align-items-center">
            <div class="w-100">
                
                <img src="{{ asset('/images/logo_cistem.png') }}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
    <div class="row text-white p-4" style="background-color: darkgray">
        <div class="col-12 text-center">
            <h2 class="fs-1 p-3">Especialidades</h2>
        </div>
        <div class="col-6 col-md-3 text-center">
            <a href="{{ route('specialties.terapia-ocupacional') }}" style="text-decoration: none;" class="text-white">
            <img src="{{ asset('/images/specialties/terapia_ocupacional.jpg')}}" class="img-fluid rounded" />
            <h4 class="mt-2">Terapia ocupacional</h4>
            <p>Infanto Juvenil</p>
            </a>
        </div>
        <div class="col-6 col-md-3 text-center">
            <a href="{{ route('specialties.fonoaudiologia') }}" style="text-decoration: none;" class="text-white">
            <img src="{{ asset('/images/specialties/fonoaudiologia.jpg')}}" class="img-fluid rounded" />
            <h4 class="mt-2">Fonoaudiología</h4>
            <p>Adulto y Adulto Mayor<br>Infanto Juvenil</p>
            </a>
        </div>
        <div class="col-6 col-md-3 text-center">
            <a href="{{ route('specialties.nutricion') }}" style="text-decoration: none;" class="text-white">
            <img src="{{ asset('/images/specialties/nutricion.jpg')}}" class="img-fluid rounded"/>
            <h4 class="mt-2">Nutrición</h4>
            </a>
        </div>
        <div class="col-6 col-md-3 text-center">
            <a href="{{ route('specialties.psicologia') }}" style="text-decoration: none;" class="text-white">
            <img src="{{ asset('/images/specialties/psicologia.jpg')}}" class="img-fluid rounded" />
            <h4 class="mt-2">Psicología</h4>
            <p>Adulto y Adulto Mayor<br>Infanto Juvenil</p>
            </a>
        </div>
        <div class="col-6 col-md-3 text-center">
            <a href="{{ route('specialties.psicopedagogia') }}" style="text-decoration: none;" class="text-white">
            <img src="{{ asset('/images/specialties/psicopedagogia.jpg')}}" class="img-fluid rounded"  />
            <h4 class="mt-2">Psicopedagogía</h4>
            </a>
        </div>
        <div class="col-6 col-md-3 text-center">
            <a href="{{ route('specialties.educacion-diferencial') }}" style="text-decoration: none;" class="text-white">
            <img src="{{ asset('/images/specialties/educacion_diferencial.jpg')}}" class="img-fluid rounded" />
            <h4 class="mt-2">Educación diferencial</h4>
            </a>
        </div>
        <div class="col-6 col-md-3 text-center">
            <a href="{{ route('specialties.neuropsicologia') }}" style="text-decoration: none;" class="text-white">
            <img src="{{ asset('/images/specialties/neuropsicologia.jpg')}}" class="img-fluid rounded"  />
            <h4 class="mt-2">Neuropsicología</h4>
            </a>
        </div>
        <div class="col-6 col-md-3 text-center">
            <a href="{{ route('specialties.medicina_general') }}" style="text-decoration: none;" class="text-white">
            <img src="{{ asset('/images/specialties/medicina_general.jpeg')}}" class="img-fluid rounded"  />
            <h4 class="mt-2">Medicina General</h4>
            <p>Niños, adolecentes,<br>Adulto y Adulto Mayor<br></p>
            </a>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12 col-md-3">
            <a href="#schedule" class="btn btn-info w-100 text-white my-1">Horarios</a>
        </div>
        <div class="col-12 col-md-3">
            <a href="#professionals" class="btn btn-info w-100 text-white my-1">Profesionales</a>
        </div>
        <div class="col-12 col-md-3">
            <a href="#location" class="btn btn-info w-100 text-white my-1">Cómo llegar</a>
        </div>
        <div class="col-12 col-md-3">
            <a href="#opinion" class="btn btn-info w-100 text-white my-1">Déganos tu opinión</a>
        </div>
    </div>
    <div class="row" id="schedule">
        <div class="col-12 text-center p-4">
            <h2 class="fs-3">Horarios</h2>
        </div>
        <div class="col-12 col-md-4"></div>
        <div class="col-12 col-md-4">
            @php
                $horarios = [
                    ["dia" => "Lunes",      "horario" => "09:30 - 20:00"],
                    ["dia" => "Martes",     "horario" => "09:30 - 20:00"],
                    ["dia" => "Miércoles",  "horario" => "09:30 - 20:00"],
                    ["dia" => "Jueves",     "horario" => "09:30 - 20:00"],
                    ["dia" => "Viernes",    "horario" => "09:30 - 20:00"],
                    ["dia" => "Sábado",     "horario" => "10:00 - 12:30"],
                ]
            @endphp
            <table class="table">
                <tbody>
                    @foreach ($horarios as $h)
                    <tr>
                        <td class="text-center fw-bold">{{ $h["dia"] }}</td>
                        <td class="text-center">{{ $h["horario"] }}</td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
    <div class="row" id="professionals">
        <div class="col-12 text-center">
            <h2 class="fs-1 p-3">Profesionales</h2>
        </div>
        @foreach ($professionals as $professional)
            <div class="col-6 col-md-3 text-center mt-2" style="height: 100%;">
                <div class="card">
                    <img src="{{ asset('/images/professionals/'.$professional->img) }}" class="card-img-top p-3" alt="">
                    <div class="card-body">
                        <p class="m-0 text-info"><b>{{ $professional['specialty'] }}</b></p>
                        <h5 class="card-title m-0">{{ $professional['name'] }}</h5>
                    </div>
                  </div>
            </div>
        @endforeach
    </div>
    <div class="row" id="location">
        <div class="col-12 text-center p-4">
            <h2 class="fs-3">¿Cómo llegar?</h2>
        </div>
        <div class="col-12 col-md-3"></div>
        <div class="col-12 col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d412.15754763811253!2d-72.60676785722042!3d-38.73619173376787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9614d3f0f19be99f%3A0xf913949e4c1ee225!2sDieciocho%20de%20Septiembre%20525%2C%20Temuco%2C%20Araucan%C3%ADa!5e0!3m2!1ses-419!2scl!4v1662003142633!5m2!1ses-419!2scl" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-100"></iframe>
            <p class="text-center">18 de septiembre N°525, Oficina 703, Edificio Buró, Temuco.</p>
        </div>
    </div>
    <div class="row bg-info text-white" id="opinion">
        <div class="col-12 text-center p-4">
            <h2 class="fs-4">Déjanos tu opinión</h2>
            <p>Tu opinión nos importa, a continuación te dejamos un enlace para entregarnos tu opinión</p>
            <a class="btn btn-light" href="#">Formulario</a>
        </div>
    </div>
</div>
@endsection