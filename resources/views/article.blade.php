@extends('app')
@section('content')
<h1>{!!$article->title!!}</h1><br>
by {!!$article->emp_name!!}<br><br>
{!!$article->article!!}
@unless($article->tags->isEmpty())
	<h5>tags:</h5>
	<ul>
		@foreach ($article->tags as $tag)
		    <li>{{$tag->name}}</li>
		@endforeach
	</ul>
@endunless
@stop