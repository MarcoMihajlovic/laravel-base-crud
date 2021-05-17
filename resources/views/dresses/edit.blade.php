@extends('layouts.app')

@section('title', 'Nuovo Vestito')

@section('content')

   {{--  @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}
    
    <form action="{{route('vestiti.update', ['vestiti' => $vestiti -> id])}}" method="post">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" class="form-control" name="name" id="name" value="{{$vestiti -> name}}">
        </div>
        <div class="form-group">
            <label for="color">Colore:</label>
            <input type="text" class="form-control" name="color" id="color" value="{{$vestiti -> color}}">
        </div>
        <div class="form-group">
            <label for="size">Taglia:</label>
            <input type="text" class="form-control" name="size" id="size" value="{{$vestiti -> size}}">
        </div>
        <div class="form-group">
            <label for="season">Stagione:</label>
            <select name="season" id="season" class="form-control">
                <option value="">Seleziona</option>
                <option value="estivo" {{$vestiti -> season == "estivo" ? 'selected' : ''}}>Estivo</option>
                <option value="invernale" {{$vestiti -> season == "invernale" ? 'selected' : ''}}>Invernale</option>
                <option value="autunnale" {{$vestiti -> season == "autunnale" ? 'selected' : ''}}>Autunnale</option>
                <option value="primaverile" {{$vestiti -> season == "primaverile" ? 'selected' : ''}}>Primaverile</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Descrizione:</label>
            <input type="text" class="form-control" name="description" id="description" value="{{$vestiti -> description}}">
        </div>
        <div class="form-group">
            <label for="price">Prezzo:</label>
            <input type="number" class="form-control" name="price" id="price" value="{{$vestiti -> price}}">
        </div>
        
        <button type="submit" class="btn btn-default">Inserisci</button>
    </form>
    
@endsection