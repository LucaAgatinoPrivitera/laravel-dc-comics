@extends('layouts.app')


@section('content')
	<a href="{{ route('comics.create') }}">Aggiungi un fumetto</a>
	@foreach ($fumetti as $fumetto)
		<div style="margin-bottom: 5rem">
			<h1>Titolo: {{ $fumetto['titolo'] }}</h1>
			<img style="width: 300px" src="{{ $fumetto['img'] }}" alt="">
			<a style="display: block" href="{{ route('show', ['id' => $fumetto->id]) }}">Link al fumetto</a>
			{{-- {{ route(‘comics.show’, $comic->id) }} Si può fare anche così, presumo quando si ha solo 1 controller --}}
			<a style="display: block" href="{{ route('comics.edit', ['id' => $fumetto->id]) }}">Modifica il fumetto</a>
		</div>
	@endforeach
@endsection
