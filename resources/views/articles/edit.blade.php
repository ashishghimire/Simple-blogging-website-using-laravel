@extends ('app')
@section ('content')
<h1>Edit your Article {!!$article->title!!}</h1>
{!! Form:: model($article, ['method'=>'PATCH','url'=>['editarticle', $article->slug]])!!}
    @include('articles.partials.form',['SubmitButton'=>'Update'])

{!! Form:: close()!!}
@include('errors.list')
@stop