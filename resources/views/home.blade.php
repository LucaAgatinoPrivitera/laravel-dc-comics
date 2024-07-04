@extends('layouts.app')


@section('content')
	@foreach ($fumetti as $fumetto)
		<div style="margin-bottom: 5rem">
			<h1>Titolo: {{ $fumetto['titolo'] }}</h1>
            <a href="{{ route('show', ['id' => $fumetto->id]) }}">Link al fumetto</a>
		</div>
	@endforeach
@endsection
