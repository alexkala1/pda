@extends('layouts.app')

@section('content')

<div class="container-fluid">
	<div class="row justify-content-start">
		@for($i = 1; $i <= 24; $i++) <div class="col-sm-4 col-md-3 col-lg-3 col-xl-2 col-6">
			<div class="card my-2">
				<div class="card-header">
					trapezi {{ $i }}
				</div>
				<div class="card-body">
					<div class="text-center">
						Order status: WIP
					</div>
					<br>
					<a href="{{ route('trapezi.show' , $i) }}" type="button" class="btn btn-block btn-primary">Submit an order</a>
				</div>
			</div>
	</div>
@endfor

</div>

@endsection