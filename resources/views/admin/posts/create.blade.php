@extends('layouts.admin')



@section('content')

<h1>Create Post</h1>

{!! Form::open(['method'=>'POST','action' => 'AdminPostController@store' , 'files'=>true]) !!}

    <div class="form-group">
         {!!Form::label('title', 'Title')!!}
         {!!Form::text('title',null, ['class'=>'form-control form-control-lg'])!!}
    </div>
   
    <div class="form-group">
        {!!Form::label('category_id', 'Category')!!}
        {!!Form::select('category_id',[' '=>'Choose Option'] + $category,'',['class'=>'form-control form-control-lg'])!!}
    </div>

    <div class="form-group">
        {!!Form::label('file', 'file')!!}
        {!!Form::file('photo_id')!!}
    </div>

    <div class="form-group">
         {!!Form::label('body', 'Body')!!}
         {!!Form::textarea('body', null, ['rows'=>3 , 'class'=>'form-control'])!!}
    </div>


{!!Form::submit('Create Post',['class'=>'btn btn-primary'])!!}
{!! Form::close() !!}


@include('includes.form-error')

    
@endsection