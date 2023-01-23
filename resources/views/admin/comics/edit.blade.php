@extends('layouts.base')

@section('content')
    <h2>Modifica un fumetto</h2>
        <form method="post" action="{{ route('comics.update', ['comic' => $comic]) }}">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Trama</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ $comic->description }}">
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Link immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="number" class="form-control" id="price" name="price" step="0.01" value="{{ $comic->price }}">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data di uscita</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Modifica</button>
            </div>
        </form>
@endsection
