<!DOCTYPE html>
<html lang="en">
<head>
  <title>Send message</title>
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
      <a class="navbar-brand" href="/reviewer">conference</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/reviewer">Home</a></li>
     <!--  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Registrations <span class="caret"></span></a>
        <ul class="dropdown-menu">
         <!--  <li><a href="/eventregistrations">eventregistrations</a></li> -->
         <!--  <li><a href="#">2-2</a></li> -->

        <!-- </ul>
      </li>
 -->


          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Files<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/view2">files</a></li>
          <li><a href="/reuploadfiles2">Reuploaded Files</a></li>
        
        </ul>
      </li>
     
     <!--  <li><a href="/users">users</a></li>
       <li><a href="#">Add Reviewers</a></li>
      <li><a href="#">Review Papers</a></li>
      <li><a href="#">Final Papers</a></li>

      <li> <a href="/sendemail">Send email Message</a></li> -->
      <li><a href="/sendmsg">send message to admin</a></li>
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
     <h2>Send message to admin </h2>

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

    <form method="post" action="/message">
      {{csrf_field()}}
      <div class="form-group">
        <label>Name of the Person</label>
        <input type="text" name="name" class="form-control"/>
       <!--  <input type="text" name="from" class="form-control"/> -->
      </div>
      <div class="form-group">
        <label>email of the person</label>
        <input type="text" name="email" class="form-control"/>
      </div>
      <div class="form-group">
      <label> form files *</label> 
      <select name="upload">
        <option value="select">SELECT</option>
        <option value="first">from first uploads</option>
        <option value="second">from 2nd uploads</option>
        
      </select>
      </div>
      <div class="form-group">
        <label>enter your message about the paper</label>
        <textarea name="message" class="form-control"> </textarea>
        </div>
        </div>
     <div class="form-group">
        <label>Rating For The Paper</label>
         <select name="percent">
        <option value="select">SELECT</option>
        <option value="10">10</option>
        <option value="9">9</option>
        <option value="8">8</option>
        <option value="7">7</option>
        <option value="7">7</option>
        <option value="6">6</option>
        <option value="5">5</option>
        <option value="4">4</option>
        <option value="3">3</option>
        <option value="2">2</option>
        <option value="1">1</option>
        
      </div>
      <br>

      <div class="form-group">
        <br>
      <input type="submit" name="send" value="Send" class="btn btn-info"/>
      </div>
      </form>
      </div>    
</body>

</html>