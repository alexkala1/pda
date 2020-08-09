@extends('layouts.app')

@section('content')

<div class="container-fluid">
	<div class="row justify-content-start">
		@foreach($customer_tables as $customer_table)
		@if ($customer_table->status == 'Ordered')
		 <div class="col-sm-4 col-md-3 col-lg-3 col-xl-2 col-6 my-2">
			<div class="card h-100">
				<div class="card-header text-center">
					Table {{ $customer_table->id }}
				</div>
				<div class="card-body">
					<div class="text-center">
						Order status: {{ $customer_table->status }}
						<br>
						Customers: {{ $customer_table->customers}}
						<br>
						Price: {{ $customer_table->orders[0]->price }}
						<br>
						Has Customer Paid: {{ $customer_table->orders[0]->has_paid == null ? 'No' : $customer_table->orders[0]->payment_amount }}
					</div>
					<br>
					<a href="{{ route('customer_table.show' , $customer_table->id) }}" type="button" class="btn btn-block btn-primary">Submit an order</a>
					@if($customer_table->orders[0]->has_paid == null)
					<br>
					<a href="{{ route('customer_table.show' , $customer_table->id) }}" type="button" class="btn btn-block btn-primary">Receive Payment</a>
					@endif
				</div>
			</div>
		</div>
		@else
		<div class="col-sm-4 col-md-3 col-lg-3 col-xl-2 col-6 my-2 ">
			<div class="card h-100">
				<div class="card-header text-center">
					Table {{ $customer_table->id }}
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