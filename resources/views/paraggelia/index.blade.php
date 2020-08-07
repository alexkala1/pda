@extends('layouts.app')

@section('content')

@if(isset($paraggelia))
<h1 class="text-center">wow</h1>
@else
<h1 class="text-center">No orders available</h1>
@endif

@endsection