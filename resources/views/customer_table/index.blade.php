@extends('layouts.app')

@section('content')

<div class="container-fluid">
	<div class="row justify-content-start">
		@foreach($customer_tables as $customer_table)
		@if ($customer_table->status == 'Ordered')
		 <div class="col-sm-4 col-md-3 col-lg-3 col-xl-2 col-6">
			<div class="card my-2">
				<div class="card-header">
					customer_table {{ $customer_table->id }}
				</div>
				<div class="card-body">
					<div class="text-center">
						Order status: {{ $customer_table->status }}
						<br>
						Customers: {{ $customer_table->customers}}
						<br>
						Price: {{ $customer_table->orders[0]->price }}
					</div>
					<br>
					<a href="{{ route('customer_table.show' , $customer_table->id) }}" type="button" class="btn btn-block btn-primary">Submit an order</a>
				</div>
			</div>
		</div>
		@else
		<div class="col-sm-4 col-md-3 col-lg-3 col-xl-2 col-6">
			<div class="card my-2">
				<div class="card-header">
					customer_table {{ $customer_table->id }}
				</div>
				<div class="card-body">
					<div class="text-center">
						Order status: {{ $customer_table->status }}
					</div>
					<br>
					<a href="{{ route('customer_table.show' , $customer_table->id) }}" type="button" class="btn btn-block btn-primary">Submit an order</a>
				</div>
			</div>
		</div>
		@endif
@endforeach

</div>

@endsection