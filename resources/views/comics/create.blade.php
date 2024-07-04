@extends('layouts.app')

@section('content')
    <h1>Crea un nuovo fumetto</h1>
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div>
            <label for="titolo">Titolo:</label>
            <input type="text" id="titolo" name="titolo" value="{{ old('titolo') }}">
            @error('titolo')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <!-- Aggiungi qui altri campi del form se necessario -->
        <button type="submit">Crea</button>
    </form>
@endsection