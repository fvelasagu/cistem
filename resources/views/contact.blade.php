@extends('layouts.base')

@section('title', 'Contacto')

@section('metadata')
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="author" content="" />

    <meta name="robots" content="index,follow" />
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6 p-3">
            <form method="POST" action="{{ route('contact.send') }}">
              @csrf
                <div class="mb-3">
                  <label for="specialty" class="form-label">Especialidad</label>
                  <select class="form-select" id="specialty" name="specialty" required>
                    <option disabled>Selecciona la especialidad</option>
                    @foreach ($specialties as $specialty)
                      <option {{old('pacient') == $specialty->id ? "selected":"" }} value="{{$specialty->id}}">{{$specialty->name}}</option>
                    @endforeach
                  </select>
                  {!!$errors -> first('specialty','<p class="text-danger" id="error-input-specialty">:message</p>')!!}
                </div>
                <div class="mb-3">
                  <label for="pacient" class="form-label">Paciente</label>
                  <input type="text" class="form-control" id="pacient" name="pacient" placeholder="Nombre de paciente" required value="{{ old('pacient')}}" minlength="3">
                  {!!$errors -> first('pacient','<p class="text-danger" id="error-input-pacient">:message</p>')!!}
                </div>
                <div class="mb-3">
                  <label for="rut" class="form-label">Rut</label>
                  <input type="text" class="form-control" id="rut" name="rut" placeholder="Rut de paciente" required value="{{ old('rut')}}" minlength="7">
                  {!!$errors -> first('rut','<p class="text-danger" id="error-input-rut">:message</p>')!!}
                </div>
                <div class="mb-3">
                  <label for="phone" class="form-label">Teléfono</label>
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="Teléfono de contacto" required value="{{ old('phone')}}" minlength="8">
                  {!!$errors -> first('phone','<p class="text-danger" id="error-input-rut">:phone</p>')!!}
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Correo</label>
                  <input type="text" class="form-control" id="email" name="email" placeholder="Correo de contacto" required value="{{ old('email')}}" minlength="8">
                  {!!$errors -> first('email','<p class="text-danger" id="error-input-email">:message</p>')!!}
                </div>
                <div class="mb-3">
                  <label for="message" class="form-label">Mensaje</label>
                  <textarea class="form-control" placeholder="Ingresa tu mensaje" id="message" name="message" required minlength="3">{{ old('message')}}</textarea>
                  {!!$errors -> first('message','<p class="text-danger" id="error-input-rut">:message</p>')!!}
                </div>
                @if($errors->has('request_message'))
                  <div class="mb-3">
                    <div class="alert alert-{{ $errors->first('request_status') }}" role="alert">
                      {{ $errors->first('request_message') }}
                    </div>
                  </div>
                  
                @endif
                <div class="text-center w-100">
                  
                  <button type="submit" class="btn btn-info text-white">Enviar</button>
                </div>
              </form>
        </div>
    </div>
</div>
@endsection