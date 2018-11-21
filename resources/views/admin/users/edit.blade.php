@extends('layouts.admin')





@section('content')

<h1>Edit Users</h1><hr>
<br>
<div class="row">
<div class="col-sm-3">

<img src="{{$user->photo ? $user->photo->file : '/images/Image-not-available_1.jpg'}}" alt="" class="img-responsive img-rounded">


</div>

<div class="col-sm-9">

{!! Form::model($user,['method'=>'PATCH','action' => ['AdminUserController@update', $user->id] , 'files'=>true]) !!}

    <div class="form-group">
         {!!Form::label('name', 'Name')!!}
         {!!Form::text('name')!!}
    </div>

    <div class="form-group row">
         {!!Form::label('email', 'Email')!!}
         {!!Form::email('email')!!}
    </div>

    <div class="form-group  row">
         {!!Form::label('password', 'Password')!!}
         {!!Form::password('password', ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!!Form::label('is_active', 'Status')!!}
        {!!Form::select('is_active', [0 => 'Offline', 1 => 'Online'], null , ['class'=>'form-control'])!!}
    </div>
  
    <div class="form-group">
         {!!Form::label('role_id', 'Role')!!}
         {!!Form::select('role_id',  $roles , null , ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
     {!!Form::label('file', 'file')!!}
     {!!Form::file('photo_id', null )!!}
    </div>
        
            




{!!Form::submit('Create User',['class'=>'btn btn-primary'])!!}
{!! Form::close() !!}

</div>

</div>
<br><br>

<div class="class class-danger">

@include('includes.form-error')

</div>
    
@endsection