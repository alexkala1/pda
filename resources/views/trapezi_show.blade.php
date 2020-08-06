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
			@endif
		</div>
	</div>
</div>
@endsection