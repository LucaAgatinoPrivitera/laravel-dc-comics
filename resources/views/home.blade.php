@extends('layouts.app')


@section('content')
	@foreach ($fumetti as $fumetto)
		<div style="margin-bottom: 5rem">
			<h1>Titolo: {{ $fumetto['titolo'] }}</h1>
            <a href="{{ route('show', ['id' => $fumetto->id]) }}">Link al fumetto</a>
					 {{-- {{ route(‘comics.show’, $comic->id) }} Si può fare anche così, presumo quando si ha solo 1 controller --}}
		</div>
	@endforeach
@endsection
