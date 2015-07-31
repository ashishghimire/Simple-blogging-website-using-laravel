@extends ('app')
@section('content');

@foreach($output as $article)
    <ul>
    	<li><a href = "../article/{{$article->slug}}">{{$article->title}}<a></li>
    </ul>
@endforeach
<br>
<br>
<h5><a href = "../addarticle">Add your article<a></h5>

@stop