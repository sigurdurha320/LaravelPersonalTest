@extends('bookLayout')

@section('content')
@if (empty($Selected))
	<h1>There is no book selected</h1>
@else
	<h3>{{ $Selected->tittle }}</h3>
	<h3>{{ $Selected->author }}</h3>
@endif
@stop