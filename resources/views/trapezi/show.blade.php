@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8 text-center">
			<h1>trapezi {{ $id }}</h1>
			<br>
			@if(isset($paraggelia))
			{{ $paraggelia }}
			@else
			Den yparxoun paraggelies.
			<br>
			<div class="row py-5 text-center justify-content-center">
				<a href="{{ route('paraggelia.show' , $id) }}" type="button" class="btn btn-block btn-primary">Submit an order</a>
			</div>
			@endif
		</div>
	</div>
</div>
@endsection