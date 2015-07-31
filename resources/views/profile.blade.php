@extends ('app')
@section('content')
<ul>
	<li><h3>{{$user->name}}</h3></li>
	<li><h4>{{$user->email}}</h4></li>
	@if(isset($articles))
		<br><h2>Your Articles:</h2>
		@foreach ($articles as $article)
			<a href="../article/{{$article->slug}}"><li>{{$article->title}}</li></a>
		@endforeach
	@endif

</ul>
@stop