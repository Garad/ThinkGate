@extends('layouts.layout')
@section('content')
<div class="container">
	<h1 class="primary">Contact Us</h1>
	<div class="row"><br>
	<p>Please Email me at faaqir1@gmail.com</p>
	<h3 class="text-center">Send Us a Message</h3>
		<form>
		<div class="col-md-4">
			<input type="text" name="name" class="form-control" placeholder="Name">
		</div>
		<div class="col-md-4">
			<input type="email" name="email" class="form-control" placeholder="Email">
		</div>
		<div class="col-md-4">
			<input type="text" name="subject" class="form-control" placeholder="Subject">
		</div>
		<div class="row">
		<div class="container">
		<div class="col-md-12"><br>
			<textarea class="form-control" placeholder="Write your message here" rows="4" cols="50"></textarea><br>
			<button class="btn btn-lg btn-primary center-block">Send</button>
		</div>
		</div>
		</form>
	</div>
</div>
@stop