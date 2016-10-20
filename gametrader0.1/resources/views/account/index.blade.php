@extends('layouts.app')

@section('content')
<div class="container">
	<div class="account-info col-md-6">
		<h1>Accountinformatie</h1>
		<ul>
			<li>{{ $id->name }}</li>
			<li>{{ $id->email }}</li>
			<li>{{ $id->consoles }}</li>
			<li>{{ $id->genre }}</li>
			<li>{{ $id->phone }}</li>
		</ul>

		<a href="{{ Auth::user()->id }}/edit">Edit</a>
	</div>

	<div class="account-review col-md-6">
		<h1>Reviews</h1>

		<ul>
			@foreach($reviews as $review)
				<li>naam van schrijver: {{ $review->userName }}</li>
				<li>tekst: {{ $review->text }} </li>
			@endforeach
		</ul>
		<form action="{{ Auth::user()->id }}/addComment" method="POST">
			{{ method_field('POST') }}
			{{ csrf_field() }}

			Comment: <textarea></textarea>

			<button type="submit">Comment</button>
		</form>
		
	</div>

	<div class="account-games col-md-12"></div>

		<h1>Games</h1>

		<ul>

			@foreach($games as $game)

				<li>naam : {{ $game->name }}</li>
				<li>console: {{ $game->console }}</li>
				<li>genre: {{ $game->genre }}</li>

			@endforeach

		</ul>

		<a href="{{ Auth::user()->id }}/addGame">Add game</a>
</div>
@endsection