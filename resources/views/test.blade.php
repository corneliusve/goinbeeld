@extends('tools.layouts.app')

@section('content')
	<div class="container">
		<form action="{{ route('test.tags') }}" method="post">
			{{ csrf_field() }}
			<input type="text" name="tags" class="input">
			<button type="submit">submit</button>
		</form>
	</div>
@endsection
