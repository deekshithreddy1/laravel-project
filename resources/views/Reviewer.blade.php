<!DOCTYPE html>
<html lang="en">
<head>
  <title>reviewer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- <style>
    body {
  background: /*#red;*/ linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);
  font-family:"Trebuchet MS",tahoma;
}
  </style> -->

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
      <!-- <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Registrations <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/eventregistrations">eventregistrations</a></li>
           <li><a href="#">2-2</a></li>

        </ul>
      </li> -->




          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Files<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/view2">files</a></li>
          <li><a href="/reuploadfiles2">Reuploaded Files</a></li>
        
        </ul>
      </li>
      
     
      <li><a href="/sendmsg">send message to admin</a></li>

      
      <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->email }} <span class="caret"></span>
                                </a>



                               <!--  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> -->


                                
    <li><a href="/logout">Logout</a></li>


    
    </ul>

  </div>
</nav>
  
<div class="container">
  <h3>welcome </h3>
  <p>You must be previlaged to view this page </p>
</div> 
 

</body>
</html>
