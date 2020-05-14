<!DOCTYPE html>
<html lang="en">
<head>
  <title>Reupload file</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>

</head>

<body>
<br>
<nav class="navbar navbar-inverse">

  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">conference</a>
    </div>
    <ul class="nav navbar-nav">
     
     <!--  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#"></a></li>
     
        </ul>
      </li> -->
      <li><a href="/reupload">Reupload</a></li>
      
    <li><a href="/logout">Logout</a></li>
    </ul>

  </div>
</nav>

<body>
	<br />

	<div class="container box">
		 

		@if(count($errors) > 0)
		  <div class="alert alert-danger">
		  	<button type="button" class="close" data-dismiss="alert"></button>
		  	<ul>
		  		@foreach($errors->all() as $error)
		  		<li>{{$error}}</li>
		  		@endforeach
		  	</ul>
		  </div>

		@endif

		@if($message= Session::get('success'))
		  <div class="alert alert-success alert-block">
		  	<button type="button" class="close" data-dissmiss="alert">x</button>
		  	<strong>{{ $message }}</strong>

		@endif

		<h3>Upload Your File </h3>


		<form method="post" action="{{ route('reupload.file')}}" enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="form-group">
				<label>Enter Your Name</label>
				<input type="text" name="uname" class="form-control"/>
			</div>
			<div class="form-group">
				<label>Your Email</label>
				<input type="text" name="email" class="form-control"/>
			</div>

			<div class="form-group">
				<label>Enter Your Phone Number</label>
				<input type="text" name="phone" class="form-control"/>
			</div>



			<div class="form-group">
				<label>Your File </label>
				<input type="file" name="file" class="form-control"/>
			</div> 

			<!-- <div class="form-group">
				<label>enter your message</label>
				<textarea name="message" class="form-control"> </textarea>
				</div> -->

			<div class="form-group">
			<input type="submit" class="btn btn-info"/>
			</div>
			</form>
			</div>		
</body>

</html>