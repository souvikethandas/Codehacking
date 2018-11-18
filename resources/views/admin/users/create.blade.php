@extends('layouts.admin')





@section('content')

<h1>Create Users</h1><hr>
<br>

{!! Form::open(['method'=>'POST','action' => 'AdminUserController@store' , 'files'=>true]) !!}

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
        {!!Form::select('is_active', [0 => 'Offline', 1 => 'Online'], 0 , ['class'=>'form-control'])!!}
    </div>
  
    <div class="form-group">
         {!!Form::label('role_id', 'Role')!!}
         {!!Form::select('role_id', [''=>'Choose one'] + $roles , ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
     {!!Form::label('file', 'file')!!}
     {!!Form::file('photo_id')!!}
    </div>
        
            




{!!Form::submit('Create User',['class'=>'btn btn-primary'])!!}
{!! Form::close() !!}

@include('includes.form-error')

    
@endsection