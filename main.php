<?php

$username = "root";
$password = "root";
$hostname = "Local instance 3306"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";


mysqli_close($dbhandle);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Main</title>
<meta charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="booksense.js"></script>
  <link rel="stylesheet" type="text/css" href="booksense.css">
</head>

<body>

<!-- container that holds the bootstrap -->
	<div class="container">
    <!-- beginning of top navigation bar -->	
    <nav class="navbar navbar-inverse navbar-fixed-top">
 			<div class="container-fluid">
  				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbarTop">
       			<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span> 
      			</button>
    		<div>
     <div class="collapse navbar-collapse" id="myNavbarTop">
      <ul class="nav navbar-nav">
      	<li><a href="#">Library</a></li>
        <li><a href="#">Current Read</a></li>
        <li><a href="#">Read Queue</a></li>
        <li><a href="#">Recent Downloads</a></li> 
        <li><a href="#">Categories</a></li> 
      </ul>
       <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div> 
</nav>

<!-- beginning of the middle (library information). -->
<div class="chest">
<div class="col-sm-12 col-md-12 col-lg-12">
</p>           
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Book Title</th>
        <th>Author(s)</th>
        <th>Genre</th>
        <th>Pages</th>
        <th>Progress</th>
      </tr>
    </thead>
    <tbody>
    <!-- FIRST ROW -->
      <tr>
        <td>	<a href="#demo"  data-toggle="collapse">The Huey P. Newton Reader</a>	</td>
        <td>	Hillard, David	</td>
        <td><b>Black History</b></td>
        <td>	828/1036	</td>
        <td>	<div class="progress">
    				<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%"> 
      	80% Complete	</td>
  
      </tr >
      
     <!-- SECOND ROW --> 
     <tr class="scene">
     	<td class="panel-body" colspan=5>  <div id="demo" class="collapse" >
        <div id="second">
    <object data="database/The Huey P. Newton Reader.pdf#" type="application/pdf" width="100%" height="100%" internalinstanceid="3"></object>

  </div> </td>
     </tr>
     
      <!-- THIRD ROW -->
      <tr>
        <td><a href="#demo2" data-toggle="collapse">Fitness for Everyone</a>
        <p></td>
        <td>Fitness USA</td>
        <td><b>Health & Fitness</b></td>
        <td>187/468</td>
        <td><div class="progress">
    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
      40% Complete</td>
      </tr>
    
    <!-- FOURTH ROW -->
    <tr class="scene">
     	<td colspan=5>  <div id="demo2" class="collapse">
         <div id="second">
   <object data="database/Fitness_USA_2014-10.pdf#" type="application/pdf" width="100%" height="100%" internalinstanceid="3"></object></div></td>
     </tr>
       
     <!-- FIFTH ROW -->
      <tr>
        <td><a href="#demo3" data-toggle="collapse">The Master Cleanser</a></td>
        <td>Burroughs, Stanley</td>
        <td><b>Health & Fitness<b></td>
        <td>71/710</td>
        <td><div class="progress">
    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width:10%">
      10% Complete</td>
      </tr>
      
      <!-- SIXTH ROW -->
      <tr class="scene">
     	<td colspan=5>  <div id="demo3" class="collapse">
         <div id="second">
     <object data="database/Stanley Burroughs - The Master Cleanser.pdf#" type="application/pdf" width="100%" height="100%" internalinstanceid="3"></object></div></td>
     </tr>
    </tbody>
  </table>
</div>

</div>

<div>
	<p>Search: <textarea> Search </textarea></p>
</div>

<!-- beginning of fixed-bottom -->
	<nav class="navbar navbar-inverse navbar-fixed-bottom">
  <div class="container-fluid">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbarBottom">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
    <div>
          <div class="collapse navbar-collapse" id="myNavbarBottom">
            <ul class="nav navbar-nav">
           	
        <li class="dropup">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Notes/Thoughts<span class="caret"></span></a>
 			<ul class="dropdown-menu">
        	<li><a href="#"><span class="glyphicon glyphicon-align-left"></span></a></li>
            <li><a href="#"><span class="glyphicon glyphicon-align-right"></span></a></li>
            <li><a href="#"><span class="glyphicon glyphicon-list-alt"></span></a></li>
        </ul>
        </li>
        
         <li class="dropup"><a href="#" class="dropdown-toggle" data-toggle="dropdown">bookmarks<span class="caret"></span></a>
         	<ul class="dropdown-menu">
        	<li><a href="#">Book 1</a></li>
            <li><a href="#">Book 2</a></li>
            <li><a href="#">Book 3</a></li>
        </ul>
        </li>
         </li>
         
        <li class="dropup"><a href="#" class="dropdown-toggle" data-toggle="dropdown">highlighter<span class="caret"></span></a>
        	<ul class="dropdown-menu">
        	<li><a href="#">Circle</a></li>
            <li><a href="#">Highlighter (Yellow/Green)</a></li>
            <li><a href="#">Corrections (Red)</a></li>
        </ul>
        </li> 
        
        <li class="dropup"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Reference<span class="caret"></span></a>
        	<ul class="dropdown-menu">
        	<li><a href="#">Dictionary</a></li>
            <li><a href="#">Thesaurus</a></li>
            <li><a href="#">Atlas</a></li>
        </ul>
        </li> 
      </ul>
      </li>
       <ul class="nav navbar-nav navbar-right">
      </ul>
    </div>
  </div>
</nav>
	</div>

</body>
</html>
