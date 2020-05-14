<!DOCTYPE html>
<html>
<head>
	<title>upload file</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="formcss/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="formcss/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="formcss/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="formcss/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="formcss/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="formcss/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="formcss/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="formcss/vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="formcss/css/util.css">
	<link rel="stylesheet" type="text/css" href="formcss/css/main.css">
<!--===============================================================================================-->
</head>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
	<br>
	<h3>Add your full details and attach your file with your name as file name </h3>
	<div class="container">
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

		<div class="row">
			<form action="{{ route('upload.file')}}" method="post"  class="form-horizontal"enctype="multipart/form-data">
		    		{{csrf_field()}}


        <div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
					<span class="label-input100"> NAME *</span>
					<input class="input100" type="text" name="uname" placeholder="Enter Your Name">
				</div>


				<div class="wrap-input100 validate-input bg1 " data-validate = "Enter Your Email (e@a.x)">
					<span class="label-input100">Email *</span>
					<input class="input100" type="text" name="email" placeholder="Enter Your Email ">
				</div>

				<!-- <div class="wrap-input100 bg1 rs1-wrap-input100"> -->
					<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your phone Number">
					<span class="label-input100">Phone</span>
					<input class="input100" type="text" name="phone" placeholder="Enter Number Phone">
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Address">
					<span class="label-input100"> Address*</span>
					<input class="input100" type="text" name="address" placeholder="Enter Your Address">
				</div>

				<!-- <div class="wrap-input100 bg1 rs1-wrap-input100"> -->
					<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Address">
					<span class="label-input100">state</span>
					<input class="input100" type="text" name="filestate" placeholder="Enter your state">
				</div>
				<!-- <div class="wrap-input100 bg1 rs1-wrap-input100"> -->
				 <div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">	
					<span class="label-input100">Your File *</span>
					<input class="input100" type="file" name="file" placeholder="">
				</div>
			     <input type="submit" class="btn btn-info">
                 </div>

 
</body>
</html>