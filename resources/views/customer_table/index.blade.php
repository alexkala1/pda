@extends('layouts.app')

@section('content')

<div class="container-fluid">
	<div class="row justify-content-start">
		@foreach($customerTables as $customerTable)
		@if ($customerTable->status == 'Ordered')
		 <div class="col-sm-4 col-md-3 col-lg-3 col-xl-2 col-6">
			<div class="card my-2">
				<div class="card-header">
					customerTable {{ $customerTable->id }}
				</div>
				<div class="card-body">
					<div class="text-center">
						Order status: {{ $customerTable->status }}
						<br>
						Customers: {{ $customerTable->customers}}
					</div>
					<br>
					<a href="{{ route('customer_table.show' , $customerTable->id) }}" type="button" class="btn btn-block btn-primary">Submit an order</a>
				</div>
			</div>
		</div>
		@else
		<div class="col-sm-4 col-md-3 col-lg-3 col-xl-2 col-6">
			<div class="card my-2">
				<div class="card-header">
					customerTable {{ $customerTable->id }}
				</div>
				<div class="card-body">
					<div class="text-center">
						Order status: {{ $customerTable->status }}
					</div>
					<br>
					<a href="{{ route('customer_table.show' , $customerTable->id) }}" type="button" class="btn btn-block btn-primary">Submit an order</a>
				</div>
			</div>
		</div>
		@endif
@endforeach

</div>

@endsection