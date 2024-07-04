@extends('layouts.app')

@section('content')


@foreach ($trains as $train)
    <h4>Treno della compagnia: {{ $train->Azienda }}</h4>
    <h4>Partenza: {{ $train->Stazione_partenza }}</h4>
    <h4>Arrivo: {{ $train->Stazione_arrivo }}</h4>
@endforeach

@endsection
