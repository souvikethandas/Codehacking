@extends('layouts.admin')


@section('content')




<h1>Users</h1>

<br>

@if (Session::has('Deleted'))

<p class="bg-danger">{{ session('Deleted') }} </p>
    
@endif

<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Photo</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Role</th>
        <th scope="col">Status</th>
        <th scope="col">Created</th>
        <th scope="col">Updated</th>
      </tr>
    </thead>
    <tbody>

        @if($users)

        @foreach ($users as $user)
            
        

      <tr>
        <td> {{$user->id}} </td>
        <td><img height="50" src="{{$user->photo ? $user->photo->file : '/images/Image-not-available_1.jpg'}}" alt="">  </td>
        <td><a href=" {{route('admin.user.edit', $user->id)}} ">{{$user->name}}</a></td>
        <td> {{$user->email}} </td>
        <td> {{$user->role->name}} </td>
        <td> {{$user->is_active == 1 ? 'Online':'Offline'}} </td>
        <td> {{$user->created_at->diffForHumans()}} </td>
        <td> {{$user->updated_at->diffForHumans()}} </td>
      </tr>
    </tbody>

    @endforeach


    @endif



  </table>









@stop