@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		@if(isset($orders))
		<table class="table table-striped table-bordered dataTable" id="orders-datatable">
			<thead>
				<tr>
					<th scope="col" class="text-center">ID</th>
					<th scope="col" class="text-center">Table</th>
					<th scope="col" class="text-center">Operator</th>
					<th scope="col" class="text-center">Price</th>
				</tr>
			</thead>
		</table>
		@else
		<h1>No orders available</h1>
		@endif
	</div>
</div>

@endsection

<script>
	window.addEventListener('load', function() {
		$(function() {

			$('#orders-datatable').DataTable({
				processing: true,
				serverSide: true,
				order: [1, 'asc'],
				ajax: "{{ url('order/list') }}",
				columns: [{
						data: 'id',
						name: 'ID'
					},
					{
						data: 'customer_table_id',
						name: 'Table'
					},
					{
						data: 'user_id',
						name: 'Operator'
					},
					{
						data: 'price',
						name: 'price'
					},
				]
			})
		})
	})
</script>