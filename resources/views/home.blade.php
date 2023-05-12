@extends('layouts.app')
@section('page-title', 'treni')

@section('content')
    <div class="row">
        <h1>main</h1>
        @foreach ($trains as $train)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $train->Azienda }}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">
                        Partenza -> {{ $train->Stazione_di_partenza }}
                        {{ $train->Orario_di_partenza }}
                    </h6>
                    <h6 class="card-subtitle mb-2 text-body-secondary">
                        Arrivo -> {{ $train->Stazione_di_arrivo }} {{ $train->Orario_di_arrivo }}
                    </h6>
                    <a href="#" class="card-link">Buy ticket on web site</a>
                </div>
            </div>
        @endforeach



    </div>

@endsection
