@if($professionals->count() > 0 )
    <div class="col-12">
        <h4>Profesionales</h4>
    </div>
    @foreach ($professionals as $professional)
        <div class="col-12 col-md-6 mt-2" style="height: 100%;">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-3">
                        <img src="{{ asset('/images/professionals/'.$professional->img) }}" class="card-img-top p-3" alt="">
                    </div>
                    <div class="col-md-9">
                        <div class="card-body">
                            <h5 class="card-title m-0">{{ $professional['name'] }}</h5>
                            @php
                                $titulos = explode('|',$professional['titulos']);
                            @endphp
                            <p class="card-text">{!! str_replace('|','<br>',$professional['registros']) !!}</p>
                            @if(count($titulos) > 0)
                                @if($titulos[0] != '')
                                <ul>
                                    @foreach ($titulos as $titulo)
                                        <li>{{ $titulo }}</li>
                                    @endforeach
                                </ul>
                                @endif
                            @endif
                            <p class="card-text">{!! str_replace('|','<br>',$professional['experiencias']) !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    
@endif