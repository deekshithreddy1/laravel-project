
<!DOCTYPE html>
<html lang="en">
<head>
  <title>send email</title>
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

.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 20px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>

</head>

<body>
<br>
<nav class="navbar navbar-inverse">

  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/admin">conference</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/admin">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Registrations <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/eventregistrations">eventregistrations</a></li>
         <!--  <li><a href="#">2-2</a></li> -->

        </ul>
      </li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Files<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/viewfiles">files</a></li>
          <li><a href="/reuploadfiles">Reuploaded Files</a></li>
        
        </ul>
      </li>

      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Reviewed Papers<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/viewmsgs">first folder</a></li>
          <li><a href="/viewmsg2">second folder</a></li>
        
        </ul>
      </li>
      
      <li><a href="/users">users</a></li>
       <li><a href="/roleupdate">Add Reviewer</a></li>
      <!-- <li><a href="/viewmsgs">Reviewed Papers</a></li> -->
      <li><a href="/viewmsg3">Final Papers</a></li>

      <li> <a href="/sendemail">Send email Message</a></li>
       <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->email }} <span class="caret"></span>
                                </a>

    <li><a href="/logout">Logout</a></li>
    </ul>

  </div>
</nav>

<body>

	<br />
	<div class="container box">
		 <h2>Send Email to the user about About  the review</h2>

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


		<form method="post" action="{{url ('sendemail/send')}}">
			{{csrf_field()}}
			<div class="form-group">
				<label>enter person name</label>
				<input type="text" name="name" class="form-control"/>
			</div>
			<div class="form-group">
				<label>send email to</label>
				<input type="text" name="email" class="form-control"/>
			</div>
			<div class="form-group">
				<label>enter your message</label>
				<textarea name="message" class="form-control"> </textarea>
				</div>

			<div class="form-group">
			<input type="submit" name="send" value="Send" class="button"/>
			</div>
			</form>
			</div>		
</body>

</html>