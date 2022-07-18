@extends('layouts.base')

@section('page-title')
    Aggiungi il tuo fumetto
@endsection

@section('page-content')
    <h1>Aggiungi il tuo fumetto preferito</h1>

    <form action="{{route('comics.store')}}" method="POST">
    @csrf    
        <div class="mb-3">
            <label for="titolo">Titolo</label>
            <input type="text" class="form-control" id="titolo" name="title">
        </div>
        <div class="mb-3">
            <label for="descrizione">Descrizione</label>
            <textarea name="description" class="form-control" id="descrizione" cols="30" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="data">Data Uscita</label>
            <input type="date" class="form-control" id="data" name="sale_date">
        </div>
        <div class="mb-3">
            <label for="copertina">Copertina Album</label>
            <input type="text" class="form-control" id="copertina" name="image">
        </div>
        <div class="mb-3">
            <label for="prezzo">Prezzo</label>
            <input type="number" class="form-control" id="prezzo" name="price">
        </div>
        <button type="submit" class="btn btn-primary">Aggiungi</button>
      </form>
@endsection