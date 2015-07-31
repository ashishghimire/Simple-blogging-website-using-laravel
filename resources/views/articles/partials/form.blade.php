{!! Html::script('ckeditor/ckeditor.js') !!}
<div class="form-group">
	    {!! Form::label('emp_name','Your Name :') !!}
	    {!! Form::text('emp_name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
	    {!! Form::label('title','Title of your article :')!!}
	    {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
	    {!! Form::label('article','Your Article :') !!}
	    {!! Form::textarea('article','Write your heart out',['class'=>'form-control']) !!}
	    <script>
            CKEDITOR.replace('article'); 
        </script> 
    </div>
    <div class="form-group">
        {!! Form::label('tag_list','Tags :') !!}
        {!! Form::select('tag_list[]',$tags,null,['id'=>'tag_list', 'class'=>'form-control', 'multiple']) !!}
    </div>
    <div class="form-group">
	    {!! Form::submit($SubmitButton,['class'=>'btn btn-primary form-control']) !!}
    </div>
@section ('footer')
    <script>
        $('#tag_list').select2({
            placeholder:'Choose a tag'
        });
    </script>
@endsection