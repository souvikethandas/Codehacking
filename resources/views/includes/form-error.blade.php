@if(count($errors) > 0)

@foreach ($errors->all() as $error)

<div class="alert alert-danger">

<ul>

     <li>
          {{$error}}
     </li>

</ul>

</div>
    
@endforeach

@endif
