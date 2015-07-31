@extends ('app')
@section('content')
@if (isset ($users))	
	@foreach($users as $user)
		<ul>
			<li><a href="../profile/{{$user->id}}">{{$user->user_name}}</a></li>
		</ul>
	@endforeach
@else
	<h3>The users section is empty</h3>
@endif
@stop
