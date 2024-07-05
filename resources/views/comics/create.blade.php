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

        <div>
            <label for="autore">autore:</label>
            <input type="text" id="autore" name="autore" value="{{ old('autore') }}">
            @error('autore')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="descrizione">descrizione:</label>
            <input type="text" id="descrizione" name="descrizione" value="{{ old('descrizione') }}">
            @error('descrizione')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="img">img:</label>
            <input type="text" id="img" name="img" value="{{ old('img') }}">
            @error('img')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <!-- Aggiungi qui altri campi del form se necessario -->
        <button type="submit">Crea</button>
    </form>
@endsection