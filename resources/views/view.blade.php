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
<!--       <li><a href="/viewmsgs">Reviewed Papers</a></li> -->
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
  

<h1>This are the people who send the papers</h1>
 <table  id="customers">
         <tr>
           <td>id</td>
            
            <td>Name</td>
            <td>email</td>
           <!--  <td>Phone</td>
             -->
         <!--    <td>address</td> -->
            <!-- <td>state</td> -->
            <td>File Name</td>
            </tr>
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->id }}</td>
            
            <td>{{ $user->uname }}</td>
            <td>{{ $user->email }}</td>
         <!--    <td>{{ $user->phone }}</td>
              
            <td>{{ $user->address }}</td> -->
           <!--  <td>{{ $user->filestate }}</td> -->
           <!--  <td>{{ $user->name }}</td> -->
           <td>
             <a href="storage/upload/{{ $user->name }}" onClick="openTab(this)" download="{{ $user->name }}">

              <button type="button" class="btn btn-primary" target="_blank">
                <i class="glyphicon glyphicon-download">
                  Download

                </i></button>
            </a>
           </td>
         
            
        
         </tr>
         @endforeach
      </table>


</body>
</html>
