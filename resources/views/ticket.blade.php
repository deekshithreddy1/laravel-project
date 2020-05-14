<!DOCTYPE html>
<html>
<head>
	<title>upload file</title>
</head>
<body>
	<form class="" action="{{URL::to('/store')}}" enctype="multipart/form-data" method="post">
		<input type="file" name="image" value="">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<br>
		<button type="submit" name="button">upload image </button>
			
	</form>

</body>
</html>