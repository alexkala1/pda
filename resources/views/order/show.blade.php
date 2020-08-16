@extends('layouts.app')

@section('content')
@if (Session::has('success'))
<div class="alert alert-success">
	{{ Alert::success('Done', 'Successful order') }}
</div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8 py-5 text-center">
			please choose products for table no.{{ $id }}
		</div>
	</div>
	<form method="POST" action="{{ route('order.store') }}">
	@csrf
		<div class="row justify-content-center">
			<div class="input-group w-50">
				<div class="input-group-prepend">
    				<span class="input-group-text" id="">Customers number</span>
  				</div>
  				<input type="number" name="customers" class="form-control">
			</div>
		</div>
		<div class="row justify-content-center">
			@foreach($products as $product)
			<div class="col-md-3 text-center py-2">
				<button class="btn btn-primary" name="product_id" value="{{ $product->id }}">{{ $product->name }} - {{ $product->price }}€</button>
				<input type="hidden" name="customer_table_id" value="{{ $id }}">
				<input type="hidden" name="price" value="{{ $product->price }}">
			</div>
		@endforeach
		</div>
	</form>
</div>

@endsection