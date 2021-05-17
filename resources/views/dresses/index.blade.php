@extends('layouts.app')

@section('title', 'Vestiti')

@section('content')
    <h1>Prodotti disponibili:</h1>
    <a href="{{route('vestiti.create')}}" class="btn btn-primary">Nuovo Prodotto</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Colore</th>
            <th scope="col">Taglia</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($vestiti as $vestito)
            <tr>
                <th scope="row">{{$vestito -> id}}</th>
                <td>{{$vestito -> name}}</td>
                <td>{{$vestito -> color}}</td>
                <td>{{$vestito -> size}}</td>
                <td>{{$vestito -> description}}</td>
                <td>
                    <a class="btn btn-info" href="{{route('vestiti.show', ['vestiti' => $vestito -> id])}}">Dettagli</a>
                    <a class="btn btn-warning" href="{{route('vestiti.edit', ['vestiti' => $vestito -> id])}}">Modifica</a>
                </td>
              </tr>
            @endforeach
        </tbody>
    </table> 
@endsection