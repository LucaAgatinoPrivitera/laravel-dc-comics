{{-- @extends('layouts.app')

@section('content')
	@foreach ($fumetti as $fumetto)
		<div style="margin-bottom: 5rem">
			<h1>Titolo: {{ $fumetto['titolo'] }}</h1>
			<h2>Autore: {{ $fumetto['autore'] }}</h2>
			<h2>Descrizione: {{ $fumetto['descrizione'] }}</h2>
		</div>
	@endforeach

@endsection --}}

@extends('layouts.app')

@section('content')
		<div style="margin-bottom: 5rem">
			<h1>Titolo: {{ $fumetti['titolo'] }}</h1>
			<h2>Autore: {{ $fumetti['autore'] }}</h2>
			<h2>Descrizione: {{ $fumetti['descrizione'] }}</h2>
		</div>
@endsection
