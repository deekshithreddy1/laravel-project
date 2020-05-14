<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Event Registration Form</title>
<link rel="stylesheet" href="css/style.css">
  
</head>

<body>
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
    
    <section class="register">
      <h1>Register for event</h1>
      <form method="post" action="/create">
        {{csrf_field()}}
      <div class="reg_section personal_info">
      <h3>Your Personal Information</h3>
      <label> Your Name * </label>
      <input type="text" name="name" value="" placeholder="Your Name">
      <label> Email * </label>      
     <input type="text" name="email" value="" placeholder="Your E-mail Address">
      <label> Phone Number * </label>
     <input type="text" name="phone" value="" placeholder="Your phone number">
      <label> Gender *</label> 
      <select name="gender">
        <option value="0">SELECT</option>
        <option value="Male">Male</option>
        <option value="female">female</option>
        <option value="other">other</option>
      </select>
      </div>
     <div class="reg_section college_info">
      <h3>Your College information(if you are not a student  don't fill college details)</h3>
      <label>Your College</label>
      <input type="text" name="college" value="" placeholder="Your college Name">	
	<label>Hallticket Number</label>
     <input type="text" name="hallticket" value="" placeholder="Your Hallticket Number">
      </div>
      <h3>Your Course</h3>
       
      <select name="department">
        <option value="0">SELECT</option>
        <option value="computer science">computer science</option>
        <option value="Electronics and Communication Engineering">Electronics and Communication Engineering</option>
        <option value="Electrical and Electronic Engineering">Electrical and Electronic Engineering</option>
        <option value="Civil">Civil</option>
        <option value="Mechanical Engineering">Mechanical Engineering</option>
        <option value="IT">IT</option>
        <option value="other">other</option>
      </select>
      <div class="reg_section address">
      <h3>Your Address *</h3>
      <label> Your City *</label>
      <input type="text" name="city" value="" placeholder="Your City">
      <label> Your district *</label>
      <input type="text" name="district" value="" placeholder="Your District">
     <label> Your state *</label>      
      <select name="state">
        <option value="0"> SELECT</option>
        <option value="Telangana">Telangana</option>
        <option value="Andhra Pradesh">Andhra Pradesh</option>
        <option value="Tamilnadu">Tamilnadu</option>
        <option value="Kerala">Kerala</option>
      </select>
      <label> Amount to be paid</label>      
      <select name="payment">
        <option value="500">500</option>
        </select>
      </div>
     
      
      <p class="terms">
        <label>
          <input type="checkbox" name="checkbox" id="remember_me">
           I accept Terms & Condition
        </label>
      </p>
      <p class="submit"><input type="submit" name="commit" value="registers"></p>
      </form>
    </section>
  </div>

  

</body>
</html>