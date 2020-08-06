@extends('layouts.app')

@section('content')
<div class="container">
	@if(auth()->user()->type === 'barmanos')
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">{{ __('Dashboard for barmanos') }}</div>

				<div class="card-body">
					@if (session('status'))
					<div class="alert alert-success" role="alert">
						{{ session('status') }}
					</div>
					@endif

					{{ __('You are logged in as barmanos') }}
				</div>
			</div>
		</div>
	</div>
	@else
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">{{ __('Dashboard for adminos') }}</div>

				<div class="card-body">
					@if (session('status'))
					<div class="alert alert-success" role="alert">
						{{ session('status') }}
					</div>
					@endif

					{{ __('You are logged in as adminos') }}
				</div>
			</div>
		</div>
	</div>
	@endif
</div>
@endsection