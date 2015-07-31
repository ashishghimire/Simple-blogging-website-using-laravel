@extends ('app')
@section ('content')
<h1>Please fill this out</h1>
{!! Form:: open(['url'=>'upload'])!!}
    <div class="form-group">
        {!! Form::label('fname','First Name :') !!}
	    {!! Form::text('fname',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
	    {!! Form::label('lname','Last Name :') !!}
	    {!! Form::text('lname',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
	    {!! Form::label('comment','Comment :') !!}
	    {!! Form::textarea('comment',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
	    {!! Form::submit('submit',['class'=>'btn btn-primary form-control']) !!}
    </div>
{!! Form:: close()!!}
@if ($errors->any())
    <ul class="alert alert-danger">
	    @foreach($errors->all() as $error)
		    <li>{!!$error!!}</li>
		@endforeach
	</ul>
@endif
<a href = {{ url('/show') }}>Click here</a> to view all records.<br>
<a href = {{ url('/viewarticles') }}>Click here</a> to view all articles.
@stop