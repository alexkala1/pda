@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8 text-center">
			<h1>customer_table {{ $id }}</h1>
			<br>
			@if(isset($order))
			Συνολο: {{ $order->price }} Ευρω
			<br>
			Παραγγελια: {{ $order->id }}
			<br>
			Δημιουργηθηκε: {{ $order->created_at }}
			<br>
			Πληρωθηκε: {{$order->has_paid == null ? 'Οχι' :'Ναι' }}
			@else
			Den yparxoun paraggelies.
			@endif
			<br>
			<div class="row py-5 text-center justify-content-center">
				<a href="{{ route('order.show' , $id) }}" type="button" class="btn btn-block btn-primary">Submit an order</a>
			</div>
		</div>
	</div>
</div>
@endsection