@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8 py-5 text-center">
			please choose products for table no.{{ $id }}
		</div>
	</div>
	<div class="row justify-content-center">
	@for($i = 1; $i <=20; $i++)
		<div class="col-md-3 text-center py-2">
			<a class="btn btn-primary" href="#">product {{ $i }}</a>
		</div>
	@endfor
</div>
</div>

@endsection