<!DOCTYPE html>
<html lang="en">
<head>
  <title>files</title>
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

<h1>This are the students who have send their paper for the 2nd time</h1>
<table id="customers">
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>email</th>
    <th>Phone</th>
    <th>File Name</th>
    
  </tr>
  @foreach ($users as $user)
         <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->uname }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->phone }}</td>
            <td>
             <a href="storage/reuploads/{{ $user->name }}" download="{{ $user->name }}">

              <button type="button" class="btn btn-primary">
                <i class="glyphicon glyphicon-download">
                  Download

                </i></button>
            </a>
           </td>
           
         </tr>
         @endforeach
    
  </tr>
  
  
</table>
</body>
</html>
