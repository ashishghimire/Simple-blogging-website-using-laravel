@extends ('app')
@section ('content')
<h1>Add Article</h1>
{!! Form:: open(['url'=>'uploadarticle'])!!}
    @include('articles.partials.form',['SubmitButton'=>'Submit'])

{!! Form:: close()!!}
@include('errors.list')
@stop