@extends('layouts.base')

@section('content')
    <h1 class="text-center">Admin Dashboard</h1>
    <div class="d-flex justify-content-center">
        <a href="{{ route('comics.index') }}" class="btn btn-primary">Gestione Comics</a>
    </div>
@endsection
