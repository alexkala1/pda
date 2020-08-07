@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">{{ __('Dashboard for barmanos') }}</div>

				<div class="card-body text-center">
					@if (session('status'))
					<div class="alert alert-success" role="alert">
						{{ session('status') }}
					</div>
					@endif

					<a href="{{ route('trapezi.index') }}" type="button" class="btn btn-primary">Τραπεζια</a>
					<a href="{{ route('paraggelia.index') }}" type="button" class="btn btn-primary">Παραγγελιες</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection