@extends('layouts.layout')
@section('content')
<div class="container">
	<h1>Create your cv</h1>
   <form method="POST" action="/cv" enctype="multiple/form-data">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
	@include('cv.form')

   @if(count($errors) > 0)
      <div class="alert-danger">
         <ul>
            @foreach($errors->all() as $error)
               <li> {{ $error }} </li>
            @endforeach
         </ul>
      </div>
   @endif
  </form>
</div>
@stop