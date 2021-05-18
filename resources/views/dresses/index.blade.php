@extends('layouts.app')

@section('title', 'Vestiti')

@section('content')

    <h1>Prodotti disponibili:</h1>

    @if (session('status'))
      <div class="alert alert-success">
        {{session('status')}}
      </div>
    @endif

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
                <td style="display: flex">
                    <a style="margin: 5px" class="btn btn-info" href="{{route('vestiti.show', ['vestiti' => $vestito -> id])}}">Dettagli</a>

                    <a style="margin: 5px" class="btn btn-warning" href="{{route('vestiti.edit', ['vestiti' => $vestito -> id])}}">Modifica</a>

                    <form action="{{route('vestiti.destroy', $vestito['id'])}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button style="margin: 5px" type="submit" class="btn btn-danger">Cancella</button>
                    </form>
                </td>
              </tr>
            @endforeach
        </tbody>
    </table> 
@endsection