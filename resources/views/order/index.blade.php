@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
<div class="container-fluid">
	@if(isset($orders))
	<table class="table table-striped table-bordered dataTable" id="orders-datatable">
		<thead>
			<tr>
				<th scope="col" class="text-center">ID</th>
				<th scope="col" class="text-center">Table</th>
				<th scope="col" class="text-center">Operator</th>
				<th scope="col" class="text-center">Order time</th>
				<th scope="col" class="text-center">Price</th>
			</tr>
		</thead>
	</table>
	@else
	<h1>No orders available</h1>
	@endif
</div>

@endsection

<script>
	window.addEventListener('load', function() {
		$(function() {

			let table = $('#orders-datatable').DataTable({
				processing: true,
				serverSide: true,
				order: [3, 'desc'],
				ajax: "{{ url('order/list') }}",
				columns: [{
						data: 'id',
						name: 'id'
					},
					{
						data: 'customer_table_id',
						name: 'customer_table_id'
					},
					{
						data: 'user_id',
						name: 'Operator'
					},
					{
						data: 'created_at',
						name: 'created_at'
					},
					{
						data: 'price',
						name: 'price'
					},
				],

			})
			$('#orders-datatable tbody').on('click', 'tr', function() {
				if ($(this).hasClass('selected')) {
					$(this).removeClass('selected');
				} else {
					table.$('tr.selected').removeClass('selected');
					$(this).addClass('selected');
				}

				let id = table.row('.selected').data().customer_table_id;
				let document_id = table.row('.selected').data().id;
				window.location.href = `/customerTable/${id}`;
			});
		})
	})
</script>