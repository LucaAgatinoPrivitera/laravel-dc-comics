@extends('layouts.app')

<?php
echo dd($fumetti);
?>
@section('content')
	@foreach ($fumetti as $fumetto)
		<div style="margin-bottom: 5rem">
			<h1>Titolo: {{ $fumetto['titolo'] }}</h1>
		</div>
	@endforeach
@endsection
