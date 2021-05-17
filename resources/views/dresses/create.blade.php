@extends('layouts.app')

@section('title', 'Nuovo Vestito')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{route('vestiti.store')}}" method="post">
        @csrf
        @method('post')

        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="form-group">
            <label for="color">Colore:</label>
            <input type="text" class="form-control" name="color" id="color">
        </div>
        <div class="form-group">
            <label for="size">Taglia:</label>
            <input type="text" class="form-control" name="size" id="size">
        </div>
        <div class="form-group">
            <label for="season">Stagione:</label>
            <select name="season" id="season" class="form-control">
                <option value="">Seleziona</option>
                <option value="estivo">Estivo</option>
                <option value="invernale">Invernale</option>
                <option value="autunnale">Autunnale</option>
                <option value="primaverile">Primaverile</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Descrizione:</label>
            <input type="text" class="form-control" name="description" id="description">
        </div>
        <div class="form-group">
            <label for="price">Prezzo:</label>
            <input type="number" class="form-control" name="price" id="price">
        </div>
        
        <button type="submit" class="btn btn-default">Inserisci</button>
    </form>
    
@endsection