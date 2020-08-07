@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8 py-5 text-center">
			please choose products for table no.{{ $id }}
		</div>
	</div>
	<div class="row justify-content-center">
		@foreach($products as $product)
		<div class="col-md-3 text-center py-2">
			<form method="POST" action="{{ route('order.store', $product->id) }}">
				@csrf
				<button class="btn btn-primary" name="id" value="{{ $product->id }}">{{ $product->name }} - {{ $product->price }}€</button>
				<input type="hidden" name="customerTable_id" value="{{ $id }}">
			</form>
		</div>
		@endforeach
	</div>
</div>

@endsection