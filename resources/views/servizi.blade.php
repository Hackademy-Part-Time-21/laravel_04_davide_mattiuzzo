@extends('layout.app')
@section('title', 'Servizi')


@section('container')
<div>
<h1> I nostri servizi</h1>
<br><br><br>
</div>

    @if (Request::url() === "http://127.0.0.1:8000/servizi")
        <div style="display: flex; justify-content: space-between">
            @foreach ($array_servizi as $servizi)

                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                    <h5 class="card-title">
                        {{$servizi['nome_servizio']}}
                    </h5>
                    <br>
                    <a href="{{ url('servizi/'.$loop->iteration) }}"   class="btn btn-primary">
                        Dettagli
                    </a>
                    </div>
                </div>
            @endforeach
        </div>  
    @else
    <div style="display: flex; justify-content: center">
        @foreach ($array_servizi as $servizi)

            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">
                    {{$servizi['nome_servizio']}}
                </h5>
                <br>
                    <p class="card-text">
                        {{$servizi['costo_servizio']}} €
                    </p>
                    <br>
                    <a href="/servizi"   class="btn btn-primary">
                        Torna ai servizi
                    </a>
                </div>
            </div>
        @endforeach
    </div>  

    @endif


@endsection
