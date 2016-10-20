@extends('layouts.app')

@section('content')

<div class="container">
	<div class="panel-primary">
		<div class="panel-heading">
			Add game
		</div>

		<div class="panel-body">

			<form action="addGame/store" method="POST">
				{{ method_field('POST') }}
				{{ csrf_field() }}
				
				<ul>
					<li><label>name</label><input type="text" name="name"></li>
					<li><label>console</label><input type="text" name="console"></li>
					<li><label>genre</label><input type="text" name="genre"></li>
					<li><button type="submit">Add game</button></li>
				</ul>

			</form>

		</div>
	</div>
</div>
@endsection