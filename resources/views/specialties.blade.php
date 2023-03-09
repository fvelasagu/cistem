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
</div>
@endsection