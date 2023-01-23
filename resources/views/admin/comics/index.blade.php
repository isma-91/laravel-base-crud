@extends('layouts.base')

@section('content')

    @if (session('cancelled'))
        <div class="alert alert-success">
        {{ session('cancelled') }}
        </div>
    @endif
    <div class="table-responsive">
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">Titolo</th>
                    <th scope="col">Descizione</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Visita</th>
                    <th scope="col">Modifica</th>
                    <th scope="col">Elimina</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{ $comic->title }}</th>
                        <td>{{ $comic->description }}</td>
                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->type }}</td>
                        <td>
                            <a href="{{ route('comics.show', ['comic' => $comic]) }}" class="btn btn-primary">Visita</a>
                        </td>
                        <td>
                            <a href="{{ route('comics.edit', ['comic' => $comic]) }}" class="btn btn-warning">Modifica</a>
                        </td>
                        <td>
                            <form action="{{ route('comics.destroy', ['comic' => $comic]) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger">Elimina</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="text-center">
        <a href="{{ route('comics.create') }}" class="btn btn-primary">Aggiungi Fumetto</a>
    </div>
@endsection
