@extends('app')
@section('content')
	<h3>Search Results:</h3><br>
	<ul>
		@foreach($results as $article)
			<li><a href = "../article/{{$article->slug}}">{{$article->title}}<a></li>
		@endforeach
	</ul>
@stop