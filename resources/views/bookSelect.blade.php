@extends('bookLayout')

@section('content')
@if (empty($books))
	<h1>There are no books</h1>
@else
	<ul>
	@foreach ($books as $book)
		<li>
			<a href="http://46.101.76.19/Book?id={{ $book->id }}">
				{{ $book->tittle }}
			</a>
		</li>
	@endforeach
	</ul>
@endif
@stop