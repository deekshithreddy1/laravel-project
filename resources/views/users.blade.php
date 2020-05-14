<!DOCTYPE html>
<html lang="en">
<head>
  <title>Users</title>
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

body {
  background: /*#red;*/ linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);
  font-family:"Trebuchet MS",tahoma;
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
footer {
  text-align: center;
  padding: 3px;
  background-color: DarkSalmon;
  color: white;
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
          <!-- <li><a href="/viewfiles">files</a></li> -->

        </ul>
      </li>




          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Files<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/viewfiles">files</a></li>
          <li><a href="/reuploadfiles">Reuploaded Files</a></li>
        
        </ul>
      </li><li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Reviewed Papers<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/viewmsgs">first folder</a></li>
          <li><a href="/viewmsg2">second folder</a></li>
        
        </ul>
      </li>
     
      <li><a href="/users">users</a></li>
       <li><a href="/roleupdate">Add Reviewers</a></li>
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
<h1>Theses are the students who have registered for our website</h1>
<table id="customers">
  <tr>
    <th>Id</th>
    <th>Name</th>
     <!-- <th>Role</th> -->
    <th>email</th>
    <th>Phone</th>
    <th>College</th>
    <th>Address</th>
    

  </tr>
  @foreach ($users as $user)
         <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <!-- <td>{{ $user->role }}</td> -->
            <td>{{ $user->email }}</td>
            <td>{{ $user->phone }}</td>
            <td>{{ $user->college }}</td>
            <td>{{ $user->address }}</td>

         </tr>
         @endforeach
    
  </tr>
  
  
</table>
 <!-- <footer>
  <p> Designed and develope by<br>
  <a href="#">Deekshith Reddy</a></p>
</footer> -->

</body>
</html>
