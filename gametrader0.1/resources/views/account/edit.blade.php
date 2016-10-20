@extends('layouts.app')

@section('content')

<div class="container">

	<h1>EDIT</h1>

	<div class="panel-primary">
		<div class="panel-heading">
			Edit
		</div>
		<div class="panel-body">
			<form action="update" method="POST">
				{{ method_field('POST') }}
				{{ csrf_field() }}

				<input type="text" name="name" value="{{$id->name}}">
				<input type="text" name="email" value="{{$id->email}}">
				<input type="text" name="consoles" value="{{$id->consoles}}">
				<input type="text" name="genre" value="{{$id->genre}}">
				<input type="text" name="phone" value="{{$id->phone}}">

				<button type="submit">Edit</button>
			</form>
		</div>
	</div>

</div>
@endsection