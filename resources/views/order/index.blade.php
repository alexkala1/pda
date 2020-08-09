@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		@if(isset($orders))
		<div class="col-md-8">
			<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col" class="text-center">ID</th>
						<th scope="col" class="text-center">Table</th>
						<th scope="col" class="text-center">Operator</th>
						<th scope="col" class="text-center">Price</th>
						<th scope="col" class="text-center">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($orders as $order)
					<tr>
						<th scope="row" class="align-middle text-center">{{ $order->id }}</th>
						<td class="align-middle text-center">{{ $order->customer_table_id }}</td>
						<td class="align-middle text-center">{{ $order->user_id }}</td>
						<td class="align-middle text-center">{{ $order->price }}</td>
						<td class="align-middle text-center"><button class="btn btn-primary">Close Order</button></td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
		@else
		<h1>No orders available</h1>
		@endif
	</div>
</div>

@endsection