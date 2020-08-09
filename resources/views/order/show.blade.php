@extends('layouts.app')

@section('content')
@if (Session::has('success'))
<div class="alert alert-success">
	<!-- {{ Alert::success('Done', 'Successful order') }} -->
</div>
@endif

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8 py-5 text-center">
			please choose products for table no.{{ $id }}
		</div>
	</div>
	<div class="row justify-content-center">
		@foreach($products as $product)
		<div class="col-md-3 text-center py-2">
			<form method="POST" action="{{ route('order.store') }}">
				@csrf
				<button class="btn btn-primary" name="product_id" value="{{ $product->id }}">{{ $product->name }} - {{ $product->price }}€</button>
				<input type="hidden" name="customer_table_id" value="{{ $id }}">
				<input type="hidden" name="price" value="{{ $product->price }}">
			</form>
		</div>
		@endforeach
	</div>
</div>

@endsection