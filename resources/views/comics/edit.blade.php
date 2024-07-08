@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1>Modifica: {{ $comic->name }}</h1>
				@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
			</div>
		</div>

		<div class="row">
			<div class="col-12">

				{{-- Questo form non carica una generica rotta "store" ma ha bisogno dell'id del gioco da aggiornare --}}
				<form method="POST" action="{{ route('comics.update', $comic->id) }}">
					@method('PUT') {{-- v. slide da 32 a 35 --}}
					@csrf
					<div class="mb-3">
						<label class="form-label">Titolo</label>
						<input type="text" class="form-control" name="titolo" required value="{{ $comic->titolo }}">
						@error('name')
							<div>{{ $message }}</div>
						@enderror
					</div>
					<div class="mb-3">
						<label class="form-label">Autore</label>
						<textarea type="text" class="form-control" name="autore" required>{{ $comic->autore }}</textarea>
					</div>
					<div class="mb-3">
						<label class="form-label">Descrizione</label>
						<input type="text" class="form-control" name="descrizione" required value="{{ $comic->descrizione }}">
					</div>
					<div class="mb-3">
						<label class="form-label">Immagine</label>
						<input type="text" class="form-control" name="img" required value="{{ $comic->img }}">
					</div>

					<button type="submit" class="btn btn-primary">Submit</button>
				</form>

			</div>
		</div>
	</div>
@endsection
