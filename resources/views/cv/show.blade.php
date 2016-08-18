@extends('layouts.layout')
@section('content')

<div class="container">
<div class="row">
	<div class="col-md-4">
	<br><br><br>
		<img class="img-responsive img-rounded" src="/img/profile1.jpg" width="300">
	</div>
	<div class="col-md-8">
	  <h2 class="success">{{ $cv->name }}</h2>
	  @if ($signedIn)
	  	<a href="#"><h3 class="text-right success">Edit CV</h3></a>
	  @endif

	  <ul class="nav nav-tabs">
	    <li class="active"><a data-toggle="tab" href="#profile">Profile</a></li>
	    <li><a data-toggle="tab" href="#skills">Skills</a></li>
	    <li><a data-toggle="tab" href="#experience">Experience</a></li>
	    <li><a data-toggle="tab" href="#education">Education</a></li>
	    <li><a data-toggle="tab" href="#portfolio">Portfolio</a></li>
	    <li><a data-toggle="tab" href="#contact">Contact Details</a></li>
	  </ul>

	  <div class="tab-content">
	    <div id="profile" class="tab-pane fade in active">
	      <h3 class="success">Profile</h3>
	      <div>{!! nl2br($cv->about_me) !!}</div><br>
	      <h3 class="success">Personal Particulars</h3>
	      <ul class="">
	      	<li>Name: {{ $cv->name }} </li>
	      	<li>Passport/IC#: {{ $cv->passport }} </li>
	      	<li>Nationality: {{ $cv->nationality }} </li>
	      	<li>Date of Birth: {{ $cv->date_birth }} </li>
	      	<li>Place of Birth: {{ $cv->birth_place }} </li>
	      	<li>Gender: {{ $cv->gender }} </li>
	      </ul>

	    </div>
	    <div id="skills" class="tab-pane fade">
	      <h3 class="success">Skills</h3>
	      <p>
	      <ul class="inline">
	      	<li>  {{ $cv->skill1 }}	</li>
	      	<li>  {{ $cv->skill2 }}	</li>
	      	<li>  {{ $cv->skill3 }}	</li>  
	      	<li>  {{ $cv->skill4 }}	</li>  
	      	<li>  {{ $cv->skill5 }}	</li>  
	      	<li>  {{ $cv->skill6 }}	</li>  
	      	<li>  {{ $cv->skill7 }}	</li>  
	      	<li>  {{ $cv->skill8 }}	</li>  
	      	<li>  {{ $cv->skill9 }}	</li>
	      	<li>  {{ $cv->skill10 }}	</li>       
	      </ul></p>
	    </div>
	    <div id="experience" class="tab-pane fade">
	      <h3>Experience</h3>
	      <h4 class="success">{{ $cv->company_name1 }} </h4>
	      	<p>{{ $cv->job_title1 }} {{ $cv->start_date1 }}   {{ $cv->end_date1 }}  </p>
			<p><div class="">{!! nl2br($cv->job_description1) !!}</div><br></p>
			<br>
			<h4 class="success">{{ $cv->company_name2 }} </h4>
			<p>{{ $cv->job_title2 }}  {{ $cv->start_date2 }}   {{ $cv->end_date2 }}  </p>
			<p><div class="">{!! nl2br($cv->job_description2) !!}</div><br></p> 
	    </div>
	    <div id="education" class="tab-pane fade">
	      <h3 class="success">Education</h3>
	       <p>Uiversity: {{ $cv->uni_name }} - {{ $cv->grad_year }}, <br>
	       {{ $cv->course }} (CGPA: {{ $cv->CGPA }})</p>
	    </div>
	    <div id="portfolio" class="tab-pane fade">
	      <h3>Portfolio</h3>
	      @foreach($cv->photos as $photo)
	      	<img src="{{ $photo->path }}" alt="" height="200" width="200" class="image-responsive">
	      @endforeach
	    </div>
	    <div id="contact" class="tab-pane fade">
	      <h3>Contact Details</h3>
	      <p>Tel: {{ $cv->telephone}}</p>
			<p>E-mail address: {{ $cv->email_address }}</p>
	    </div>
	  </div>

	  <br>
	  <br>
	  @if($signedIn)
	  <h2 class="">Add Your Portfolio Photos</h2>
	 <form id="ddPhotosForm" 
	  action="{{ route('store_photo_path', [$cv->passport, $cv->name]) }}"
	  method="POST" 
	  class="dropzone">
	  	{{ csrf_field() }} 
	  </form> 
	  @endif
	 </div>
</div>
</div>
@stop

@section('footer')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
	<script>
		Dropzone.options.addPhotosForm = {
			paramName: 'file',
			maxFilesize: 3,
			acceptedFiles: '.jpg, .jpeg, .png, .bmp'

		}
	</script>
@stop