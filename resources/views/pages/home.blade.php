@extends('layouts.layout')
@section('content')
    <div class="jumbotron">
      <div class="container">
        <h1 class="lead">Make Your CV Available for Businesses!</h1>
        <p>Your CV is the first chance you get to make a good impression on a potential employer. A top-quality CV will considerably boost your chance of getting a face-to-face interview, so it is worth spending time and effort on the content and presentation.</p>
        <center><p><a class="btn btn-success btn-lg" href="/cv/create" role="button">Create CV</a></p></center>
      </div>
    </div>
      <br>
      <div class="container">
      	<h1 class="text-center success">Our Services</h1>
     	 <div class="row">
      		<div class="col-md-4 text-center">
      			<h2 class="text-center">Online Presence</h2>
      			<img class="img-rounded img-responsive" src="/img/office1.jpg" height="300" width="300"><br>
      			<p class="text-center">Build your professional identity online and stay connected with opportunities.</p>
      		</div>
      		<div class="col-md-4 text-center">
      			<h2 class="text-center">Your Personal Page</h2>
      			<img class="img-rounded img-responsive" src="/img/onl.jpg" height="300" width="300"><br>
      			<p class="text-center">Log in to your personal page and apply to companies that match you.</p>
      		</div>
      		<div class="col-md-4 text-center">
      			<h2>Jobs</h2>
      			<img class="img-rounded img-responsive" src="/img/meet.jpg" height="300" width="300"><br>
      			<p class="text-center">Company listing section coming soon!</p>
      		</div>
      	</div>
    </div>
    <br><br><br><br>
@endsection

@section('footer')
<!-- <script src="{{ asset('/js/libs.js') }}"></script>
    <script type="text/javascript">
        swal({   title: "Error!",   text: "Here's my error message!",   type: "error",   confirmButtonText: "Cool" });
    </script> -->
@stop
