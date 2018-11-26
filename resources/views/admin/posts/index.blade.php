@extends('layouts.admin')



@section('content')

<h1>Posts</h1>

<br>

<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">User</th>
        <th scope="col">photo</th>
        <th scope="col">Category</th>
        <th scope="col">Title</th>
        <th scope="col">Body</th>
        <th scope="col">Created</th>
        <th scope="col">Updated</th>
      </tr>
    </thead>
    <tbody>

        @if($post)

        @foreach ($post as $posts)
            
        

      <tr>
        <td> {{$posts->id}} </td>
        <td> {{$posts->user->name}} </td>
        <td><img height="50" src="{{$posts->photo ? $posts->photo->file : '/images/Image-not-available_1.jpg'}}" alt="">  </td>
        <td> {{$posts->category->name}} </td>
        <td> {{$posts->title}} </td>
        <td> {{$posts->body}} </td>
        <td> {{$posts->created_at->diffForHumans()}} </td>
        <td> {{$posts->updated_at->diffForHumans()}} </td>
      </tr>
    </tbody>

    @endforeach


    @endif

  </table>








    
@endsection