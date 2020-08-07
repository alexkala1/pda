@extends('layouts.app')

@section('content')

@if(isset($order))
<h1 class="text-center">wow</h1>
@else
<h1 class="text-center">No orders available</h1>
@endif

@endsection