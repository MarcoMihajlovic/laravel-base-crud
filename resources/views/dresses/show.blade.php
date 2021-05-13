@extends('layouts.app')

@section('title', 'Dettaglio')

@section('content')
    <h1>{{$vestito -> name}}</h1>
    <h5>Colori Disponibili: {{$vestito -> color}}</h5>
    <h5>Taglia Disponinile: {{$vestito -> size}}</h5>
    <h5>Descrizione: {{$vestito -> description}}</h5>
    <h5>Stagione: {{$vestito -> season}}</h5>
    <h5>Taglia Disponinile: {{$vestito -> size}}</h5>
    <h2>Prezzo: {{$vestito -> price}}€ Iva inclusa</h2>
    
@endsection