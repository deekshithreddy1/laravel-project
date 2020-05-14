<!DOCTYPE html>
<html lang="en">
<head>
  <title>admin</title>
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
      <a class="navbar-brand" href="/admin">conference</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/admin">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Registrations <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/eventregistrations">eventregistrations</a></li>
           <li><a href="event_payment">event payment</a></li> 

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
      <li><a href="/users">Users</a></li>
      <li><a href="/roleupdate">Add Reviewers</a></li>
      <!-- <li><a href="/viewmsgs">Reviewed papers</a></li>
 -->      <li><a href="/viewmsg3">Final Papers</a></li>

      <li> <a href="/sendemail">Send email Message</a></li>
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
  <p>Navigate through the above columns you will find the list of event registrations,number of users & the files send by the students </p>
</div> 
<footer class="page-footer font-small special-color-dark pt-4">

  <!-- Footer Elements -->
  <div class="container">

    <!--Grid row-->
    <div class="row">

      <!--Grid column-->
      <div class="col-md-6 mb-4">

        <!-- Form -->
        <form class="form-inline">
          <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search"
            aria-label="Search">
          <i class="fas fa-search" aria-hidden="true"></i>
        </form>
        <!-- Form -->

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-md-6 mb-4">

        <form class="input-group">
          <input type="text" class="form-control form-control-sm" placeholder="Your email"
            aria-label="Your email" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-sm btn-outline-white my-0" type="button">Sign up</button>
          </div>
        </form>

      </div>
      <!--Grid column-->

    </div>
    <!--Grid row-->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->


</body>
</html>
